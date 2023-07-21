-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 03:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecops`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_missing`
--

CREATE TABLE `child_missing` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `child_status` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `dateo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_missing`
--

INSERT INTO `child_missing` (`id`, `name`, `email`, `child_name`, `date`, `age`, `picture`, `criminal_status`, `child_status`, `upload`, `dateo`, `location`) VALUES
(1, 'gjkjh', 'a@gmail.com', 'fhh', '2020-02-18', 6576, 'Screenshot (621).png', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cops_register`
--

CREATE TABLE `cops_register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cops_register`
--

INSERT INTO `cops_register` (`id`, `name`, `email`, `password`, `designation`, `ps_name`, `contact_no`, `dob`, `address`) VALUES
(1, 'cop1', 'cop1@gmail.com', 'cop1', 'dummy', 'Hoshiarpur', 5896452136, '2021-03-24', 'hsp');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `crime` varchar(255) NOT NULL,
  `criminal_image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ecops`
--

CREATE TABLE `ecops` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fir_lodge`
--

CREATE TABLE `fir_lodge` (
  `id` int(255) NOT NULL,
  `comp_type` varchar(255) NOT NULL,
  `odate` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `suscname` varchar(255) NOT NULL,
  `suspect_details` varchar(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `vicname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_lodge`
--

INSERT INTO `fir_lodge` (`id`, `comp_type`, `odate`, `Details`, `suscname`, `suspect_details`, `ps_name`, `vicname`, `gender`, `age`, `adress`, `contact_no`, `email`, `criminal_status`, `date`, `location`) VALUES
(1, 'Kidnapping', '2021-03-10', 'dumy', 'dummy', 'dhfsgl', 'Hoshiarpur', 'dummy', 'Male', 66, 'khkj', 54347593806, 'dummy@gmail.com', 'Arrested', '2021-02-18', 'hsp');

-- --------------------------------------------------------

--
-- Table structure for table `officer_contact`
--

CREATE TABLE `officer_contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer_contact`
--

INSERT INTO `officer_contact` (`id`, `name`, `email`, `designation`, `ps_name`, `subject`, `message`) VALUES
(1, 'Test1', 'test1@gmail.com', '', '', 'test subject', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `police-station`
--

CREATE TABLE `police-station` (
  `id` int(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police-station`
--

INSERT INTO `police-station` (`id`, `ps_name`) VALUES
(1, 'Hoshiarpur'),
(2, 'Jalandhar'),
(3, 'Phagwara');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` bigint(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `email`, `password`, `phone_no`, `dob`, `address`) VALUES
(1, 'user1', 'user1@gmail.com', 'user1', 7894561236, '2019-01-17', 'hsp');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_missing`
--

CREATE TABLE `vehicle_missing` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `odate` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `wheeler` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `vehicle_status` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `dateo` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_missing`
--

INSERT INTO `vehicle_missing` (`id`, `location`, `odate`, `number`, `picture`, `wheeler`, `name`, `email`, `criminal_status`, `vehicle_status`, `pic`, `dateo`, `area`) VALUES
(1, 'gjg', '2020-02-18', 'khk', 'Screenshot (631).png', 'Two-Wheeler', 'fghg', 'a@gmail.com', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_missing`
--
ALTER TABLE `child_missing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cops_register`
--
ALTER TABLE `cops_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecops`
--
ALTER TABLE `ecops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir_lodge`
--
ALTER TABLE `fir_lodge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer_contact`
--
ALTER TABLE `officer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police-station`
--
ALTER TABLE `police-station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_missing`
--
ALTER TABLE `vehicle_missing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_missing`
--
ALTER TABLE `child_missing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cops_register`
--
ALTER TABLE `cops_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecops`
--
ALTER TABLE `ecops`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fir_lodge`
--
ALTER TABLE `fir_lodge`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `officer_contact`
--
ALTER TABLE `officer_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `police-station`
--
ALTER TABLE `police-station`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_missing`
--
ALTER TABLE `vehicle_missing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
