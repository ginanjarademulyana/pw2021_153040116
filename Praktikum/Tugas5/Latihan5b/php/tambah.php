<?php

require 'functions.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style-2.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h2 class="title">Tambah Barang</h2>

  <div class="container mt-2">
    <form class="form-group" action="" method="POST">
      <div class="jumbotron">
        <div class="form-row">
          <div class="form-group col-md-1">
            <label for="kode_barang">Kode Barang</label>
            <input class="form-control" type="text" name="kode_barang" id="kode_barang" required>
          </div>

          <div class="form-group col-md-3">
            <label for="nama_barang">Nama Barang</label>
            <input class="form-control" type="text" name="nama_barang" id="nama_barang" required>
          </div>

          <div class="form-group col-md-1">
            <label for="ukuran">Ukuran</label>
            <input class="form-control" type="text" name="ukuran" id="ukuran" required>
          </div>

          <div class="form-group col-md-1">
            <label for="stok_barang">Stok Barang</label>
            <input class="form-control" type="text" name="stok_barang" id="stok_barang" required>
          </div>
          <br>
          <div class="form-group col-md-12">
            <label for="deskripsi">Deskripsi Barang</label>
            <input class="form-control" type="text" name="deskripsi" id="deskripsi" required>
          </div>
          <div class="form-group col-md-2">
            <label for="gambar">Gambar Produk</label>
            <input class="form-control" type="text" name="gambar" id="gambar" required>
          </div>

          <div class="form-group col-md-2">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori" id="kategori" required>
              <option>Pilih Kategori</option>
              <?php $i = 1; ?>
              <?php foreach ($kategori as $ktg) : ?>
                <option value="<?= $i; ?>"><?= $ktg['nama_kategori']; ?></option>
                <?php $i++; ?>
              <?php endforeach; ?>
          </div>
        </div>
        <button class="btn btn-success" type="submit" name="tambah">Tambah Produk</button>
    </form>
  </div>
</body>





</html>