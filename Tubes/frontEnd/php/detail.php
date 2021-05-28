<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

if (
  !isset($_GET["kode_barang"])
) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';
require 'layout/header.php';

$kode_barang = $_GET["kode_barang"];
$kode_kategori = $_GET["kategori"];

$kat = "SELECT nama_barang, ukuran, harga, stok_barang, gambar_produk, deskripsi_produk, nama_kategori
FROM produk JOIN kategori
ON produk.kode_kategori = kategori.kode_kategori
WHERE produk.kode_barang = $kode_barang";


$prdk = produk($kat)[0];

?>


<div class="card-wrapper">
  <div class="card">
    <!-- Gambar Utama -->
    <div class="product-galery">
      <div class="img-display">
        <div class="img-showcase">
          <img src="../assets/img/products/<?= $prdk["gambar_produk"]; ?>" width="50%" id="product-img">
        </div>
      </div>

      <!-- Gallery
      <div class="img-select">
        <div class="img-item">
          <a href="#" data-id="1">
            <img src="../assets/img/products/<?= $prdk["gambar_produk"]; ?>" width="50%" id="product-img">
          </a>
        </div>
        <div class="img-item">
          <a href="#" data-id="2">
            <img src="shoes_images/shoe_2.jpg" alt="shoe image">
          </a>
        </div>
        <div class="img-item">
          <a href="#" data-id="3">
            <img src="shoes_images/shoe_3.jpg" alt="shoe image">
          </a>
        </div>
        <div class="img-item">
          <a href="#" data-id="4">
            <img src="shoes_images/shoe_4.jpg" alt="shoe image">
          </a>
        </div>
      </div> -->
    </div>

    <!-- Deskripsi -->
    <div class="product-content">
      <h2 class="product-title"><?= $prdk["nama_barang"]; ?></h2>
      <div class="product-rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <span>4.7(21)</span>
      </div>

      <div class="product-price">
        <p class="new-price">Rp. <span><?= $prdk["harga"]; ?></span></p>
      </div>

      <div class="product-detail">
        <h2>product deskription : </h2>
        <p><?= $prdk["deskripsi_produk"]; ?></p>
        <ul>
          <li>Color: <span>Black</span></li>
          <li>Available: <span><?= $prdk["stok_barang"]; ?></span></li>
          <li>Category: <span><?= $prdk["nama_kategori"]; ?></span></li>
          <li>Shipping Area: <span>All over the world</span></li>
          <li>Shipping Fee: <span>Free</span></li>
        </ul>
      </div>

      <div class="purchase-info">
        <input type="number" min="0" value="1">
        <a href="cart.php">
          <button type="button" class="btn">
            Add to Cart <i class="fas fa-shopping-cart"></i>
          </button>
        </a>
      </div>

      <div class="social-links">
        <p>Share At : </p>
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#">
          <i class="fab fa-pinterest"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="product-detail">
    <div class="row">
      <div class="col-2">
        <img src="../assets/img/products/<?= $prdk["gambar_produk"]; ?>" width="50%" id="product-img">

        <div class="small-img-row">
          <?php foreach ($gallery as $gal) : ?>
            <div class="small-img-col">
              <img src="../assets/img/galeri/<?= $gal["gambar"]; ?>" width="100%" class="small-img">
            </div>
          <?php endforeach; ?>
        </div>

      </div>
      <div class="col-2">
        <h1><?= $prdk["nama_barang"]; ?></h1>
        <h4>Rp.<?= $prdk["harga"]; ?></h4>
        <select>
          <option>Select Size</option>
          <option><?= $prdk["ukuran"]; ?></option>
        </select>
        <br>
        <p>Stok : <?= $prdk["stok_barang"]; ?></p>
        <a href="cart.php" class="btn">Add To Cart</a>

        <h3>Product Details <i class="fa fa-indent"></i></h3>
        <br>
        <p><?= $prdk["deskripsi_produk"]; ?></p>
      </div>
    </div>
  </div> -->


<?php

require 'layout/footer.php';

?>