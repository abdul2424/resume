<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 14rem;
            padding: 0 2rem;
        }

        .img {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .img img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
        }

        .login-content {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }

        form {
            width: 360px;
        }

        .login-content h2 {
            margin: 15px 0;
            color: #333;
            text-transform: uppercase;
            font-size: 2.9rem;
        }

        .input-div {
            position: relative;
            display: grid;
            grid-template-columns: 7% 93%;
            margin: 25px 0;
            padding: 5px 0;
            border-bottom: 2px solid #d9d9d9;
        }

        .input-div.one {
            margin-top: 0;
        }

        .i {
            color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .i i {
            transition: .3s;
        }

        .input-div > div {
            position: relative;
            height: 45px;
        }

        .input-div > div > h5 {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
            transition: .3s;
        }

        .input-div > div > input:focus + h5,
        .input-div > div > select:focus + h5,
        .input-div > div > input:not(:placeholder-shown) + h5,
        .input-div > div > select:not(:placeholder-shown) + h5 {
            top: -10px;
            font-size: 15px;
            color: #38d39f;
        }

        .input-div:before, .input-div:after {
            content: '';
            position: absolute;
            bottom: -2px;
            width: 0%;
            height: 2px;
            background-color: #38d39f;
            transition: .4s;
        }

        .input-div:before {
            right: 50%;
        }

        .input-div:after {
            left: 50%;
        }

        .input-div.focus:before, .input-div.focus:after {
            width: 50%;
        }

        .input-div.focus > div > .i > i {
            color: #38d39f;
        }

        .input-div > div > input, .input-div > div > select {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: none;
            padding: 0.5rem 0.7rem;
            font-size: 1.2rem;
            color: #555;
            font-family: 'Poppins', sans-serif;
        }

        .btn {
            display: block;
            width: 100%;
            height: 50px;
            border-radius: 25px;
            outline: none;
            border: none;
            background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
            background-size: 200%;
            font-size: 1.2rem;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }

        .btn:hover {
            background-position: right;
        }

        .last {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .last a {
            text-decoration: none;
            color: #37756A;
            margin-left: 5px;
        }

        .last a:hover {
            text-decoration: underline;
        }

        .error-message {
            position: absolute;
            bottom: -20px;
            right: 0;
            color: red;
            font-size: 0.7rem;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="/storage/media/mobile.svg">
        </div>
        <div class="login-content">
            <form id="signup-form" action="/user_register" method="post">
                @csrf
                <h2 class="title">Signup</h2>

                <!-- Name Field -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="name" id="signup-name" class="input" minlength="2" maxlength="50" placeholder=" " required disabled>
                        <h5>Name</h5>
                        <span class="error-message" id="error-name">Name must be between 2 and 50 characters and contain only letters.</span>
                    </div>
                </div>

                <!-- Email Field -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <input type="email" name="email" id="signup-email" class="input" placeholder=" " required disabled>
                        <h5>Email</h5>
                        <span class="error-message" id="error-email">Please enter a valid email address.</span>
                    </div>
                </div>

                <!-- User Type Field -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <div class="div">
                        <select name="user_type" id="signup-user-type" class="input" required disabled>
                            <option value="" disabled selected>Select User Type</option>
                            <option value="employee">Employee</option>
                            <option value="employer">Employer</option>
                        </select>
                        <h5>User Type</h5>
                        <span class="error-message" id="error-user-type">Please select a user type.</span>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" id="signup-password" class="input" minlength="8" placeholder=" " required disabled>
                        <h5>Password</h5>
                        <span class="error-message" id="error-password"></span>
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="confirm_password" id="signup-confirm-password" class="input" placeholder=" " required disabled>
                        <h5>Confirm Password</h5>
                        <span class="error-message" id="error-confirm-password">Passwords do not match.</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <input type="submit" value="Signup" class="btn" disabled>
                <div class="last">Already have an account? <a href="/login">Login</a></div>
            </form>
        </div>
    </div>

    <script>
        const formFields = [
            { id: 'signup-name', errorId: 'error-name', validate: (value) => /^[A-Za-z\s]{2,50}$/.test(value) },
            { id: 'signup-email', errorId: 'error-email', validate: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) },
            { id: 'signup-user-type', errorId: 'error-user-type', validate: (value) => value !== '' },
            { 
                id: 'signup-password', 
                errorId: 'error-password', 
                validate: (value) => {
                    const messages = [];
                    if (!/(?=.*[a-z])/.test(value)) messages.push('Include at least one lowercase letter.');
                    if (!/(?=.*[A-Z])/.test(value)) messages.push('Include at least one uppercase letter.');
                    if (!/(?=.*\d)/.test(value)) messages.push('Include at least one number.');
                    if (!/(?=.*[@$!%*?&])/.test(value)) messages.push('Include at least one special character.');
                    if (value.length < 8) messages.push('Must be at least 8 characters long.');
                    const errorElement = document.getElementById('error-password');
                    errorElement.innerHTML = messages.join('<br>');
                    errorElement.style.display = messages.length ? 'block' : 'none';
                    return messages.length === 0;
                }
            },
            { id: 'signup-confirm-password', errorId: 'error-confirm-password', validate: (value) => value === document.getElementById('signup-password').value },
        ];

        const inputs = formFields.map((field) => document.getElementById(field.id));

        inputs.forEach((input, index) => {
            input.disabled = index !== 0;

            input.addEventListener('input', () => {
                const field = formFields[index];
                const error = document.getElementById(field.errorId);
                // Hide error when input is valid
                if (field.validate(input.value.trim())) {
                    error.style.display = 'none';
                }
            });

            input.addEventListener('blur', () => {
                const field = formFields[index];
                const error = document.getElementById(field.errorId);

                if (!field.validate(input.value.trim())) {
                    error.style.display = 'block';
                } else {
                    error.style.display = 'none';

                    // Enable the next field if validation passes
                    if (index < inputs.length - 1) {
                        inputs[index + 1].disabled = false;
                        inputs[index + 1].focus();
                    }

                    // Enable submit button if all fields are valid
                    if (index === inputs.length - 1) {
                        document.querySelector('.btn').disabled = false;
                    }
                }
            });
        });
    </script>
</body>
</html>
