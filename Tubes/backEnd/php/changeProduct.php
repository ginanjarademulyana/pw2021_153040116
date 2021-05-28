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
require 'layout/sidebar.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

$kode_barang = $_GET['kode_barang'];
$produk = produk("SELECT * FROM produk WHERE kode_barang = $kode_barang")[0];



if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Diubah!');
          document.location.href = 'listProduct.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Diubah!');
          document.location.href = 'listProduct.php';
          </script>";
  }
}

?>

<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-body overflow-scroll">
          <div class="container mt-2">

            <form action="" class="form" method="POST">
              <h1 class="form_title">Change Product Data</h1>

              <input type="hidden" name="kode_barang" id="kode_barang" value="<?= $produk['kode_barang']; ?>">

              <div class="form_div">
                <input type="text" class="form_input1" placeholder=" " name="nama_barang" id="nama_barang" required value="<?= $produk['nama_barang']; ?>">
                <label for="nama_barang" class="label">Product Name</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input3" placeholder=" " name="ukuran" id="ukuran" required value="<?= $produk['ukuran']; ?>">
                <label for="ukuran" class="label">Size</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input3" placeholder=" " name="stok_barang" id="stok_barang" required value="<?= $produk['stok_barang']; ?>">
                <label for="stok_barang" class="label">Stock</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input2" placeholder=" " name="harga" id="harga" required value="<?= $produk['harga']; ?>">
                <label for="harga" class="label">Price</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input4" placeholder=" " name="deskripsi_produk" id="deskripsi_produk" required required value="<?= $produk['deskripsi_produk']; ?>">
                <label for="deskripsi_produk" class="label">Product Description</label>
              </div>

              <div class="form_div">
                <input type="file" class="form_inputI" placeholder=" " name="gambar_produk" id="gambar_produk" style="margin-bottom: 40px;">
                <label for="gambar_produk" class="label">Image Product : <?= $produk['gambar_produk']; ?></label>
              </div>


              <button class="btn" type="submit" name="ubah">Ubah Produk</button>
              <button type="submit" class="btn">
                <a href="listProduct.php" style="text-decoration:none; color:white;">Kembali</a>
              </button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- APP JS -->
<script src="../assets/js/app.js"></script>

</body>





</html>