<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #EFEFF6;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #FFFFFF;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            background-color: #F7F7FB;
            padding-right: 40px;
        }

        .btn-primary {
            background-color: #0F0D29;
            border-color: #0F0D29;
        }

        .btn-primary:hover {
            background-color: #1c1a3f;
            border-color: #1c1a3f;
        }

        .toggle-password {
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 70%;
            transform: translateY(-50%);
            color: #999;
        }

        .position-relative {
            position: relative;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h3 class="text-center mb-4" style="color:#0F0D29;">Admin Login</h3>
        <form action="{{ route('admin.login') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="admin@example.com">
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                <i class="fas fa-eye toggle-password" id="togglePassword"></i>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
