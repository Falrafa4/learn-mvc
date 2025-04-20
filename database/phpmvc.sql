-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 08:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `email`, `jurusan`) VALUES
(1, 'Muhammad Naufal Rafa Al As\'ad', '24251024', 'muhammadnaufalra@smktelkom-sda.sch.id', 'Sistem Informasi, Jaringan, dan Aplikasi'),
(2, 'Aliezzar Wijaya', '24251003', 'aliezzarwijaya@smktelkom-sda.sch.id', 'Sistem Informasi, Jaringan, dan Aplikasi'),
(3, 'Muhammad Daffa Ronalvianto Pratama', '24251021', 'muhammaddaffarp@smktelkom-sda.sch.id', 'Sistem Informasi, Jaringan, dan Aplikasi'),
(4, 'Amadeus Xavier Enoch', '24251004', 'amadeusxaviere@smktelkom-sda.sch.id', 'Sistem Informasi, Jaringan, dan Aplikasi'),
(5, 'Nabil Aswangga Hugobama', '24251026', 'nabilaswanggah@smktelkom-sda.sch.id', 'Sistem Informasi, Jaringan, dan Aplikasi'),
(6, 'Evan Satria Mahardika', '24251011', 'evansatriam@smktelkom-sda.sch.id', 'Sistem Informasi, Jaringan, dan Aplikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
