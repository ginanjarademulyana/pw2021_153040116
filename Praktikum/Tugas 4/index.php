<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_153040116");
$db_k = mysqli_query($conn, "SELECT * FROM kategori");
$db_p = mysqli_query($conn, "SELECT * FROM produk");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Kategori -->
  <div class="kategori">
    <div class="small-container">
      <h2 class="title">Categories</h2>
      <div class="row">
        <?php $kat = 1 ?>
        <?php while ($row_k = mysqli_fetch_assoc($db_k)) : ?>
          <div class="col-3">
            <img src="assets/img/categories/<?= $row_k["gambar"]; ?>">
          </div>
          <?php $kat++ ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>


  <!-- Produk -->
  <div class="small-container">
    <h2 class="title">Products</h2>
    <div class="row">
      <?php $prod = 1 ?>
      <?php while ($row_p = mysqli_fetch_assoc($db_p)) : ?>
        <div class="col-4">
          <img src="assets/img/produk/<?= $row_p["gambar_produk"]; ?>">
          <h4><?= $row_p["nama_barang"] ?></h4>
          <div class="ratting">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp.<?= $row_p["harga"] ?></p>
          <p>Ukuran : <?= $row_p["ukuran"] ?></p>
        </div>
        <?php $prod++ ?>
      <?php endwhile; ?>
    </div>
  </div>

</body>

</html>