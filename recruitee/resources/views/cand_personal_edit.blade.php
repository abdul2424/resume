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

    <section class="personal">
                    <section class="hero">
                        <h1 class="hero-heading"><span style="color:#1B2D35;">Candidate</span>
                            <span style="color:#70E4A8;">Registration</span> </h1>
                    </section>
                <div class="form-container">
                    <div class="pic-sec">
                        <img src="/storage/media/pd.jpg" alt="form">
                    </div>
    
                    <form  method="post" id="personalForm" action="/user_cand_profile_edit" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="cnic">CNIC</label><br>
                                <input class="input-field" type="number" name="cnic" id="cnic" value="{{ $candidate_reg->cnic ?? '' }}" placeholder="E.g 3840212365479">
                            </div>
                            <div class="form-item">
                                <label class="title" for="fname">Father Name</label><br>
                                <input class="input-field" type="text" name="fname" id="fname" value="{{$candidate_reg->father_name  ?? ''}}" placeholder="E.g Muhammad Ismail">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="dob">DOB</label><br>
                                <input class="t-col" type="date" value="{{$candidate_reg->dob ?? ''}}" name="dob" id="dob">
                            </div>
                            <div class="form-item">
                                <label class="title" for="nationality">Nationality</label><br>
                                <input class="t-col" type="text" name="nationality" value="{{$candidate_reg->nationality ?? ''}}" id="nationality" placeholder="E.g Pakistan">
                            </div>
                            <!-- <div class="form-item">
                                <label class="title" for="dp">Profile</label><br>
                                <input class="t-col file" type="file" value="{{$candidate_reg->dob ?? ''}}" name="dp" id="dp">
                            </div> -->
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="phone">Phone Number</label><br>
                                <input class="input-field" type="number" value="{{$candidate_reg->phone ?? ''}}" name="phone" id="phone" placeholder="E.g +923058519651">
                            </div>
                            
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="gender">Gender</label><br>
                                <input class="t-col" type="text" name="gender" id="gender" value="{{$candidate_reg->gender ?? ''}}" placeholder="Male/Female/Custom">
                            </div>
                            <div class="form-item">
                                <label class="title" for="origon">Religon</label><br>
                                <input class="t-col" type="text" name="religion" id="religon" value="{{$candidate_reg->religion ?? ''}}" placeholder="E.g Islam">
                            </div>
                            <div class="form-item">
                                <label class="title" for="section">section</label><br>
                                <input class="t-col" type="text" name="section" id="section" value="{{$candidate_reg->section ?? ''}}" placeholder="E.g Sunni">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="address">Candidate Address</label><br>
                                <input type="text"
                             class="textarea-field" name="address" id="address" value="{{$candidate_reg->address ?? ''}}" cols="100" rows="3"
                                placeholder="Write your job description briefly...">
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" id="personal_form" value="Submit">
                        </div>
                    </form>
                </div>
        </section> 