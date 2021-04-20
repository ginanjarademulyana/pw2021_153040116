<?php

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
