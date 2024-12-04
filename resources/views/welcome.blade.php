@extends('layouts.app') {{-- Menggunakan layout utama --}}

@section('title', 'Landing Page - Cakrawala')

@section('content')
    <!-- Hero Section -->
    <section class="hero text-center text-md-start py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold">Raih Karier Impian, Tanpa Batasan</h1>
                    <p class="text-muted">
                        Platform pelatihan digital untuk penyandang disabilitas, menuju dunia kerja yang inklusif.
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                    <a href="#about" class="btn btn-outline-secondary">Tentang Kami</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/Group 23.png') }}" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="info" class="info py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Gambar -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/Desain tanpa judul (17).png') }}" alt="Logo Cakrawala" class="img-fluid" style="max-width: 100%; height: auto; max-height: 400px;">
            </div>
            <!-- Kolom Teks -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Apa Itu Cakrawala</h2>
                <p class="text-muted mb-4">
                    Cakrawala adalah platform inovatif yang dirancang khusus untuk memberikan akses pendidikan berkualitas bagi penyandang disabilitas.
                </p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-star-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                        <span><strong>Kualitas Terbaik:</strong> Kami menyediakan kursus berkualitas tinggi dari pengajar profesional.</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                        <span><strong>Sertifikat Resmi:</strong> Dapatkan sertifikat resmi setelah menyelesaikan kursus.</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-calendar-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                        <span><strong>Fleksibilitas Pembelajaran:</strong> Belajar kapan saja sesuai jadwal Anda.</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-people-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                        <span><strong>Program Fleksibel:</strong> Pilih berbagai paket kursus sesuai kebutuhan Anda.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <!-- Courses Section -->
    <section id="courses" class="py-5">
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Pilih Kursus yang ingin Anda Minati</h2>
            <p class="text-muted">Pelajari skill digital yang paling dicari perusahaan dalam dan luar negeri dan tingkatkan peluangmu untuk mendapatkan pekerjaan yang lebih baik</p>
        </div>

        <!-- Cards Section -->
        <div class="row g-4">
            <!-- UI/UX Design -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">UI/UX Design</h5>
                        <p class="card-text">Pelajari cara menciptakan pengalaman pengguna yang menarik dan fungsional. Kursus ini mencakup prinsip desain, penelitian pengguna, dan pembuatan prototipe.</p>
                    </div>
                </div>
            </div>
            <!-- Front-End Development -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Front-End Development</h5>
                        <p class="card-text">Kuasi keterampilan membangun antarmuka pengguna yang menawan. Dari HTML, CSS, hingga JavaScript, kami akan mengajarkan Anda cara menciptakan website yang responsif dan interaktif.</p>
                    </div>
                </div>
            </div>
            <!-- Back-End Development -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Back-End Development</h5>
                        <p class="card-text">Masuki dunia pengembangan server dengan memahami cara membangun dan mengelola database, API, dan logika aplikasi. Dapatkan keterampilan yang diperlukan untuk menciptakan aplikasi web yang solid dan efisien.</p>
                    </div>
                </div>
            </div>
            <!-- Full Stack Developer -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Full Stack Developer</h5>
                        <p class="card-text">Kombinasikan keterampilan front-end dan back-end untuk menjadi pengembang yang serba bisa. Anda akan belajar untuk mengembangkan aplikasi web dari awal hingga akhir.</p>
                    </div>
                </div>
            </div>
        </div>

<!-- Cards Section Row 2 -->
<div class="row g-4 mt-3 justify-content-center">
    <!-- Data Analyst -->
    <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">Data Analyst</h5>
                <p class="card-text">Analisis data menjadi keterampilan yang sangat dicari. Pelajari cara mengumpulkan, memproses, dan menganalisis data untuk membantu perusahaan membuat keputusan yang berbasis data.</p>
            </div>
        </div>
    </div>
    <!-- Copywriting -->
    <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">Copywriting</h5>
                <p class="card-text">Temukan seni menulis yang menarik dan persuasif. Kursus ini akan membimbing Anda dalam menciptakan konten yang dapat menarik perhatian dan memengaruhi pembaca.</p>
            </div>
        </div>
    </div>
    <!-- Excel Expert -->
    <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">Excel Expert</h5>
                <p class="card-text">Kuasi alat analisis data yang paling banyak digunakan di dunia. Pelajari rumus, grafik, dan teknik analisis untuk memaksimalkan penggunaan Microsoft Excel.</p>
            </div>
        </div>
    </div>
</div>

<!-- Image Section -->
<div class="row g-3 mt-5">
    <div class="col-12">
        <img src="{{ asset('images/Group 19.png') }}" alt="Course Image" class="img-fluid rounded shadow-sm w-100">
    </div>
</div>
</section>

<!-- Subscription Section -->
<section id="subscriptions" class="py-5" style="background: linear-gradient(135deg, #19535f, #0E0E0E);">
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white">Pilihan Jenis Pelanggan</h2>
            <p class="text-light">Pilih jenis langganan sesuai kebutuhanmu dan nikmati berbagai keuntungan eksklusif.</p>
        </div>

        <!-- Carousel for Subscription Cards -->
        <div id="subscriptionCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Monthly Subscription -->
                <div class="carousel-item active">
                    <div class="card shadow-lg mx-auto" style="max-width: 350px; border-radius: 20px; overflow: hidden;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Langganan Bulanan</h5>
                            <p class="text-primary fw-bold" style="font-size: 1.5rem;">Rp 150.000 / bulan</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Akses ke semua kursus selama 1 bulan</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Sertifikat resmi untuk kursus yang selesai</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Dukungan komunitas online</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3" style="border-radius: 30px; padding: 10px 20px;">Pilih Langganan</a>
                        </div>
                    </div>
                </div>

                <!-- Annual Subscription -->
                <div class="carousel-item">
                    <div class="card shadow-lg mx-auto" style="max-width: 350px; border-radius: 20px; overflow: hidden;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Langganan Tahunan</h5>
                            <p class="text-primary fw-bold" style="font-size: 1.5rem;">Rp 1.500.000 / tahun</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Akses ke semua kursus selama 1 tahun</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Sertifikat resmi untuk kursus yang selesai</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Diskon eksklusif untuk workshop dan webinar</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Dukungan prioritas 24/7</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3" style="border-radius: 30px; padding: 10px 20px;">Pilih Langganan</a>
                        </div>
                    </div>
                </div>

                <!-- Specific Course Subscription -->
                <div class="carousel-item">
                    <div class="card shadow-lg mx-auto" style="max-width: 350px; border-radius: 20px; overflow: hidden;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Langganan Kursus Spesifik</h5>
                            <p class="text-primary fw-bold" style="font-size: 1.5rem;">Rp 500.000 / kursus</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Akses penuh ke 1 kursus pilihan</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Sertifikat resmi setelah selesai</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i>Materi tambahan eksklusif</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3" style="border-radius: 30px; padding: 10px 20px;">Pilih Langganan</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#subscriptionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 50%; padding: 10px;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#subscriptionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 50%; padding: 10px;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/.png') }}" class="card-img-top rounded-circle mx-auto" alt="Foto Andi">
                    <div class="card-body text-center">
                        <i class="fa fa-quote-left"></i>
                        <p class="card-text">"Kursus yang saya ambil sangat membantu saya untuk mendapatkan pekerjaan impian. Pengajar yang profesional dan materi yang berkualitas!"</p>
                        <i class="fa fa-quote-right"></i>
                        <h5 class="card-title">- Andi, Alumni UI/UX Design</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>© {{ date('Y') }} Cakrawala. All rights reserved.</p>
        </div>
    </footer>
@endsection
