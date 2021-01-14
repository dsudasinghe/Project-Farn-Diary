-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 11:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmdiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fid` int(10) NOT NULL,
  `fnic` varchar(20) NOT NULL,
  `fcontact` varchar(20) DEFAULT NULL,
  `femail` varchar(200) DEFAULT NULL,
  `faddress` varchar(400) DEFAULT NULL,
  `fpassword` varchar(500) NOT NULL,
  `ffirstname` varchar(100) NOT NULL,
  `flastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fid`, `fnic`, `fcontact`, `femail`, `faddress`, `fpassword`, `ffirstname`, `flastname`) VALUES
(1, '1', '97876', 'idk@gmail.com', '1', '1', 'test', 'farmer'),
(2, '1', '7766667', 'hello@gmail.com', '1', '2', 'rat', 'mouse'),
(3, '2', '+9471 1234567', 'sudash@gmail.com', '2', '2', 'S.sudas', '5'),
(4, '0000000v', '1', '1', '1', '827ccb0eea8a706c4c34a16891f84e7b', '1', '1'),
(5, '1111111v', '00000', 'lal@gmail.com', 'yhy', '81dc9bdb52d04dc20036dbd8313ed055', 'tt', 'tt');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `m_id` int(10) NOT NULL,
  `m_nic` varchar(30) NOT NULL,
  `m_password` varchar(200) NOT NULL,
  `m_fname` varchar(200) NOT NULL,
  `m_lname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`m_id`, `m_nic`, `m_password`, `m_fname`, `m_lname`) VALUES
(1, '1234567v', '827ccb0eea8a706c4c34a16891f84e7b', 'masterof', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msgid` int(10) NOT NULL,
  `receverid` varchar(100) NOT NULL,
  `senderid` varchar(100) NOT NULL,
  `message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msgid`, `receverid`, `senderid`, `message`) VALUES
(1, '1', '1', 'enter your message here'),
(2, '1', '2', 'enter your message heressseeeeeeeeeeeeeeeeee'),
(3, '2', '0', 'enter your message here'),
(5, '2', '0', 'enter your message here'),
(7, '2', '0', 'enter your message heressseeeeeeeeeeeeeeeeee'),
(9, '<br /><b>Notice</b>:  Undefined variable: senderrr in <b>C:xampphtdocsgithubProject-Farm-Diarymessag', '', 'enter your message here'),
(10, '3', '', ''),
(11, '<br /><b>Notice</b>:  Undefined variable: senderrr in <b>C:xampphtdocsgithubProject-Farm-Diarymessag', '0000000v', ''),
(12, '<br /><b>Notice</b>:  Undefined variable: senderrr in <b>C:xampphtdocsgithubProject-Farm-Diarymessag', '0000000v', 'enter your message here');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `datetime` datetime NOT NULL,
  `senderid` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `fflag` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `type`, `description`, `latitude`, `longitude`, `datetime`, `senderid`, `price`, `image`, `fflag`) VALUES
(1, 'Fruit', 'da quis blandit turpis cursus in. Et netus et malesuada fames ac turpis egestas sed tempus. Turpis massa tincidunt dui ut. Ultrices tincidunt arcu non sodales neque sodales ut. Quam lacus suspendisse faucibus interdum posuere lor', 7.084, 80.0098, '2020-12-17 10:37:06', 1, 100, '1.png', 0),
(2, '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Eget dolor morbi non arcu risus quis varius quam. ', 7.12441, 80.0238, '2020-11-12 02:02:07', 3, 300, '21.jpg', 0),
(3, '2', 'Amet porttitor eget dolor morbi. Purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Sollicitudin tempor id eu nisl nunc mi. Sed odio morbi ', 7.12276, 79.9983, '2020-12-22 02:02:14', 2, 200, '1070df445.jpg', 0),
(6, '2', 'Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Vitae congue eu consequat ac felis donec et odio pellentesque. ', 7.09273, 79.9906, '2021-01-01 02:02:27', 2, 223, 'hu.jpg', 0),
(8, '2', ' Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Varius morbi enim nunc faucibus a. Amet commodo nulla facilisi nullam vehicula ipsum', 7.13779, 80.0029, '2020-12-24 02:02:36', 2, 223, 'dsd.jpg', 0),
(9, '2', 'Odio facilisis mauris sit amet massa vitae. Adipiscing at in tellus integer. Quis imperdiet massa tincidunt nunc pulvinar sapien et. Mattis rhoncus urna neque viverra justo nec ultrices dui.', 7.15422, 80.0285, '2020-12-16 02:02:44', 2, 232, 'auberginew.jpg', 0),
(10, '2', ' proin sagittis nisl rhoncus. Sed arcu non odio euismod lacinia at quis. Felis bibendum ut tristique et egestas quis ipsum suspendisse. ', 7.13024, 80.0321, '2020-12-24 02:02:38', 2, 2323, 'test.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(100) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` varchar(200) NOT NULL,
  `s_contact` varchar(20) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_nic` varchar(30) NOT NULL,
  `s_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_fname`, `s_lname`, `s_contact`, `s_address`, `s_email`, `s_nic`, `s_password`) VALUES
(1, 'lalindu', 'wenasara', '71007111', 'diwulapitiya gampaha', 'laindu@gmail.com', '973450816v', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Lahiru', 'Dananjaya', '071222222', 'flower road ,colombo', 'dana@gmail.com', '1111111v', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'test', 'test', '00000', 'aaaa', '0000@gmail.cpm', '12345v', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msgid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
