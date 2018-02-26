-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 02:58 PM
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
-- Database: `giraitestr`
--
CREATE DATABASE IF NOT EXISTS `giraitestr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `giraitestr`;

-- --------------------------------------------------------

--
-- Table structure for table `email duomenys`
--

CREATE TABLE `email duomenys` (
  `vardas` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `klausimas` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email duomenys`
--

INSERT INTO `email duomenys` (`vardas`, `email`, `klausimas`) VALUES
('Jonas', 'abcde@abc.lt', 'ka paklausti'),
('tomas', 'fsda@fsdaf.lt', 'fnert svw ga gbtreb');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(6) NOT NULL,
  `pav` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `pav`) VALUES
(1, 'main'),
(2, 'about'),
(3, 'contacts');

-- --------------------------------------------------------

--
-- Table structure for table `paveiksliukai`
--

CREATE TABLE `paveiksliukai` (
  `id` int(6) NOT NULL,
  `pavadinimas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paveiksliukai`
--

INSERT INTO `paveiksliukai` (`id`, `pavadinimas`) VALUES
(1, '6.jpg'),
(2, '7.jpg'),
(3, '8.jpg'),
(4, '9.jpg'),
(5, 'auto.png'),
(6, 'fon.jpg'),
(7, 'fon1.jpg'),
(8, 'fon2.jpg'),
(9, 'fon3.jpg'),
(10, 'road1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email duomenys`
--
ALTER TABLE `email duomenys`
  ADD UNIQUE KEY `vardas_2` (`vardas`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `vardas` (`vardas`),
  ADD KEY `vardas_3` (`vardas`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paveiksliukai`
--
ALTER TABLE `paveiksliukai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paveiksliukai`
--
ALTER TABLE `paveiksliukai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
