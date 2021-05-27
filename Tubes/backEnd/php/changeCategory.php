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

$kode_kategori = $_GET['kode_kategori'];
$kat = kategori("SELECT * FROM kategori WHERE kode_kategori = $kode_kategori")[0];



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

<div class="main-content">
  <div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-body overflow-scroll">
          <div class="container mt-2">

            <form action="" class="form" method="POST">
              <h1 class="form_title">Change Category Data</h1>

              <input type="hidden" name="kode_kategori" id="kode_kategori" value="<?= $produk['kode_kategori']; ?>">

              <div class="form_div">
                <input type="text" class="form_input1" placeholder=" " name="nama_kategori" id="nama_kategori" required value="<?= $kat['nama_kategori']; ?>">
                <label for="nama_kategori" class="label">Category Name</label>
              </div>

              <div class="form_div">
                <input type="file" class="form_inputI" placeholder=" " name="gambar" id="gambar" required style="margin-bottom: 40px;">
                <label for="gambar" class="label">Image Category : <?= $kat['gambar']; ?></label>
              </div>


              <button class="btn" type="submit" name="ubah">Ubah Produk</button>
              <button type="submit" class="btn">
                <a href="listCategory.php" style="text-decoration:none; color:white;">Kembali</a>
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