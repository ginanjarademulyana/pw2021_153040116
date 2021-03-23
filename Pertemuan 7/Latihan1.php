<?php

// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%207
// Pertemuan 7 (19 Maret 2021)
// Materi minggu ini mempelajari dan mengenai Get & Post
//--------------------------------------------------------------------


// Variable Scope / Lingkup Variable
// $x = 10;
// function tampilX() {
//   global $x;
//   echo $x;
// }
// tampilX();

// ------------------------------------------------------------------

//SUPERGLOBAL
// variable global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// ------------------------------------------------------------------

// $_GET
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
  <title>GET</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <!-- <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      </li> -->
      <li>
        <a href="Latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>
        &email=<?= $mhs["email"]; ?>">
          <?= $mhs["nama"]; ?> </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>