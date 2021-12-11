<?php


    // $conn = mysqli_connect("localhost", "root", "", "game_store");
    // if( isset($_POST["login"]) ) {
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //     if( mysqli_num_rows($result) === 1 ) {
    //         $row = mysqli_fetch_assoc($result);
    //         if(password_verify($password, $row["password"])) {
    //             header("location: ../index.php");
    //             exit;
    //         }
    //         session_start();
    //         $_SESSION["ssn_username"] = $row["username"];
    //         $_SESSION["ssn_id"] = $row["id_user"];
    //     }
    //     $error = true;
    // }

    require "../assets/php/functions.php";
    session_start();
    if( isset($_POST["submit"]) ) {
        $error = login($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
            <li>
                <a href="/GameStore/views/signup.php">Sign Up</a>

<!--                 <a href="/GameStore/views/register.php">Register</a> -->

            </li>
        </ul>
    </form>
</body>
</html>
