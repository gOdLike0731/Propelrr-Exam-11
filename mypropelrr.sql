-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 01:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpropelrr`
--

-- --------------------------------------------------------

--
-- Table structure for table `mypropelrr`
--

CREATE TABLE IF NOT EXISTS `mypropelrr` (
`id` int(6) unsigned NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mypropelrr`
--

INSERT INTO `mypropelrr` (`id`, `firstname`, `lastname`, `gender`, `email`, `address`, `birth_date`, `age`) VALUES
(1, 'Al Ian Paul Z. Jabian', 'none', 'Male', 'pongzulueta@gmail.com', '09663926270', '1995-03-14', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mypropelrr`
--
ALTER TABLE `mypropelrr`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mypropelrr`
--
ALTER TABLE `mypropelrr`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
