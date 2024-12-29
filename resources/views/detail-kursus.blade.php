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
            color: #19535f;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 260px;
            background-color: #19535f;
            color: #ffffff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-weight: bold;
            margin-bottom: 30px;
            color: #ffffff;
            text-align: center;
            letter-spacing: 2px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #ffffff;
            margin: 10px 0;
            padding: 12px 15px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #133d47;
        }

        .sidebar a.active {
            background-color: #0f2e38;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .course-header {
            background: linear-gradient(90deg, #19535f, #0f2e38);
            color: #ffffff;
            text-align: center;
            padding: 50px 20px;
            border-radius: 10px;
        }

        .course-header h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .course-header p {
            font-size: 1.1rem;
        }

        .course-main {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .course-content {
            flex: 3;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .course-content img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .tabs button {
            margin-right: 10px;
            padding: 10px 15px;
            background: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .tabs button:hover {
            background: #133d47;
        }

        .course-sidebar {
            flex: 1;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .price-box {
            text-align: center;
            margin-bottom: 20px;
        }

        .price {
            font-size: 2rem;
            color: #19535f;
            font-weight: bold;
        }

        .original-price {
            font-size: 1rem;
            text-decoration: line-through;
            color: #999;
        }

        .buy-now {
            display: block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .buy-now:hover {
            background: #133d47;
        }

        .course-info {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .course-info li {
            margin-bottom: 10px;
        }

        .course-info strong {
            font-weight: 600;
            color: #19535f;
        }

        /* Animations */
        .course-content, .course-sidebar {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .course-thumbnail {
            width: 600px; /* Atur lebar gambar */
            height: 300px; /* Atur tinggi gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 10px; /* Opsional, tambahkan efek rounded */
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
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
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
            flex: 1;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .price-box {
            text-align: center;
            margin-bottom: 20px;
        }

        .price {
            font-size: 2rem;
            color: #19535f;
            font-weight: bold;
        }

        .original-price {
            font-size: 1rem;
            text-decoration: line-through;
            color: #999;
        }

        .buy-now {
            display: inline-block;
            padding: 10px 20px;
            background: #19535f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .buy-now:hover {
            background: #133d47;
        }

        #tab-content {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #tab-content h3 {
            color: #19535f;
            margin-bottom: 15px;
        }

        #tab-content ul {
            padding-left: 20px;
            list-style: disc;
        }

        #tab-content ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
  <div class="sidebar">
    <div>
      <h2>CAKRAWALA</h2>
      <a href="#"><i class="bi bi-house"></i> Dashboard</a>
      <a href="#" class="active"><i class="bi bi-book"></i> Courses</a>
      <a href="{{ route('quiz.index') }}"><i class="bi bi-list-task"></i> Quiz</a>
      <a href="#"><i class="bi bi-question-circle"></i> FAQ</a>
      <a href="#"><i class="bi bi-bell"></i> Notifications</a>
      <a href="#"><i class="bi bi-gear"></i> Settings</a>
    </div>
    <div>
      <button class="buy-now">Go Premium</button>
    </div>
  </div>

  <div class="main-content">
    <div class="course-header">
      <h2>Course Details</h2>
      <p>Learn new skills and explore your potential with our curated courses.</p>
    </div>

    <div class="course-main">
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
    <aside class="course-sidebar">
        <div class="price-box">
            <p class="price">$60 <span class="original-price">$120</span></p>
            <a href="{{ route('payment', $course['id']) }}" class="buy-now" data-course-id="{{ $course['id'] }}" data-bs-toggle="modal" data-bs-target="#transactionModal">Buy Now</a>
        </div>
<!-- Modal -->
        <ul class="course-info">
            <li><strong>Category:</strong> {{ $course->category }}</li>
            <li><strong>Lessons:</strong> {{ $course->lessons }}</li>
            <li><strong>Duration:</strong> {{ $course->duration }}</li>
            <li><strong>Students:</strong> {{ $course->students }}</li>
            <li><strong>Instructor:</strong> {{ $course->instructor }}</li>
        </ul>
    </aside>
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
                    <p>This course provides a comprehensive introduction to the topic, covering essential concepts and practical skills to help you succeed.</p>
                `;
                break;
            case 'curriculum':
                content = `
                    <h3>Curriculum</h3>
                    <ul>
                        <li>Lesson 1: Introduction</li>
                        <li>Lesson 2: Core Concepts</li>
                        <li>Lesson 3: Advanced Techniques</li>
                        <li>Lesson 4: Practical Application</li>
                    </ul>
                `;
                break;
            case 'instructor':
                content = `
                    <h3>Instructor</h3>
                    <p>Meet your instructor, <strong>{{ $course->instructor }}</strong>, a seasoned expert with over 10 years of experience in the field.</p>
                `;
                break;
            case 'reviews':
                content = `
                    <h3>Reviews</h3>
                    <p>Here's what our students have to say:</p>
                    <ul>
                        <li>"Fantastic course! Highly recommended." - John Doe</li>
                        <li>"Clear explanations and great examples." - Jane Smith</li>
                        <li>"Helped me land a job in this field." - Alice Johnson</li>
                    </ul>
                `;
                break;
            default:
                content = '<p>Content not found.</p>';
        }

        tabContent.innerHTML = content;
    }


</script>
</body>
</html>
