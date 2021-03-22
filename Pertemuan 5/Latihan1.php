<?php 

// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%205
// Pertemuan 5 (7 Maret 2021)
// Materi minggu ini mempelajari dan mengenai sintaks dasar pemrograman pada PHP
//--------------------------------------------------------------------

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Bulan", false];

// menampilkan array
// gunakan var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);

?>