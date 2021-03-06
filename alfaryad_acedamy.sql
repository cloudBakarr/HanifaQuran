-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2022 at 10:34 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfaryad_acedamy`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `middle_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `phone_number` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `course` varchar(150) DEFAULT NULL,
  `gender` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `phone_number`, `email`, `address`, `course`, `gender`, `password`, `status`, `created_at`) VALUES
(1, '9080', '0980', '8908', '0980', '8080@0-9', '09900', 'BCA', 'Male', '909', 1, NULL),
(2, '9080', '0980', '8908', '0980', '8080@0-9', '09900', 'BCA', 'Male', '909', 1, NULL),
(3, '9080', '0980', '8908', '0980', '8080@0-9', '09900', 'BCA', 'Male', '909', 1, NULL),
(4, '99', '99', '999', '99', '999@99', '99', 'Course', 'Male', '99', 1, NULL),
(5, '909', '909', '090', '909', '090@0', '909', 'BCA', 'Male', '90', 1, NULL),
(6, 'Rana', 'Afaq', 'Afaq Ali', '03134949389', 'afaqrana197@gmail.com', 'Wah Cantt.', 'BCA', 'Male', 'Rana@1234', 1, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
