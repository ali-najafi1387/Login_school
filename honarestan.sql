-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2025 at 07:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honarestan`
--

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

DROP TABLE IF EXISTS `family`;
CREATE TABLE IF NOT EXISTS `family` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nam` varchar(100) NOT NULL,
  `Nam_K` varchar(100) NOT NULL,
  `CodeM` int(10) NOT NULL,
  `Shomare` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CodeM` (`CodeM`),
  UNIQUE KEY `Shomare` (`Shomare`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`ID`, `Nam`, `Nam_K`, `CodeM`, `Shomare`) VALUES
(1, 'معید', 'غلامزاده بوجاری', 1250931789, '9103610051'),
(2, 'امیرحسین', 'رئیسی', 1250935456, '9926069267'),
(3, 'محمد محسن', 'نان پز', 1250931123, '9398897166');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
