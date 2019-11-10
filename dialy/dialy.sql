-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 04:51 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dialy`
--

-- --------------------------------------------------------

--
-- Table structure for table `quan`
--

CREATE TABLE `quan` (
  `maquan` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tenquan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matinh` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quan`
--

INSERT INTO `quan` (`maquan`, `tenquan`, `matinh`) VALUES
('01', 'Hoan Kiem', '01'),
('02', 'Ba Dinh', '01'),
('03', 'Quan 1', '02'),
('04', 'Quan 3', '02'),
('05', 'Binh Thanh', '02');

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `matinh` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tentinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`matinh`, `tentinh`) VALUES
('01', 'Ha Noi'),
('02', 'Sai Gon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quan`
--
ALTER TABLE `quan`
  ADD PRIMARY KEY (`maquan`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`matinh`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
