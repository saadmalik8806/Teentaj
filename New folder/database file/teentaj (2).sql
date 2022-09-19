-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 03:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teentaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `repassword`, `token`, `status`) VALUES
(1, 'Saad', 'Malik', 'saadmalik8806@gmail.com', '$2y$10$u0twhxmznJdweMcUOyfoYOyfw6aoZT5rHtgYRnKE/FLkjJ17OmXJq', '$2y$10$sLeJ8Ko/P4ENzHTW4RUWreMAnFSBNBd5JSlS8ES8ASejGcgmn0rEu', 'bbe240256c4549d223c12f3604e174', ''),
(2, 'Saad', 'Malik', 'saadmalik9271@gmail.com', '$2y$10$EborK/ffW.ENuH/nbb.cveqsH5VQQQdCQkOCRrEvvzu5fl9onbdpC', '$2y$10$IIdXz7jDnC3ju9JiGKBTnu4VgbxKXYToOkguv3lxk4Vez9Vv81BVS', 'fcccc717adb1989387d94f8faeba11', ''),
(3, 'admin', 'admin', 'amanaman@gmail.com', '$2y$10$TgCF1aLvBT/DXyNpaNDYBedWH8omW0cO00.0NHMtJ/KKHzqVHHtjK', '$2y$10$BOlNYb.JXhruZAuUu0zd0OFUAXiL/MKL1dUPKBRDlpbtCCKbrh7zW', 'ca77250ef113b349db5ec28bd02a6a', '');

-- --------------------------------------------------------

--
-- Table structure for table `idcontact`
--

CREATE TABLE `idcontact` (
  `user_id` int(255) NOT NULL,
  `register_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(300) NOT NULL,
  `mind` varchar(255) NOT NULL,
  `get_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `phonenumber`, `country`, `password`, `repassword`) VALUES
(1, 'saadmalik', 'saadmalik8806@gmail.com', '8806938127', 'India', '$2y$10$dDHZHHiqOZzUP5R4UdnphemrrQtUM4LQtP1VFurC0Gbc9boivlnny', '$2y$10$rnpFInod2nSoew0I7FDEVOE61ZJ6dZv/BU1hsyXv3g0Z9h8ENt7Lq'),
(8, 'saadmalik', ' admin@admin.com', '8806938127', 'India', '$2y$10$jZf04vX3t.wMPUg1/MFplO2/U0ceTMzPJvyCpyor/zvr34gLgx9A2', '$2y$10$5FsuNrLx7cBC1IFQI4C0meIWfVBegLE5fWZcAHMVmHg0xMBlRRg1S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idcontact`
--
ALTER TABLE `idcontact`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `idcontact`
--
ALTER TABLE `idcontact`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
