-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 05:36 PM
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
(2, '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Eget dolor morbi non arcu risus quis varius quam. ', 7.12441, 80.0238, '0000-00-00 00:00:00', 3, 300, '3.png'),
(3, '2', 'Amet porttitor eget dolor morbi. Purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Sollicitudin tempor id eu nisl nunc mi. Sed odio morbi ', 7.12276, 79.9983, '0000-00-00 00:00:00', 2, 200, '2.jpeg'),
(4, '2', 'quis commodo odio aenean sed adipiscing diam. Laoreet sit amet cursus sit amet dictum sit. Nibh ipsum consequat nisl vel pretium lectus quam', 7.11053, 79.9978, '0000-00-00 00:00:00', 2, 200, '2.jpg'),
(5, '2', 'Nisi porta lorem mollis aliquam ut porttitor leo a diam. Lectus vestibulum mattis ullamcorper velit', 7.12579, 79.9813, '0000-00-00 00:00:00', 2, 200, '8.jpg'),
(6, '2', 'Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Vitae congue eu consequat ac felis donec et odio pellentesque. ', 7.09273, 79.9906, '0000-00-00 00:00:00', 2, 223, '2.jpg'),
(7, '2', 'Non curabitur gravida arcu ac. Nunc aliquet bibendum enim facilisis gravida neque. Scelerisque eu ultrices vitae auctor eu. Non enim praesent elementum facilisis leo vel fringilla. ', 7.09071, 79.9993, '0000-00-00 00:00:00', 2, 2534, '2.jpg'),
(8, '2', ' Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Varius morbi enim nunc faucibus a. Amet commodo nulla facilisi nullam vehicula ipsum', 7.13779, 80.0029, '0000-00-00 00:00:00', 2, 223, 'op.jpg'),
(9, '2', 'Odio facilisis mauris sit amet massa vitae. Adipiscing at in tellus integer. Quis imperdiet massa tincidunt nunc pulvinar sapien et. Mattis rhoncus urna neque viverra justo nec ultrices dui.', 7.15422, 80.0285, '0000-00-00 00:00:00', 2, 232, 'test.png'),
(10, '2', ' proin sagittis nisl rhoncus. Sed arcu non odio euismod lacinia at quis. Felis bibendum ut tristique et egestas quis ipsum suspendisse. ', 7.13024, 80.0321, '0000-00-00 00:00:00', 2, 2323, 'test.jpg'),
(11, '2', 'Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Ultrices dui sapien eget mi proin sed libero.', 7.11873, 80.017, '0000-00-00 00:00:00', 2, 223, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(100) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` int(100) NOT NULL,
  `s_contact` int(20) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_email` int(100) NOT NULL,
  `s_nic` varchar(30) NOT NULL,
  `s_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
