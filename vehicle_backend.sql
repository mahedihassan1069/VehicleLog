-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 08, 2019 at 07:49 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `email`, `fullName`, `password`) VALUES
(1, 'rahat@gmail.com', '', '12345'),
(2, 'shahimran@gmail.com', '', '123456'),
(3, 'shaobuj@gmail.com', '', '09876'),
(4, 'Masum@gmail.com', '', '3456'),
(5, 'mobin@gmail.com', '', '6456487'),
(6, 'habibur@gmail.com', '', '12345'),
(7, 'alamin@gmail.com', '', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclelogs`
--

DROP TABLE IF EXISTS `vehiclelogs`;
CREATE TABLE IF NOT EXISTS `vehiclelogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plateNumber` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `timestamp` time NOT NULL,
  `Authorization` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehiclelogs`
--

INSERT INTO `vehiclelogs` (`id`, `plateNumber`, `Date`, `imagePath`, `timestamp`, `Authorization`) VALUES
(1, 'UP16BL1684', '2019-09-10', 'https://car-images.bauersecure.com/pagefiles/86078/450x300/taycan_025.jpg?quality=75', '03:27:14', ''),
(2, 'FLN9151', '2019-09-07', 'https://auto.ndtvimg.com/car-images/medium/hyundai/venue/hyundai-venue.jpg?v=1_1', '03:27:20', ''),
(3, 'MH43AF5442', '2019-09-03', 'https://img1.icarcdn.com/3377416/main-l_new-car-carlist-honda-hr-v-i-vtec-v-suv-malaysia_3377416_hf0ozvNFXzFQBsjXCEJR0s.jpg?smia=xTM', '03:27:28', ''),
(4, 'DL1N9151', '2019-09-09', 'https://static.carsdn.co/cldstatic/wp-content/uploads/HP2019HyundaiTucson.jpg', '03:28:02', ''),
(5, 'E16BL1DF8', '2019-09-08', 'https://postmediadriving.files.wordpress.com/2019/09/2020-porsche-taycan-3-e1567606252679.jpg?quality=80&strip=all&w=400&h=260&crop=1', '03:57:09', ''),
(6, 'JHGJHKJB', '2019-09-20', 'https://cdn.vox-cdn.com/uploads/chorus_image/image/64744269/Lotus_Evija_Front_Three_Quarter.0.jpg', '04:00:00', ''),
(7, 'FSDGd', '2019-09-11', 'https://c.ndtvimg.com/2019-08/k8519lf8_bugatti-centodieci-unveiled-at-pebble-beach-car-show_625x300_17_August_19.jpg', '02:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

DROP TABLE IF EXISTS `vehicleregistration`;
CREATE TABLE IF NOT EXISTS `vehicleregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `idType` varchar(255) NOT NULL,
  `idNumber` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `vehicleRegNo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicleregistration`
--

INSERT INTO `vehicleregistration` (`id`, `fullName`, `idType`, `idNumber`, `mobile`, `address`, `vehicleRegNo`) VALUES
(1, 'Md Rahat', 'RC Number', '24345', '56876543567', 'fgtfgh', 'UP16BL1684'),
(2, 'Shah Imran', 'DL Number', '232543', '0899475687', 'Sylhet', 'E16BL1DF8'),
(3, 'Md Shobuj ', 'RC Number', '7586587', '84674674', 'gefyiuh', 'MH43AF5442'),
(4, 'Delwar Hossain', 'RC Number', '45657', '43546', 'Savar', 'JHGJHKJB'),
(5, 'Mehedi Hasan Mobin', 'RC Number', '1234', '02839984', 'Sylhet', 'jkh45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
