-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 07:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `bauthor` varchar(20) NOT NULL,
  `bsub` varchar(20) NOT NULL,
  `bstatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `bauthor`, `bsub`, `bstatus`) VALUES
(1, 'dbms', 'william', 'dbms', 'Not Issued'),
(2, 'maths', 'gokhru', 'DMS', 'Not Issued'),
(3, 'DE', 'Aarti Sharma', 'Digital Electronics', 'Not Issued'),
(5, 'Java', 'E. Balgurusami', 'Core Java', 'Issued');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cname` varchar(30) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cmobile` bigint(20) NOT NULL,
  `cremark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `issuedate` varchar(20) NOT NULL,
  `subdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`sid`, `bid`, `issuedate`, `subdate`) VALUES
(40, 2, '10/07/19', '25/07/19'),
(1, 3, '10/07/19', '25/07/19'),
(40, 2, '10/07/19', '25/07/19'),
(1, 2, '10/07/19', '25/07/19'),
(2, 5, '10/07/19', '25/07/19'),
(40, 3, '10/07/19', '25/07/19'),
(15, 12, '10/07/19', '25/07/19'),
(15, 12, '10/07/19', '25/07/19'),
(15, 12, '10/07/19', '25/07/19');

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sgender` varchar(10) NOT NULL,
  `sbranch` varchar(20) NOT NULL,
  `ssem` int(11) NOT NULL,
  `scontact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`sid`, `sname`, `sgender`, `sbranch`, `ssem`, `scontact`) VALUES
(1, 'Aftab', 'Male', 'CS', 5, 3456789034),
(3, 'Abhi', 'Male', 'CS', 5, 9588021075),
(4, 'Aditi', 'Female', 'CS', 5, 8765687578),
(6, 'Bhumika', 'Female', 'CS', 5, 1234567876),
(10, 'Dhruv ', 'Male', 'EE', 5, 6753445678),
(11, 'Livisha', 'female', 'CS', 3, 8765445679),
(13, 'Priya', 'female', 'CS', 7, 45768989),
(14, 'Rohan', 'Male', 'EE', 7, 345678876),
(15, 'Anand', 'Male', 'CS', 3, 46567788),
(29, 'Pooja', 'Female', 'CS', 5, 8656563321),
(40, 'Usha', 'Female', 'CS', 5, 8619771809);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `uimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `uimg`) VALUES
(1, 'usha', '1234', '20190315_151156.jpg'),
(2, 'abhi', '1234', ''),
(3, 'Usha', '2000', 'z29.jpg'),
(4, 'ua', '321', '4.jpg'),
(5, 'a', '2001', 'B612_20190323_232648_877.jpg'),
(6, 'abhi', '2244', 'a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
