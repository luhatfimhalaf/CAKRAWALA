<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Sertifikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .preview-container {
            max-width: 1000px;
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .certificate-preview {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .certificate-details {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
        }

        .btn-download {
            background-color: #19535f;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="preview-container">
        <h2 class="text-center mb-4">Preview Sertifikat</h2>

        <!-- Preview Image -->
        <div class="text-center">
            <img src="{{ $certificateImage }}" 
                 class="certificate-preview" 
                 alt="Certificate Preview">
        </div>

        <!-- Certificate Details -->
        <div class="certificate-details">
            <h5 class="mb-3">Detail Sertifikat:</h5>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nama:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Kursus:</strong> {{ $certificate->quiz->course->title }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Nomor Sertifikat:</strong> {{ $certificate->certificate_number }}</p>
                    <p><strong>Tanggal Selesai:</strong> {{ $certificate->completion_date->format('d F Y') }}</p>
                    <p><strong>Nilai Akhir:</strong> {{ $certificate->score }}</p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="{{ route('certificate.index') }}" class="btn btn-back">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('certificate.generate', $certificate->quiz_id) }}" class="btn btn-download">
                <i class="bi bi-download"></i> Download Sertifikat
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
