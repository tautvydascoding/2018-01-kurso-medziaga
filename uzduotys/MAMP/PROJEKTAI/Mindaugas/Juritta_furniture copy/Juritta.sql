-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2018 at 05:05 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Juritta`
--
CREATE DATABASE IF NOT EXISTS `Juritta` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Juritta`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(25) NOT NULL DEFAULT 'qwerty',
  `passcode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'qwerty', 'qwertyui');

-- --------------------------------------------------------

--
-- Table structure for table `email_registration`
--

DROP TABLE IF EXISTS `email_registration`;
CREATE TABLE `email_registration` (
  `id` int(6) NOT NULL,
  `siuntejas` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `uzklausa` text NOT NULL,
  `date_creation` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_registration`
--

INSERT INTO `email_registration` (`id`, `siuntejas`, `email`, `uzklausa`, `date_creation`, `time`) VALUES
(1, 'Petras', 'piotr@gmail.com', 'tai kaip su tais baldais', '2018-02-25', '00:00:00'),
(2, 'Petras', 'piotr@gmail.com', 'tai kaip su tais baldais', '2018-02-25', '15:36:05'),
(3, 'Mindaugas', 'ruta@juritta.lt', 'stil testing', '2018-02-25', '21:08:43'),
(4, 'Piotr', 'piotr@gmail.com', ' ūųšįėėįšųū9ūųšįė', '2018-02-25', '21:19:36'),
(5, 'Tomas', 'a@a.lt', ' Kazko norejau', '2018-02-26', '03:20:55'),
(6, 'Piotr', 'a@a.lt', ' jhkjghgj', '2018-02-26', '09:31:01'),
(7, 'Tomas', 'a@a.lt', ' raso', '2018-02-26', '10:26:51'),
(8, 'jkll', 'a@a.lt', 'adadadad ', '2018-02-26', '13:33:21'),
(9, 'jkll', 'a@a.lt', 'adadadad ', '2018-02-26', '13:36:09'),
(10, 'jkll', 'a@a.lt', 'adadadad ', '2018-02-26', '13:38:48'),
(11, 'nn', 'a@a.lt', ' njj', '2018-02-26', '13:41:08'),
(12, 'njhj', 'a@a.lt', ' jhjhkjk', '2018-02-26', '13:43:18'),
(13, 'raudona', 'raudona@raudona.lt', ' raudonaite', '2018-02-26', '17:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `loginid` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `actcode` varchar(45) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `email`, `actcode`, `disabled`, `activated`) VALUES
(2, 'admin', '3c7098a2960a3f5335969768c4a3c458557d9be7', 'youremailhere', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(1) NOT NULL,
  `menu_item` varchar(20) DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  `up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_item`, `creation_date`, `up_date`) VALUES
(1, 'produktai3333', '2018-02-25', '2018-02-26'),
(2, 'paslaugos3333', '2018-02-25', '2018-02-26'),
(3, 'projektai3333', '2018-02-25', '2018-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `produktai_office`
--

DROP TABLE IF EXISTS `produktai_office`;
CREATE TABLE `produktai_office` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img_path` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `type_order` int(11) NOT NULL,
  `cr_date` date NOT NULL,
  `cr_time` time NOT NULL,
  `up_date` date NOT NULL,
  `up_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produktai_office`
--

INSERT INTO `produktai_office` (`id`, `name`, `img_path`, `description`, `type_order`, `cr_date`, `cr_time`, `up_date`, `up_time`) VALUES
(17, 'kede3', 'kede4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(18, 'kede4', 'kede5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(19, 'sofa1', 'sofa1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 2, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(20, 'sofa2', 'sofa2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 2, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(21, 'stalas1', 'stalas1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 3, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(22, 'stalas2', 'stalas2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 3, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(23, 'stalas3', 'stalas3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 3, '2018-02-25', '19:11:05', '0000-00-00', '00:00:00'),
(24, 'kede1', 'kede2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(25, 'kede2', 'kede3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(26, 'kede3', 'kede4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(27, 'kede4', 'kede5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(28, 'sofa1', 'sofa1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 2, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(29, 'sofa2', 'sofa2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 2, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(30, 'stalas1', 'stalas1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 3, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(31, 'stalas2', 'stalas2.jpg', 'lorrem22222222222a', 3, '2018-02-25', '19:35:44', '2018-02-26', '12:22:40'),
(32, 'stalas3', 'stalas3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 3, '2018-02-25', '19:35:44', '0000-00-00', '00:00:00'),
(36, 'kede1', 'kede2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,', 1, '2018-02-26', '12:06:08', '0000-00-00', '00:00:00'),
(37, 'nauja kede', 'kede2.jpg', 'naujausia', 1, '2018-02-26', '17:08:22', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'tankas', '$2y$10$IEHzqWXrF4.eOZ7zBh2.GecdEhMWs5EKpJPcvGhqIjxW2wBwo6seW', '2018-02-26 00:26:04'),
(2, 'raudonas', '$2y$10$R.EtSphi2FKi7pGVeWqL2.4Sc4x3.FX3i14qgtY9yVjGfUEHfk5qe', '2018-02-26 17:04:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_registration`
--
ALTER TABLE `email_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktai_office`
--
ALTER TABLE `produktai_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_registration`
--
ALTER TABLE `email_registration`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produktai_office`
--
ALTER TABLE `produktai_office`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
