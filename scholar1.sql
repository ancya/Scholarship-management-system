-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2020 at 05:11 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(30) NOT NULL,
  `address` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `address`) VALUES
(1, 'Elims College', 'Ponganemkad'),
(2, 'GEC Thrisur', 'Ramavarmapuram P O');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`) VALUES
(1, 'weqrtyjui'),
(2, 'I am Okay with your platform');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE IF NOT EXISTS `scholarship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `Description` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `name`, `Description`) VALUES
(1, 'Post Metric', 'Common'),
(2, 'Premetric', 'Common'),
(3, 'SC/ST Scholarship', 'SC ST Students Only');

-- --------------------------------------------------------

--
-- Table structure for table `scholarshipofficer`
--

DROP TABLE IF EXISTS `scholarshipofficer`;
CREATE TABLE IF NOT EXISTS `scholarshipofficer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(20) NOT NULL,
  `college_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarshipofficer`
--

INSERT INTO `scholarshipofficer` (`id`, `designation`, `college_id`, `user_id`) VALUES
(1, 'Asst Prof', 1, 2),
(2, 'Asst Prof', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_apply`
--

DROP TABLE IF EXISTS `scholarship_apply`;
CREATE TABLE IF NOT EXISTS `scholarship_apply` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `scholarship_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `clg_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship_apply`
--

INSERT INTO `scholarship_apply` (`sc_id`, `scholarship_id`, `student_id`, `clg_id`, `status`) VALUES
(1, 1, 8, 2, 'Applied'),
(2, 3, 9, 1, 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(40) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `percentage_of_mark` varchar(25) DEFAULT NULL,
  `religion` varchar(40) DEFAULT NULL,
  `caste` varchar(25) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `address`, `college_id`, `percentage_of_mark`, `religion`, `caste`, `user_id`) VALUES
(2, 'Manus House', 2, '80', 'Nil', 'Nil', 8),
(3, 'Ravipuram', 1, '60', 'Hindu', 'SC', 9);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

DROP TABLE IF EXISTS `usertb`;
CREATE TABLE IF NOT EXISTS `usertb` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`id`, `username`, `password`, `email`, `name`, `usertype`, `phonenumber`) VALUES
(1, 'admin', 'admin', 'admin@admin.in', 'Admin', 'admin', '9876543210'),
(2, 'alina', 'alina', 'alina@elims.in', 'Alina', 'so', '9876325410'),
(3, 'varun', 'varun', 'varun@gmail.com', 'Varun', 'so', '8745693210'),
(8, 'manu', 'manu', 'manu@gmail.com', ' Manu', 'student', '9865327410'),
(9, 'ravi', 'ravi', 'ravi@gmail.com', ' ravi', 'student', '9876543201');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
