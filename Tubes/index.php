<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- --- GSAP Libraries --- -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">

    <!-- --- Font Awesome --- -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- --- My CSS --- -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>DORIONSIX</title>

</head>

<body>
    <!-- SIDEBAR -->
    <div class="sideBar">

        <div class="menu">
            <div class="menu-btn">
                <div class="menu-btn-burger"></div>
            </div>
        </div>

        <div class="pages">
            <a href="index.php">
                <img src="assets/img/icons/home.png" alt="">
            </a>
            <a href="about.php">
                <img src="assets/img/icons/user.png" alt="">
            </a>
            <a href="contact.php">
                <img src="assets/img/icons/contact.png" alt="">
            </a>
            <a href="courses.php">
                <img src="assets/img/icons/layers.png" alt="">
            </a>
        </div>
    </div>

    <!-- MAIN -->
    <div class="container">
        <!-- Content -->
        <div class="content">
            <!-- Title -->
            <div class="title">
                <h1>Ginanjar Ade Mulyana</h1>
                <h1>Teknik Informatika</h1>
                <h1>Universitas Pasundan Bandung</h1>
            </div>

            <!-- Deskripsi -->
            <div class="deskripsi">
                <p>Saya adalah Mahasiswa Jurusan Teknik Informatika Universitas Pasundan Bandung
                    dengan NRP 153040116. Website ini dibuat untuk memenuhi Tugas Besar Matakuliah
                    Pemrograman Web. Website ini berisikan kumpulan tugas-tugas Matakuliah, Praktikum
                    dan Project Akhir Praktikum Pemrograman Web.</p>
            </div>

            <!-- Tombol -->
            <a href="php/login.php">
                <button class="content-btn">
                    Tugas Besar
                </button>
            </a>

            <!-- Link Tugas -->
            <div class="tugas">
                <div class="matkul">
                    <a href="../Kuliah/" target="_blank">
                        <h1>Matakuliah</h1>
                        <p>Kumpulan tugas-tugas Matakuliah Pemrograman Web</p>
                    </a>
                </div>

                <div class="praktikum">
                    <a href="../Praktikum" target="_blank">
                        <h1>Praktikum</h1>
                        <p>Kumpulan tugas-tugas Praktikum Pemrograman Web</p>
                    </a>
                </div>
            </div>

        </div>

        <!-- Logo -->
        <div class="dorion">
            <div class="logo">
                <img src="assets/img/icons/logo.png" alt="">
            </div>
        </div>

        <!-- Sosial -->
        <div class="sosial">
            <i class="i_gsap">
                <a href="https://www.facebook.com/dorion.official" target="_blank"><img src="assets/img/icons/facebook.png"></a>
                <span>Facebook</span>
            </i>
            <i class="i_gsap">
                <a href="https://www.instagram.com/dorionsix/" target="_blank"><img src="assets/img/icons/instagram.png"></a>
                <span>Instagram</span>
            </i>
            <i class="i_gsap">
                <a href="https://twitter.com/urangnuisukan" target="_blank"><img src="assets/img/icons/twitter.png"></a>
                <span>Twitter</span>
            </i>
            <i class="i_gsap">
                <a href="https://www.youtube.com/channel/UC9SFtDGajuZZXvUGETMCdgg" target="_blank"><img src="assets/img/icons/youtube.png"></a>
                <span>Youtube</span>
            </i>
            <i class="i_gsap">
                <a href="https://www.twitch.tv/dorionsix" target="_blank"><img src="assets/img/icons/twitch.png"></a>
                <span>Twitch</span>
            </i>
        </div>
    </div>



    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>