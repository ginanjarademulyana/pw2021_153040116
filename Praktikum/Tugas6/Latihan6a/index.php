<?php

require 'php/functions.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Red Store </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="assets/img/icons/logo.png" width="125px">
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
        <img src="assets/img/icons/cart.png" width="30px" height="30px">
        <img src="assets/img/icons/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
      <div class="row">
        <div class="col-2">
          <h1>Give Your Workout <br>A New Style!</h1>
          <p>Success isn't always about greatness. It's about consistency. Consistent <br>hard work gain success. Greatness will come.</p>
          <a href="" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="assets/img/image1.png">
        </div>
      </div>
    </div>
  </div>



  <!-- Kategori -->
  <div class="kategori">
    <div class="small-container">
      <h2 class="title">Categories</h2>
      <div class="row">
        <?php $kat = 1 ?>
        <?php foreach ($kategori as $ktg) : ?>
          <div class="col-3">
            <a href="">
              <img src="assets/img/kategori/<?= $ktg["gambar"]; ?>">
              <h4 style="text-align: center;"><?= $ktg["nama_kategori"]; ?></h4>
            </a>
          </div>
          <?php $kat++ ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>


  <!-- Produk -->
  <div class="small-container">
    <h2 class="title">Products</h2>
    <div class="row">
      <?php $prod = 1 ?>
      <?php foreach ($produk as $prdk) : ?>
        <div class="col-4">
          <a href="php/detail.php?kode_barang=<?= $prdk["kode_barang"]; ?>">
            <img src="assets/img/products/<?= $prdk["gambar_produk"]; ?>">
          </a>
          <h4><?= $prdk["nama_barang"] ?></h4>
          <div class="ratting">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp.<?= $prdk["harga"]; ?></p>
          <p>Ukuran : <?= $prdk["ukuran"]; ?></p>
          <p>Stok Barang : <?= $prdk["stok_barang"]; ?></p>
        </div>
        <?php $prod++ ?>
      <?php endforeach; ?>
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