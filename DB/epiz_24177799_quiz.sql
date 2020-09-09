-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql102.epizy.com
-- Generation Time: Nov 06, 2019 at 09:37 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24177799_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Uemail` varchar(255) NOT NULL,
  `Upassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `Uname`, `Uemail`, `Upassword`) VALUES
(1, 'Shahabaz Alam', 'shahabazalam1@gmail.com', 'Shah@12345'),
(2, 'Shah Alam', 'shah@gmail.com', '9005658908');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `a_id` varchar(255) DEFAULT NULL,
  `ans` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `a_id`, `ans`) VALUES
(1, 'Core system integrators', '1', 1),
(2, 'Chi', '1', 0),
(3, 'Ghj', '1', 0),
(4, 'Fsf', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `q_id` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `q_id`) VALUES
(1, 'Csi long form ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Marks` int(11) NOT NULL,
  `TotalCorrectAns` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `Name`, `Marks`, `TotalCorrectAns`) VALUES
(2, 'Tanu Sawaika', 100, 1),
(3, 'Vishal Singh', 100, 1),
(4, 'Saumya Mishra', 100, 1),
(8, 'Gaurav Gupta', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `totalvisit`
--

CREATE TABLE `totalvisit` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalvisit`
--

INSERT INTO `totalvisit` (`id`, `s_id`, `user_id`) VALUES
(1, 1, 3),
(2, 1, 38),
(3, 1, 9),
(4, 1, 10),
(5, 1, 11),
(6, 1, 12),
(7, 1, 36),
(8, 1, 16),
(9, 1, 17),
(10, 1, 18),
(11, 1, 19),
(12, 1, 20),
(13, 1, 35),
(14, 1, 22),
(15, 1, 37),
(16, 1, 25),
(17, 1, 26),
(18, 1, 27),
(19, 1, 49),
(20, 1, 29),
(21, 1, 34),
(22, 1, 39),
(23, 1, 40),
(24, 1, 41),
(25, 1, 42),
(26, 1, 43),
(27, 1, 44),
(28, 1, 45),
(29, 1, 46),
(30, 1, 47),
(31, 1, 48),
(32, 1, 3),
(33, 1, 9),
(34, 1, 3),
(35, 1, 38),
(36, 1, 38),
(37, 1, 9),
(38, 1, 16),
(39, 1, 9),
(40, 1, 11),
(41, 1, 38),
(42, 1, 46),
(43, 1, 56),
(44, 1, 46),
(45, 1, 46),
(46, 1, 22),
(47, 1, 44),
(48, 1, 11),
(49, 1, 16),
(50, 1, 38),
(51, 1, 9),
(52, 1, 19),
(53, 1, 16),
(54, 1, 29),
(55, 1, 10),
(56, 1, 11),
(57, 1, 17),
(58, 1, 11),
(59, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `email`, `password`, `status`) VALUES
(38, 'Ayush Kapooria', 'ayush123@gmail.com', '12345678', 0),
(9, 'Aishwarya Raj Srivastava', '', '12345678', 0),
(10, 'Dipankar Mishra', '', '12345678', 0),
(11, 'Gaurav Gupta', '', '12345678', 1),
(12, 'Prabhuti Verma', '', '12345678', 0),
(36, 'Kiran Vishwakarma', 'Kiran123@gmail.com', '12345678', 0),
(16, 'Neha Singh', '', '12345678', 0),
(17, 'Shreya Srivastava', '', '12345678', 0),
(18, 'Radha Singh', '', '12345678', 0),
(19, 'Saloni Sahu', '', '12345678', 0),
(20, 'Nancy Singh', '', '12345678', 0),
(35, 'Shweta Singh2', 'Shweta2123@gmail.com', '12345678', 0),
(22, 'Vishal Singh', '', '12345678', 0),
(37, 'Abhay Kumar', 'shriabhaykumar@gmail.com', '12345678', 0),
(50, 'Rishi Kant Tripathi', 'rishi.tripathi1@tcs.com', '19041997', 0),
(25, 'Ashwani Singh', '', '12345678', 0),
(26, 'Shalini Singh', '', '12345678', 0),
(27, 'Alpana Singh', '', '12345678', 0),
(49, 'Abhishek Pandey', 'abhishek123@gmail.com', '12345678', 0),
(29, 'Satish Nair', '', '12345678', 0),
(34, 'Shweta Singh1', 'shweta123@gmail.com', '12345678', 0),
(39, 'Shubham Choubey', 'shubham123@gmail.com', '12345678', 0),
(40, 'Shivangi Srivastava', 'shivangi123@gmail.com', '12345678', 0),
(41, 'Prasoon Mishra', 'prasoon123@gmail.com', '12345678', 0),
(42, 'Shivani Singh', 'shivani123@gmail.com', '12345678', 0),
(43, 'Vishal Rathod', 'vishal123@gamil.com', '12345678', 0),
(44, 'Saumya Mishra', 'saumya123@gmail.com', '12345678', 0),
(45, 'Swati Mishra', 'swati123@gmail.com', '12345678', 0),
(46, 'Tanu Sawaika', 'tanu123@gmail.com', '12345678', 0),
(47, 'Deepti Choubey', 'deepti123@gmail.com', '12345678', 0),
(48, 'Hemesh Vaish', 'hemesh123@gmail.com', '12345678', 0),
(56, 'Himanshu Srivastava', 'heman123@gmail.com', '12345678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `id` int(11) NOT NULL,
  `session_id` int(255) NOT NULL DEFAULT '0',
  `login_time` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`id`, `session_id`, `login_time`) VALUES
(53, 19, 1565768312);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `a_id` (`answer`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalvisit`
--
ALTER TABLE `totalvisit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `totalvisit`
--
ALTER TABLE `totalvisit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_online`
--
ALTER TABLE `user_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
