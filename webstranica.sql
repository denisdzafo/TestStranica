-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Host: 127.12.25.130:3306
-- Generation Time: May 09, 2017 at 09:56 PM
-- Server version: 5.5.52
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL,
  `autor` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `adresa` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `komentar` text COLLATE ucs2_slovenian_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nid`, `autor`, `email`, `adresa`, `komentar`, `date`) VALUES
(14, 25, 'Testni korisnik', 'da@gmail.com', 'dasdas', 'asdasd', '2017-05-09 23:16:59'),
(15, 25, 'test', 'd@gmail.com', 'asdasd', 'asdasdasd', '2017-05-09 23:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ime` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `name`, `pass`, `email`, `ime`) VALUES
(2, 'admin', '123', 'admin', 'admin'),
(3, 'korisnik', 'test', 'denis_dzafo@hotmail.com', 'test'),
(4, 'korisnik', '123', 'denis_dzafo@hotmail.com', 'denis'),
(5, 'korisnik', '0000', 'da@gmail.com', 'Denis DÅ¾afo'),
(6, 'korisnik', '0000', 'da@gmail.com', 'Denis DÅ¾afo'),
(7, 'admin', '0000', 'da@gmail.com', 'Denis DÅ¾afo'),
(8, 'korisnik', '000000', 'test@test.test', 'Testni');

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
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`id`, `slika`, `naslov`, `autor`, `tekst`, `datum`, `detaljnije`) VALUES
(23, 'https://pbs.twimg.com/profile_images/583353499808829441/PYs1EDZv.png', 'Lorem ipsum', 'Denis Džafo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ratio quidem vestra sic cogit. Tum ille: Ain tandem? Duo Reges: constructio interrete. Illi enim inter se dissentiunt. Ut in geometria, prima si dederis, danda sunt omnia', '2016-12-11 22:23:15', 'Eam si varietatem diceres, intellegerem, ut etiam non dicente te intellego; Quia dolori non voluptas contraria est, sed doloris privatio. Atqui pugnantibus et contrariis studiis consiliisque semper utens nihil quieti videre, nihil tranquilli potest.\r\n\r\n'),
(24, 'http://aurora-awards.com/wp-content/uploads/2017/05/image-python-storing-data-in-the-pixels-of-an-code-review.jpg', 'Test', 'test', 'test', '2016-12-11 22:23:15', ''),
(25, 'http://www.redcuadrada.com/wp-content/uploads/2015/08/lorem_ipsum_g.jpg', 'Test', 'Denis DÅ¾afo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ratio quidem vestra sic cogit. Tum ille: Ain tandem? Duo Reges: constructio interrete. Illi enim inter se dissentiunt. Ut in geometria, prima si dederis, danda sunt omnia', '2017-05-09 22:29:50', 'Eam si varietatem diceres, intellegerem, ut etiam non dicente te intellego; Quia dolori non voluptas contraria est, sed doloris privatio. Atqui pugnantibus et contrariis studiis consiliisque semper utens nihil quieti videre, nihil tranquilli potest.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
