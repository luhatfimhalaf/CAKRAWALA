<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kursus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>{{ $course->title }}</h1>
    <img src="{{ asset($course->image) }}" alt="{{ $course->title }}" class="img-fluid">
    <p><strong>Category:</strong> {{ ucfirst($course->category) }}</p>
    <p><strong>Lessons:</strong> {{ $course->lessons }}</p>
    <p><strong>Duration:</strong> {{ $course->duration }}</p>
    <p><strong>Instructor:</strong> {{ $course->instructor }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Price:</strong> Rp{{ number_format($course->price, 0, ',', '.') }}</p>
    <a href="/my-courses" class="btn btn-primary">Back to Courses</a>
</div>
</body>
</html>
