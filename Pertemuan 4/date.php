<?php
// -------------------------------------------------------------------
// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%204
// Pertemuan 3 (5 Januari 2021)
// Materi minggu ini mempelajari dan mengenai sintaks dasar pemrograman pada PHP
//--------------------------------------------------------------------


// Date
echo "(Untuk menampilkan Tanggal Tertentu) - ";
echo date("l, j M Y");


echo "<br>";
echo "<br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
echo "hari dimana 100 hari dari hari coding ini dibuat = ";
echo date("l", time() - 60 * 60 * 24 * 100);

echo "<br>";
echo "<br>";

// mktime
// membuat sendiri detik
// mk time(0,0,0,0,0,0)
// jam , menit, detik, bulan, hari (tanggal), tahun
echo date("l", mktime(0, 0, 0, 5, 23, 1997));
echo " - input array";

echo "<br>";

// strtotime
echo date("l", strtotime("23 May 1997"));
echo " - input string";
