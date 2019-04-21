-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 09:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmsproject`
--
CREATE DATABASE IF NOT EXISTS `dbmsproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbmsproject`;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Doc_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `Experience` int(11) NOT NULL,
  `P_Code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doc_Id`, `Name`, `Qualification`, `Experience`, `P_Code`) VALUES
(11154, 'Aarav', 'M.D.', 12, '55512'),
(11157, 'Kabir', 'M.B.B.S.', 10, '55517'),
(11160, 'Arjun', 'M.D.', 20, '55578'),
(11165, 'Pranav', 'M.D.', 18, '55545'),
(11172, 'Dhruv', 'M.B.B.S', 15, '55589'),
(11179, 'Aarav', 'M.B.B.S.', 8, '55525');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `Med_Code` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Disease` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Med_Code`, `Name`, `Disease`, `Quantity`, `Cost`) VALUES
(77712, 'Prinivil', 'Blood Pressure', 225, 170),
(77723, 'Vicodin', 'Pain Management', 200, 170),
(77734, 'Delasone', 'Arthritis', 190, 550),
(77735, 'Amoxil', 'Bacterial Infections', 350, 145),
(77776, 'Lipitor', 'High Cholestrol', 150, 650),
(77794, 'Zofran', 'Nausea', 175, 345);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `P_code` int(5) NOT NULL,
  `Aadhar_No` int(12) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Suffering_From` varchar(50) NOT NULL,
  `Status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_code`, `Aadhar_No`, `Name`, `Suffering_From`, `Status`) VALUES
(55512, 2147483647, 'Vivaan', 'Pain Management', 'R'),
(55517, 2147483647, 'Pritesh', 'Bacterial Infections', 'C'),
(55525, 2147483647, 'Mohammed', 'Nausea', 'F'),
(55545, 2147483647, 'Krishna', 'Blood Pressure', 'C'),
(55578, 2147483647, 'Kalp', 'Nausea', 'C'),
(55589, 2147483647, 'Shubham', 'High Cholestrol', 'R'),
(55591, 2147483647, 'Raghav', 'Arthritis', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `Room_No` int(5) NOT NULL,
  `Staff_Id` varchar(5) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `No_of_Patients` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_No`, `Staff_Id`, `Department`, `No_of_Patients`) VALUES
(88812, '66634', 'Surgery', 12),
(88843, '66645', 'Orthopaedic', 15),
(88856, '66665', 'Neuro', 25),
(88867, '66676', 'Cardio', 19),
(88876, '66687', 'Dental', 23),
(88895, '66690', 'Gynaecology', 9);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Doc_Id` varchar(5) NOT NULL,
  `P_Code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_Id`, `Name`, `Doc_Id`, `P_Code`) VALUES
(66634, 'Mahesh', '55545', '11157'),
(66645, 'Santosh', '55589', '11160'),
(66665, 'Sanjay', '55578', '11165'),
(66676, 'Sudhir', '55591', '11172'),
(66687, 'Keshav', '55512', '11179'),
(66690, 'Ramesh', '55517', '11154');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`Doc_Id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
 ADD PRIMARY KEY (`Med_Code`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`P_code`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`Room_No`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`Staff_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
