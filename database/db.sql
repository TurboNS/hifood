-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2018 at 10:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`item_id`, `item_name`) VALUES
(1, 'Starter'),
(2, 'Main'),
(3, 'Beverage'),
(5, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `order_menu`
--

CREATE TABLE `order_menu` (
  `order_id` int(255) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_menu`
--

INSERT INTO `order_menu` (`order_id`, `cust_id`, `item_name`, `price`) VALUES
(1, 'CUST_4431', 'Tom Yum Goong', 6),
(2, 'CUST_5284', 'Tom Kha', 6),
(3, 'CUST_5284', 'Panaeng Curry', 13),
(4, 'CUST_5284', 'Coke', 5),
(5, 'CUST_3899', 'Phad Thai', 12),
(6, 'CUST_3899', 'Tom Kha', 6),
(7, 'CUST_3899', 'Panaeng Curry', 13),
(8, 'CUST_3899', 'Guiness Beer', 7),
(9, 'CUST_3899', 'Coke', 5),
(10, 'CUST_3899', 'Lab', 8),
(11, 'CUST_1082', 'Red Curry', 12),
(12, 'CUST_1082', 'Singha Beer', 7),
(13, 'CUST_1082', 'Lab', 8);

-- --------------------------------------------------------

--
-- Table structure for table `prepare`
--

CREATE TABLE `prepare` (
  `prepare_id` int(11) NOT NULL,
  `prepare_cust` varchar(250) NOT NULL,
  `prepare_time` time NOT NULL,
  `prepare_comment` text NOT NULL,
  `prepare_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prepare`
--

INSERT INTO `prepare` (`prepare_id`, `prepare_cust`, `prepare_time`, `prepare_comment`, `prepare_status`) VALUES
(1, '1', '00:00:02', '3', 1),
(2, '1', '12:30:00', '1', 1),
(3, 'CUST_123', '00:12:34', 'Hey Hey', 1),
(4, '12', '00:00:12', '12', 1),
(5, 'w', '00:00:00', 'w', 1),
(6, 'CUST_432', '12:23:00', 'Please cook', 1),
(7, 'gs', '00:00:00', 'gd', 1),
(8, '12', '00:00:12', '12', 1),
(9, 'CUST', '00:00:00', 'LEAVE', 1),
(10, 'CUSR', '12:12:00', 'please', 1),
(11, 'hey', '12:45:00', 'PLS', 1),
(12, 'CS', '13:34:00', 'P:Z', 1),
(13, 'cy', '11:56:00', 'plw', 1),
(14, 'hey', '12:11:00', 'YU', 1),
(15, 'CUST_123', '15:40:00', 'Please cook for spicies as you can', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_item_id` int(255) NOT NULL,
  `menu_item` varchar(255) NOT NULL,
  `sub_menu_item` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_item_id`, `menu_item`, `sub_menu_item`, `price`) VALUES
(1, 'Starter', 'Tom Yum Goong', 6),
(2, 'Main', 'Phad Thai', 12),
(3, 'Starter', 'Spring Rolls', 5),
(4, 'Starter', 'Tom Kha', 6),
(5, 'Main', 'Massaman Curry', 13),
(6, 'Main', 'Green Curry', 12),
(7, 'Main', 'Red Curry', 12),
(8, 'Main', 'Panaeng Curry', 13),
(9, 'Main', 'Fired Rice', 11),
(10, 'Main', 'Phad See Ew', 11),
(11, 'Beverage', 'Singha Beer', 7),
(12, 'Beverage', 'Chang Beer', 6),
(13, 'Beverage', 'Guiness Beer', 7),
(14, 'Beverage', 'Coke', 5),
(16, 'Beverage', 'Fanta', 5),
(17, 'Main', 'Som Tam', 12),
(18, 'Main', 'Grilled Chicken ', 10),
(19, 'Starter', 'Lab', 8),
(20, 'Starter', 'Wings', 7),
(21, 'Main', 'Wings', 11),
(22, 'Drink', 'Sprite', 5),
(23, 'Main', 'Pad Kra Pao', 12),
(24, 'Main', 'Pad Kra Pao', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE `tablebook` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `numpeople` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablebook`
--

INSERT INTO `tablebook` (`id`, `date`, `time`, `numpeople`, `name`, `email`, `phone`) VALUES
(0, '0000-00-00', '7:30am', '1 Person', 'sdfghjk', 'ee@gmail.com', 'fghjkl67890'),
(0, '0000-00-00', '8:00am', '5 Peoples', 'tom', 'tom@gmail.com', '08942356543'),
(0, '1212-12-22', '8:00pm', '2 Peoples', 'Naz', 'nax@gmail.com', '0892958394'),
(0, '0000-00-00', '12:30pm', '2 Peoples', 'Michael Randle', 'michael@gmail.com', '0894237895'),
(0, '0000-00-00', '12:30pm', '2 Peoples', 'Tom', 'tom@gmail.com', '0892345436'),
(0, '2012-12-12', '1:00pm', '1 Person', 'trst', 'test@gmail.com', '0894387689'),
(0, '0000-00-00', '7:00am', '1 Person', 'rytre', '4r@gmail.com', '09876567890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `username`, `password`) VALUES
(1, 'test', '2012-12-12', 'test', '123'),
(2, 'test1', '1212-12-12', 'test1', '123'),
(3, 'Test2 Test2', '1211-11-11', 'test2', '123'),
(4, 'demo', '2012-12-12', 'demo', '123'),
(5, 'Nuth Sirikitiwannakul', '1989-12-30', 'Nuth', '123'),
(6, 'test test', '0000-00-00', 'test', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_menu`
--
ALTER TABLE `order_menu`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prepare`
--
ALTER TABLE `prepare`
  ADD PRIMARY KEY (`prepare_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_menu`
--
ALTER TABLE `order_menu`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prepare`
--
ALTER TABLE `prepare`
  MODIFY `prepare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
