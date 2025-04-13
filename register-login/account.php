<?php
include 'function.php';
authentication();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Information</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php nav(); ?>
    <div class="container mt-5 bg-light text-dark p-4 rounded shadow-lg" style="max-width: 700px;">
        <h3 class="text-center text-warning mb-3">Account Information</h3>
        <table class="table table-bordered table-striped">
    <tbody>
        <tr><th>First Name</th> <td><?= $_SESSION['fname']  ?? '' ?></td></tr>
        <tr><th>Middle Name</th> <td><?= $_SESSION['mdname']  ?? '' ?></td></tr>
        <tr><th>Last Name</th> <td><?= $_SESSION['lname']  ?? '' ?></td></tr>
        <tr><th>Age</th> <td><?= $_SESSION['age']  ?? '' ?></td></tr>
        <tr><th>Gender</th> <td><?= $_SESSION['gender']  ?? '' ?></td></tr>
        <tr><th>Nationality</th> <td><?= $_SESSION['nationality']  ?? '' ?></td></tr>
        <tr><th>Contact Number</th> <td><?= $_SESSION['contact']  ?? '' ?></td></tr>
        <tr><th>Email</th> <td><?= $_SESSION['email']  ?? '' ?></td></tr>
        <tr><th>Address</th> <td><?= $_SESSION['address']  ?? '' ?></td></tr>
        <tr><th>Username</th> <td><?= $_SESSION['rusername']  ?? '' ?></td></tr>
        <tr><th>Password</th> <td><?= isset($_SESSION['password']) ? md5($_SESSION['password']) : '' ?></td>
        </tr>
    </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
