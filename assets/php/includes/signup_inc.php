<?php 

if(isset($_POST["submit"])){
    //ambil data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["password-confirm"];

    //panggil controller
    include "../classes/DB.php";
    include "../classes/Signup.php";
    include "../classes/SignupController.php";
    $signup = new SignupController($username, $password, $passwordConfirm);

    //running error handler
    $signup->signupUser();

    //going back to home page
    header("location: ../../../index.php?error=none");
}