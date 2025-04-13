<?php
include 'function.php';
authentication();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<link href="style.css" rel="stylesheet">
<body>
    <?php nav(); ?>

    <div class="container mt-5 bg-light text-dark p-4 rounded shadow-lg" style="max-width: 600px;">
        <h3 class="text-center">Welcome, <?= $_SESSION['user']; ?>!</h3>
    </div>
    
</body>
</html>