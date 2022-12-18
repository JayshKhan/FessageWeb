-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 05:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fss`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FeedBack` varchar(300) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `FeedBack`, `Email`) VALUES
(1, 'Jaysh Khan', 'Hello! I liked You website very Much! Thanks', 'Jayshkhan10@gmail.com'),
(2, 'Muhammad Aaraif', 'Hello! I liked You website Thanks', 'Aaraif@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `fileName` varchar(200) NOT NULL,
  `fileType` varchar(2000) NOT NULL,
  `fileSize` int(11) NOT NULL,
  `location` text NOT NULL,
  `StoredFileName` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `type`, `name`, `time`) VALUES
(4, 1, 'Kashan', '2022-01-25 17:00:50'),
(5, 1, 'Saaqib', '2022-01-25 17:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `sentfile`
--

CREATE TABLE `sentfile` (
  `id` int(11) NOT NULL,
  `toID` int(11) NOT NULL,
  `fromID` int(11) NOT NULL,
  `fromName` varchar(100) NOT NULL,
  `fileID` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentfile`
--

INSERT INTO `sentfile` (`id`, `toID`, `fromID`, `fromName`, `fileID`, `fileName`) VALUES
(9, 33, 31, 'Jaysh Khan', 43, 'big_buck_bunny_144p_2mb.3gp'),
(10, 47, 31, 'Jaysh Khan', 43, 'big_buck_bunny_144p_2mb.3gp'),
(12, 47, 31, 'Jaysh Khan', 46, 'src.tar'),
(13, 31, 33, 'Kashan', 43, 'big_buck_bunny_144p_2mb.3gp'),
(14, 47, 31, 'Jaysh Khan', 47, 'The.F.S.S08E05.rar'),
(15, 33, 31, 'Jaysh Khan', 47, 'The.F.S.S08E05.rar'),
(16, 31, 31, 'Jaysh Khan', 47, 'The.F.S.S08E05.rar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `passwordHash` varchar(1000) NOT NULL,
  `salt` varchar(300) NOT NULL,
  `accounttype` tinyint(1) NOT NULL DEFAULT 0,
  `foldername` varchar(200) NOT NULL,
  `allowedSpace` int(11) NOT NULL DEFAULT 500000000,
  `usedSpace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `useremail`, `password`, `passwordHash`, `salt`, `accounttype`, `foldername`, `allowedSpace`, `usedSpace`) VALUES
(1, 'Admin', 'Admin@fessage.com', 'admin', '', '', 1, '', 500000000, 0),
(31, 'Jaysh Khan', 'jayshkhanmalghani10@gmail.com', 'jayshkhan', '', '', 0, 'jayshkhanmalghani10@gmail.com', 500000000, 0),
(33, 'Kashan', 'KashanAshraf@gmail.com', 'Kashan', '', '', 0, 'KashanAshraf@gmail.com', 500000000, 0),
(47, 'Aaraif', 'rahif294@gmail.com', 'Aaraif', '', '', 0, 'rahif294@gmail.com', 500000000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sentfile`
--
ALTER TABLE `sentfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sentfile`
--
ALTER TABLE `sentfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
