<?php
// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%203
// Pertemuan 3 (5 Januari 2021)
// Materi minggu ini mempelajari dan mengenai sintaks dasar pemrograman pada PHP
//--------------------------------------------------------------------

// Pengulangan
// for
// while 
// do.. while 
// foreach : pengulangan khusus array 

// for ($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

// $i = 0;
// while ($i < 5) {
//     echo "Hello World! <br>";
//     $i++;
// }

// $i = 0;
// do {
//     echo "Hello World! <br>";
//     $i++;
// } while ($i < 5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>

                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td> <?= "$i, $j"; ?> </td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>

            <!-- ATAU -->

            <?php
            // for ($i = 1; $i <= 3; $i++) {
            //     echo "<tr>";
            //     for ($j = 1; $j <= 5; $j++) {
            //         echo "<td>$i,$j</td>";
            //     }
            //     echo "</tr>";
            // }
            ?>

    </table>

</body>

</html>