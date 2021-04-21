<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

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
  <br>
  <div class="small-container">
    <div class="row">
      <form action="" method="get" class="form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Cari Barang" name="keyword" autofocus>
        <button class="btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
      </form>
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

  <h3 class="title">
    <a href="php/admin.php"><button class="btn">
        Halaman Admin
      </button></a>
  </h3>

</body>

</html>