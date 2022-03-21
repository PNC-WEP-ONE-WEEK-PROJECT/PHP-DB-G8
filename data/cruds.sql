-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 02:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruds`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `comment_date`, `comment`, `id_user`, `id_post`) VALUES
(0, '2022-03-20 13:09:45', 'You are good looking.', 3, 67);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id_post` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id_post`, `id_user`) VALUES
(67, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `posofuser`
-- (See below for the actual view)
--
CREATE TABLE `posofuser` (
`gender_gender` varchar(1)
,`email_user` varchar(50)
,`dateofbirth_user` varchar(50)
,`name` varchar(100)
,`password_user` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `userposts`
--

CREATE TABLE `userposts` (
  `id_post` int(11) NOT NULL,
  `description_post` varchar(1000) DEFAULT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `images` varchar(225) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userposts`
--

INSERT INTO `userposts` (`id_post`, `description_post`, `date_post`, `images`, `id_user`) VALUES
(67, 'Hello, Our group will present about facebook version 2. So, let\'s start!', '2022-03-20 09:52:23', NULL, 3),
(68, ' Hello!', '2022-03-20 09:52:38', '2.png', 3),
(69, 'I am so happy this week!', '2022-03-20 09:53:37', NULL, 2),
(70, 'I am so happy this week!', '2022-03-20 09:55:18', NULL, 3),
(71, ' hi', '2022-03-20 09:55:29', 'Group 4.jpg', 3),
(72, 'I am so happy this week!', '2022-03-20 09:55:45', NULL, 3),
(75, ' sdasdsfdafd ', '2022-03-20 10:47:18', 'Group 2.jpg', 7),
(78, ' sadf ggg', '2022-03-20 11:16:34', 'IMG_0924.jpg', 7),
(83, 'Hello, Our group will present about facebook version 2. So, let\'s start!', '2022-03-20 12:24:45', NULL, 8),
(84, ' gy hg', '2022-03-20 12:33:09', 'image_2022_02_24T08_03_29_908Z.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender_gender` varchar(1) DEFAULT NULL,
  `age_user` int(11) DEFAULT NULL,
  `phonenumber_user` varchar(50) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `dateofbirth_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `gender_gender`, `age_user`, `phonenumber_user`, `email_user`, `password_user`, `dateofbirth_user`) VALUES
(2, 'Dara', 'M', NULL, NULL, 'dara@gmail.com', '123ert', NULL),
(3, 'Pheak', 'M', NULL, NULL, 'pheak@gmail.com', 'p3535', NULL),
(4, 'Dara', 'M', NULL, NULL, 'dara@gmail.com', '123ert', NULL),
(5, 'asdfgh', 'F', NULL, NULL, 'sdfghjk7654323456789', 'dfghkjdfghgjhljv', ''),
(6, 'Pheak', 'M', NULL, NULL, 'pheak@gmail.com', '567tyu', '2022-02-28'),
(7, 'a', 'F', NULL, NULL, 'dara@gmail.com', 'a', '2022-03-14'),
(8, 'sarath', 'M', NULL, NULL, 'sarath@gmail.com', '1234', '2022-03-23'),
(9, ' Star', 'M', NULL, NULL, 'star@gmail.com', '1234d', '');

-- --------------------------------------------------------

--
-- Structure for view `posofuser`
--
DROP TABLE IF EXISTS `posofuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `posofuser`  AS SELECT `users`.`gender_gender` AS `gender_gender`, `users`.`email_user` AS `email_user`, `users`.`dateofbirth_user` AS `dateofbirth_user`, `users`.`name` AS `name`, `users`.`password_user` AS `password_user` FROM (`users` join `userposts` on(`userposts`.`id_user` = `users`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `userposts`
--
ALTER TABLE `userposts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userposts`
--
ALTER TABLE `userposts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `userposts` (`id_post`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `userposts` (`id_post`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `userposts`
--
ALTER TABLE `userposts`
  ADD CONSTRAINT `userposts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
