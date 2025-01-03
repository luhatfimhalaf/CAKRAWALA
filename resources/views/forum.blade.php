<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
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
        .post-form {
            margin-top: 30px;
        }
        .post-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .post-card .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .post-card .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .post-card .actions button {
            margin-right: 10px;
        }
        .comment-form input {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('partials.side-navbar-forum', ['user' => Auth::user()])

    <!-- Hero Section -->
    
    <!-- Main Content -->
    <div class="main-content">
      <div class="hero-section">
          <h1>Forum</h1>
          <p>Join the discussion and share your knowledge with others!</p>
      </div>
        <!-- Post Form -->
        <div class="post-form">
            <div class="card">
                <div class="card-body">
                    <h5>What's happening?</h5>
                    <form id="postForm">
                        <textarea class="form-control mb-3" id="postContent" rows="3" placeholder="Share your thoughts..."></textarea>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Posts Section -->
        <div id="postsContainer">
            <!-- Posts will be dynamically loaded here -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Load existing posts
            function loadPosts() {
                $.ajax({
                    url: "{{ route('posts') }}",
                    type: "GET",
                    success: function(posts) {
                        $('#postsContainer').html('');
                        posts.forEach(post => {
                            $('#postsContainer').append(`
                                <div class="post-card">
                                    <div class="user-info">
                                        <img src="${post.user.profile_picture || 'https://via.placeholder.com/40'}" alt="User">
                                        <div>
                                            <h6 class="mb-0">${post.user.name}</h6>
                                            <small>${post.created_at}</small>
                                        </div>
                                    </div>
                                    <p>${post.content}</p>
                                    <div class="actions">
                                        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-hand-thumbs-up"></i> Like (${post.likes_count})</button>
                                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat-dots"></i> Comment (${post.comments_count})</button>
                                    </div>
                                    <div class="comments mt-3">
                                        ${post.comments.map(comment => `
                                            <div class="d-flex mb-2">
                                                <strong class="me-2">${comment.user.name}</strong>
                                                <span>${comment.content}</span>
                                            </div>
                                        `).join('')}
                                        <form class="comment-form">
                                            <input type="text" class="form-control" placeholder="Write a comment...">
                                        </form>
                                    </div>
                                </div>
                            `);
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }

            // Submit new post
            $('#postForm').submit(function (e) {
                e.preventDefault();
                const content = $('#postContent').val();

                $.ajax({
                    url: "{{ route('posts.store') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        content: content
                    },
                    success: function(response) {
                        $('#postContent').val('');
                        loadPosts();
                        alert('Post created successfully!');
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            // Initial load of posts
            loadPosts();
        });
    </script>
</body>
</html>
