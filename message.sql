-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 12:24 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user-accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(20) NOT NULL,
  `message_id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `to_user_id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `from_user_id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sender` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `reci` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `subject` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL,
  `isread` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `destination` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message_id`, `to_user_id`, `from_user_id`, `sender`, `reci`, `subject`, `message`, `status`, `isread`, `timestamp`, `destination`) VALUES
(1, '8947', '9077', '8947', 'NYAMWARO JACINTA MORAA', 'ABIGAEL CHEPKORIR', 'EATING COMPETITION', 'All students MUST attend.', 1, 1, '2019-07-22 10:23:46', '0'),
(2, '', '9077', '', '', 'ABIGAEL CHEPKORIR', 'EATING COMPETITION', 'All students MUST attend.', 1, 1, '2019-07-22 10:23:46', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
