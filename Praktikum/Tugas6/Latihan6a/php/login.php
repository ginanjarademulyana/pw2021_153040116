<?php

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Red Store </title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="../assets/img/icons/logo.png" width="125px">
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a href="">Home</a></li>
          <li><a href="">Products</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="php/login.php">Account</a></li>
        </ul>
      </nav>
      <img src="../assets/img/icons/cart.png" width="30px" height="30px">
      <img src="../assets/img/icons/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
  </div>

  <!-- ----------Account Page------------------- -->
  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="../assets/img/image1.png" width="100%">
        </div>

        <div class="col-2">
          <div class="form-container">

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

</body>