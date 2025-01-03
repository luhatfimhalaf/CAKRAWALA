<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tweets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .hero-section {
            background: linear-gradient(135deg, #19535f, #0f3a44);
            color: #ffffff;
            text-align: center;
            padding: 60px 20px;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -20%;
            width: 350px;
            height: 350px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .hero-section p {
            font-size: 1.25rem;
            position: relative;
            z-index: 2;
        }

        .container {
            margin-top: 30px;
        }

        .btn {
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #19535f;
            border-color: #19535f;
        }

        .btn-primary:hover {
            background-color: #133d47;
            border-color: #133d47;
        }

        .btn-warning {
            background-color: #ffcc00;
            color: #212529;
        }

        .btn-danger {
            background-color: #d9534f;
        }

        .card {
            background: #ffffff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card img {
            max-width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-top: 15px;
        }

        .profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .profile-section img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #19535f;
        }

        .tweet-actions a, .tweet-actions button {
            margin-right: 10px;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            color: #888;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('partials.side-navbar-forum', ['user' => Auth::user()])

    <!-- Main Content -->
    <div class="main-content">
        <!-- Hero Section -->
        <div class="hero-section">
            <h1>Forum</h1>
            <p>Let's talk about everything!</p>
        </div>

        <!-- Content Section -->
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>All Tweets</h1>
                <a href="{{ route('tweets.create') }}" class="btn btn-primary">Create Tweet</a>
            </div>

            <div class="row">
                <div class="col-12">
                    @foreach($tweets as $tweet)
                        <div class="card">
                            <div class="card-body">
                                <p>{{ $tweet->content }}</p>
                                @if($tweet->image_path)
                                    <img src="{{ asset('storage/' . $tweet->image_path) }}" alt="Tweet Image">
                                @endif
                                <div class="tweet-actions mt-3">
                                    <a href="{{ route('tweets.edit', $tweet) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('tweets.destroy', $tweet) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            &copy; 2025 Forum Application. All rights reserved.
        </footer>
    </div>
</body>
</html>
