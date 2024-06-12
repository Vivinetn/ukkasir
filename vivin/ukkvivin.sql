-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 03:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukkvivin`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `IdStruk` int(50) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `Jumlah` int(50) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `TglPesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`IdStruk`, `NamaBarang`, `Jumlah`, `Harga`, `TglPesan`) VALUES
(1, 'Nasi Goreng', 2, '15000', '2024-06-08'),
(2, 'Mie Ayam', 4, '12000', '2024-06-08'),
(3, 'Sate Ayam', 1, '20000', '2024-06-08'),
(4, 'Es Teh', 3, '5000', '2024-06-08'),
(5, 'Ayam Goreng', 2, '18000', '2024-06-08'),
(6, 'Kopi', 2, '10000', '2024-06-08'),
(7, 'Teh Botol', 3, '5000', '2024-06-08'),
(8, 'Roti Bakar', 1, '8000', '2024-06-08'),
(9, 'Nasi Goreng', 2, '15000', '2024-06-08'),
(10, 'Mie Goreng', 2, '12000', '2024-06-08'),
(12, 'tes user', 2, '1234234', '2024-06-07'),
(13, 'tes user', 2, '1234234', '2024-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` enum('user','admin','petugas','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `email`, `role`) VALUES
('admin', '12345', 'admin@gmail.com', 'admin'),
('Petugas', '12345', 'petugas@gmail.com', 'petugas'),
('user', '12345', 'user@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `stokgudang`
--

CREATE TABLE `stokgudang` (
  `IdBarang` int(50) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `SisaStok` int(50) NOT NULL,
  `TglStok` date NOT NULL,
  `Catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stokgudang`
--

INSERT INTO `stokgudang` (`IdBarang`, `NamaBarang`, `SisaStok`, `TglStok`, `Catatan`) VALUES
(1, 'tes', 2, '2024-06-08', '103823ruwehfujisdgbfsjkf'),
(3, 'Nike Air Max 90', 50, '2024-06-10', 'Kedatangan produk baru'),
(4, 'Adidas Ultraboost', 30, '2024-06-09', 'Ditambahkan kembali setelah permintaan tinggi'),
(5, 'Vans Old Skool', 20, '2024-06-08', 'Promosi akhir musim'),
(6, 'Converse Chuck Taylor', 40, '2024-06-07', 'Pengecekan persediaan'),
(7, 'Puma Suede Classic', 25, '2024-06-06', 'Penawaran promosi'),
(8, 'New Balance 574', 35, '2024-06-05', 'Kedatangan warna baru'),
(9, 'Reebok Classic Leather', 15, '2024-06-04', 'Rilis edisi spesial'),
(10, 'Asics Gel-Lyte III', 10, '2024-06-03', 'Sisa stok terbatas'),
(11, 'Fila Disruptor II', 60, '2024-06-02', 'Item terlaris'),
(12, 'Under Armour HOVR', 45, '2024-06-01', 'Peluncuran teknologi baru'),
(13, 'tes', 20, '2024-06-08', '1323542356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`IdStruk`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `stokgudang`
--
ALTER TABLE `stokgudang`
  ADD PRIMARY KEY (`IdBarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `IdStruk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stokgudang`
--
ALTER TABLE `stokgudang`
  MODIFY `IdBarang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
