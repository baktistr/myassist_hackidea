-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 05:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackidea`
--

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_prop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `id_prop`) VALUES
('11', 'ACEH', 1),
('12', 'SUMATERA UTARA', 10),
('13', 'SUMATERA BARAT', 8),
('14', 'RIAU', 7),
('15', 'JAMBI', 3),
('16', 'SUMATERA SELATAN', 9),
('17', 'BENGKULU', 2),
('18', 'LAMPUNG', 6),
('19', 'KEPULAUAN BANGKA BELITUNG', 4),
('21', 'KEPULAUAN RIAU', 5),
('31', 'DKI JAKARTA', 12),
('32', 'JAWA BARAT', 13),
('33', 'JAWA TENGAH', 15),
('34', 'DI YOGYAKARTA', 14),
('35', 'JAWA TIMUR', 17),
('36', 'BANTEN', 11),
('51', 'BALI', 16),
('52', 'NUSA TENGGARA BARAT', 18),
('53', 'NUSA TENGGARA TIMUR', 19),
('61', 'KALIMANTAN BARAT', 20),
('62', 'KALIMANTAN TENGAH', 22),
('63', 'KALIMANTAN SELATAN', 21),
('64', 'KALIMANTAN TIMUR', 23),
('65', 'KALIMANTAN UTARA', 24),
('71', 'SULAWESI UTARA', 34),
('72', 'SULAWESI TENGAH', 32),
('73', 'SULAWESI SELATAN', 30),
('74', 'SULAWESI TENGGARA', 33),
('75', 'GORONTALO', 25),
('76', 'SULAWESI BARAT', 29),
('81', 'MALUKU', 26),
('82', 'MALUKU UTARA', 27),
('91', 'PAPUA BARAT', 29),
('94', 'PAPUA', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
