<?php

if ($_SESSION['loggedin'] ?? true) {
    header('Location: homepage.php');
    exit;
} elseif ($_SESSION['loggedin'] ?? false) {
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
    <div class="container text-center mt-5">
        <h1>Welcome to Our Landing Page</h1>
        <p class="lead">We are excited to have you here. Explore our services and offerings.</p>
        <a href="#services" class="btn btn-primary">Login/Register</a>
    </div>

    <div id="services" class="container mt-5">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Description of Service 1.</p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Description of Service 2.</p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Description of Service 3.</p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>