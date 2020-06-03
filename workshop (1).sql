-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2020 at 10:51 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `_id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name_admin` varchar(50) NOT NULL,
  `psw_admin` varchar(50) NOT NULL,
  PRIMARY KEY (`_id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`_id_admin`, `name_admin`, `psw_admin`) VALUES
(1, 'workshopadmin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

DROP TABLE IF EXISTS `associations`;
CREATE TABLE IF NOT EXISTS `associations` (
  `_id_asso` int(11) NOT NULL AUTO_INCREMENT,
  `name_asso` varchar(50) NOT NULL,
  `date_assoc` date DEFAULT NULL,
  `description_asso` text NOT NULL,
  `logo_asso` varchar(150) NOT NULL,
  PRIMARY KEY (`_id_asso`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`_id_asso`, `name_asso`, `date_assoc`, `description_asso`, `logo_asso`) VALUES
(1, 'BDE', NULL, 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://iae.univ-lyon3.fr/medias/photo/logo-bde-tout-iae_1526279936866-jpg'),
(2, 'Asso - Photo', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero repudiandae incidunt in magni porro, doloremque, aspernatur ad labore qui sequi unde distinctio exercitationem cupiditate eaque facere voluptatem ducimus. Veritatis.', 'https://iae.univ-lyon3.fr/medias/photo/logo-bde-tout-iae_1526279936866-jpg'),
(3, 'Asso Jeux vidéos', NULL, 'perodvhoeqnbùvibnùoeqbz cùoib d', 'https://iae.univ-lyon3.fr/medias/photo/logo-bde-tout-iae_1526279936866-jpg');

-- --------------------------------------------------------

--
-- Table structure for table `candidatures`
--

DROP TABLE IF EXISTS `candidatures`;
CREATE TABLE IF NOT EXISTS `candidatures` (
  `_id_candidature` int(11) NOT NULL AUTO_INCREMENT,
  `postulant_mail` varchar(50) NOT NULL,
  `asso_id` int(11) NOT NULL,
  `motivation` text NOT NULL,
  PRIMARY KEY (`_id_candidature`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidatures`
--

INSERT INTO `candidatures` (`_id_candidature`, `postulant_mail`, `asso_id`, `motivation`) VALUES
(1, 'Test', 2, 'br fgynrt');

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `_id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `email_membre` varchar(100) NOT NULL,
  `asso_id` int(11) NOT NULL,
  PRIMARY KEY (`_id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`_id_membre`, `email_membre`, `asso_id`) VALUES
(1, 'kaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `_id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(50) NOT NULL,
  `psw_user` varchar(50) NOT NULL,
  PRIMARY KEY (`_id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`_id_user`, `email_user`, `psw_user`) VALUES
(4, 'bob', '721a9b52bfceacc503c056e3b9b93cfa'),
(3, 'kaka', '721a9b52bfceacc503c056e3b9b93cfa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
