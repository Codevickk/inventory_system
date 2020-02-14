-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 07:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `computer_id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `housing` varchar(255) NOT NULL,
  `cap_date` text NOT NULL,
  `relo_date` text,
  `new_location` varchar(255) NOT NULL,
  `new_housing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`computer_id`, `item`, `type`, `model`, `serial_no`, `campus`, `housing`, `cap_date`, `relo_date`, `new_location`, `new_housing`) VALUES
(10, 'Laptop', 'Regular', 'HP 630', 'XCADB345', 'Lagos', 'Block A; A107	', '2019-12-16', '', '', ''),
(11, 'Laptop', 'Regular', 'HP Elitebook', '1301983782', 'Dbi', 'Block B; 11', '2019-12-03', '2019-09-11', 'Dbi', 'Block C, 3'),
(12, 'Laptop', 'Regular', 'HP 630', 'saxasxas', 'Campus', 'Library ', '2019-09-05', '2019-09-05', 'Campus', 'Block C, 13, new Software Lab'),
(13, 'Laptop', 'Regular', 'Dell 1160', 'adsfsadfas', 'Campus', 'Block A; A21', '2019-10-10', '2019-10-10', 'Campus', 'Block C; '),
(14, 'Laptop', 'wqsqs', 'Macbook light; ', 'mak12857', 'Dbi Campus', 'Block D; D11', '2019-10-12', '2019-10-12', 'Dbi Campus', 'Dbi Student Hostel'),
(15, 'Laptop', 'Regular', 'sdafasdfas', 'dsfsadfsaf', 'Campus', 'Block A; A107	', '2019-10-31', '2019-10-31', 'Campus', 'Dbi Library '),
(16, 'Laptop', 'sdfsdafs', 'HP 630', '10937g75', 'Campus', 'Block A; A21', '2019-10-13', '2019-10-13', 'Campus', 'Block C, 3'),
(17, 'Laptop', 'Regular', 'Hp 360', 'jk1015ppy', 'Campus', 'Block A; A20', '2019-10-21', '2019-10-21', 'Campus', 'Block A; A21'),
(18, 'Laptop', 'Regular', 'ssdfdsfsd', 'asdsadas', 'Campus', 'saxsaxsa', '2019-10-02', '2019-10-02', 'Campus', 'Block C, 3'),
(19, 'Laptop', 'Regular', 'sqxasa', 'sdfsdfs', 'Campus', 'Block A; A21', '2019-11-22', '2019-11-22', 'Campus', 'Block C, 13, new Software Lab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`computer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `computer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
