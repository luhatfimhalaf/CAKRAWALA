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
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            font-family: 'Poppins', sans-serif;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        /* Banner/Hero Section */
        .daftar-kursus-banner {
            background: linear-gradient(90deg, #19535f, #133d47);
            color: #ffffff;
            text-align: center;
            padding: 50px 20px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        .daftar-kursus-banner::before {
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

        .daftar-kursus-banner h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .daftar-kursus-banner p {
            font-size: 1.1rem;
            position: relative;
            z-index: 2;
        }

        /* Card Styling */
        .course-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .course-card img {
            border-radius: 15px 15px 0 0;
            height: 150px;
            object-fit: cover;
        }

        .course-card h5 {
            font-weight: 600;
            color: #19535f;
            margin-top: 10px;
        }

        .course-card p {
            color: #555;
        }

        .btn-enroll, 
        .btn-danger,
        .btn-success {
            background-color: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
        }

        .btn-enroll:hover,
        .btn-danger:hover,
        .btn-success:hover {
            background-color: #133d47;
            color: #ffffff;
        }

        /* Tambahkan style khusus untuk btn-danger */
        .btn-danger {
            background-color: #dc3545 !important; /* Warna merah dari Bootstrap */
        }

        .btn-danger:hover {
            background-color: #bb2d3b !important; /* Warna merah yang lebih gelap saat hover */
        }

        /* Container Spacing */
        .container {
            margin-top: 30px;
        }

        /* Section Headers */
        h3 {
            font-weight: 600;
            color: #19535f;
        }

        /* Badge Styling */
        .badge {
            border-radius: 50px;
            padding: 8px 15px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        @include('partials.side-navbar-quiz', ['user' => Auth::user()])
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Banner -->
            <div class="daftar-kursus-banner">
                <h2>Daftar Kuis</h2>
                <p class="text-white">Pilih kursus terbaik yang sesuai dengan kebutuhan Anda.</p>
            </div>
            
            <!-- Quizzes content -->
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>