-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2017 at 08:50 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chungkhoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ck`
--

CREATE TABLE IF NOT EXISTS `ck` (
  `mack` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  PRIMARY KEY (`mack`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ck`
--

INSERT INTO `ck` (`mack`, `gia`) VALUES
('ACB', 18),
('SCB', 11.2);
