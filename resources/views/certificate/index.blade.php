<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

        .cards-section {
            margin-top: 50px;
        }

        .certificate-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .certificate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .certificate-preview {
            border-radius: 15px 15px 0 0;
            height: 150px;
            object-fit: cover;
        }

        .btn {
            border-radius: 50px;
            padding: 10px 20px;
        }

        .btn-download {
            background-color: #19535f;
            color: #ffffff;
            border: none;
        }

        .btn-download:hover {
            background-color: #133d47;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        @include('partials.side-navbar-quiz', ['user' => Auth::user()])

        <!-- Main Content -->
        <div class="main-content">
            <!-- Hero Section -->
            <div class="hero-section">
                <h1>Sertifikat Saya</h1>
                <p>Lihat dan unduh sertifikat yang telah Anda peroleh</p>
            </div>

            <!-- Certificates Section -->
            <div class="cards-section row">
                @forelse ($certificates as $certificate)
                    <div class="col-md-4">
                        <div class="card certificate-card">
                            <img src="{{ asset($certificate->quiz->course->image) }}" 
                                 class="certificate-preview" 
                                 alt="Certificate Preview">
                            <div class="card-body">
                                <h5 class="card-title">{{ $certificate->quiz->course->title }}</h5>
                                <p class="card-text">
                                    <small class="text-muted">Selesai pada: {{ $certificate->created_at->format('d M Y') }}</small>
                                </p>
                                <p class="card-text">
                                    <strong>Nilai Akhir:</strong> {{ $certificate->score }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('certificate.preview', $certificate->quiz_id) }}" 
                                       class="btn btn-outline-primary">
                                        <i class="bi bi-eye"></i> Preview
                                    </a>
                                    <a href="{{ route('certificate.generate', $certificate->quiz_id) }}" 
                                       class="btn btn-download">
                                        <i class="bi bi-download"></i> Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            <i class="bi bi-info-circle me-2"></i>
                            Anda belum memiliki sertifikat. Selesaikan kuis dengan nilai minimal 80 untuk mendapatkan sertifikat.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>