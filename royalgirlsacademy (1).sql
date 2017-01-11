-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 09:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `royalgirlsacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ceb8447cc4ab78d2ec34cd9f11e4bed2');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `name`) VALUES
(1, 'JSS 1 A'),
(2, 'JSS 1 B'),
(3, 'JSS 2 A'),
(4, 'JSS 2 B'),
(5, 'JSS 3 A'),
(6, 'JSS 3 B'),
(7, 'SSS 1 A'),
(8, 'SSS 1 B'),
(9, 'SSS 2 A'),
(10, 'SSS 2 B'),
(11, 'SSS 3 A'),
(12, 'SSS 3 B');

-- --------------------------------------------------------

--
-- Table structure for table `dormitory`
--

CREATE TABLE IF NOT EXISTS `dormitory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dormitory`
--

INSERT INTO `dormitory` (`id`, `name`) VALUES
(1, 'Esther');

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE IF NOT EXISTS `milestones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `name`) VALUES
(2, '1st Resumption Test'),
(3, '1st Class Work'),
(4, '1st Quiz'),
(5, '1st Assigment'),
(6, '2nd Quiz'),
(7, 'Mid Term Total'),
(8, '2nd Resumption Test'),
(9, '2nd Class Work'),
(10, '3rd Quiz'),
(11, '2nd Assigment'),
(12, 'Research'),
(13, 'Total CA'),
(14, 'Exam'),
(15, 'Term Total'),
(16, 'Position'),
(17, 'Class Average'),
(18, 'Tutor''s Remark');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass_word` varchar(100) NOT NULL,
  `address` varchar(220) NOT NULL,
  `phone` int(15) NOT NULL,
  `prof` varchar(150) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `photo` varchar(220) NOT NULL,
  PRIMARY KEY (`parent_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `firstname`, `middle_name`, `last_name`, `email`, `pass_word`, `address`, `phone`, `prof`, `gender`, `photo`) VALUES
(1, '', '', '', '', '', '', 0, '', '', ''),
(2, 'west', 'man', 'papa', 'west@gmail.com', 'mypassword', 'port harcourt', 2147483647, 'am his dad', 'M', ''),
(3, 'akman', 'syla', 'omonunu', 'akman@gmail23.com', 'mypassword', 'port harcourt', 2147483647, 'am his dad', 'M', ''),
(9, 'man', 'mamaman', 'man1', 'man1@gmail.com', 'mypassword', 'nigeria', 123456778, 'blablabla', 'M', '');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` float(11,2) NOT NULL AUTO_INCREMENT,
  `subject_id` float(11,2) NOT NULL,
  `class_id` int(11) NOT NULL,
  `1st_Resumption_Test` float(11,2) NOT NULL,
  `1st_Class_Work` float(11,2) NOT NULL,
  `1st_Quiz` float(11,2) NOT NULL,
  `1st_Assignment` float(11,2) NOT NULL,
  `2nd_Quiz` float(11,2) NOT NULL,
  `Mid_Term_Total` float(11,2) NOT NULL,
  `2nd_Resumption_Test` float(11,2) NOT NULL,
  `2nd_Class_Work` float(11,2) NOT NULL,
  `3rd_Quiz` float(11,2) NOT NULL,
  `2nd_Assignment` float(11,2) NOT NULL,
  `Research` float(11,2) NOT NULL,
  `Total_CA` float(11,2) NOT NULL,
  `Exam` float(11,2) NOT NULL,
  `Term_Total` float(11,2) NOT NULL,
  `Position` int(11) NOT NULL,
  `Class_Avg` float(11,2) NOT NULL,
  `Tutor_Remarks` varchar(150) NOT NULL DEFAULT ' ',
  `student_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `subject_id`, `class_id`, `1st_Resumption_Test`, `1st_Class_Work`, `1st_Quiz`, `1st_Assignment`, `2nd_Quiz`, `Mid_Term_Total`, `2nd_Resumption_Test`, `2nd_Class_Work`, `3rd_Quiz`, `2nd_Assignment`, `Research`, `Total_CA`, `Exam`, `Term_Total`, `Position`, `Class_Avg`, `Tutor_Remarks`, `student_id`, `session_id`, `term_id`) VALUES
