-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 09:09 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `tbl_marks`
--

CREATE TABLE `tbl_marks` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(35) NOT NULL,
  `marks` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_marks`
--

INSERT INTO `tbl_marks` (`student_id`, `student_name`, `marks`) VALUES
(1, 'John', 39),
(2, 'Mary ', 46),
(3, 'Maya', 65),
(4, 'Rahul', 90),
(5, 'Priya', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
