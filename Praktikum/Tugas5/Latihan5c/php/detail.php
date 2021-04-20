<?php

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
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Detail Produk</title>
</head>

<body>
  <div class="small-container single-product">
    <div class="row">
      <div class="col-2">
        <img src="../assets/img/products/<?= $prdk["gambar_produk"]; ?>" width="100%" id="product-img">

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
        <a href="../index.php" class="btn">Back</a>

        <h3>Product Details <i class="fa fa-indent"></i></h3>
        <br>
        <p><?= $prdk["deskripsi_produk"]; ?></p>
      </div>
    </div>
  </div>
</body>

</html>