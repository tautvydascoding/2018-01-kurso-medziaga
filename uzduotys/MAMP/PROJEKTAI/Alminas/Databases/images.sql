-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 11:26 AM
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
-- Database: `images`
--
CREATE DATABASE IF NOT EXISTS `images` DEFAULT CHARACTER SET utf32 COLLATE utf32_general_ci;
USE `images`;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `image_name` varchar(256) NOT NULL,
  `image_src` varchar(256) NOT NULL,
  `thumb_src` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `image_src`, `thumb_src`) VALUES
(1, 'img1', 'images/gallery/img1.jpg', 'images/gallery/img1_thumb.jpg'),
(2, 'img2', 'images/gallery/img2.jpg', 'images/gallery/img2_thumb.jpg'),
(3, 'img3', 'images/gallery/img3.jpg', 'images/gallery/img3_thumb.jpg'),
(4, 'img4', 'images/gallery/img4.jpg', 'images/gallery/img4_thumb.jpg'),
(5, 'img5', 'images/gallery/img5.jpg', 'images/gallery/img5_thumb.jpg'),
(6, 'img6', 'images/gallery/img6.jpg', 'images/gallery/img6_thumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
