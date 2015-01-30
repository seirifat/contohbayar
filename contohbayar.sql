-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2015 at 05:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contohbayar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
  `bayarid` int(11) NOT NULL AUTO_INCREMENT,
  `mejaid` int(11) NOT NULL,
  `makananid` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`bayarid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`bayarid`, `mejaid`, `makananid`, `harga`) VALUES
(1, 2, 3, 20000),
(2, 2, 1, 10000),
(3, 1, 2, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `makananid` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  PRIMARY KEY (`makananid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`makananid`, `nama`) VALUES
(1, 'Apel jus'),
(2, 'Barbeque'),
(3, 'Cake');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE IF NOT EXISTS `meja` (
  `mejaid` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`mejaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`mejaid`, `status`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `notaid` int(11) NOT NULL AUTO_INCREMENT,
  `totalbayar` int(11) NOT NULL,
  PRIMARY KEY (`notaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`notaid`, `totalbayar`) VALUES
(1, 30000),
(2, 120000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
