-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 07:46 AM
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
-- Database: `foodweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_details`
--

CREATE TABLE `a_details` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `a_phone` varchar(10) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_details`
--

INSERT INTO `a_details` (`a_id`, `a_name`, `a_email`, `a_phone`, `a_password`) VALUES
(1, 'admin', 'meetpadaliya55@gmail.com', '1234567', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `c_register`
--

CREATE TABLE `c_register` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_username` varchar(20) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_password` varchar(10) NOT NULL,
  `c_phone` varchar(10) NOT NULL,
  `c_address` varchar(300) NOT NULL,
  `c_status` int(11) NOT NULL DEFAULT 1,
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_register`
--

INSERT INTO `c_register` (`c_id`, `c_name`, `c_username`, `c_email`, `c_password`, `c_phone`, `c_address`, `c_status`, `verification_code`, `is_verified`) VALUES
(2, 'meet', 'meet@1234', 'meetpadaliya55@gmail.com', '12345', '12345678', 'Gandhinagar', 1, '', 0),
(4, 'mansi', 'mansi@12', 'mansisathavara12@gmail.com', '12345', '989898', 'Ahmedabad', 1, '$v_code', 0),
(5, 'ayushi', 'ayushi@34', 'ayushiprajapati34@gmail.com', '1234', '9512334525', 'patdi', 1, '$v_code', 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_details`
--

CREATE TABLE `d_details` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_email` varchar(30) NOT NULL,
  `d_phone` int(10) NOT NULL,
  `d_username` varchar(20) NOT NULL,
  `d_password` varchar(10) NOT NULL,
  `d_address` varchar(300) NOT NULL,
  `d_vehicle_type` varchar(12) NOT NULL,
  `d_vehicle_rc` varchar(20) NOT NULL,
  `d_license` varchar(20) NOT NULL,
  `d_bankname` varchar(20) NOT NULL,
  `d_branchname` varchar(20) NOT NULL,
  `d_account` varchar(20) NOT NULL,
  `d_ifsc` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Requests` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `d_details`
--

INSERT INTO `d_details` (`d_id`, `d_name`, `d_email`, `d_phone`, `d_username`, `d_password`, `d_address`, `d_vehicle_type`, `d_vehicle_rc`, `d_license`, `d_bankname`, `d_branchname`, `d_account`, `d_ifsc`, `status`, `date`, `Requests`) VALUES
(1, 'meet', 'meetpadaliya55@gmail.com', 12345678, 'meet@1234', '12345', 'Gandhinagar', 'bike', '4567897645', '234568765', 'sbi', 'nikol', '123455432', '87654567', 1, '2024-09-24 11:03:00', 'Pending'),
(2, 'mansi', 'mansisathavara12@gmail.com', 989898, 'mansi@12', '12345', 'Ahmedabad', 'Scooter', '45665523445', '7789674', 'Boi', 'gota', '896542338', '896547231', 1, '2024-09-24 10:30:19', 'Pending'),
(3, 'jack', 'jack12@gmail.com', 123456, 'jack@12', '1234', 'naroda', 'bike', '345678', '987654', 'icici', 'naroda', '889859', '87654', 1, '2024-10-05 04:43:16', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `res_details`
--

CREATE TABLE `res_details` (
  `res_id` int(11) NOT NULL,
  `res_name` varchar(20) NOT NULL,
  `res_email` varchar(30) NOT NULL,
  `res_phone` int(10) NOT NULL,
  `res_address` varchar(300) NOT NULL,
  `res_fssai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `r_o_details`
--

CREATE TABLE `r_o_details` (
  `r_o_id` int(11) NOT NULL,
  `r_o_name` varchar(25) NOT NULL,
  `r_o_email` varchar(30) NOT NULL,
  `r_o_phone` int(10) NOT NULL,
  `r_o_username` varchar(15) NOT NULL,
  `r_o_password` varchar(10) NOT NULL,
  `r_o_address` varchar(300) NOT NULL,
  `r_o_bankname` varchar(10) NOT NULL,
  `r_o_branchname` varchar(10) NOT NULL,
  `r_o_account` int(20) NOT NULL,
  `r_o_ifsc` int(12) NOT NULL,
  `res_name` varchar(20) NOT NULL,
  `res_email` varchar(30) NOT NULL,
  `res_phone` varchar(10) NOT NULL,
  `res_address` varchar(300) NOT NULL,
  `res_fssai` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date/time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Requests` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `r_o_details`
--

INSERT INTO `r_o_details` (`r_o_id`, `r_o_name`, `r_o_email`, `r_o_phone`, `r_o_username`, `r_o_password`, `r_o_address`, `r_o_bankname`, `r_o_branchname`, `r_o_account`, `r_o_ifsc`, `res_name`, `res_email`, `res_phone`, `res_address`, `res_fssai`, `status`, `date/time`, `Requests`) VALUES
(6, 'meet', 'meetpadaliya55@gmail.com', 1234567, 'meet@123', '12345', 'Gandhinagar', 'sbi', 'nikol', 23456712, 433435, 'Shaktisandwich', 'shakti12@gmail.com', '8989', 'Gandhinagar', '87654234567', 1, '2024-10-05 04:56:10', 'Pending'),
(7, 'mansi', 'mansisathavara12@gmail.com', 989898, 'mansi@12', '12345', 'Ahmedabad', 'Boi', 'gota', 697456321, 98647531, 'lapinoz', 'lapinoz13@gmail.com', '747474', 'Ahmedabad', '9654123675', 1, '2024-09-24 10:38:09', 'Pending'),
(9, 'rushi', 'rushi14@gmail.com', 1234567, 'rushi@14', '12345', 'surat', 'pnb', 'vesu', 2147483647, 795651155, 'mc donald&#039;s', 'mcdonald2@gmail.com', '1234567', 'Surat', '9876543', 1, '2024-10-04 13:44:13', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_details`
--
ALTER TABLE `a_details`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `c_register`
--
ALTER TABLE `c_register`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `d_details`
--
ALTER TABLE `d_details`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `res_details`
--
ALTER TABLE `res_details`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `r_o_details`
--
ALTER TABLE `r_o_details`
  ADD PRIMARY KEY (`r_o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_details`
--
ALTER TABLE `a_details`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_register`
--
ALTER TABLE `c_register`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `d_details`
--
ALTER TABLE `d_details`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `res_details`
--
ALTER TABLE `res_details`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_o_details`
--
ALTER TABLE `r_o_details`
  MODIFY `r_o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
