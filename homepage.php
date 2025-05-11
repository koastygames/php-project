<?php

if ($_SESSION['loggedin'] ?? false) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome, User</h1>
                </div>

                <!-- User Profile Module -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">User Profile</h5>
                        <p class="card-text">Name: John Doe</p>
                        <p class="card-text">Email: john.doe@example.com</p>
                    </div>
                </div>

                <!-- Scrollable Feed -->
                <div class="feed">
                    <h4>Feed</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Post 1</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 2</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 3</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 4</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 5</a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html></body>