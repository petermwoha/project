-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2013 at 11:56 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datarush`
--
CREATE DATABASE `datarush` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `datarush`;

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `Number` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `idNo` int(8) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `education` varchar(70) NOT NULL,
  PRIMARY KEY (`Number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`Number`, `station`, `password`, `username`, `idNo`, `firstname`, `lastname`, `education`) VALUES
(13, 'Narok', '8afe9994a1610812c9a111d0b5d31c5b', 'Narok', 21375890, 'Ole Miwani', 'Joshua', 'High school'),
(14, 'Kericho', '6986327c1c65e4c460a4d7a357eeccca', 'Kericho', 21375890, 'Ole Miwani', 'Joshua', 'High school'),
(15, 'Naivasha', '93702e8eb45a28ef816eabb8cde269a0', 'Naivasha', 21342341, 'Maina', 'Njoroge', 'Undergraduate'),
(16, 'Nakuru', '19c534b0d76c04b678b5a8676ffac627', 'Nakuru', 21342341, 'Simon', 'Kimani', 'Diploma holder'),
(17, 'Kitale', 'b6b044bd651d05090d8558ea08d74913', 'Kitale', 21342340, 'Wafula', 'Erickson', 'Undergraduate'),
(18, 'Molo', '43c9cf785c341a2b4a5783ffb69efbb6', 'molo', 21340978, 'Quinter', 'Muthoni', 'High school'),
(19, 'Eldoret', 'bb376e6441a7fe028a3fa328c40d4202', 'Eldoret', 12328907, 'Ngeno ', 'Nathan', 'Diploma holder'),
(20, 'Kakamega', '12eb2a8190db23ac598ce3f884f86695', 'Kakamega', 43214321, 'Wanyama', 'Franklin', 'Diploma holder'),
(21, 'Webuye', '9ae20447129219358b603b277f131f08', 'Webuye', 21122112, 'Johnson', 'Muthama', 'High school'),
(22, 'Bungoma', '77172fe5870c78437a1912259d5bb612', 'Bungoma', 32112332, 'Ambrose', 'Makhoha', 'Undergraduate'),
(23, 'Moi Bridge', 'be9093e0c6e62454f58f285b3ea7e1bb', 'Moi Bridge', 98765432, 'Kiprotich ', 'Alan', 'Diploma holder'),
(24, 'Migori', '17bf2105f6d55ac7a3041df4e1c626fb', 'Migori', 45454545, 'Nyawara', 'Calvince', 'High school'),
(25, 'Sirare', '2a5086153d7eb649b95236b2f6d769bc', 'Sirare', 87654322, 'Nyongesa', 'Vincent', 'Postgraduate'),
(26, 'Busia', 'e9f0e3f96dae49f37976b8059b74912d', 'Busia', 34211237, 'Wilfred', 'Muigai', 'Primary school'),
(27, 'Bondo', 'c206bbb130f3cbf2e4d49c57939c2e08', 'Bondo', 23123421, 'Jaduong', 'Omondi', 'Primary school'),
(28, 'Siaya', '0efb3fd1acd243d0ca7b23cc908da142', 'Siaya', 35647213, 'Johnstone', 'Omolo', 'Primary school'),
(29, 'Mumias', '2d6ed455ae06dcde56cf5e109074a8b0', 'Mumias', 15321237, 'Okelo', 'Mathias', 'Undergraduate'),
(30, 'Kapsoit', 'af736b9dcdd2b0a8198e81993feea106', 'Kapsoit', 12334570, 'Martin', 'Ruto', 'Postgraduate'),
(31, 'Nairobi', 'fc9389801935ab6476b93373f658e705', 'Nairobi', 7887654, 'Johnstone', 'kimathi', 'Primary school');

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE IF NOT EXISTS `issued` (
  `parcelid` int(5) DEFAULT NULL,
  `receipientname` varchar(20) DEFAULT NULL,
  `receipientid` varchar(10) DEFAULT NULL,
  `Time` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued`
--

INSERT INTO `issued` (`parcelid`, `receipientname`, `receipientid`, `Time`) VALUES
(15, 'f', '3', '17 Nov 2013  10:32:11'),
(2, 'Kimson', '23144091', '02 Dec 2013  08:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `idNo` int(8) NOT NULL,
  `officialname` tinytext NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`idNo`, `officialname`, `password`) VALUES
(12345678, 'manager', '1d0258c2440a8d19e716292b231e3190');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE IF NOT EXISTS `parcels` (
  `parcelid` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `senderid` int(8) DEFAULT NULL,
  `sendername` varchar(20) DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `sendermail` varchar(40) DEFAULT NULL,
  `sendermobile` int(20) DEFAULT NULL,
  `receipientid` int(8) DEFAULT NULL,
  `receipientname` varchar(30) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `receipientmail` varchar(40) DEFAULT NULL,
  `receipientmobile` int(20) DEFAULT NULL,
  `Time` varchar(40) NOT NULL,
  PRIMARY KEY (`parcelid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`parcelid`, `type`, `senderid`, `sendername`, `source`, `sendermail`, `sendermobile`, `receipientid`, `receipientname`, `destination`, `receipientmail`, `receipientmobile`, `Time`) VALUES
(1, 'Tyre', 2167906, 'Alan', 'Migori', 'alano@yahoo.com', 701234132, 23144091, 'Kimson', 'Narok', 'kimsonm@gmail.com', 729098097, '19 Nov 2013  10:47:46'),
(2, 'Tyre', 2167906, 'Alan', 'Migori', 'alano@yahoo.com', 701234132, 23144091, 'Kimson', 'Narok', 'kimsonm@gmail.com', 729098097, '19 Nov 2013  10:52:25'),
(3, 'Body', 21679312, 'Alex', 'Siaya', 'alexandra@yahoo.com', 734678088, 21999999, 'Jackson', 'Moi Bridge', 'jack@gmail.com', 726999999, '19 Nov 2013  10:57:21'),
(4, 'Money', 1243, 'mutuma', 'Bondo', 'm@yahoo.com', 734678088, 5432, 'hgf', 'Narok', 'mutuma@yahoo.com', 975678, '27 Nov 2013  16:39:16'),
(5, 'Bag', 2315469, 'Mwaniki', 'Kakamega', 'mutua@yahoo.com', 734678082, 24517709, 'George', 'Moi Bridge', 'mutumadickson@gmail.com', 708989807, '02 Dec 2013  11:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `senders`
--

CREATE TABLE IF NOT EXISTS `senders` (
  `idnumber` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senders`
--

INSERT INTO `senders` (`idnumber`, `name`, `mobile`, `time`) VALUES
(0, '', 0, '2013-10-03 10:15:56'),
(343443, 'Kim', 56533, '2013-10-16 18:30:48'),
(46488937, 'maina', 894, '2013-10-10 11:16:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
