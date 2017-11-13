-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 06:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `pass`, `role_id`, `description`) VALUES
(1, 'admin', '123456', 1, ''),
(3, 'teacher', '12344', 3, ''),
(5, 'hod', '12344', 5, ''),
(7, 'director', '123455', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `st_course_id` int(11) NOT NULL,
  `course_id` int(255) NOT NULL,
  `teach_name` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `days` varchar(255) NOT NULL,
  `time` time(6) NOT NULL,
  `st_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`st_course_id`, `course_id`, `teach_name`, `created_date`, `days`, `time`, `st_id`) VALUES
(141, 50, '', '2017-11-08 17:22:14', 'a:1:{i:0;s:1:"F";}', '01:00:00.000000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `fall_add_id` int(11) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `des` varchar(255) NOT NULL,
  `cr` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `instr_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `off` int(11) NOT NULL,
  `avail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`course_id`, `course_name`, `sec`, `dep_id`, `fall_add_id`, `courses_id`, `des`, `cr`, `id`, `start_date`, `start_time`, `end_time`, `instr_id`, `day`, `off`, `avail`) VALUES
(27, 'asda', 'B', 22, 6, 24, '', 2, '1', '2017-10-01', '11:00:00.000000', '05:00:00.000000', 7, 'a:3:{i:0;s:1:"T";i:1;s:1:"W";i:2;s:2:"TH";}', 35, 34),
(34, 'test_one adf fd234 ', '2', 101, 5, 1123, 'sf sf', 2, '1', '2017-10-02', '11:00:00.000000', '04:00:00.000000', 7, 'a:5:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:1:"W";i:3;s:2:"TH";i:4;s:1:"F";}', 35, 35),
(35, 'phy', '2', 22, 2, 1233, '', 2, '3', '2017-11-23', '12:00:00.000000', '03:00:00.000000', 7, 'a:4:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:2:"TH";i:3;s:1:"F";}', 35, 35),
(36, 'math', '2', 102, 5, 122, '', 2, '1', '2017-11-21', '01:00:00.000000', '02:00:00.000000', 6, 'a:5:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:1:"W";i:3;s:2:"TH";i:4;s:1:"F";}', 35, 35),
(38, 'statics', '2', 22, 2, 435, '', 2, '3', '2017-11-03', '11:00:00.000000', '10:00:00.000000', 6, 'a:5:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:1:"W";i:3;s:2:"TH";i:4;s:1:"F";}', 35, 35),
(39, 'elt', '2', 102, 5, 23, 'sdes', 2, '4', '2017-11-15', '11:00:00.000000', '06:00:00.000000', 6, 'a:5:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:1:"W";i:3;s:2:"TH";i:4;s:1:"F";}', 0, 35),
(40, 'asdssa', '2', 102, 2, 12234, 'des', 2, '3', '2017-11-14', '12:00:00.000000', '06:00:00.000000', 6, 'a:5:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:1:"W";i:3;s:2:"TH";i:4;s:1:"F";}', 0, 35),
(41, 'this', '2', 22, 2, 1231, '', 2, '1', '2017-11-20', '10:00:00.000000', '04:00:00.000000', 6, 'a:5:{i:0;s:1:"M";i:1;s:1:"T";i:2;s:1:"W";i:3;s:2:"TH";i:4;s:1:"F";}', 0, 35),
(42, 'psychology', '2', 102, 5, 201, '', 2, '3', '2017-11-16', '01:00:00.000000', '02:00:00.000000', 6, 'a:3:{i:0;s:1:"T";i:1;s:1:"T";i:2;s:1:"F";}', 0, 35),
(43, 'chem_1', '2', 102, 5, 180, '', 2, '4', '2017-11-08', '01:00:00.000000', '02:00:00.000000', 6, 'a:3:{i:0;s:1:"T";i:1;s:1:"T";i:2;s:1:"F";}', 0, 35),
(45, 'test_id', '', 2001, 2, 3, 'safs', 2, '4', '2017-11-17', '10:00:00.000000', '11:00:00.000000', 6, 'a:2:{i:0;s:1:"T";i:1;s:1:"W";}', 0, 35),
(46, 'test_09', '', 22, 2, 321, 'testing_09', 2, '4', '2017-11-14', '12:00:00.000000', '01:00:00.000000', 7, 'a:2:{i:0;s:2:"TH";i:1;s:1:"F";}', 0, 0),
(47, 'test-10', '', 2001, 2, 1112, 'test_10', 2, '1', '2017-11-06', '12:00:00.000000', '01:00:00.000000', 6, 'a:1:{i:0;s:2:"TH";}', 0, 0),
(48, 'test_11', '', 2001, 2, 222, 'dasfa', 2, '1', '2017-11-23', '09:00:00.000000', '10:00:00.000000', 6, 'a:2:{i:0;s:1:"T";i:1;s:1:"W";}', 0, 0),
(49, 'test_12', '', 2001, 2, 1221, 'dsafsadf', 2, '1', '2017-11-06', '11:00:00.000000', '01:00:00.000000', 7, 'a:2:{i:0;s:1:"T";i:1;s:1:"W";}', 0, 0),
(50, 'test_13', '', 2001, 5, 1212, 'test_13', 2, '1', '2017-11-23', '01:00:00.000000', '10:00:00.000000', 6, 'a:1:{i:0;s:1:"F";}', 0, 34);

-- --------------------------------------------------------

--
-- Table structure for table `course_request`
--

CREATE TABLE `course_request` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `st_id` int(11) NOT NULL,
  `ression` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_request`
--

INSERT INTO `course_request` (`id`, `admin_id`, `course_id`, `description`, `st_id`, `ression`, `status`) VALUES
(9, 3, 34, 'help me plz', 5, 'ok', 0),
(10, 5, 34, 'help me plz', 5, '', 0),
(11, 3, 34, 'sir plz', 5, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_seats`
--

CREATE TABLE `course_seats` (
  `course_seats_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_seats`
--

INSERT INTO `course_seats` (`course_seats_id`, `course_id`, `st_id`) VALUES
(97, 50, 5);

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `dp_name` varchar(255) NOT NULL,
  `created_date` datetime(6) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `dep_id`, `dp_name`, `created_date`, `created_by`, `modified_by`, `modified_date`) VALUES
(1, 22, 'Computer', '2017-10-12 00:00:00.000000', 'admin', '', '2017-10-14 14:14:35'),
(5, 102, 'education', '0000-00-00 00:00:00.000000', '', '', '2017-10-21 15:58:04'),
(1001, 101, 'Chemistory', '0000-00-00 00:00:00.000000', '', '', '2017-10-21 06:20:42'),
(1003, 2001, 'English', '0000-00-00 00:00:00.000000', '', '', '2017-11-04 14:31:55'),
(1004, 101, 'werw_12', '0000-00-00 00:00:00.000000', '', '', '2017-11-06 17:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `fall_add`
--

CREATE TABLE `fall_add` (
  `fall_add_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` datetime(6) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fall_add`
--

INSERT INTO `fall_add` (`fall_add_id`, `name`, `created_date`, `created_by`, `modified_by`, `modified_date`, `status`) VALUES
(2, 'spring_2019', '2017-10-11 00:00:00.000000', 'admin', '', '2017-11-07 19:35:22', 1),
(5, 'summer_vacations', '2017-10-12 00:00:00.000000', 'admin', '', '2017-10-21 15:57:10', 0),
(6, 'fall_2018', '0000-00-00 00:00:00.000000', '', '', '2017-10-21 15:47:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `created_date`) VALUES
(0, 'jhon', '2017-10-17 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`) VALUES
(1, 'admin'),
(3, 'teacher'),
(5, 'hod'),
(7, 'director');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_no`) VALUES
(1, 204),
(3, 100),
(4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `sec`
--

CREATE TABLE `sec` (
  `sec_id` int(11) NOT NULL,
  `sec` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec`
--

INSERT INTO `sec` (`sec_id`, `sec`) VALUES
(3, 'spring_2017');

-- --------------------------------------------------------

--
-- Table structure for table `student_registeration`
--

CREATE TABLE `student_registeration` (
  `st_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` varchar(20) NOT NULL,
  `no` int(20) NOT NULL,
  `gander` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registeration`
--

INSERT INTO `student_registeration` (`st_id`, `fname`, `lname`, `email`, `uname`, `pass`, `created_date`, `modified_date`, `no`, `gander`) VALUES
(1, 'irfan', 'Mumtaz', 'fanta2042@yahoo.com', 'fanta2042@yahoo.com', '12345', '2017-10-07 10:11:08', '', 12334, 'female'),
(2, 'irfan', 'Mumtaz', 'adf@gmail.com', 'fanta2042', '12345', '2017-10-07 10:39:05', '', 300, 'male'),
(3, 'haddi', 'irfan', 'adf@gmail.com', 'username', '12345', '2017-10-07 11:22:46', '', 1233, 'female'),
(4, 'haddi', 'irfan', 'adf@gmail.com', 'username', '12345', '2017-10-07 11:23:28', '', 1233, 'female'),
(5, 'dfa', 'qw', 'fanta2042@yahoo.com', 'fanta2042', '12344', '2017-11-06 17:25:54', '', 12334, 'male'),
(6, 'irfan', 'Mumtaz', 'fanta2042@yahoo.com', 'fanta2042', '12345', '2017-10-07 11:26:41', '', 0, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `instr_id` int(11) NOT NULL,
  `teach_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`instr_id`, `teach_name`, `pass`, `created_date`) VALUES
(6, 'jhon', '12345', '2017-10-21 06:47:15'),
(7, 'jhon', '12345', '2017-10-21 06:47:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`st_course_id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_request`
--
ALTER TABLE `course_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_seats`
--
ALTER TABLE `course_seats`
  ADD PRIMARY KEY (`course_seats_id`);

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fall_add`
--
ALTER TABLE `fall_add`
  ADD PRIMARY KEY (`fall_add_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `student_registeration`
--
ALTER TABLE `student_registeration`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`instr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `st_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `course_request`
--
ALTER TABLE `course_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `course_seats`
--
ALTER TABLE `course_seats`
  MODIFY `course_seats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
--
-- AUTO_INCREMENT for table `fall_add`
--
ALTER TABLE `fall_add`
  MODIFY `fall_add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sec`
--
ALTER TABLE `sec`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_registeration`
--
ALTER TABLE `student_registeration`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `instr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
