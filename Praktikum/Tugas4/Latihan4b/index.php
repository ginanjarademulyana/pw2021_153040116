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
  <title>Tugas 4</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Kategori -->
  <div class="kategori">
    <div class="small-container">
      <h2 class="title">Categories</h2>
      <div class="row">
        <?php $kat = 1 ?>
        <?php foreach ($kategori as $ktg) : ?>
          <div class="col-3">
            <img src="assets/img/kategori/<?= $ktg["gambar"]; ?>">
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
          <img src="assets/img/products/<?= $prdk["gambar_produk"]; ?>">
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

</body>

</html>