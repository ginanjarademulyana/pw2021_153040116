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

$kode_kategori = $_GET['kode_kategori'];

if (hapusCategory($kode_kategori) > 0) {
  echo "<script>
          alert('Data Berhasil Diahpus!');
          document.location.href = 'listCategory.php';
          </script>";
} else {
  echo "<script>
          alert('Data Gagal Dihapus!');
          document.location.href = 'listCategory.php';
          </script>";
}
