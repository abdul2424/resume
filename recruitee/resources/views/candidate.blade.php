<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/candidate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rec-job.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="main-container">
        <header>
            <div class="logo">
                <span class="log">TNexHire</span>
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
                    <form  method="post" id="personalForm">
                        @csrf
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="firstName">First Name</label><br>
                                <input class="t-col" type="text" name="firstName" id="firstName" placeholder="E.g Malik">
                            </div>
                            <div class="form-item">
                                <label class="title" for="middleName">Middle Name</label><br>
                                <input class="t-col" type="text" name="middleName" id="middleName" placeholder="E.g Mohsin">
                            </div>
                            <div class="form-item">
                                <label class="title" for="lastName">Last Name</label><br>
                                <input class="t-col" type="text" name="lastName" id="lastName" placeholder="E.g Azhar">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="cnic">CNIC</label><br>
                                <input class="input-field" type="number" name="cnic" id="cnic" placeholder="E.g 3720177498293">
                            </div>
                            <div class="form-item">
                                <label class="title" for="fname">Father Name</label><br>
                                <input class="input-field" type="text" name="fname" id="fname" placeholder="E.g Azhar Mehmood">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="dob">DOB</label><br>
                                <input class="t-col" type="date" name="dob" id="dob">
                            </div>
                            <div class="form-item">
                                <label class="title" for="nationality">Nationality</label><br>
                                <input class="t-col" type="text" name="nationality" id="nationality" placeholder="E.g Pakistan">
                            </div>
                            <div class="form-item">
                                <label class="title" for="dp">Profile</label><br>
                                <input class="t-col file" type="file" name="dp" id="dp">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="phone">Phone Number</label><br>
                                <input class="input-field" type="number" name="phone" id="phone" placeholder="E.g +923271003436">
                            </div>
                            <div class="form-item">
                                <label class="title" for="email">E-mail Address</label><br>
                                <input class="input-field" type="text" name="email" id="email" placeholder="E.g malikmohsinazhar@gmail.com">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="gender">Gender</label><br>
                                <input class="t-col" type="text" name="gender" id="gender" placeholder="Male/Female/Custom">
                            </div>
                            <div class="form-item">
                                <label class="title" for="origon">Religon</label><br>
                                <input class="t-col" type="text" name="religon" id="religon" placeholder="E.g Islam">
                            </div>
                            <div class="form-item">
                                <label class="title" for="section">section</label><br>
                                <input class="t-col" type="text" name="section" id="section" placeholder="E.g Sunni">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="address">Candidate Address</label><br>
                                <textarea class="textarea-field" name="address" id="address" cols="100" rows="3"
                                placeholder="Write your job description briefly..."></textarea>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" id="personal_form" value="Submit">
                        </div>
                    </form>
                </div>
        </section>      

      

      <section class="certification hidder">
                <div class="qualification-heading">
                    <h1><span style="color: #BE5DB7;">Certification</span>
                    <span style="color: #385A64;">Details</span></h1>
                </div>
                <div class="qualification-container">
                    <div class="qualification-pic-sec">
                        <img src="/storage/media/screening3.jpg" alt="form">
                    </div>
                    <form  method="post" id="certificateForm">
                        @csrf
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="school">School</label><br>
                                <input class="full-field" type="text" name="school" id="school" placeholder="E.g University Of Sargodha">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="degreeStarted">Started Date</label><br>
                                <input class="half-field" type="date" name="degreeStarted" id="degreeStarted" placeholder="E.g 3840212365479">
                            </div>
                            <div class="form-item">
                                <label class="title" for="degreeCompletion">Completed Date</label><br>
                                <input class="half-field" type="date" name="degreeCompletion" id="degreeCompletion" placeholder="E.g Muhammad Ismail">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="degree">Degree</label><br>
                                <input class="full-field" type="text" name="degree" id="degree" placeholder=" E.g BS">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="subCategory">Area Of Study</label><br>
                                <input class="full-field" type="text" name="subCategory" id="subCategory" placeholder="E.g Information Technology">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="qualificationDescription">Description (optional)</label><br>
                                <textarea class="textarea-field" name="qualificationDescription" id="qualificationDescription" cols="100" rows="3"
                                placeholder="Write your certification description briefly..."></textarea>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
        </section>     

        <section class="experience hidder" >
                <div class="qualification-heading">
                    <h1><span style="color: #6EE0C1;">Experience</span>
                    <span style="color: #385A64;">Details</span></h1>
                </div>
                <div class="form-container">
                    <div class="qualification-pic-sec">
                        <img src="/storage/media/s.jpg" alt="form">
                    </div>
                    <form  method="post" id="experienceForm">
                        @csrf
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="company">Company</label><br>
                                <input class="full-field" type="text" name="company" id="company" placeholder="E.g The Recruiters">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="city">City</label><br>
                                <input class="half-field" type="text" name="city" id="city" placeholder="E.g Sargodha">
                            </div>
                            <div class="form-item">
                                <label class="title" for="country">Country</label><br>
                                <input class="half-field" type="text" name="country" id="country" placeholder="E.g Pakistan">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="degree">Title</label><br>
                                <input class="full-field" type="text" name="degree" id="degree" placeholder=" E.g Senior Software Engineer">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="startedDate">Started Date</label><br>
                                <input class="half-field" type="date" name="startedDate" id="startedDate">
                            </div>
                            <div class="form-item">
                                <label class="title" for="completedDate">Completed Date</label><br>
                                <input class="half-field" type="date" name="completedDate" id="completedDate">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="description">Description (optional)</label><br>
                                <textarea class="textarea-field" name="description" id="description" cols="100" rows="3"
                                placeholder="Write your certification description briefly..."></textarea>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
        </section>

        <section class="skill hidder" >
                <div class="qualification-heading">
                    <h1><span style="color: #E8A43D;">Skills</span> <span style="color: #56AFC7;">/</span>
                    <span style="color:#B23030;">Job Preference</span></h1>
                </div>
                <div class="qualification-container">
                    <div class="qualification-pic-sec">
                    <img src="/storage/media/screening6.jpg" alt="form">
                    </div>
                    <form  method="post" id="skillForm">
                        @csrf
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="jobTitle">Desired Job Title</label><br>
                                <input class="full-field" type="text" name="jobTitle" id="jobTitle" placeholder="E.g Executive Officer">
                            </div>
                        </div>
                        <div class="form-wrapper">
                            <div class="form-item">
                                <label class="title" for="workLocation">Preferred Work Location</label><br>
                                <input class="half-field" type="text" name="workLocation" id="workLocation" placeholder="E.g Sargodha">
                            </div>
                            <div class="form-item">
                                <label class="title" for="company">Industry Preference</label><br>
                                <input class="half-field" type="text" name="company" id="company" placeholder="E.g Textile">
                            </div>
                        </div>
                        <div class="type-wrapper">
                            <label for="type" class="check-title">Employment Type</label><br>
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
                                <label class="title" for="salary">Expected Salary</label><br>
                                <input class="half-field" type="number" name="salary" id="salary" placeholder="E.g 10,000-10,0000">
                            </div>
                            <div class="form-item">
                                <label class="title" for="resume">Resume</label><br>
                                <input class="half-field file" type="file" name="resume" id="resume">
                            </div>
                        </div>
                        <div class="textarea-wrapper">
                            <div class="form-item">
                                <label class="title" for="skills">Skills</label><br>
                                <textarea class="textarea-field" name="skills" id="skills" cols="100" rows="3"
                                placeholder="Write your skills and separate each skill with comma..."></textarea>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
        </section>

        <section>
    <div class="container my-5 ">
        <h2 class="job-heading hidder">Recommended Jobs</h2>
        
   
        <div class="row" id="recommendedJobs">
            
            <!-- Recommended jobs will be appended here -->
        </div>
    </div>
