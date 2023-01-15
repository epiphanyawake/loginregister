-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2022 at 12:20 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab2`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `cpassword` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
