<?php

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_tubes_153040116");

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
