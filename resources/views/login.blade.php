<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #19535f, #457b9d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
            max-width: 1100px;
            width: 100%;
        }
        .login-form {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .login-image img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .login-button {
            background-color: #19535f;
            color: white;
            border-radius: 50px;
            padding: 12px 20px;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        .login-button:hover {
            background-color: #457b9d;
        }
        .form-control {
            border-radius: 25px;
            border: 2px solid #ddd;
            padding: 10px 15px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #19535f;
            box-shadow: 0 0 8px rgba(25, 83, 95, 0.5);
        }
        .form-label {
            font-weight: 600;
        }
        a {
            color: #19535f;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .forgot-password {
            font-size: 0.9rem;
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #19535f;
        }
        /* Media Queries */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                padding: 20px;
            }
            .login-form {
                width: 100%;
                margin-bottom: 20px;
            }
            .login-image img {
                max-height: 350px;
                object-fit: cover;
            }
        }
        /* Styling for social media buttons */
        .social-buttons a {
            font-size: 24px;
            margin: 0 10px; /* Adds space between the icons */
            color: #19535f;
        }
        .social-buttons a:hover {
            color: #457b9d;
        }
    </style>
</head>
<body>

<div class="login-container">
    <!-- Left Form Section -->
    <div class="login-form">
        <h2 class="fw-bold mb-4 text-center text-primary">Welcome Back</h2>

        <!-- Display error messages -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf <!-- Laravel CSRF Token -->
            <div class="mb-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password *</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn login-button">Log In</button>
            </div>
        </form>
        <div class="text-center my-3">or log in with</div>
        <div class="d-flex justify-content-center social-buttons">
            <a href="#"><i class="bi bi-apple"></i></a>
            <a href="#"><i class="bi bi-google"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
        </div>
        <div class="text-center mt-4 forgot-password">
            <small>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></small>
        </div>
    </div>
    <!-- Right Image Section -->
    <div class="col-md-6 d-none d-md-block login-image">
        <img src="{{ asset('images/Disability-Login.png') }}" alt="Login Image">
    </div>
</div>

<!-- Add Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
