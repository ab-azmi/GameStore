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
if (isset($_POST["submit"])) {
    $error = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include '../assets/php/header.php'; ?>

<body>
    <div class="login-container">
        <div class="login-wrapper">
            <div class="login-img">

                <img src="/gamestore/img/login-img.jpg" alt="" srcset="">
            </div>
            <div class="login-form">
                <h2 class="login-title p-4 mb-4 text-center">Log<Span class="text-white">In</Span></h2>
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

                        </div>
                        <div class="login-input">
                            <button type="submit" name="submit">Login</button>
                            <a href="/GameStore/views/signup.php">Sign Up</a>
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