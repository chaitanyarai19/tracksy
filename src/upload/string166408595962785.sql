-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2022 at 07:12 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood33a_tracksy`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `sno` int(11) NOT NULL,
  `course_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`sno`, `course_name`, `subject`, `admin_id`) VALUES
(3, 'Computer Science', 'OOPM', 0),
(5, '', 'CPP', 0),
(6, '', 'C', 5),
(7, '', 'oopm', 6),
(8, '', 'DBMS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `sno` int(11) NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`sno`, `subject`, `admin_id`) VALUES
(1, 'oopm', 5),
(3, 'cpp', 5),
(4, 'DBMS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `resource_data`
--

CREATE TABLE `resource_data` (
  `sno` int(11) NOT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resource_data`
--

INSERT INTO `resource_data` (`sno`, `file`, `resource_id`) VALUES
(1, 'oopm166403367021456.xlsx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `docs` text COLLATE utf8_unicode_ci,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `docs`, `subject_id`) VALUES
(6, 'Inheritance', 'inheritance166399606497195.zip', 3),
(11, 'class', NULL, 3),
(12, 'object', NULL, 3),
(13, 'c', NULL, 3),
(15, 'Variables', NULL, 6),
(16, 'Inheritance', 'inheritance166403842238271.zip', 7),
(17, 'Class', 'class166404195895882.pptx', 7),
(18, 'object', NULL, 7),
(19, 'Encapsulation', NULL, 7),
(20, 'Keys', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `type`) VALUES
(4, 'Manish Sah', 'manish.sah.cs19@ggits.net', '0951833082', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL),
(5, 'Vishal enterprise', 'msah74915@gmail.com', '0951833082', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL),
(6, 'Chaitanya Rai', 'chaitanyarai19@gmail.com', '8435407793', '8cb2237d0679ca88db6464eac60da96345513964', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `resource_data`
--
ALTER TABLE `resource_data`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resource_data`
--
ALTER TABLE `resource_data`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
