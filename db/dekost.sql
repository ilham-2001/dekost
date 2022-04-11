-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 01:20 AM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

--- Create dekost Database ----
CREATE DATABASE dekost;
USE dekost;

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(200) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `total_transaksi` int(255) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO 'transactions' VALUES 
-- (1),
-- (),
-- (),
-- (),
-- ();

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `kos_id` int(200) NOT NULL,
  `jumlah_kamar` int(200) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kategori_kos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO 'kos' VALUES 
-- (1),
-- (),
-- (),
-- (),
-- ();

