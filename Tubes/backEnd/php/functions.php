<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_tugasbesar_153040116");

  return $conn;
}

function kategori($sql_k)
{
  $conn = koneksi();
  $db_k = mysqli_query($conn, "$sql_k");
  $rows_k = [];
  while ($row_k = mysqli_fetch_assoc($db_k)) {
    $rows_k[] = $row_k;
  }
  return $rows_k;
}

function produk($sql_p)
{
  $conn = koneksi();
  $db_p = mysqli_query($conn, "$sql_p");
  $rows_p = [];
  while ($row_p = mysqli_fetch_assoc($db_p)) {
    $rows_p[] = $row_p;
  }
  return $rows_p;
}

function gallery($sql_g)
{
  $conn = koneksi();
  $db_g = mysqli_query($conn, "$sql_g");
  $rows_g = [];
  while ($row_g = mysqli_fetch_assoc($db_g)) {
    $rows_g[] = $row_g;
  }
  return $rows_g;
}

function tambahProduk($data)
{
  $conn = koneksi();

  $kodekt = htmlspecialchars($data['kode_kategori']);
  $kodebr = htmlspecialchars($data['kode_barang']);
  $namabr = htmlspecialchars($data['nama_barang']);
  $ukr = htmlspecialchars($data['ukuran']);
  $stkbr = htmlspecialchars($data['stok_barang']);
  $hrg = htmlspecialchars($data['harga']);
  $dkpbr = htmlspecialchars($data['deskripsi_produk']);
  $gambar = htmlspecialchars($data['gambar_produk']);

  $db_p = "INSERT INTO produk
      VALUES
      ('$kodebr' , '$kodekt' , '$namabr' , '$ukr' , '$hrg' ,'$stkbr' , '$gambar' , '$dkpbr')";

  mysqli_query($conn, $db_p);
  return mysqli_affected_rows($conn);
}

function tambahKategori($data)
{
  $conn = koneksi();

  $kodekt = htmlspecialchars($data['kode_kategori']);
  $namakt = htmlspecialchars($data['nama_kategori']);
  $img = htmlspecialchars($data['gambar']);


  $db_k = "INSERT INTO kategori
      VALUES
      ('$kodekt' , '$namakt' , '$img')";

  mysqli_query($conn, $db_k);
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $kodekt = htmlspecialchars($data['kode_kategori']);
  $namakt = htmlspecialchars($data['nama_kategori']);
  $kodebr = htmlspecialchars($data['kode_barang']);
  $namabr = htmlspecialchars($data['nama_barang']);
  $ukr = htmlspecialchars($data['ukuran']);
  $stkbr = htmlspecialchars($data['stok_barang']);
  $hrg = htmlspecialchars($data['harga']);
  $dkpbr = htmlspecialchars($data['deskripsi_produk']);
  $img = htmlspecialchars($data['gambar']);
  $gambar = htmlspecialchars($data['gambar_produk']);

  $db_k = "UPDATE kategori
      SET
      nama_kategori = '$namakt',
      gambar = '$img',
      WHERE kode_kategori = '$kodekt'
      ";

  $db_p = "UPDATE produk
      SET
      nama_barang = '$namabr',
      ukuran = '$ukr',
      harga = '$hrg',
      stok_barang = '$stkbr',
      gambar_produk = '$gambar',
      deskripsi_produk = '$dkpbr',
      WHERE kode_barang = '$kodebr'
      ";

  mysqli_query($conn, $db_k);
  mysqli_query($conn, $db_p);
  return mysqli_affected_rows($conn);
}

function hapusCategory($kode_kategori)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM kategori WHERE kode_kategori = $kode_kategori");
  return mysqli_affected_rows($conn);
}

function hapus($kode_barang)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM produk WHERE kode_barang = $kode_barang");
  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $email = htmlspecialchars($data['email']);
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('Username telah digunakan');
          </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password', '$email')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
