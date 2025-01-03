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
    <section class="hero text-center text-md-start py-5 position-relative" style="background: linear-gradient(135deg, #19535f, #0e223d); color: #fff;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-md-6">
                <h1 class="fw-bold mb-4 animate__animated animate__fadeInLeft" style="font-size: 3.5rem; line-height: 1.2;">
                    Meraih Karier Impian, Tanpa Batasan
                </h1>
                <p class="mb-4 animate__animated animate__fadeInUp" style="font-size: 1.2rem; color: #dbe6f0;">
                    Platform pelatihan digital inklusif untuk membuka peluang menuju dunia kerja tanpa batas.
                </p>
                <div class="animate__animated animate__fadeInUp">
                    <a href="{{ route('register') }}" class="btn" style="background-color: #f1faee; color: #19535f; font-weight: 600; border-radius: 30px; padding: 10px 20px;">
                        Daftar Sekarang
                    </a>
                    <a href="{{ route('about-us.index') }}" class="btn btn-outline-light" style="border: 2px solid #f1faee; color: #f1faee; font-weight: 600; border-radius: 30px; padding: 10px 20px;">
                        Tentang Kami
                    </a>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-md-6 text-center position-relative">
                <img src="images/Group 23.png" alt="Hero Image" class="img-fluid animate__animated animate__zoomIn" style="border-radius: 20px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);">
                <!-- Decorative Elements -->
                <div class="position-absolute top-0 start-0" style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.1); border-radius: 50%; transform: translate(-50%, -50%);"></div>
                <div class="position-absolute bottom-0 end-0" style="width: 100px; height: 100px; background: rgba(255, 255, 255, 0.1); border-radius: 50%; transform: translate(50%, 50%);"></div>
            </div>
        </div>
    </div>

    <!-- Wave Shape -->
    <div class="shape-hero position-absolute w-100" style="bottom: -40px; height: 50px; background-color: #fff; border-top-left-radius: 50% 20px; border-top-right-radius: 50% 20px;"></div>
</section>

    <!-- Apa Itu Cakrawala -->
    <section id="info" class="info py-5" style="background: linear-gradient(135deg, #f8f9fa, #e8eef3);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <div class="position-relative">
                    <img src="images/Desain tanpa judul (17).png" alt="Logo Cakrawala" 
                         class="img-fluid animate__animated animate__fadeIn" 
                         style="max-height: 400px; border-radius: 20px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                    <!-- Dekorasi Lingkaran -->
                    <div class="position-absolute top-0 start-0" style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; transform: translate(-50%, -50%);"></div>
                    <div class="position-absolute bottom-0 end-0" style="width: 100px; height: 100px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; transform: translate(50%, 50%);"></div>
                </div>
            </div>

            <!-- Konten -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-4" style="color: #19535f; font-size: 2.5rem;">
                    Apa Itu Cakrawala?
                </h2>
                <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8; color: #495057;">
                    <strong>Cakrawala</strong> adalah platform inovatif yang dirancang untuk memberikan akses pendidikan berkualitas 
                    dan inklusif bagi penyandang disabilitas. Kami percaya bahwa setiap orang memiliki potensi untuk meraih karier impian.
                </p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-star-fill text-primary me-3" style="font-size: 1.8rem;"></i>
                        <span>
                            <strong>Kualitas Terbaik:</strong> Kursus berkualitas tinggi dari pengajar profesional.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3" style="font-size: 1.8rem;"></i>
                        <span>
                            <strong>Sertifikat Resmi:</strong> Dapatkan sertifikat yang diakui setelah menyelesaikan kursus.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-calendar-fill text-primary me-3" style="font-size: 1.8rem;"></i>
                        <span>
                            <strong>Fleksibilitas Waktu:</strong> Belajar kapan saja sesuai jadwal Anda.
                        </span>
                    </li>
                </ul>
                <!-- Tombol -->
                <a href="#courses" class="btn btn-primary" style="background: #19535f; color: #fff; padding: 10px 20px; border-radius: 30px; font-weight: 600;">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

<section id="courses" class="py-5" style="background: #f1f3f5;">
    <div class="container">
        <!-- Judul dan Deskripsi -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #19535f; font-size: 2.5rem; text-transform: uppercase;">Pilih Kursus yang Anda Minati</h2>
            <p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">
                Pelajari skill digital yang paling dicari perusahaan dan tingkatkan peluangmu.
            </p>
        </div>
        
        <!-- Daftar Kursus -->
        <div class="row g-4">
            <!-- Card UI/UX Design -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-lg rounded-3" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="fw-bold" style="color: #19535f;">UI/UX Design</h5>
                        <p class="text-muted mb-4">Belajar menciptakan pengalaman pengguna yang menarik.</p>
                        <a href="#more-info" class="btn btn-outline-primary mt-auto" style="border-radius: 25px; font-weight: 600; color: #19535f; border: 2px solid #19535f;">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>

            <!-- Card Front-End Development -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-lg rounded-3" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="fw-bold" style="color: #19535f;">Front-End Development</h5>
                        <p class="text-muted mb-4">Kuasi keterampilan membangun antarmuka interaktif.</p>
                        <a href="#more-info" class="btn btn-outline-primary mt-auto" style="border-radius: 25px; font-weight: 600; color: #19535f; border: 2px solid #19535f;">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>

            <!-- Card Back-End Development -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-lg rounded-3" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="fw-bold" style="color: #19535f;">Back-End Development</h5>
                        <p class="text-muted mb-4">Bangun server, database, dan logika aplikasi.</p>
                        <a href="#more-info" class="btn btn-outline-primary mt-auto" style="border-radius: 25px; font-weight: 600; color: #19535f; border: 2px solid #19535f;">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>

            <!-- Card Full Stack Developer -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-lg rounded-3" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="fw-bold" style="color: #19535f;">Full Stack Developer</h5>
                        <p class="text-muted mb-4">Gabungkan keterampilan front-end dan back-end.</p>
                        <a href="#more-info" class="btn btn-outline-primary mt-auto" style="border-radius: 25px; font-weight: 600; color: #19535f; border: 2px solid #19535f;">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-5" style="background-color: #19535f; color: white;">
    <div class="container">
        <!-- Logo & Slogan -->
        <div class="mb-4">
            <img src="images/logo-cakrawala.png" alt="Logo Cakrawala" style="max-height: 60px;">
            <p class="mt-2" style="font-size: 1.1rem; font-weight: 500;">Meraih Karier Impian, Tanpa Batasan</p>
        </div>
        
        <!-- Sosial Media Links -->
        <div class="mb-4">
            <a href="#" class="text-white mx-3" style="font-size: 1.5rem; transition: transform 0.3s ease;">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="text-white mx-3" style="font-size: 1.5rem; transition: transform 0.3s ease;">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="text-white mx-3" style="font-size: 1.5rem; transition: transform 0.3s ease;">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="text-white mx-3" style="font-size: 1.5rem; transition: transform 0.3s ease;">
                <i class="bi bi-linkedin"></i>
            </a>
        </div>
        
        <!-- Legal & Contact Info -->
        <p class="mb-3" style="font-size: 0.9rem;">Terms of Service | Privacy Policy</p>
        
        <!-- Copyright -->
        <p class="mb-0" style="font-size: 1rem;">© 2024 Cakrawala. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
