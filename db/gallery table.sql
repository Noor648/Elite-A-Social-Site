-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 01:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs344_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gpic_id` int(30) NOT NULL,
  `user_id` int(4) NOT NULL,
  `gallery_url` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gpic_id`, `user_id`, `gallery_url`) VALUES
(1, 8, 'gpic1.png'),
(2, 8, 'gpic2.png'),
(3, 8, 'gpic3.png'),
(4, 8, 'gpic4.jpg'),
(5, 8, 'gpic5.jpg'),
(17, 9, 'gpic4.jpg'),
(18, 9, 'gpic6.jpg'),
(19, 9, 'bgimg-8.jpg'),
(20, 9, 'gpic11.jpg'),
(21, 9, 'gpic10.jpg'),
(22, 9, 'gpic9.png'),
(29, 10, 'gpic10.jpg'),
(30, 10, 'gpic7.jpg'),
(31, 10, 'gpic11.jpg'),
(45, 8, 'gpic8.jpg'),
(47, 8, 'gpic7.jpg'),
(49, 11, 'gpic6.jpg'),
(50, 11, 'gpic1.png'),
(51, 11, 'coverpic5.jpg'),
(52, 11, 'gpic9.png'),
(59, 12, 'bgimg-9.jpg'),
(60, 12, 'coverpic4.jpg'),
(63, 16, 'coverpic8.jpg'),
(64, 16, 'gpic4.jpg'),
(65, 16, 'image1.jpg'),
(72, 18, 'gpic12.jpg'),
(73, 18, 'gpic2.png'),
(74, 18, 'coverpic6.jpg'),
(75, 18, 'gpic11.jpg'),
(76, 22, 'coverpic3.jpg'),
(77, 22, 'bgimg-6.jpg'),
(78, 22, 'gpic3.png'),
(79, 24, 'bgimg-7.jpg'),
(80, 24, 'coverpic1.jpg'),
(81, 26, 'gpic1.png'),
(82, 26, 'coverpic3.jpg'),
(83, 26, 'gpic12.jpg'),
(84, 35, 'gpic14.jpg'),
(85, 35, 'coverpic9.jpg'),
(86, 35, 'image1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gpic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gpic_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
