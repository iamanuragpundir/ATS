-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 01:13 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS ats ;
use ats;

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `userid` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`userid`, `password`) VALUES
(2781, '27811991'),
(2826, '28261994'),
(3344, 'amritsir'),
(4493, '44931992'),
(5566, '55661992'),
(5845, 'gunjan mam'),
(6475, '64751985'),
(6773, '001129'),
(8379, '83791983');

-- --------------------------------------------------------

--
-- Table structure for table `ba501`
--

CREATE TABLE `ba501` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `6001` varchar(1) DEFAULT NULL,
  `6002` varchar(1) DEFAULT NULL,
  `6003` varchar(1) DEFAULT NULL,
  `6004` varchar(1) DEFAULT NULL,
  `6005` varchar(1) DEFAULT NULL,
  `6006` varchar(1) DEFAULT NULL,
  `6007` varchar(1) DEFAULT NULL,
  `6008` varchar(1) DEFAULT NULL,
  `6009` varchar(1) DEFAULT NULL,
  `6010` varchar(1) DEFAULT NULL,
  `6011` varchar(1) DEFAULT NULL,
  `6012` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ba501`
--

INSERT INTO `ba501` (`sno`, `dates`, `6001`, `6002`, `6003`, `6004`, `6005`, `6006`, `6007`, `6008`, `6009`, `6010`, `6011`, `6012`) VALUES
(1, '2019-04-06', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2019-04-06', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2019-04-06', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2019-04-06', 'A', 'A', 'L', 'L', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2019-04-07', 'A', 'A', 'A', 'A', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2019-04-07', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2019-04-08', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2019-04-08', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2019-04-08', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2019-04-08', 'A', 'A', 'A', 'A', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2019-04-08', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2019-04-08', 'A', 'A', 'A', '', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2019-04-08', 'L', 'A', 'P', 'P', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2019-04-08', 'A', 'A', 'A', 'A', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2019-04-08', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2019-04-09', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(17, '2019-04-10', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'A', 'A', 'L', 'L', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `ba502`
--

CREATE TABLE `ba502` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `6001` varchar(1) NOT NULL,
  `6002` varchar(1) NOT NULL,
  `6003` varchar(1) NOT NULL,
  `6004` varchar(1) NOT NULL,
  `6005` varchar(1) NOT NULL,
  `6006` varchar(1) DEFAULT NULL,
  `6007` varchar(1) DEFAULT NULL,
  `6008` varchar(1) DEFAULT NULL,
  `6009` varchar(1) DEFAULT NULL,
  `6010` varchar(1) DEFAULT NULL,
  `6011` varchar(1) DEFAULT NULL,
  `6012` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ba502`
--

