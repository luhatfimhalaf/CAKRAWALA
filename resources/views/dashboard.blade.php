<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <title>CAKRAWALA Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom Style -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #19535f;
            color: #f8f9fa;
        }
        .text-primary {
          color: #f5b642 !important;
        }
        .sidebar {
            background: linear-gradient(135deg, #19535f, #13474b);
            color: white;
            height: 100vh;
        }
        .sidebar a {
            color: #b0c4ce;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .sidebar a:hover, .sidebar .active {
            color: #f5b642;
        }
        .brand-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .course-card, .live-card {
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: linear-gradient(135deg, #19535f, #268184);
            color: #f8f9fa;
        }
        .course-card:hover, .live-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.3);
        }
        .time-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #f5b642;
            color: white;
            font-size: 12px;
            border-radius: 5px;
            padding: 5px 8px;
        }
        .search-bar {
            border-radius: 50px;
            border: none;
            padding: 10px 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
=======
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
>>>>>>> Stashed changes
        }
    </style>
</head>
<body>
<<<<<<< Updated upstream
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-4 d-flex flex-column">
            <h1 class="brand-title mb-5">CAKRAWALA</h1>
            <nav>
                <a href="#" class="d-block mb-4 active">🏠 Home</a>
                <a href="#" class="d-block mb-4">📊 Progress</a>
                <a href="#" class="d-block mb-4">✉️ Messages</a>
                <a href="#" class="d-block mb-4">⚙️ Settings</a>
            </nav>
        </div>

        <!-- Main Content -->
          <div class="flex-grow-1 bg-white rounded-top-left p-4">
      <!-- Sapaan -->
      <div class="mb-4 d-flex justify-content-between align-items-center">
          <div>
              <h2 class="fw-bold text-dark mb-1">Welcome back, <span class="text-primary">{{ auth()->user()->name }}</span>!</h2>
              <p class="text-muted">Let's continue your learning journey today 🚀</p>
          </div>
          <input type="text" placeholder="Search..." class="form-control w-25 search-bar">
      </div>
            <!-- Unfinished Courses -->
            <div class="row g-4 mb-5">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="position-relative course-card p-4 shadow-sm">
                        <span class="time-badge">82 min</span>
                        <img src="https://via.placeholder.com/300" class="img-fluid rounded mb-3" alt="Course Image">
                        <h5 class="fw-bold">Learning Swift: Create Apps in 8 Lessons</h5>
                        <p>@dianneed</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="position-relative course-card p-4 shadow-sm">
                        <span class="time-badge">90 min</span>
                        <img src="https://via.placeholder.com/300" class="img-fluid rounded mb-3" alt="Course Image">
                        <h5 class="fw-bold">Illustration Tips for Thematic Designs</h5>
                        <p>@dianneed</p>
                    </div>
                </div>
            </div>

            <!-- Live Lessons -->
            <h3 class="fw-bold mb-4 text-dark">Live Lessons</h3>
            <div class="d-flex gap-4">
                <!-- Live Cards -->
                <div class="live-card text-center p-3 shadow-sm">
                    <img src="https://via.placeholder.com/100" class="img-fluid rounded mb-2" alt="Live Image">
                    <span class="badge bg-danger text-white">LIVE</span>
                </div>
                <div class="live-card text-center p-3 shadow-sm">
                    <img src="https://via.placeholder.com/100" class="img-fluid rounded mb-2" alt="Live Image">
                    <span class="badge bg-danger text-white">LIVE</span>
                </div>
                <div class="live-card text-center p-3 shadow-sm">
                    <img src="https://via.placeholder.com/100" class="img-fluid rounded mb-2" alt="Live Image">
                    <span class="badge bg-danger text-white">LIVE</span>
                </div>
                <div class="live-card text-center p-3 shadow-sm">
                    <img src="https://via.placeholder.com/100" class="img-fluid rounded mb-2" alt="Live Image">
                    <span class="badge bg-danger text-white">LIVE</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
=======
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
                        <a href="#" class="btn">Learn More</a>
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
>>>>>>> Stashed changes
</body>
</html>
