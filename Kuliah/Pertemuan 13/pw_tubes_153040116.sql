-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:57 PM
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
-- Database: `pw_tubes_153040116`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `kode_barang`, `nama`, `gambar`) VALUES
(1, 23, 'Watch-1', 'gallery-1.jpg'),
(2, 23, 'Watch-1', 'gallery-2.jpg'),
(3, 23, 'Watch-1', 'gallery-3.jpg'),
(4, 23, 'Watch-1', 'gallery-4.jpg'),
(5, 11, 'Sepatu-1', 'gallery-1.jpg'),
(6, 11, 'Sepatu-1', 'gallery-2.jpg'),
(7, 11, 'Sepatu-2', 'gallery-3.jpg'),
(8, 11, 'Sepatu-2', 'gallery-4.jpg');

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
(1, 'Shoes', 'category-2.jpg'),
(2, 'Watch', 'category-3.jpg'),
(3, 'Shirt', 'category-4.jpg'),
(4, 'Pants', 'category-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nrp` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'ginanjar.jpg', 153040116, 'Ginanjar Ade Mulyana', 'dorion.official@gmail.com', 'Teknik Informatika'),
(2, 'dewi.jpg', 153040117, 'Dewi Wisuda Wardani', 'dewiwisudawardani02@gmail.com', 'Teknik Informatka');

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
(11, 1, 'Dorion Red Print', '43', 890000, 20, 'product-1.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database \"Produk Dorio Red Print\"'),
(12, 1, 'Black Dragon', '42', 750000, 12, 'product-2.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Black Dragon\"'),
(13, 1, 'Grey Enma', '42', 900000, 12, 'product-3.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Grey Enma\"'),
(14, 1, 'Grey Mate Nue', '41', 670000, 12, 'product-4.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Grey Mate Nue\"'),
(15, 1, 'Dorion Patch 1', '43', 975000, 12, 'product-1.jpg', 'ini adalah contoh add produk dari form tambah barang'),
(21, 2, 'Grey Sinse Matte', 'Medium', 425000, 12, 'product-8.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Grey Sinse Matte\"'),
(22, 2, 'Black Drop Jerx', 'Medium', 590000, 12, 'product-9.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Black Drop Jerx\"'),
(23, 2, 'AVI-8 Blue Drop', 'Large', 675000, 12, 'product-10.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"AVI-8 Blue Drop\"'),
(31, 3, 'Dorion Polo Drew', 'XL', 300000, 12, 'product-5.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Dorion Polo Drew\"'),
(32, 3, 'Black Mate Drop', 'L', 175000, 12, 'product-7.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Black Mate Drop\"'),
(33, 2, 'Red Drop', 'XL', 125000, 12, 'product-6.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Red Drop\"'),
(41, 4, 'Long Black Drew', '32', 425000, 12, 'product-11.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Long Black Drew\"'),
(42, 4, 'Long Grey Drew', '32', 425000, 12, 'product-12.jpg', 'Deskripsi ini hanya untuk menyatakan bahwa Deskripsi Produk ini di tampilkan dari database Produk \"Long Grey Drew\"\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'admin', '$2y$10$VZtBjf3SXaZ6arHh/1.5FewNOI2I4lEd1miUQQINQsWuWNbpqyEZG');

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
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `produk` (`kode_barang`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
