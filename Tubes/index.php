<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

require 'php/functions.php';
require 'layout/header.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");



?>

<div class="row">
  <div class="col-2">
    <h1>Give Your Workout <br>A New Style!</h1>
    <p>Success isn't always about greatness. It's about consistency. Consistent <br>hard work gain success. Greatness will come.</p>
    <a href="" class="btn">Explore Now &#8594;</a>
  </div>
  <div class="col-2">
    <img src="assets/img/image1.png">
  </div>
</div>
</div>
</div>

<!-- Kategori -->
<div class="kategori">
  <div class="small-container">
    <h2 class="title">Categories</h2>
    <div class="row">
      <?php $kat = 1 ?>
      <?php foreach ($kategori as $ktg) : ?>
        <div class="col-3">
          <a href="">
            <img src="assets/img/kategori/<?= $ktg["gambar"]; ?>">
            <h4 style="text-align: center;"><?= $ktg["nama_kategori"]; ?></h4>
          </a>
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
        <a href="php/detail.php?kode_barang=<?= $prdk["kode_barang"]; ?>">
          <img src="assets/img/products/<?= $prdk["gambar_produk"]; ?>">
        </a>
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




<!-- ------------JS for Toggle Menu------------- -->
<script>
  var MenuItems = document.getElementById("MenuItems");

  MenuItems.style.maxHeight = "0px";

  function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
      MenuItems.style.maxHeight = "200px";
    } else {
      MenuItems.style.maxHeight = "0px";
    }
  }
</script>
</body>

</html>