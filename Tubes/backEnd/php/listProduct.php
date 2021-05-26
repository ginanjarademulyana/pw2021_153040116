<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

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
                                <th> # </th>
                                <th> Opsi </th>
                                <th> Gambar </th>
                                <th> Kode Barang </th>
                                <th> Nama Barang </th>
                                <th> Harga </th>
                                <th> Stok Barang </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($produk as $prod) : ?>
                                <tr>
                                    <td> <?= $i; ?> </td>
                                    <td>
                                        <a href="ubah.php?kode_barang=<?= $prod['kode_barang']; ?>"><button type="submit" name="edit_btn" class="btn">Ubah</button></a>
                                        <a href="hapus.php?kode_barang=<?= $prod['kode_barang']; ?>" onclick="return confirm ('Hapus Data Barang ?')"><button type="submit" name="delete_btn" class="btn">Hapus</button></a>
                                    </td>
                                    <td><img src="../../frontEnd/assets/img/products/<?= $prod['gambar_produk']; ?>" width="10%;"></td>
                                    <td>RDSTR<?= $prod['kode_barang']; ?></td>
                                    <td><?= $prod['nama_barang']; ?></td>
                                    <td>Rp. <?= $prod['harga']; ?></td>
                                    <td><?= $prod['stok_barang']; ?></td>
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