-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(2) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `id_kost` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `id_kost`) VALUES
(1, 'AC', 2),
(2, 'Kamar Mandi Dalam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` int(3) NOT NULL,
  `id_kost` int(6) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  `lebar` float DEFAULT NULL,
  `panjang` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `id_kost`, `status`, `lebar`, `panjang`) VALUES
(1, 2, 'KOSONG', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
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
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id`, `alamat`, `nama`, `jumlahKamar`, `NIK_Pemilik`, `harga`, `jenis`, `gambar_preview`) VALUES
(1, 'Jl. Raya Tajem Gg Manduro No.km 6', 'Kost Ali', 35, NULL, 950000, 'Putra', NULL),
(2, 'Jl. Kemuning Salam No.52, Sanggrahan, Condongcatur, Kec. Depok', 'Kos Putra Nusantara', 25, NULL, 730000, 'Putra', NULL),
(3, ' Jl. Raya Manukan, Mladangan', 'Kost Mawar', 21, '1234890723456789', 430000, 'Putri', '62c833dc576a1.jpg'),
(4, 'Jl. kaliurang, Krawitan, Umbulmartani, Ngemplak', 'bebas', 10, '12378678362736', 700000, 'Putra', '62c978ced7192.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `NIK` char(16) NOT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `noTelp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `keypassword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`NIK`, `nama`, `noTelp`, `alamat`, `email`, `keypassword`) VALUES
('1234123412341234', 'corn wall', '081234561234', 'jl. kaliurang km 12.5', 'corn@gmail.com', '$2y$10$kBiuyx229Si5Ecx23wXqweF4KrxXjHlBr2YIAIs2J1fTokRungcPu'),
('1234890723456789', 'dara zara', '091234567890', 'Tanggerang Selatan', 'dara@gmail.com', '$2y$10$WlOtfRF8zfHkEsVGanoP8eFDPCnnfEzQ7AfUNd3W1fRlrcQHRsANq'),
('1235908712345678', 'corn wall', '081234567895', 'corn field', 'corn@gmail.com', '$2y$10$gZ1WNbAeRNJSxYdMaBTNFurNAZYBQONLEwKHKkYxSNwPJ3NYN7pH.'),
('12378678362736', 'budi cek', '081227875674', 'kaliurang', 'cek@gmail.com', '$2y$10$HNqdJ1ZMRFsSQSQwUgY0/OxHU.FCcg8mmF6cmqlRJOL94mcfK1KgS'),
('8909186957867890', 'dalas nasyar', '081234567890', 'Pogung, Yogyakarta', 'dalas@gmail.com', '$2y$10$jbo2q/pff0qsf7OY2mWLYufUdEx5WxQbxQOGlF7EWLJ.SOr827msi'),
('9856784358681234', 'ilham  Rizqyakbar', '081989096789', 'Sanggrahan, Sleman, Kalasan', 'ilham@gmail.com', '$2y$10$662vGTft3cThKvmWsXdowOH3PGAUhRJtkjsqNscZwcyrPpK6drWmC');

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id` int(6) NOT NULL,
  `NIK_penyewa` char(16) DEFAULT NULL,
  `no_kamar` int(3) DEFAULT NULL,
  `tannggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` varchar(13) NOT NULL,
  `idPemesan` varchar(16) DEFAULT NULL,
  `idKost` int(6) DEFAULT NULL,
  `tglPemesanan` date DEFAULT NULL,
  `mulaiSewa` date DEFAULT NULL,
  `akhirSewa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `idPemesan`, `idKost`, `tglPemesanan`, `mulaiSewa`, `akhirSewa`) VALUES
('62c913e8b5fe0', '1989403989087564', 3, '2022-07-09', '2022-07-15', '2022-09-13'),
('62c97b4a55b57', '1989403989087564', 4, '2022-07-09', '2022-07-09', '2023-07-09'),
('62c97c153e72e', '1989403989087564', 4, '2022-07-09', '2022-07-09', '2023-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `NoRekening` varchar(20) NOT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `NIK_Pemilik` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`NoRekening`, `bank`, `NIK_Pemilik`) VALUES
('2345095482', 'BCA', '1234890723456789');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(6) NOT NULL,
  `komen` varchar(512) DEFAULT '',
  `nilai` float NOT NULL,
  `tanggal` datetime NOT NULL,
  `NIK_Penyewa` char(16) DEFAULT NULL,
  `id_kost` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NIK` char(16) NOT NULL,
  `firstName` varchar(60) DEFAULT NULL,
  `lastName` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `jenisKelamin` char(1) DEFAULT NULL,
  `keypassword` varchar(64) NOT NULL,
  `no_telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NIK`, `firstName`, `lastName`, `email`, `jenisKelamin`, `keypassword`, `no_telepon`) VALUES
('1989403989087564', 'Lala', 'Poo', 'lala@gmail.com', 'P', '$2y$10$k6cR1REVbQ3ORdL7GvHIQO7PSND244r0rIAP99r/7HeVhOQWCn1dK', '81245630989'),
('9090808070706060', 'admin', 'admin', 'admin@gmail.com', 'L', '$2y$10$dueCV/bVHp1fBacPJ.GEA.las18IGBMTMLnT6WEjvgakf7IWy41.m', '81345678767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kost_id` (`id_kost`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`),
  ADD KEY `fk_id_kamar` (`id_kost`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIK_Pemilik` (`NIK_Pemilik`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIK_penyewa` (`NIK_penyewa`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `idPemesan` (`idPemesan`),
  ADD KEY `fkKostId` (`idKost`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`NoRekening`),
  ADD KEY `NIK_Pemilik` (`NIK_Pemilik`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIK_Penyewa` (`NIK_Penyewa`),
  ADD KEY `id_kost` (`id_kost`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fk_kost_id` FOREIGN KEY (`id_kost`) REFERENCES `kost` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `fk_id_kamar` FOREIGN KEY (`id_kost`) REFERENCES `kost` (`id`);

--
-- Constraints for table `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `Kost_ibfk_1` FOREIGN KEY (`NIK_Pemilik`) REFERENCES `pemilik` (`NIK`);

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `Penyewaan_ibfk_1` FOREIGN KEY (`NIK_penyewa`) REFERENCES `users` (`NIK`),
  ADD CONSTRAINT `Penyewaan_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `Pesanan_ibfk_1` FOREIGN KEY (`idPemesan`) REFERENCES `users` (`NIK`),
  ADD CONSTRAINT `fkKostId` FOREIGN KEY (`idKost`) REFERENCES `kost` (`id`);

--
-- Constraints for table `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `Rekening_ibfk_1` FOREIGN KEY (`NIK_Pemilik`) REFERENCES `pemilik` (`NIK`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `Review_ibfk_1` FOREIGN KEY (`NIK_Penyewa`) REFERENCES `users` (`NIK`),
  ADD CONSTRAINT `Review_ibfk_2` FOREIGN KEY (`id_kost`) REFERENCES `kost` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
