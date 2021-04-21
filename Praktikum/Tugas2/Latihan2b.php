<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 B</title>

    <style>
        .kotak {
            border: 2px solid black;
            padding: 10px;
        }
    </style>

</head>

<body>

    <?php
    $jawabanIsset = "Isset adalah = Berfungsi untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset juga mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";
    $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

    function soal($style)
    {
        global $jawabanIsset, $jawabanEmpty;
        echo $jawabanIsset, $jawabanEmpty;
        return $style;
    }

    ?>

    <div class="kotak">
        <?= soal("  "); ?>
    </div>

</body>

</html>