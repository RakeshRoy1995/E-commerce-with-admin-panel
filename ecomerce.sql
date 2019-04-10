-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2019 at 05:53 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bnk_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bnk_name`) VALUES
(1, 'Duch Bangla'),
(2, 'AB bank');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `name`) VALUES
(1, 'Visa'),
(2, 'Master Union ');

-- --------------------------------------------------------

--
-- Table structure for table `customars`
--

DROP TABLE IF EXISTS `customars`;
CREATE TABLE IF NOT EXISTS `customars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customars`
--

INSERT INTO `customars` (`id`, `username`, `email`, `password`, `city`, `address`) VALUES
(1, 'Rakesh', 'Rakesh@gmail.com', '12345', 'Dhaka', 'Badda'),
(2, 'Johir', 'rakeshroyshuvo@gmail.com', '12345', 'dhaka', ''),
(3, 'Johir', 'rakeshroyshuvo@gmail.com', '12345', 'dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `customars_2nd`
--

DROP TABLE IF EXISTS `customars_2nd`;
CREATE TABLE IF NOT EXISTS `customars_2nd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `Permanent_Address` varchar(200) NOT NULL,
  `Current_Address` varchar(200) NOT NULL,
  `Num` varchar(100) NOT NULL,
  `track_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customars_2nd`
--

INSERT INTO `customars_2nd` (`id`, `name`, `email`, `Permanent_Address`, `Current_Address`, `Num`, `track_id`) VALUES
(1, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '781793652'),
(2, 'Rakesh Roy', 'dhakatop6@gmail.com', 'Shahrasti,Chandpur', 'Rampura. Dhaka', '01638127876', '9475521'),
(3, 'Rakesh Roy', 'polashkumar3942@gmail.com', 'Shahrasti,Chandpur', 'Rampura. Dhaka', '01638127876', '1086554115'),
(4, 'Rakesh Roy', 'polashkumar3942@gmail.com', 'Shahrasti,Chandpur', 'Rampura. Dhaka', '01638127876', '55063954'),
(5, 'Rakesh Roy', 'polashkumar3942@gmail.com', 'Shahrasti,Chandpur', 'Rampura. Dhaka', '01638127876', '878318121'),
(6, 'Rakesh Roy', 'polashkumar3942@gmail.com', 'Shahrasti,Chandpur', 'Rampura. Dhaka', '01638127876', '378123903');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(33) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `qty`) VALUES
(10, 'Rakesh Roy', 'trdtd', 'images/44826489_336225963776231_586375721672rth4549632_n.jpg', '422', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
