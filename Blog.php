<?php include 'include/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blog - Ekaami Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero-section {
            background: url('https://source.unsplash.com/1600x500/?event,celebration') no-repeat center center/cover;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .blog-card img {
            height: 200px;
            object-fit: cover;
        }
        .sidebar {
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section text-center">
        <h1 class="fw-bold">The Blog</h1>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Blog Posts Section -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- Blog Post 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="card blog-card">
                            <img src="https://source.unsplash.com/600x400/?wedding,event" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <h5 class="card-title">Grand Wedding Celebration</h5>
                                <p class="text-muted small">By Ekaami Events | March 5, 2025</p>
                                <p class="card-text">Experience the magic of a grand wedding event like never before.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Post 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card blog-card">
                            <img src="https://source.unsplash.com/600x400/?corporate,event" class="card-img-top" alt="Blog Image">
                            <div class="card-body">
                                <h5 class="card-title">Corporate Event Management</h5>
                                <p class="text-muted small">By Ekaami Events | March 2, 2025</p>
                                <p class="card-text">Learn how we organize seamless corporate events.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Search Bar -->
                    <h5>Search</h5>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Search blog...">
                    </div>
                    
                    <!-- Categories -->
                    <h5>Categories</h5>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><a href="#">Weddings</a></li>
                        <li class="list-group-item"><a href="#">Corporate Events</a></li>
                        <li class="list-group-item"><a href="#">Birthday Parties</a></li>
                        <li class="list-group-item"><a href="#">Concerts</a></li>
                    </ul>

                    <!-- Popular Posts -->
                    <h5>Popular Posts</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Luxury Wedding Event 2025</a></li>
                        <li class="list-group-item"><a href="#">Top 10 Party Themes</a></li>
                        <li class="list-group-item"><a href="#">How to Plan a Corporate Gala</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'include/footer.php' ?>