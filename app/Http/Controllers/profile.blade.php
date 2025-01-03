<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            font-family: 'Poppins', sans-serif;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .hero-section {
            background: linear-gradient(90deg, #19535f, #133d47);
            color: #ffffff;
            text-align: center;
            padding: 50px 20px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 1.1rem;
        }

        .profile-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('partials.side-navbar-profile')
    <div class="main-content">
        <div class="hero-section">
            <h1>Your Profile</h1>
            <p>Manage your personal information.</p>
        </div>

        <div class="container">
            <div class="profile-container">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'default-avatar.png' }}" alt="Profile Picture" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-8">
                        <h3>{{ $user->name }}</h3>
                        <p><strong>Phone:</strong> {{ $user->phone }}</p>
                        <p><strong>Address:</strong> {{ $user->address }}</p>
                        <p><strong>Work Experience:</strong> {{ $user->work_experience }}</p>
                        <p><strong>Last Education:</strong> {{ $user->last_education }}</p>
                        <p><strong>Expertise:</strong> {{ $user->expertise }}</p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