(49.00, 1.00, 1, 1.00, 10.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 3, 1, 1),
(50.00, 2.00, 1, 20.00, 11.00, 1.00, 4.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 3, 1, 1),
(51.00, 1.00, 1, 5.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 2, 1, 1),
(52.00, 2.00, 1, 5.00, 1.00, 1.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 2, 1, 1),
(53.00, 1.00, 1, 20.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 16, 1, 1),
(54.00, 1.00, 1, 5.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 2, 1, 1),
(55.00, 2.00, 1, 3.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 2, 1, 1),
(56.00, 3.00, 1, 3.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, ' ', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `parents_name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `b_day` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dormitory_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `middle_name`, `lastname`, `parents_name`, `class_id`, `b_day`, `gender`, `password`, `email`, `dormitory_id`, `photo`, `address`) VALUES
(2, 'Michael', 'Ify', 'Ozoemena', '1', 1, '11/29/2016', 'M', 'Password', '', 1, '', 'No 12 Odi Street, Old G.R.A, forces Avenue, SSS QUATERS'),
(3, 'Emmanuel', 'Chisom', 'Ozoemena', '1', 1, '11/29/2016', 'M', 'Password', 'michaelozoemena2@gmail.com', 1, '', 'No 12 Odi Street, Old G.R.A, forces Avenue, SSS QUATERS'),
(16, 'Bleh', 'B', 'Ba', '2', 1, '11/30/2016', 'F', 'Password', 'sdyuhj@gmail.com', 2, '', 'no 15, No 55 sdiuj sthjds dsiud '),
(17, 'tezt', 'uidj', 'edj', '1', 2, '12/12/2016', 'M', 'password', 'michaelozoemena2@gmail.com', 2, '', '12 odi Street, Old G.R.A, Port Harcourt'),
(18, 'BBB', 'iiejwd', 'uwjns', 'idwj', 1, '12/20/2016', 'M', 'Ozoemena121212', 'michaelozoemena2@gmail.com', 2, '', 'no 12, No 12 odi street forces avenue'),
(19, 'uiwdjs', 'jnd', 'Ozoemena', 'Michael Ozoemena', 1, '12/06/2016', 'M', 'asm,', 'michaelozoemena2@gmail.com', 0, '', 'No 12 Odi Street, Old G.R.A, forces Avenue, SSS QUATERS'),
(20, 'uiwdjs', 'jnd', 'Ozoemena', 'Michael Ozoemena', 1, '12/06/2016', 'M', 'asm,', 'michaelozoemena2@gmail.com', 0, '', 'No 12 Odi Street, Old G.R.A, forces Avenue, SSS QUATERS'),
(21, 'CCC', 'uefidj', 'uiirfdj', 'oifemk', 1, '12/20/2016', 'F', 'iodm', 'msd@oirfmd', 0, '', 'iodmk'),
(22, 'CCC', 'uirfdj', 'ufn', 'uifjdkcm', 1, '12/07/2016', 'M', 'reijdk', 'michaelozoemena2@gmail.com', 0, '', 'No 12 Odi Street, Old G.R.A, forces Avenue, SSS QUATERS'),
(23, 'DDD', 'NNN', 'Ozoemena', 'Michael Ozoemena', 2, '12/13/2016', 'M', 'Password', 'michaelozoemena2@gmail.com', 1, '', 'No 12 Odi Street, Old G.R.A, forces Avenue, SSS QUATERS'),
(24, '', '', '', '', 0, '', '0', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `class_id`, `teacher_id`) VALUES
(1, 'English', 1, 0),
(2, 'Mathematics', 1, 0),
(3, 'Physics', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `b_day` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `firstname`, `class_id`, `subject_id`, `lastname`, `middle_name`, `password`, `gender`, `address`, `email`, `b_day`, `photo`) VALUES
(1, 'ADATA', 1, 3, '', '', 'password', 0, '', '', '', ''),
(2, 'Amara', 0, 0, '', '', 'password', 0, 'Rivers, Nigeria', 'michaelozoemena2@gmail.com', '12/05/2016', ''),
(3, 'ANDERSON', 0, 0, '', '', 'password', 0, 'Rivers, Nigeria', 'michaelozoemena2@gmail.com', '12/05/2016', ''),
(4, 'AJAYI', 0, 0, '', '', 'password', 0, 'Rivers, Nigeria', 'michaelozoemena2@gmail.com', '12/05/2016', ''),
(5, 'BIOBELE', 0, 0, '', '', 'password', 0, 'Rivers, Nigeria', 'michaelozoemena2@gmail.com', '12/05/2016', ''),
(6, 'EDDY', 0, 0, '', '', 'password', 0, 'Rivers, Nigeria', 'michaelozoemena2@gmail.com', '12/05/2016', ''),
(7, 'moses', 0, 0, 'anumadu', 'udo', 'mypassword', 0, 'port harcourt', 'alloyking1@gmail.com', '12/12/1992', ''),
(8, 'akman', 0, 0, 'solomon', 'syla', 'mypassword', 0, 'port harcourt', 'akman@gmail.com', '12/12/1995', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `name`) VALUES
(1, 'First Term'),
(2, 'Second Term'),
(3, 'Third Term');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `time`, `class_id`, `subject_id`, `teacher_id`) VALUES
(1, '8:00 am - 8:45 am', 1, 1, 1),
(2, '8:45 am - 9:00 am', 1, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
