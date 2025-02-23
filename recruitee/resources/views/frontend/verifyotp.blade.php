<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otp Verification</title>
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

        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            display: inline-block;
            border: 2px solid #3498db;
            border-radius: 25px;
            box-sizing: border-box;
            font-size: 16px;
            transition: 0.3s;
            outline: none;
            background: #f9f9f9;
        }

        input[type="text"]:focus {
            border-color: #2ecc71;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(46, 204, 113, 0.5);
        }

        input[type="text"]::placeholder {
            color: #999;
            font-style: italic;
        }

        input[type="text"]:hover {
            border-color: #33c292;
            box-shadow: 0 0 10px #33c292;
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
            <form id="login-form" method="post" action="{{ route('otp.verify') }}">
                @csrf
                <img src="/storage/media/avatar (1).svg" alt="Avatar">
                <h2 class="title">OTP Verification</h2>
            
                <!-- OTP Input Field -->
                <div class="input-div one">
                    <div class="div">
                        <label for="otp">Enter OTP</label>
                        <input type="text" id="otp" name="otp" placeholder="Enter OTP" required minlength="4" maxlength="6">
                    </div>
                </div>
            
                <!-- Hidden Email Field -->
                <input type="hidden" name="email" value="{{ $user->email }}">
            
                <!-- Submit Button -->
                <input type="submit" class="btn" value="Verify" id="submit-btn">
            </form>
            
        </div>
    </div>



</body>

</html>
