-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 11:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `15618223036`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` int(11) NOT NULL,
  `about_me` varchar(555) NOT NULL,
  `skillset` varchar(555) NOT NULL,
  `project_details` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `about_me`, `skillset`, `project_details`) VALUES
(1, 'I am Monij Bhatti completed BCA degree in Saurashtra University. now i started MCA in Atmiya University, Rajkot. I am a passionate and creative person, I like to explore as many things as possible and am curious to learn new things and apply that knowledge.', 'Backend Development', 'VFA - Ai Based farming Assistant\r\n\r\nVFA is a farming technology platform where we work with farmers directly. We at VFA follow our mission of bridging the gap between technology and agriculture in India with a vision to reach out to maximum Indian farmers. We support farmers to “Grow efficiently, Grow more” through the systematic implementation of scientific techniques by providing critical information at appropriate times and regular monitoring.\r\n\r\nAt VFA, we understand each farmer’s requirements, we believe every farmer deserves a chance - the cha');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_sku` varchar(50) NOT NULL,
  `product_barcode` varchar(50) NOT NULL,
  `product_weight` decimal(10,0) NOT NULL,
  `product_dimensions` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_variants` varchar(255) NOT NULL,
  `shipping_info` varchar(255) NOT NULL,
  `seo_info` varchar(255) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_features` text NOT NULL,
  `product_benefites` text NOT NULL,
  `related_products` varchar(255) NOT NULL,
  `product_reviews` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_filenames` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimensions`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benefites`, `related_products`, `product_reviews`, `created_at`, `image_filenames`) VALUES
(1, 'test', 'test', 'test', 5000, 'test', 'test', 5, 'test', 10, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2023-11-22 05:37:10', './images/bitnami.ico');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobil_no` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `education` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `first_name`, `middle_name`, `last_name`, `email`, `mobil_no`, `password`, `city`, `state`, `country`, `education`, `gender`) VALUES
(1, 'Monij', 'Rustamsha', 'Bhatti', 'monijbhatti555@gmail.com', '9265215405', '1234', 'Rajkot', 'Gujarat', 'India', 'MCA', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
