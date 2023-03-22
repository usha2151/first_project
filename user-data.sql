-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 12:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user-data`
--

CREATE TABLE `user-data` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `categories` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-data`
--

INSERT INTO `user-data` (`id`, `user_name`, `password`, `categories`, `image`, `tittle`) VALUES
(14, 'usha singh', '11', '', '', ''),
(15, 'riya', '1234', '', '', ''),
(16, 'urmila maurya', '12345', '', '', ''),
(17, 'aftab', '1234', '', '', ''),
(18, 'alice', '1234', '', '', ''),
(19, 'alice', '1234', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user-data`
--
ALTER TABLE `user-data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user-data`
--
ALTER TABLE `user-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
