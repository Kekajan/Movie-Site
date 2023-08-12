-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 04:38 PM
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
  `Screen_id` varchar(30) NOT NULL,
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
  `User_id` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` varchar(255) NOT NULL,
  `Movie_id` varchar(30) NOT NULL,
  `Screen_id` varchar(30) NOT NULL,
  `Show_id` varchar(30) NOT NULL,
  `Theatre_id` varchar(30) NOT NULL,
  `Ticket_id` varchar(30) NOT NULL,
  `Transaction_id` varchar(30) NOT NULL,
  `User_fname` varchar(255) NOT NULL,
  `User_lname` varchar(255) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `User_dob` varchar(255) NOT NULL,
  `User_contactno` varchar(255) NOT NULL,
  `User_username` varchar(255) NOT NULL,
  `User_pwd` varchar(255) NOT NULL,
  `User_type` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Movie_id`, `Screen_id`, `Show_id`, `Theatre_id`, `Ticket_id`, `Transaction_id`, `User_fname`, `User_lname`, `User_email`, `User_dob`, `User_contactno`, `User_username`, `User_pwd`, `User_type`) VALUES
('ADM001', '', '', '', '', '', '', 'Sakuni', 'Kodithuwakku', 'saku1@gmail.com', '2023-08-04', '0713360834', 'SAKU', '$2y$10$LSnXtMPipxEEF7W8v.kQPueaPMjGz0aGDIM4LoS4j7Y6oxsYN.jN6', 'Admin'),
('CPU001', '', '', '', '', '', '', 'sa', 'gd', 'wda@gns.com', '2023-08-04', '0412233743', 'test', '$2y$10$LmNbMP1kK6.mpuOHDJbzbO9u7MLjfO2JYBGm48kF7diRLauTBQw/O', 'User'),
('CPU002', '', '', '', '', '', '', 'sa', 'gd', 'wda1@gns.com', '2023-08-13', '0412233743', 'saku', '$2y$10$iWO9ctXW6Jd65cNZJ4eV4uciM7ofleHmOQcXRbOKtFMFvBDGu/CzS', 'User'),
('CPU003', '', '', '', '', '', '', 'sadss', 'gd', 'wda1wq@gns.com', '2023-08-09', '0412233743', 'Sakuni', '$2y$10$F8CCUFuPxqZIfWHqYmllxOfly3v9MRoBDM7fw0hxGfXIj//FjQvuy', 'User'),
('CPU004', '', '', '', '', '', '', 'sa', 'gd', 'wda@gns.com', '2023-08-01', '0412233743', 'Sakuni', '$2y$10$Up/cHJIxKeUy.TkpDzNyoO6EeyQpmfPKGLzWvjemI1hskfxVC4myG', 'User'),
('CPU005', '', '', '', '', '', '', 'Sakuni', 'Kodithuwakku', 'saku@gmail.com', '2023-08-15', '0713360834', 'SaN', '$2y$10$.HlJX0ywq88jLmnZJj9zd.2C.LfqsDnIpDZZEY3Vnk1eFOkpOW9gS', 'User');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `getAId` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
    IF NEW.User_type = 'Admin' THEN
        SET NEW.User_id = CONCAT('ADM', LPAD((SELECT IFNULL(MAX(SUBSTRING(User_id, 3)), 0) + 1 FROM user WHERE User_type = 'Admin'), 3, '0'));
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `getUID` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
  DECLARE new_uid_id INT;
  SET new_uid_id = (SELECT COUNT(*) FROM user WHERE User_id LIKE 'CPU%') + 1;
  SET NEW.User_id = CONCAT('CPU', LPAD(new_uid_id, 3, '0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`Threatre_id`),
  ADD KEY `Screen_id` (`Screen_id`);

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
  ADD KEY `transaction_FK_2` (`Ticket_no`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie show`
--
ALTER TABLE `movie show`
  ADD CONSTRAINT `movie show_FK_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie` (`Movie_id`);

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`Screen_id`) REFERENCES `screen` (`Screen_id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_FK_1` FOREIGN KEY (`Screen_id`) REFERENCES `screen` (`Screen_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_FK_2` FOREIGN KEY (`Ticket_no`) REFERENCES `tickets` (`Ticket_id`),
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
