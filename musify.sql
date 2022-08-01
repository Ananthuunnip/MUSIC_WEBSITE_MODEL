-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2022 at 07:38 AM
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
-- Database: `musify`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `aname`, `dob`, `bio`) VALUES
(1, 'Taylor Alison Swift', '2012-07-17', 'Taylor Alison Swift is an American singer-songwriter. Her discography spans multiple genres, and her narrative songwriting—often inspired by her personal life—has received critical praise and widespread media coverage. '),
(2, 'Justin Bieber', '2012-08-23', 'Justin Drew Bieber is a Canadian singer. Bieber is widely recognised for his genre-melding musicianship and has played an influential role in modern-day popular music'),
(2, 'Justin Bieber', '2012-08-23', 'Justin Drew Bieber is a Canadian singer. Bieber is widely recognised for his genre-melding musicianship and has played an influential role in modern-day popular music'),
(3, 'Alan Walker', '2015-08-12', 'Alan Olav Walker is a British-born Norwegian DJ, YouTuber and record producer primarily known for the critically acclaimed single \"Faded\", which was certified platinum in 14 countries'),
(3, 'Alan Walker', '2015-08-12', 'Alan Olav Walker is a British-born Norwegian DJ, YouTuber and record producer primarily known for the critically acclaimed single \"Faded\", which was certified platinum in 14 countries'),
(4, 'Wiz Khalifa', '2014-05-15', 'Cameron Jibril Thomaz, better known by his stage name Wiz Khalifa, is an American rapper. He released his debut album, Show and Prove, in 2006 and signed to Warner Bros. Records in 2007.'),
(4, 'Wiz Khalifa', '2014-05-15', 'Cameron Jibril Thomaz, better known by his stage name Wiz Khalifa, is an American rapper. He released his debut album, Show and Prove, in 2006 and signed to Warner Bros. Records in 2007.');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `dor` date NOT NULL,
  `cover` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `sname`, `dor`, `cover`) VALUES
(1, 'Alan Walker, K-391 & Emelie Hollow - Lily', '2012-05-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `gmail`) VALUES
(1, 'Ananthu', 'Ananthu@gmail.com'),
(3, 'deltax', 'deltax@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
