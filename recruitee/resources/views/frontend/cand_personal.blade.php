@extends('frontend.index')
@section('content')

<!-- Include Bootstrap CSS -->

<section class="personal py-5">
    <section class="hero text-center mb-5">
        <h1 class="display-4 text-primary">
            <span class="text-success">Candidate</span>
            <span class="text-warning">Registration</span>
        </h1>
    </section>

    <div class="container form-container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="/storage/media/pd.jpg" alt="form" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <form method="post" id="personalForm">
                    @csrf
                    <div class="form-row mb-4">
                        <div class="col-md-4">
                            <label for="firstName">First Name</label>
                            <input class="form-control" type="text" name="firstName" id="firstName" placeholder="E.g Malik">
                        </div>
                        <div class="col-md-4">
                            <label for="middleName">Middle Name</label>
                            <input class="form-control" type="text" name="middleName" id="middleName" placeholder="E.g Mohsin">
                        </div>
                        <div class="col-md-4">
                            <label for="lastName">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" placeholder="E.g Azhar">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <label for="cnic">CNIC</label>
                            <input class="form-control" type="number" name="cnic" id="cnic" placeholder="E.g 3720177498293">
                        </div>
                        <div class="col-md-6">
                            <label for="fname">Father Name</label>
                            <input class="form-control" type="text" name="fname" id="fname" placeholder="E.g Azhar Mehmood">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-4">
                            <label for="dob">DOB</label>
                            <input class="form-control" type="date" name="dob" id="dob">
                        </div>
                        <div class="col-md-4">
                            <label for="nationality">Nationality</label>
                            <input class="form-control" type="text" name="nationality" id="nationality" placeholder="E.g Pakistan">
                        </div>
                        <div class="col-md-4">
                            <label for="dp">Profile</label>
                            <input class="form-control" type="file" name="dp" id="dp">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-6">
                            <label for="phone">Phone Number</label>
                            <input class="form-control" type="number" name="phone" id="phone" placeholder="E.g +923271003436">
                        </div>
                        <div class="col-md-6">
                            <label for="email">E-mail Address</label>
                            <input class="form-control" type="text" name="email" id="email" placeholder="E.g malikmohsinazhar@gmail.com">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-md-4">
                            <label for="gender">Gender</label>
                            <input class="form-control" type="text" name="gender" id="gender" placeholder="Male/Female/Custom">
                        </div>
                        <div class="col-md-4">
                            <label for="religon">Religion</label>
                            <input class="form-control" type="text" name="religon" id="religon" placeholder="E.g Islam">
                        </div>
                        <div class="col-md-4">
                            <label for="section">Section</label>
                            <input class="form-control" type="text" name="section" id="section" placeholder="E.g Sunni">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="address">Candidate Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your job description briefly..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Certification Section -->
<section class="certification hidder py-5">
    <div class="qualification-heading text-center mb-5">
        <h1><span class="text-danger">Certification</span> <span class="text-primary">Details</span></h1>
    </div>
    <div class="container">
        <form method="post" id="certificateForm">
            @csrf
            <div class="form-group mb-4">
                <label for="school">School</label>
                <input class="form-control" type="text" name="school" id="school" placeholder="E.g University Of Sargodha">
            </div>

            <div class="form-row mb-4">
                <div class="col-md-6">
                    <label for="degreeStarted">Started Date</label>
                    <input class="form-control" type="date" name="degreeStarted" id="degreeStarted">
                </div>
                <div class="col-md-6">
                    <label for="degreeCompletion">Completed Date</label>
                    <input class="form-control" type="date" name="degreeCompletion" id="degreeCompletion">
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="degree">Degree</label>
                <input class="form-control" type="text" name="degree" id="degree" placeholder="E.g BS">
            </div>

            <div class="form-group mb-4">
                <label for="subCategory">Area of Study</label>
                <input class="form-control" type="text" name="subCategory" id="subCategory" placeholder="E.g Information Technology">
            </div>

            <div class="form-group mb-4">
                <label for="qualificationDescription">Description (optional)</label>
                <textarea class="form-control" name="qualificationDescription" id="qualificationDescription" rows="3" placeholder="Write your certification description briefly..."></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</section>

