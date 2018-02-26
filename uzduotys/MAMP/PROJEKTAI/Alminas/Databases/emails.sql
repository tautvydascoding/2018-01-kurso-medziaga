-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 11:25 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emails`
--
CREATE DATABASE IF NOT EXISTS `emails` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emails`;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `vardas` varchar(256) NOT NULL,
  `telnr` varchar(256) NOT NULL,
  `emailas` varchar(256) NOT NULL,
  `zinute` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `vardas`, `telnr`, `emailas`, `zinute`) VALUES
(1, 'Alminas', '867271744', 'alminas.st@gmail.com', 'kada startuosit?'),
(2, 'asd', '6445465465', 'alminas.st@gmail.com', 'asd'),
(3, 'asdasd', '867285648', 'alminas.st@gmail.com', 'asd'),
(4, 'asdasd', '865768786', 'alminas.st@gmail.com', 'asdasdasd'),
(5, 'Tomas', '867271765', 'tomas@gmail.com', 'Some random text.'),
(6, 'Tomast', '4654654654', 'tomas@gmail.com', 'asd'),
(7, 'admin', '555555555555555', 'alminas.st@gmail.com', '555555555'),
(8, 'admin', '55555555555555555555555555555555', 'alminas.st@gmail.com', '555555555'),
(9, 'admin', '867271744', 'alminas.st@gmail.com', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.'),
(10, 'admin', '867271741', 'alminas.st@gmail.com', 'random text');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
