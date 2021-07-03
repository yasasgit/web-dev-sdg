-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 06:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy_stats`
--

CREATE TABLE `academy_stats` (
  `district` varchar(50) NOT NULL,
  `Arts` int(11) NOT NULL,
  `ManagementAndCommerce` int(11) NOT NULL,
  `Law` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Medicine` int(11) NOT NULL,
  `VeterinaryScience` int(11) NOT NULL,
  `Dentistry` int(11) NOT NULL,
  `Agriculture` int(11) NOT NULL,
  `Engineering` int(11) NOT NULL,
  `Architecture` int(11) NOT NULL,
  `ComputerScience` int(11) NOT NULL,
  `OtherCourses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academy_stats`
--

INSERT INTO `academy_stats` (`district`, `Arts`, `ManagementAndCommerce`, `Law`, `Science`, `Medicine`, `VeterinaryScience`, `Dentistry`, `Agriculture`, `Engineering`, `Architecture`, `ComputerScience`, `OtherCourses`) VALUES
('Ampara', 352, 25, 3, 8, 1, 3, 1, 8, 10, 3, 54, 19),
('Anuradhapura', 425, 64, 9, 18, 15, 5, 7, 13, 13, 1, 42, 8),
('Badulla', 269, 50, 6, 56, 11, 3, 2, 12, 20, 2, 56, 16),
('Batticalo', 228, 25, 3, 6, 4, 5, 3, 2, 8, 4, 35, 21),
('Colombo', 460, 650, 34, 540, 194, 24, 25, 93, 230, 61, 292, 88),
('Galle', 563, 179, 9, 168, 60, 10, 5, 65, 69, 13, 113, 58),
('Gampaha', 603, 259, 12, 209, 51, 7, 1, 46, 60, 10, 114, 32),
('Hambantota', 297, 44, 6, 85, 16, 4, 3, 18, 34, 1, 54, 23),
('Jaffna', 331, 43, 8, 70, 18, 1, 9, 36, 50, 8, 113, 53),
('Kalutara', 474, 171, 8, 122, 22, 2, 1, 39, 18, 5, 9, 28),
('Kandy', 398, 110, 11, 184, 40, 4, 8, 69, 45, 11, 74, 12),
('Kegalle', 339, 65, 2, 75, 6, 1, 9, 30, 26, 2, 52, 15),
('Kilinochchi', 42, 4, 5, 2, 1, 7, 9, 1, 3, 2, 2, 1),
('Kurunegala', 759, 182, 7, 170, 34, 4, 2, 88, 53, 16, 106, 46),
('Mannar', 48, 6, 1, 5, 3, 2, 7, 2, 1, 4, 2, 1),
('Matale', 171, 22, 2, 18, 10, 2, 3, 8, 6, 3, 27, 11),
('Matara', 394, 139, 4, 162, 42, 2, 2, 63, 56, 7, 122, 62),
('Moneragala', 171, 33, 1, 2, 3, 4, 2, 2, 8, 1, 17, 3),
('Mullaitivu', 40, 5, 2, 5, 1, 7, 8, 1, 1, 3, 1, 2),
('Nuwara Eliya', 152, 27, 4, 5, 3, 5, 6, 2, 5, 2, 27, 5),
('Polonnaruwa', 131, 23, 2, 2, 2, 4, 3, 6, 1, 5, 13, 1),
('Puttalam', 254, 53, 6, 18, 13, 3, 2, 15, 10, 5, 17, 9),
('Rathnapura', 449, 133, 8, 107, 29, 2, 1, 41, 26, 3, 89, 34),
('Trincomalee', 216, 32, 3, 7, 5, 1, 4, 3, 4, 1, 16, 14),
('Vavuniya', 73, 12, 1, 1, 5, 1, 2, 2, 6, 1, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `email` varchar(320) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `investment_type` varchar(30) NOT NULL,
  `investment_stage` varchar(20) NOT NULL,
  `invest_amount` varchar(25) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(14) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `country` varchar(2) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy_stats`
--
ALTER TABLE `academy_stats`
  ADD PRIMARY KEY (`district`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investors`
--
ALTER TABLE `investors`
  ADD CONSTRAINT `investors_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
