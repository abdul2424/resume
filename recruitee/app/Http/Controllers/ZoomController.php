<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
class ZoomController extends Controller
{

    public function __construct()
    {

    }
    //++++++++++++++++++++++++++++++++++++++++++++++++
    //++++++++++++++++++++++++++++++++++++++++++++++++
    public function index(Request $request)
    {
        if (!$request->code) {
            $this->get_oauth_step_1();
        } else {
            // Step 2 - Get OAuth token
            $getToken = $this->get_oauth_step_2($request->code);

            // Create a Zoom meeting
            $get_zoom_details = $this->create_a_zoom_meeting($request, [
                'topic' => 'Interview With Code-180',
                'start_time' => now()->toIso8601String(),
                'agenda' => "We are having an interview with @code-180",
                'jwtToken' => $getToken['access_token'],
            ]);

            if (!$get_zoom_details['success']) {
                return back()->with('error', $get_zoom_details['msg']);
            }

            // Get the organization ID from session
            $orgId = $request->session()->get('orgId');

            // Update or create the Zoom meeting
            $meeting = $this->updateZoomMeeting($orgId, $get_zoom_details);

            // Log meeting details for debugging
            \Log::info('Meeting Details', ['meeting' => $meeting]);

            // If the user is logged in, get related user info
            if ($request->session()->has('FRONT_USER_ID')) {
                $uid = $request->session()->get('FRONT_USER_ID');
                $total_jobs = DB::table('employer')->where('uid', $uid)->get();
                $total_jobs_count = $total_jobs->count();
                $users = DB::table('users')->where('id', $uid)->first();
            }

            return redirect('/profile');
        }
    }

    // This method checks for an existing meeting and updates/creates a meeting accordingly
    private function updateZoomMeeting($orgId, $zoomDetails)
    {
        $uid = null;

        if (session()->has('FRONT_USER_ID')) {
            $uid = session()->get('FRONT_USER_ID');
        }
        $user = DB::table('users')->where('id', $uid)->first();
        $candidate_email = $user ? $user->email : '';
        
        $arr = [
            "orgId" => $orgId, // Ensure orgId is provided for insertion
            "uid" => $uid,
            "host_url" => $zoomDetails['response']['start_url'],
            "candidate_url" => $zoomDetails['response']['join_url'],
            "topic" => $zoomDetails['response']['topic'],
            "start_time" => $zoomDetails['response']['start_time'],
            "timezone" => $zoomDetails['response']['timezone'],
            "host_email" => $zoomDetails['response']['host_email'],
            "candidate_email" => $candidate_email,
        ];

        // Check if a meeting exists for this orgId
        $existingMeeting = DB::table('zoom_meetings')->where('orgId', $orgId)->first();

        if ($existingMeeting) {
            // If a meeting exists, update it with the new details
            DB::table('zoom_meetings')->where('orgId', $orgId)->update($arr);
        } else {
            // If no meeting exists, create a new one
            DB::table('zoom_meetings')->insert($arr);
        }

        // Return the updated or newly created meeting
        return DB::table('zoom_meetings')->where('orgId', $orgId)->first();
    }

    private function create_a_zoom_meeting($request, $meetingConfig = [])
    {
        $uid = $request->session()->get('FRONT_USER_ID');
        $orgId = $request->session()->get('orgId');
      
        // Check if meeting data exists in the DB for this user and orgId
        $meetingData = DB::table('zoom_meetings')
            ->where('uid', $uid)
            ->where('orgId', $orgId)
            ->first();

        // If meeting data doesn't exist, set default values from $meetingConfig
        $topic = $meetingData ? $meetingData->topic : ($meetingConfig['topic'] ?? 'Default Topic');
        $start_time = $meetingData ? $meetingData->start_time : ($meetingConfig['start_time'] ?? now()->toIso8601String());
        $timezone = $meetingData ? $meetingData->timezone : ($meetingConfig['timezone'] ?? 'UTC');
        $agenda = $meetingData ? $meetingData->agenda : ($meetingConfig['agenda'] ?? 'Default Agenda');
        $host_email = $meetingData ? $meetingData->host_email : ($meetingConfig['host_email'] ?? '');

        $requestBody = [
            'topic'      => $topic,
            'type'       => $meetingConfig['type'] ?? 2, // Default to scheduled meeting
            'start_time' => $start_time,
            'duration'   => $meetingConfig['duration'] ?? 30,
            'password'   => $meetingConfig['password'] ?? mt_rand(),
            'timezone'   => $timezone,
            'agenda'     => $agenda,
            'host_email' => $host_email,
            'settings'   => [
                'host_video'        => false,
                'participant_video' => true,
                'cn_meeting'        => false,
                'in_meeting'        => false,
                'join_before_host'  => true,
                'mute_upon_entry'   => true,
                'watermark'         => false,
                'use_pmi'           => false,
                'approval_type'     => 0,
                'registration_type' => 0,
                'audio'             => 'voip',
                'auto_recording'    => 'none',
                'waiting_room'      => false,
            ],
        ];

        // Send API request to create a Zoom meeting
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // Skip SSL Verification
        curl_setopt_array($curl, array(
            CURLOPT_URL            => "https://api.zoom.us/v2/users/me/meetings",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => json_encode($requestBody),
            CURLOPT_HTTPHEADER     => array(
                "Authorization: Bearer " . $meetingConfig['jwtToken'],
                "Content-Type: application/json",
                "cache-control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        $err      = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return [
                'success'  => false,
                'msg'      => 'cURL Error #:' . $err,
                'response' => null,
            ];
        } else {
            return [
                'success'  => true,
                'msg'      => 'success',
                'response' => json_decode($response, true),
            ];
        }
    }

    private function get_oauth_step_1()
    {
        $redirectURL  = 'https://recruitee.test/zoom-meeting-create';
        $authorizeURL = 'https://zoom.us/oauth/authorize';
        $clientID     = env("ZOOM_CLIENT_ID");
        $clientSecret = env("ZOOM_CLIENT_SECRECT");
        $authURL = $authorizeURL . '?client_id=' . $clientID . '&redirect_uri=' . $redirectURL . '&response_type=code&scope=&state=xyz';
        header('Location: ' . $authURL);
        exit;
    }

    private function get_oauth_step_2($code)
    {
        $tokenURL    = 'https://zoom.us/oauth/token';
        $redirectURL = 'https://recruitee.test/zoom-meeting-create';
        $clientID     = env("ZOOM_CLIENT_ID");
        $clientSecret = env("ZOOM_CLIENT_SECRECT");

        $curl   = curl_init();
        $params = array(CURLOPT_URL => $tokenURL . "?code=" . $code
            . "&grant_type=authorization_code"
            . "&client_id=" . $clientID
            . "&client_secret=" . $clientSecret
            . "&redirect_uri=" . $redirectURL,
            CURLOPT_RETURNTRANSFER      => true,
            CURLOPT_MAXREDIRS           => 10,
            CURLOPT_TIMEOUT             => 30,
            CURLOPT_HTTP_VERSION        => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST       => "POST",
            CURLOPT_NOBODY              => false,
            CURLOPT_HTTPHEADER          => array(
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
                "accept: *",
            ),
        );
        curl_setopt_array($curl, $params);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response, true);
        return $response;
    }
}