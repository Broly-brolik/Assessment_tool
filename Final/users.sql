-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientdalia`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `entry` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `entry`) VALUES
(4, '2');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `id` int(11) NOT NULL,
  `sub1ent1` varchar(255) NOT NULL DEFAULT '0',
  `sub1ent2` varchar(255) NOT NULL DEFAULT '0',
  `sub1ent3` varchar(255) NOT NULL DEFAULT '0',
  `sub1ent4` varchar(255) NOT NULL DEFAULT '0',
  `sub2ent1` varchar(255) NOT NULL DEFAULT '0',
  `sub2ent2` varchar(255) NOT NULL DEFAULT '0',
  `sub2ent3` varchar(255) NOT NULL DEFAULT '0',
  `sub2ent4` varchar(255) NOT NULL DEFAULT '0',
  `sub3ent1` varchar(255) NOT NULL DEFAULT '0',
  `sub3ent2` varchar(255) NOT NULL DEFAULT '0',
  `sub3ent3` varchar(255) NOT NULL DEFAULT '0',
  `sub3ent4` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`id`, `sub1ent1`, `sub1ent2`, `sub1ent3`, `sub1ent4`, `sub2ent1`, `sub2ent2`, `sub2ent3`, `sub2ent4`, `sub3ent1`, `sub3ent2`, `sub3ent3`, `sub3ent4`) VALUES
(1, '1', '1', '1', '', '1', '1', '1', '', '1', '1', '1', ''),
(2, '1', '3', '1', '', '1', '4', '1', '', '1', '4', '1', ''),
(3, '1', '1', '5', '1111', '1', '1', '5', '2222', '1', '1', '5', '3333'),
(4, '2', '3', '3', '', '3', '3', '5', '34', '2', '2', '5', '44444'),
(5, '2', '3', '3', '', '3', '3', '5', '34', '2', '2', '5', '44444'),
(6, '2', '3', '3', '', '3', '3', '5', '34', '2', '2', '5', '44444'),
(7, '2', '3', '3', '', '3', '3', '5', '34', '2', '2', '5', '44444');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `company` varchar(255) NOT NULL DEFAULT '0',
  `role` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `company`, `role`, `email`, `password`, `phone`, `created_at`) VALUES
(1, 'Role', 'Role', 'Role', 'Role', 'lefuntick@gmail.com', '$2y$04$H3Jqepf.qp7Tz458RTP4z.yT6pAZ4lSPLULZwn6yXKbkLphPMweje', '1233123', '2021-09-20 10:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
