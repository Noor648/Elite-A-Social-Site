-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2020 at 05:13 PM
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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `author`, `user_to`, `message`, `time`) VALUES
(1, 10, 9, 'hii!', '2020-05-19 14:44:08'),
(2, 9, 10, 'hello', '2020-05-19 14:44:16'),
(3, 10, 9, 'testing this app!', '2020-05-19 14:44:22'),
(4, 10, 9, 'working nicely!', '2020-05-19 14:44:24'),
(5, 9, 10, 'all instant! :D', '2020-05-19 14:44:29'),
(6, 9, 10, 'made using:', '2020-05-19 14:44:33'),
(7, 9, 10, 'redux, react, wss', '2020-05-19 14:44:40'),
(8, 10, 9, 'ok, sounds cool!', '2020-05-19 14:44:46'),
(9, 10, 9, 'demo ends here', '2020-05-19 14:44:52'),
(10, 10, 9, 'nope, not here', '2020-05-19 14:44:55'),
(11, 10, 24, 'hi', '2020-05-19 14:44:59'),
(12, 10, 24, 'the messages are retained even after refresh', '2020-05-19 14:45:06'),
(13, 10, 12, 'messages are sent only to the user selected! (it\'s secure)', '2020-05-19 14:45:29'),
(14, 9, 8, 'yes! it is.', '2020-05-19 14:45:41'),
(15, 9, 10, 'Server is on port 9000, using express api.', '2020-05-19 14:45:59'),
(16, 9, 10, 'the frontend is by default :3000', '2020-05-19 14:46:09'),
(17, 9, 10, 'and web socket is 8989', '2020-05-19 14:46:19'),
(18, 10, 9, 'seems good!', '2020-05-19 14:46:25'),
(19, 10, 9, 'hi', '2020-05-19 14:51:54'),
(20, 10, 9, 'hello', '2020-05-19 14:51:58'),
(21, 10, 9, 'hi\'', '2020-05-19 14:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
