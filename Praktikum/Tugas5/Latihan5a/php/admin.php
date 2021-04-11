<?php

require 'functions.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="small-container">
    <h2 class="title">Admin Page</h2>
    <div class="row">
      <div class="col-4">
        <img src="../assets/img/products/product-1.jpg" alt="">
      </div>
      <table border="1" cellpadding="13" cellspacing="0">
        <tr>
          <th>#</th>
          <th>Options</th>
          <th>Gambar</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Stok Barang</th>
          <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($produk as $prod) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href=""><button>Ubah</button></a>
              <a href=""><button>Hapus</button></a>
            </td>
            <td><img src="../assets/img/products/<?= $prod['gambar_produk']; ?>"></td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</body>

</html>