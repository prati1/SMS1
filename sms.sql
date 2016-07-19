-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 05:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountid`
--

CREATE TABLE IF NOT EXISTS `accountid` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('accountID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `administration`
--
CREATE TABLE IF NOT EXISTS `administration` (
`student_id` varchar(11)
,`standard_name` varchar(11)
,`Name` varchar(62)
,`gender` enum('Male','Female')
,`DOBad` date
,`date_of_admission` date
,`student_roll` int(11)
,`age` int(5)
,`temp_address` varchar(116)
,`gName` varchar(62)
,`phone_no` bigint(11)
,`email_id` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `administration1`
--
CREATE TABLE IF NOT EXISTS `administration1` (
);

-- --------------------------------------------------------

--
-- Table structure for table `administrationid`
--

CREATE TABLE IF NOT EXISTS `administrationid` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('administrationID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admission_fee`
--

CREATE TABLE IF NOT EXISTS `admission_fee` (
  `payment_date` date DEFAULT NULL,
  `payment_amount` float DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `standard_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `student_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `count` int(254) DEFAULT NULL,
  `percent` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_fee`
--

CREATE TABLE IF NOT EXISTS `bus_fee` (
  `yearly` varchar(10) DEFAULT NULL,
  `fee_pk` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examid`
--

CREATE TABLE IF NOT EXISTS `examid` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('exam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `fee_pk` int(11) NOT NULL DEFAULT '0',
  `status` varchar(5) DEFAULT NULL,
  `due_amount` float DEFAULT NULL,
  `type` enum('tuition_fee','bus_fee','hostel_fee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
  `gfirst_name` varchar(20) NOT NULL,
  `gmiddle_name` varchar(20) DEFAULT NULL,
  `glast_name` varchar(20) NOT NULL,
  `address_street` varchar(20) DEFAULT NULL,
  `address_ward` int(11) DEFAULT NULL,
  `address_vdcmun` varchar(20) DEFAULT NULL,
  `address_district` varchar(20) DEFAULT NULL,
  `address_zone` varchar(20) DEFAULT NULL,
  `address_country` varchar(20) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `student_id` varchar(11) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`gfirst_name`, `gmiddle_name`, `glast_name`, `address_street`, `address_ward`, `address_vdcmun`, `address_district`, `address_zone`, `address_country`, `phone_no`, `relation`, `email_id`, `student_id`) VALUES
('Dhiraj', '', 'Prajapati', 'Campus Road', 2, 'Baglung', 'Balgung', 'Dhawlagiri', 'Nepal', 2147483647, 'Father', 'dkjf@gmail.com', '070ONE01'),
('Dhiraj', 'Purnima', 'Prajapati', 'Campus Road', 2, 'Baglung', 'Baglung', 'Dhawlagiri', 'Nepal', 9867646098, 'Father', 'birbal@gmail.com', '12213'),
('Shubham', '', 'Sharma', 'Radhemai', 2, 'Birgung', 'Parsa', 'Narayani', 'Nepal', 9878767567, 'Father', 'sharma@gmail.com', '12343'),
('Dhiraj', '', 'Prajapati', 'Campus Road', 2, 'Baglung', 'Balgung', 'Dhawlagiri', 'Nepal', 9878776767, 'Father', 'go@gmail.com', '17164');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_fee`
--

CREATE TABLE IF NOT EXISTS `hostel_fee` (
  `yearly` varchar(10) DEFAULT NULL,
  `fee_pk` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('pratiksha', 'trixter'),
('shiwani', 'u14ce03');

-- --------------------------------------------------------

--
-- Table structure for table `marks1`
--

CREATE TABLE IF NOT EXISTS `marks1` (
  `student_id` int(11) NOT NULL DEFAULT '0',
  `standard_name` varchar(11) DEFAULT NULL,
  `English` int(11) DEFAULT NULL,
  `Nepali` int(11) DEFAULT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Computer` int(11) DEFAULT NULL,
  `Social` int(11) DEFAULT NULL,
  `ENVE` int(11) DEFAULT NULL,
  `Science` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks1`
--

INSERT INTO `marks1` (`student_id`, `standard_name`, `English`, `Nepali`, `Maths`, `Computer`, `Social`, `ENVE`, `Science`) VALUES
(12213, '3', 91, 92, 98, 100, 81, 80, 84),
(12343, '2', 90, 82, 73, NULL, 91, 87, 78),
(17164, '3', 89, 90, 99, 92, 67, 77, 7);

-- --------------------------------------------------------

--
-- Table structure for table `marks2`
--

CREATE TABLE IF NOT EXISTS `marks2` (
  `student_id` int(11) NOT NULL DEFAULT '0',
  `standard_name` varchar(11) DEFAULT NULL,
  `English` int(11) DEFAULT NULL,
  `Nepali` int(11) DEFAULT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Computer` int(11) DEFAULT NULL,
  `Social` int(11) DEFAULT NULL,
  `ENVE` int(11) DEFAULT NULL,
  `Science` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks2`
--

INSERT INTO `marks2` (`student_id`, `standard_name`, `English`, `Nepali`, `Maths`, `Computer`, `Social`, `ENVE`, `Science`) VALUES
(12213, '3', 89, 93, 67, 91, 79, 82, 89),
(12343, '2', 99, 89, 90, NULL, 87, 90, 87);

-- --------------------------------------------------------

--
-- Table structure for table `marks3`
--

CREATE TABLE IF NOT EXISTS `marks3` (
  `student_id` int(11) NOT NULL DEFAULT '0',
  `standard_name` varchar(11) DEFAULT NULL,
  `English` int(11) DEFAULT NULL,
  `Nepali` int(11) DEFAULT NULL,
  `Maths` int(11) DEFAULT NULL,
  `Computer` int(11) DEFAULT NULL,
  `Social` int(11) DEFAULT NULL,
  `ENVE` int(11) DEFAULT NULL,
  `Science` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks3`
--

INSERT INTO `marks3` (`student_id`, `standard_name`, `English`, `Nepali`, `Maths`, `Computer`, `Social`, `ENVE`, `Science`) VALUES
(12213, '3', 90, 90, 94, 98, 76, 75, 87),
(12343, '2', 78, 98, 87, NULL, 90, 88, 98);

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE IF NOT EXISTS `standard` (
  `standard_id` int(11) NOT NULL DEFAULT '0',
  `standard_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`standard_id`, `standard_name`) VALUES
(1, 'NUR'),
(2, 'LKG'),
(3, 'UKG'),
(4, '1'),
(5, '2'),
(6, '3'),
(7, '4'),
(8, '5'),
(9, '6'),
(10, '7'),
(11, '8'),
(12, '9'),
(13, '10'),
(14, '11'),
(15, '12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` varchar(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `DOBad` date NOT NULL,
  `DOBbs` date NOT NULL,
  `date_of_admission` date NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `admitted_std` varchar(3) NOT NULL,
  `student_roll` int(11) NOT NULL,
  `address_temp_street` varchar(20) DEFAULT NULL,
  `address_temp_ward` int(11) DEFAULT NULL,
  `address_temp_vdcmun` varchar(20) DEFAULT NULL,
  `address_temp_district` varchar(20) DEFAULT NULL,
  `address_temp_zone` varchar(20) DEFAULT NULL,
  `address_temp_country` varchar(20) DEFAULT NULL,
  `address_perm_street` varchar(20) DEFAULT NULL,
  `address_perm_ward` int(11) DEFAULT NULL,
  `address_perm_vdcmun` varchar(20) DEFAULT NULL,
  `address_perm_district` varchar(20) DEFAULT NULL,
  `address_perm_zone` varchar(20) DEFAULT NULL,
  `address_perm_country` varchar(20) DEFAULT NULL,
  `standard_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `middle_name`, `last_name`, `gender`, `DOBad`, `DOBbs`, `date_of_admission`, `email_id`, `admitted_std`, `student_roll`, `address_temp_street`, `address_temp_ward`, `address_temp_vdcmun`, `address_temp_district`, `address_temp_zone`, `address_temp_country`, `address_perm_street`, `address_perm_ward`, `address_perm_vdcmun`, `address_perm_district`, `address_perm_zone`, `address_perm_country`, `standard_name`) VALUES
('070ONE01', 'Kiran', 'Maiya', 'Prajapati', 'Female', '2009-07-16', '2066-04-01', '2014-07-12', 'kira@gmail.com', '2', 2, 'Campus road', 2, 'Baglung', 'Baglung', 'Dhawalagiri', 'Nepal', 'Campus road', 2, 'Baglung', 'Baglung', 'Dhawlagiri', 'Nepal', '0'),
('12213', 'Poonam', 'Purnima', 'Shrestha', 'Female', '2009-07-17', '2066-04-02', '2014-07-14', 'poonam@gmail.com', '1', 1, 'Radhemai', 23, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal', 'Loktantrik chowk', 2, 'Baglung', 'Baglung', 'Dhawlagiri', 'Nepal', '3'),
('12343', 'Sushil', '', 'Sharma', 'Male', '2009-04-15', '2066-01-01', '2015-10-13', 'Dipskarki2014@gmail.com', '1', 3, 'Bhala Tole', 28, 'Kathmandu', 'Kathmandu', 'Bagmati', 'Nepal', 'Radhemai', 2, 'Birgunj', 'Parsa', 'Narayani', 'Nepal', '2'),
('17164', 'Depenti ', '', 'Karki', 'Female', '1995-11-08', '2052-07-22', '2014-07-12', 'dkjf@gmail.com', '1', 27, 'Bakhundol', 2, 'Dhulikhel ', 'Kavrepalanchowk', 'Bagmati', 'Nepal', 'Radhemai', 16, 'Birgunj', 'Parsa', 'Narayani', 'Nepal', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tuition_fee`
--

CREATE TABLE IF NOT EXISTS `tuition_fee` (
  `monthly` varchar(10) DEFAULT NULL,
  `fee_pk` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` enum('DirectLogin','OpenID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `administration`
--
DROP TABLE IF EXISTS `administration`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `administration` AS select `student`.`student_id` AS `student_id`,`student`.`standard_name` AS `standard_name`,concat(`student`.`first_name`,' ',`student`.`middle_name`,' ',`student`.`last_name`) AS `Name`,`student`.`gender` AS `gender`,`student`.`DOBad` AS `DOBad`,`student`.`date_of_admission` AS `date_of_admission`,`student`.`student_roll` AS `student_roll`,(year(curdate()) - year(`student`.`DOBad`)) AS `age`,concat(`student`.`address_temp_street`,'-',`student`.`address_temp_ward`,',',`student`.`address_temp_vdcmun`,',',`student`.`address_temp_district`,',',`student`.`address_temp_zone`,',',`student`.`address_temp_country`) AS `temp_address`,concat(`guardian`.`gfirst_name`,' ',`guardian`.`gmiddle_name`,' ',`guardian`.`glast_name`) AS `gName`,`guardian`.`phone_no` AS `phone_no`,`guardian`.`email_id` AS `email_id` from (`student` join `guardian`) where (`student`.`student_id` = `guardian`.`student_id`);

-- --------------------------------------------------------

--
-- Structure for view `administration1`
--
DROP TABLE IF EXISTS `administration1`;
-- in use(#1356 - View 'sms.administration1' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountid`
--
ALTER TABLE `accountid`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `administrationid`
--
ALTER TABLE `administrationid`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `bus_fee`
--
ALTER TABLE `bus_fee`
  ADD PRIMARY KEY (`fee_pk`);

--
-- Indexes for table `examid`
--
ALTER TABLE `examid`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`fee_pk`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `hostel_fee`
--
ALTER TABLE `hostel_fee`
  ADD PRIMARY KEY (`fee_pk`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `marks1`
--
ALTER TABLE `marks1`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `marks2`
--
ALTER TABLE `marks2`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `marks3`
--
ALTER TABLE `marks3`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`standard_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tuition_fee`
--
ALTER TABLE `tuition_fee`
  ADD PRIMARY KEY (`fee_pk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accountid`
--
ALTER TABLE `accountid`
  ADD CONSTRAINT `accountid_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `administrationid`
--
ALTER TABLE `administrationid`
  ADD CONSTRAINT `administrationid_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `examid`
--
ALTER TABLE `examid`
  ADD CONSTRAINT `examid_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
