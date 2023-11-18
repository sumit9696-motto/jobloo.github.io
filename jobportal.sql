-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 03:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cimage` varchar(100) NOT NULL,
  `cdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cimage`, `cdate`) VALUES
(3, 'HR manager', 'human-resources.png', '2020-12-19'),
(4, 'developer', 'gamer.png', '2020-12-19'),
(7, 'sk gr', 'gamer.png', '2020-12-25'),
(8, 'sk gr', 'gamer.png', '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE `jobdetails` (
  `jid` int(11) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `jcategory` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `salary` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `jdesc` varchar(300) NOT NULL,
  `skill` varchar(300) NOT NULL,
  `location` varchar(100) NOT NULL,
  `post` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`jid`, `rid`, `jcategory`, `title`, `salary`, `experience`, `jdesc`, `skill`, `location`, `post`, `date`, `status`) VALUES
(2, 'a@gmail.com', 'developer', 'S I', 3000000, 1, 'khkhkh', 'ghgjjb', 'ghazipur', 55, '2020-12-24', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `rregister`
--

CREATE TABLE `rregister` (
  `name` varchar(100) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `clogo` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `fileds` varchar(300) NOT NULL,
  `rdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rregister`
--

INSERT INTO `rregister` (`name`, `mobno`, `email`, `password`, `cname`, `clogo`, `location`, `ctype`, `fileds`, `rdate`) VALUES
('anshu', '7575778', 'a@gmail.com', '1', 'sumsung', 'comp1.png', 'ghazipur', 'PRIVATE', 'hhhh', '2020-12-22'),
('ambuj', '888654456', 'am@gmail.com', '12', 'google', 'googlelogo.png', 'ghazipur', 'PUBLIC SECTOR', 'fjgj', '2020-12-22'),
('RAJAN YADAV', '4444444', 'r@gmail.com', '1', 'google', 'googlelogo.png', 'lucknow', 'PRIVATE', 'ggggggg', '2020-12-22'),
('suryansh', '6476587', 's@gmail.com', '1', 'google', 'comp1.png', 'gg up hhh', 'PRIVATE', 'jgbj', '2020-12-22'),
('sumit', '44876868', 'sk@gmail.com', '1', 'sumsung', 'comp1.png', 'ghazipur', 'PRIVATE', 'hgsdhjhffgh', '2020-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `uregister`
--

CREATE TABLE `uregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `highq` varchar(50) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `picname` varchar(300) NOT NULL,
  `cvpicname` varchar(300) NOT NULL,
  `rdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uregister`
--

INSERT INTO `uregister` (`name`, `email`, `password`, `dob`, `mobno`, `gen`, `highq`, `jobtitle`, `skills`, `picname`, `cvpicname`, `rdate`) VALUES
('RAJAN YADAV', 'bachhpur@gmail.com', '123', '2020-12-17', '5566788', 'male', 'B.TEC', 'rrrrr', 'gggg', 'amit.jpg', 'bus details.PNG', '2020-12-18'),
('hhh', 'sk@gmail.com', '1', '2020-12-17', '3333333', 'male', 'B.TEC', 'gggg', 'lll', 'amit.jpg', 'amit.jpg', '2020-12-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `rregister`
--
ALTER TABLE `rregister`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `uregister`
--
ALTER TABLE `uregister`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
