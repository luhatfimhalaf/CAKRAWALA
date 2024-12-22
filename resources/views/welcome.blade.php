<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Cakrawala</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
               /* Global Font */
               body, .navbar, .nav-link, button {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, #1d3557, #457b9d);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 15px 15px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.6rem;
            color: #ffffff !important;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .navbar-brand:hover img {
            transform: scale(1.1);
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            padding: 8px 15px;
            transition: background 0.3s, border-radius 0.3s;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
        }

        /* Buttons Login & Sign Up */
        .navbar .btn-login,
        .navbar .btn-signup {
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
        }

        .btn-login {
            color: #1d3557;
            background-color: #f1faee;
            border: 2px solid #f1faee;
        }

        .btn-login:hover {
            color: #f1faee;
            background-color: transparent;
            border-color: #f1faee;
        }

        .btn-signup {
            color: #ffffff;
            background-color: #e63946;
            border: 2px solid #e63946;
        }

        .btn-signup:hover {
            color: #e63946;
            background-color: transparent;
            border-color: #e63946;
        }

        /* Search Bar */
        .search-bar input {
            border-radius: 20px;
            border: none;
            padding: 8px 15px;
            margin-right: 10px;
        }

        .search-bar input:focus {
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
            outline: none;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .btn-login, .btn-signup {
                margin: 5px 0;
            }
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #19535f, #0E0E0E);
            color: #ffffff;
        }
        .shape-hero {
            bottom: -40px;
            height: 50px;
            background-color: #fff;
            border-top-left-radius: 50% 20px;
            border-top-right-radius: 50% 20px;
        }
        /* Cards */
        .card {
            border-radius: 20px;
            transition: all 0.3s ease;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        }
        .btn {
            transition: all 0.3s ease;
            border-radius: 50px;
            padding: 12px 24px;
        }
        .btn:hover {
            opacity: 0.9;
        }
        /* Footer */
        footer {
            background-color: #0E0E0E;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero text-center text-md-start py-5 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold mb-4" style="font-size: 3rem; line-height: 1.2;">Raih Karier Impian, Tanpa Batasan</h1>
                    <p class="mb-4" style="font-size: 1.1rem;">
                        Platform pelatihan digital untuk penyandang disabilitas, menuju dunia kerja yang banyak gajinya.
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-primary me-2">Daftar Sekarang</a>
                    <a href="#about" class="btn btn-outline-light">Tentang Kami</a>
                </div>
                <div class="col-md-6 position-relative">
                    <img src="images/Group 23.png" alt="Hero Image" class="img-fluid float-md-end" style="border-radius: 20px; box-shadow: 0px 10px 30px rgba(0,0,0,0.3);">
                </div>
            </div>
        </div>
        <div class="shape-hero position-absolute w-100"></div>
    </section>

    <!-- Apa Itu Cakrawala -->
    <section id="info" class="info py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="images/Desain tanpa judul (17).png" alt="Logo Cakrawala" class="img-fluid" style="max-height: 400px; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4 text-primary" style="font-size: 2rem;">Apa Itu Cakrawala?</h2>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Cakrawala adalah platform inovatif yang dirancang khusus untuk memberikan akses pendidikan berkualitas bagi penyandang disabilitas.
                    </p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-star-fill text-primary me-3" style="font-size: 1.8rem;"></i>
                            <span><strong>Kualitas Terbaik:</strong> Kursus berkualitas tinggi dari pengajar profesional.</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3" style="font-size: 1.8rem;"></i>
                            <span><strong>Sertifikat Resmi:</strong> Dapatkan sertifikat setelah kursus selesai.</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-calendar-fill text-primary me-3" style="font-size: 1.8rem;"></i>
                            <span><strong>Fleksibilitas Waktu:</strong> Belajar kapan saja sesuai jadwal Anda.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilih Kursus -->
    <section id="courses" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color: #19535f; font-size: 2.5rem;">Pilih Kursus yang Anda Minati</h2>
                <p class="text-muted" style="font-size: 1.1rem;">Pelajari skill digital yang paling dicari perusahaan dan tingkatkan peluangmu.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-lg">
                        <div class="card-body">
                            <h5 class="fw-bold">UI/UX Design</h5>
                            <p class="text-muted">Belajar menciptakan pengalaman pengguna yang menarik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-lg">
                        <div class="card-body">
                            <h5 class="fw-bold">Front-End Development</h5>
                            <p class="text-muted">Kuasi keterampilan membangun antarmuka interaktif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-lg">
                        <div class="card-body">
                            <h5 class="fw-bold">Back-End Development</h5>
                            <p class="text-muted">Bangun server, database, dan logika aplikasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-lg">
                        <div class="card-body">
                            <h5 class="fw-bold">Full Stack Developer</h5>
                            <p class="text-muted">Gabungkan keterampilan front-end dan back-end.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-0">© 2024 Cakrawala. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
