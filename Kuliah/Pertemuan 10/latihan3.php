<?php

// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Kuliah/Pertemuan%207
// Pertemuan 10 
// Materi ini mempelajari koneksi database
//--------------------------------------------------------------------




require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>


  <table border="1" callpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>