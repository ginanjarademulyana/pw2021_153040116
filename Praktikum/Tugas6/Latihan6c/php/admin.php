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

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $produk = produk("SELECT * FROM produk WHERE 
                  kode_barang LIKE '%$keyword%' OR 
                  nama_barang LIKE '%$keyword%' OR 
                  ukuran LIKE '%$keyword%' OR 
                  stok_barang LIKE '%$keyword%' OR 
                  harga LIKE '%$keyword%' ");
} else {
  $produk = produk(" SELECT * FROM produk ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style-2.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 5a</title>
</head>

<body>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <form action="" method="get" class="form-inline">
          <input class="form-control mr-sm-2" type="text" placeholder="Cari Barang" name="keyword" autofocus>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
        </form><br>
        <a href="tambah.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
            Tambah Barang
          </button></a>
      </div>
      <div class="card-body">

        <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th> # </th>
                <th> Opsi </th>
                <th> Gambar </th>
                <th> Kode Barang </th>
                <th> Nama Barang </th>
                <th> Harga </th>
                <th> Stok Barang </th>
                <th> Deskripsi Barang </th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($produk as $prod) : ?>
                <tr>
                  <td> <?= $i; ?> </td>
                  <td>
                    <a href="ubah.php?kode_barang=<?= $prod['kode_barang']; ?>"><button type=" submit" name="edit_btn" class="btn btn-success">Ubah</button></a>

                    <a href="hapus.php?kode_barang=<?= $prod['kode_barang']; ?>" onclick="return confirm ('Hapus Data Barang ?')"><button type="submit" name="delete_btn" class="btn btn-danger">Hapus</button></a>

                  </td>
                  <td><img src="../assets/img/products/<?= $prod['gambar_produk']; ?>"></td>
                  <td>RDSTR<?= $prod['kode_barang']; ?></td>
                  <td><?= $prod['nama_barang']; ?></td>
                  <td>Rp. <?= $prod['harga']; ?></td>
                  <td><?= $prod['stok_barang']; ?></td>
                  <td><?= $prod['deskripsi_produk']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
</body>

</html>