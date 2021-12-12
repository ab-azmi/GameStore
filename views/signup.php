<?php
    session_start();
    require "../assets/php/functions.php";

    if( isset($_POST["submit"]) ) {
        if( registrasi($_POST) > 0 ) {
            $id = mysqli_query($koneksi, "SELECT id_user FROM users ORDER BY id_user DESC LIMIT 1");
            $_SESSION["id_user"] = mysqli_fetch_assoc($id);
            echo "<script>
                alert('berhasil ditambahkan!');
                document.location.href = '../index.php';
            </script>";
        } else{
            echo "<script>
                document.location.href = 'register.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
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
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="submit">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>
