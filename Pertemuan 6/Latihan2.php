<?php 

// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%206
// Pertemuan 6 (19 Maret 2021)
// Materi minggu ini mempelajari dan mengenai array assosiative
//--------------------------------------------------------------------

$mahasiswa = [
  [
    "nama" => "Ginanjar Ade Mulyana", 
    "nrp" => "153040116", 
    "jurusan" => "Teknik Informatika", 
    "email" => "dorion.official@gmail.com",
    "gambar" => "ginanjar.jpg"
  ],
  [
    "nama" => "Dewi Wisuda Wardani", 
    "nrp" => "153040117", 
    "jurusan" => "Teknik Informatika", 
    "email" => "dewi.official@gmail.com",
    "gambar" => "dewi.jpg"
  ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"] ?></li>
    <li>NRP : <?= $mhs["nrp"] ?></li>
    <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    <li>Email : <?= $mhs["email"] ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>