-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:38 PM
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
(1, 8, 21, 'Female', 'BS Computer Science undergraduate', 'SEECS,NUST', '31Dec,1999', 'Single', '+923215440543', 'Pakistan', 'Islamabad', 'H-12,NUST'),
(2, 9, 23, 'Female', 'Doctor', 'SEECS,NUST', '17Apr, 1993', 'Single', '+923314202550', 'Pakistan', 'Islamabad', 'PWD'),
(3, 10, 23, 'Female', 'Computer Scientist', 'Software house, Islamabad', '30Dec,1997', 'Single', '+923332600234', 'Pakistan', 'Islamabad', 'H-12'),
(4, 11, 20, 'Female', 'Computer Science undergraduate / sophpmore', 'SEECS,NUST', '17Apr, 2000', 'single', '+923347654233', 'Pakistan', 'Rawalpindi', 'PWD'),
(5, 12, 38, 'Female', 'Actress-filmmaker', 'Marvel', '9June, 1981', 'Married', NULL, 'Australia', 'Sydney', NULL),
(6, 16, 55, 'Male', 'Agrarian, Post- Regional Head ', 'Sungro', '18Mar,1965', 'Married', '+923215440521', 'Pakistan', 'Karachi', NULL),
(7, 18, 19, 'Male', 'Student', 'FAST Uni', '31 Dec,2000', 'Single', NULL, 'Pakistan', 'Lahore', 'Bahria Town'),
(8, 22, 25, 'Female', 'Content Writer', 'Home', '13Aug,1995', 'Married', '+923314256789', 'Pakistan', 'Isl', 'Satellite Town'),
(9, 24, 18, 'Female', 'Student', 'College', '15Feb, 2002', 'Single', NULL, 'Pakistan', 'Sahiwal', NULL),
(10, 26, 35, 'Male', 'Bussiness Man', 'Nestle', '21Apr, 1985', 'Single', NULL, 'Pakistan', 'Lahore', 'Johar Town'),
(11, 35, 22, 'Female', 'Stylist', 'Pantene', '23 Aug, 1998', 'Single', '', 'India', 'Delhi', 'Defence');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friends_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `friends` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friends_id`, `user_id`, `friends`) VALUES
(1, 8, 9),
(4, 8, 16),
(5, 9, 8),
(6, 11, 8),
(7, 12, 8),
(8, 16, 8),
(9, 9, 12),
(10, 12, 9),
(13, 9, 22),
(14, 22, 9),
(18, 24, 35),
(19, 10, 35),
(20, 35, 10),
(25, 11, 18),

(29, 12, 22),
(30, 22, 12),
(31, 12, 26),
(32, 26, 12),
(33, 16, 18),
(34, 18, 16),
(35, 16, 22),
(36, 22, 16),
(39, 18, 11),
(42, 35, 24),
(61, 10, 12),
(62, 12, 10),
(69, 9, 11),
(70, 11, 9),
(73, 9, 18),
(74, 18, 9);

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

-- --------------------------------------------------------

--

-- Table structure for table `likesnotify`
--

CREATE TABLE `likesnotify` (
  `like_id` int(12) NOT NULL,
  `post_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(12) NOT NULL,
  `userName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `stat` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `userName`, `e_mail`, `password`, `stat`, `code`) VALUES
(8, '\0N\0o\0o\0r\0 \0U\0l\0 \0A\0i\0n', 'noornasim908@gmail.com', 'asdf', 'offline', 'noorcode'),
(9, '\0H\0u\0d\0a\0 \0A\0s\0i\0f', 'hudaasif17@gmail.com', 'hudapassword', 'online', 'hudacode'),
(10, '\0N\0o\0o\0r', 'nain.bscs18seecs@seecs.edu.pk', 'nainpassword', 'offline', 'naincode'),
(11, '\0H\0u\0d\0a\0 ', 'hasif.bscs18seecs@seecs.edu.pk', 'hasifpassword', 'offline', 'hasidcode'),
(12, '\0j\0a\0n\0e\0 \0F\0o\0s\0t\0e\0r', 'janefoster@gmail.com', 'janepassword', 'online', 'janecode'),
(16, '\0A\0h\0m\0a\0d', 'ahmad@xyz.com', 'ahmadpassword', 'online', 'Ahmad.+code'),
(18, '\0h\0a\0m\0z\0a', 'hamza@xyz.com', 'hamzapassword', 'offline', 'hamza.+code'),
(22, '\0M\0a\0l\0e\0e\0h\0a\0 \0K\0h\0a\0l\0i\0d', 'maleeha@gmail.com', 'maleehapassword', 'offline', 'Maleeha Khalid code'),
(24, '\0H\0a\0f\0s\0a', 'hafsa@xyz.com', 'hafsapassword', 'offline', 'Hafsa code'),
(26, '\0H\0a\0m\0m\0a\0d', 'hammad@gmail.com', 'hammadpassword', 'offline', 'Hammad code'),
(35, 'hadia', 'hadia@xyz.com', 'hadiapassword', 'offline', 'hadia.code#2648'),
(42, 'Khansa', 'khansa@gmail.com', 'khansapassword', 'offline', 'Khansa.code#2648'),
(43, 'shahnaaz', 'shahnaaz@gmail.com', 'shahnaazpassword', 'offline', 'shahnaaz.code#2648'),
(45, 'asd', 'asd@xyz.com', 'asd', 'offline', 'asd.code#2648');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `cover_url` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `cover_url`, `profile_url`) VALUES
(1, 8, 'img/coverpic1.jpg', 'img/profile2.jpg'),
(2, 9, 'img/coverpic2.jpg', 'img/profile5.png'),
(3, 10, 'img/coverpic3.jpg', 'img/avatar.png'),
(4, 11, 'img/coverpic10.jpg', 'img/profile7.jpg'),
(5, 12, 'img/coverpic5.jpg', 'img/profile4.png'),
(6, 16, 'img/coverpic6.jpg', 'img/profile9.jpg'),
(8, 22, 'img/coverpic8.jpg', 'img/profile3.png'),
(9, 24, 'img/coverpic9.jpg', 'img/profile8.png'),
(10, 26, 'img/coverpic4.jpg', 'img/profile6.jpg'),
(11, 35, 'img/coverpic11.jpg', 'img/profile11.jpg'),
(13, 18, 'img/coverpic7.jpg', 'img/profile10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sharenotify`
--

