-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 01:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `h_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cur_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `uin` varchar(40) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `expression` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `uin`, `user_name`, `expression`, `status`) VALUES
(2, 'qwf', 'an', 'mm+ss', 0),
(3, 'A', 'qwe', 'hh', 0),
(4, '2@3a', 'ak', 'hh+mm', 0),
(5, 'aabb', 'mh', 'mm+hh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `r_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `join_date` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`r_id`, `user_id`, `f_name`, `l_name`, `gender`, `dob`, `address`, `email`, `join_date`, `phone`) VALUES
(2, 2, 'q', 'q', 'm', '2017-05-11', 'q', 'q', 'Mon May 01 2017 23:59:21 GMT+0', '54656'),
(3, 3, 'q', 'q', 'm', '2017-05-20', 'mvj', 'q@q.com', 'Tue May 02 2017 09:52:28 GMT+0', '876876'),
(4, 4, 'aneesh', 'kk', 'm', '1994-02-23', 'asd', 'aneesh@gmail.com', 'Tue May 02 2017 13:41:10 GMT+0', '23232'),
(5, 5, 'haris', 'mohammed', 'm', '1995-12-23', 'poochingal house\nvelupadam p.o thrissur\npin.680303', 'harispoochingal05@gmail.com', 'Tue May 02 2017 15:26:20 GMT+0', '8129486745');

-- --------------------------------------------------------

--
-- Table structure for table `sqst`
--

CREATE TABLE `sqst` (
  `q_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qst` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sqst`
--

INSERT INTO `sqst` (`q_id`, `user_id`, `qst`, `ans`) VALUES
(1, 2, 'fgdf', 'dfdsfs'),
(2, 2, 'dfsdfs', 'dfdsfs'),
(3, 2, 'hbkh', 'bkhb'),
(6, 3, 'hgf', 'fgfj'),
(7, 4, '', ''),
(8, 5, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uin` (`uin`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `sqst`
--
ALTER TABLE `sqst`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sqst`
--
ALTER TABLE `sqst`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
