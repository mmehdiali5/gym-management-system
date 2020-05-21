-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2020 at 08:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `dietryitems`
--

DROP TABLE IF EXISTS `dietryitems`;
CREATE TABLE IF NOT EXISTS `dietryitems` (
  `itemID` int(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dietryitems`
--

INSERT INTO `dietryitems` (`itemID`, `itemName`, `price`) VALUES
(4, 'kakaPanShop', 23);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_id` int(255) DEFAULT NULL,
  `login_id` int(255) DEFAULT NULL,
  `housenum` int(100) DEFAULT NULL,
  `stnum` int(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk` (`job_id`),
  KEY `fkjob` (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `job_id`, `login_id`, `housenum`, `stnum`, `city`) VALUES
(3, 'mehdi', 'kaskajs', 1, 2, 2, 2, 'snsmns');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

DROP TABLE IF EXISTS `gym`;
CREATE TABLE IF NOT EXISTS `gym` (
  `gymID` int(255) NOT NULL,
  `gymType` varchar(255) NOT NULL,
  `gymDescription` varchar(255) NOT NULL,
  `gymAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`gymID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`gymID`, `gymType`, `gymDescription`, `gymAddress`) VALUES
(1, 'males', 'best', 'jasdkjansd');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `emp_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice_emp_id_fk` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `description`, `emp_id`) VALUES
(4, 'payment', 3);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `type`, `description`) VALUES
(1, '2', 'updated');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

DROP TABLE IF EXISTS `login_info`;
CREATE TABLE IF NOT EXISTS `login_info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `password`) VALUES
(2, 'kaka1472', 'mehdi');

-- --------------------------------------------------------

--
-- Table structure for table `machinesandtools`
--

DROP TABLE IF EXISTS `machinesandtools`;
CREATE TABLE IF NOT EXISTS `machinesandtools` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `MID` int(255) NOT NULL,
  `MName` varchar(255) NOT NULL,
  `HouseNo` int(255) NOT NULL,
  `StreetNo` int(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `amount` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `invoice_id` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_invoice_id_fk` (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkjob` FOREIGN KEY (`login_id`) REFERENCES `login_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_emp_id_fk` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_invoice_id_fk` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
