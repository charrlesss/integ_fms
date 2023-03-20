-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 03:44 AM
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
-- Table structure for table `admin-employe-accounts`
--

CREATE TABLE `admin-employe-accounts` (
  `account_id` bigint(6) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `birthdate` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `position_id` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `createdAt_account` varchar(200) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-employe-accounts`
--

INSERT INTO `admin-employe-accounts` (`account_id`, `firstname`, `lastname`, `middlename`, `gender`, `email`, `address`, `birthdate`, `country`, `contact_number`, `position_id`, `department_id`, `employee_id`, `archive`, `active`, `createdAt_account`, `profile`, `password`) VALUES
(22001, 'charles', 'palencia', 'andrecoso', 'male', 'charlespalencia21@gmail.com', 'bagong silang', '2023-02-28', 'Philippines', '09072147761', '2', '3', '3A52321', 0, 0, '2023-03-02 5:51:15', 'e1d3dbac-efe5-413b-a125-21feafc37ec5.jpg', '$2y$10$D3Glx9z.lP.kYpomjYX87OIq.b348IEwomd0Q4Ds13j79.Qy7aJcO'),
(22002, 'gken', 'lolis', 'andrecoso', 'male', 'gken@gmail.com', 'Bulacan', '2023-03-08', 'Philippines', '09082122233', '2', '1', '13223A2', 0, 0, '2023-03-02 6:28:12', 'd34383e6-0029-48b2-aa43-66f27a581509.jpg', '$2y$10$U8w5LkTOF9HthGZpKGXafe8YdSepzm6Vn.fBvuFWY6vhZ9wU4LwXq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-employe-accounts`
--
ALTER TABLE `admin-employe-accounts`
  ADD UNIQUE KEY `filename` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-employe-accounts`
--
ALTER TABLE `admin-employe-accounts`
  MODIFY `account_id` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
