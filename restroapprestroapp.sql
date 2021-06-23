-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2021 at 06:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restroapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `pass`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`userid`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Dhanashree jain', 'jaindhanashree01@gmail.com', 'leaving', ''),
(2, 'Dhanashree jain', 'jaindhanashree01@gmail.com', 'leaving', 'heya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sign`
--

CREATE TABLE IF NOT EXISTS `tbl_sign` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cnfpassword` varchar(15) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_sign`
--

INSERT INTO `tbl_sign` (`s_id`, `name`, `email`, `mobile`, `address`, `password`, `cnfpassword`) VALUES
(1, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228984', '134\r\nTukaram chawl dilip bhawan', 'dhannu', ''),
(2, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228984', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(3, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228984', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(4, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228984', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(5, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228944', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'asdf'),
(6, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776666', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'asdrf'),
(7, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776666', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(8, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228944', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(9, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228984', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(10, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776666', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(11, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276779465', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(12, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228944', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(13, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776666', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(14, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228944', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(15, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776666', '134\r\nTukaram chawl dilip bhawan', 'dhannu', 'dhannu'),
(16, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '9595228984', '134\r\nTukaram chawl dilip bhawan', 'sdfg', 'sdfg'),
(17, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276779465', '134\r\nTukaram chawl dilip bhawan', 'asdf', 'asdf'),
(18, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776666', '134\r\nTukaram chawl dilip bhawan', 'asdf', 'asdf'),
(19, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776686', '134\r\nTukaram chawl dilip bhawan', 'asdf', 'asdf'),
(20, 'Dhanashree jain', 'jaindhanashree01@gmail.com', '7276776676', '134\r\nTukaram chawl dilip bhawan', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `item_name`, `availability`) VALUES
(1, 'french fries', 'available'),
(2, 'chicken nuggets', 'available'),
(3, 'veg grilled sandwich', 'available'),
(4, 'panner tikka', 'available'),
(5, 'south indian special', 'available'),
(6, 'fruit salad', 'unavailable'),
(7, 'italian sandwich', 'available'),
(8, 'shakes', 'unavailable');
