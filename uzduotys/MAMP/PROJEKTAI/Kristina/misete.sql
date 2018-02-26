-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 01:28 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misete`
--
CREATE DATABASE IF NOT EXISTS `misete` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `misete`;

-- --------------------------------------------------------

--
-- Table structure for table `apie`
--

CREATE TABLE `apie` (
  `id` int(5) NOT NULL,
  `pasisveikinimas` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prisistatymas` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(40) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `apie`
--

INSERT INTO `apie` (`id`, `pasisveikinimas`, `prisistatymas`, `img`) VALUES
(1, 'Sveiki, <br><br> aš Gvidas Diržys', 'Gimiau filmo ,,Titanikas” išleidimo metais, tačiau šis filmas daugiau nieko bendro su manimi neturi. Tačiau animacinis serialas “Drakonų kovos” turi kur kas daugiau. Jo dėka susipažinau su japoniška animacija, bei pačia Japonija. Tai paskatino mane pradėti piešti ir analizuoti japoniškus komiksus (manga) ir animaciją (anime), bei mokytis japonų kalbos. Japonų kalbos žinios nuolatos pildosi, o piešimo sugebėjimų skrynia jau nemažai prisipildė (bent jau taip mano mano mama ir panelė, ir dar brolis Adas). <br> Nuolatos iškeldamas sau naujus iššūkius dalyvauju įvairiuose komiksų piešimo konkursuose ir stengiuosi kurti naujus pasaulius juose, kuriais dabar galiu su jumis pasidalinti. Jau daugiau nei metus dirbu žurnalo “Flintas” leidykloje, kaip komikso dailininkas ir rašytojas (čia tiems, kurie nori “realios” darbo patirties “realioje” darbovietėje). O dabar prašom…', 'idphoto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `balsavimas`
--

CREATE TABLE `balsavimas` (
  `id` int(60) NOT NULL,
  `balas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `balsavimas`
--

INSERT INTO `balsavimas` (`id`, `balas`) VALUES
(2892, '3'),
(2893, '3'),
(2894, '4'),
(2895, '4'),
(2896, '4'),
(2897, '4'),
(2898, '5');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(100) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `name`, `content`) VALUES
(1, 'misete', '- GVIDO DIRŽIO JAPONIŠKŲ KOMIKSŲ GALERIJA -');

-- --------------------------------------------------------

--
-- Table structure for table `komentarai`
--

CREATE TABLE `komentarai` (
  `id` int(60) NOT NULL,
  `vardas` varchar(25) DEFAULT NULL,
  `komentaras` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `id` int(60) NOT NULL,
  `adresas` varchar(100) DEFAULT NULL,
  `telnr` varchar(15) DEFAULT NULL,
  `elpastas` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `adresas`, `telnr`, `elpastas`) VALUES
(1, ' Šaltupio 10-23, Anykščiai, Lietuva', ' +37063050717', ' gvidasdirzys@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nariai`
--

CREATE TABLE `nariai` (
  `id` int(60) NOT NULL,
  `vardas` varchar(25) DEFAULT NULL,
  `slaptazodis` varchar(20) DEFAULT NULL,
  `elpastas` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zinutes`
--

CREATE TABLE `zinutes` (
  `id` int(60) NOT NULL,
  `vardas` varchar(50) DEFAULT NULL,
  `zinute` varchar(1000) DEFAULT NULL,
  `elpastas` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apie`
--
ALTER TABLE `apie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balsavimas`
--
ALTER TABLE `balsavimas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nariai`
--
ALTER TABLE `nariai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zinutes`
--
ALTER TABLE `zinutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apie`
--
ALTER TABLE `apie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `balsavimas`
--
ALTER TABLE `balsavimas`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2899;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentarai`
--
ALTER TABLE `komentarai`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nariai`
--
ALTER TABLE `nariai`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `zinutes`
--
ALTER TABLE `zinutes`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
