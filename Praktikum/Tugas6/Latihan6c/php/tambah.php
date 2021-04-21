<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

session_start();


if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Ditambahkan!');
          document.location.href = 'admin.php';
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style-2.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
</head>

<body>
  <div class="container">
    <br>
    <h2 style="text-align: center;">Tambah Barang</h2>
    <br>
  </div>


  <div class="container mt-2">
    <form class="form-group" action="" method="POST">
      <div class="jumbotron">
        <div class="form-row">

          <div class="form-group col-md-2">
            <label for="kode_kategori">Kategori</label>
            <select class="form-control" name="kode_kategori" id="kode_kategori" required>
              <option>Pilih Kategori</option>
              <?php $i = 1; ?>
              <?php foreach ($kategori as $ktg) : ?>
                <option value="<?= $i; ?>"><?= $ktg['kode_kategori']; ?> <?= $ktg['nama_kategori']; ?></option>
                <?php $i++; ?>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group col-md-1">
            <label for="kode_barang">Kode Barang</label>
            <input class="form-control" type="text" name="kode_barang" id="kode_barang" required>
          </div>

          <div class="form-group col-md-3">
            <label for="nama_barang">Nama Barang</label>
            <input class="form-control" type="text" name="nama_barang" id="nama_barang" required>
          </div>

          <div class="form-group col-md-2">
            <label for="ukuran">Ukuran</label>
            <input class="form-control" type="text" name="ukuran" id="ukuran" required>
          </div>

          <div class="form-group col-md-1">
            <label for="stok_barang">Stok Barang</label>
            <input class="form-control" type="text" name="stok_barang" id="stok_barang" required>
          </div>

          <div class="form-group col-md-3">
            <label for="harga">Harga Barang</label>
            <input class="form-control" type="text" name="harga" id="harga" placeholder="Rp." required>
          </div>




          <div class="form-group col-md-12">
            <label for="deskripsi_produk">Deskripsi Barang</label>
            <input class="form-control" type="text" name="deskripsi_produk" id="deskripsi_produk" placeholder="Sertakan Deskripsi Barang" required>
          </div>

          <div class="form-group col-md-4">
            <label for="gambar_produk">Gambar Produk</label> <br>
            <input type="file" name="gambar_produk" id="gambar_produk" required>
          </div>

        </div>
        <button class="btn btn-success" type="submit" name="tambah">Tambah Produk</button>
        <button type="submit" class="btn btn-danger">
          <a href="admin.php" style="text-decoration:none; color:white;">Kembali</a>
        </button>
    </form>
  </div>
</body>





</html>