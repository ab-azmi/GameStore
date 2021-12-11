<?php


    $conn = mysqli_connect("localhost", "root", "", "game_store");

    function registrasi($data){
        global $conn;
        $username = strtolower(stripslashes((htmlspecialchars($data["username"]))));
        $password = mysqli_escape_string($conn, $data["password"]);
        $konfirmasi_password = mysqli_escape_string($conn, $data["password2"]);

        $nama = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if(mysqli_num_rows($nama) == 1){
            echo "<script>
            alert('namanya udah pernah digunakan nih');
            document.location.href = '/gamestore/index.php';
            </script>";
            return false;
        }

        if ($konfirmasi_password != $password){
            echo "<script>
            alert('konfirmasi passwordnya beda nih');
            document.location.href = '/gamestore/index.php';
            </script>";
            return false;
        }
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "INSERT INTO users VALUE ('', '$username', '$password', '')");
            return mysqli_affected_rows($conn);
    }

    if( isset($_POST["submit"]) ) {
        if( registrasi($_POST) > 0 ) {
            $id = mysqli_query($conn, "SELECT id_user FROM users ORDER BY id_user DESC LIMIT 1");
            $id = mysqli_fetch_assoc($id);
            echo "<script>
                alert('berhasil ditambahkan!');
                document.location.href = '../index.php?id=$id[id_user]';
            </script>";
        } else{
            echo "<script>
                document.location.href = 'register.php';
            </script>";
        }
        $query = "INSERT INTO users
                VALUES('', '$username', '$password')
        ";
        mysqli_query($conn, $query);
    }

    session_start();
    require "../assets/php/functions.php";

    if( isset($_POST["submit"]) ) {
        if( registrasi($_POST) > 0 ) {
            $id = mysqli_query($conn, "SELECT id_user FROM users ORDER BY id_user DESC LIMIT 1");
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
        $query = "INSERT INTO users
                VALUES('', '$username', '$password')
        ";
        mysqli_query($conn, $query);
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
                <input type="password" name="password-confirm" id="password2">
            </li>
            <li>
                <button type="submit" name="submit">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>
