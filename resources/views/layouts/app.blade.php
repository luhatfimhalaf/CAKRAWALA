<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Cakrawala' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Global Font */
        body, .navbar, .nav-link, .dropdown-menu, input, button {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #19535f;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 15px 15px;
            padding: 15px 0;
        }
        .navbar .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #ffffff;
            margin-right: 30px;
        }
        .navbar .navbar-brand img {
            border-radius: 50%;
            transition: transform 0.3s ease-in-out;
        }
        .navbar .navbar-brand:hover img {
            transform: scale(1.1);
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            margin: 0 10px;
        }
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 8px 15px;
            transition: background-color 0.3s ease;
        }

        /* Search Bar Styles */
        .search-bar input {
            border-radius: 20px;
            border: 2px solid #ffffff;
            padding: 8px 15px;
            margin: 5px 0;
        }
        .search-bar input:focus {
            outline: none;
            border-color: #ffc107;
            box-shadow: 0 0 8px rgba(255, 193, 7, 0.5);
        }

        /* Dropdown Styles */
        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
        .dropdown-menu .dropdown-item {
            padding: 10px 20px;
        }

        /* Notification and Profile Icon */
        .navbar-nav .nav-item {
            margin-left: 15px;
        }

        /* Adjust Spacing for Navbar Content */
        .navbar-nav {
            align-items: center;
        }
        .navbar-collapse {
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="https://via.placeholder.com/40" alt="Logo" class="me-2" style="height: 40px;">
                <span>Cakrawala</span>
            </a>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kursus') }}">Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex search-bar" action="{{ route('search') }}" method="get">
                            <input class="form-control me-2" type="search" name="query" placeholder="Cari kursus..." aria-label="Search">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <!-- Profile Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Akun Saya</a></li>
                            <li><a class="dropdown-item" href="#">Pembelajaran Saya</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
