-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2022 at 05:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dekost`
--

-- --------------------------------------------------------

--
-- Table structure for table `Fasilitas`
--

CREATE TABLE `Fasilitas` (
  `id` int(2) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `id_kost` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Kamar`
--

CREATE TABLE `Kamar` (
  `no_kamar` int(3) NOT NULL,
  `id_kost` int(6) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `lebar` float DEFAULT NULL,
  `panjang` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Kost`
--

CREATE TABLE `Kost` (
  `id` int(6) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `jumlahKamar` int(3) DEFAULT 0,
  `NIK_Pemilik` char(16) DEFAULT NULL,
  `harga` int(7) NOT NULL,
  `jenis` enum('Putra','Putri','Campur') DEFAULT NULL,
  `gambar_preview` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Kost`
--

INSERT INTO `Kost` (`id`, `alamat`, `nama`, `jumlahKamar`, `NIK_Pemilik`, `harga`, `jenis`, `gambar_preview`) VALUES
(1, 'Jl. Raya Tajem Gg Manduro No.km 6', 'Kost Ali', 35, NULL, 950000, 'Putra', NULL),
(2, 'Jl. Kemuning Salam No.52, Sanggrahan, Condongcatur, Kec. Depok', 'Kos Putra Nusantara', 25, NULL, 730000, 'Putra', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Pemilik`
--

CREATE TABLE `Pemilik` (
  `NIK` char(16) NOT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `noTelp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `keypassword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Penyewaan`
--

CREATE TABLE `Penyewaan` (
  `id` int(6) NOT NULL,
  `NIK_penyewa` char(16) DEFAULT NULL,
  `no_kamar` int(3) DEFAULT NULL,
  `tannggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `id` int(6) NOT NULL,
  `komen` varchar(512) DEFAULT '',
  `nilai` float NOT NULL,
  `tanggal` datetime NOT NULL,
  `NIK_Penyewa` char(16) DEFAULT NULL,
  `id_kost` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `NIK` char(16) NOT NULL,
  `firstName` varchar(60) DEFAULT NULL,
  `lastName` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `jenisKelamin` char(1) DEFAULT NULL,
  `keypassword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`NIK`, `firstName`, `lastName`, `email`, `jenisKelamin`, `keypassword`) VALUES
('1989403989087564', 'Lala', 'Poo', 'lala@gmail.com', 'P', '$2y$10$k6cR1REVbQ3ORdL7GvHIQO7PSND244r0rIAP99r/7HeVhOQWCn1dK'),
('9090808070706060', 'admin', 'admin', 'admin@gmail.com', 'L', '$2y$10$dueCV/bVHp1fBacPJ.GEA.las18IGBMTMLnT6WEjvgakf7IWy41.m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Fasilitas`
--
ALTER TABLE `Fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kost_id` (`id_kost`);

--
-- Indexes for table `Kamar`
--
ALTER TABLE `Kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `Kost`
--
ALTER TABLE `Kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIK_Pemilik` (`NIK_Pemilik`);

--
-- Indexes for table `Pemilik`
--
ALTER TABLE `Pemilik`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `Penyewaan`
--
ALTER TABLE `Penyewaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIK_penyewa` (`NIK_penyewa`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIK_Penyewa` (`NIK_Penyewa`),
  ADD KEY `id_kost` (`id_kost`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Kost`
--
ALTER TABLE `Kost`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Penyewaan`
--
ALTER TABLE `Penyewaan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Fasilitas`
--
ALTER TABLE `Fasilitas`
  ADD CONSTRAINT `fk_kost_id` FOREIGN KEY (`id_kost`) REFERENCES `Kost` (`id`);

--
-- Constraints for table `Kost`
--
ALTER TABLE `Kost`
  ADD CONSTRAINT `Kost_ibfk_1` FOREIGN KEY (`NIK_Pemilik`) REFERENCES `Pemilik` (`NIK`);

--
-- Constraints for table `Penyewaan`
--
ALTER TABLE `Penyewaan`
  ADD CONSTRAINT `Penyewaan_ibfk_1` FOREIGN KEY (`NIK_penyewa`) REFERENCES `Users` (`NIK`),
  ADD CONSTRAINT `Penyewaan_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `Kamar` (`no_kamar`);

--
-- Constraints for table `Review`
--
ALTER TABLE `Review`
  ADD CONSTRAINT `Review_ibfk_1` FOREIGN KEY (`NIK_Penyewa`) REFERENCES `Users` (`NIK`),
  ADD CONSTRAINT `Review_ibfk_2` FOREIGN KEY (`id_kost`) REFERENCES `Kost` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