<!-- Experience Section -->
<section class="experience hidder py-5">
    <div class="qualification-heading text-center mb-5">
        <h1><span class="text-info">Experience</span> <span class="text-primary">Details</span></h1>
    </div>
    <div class="container">
        <form method="post" id="experienceForm">
            @csrf
            <div class="form-group mb-4">
                <label for="company">Company</label>
                <input class="form-control" type="text" name="company" id="company" placeholder="E.g The Recruiters">
            </div>

            <div class="form-row mb-4">
                <div class="col-md-6">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" id="city" placeholder="E.g Sargodha">
                </div>
                <div class="col-md-6">
                    <label for="country">Country</label>
                    <input class="form-control" type="text" name="country" id="country" placeholder="E.g Pakistan">
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="degree">Title</label>
                <input class="form-control" type="text" name="degree" id="degree" placeholder="E.g Senior Software Engineer">
            </div>

            <div class="form-row mb-4">
                <div class="col-md-6">
                    <label for="startedDate">Started Date</label>
                    <input class="form-control" type="date" name="startedDate" id="startedDate">
                </div>
                <div class="col-md-6">
                    <label for="completedDate">Completed Date</label>
                    <input class="form-control" type="date" name="completedDate" id="completedDate">
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="description">Description (optional)</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write your job description briefly..."></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
</section>

<!-- Skills Section -->
<section class="skill hidder py-5">
    <div class="qualification-heading text-center mb-5">
        <h1><span class="text-warning">Skills</span> <span class="text-primary">/</span> <span class="text-danger">Job Preference</span></h1>
    </div>
    <div class="container">
        <form method="post" id="skillForm">
            @csrf
            <div class="form-group mb-4">
                <label for="jobTitle">Desired Job Title</label>
                <input class="form-control" type="text" name="jobTitle" id="jobTitle" placeholder="E.g Executive Officer">
            </div>

            <div class="form-row mb-4">
                <div class="col-md-6">
                    <label for="workLocation">Preferred Work Location</label>
                    <input class="form-control" type="text" name="workLocation" id="workLocation" placeholder="E.g Sargodha">
                </div>
                <div class="col-md-6">
                    <label for="company">Industry Preference</label>
                    <input class="form-control" type="text" name="company" id="company" placeholder="E.g Textile">
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="type">Employment Type</label><br>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="job_type[]" id="fulltime1" value="Full-Time">
                    <label class="form-check-label" for="fulltime1">Full-Time</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="job_type[]" id="parttime" value="Part-Time">
                    <label class="form-check-label" for="parttime">Part-Time</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="job_type[]" id="permanent" value="Permanent">
                    <label class="form-check-label" for="permanent">Permanent</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="job_type[]" id="temporary" value="Temporary">
                    <label class="form-check-label" for="temporary">Temporary</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="job_type[]" id="contract" value="Contract">
                    <label class="form-check-label" for="contract">Contract</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" name="job_type[]" id="internship" value="Internship">
                    <label class="form-check-label" for="internship">Internship</label>
                </div>
            </div>

            <div class="form-row mb-4">
                <div class="col-md-6">
                    <label for="salary">Expected Salary</label>
                    <input class="form-control" type="number" name="salary" id="salary" placeholder="E.g 10,000-100,000">
                </div>
                <div class="col-md-6">
                    <label for="resume">Resume</label>
                    <input class="form-control-file" type="file" name="resume" id="resume">
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="skills">Skills</label>
                <textarea class="form-control" name="skills" id="skills" rows="3" placeholder="Write your skills and separate each skill with a comma..."></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </form>
    </div>
</section>

<!-- Include Bootstrap JS and dependencies -->

@endsection

@section('js')


<script>
    $(document).ready(function() {
        // Initial section (Candidate Registration)
        $('.certification').addClass('hidder');
        $('.experience').addClass('hidder');
        $('.skill').addClass('hidder');

        // Handle personal form submission
        $('#personalForm').submit(function(event) {
            event.preventDefault();

            var postData = $(this).serializeArray();
            $.ajax({
                url: '/candidate_reg',
                method: 'POST',
                data: postData,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('.personal').addClass('hidder');
                        $('.certification').removeClass('hidder');
                    } else {
                        console.log('Registration failed.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        // Handle certification form submission
        $('#certificateForm').submit(function(event) {
            event.preventDefault();

            var postData = $(this).serializeArray();
            $.ajax({
                url: '/candidate_certificate',
                method: 'POST',
                data: postData,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('.certification').addClass('hidder');
                        $('.experience').removeClass('hidder');
                    } else {
                        console.log('Registration failed.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        // Handle experience form submission
        $('#experienceForm').submit(function(event) {
            event.preventDefault();

            var postData = $(this).serializeArray();
            $.ajax({
                url: '/candidate_experience',
                method: 'POST',
                data: postData,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('.experience').addClass('hidder');
                        $('.skill').removeClass('hidder');
                    } else {
                        console.log('Registration failed.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        // Handle skill form submission
        $('#skillForm').submit(function(event) {
            event.preventDefault();

            var postData = $(this).serializeArray();
            $.ajax({
                url: '/candidate_skill',
                method: 'POST',
                data: postData,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $('.skill').addClass('hidder');
                        if (response.billing == 0) {
                            window.location.href = '/plan';
                        }
                    } else {
                        console.log('Registration failed.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection
