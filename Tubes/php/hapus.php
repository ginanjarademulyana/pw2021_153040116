<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$kode_barang = $_GET['kode_barang'];

if (hapus($kode_barang) > 0) {
  echo "<script>
          alert('Data Berhasil Diahpus!');
          document.location.href = 'admin.php';
          </script>";
} else {
  echo "<script>
          alert('Data Gagal Dihapus!');
          document.location.href = 'admin.php';
          </script>";
}
