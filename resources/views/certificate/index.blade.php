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
            background-color: #f8f9fa;
            color: #19535f;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .main-container {
            flex: 1;
            display: flex;
            height: 100%;
            overflow: hidden;
        }

        .sidebar {
            background-color: #19535f;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 250px;
            height: 100%;
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

        .main-content {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        .certificate-card {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .certificate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .certificate-status {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .btn-download {
            background-color: #19535f;
            color: #d1e8eb;
            border: 2px solid #19535f;
            padding: 8px 20px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .btn-download:hover {
            background-color: #133d47;
            border-color: #133d47;
            color: #d1e8eb;
        }

        .btn-outline-primary {
            color: #19535f;
            border: 2px solid #19535f;
            padding: 8px 20px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .btn-outline-primary:hover {
            background-color: #133d47;
            border-color: #133d47;
            color: #d1e8eb;
        }

        .certificate-preview {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div>
            <div>
                <h2>CAKRAWALA</h2>
                <a href="{{ route('dashboard') }}" ><i class="bi bi-house"></i> Dashboard</a>
                <a href="{{ route('kursus.index') }}"><i class="bi bi-book"></i> Courses</a>
                <a href="{{ route('quiz.index') }}"><i class="bi bi-list-task"></i> Quiz</a>
                <a href="{{ route('faq.index') }}"><i class="bi bi-question-circle"></i> FAQ</a>
                <a href="#"><i class="bi bi-bell"></i> Notifications</a>
                <a href="#"><i class="bi bi-gear"></i> Settings</a>
                <a href="{{ route('certificate.index') }}" class="active"><i class="bi bi-file-text"></i> Certificate</a>
            </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="container">
                <h2 class="mb-4">Sertifikat Saya</h2>
                <div class="row">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>