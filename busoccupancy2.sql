-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2018 at 06:04 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busoccupancy2`
--

-- --------------------------------------------------------

--
-- Table structure for table `5010`
--

DROP TABLE IF EXISTS `5010`;
CREATE TABLE IF NOT EXISTS `5010` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5010`
--

INSERT INTO `5010` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(57, 5, 'GENERAL', 1, 7),
(58, 6, 'GENERAL', 1, 7),
(59, 7, 'GENERAL', 1, 7),
(60, 8, 'GENERAL', 1, 7),
(61, 9, 'GENERAL', 1, 7),
(62, 10, 'GENERAL', 1, 7),
(63, 13, 'GENERAL', 1, 7),
(64, 14, 'GENERAL', 1, 7),
(65, 11, 'GENERAL', 5, 7),
(66, 12, 'GENERAL', 5, 7),
(67, 15, 'GENERAL', 5, 7),
(68, 16, 'GENERAL', 5, 7),
(69, 17, 'GENERAL', 5, 7),
(70, 23, 'GENERAL', 1, 7),
(71, 24, 'GENERAL', 1, 7),
(72, 41, 'GENERAL', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `5020`
--

DROP TABLE IF EXISTS `5020`;
CREATE TABLE IF NOT EXISTS `5020` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5020`
--

INSERT INTO `5020` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 1, 'PWD', 3, 7),
(2, 5, 'GENERAL', 5, 8),
(3, 20, 'GENERAL', 7, 8),
(4, 15, 'GENERAL', 3, 8),
(5, 4, 'LADIES', 3, 5),
(6, 7, 'GENERAL', 5, 7),
(7, 8, 'GENERAL', 5, 7),
(8, 13, 'GENERAL', 5, 7),
(9, 14, 'GENERAL', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `5030`
--

DROP TABLE IF EXISTS `5030`;
CREATE TABLE IF NOT EXISTS `5030` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5030`
--

INSERT INTO `5030` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 8, 'GENERAL', 4, 6),
(2, 30, 'GENERAL', 6, 7),
(3, 40, 'GENERAL', 4, 7),
(4, 23, 'GENERAL', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `5040`
--

DROP TABLE IF EXISTS `5040`;
CREATE TABLE IF NOT EXISTS `5040` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5040`
--

INSERT INTO `5040` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 3, 'LADIES', 2, 8),
(2, 2, 'PWD', 2, 6),
(3, 11, 'GENERAL', 4, 8),
(4, 13, 'GENERAL', 4, 6),
(5, 4, 'LADIES', 2, 4),
(6, 16, 'GENERAL', 6, 8),
(7, 23, 'GENERAL', 2, 6),
(8, 24, 'GENERAL', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `5050`
--

DROP TABLE IF EXISTS `5050`;
CREATE TABLE IF NOT EXISTS `5050` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5050`
--

INSERT INTO `5050` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(21, 7, 'GENERAL', 1, 5),
(22, 8, 'GENERAL', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `5060`
--

DROP TABLE IF EXISTS `5060`;
CREATE TABLE IF NOT EXISTS `5060` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5060`
--

INSERT INTO `5060` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 2, 'PWD', 6, 7),
(2, 4, 'LADIES', 6, 8),
(3, 17, 'GENERAL', 7, 8),
(4, 29, 'GENERAL', 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `6010`
--

DROP TABLE IF EXISTS `6010`;
CREATE TABLE IF NOT EXISTS `6010` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6010`
--

INSERT INTO `6010` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 5, 'GENERAL', 5, 7),
(2, 10, 'GENERAL', 5, 7),
(3, 8, 'GENERAL', 5, 7),
(4, 11, 'GENERAL', 5, 7),
(5, 19, 'GENERAL', 5, 7),
(6, 20, 'GENERAL', 5, 7),
(7, 13, 'GENERAL', 5, 7),
(8, 14, 'GENERAL', 5, 7),
(9, 25, 'GENERAL', 5, 7),
(10, 23, 'GENERAL', 5, 7),
(11, 24, 'GENERAL', 5, 7),
(12, 32, 'GENERAL', 5, 7),
(13, 28, 'GENERAL', 5, 7),
(14, 27, 'GENERAL', 1, 7),
(15, 31, 'GENERAL', 1, 7),
(16, 3, 'LADIES', 1, 7),
(17, 12, 'GENERAL', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `6020`
--

DROP TABLE IF EXISTS `6020`;
CREATE TABLE IF NOT EXISTS `6020` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6020`
--

INSERT INTO `6020` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 11, 'GENERAL', 5, 7),
(2, 12, 'GENERAL', 5, 7),
(3, 5, 'GENERAL', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `6030`
--

DROP TABLE IF EXISTS `6030`;
CREATE TABLE IF NOT EXISTS `6030` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6040`
--

DROP TABLE IF EXISTS `6040`;
CREATE TABLE IF NOT EXISTS `6040` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6040`
--

INSERT INTO `6040` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 7, 'GENERAL', 2, 8),
(2, 8, 'GENERAL', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `6050`
--

DROP TABLE IF EXISTS `6050`;
CREATE TABLE IF NOT EXISTS `6050` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6060`
--

DROP TABLE IF EXISTS `6060`;
CREATE TABLE IF NOT EXISTS `6060` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7010`
--

DROP TABLE IF EXISTS `7010`;
CREATE TABLE IF NOT EXISTS `7010` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7010`
--

INSERT INTO `7010` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 7, 'GENERAL', 1, 3),
(2, 8, 'GENERAL', 1, 3),
(3, 11, 'GENERAL', 2, 4),
(4, 12, 'GENERAL', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `7020`
--

DROP TABLE IF EXISTS `7020`;
CREATE TABLE IF NOT EXISTS `7020` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7020`
--

INSERT INTO `7020` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(2, 8, 'GENERAL', 2, 4),
(3, 9, 'GENERAL', 2, 4),
(4, 10, 'GENERAL', 2, 4),
(5, 13, 'GENERAL', 2, 4),
(6, 14, 'GENERAL', 2, 4),
(7, 17, 'GENERAL', 2, 4),
(8, 18, 'GENERAL', 2, 4),
(9, 21, 'GENERAL', 2, 4),
(10, 22, 'GENERAL', 2, 4),
(11, 25, 'GENERAL', 2, 4),
(12, 26, 'GENERAL', 2, 4),
(13, 5, 'GENERAL', 2, 4),
(14, 6, 'GENERAL', 2, 4),
(15, 11, 'GENERAL', 2, 4),
(16, 12, 'GENERAL', 2, 4),
(17, 20, 'GENERAL', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `7030`
--

DROP TABLE IF EXISTS `7030`;
CREATE TABLE IF NOT EXISTS `7030` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7040`
--

DROP TABLE IF EXISTS `7040`;
CREATE TABLE IF NOT EXISTS `7040` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `7050`
--

DROP TABLE IF EXISTS `7050`;
CREATE TABLE IF NOT EXISTS `7050` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7050`
--

INSERT INTO `7050` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 1, 'PWD', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `7060`
--

DROP TABLE IF EXISTS `7060`;
CREATE TABLE IF NOT EXISTS `7060` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7060`
--

INSERT INTO `7060` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 3, 'LADIES', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `8010`
--

DROP TABLE IF EXISTS `8010`;
CREATE TABLE IF NOT EXISTS `8010` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8010`
--

INSERT INTO `8010` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 8, 'GENERAL', 2, 4),
(2, 7, 'GENERAL', 2, 4),
(3, 11, 'GENERAL', 2, 4),
(4, 4, 'LADIES', 2, 4),
(5, 2, 'PWD', 2, 4),
(6, 12, 'GENERAL', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `8020`
--

DROP TABLE IF EXISTS `8020`;
CREATE TABLE IF NOT EXISTS `8020` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8020`
--

INSERT INTO `8020` (`bookingid`, `seatno`, `type`, `bsource`, `bdestination`) VALUES
(1, 7, 'GENERAL', 2, 4),
(2, 11, 'GENERAL', 2, 4),
(3, 9, 'GENERAL', 2, 4),
(4, 10, 'GENERAL', 2, 4),
(5, 13, 'GENERAL', 2, 4),
(6, 14, 'GENERAL', 2, 4),
(7, 15, 'GENERAL', 2, 4),
(8, 16, 'GENERAL', 2, 4),
(9, 17, 'GENERAL', 2, 4),
(10, 18, 'GENERAL', 2, 4),
(11, 19, 'GENERAL', 2, 4),
(12, 20, 'GENERAL', 2, 4),
(13, 24, 'GENERAL', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `8030`
--

DROP TABLE IF EXISTS `8030`;
CREATE TABLE IF NOT EXISTS `8030` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `8040`
--

DROP TABLE IF EXISTS `8040`;
CREATE TABLE IF NOT EXISTS `8040` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `8050`
--

DROP TABLE IF EXISTS `8050`;
CREATE TABLE IF NOT EXISTS `8050` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `8060`
--

DROP TABLE IF EXISTS `8060`;
CREATE TABLE IF NOT EXISTS `8060` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `seatno` int(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bsource` int(4) NOT NULL,
  `bdestination` int(4) NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `seatno` int(2) NOT NULL,
  `busno` varchar(10) NOT NULL,
  `sourcecity` varchar(20) NOT NULL,
  `sourceloc` varchar(40) NOT NULL,
  `destcity` varchar(20) NOT NULL,
  `destloc` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `price` float NOT NULL,
  KEY `BUS_NO` (`busno`),
  KEY `seatno` (`seatno`),
  KEY `source_city` (`sourcecity`),
  KEY `source_loc` (`sourceloc`),
  KEY `dest_city` (`destcity`),
  KEY `dest_loc` (`destloc`),
  KEY `price` (`price`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`seatno`, `busno`, `sourcecity`, `sourceloc`, `destcity`, `destloc`, `date`, `price`) VALUES
(10, 'JD4530', 'NDE00', 'NDE02', 'AMR00', 'AMR02', '2018-03-14', 400),
(34, 'NB6079', 'AMR00', 'AMR01', 'JAM00', 'JAM01', '2018-03-15', 250),
(22, 'NA6890', 'LDH00', 'LDH03', 'JAL00', 'JAL02', '2018-03-15', 450),
(12, 'ND02345', 'JAM00', 'JAM02', 'SON00', 'SON01', '2018-03-17', 100);

-- --------------------------------------------------------

--
-- Table structure for table `busnew`
--

DROP TABLE IF EXISTS `busnew`;
CREATE TABLE IF NOT EXISTS `busnew` (
  `busno` int(4) NOT NULL,
  `sourcecity` varchar(20) NOT NULL,
  `sourceno` int(2) NOT NULL,
  `destinationcity` varchar(20) NOT NULL,
  `destinationno` int(2) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `routeno` int(4) NOT NULL,
  `bustype` int(10) NOT NULL,
  PRIMARY KEY (`busno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busnew`
--

INSERT INTO `busnew` (`busno`, `sourcecity`, `sourceno`, `destinationcity`, `destinationno`, `date`, `start_time`, `routeno`, `bustype`) VALUES
(5010, 'NEW DELHI', 1, 'AMRITSAR', 7, '2018-03-22', '05:00:00', 101, 2),
(5020, 'KARNAL', 3, 'JAMMU', 8, '2018-03-23', '06:00:00', 102, 2),
(5030, 'AMBALA', 4, 'AMRITSAR', 7, '2018-03-23', '07:00:00', 103, 2),
(5040, 'SONIPAT', 2, 'JAMMU', 8, '2018-03-23', '08:00:00', 104, 2),
(5050, 'NEW DELHI', 1, 'LUDHIANA', 5, '2018-03-23', '10:00:00', 105, 2),
(5060, 'JALANDHAR', 6, 'JAMMU', 8, '2018-03-23', '11:00:00', 106, 2),
(6010, 'NEW DELHI', 1, 'AMRITSAR', 7, '2018-03-25', '22:00:00', 101, 1),
(6020, 'KARNAL', 3, 'JAMMU', 8, '2018-03-26', '09:00:00', 102, 1),
(6030, 'SONIPAT', 4, 'AMRITSAR', 7, '2018-03-27', '12:00:00', 103, 1),
(6040, 'SONIPAT', 2, 'JAMMU', 8, '2018-03-26', '05:00:00', 104, 1),
(6050, 'NEW DELHI', 1, 'LUDHIANA', 5, '2018-03-27', '13:00:00', 105, 1),
(6060, 'JALANDHAR', 6, 'JAMMU', 8, '2018-03-28', '16:00:00', 106, 1),
(7010, 'JAMMU', 1, 'LUDHIANA', 4, '2018-03-28', '17:00:00', 201, 2),
(7020, 'AMRITSAR', 2, 'NEW DELHI', 8, '2018-03-29', '16:00:00', 202, 2),
(7030, 'JALANDHAR', 3, 'NEW DELHI', 8, '2018-03-30', '15:00:00', 203, 2),
(7040, 'LUDHIANA', 4, 'SONIPAT', 7, '2018-03-30', '11:00:00', 204, 2),
(7050, 'AMRITSAR', 2, 'SONIPAT', 7, '2018-03-30', '23:00:00', 205, 2),
(7060, 'JAMMU', 1, 'NEW DELHI', 8, '2018-03-30', '10:00:00', 206, 2),
(8010, 'JAMMU', 1, 'LUDHIANA', 4, '2018-03-30', '15:00:00', 201, 1),
(8020, 'AMRITSAR', 2, 'NEW DELHI', 8, '2018-03-30', '13:30:00', 202, 1),
(8030, 'JALANDHAR', 3, 'NEW DELHI', 8, '2018-03-31', '09:00:00', 203, 1),
(8040, 'LUDHIANA', 4, 'SONIPAT', 7, '2018-03-31', '08:00:00', 204, 1),
(8050, 'AMRITSAR', 2, 'SONIPAT', 7, '2018-03-31', '16:30:00', 205, 1),
(8060, 'JAMMU', 1, 'NEW DELHI', 8, '2018-03-31', '22:00:00', 206, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cityno`
--

DROP TABLE IF EXISTS `cityno`;
CREATE TABLE IF NOT EXISTS `cityno` (
  `city_name` varchar(20) NOT NULL,
  `cityid` int(4) NOT NULL,
  `citykm` float NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cityno`
--

INSERT INTO `cityno` (`city_name`, `cityid`, `citykm`) VALUES
('NEW DELHI', 1, 0),
('SONIPAT', 2, 40),
('KARNAL', 3, 60),
('AMBALA', 4, 60),
('LUDHIANA', 5, 110),
('JALANDHAR', 6, 70),
('AMRITSAR', 7, 75),
('JAMMU', 8, 90);

-- --------------------------------------------------------

--
-- Table structure for table `cityno1`
--

DROP TABLE IF EXISTS `cityno1`;
CREATE TABLE IF NOT EXISTS `cityno1` (
  `city_name` varchar(20) NOT NULL,
  `cityid` int(4) NOT NULL,
  `citykm` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cityno1`
--

INSERT INTO `cityno1` (`city_name`, `cityid`, `citykm`) VALUES
('JAMMU', 1, 0),
('AMRITSAR', 2, 90),
('JALANDHAR', 3, 75),
('LUDHIANA', 4, 70),
('AMBALA', 5, 110),
('KARNAL', 6, 60),
('SONIPAT', 7, 60),
('NEW DELHI', 8, 40);

-- --------------------------------------------------------

--
-- Table structure for table `conductor`
--

DROP TABLE IF EXISTS `conductor`;
CREATE TABLE IF NOT EXISTS `conductor` (
  `conductername` varchar(20) NOT NULL,
  `conductorno` varchar(10) NOT NULL,
  `assignbusno` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL,
  KEY `bus_no` (`assignbusno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conductor`
--

INSERT INTO `conductor` (`conductername`, `conductorno`, `assignbusno`, `password`) VALUES
('RAVI', 'CON0003', '5010', '123456'),
('SAM', 'CON0045', '5020', 'abcdef'),
('NEVIL', 'CON0034', '5030', '987654'),
('RAMAN', 'CON0724', '5040', '123987'),
('SUNIL', 'CON8976', '5050', '456ABC'),
('AJAY', 'CON0406', '5060', '098766'),
('RAHUL', 'CON3060', '6010', 'rahulk'),
('KISHAN', 'CON0018', '6020', 'kishan'),
('SHUBHAM', 'CON4070', '6030', 'shubh1'),
('RAJA', 'CON9078', '6040', 'raja12'),
('', '', '', ''),
('SATPAL', 'CON0976', '6050', 'satpal'),
('RAMPAL', 'CON7865', '6060', 'rampal'),
('DILIP', 'CON8976', '7010', 'dilip'),
('AKBAR', 'CON6543', '7020', 'makbar'),
('RAKESH', 'CON8971', '7030', 'rakesh'),
('RAJESH', 'CON4567', '7040', 'rajesh'),
('SURAJ', 'CON1432', '7050', 'surajg'),
('SUBAH', 'CON1243', '7060', 'subaht'),
('SUDAKAR', 'CON7650', '8010', 'sudakr'),
('MAGAN', 'CON3452', '8020', 'magan2'),
('AJAY', 'CON7698', '8030', 'ajay98'),
('DOOP', 'CON4040', '8040', 'doopes'),
('DEEP', 'CON7621', '8050', 'deepoo'),
('SAGAR', 'CON0034', '8060', 'sagarj');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(3) NOT NULL AUTO_INCREMENT,
  `first` varchar(25) NOT NULL,
  `last` varchar(25) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `service` varchar(20) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `first`, `last`, `contact`, `type`, `service`, `subject`) VALUES
(1, 'first', 'last', '', 'string', 'service', 'text'),
(2, 'kishore', 'last', '', 'string', 'service', 'text'),
(3, 'kishore', 'kumar', '', 'string', 'service', 'text'),
(4, 'kishore', 'kumar', '', 'string', 'service', 'text'),
(5, 'kishore', 'kumar', '9920040334', '2', 'Website', 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `old5010`
--

DROP TABLE IF EXISTS `old5010`;
CREATE TABLE IF NOT EXISTS `old5010` (
  `seatno` int(2) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`seatno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `old5010`
--

INSERT INTO `old5010` (`seatno`, `type`, `status`) VALUES
(1, 'physicaly disabled', ''),
(2, 'physicaly disabled', ''),
(3, 'general seat', ''),
(4, 'ladies seat', ''),
(5, 'ladies seat', ''),
(6, 'ladies seat', ''),
(7, 'ladies seat', ''),
(8, 'ladies seat', ''),
(9, 'general seat', ''),
(10, 'general seat', 'BOOKED'),
(11, 'general seat', ''),
(12, 'general seat', ''),
(13, 'general seat', ''),
(14, 'general seat', ''),
(15, 'general seat', ''),
(16, 'general seat', ''),
(17, 'general seat', ''),
(18, 'general seat', ''),
(19, 'general seat', ''),
(20, 'general seat', ''),
(21, 'general seat', ''),
(22, 'general seat', ''),
(23, 'general seat', ''),
(24, 'general seat', ''),
(25, 'general seat', ''),
(26, 'general seat', ''),
(27, 'general seat', ''),
(28, 'general seat', ''),
(29, 'general seat', ''),
(30, 'general seat', ''),
(31, 'general seat', ''),
(32, 'general seat', ''),
(33, 'general seat', ''),
(34, 'general seat', ''),
(35, 'general seat', ''),
(36, 'general seat', ''),
(37, 'general seat', ''),
(38, 'general seat', ''),
(39, 'general seat', ''),
(40, 'general seat', ''),
(41, 'general seat', '');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS `route` (
  `busno` varchar(10) NOT NULL,
  `routeno` int(3) NOT NULL,
  KEY `bus_no` (`busno`),
  KEY `route_no` (`routeno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`busno`, `routeno`) VALUES
('JD4530', 6),
('NB6079', 28),
('NA6890', 23),
('ND02345', 13),
('ABC9876', 7),
('NW3421', 14);

-- --------------------------------------------------------

--
-- Table structure for table `routenew`
--

DROP TABLE IF EXISTS `routenew`;
CREATE TABLE IF NOT EXISTS `routenew` (
  `routeno` int(3) NOT NULL,
  `bus1` int(4) NOT NULL,
  `bus2` int(4) NOT NULL,
  PRIMARY KEY (`routeno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routenew`
--

INSERT INTO `routenew` (`routeno`, `bus1`, `bus2`) VALUES
(101, 5010, 6010),
(102, 5020, 6020),
(103, 5030, 6030),
(104, 5040, 6040),
(105, 5050, 6050),
(106, 5060, 6060),
(107, 5070, 6070);

-- --------------------------------------------------------

--
-- Table structure for table `routeno`
--

DROP TABLE IF EXISTS `routeno`;
CREATE TABLE IF NOT EXISTS `routeno` (
  `routeno` int(3) NOT NULL,
  `sourcecity` varchar(20) NOT NULL,
  `destcity` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `up/down` varchar(5) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`routeno`),
  KEY `source_no` (`sourcecity`),
  KEY `dest_no` (`destcity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routeno`
--

INSERT INTO `routeno` (`routeno`, `sourcecity`, `destcity`, `price`, `up/down`, `time`) VALUES
(1, 'NEW DELHI', 'SONIPAT', 600, 'up', '04:00:00'),
(2, 'NEWDELHI', 'KARNAL', 300, 'up', '02:00:00'),
(3, 'NEW DELHI', 'AMBALA', 800, 'up', '06:00:00'),
(4, 'NEW DELHI', 'LUDHIANA', 200, 'up', '01:00:00'),
(5, 'NEW DELHI', 'JALANDHAR', 650, 'up', '04:30:00'),
(6, 'NEW DELHI', 'AMRITSAR', 400, 'up', '03:00:00'),
(7, 'NEW DELHI', 'JAMMU', 700, 'up', '05:00:00'),
(8, 'SONIPAT', 'KARNAL', 300, 'up', '02:00:00'),
(9, 'SONIPAT', 'AMBALA', 200, 'up', '01:00:00'),
(10, 'SONIPAT', 'LUDHIANA', 400, 'up', '03:00:00'),
(11, 'SONIPAT', 'JALANDHAR', 50, 'up', '00:30:00'),
(12, 'SONIPAT', 'AMRITSAR', 200, 'up', '01:00:00'),
(13, 'SONIPAT', 'JAMMU', 100, 'up', '00:40:00'),
(14, 'KARNAL', 'AMBALA', 400, 'up', '03:00:00'),
(15, 'KARNAL', 'LUDHIANA', 100, 'up', '00:40:00'),
(16, 'KARNAL', 'JALANDHAR', 250, 'up', '01:30:00'),
(17, 'KARNAL', 'AMRITSAR', 100, 'up', '00:40:00'),
(18, 'KARNAL', 'JAMMU', 300, 'up', '02:00:00'),
(19, 'AMBALA', 'LUDHIANA', 600, 'up', '04:00:00'),
(20, 'AMBALA', 'JALANDHAR', 150, 'up', '00:50:00'),
(21, 'AMBALA', 'AMRITSAR', 400, 'up', '03:00:00'),
(22, 'AMBALA', 'JAMMU', 100, 'up', '00:40:00'),
(23, 'LUDHIANA', 'JALANDHAR', 450, 'up', '03:30:00'),
(24, 'LUDHIANA', 'AMRITSAR', 200, 'up', '01:00:00'),
(25, 'LUDHIANA', 'JAMMU', 500, 'up', '03:45:00'),
(26, 'JALANDHAR', 'AMRITSAR', 250, 'up', '01:30:00'),
(27, 'JALANDHAR', 'JAMMU', 50, 'up', '00:30:00'),
(28, 'AMRITSAR', 'JAMMU', 300, 'up', '02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

DROP TABLE IF EXISTS `sample`;
CREATE TABLE IF NOT EXISTS `sample` (
  `routeno` int(4) NOT NULL,
  `sourceno` int(4) NOT NULL,
  `stop1no` int(4) NOT NULL,
  `stop2no` int(4) NOT NULL,
  `destinationno` int(4) NOT NULL,
  PRIMARY KEY (`routeno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`routeno`, `sourceno`, `stop1no`, `stop2no`, `destinationno`) VALUES
(101, 1, 4, 5, 7),
(102, 3, 5, 7, 8),
(103, 4, 6, 7, 7),
(104, 2, 4, 6, 8),
(105, 1, 3, 5, 5),
(106, 6, 7, 8, 8),
(107, 8, 6, 3, 1),
(201, 1, 2, 3, 4),
(202, 2, 4, 6, 8),
(203, 3, 5, 7, 8),
(204, 4, 5, 6, 7),
(205, 2, 4, 5, 7),
(206, 1, 4, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `seatno` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`seatno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seatno`, `type`) VALUES
(1, 'PWD'),
(2, 'PWD'),
(3, 'LADIES'),
(4, 'LADIES'),
(5, 'GENERAL'),
(6, 'GENERAL'),
(7, 'GENERAL'),
(8, 'GENERAL'),
(9, 'GENERAL'),
(10, 'GENERAL'),
(12, 'GENERAL'),
(13, 'GENERAL'),
(14, 'GENERAL'),
(15, 'GENERAL'),
(16, 'GENERAL'),
(17, 'GENERAL'),
(18, 'GENERAL'),
(19, 'GENERAL'),
(20, 'GENERAL'),
(21, 'GENERAL'),
(22, 'GENERAL'),
(23, 'GENERAL'),
(24, 'GENERAL'),
(26, 'GENERAL'),
(27, 'GENERAL'),
(28, 'GENERAL'),
(29, 'GENERAL'),
(30, 'GENERAL'),
(31, 'GENERAL'),
(32, 'GENERAL'),
(33, 'GENERAL'),
(34, 'GENERAL'),
(35, 'GENERAL'),
(36, 'GENERAL'),
(37, 'GENERAL'),
(38, 'GENERAL'),
(39, 'GENERAL'),
(40, 'GENERAL'),
(41, 'GENERAL'),
(11, 'GENERAL'),
(25, 'GENERAL');

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

DROP TABLE IF EXISTS `system_user`;
CREATE TABLE IF NOT EXISTS `system_user` (
  `userName` varchar(10) NOT NULL COMMENT 'User Name for login to System',
  `employeeNo` varchar(8) NOT NULL COMMENT 'Empoyee Number of System User',
  `employeeName` varchar(20) NOT NULL COMMENT 'oyee Name of System User',
  `employeeMNo` varchar(10) NOT NULL COMMENT 'oyee Mobile Number of System User',
  `password` varchar(250) DEFAULT NULL COMMENT 'Password for login to system',
  `privilege` varchar(8) NOT NULL DEFAULT 'Not User',
  PRIMARY KEY (`userName`),
  KEY `empoyeeName` (`employeeName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store System User Data and Login Data';

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`userName`, `employeeNo`, `employeeName`, `employeeMNo`, `password`, `privilege`) VALUES
('Admin', '001', 'Ranathinge', '0717226079', '2377cfe2fbef92859e299f9272f96e82', 'Admin'),
('Nevil', '002', 'Nevil', '0717226079', 'f36792e15aa77db3929334ba62d0974b', 'Operator'),
('Sumith', '004', 'Sumith', '1234567890', '67be81b88c81b956642548553defcff8', 'Conduct');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
