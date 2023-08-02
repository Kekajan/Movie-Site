-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 09:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinephile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` varchar(30) NOT NULL,
  `Admin_name` varchar(40) NOT NULL,
  `Admin_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `getAdmin` BEFORE INSERT ON `admin` FOR EACH ROW BEGIN
  DECLARE new_admin_id INT;
  SET new_admin_id = (SELECT COUNT(*) FROM admin WHERE Admin_id LIKE 'CPAd%') + 1;
  SET NEW.Admin_id = CONCAT('CPAd', LPAD(new_admin_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` varchar(20) NOT NULL,
  `Customer_name` varchar(100) NOT NULL,
  `Customer_NIC` varchar(30) NOT NULL,
  `CMobile_no` varchar(20) NOT NULL,
  `CEmail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `getcust` BEFORE INSERT ON `customer` FOR EACH ROW BEGIN
  DECLARE new_cust_id INT;
  SET new_cust_id = (SELECT COUNT(*) FROM customer WHERE Customer_id LIKE 'CPCU%') + 1;
  SET NEW.Customer_id = CONCAT('CPCU', LPAD(new_cust_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `Moderator_id` varchar(30) NOT NULL,
  `Moderator_name` varchar(40) NOT NULL,
  `MContact_no` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `moderator`
--
DELIMITER $$
CREATE TRIGGER `getMod` BEFORE INSERT ON `moderator` FOR EACH ROW BEGIN
  DECLARE new_mod_id INT;
  SET new_mod_id = (SELECT COUNT(*) FROM moderator WHERE Moderator_id LIKE 'CPMOD%') + 1;
  SET NEW.Moderator_id = CONCAT('CPMOD', LPAD(new_mod_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Movie_id` varchar(30) NOT NULL,
  `Movie_name` varchar(40) NOT NULL,
  `Movie_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `movie`
--
DELIMITER $$
CREATE TRIGGER `getMov` BEFORE INSERT ON `movie` FOR EACH ROW BEGIN
  DECLARE new_mov_id INT;
  SET new_mov_id = (SELECT COUNT(*) FROM movie WHERE Movie_id LIKE 'CPMov%') + 1;
  SET NEW.Movie_id = CONCAT('CPMov', LPAD(new_mov_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `movie show`
--

CREATE TABLE `movie show` (
  `Show_id` varchar(30) NOT NULL,
  `Movie_id` varchar(30) NOT NULL,
  `MLanguage` varchar(40) NOT NULL,
  `Show_date` date NOT NULL,
  `Show_starttime` varchar(40) NOT NULL,
  `Show_endtime` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `movie show`
--
DELIMITER $$
CREATE TRIGGER `getShow` BEFORE INSERT ON `movie show` FOR EACH ROW BEGIN
  DECLARE new_show_id INT;
  SET new_show_id = (SELECT COUNT(*) FROM movieshow WHERE Show_id LIKE 'CPSH%') + 1;
  SET NEW.Show_id = CONCAT('CPSH', LPAD(new_show_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `Screen_id` varchar(30) NOT NULL,
  `Screen_name` varchar(40) NOT NULL,
  `No_of_Seats` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `screen`
--
DELIMITER $$
CREATE TRIGGER `getSrn` BEFORE INSERT ON `screen` FOR EACH ROW BEGIN
  DECLARE new_srn_id INT;
  SET new_srn_id = (SELECT COUNT(*) FROM screen WHERE Screen_id LIKE 'CPSrn%') + 1;
  SET NEW.Screen_id = CONCAT('CPSrn', LPAD(new_srn_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `Threatre_id` varchar(30) NOT NULL,
  `Threatre_name` varchar(40) NOT NULL,
  `Threatre_City` varchar(40) NOT NULL,
  `Threatre_Location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `theatre`
--
DELIMITER $$
CREATE TRIGGER `getTre` BEFORE INSERT ON `theatre` FOR EACH ROW BEGIN
  DECLARE new_tre_id INT;
  SET new_tre_id = (SELECT COUNT(*) FROM theatre WHERE Threatre_id LIKE 'CPTre%') + 1;
  SET NEW.Threatre_id = CONCAT('CPTre', LPAD(new_tre_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `Ticket_id` varchar(30) NOT NULL,
  `Screen_id` varchar(30) NOT NULL,
  `Seat_no` varchar(40) NOT NULL,
  `Show_date` date NOT NULL,
  `Show_time` varchar(40) NOT NULL,
  `Ticket_price` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `tickets`
--
DELIMITER $$
CREATE TRIGGER `getTick` BEFORE INSERT ON `tickets` FOR EACH ROW BEGIN
  DECLARE new_tick_id INT;
  SET new_tick_id = (SELECT COUNT(*) FROM tickets WHERE Ticket_id LIKE 'CPTick%') + 1;
  SET NEW.Ticket_id = CONCAT('CPTick', LPAD(new_tick_id, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Transaction_id` varchar(30) NOT NULL,
  `Customer_id` varchar(30) NOT NULL,
  `Ticket_no` varchar(30) NOT NULL,
  `Trans_date` date NOT NULL,
  `Total_payment` varchar(40) NOT NULL,
  `Payment_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `transaction`
--
DELIMITER $$
CREATE TRIGGER `getTran` BEFORE INSERT ON `transaction` FOR EACH ROW BEGIN
  DECLARE new_tran_id INT;
  SET new_tran_id = (SELECT COUNT(*) FROM transaction WHERE Transaction_id LIKE 'CPTran%') + 1;
  SET NEW.Transaction_id = CONCAT('CPTran', LPAD(new_tran_id, 3, '0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`),
  ADD KEY `Customer_name` (`Customer_name`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`Moderator_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Movie_id`);

--
-- Indexes for table `movie show`
--
ALTER TABLE `movie show`
  ADD PRIMARY KEY (`Show_id`),
  ADD KEY `movie show_FK_1` (`Movie_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`Screen_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`Threatre_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`Ticket_id`),
  ADD KEY `tickets_FK_1` (`Screen_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Transaction_id`),
  ADD KEY `transaction_FK_1` (`Customer_id`),
  ADD KEY `transaction_FK_2` (`Ticket_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`Customer_name`) REFERENCES `transaction` (`Transaction_id`);

--
-- Constraints for table `movie show`
--
ALTER TABLE `movie show`
  ADD CONSTRAINT `movie show_FK_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie` (`Movie_id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_FK_1` FOREIGN KEY (`Screen_id`) REFERENCES `screen` (`Screen_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_FK_1` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`),
  ADD CONSTRAINT `transaction_FK_2` FOREIGN KEY (`Ticket_no`) REFERENCES `tickets` (`Ticket_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
