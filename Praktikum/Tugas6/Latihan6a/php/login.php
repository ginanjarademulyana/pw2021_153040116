<?php

session_start();

require 'functions.php';
require 'layout/header.php';


if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }

    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}



?>

<!-- ----------Account Page------------------- -->
<div class="account-page">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <img src="../assets/img/image1.png" width="100%">
      </div>

      <div class="col-2">
        <div class="form-container">
          <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span>
            <hr id="Indicator">
          </div>

          <form id="LoginForm" method="post">
            <?php if (isset($error)) : ?>
              <p style="color:red; font-style:italic;">Username atau Password Salah!</p>
            <?php endif; ?>
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">

            <div class="remember-me">
              <input type="checkbox" name="remember" style="width: 100%; height: 15px; margin: 10px 0; padding: 0 0px;">
              <label for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn" name="submit">Login</button>
            <a href="">Forgot Password</a>
          </form>

          <form id="RegistForm">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <button type="submit" class="btn">Register</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- ------------JS for Toggle Menu------------- -->
<script>
  var MenuItems = document.getElementById("MenuItems");

  MenuItems.style.maxHeight = "0px";

  function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
      MenuItems.style.maxHeight = "200px";
    } else {
      MenuItems.style.maxHeight = "0px";
    }
  }
</script>

<!-- ------------JS for Toggle Form------------- -->
<script>
  var LoginForm = document.getElementById("LoginForm");
  var RegistForm = document.getElementById("RegistForm");
  var Indicator = document.getElementById("Indicator");

  function register() {
    RegistForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(100px)";
  }

  function login() {
    RegistForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(0px)";
  }
</script>

</body>