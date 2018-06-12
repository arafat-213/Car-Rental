-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2018 at 03:40 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--
CREATE DATABASE IF NOT EXISTS `car` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `car`;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `contact_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `name`, `price`, `discount`, `amount`, `contact_no`) VALUES
(1, 'arfee', 1549, 155, 1394, '9825523969'),
(2, 'arfee', 1499, 150, 1349, '9825523969'),
(3, 'arfee', 1549, 155, 1394, '9825523969'),
(4, 'pranal', 1499, 150, 1349, '210398'),
(5, 'pranal', 1549, 155, 1394, '210398'),
(6, 'pranal', 1499, 150, 1349, '210398'),
(7, 'arfee', 4547, 455, 4092, '9825523969'),
(8, 'arfee', 1549, 155, 1394, '9825523969'),
(9, 'arfee', 1499, 150, 1349, '9825523969'),
(10, 'abcd', 1549, 155, 1394, '1234567890'),
(11, 'arfee', 1549, 155, 1394, '9825523969'),
(12, 'arfee', 1499, 150, 1349, '9825523969');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `car_selected` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `contact_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `contact_no`) VALUES
('arfee', 'arfee', '9825523969'),
('pranal', 'dobi', '210398'),
('abcd', 'abcd', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE IF NOT EXISTS `price_list` (
  `name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`name`, `price`) VALUES
('innova-p', 1499),
('innova-c', 1549),
('suzuki-p', 1599),
('suzuki-d', 1549),
('etios-c', 1499),
('etios-d', 1549);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
