-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 05:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_chat`
--
CREATE DATABASE IF NOT EXISTS `my_chat` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `my_chat`;

-- --------------------------------------------------------

--
-- Table structure for table `mesages`
--

CREATE TABLE `mesages` (
  `msg_id` int(11) NOT NULL,
  `mesage` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `send_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesages`
--

INSERT INTO `mesages` (`msg_id`, `mesage`, `username`, `send_date`) VALUES
(1, 'hi, i`m linda', 'linda0linda', '2021-02-17 07:53:59'),
(12, 'hi', 'maya', '2021-02-17 08:52:15'),
(15, 'welcome!', 'maya', '2021-02-17 09:09:43'),
(16, 'I', 'rob', '2021-02-17 09:13:32'),
(17, 'used', 'rob', '2021-02-17 09:13:34'),
(18, 'to be', 'rob', '2021-02-17 09:13:35'),
(19, 'an adventure', 'rob', '2021-02-17 09:13:46'),
(20, 'like', 'rob', '2021-02-17 09:32:35'),
(21, 'you', 'rob', '2021-02-17 09:35:01'),
(22, 'Then', 'rob', '2021-02-17 09:35:04'),
(23, 'I', 'rob', '2021-02-17 10:03:13'),
(24, 'took', 'rob', '2021-02-17 10:05:40'),
(25, 'an arrow', 'rob', '2021-02-17 10:05:42'),
(26, 'in the knee', 'rob', '2021-02-17 10:05:45'),
(27, 'dude...', 'kyle', '2021-02-17 10:53:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mesages`
--
ALTER TABLE `mesages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mesages`
--
ALTER TABLE `mesages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
