<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cakrawala')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3">
        <h2 class="ms-3">Cakrawala</h2>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link">Tentang Kami</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Kursus</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Testimoni</a></li>
            </ul>
        </nav>
        <button class="btn me-3">Masuk</button>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
