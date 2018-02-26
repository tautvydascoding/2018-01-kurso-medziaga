-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 09:16 AM
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
-- Database: `projektas_1`
--
CREATE DATABASE IF NOT EXISTS `projektas_1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projektas_1`;

-- --------------------------------------------------------

--
-- Table structure for table `coaching`
--

CREATE TABLE `coaching` (
  `id` int(11) NOT NULL,
  `vardas` varchar(100) DEFAULT NULL,
  `pavarde` varchar(100) DEFAULT NULL,
  `telefonas` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coaching`
--

INSERT INTO `coaching` (`id`, `vardas`, `pavarde`, `telefonas`, `email`) VALUES
(1, '$vardas', '$pavarde', '$telefonas', '$email'),
(2, '', '', '', 'pavyko'),
(3, 'aaaa', 'aaaa', 'aaaa', 'pavyko'),
(4, 'asdfdsafsad', 'Veleckas', '324444444444', 'geras@gmail.com'),
(5, 'labas', 'krabas', 'asdlfjsldak', 'sdlkfasd@asdfasdf'),
(6, 'kasd cia krabas', 'ASDAS', 'asdasd', 'ASDFASD@ASDAS'),
(7, 'paskutinis', 'bandymas', '98791237989', 'geras@gmail.com'),
(8, 'asdfdsafsad', 'ASDAS', '324444444444', 'gerulis123@protonmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(11) NOT NULL,
  `vardas` varchar(100) DEFAULT NULL,
  `pavarde` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `zinute` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`id`, `vardas`, `pavarde`, `email`, `zinute`) VALUES
(1, 'Simas', 'Velckas', 'simas@gmail.com', 'viskas veikias'),
(2, 'Simas', 'Velckas', 'simas@gmail.com', 'viskas veikias'),
(3, 'pirmas', 'badymas', 'ASDFASD@ASDAS', 'gal pavyks'),
(4, 'Simas', 'Velckas', 'simas@gmail.com', 'viskas veikias'),
(5, 'Simas', 'Velckas', 'simas@gmail.com', 'viskas veikias'),
(6, 'antras', 'badymas', 'ASDFASD@ASDAS', 'gal pavyks'),
(7, 'Simas', 'Velckas', 'simas@gmail.com', 'viskas veikias'),
(8, 'trecias', 'badymas', 'ASDFASD@ASDAS', 'gal pavyks'),
(9, 'labas', 'galveikia', 'sadasd@asdsad', 'alkfaslkdlksn'),
(10, 'asdfdsafsad', 'ASDAS', 'ASDFASD@ASDAS', 'asdas'),
(11, 'paskutinis', 'pavyko', 'gerulis123@protonmail.com', 'gal jau galiu eit gult'),
(12, 'Simas', 'ASDAS', 'gerulis123@protonmail.com', 'thax man');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `vardas` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `vardas`, `email`) VALUES
(1, 'asdas', 'asdas@asdasd'),
(2, 'asdasd', 'asdfa12asd@sadcv'),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, 'asdas', 'asdfa12asd@sadcv'),
(8, 'asdas', 'asdas@asdasd'),
(9, 'asdas', 'asdas@asdasd'),
(10, '', ''),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, 'labas', 'krabas@gmail.com'),
(21, 'asdfa', 'asdfa12asd@sadcv'),
(22, '', ''),
(23, 'asdasd', 'asdfa12asd@sadcv'),
(24, '', ''),
(25, 'asdasd', 'asdfa12asd@sadcv'),
(26, '', ''),
(27, '', ''),
(28, '', ''),
(29, '', ''),
(30, '', ''),
(31, '', ''),
(32, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `antraste` varchar(1000) DEFAULT NULL,
  `paragrafas_1` varchar(10000) DEFAULT NULL,
  `paragrafas_2` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `antraste`, `paragrafas_1`, `paragrafas_2`) VALUES
(1, 'LEARN TO MOVE', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem omnis accusamus quibusdam error delectus a doloribus, quia repellat earum libero temporibus, cumque vel laudantium recusandae dignissimos optio nemo nostrum! Suscipit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum numquam mollitia quibusdam dignissimos corrupti quidem dolore, recusandae cum tenetur delectus minima quam ad, porro magni nihil pariatur, ducimus suscipit? Labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consectetur ratione dolore sunt sequi eos. Est assumenda quis debitis voluptatibus! Assumenda aliquid cum sunt ipsum numquam beatae natus consectetur vel! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus beatae nobis perspiciatis cum itaque, nisi iure at quasi aperiam, dicta maiores non architecto sint eum ab assumenda. Tempore, similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit ab necessitatibus. Tempore adipisci aspernatur, quas minima pariatur perspiciatis nulla dolorem quia, commodi quam ipsa earum nobis natus nam. Laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit velit in aperiam, delectus odit quam, maiores illo ad ex porro fugit reiciendis et odio magnam eius deleniti veniam, veritatis laboriosam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex repellendus voluptatum ducimus non, dolorum repellat neque officia ut nulla unde dolorem corrupti architecto magnam nemo fuga. Cum id eligendi fuga.', ''),
(2, 'ADULT PROGRAMS', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem omnis accusamus quibusdam error delectus a doloribus, quia repellat earum libero temporibus, cumque vel laudantium recusandae dignissimos optio nemo nostrum! Suscipit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum numquam mollitia quibusdam dignissimos corrupti quidem dolore, recusandae cum tenetur delectus minima quam ad, porro magni nihil pariatur, ducimus suscipit? Labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consectetur ratione dolore sunt sequi eos. Est assumenda quis debitis voluptatibus! Assumenda aliquid cum sunt ipsum numquam beatae natus consectetur vel! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus beatae nobis perspiciatis cum itaque, nisi iure at quasi aperiam, dicta maiores non architecto sint eum ab assumenda. Tempore, similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit ab necessitatibus. Tempore adipisci aspernatur, quas minima pariatur perspiciatis nulla dolorem quia, commodi quam ipsa earum nobis natus nam. Laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit velit in aperiam, delectus odit quam, maiores illo ad ex porro fugit reiciendis et odio magnam eius deleniti veniam, veritatis laboriosam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex repellendus voluptatum ducimus non, dolorum repellat neque officia ut nulla unde dolorem corrupti architecto magnam nemo fuga. Cum id eligendi fuga.', ''),
(3, 'JUNIOR PROGRAMS', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem omnis accusamus quibusdam error delectus a doloribus, quia repellat earum libero temporibus, cumque vel laudantium recusandae dignissimos optio nemo nostrum! Suscipit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum numquam mollitia quibusdam dignissimos corrupti quidem dolore, recusandae cum tenetur delectus minima quam ad, porro magni nihil pariatur, ducimus suscipit? Labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consectetur ratione dolore sunt sequi eos. Est assumenda quis debitis voluptatibus! Assumenda aliquid cum sunt ipsum numquam beatae natus consectetur vel! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus beatae nobis perspiciatis cum itaque, nisi iure at quasi aperiam, dicta maiores non architecto sint eum ab assumenda. Tempore, similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit ab necessitatibus. Tempore adipisci aspernatur, quas minima pariatur perspiciatis nulla dolorem quia, commodi quam ipsa earum nobis natus nam. Laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit velit in aperiam, delectus odit quam, maiores illo ad ex porro fugit reiciendis et odio magnam eius deleniti veniam, veritatis laboriosam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex repellendus voluptatum ducimus non, dolorum repellat neque officia ut nulla unde dolorem corrupti architecto magnam nemo fuga. Cum id eligendi fuga.', ''),
(4, 'WORKSHOPS', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem omnis accusamus quibusdam error delectus a doloribus, quia repellat earum libero temporibus, cumque vel laudantium recusandae dignissimos optio nemo nostrum! Suscipit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum numquam mollitia quibusdam dignissimos corrupti quidem dolore, recusandae cum tenetur delectus minima quam ad, porro magni nihil pariatur, ducimus suscipit? Labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consectetur ratione dolore sunt sequi eos. Est assumenda quis debitis voluptatibus! Assumenda aliquid cum sunt ipsum numquam beatae natus consectetur vel! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus beatae nobis perspiciatis cum itaque, nisi iure at quasi aperiam, dicta maiores non architecto sint eum ab assumenda. Tempore, similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit ab necessitatibus. Tempore adipisci aspernatur, quas minima pariatur perspiciatis nulla dolorem quia, commodi quam ipsa earum nobis natus nam. Laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit velit in aperiam, delectus odit quam, maiores illo ad ex porro fugit reiciendis et odio magnam eius deleniti veniam, veritatis laboriosam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex repellendus voluptatum ducimus non, dolorum repellat neque officia ut nulla unde dolorem corrupti architecto magnam nemo fuga. Cum id eligendi fuga.', ''),
(5, 'DAILY WORKOUTS', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem omnis accusamus quibusdam error delectus a doloribus, quia repellat earum libero temporibus, cumque vel laudantium recusandae dignissimos optio nemo nostrum! Suscipit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum numquam mollitia quibusdam dignissimos corrupti quidem dolore, recusandae cum tenetur delectus minima quam ad, porro magni nihil pariatur, ducimus suscipit? Labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consectetur ratione dolore sunt sequi eos. Est assumenda quis debitis voluptatibus! Assumenda aliquid cum sunt ipsum numquam beatae natus consectetur vel! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellendus beatae nobis perspiciatis cum itaque, nisi iure at quasi aperiam, dicta maiores non architecto sint eum ab assumenda. Tempore, similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non odit ab necessitatibus. Tempore adipisci aspernatur, quas minima pariatur perspiciatis nulla dolorem quia, commodi quam ipsa earum nobis natus nam. Laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit velit in aperiam, delectus odit quam, maiores illo ad ex porro fugit reiciendis et odio magnam eius deleniti veniam, veritatis laboriosam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex repellendus voluptatum ducimus non, dolorum repellat neque officia ut nulla unde dolorem corrupti architecto magnam nemo fuga. Cum id eligendi fuga.', ''),
(6, 'YOUR CONTACT INFORMATION HAVE BEEN RECIEVED', 'We will contact with you as soon as possible', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `vardas` varchar(50) DEFAULT NULL,
  `pavarde` varchar(50) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `telefonas` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `vardas`, `pavarde`, `user`, `password`, `telefonas`, `email`) VALUES
(1, 'Simas', 'Veleckas', 'admin', 'admin', '8769938898', 'gerulis123@protonmail.com'),
(2, 'asdfdsafsad', 'asd', 'admin', 'asdasd', 'asdasd', 'gerulis123@protonmail.com'),
(3, 'asdfdsafsad', 'ASDAS', 'admin', 'asdasd', '324444444444', 'gerulis123@protonmail.com'),
(4, 'asdfdsafsad', 'ASDAS', 'neadmin', 'admin', 'askljhda', 'gerulis123@protonmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaching`
--
ALTER TABLE `coaching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaching`
--
ALTER TABLE `coaching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
