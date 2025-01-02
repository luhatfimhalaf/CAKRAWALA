<<<<<<< Updated upstream
@extends('layouts.app')

@section('content')
<!-- DAFTAR KURSUS Title Without Background Image -->
<div class="daftar-kursus-banner text-center">
    <div class="container">
        <h2>DAFTAR KURSUS</h2>
        <p class="text-muted">Pilih kursus terbaik yang sesuai dengan kebutuhan Anda.</p>
    </div>
</div>

<div class="container mt-5">
    <div class="top-popular">
        <span class="badge bg-info text-dark">TOP POPULAR COURSE</span>
        <h2 class="text-center mb-5">Join the Best Courses on Edunity</h2>
    </div>

    <div class="row g-4">
        @foreach ($courses as $course)
        <div class="col-md-4">
            <div class="card course-card">
                <img src="{{ $course['image'] }}" class="card-img-top" alt="{{ $course['title'] }}">

                <div class="card-body">
                    <span class="badge bg-primary mb-3">{{ $course['category'] }}</span>
                    <h5 class="card-title">{{ $course['title'] }}</h5>

                    <!-- Course Info -->
                    <div class="course-info my-4">
                        <span>Lessons {{ $course['lessons'] }}</span> | 
                        <span>Duration {{ $course['duration'] }}</span> | 
                        <span>Students {{ $course['students'] }}</span>
                    </div>

                    <!-- Instructor Info -->
                    <div class="d-flex align-items-center my-3">
                        <img src="{{ $course['image-mentor'] }}" alt="Instructor Photo" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                        <span class="text-muted">By {{ $course['instructor'] }}</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <p class="price mb-0"><strong>Rp{{ $course['price'] }}</strong></p>
                        <a href="#" class="btn btn-enroll">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4 mb-5">
        <button class="btn btn-outline-info">Load More Courses</button>
    </div>
</div>
@include('layouts.footer')
@endsection

@push('styles')
<style>
    /* Include Poppins Font */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        margin: 0;
        padding: 0;
    }
    .daftar-kursus-banner {
        margin: 0;
    }
    body {
        background-color: #f8f9fa;
        color: #19535f;
        font-family: 'Poppins', sans-serif; /* Apply Poppins font */
    }
    .header {
        text-align: center;
        padding: 3rem 0;
        background-color: #19535f;
        color: white;
    }
    .header h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }
    .breadcrumb {
        justify-content: center;
    }
    /* DAFTAR KURSUS Title Styling */
    .daftar-kursus-banner {
        padding: 80px 0;
        margin: 0;
    }
    .container {
        margin: 0 auto; /* Pastikan tidak ada margin tambahan */
        padding: 0; /* Jika ada padding tambahan */
    }
    .daftar-kursus-banner h2 {
        color: #19535f;  /* Title color updated */
        font-size: 3rem;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;  /* Ensure Poppins is applied here as well */
    }
    .daftar-kursus-banner p {
        font-size: 1.25rem;
        color: #f8f9fa;
    }
    /* Course Card Styling */
    .course-card {
        border: none;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .course-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }
    .course-card img {
        border-radius: 15px;
    }
    .btn-enroll {
        background-color: #19535f;
        color: white;
        font-weight: bold;
        border-radius: 5px;
        padding: 0.6rem 2rem;
        transition: background-color 0.3s ease;
    }
    .btn-enroll:hover {
        background-color: #133e48;
    }
    .top-popular {
        text-align: center;
        margin: 3rem 0;
    }
    .top-popular h2 {
        font-size: 1.75rem;
        font-weight: bold;
    }

    /* Course Info Styling */
    .course-info {
        display: flex;
        justify-content: center;
        gap: 1rem;
        font-size: 0.9rem;
        color: #6c757d;
    }
    .course-info span {
        white-space: nowrap;
    }

    /* Price styling */
    .price {
        font-size: 1.25rem;
        color: #19535f;
        font-weight: bold;
    }

    /* Styling for 'Load More' button */
    .btn-outline-info {
        font-size: 1.1rem;
        padding: 0.7rem 3rem;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kursus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -30%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 1;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }
        .hero-section p {
            font-size: 1.1rem;
            position: relative;
            z-index: 2;
        }

        /* Course Card Styling */
        .course-card {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .course-card img {
            border-radius: 15px 15px 0 0;
        }

        .btn-enroll {
            background-color: #19535f;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            padding: 0.5rem 1.5rem;
            transition: background-color 0.3s ease;
        }

        .btn-enroll:hover {
            background-color: #133e48;
        }

        .price {
            font-size: 1.25rem;
            color: #19535f;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('partials.side-navbar-courses', ['user' => Auth::user()])
    <div class="main-content">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1>Course List</h1>
            <p>Choose the best courses tailored to your needs.</p>
        </div>
<div class="container mt-5">
    <div class="row g-4">
        @foreach ($courses as $course)
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="{{ asset($course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                    <div class="card-body">
                        <span class="badge bg-primary mb-3">{{ ucfirst($course->category) }}</span>
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <div class="course-info my-3">
                            <span>Lessons: {{ $course->lessons }}</span> | 
                            <span>Duration: {{ $course->duration }}</span> | 
                            <span>Students: {{ $course->students }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price mb-0"><strong>Rp{{ number_format($course->price, 0, ',', '.') }}</strong></p>
                            <a href="{{ route('kursus.detail', $course->id) }}" class="btn btn-enroll">Enroll</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
>>>>>>> Stashed changes
