<?php 
 session_start();
 include 'function.php';
 login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-warning" href="index.php">H_MCK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active btn-warning text-ligth fwh-bold px-4" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link animated-btn btn btn-warning text-ligt fwh-bold px-4" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link animated-btn btn btn-outline-light text-ligth fw-bold px-4" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="d-flex align-items-center justify-content-center text-center vh-100 landing-container">
    <div>
        <h1 class="typing-text mb-4">Welcome to <span class="text-warning">H_MCK</span></h1>
        <p class="lead mb-4 text-light fs-4 fw-semibold" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
         Step into a new world of possibilities.
         <br>
         <span class="text-warning">Login</span> or <span class="text-warning">Register</span> today!
        </p>

        <div class="d-flex justify-content-center gap-4">
            <a href="login.php" class="btn btn-warning text-dark fw-bold px-5 py-3 animated-btn shadow-lg">Login</a>
            <a href="register.php" class="btn btn-outline-light fw-bold px-5 py-3 animated-btn shadow-lg">Register</a>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

