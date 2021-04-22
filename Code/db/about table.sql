-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 03:24 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(6) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `work_as` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `works_at` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `user_id`, `age`, `gender`, `work_as`, `works_at`, `dob`, `status`, `number`, `country`, `city`, `address`) VALUES
(1, 8, 20, 'Female', 'BS Computer Science undergraduate', 'SEECS,NUST', '31Dec,1999', 'Single', '+923215440543', 'Pakistan', 'Islamabad', 'H-12,NUST'),
(2, 9, 23, 'Female', 'Doctor', 'SEECS,NUST', '17Apr, 1993', 'Single', '+923314202550', 'Pakistan', 'Islamabad', 'PWD'),
(3, 10, 23, 'Female', 'Computer Scientist', 'Software house, Islamabad', '30Dec,1997', 'Single', '+923332600234', 'Pakistan', 'Islamabad', 'H-12'),
(4, 11, 20, 'Female', 'Computer Science undergraduate / sophpmore', 'SEECS,NUST', '17Apr, 2000', 'single', '+923347654233', 'Pakistan', 'Rawalpindi', 'PWD'),
(5, 12, 38, 'Female', 'Actress-filmmaker', 'Marvel', '9June, 1981', 'Married', NULL, 'Australia', 'Sydney', NULL),
(6, 16, 55, 'Male', 'Agrarian, Post- Regional Head ', 'Sungro', '18Mar,1965', 'Married', '+923215440521', 'Pakistan', 'Karachi', NULL),
(7, 18, 19, 'Male', 'Student', 'FAST Uni', '31 Dec,2000', 'Single', NULL, 'Pakistan', 'Lahore', 'Bahria Town'),
(8, 22, 25, 'Female', 'Content Writer', 'Home', '13Aug,1995', 'Married', '+923314256789', 'Pakistan', 'Isl', 'Satellite Town'),
(9, 24, 18, 'Female', 'Student', 'College', '15Feb, 2002', 'Single', NULL, 'Pakistan', 'Sahiwal', NULL),
(10, 26, 35, 'Male', 'Bussiness Man', 'Nestle', '21Apr, 1985', 'Single', NULL, 'Pakistan', 'Lahore', 'Johar Town'),
(11, 35, 22, 'Female', 'Stylist', 'Pantene', '23 Aug, 1998', 'Single', '', 'India', 'Delhi', 'Defence'),
(19, 9, 0, 'bla', '', 'Home', 'bla', '', '', 'bla', 'bla', ''),
(20, 9, 28, 'Female', 'bla', 'Home', '13 Aug,20', 'bla', '03334256789', 'Pakistan', 'Isl', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
