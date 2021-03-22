<?php 
// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%204
// Pertemuan 3 (5 Januari 2021)
// Materi minggu ini mempelajari dan mengenai sintaks dasar pemrograman pada PHP
//--------------------------------------------------------------------

function salam($w= "Datang", $nama = "Ginanjar") {
  return "Selamat $w, $nama";
}
function today(){
  return date("l, j M Y");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?= salam()  ?></h1>
  <lu><?= today() ?></lu>
</body>
</html>