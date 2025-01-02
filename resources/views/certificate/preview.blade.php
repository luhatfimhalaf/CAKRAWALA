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
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .preview-container {
            max-width: 1100px;
            margin: 3rem auto;
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .certificate-preview {
            width: 100%;
            height: auto;
            border: none;
            border-radius: 12px;
            margin-bottom: 2.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .certificate-preview:hover {
            transform: scale(1.02);
        }

        .certificate-details {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2.5rem;
            border: 1px solid #e9ecef;
        }

        .action-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
        }

        .btn {
            padding: 0.8rem 2rem;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s ease;
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
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .page-title {
            color: #19535f;
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .page-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: #19535f;
            border-radius: 2px;
        }

        .detail-label {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
        }

        .detail-value {
            font-size: 1.1rem;
            font-weight: 500;
            color: #19535f;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="preview-container">
        <h2 class="text-center page-title">Preview Sertifikat</h2>

        <!-- Preview Image -->
        <div class="text-center">
            <img src="{{ $certificateImage }}" 
                 class="certificate-preview" 
                 alt="Certificate Preview">
        </div>

        <!-- Certificate Details -->
        <div class="certificate-details">
            <h5 class="mb-4" style="color: #19535f; font-weight: 600;">Detail Sertifikat</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-label">Nama</div>
                    <div class="detail-value">{{ auth()->user()->name }}</div>
                    
                    <div class="detail-label">Kursus</div>
                    <div class="detail-value">{{ $certificate->quiz->course->title }}</div>
                </div>
                <div class="col-md-6">
                    <div class="detail-label">Nomor Sertifikat</div>
                    <div class="detail-value">{{ $certificate->certificate_number }}</div>
                    
                    <div class="detail-label">Tanggal Selesai</div>
                    <div class="detail-value">{{ $certificate->completion_date->format('d F Y') }}</div>
                    
                    <div class="detail-label">Nilai Akhir</div>
                    <div class="detail-value">{{ $certificate->score }}</div>
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
