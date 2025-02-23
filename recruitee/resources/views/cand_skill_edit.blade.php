<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/candidate.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <section class="main-container">
        <header>
            <div class="logo">
                <span class="log">THE_RECRUITERS</span>
                <a href="/" class="item">Home</a>
                <a href="#" class="item">About Us</a>
                <a href="#" class="item">Contact Us</a>
                <a href="#" class="item">Our Customers</a>
            </div>
            <div class="btn-section">
            @if(session()->has('FRONT_USER_LOGIN'))
            @if($users->type=='employee') 
            <button class="btn btn-light position-relative"><a  href="/profile" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">
                    Profile</a></button>
            @else
                    <button class="btn btn-light position-relative"><a  href="/profile" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">
                    Profile
                @if($total_jobs != 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $total_jobs }}+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                @else
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                @endif
                </a></button>
            @endif
            <button><a class="btn btn-light position-relative" href="/logout" style="text-decoration:none;color:#37756A;font-weight:bold;text-align:center;">Logout</a></button>
            @else
                <button class="btn"><a href="/login" style="text-decoration:none;color:#37756A">Login</a></button>
                <button class="btn"><a href="/signup" style="text-decoration:none;color:#37756A">Signup</a></button>
            @endif
            </div>
        </header>
    </section>

  
    <section class="skill" >
                <div class="qualification-heading">
                    <h1><span style="color: #E8A43D;">Skills</span> <span style="color: #56AFC7;">/</span>
                    <span style="color:#B23030;">Job Preference</span></h1>
                </div>
                <div class="qualification-container">
                    <div class="qualification-pic-sec">
                    <img src="/storage/media/screening6.jpg" alt="form">
                    </div>
                    <form  method="post" action="/user_cand_skill_edit" id="skillForm">
                        @csrf
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="jobTitle">Desired Job Title</label><br>
                                <input class="full-field" type="text" value="{{$candidate_skill->job_title ?? ''}}" name="jobTitle" id="jobTitle" placeholder="E.g Executive Officer">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="workLocation">Preferred Work Location</label><br>
                                <input class="half-field" type="text" value="{{$candidate_skill->work_location ?? ''}}" name="workLocation" id="workLocation" placeholder="E.g Sargodha">
                            </div>
                            <div class="form-item">
                                <label class="title" for="company">Industry Preference</label><br>
                                <input class="half-field" type="text" value="{{$candidate_skill->company ?? ''}}" name="company" id="company" placeholder="E.g Textile">
                            </div>
                        </div>
                        <div class="type-wrapper">
                            <label for="type" class="check-title">Employment Type</label><br>
                            @php

    $fullTime = ($candidate_skill->full_time == 'Full-Time') ? 'checked' : '';
    $partTime = ($candidate_skill->full_time == 'Part-Time') ? 'checked' : '';
    $permanent = ($candidate_skill->full_time == 'Permanent') ? 'checked' : '';
    $temporary = ($candidate_skill->full_time == 'Temporary') ? 'checked' : '';
    $contract = ($candidate_skill->full_time == 'Contract') ? 'checked' : '';
    $internship = ($candidate_skill->full_time == 'Internship') ? 'checked' : '';
@endphp

                            <div class="checkbox-wrapper">
                                <div class="check-items">
                                    <input type="checkbox" name="job_type[]" {{$fullTime}} id="fulltime1" value="Full-Time"> <p class="checkbox-title">Full-Time</p>
                                </div>
                                <div class="check-items">
                                    <input type="checkbox" name="job_type[]" {{$partTime}} id="parttime" value="Part-Time"> <p class="checkbox-title">Part-Time</p>
                                </div>
                                <div class="check-items">
                                    <input type="checkbox" name="job_type[]" {{$permanent}} id="permanent" value="Permanent"> <p class="checkbox-title">Permanent</p>
                                </div>
                                <div class="check-items">
                                    <input type="checkbox" name="job_type[]" {{$temporary}} id="temporary" value="Temporary"> <p class="checkbox-title">Temporary</p>
                                </div>
                                <div class="check-items">
                                    <input type="checkbox" name="job_type[]" {{$contract}} id="contract" value="Contract"> <p class="checkbox-title">Contract</p>
                                </div>
                                <div class="check-items">
                                    <input type="checkbox" name="job_type[]" {{$internship}} id="internship" value="Internship"> <p class="checkbox-title">Internship</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="salary">Expected Salary</label><br>
                                <input class="half-field" type="number" name="salary" value="{{$candidate_skill->salary ?? ''}}" id="salary" placeholder="E.g 10,000-10,0000">
                            </div>
                            <div class="form-item">
                                <label class="title" for="resume">Resume</label><br>
                                <input class="half-field file" type="file" name="resume" value="{{$candidate_skill->resume ?? ''}}" id="resume">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="skills">Skills</label><br>
                                <input class="full-field" type="text" value="{{$candidate_skill->skills ?? ''}}" name="skills" id="skills" placeholder="E.g Executive Officer">
                                
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
        </section>