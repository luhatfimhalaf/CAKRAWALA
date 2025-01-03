<<<<<<< HEAD
<!-- resources/views/edit-profile.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}">
                @if ($user->address)
                    <div>
                        <input type="checkbox" name="remove_address" value="1"> Remove address
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="work_experience" class="form-label">Work Experience</label>
                <input type="text" name="work_experience" class="form-control" value="{{ old('work_experience', $user->work_experience) }}">
                @if ($user->work_experience)
                    <div>
                        <input type="checkbox" name="remove_work_experience" value="1"> Remove work experience
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="last_education" class="form-label">Last Education</label>
                <input type="text" name="last_education" class="form-control" value="{{ old('last_education', $user->last_education) }}">
                @if ($user->last_education)
                    <div>
                        <input type="checkbox" name="remove_last_education" value="1"> Remove last education
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="expertise" class="form-label">Expertise</label>
                <input type="text" name="expertise" class="form-control" value="{{ old('expertise', $user->expertise) }}">
                @if ($user->expertise)
                    <div>
                        <input type="checkbox" name="remove_expertise" value="1"> Remove expertise
                    </div>
                @endif
            </div>

            <!-- Display current profile picture -->
            <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <div>
                    @if ($user->profile_picture)
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" width="150">
                        <div>
                            <input type="checkbox" name="remove_profile_picture" value="1"> Remove profile picture
                        </div>
                    @endif
                </div>
                <input type="file" name="profile_picture" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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

      .form-container {
          background: #ffffff;
          border-radius: 10px;
          padding: 20px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .form-label {
          font-weight: 600;
      }

      .btn-primary {
          background: #19535f;
          border: none;
          transition: all 0.3s ease;
      }

      .btn-primary:hover {
          background: #133d47;
          transform: scale(1.05);
      }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('partials.side-navbar-edit-profile')
    <div class="main-content">
        <div class="hero-section">
            <h1>Edit Profile</h1>
            <p>Update your profile information and preferences.</p>
        </div>

        <div class="container">
            <div class="form-container">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Profile Picture -->
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                    </div>

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address">{{ old('address', $user->address) }}</textarea>
                    </div>

                    <!-- Work Experience -->
                    <div class="mb-3">
                        <label for="work_experience" class="form-label">Work Experience</label>
                        <textarea class="form-control" id="work_experience" name="work_experience">{{ old('work_experience', $user->work_experience) }}</textarea>
                    </div>

                    <!-- Last Education -->
                    <div class="mb-3">
                        <label for="last_education" class="form-label">Last Education</label>
                        <input type="text" class="form-control" id="last_education" name="last_education" value="{{ old('last_education', $user->last_education) }}">
                    </div>

                    <!-- Expertise -->
                    <div class="mb-3">
                        <label for="expertise" class="form-label">Expertise</label>
                        <input type="text" class="form-control" id="expertise" name="expertise" value="{{ old('expertise', $user->expertise) }}">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
