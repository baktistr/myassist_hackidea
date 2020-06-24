-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 05:48 PM
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
-- Table structure for table `kode_witel`
--

CREATE TABLE `kode_witel` (
  `id_witel` int(11) NOT NULL,
  `witel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kode_witel`
--

INSERT INTO `kode_witel` (`id_witel`, `witel`) VALUES
(1, 'Aceh'),
(4, 'Babel'),
(50, 'Balikpapan'),
(22, 'Bandung Barat'),
(12, 'Banten'),
(19, 'Bekasi'),
(2, 'Bengkulu'),
(20, 'Bogor'),
(23, 'Cirebon'),
(34, 'Denpasar'),
(53, 'Gorontalo'),
(14, 'Jakbar'),
(15, 'Jakpus'),
(16, 'Jaksel'),
(17, 'Jaktim'),
(18, 'Jakut'),
(3, 'Jambi'),
(36, 'Jember'),
(47, 'Kalbar'),
(48, 'Kalsel'),
(52, 'Kaltara'),
(49, 'Kalteng'),
(24, 'Karawang'),
(37, 'Kediri'),
(28, 'Kudus'),
(6, 'Lampung'),
(38, 'Madiun'),
(39, 'Madura'),
(29, 'Magelang'),
(57, 'Makassar'),
(40, 'Malang'),
(54, 'Maluku'),
(10, 'Medan'),
(45, 'NTB'),
(46, 'NTT'),
(55, 'Papua'),
(56, 'Papua Barat'),
(41, 'Pasuruan'),
(30, 'Pekalongan'),
(31, 'Purwokerto'),
(7, 'Ridar'),
(5, 'Rikep'),
(51, 'Samarinda'),
(32, 'Semarang'),
(42, 'Sidoarjo'),
(35, 'Singaraja'),
(33, 'Solo'),
(25, 'Sukabumi'),
(58, 'Sulselbar'),
(21, 'Bandung'),
(59, 'Sulteng'),
(60, 'Sultra'),
(61, 'Sulut & Malut'),
(8, 'Sumbar'),
(9, 'Sumsel'),
(11, 'Sumut'),
(43, 'Surabaya Selatan'),
(44, 'Surabaya Utara'),
(13, 'Tangerang'),
(26, 'Tasikmalaya'),
(27, 'Yogyakarta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
