-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 11:24 AM
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
-- Database: `articles`
--
CREATE DATABASE IF NOT EXISTS `articles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `articles`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(10) NOT NULL,
  `article_name` varchar(256) NOT NULL,
  `article` varchar(3024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_name`, `article`) VALUES
(1, 'web_dizainas', '<p class=\"h2 p-2 margin75\">\r\n        Web Dizainas\r\n    </p>\r\n    <p class=\"lead p-3 margin20\">\r\n        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n    </p>'),
(2, 'WEBprogramavimas', '<p class=\"h2 p-3 margin75\">\r\n        WEB programavimas\r\n    </p>\r\n    <p class=\"lead p-2 margin20\">\r\n        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.\r\n    </p>\r\n'),
(3, 'OriginalusTinklapiai', '<p class=\"h2 p-3 margin75\">\r\n        Originalus tinklapiai\r\n    </p>\r\n    <p class=\"lead p-2 margin20\">\r\n        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n    </p>'),
(4, 'personOne', '<p class=\"h2\">\r\n                        Person numOne\r\n                    </p>\r\n                    <p class=\"lead\">\r\n                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.\r\n                    </p>'),
(5, 'personTwo', '<p class=\"h2\">\r\n                        Person numTwo\r\n                    </p>\r\n                    <p class=\"lead\">\r\n                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.\r\n                    </p>'),
(6, 'aboutme_short', '<div class=\"col-lg-9 float_r placiau_text\">\r\n<p class=\"para\" style=\"display:none;\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.\r\n    <button class=\"placiau_btn btn btn-link\">Skaityti placiau</button>\r\n</p></div>'),
(7, 'aboutme_full', '<p class=\"para\">\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris\r\n</br>\r\n<i class=\"far fa-dot-circle\"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n</br><i class=\"far fa-dot-circle\"></i> Proin tristique justo mauris, nec vestibulum felis tempus at. \r\n</br><i class=\"far fa-dot-circle\"></i> Curabitur semper fermentum lacus eget fermentum. \r\n</br><i class=\"far fa-dot-circle\"></i> Nulla facilisi. Pellentesque non consequat nulla. \r\n</br><i class=\"far fa-dot-circle\"></i> Etiam rutrum scelerisque pellentesque. Mauris vitae condimentum ligula.\r\n</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
