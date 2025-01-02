<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kursus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 1.1rem;
        }

        .course-main {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px;
        }

        .course-content {
            flex: 3;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .course-thumbnail {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tabs button {
            padding: 10px 15px;
            background: #19535f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .tabs button:hover {
            background: #133d47;
        }

        .tabs button.active {
            background: #0f2e38;
        }
        .course-sidebar {
            background: linear-gradient(135deg, #e0f7fa, #ffffff);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-sidebar:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .price-box .price {
            font-size: 2rem;
            color: #007b8c;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .price-box .original-price {
            font-size: 1rem;
            text-decoration: line-through;
            color: #999;
            margin-left: 10px;
        }
        .buy-now {
            background: #007b8c;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .buy-now:hover {
            background: #005f6b;
            color: #fff;
        }
        .course-info li {
            font-size: 1rem;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .course-info li i {
            color: #007b8c;
            font-size: 1.2rem;
        }
        #tab-content {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<<<<<<< Updated upstream
    <!-- Sidebar -->
    @include('partials.side-navbar-courses', ['user' => Auth::user()])
=======
  <div class="sidebar">
    <div>
      <h2>CAKRAWALA</h2>
      <a href="#"><i class="bi bi-house"></i> Dashboard</a>
      <a href="#" class="active"><i class="bi bi-book"></i> Courses</a>
      <a href="{{ route('quiz.index') }}"><i class="bi bi-list-task"></i> Quiz</a>
      <a href="#"><i class="bi bi-question-circle"></i> FAQ</a>
      <a href="#"><i class="bi bi-bell"></i> Notifications</a>
      <a href="#"><i class="bi bi-gear"></i> Settings</a>
      <a href="{{ route('certificate.index') }}"><i class="bi bi-file-text"></i> Certificate</a>
    </div>
    <div>
      <button class="buy-now">Go Premium</button>
    </div>
  </div>
>>>>>>> Stashed changes

    <!-- Main Content -->
    <div class="main-content">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1>Course Details</h1>
            <p>Learn new skills and explore your potential with our curated courses.</p>
        </div>

        <div class="row mt-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="course-content">
                    <img src="{{ asset($course->image) }}" alt="Course Thumbnail" class="course-thumbnail">
                    <h2>{{ $course->title }}</h2>
                    <p class="text-muted">Lessons: {{ $course->lessons }} | Duration: {{ $course->duration }} | Students: {{ $course->students }}</p>
                    <div class="tabs">
                        <button onclick="showContent('overview')" id="tab-overview" class="active">Overview</button>
                        <button onclick="showContent('curriculum')" id="tab-curriculum">Curriculum</button>
                        <button onclick="showContent('instructor')" id="tab-instructor">Instructor</button>
                        <button onclick="showContent('reviews')" id="tab-reviews">Reviews</button>
                    </div>
                    <div id="tab-content">
                        <h3>Overview</h3>
                        <p>This course provides a comprehensive introduction to the topic, covering essential concepts and practical skills to help you succeed.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
    <aside class="course-sidebar">
        <!-- Price Box -->
        <div class="price-box text-center">
            <p class="price">
                $60 <span class="original-price">$120</span>
            </p>
            <a href="{{ route('payment', $course['id']) }}" 
               class="buy-now btn btn-primary w-100 py-2" 
               data-course-id="{{ $course['id'] }}" 
               data-bs-toggle="modal" 
               data-bs-target="#transactionModal">
                <i class="bi bi-cart-check"></i> Buy Now
            </a>
        </div>
        
        <!-- Course Information -->
        <ul class="course-info list-unstyled mt-4">
            <li class="mb-3">
                <strong><i class="bi bi-book"></i> Category:</strong> {{ $course->category }}
            </li>
            <li class="mb-3">
                <strong><i class="bi bi-journal-bookmark"></i> Lessons:</strong> {{ $course->lessons }}
            </li>
            <li class="mb-3">
                <strong><i class="bi bi-clock-history"></i> Duration:</strong> {{ $course->duration }}
            </li>
            <li class="mb-3">
                <strong><i class="bi bi-people-fill"></i> Students:</strong> {{ $course->students }}
            </li>
            <li class="mb-3">
                <strong><i class="bi bi-person-badge"></i> Instructor:</strong> {{ $course->instructor }}
            </li>
        </ul>
    </aside>
</div>
</div>
</div>

    <script>
        function showContent(tab) {
            const tabContent = document.getElementById('tab-content');
            const buttons = document.querySelectorAll('.tabs button');
            buttons.forEach(button => button.classList.remove('active'));

            document.getElementById(`tab-${tab}`).classList.add('active');

            let content = '';

            switch (tab) {
                case 'overview':
                    content = `
                        <h3>Overview</h3>
                        <p>This course provides a comprehensive introduction to the topic, covering essential concepts and practical skills to help you succeed.</p>`;
                    break;
                case 'curriculum':
                    content = `
                        <h3>Curriculum</h3>
                        <ul>
                            <li>Lesson 1: Introduction</li>
                            <li>Lesson 2: Core Concepts</li>
                            <li>Lesson 3: Advanced Techniques</li>
                            <li>Lesson 4: Practical Application</li>
                        </ul>`;
                    break;
                case 'instructor':
                    content = `
                        <h3>Instructor</h3>
                        <p>Meet your instructor, <strong>{{ $course->instructor }}</strong>, a seasoned expert with over 10 years of experience in the field.</p>`;
                    break;
                case 'reviews':
                    content = `
                        <h3>Reviews</h3>
                        <p>Here's what our students have to say:</p>
                        <ul>
                            <li>"Fantastic course! Highly recommended." - John Doe</li>
                            <li>"Clear explanations and great examples." - Jane Smith</li>
                            <li>"Helped me land a job in this field." - Alice Johnson</li>
                        </ul>`;
                    break;
                default:
                    content = '<p>Content not found.</p>';
            }

            tabContent.innerHTML = content;
        }
    </script>
</body>
</html>
