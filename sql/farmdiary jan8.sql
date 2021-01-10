-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 08:35 PM
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
  `fcontact` int(20) DEFAULT NULL,
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
(1, '1', 97876, 'idk@gmail.com', '1', '1', '1', '1'),
(2, '1', 7766667, 'hello@gmail.com', '1', '2', '2', '5'),
(3, '2', 898556644, 'hiji@gmail.com', '2', '2', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msgid` int(10) NOT NULL,
  `receverid` int(10) NOT NULL,
  `senderid` int(10) NOT NULL,
  `message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `type`, `description`, `latitude`, `longitude`, `datetime`, `senderid`, `price`, `image`) VALUES
(1, '1', 'da quis blandit turpis cursus in. Et netus et malesuada fames ac turpis egestas sed tempus. Turpis massa tincidunt dui ut. Ultrices tincidunt arcu non sodales neque sodales ut. Quam lacus suspendisse faucibus interdum posuere lor', 7.084, 80.0098, '2020-12-17 10:37:06', 1, 100, '1.png'),
(2, '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Eget dolor morbi non arcu risus quis varius quam. ', 7.12441, 80.0238, '2020-11-12 02:02:07', 3, 300, '21.jpg'),
(3, '2', 'Amet porttitor eget dolor morbi. Purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Sollicitudin tempor id eu nisl nunc mi. Sed odio morbi ', 7.12276, 79.9983, '2020-12-22 02:02:14', 2, 200, '1070df445.jpg'),
(4, '2', 'quis commodo odio aenean sed adipiscing diam. Laoreet sit amet cursus sit amet dictum sit. Nibh ipsum consequat nisl vel pretium lectus quam', 7.11053, 79.9978, '2020-12-15 02:02:18', 2, 200, 'asacsa.jpg'),
(5, '2', 'Nisi porta lorem mollis aliquam ut porttitor leo a diam. Lectus vestibulum mattis ullamcorper velit', 7.12579, 79.9813, '2021-01-01 02:02:30', 2, 200, '8.jpg'),
(6, '2', 'Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Vitae congue eu consequat ac felis donec et odio pellentesque. ', 7.09273, 79.9906, '2021-01-01 02:02:27', 2, 223, 'hu.jpg'),
(7, '2', 'Non curabitur gravida arcu ac. Nunc aliquet bibendum enim facilisis gravida neque. Scelerisque eu ultrices vitae auctor eu. Non enim praesent elementum facilisis leo vel fringilla. ', 7.09071, 79.9993, '2020-12-25 02:02:32', 2, 2534, '21.jpg'),
(8, '2', ' Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Varius morbi enim nunc faucibus a. Amet commodo nulla facilisi nullam vehicula ipsum', 7.13779, 80.0029, '2020-12-24 02:02:36', 2, 223, 'dsd.jpg'),
(9, '2', 'Odio facilisis mauris sit amet massa vitae. Adipiscing at in tellus integer. Quis imperdiet massa tincidunt nunc pulvinar sapien et. Mattis rhoncus urna neque viverra justo nec ultrices dui.', 7.15422, 80.0285, '2020-12-16 02:02:44', 2, 232, 'auberginew.jpg'),
(10, '2', ' proin sagittis nisl rhoncus. Sed arcu non odio euismod lacinia at quis. Felis bibendum ut tristique et egestas quis ipsum suspendisse. ', 7.13024, 80.0321, '2020-12-24 02:02:38', 2, 2323, 'test.jpg'),
(11, '2', 'Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Ultrices dui sapien eget mi proin sed libero.', 7.11873, 80.017, '2020-12-17 02:02:48', 2, 223, 'wp25702f08.jpg');

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
(1, 'lalindu', 'wenasara', '71007111', 'diwulapitiya gampaha', 'laindu@gmail.com', '973450816v', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`fid`);

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
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msgid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
