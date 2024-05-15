-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 07:00 AM
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
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Vegetables'),
(2, 'Dairy'),
(3, 'packets');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Price` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Expiry Date` date NOT NULL,
  `Mfg Date` date NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `Name`, `Price`, `Quantity`, `Expiry Date`, `Mfg Date`, `Image`, `Category`) VALUES
(1, 'Potato', 25, 100, '2024-05-10', '2024-05-01', 'potato.png', 'Vegetables'),
(2, 'Milk', 30, 50, '2024-05-13', '2024-05-10', 'Milk.png', 'Dairy');

-- --------------------------------------------------------

--
-- Table structure for table `logistic`
--

CREATE TABLE `logistic` (
  `shipment_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `delivery_type` varchar(10) NOT NULL,
  `delivery_charges` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `order_date_time` datetime NOT NULL,
  `total_amount` decimal(15,0) NOT NULL,
  `item_qty` int(12) NOT NULL,
  `item_price` decimal(21,0) NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `order_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_amount` decimal(7,0) NOT NULL,
  `payment_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(10) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `profit_loss` decimal(7,0) NOT NULL,
  `item_qty` int(10) NOT NULL,
  `total_sold_amount` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fname`, `lname`, `pwd`, `mobile`, `mail`) VALUES
(5, 'Javed', 'Akhtar', '12345', '1234567892', ''),
(6, 'Harsh ', 'Sahu', '12345', '1245684752', 'harsh@gmail.com'),
(7, 'Admin', 'Admin', '123456', '7235047914', 'admin@gms.com'),
(2, 'Harsh', 'Sahu', '123456', '9120738474', ''),
(3, 'Ashish ', 'Sahu', '123456', '9198113160', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `logistic`
--
ALTER TABLE `logistic`
  ADD PRIMARY KEY (`shipment_id`),
  ADD KEY `fk_order_id` (`order_id`),
  ADD KEY `fk_users_id` (`mobile`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_us_id` (`mobile`),
  ADD KEY `fk_it_id` (`item_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_usr_id` (`mobile`),
  ADD KEY `fk_ord_id` (`order_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `fk_its_id` (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logistic`
--
ALTER TABLE `logistic`
  MODIFY `shipment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_ord_id` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
