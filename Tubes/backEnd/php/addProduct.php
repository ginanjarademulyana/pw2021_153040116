<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

session_start();


if (!isset($_SESSION["username"])) {
  header("Location: ../../account/login.php");
  exit;
}

require 'functions.php';
require 'layout/sidebar.php';

$kategori = produk("SELECT * FROM kategori");

if (isset($_POST['tambah'])) {
  if (tambahProduk($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = 'listProduct.php';
          </script>";
  } else {
    echo "<script>
          alert('Data Gagal Ditambahkan!');
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

            <form action="" class="form" method="POST" enctype="multipart/form-data">
              <h1 class="form_title">Add Product</h1>

              <div class="form_div">
                <label for="kode_kategori"></label>
                <select class="form_control" name="kode_kategori" id="kode_kategori" required>
                  <option style="color:#fff;">
                    -- Select Category --
                  </option>
                  <?php $i = 1; ?>
                  <?php foreach ($kategori as $ktg) : ?>
                    <option style="color:#fff;" value="<?= $i; ?>"><?= $ktg['kode_kategori']; ?> <?= $ktg['nama_kategori']; ?></option>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form_div">
                <input type="text" class="form_input2" placeholder=" " name="kode_barang" id="kode_barang" required>
                <label for="kode_barang" class="label">Product Code</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input1" placeholder=" " name="nama_barang" id="nama_barang" required>
                <label for="nama_barang" class="label">Product Name</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input3" placeholder=" " name="ukuran" id="ukuran" required>
                <label for="ukuran" class="label">Size</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input3" placeholder=" " name="stok_barang" id="stok_barang" required>
                <label for="stok_barang" class="label">Stock</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input2" placeholder=" " name="harga" id="harga" required>
                <label for="harga" class="label">Price</label>
              </div>

              <div class="form_div">
                <input type="text" class="form_input4" placeholder=" " name="deskripsi_produk" id="deskripsi_produk" required>
                <label for="deskripsi_produk" class="label">Deskripsi Produk</label>
              </div>

              <div class="form_div">
                <input type="file" name="gambar_produk" id="gambar_produk" required>
              </div>


              <!-- <div class="form_img">

                <div class="inpt">
                  <div id="cancel-btn"><i class='bx bx-x'></i></div>
                  <label for="gambar_produk" class="box_img">
                    <i class='bx bx-plus-medical'></i>
                    <div class="image">
                      <img src=" " alt="">
                    </div>
                    Product Image
                  </label>
                  <input type="file" id="gambar_produk" name="gambar_produk" id="gambar_produk" hidden required>
                  <div class="file-name">
                    File Name
                  </div>
                </div>

                <div class="inpt">
                  <div id="cancel-btn"><i class='bx bx-x'></i></div>
                  <label for="input_preview" class="box_img">
                    <i class='bx bx-plus-medical'></i>
                    <div class="image">
                      <img src=" " alt="">
                    </div>
                    Preview
                  </label>
                  <input type="file" id="input_preview" name="gambar_produk" id="gambar_produk" hidden>
                  <div class="file-name">
                    File Name
                  </div>
                </div>

                <div class="inpt">
                  <div id="cancel-btn"><i class='bx bx-x'></i></div>
                  <label for="input_preview" class="box_img">
                    <i class='bx bx-plus-medical'></i>
                    <div class="image">
                      <img src=" " alt="">
                    </div>
                    Preview
                  </label>
                  <input type="file" id="input_preview" name="gambar_produk" id="gambar_produk" hidden>
                  <div class="file-name">
                    File Name
                  </div>
                </div>

                <div class="inpt">
                  <div id="cancel-btn"><i class='bx bx-x'></i></div>
                  <label for="input_preview" class="box_img">
                    <i class='bx bx-plus-medical'></i>
                    <div class="image">
                      <img src=" " alt="">
                    </div>
                    Preview
                  </label>
                  <input type="file" id="input_preview" name="gambar_produk" id="gambar_produk" hidden>
                  <div class="file-name">
                    File Name
                  </div>
                </div>

              </div> -->

              <button class="btn" type="submit" name="tambah">Add Product</button>
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