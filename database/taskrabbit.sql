-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 12:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskrabbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(6) UNSIGNED NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `industry` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `job_type` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip_code` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `job_responsibilities` varchar(256) NOT NULL,
  `skill_requirments` varchar(256) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp
) ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `salary`, `industry`, `category`, `job_type`, `address`, `city`, `state`, `country`, `zip_code`, `telephone`, `email`, `job_responsibilities`, `skill_requirments`, `reg_date`) VALUES
(1, 'computer', '23232', 'ok', 'ok2', 'Part-time', 'LIG 1320/A Phase 10 Mohali, Pu', 'SAS Nagar, Mohali', 'Punjab', 'India', '160062', '07009966917', 'princelakhwan41@gmail.com', 'kokokoko', 'nonono', '2022-10-05 09:17:54'),
(2, 'UI UX Designer', '10000', 'IT Company', 'Designer', 'Part-time', 'LIG 1320/A Phase 10 Mohali, Pu', 'SAS Nagar, Mohali', 'Punjab', 'India', '160062', '7009966917', 'princelakhwan41@gmail.com', 'You have to design the social media posts every week. You must be available everytime, you have to design the videos and instagram reels with youTube shorts.', 'UI UX Designer, should know the basics of Adobe XD, Adobe Photoshop, Figma, etc.\r\nShould know how to design posts for an IT Company\r\n', '2022-10-05 10:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Upender Singh Lakhwan', 'lakhwanus009@gmail.com', 'ea2151bd31f8b71c167783fbd75f776681374525d7004bbbdaa2fa1bc7ad6879'),
(2, 'Upender Singh Lakhwan', 'princelakhwan41@gmail.com', 'ea2151bd31f8b71c167783fbd75f776681374525d7004bbbdaa2fa1bc7ad6879');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
