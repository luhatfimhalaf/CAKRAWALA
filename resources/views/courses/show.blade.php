<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Thumbnail dan Deskripsi Kursus -->
                <img src="{{ $course->image }}" class="img-fluid mb-4" alt="{{ $course->title }}">
                <h1>{{ $course->title }}</h1>
                <p>{{ $course->description }}</p>

                <!-- Pemutar Video -->
                <div class="mt-4">
                    <h3>Video Pembelajaran</h3>
                    <video controls class="w-100">
                        <source src="{{ $course->video_url }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video.
                    </video>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Informasi Detail Kursus -->
                <h3>Detail Kursus</h3>
                <ul>
                    <li><strong>Kategori:</strong> {{ $course->category }}</li>
                    <li><strong>Pelajaran:</strong> {{ $course->lessons }} modul</li>
                    <li><strong>Durasi:</strong> {{ $course->duration }}</li>
                    <li><strong>Harga:</strong> Rp {{ number_format($course->price, 0, ',', '.') }}</li>
                    <li><strong>Instruktur:</strong> {{ $course->instructor }}</li>
                    <li><strong>Siswa:</strong> {{ $course->students }}</li>
                </ul>
                <button class="btn btn-success">Daftar</button>
            </div>
        </div>
    </div>
</body>
</html>
