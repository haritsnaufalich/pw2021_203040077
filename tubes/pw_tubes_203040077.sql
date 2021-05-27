-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 11:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040077`
--

-- --------------------------------------------------------

--
-- Table structure for table `converse`
--

CREATE TABLE `converse` (
  `id` int(11) NOT NULL,
  `itemsName` varchar(100) NOT NULL,
  `itemsColor` varchar(100) NOT NULL,
  `itemsPrice` int(100) NOT NULL,
  `itemsStock` varchar(100) NOT NULL,
  `itemsIMG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `converse`
--

INSERT INTO `converse` (`id`, `itemsName`, `itemsColor`, `itemsPrice`, `itemsStock`, `itemsIMG`) VALUES
(1, 'Converse Chuck 70 - Hi - Black/Black/Egret', 'Black', 899000, '15', '01.jpg'),
(2, 'Converse Chuck Taylor All Star - Ox - Black', 'Black', 599000, '20', '02.jpg'),
(3, 'Converse Go 2 Backpack - Obsidian / Dark Obsidian', 'Black', 359000, '25', '03.jpg'),
(4, 'Converse Chuck Taylor All Star - Ox - Optical White', 'White', 599000, '10', '04.jpg'),
(5, 'Converse Speed 2 Backpack - Converse Black', 'Black', 259000, '10', '05.jpg'),
(6, 'Converse Chuck Taylor All Star Slip On Seasonal Color', 'Red', 599000, '15', '06.jpg'),
(7, 'Converse Chuck Taylor Shoe Patch Tee', 'White', 199000, '50', '07.jpg'),
(8, 'Converse Art Collage Tee', 'Black', 199000, '75', '08.jpg'),
(9, 'Converse Chuck Taylor All Star Rivals Platform High Top - Rivals - Hi', 'White', 799000, '10', '09.jpg'),
(10, 'Converse Court Photo Short Sleeve Tee - White', 'White', 259000, '50', '10.jpg'),
(11, 'Converse Leopard Infill Chuck Patch Tee - White', 'White', 199000, '75', '11.jpg'),
(12, 'Converse Track Hoodie - Metalic White', 'Metalic White', 559000, '30', '12.jpg'),
(13, 'Converse Slim Fit Paneled Jogger - Vgh - Court', 'Grey', 699000, '25', '13.jpg'),
(14, 'Converse Chuck 70 Organic Canvas - Seasonal Color Vintage Canvas', 'Khaki', 899000, '10', '14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userType`, `username`, `password`) VALUES
(2, '', 'user', '$2y$10$HxVSwlCzE6j4YuZ.t/c0/.hEqvTaUciK2NXFWMLewTSWhPE.7T/Y2'),
(5, '', 'admin', '$2y$10$mW/BfmXtsTPJqPJRg.osVOqs1vNMyNxUiYUtYvOgD3.ZYghM81GWW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `converse`
--
ALTER TABLE `converse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `converse`
--
ALTER TABLE `converse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
