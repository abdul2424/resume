<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexHire</title>
    <link rel="stylesheet" href="{{ asset('css/org.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    <section class="hero">
        <h1 class="hero-heading">Feel free to provide us your complete job description <br>
            that fill your requirements </h1>
    </section>
    <div class="form-container">
                <div class="pic-sec">
                    <img src="/storage/media/screening1.jpg" alt="form">
                </div>
                <form action="/user_org" method="post">
                    @csrf
                    <div class="form-wrapper">
                        <div class="form-item">
                            <label class="title" for="title">Job Title</label><br>
                            <input class="input-field" type="text" name="tittle" id="title" placeholder="E.g Associate Engineer">
                        </div>
                        <div class="form-item">
                            <label class="title" for="title">Location</label><br>
                            <input class="input-field" type="text" name="location" id="tile" placeholder="E.g Uni Road Near Bus Stop Sargodha">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <div class="form-item">
                            <label class="title" for="title">Job Category</label><br>
                            <input class="input-field" type="text" name="job_category" id="tile" placeholder="E.g Management">
                        </div>
                        <div class="form-item">
                            <label class="title" for="title">Job Sub-Category</label><br>
                            <input class="input-field" type="text" name="job_sub_category" id="tile" placeholder="E.g Maintenance">
                        </div>
                    </div>
                    <div class="textarea-wrapper">
                        <div class="form-item">
                            <label class="title" for="description">Job Description</label><br>
                            <textarea class="textarea-field" name="job_desc" id="description" cols="100" rows="10"
                            placeholder="Write your job description briefly..."></textarea>
                        </div>
                    </div>
                    <div class="type-wrapper">
    <label for="type" class="title">Job Type</label><br>
    <div class="checkbox-wrapper">
        <div class="check-items">
            <input type="checkbox" name="job_type[]" id="fulltime1" value="Full-Time"> <p class="checkbox-title">Full-Time</p>
        </div>
        <div class="check-items">
            <input type="checkbox" name="job_type[]" id="parttime" value="Part-Time"> <p class="checkbox-title">Part-Time</p>
        </div>
        <div class="check-items">
            <input type="checkbox" name="job_type[]" id="permanent" value="Permanent"> <p class="checkbox-title">Permanent</p>
        </div>
        <div class="check-items">
            <input type="checkbox" name="job_type[]" id="temporary" value="Temporary"> <p class="checkbox-title">Temporary</p>
        </div>
        <div class="check-items">
            <input type="checkbox" name="job_type[]" id="contract" value="Contract"> <p class="checkbox-title">Contract</p>
        </div>
        <div class="check-items">
            <input type="checkbox" name="job_type[]" id="internship" value="Internship"> <p class="checkbox-title">Internship</p>
        </div>
    </div>
</div>

                    <div class="form-wrapper">
                        <div class="form-item">
                            <label class="title" for="title">Marital Status</label><br>
                            <select class="t-col" name="marital_status" id="">
                                <option value="0">Single</option>
                                <option value="1">Married</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label class="title" for="title">Expected Experience</label><br>
                            <input class="t-col" type="number" name="experience" id="tile" placeholder="E.g 0 - 5 In years">
                        </div>
                        <div class="form-item">
                            <label class="title" for="title">Expected Salary</label><br>
                            <input class="t-col" type="number" name="salary" id="tile" placeholder="E.g 10000 - 100000">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <h2>Qualification Required</h2>
                    </div>
                    <div class="form-wrapper">
                        <!-- <h2>Education Required</h2><br> -->
                        <div class="form-item">
                            <label class="title" for="title">Discipline</label><br>
                            <input class="input-field" type="text" name="discipline" id="tile" placeholder="E.g BS">
                        </div>
                        <div class="form-item">
                            <label class="title" for="title">Category</label><br>
                            <input class="input-field" type="text" name="discipline_category" id="tile" placeholder="E.g Information Technology">
                        </div>
                    </div>
                    <div class="textarea-wrapper">
                        <div class="form-item">
                            <label class="title" for="skills">Skills Required</label><br>
                            <textarea class="textarea-field" name="skills" id="skills" cols="100" rows="10"
                            placeholder="Write required skills and separate each skill with comma..."></textarea>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <input type="submit" value="Send My Details">
                    </div>
                </form>
            </div>
</body>
</html>