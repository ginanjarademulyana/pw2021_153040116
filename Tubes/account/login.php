<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

session_start();

require 'functions.php';


if (isset($_SESSION['username'])) {
    header("Location: myaccount.php");
    exit;
}


// ------------Fungsi Login-----------
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: myaccount.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}

// --------cek cookie-------------
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: myaccount.php");
        exit;
    }
}

// ----------Fungsi Regist---------
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
          alert('Registrasi Berhasil');
          document.location.href = 'login.php';
          </script>";
    } else {
        echo "<script>
          alert('Registrasi Gagal');
          </script>";
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --- Font Awesome --- -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- --- My CSS --- -->
    <link rel="stylesheet" href="../assets/css/login.css" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>NSO | Login</title>


</head>

<body>

    <div class="container-login">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Sign in -->
                <form method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <?php if (isset($error)) : ?>
                        <p style="color:red; font-style:italic;">Username atau Password Salah!</p>
                    <?php endif; ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="#" placeholder="Username" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="#" placeholder="Password" required>
                    </div>

                    <input type="submit" name="login" class="btn solid">

                    <p class="social-text">Or Sign in with social platforms</p>

                    <div class="social-media">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </form>


                <!-- Sign up -->
                <form method="post" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="#" placeholder="Username" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" id="#" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="#" placeholder="Password" required>
                    </div>

                    <input type="submit" name="register" class="btn solid">

                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>

                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- --- Panel --- -->
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Sign up</h3>
                    <p>Not have account? Clik here to register.</p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="../assets/img/signin.png" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Sign in</h3>
                    <p>do you have account? Clik here to sign in.</p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign up
                    </button>
                </div>
                <img src="../assets/img/signup.png" alt="" class="image">
            </div>
        </div>
    </div>

    <!-- --- Java Script --- -->
    <script src="../assets/js/login.js"></script>

</body>


</html>