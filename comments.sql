-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 10:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL,
  `naslov` varchar(70) COLLATE ucs2_slovenian_ci NOT NULL,
  `autor` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `komentar` text COLLATE ucs2_slovenian_ci NOT NULL,
  `date` datetime NOT NULL,
  `adresa` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nid`, `naslov`, `autor`, `komentar`, `date`, `adresa`, `email`) VALUES
(1, 1, 'fsdf', 'fsdfds', 'sdfsdf', '2015-05-29 00:00:00', '', ''),
(2, 6, 'sdf', 'sdf', 'sdf', '2015-05-28 04:18:41', '', ''),
(3, 6, 'fsdf', 'sdf', 'sdf', '2015-05-28 04:19:49', '', ''),
(4, 6, 'ss', 'sss', 'aaaaa', '2015-05-28 04:19:58', '', ''),
(5, 6, 'komentar 4', 'sdas', 'bla bla', '2015-05-28 12:43:16', '', ''),
(6, 7, 'dasdas', 'asdas', 'sdasd', '2015-05-28 20:29:13', '', ''),
(7, 7, 'dasd', 'sad', 'asd', '2015-05-28 20:47:52', '', ''),
(8, 12, 'dsa', 'sdas', 'asd', '2015-05-28 21:11:44', '', ''),
(9, 12, 'dsadas', 'asdasd', 'sdasdas', '2015-05-28 21:34:20', '', ''),
(10, 12, '', 'sdfd', 'sdfsd', '2015-05-28 22:07:45', 'sdfsd', ''),
(11, 12, '', 'sdasdasd', 'asdasd', '2015-05-28 22:08:00', 'sdaasdas', ''),
(12, 12, '', 'dsfds', 'sdfsd', '2015-05-28 22:10:33', 'fsd', 'sdfsd'),
(13, 12, '', 'rwer', 'rwer', '2015-05-28 22:11:49', 'ewrwe', 'erwe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
