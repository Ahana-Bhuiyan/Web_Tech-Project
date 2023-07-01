-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 04:07 AM
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
-- Database: `isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Contact`, `Email`, `Address`, `Username`, `Password`) VALUES
('Ahana Bhuiya', '01600000000', 'ahanabhuiya@gmail.com', 'Kuril, Basundhora', 'manager', 'manager123');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ID` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Chat` varchar(1000) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `Gender`, `DateOfBirth`, `Email`, `Contact`, `Username`, `Password`) VALUES
(2, 'Banik Parthib', 'Male', '1111-11-11', 'banikparthib401@gmail.com', '01633575072', 'banik p', '12345678'),
(3, 'Ahana Bhuiya', 'Female', '2000-02-20', 'ahanabhuiya@gmail.com', '01600000000', 'ahana b', '12345678'),
(4, 'Nondon Suchi', 'Male', '2000-07-23', 'suchi@gmail.com', '01900000000', 'suchi', '01234567');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `PresentAddress` varchar(100) NOT NULL,
  `PermanentAddress` varchar(100) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`ID`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`, `Religion`, `PresentAddress`, `PermanentAddress`, `PhoneNo`, `Email`, `Username`, `Password`) VALUES
(1, 'PARTHIB', 'BANIK', 'male', '1111-11-11', 'islam', '15C Mirbagh, Dhaka - 1217', '', '+8801633575072', 'banikparthib401@gmail.com', 'PARTHIB', '12345678'),
(2, 'Ahana', 'Bhuiya', 'female', '2000-07-07', 'hindu', '15C Mirbagh, Dhaka - 1217', '', '+8801633575072', 'banikparthib401@gmail.com', 'ahana', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Date` date NOT NULL,
  `News` varchar(500) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Query` varchar(500) NOT NULL,
  `Solve` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`ID`, `Name`, `Query`, `Solve`) VALUES
(1, 'Ahana Bhuiya', 'asdsdfsd', 'no'),
(2, 'Ahana Bhuiya', 'asdsdfsd', 'no'),
(3, 'Ahana Bhuiya', 'qwer', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
