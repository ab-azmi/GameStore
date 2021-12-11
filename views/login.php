<?php
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
    <?php if(isset($error)) : ?>
        <p style="color:red; font-style:italic;">username / password anda salah!</p>
    <?php endif; ?>
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
                <a href="/GameStore/views/register.php">Register</a>
            </li>
        </ul>
    </form>
</body>
</html>
