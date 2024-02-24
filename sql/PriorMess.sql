-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 08:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `priormess`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BreakFast` varchar(30) NOT NULL,
  `Lunch` varchar(30) NOT NULL,
  `Snacks` varchar(30) NOT NULL,
  `Dinner` varchar(30) NOT NULL,
  `Type_Of_Payment` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `No_Of_Items` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BreakFast`, `Lunch`, `Snacks`, `Dinner`, `Type_Of_Payment`, `Date`, `No_Of_Items`) VALUES
('Breakfast', 'Lunch', 'Snacks', 'Dinner', 'Select The Type Of Payment', '2023-08-02', 0),
('Poori Sagu', 'Ghee Rice', 'Bun Samosa', 'Roti Curry', 'UPI', '2023-08-19', 0),
('Horlicks', 'Poori Sagu', 'Coffee/Tea', 'Mushroom Fried Rice', 'UPI', '2023-08-03', 0),
('Breakfast', 'Lunch', 'Snacks', 'Dinner', 'Select The Type Of Payment', '2023-08-03', 0),
('Idli-2', 'North Indian Thali', 'Bun Samosa', 'Manchurian', 'UPI', '2023-08-19', 0),
('Breakfast', 'Lunch', 'Snacks', 'Dinner', 'Select The Type Of Payment', '2023-07-31', 0),
('Breakfast', 'Lunch', 'Snacks', 'Dinner', 'Select The Type Of Payment', '2023-09-07', 0),
('Set Dosa', 'North Indian Thali', 'Veg Burgers-2', 'Ghee Rice', 'UPI', '2023-09-05', 0),
('Masala Dosa', 'South Indian Thali', 'Snacks', 'Dinner', 'UPI', '2023-09-04', 0),
('Idli-2', 'Lunch', 'Snacks', 'Dinner', 'UPI', '2023-09-27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email_ID`, `phone`, `Message`) VALUES
('Vaibhav Ra', '', 0, 'hi'),
('Vaibhav Ra', '', 0, 'hi'),
('Vaibhav Ravindra', 'vaibhavravindrarock0', 2147483647, 'hi'),
('Vaibhav Ravindra', 'vaibhavravin7@gmail.com', 8310212, 'hi'),
('Vaibhav Ravindra', 'vaibhavravindrar07@gmail.com', 122345678, 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`first_name`, `last_name`, `Email`, `password`, `usn`) VALUES
('0', '0', '0', '0', '123'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('sada', 'sdfasd', 'vaibhavravi', 'asd', 'sdf'),
('sada', 'sdfasd', 'vaibhavr7@gmail.com', 'asd', 'sdf'),
('Vaibhav', 'Ravindra', 'vaibhavr7@gmail.com', 'vaibhav', '123'),
('vaibhav', 'Ravindra', 'vaibhavravindgmail.com', '123456', '123456'),
('Vaibhav', 'Ravindra', 'vaibhavravindrmail.com', 'asdsa', 'asd'),
('Vaibhav', 'Ravindra', 'vaibhavravindramail.com', '123', '112'),
('Vaibhav', 'Ravindra', 'vaibhavravindra7@gmail.com', '1233', '1GA20IS112'),
('Vaibhav', 'Ravindra', 'vaibha@gmail.com', '123456', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
