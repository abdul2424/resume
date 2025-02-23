<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Crypt;

use Illuminate\Support\Facades\DB; // Import DB facade


use Illuminate\Support\Facades\Mail;

class RecruitersController extends Controller
{

    public function user_register(Request $req)
    {
        $valid = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'user_type' => 'required',
            'confirm_password' => 'required|same:password',
        ], [
            'confirm_password.same' => 'The password confirmation does not match.',
        ]);

        if (!$valid->passes()) {
            return response()->json(['status' => 'error', 'msg' => $valid->errors()->toArray()]);
        } else {
            $existingUser = DB::table('users')->where('email', $req->email)->first();

            if ($existingUser) {
                return response()->json(['status' => 'error', 'msg' => ['email' => ['The email address is already registered.']]]);
            }

            // Insert user and get the ID
            $user_id = DB::table('users')->insertGetId([
                "name" => $req->name,
                "email" => $req->email,
                "password" => bcrypt($req->password),
                "status" => 1,
                "type" => $req->user_type,
            ]);

            return redirect()->route('otp.send', ['id' => $user_id]);
        }
    }


    public function sendOtp($id)
    {

        try {
            // Fetch the user by ID
            $user = DB::table('users')->where('id', $id)->first();


            // Delete existing OTP entry for this email
            DB::table('otp')->where('email', $user->email)->delete();

            // Generate a 6-digit OTP
            $otp = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

            DB::table('otp')->insert([
                'email' => $user->email,
                'otp' => $otp,
            ]);

            $mailData = [
                'title' => 'Mobile User - Request OTP Verification',
                'name' => $user->name,
                'otp' => $otp,
            ];

            // Send OTP email
            Mail::to($user->email)->send(new DemoMail($mailData));

            // Return OTP verification view
            return view('frontend.verifyotp')->with('user', $user);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function verifyOtp(Request $request)
    {
        $otp = DB::table('otp')
            ->where('otp', $request->otp)
            ->where('email', $request->email)
            ->first();
    
        if ($otp) {
            // Delete the OTP record
            DB::table('otp')
                ->where('otp', $request->otp)
                ->where('email', $request->email)
                ->delete();
    
            return redirect('/login')->with('success', 'OTP Verified Successfully');
        } else {
            return redirect()->back()->with('error', 'OTP not matched');
        }
    }
    




    public function user_login(Request $req)
    {
        $result = DB::table('users')
            ->where(['email' => $req->email])
            ->get();
        $msg = "";
        if (isset($result[0])) {
            // $status = $result[0]->status;
            // if ($status == 0) {
            //     return redirect('/login');
            // }
            if (password_verify($req->password, $result[0]->password)) {
                $req->session()->put('FRONT_USER_LOGIN', true);
                $req->session()->put('FRONT_USER_ID', $result[0]->id);
                $req->session()->put('FRONT_USER_NAME', $result[0]->name);
                $status = "success";
                return redirect('/profile');
            } else {
                $status = "error";
                $msg = "Invalid Password";
            }
        } else {
            $status = "error";
            $msg = "Invalid Email";
            return redirect('/login');
        }
    }


    public function user_org(Request $req)
    {
        // Validate the incoming request data
        $validatedData = $req->validate([
            'tittle' => 'required|string',
            'location' => 'required|string',
            'job_category' => 'required|string',
            'job_sub_category' => 'required|string',
            'job_desc' => 'required|string',
            'job_type' => 'required|array',
            'marital_status' => 'required|string',
            'experience' => 'required|integer',
            'salary' => 'required|integer',
            'discipline' => 'required|string',
            'discipline_category' => 'required|string',
            'skills' => 'required|string',
        ]);

        // Extract job types from the request
        $jobTypes = implode(', ', $req->job_type);

        // Check if the user is logged in
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');

            // Process the form data and save it to the database
            $arr = [
                "uid" => $uid,
                "tittle" => $validatedData['tittle'],
                "location" => $validatedData['location'],
                "job_category" => $validatedData['job_category'],
                "job_sub_category" => $validatedData['job_sub_category'],
                "job_desc" => $validatedData['job_desc'],
                "job_type" => $jobTypes,
                "marital_status" => $validatedData['marital_status'],
                "experience" => $validatedData['experience'],
                "salary" => $validatedData['salary'],
                "discipline" => $validatedData['discipline'],
                "discipline_category" => $validatedData['discipline_category'],
                "skills" => $validatedData['skills'],
            ];

            // Insert data into the 'employer' table
            $query = DB::table('employer')->insert($arr);

            // Check if the insertion was successful
            if ($query) {
                // Redirect the user to a success page or perform any other action
                $billing = DB::table('users')
                    ->where(['id' => $uid])
                    ->first();
                if ($billing->status_paid == 1) {
                    $data = ['name' => $billing->name];
                    $user['to'] = $billing->email;
                    Mail::send('job_success', $data, function ($messages) use ($user) {
                        $messages->to($user['to']);
                        $messages->subject('Job Success');
                    });
                    return redirect('/');
                } else {
                    return redirect('/plan');
                }
            } else {
                // Redirect the user back with an error message if insertion failed
                return redirect()->back()->with('error', 'Failed to insert data.');
            }
        } else {
            // Handle the case where the user is not logged in
            return redirect()->back()->with('error', 'User is not logged in.');
        }
    }


    public function profile(Request $req)
    {
        $total_jobs = []; // Initialize total_jobs array
        $total_jobs_count = 0; // Initialize total_jobs_count variable
        $users = null; // Initialize users variable
        $meetings = []; // Initialize meetings array

        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');

            // Retrieve total jobs and count
            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->get();
            $total_jobs_count = $total_jobs->count();

            // Retrieve user details
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();

            // Retrieve meetings for each job
            foreach ($total_jobs as $job) {
                $job->meetings = DB::table('zoom_meetings')
                    ->where('orgId', $job->id)
                    ->get();
            }
        }

        // Pass variables to the view
        return view('profile', compact('total_jobs', 'total_jobs_count', 'users', 'meetings'));
    }


    public function cand_profile(Request $req)
    {
        $total_jobs = []; // Initialize total_jobs array
        $total_jobs_count = 0; // Initialize total_jobs_count variable
        $users = null; // Initialize users variable
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');

            // Retrieve total jobs and count
            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->get();
            $total_jobs_count = $total_jobs->count();

            // Retrieve user details
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();
            $candidate_certification = DB::table('candidate_certification')
                ->where('user_id', $uid)
                ->first();
            $candidate_experience = DB::table('candidate_experience')
                ->where('user_id', $uid)
                ->first();
            $candidate_reg = DB::table('candidate_reg')
                ->where('user_id', $uid)
                ->first();
            $candidate_skill = DB::table('candidate_skill')
                ->where('user_id', $uid)
                ->first();
        }

        // Pass variables to the view
        return view('cand_profile', compact('total_jobs', 'total_jobs_count', 'users', 'candidate_certification', 'candidate_experience', 'candidate_reg', 'candidate_skill'));
    }

    public function profile_for_cand(Request $req)
    {
        $total_jobs = []; // Initialize total_jobs array
        $total_jobs_count = 0; // Initialize total_jobs_count variable
        $users = null; // Initialize users variable
        $uid = $req->id;
        $orgId = request()->query('orgId');
        if ($orgId) {
            $req->session()->put('orgId', $orgId);
        }
        $meetingData = DB::table('zoom_meetings')
            ->where('orgId', $orgId)
            ->first();
        // dd($meetingData);
        // Retrieve total jobs and count
        $total_jobs = DB::table('employer')
            ->where('uid', $uid)
            ->get();
        $total_jobs_count = $total_jobs->count();

        // Retrieve user details
        $users = DB::table('users')
            ->where('id', $uid)
            ->first();
        $candidate_certification = DB::table('candidate_certification')
            ->where('user_id', $uid)
            ->first();
        $candidate_experience = DB::table('candidate_experience')
            ->where('user_id', $uid)
            ->first();
        $candidate_reg = DB::table('candidate_reg')
            ->where('user_id', $uid)
            ->first();
        $candidate_skill = DB::table('candidate_skill')
            ->where('user_id', $uid)
            ->first();


        // Pass variables to the view
        return view('profile_of_cand', compact('orgId', 'meetingData', 'total_jobs', 'total_jobs_count', 'users', 'candidate_certification', 'candidate_experience', 'candidate_reg', 'candidate_skill'));
    }

    public function plan(Request $req)
    {
        $users = null; // Initialize users variable
        $total_jobs_count = 0;
        $charges = null;
        $plan = null;
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');

            // Retrieve user details
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();
            $plan = DB::table('plans')
                ->get();

            $charges = DB::table('charges')
                ->where('user_id', $uid)
                ->first();

            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->get();
            $total_jobs_count = $total_jobs->count();
        }
        // Pass variables to the view
        return view('plan', compact('users', 'total_jobs_count', 'plan', 'charges'));
    }


    public function candidate_reg(Request $request)
    {
        $firstName = $request->input('firstName');
        $middleName = $request->input('middleName');
        $lastName = $request->input('lastName');
        $cnic = $request->input('cnic');
        $fname = $request->input('fname');
        $dob = $request->input('dob');
        $nationality = $request->input('nationality');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $religon = $request->input('religon');
        $section = $request->input('section');
        $address = $request->input('address');

        $users = null;
        if ($request->session()->has('FRONT_USER_ID')) {
            $uid = $request->session()->get('FRONT_USER_ID');
            $query = DB::table('candidate_reg')->insert([
                "user_id" => $uid,
                "first_name" => $firstName,
                "middle_name" => $middleName,
                "last_name" => $lastName,
                "cnic" => $cnic,
                "father_name" => $fname,
                "dob" => $dob,
                "nationality" => $nationality,
                "phone" => $phone,
                "email" => $email,
                "gender" => $gender,
                "religion" => $religon,
                "section" => $section,
                "address" => $address,
            ]);

            // Check if data insertion was successful
            if ($query) {
                return response()->json(['status' => 'success', 'msg' => 'Personal reqistration Added Successfully']);
            } else {
                return response()->json(['status' => 'error', 'error' => 'Personal reqistration Not Added']);
            }
        }
    }

    public function candidate_certificate(Request $request)
    {
        $school = $request->input('school');
        $degreeStarted = $request->input('degreeStarted');
        $degreeCompletion = $request->input('degreeCompletion');
        $degree = $request->input('degree');
        $subCategory = $request->input('subCategory');
        $qualificationDescription = $request->input('qualificationDescription');

        // Check if the user is logged in
        if ($request->session()->has('FRONT_USER_ID')) {
            // Get the user ID from the session
            $uid = $request->session()->get('FRONT_USER_ID');

            // Insert certificate details into the database
            $query = DB::table('candidate_certification')->insert([
                "user_id" => $uid,
                "school" => $school,
                "started_date" => $degreeStarted,
                "completed_date" => $degreeCompletion,
                "degree" => $degree,
                "area" => $subCategory,
                "description" => $qualificationDescription,
            ]);

            // Check if data insertion was successful
            if ($query) {
                return response()->json(['status' => 'success', 'msg' => 'Certificate details added successfully']);
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to add certificate details']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }

    public function candidate_experience(Request $request)
    {
        $company = $request->input('company');
        $city = $request->input('city');
        $country = $request->input('country');
        $degree = $request->input('degree');
        $startedDate = $request->input('startedDate');
        $completedDate = $request->input('completedDate');
        $description = $request->input('description');

        // Check if the user is logged in
        if ($request->session()->has('FRONT_USER_ID')) {
            // Get the user ID from the session
            $uid = $request->session()->get('FRONT_USER_ID');

            // Insert experience details into the database
            $query = DB::table('candidate_experience')->insert([
                "user_id" => $uid,
                "company" => $company,
                "city" => $city,
                "country" => $country,
                "degree" => $degree,
                "started_date" => $startedDate,
                "completed_date" => $completedDate,
                "description" => $description,
            ]);

            // Check if data insertion was successful
            if ($query) {
                return response()->json(['status' => 'success', 'msg' => 'Experience details added successfully']);
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to add experience details']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }


    public function candidate_skill(Request $request)
    {
        $jobTitle = $request->input('jobTitle');
        $workLocation = $request->input('workLocation');
        $company = $request->input('company');
        $jobTypes = $request->input('job_type');
        $salary = $request->input('salary');
        $resume = $request->input('resume');
        $skills = $request->input('skills');

        // Check if the user is logged in
        if ($request->session()->has('FRONT_USER_ID')) {
            // Get the user ID from the session
            $uid = $request->session()->get('FRONT_USER_ID');
            $jobTypeString = implode(',', $jobTypes);
            // Insert skill details into the database
            $query = DB::table('candidate_skill')->insert([
                "user_id" => $uid,
                "job_title" => $jobTitle,
                "work_location" => $workLocation,
                "company" => $company,
                "full_time" => $jobTypeString,
                "salary" => $salary,
                "resume" => $resume,
                "skills" => $skills,
            ]);

            // Check if data insertion was successful
            if ($query) {
                $users = DB::table('users')
                    ->where('id', $uid)
                    ->first();
                return response()->json(['status' => 'success', 'billing' => $users->status_paid, 'msg' => 'Skill details added successfully']);
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to add skill details']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }


    public function get_candidate(Request $req)
    {
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');

            // Retrieve user details for registration
            $candidate_reg = DB::table('candidate_reg')
                ->where('user_id', $uid)
                ->first();

            // Retrieve user details for certification
            $candidate_certification = DB::table('candidate_certification')
                ->where('user_id', $uid)
                ->first();
            $candidate_experience = DB::table('candidate_experience')
                ->where('user_id', $uid)
                ->first();
            $candidate_skill = DB::table('candidate_skill')
                ->where('user_id', $uid)
                ->first();

            // Determine if registration and certification exist
            $registration = $candidate_reg ? 1 : 0;
            $certification = $candidate_certification ? 1 : 0;
            $experience = $candidate_experience ? 1 : 0;
            $skill = $candidate_skill ? 1 : 0;

            $organizationData = DB::table('employer')
                ->get();

            $jobTitles = DB::table('employer')->pluck('tittle')->unique()->toArray();
            $jobCategories = DB::table('employer')->pluck('job_category')->unique()->toArray();
            $jobSkills = DB::table('employer')->pluck('skills')->unique()->toArray();
            $jobDiscipline = DB::table('employer')->pluck('discipline')->unique()->toArray();

            $candidateJobTitles = DB::table('candidate_skill')->where('user_id', $uid)->pluck('job_title')->unique()->toArray();
            $candidateDegrees = DB::table('candidate_certification')->where('user_id', $uid)->pluck('degree')->unique()->toArray();
            $candidateSkills = DB::table('candidate_skill')->where('user_id', $uid)->pluck('skills')->unique()->toArray();

            $processedCandidateData = self::preprocessCandidateData($uid, $candidate_reg, $candidate_certification, $candidate_experience, $candidate_skill, $candidateJobTitles, $candidateSkills, $candidateDegrees);
            $processedOrganizationData = self::preprocessOrganizationData($organizationData, $jobTitles, $jobCategories, $jobSkills, $jobDiscipline);

            $contentBasedModel = self::trainContentBasedModel($processedOrganizationData, $processedCandidateData);
            $recommendedJobs = self::recommendJobs($contentBasedModel);
            $recommendedJobsDetails = [];
            $similarityThreshold = 0.5; // Adjust this threshold as needed
            foreach ($recommendedJobs as $orgId => $similarityScores) {
                $recommendedOrganization = collect($organizationData)->where('id', $orgId)->first();

                if (
                    $recommendedOrganization &&
                    (
                        in_array($recommendedOrganization->skills, $candidateSkills) &&
                        in_array($recommendedOrganization->tittle, $candidateJobTitles) ||
                        in_array($recommendedOrganization->discipline . '-' . $recommendedOrganization->discipline_category, $candidateDegrees) ||
                        $recommendedOrganization->experience >= $candidate_experience->experience ||
                        $recommendedOrganization->salary >= $candidate_skill->salary
                    )
                ) {
                    if ($recommendedOrganization && $similarityScores && $similarityScores > $similarityThreshold) {
                        foreach ($similarityScores as $score) {
                            $similarityScore = floatval($score);
                            // dd($similarityScore);

                            if ($similarityScore > 0) {
                                $recommendedJobsDetails[] = [
                                    'id' => $recommendedOrganization->id,
                                    'title' => $recommendedOrganization->tittle,
                                    'location' => $recommendedOrganization->location,
                                    'experience' => $recommendedOrganization->experience,
                                    'discipline' => $recommendedOrganization->discipline,
                                    'discipline_category' => $recommendedOrganization->discipline_category,
                                    'job_category' => $recommendedOrganization->job_category,
                                    'job_sub_category' => $recommendedOrganization->job_sub_category,
                                    'job_type' => $recommendedOrganization->job_type,
                                    'skills' => $recommendedOrganization->skills,
                                    'similarity_score' => $similarityScore, // Use individual similarity score
                                ];
                            }
                        }
                    }
                }
            }

            // dd($recommendedJobsDetails);
            return response()->json([
                'status' => 'success',
                'processedOrganizationData' => $processedOrganizationData,
                'preprocessCandidateData' => $processedCandidateData,
                'contentBasedModel' => $contentBasedModel,
                'recommendedJobs' => $recommendedJobs,
                'recommendedJobsDetails' => $recommendedJobsDetails,
                'candidate_reg' => $registration,
                'candidate_certification' => $certification,
                'candidate_experience' => $experience,
                'candidate_skill' => $skill,
                'organization' => $organizationData,
                'jobTitles' => $jobTitles,
                'jobCategories' => $jobCategories,
                'jobSkills' => $jobSkills,
                'jobDiscipline' => $jobDiscipline,
                'candidateJobTitles' => $candidateJobTitles,
                'candidateDegrees' => $candidateDegrees,
                'candidateSkills' => $candidateSkills,
            ]);
        }
    }

    public static function preprocessOrganizationData($organizationData, $jobTitles, $jobCategories, $jobSkills, $jobDiscipline)
    {
        $processedOrganizationData = [];

        // Iterate through each organization entry
        foreach ($organizationData as $org) {
            // Perform one-hot encoding for categorical variables
            $encodedTittle = self::oneHotEncode($org->tittle, $jobTitles);
            $encodedSkill = self::oneHotEncode($org->skills, $jobSkills);
            $discipline = $org->discipline . "-" . $org->discipline_category; // Ensure proper concatenation
            $encodedDiscipline = self::oneHotEncode($discipline, $jobDiscipline);

            // Normalize numerical features
            $normalizedExperience = self::normalize($org->experience);
            $normalizedSalary = self::normalize($org->salary);

            // Construct a feature vector for each organization entry
            $featureVector = array_merge($encodedTittle, $encodedSkill, $encodedDiscipline, [$normalizedExperience, $normalizedSalary]);

            // Add the feature vector to the processed data with organization ID as key
            $processedOrganizationData[$org->id] = $featureVector;
        }

        return $processedOrganizationData;
    }


    public static function preprocessCandidateData($candidateId, $candidate_reg, $candidate_certification, $candidate_experience, $candidate_skill, $jobTitles, $jobSkills, $degrees)
    {
        $processedCandidateData = [];

        // Perform one-hot encoding for categorical variables
        if ($candidate_certification) {
            $encodedDegree = self::oneHotEncode($candidate_certification->degree, $degrees);
        } else {
            $encodedDegree = array_fill(0, count($degrees), 0);
        }

        if ($candidate_skill) {
            $encodedTittle = self::oneHotEncode($candidate_skill->job_title, $jobTitles);
            $normalizedSalary = self::normalize($candidate_skill->salary);
            $encodedSkill = self::oneHotEncode($candidate_skill->skills, $jobSkills);
        } else {
            // Fill with zeros if candidate_skill is not available
            $encodedTittle = array_fill(0, count($jobTitles), 0);
            $normalizedSalary = 0;
            $encodedSkill = array_fill(0, count($jobSkills), 0);
        }

        if ($candidate_experience) {
            $normalizedExperience = self::normalize($candidate_experience->experience);
        } else {
            $normalizedExperience = 0;
        }

        // Construct a feature vector for each candidate entry
        $featureVector = array_merge($encodedDegree, $encodedSkill, $encodedTittle, [$normalizedSalary, $normalizedExperience]);

        // Add the feature vector to the processed data with candidate ID as key
        $processedCandidateData[$candidateId] = $featureVector;

        return $processedCandidateData;
    }


    public static function oneHotEncode($category, $categories)
    {
        // Initialize an array for encoded category
        $encodedCategory = array_fill(0, count($categories), 0);

        // Find the index of the category and set it to 1
        $index = array_search($category, $categories);
        if ($index !== false) {
            $encodedCategory[$index] = 1;
        }

        return $encodedCategory;
    }


    // Function to normalize numerical features
    public static function normalize($value)
    {
        // Assuming normalization method here (e.g., min-max normalization)
        $minValue = 0; // Minimum value of the feature
        $maxValue = 100; // Maximum value of the feature
        $normalizedValue = ($value - $minValue) / ($maxValue - $minValue);
        return $normalizedValue;
    }

    public static function trainContentBasedModel($processedOrganizationData, $processedCandidateData)
    {
        $model = [];

        // Iterate through each organization entry
        foreach ($processedOrganizationData as $orgIndex => $orgFeatures) {
            // Initialize an array to store candidate scores for this organization
            $orgScores = [];

            // Iterate through each candidate entry
            foreach ($processedCandidateData as $candidateIndex => $candidateFeatures) {
                // Calculate similarity score between organization and candidate
                $similarityScore = self::calculateSimilarity($orgFeatures, $candidateFeatures);

                // Store the similarity score for this candidate
                $orgScores[] = $similarityScore;
            }

            // Sort candidate scores in descending order
            arsort($orgScores);

            // Store the sorted candidate scores for this organization
            $model[$orgIndex] = $orgScores;
        }

        return $model;
    }

    public static function calculateSimilarity($orgFeatures, $candidateFeatures)
    {
        // Calculate cosine similarity between organization and candidate feature vectors
        $dotProduct = array_sum(array_map(function ($a, $b) {
            return $a * $b;
        }, $orgFeatures, $candidateFeatures));
        $orgNorm = sqrt(array_sum(array_map(function ($x) {
            return $x * $x;
        }, $orgFeatures)));
        $candidateNorm = sqrt(array_sum(array_map(function ($x) {
            return $x * $x;
        }, $candidateFeatures)));
        $similarity = $dotProduct / ($orgNorm * $candidateNorm);
        return $similarity;
    }

    public static function recommendJobs(array $contentBasedModel, int $numRecommendations = 4): array
    {
        $recommendedJobs = [];

        // Iterate through each organization's sorted candidate scores
        //   dd($contentBasedModel);
        foreach ($contentBasedModel as $orgId => $candidateScores) {
            // Extract top `$numRecommendations` candidate IDs with highest similarity scores
            $topCandidates = array_slice($candidateScores, 0, $numRecommendations, true);

            // Add recommended organization ID and corresponding similarity scores
            $recommendedJobs[$orgId] = $topCandidates;
        }

        return $recommendedJobs;
    }










    public function personal_edit(Request $req)
    {

        $total_jobs = 0; // Default value
        $users = null;
        $candidate_certification = null;
        // Check if the user is logged in


        // Check if user is logged in
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');
            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->count();
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();
            $candidate_reg = DB::table('candidate_reg')
                ->where('user_id', $uid)
                ->first();
            return view('cand_personal_edit', compact('total_jobs', 'users', 'candidate_reg'));
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }

    public function qualification_edit(Request $req)
    {

        $total_jobs = 0; // Default value
        $users = null;
        $candidate_certification = null;
        // Check if the user is logged in


        // Check if user is logged in
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');
            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->count();
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();
            $candidate_reg = DB::table('candidate_certification')
                ->where('user_id', $uid)
                ->first();
            return view('cand_qualification_edit', compact('total_jobs', 'users', 'candidate_reg'));
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }


    public function skill_edit(Request $req)
    {

        $total_jobs = 0; // Default value
        $users = null;
        $candidate_certification = null;
        // Check if the user is logged in


        // Check if user is logged in
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');
            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->count();
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();
            $candidate_skill = DB::table('candidate_skill')
                ->where('user_id', $uid)
                ->first();
            return view('cand_skill_edit', compact('total_jobs', 'users', 'candidate_skill'));
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }

    public function experience_edit(Request $req)
    {

        $total_jobs = 0; // Default value
        $users = null;
        $candidate_certification = null;
        // Check if the user is logged in


        // Check if user is logged in
        if ($req->session()->has('FRONT_USER_ID')) {
            $uid = $req->session()->get('FRONT_USER_ID');
            $total_jobs = DB::table('employer')
                ->where('uid', $uid)
                ->count();
            $users = DB::table('users')
                ->where('id', $uid)
                ->first();
            $candidate_experience = DB::table('candidate_experience')
                ->where('user_id', $uid)
                ->first();
            return view('cand_experience_edit', compact('total_jobs', 'users', 'candidate_experience'));
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }
    public function user_cand_profile_edit(Request $request)
    {
        // Retrieve form data
        $cnic = $request->input('cnic');
        $fname = $request->input('fname');
        $dob = $request->input('dob');
        $nationality = $request->input('nationality');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $religion = $request->input('religion'); // corrected variable name
        $section = $request->input('section');
        $address = $request->input('address');

        // Handle image upload
        // if ($request->hasFile('dp')) {
        //     $image = $request->file('dp');
        //     $imageData = file_get_contents($image);
        // } else {
        //     $imageData = null; // No image uploaded
        // }

        // Update database
        if ($request->session()->has('FRONT_USER_ID')) {
            $uid = $request->session()->get('FRONT_USER_ID');

            $query = DB::table('candidate_reg')
                ->where('user_id', $uid)
                ->update([
                    "cnic" => $cnic,
                    "father_name" => $fname,
                    "dob" => $dob,
                    "nationality" => $nationality,
                    "phone" => $phone,
                    "gender" => $gender,
                    "religion" => $religion,
                    "section" => $section,
                    "address" => $address,
                ]);


            // Check if data update was successful
            if ($query) {
                return redirect('/cand_profile');
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to update personal registration']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }


    public function user_cand_experience_edit(Request $request)
    {
        // Retrieve form data
        $company = $request->input('company');
        $city = $request->input('city');
        $country = $request->input('country');
        $degree = $request->input('degree');
        $startedDate = $request->input('startedDate');
        $completedDate = $request->input('completedDate');
        $description = $request->input('description');

        // Update database
        if ($request->session()->has('FRONT_USER_ID')) {
            $uid = $request->session()->get('FRONT_USER_ID');

            $query = DB::table('candidate_experience')
                ->where('user_id', $uid)
                ->update([
                    "company" => $company,
                    "city" => $city,
                    "country" => $country,
                    "degree" => $degree,
                    "started_date" => $startedDate,
                    "completed_date" => $completedDate,
                    "description" => $description,
                ]);

            // Check if data update was successful
            if ($query) {
                return redirect('/cand_profile');
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to update experience']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }

    public function user_cand_skill_edit(Request $request)
    {
        // Retrieve form data
        $jobTitle = $request->input('jobTitle');
        $workLocation = $request->input('workLocation');
        $company = $request->input('company');
        $salary = $request->input('salary');
        $skills = $request->input('skills');
        $jobTypes = $request->input('job_type');
        $resume = $request->file('resume');

        // Update database
        if ($request->session()->has('FRONT_USER_ID')) {
            $uid = $request->session()->get('FRONT_USER_ID');

            $query = DB::table('candidate_skill')
                ->where('user_id', $uid)
                ->update([
                    "job_title" => $jobTitle,
                    "work_location" => $workLocation,
                    "company" => $company,
                    "salary" => $salary,
                    "skills" => $skills,
                    "full_time" => implode(',', $jobTypes), // Convert array to comma-separated string
                ]);

            // Handle resume upload if provided
            if ($resume) {
                // Logic to upload and store the resume file in a directory or database
            }

            // Check if data update was successful
            if ($query) {
                return redirect('/cand_profile');
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to update skills']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }


    public function user_cand_qualification(Request $request)
    {
        // Retrieve form data
        $school = $request->input('school');
        $degreeStarted = $request->input('degreeStarted');
        $degreeCompletion = $request->input('degreeCompletion');
        $degree = $request->input('degree');
        $area = $request->input('subCategory');


        if ($request->session()->has('FRONT_USER_ID')) {
            $uid = $request->session()->get('FRONT_USER_ID');

            $query = DB::table('candidate_certification')
                ->where('user_id', $uid)
                ->update([
                    "school" => $school,
                    "started_date" => $degreeStarted,
                    "completed_date" => $degreeCompletion,
                    "degree" => $degree,
                    "area" => $area,
                ]);


            // Check if data update was successful
            if ($query) {
                return redirect('/cand_profile');
            } else {
                return response()->json(['status' => 'error', 'error' => 'Failed to update personal registration']);
            }
        } else {
            return response()->json(['status' => 'error', 'error' => 'User not logged in']);
        }
    }




    public function notify_organization(Request $req)
    {
        $orgId = $req->orgId;

        // Retrieve organization details
        $org = DB::table('employer')->where('id', $orgId)->first();
        $uid = $org->uid;
        $orgEmail = DB::table('users')->where('id', $uid)->first();
        // Retrieve candidate details
        $candidateName = '';
        if ($req->session()->has('FRONT_USER_ID')) {
            $cand_uid = $req->session()->get('FRONT_USER_ID');
            $candidate = DB::table('users')->select('name')->where('id', $cand_uid)->first();
            if ($candidate) {
                $candidateName = $candidate->name;
            }
        }

        // Compose email data
        $data = [
            'name' => $candidateName,
            'tittle' => $org->tittle,
            'cand_uid' => $cand_uid,
            'orgId' => $orgId,
            // Add more candidate profile information here if needed
        ];

        $recipientEmail = $orgEmail->email;

        // Send email notification to organization
        Mail::send('candidate_found', $data, function ($message) use ($recipientEmail) {
            $message->to($recipientEmail)
                ->subject('Notification: Candidate Found');
        });

        // Return a response indicating success or failure
        return response()->json(['status' => 'success']);
    }

    public function storeMeeting(Request $req)
    {
        if ($req->session()->has('FRONT_USER_ID') && $req->session()->has('orgId')) {
            $uid = $req->session()->get('FRONT_USER_ID');
            $orgId = $req->session()->get('orgId');
            $candidate_email = $req->cand_email;
            $org = DB::table('users')
                ->where('id', $uid)
                ->first();
            $email = $org->email;
            $employer = DB::table('employer')
                ->where('id', $orgId)
                ->first();

            $arr = [
                "orgId" => $orgId,
                "uid" => $uid,
                "host_email" => $email,
                "topic" => $employer->tittle,
                "start_time" => $req->start_time,
                "timezone" => $req->timezone,
                "candidate_email" => $candidate_email,
            ];

            // Check if the meeting already exists
            $meeting = DB::table('zoom_meetings')
                ->where('uid', $uid)
                ->where('orgId', $orgId)
                ->first();

            if ($meeting) {
                // Update the meeting
                DB::table('zoom_meetings')
                    ->where('id', $meeting->id)
                    ->update($arr);
            } else {
                // Insert a new meeting
                DB::table('zoom_meetings')->insert($arr);
            }

            return response()->json(['success' => true, 'msg' => 'Meeting saved successfully']);
        } else {
            return response()->json(['error' => true, 'msg' => 'User not Found']);
        }
    }
}