CREATE TABLE `sharenotify` (
  `share_id` int(12) NOT NULL,
  `post_id` int(12) NOT NULL,
  `sharedby` int(12) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `likedby` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sharenotify`
--

INSERT INTO `sharenotify` (`share_id`, `post_id`, `sharedby`, `user_id`, `likedby`) VALUES
(3, 6, 8, 16, NULL),
(5, 61, 8, 16, NULL),
(6, 62, 18, 9, NULL),
(7, 91, 18, 16, NULL),
(8, 61, 18, 16, NULL),
(9, 63, NULL, 9, 8),
(10, 62, 8, 9, NULL),
(12, 65, NULL, 10, 35),
(13, 65, 35, 10, NULL);


-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post` varchar(68) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empty` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sharedBy` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `likes` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `date`, `status`, `post`, `empty`, `sharedBy`, `likes`) VALUES
(1, 8, '2020-05-12 18:02:22', 'Just another day at my workspace.\r\n#i-am-cool #workIsLife', 'posts/post1.png', NULL, NULL, 13),
(3, 10, '2020-05-12 18:03:18', '#i-am-cool #workIsLife', NULL, 'yes', NULL, NULL),
(4, 11, '2020-05-12 18:03:18', '#i-am-cool', NULL, 'yes', NULL, NULL),
(5, 12, '2020-05-12 18:04:04', 'Just another day at my workspace.', NULL, 'yes', NULL, NULL),
(6, 16, '2020-05-12 18:04:04', 'Just another day at my workspace.\r\n#i-am-cool #workIsLife', NULL, 'yes', NULL, NULL),
(8, 18, '2020-05-12 18:10:40', 'Just another day at my workspace.\r\n', NULL, 'yes', NULL, NULL),
(9, 22, '2020-05-12 18:10:40', 'Just another day at my workspace.\r\n#workIsLife', NULL, 'yes', NULL, NULL),
(10, 24, '2020-05-12 18:11:47', 'some text here. lorem ipsum dolor sit amet is a dummy text. This is a dummy site.', NULL, 'yes', NULL, NULL),
(11, 26, '2020-05-12 18:11:47', 'A Social Site.\r\nBy Nustians,\r\nNot for Nustians', NULL, 'yes', NULL, NULL),
(36, 8, '2020-05-13 15:56:31', 'Just another day At this place<br>#SEECS #NUST', 'posts/post12.jpg', NULL, NULL, 1),
(42, 8, '2020-05-13 16:38:56', 'Do you know why people like violence? It is because it feels good. Humans find violence deeply satisfying. but remove the satisfaction, and the act becomes... hollow.', NULL, 'yes', NULL, 3),
(43, 8, '2020-05-13 16:42:22', 'Dr. Stephen Strange : How do I get from here to there?<br>  The Ancient One : How did you get to reattach severed nerves and put a human spine back together bone by bone?<br>  Dr. Stephen Strange : Study and practice. Years of it.', NULL, 'yes', NULL, 1),
(44, 8, '2020-05-13 16:43:34', 'We do not need magic to transform our world. We carry all of the power we need inside ourselves already.', NULL, 'yes', NULL, 1),
(46, 8, '2020-05-13 20:35:04', 'They are currently in alien terran surrounded by millions of the most vicious creatures on the planet, HUMANS', NULL, 'yes', NULL, 1),
(52, 8, '2020-05-14 11:02:49', 'hey there!', NULL, 'yes', NULL, 1),
(55, 12, '2020-05-14 13:44:28', 'fghjk', NULL, 'yes', NULL, NULL),
(59, 12, '2020-05-14 14:18:28', 'Friends Time, with some snakes', 'posts/post9.jpg', NULL, NULL, NULL),
(60, 16, '2020-05-14 14:53:36', 'Nature', 'posts/post15.jpg', NULL, NULL, 7),
(61, 16, '2020-05-14 14:55:42', '“People often say that motivation doesn’t last. Well, neither does bathing – that’s why we recommend it daily.” ~~Zig Ziglar', NULL, 'yes', NULL, NULL),
(62, 9, '2020-05-14 16:03:03', 'About life', 'posts/post8.jpg', NULL, NULL, 6),
(63, 9, '2020-05-14 19:32:25', 'All time Favourite', 'posts/post6.jpg', NULL, NULL, 3),

