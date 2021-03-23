<?php 

// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%206
// Pertemuan 6 (19 Maret 2021)
// Materi minggu ini mempelajari dan mengenai array assosiative
//--------------------------------------------------------------------


// // array
// // membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "Text", true];

// // Menampilkan Array
// // Versi Debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// // Menampilkan 1 element pada Array
// echo $arr[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array</title>
  <style>
    .kotak {
      width : 30px;
      height : 30px;
      background-color : green;
      text-align : center;
      line-height : 30px;
      margin : 3px;
      float : left;
      transition : 1s;
    }

    .kotak:hover {
      transform : rotate(360deg);
      border-radius : 50%;
    }

    .clear {
      clear : both;
    }
  </style>
</head>
<body>

  <?php 
    $angka = [
      [1,2,3],
      [4,5,6],
      [7,8,9]
    ];
  ?>

  <?php foreach( $angka as $a) : ?>
    <?php foreach($a as $b) : ?>
      <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
  <?php endforeach; ?>

</body>
</html>