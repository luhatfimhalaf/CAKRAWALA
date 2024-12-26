<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #19535f;
            font-family: 'Poppins', sans-serif;
            height: 100vh; /* Ensure full height for body */
            margin: 0;
            display: flex; /* Flex container for sidebar and content */
            flex-direction: column;
        }
        .main-container {
            flex: 1;
            display: flex;
            height: 100%; /* Full height for main content */
            overflow: hidden;
        }

        .sidebar {
            background-color: #19535f;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 250px; /* Fixed width for sidebar */
            height: 100%; /* Stretch sidebar to full height */
            padding: 20px;
        }
        .sidebar h2 {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: #133d47;
            color: #d1e8eb;
        }

        .sidebar a.active {
            background-color: #0f2e38;
            color: #d1e8eb;
        }
        /* Main Content Styling */
        .main-content {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        .content {
            padding: 30px;
        }
        .input-group .form-control {
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .input-group .input-group-text {
            border-radius: 50px 0 0 50px;
            border: none;
            padding: 10px;
        }
        .input-group .form-control:focus {
            box-shadow: 0 0 10px rgba(25, 83, 95, 0.5);
            outline: none;
        }
        .input-group .bi-search {
            font-size: 1.2rem;
        }
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .top-bar h3 {
            color: #19535f;
        }
        .overview .card {
            text-align: center;
            background-color: #d1e8eb;
        }
        .overview .card h4 {
            color: #19535f;
        }
        .overview .card p {
            color: #19535f;
        }
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .reminders, .events {
            margin-top: 30px;
        }
        .reminders h5, .events h5 {
            color: #19535f;
        }
        .reminders .list-group-item, .events .list-group-item {
            border: none;
            border-radius: 10px;
            background-color: #d1e8eb;
            margin-bottom: 10px;
        }
        .reminders .badge, .events .badge {
            background-color: #19535f;
        }
        .btn-primary {
            background-color: #19535f;
            border: none;
        }
        .btn-primary:hover {
            background-color: #133d47;
        }
        .card h4, .card p, .top-bar h3, .reminders h5, .events h5 {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <h2>CAKRAWALA</h2>
                <a href="{{ route('dashboard') }}" class="active"><i class="bi bi-house"></i> Dashboard</a>
                <a href="{{ route('kursus.index') }}"><i class="bi bi-book"></i> Courses</a>
                <a href="#"><i class="bi bi-list-task"></i> Quiz</a>
                <a href="{{ route('faq.index') }}"><i class="bi bi-question-circle"></i> FAQ</a>
                <a href="#"><i class="bi bi-bell"></i> Notifications</a>
                <a href="#"><i class="bi bi-gear"></i> Settings</a>
            </div>
            <div class="mt-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Go Premium</h5>
                        <p class="card-text">Explore 100+ expert curated courses prepared for you.</p>
                        <button class="btn btn-primary">Get Access</button>
                    </div>
                </div>
            </div>
        </div>
            <!-- Main Content -->
            <div class="col-md-7 content">
                <div class="top-bar">
                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center;">
                        <img src="images/Michael Lee.png" alt="Profile Picture" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                        <div>
                            <h3 style="font-weight: 900; margin: 0;">Hi {{ auth()->user()->name }}, Good Afternoon!</h3>
                            <p style="font-weight: 900; margin: 0;">Let's learn something new today</p>
                        </div>
                    </div>
                    <div style="width: 200px; margin-left: 150px;">
                        <input type="text" class="form-control" placeholder="Search" style="border-radius: 50px; padding-left: 20px;">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div id="promoCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="card text-center">
                <img src="https://via.placeholder.com/400x100" class="card-img-top" alt="Prepare Your Career">
                <div class="card-body">
                    <h5 class="card-title">Prepare Your Career</h5>
                    <p class="card-text">Join our courses to build a brighter future with inclusive career preparation programs.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="card text-center">
                <img src="https://via.placeholder.com/400x100" class="card-img-top" alt="Career Development for Everyone">
                <div class="card-body">
                    <h5 class="card-title">Inclusive Career Development</h5>
                    <p class="card-text">Empowering individuals with disabilities to achieve their career goals and aspirations.</p>
                    <button class="btn btn-primary">Join Now</button>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="card text-center">
                <img src="https://via.placeholder.com/400x100" class="card-img-top" alt="Benefits of Our Courses">
                <div class="card-body">
                    <h5 class="card-title">Benefits of Our Courses</h5>
                    <p class="card-text">Gain skills, confidence, and support to thrive in your professional journey.</p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
                </div>
                <div class="mt-4 overview">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3">
                                <h4>56</h4>
                                <p>Courses in Progress</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3">
                                <h4>36</h4>
                                <p>Courses Completed</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3">
                                <h4>09</h4>
                                <p>Communities</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h5>Continue Reading</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50" alt="Avatar" class="avatar">
                                    <div class="ms-3">
                                        <h6>Swift Course</h6>
                                        <p>Esther Howard - 5hr</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50" alt="Avatar" class="avatar">
                                    <div class="ms-3">
                                        <h6>React Course</h6>
                                        <p>Annette Black - 4hr</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="reminders">
                    <h5 style="font-weight: 900;">Reminders</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Week 01 Assignment - JS Assignment <span class="badge float-end">7:00 PM</span></li>
                        <li class="list-group-item">Week 01 Assignment - NextJS Assignment <span class="badge float-end">7:00 PM</span></li>
                        <li class="list-group-item">Week 01 Assignment - React Assignment <span class="badge float-end">7:00 PM</span></li>
                    </ul>
                </div>
                <div class="events mt-4">
                    <h5 style="font-weight: 900;">Events</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Effects of Internet on focus</strong>
                            <p>Design for mindfulness - Angela Longeria</p>
                            <span>Nov 2nd, 2023 | 2:30 - 4:30 PM</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Stress and focus</strong>
                            <p>Design for mindfulness - Stephen Johns</p>
                            <span>Nov 2nd, 2023 | 2:30 - 4:30 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