INSERT INTO `ba502` (`sno`, `dates`, `6001`, `6002`, `6003`, `6004`, `6005`, `6006`, `6007`, `6008`, `6009`, `6010`, `6011`, `6012`) VALUES
(1, '2019-04-07', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2019-04-07', 'A', 'A', 'A', 'A', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba503`
--

CREATE TABLE `ba503` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `6001` varchar(1) NOT NULL,
  `6002` varchar(1) DEFAULT NULL,
  `6003` varchar(1) DEFAULT NULL,
  `6004` varchar(1) DEFAULT NULL,
  `6005` varchar(1) DEFAULT NULL,
  `6006` varchar(1) DEFAULT NULL,
  `6007` varchar(1) DEFAULT NULL,
  `6008` varchar(1) DEFAULT NULL,
  `6009` varchar(1) DEFAULT NULL,
  `6010` varchar(1) DEFAULT NULL,
  `6011` varchar(1) DEFAULT NULL,
  `6012` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ba503`
--

INSERT INTO `ba503` (`sno`, `dates`, `6001`, `6002`, `6003`, `6004`, `6005`, `6006`, `6007`, `6008`, `6009`, `6010`, `6011`, `6012`) VALUES
(1, '2019-04-07', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2019-04-07', 'P', 'P', 'P', 'A', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ba504`
--

CREATE TABLE `ba504` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `6001` varchar(1) NOT NULL,
  `6002` varchar(1) DEFAULT NULL,
  `6003` varchar(1) DEFAULT NULL,
  `6004` varchar(1) DEFAULT NULL,
  `6005` varchar(1) DEFAULT NULL,
  `6006` varchar(1) DEFAULT NULL,
  `6007` varchar(1) DEFAULT NULL,
  `6008` varchar(1) DEFAULT NULL,
  `6009` varchar(1) DEFAULT NULL,
  `6010` varchar(1) DEFAULT NULL,
  `6011` varchar(1) DEFAULT NULL,
  `6012` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ba504`
--

INSERT INTO `ba504` (`sno`, `dates`, `6001`, `6002`, `6003`, `6004`, `6005`, `6006`, `6007`, `6008`, `6009`, `6010`, `6011`, `6012`) VALUES
(1, '2019-04-06', 'P', 'A', 'P', 'P', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2019-04-08', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2019-04-08', 'L', 'L', 'L', 'L', 'L', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2019-04-08', 'P', 'P', 'P', 'L', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2019-04-08', 'P', 'P', 'P', 'A', 'P', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2019-04-09', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `bca104`
--

CREATE TABLE `bca104` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `8001` varchar(1) NOT NULL,
  `8002` varchar(1) NOT NULL,
  `8003` varchar(1) NOT NULL,
  `8004` varchar(1) NOT NULL,
  `8005` varchar(1) NOT NULL,
  `8006` varchar(1) NOT NULL,
  `8007` varchar(1) NOT NULL,
  `8008` varchar(1) NOT NULL,
  `8009` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bca105`
--

CREATE TABLE `bca105` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `8001` varchar(1) NOT NULL,
  `8002` varchar(1) NOT NULL,
  `8003` varchar(1) NOT NULL,
  `8004` varchar(1) NOT NULL,
  `8005` varchar(1) NOT NULL,
  `8006` varchar(1) NOT NULL,
  `8007` varchar(1) NOT NULL,
  `8008` varchar(1) NOT NULL,
  `8009` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bca106`
--

CREATE TABLE `bca106` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `8001` varchar(1) NOT NULL,
  `8002` varchar(1) NOT NULL,
  `8003` varchar(1) NOT NULL,
  `8004` varchar(1) NOT NULL,
  `8005` varchar(1) NOT NULL,
  `8006` varchar(1) NOT NULL,
  `8007` varchar(1) NOT NULL,
  `8008` varchar(1) NOT NULL,
  `8009` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bca107`
--

CREATE TABLE `bca107` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `8001` varchar(1) NOT NULL,
  `8002` varchar(1) NOT NULL,
  `8003` varchar(1) NOT NULL,
  `8004` varchar(1) NOT NULL,
  `8005` varchar(1) NOT NULL,
  `8006` varchar(1) NOT NULL,
  `8007` varchar(1) NOT NULL,
  `8008` varchar(1) NOT NULL,
  `8009` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bca109`
--

CREATE TABLE `bca109` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `8001` varchar(1) NOT NULL,
  `8002` varchar(1) NOT NULL,
  `8003` varchar(1) NOT NULL,
  `8004` varchar(1) NOT NULL,
  `8005` varchar(1) NOT NULL,
  `8006` varchar(1) NOT NULL,
  `8007` varchar(1) NOT NULL,
  `8008` varchar(1) NOT NULL,
  `8009` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_name` varchar(6) NOT NULL,
  `roll_series` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_name`, `roll_series`) VALUES
('mba', '5000'),
('bsc', '7000'),
('bca', '8000'),
('mca', '9000'),
('msc', '4000'),
('bba', '3000'),
('pgdca', '1000'),
('ba', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `mba401`
--

CREATE TABLE `mba401` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `5001` varchar(1) NOT NULL,
  `5002` varchar(1) DEFAULT NULL,
  `5003` varchar(1) DEFAULT NULL,
  `5004` varchar(1) DEFAULT NULL,
  `5005` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba401`
--

INSERT INTO `mba401` (`sno`, `dates`, `5001`, `5002`, `5003`, `5004`, `5005`) VALUES
(1, '2019-04-06', 'P', 'P', 'P', 'P', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `mba402`
--

CREATE TABLE `mba402` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `5001` varchar(1) NOT NULL,
  `5002` varchar(1) DEFAULT NULL,
  `5003` varchar(1) DEFAULT NULL,
  `5004` varchar(1) DEFAULT NULL,
  `5005` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mba403`
--

CREATE TABLE `mba403` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `5001` varchar(1) NOT NULL,
  `5002` varchar(1) DEFAULT NULL,
  `5003` varchar(1) DEFAULT NULL,
  `5004` varchar(1) DEFAULT NULL,
  `5005` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba403`
--

INSERT INTO `mba403` (`sno`, `dates`, `5001`, `5002`, `5003`, `5004`, `5005`) VALUES
(1, '2019-04-08', 'P', 'P', 'P', 'P', 'P'),
(2, '2019-04-08', 'P', 'P', 'P', 'A', 'P'),
(3, '2019-04-08', 'P', 'P', 'P', 'A', 'P'),
(4, '2019-04-08', 'P', 'P', 'P', 'P', 'P'),
(5, '2019-04-08', 'P', 'P', 'P', 'P', 'P'),
(6, '2019-04-08', 'P', 'P', 'P', 'P', 'P'),
(7, '2019-04-08', 'A', 'A', 'A', 'A', 'A'),
(8, '2019-04-10', 'A', 'P', 'P', 'A', 'P'),
(9, '2019-04-12', 'P', 'P', 'P', 'P', 'P'),
(10, '2019-04-14', 'P', 'P', 'A', 'A', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `mba404`
--

CREATE TABLE `mba404` (
  `sno` int(11) NOT NULL,
  `dates` date NOT NULL,
  `5001` varchar(1) NOT NULL,
  `5002` varchar(1) DEFAULT NULL,
  `5003` varchar(1) DEFAULT NULL,
  `5004` varchar(1) DEFAULT NULL,
  `5005` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba404`
--

INSERT INTO `mba404` (`sno`, `dates`, `5001`, `5002`, `5003`, `5004`, `5005`) VALUES
(1, '2019-04-06', 'A', 'A', 'A', 'A', 'A'),
(2, '2019-04-06', 'A', 'A', 'A', 'A', 'A'),
(3, '2019-04-06', 'P', 'P', 'P', 'P', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` varchar(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(5) NOT NULL,
  `sem` int(11) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `class`, `sem`, `mobile`, `dob`) VALUES
('7001', 'Jaunpreet Singh', 'bsc', 1, '8968802545', '1999-12-01'),
('8001', 'Anurag Pundir', 'bca', 6, '8968809989', '1998-05-30'),
('8002', 'Manvi Rana', 'bca', 6, '7018480783', '1999-10-30'),
('8003', 'Divyansh Dixit', 'bca', 6, '8054870973', '1998-04-13'),
('8004', 'Rakshit Kumar', 'bca', 6, '9788896665', '1997-01-08'),
('8005', 'Shubham Rana', 'bca', 6, '8888999005', '1997-04-01'),
('1001', 'Manpreet Singh', 'pgdca', 1, '', '1998-12-17'),
('1002', 'Ranjana Pundir', 'pgdca', 4, '8888999005', '1995-11-29'),
('5001', 'Sashank Yadav', 'mba', 3, '', '1999-01-07'),
('8006', 'Dinesh Kumar', 'bca', 6, '8888999005', '1996-04-05'),
('8007', 'Suman Khaira', 'bca', 6, '9987568547', '1997-06-30'),
('8008', 'Kshitij', 'bca', 6, '6589745896', '1995-08-15'),
('6001', 'Ramesh Singh', 'ba', 3, '7859458823', '1995-07-03'),
('6002', 'Sneha Devi', 'ba', 3, '5698558745', '1996-10-22'),
('6003', 'Preeti Zinta', 'ba', 3, '8658774589', '1997-04-25'),
('6004', 'Shilpey Pandey', 'ba', 3, '9985745265', '1995-10-28'),
('6005', 'Pratyush Singh', 'ba', 3, '61846135', '1996-11-02'),
('5002', 'Nimrat Khaira', 'mba', 4, '8898754589', '1997-11-24'),
('5003', 'Ariba Adil', 'mba', 4, '8598745621', '1998-05-30'),
('5004', 'Uzair Khan', 'mba', 4, '6689578452', '1996-10-15'),
('5005', 'Dhinchak Pooja', 'mba', 4, '6589526547', '1995-01-29'),
('8009', 'Sunny Leone', 'bca', 6, '9192875948', '1992-04-13'),
('6006', 'Sourav Ganguly', 'ba', 3, '6895778549', '1996-02-08'),
('6007', 'Dilmay Khurana', 'ba', 5, '6689578452', '1995-06-09'),
('6008', 'Ashish Nehra', 'ba', 5, '8522588525', '1994-08-12'),
('6009', 'James Mattis', 'ba', 3, '9874563214', '1999-01-24'),
('6010', 'Jhunjunu Kumar', 'ba', 4, '8522588525', '1995-10-26'),
('6011', 'Tanmay Bhatt', 'ba', 4, '6859592589', '1993-12-22'),
('6012', 'Milkha Singh', 'ba', 5, '6895778549', '1995-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `uni_code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`uni_code`, `name`, `teacher_id`, `class`, `semester`) VALUES
('ba501', 'English', 3344, 'ba', 3),
('ba502', 'Geography', 4493, 'ba', 3),
('ba503', 'History', 4493, 'ba', 3),
('ba504', 'Politics', 3344, 'ba', 3),
('bca104', 'java', 2781, 'bca', 6),
('bca105', 'php', 2781, 'bca', 6),
('bca106', 'dbms', 2826, 'bca', 6),
('bca107', 'Numerical Maths', 2826, 'bca', 6),
('bca109', 'HCP', 4493, 'bca', 6),
('mba401', 'Accounts', 5252, 'mba', 4),
('mba402', 'Business', 5252, 'mba', 4),
('mba403', 'soft skills', 3344, 'mba', 4),
('mba404', 'MarKeting', 5566, 'mba', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `sex`, `dob`, `mobile`) VALUES
(2781, 'Rahul Jasrotia', 'M', '1991-08-04', '9535489127'),
(2826, 'Kanchan Saini', 'F', '1994-02-19', '7855952313'),
(3344, 'Amrit Sagar', 'M', '1990-07-12', '9878458998'),
(4493, 'Sunaina Mahajan', 'F', '1992-08-31', '6587459826'),
(5252, 'Rahul Arora', 'M', '1985-01-13', '6585562358'),
(5566, 'Kalpana Chawla', 'F', '1992-06-17', '5588997744'),
(5647, 'Neha Arora', 'F', '1988-06-30', '5987456985'),
(5845, 'Gunjan Sharma', 'F', '1992-05-24', '7888809998'),
(6475, 'Gaffor Khan', 'M', '1985-04-10', '7888809998'),
(7061, 'Sunaina Mahajan', 'F', '1992-08-31', '6587459826'),
(8379, 'MS Dhoni', 'M', '1983-07-07', '9535489127'),
(8975, 'Arpana Khatri', 'F', '1986-03-06', '5588995544');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `bca104`
--
ALTER TABLE `bca104`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `bca105`
--
ALTER TABLE `bca105`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `bca106`
--
ALTER TABLE `bca106`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `bca107`
--
ALTER TABLE `bca107`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `bca109`
--
ALTER TABLE `bca109`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `mba401`
--
ALTER TABLE `mba401`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `mba402`
--
ALTER TABLE `mba402`
  ADD PRIMARY KEY (`dates`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`uni_code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
