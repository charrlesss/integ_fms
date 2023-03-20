-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 06:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `cover_letter` text NOT NULL,
  `position_id` int(30) NOT NULL,
  `resume_path` text NOT NULL,
  `process_id` tinyint(30) NOT NULL DEFAULT '0' COMMENT '0=for review\r\n',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `contact`, `address`, `cover_letter`, `position_id`, `resume_path`, `process_id`, `date_created`) VALUES
(54, 'Timothy James', 'S', 'Bartolome', 'Male', 'timothyJames@gmail.com', '323232321', 'lot16 capricorn st., carmel v tandang sora q.c', 'dsadosadoksa', 13, '1653066060_Kami Export - LEHANN JAY PANGANIBAN - ELS - Final Module for Second Quarter.pdf', 12, '2022-05-21 01:01:03'),
(55, 'master', 'a', 'pogi', 'Male', 'dscdd', '12334466', 'dskdmslos', 'dksjdldwpk', 2, '1653111480_Kami Export - LEHANN JAY PANGANIBAN - ELS - Final Module for Second Quarter.pdf', 12, '2022-05-21 13:38:23'),
(58, 'marjon', 'tactacon', 'esaga', 'Male', 'jonesaga26@gmail.com', '42423411', 'lot16 capricorn st., carmel v tandang sora quezon city', 'dsfs', 4, '', 13, '2022-05-21 19:59:31'),
(59, 'Daniel', 'C', 'Padilla', 'Male', 'padilla@gmail.com', '09292567521', 'deparo caloocan city', '', 2, '1653141060_Kami Export - LEHANN JAY PANGANIBAN - ELS - Final Module for Second Quarter.pdf', 12, '2022-05-21 21:51:56'),
(60, 'Dhin Zon', 'Nabor', 'Mahinay', 'Male', 'dhinzon@gmail.com', '09298397327', 'sdsd', 'sdsd', 2, '', 8, '2022-05-26 01:49:13'),
(61, 'Abaya', 'C', 'Elmera', 'Female', 'elmera@gmail.com', '123232', 'sads', 'sadsads', 2, '6761-', 13, '2022-05-26 02:50:52'),
(62, 'Mhyles', 'C', 'Agramon', 'Female', 'sdsd@gmail.com', '1322131', 'sdsa', 'asdsad', 4, '40158-', 0, '2022-05-26 03:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `empoyee_id` int(20) NOT NULL,
  `log_type` tinytext NOT NULL COMMENT '	1 = AM IN,2 = AM out, 3= PM IN, 4= PM out',
  `datetime_log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `empoyee_id`, `log_type`, `datetime_log`, `date_updated`) VALUES
(1, 54, '1', '2023-03-10 00:00:00', '2023-03-10 00:00:00'),
(2, 54, '1', '2023-03-17 19:09:46', '2023-03-17 19:09:46'),
(3, 54, '2', '2023-03-17 19:10:06', '2023-03-17 19:10:06'),
(4, 54, '3', '2023-03-17 19:10:16', '2023-03-17 19:10:16'),
(5, 54, '4', '2023-03-17 19:10:23', '2023-03-17 19:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `awardingsocial`
--

CREATE TABLE `awardingsocial` (
  `awardId` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `Awards` varchar(250) NOT NULL,
  `dateawards` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awardingsocial`
--

INSERT INTO `awardingsocial` (`awardId`, `id`, `Awards`, `dateawards`) VALUES
(9, 54, '        PASSED TRAINING', 'May 21, 2022'),
(10, 54, '      95% rating for the works', 'May 21, 2022'),
(11, 54, '      95% rating for the works', ''),
(12, 54, 'panget mo', 'May 21, 2022'),
(13, 58, '           Completed Training', 'May 21, 2022'),
(14, 54, '       Employee of the Month', 'May 21, 2022'),
(15, 54, '       employee of the month', 'March 14, 2023');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claimId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dateReimbursment` date NOT NULL,
  `amt` double NOT NULL,
  `note` varchar(255) NOT NULL,
  `statu_claims` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`claimId`, `id`, `title`, `dateReimbursment`, `amt`, `note`, `statu_claims`) VALUES
(1, 54, '', '0000-00-00', 0, '', 'approved'),
(2, 54, '', '0000-00-00', 0, '', 'approved'),
(3, 54, 'sdsd', '2023-03-14', 0, '', 'approved'),
(4, 54, 'sadsad', '2023-03-14', 1444, 'dsdsd', 'pending'),
(5, 0, '', '0000-00-00', 0, '0', 'pending'),
(6, 0, '', '0000-00-00', 0, '0', 'pending'),
(7, 0, '', '0000-00-00', 0, '0', 'pending'),
(8, 54, 'rfsdfsdfdsf', '2023-03-14', 1444, 'fdndghfgdhdf', 'approved'),
(9, 61, 'nagabono', '2023-03-14', 1444, 'hgfhhjfhjlklkjjkl', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `compensation`
--

CREATE TABLE `compensation` (
  `comId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ss` double NOT NULL,
  `pagIbg` double NOT NULL,
  `phlhealth` double NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compensation`
--

INSERT INTO `compensation` (`comId`, `id`, `ss`, `pagIbg`, `phlhealth`, `salary`) VALUES
(1, 54, 0, 0, 0, 0),
(2, 54, 2111, 0, 0, 0),
(3, 54, 23, 0, 31, 111),
(4, 54, 111, 111, 111, 111),
(5, 61, 119, 76, 80, 570);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptId` int(11) NOT NULL,
  `departmentName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptId`, `departmentName`) VALUES
(1, 'Information Technology '),
(2, 'Mechanical Engineering Dept'),
(3, 'Accounting Department'),
(4, 'Logistic'),
(5, 'Core Department'),
(6, 'Human Resources Department'),
(7, 'Financial Department');

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `empdetailsid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `statusDesc` varchar(200) NOT NULL,
  `date_created_stat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`empdetailsid`, `id`, `statusDesc`, `date_created_stat`) VALUES
(27, 2, 'HIRED', '2022-05-16 19:59:08'),
(28, 2, 'WEB DEVELOPER', '2022-05-16 19:59:09'),
(29, 46, 'HIRED', '2022-05-16 20:00:45'),
(30, 46, 'Receptionist', '2022-05-16 20:00:45'),
(31, 47, 'HIRED', '2022-05-16 20:05:48'),
(32, 47, 'Receptionist', '2022-05-16 20:05:49'),
(33, 5, 'HIRED', '2022-05-16 20:06:20'),
(34, 5, 'Software Engineering', '2022-05-16 20:06:20'),
(35, 6, 'HIRED', '2022-05-16 21:33:26'),
(36, 6, 'Software Engineering', '2022-05-16 21:33:26'),
(37, 48, 'HIRED', '2022-05-19 18:47:53'),
(38, 48, 'Business Process Outsourcing', '2022-05-19 18:47:53'),
(39, 49, 'HIRED', '2022-05-19 19:54:51'),
(40, 49, 'WEB DEVELOPER', '2022-05-19 19:54:51'),
(41, 52, 'HIRED', '2022-05-19 20:50:18'),
(42, 52, 'Receptionist', '2022-05-19 20:50:18'),
(43, 50, 'HIRED', '2022-05-19 21:00:00'),
(44, 50, 'Vacancy', '2022-05-19 21:00:00'),
(45, 51, 'HIRED', '2022-05-19 21:00:09'),
(46, 51, 'WEB DEVELOPER', '2022-05-19 21:00:09'),
(47, 53, 'HIRED', '2022-05-19 21:11:09'),
(48, 53, 'WEB DEVELOPER', '2022-05-19 21:11:10'),
(49, 52, 'HIRED', '2022-05-21 00:41:13'),
(50, 52, 'Receptionist', '2022-05-21 00:41:14'),
(51, 54, 'HIRED', '2022-05-21 01:02:39'),
(52, 54, 'Business Process Outsourcing', '2022-05-21 01:02:39'),
(53, 55, 'HIRED', '2022-05-21 14:48:48'),
(54, 55, 'WEB DEVELOPER', '2022-05-21 14:48:48'),
(55, 56, 'HIRED', '2022-05-21 15:07:43'),
(56, 56, 'Vacancy', '2022-05-21 15:07:43'),
(57, 56, 'HIRED', '2022-05-21 15:07:44'),
(58, 56, 'Vacancy', '2022-05-21 15:07:44'),
(59, 57, 'HIRED', '2022-05-21 15:42:04'),
(60, 57, 'Vacancy', '2022-05-21 15:42:04'),
(61, 58, 'HIRED', '2022-05-21 20:06:30'),
(62, 58, 'Core Human Resource Management', '2022-05-21 20:06:30'),
(63, 59, 'HIRED', '2022-05-21 21:55:19'),
(64, 59, 'WEB DEVELOPER', '2022-05-21 21:55:20'),
(65, 61, 'HIRED', '2023-03-14 03:05:43'),
(66, 61, 'WEB DEVELOPER', '2023-03-14 03:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `emptask`
--

CREATE TABLE `emptask` (
  `emptask` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `taskdesc` varchar(250) NOT NULL,
  `datetask` date NOT NULL,
  `prioritytask` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emptask`
--

INSERT INTO `emptask` (`emptask`, `id`, `taskdesc`, `datetask`, `prioritytask`, `status`) VALUES
(2, 54, 'to build build build', '2022-05-21', 'Low', 'Done'),
(3, 54, 'To create project of Payroll in Web base', '2022-05-21', 'High', 'In Progress'),
(4, 58, '6days Training for new Hired Employee ', '2022-05-21', 'Medium', 'To Start'),
(5, 54, '6 days Training for New Employee', '2022-05-21', 'Medium', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `hiretbl`
--

CREATE TABLE `hiretbl` (
  `hireId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `deptId` int(11) NOT NULL,
  `process_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hiretbl`
--

INSERT INTO `hiretbl` (`hireId`, `id`, `deptId`, `process_id`) VALUES
(16, 2, 2, 12),
(28, 54, 1, 15),
(29, 55, 1, 12),
(30, 56, 2, 13),
(31, 56, 2, 13),
(32, 57, 2, 12),
(33, 58, 5, 13),
(34, 59, 4, 12),
(35, 61, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `hr2_competency`
--

CREATE TABLE `hr2_competency` (
  `employee_info` int(11) NOT NULL,
  `admin_comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comm_comp` int(11) NOT NULL,
  `supervisory_comp` int(11) NOT NULL,
  `cognitive_comp` int(11) NOT NULL,
  `total_competency` int(11) NOT NULL,
  `competency_date_evaluate` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr2_competency`
--

INSERT INTO `hr2_competency` (`employee_info`, `admin_comp`, `comm_comp`, `supervisory_comp`, `cognitive_comp`, `total_competency`, `competency_date_evaluate`) VALUES
(54, '12', 20, 12, 25, 69, '2022-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `hr3tanda`
--

CREATE TABLE `hr3tanda` (
  `atid` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `datehr3` date NOT NULL,
  `daydesc` varchar(250) NOT NULL,
  `timeIn` time NOT NULL,
  `timeOut` time NOT NULL,
  `totalTime` time NOT NULL,
  `descstatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr3tanda`
--

INSERT INTO `hr3tanda` (`atid`, `id`, `datehr3`, `daydesc`, `timeIn`, `timeOut`, `totalTime`, `descstatus`) VALUES
(1, 54, '2022-05-21', 'Saturday', '08:01:31', '05:02:21', '08:03:52', 'Attend'),
(2, 54, '0000-00-00', 'n/a', '00:00:00', '00:00:00', '00:00:00', 'Leave');

-- --------------------------------------------------------

--
-- Table structure for table `hr4_employee_salary_plan`
--

CREATE TABLE `hr4_employee_salary_plan` (
  `salary_id` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `status` varchar(255) NOT NULL,
  `allowance` double NOT NULL,
  `rate` double NOT NULL,
  `ssNo` int(30) NOT NULL,
  `pagibigNo` int(30) NOT NULL,
  `philHealthNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr4_employee_salary_plan`
--

INSERT INTO `hr4_employee_salary_plan` (`salary_id`, `id`, `status`, `allowance`, `rate`, `ssNo`, `pagibigNo`, `philHealthNo`) VALUES
(1, 54, 'approved', 100, 537, 14010670, 14010671, 14010672);

-- --------------------------------------------------------

--
-- Table structure for table `leavetbl`
--

CREATE TABLE `leavetbl` (
  `leaveId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `leaveStartDate` date NOT NULL,
  `leaveEndDate` date NOT NULL,
  `leaveType` varchar(255) NOT NULL,
  `leaveReason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetbl`
--

INSERT INTO `leavetbl` (`leaveId`, `id`, `leaveStartDate`, `leaveEndDate`, `leaveType`, `leaveReason`) VALUES
(1, 54, '2023-03-09', '2023-03-16', 'CL', 'Operation Tuli'),
(2, 0, '0000-00-00', '0000-00-00', '', 'sdsd'),
(3, 0, '2023-03-09', '0000-00-00', '', 'hehehe'),
(4, 0, '2023-03-09', '0000-00-00', '', 'dsdsd'),
(5, 0, '2023-03-09', '0000-00-00', '', 'dsdsd'),
(6, 0, '2023-03-09', '0000-00-00', '', 'dsdsd'),
(7, 0, '2023-03-09', '0000-00-00', '', 'dsds'),
(8, 54, '2023-03-09', '0000-00-00', '', 'fdfd'),
(9, 54, '2023-03-09', '2023-03-30', 'PL', 'sndsjd'),
(10, 54, '2000-11-01', '0000-00-00', 'CL', '');

-- --------------------------------------------------------

--
-- Table structure for table `loguser`
--

CREATE TABLE `loguser` (
  `id` int(11) NOT NULL,
  `usern` varchar(255) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `deptRo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loguser`
--

INSERT INTO `loguser` (`id`, `usern`, `passw`, `rol`, `deptRo`) VALUES
(1, 'moyty', 'moyty', 'Admin', 'HR1'),
(2, 'joy', 'joy', 'Admin', 'HR1'),
(3, 'suan', 'suan', 'Admin', 'HR1\r\n'),
(4, 'marjon', 'marjon', 'Admin', 'HR1'),
(5, 'rowen', 'rowen', 'Admin', 'HR1');

-- --------------------------------------------------------

--
-- Table structure for table `pagibig`
--

CREATE TABLE `pagibig` (
  `pagibigNo` int(11) NOT NULL,
  `pagibig_amount_contribution` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagibig`
--

INSERT INTO `pagibig` (`pagibigNo`, `pagibig_amount_contribution`) VALUES
(14010671, 120);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(30) NOT NULL,
  `ref_no` text CHARACTER SET utf8mb4 NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1 = monthly ,2 semi-monthly',
  `status` tinyint(1) DEFAULT '0' COMMENT '0 =New,1 = computed',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `ref_no`, `date_from`, `date_to`, `type`, `status`, `date_created`) VALUES
(0, '2023-4706\r\n', '2023-03-11', '2023-03-25', 2, 1, '2023-03-17 14:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `philhealth`
--

CREATE TABLE `philhealth` (
  `philHealthNo` int(11) NOT NULL,
  `phil_amount_contribution` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `philhealth`
--

INSERT INTO `philhealth` (`philHealthNo`, `phil_amount_contribution`) VALUES
(14010672, 200);

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_status`
--

CREATE TABLE `recruitment_status` (
  `id` int(30) NOT NULL,
  `status_label` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruitment_status`
--

INSERT INTO `recruitment_status` (`id`, `status_label`, `status`) VALUES
(1, 'For Initial Interview', 1),
(2, 'PASSED II', 1),
(3, 'FAILED II', 1),
(4, 'For Final Interview', 1),
(5, 'PASSED FI', 1),
(6, 'FAILED FI', 1),
(7, 'FOR POOLING', 1),
(8, 'Job Offer', 1),
(9, 'Hired', 1),
(10, 'Withdraw Application', 1),
(11, 'Training', 1),
(12, 'Seasonal', 1),
(13, 'Regularization', 1),
(14, 'Probationary', 1),
(15, 'Part-Time', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE `sss` (
  `ssNo` int(11) NOT NULL,
  `ss_amount_contribution` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`ssNo`, `ss_amount_contribution`) VALUES
(14010670, 120);

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'PhilTrunsure', 'info@sample.com', '+6948 8542 623', '1601264160_recruitment-cover.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;ABOUT US&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;&lt;h2 style=&quot;font-size:28px;background: transparent; position: relative;&quot;&gt;Where does it come from?&lt;/h2&gt;&lt;p style=&quot;text-align: center; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400;&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&lt;/p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`) VALUES
(1, 0, 'Administrator', '', '', 'admin', 'admin123', 1),
(2, 0, 'Dhin Zon N. Mahinay', '', '', 'dhinzon', 'dhinzon', 2),
(3, 0, 'John Carl Dometita', '', '', 'dometita', 'dometita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(30) NOT NULL,
  `position` varchar(200) NOT NULL,
  `availability` int(30) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `position`, `availability`, `description`, `status`, `date_created`) VALUES
(2, 'WEB DEVELOPER', 10, '&lt;h2 style=&quot;background: transparent; position: relative;&quot;&gt;URGENT HIRING!!&lt;/h2&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Our company is looking for 10 new Web developer.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3 style=&quot;background: transparent; position: relative;&quot;&gt;Requirements:&lt;/h3&gt;&lt;p&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;PHP Knowledgeable&lt;/li&gt;&lt;li&gt;Wordpress Knowledgeable&lt;/li&gt;&lt;li&gt;node.js Knowledgeable&lt;/li&gt;&lt;li&gt;reactjs Knowledgeable&lt;/li&gt;&lt;li&gt;MySQL Knowledgeable&lt;/li&gt;&lt;/ul&gt;', 1, '2020-09-28 11:24:52'),
(3, 'Sample', 20, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;b style=&quot;margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/b&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 0, '2020-09-28 11:28:38'),
(4, 'Core Human Resource Management', 5, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;/p&gt;', 1, '2020-09-28 11:28:50'),
(5, 'Receptionist', 2, '&lt;h1 style=&quot;background: transparent; position: relative;&quot;&gt;Job Description&lt;/h1&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#x2019;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;h2&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Requirements:&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;ul style=&quot;background: transparent; position: relative;&quot;&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 1&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 2&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 3&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 4&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 5&lt;/span&gt;&lt;/li&gt;&lt;li style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative;&quot;&gt;Sample Requirement 6&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;&lt;br style=&quot;background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/span&gt;&lt;/p&gt;', 1, '2020-09-28 11:29:20'),
(13, 'Business Process Outsourcing', 8, 'Job DescriptionLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Requirements:Sample Requirement 1,Sample Requirement 2,Sample Requirement 3,Sample Requirement 4,Sample Requirement 5,Sample Requirement 6,The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, '2022-05-19 05:00:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awardingsocial`
--
ALTER TABLE `awardingsocial`
  ADD PRIMARY KEY (`awardId`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claimId`);

--
-- Indexes for table `compensation`
--
ALTER TABLE `compensation`
  ADD PRIMARY KEY (`comId`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`empdetailsid`);

--
-- Indexes for table `emptask`
--
ALTER TABLE `emptask`
  ADD PRIMARY KEY (`emptask`);

--
-- Indexes for table `hiretbl`
--
ALTER TABLE `hiretbl`
  ADD PRIMARY KEY (`hireId`);

--
-- Indexes for table `hr2_competency`
--
ALTER TABLE `hr2_competency`
  ADD PRIMARY KEY (`employee_info`);

--
-- Indexes for table `hr3tanda`
--
ALTER TABLE `hr3tanda`
  ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `hr4_employee_salary_plan`
--
ALTER TABLE `hr4_employee_salary_plan`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `leavetbl`
--
ALTER TABLE `leavetbl`
  ADD PRIMARY KEY (`leaveId`);

--
-- Indexes for table `loguser`
--
ALTER TABLE `loguser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagibig`
--
ALTER TABLE `pagibig`
  ADD PRIMARY KEY (`pagibigNo`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `philhealth`
--
ALTER TABLE `philhealth`
  ADD PRIMARY KEY (`philHealthNo`);

--
-- Indexes for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`ssNo`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `awardingsocial`
--
ALTER TABLE `awardingsocial`
  MODIFY `awardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `claimId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `compensation`
--
ALTER TABLE `compensation`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `empdetailsid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `emptask`
--
ALTER TABLE `emptask`
  MODIFY `emptask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hiretbl`
--
ALTER TABLE `hiretbl`
  MODIFY `hireId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `hr2_competency`
--
ALTER TABLE `hr2_competency`
  MODIFY `employee_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `hr3tanda`
--
ALTER TABLE `hr3tanda`
  MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hr4_employee_salary_plan`
--
ALTER TABLE `hr4_employee_salary_plan`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leavetbl`
--
ALTER TABLE `leavetbl`
  MODIFY `leaveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `loguser`
--
ALTER TABLE `loguser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pagibig`
--
ALTER TABLE `pagibig`
  MODIFY `pagibigNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14010672;
--
-- AUTO_INCREMENT for table `philhealth`
--
ALTER TABLE `philhealth`
  MODIFY `philHealthNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14010673;
--
-- AUTO_INCREMENT for table `recruitment_status`
--
ALTER TABLE `recruitment_status`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `ssNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14010671;
--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
