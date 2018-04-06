-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2014 at 08:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--
USE hotel;

CREATE TABLE IF NOT EXISTS `menu` (
`id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item_name`, `item_price`) VALUES
(1, 'Chicken Curry/Veg Curry', 120),
(2, 'Veg Biryani', 120),
(3, 'Tea', 6),
(4, 'Coffee', 12),
(5, 'ChickenBiryani', 200),
(6, 'Mutton Biryani', 180),
(7, 'Spring Rolll', 80),
(8, 'Egg Biryani', 250),
(9, 'Chicken Curry', 100),
(10, 'Raaviz Special', 20),
(15, 'Indian Bread', 25);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` int(30) NOT NULL DEFAULT '0',
  `r_chkindt` varchar(50) NOT NULL DEFAULT '',
  `r_chkoutdt` varchar(50) NOT NULL DEFAULT '',
  `r_rooms` varchar(20) NOT NULL DEFAULT '0',
  `r_type` varchar(20) NOT NULL DEFAULT '',
  `r_name` varchar(50) NOT NULL DEFAULT '',
  `r_email` varchar(100) NOT NULL DEFAULT '',
  `r_company` varchar(50) NOT NULL DEFAULT '',
  `r_phone` varchar(20) NOT NULL DEFAULT '0',
  `r_address` varchar(200) NOT NULL DEFAULT '',
  `r_spanyreq` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `r_chkindt`, `r_chkoutdt`, `r_rooms`, `r_type`, `r_name`, `r_email`, `r_company`, `r_phone`, `r_address`, `r_spanyreq`) VALUES
(2, '1-12-2014', '19-12-2014', '6', 'suite', 'Deveshree Shinde', 's.deveshree@gmail.com', 'ADP India', '9730007432', '9 Orangeblossom Trail', 'NA ');

-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--

CREATE TABLE IF NOT EXISTS `tariff` (
  `type` varchar(50) NOT NULL DEFAULT '',
  `inrsin` varchar(30) NOT NULL DEFAULT '0',
  `inrdbl` varchar(30) NOT NULL DEFAULT '0',
  `cndsin` varchar(30) NOT NULL DEFAULT '0',
  `cnddbl` varchar(30) NOT NULL DEFAULT '0',
  `avroom` int(3) NOT NULL DEFAULT '0',
  `totroom` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`type`, `inrsin`, `inrdbl`, `cndsin`, `cnddbl`, `avroom`, `totroom`) VALUES
('standard', '2600', '3100', '80', '90', 17, 6),
('deluxe', '3100', '3600', '90', '110', 10, 15),
('suite', '2100', '3200', '80', '100', 9, 10),
('delux', '1100', '2200', '50', '80', 25, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('kunal', 'kunal'),
('kkk', 'kkk'),
('deveshree', 'deveshree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD KEY `r_id` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
