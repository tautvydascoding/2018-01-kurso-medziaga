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
-- Database: `comments`
--
CREATE DATABASE IF NOT EXISTS `comments` DEFAULT CHARACTER SET utf32 COLLATE utf32_general_ci;
USE `comments`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `message`, `date`) VALUES
(1, 'Daniel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDuis scelerisque ligula a eros pulvinar, non lobortis nibh eleifend.\r\nNam ac neque eu odio pellentesque rhoncus.\r\nSuspendisse tincidunt massa id sapien cursus sagittis.', '2018-02-16 11:00:00'),
(2, 'Marcus', 'Morbi non lacus sit amet justo cursus pellentesque quis vitae nisi.\r\nNam vel nisl sit amet urna consectetur accumsan.\r\nMorbi vel nunc egestas, facilisis est lacinia, maximus arcu.\r\nCurabitur non sapien eget odio hendrerit congu', '2018-02-22 23:00:00'),
(3, 'Martynas', 'Quisque id dolor finibus libero dictum congue.\r\nNunc dictum tellus non luctus viverra.\r\nDonec at lectus ac sem commodo interdum.', '2018-02-27 10:16:00'),
(4, 'Tomas', 'Praesent suscipit ante posuere eros cursus, a eleifend metus aliquet.\r\nMaecenas blandit nisi quis dui ultrices vehicula.\r\nNullam venenatis dolor sit amet lacus gravida, eget rutrum purus interdum.\r\nSed bibendum enim in libero condimentum iaculis.\r\nPraesent', '2018-02-14 07:14:23'),
(5, 'Tadas', 'Donec vitae ex id velit ultrices iaculis sit amet et sapien.\r\nDonec hendrerit enim id velit aliquet varius nec non sapien.\r\nVestibulum maximus arcu maximus mauris pharetra scelerisque.\r\nCurabitur ac tortor id nisl sollicitudin rutrum ac quis nisi.', '2018-02-15 07:20:31'),
(6, 'Lawson', 'Aenean id felis scelerisque, tempus sapien eget, luctus nulla.\r\nIn non massa sit amet mi tincidunt viverra id sed libero.\r\nDonec posuere felis in nisi euismod, vitae consequat ante pellentesque.', '2018-02-15 05:18:15'),
(7, 'Markannen', 'Nullam sodales urna ut ligula egestas porta.\r\nNulla ac nisi sagittis, faucibus diam sed, facilisis massa.\r\nSuspendisse at dui eleifend, tempor mauris hendrerit, suscipit augue.', '2018-02-23 10:16:16'),
(8, 'Tomas', 'Nulla at diam quis elit mattis dapibus sit amet et diam.\r\nCurabitur non neque sagittis, accumsan risus id, sagittis nulla.\r\nPellentesque vel sapien at ex pellentesque interdum eget ac urna.\r\nCras pharetra odio eu egestas consequat.\r\nUt eget tellus sceleris', '2018-02-23 07:12:23'),
(9, 'Karolis', 'Donec fringilla mauris in eros tempor ultricies.\r\nMaecenas rhoncus lorem quis congue viverra.\r\nSuspendisse at sapien sollicitudin, convallis massa eget, mattis purus.\r\nAenean consequat mauris sed augue efficitur, a iaculis mauris condimentum.\r\nVestibulum i', '2018-02-23 08:14:00'),
(10, 'Andrius', 'Suspendisse non magna vel augue pharetra euismod.', '2018-02-24 14:26:16'),
(11, 'Alminas', 'Praesent at eleifend massa, vel dapibus quam. Mauris leo erat, eleifend vel volutpat nec, lobortis quis nisl. In mollis pellentesque mollis. Donec aliquam, augue vel elementum pulvinar, urna est pretium dolor, nec volutpat elit metus eget urna. Fusce sed malesuada libero. Phasellus justo risus, pretium sit amet nulla ut, gravida dictum risus. Curabitur neque elit, placerat nec odio nec, tincidunt mollis nisl. Phasellus semper, ligul', '2018-02-24 21:19:37'),
(12, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt felis at massa cursus, nec scelerisque orci bibendum. Fusce vulputate magna euismod rhoncus vulputate. Maecenas urna massa, cursus ac vulputate et, dictum sit amet ligula. Vivamus faucibus lorem at euismod rhoncus. Nunc cursus fermentum erat, in condimentum ligula efficitur quis. Sed tempus ex metus, sed sagittis dui finibus ut. Vestibulum imperdiet rhoncus eros, vel laoreet mauris vestibulum in. Curabitur dignissim lectus in magna porta vestibulum. Fusce pellentesque lacus sed venenatis porta.', '2018-02-25 17:37:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
