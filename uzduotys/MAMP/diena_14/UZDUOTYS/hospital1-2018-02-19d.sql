-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2018 at 09:46 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital1`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(6) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `lname`) VALUES
(1, 'Tim', 'Logan'),
(2, 'Paul', 'Elo'),
(3, 'Ona2', 'Onutaite'),
(4, 'Lita', 'Omota'),
(5, 'Koris', 'Pita'),
(6, 'Paulius', 'Paula');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(6) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `patients_id` int(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `patients_id`) VALUES
(2, 'foto.jpg', 3),
(3, '3.png', 1),
(4, 'z1.gif', 1),
(5, '5.png', 2),
(6, 'foto.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(6) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `doctor_id` int(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `lname`, `doctor_id`) VALUES
(1, 'Mark', 'Johon', 2),
(2, 'Tom', 'Karlos', 2),
(3, 'Aris', 'Tido', 1),
(4, 'Tom', 'Kira', 3),
(5, 'Co', 'John', 1),
(6, 'Tom', 'Naro', 5),
(7, 'Jili', 'Jato', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
