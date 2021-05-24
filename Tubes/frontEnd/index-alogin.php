<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

require 'php/functions.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

if (!isset($_SESSION['login'])) {
  header("Location: account/login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> NSO Store </title>

  <!-- --- My CSS --- -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- --- Font Awesome --- -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="assets/icons/Logo-putih.png" width="125px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="">Home</a></li>
            <li><a href="pp.php">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="account/myaccount.php">Account</a></li>
            <li><a href="account/logout.php">Logout</a></li>
          </ul>
        </nav>
        <img src="assets/icons/cart.png" width="25px" height="30px">
        <img src="assets/icons/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>

      <div class="home">
        <div class="row">
          <div class="colom">
            <img src="assets/img/Home.png">
          </div>

          <div class="colom">
            <h1>ROLEX IS PRESENTING THE LATEST CREATIONS
              <br>BROUGHT TO LIFE BY ITS UNIQUE WATCH
              <br>MAKING EXPERTISE.
            </h1>
            <p>These timepieces take us from the deepest caves to the highest mountainpeaks,from the outer
              <br>reaches of the solar system to isolated polar regions and from ultra-precise technolog to exacting artisanal
              <br>aftsmanship. They are watches that invite you on an adventure – be it geographical, technical or aesthetic.
              <a href="" class="btn">&#8592; Explore Now</a>
            </p>
          </div>
        </div>
      </div>


      <!-- Kategori -->
      <div class="kategori">
        <h2 class="title">Categories</h2>
        <div class="row">
          <?php $kat = 1 ?>
          <?php foreach ($kategori as $ktg) : ?>
            <div class="col-kat">
              <a href="">
                <h4 style="text-align: center;"><?= $ktg["nama_kategori"]; ?></h4>
                <img src="assets/img/kategori/<?= $ktg["gambar"]; ?>">
              </a>
            </div>
            <?php $kat++ ?>
          <?php endforeach; ?>
        </div>
      </div>


      <!-- Produk -->
      <div class="produk">
        <h2 class="title">Products</h2>
        <div class="row">
          <?php $prod = 1 ?>
          <?php foreach ($produk as $prdk) : ?>
            <div class="col-prod">

              <div class="prod">
                <a href="php/detail.php?kode_barang=<?= $prdk["kode_barang"]; ?>">
                  <img src="assets/img/products/<?= $prdk["gambar_produk"]; ?>">
                </a>
              </div>

              <h4 style="text-align: center; color: #fff;"><?= $prdk["nama_barang"] ?></h4>
              <!-- <p>Rp.<?= $prdk["harga"]; ?></p>
        <p>Ukuran : <?= $prdk["ukuran"]; ?></p>
        <p>Stok Barang : <?= $prdk["stok_barang"]; ?></p> -->
            </div>
            <?php $prod++ ?>
          <?php endforeach; ?>
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

</html>