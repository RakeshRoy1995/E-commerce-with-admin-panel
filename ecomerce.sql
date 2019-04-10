-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2019 at 07:32 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

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
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `amt_id` int(9) NOT NULL AUTO_INCREMENT,
  `cus_id` int(200) DEFAULT NULL,
  `amount` varchar(200) CHARACTER SET armscii8 DEFAULT NULL,
  `dates` varchar(200) CHARACTER SET armscii8 DEFAULT NULL,
  `payment` varchar(200) CHARACTER SET armscii8 DEFAULT NULL,
  `tans_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`amt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`amt_id`, `cus_id`, `amount`, `dates`, `payment`, `tans_id`) VALUES
(1, 793001, '10000', '01/31/2019', 'Complete', 0),
(2, 12345, '420', '02/27/2019', 'Complete', 0);

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
  `id_num` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customars`
--

INSERT INTO `customars` (`id`, `username`, `email`, `password`, `city`, `address`, `id_num`) VALUES
(4, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', '12345', 'Dhaka, Badda , Link Road', 'Abul Hotel , Italian House, 1st floor', '801'),
(5, 'Johir', 'Johir@gmail.com', '12345', 'Dhaka', 'Dhaka,Rampura', '224');

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
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customars_2nd`
--

INSERT INTO `customars_2nd` (`id`, `name`, `email`, `Permanent_Address`, `Current_Address`, `Num`, `track_id`, `user_id`) VALUES
(16, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '71850997864', 801),
(15, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '98628018578', 801),
(14, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01638127876', '541111987', 801),
(13, 'Rakesh ', 'rakeshroy@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '797553749', 801),
(12, 'Johir', 'Johir@gmail.com', 'Feni', 'Bonosree, Dhaka', '01843633806', '879691269', 224),
(11, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '172036063', 801),
(10, 'Rakesh Roy', 'rajibshovon@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '730328606', 801),
(1, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Chandpur', 'Dhaka', '01638127876', '10154', 801),
(17, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '49808112987', 801),
(18, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '76920132291', 801),
(19, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '87406564071', 801),
(20, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '43280514711', 801),
(21, 'Rakesh Roy', 'rakeshroyshuvo@gmail.com', 'Shahrasti,Chandpur', 'Badda, Dhaka', '01917886998', '38891763525', 801);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

DROP TABLE IF EXISTS `mobile`;
CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(11) NOT NULL,
  `qty` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`, `code`, `image`, `price`, `qty`) VALUES
(6, 'Rakesh Roy', 'l-1d', 'images/5c8df115b6c31.JPG', '100', '3'),
(7, 'Rakesh Roy', 'l-1', 'images/5c8dee257c007.JPG', '100', '3'),
(8, 'mobile', 'm5', 'images/5c9ef8e21873f.jpg', '100', '74');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `code`, `image`, `price`, `qty`) VALUES
(10, 'Laptop', 'hbgf4', 'images/5c9efa92c95ca.jpg', '145', 4),
(8, 'Laptop', '100', 'images/5c9ef9feaf03c.jpg', '1200', 4),
(14, 'Laptop', 'hgvthv', 'images/5c9f1b82e92f8.jpg', '10000', 1),
(9, 'mobile', 'hy4', 'images/5c9efa30a5f02.png', '111', 4),
(16, 'Laptop', 'CdS3', 'images/5cae42d8139ec.jpg', '2514', 5),
(13, 'Laptop', 'jhghg', 'images/5c9f0b5b91dc9.jpg', '4477', 14),
(15, 'Laptop', 'iujivjijgg', 'images/5c9f1f983b048.', '500', 5);

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `qty`) VALUES
(21, 'Laptop', 'gvegve', 'images/5cae434b2a8b1.png', '25', 3),
(20, 'Laptop', 'CdS3', 'images/5cae42fe88dfe.jpg', '145', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

DROP TABLE IF EXISTS `transection`;
CREATE TABLE IF NOT EXISTS `transection` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `product_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `trans_id` varchar(200) NOT NULL,
  `Taka` int(11) NOT NULL,
  `dates_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`t_id`, `name`, `product_code`, `user_id`, `email`, `num`, `trans_id`, `Taka`, `dates_time`) VALUES
(4, 'Rakesh Roy', 541111987, 801, 'rakeshroyshuvo@gmail.com', 1638127876, 'hegguheghl8749874546', 2468, '2019-03-03 18:30:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
