-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2013 at 03:18 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timesheet`
--
CREATE DATABASE IF NOT EXISTS `timesheet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `timesheet`;

-- --------------------------------------------------------

--
-- Table structure for table `aktiviti`
--

CREATE TABLE IF NOT EXISTS `aktiviti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ukmper` varchar(10) DEFAULT NULL,
  `masa_mula` datetime DEFAULT NULL,
  `masa_tamat` datetime DEFAULT NULL,
  `jumlah_jam` varchar(10) DEFAULT NULL,
  `aktiviti` text,
  `modul` varchar(50) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `isu` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aktiviti`
--

INSERT INTO `aktiviti` (`id`, `ukmper`, `masa_mula`, `masa_tamat`, `jumlah_jam`, `aktiviti`, `modul`, `kategori`, `status`, `isu`) VALUES
(1, 'K018531', '2013-10-10 09:00:00', '2013-10-10 16:30:00', '8', 'TOT Codeigniter', 'TOT', 'Bengkel', 'Belum Siap', NULL),
(2, '18531', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'tot ci', '', 'Projek Bar', 'Siap', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
