-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 04:12 PM
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
-- Database: `testt`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CUSTOMER_ID` decimal(8,0) NOT NULL,
  `CUSTOMER_NAME` varchar(100) DEFAULT NULL,
  `CUSTOMER_EMAIL` varchar(100) DEFAULT NULL,
  `CUSTOMER_PHONE` varchar(100) DEFAULT NULL,
  `CUSTOMER_ADDRESS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CUSTOMER_ID`, `CUSTOMER_NAME`, `CUSTOMER_EMAIL`, `CUSTOMER_PHONE`, `CUSTOMER_ADDRESS`) VALUES
(1, 'John Doe', 'johndoe@example.com', '123-456-7890', '123 Main St, Anytown USA'),
(2, 'Jane Doe', 'janedoe@example.com', '555-555-5555', '456 Elm St, Anytown USA'),
(3, 'Bob Smith', 'bobsmith@example.com', '987-654-3210', '789 Oak Ave, Anytown USA'),
(4, 'Paul Reyes', 'paulreyes@example.com', '678-123-4567', '731 North St, Anytown USA'),
(5, 'Billy Alexander', 'billyalexander@example.com', '777-888-9999', '332 South St, Anytown USA'),
(6, 'Marrie Anne', 'marrieanne@example.com', '895-348-3472', '332 West St, Anytown USA');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `PURCHASES_ID` int(11) NOT NULL,
  `CUSTOMER_ID` decimal(8,0) DEFAULT NULL,
  `PURCHASE_DATE` date DEFAULT NULL,
  `TOTAL_PRICE` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`PURCHASES_ID`, `CUSTOMER_ID`, `PURCHASE_DATE`, `TOTAL_PRICE`) VALUES
(1, 1, '2022-01-15', 100),
(2, 1, '2022-02-20', 150),
(3, 2, '2022-03-05', 200),
(4, 2, '2022-04-10', 75),
(5, 2, '2022-06-15', 300),
(6, 3, '2022-01-30', 50),
(7, 3, '2022-05-01', 125),
(8, 5, '2022-01-14', 275),
(9, 2, '2022-01-07', 135),
(10, 5, '2022-01-24', 225),
(11, 1, '2025-01-16', 321),
(12, 6, '2025-01-16', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`PURCHASES_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `PURCHASES_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
