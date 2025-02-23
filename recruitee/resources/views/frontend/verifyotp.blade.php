<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
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

        .login-content img {
            height: 100px;
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

        .i {
            color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
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
            opacity: 1; /* Keep the hint visible until user types */
        }

        .input-div.focus > div > h5 {
            top: -10px;
            font-size: 15px;
            color: #38d39f;
        }

        .input-div.focus > .i > i {
            color: #38d39f;
        }

        .input-div > div > input {
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

        .text {
            display: flex;
            color: #999;
            justify-content: space-evenly;
            text-align: center;
        }

        .text a {
            text-decoration: none;
            color: #37756A;
        }

        .text a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 0.8rem;
            position: absolute;
            bottom: -20px;
            right: 0;
            display: none;
        }

        @media screen and (max-width: 900px) {
            .container {
                grid-template-columns: 1fr;
            }

            .img {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="img">
        <img src="storage/media/mobile.svg" alt="Mobile Illustration">
    </div>
    <div class="login-content">
        <form id="login-form" method="post" action="">
        @csrf
            <img src="/storage/media/avatar (1).svg" alt="Avatar">
            <h2 class="title">Otp Verification</h2>

            <!-- Email Field -->
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Otp</h5>
                    <input type="otp" name="email" id="login-email" class="input" placeholder=" " required>
                    <span class="error-message" id="email-error" name="otp">Otp</span>
                </div>
            </div>
            <input name="email" value="{{$user->email}}" name="email">

            <!-- Password Field -->


            <input type="submit" class="btn" value="Login" disabled id="submit-btn">
        </form>
    </div>
</div>



</body>
</html>
