<?php
session_start();
include 'function.php';
login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 bg-light text-dark p-4 rounded shadow-lg" style="max-width: 600px;">
        <h3 class="text-center">Login</h3>
        <form action="script.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mt-3">
                <input type="submit" name="login" value="Login" class="btn btn-warning w-100">
            </div>
            <p class="mt-3 mb-3 d-flex justify-content-between">
             <span>Don't have an account? 
               <a class="text-decoration-none" href="register.php">Register</a>
            </span>
               <a href="index.php" class="btn btn-warning btn-sm">Back</a>
            </p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
