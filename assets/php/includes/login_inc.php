<?php

if (isset($_POST["submit"])) {
    //ambil data
    $username = $_POST["username"];
    $password = $_POST["password"];

    //panggil controller
    include "../classes/DB.php";
    include "../classes/Login.php";
    include "../classes/LoginController.php";
    $login = new LoginController($username, $password);

    //running error handler
    $login->loginUser();

    //going back to home page
    header("location: ../../../index.php?error=none");
}
