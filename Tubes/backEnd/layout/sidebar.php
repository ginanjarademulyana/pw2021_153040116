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
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                NSO Dashboard
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
                <a href="../account/logout.php">
                    <button class="btn btn-outline">
                        <i class='bx bx-log-out bx-flip-horizontal'></i>
                    </button>
                </a>
            </div>

            <!-- AWAL MENU SIDEBAR -->
            <ul class="sidebar-menu">
                <li>
                    <a href="index.php" class="active">
                        <i class='bx bx-home'></i>
                        <span>dashboard</span>
                    </a>
                </li>

                <li class="sidebar-submenu">
                    <a href="#" class="sidebar-menu-dropdown">
                        <i class='bx bx-category'></i>
                        <span>category</span>
                        <div class="dropdown-icon"></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="php/listCategory.php">
                                list category
                            </a>
                        </li>
                        <li>
                            <a href="php/addCategory.php">
                                add category
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-submenu">
                    <a href="#" class="sidebar-menu-dropdown">
                        <i class='bx bx-category'></i>
                        <span>products</span>
                        <div class="dropdown-icon"></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="php/listProduct.php">
                                list product
                            </a>
                        </li>
                        <li>
                            <a href="php/addProduct.php">
                                add product
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- AKHIR MENU SIDEBAR -->

        </div>
        <!-- AKHIT SIDEBAR -->