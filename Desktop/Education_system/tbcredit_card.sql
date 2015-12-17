-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2015 at 10:33 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `education_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcredit_card`
--

CREATE TABLE IF NOT EXISTS `tbcredit_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(23) NOT NULL,
  `age` varchar(24) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `nationality` varchar(26) NOT NULL,
  `tel` varchar(27) NOT NULL,
  `email` varchar(26) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `fee` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tbcredit_card`
--

INSERT INTO `tbcredit_card` (`id`, `name`, `age`, `gender`, `nationality`, `tel`, `email`, `faculty`, `fee`) VALUES
(1, 'b', '', 'Male', 'uganda', '+23545444566', 'dahir@gmail.com', '', ''),
(2, 'mohamed', '22', 'Male', 'uganda', '+256791346044', 'mohamed@hotmail.com', '', '1000000ug'),
(3, 'abdi kadir', '33', 'Male', 'uganda', '+23545444522', 'abdi@gmail.com', '', '1000000ug'),
(5, 'ali', '33', 'Male', 'uganda', '+23545444500', 'ali@gmail.com', '', '1000000ug'),
(10, 'awale', '22', 'Male', 'uganda', '+256791346030', 'awale@hotmail.com', 'bait', '1000000ug'),
(13, 'halima', '33', 'Female', 'uganda', '+256791346057', 'halima@hotmail.com', 'bait', '1000000ug'),
(14, 'ali', '33', 'Male', 'uganda', '+256791346033', 'ali@hotmail.com', 'bait', '1200000'),
(43, '', '', '', '', '', '', '', ''),
(47, 'moh', '22', 'Male', 'uganda', '1511612', 'said@gmail.com', '', '1000000ug'),
(50, 'dahir', '22', 'Male', 'uganda', '+256791346090', 'dalasaa@hotmail.com', '', '1000000ug');
