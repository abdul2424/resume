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
                <span class="log">NexHire</span>
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

  
    <section class="experience " >
                <div class="qualification-heading">
                    <h1><span style="color: #6EE0C1;">Experience</span>
                    <span style="color: #385A64;">Details</span></h1>
                </div>
                <div class="form-container">
                    <div class="qualification-pic-sec">
                        <img src="/storage/media/s.jpg" alt="form">
                    </div>
                    <form  method="post" action="/user_cand_experience_edit" id="experienceForm">
                        @csrf
                     
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="company">Company</label><br>
                                <input class="full-field" type="text" value="{{$candidate_experience->company ?? ''}}" name="company" id="company" placeholder="E.g NexHire">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="city">City</label><br>
                                <input class="half-field" type="text" value="{{$candidate_experience->city ?? ''}}" name="city" id="city" placeholder="E.g Chakwal">
                            </div>
                            <div class="form-item">
                                <label class="title" for="country">Country</label><br>
                                <input class="half-field" type="text" name="country" value="{{$candidate_experience->country ?? ''}}" id="country" placeholder="E.g Pakistan">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="degree">Title</label><br>
                                <input class="full-field" type="text" name="degree" value="{{$candidate_experience->degree ?? ''}}" id="degree" placeholder=" E.g Senior Software Engineer">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="startedDate">Started Date</label><br>
                                <input class="half-field" type="date" name="startedDate" value="{{$candidate_experience->started_date ?? ''}}" id="startedDate">
                            </div>
                            <div class="form-item">
                                <label class="title" for="completedDate">Completed Date</label><br>
                                <input class="half-field" type="date" name="completedDate" value="{{$candidate_experience->completed_date ?? ''}}" id="completedDate">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="description">Description (optional)</label><br>
                                <input class="textarea-field" name="description" value="{{$candidate_experience->description ?? ''}}" id="description" cols="100" rows="3"
                                placeholder="Write your certification description briefly...">
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
        </section>