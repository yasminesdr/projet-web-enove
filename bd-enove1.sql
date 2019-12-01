-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 03:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd-enove1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `NOM_C` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`NOM_C`) VALUES
('clotur24'),
('clotur'),
('indu'),
('indu');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `password`) VALUES
(1, 'yassine zitoun', '6666');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `IM_P` varchar(255) NOT NULL,
  `REF_IEC` varchar(255) NOT NULL,
  `REF_EN` varchar(255) NOT NULL,
  `Cat` varchar(255) NOT NULL,
  `CAPACITY_Ah` int(11) NOT NULL,
  `TENSION_V` float NOT NULL,
  `POID_KG` float NOT NULL,
  `DIM_mm` varchar(255) NOT NULL,
  `Prixp` float NOT NULL,
  `FT` varchar(255) NOT NULL,
  PRIMARY KEY (`REF_EN`),
  KEY `Cat` (`Cat`),
  KEY `Cat_2` (`Cat`),
  KEY `Cat_3` (`Cat`),
  KEY `Cat_4` (`Cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`IM_P`, `REF_IEC`, `REF_EN`, `Cat`, `CAPACITY_Ah`, `TENSION_V`, `POID_KG`, `DIM_mm`, `Prixp`, `FT`) VALUES
('marwan.PNG', '000000', '00000', 'Pile', 2, 3, 3, '180*124*157', 2, 'FT 4R425 X.pdf'),
('med_1484279908_image.jpg', '1111111111111', '11111111111111', '1111111111111', 111, 1, 1, '1', 1, 'FT-AD506.pdf'),
('', '---', 'AD 2519', 'Pile', 130, 2.8, 2.5, '110*105.5*196.5', 400, ''),
('', '---', 'AD 506', 'Pile', 80, 5.6, 1.8, '113*113*141', 41, ''),
('', '---', 'AD 512', 'Pile', 350, 1.4, 2.5, '112*112*208', 47, ''),
('', 'AS12', 'AD 513', 'Pile', 900, 1.4, 6.35, '170*170*215', 90, ''),
('', 'AS10', 'AD 517', 'Pile', 270, 270, 1.4, '106*106*195', 56, ''),
('', 'AS8', 'AD 524', 'Pile', 150, 1.4, 1.54, '86*86*195', 85, ''),
('', 'AS4', 'AD 535', 'Pile', 100, 1.4, 0.7, '65*65*171', 52, ''),
('', 'AS6P', 'AD 535 (1)', 'Pile', 90, 1.4, 0.65, '65*65*171', 45, ''),
('', 'AS4', 'AD 540', 'Pile', 55, 1.4, 0.38, '55*55*121', 85, ''),
('', '6AS6S', 'AD 6535', 'Pile', 130, 8.4, 3.9, '180*124*157', 55, ''),
('', '6AS6P', 'AD 6535 (1)', 'Pile', 90, 8.4, 3.9, '180*124*157', 50, ''),
('', '6AS4S', 'AD 6540', 'Pile', 55, 8.4, 2.2, '165*111*112', 45, ''),
('', '---', 'AD 75xc', 'Pile', 45, 45, 85, '165*111*112', 46, ''),
('', '---', 'RP 06', 'Pile', 90, 8.4, 3, 'Ø*h=185*155', 85, ''),
('', '---', 'RP 07', 'Pile', 90, 9.8, 3.5, 'Ø*h=185*155', 200, ''),
('', '5AR40', 'RP 7', 'Pile', 90, 7, 2.8, 'Ø*h=175*172', 114, ''),
('', 'AR40', 'RP0', 'Pile', 90, 1.4, 0.5, 'Ø*h=63*163', 122, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
