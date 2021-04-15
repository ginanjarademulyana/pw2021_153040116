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
  <title>Latihan 5a</title>
</head>

<body>
  <h2 class="title">Admin Page</h2>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
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
                    <a href=""><button type="submit" name="edit_btn" class="btn btn-success">Ubah</button></a>
                    <a href=""><button type="submit" name="delete_btn" class="btn btn-danger">Hapus</button></a>
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