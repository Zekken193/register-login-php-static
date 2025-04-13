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
    <title>Register</title>
</head>
<link href="style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <div class="container  mt-5 bg-light text-dark p-4 rounded shadow-lg" style="max-width: 600px;">
      <h3 class="text-center text-warning mb-3">Register</h3>
      <form action="script.php" method="post">
      <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter your first name" required>
      </div>
      <div class="mb-3">
            <label for="mdname" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="mdname" placeholder="Enter your middle name" required>
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="Enter your last name" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" min="18" placeholder="18+ required" required>
        </div> 
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label><br>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female
        </div>
        <div class="mb-3">
            <label for="nationality" class="form-label">Nationality</label>
            <select name="nationality" id="nationality" class="form-select" required>
                <option value=""></option>
                <option value="Filipino">Philippines</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Singapore">Singapore</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Thailand">Thailand</option>
                <option value="Brunei">Brunei</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Laos">Laos</option>
                <option value="Myanmar">Myanmar</option>
                <option value="East Timorese">East Timorese</option>
                <option value="China">China</option>
                <option value="Japan">Japan</option>
                <option value="South Korea">South Korea</option>
                <option value="Australia">Australia</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="tel" name="contact" class="form-control" maxlength="11" 
                   pattern="^(09[0-9]{9}|63[0-9]{10})$" placeholder="09xxxxxxxxx or 63xxxxxxxxxx" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" class="form-control" rows="1" minlength="10" maxlength="50" 
             placeholder="House No./Street, City, Province" required></textarea>
        </div>
        <div class="mb-3">
            <label for="rusername" class="form-label">Username</label>
            <input type="text" class="form-control" name="rusername" placeholder="Enter username" required>
      </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
          <input type="submit" name="register" value="Register" class="btn btn-warning w-100">
        <p class="mt-3 mb-3 d-flex justify-content-between">
             <span>Don't have an account? 
               <a class="text-decoration-none" href="login.php">Login</a>
            </span>
               <a href="index.php" class="btn btn-warning btn-sm">Back</a>
            </p>
        </div>
      </form>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>