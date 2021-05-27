<?php

// Ginanjar Ade Mulyana
// 153040116
// https://github.com/ginanjarademulyana/pw2021_153040116

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSO Admin</title>
    <link rel="shortcut icon" href="../assets/icons/iconNSO.png" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="../backEnd/assets/css/grid.css">
    <link rel="stylesheet" href="../backEnd/assets/css/style.css">
</head>

<body>
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                NSO | Account
            </div>
        </div>

        <!-- AWAL SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-logo">
                <img src="../assets/icons/Logo-Putih.png" alt="Comapny logo">
                <div class="sidebar-close" id="sidebar-close">
                    <i class='bx bx-left-arrow-alt'></i>
                </div>
            </div>
            <div class="sidebar-user">
                <div class="sidebar-user-info">
                    <img src="../assets/icons/Logo.png" alt="User picture" class="profile-image">
                    <div class="sidebar-user-name">
                        DORIONSIX
                    </div>
                </div>
                <a href="logout.php">
                    <button class="btn btn-outline">
                        <i class='bx bx-log-out bx-flip-horizontal'></i>
                    </button>
                </a>
            </div>

            <!-- AWAL MENU SIDEBAR -->
            <ul class="sidebar-menu">
                <li>
                    <a href="cart.php" class="active">
                        <i class='bx bx-user-circle'></i>
                        <span>my account</span>
                    </a>
                </li>

                <li>
                    <a href="cart.php" class="">
                        <i class='bx bx-cart'></i>
                        <span>Cart</span>
                    </a>
                </li>

                <li class="sidebar-submenu">
                    <a href="#" class="sidebar-menu-dropdown">
                        <i class='bx bxs-cog bx-flip-horizontal'></i>
                        <span>setting</span>
                        <div class="dropdown-icon"></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="#">
                                edit profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                account settings
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- AKHIR MENU SIDEBAR -->

        </div>
        <!-- AKHIT SIDEBAR -->
    </div>

    <!-- APP JS -->
    <script src="../backEnd/assets/js/app.js"></script>

</body>

</html>