(65, 10, '2020-05-14 19:38:15', 'MY First ever post', 'posts/post5.jpg', NULL, NULL, NULL),
(67, 26, '2020-05-14 19:53:12', 'VIEW<br>#beauty', 'posts/post13.jpg', NULL, NULL, NULL),
(68, 42, '2020-05-15 11:57:55', 'I am a girl, who loves to draw', NULL, 'yes', NULL, NULL),
(69, 42, '2020-05-15 11:59:34', 'HEHEHE!!!!!<br>becoz i am!!!!!<br>;\")', 'img/coverpic10.jpg', NULL, NULL, NULL),
(70, 42, '2020-05-15 12:07:44', 'Life is a circus<br>And you are doing great xD', 'img/coverpic3.jpg', NULL, NULL, NULL),
(71, 42, '2020-05-15 12:10:35', 'LOVE Nature, <br>as i think,<br>Nature LOVES us  ', 'img/gpic7.jpg', NULL, NULL, NULL),
(73, 42, '2020-05-15 12:28:26', '“Painting is poetry that is seen rather than felt, and poetry is painting that is felt rather than seen.” ~~ Leonardo da Vinci', NULL, 'yes', NULL, NULL),
(74, 42, '2020-05-15 12:30:08', 'Joy is you at the deepest level, and your joy is one with the infinite timeless joy of this unbound universe.  ~~ Robert Ellwood  ', NULL, 'yes', NULL, NULL),
(75, 42, '2020-05-15 12:38:35', 'OOPS!!!!!!!!', NULL, 'yes', NULL, NULL),
(76, 42, '2020-05-15 12:42:00', 'Happy Happy Happy !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', NULL, 'yes', NULL, NULL),

