-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 02:49 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'Molos', '044494134'),
(2, 'Arianit', '12345678'),
(3, 'Fatlind', 'Hamza');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `birthday` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `email`, `password`, `gender`, `birthday`) VALUES
(1, 'Arianit', 'Tershnjaku', 'arianittershnjaku@gmail.com', '$2y$10$Q2OeHQLgkIPtwpUbKLueu.Nul7Hsd2BlPYxpm6/G/mka7.NU8WOu.', 'Mashkull', '1994-07-27'),
(3, 'Ari', 'Tershnjaku', 'arianit.shd@gmail.com', 'a4c9599d05ed51a4aec70e08bde00771', 'Mashkull', '1994-07-27'),
(4, 'Niti', 'Tershnjaku', 'shkolladigjitaleprizren@gmail.', 'a4c9599d05ed51a4aec70e08bde00771', 'Mashkull', '1994-07-27'),
(5, 'Fatjona', 'Berisha', 'hoxhajfatjona@gmail.com', 'a4c9599d05ed51a4aec70e08bde00771', 'Femer', '1995-08-28'),
(6, 'asxa', 'sxasxassa', 'xasxas', '5765fafd258a5a1e87c0582a67862675', 'Mashkull', '2023-01-03'),
(7, 'Amir', 'Haliti', 'amir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-22'),
(8, 'Arianit123', 'Tershnjaku123', 'almirpinduku@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mashkull', '2014-01-05'),
(9, 'Ledri', 'Bilurdagu', 'ledri@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(10, 'Ledri2', 'Bilurdagu2', 'ledri2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(11, 'Ledri3', 'Bilurdagu3', 'ledri24@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Mashkull', '2022-12-24'),
(12, 'lis', 'collaku', 'lis@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(13, '2e323', '32e2e', 'admin@ad32e2min.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(14, 'qwewq', 'ewqeqwe', 'prizrqween@shkolladigjitale.co', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(15, '21e4wdq', '12ewq', 'priqwezren@shkolladigjitale.co', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(16, '32e23', '23e23e', 'priz2e2ren@shkolladigjitale.co', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(17, 'Harun', 'Pasuli', 'harun@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2022-12-24'),
(18, 'Ledjan', 'Bajrami', 'ledjan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Mashkull', '2023-01-01'),
(19, 'Molos', 'Hulaj', 'molos@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2023-02-03'),
(20, 'Fatlind', 'Ukaj', 'fatlind@gmail.com', '$2y$10$dlFsHtuuDAEAVwVE1TK9TupSYd30MpRppJPk4RlBfHV.fosWA7PZa', 'Mashkull', '2012-12-12'),
(21, 'lorik', 'Pista', 'lorik@gmail.com', '$2y$10$PkIBVF2RzG97YbuhoU8PwOnPAAmeYge0FPtSJ773o33.CzCpmfTfa', 'Mashkull', '2020-01-01'),
(22, 'fcfcf', 'fbccbfcfb', 'arianittershnjaku@fhfh.fghg', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2023-03-30'),
(23, 'Fatlind123', 'Ukaj123', 'fatlind123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Mashkull', '2023-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `fileUpload` varchar(255) DEFAULT NULL,
  `fileDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fileName`, `fileUpload`, `fileDescription`) VALUES
(12, 'liswfscwqaqaqw', 'dallimi_While_Do.jpg', 'werqw34rqwerewrewqra       wdxewxwexdeddex                 '),
(16, '31 janari do të jetë dita e fundit – Microsoft do të ndalojë shitjen e Windows 10', 'win10-wallpaper-800x450-1-780x439.jpg', 'Microsoft do të ndalojë shitjen e Windows 10 Home dhe Pro për klientët javën e ardhshme, shkroi kompania në faqen e produktit.\r\n\r\n“31 janari 2023 do të jetë dita e fundit që ky shkarkim i Windows 10 ofrohet për shitje”, shkroi Microsoft në internet. “Windows 10 do të mbetet i mbështetur me përditësime sigurie që ndihmojë në mbrojtjen e kompjuterit tuaj nga viruset, spyware dhe malware të tjerë deri më 14 tetor 2025”.\r\nNdërsa Microsoft nuk do të shesë më Windows 10 shkarkimet dhe kodet e licencës, është e paqartë nëse njerëzit do të jenë në gjendje të blejnë Windows 10 nga shitës të tjerë me pakicë pas kësaj date.\r\n\r\nMicrosoft njoftoi në qershor 2021 se do të ndalonte mbështetjen e Windows 10 në 2025, një dekadë pasi sistemi operativ u lansua në vitin 2015. /Telegrafi/'),
(21, 'Arianit', 'foto.jpg', 'wukdsiakhdsasjkdASDSAS'),
(22, 'iphone13 pro max', 'win10.jpg', 'wrfdgvfddfg'),
(23, 'iphone12wsq pro max', 'Apple.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;