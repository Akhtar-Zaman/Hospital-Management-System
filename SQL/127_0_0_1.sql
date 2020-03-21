-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 08:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `DoctorId` varchar(225) NOT NULL,
  `FName` varchar(225) NOT NULL,
  `MName` varchar(225) NOT NULL,
  `LName` varchar(225) NOT NULL,
  `Dob` varchar(225) NOT NULL,
  `Doa` varchar(225) NOT NULL,
  `Degree` varchar(225) NOT NULL,
  `Board` varchar(225) NOT NULL,
  `Year` varchar(225) NOT NULL,
  `Division` varchar(225) NOT NULL,
  `Position` varchar(225) NOT NULL,
  `Job` varchar(225) NOT NULL,
  `Frm` varchar(225) NOT NULL,
  `Tooo` varchar(225) NOT NULL,
  `Organization` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`DoctorId`, `FName`, `MName`, `LName`, `Dob`, `Doa`, `Degree`, `Board`, `Year`, `Division`, `Position`, `Job`, `Frm`, `Tooo`, `Organization`) VALUES
('4444', 'pranto', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicineentry`
--

CREATE TABLE `medicineentry` (
  `Sid` varchar(225) NOT NULL,
  `Sname` varchar(225) NOT NULL,
  `Sdate` varchar(225) NOT NULL,
  `Mid` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Type` varchar(225) NOT NULL,
  `Uprice` varchar(225) NOT NULL,
  `Quantity` varchar(225) NOT NULL,
  `Dom` varchar(225) NOT NULL,
  `Edate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientform`
--

CREATE TABLE `patientform` (
  `Adate` varchar(225) NOT NULL,
  `Fname` varchar(225) NOT NULL,
  `Mname` varchar(225) NOT NULL,
  `Lname` varchar(225) NOT NULL,
  `Dob` varchar(225) NOT NULL,
  `Mbl1` varchar(225) NOT NULL,
  `Mbl2` varchar(225) NOT NULL,
  `Village` varchar(225) NOT NULL,
  `Stname` varchar(225) NOT NULL,
  `Area` varchar(225) NOT NULL,
  `Thana` varchar(225) NOT NULL,
  `District` varchar(225) NOT NULL,
  `Adeposited` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
