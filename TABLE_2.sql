-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: rdbms
-- Generation Time: Apr 23, 2014 at 10:57 AM
-- Server version: 5.5.31-log
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DB1670230`
--

-- --------------------------------------------------------

--
-- Table structure for table `TABLE 2`
--

CREATE TABLE IF NOT EXISTS `TABLE 2` (
  `COL 1` year(4) DEFAULT NULL,
  `COL 2` varchar(4) DEFAULT NULL,
  `COL 3` varchar(5) DEFAULT NULL,
  `COL 4` varchar(3) DEFAULT NULL,
  `COL 5` varchar(51) DEFAULT NULL,
  `COL 6` varchar(30) DEFAULT NULL,
  `COL 7` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE 2`
--

INSERT INTO `TABLE 2` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`) VALUES
(0000, 'year', 'month', 'day', 'what', 'venue', 'town'),
(0000, '2014', '4', '24', 'solo performance with MISS', 'Mixtur Festival, Fabra i Coats', 'Barcelona'),
(0000, '2014', '4', '24', 'solo con MISS', 'Festival Mixtur, Fabra i Coats', 'Barcelona'),
(0000, '2014', '4', '24', 'solo con MISS', 'Festival Mixtur, Fabra i Coats', 'Barcelona'),
(0000, '2014', '4', '2', 'Lecture about Experimental Electronic Music', 'MARCO', 'Vigo'),
(0000, '2014', '4', '2', 'Conferencia sobre M', 'MARCO', 'Vigo'),
(0000, '2014', '4', '2', 'Conferencia sobre M', 'MARCO', 'Vigo'),
(0000, '2014', '3', '26', 'Lecture about Electronic Music History', 'MARCO', 'Vigo'),
(0000, '2014', '3', '26', 'Conferencia sobre Historia de la M', 'MARCO', 'Vigo'),
(0000, '2014', '3', '26', 'Conferencia sobre Historia da M', 'MARCO', 'Vigo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
