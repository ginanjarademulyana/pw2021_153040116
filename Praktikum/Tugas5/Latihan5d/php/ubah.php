<?php

require 'functions.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

$kode_barang = $_GET['kode_barang'];
$produk = produk("SELECT * FROM produk WHERE kode_barang = $kode_barang")[0];



if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Diubah!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Diubah!');
          document.location.href = 'admin.php';
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style-2.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
</head>

<body>

  <h2 class="title">Ubah Data Barang</h2>

  <div class="container mt-2">
    <form class="form-group" action="" method="POST">
      <div class="jumbotron">
        <div class="form-row">
          <input type="hidden" name="kode_barang" id="kode_barang" value="<?= $produk['kode_barang']; ?>">

          <div class="form-group col-md-3">
            <label for="nama_barang">Nama Barang</label>
            <input class="form-control" type="text" name="nama_barang" id="nama_barang" required value="<?= $produk['nama_barang']; ?>">
          </div>

          <div class=" form-group col-md-2">
            <label for="ukuran">Ukuran</label>
            <input class="form-control" type="text" name="ukuran" id="ukuran" required value="<?= $produk['ukuran']; ?>">
          </div>

          <div class=" form-group col-md-1">
            <label for="stok_barang">Stok Barang</label>
            <input class="form-control" type="text" name="stok_barang" id="stok_barang" required value="<?= $produk['stok_barang']; ?>">
          </div>

          <div class="form-group col-md-3">
            <label for="harga">Harga Barang</label>
            <input class="form-control" type="text" name="harga" id="harga" placeholder="Rp." required value="<?= $produk['harga']; ?>">
          </div>

          <div class="form-group col-md-12">
            <label for="deskripsi_produk">Deskripsi Barang</label>
            <input class="form-control" type="text" name="deskripsi_produk" id="deskripsi_produk" placeholder="Sertakan Deskripsi Barang" required value="<?= $produk['deskripsi_produk']; ?>">
          </div>

          <div class="form-group col-md-4">
            <label for="gambar_produk">Gambar Produk : <?= $produk['gambar_produk']; ?></label> <br>
            <input type="file" name="gambar_produk" id="gambar_produk" required>
          </div>

        </div>
        <button class="btn btn-success" type="submit" name="ubah">Ubah Produk</button>
        <button type="submit" class="btn btn-danger">
          <a href="admin.php" style="text-decoration:none; color:white;">Kembali</a>
        </button>
    </form>
  </div>
</body>





</html>