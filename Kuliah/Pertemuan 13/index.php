<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116/tree/main/Pertemuan%2013

require 'functions.php';

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tomdol cari diklik
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <button><a href="logout.php">Logout</a></button>

    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="45" placeholder="Masukkan Keyword Pencarian.." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>

    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
            <tr>
                <td colspan="4">
                    <p style="color: red; font-style: italic;">Data Mahasiswa Tidak Ditemukan</p>
                </td>
            </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m["img"]; ?>" alt="" width="130"></td>
                <td><?= $m["nama"]; ?></td>
                <td>
                    <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>