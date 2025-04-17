

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2024 at 08:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prizren`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `fileId` int NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `fileUpload` varchar(255) NOT NULL,
  `fileDescription` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`fileId`, `fileName`, `fileUpload`, `fileDescription`) VALUES
(1, 'file', '', 'gdfgdgfdgd'),
(2, 'name', 'download (3).jpg', 'sdafdsfsdfs'),
(3, 'NEWFILE', 'Spaceship-Graphics-40242314-1-1-580x387.png', 'lfldsfls');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'LEART', 'leart@gmail.com', 'leo123'),
(2, 'leo', 'leo@gmail.com', 'leo123'),
(3, 'LEOO', 'leo2@gmail.com', '123'),
(4, 'leooo', 'leo3@gmail.com', '$2y$10$jYYeHH4yIRLfdw3I/lA.9OSM1FffGD4xpSflRV/D92YsrWDJXlIsm'),
(5, 'leot', 'leo5@gmail.com', '$2y$10$Re11CD88drZ9RcaC9hfHjebxuoA3xW5a4uBB91p4Y9.3BVqbJEGUW'),
(6, 'leoy', 'leoy@gmail.com', '$2y$10$GzMMxUlFOFrNGGHTYWbNn.S1NKknZ2v/1bja/gKNRbK35njZK3RFm'),
(7, 'leoyy', 'leoyy@gmail.com', '$2y$10$cOHNtuUmB8dmDaI8R.6M/ucXn7dd8g5puPAhHLfbeOI1w732dQo9W'),
(8, 'leoyyy', 'leoyyy@gmail.com', '$2y$10$dE.yAf9NRv4YpzJtrdz7uuDlmiqBdTR7vo1ROEjzkvjogIg9cblc2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`fileId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `fileId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
