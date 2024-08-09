-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`admin_id`, `admin_name`, `username`, `password`) VALUES
(1, 'Sifa', 'admin', '0192023a7bbd73250516f069df18b500'),
(9, 'Vanesa', 'sifa', '12f57858769fcb6b460ff6833b19de5a'),
(10, 'admin', 'admin3', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama_buku` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `penerbit`) VALUES
(2, 'Novel', 'Manajemen Strategik dan Bisnis', '108.000', '30', 'Bumi Aksara'),
(3, 'Keilmuan', 'Autocad 3 Dimensi', '40.000', '25', 'Penerbit Informatika'),
(4, 'Bisnis', 'Bisnis Online', '75.000', '20', 'Penerbit Informatika'),
(5, 'Keilmuan', 'Cloud Computing Technology', '85.000', '15', 'Penerbit Informatika'),
(7, 'Novel', 'Cahaya Di Penjuru Hati', '68.000', '20', 'Andi Offest'),
(21, 'Novel', 'Aku ingin sukses', '100.000', '50', 'Sri Printing'),
(22, 'Novel', 'Cantik Itu Luka', '30.000', '50', 'Gramedia Pustaka Umum'),
(23, 'Novel', 'Pulang', '85.000', '27', 'Jakarta Republika'),
(24, 'Bisnis', 'Memahami Bisnis Bank', '80.000', '18', 'Gramedia Pustaka Utama');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bukusedikit`
--

CREATE TABLE `tabel_bukusedikit` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(200) NOT NULL,
  `stok` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `edit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_bukusedikit`
--

INSERT INTO `tabel_bukusedikit` (`id_buku`, `nama_buku`, `stok`, `penerbit`, `edit`) VALUES
(5, 'Bumi Manusia', '30', 'Hasta Mitro', 'Admin'),
(6, 'Hujan', '30', 'Gramedia Pustaka Umum', 'Admin'),
(8, '172 Days', '40', 'Motivaksi Inspira', 'Admin'),
(14, 'lika liku kucing', '2', 'gramedia', 'Pengguna'),
(20, 'Segala-galanya Ambyar', '20', 'Gramedia Indonesia', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penerbit`
--

CREATE TABLE `tabel_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_penerbit`
--

INSERT INTO `tabel_penerbit` (`id_penerbit`, `nama`, `alamat`, `kota`, `telepon`) VALUES
(1, 'Penerbit Informatika', 'Jalan Buah Batu No.121', 'Bandung', '081322201946'),
(4, 'Andi Offest', 'Jalan Suryalaya lX No.3', 'Bandung', '08783903068'),
(5, 'Danendra', 'Jalan Moch. Toha.44', 'Bandung', '08225201215'),
(8, 'Gramedia Pustaka Utama', 'Jalan Palmerah Barat No. 33-37 ', 'Jakarta Pusat', '082153650110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_bukusedikit`
--
ALTER TABLE `tabel_bukusedikit`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_penerbit`
--
ALTER TABLE `tabel_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tabel_bukusedikit`
--
ALTER TABLE `tabel_bukusedikit`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabel_penerbit`
--
ALTER TABLE `tabel_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
