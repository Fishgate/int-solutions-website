-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2013 at 11:02 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `integratedsolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactlogs`
--

CREATE TABLE IF NOT EXISTS `contactlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  `unix` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contactlogs`
--

INSERT INTO `contactlogs` (`id`, `name`, `number`, `email`, `message`, `date`, `unix`, `ip`) VALUES
(5, '12312321311312331223', '123312233311231', '123@!231231233123123.123', '123123123123123123123213', '26-07-2013', '1374842564', '192.168.1.11'),
(6, '123', '123', '123@123.123', '123', '26-07-2013', '1374842618', '192.168.1.11'),
(7, '123', '123', '123@123.123', '123', '26-07-2013', '1374842649', '192.168.1.11'),
(8, 'Kyle test 1', '123', 'kyle@fishgate.co.za', 'This is my message 1', '01-08-2013', '1375368374', '192.168.1.11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
