<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
            margin-top: 30px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card img {
            border-radius: 15px 15px 0 0;
            height: 150px;
            object-fit: cover;
        }
        .card h5 {
            font-weight: 600;
            color: #19535f;
            margin-top: 10px;
        }
        .card p {
            color: #555;
        }
        .card .btn {
            background-color: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
        }
        .card .btn:hover {
            background-color: #133d47;
        }
        .forum-chat-section {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
        }
        .forum-chat-section .icon {
            font-size: 50px;
            color: #19535f;
            margin-right: 20px;
        }
        .forum-chat-section .content h5 {
            font-weight: 600;
            color: #19535f;
        }
        .forum-chat-section .content p {
            color: #555;
        }
        .forum-chat-section .btn {
            background-color: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
        }
        .forum-chat-section .btn:hover {
            background-color: #133d47;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('partials.side-navbar-dashboard', ['user' => Auth::user()])
    <!-- Main Content -->
    <div class="main-content">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1>Welcome, {{ auth()->user()->name }}</h1>
            <p>Discover new courses and challenges to enhance your skills!</p>
        </div>

        <!-- Cards Section -->
        <div class="cards-section row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/Prepare Your Career.png" alt="Prepare Your Career">
                    <div class="card-body">
                        <h5>Prepare Your Career</h5>
                        <p>Join our courses to build a brighter future with inclusive career preparation programs.</p>
                        <a href="{{ route('courses.index') }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/Empower Disabilities.png" alt="Empower Disabilities">
                    <div class="card-body">
                        <h5>Inclusive Development</h5>
                        <p>Empowering individuals with disabilities to achieve their career goals and aspirations.</p>
                        <a href="#" class="btn">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/Gain Skills.png" alt="Gain Skills">
                    <div class="card-body">
                        <h5>Gain Skills</h5>
                        <p>Acquire skills, confidence, and support for your professional journey.</p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forum/Chat Section -->
        <div class="forum-chat-section">
            <div class="d-flex align-items-center">
                <i class="bi bi-chat-dots icon"></i>
                <div class="content">
                    <h5>Forum & Chat</h5>
                    <p>Engage in discussions, ask questions, and collaborate with others in the community.</p>
                </div>
            </div>
            <a href="#" class="btn">Go to Forum</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
