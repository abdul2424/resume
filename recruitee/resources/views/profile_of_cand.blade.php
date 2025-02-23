<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/cand_profile.css') }}">
</head>
<body>
    <section class="main-container">
        <header>
            <div class="logo">
                <span class="log">NexHire</span>
                <a href="./index.html" class="item">Home</a>
                <a href="#" class="item">About Us</a>
                <a href="#" class="item">Contact Us</a>
                <a href="#" class="item">Our Customers</a>
            </div>
            <div class="btn-section">
                <button class="btn">Profile</button>
                <button class="btn">Logout</button>
            </div>
        </header>
        @if($users && $candidate_certification && $candidate_experience && $candidate_reg && $candidate_skill)
        <section class="hero">
            <div class="left-hero">
                {{-- <div class="profile-wrapper">
                    <img src="./images/cand-pic.jpg" alt="candidate_Picture">
                    <h3>{{$users->name}}</h3>
                    <p><code>{{$users->email}}</code></p>
                    <hr>
                </div> --}}
                <div class="experience-wrapper">
                    <h2>Experience Informations</h2>
                    <div class="row-wrapper">
                        <div class="col-wrapper">
                            <p>Company: <span>{{$candidate_experience->company}}</span></p>
                            <p>City: <span>{{$candidate_experience->city}}</span></p>
                            <p>Country: <span>{{$candidate_experience->country}}</span></p>
                        </div>
                        <div class="col-wrapper">
                            <p>Degree: <span>{{$candidate_experience->degree}}</span></p>
                            <p>Started Date: <span>{{$candidate_experience->started_date}}</span></p>
                            <p>End Date: <span>{{$candidate_experience->completed_date}}</span></p>
                        </div>
                    </div>
                </div>
                <form id="meeting-form" style="margin-left:-50px;">
                    @csrf
                    <label for="start_time">Start Time:</label>
                    <input style="padding:10px;" value="{{ $meetingData->start_time ?? '' }}" type="datetime-local" name="start_time" required onchange="saveMeetingData()"><br><br>
                    <label for="timezone">Timezone:</label>
                    <select id="timezone" style="padding:10px;" name="timezone" required onchange="saveMeetingData()">
                        <option value="">Select Timezone</option>
                        @foreach (timezone_identifiers_list() as $timezone)
                            <option value="{{ $timezone }}" @if(isset($meetingData) && $meetingData->timezone == $timezone) selected @endif>{{ $timezone }}</option>
                        @endforeach  
                    </select><br><br>
                    <input type="hidden" name="cand_email" value="{{ $users->email ?? '' }}" />
                </form>
                
                <button style="margin-left:-280px;padding:10px;margin-top:10px;font-size:17px;"><a href="{{ url('start') }}">Call for Interview</a></button>

            </div>
            <div class="right-hero">
                <div class="personal-wrapper">
                    <h2>Personal Informations</h2>
                    <div class="row-wrapper">
                        <div class="col-wrapper">
                            <p>CNIC : <span>{{$candidate_reg->cnic}}</span> </p>
                            <p>Phone : <span>{{$candidate_reg->phone}}</span> </p>
                            <p>DOB : <span>{{$candidate_reg->dob}}</span> </p>
                            <p>Father Name : <span>{{$candidate_reg->father_name}}</span> </p>
                            <p>Gender : <span>{{$candidate_reg->gender}}</span> </p>
                        </div>
                        <div class="col-wrapper">
                            <p>Religion : <span>{{$candidate_reg->religion}}</span> </p>
                            <p>Section : <span>{{$candidate_reg->section}}</span> </p>
                            <p>Address : <span>{{$candidate_reg->address}}</span> </p>
                            <p>Nationality : <span>{{$candidate_reg->nationality}}</span> </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="personal-wrapper">
                    <h2>Qualification Informtions</h2>
                    <div class="row-wrapper">
                        <div class="col-wrapper">
                            <p>School : <span>{{$candidate_certification->school}}</span> </p>
                            <p>Degree : <span>{{$candidate_certification->degree}}</span> </p>
                            <p>Area Of Study : <span>{{$candidate_certification->area}}</span> </p>
                        </div>
                        <div class="col-wrapper">
                            <p>Start Dated : <span>{{$candidate_certification->started_date}}</span> </p>
                            <p>End Dated : <span>{{$candidate_certification->completed_date}}</span> </p>
                        </div>
                    </div>
                </div>
                <div class="personal-wrapper">
                    <h2>Skills/Job Preference Informtions</h2>
                    <div class="row-wrapper">
                        <div class="col-wrapper">
                            <p>Desired Job Title : <span>{{$candidate_skill->job_title}}</span> </p>
                            <p>Prefered Work Location : <span>{{$candidate_skill->work_location}}</span> </p>
                            <p>Prefered Industry : <span>{{$candidate_skill->company}}</span> </p>
                        </div>
                        <div class="col-wrapper">
                            <p>Employment Type : <span>{{$candidate_skill->full_time}}</span> </p>
                            <p>Expected Salary : <span>{{$candidate_skill->salary}}</span> </p>
                            <p>Skills: <span>{{$candidate_skill->skills}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
        No Record FROUND
        @endif
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
 $(document).ready(function() {
    function saveMeetingData() {
        var formData = $('#meeting-form').serialize();
        var startTime = $('input[name="start_time"]').val();
        var timezone = $('select[name="timezone"]').val();
        console.log(startTime)
        console.log(timezone)
        if (startTime && timezone) {
            $.ajax({
                type: 'POST',
                url: '{{ route('store.meeting') }}',
                data: formData,
                success: function(data) {
                    alert(data.msg);
                }
            });
        }
    }

    $('#meeting-form select, #meeting-form input').on('change', saveMeetingData);
});
</script>
</body>
</html>