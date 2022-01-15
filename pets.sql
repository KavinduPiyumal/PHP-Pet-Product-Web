-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 04:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `username` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pet_items`
--

CREATE TABLE `pet_items` (
  `i_id` int(11) NOT NULL,
  `i_title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `i_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `i_price` double NOT NULL,
  `i_size` int(11) NOT NULL,
  `i_quantity` int(11) NOT NULL,
  `i_image` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pet_items`
--

INSERT INTO `pet_items` (`i_id`, `i_title`, `i_description`, `i_price`, `i_size`, `i_quantity`, `i_image`) VALUES
(6, 'Wellness', 'Complete Health Adult Dog Food - Natural', 50.99, 1, 10, 'images/productimages/dogfood1.jpg'),
(7, 'Organix', 'Small Breed Recipe Dry Cat Food', 43.15, 500, 4, 'images/productimages/dogfood2.jpg'),
(15, 'Blue Buffalo', 'Life Protection Chicken and Brown Rice Recipe Large Breed Puppy', 34.99, 7, 7, 'images/productimages/dogfood3.jpg'),
(16, 'Whiskas', 'Dry Cat Food Chicken Recipe for Indoor Cats', 14.98, 3, 12, 'images/productimages/catfood1.jpg'),
(17, 'Purina', 'Friskies Shreds with Ocean White Fish and Tuna', 0.55, 300, 15, 'images/productimages/cat2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `pet_items`
--
ALTER TABLE `pet_items`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pet_items`
--
ALTER TABLE `pet_items`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
