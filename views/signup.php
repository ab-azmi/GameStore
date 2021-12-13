<?php

session_start();
require "../assets/php/functions.php";

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        $id = mysqli_query($koneksi, "SELECT id_user FROM users ORDER BY id_user DESC LIMIT 1");
        $username = mysqli_query($koneksi, "SELECT username FROM users ORDER BY id_user DESC LIMIT 1");

        $_SESSION["id_user"] = mysqli_fetch_assoc($id);
        $_SESSION["username"] = mysqli_fetch_assoc($username);

        echo "<script>

                alert('berhasil ditambahkan!');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                document.location.href = 'register.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../assets/php/header.php'; ?>

<body>
    <div class="login-container">
        <div class="login-wrapper">
            <div class="login-img">

                <img src="/gamestore/img/signup-img.jpg" alt="" srcset="">
            </div>
            <div class="login-form">
                <h2 class="login-title p-4 mb-4 text-center">Sign<Span class="text-white">Up</Span></h2>
                <form action="" method="post" autocomplete="off">
                    <div class="login-row p-4">
                        <div class="login-input-group">
                            <div class="login-input">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username">
                            </div>
                            <div class="login-input">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="login-input">
                                <label for="password2">Konfirmasi Password</label>
                                <input type="password" name="password2" id="password2">
                            </div>
                        </div>
                        <div class="login-input">
                            <button type="submit" name="submit">Registrasi</button>
                        </div>

                    </div>


                    <!--                 <a href="/GameStore/views/register.php">Register</a> -->
                </form>
            </div>
        </div>

    </div>
</body>
<?php include '../assets/php/footer.php'; ?>

</html>