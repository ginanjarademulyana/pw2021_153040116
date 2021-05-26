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


<!-- Home -->
<div class="container">
  <div class="home">
    <div class="row">
      <div class="colom">
        <img src="assets/img/Home.png">
      </div>

      <div class="colom">
        <h1>ROLEX IS PRESENTING THE LATEST CREATIONS
          <br>BROUGHT TO LIFE BY ITS UNIQUE WATCH
          <br>MAKING EXPERTISE.
        </h1>
        <p>These timepieces take us from the deepest caves to the highest mountainpeaks,from the outer
          <br>reaches of the solar system to isolated polar regions and from ultra-precise technolog to exacting artisanal
          <br>aftsmanship. They are watches that invite you on an adventure – be it geographical, technical or aesthetic.
          <a href="" class="btn">&#8592; Explore Now</a>
        </p>
      </div>
    </div>
  </div>


  <!-- Kategori -->
  <div class="kategori">
    <h2 class="title">Categories</h2>
    <div class="row">
      <?php $kat = 1 ?>
      <?php foreach ($kategori as $ktg) : ?>
        <div class="col-kat">
          <a href="">
            <h4 style="text-align: center;"><?= $ktg["nama_kategori"]; ?></h4>
            <img src="assets/img/kategori/<?= $ktg["gambar"]; ?>">
          </a>
        </div>
        <?php $kat++ ?>
      <?php endforeach; ?>
    </div>
  </div>


  <!-- Produk -->
  <div class="produk">
    <h2 class="title">Products</h2>
    <div class="row">
      <?php $prod = 1 ?>
      <?php foreach ($produk as $prdk) : ?>
        <div class="col-prod">

          <div class="prod">
            <a href="php/detail.php?kode_barang=<?= $prdk["kode_barang"]; ?>&kategori=<?= $prdk["kode_kategori"]; ?>">
              <img src="assets/img/products/<?= $prdk["gambar_produk"]; ?>">
            </a>
          </div>

          <h4 style="text-align: center; color: #fff;"><?= $prdk["nama_barang"] ?></h4>
        </div>
        <?php $prod++ ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php

require 'layout/footer.php';

?>