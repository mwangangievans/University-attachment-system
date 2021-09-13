-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2015 at 05:26 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `industrial_attachment_db`
--
CREATE DATABASE IF NOT EXISTS `industrial_attachment_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `industrial_attachment_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `admin_type` varchar(25) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`, `firstname`, `lastname`, `admin_type`) VALUES
(1, 'musyimi', '827ccb0eea8a706c4c34a16891f84e7b', 'kioko', 'ken', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dept` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `period` varchar(15) NOT NULL,
  `firm_name` varchar(20) NOT NULL,
  `firm_address` varchar(15) NOT NULL,
  `county` varchar(15) NOT NULL,
  `location` varchar(25) NOT NULL,
  `letter` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `dept`, `fname`, `mname`, `lname`, `regno`, `phone`, `email`, `period`, `firm_name`, `firm_address`, `county`, `location`, `letter`) VALUES
(1, 'computing and IT', 'DOREEN', 'WANYAMA', 'KWAMBOKA', 'BSIT/071J/2012', '522', 'matchete@gmail', 'May - Aug', 'ff', 'fff', 'bomet', '8555', ''),
(21, 'computing and IT', 'ANTONY', 'OWALLA', 'MACHETE', 'BSIT/0014/2012', '0715458695', 'machete@gmail.com', 'May - Aug', ' safaricom ', '252', 'nairobi', 'CITY SQ', ''),
(22, 'computing and IT', 'VICTOR', 'BETT', 'KIPYEGON', 'BSIT/061J/2012', '0702598521', 'vibett@gmail.com', 'May - Aug', '   WHITESANDS ', '7844', 'narok', 'KIGORO', ''),
(23, 'computing and IT', 'ALEX ', 'MWENDWA', 'NZIOKA', 'BSIT/055J/2012', '0715247546', 'amwe4@gmail.com', 'May - Aug', '   sadolin   ', '8757', 'nairobi', 'citysq', ''),
(24, 'computing and IT', 'ALEX ', 'MWENDWA', 'NZIOKA', 'BSIT/055J/2012', '0702598521', 'amwe4@gmail.com', 'Jan - April', '  SOT-DAIRY', '89900', 'bomet', 'KEMBU', ''),
(25, 'computing and IT', 'ALEX ', 'MWENDWA', 'NZIOKA', 'BSIT/055J/2012', '0725488736', 'amwe4@gmail.com', 'Sep - Dec', '  KELUNET', '3322', 'kisii', 'NYAMIRA', ''),
(26, 'computing and IT', 'KEVA ', 'OKARI', 'OKUTU', 'BSIT/052/2012', '0704624907', 'keva@gmail.com', 'May - Aug', 'KEMRI', '3232', 'makueni', 'KIKOOO', ''),
(27, 'computing and IT', 'KEVA ', 'OKARI', 'OKUTU', 'BSIT/052/2012', '07344527772', 'keva@gmail.com', 'Sep - Dec', '  NHIF', '222', 'nairobi', 'CITY SQ', ''),
(28, 'computing and IT', 'KAROLI', 'OILE', 'INNOCENT', 'BSIT/047J/2012', '0732154248', 'karoli@gmail.com', 'May - Aug', '  NSIS', '232', 'moyale', 'KIPIPIRI', ''),
(29, 'maths and physics', 'MARTIN', 'MWENDWA', 'KASINA', 'BSIT/074J/2012', '0725488736', 'morris@gmail.com', 'May - Aug', 'KARI', '85', 'nairobi', 'eastie', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dept` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `dept`, `fname`, `mname`, `lname`, `regno`, `password`) VALUES
(1, 'maths and physics', 'VICTOR', 'BETT', 'KIPYEGON', 'BSIT/061J/2012', 'a7c91effc65ae89157af4c094880d099'),
(18, 'maths and physics', 'MARTIN', 'MWENDWA', 'KASINA', 'BSIT/074J/2012', '081d850bbd842921a2fec95f502df2bc'),
(19, 'maths and physics', 'ALEX ', 'MWENDWA', 'NZIOKA', 'BSIT/055J/2012', 'a584bda1be89fcd22e05ae8848dee05c'),
(20, 'computing and IT', 'MWANIKI', 'MURIITHI', 'DANIEL', 'BSIT/076J/2012', '15eea1d25632ce18418f65caa7e68180'),
(21, 'computing and IT', 'DOREEN', 'WANYAMA', 'IKATITI', 'BSIT/071J/2012', 'b976834dc0d618d8fb1283c04a16460d'),
(22, 'computing and IT', 'KEVA ', 'OKARI', 'OKUTU', 'BSIT/052/2012', 'fe9d8615e35aa18742c5a004d9cfb917'),
(23, 'computing and IT', 'CAROLINE', 'WAMBUI', 'BOBO', 'BSIT/006J/2012', '5a1678ce124570e9196820e63544785d'),
(24, 'computing and IT', 'CYTHIA', 'SIMIYU', 'OUMA', 'BSIT/029J/2012', '50f269e528259424ffbeb55f9f3b3c3f'),
(25, 'computing and IT', 'KAROLI', 'OILE', 'INNOCENT', 'BSIT/047J/2012', '293ebc63ab8aadccfe392a72c550d040'),
(26, 'computing and IT', 'ANTONY', 'OWALLA', 'MACHETE', 'BSIT/0014/2012', '20a46a2a3b0fb4d201b6d3b05c2bd44f'),
(27, 'maths and physics', 'WAFULA', 'MOSES', 'OYOO', 'BMS/009J/2012', 'f87bb4e2f3ee47fe72634c5378056e0a'),
(28, 'business ', 'ken', 'ngetich', 'kipchumba', 'BBA/045J/2011', '5cc138127a1d97d8febdf1366c41032c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
