<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116
// Praktikum Jum'at 10:00 - 11:00 WIB

session_start();


if (!isset($_SESSION["username"])) {
    header("Location: ../../account/login.php");
    exit;
}

require 'functions.php';
require 'layout/sidebar.php';

if (isset($_POST['tambah'])) {
    if (tambahKategori($_POST) > 0) {
        echo "<script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = 'listCategory.php';
          </script>";
    } else {
        echo "<script>
          alert('Data Gagal Ditambahkan!');
          document.location.href = 'listCategory.php.php';
          </script>";
    }
}

?>

<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-body overflow-scroll">
                    <div class="container mt-2">

                        <form action="" class="form" method="POST">
                            <h1 class="form_title">Add Product</h1>

                            <div class="form_div">
                                <input type="text" class="form_input2" placeholder=" " name="kode_kategori" id="kode_kategori" required>
                                <label for="kode_kategori" class="label">Category Code</label>
                            </div>

                            <div class="form_div">
                                <input type="text" class="form_input1" placeholder=" " name="nama_kategori" id="nama_kategori" required>
                                <label for="nama_kategori" class="label">Category Name</label>
                            </div>

                            <div class="form_div">
                                <input type="file" name="gambar" id="gambar" required>
                            </div>


                            <button class="btn" type="submit" name="tambah">Add Category</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- APP JS -->
<script src="../assets/js/app.js"></script>

</body>





</html>