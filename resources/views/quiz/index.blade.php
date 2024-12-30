<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Import Google Font */
        body {
            background-color: #f8f9fa;
            color: #19535f;
            font-family: 'Poppins', sans-serif;
            height: 100vh; /* Ensure full height for body */
            margin: 0;
            display: flex; /* Flex container for sidebar and content */
            flex-direction: column;
        }

        /* Flex container for sidebar and content */
        .main-container {
            flex: 1;
            display: flex;
            height: 100%; /* Full height for main content */
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #19535f;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 250px; /* Fixed width for sidebar */
            height: 100%; /* Stretch sidebar to full height */
            padding: 20px;
        }

        .sidebar h2 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #133d47;
            color: #d1e8eb;
        }

        .sidebar a.active {
            background-color: #0f2e38;
            color: #d1e8eb;
        }

        /* Main Content Styling */
        .main-content {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        /* Banner Styling */
        .daftar-kursus-banner {
            padding: 50px 0;
            background-color: #e9ecef;
            text-align: center;
        }

        .daftar-kursus-banner h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #19535f;
        }

        .daftar-kursus-banner p {
            font-size: 1rem;
            color: #6c757d;
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
    <div class="main-container">
        <div class="sidebar">
            <div>
                <h2>CAKRAWALA</h2>
                <a href="{{ route('dashboard') }}" ><i class="bi bi-house"></i> Dashboard</a>
                <a href="{{ route('kursus.index') }}"><i class="bi bi-book"></i> Courses</a>
                <a href="{{ route('quiz.index') }}" class="active"><i class="bi bi-list-task"></i> Quiz</a>
                <a href="{{ route('faq.index') }}"><i class="bi bi-question-circle"></i> FAQ</a>
                <a href="#"><i class="bi bi-bell"></i> Notifications</a>
                <a href="#"><i class="bi bi-gear"></i> Settings</a>
            </div>
            <div class="mt-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Go Premium</h5>
                        <p class="card-text">Explore 100+ expert curated courses prepared for you.</p>
                        <button class="btn btn-primary">Get Access</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Banner -->
            <div class="daftar-kursus-banner">
                <div class="container">
                    <h2>Daftar Kuis</h2>
                    <p class="text-muted">Pilih kursus terbaik yang sesuai dengan kebutuhan Anda.</p>
                </div>
            </div>

<!-- Quizzes -->
<div class="container mt-5">
    <!-- Incomplete Quizzes -->
    <div class="mb-5">
        <h3 class="mb-4">Kuis Yang Belum Dikerjakan</h3>
        <div class="row g-4">
            @foreach ($quiz as $quiz_item)
                @if($quiz_item->userAnswers->count() == 0)
                    <div class="col-md-4">
                        <div class="card course-card">
                            <img src="{{ asset($quiz_item->course->image) }}" class="card-img-top" alt="{{ $quiz_item->course->title }}">
                            <div class="card-body">
                                <span class="badge bg-primary mb-3">{{ ucfirst($quiz_item->course->category) }}</span>
                                <h5 class="card-title">{{ $quiz_item->course->title }}</h5>
                                <div class="course-info my-3">
                                    <p>{{ $quiz_item->description }}</p>
                                    <span>Durasi: {{ $quiz_item->duration ?? '10' }} Menit</span> | 
                                    <span>Soal: {{ $quiz_item->total_questions ?? '5' }} Soal</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('quiz.show', $quiz_item->id) }}" class="btn btn-enroll">Mulai Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Failed Quizzes (Score < 80) -->
    <div class="mb-5">
        <h3 class="mb-4">Kuis Yang Perlu Diulang</h3>
        <div class="row g-4">
            @foreach ($quiz as $quiz_item)
                @php
                    $latestAnswer = $quiz_item->userAnswers()->orderBy('created_at', 'desc')->first();
                @endphp
                @if($quiz_item->userAnswers->count() > 0 && $latestAnswer && $latestAnswer->score < 80)
                    <div class="col-md-4">
                        <div class="card course-card">
                            <img src="{{ asset($quiz_item->course->image) }}" class="card-img-top" alt="{{ $quiz_item->course->title }}">
                            <div class="card-body">
                                <span class="badge bg-primary mb-3">{{ ucfirst($quiz_item->course->category) }}</span>
                                <h5 class="card-title">{{ $quiz_item->course->title }}</h5>
                                <div class="course-info my-3">
                                    <p>{{ $quiz_item->description }}</p>
                                    <span>Durasi: {{ $quiz_item->duration ?? '10' }} Menit</span> | 
                                    <span>Soal: {{ $quiz_item->total_questions ?? '5' }} Soal</span>
                                    <div class="mt-2">
                                        <span class="text-danger">Nilai Terakhir: {{ $latestAnswer->score }}</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('quiz.show', $quiz_item->id) }}" class="btn btn-danger">Kerjakan Ulang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Completed Quizzes (Only show if score >= 80) -->
    <div>
        <h3 class="mb-4">Kuis Yang Sudah Dikerjakan</h3>
        <div class="row g-4">
            @foreach ($quiz as $quiz_item)
                @php
                    $latestAnswer = $quiz_item->userAnswers()->orderBy('created_at', 'desc')->first();
                @endphp
                @if($quiz_item->userAnswers->count() > 0 && $latestAnswer && $latestAnswer->score >= 80)
                    <div class="col-md-4">
                        <div class="card course-card">
                            <img src="{{ asset($quiz_item->course->image) }}" class="card-img-top" alt="{{ $quiz_item->course->title }}">
                            <div class="card-body">
                                <span class="badge bg-primary mb-3">{{ ucfirst($quiz_item->course->category) }}</span>
                                <h5 class="card-title">{{ $quiz_item->course->title }}</h5>
                                <div class="course-info my-3">
                                    <p>{{ $quiz_item->description }}</p>
                                    <span>Durasi: {{ $quiz_item->duration ?? '10' }} Menit</span> | 
                                    <span>Soal: {{ $quiz_item->total_questions ?? '5' }} Soal</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('quiz.result', $quiz_item->id) }}" class="btn btn-success">Lihat Hasil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>