-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 07:08 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `alogin` varchar(255) DEFAULT NULL,
  `apassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`alogin`, `apassword`) VALUES
('', ''),
('', ''),
('', ''),
('6', '5'),
('harsh', '123'),
('ty', '12'),
('io', 'er'),
('harshhh', '1524512'),
('', ''),
('harshhhh', '123456'),
('har', '786');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `pname` varchar(255) NOT NULL,
  `pcn` int(10) NOT NULL,
  `bdate` varchar(10) DEFAULT NULL,
  `btime` varchar(10) DEFAULT NULL,
  `bamt` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `did` int(255) DEFAULT NULL,
  `dname` varchar(255) DEFAULT NULL,
  `dgender` varchar(10) DEFAULT NULL,
  `dadd` varchar(255) DEFAULT NULL,
  `dtype` varchar(255) DEFAULT NULL,
  `ddob` varchar(10) DEFAULT NULL,
  `demail` varchar(255) DEFAULT NULL,
  `dcn` varchar(10) NOT NULL,
  `dspecial` varchar(255) DEFAULT NULL,
  `dappointment` int(10) DEFAULT NULL,
  `dpname` varchar(255) DEFAULT NULL,
  `dservice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `eid` int(255) DEFAULT NULL,
  `ename` varchar(255) DEFAULT NULL,
  `egender` varchar(10) DEFAULT NULL,
  `eadd` varchar(255) DEFAULT NULL,
  `ecn` int(10) NOT NULL,
  `etype` varchar(10) DEFAULT NULL,
  `epatient` varchar(10) DEFAULT NULL,
  `edr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `pname` varchar(255) DEFAULT NULL,
  `pcn` int(10) NOT NULL,
  `mdate` varchar(10) DEFAULT NULL,
  `mtime` varchar(10) DEFAULT NULL,
  `mtype` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `mdr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `pid` int(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pgender` varchar(255) DEFAULT NULL,
  `padd` varchar(255) DEFAULT NULL,
  `pweight` int(10) DEFAULT NULL,
  `pbg` varchar(10) DEFAULT NULL,
  `pdob` varchar(15) DEFAULT NULL,
  `pemail` varchar(50) DEFAULT NULL,
  `pcn` int(10) NOT NULL,
  `pdeseases` varchar(255) DEFAULT NULL,
  `pappointment` int(10) DEFAULT NULL,
  `pappointmentdr` int(10) DEFAULT NULL,
  `pservice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `pname` varchar(255) DEFAULT NULL,
  `pcn` int(10) NOT NULL,
  `tdate` varchar(10) DEFAULT NULL,
  `ttime` varchar(10) DEFAULT NULL,
  `ttype` varchar(255) DEFAULT NULL,
  `tresult` varchar(255) DEFAULT NULL,
  `tdr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `rno` int(255) DEFAULT NULL,
  `rtype` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pcn` int(10) NOT NULL,
  `nob` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`pcn`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`dcn`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`ecn`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`pcn`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`pcn`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`pcn`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`pcn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
