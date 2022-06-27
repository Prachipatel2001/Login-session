-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 12:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waf`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` text NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  `isDeleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `uname`, `password`, `phone_no`, `gender`, `dob`, `isDeleted`) VALUES
(2, 'user2', 'user2@gmail.com', 'user2', '7e58d63b60197ceb55a1c487989a3720', '214748364', 'M', '5055-10-01', 1),
(3, 'user3', 'user3@gmail.com', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', '456789123', 'F', '2012-06-25', 0),
(5, 'user5', 'user5@gmail.com', 'user5', '0a791842f52a0acfbb3a783378c066b8', '456789120', 'F', '2001-07-30', 0),
(6, 'user6', 'user6@gmail.com', 'user6', 'affec3b64cf90492377a8114c86fc093', '456789123', 'M', '2010-10-10', 0),
(8, 'user1', 'user1@gmail.com', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '1593574566', 'F', '1988-05-23', 0),
(9, 'user4', 'user4@gmail.com', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '357159789', 'M', '2001-09-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
