<?php
session_start(); 

$data = ['username' => 'Hmack',
         'password' => 'admin'

];
  
if(isset($_POST['register'])) {
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['mdname'] = $_POST['mdname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['nationality'] = $_POST['nationality'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['rusername'] = $_POST['rusername'];
    $_SESSION['password'] = $_POST['password']; 

    echo "<script>alert('Registration successful! Please login.'); window.location.href='login.php';</script>";
    exit();
}

if (isset($_POST['login'])) {
    if ($_POST['username'] === $data['username'] && $_POST['password'] === $data['password']) {
        $_SESSION['user'] = $_POST['username']; 
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid Credentials'); window.location.href='login.php';</script>";
    }
}
?>