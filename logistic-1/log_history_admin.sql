-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 04:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freight`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_history_admin`
--

CREATE TABLE `log_history_admin` (
  `log_id` int(11) NOT NULL,
  `log_action` varchar(200) NOT NULL,
  `log_time` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_history_admin`
--

INSERT INTO `log_history_admin` (`log_id`, `log_action`, `log_time`, `account_id`) VALUES
(2, 'login', '2023-03-03 8:51:49', '22001'),
(3, 'logout', '2023-03-03 8:52:08', '22001'),
(4, 'login', '2023-03-03 8:53:28', '22001'),
(5, 'logout', '2023-03-03 8:53:32', '22001'),
(6, 'login', '2023-03-03 8:53:50', '22001'),
(7, 'logout', '2023-03-03 8:58:03', '22001'),
(8, 'login', '2023-03-03 8:58:08', '22001'),
(9, 'logout', '2023-03-03 8:58:22', '22001'),
(10, 'login', '2023-03-03 8:59:43', '22001'),
(11, 'logout', '2023-03-03 9:00:49', '22001'),
(12, 'login', '2023-03-03 9:01:11', '22001'),
(13, 'logout', '2023-03-03 9:01:21', '22001'),
(14, 'login', '2023-03-03 9:08:10', '22001'),
(15, 'logout', '2023-03-03 9:30:28', '22001'),
(16, 'login', '2023-03-03 9:30:45', '22001'),
(17, 'logout', '2023-03-03 9:30:53', '22001'),
(18, 'login', '2023-03-03 9:32:12', '22001'),
(19, 'logout', '2023-03-03 9:32:17', '22001'),
(20, 'login', '2023-03-03 9:32:29', '22001'),
(21, 'logout', '2023-03-03 9:33:43', '22001'),
(22, 'login', '2023-03-03 9:36:58', '22001'),
(23, 'logout', '2023-03-03 10:01:32', '22001'),
(24, 'login', '2023-03-03 10:05:50', '22001'),
(25, 'logout', '2023-03-03 10:05:55', '22001'),
(26, 'login', '2023-03-03 10:06:14', '22001'),
(27, 'logout', '2023-03-03 10:30:58', '22001'),
(28, 'login', '2023-03-03 10:31:27', '22001'),
(29, 'logout', '2023-03-03 10:31:40', '22001'),
(30, 'login', '2023-03-03 10:37:47', '22001'),
(31, 'logout', '2023-03-03 10:38:09', '22001'),
(32, 'login', '2023-03-03 10:39:39', '22001'),
(33, 'logout', '2023-03-03 10:49:34', '22001'),
(34, 'login', '2023-03-03 10:51:03', '22001'),
(35, 'logout', '2023-03-03 10:57:32', '22001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_history_admin`
--
ALTER TABLE `log_history_admin`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_history_admin`
--
ALTER TABLE `log_history_admin`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
