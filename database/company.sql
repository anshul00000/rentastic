-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2025 at 02:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` varchar(255) NOT NULL,
  `ADMIN_PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `PHONE` int(15) DEFAULT NULL,
  `NAME` varchar(25) DEFAULT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_PASSWORD`, `EMAIL`, `PHONE`, `NAME`, `ADDRESS`) VALUES
('Anshul', 'anshul@12345', 'anshulchaurasiya05@g', 2147483647, 'Anshul Chaurasiya', 'Gwalior ');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BOOK_ID` int(11) NOT NULL,
  `CAR_ID` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `BOOK_PLACE` varchar(255) NOT NULL,
  `BOOK_DATE` date NOT NULL,
  `DURATION` int(11) NOT NULL,
  `PHONE_NUMBER` bigint(20) NOT NULL,
  `DESTINATION` varchar(255) NOT NULL,
  `RETURN_DATE` date NOT NULL,
  `PRICE` int(11) NOT NULL,
  `BOOK_STATUS` varchar(255) NOT NULL DEFAULT 'UNDER PROCESSING',
  `OWNER_ID` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `CAR_ID` int(11) NOT NULL,
  `CAR_NAME` varchar(255) NOT NULL,
  `BRAND` varchar(20) DEFAULT NULL,
  `FUEL_TYPE` varchar(255) NOT NULL,
  `CAPACITY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `CAR_IMG` varchar(255) NOT NULL,
  `AVAILABLE` varchar(255) NOT NULL,
  `ADMIN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`CAR_ID`, `CAR_NAME`, `BRAND`, `FUEL_TYPE`, `CAPACITY`, `PRICE`, `CAR_IMG`, `AVAILABLE`, `ADMIN`) VALUES
(28, 'Thar', 'Mahindra', 'Electric', 6, 4999, 'IMG-68de7251873b13.36027691.jpg', 'Y', 'anshulchaurasiya05@g'),
(29, 'Scorpio', 'Mahindra', 'Diesel', 6, 4999, 'IMG-68de72e47e8f55.53201079.png', 'Y', 'anshulchaurasiya05@g'),
(30, 'Swift', 'maruti suzuki', 'Petrol ', 4, 2999, 'IMG-68de7350556ce7.43881890.webp', 'Y', 'anshulchaurasiya05@g'),
(31, 'Tiago ', 'tata', 'Petrol', 6, 3999, 'IMG-68de7416718654.75703555.png', 'Y', 'anshulchaurasiya05@g'),
(32, 'nissan ', 'nissan ', 'Diesel', 7, 5999, 'IMG-68de751c796ef1.11374821.png', 'Y', 'anshulchaurasiya05@g'),
(33, 'Carens', 'kia ', 'Petrol ', 5, 4999, 'IMG-68de75a97c43f1.11118752.png', 'Y', 'anshulchaurasiya05@g'),
(34, 'I20', 'hyundai', 'Diesel', 4, 2999, 'IMG-68de75e3c20b58.91433058.png', 'Y', 'anshulchaurasiya05@g'),
(35, 'Nisan ', 'nisan', 'Diesel', 7, 5999, 'IMG-68de76346b5286.12460613.png', 'Y', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FED_ID` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAY_ID` int(11) NOT NULL,
  `BOOK_ID` int(11) NOT NULL,
  `CARD_NO` varchar(255) NOT NULL,
  `EXP_DATE` varchar(255) NOT NULL,
  `CVV` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FNAME` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `LIC_NUM` varchar(255) NOT NULL,
  `PHONE_NUMBER` bigint(11) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FNAME`, `LNAME`, `EMAIL`, `LIC_NUM`, `PHONE_NUMBER`, `PASSWORD`, `GENDER`) VALUES
('Anshul', 'Chaurasiya', 'anshulchaurasiya05@gmail.com', '000000000', 8964049390, 'e50838e2bd690b2081027214515d7ff4', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BOOK_ID`),
  ADD KEY `CAR_ID` (`CAR_ID`),
  ADD KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`CAR_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FED_ID`),
  ADD KEY `TEST` (`EMAIL`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAY_ID`),
  ADD UNIQUE KEY `BOOK_ID` (`BOOK_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BOOK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `CAR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FED_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`CAR_ID`) REFERENCES `cars` (`CAR_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`EMAIL`) REFERENCES `users` (`EMAIL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `TEST` FOREIGN KEY (`EMAIL`) REFERENCES `users` (`EMAIL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`BOOK_ID`) REFERENCES `booking` (`BOOK_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
