-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 07:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news_posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_posts`
--

CREATE TABLE IF NOT EXISTS `news_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slika` varchar(200) COLLATE ucs2_slovenian_ci NOT NULL,
  `naslov` varchar(70) COLLATE ucs2_slovenian_ci NOT NULL,
  `autor` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `tekst` text COLLATE ucs2_slovenian_ci NOT NULL,
  `datum` datetime NOT NULL,
  `detaljnije` text COLLATE ucs2_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`id`, `slika`, `naslov`, `autor`, `tekst`, `datum`, `detaljnije`) VALUES
(6, '', 'vijest 2', 'sdfs', 'diro sam', '2015-05-28 03:07:23', ''),
(7, '', 'vijest 2', 'sdfs', 'tsfwe', '2015-05-28 03:07:49', ''),
(8, '', 'vijest 3', 'asd', 'sadasd', '2015-05-28 04:10:02', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
