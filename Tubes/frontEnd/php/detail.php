<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

if (
  !isset($_GET["kode_barang"])
) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

$kode_barang = $_GET["kode_barang"];
$prdk = produk("SELECT * FROM produk WHERE kode_barang = $kode_barang")[0];
$gallery = gallery("SELECT * FROM gallery WHERE kode_barang = $kode_barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Red Store </title>
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Detail Produk</title>
</head>

<body>
  <div class="product-detail">
    <div class="row">
      <div class="col-2">
        <img src="../assets/img/products/<?= $prdk["gambar_produk"]; ?>" width="50%" id="product-img">

        <div class="small-img-row">
          <?php foreach ($gallery as $gal) : ?>
            <div class="small-img-col">
              <img src="../assets/img/galeri/<?= $gal["gambar"]; ?>" width="100%" class="small-img">
            </div>
          <?php endforeach; ?>
        </div>

      </div>
      <div class="col-2">
        <h1><?= $prdk["nama_barang"]; ?></h1>
        <h4>Rp.<?= $prdk["harga"]; ?></h4>
        <select>
          <option>Select Size</option>
          <option><?= $prdk["ukuran"]; ?></option>
        </select>
        <br>
        <p>Stok : <?= $prdk["stok_barang"]; ?></p>
        <a href="cart.php" class="btn">Add To Cart</a>

        <h3>Product Details <i class="fa fa-indent"></i></h3>
        <br>
        <p><?= $prdk["deskripsi_produk"]; ?></p>
      </div>
    </div>
  </div>
</body>

</html>