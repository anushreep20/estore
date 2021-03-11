-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 04, 2020 at 04:02 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Oppo Smartphone', 9000),
(2, 'Apple iPhone 8', 50000),
(3, 'RedMi Note 3', 11000),
(4, 'Nokia 3231 ', 6000),
(5, 'Nokia 6.2', 18000),
(6, 'Nokia Qwerty', 8000),
(7, 'Nokia 8.2', 22000),
(8, 'Motorola G7', 15000),
(9, 'Apple iPhone X', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(6, 'Amol', 'amol_90@gmail.com', '7ea3e2ffa1a24d23d4ebb2f2f42a1f20', '9987603244', 'Pune', 'MK colony'),
(7, 'Rupa', 'rupa123@gmail.com', '896d90bc3cfd240b4c72c14b7221b54d', '9089765009', 'Mumbai', 'bkc'),
(8, 'Ram', 'ram123@gmail.com', '6a557ed1005dddd940595b8fc6ed47b2', '9980768890', 'Pune', 'kothrud'),
(9, 'Seema', 'seema123@gmail.com', '5a9491ca0eed98bfdf221df083897695', '9088689007', 'Nagpur', 'burdy'),
(10, 'nisha', 'nisha_999@gmail.com', 'e505981f66180cbd3f06e4c2283f7242', '9908765789', 'Pune', 'baner');

-- --------------------------------------------------------

--
-- Table structure for table `user_item`
--

DROP TABLE IF EXISTS `user_item`;
CREATE TABLE IF NOT EXISTS `user_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to Cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_item`
--

INSERT INTO `user_item` (`id`, `user_id`, `item_id`, `status`) VALUES
(4, 8, 2, 'Added to Cart'),
(3, 7, 3, 'Added to Cart'),
(5, 9, 6, 'Confirmed'),
(6, 10, 8, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