</section>


        <script>
//               const toggleButton = document.getElementById('toggleButton');
// const content = document.getElementById('content');

// // Function to show the content and hide the toggle button
// function showContent() {
//   content.style.display = 'block';
//   toggleButton.style.display = 'none';
// }

// // Function to hide the content and show the toggle button
// function hideContent() {
//   content.style.display = 'none';
//   toggleButton.style.display = 'block';
// }

// // Event listener for the toggle button
// toggleButton.addEventListener('click', function(event) {
//   event.stopPropagation(); // Prevents the document click event from being triggered
//   showContent();
// });

// // Event listener for clicks on the document
// document.addEventListener('click', function(event) {
//   if (event.target !== content && event.target !== toggleButton) {
//     hideContent();
//   }
// });

        $(document).ready(function() {

            // $(window).on('load', function() {
          $.ajax({
            url: '/get_candidate', // Adjust the URL to fetch recommended jobs
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                if(response.status == 'success') {
                        console.log(response)
                            if(response.candidate_reg == 1) {
                                $('.personal').addClass('hidder');
                                $('.certification').removeClass('hidder');
                            } 
                            if(response.candidate_certification == 1) {
                                $('.personal').addClass('hidder');
                                $('.certification').addClass('hidder');
                                $('.experience').removeClass('hidder');
                            }
                            if(response.candidate_experience == 1) {
                                $('.personal').addClass('hidder');
                                    $('.certification').addClass('hidder');
                                    $('.experience').addClass('hidder');
                                    $('.skill').removeClass('hidder');
                            }
                            if(response.candidate_skill == 1) {
                                $('.personal').addClass('hidder');
                                    $('.certification').addClass('hidder');
                                    $('.experience').addClass('hidder');
                                    $('.skill').addClass('hidder');
                            }
                            $('.job-heading').removeClass('hidder');
                   var recommendedJobsDetails = response.recommendedJobsDetails;
                    $.each(recommendedJobsDetails, function(index, job) {
                        var html = '';
html += '<div class="jobs">';
html += '<div class="job-details">';
html += '<div class="job-item">';
html += '<span class="name">Title</span>';
html += '<span class="detail">' + job.title + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<span class="name">Category</span>';
html += '<span class="detail">' + job.job_category + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<span class="name">Sub-Category</span>';
html += '<span class="detail">' + job.job_sub_category + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<span class="name">Skills</span>';
html += '<span class="detail">' + job.skills + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<span class="name">Experience</span>';
html += '<span class="detail">' + job.experience + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<span class="name">Job Type</span>';
html += '<span class="detail">' + job.job_type + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<span class="name">Location</span>';
html += '<span class="detail">' + job.location + '</span>';
html += '</div>';
html += '<div class="job-item">';
html += '<i class="fa-solid fa-thumbs-up interested-btn"  data-org-id="' + job.id + '" style="color:green; font-size:30px; margin-top:-10px; cursor: pointer; margin-right:20px"></i>';
html += '<i class="fa-solid fa-thumbs-down" style="color:red; font-size:30px; cursor: pointer; margin-top:-10px"></i>';
html += '</div>';
html += '</div>';
html += '</div>';

                        $('.row').append(html);
                    });

                    $('.interested-btn').click(function() {
                        var orgId = $(this).data('org-id');
                        var button = $(this);
                        // Send AJAX request to notify organization
                        $.ajax({
                            url: '/notify_organization/' + orgId,
                            method: 'GET',
                            success: function(response) {
                                // Show popup to the candidate
                                button.addClass('hidder');
                                alert('We will notify the organization. Thank you for showing interest!');
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    });
                } else {
                    // Handle case where response indicates failure
                    console.log('Data Not found.');
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX error
                console.error(error);
            }
        });
    
            // });


            $('#personalForm').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission
                
                // Serialize form data into an object
                var postData = $(this).serializeArray();
                console.log(postData);

                // Make AJAX POST request
                $.ajax({
                    url: '/candidate_reg', // Replace 'your-url' with actual URL
                    method: 'POST',
                    data: postData,
                    dataType: 'json',
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        if(response.status=='success'){
                        $('.personal').addClass('hidder');
                        $('.certification').removeClass('hidder');
                    } else {
                        // Handle case where response indicates failure
                        console.log('Registration failed.');
                    }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            });
  
            $('#certificateForm').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission
                
                // Serialize form data into an object
                var postData = $(this).serializeArray();
                console.log(postData);

                // Make AJAX POST request
                $.ajax({
                    url: '/candidate_certificate', // Replace 'your-url' with actual URL
                    method: 'POST',
                    data: postData,
                    dataType: 'json',
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        if(response.status=='success'){
                        $('.personal').addClass('hidder');
                        $('.certification').addClass('hidder');
                        $('.experience').removeClass('hidder');
                    } else {
                        // Handle case where response indicates failure
                        console.log('Registration failed.');
                    }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            });
            
            $('#experienceForm').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission
                
                // Serialize form data into an object
                var postData = $(this).serializeArray();
                console.log(postData);

                // Make AJAX POST request
                $.ajax({
                    url: '/candidate_experience', // Replace 'your-url' with actual URL
                    method: 'POST',
                    data: postData,
                    dataType: 'json',
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        if(response.status=='success'){
                        $('.personal').addClass('hidder');
                        $('.certification').addClass('hidder');
                        $('.experience').addClass('hidder');
                        $('.skill').removeClass('hidder');   
                    } else {
                        // Handle case where response indicates failure
                        console.log('Registration failed.');
                    }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            });

            $('#skillForm').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission
                
                // Serialize form data into an object
                var postData = $(this).serializeArray();
                console.log(postData);

                // Make AJAX POST request
                $.ajax({
                    url: '/candidate_skill', // Replace 'your-url' with actual URL
                    method: 'POST',
                    data: postData,
                    dataType: 'json',
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        if(response.status=='success'){
                        $('.personal').addClass('hidder');
                        $('.certification').addClass('hidder');
                        $('.experience').addClass('hidder');
                        $('.skill').addClass('hidder');
                        if(response.billing==0){
                            window.location.href='/plan';
                        }
                    } else {
                        // Handle case where response indicates failure
                        console.log('Registration failed.');
                    }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>