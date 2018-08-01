-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2018 at 08:38 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uecs2094_ptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `se_1505408_student`
--

DROP TABLE IF EXISTS `se_1505408_student`;
CREATE TABLE IF NOT EXISTS `se_1505408_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentId` varchar(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `studentId` (`studentId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `se_1505408_student`
--

INSERT INTO `se_1505408_student` (`id`, `studentId`, `name`, `email`) VALUES
(1, '702', 'Aaron Chia', 'aaron@school.my'),
(2, '712', 'Samuel Issac', 'samuel@school.my'),
(3, '777', 'Allia Hassan', 'allia@school.my'),
(4, '789', 'Vinoth Kumar', 'vinoth@school.my'),
(5, '795', 'Daphne Ong', 'daphne@school.my'),
(6, '798', 'Yong Wai Mun', 'yongwm@school.my');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
