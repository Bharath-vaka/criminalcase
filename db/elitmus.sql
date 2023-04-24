-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2023 at 03:16 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitmus`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `score1` int(10) NOT NULL,
  `time1` int(10) NOT NULL,
  `score2` int(10) NOT NULL,
  `time2` int(10) NOT NULL,
  `score3` int(10) NOT NULL,
  `time3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `score1`, `time1`, `score2`, `time2`, `score3`, `time3`) VALUES
(1, 'Bharath', 'bharathvaka2592@gmail.com', 'Bharath@2592', 200, 10, 100, 20, 200, 5),
(2, 'LEELA BHARATH VAKA', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(3, 'qq', 'abc@gmail.com', 'qq', 0, 0, 0, 0, 0, 0),
(4, 'Himakar', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(5, 'LEELA BHARATH VAKA', 'himakarmatta@gmail.com', '', 3, 0, 0, 0, 0, 0),
(6, 'LEELA BHARATH VAKA', 'himakarmatta@gmail.com', '', 3, 0, 0, 0, 0, 0),
(7, 'LEELA BHARATH VAKA', 'himakarmatta@gmail.com', '', 3, 0, 0, 0, 0, 0),
(8, 'LEELA BHARATH VAKA', 'himakarmatta@gmail.com', '', 3, 0, 0, 0, 0, 0),
(9, 'LEELA BHARATH VAKA', 'himakarmatta@gmail.com', '', 3, 0, 0, 0, 0, 0),
(10, 'LEELA BHARATH VAKA', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(11, 'LEELA BHARATH VAKA', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(12, 'LEELA BHARATH VAKA', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(13, 'LEELA BHARATH VAKA', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(14, 'LEELA BHARATH VAKA', 'qq', 'qq', 3, 0, 0, 0, 0, 0),
(15, 'admin@gmail.com', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0),
(16, 'admin@gmail.com', 'admin@gmail.com', 'qq', 400, 0, 400, 0, 300, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
