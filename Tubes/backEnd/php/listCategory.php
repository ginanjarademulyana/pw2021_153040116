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
require 'layout/sidebar.php';

$kategori = kategori("SELECT * FROM kategori");
$produk = produk("SELECT * FROM produk");

?>

<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    List Products
                </div>
                <div class="box-body overflow-scroll">
                    <table>
                        <thead>
                            <tr>
                                <th> Options </th>
                                <th> Images </th>
                                <th> SKU </th>
                                <th> Category Names </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kategori as $kat) : ?>
                                <tr>
                                    <td>
                                        <a href="changeCategory.php?kode_kategori=<?= $kat['kode_kategori']; ?>"><button type="submit" name="edit_btn" class="btn">Ubah</button></a>
                                        <a href="hapus.php?kode_kategori=<?= $kat['kode_kategori']; ?>" onclick="return confirm ('Hapus Data Barang ?')"><button type="submit" name="delete_btn" class="btn">Hapus</button></a>
                                    </td>
                                    <td><img src="../../frontEnd/assets/img/kategori/<?= $kat['gambar']; ?>" width="10%;"></td>
                                    <td>RDSTR<?= $kat['kode_kategori']; ?></td>
                                    <td><?= $kat['nama_kategori']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>
<!-- APP JS -->
<script src="../assets/js/app.js"></script>
</body>

</html>