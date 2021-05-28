-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 06:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tugasbesar_153040116`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(3) NOT NULL,
  `kode_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`, `gambar`) VALUES
(1, 'Alexander Christie', 'ac.png'),
(2, 'Rolex', 'rlx.png'),
(3, 'Expedition', 'exp.png'),
(4, 'Fossil', 'fossil.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_barang` int(11) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `gambar_produk` varchar(20) NOT NULL,
  `deskripsi_produk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_barang`, `kode_kategori`, `nama_barang`, `ukuran`, `harga`, `stok_barang`, `gambar_produk`, `deskripsi_produk`) VALUES
(11, 1, 'AC - 9205 MCR', 'Small', 2300000, 20, 'black.png', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database \"Alexander Christie - 9205 MCR\"'),
(21, 2, 'Datejust', 'Large', 1350000, 12, 'rlx.png', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Datejust\"'),
(31, 3, 'EXP - E6810MCR', 'Large', 3000000, 12, 'e6810MCR-red.png', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Expedition - E6810MCR\"'),
(41, 4, 'Fossil Solar LE', 'Large', 1250000, 12, 'fossil.png', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Fossil Solar LE\"'),
(42, 4, 'Chase Timer Chronogr', 'Medium', 3250000, 12, '1.png', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database &quot;Chase Timer Chronograph&quot;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', '$2y$10$Fzp82X6ctBCmqo6h0EdbbOv8WWcWercN/F7QUiKxJZxpWOiZR/GzC', 'admin@mail.unpas.ac.id', 'admin'),
(2, 'ginanjar', '$2y$10$vcdAy3dqFepYMrv8ifdw6.wwpbBEqrY3N3eY6svKd7TKFAFEkVala', 'ginanjar@mail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `produk` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
