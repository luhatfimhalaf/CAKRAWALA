<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }
    </style>
</head>
<body>
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
</body>
</html>
