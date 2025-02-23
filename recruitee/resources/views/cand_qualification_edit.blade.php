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

  
    <section class="certification ">
                <div class="qualification-heading">
                    <h1><span style="color: #BE5DB7;">Certification</span>
                    <span style="color: #385A64;">Details</span></h1>
                </div>
                <div class="qualification-container">
                    <div class="qualification-pic-sec">
                        <img src="/storage/media/screening3.jpg" alt="form">
                    </div>
                    <form  method="post" action='/user_cand_qualification' id="certificateForm">
                        @csrf
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="school">School</label><br>
                                <input class="full-field" type="text" value="{{$candidate_reg->school ?? ''}}" name="school" id="school" placeholder="E.g University Of Sargodha">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="degreeStarted">Started Date</label><br>
                                <input class="half-field" type="date" value="{{$candidate_reg->started_date ?? ''}}" name="degreeStarted" id="degreeStarted" placeholder="E.g 3840212365479">
                            </div>
                            <div class="form-item">
                                <label class="title" for="degreeCompletion">Completed Date</label><br>
                                <input class="half-field" type="date" value="{{$candidate_reg->completed_date ?? ''}}" name="degreeCompletion" id="degreeCompletion" placeholder="E.g Muhammad Ismail">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="degree">Degree</label><br>
                                <input class="full-field" type="text" value="{{$candidate_reg->degree ?? ''}}" name="degree" id="degree" placeholder=" E.g BS">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="subCategory">Area Of Study</label><br>
                                <input class="full-field" type="text" value="{{$candidate_reg->area ?? ''}}" name="subCategory" id="subCategory" placeholder="E.g Information Technology">
                            </div>
                        </div>
                        
                        <div class="btn-wrapper">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
        </section> 