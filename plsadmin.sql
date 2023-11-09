-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 08:08 PM
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
-- Database: `plsadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom_courses`
--

CREATE TABLE `classroom_courses` (
  `courses_id` int(11) NOT NULL,
  `courses_name` varchar(255) NOT NULL,
  `courses_dept` varchar(255) NOT NULL,
  `course_sem` varchar(6) NOT NULL,
  `courses_faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom_courses`
--

INSERT INTO `classroom_courses` (`courses_id`, `courses_name`, `courses_dept`, `course_sem`, `courses_faculty`) VALUES
(1, 'Linear Algebra and Calculus', 'CSE', 'S1', 'Dr. Nuja Unnikrishnan'),
(2, 'Vector Calculus, Differential Equations and Transforms', 'CSE', 'S2', 'Nitty Rose Augustine'),
(3, 'Engineering Physics', 'CSE', 'S2', 'Reshmi '),
(4, 'Engineering Chemistry', 'CSE', 'S1', 'Joshy K George'),
(5, 'Engineering Mechanics', 'CSE', 'S2', 'Santhosh G'),
(6, 'Discrete Mathematical Structures', 'CSE', 'S3', 'Reshma'),
(7, 'Data Structures', 'CSE', 'S3', 'Nisha S'),
(8, 'Logic System Design', 'CSE', 'S3', 'Aswathy K Cherian'),
(9, 'Object-Oriented Programming Using Java', 'CSE', 'S3', 'Sindhya K Nambiar'),
(10, 'Graph Theory', 'CSE', 'S4', 'Sreelekha '),
(11, 'Computer Organization and Architecture', 'CSE', 'S4', 'Dr.Varun G Menon'),
(12, 'Operating System', 'CSE', 'S4', 'Anu VR'),
(13, 'Formal Languages and Automata Theory', 'CSE', 'S5', 'Dr. Sonal Ayyappan'),
(14, 'Computer Networks', 'CSE', 'S5', 'Surya SG'),
(15, 'System Software', 'CSE', 'S5', 'Dr. Scaria Alex'),
(16, 'Microprocessors and Microcontrollers', 'CSE', 'S5', 'Shilpa P C');

-- --------------------------------------------------------

--
-- Table structure for table `user_faculty`
--

CREATE TABLE `user_faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_code` varchar(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_password` varchar(255) NOT NULL,
  `faculty_dept` varchar(5) NOT NULL,
  `coordinator` int(2) NOT NULL,
  `coordi_class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_faculty`
--

INSERT INTO `user_faculty` (`faculty_id`, `faculty_code`, `faculty_name`, `faculty_password`, `faculty_dept`, `coordinator`, `coordi_class`) VALUES
(1, 'FA_1234', 'Scaria Alex', '$2y$10$1iinu.ZK/brwZG56Y2Xkv.Hcp/RcdMyEmhObAe3ft310f/CJARJSy', 'CSE', 0, ''),
(2, 'FA_2255', 'Sindhya K Nambiar', '$2y$10$UKaq892OzGwjF3XPlNif..x.1NODPrxALSXAVuPLR2mhKc.UC05cq', 'CSE', 1, 'CSE1'),
(3, 'FA_2277', 'Ashley', '$2y$10$UKaq892OzGwjF3XPlNif..x.1NODPrxALSXAVuPLR2mhKc.UC05cq', 'CSE', 1, 'CSE2');

-- --------------------------------------------------------

--
-- Table structure for table `user_office`
--

CREATE TABLE `user_office` (
  `office_id` int(11) NOT NULL,
  `office_code` varchar(25) NOT NULL,
  `office_name` varchar(45) NOT NULL,
  `office_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_office`
--

INSERT INTO `user_office` (`office_id`, `office_code`, `office_name`, `office_password`) VALUES
(1, 'OF_0156', 'Anjana', '$2y$10$70SOlvk1XCuNoTpdLkc01ewD/rGvJS8WunynaErPYuwZXiVAIwtEm');

-- --------------------------------------------------------

--
-- Table structure for table `user_parents`
--

CREATE TABLE `user_parents` (
  `parents_id` int(11) NOT NULL,
  `parents_code` varchar(15) NOT NULL,
  `parents_name` varchar(255) NOT NULL,
  `parents_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_parents`
--

INSERT INTO `user_parents` (`parents_id`, `parents_code`, `parents_name`, `parents_password`) VALUES
(1, 'PA_8841', 'Rajesh KG', '$2y$10$X.KhUFmEthbZD9vNDeNpYu.f.GGFth3Io24.jWvFTJlBBdqobbloi');

-- --------------------------------------------------------

--
-- Table structure for table `user_students`
--

CREATE TABLE `user_students` (
  `student_id` int(11) NOT NULL,
  `student_code` varchar(15) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_sem` varchar(5) NOT NULL,
  `student_dept` varchar(5) NOT NULL,
  `dept_section` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_students`
--

INSERT INTO `user_students` (`student_id`, `student_code`, `student_name`, `student_password`, `student_sem`, `student_dept`, `dept_section`) VALUES
(1, 'ST_SCS892120', 'Alan Varghese Paul', '$2y$10$seb45d3xVStjn35O/3SlEOBXtHHrT31F.MeW6xGX75o6uFJ60r5A2', 'S5', 'CSE', 1),
(2, 'ST_SCS883520', 'Akhil TS', '$2y$10$dnaNrcxTVnnv5NxGxztWHekGDUsu9pd1XXz0Oke4N5YPZXe6gqGgW\r\n', 'S5', 'CSE', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom_courses`
--
ALTER TABLE `classroom_courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- Indexes for table `user_faculty`
--
ALTER TABLE `user_faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `user_office`
--
ALTER TABLE `user_office`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `user_parents`
--
ALTER TABLE `user_parents`
  ADD PRIMARY KEY (`parents_id`);

--
-- Indexes for table `user_students`
--
ALTER TABLE `user_students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom_courses`
--
ALTER TABLE `classroom_courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_faculty`
--
ALTER TABLE `user_faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_office`
--
ALTER TABLE `user_office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_parents`
--
ALTER TABLE `user_parents`
  MODIFY `parents_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_students`
--
ALTER TABLE `user_students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
