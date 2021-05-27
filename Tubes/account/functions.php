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

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $email = htmlspecialchars($data['email']);
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $level = htmlspecialchars($data['level']);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('Username telah digunakan');
          </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password', '$email', '$level')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
