-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 05:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm rental system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `start_date`, `end_date`, `equipment_id`, `booking_date`) VALUES
(1, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-22', '2024-03-21', 2, '2024-03-18 20:31:32'),
(2, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-22', '2024-03-21', 2, '2024-03-18 20:32:56'),
(3, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-21', '2024-03-31', 5, '2024-03-19 13:24:39'),
(4, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-21', '2024-03-31', 5, '2024-03-19 13:26:54'),
(5, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-21', '2024-03-31', 5, '2024-03-19 13:27:46'),
(6, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-21', '2024-03-22', 5, '2024-03-19 13:28:09'),
(7, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:29:09'),
(8, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:29:51'),
(9, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:30:58'),
(10, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:31:12'),
(11, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:31:37'),
(12, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:32:49'),
(13, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:34:05'),
(14, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:35:10'),
(15, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-28', '2024-03-30', 5, '2024-03-19 13:35:49'),
(16, 'Narasha Mepukori', 'Narashamepukori@gmail.com', '0798242583', '2024-03-21', '2024-03-23', 5, '2024-03-20 04:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `message`, `submission_date`) VALUES
(1, 'Narasha Mepukori', 'Narashamepukori@gmail.com', 'hi', '2024-03-18 20:34:39'),
(2, 'Narasha Mepukori', 'Narashamepukori@gmail.com', 'hi', '2024-03-20 04:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `farm_equipment`
--

CREATE TABLE `farm_equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rental_price` decimal(10,2) NOT NULL,
  `available` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farm_equipment`
--

INSERT INTO `farm_equipment` (`id`, `name`, `description`, `image`, `rental_price`, `available`) VALUES
(1, 'Cultivator', 'Brand New Cultivator', 'images/cultivator.png', 9000.00, 1),
(2, 'Tractor', 'Used Tractor', 'images/tractor.png', 10000.00, 1),
(3, 'Wheelbarow', 'Brand New Wheelbarow', 'images/wheelbarow.png', 6000.00, 1),
(4, 'Axe', 'Brand New Axe', 'images/axe.png', 4000.00, 1),
(5, 'Pickaxe', 'Brand New Pickaxe', 'images/pickaxe.png', 3000.00, 1),
(6, 'Spade', 'Brand New Spade', 'images/spade.png', 900.00, 1),
(7, 'Rage', 'Brand New Rage', 'images/rage.png', 400.00, 1),
(10, 'Sickle', 'Brand New Sickle', 'images/sickle.png', 300.00, 1),
(11, 'Grab hoe', 'Brand New Grab Hoe', 'images/hoe.png', 500.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiry_date` varchar(7) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `card_number`, `expiry_date`, `cvv`, `total_amount`) VALUES
(1, '123456yui', '12/27', '232', 12345.00),
(2, '1234567899', '10/27', '123', 40000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'ann', '1234'),
(3, 'juliet', 'juliet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm_equipment`
--
ALTER TABLE `farm_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farm_equipment`
--
ALTER TABLE `farm_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
