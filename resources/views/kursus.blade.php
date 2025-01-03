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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
            <h1>Course</h1>
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
<<<<<<< HEAD
    </div>
=======
    </div>
=======
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
>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
