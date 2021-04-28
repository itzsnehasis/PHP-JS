-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 11:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1PM`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pictures`
--

CREATE TABLE `Pictures` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Pictures`
--

INSERT INTO `Pictures` (`id`, `title`, `path`) VALUES
(1, 'Ghost', 'files/1610531978_01c5a0_895855cee24f492fbe6c038393033b1d_mv2.gif'),
(2, 'Gunshot', 'files/1610532060_4-48901_file-crosshairs-red-svg-shooting-cursor-png-red.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Pictures`
--
ALTER TABLE `Pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Pictures`
--
ALTER TABLE `Pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