(77, 8, '2020-05-15 15:13:19', 'This is me', NULL, 'yes', NULL, NULL),
(80, 9, '2020-05-15 16:47:38', 'Do you know why people like violence? It is because it feels good. Humans find violence deeply satisfying. but remove the satisfaction, and the act becomes... hollow.', NULL, 'yes', NULL, 4),
(82, 8, '2020-05-15 18:50:53', 'Do you know why people like violence? It is because it feels good. Humans find violence deeply satisfying. but remove the satisfaction, and the act becomes... hollow.', NULL, 'yes', NULL, NULL),
(88, 9, '2020-05-15 21:59:30', 'REVERSE xD', NULL, 'yes', NULL, NULL),
(89, 8, '2020-05-16 12:46:15', 'Elite', NULL, 'yes', NULL, 3),
(90, 8, '2020-05-16 18:51:12', 'Just another day at my workspace.\r\n#i-am-cool #workIsLife', NULL, 'yes', NULL, NULL),
(91, 16, '2020-05-16 19:51:12', 'I wandered as a cloud', 'posts/post3.jpg', NULL, NULL, NULL),
(92, 8, '2020-05-16 20:11:27', '“People often say that motivation doesn’t last. Well, neither does bathing – that’s why we recommend it daily.” ~~Zig Ziglar', NULL, 'yes', NULL, NULL),
(93, 18, '2020-05-16 20:13:36', 'About life', 'posts/post8.jpg', NULL, NULL, NULL),
(94, 18, '2020-05-16 20:13:44', 'I wandered as a cloud', 'posts/post3.jpg', NULL, NULL, NULL),
(95, 18, '2020-05-16 20:13:51', '“People often say that motivation doesn’t last. Well, neither does bathing – that’s why we recommend it daily.” ~~Zig Ziglar', NULL, 'yes', NULL, NULL),
(96, 8, '2020-05-16 22:56:50', 'About life', 'posts/post8.jpg', NULL, NULL, NULL),
(107, 24, '2020-05-17 21:29:47', 'Heyyy!!!!!', NULL, 'yes', NULL, NULL),
(108, 24, '2020-05-17 21:31:04', '#lifequote', 'img/coverpic1.jpg', NULL, NULL, NULL),
(109, 35, '2020-05-17 21:40:40', 'MY First ever post', 'posts/post5.jpg', NULL, NULL, NULL);
(97, 45, '2020-05-17 11:07:28', 'WECLOME TO ELITE-A GOOD SOCIAL SITE', 'posts/welcome.jpg', NULL, NULL, NULL),
(98, 45, '2020-05-17 11:07:28', 'elite is happy to see you here:) ', NULL, 'yes', NULL, NULL);

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
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friends_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gpic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likesnotify`
--
ALTER TABLE `likesnotify`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sharenotify`
--
ALTER TABLE `sharenotify`
  ADD PRIMARY KEY (`share_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`),
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
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `friends_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;


--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gpic_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sharenotify`
--

MODIFY `share_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
MODIFY `post_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `sharenotify`
--
ALTER TABLE `sharenotify`
  ADD CONSTRAINT `sharenotify_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `user_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
