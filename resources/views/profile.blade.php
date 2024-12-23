<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Profile Details</h1>

        <!-- Profile Display Section -->
        <div class="card mt-4">
            <div class="card-header">
                <h2>Profile Information</h2>
            </div>
            <div class="card-body">
                <p><strong>First Name:</strong> {{ $profile->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $profile->last_name }}</p>
                <p><strong>Bio:</strong> {{ $profile->bio }}</p>
                <p><strong>Image:</strong></p>
                <img src="{{ asset($profile->image_path) }}" alt="Profile Image" class="img-fluid">
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-3">
            <a href="{{ url('/profiles') }}" class="btn btn-secondary">Back to Profiles</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
