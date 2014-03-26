-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2014 at 12:50 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teacher_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `password` varchar(25) NOT NULL,
  `user_type` enum('male','female') NOT NULL,
  `user_role` int(11) NOT NULL,
  `is_active` bit(10) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email_id`, `password`, `user_type`, `user_role`, `is_active`, `createdon`) VALUES
(1, 'Nilesh', 'admin', 'admin@teacherportal.com', 'admin@123', 'male', 1, '49', '0000-00-00 00:00:00'),
(2, 'Super', 'admin', 'super@teacherportal.com', 'super@123', 'male', 2, '49', '0000-00-00 00:00:00'),
(28, 'Nilesh', 'Ahir', 'nilesh.aseum@gmail.com', 'nilesh@123', 'male', 0, '0', '2014-01-24 12:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_schedule_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `left_time` datetime NOT NULL,
  `concern_person` varchar(500) NOT NULL,
  `total_elapsed_time` datetime NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE IF NOT EXISTS `assessment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `point_value` varchar(100) NOT NULL,
  `CCCS_id` int(11) NOT NULL,
  `perf_obj_id` int(11) NOT NULL,
  `objective_id` int(11) NOT NULL,
  `IEP_global_id` int(11) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `point_value` varchar(100) NOT NULL,
  `CCCS_id` int(11) NOT NULL,
  `perf_obj_id` int(11) NOT NULL,
  `objective_id` int(11) NOT NULL,
  `IEP_goal_id` int(11) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ass_type`
--

CREATE TABLE IF NOT EXISTS `ass_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_schedule_id1` int(11) NOT NULL,
  `teacher_schedule_id2` int(11) NOT NULL,
  `teacher_schedule_id3` int(11) NOT NULL,
  `teacher_schedule_id4` int(11) NOT NULL,
  `teacher_schedule_id5` int(11) NOT NULL,
  `teacher_schedule_id6` int(11) NOT NULL,
  `teacher_schedule_id7` int(11) NOT NULL,
  `teacher_schedule_id8` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner_list`
--

CREATE TABLE IF NOT EXISTS `banner_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `is_active` bit(4) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `banner_list`
--

INSERT INTO `banner_list` (`id`, `banner_name`, `description`, `is_active`, `createdon`) VALUES
(1, 'Chrysanthemum.jpg', 'Hello World', '1', '2014-01-27 12:17:48'),
(6, 'Desert.jpg', 'Hello Aseum', '1', '2014-01-24 15:10:26'),
(7, 'Hydrangeas.jpg', 'Hello Aseum', '1', '2014-01-24 15:10:42'),
(8, 'Jellyfish.jpg', 'Hello Aseum', '1', '2014-01-24 15:10:53'),
(9, 'Koala.jpg', 'Hello Aseum', '1', '2014-01-24 15:11:05'),
(12, 'Chrysanthemum.jpg', 'test', '1', '2014-01-29 07:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `behaviour`
--

CREATE TABLE IF NOT EXISTS `behaviour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `min_limit` varchar(50) NOT NULL,
  `maxx_limit` varchar(50) NOT NULL,
  `anecdote` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cccs`
--

CREATE TABLE IF NOT EXISTS `cccs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class_setup`
--

CREATE TABLE IF NOT EXISTS `class_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `grade_level_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `assistant_teacher` varchar(150) NOT NULL,
  `grading_rubric` varchar(100) NOT NULL,
  `screen_view` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `meta_title` varchar(1000) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `template` varchar(5000) NOT NULL,
  `is_active` bit(4) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `content`, `url`, `meta_title`, `meta_description`, `template`, `is_active`, `createdon`) VALUES
(1, 'First Cms', 'Cms Content', 'www.cms.com', 'Cms Title', 'Description', '<p><img alt="" src="http://localhost/Nilesh1/Teacher_Portal/public_html/img/photo1.jpg" style="float:right; height:65px; width:65px" />Hello World</p>', '1', '2014-01-28 15:11:32'),
(2, 'Home', 'Page', 'www.teacherportal.com/home', 'Home', 'Description', '<p>Hello World</p>', '1', '2014-01-25 13:46:18'),
(3, 'About Us', 'About Us', 'www.teacherportal.com/aboutus', 'title', 'title', '<p>About Us<img alt="" src="http://localhost/Nilesh1/teacher_portal/public_html/img/photo2.jpg" style="float:right; height:65px; width:65px" /></p>', '1', '2014-01-28 14:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `is_active` bit(4) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `is_active`, `createdon`) VALUES
(1, 'india', '1', '2014-01-27 10:36:47'),
(3, 'Australia', '1', '2014-01-27 10:38:08'),
(4, 'Brazil', '1', '2014-01-28 14:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `description` varchar(1000) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `explanation_type`
--

CREATE TABLE IF NOT EXISTS `explanation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

CREATE TABLE IF NOT EXISTS `grade_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `is_active` bit(10) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`id`, `name`, `is_active`, `createdon`) VALUES
(1, 'First', '1', '2014-01-27 06:54:42'),
(4, 'Second', '1', '2014-01-27 15:30:53'),
(5, 'Third', '1', '2014-01-29 06:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `grade_weight`
--

CREATE TABLE IF NOT EXISTS `grade_weight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `percentage` varchar(10) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `home_work`
--

CREATE TABLE IF NOT EXISTS `home_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_schedule_id` int(11) NOT NULL,
  `is_done` varchar(10) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `iep_goal`
--

CREATE TABLE IF NOT EXISTS `iep_goal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan`
--

CREATE TABLE IF NOT EXISTS `lesson_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `grade_level_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `objectives` varchar(1000) NOT NULL,
  `content_area` varchar(100) NOT NULL,
  `learning_standard` varchar(50) NOT NULL,
  `aim` varchar(1000) NOT NULL,
  `do_now` varchar(1000) NOT NULL,
  `mini_lesson` varchar(1000) NOT NULL,
  `guided_questions` varchar(1000) NOT NULL,
  `guided_practice` varchar(1000) NOT NULL,
  `assignment` varchar(500) NOT NULL,
  `unit_of_study` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE IF NOT EXISTS `objective` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pass_manager`
--

CREATE TABLE IF NOT EXISTS `pass_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass_type_id` int(11) NOT NULL,
  `teacher_schedule_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `left_time` datetime NOT NULL,
  `isReturn` bit(1) NOT NULL,
  `return_time` datetime NOT NULL,
  `total_elapsed_time` datetime NOT NULL,
  `date` datetime NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pass_type`
--

CREATE TABLE IF NOT EXISTS `pass_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `session_id` int(11) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_total` varchar(100) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `error_code` varchar(1000) NOT NULL,
  `error_message` varchar(1000) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `perf_obj`
--

CREATE TABLE IF NOT EXISTS `perf_obj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `plan_detail`
--

CREATE TABLE IF NOT EXISTS `plan_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `is_active` bit(10) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `plan_detail`
--

INSERT INTO `plan_detail` (`id`, `name`, `price`, `description`, `is_active`, `createdon`) VALUES
(3, 'GSM', '$100', 'Description', '1', '2014-01-24 09:32:06'),
(4, 'WiFi', '$5000', 'Description', '1', '2014-01-28 14:11:45'),
(5, 'Bronze', '$100000', 'Test', '1', '2014-01-29 06:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `school_type`
--

CREATE TABLE IF NOT EXISTS `school_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `is_active` bit(10) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `school_type`
--

INSERT INTO `school_type` (`id`, `name`, `is_active`, `createdon`) VALUES
(2, 'Aseum High School', '1', '2014-03-07 13:48:00'),
(3, 'Thomas School', '0', '2014-01-23 15:32:11'),
(4, 'World School', '1', '2014-01-25 14:55:20'),
(7, 'Second', '1', '2014-01-28 13:35:37'),
(8, 'First', '1', '2014-01-28 13:35:44'),
(9, 'Teacher', '1', '2014-01-28 13:36:09'),
(10, 'Rajsthan', '1', '2014-01-28 13:36:30'),
(11, 'Gujarat', '1', '2014-01-28 13:36:41'),
(12, 'Hello School', '1', '2014-01-28 15:18:09'),
(13, 'India School', '1', '2014-01-28 15:26:36'),
(14, 'J.P.Parekh', '1', '2014-01-28 15:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `is_active` bit(10) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `is_active`, `createdon`) VALUES
(1, 'Teacher', '1', '2014-01-27 06:55:07'),
(4, 'Student', '1', '2014-01-27 15:31:09'),
(5, 'Third', '1', '2014-01-28 14:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `is_active` bit(4) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `is_active`, `createdon`) VALUES
(1, 'Gujarat', '1', '2014-01-27 11:00:47'),
(2, 'Maharashtra', '1', '2014-01-28 14:52:09'),
(3, 'Rajsthan', '1', '2014-01-29 07:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `DOB` datetime NOT NULL,
  `gradelevel_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_transportation` varchar(500) NOT NULL,
  `parental_status` varchar(50) NOT NULL,
  `m_first_name` varchar(50) NOT NULL,
  `m_last_name` varchar(50) NOT NULL,
  `m_home_no` varchar(20) NOT NULL,
  `m_mobile_no` varchar(20) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_address_1` varchar(50) NOT NULL,
  `m_address_2` varchar(50) NOT NULL,
  `m_address_3` varchar(50) NOT NULL,
  `m_city` varchar(50) NOT NULL,
  `m_state` varchar(50) NOT NULL,
  `m_ZipCode` int(10) NOT NULL,
  `f_first_name` varchar(50) NOT NULL,
  `f_last_name` varchar(50) NOT NULL,
  `f_home_no` varchar(20) NOT NULL,
  `f_mobile_no` varchar(20) NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `f_address_1` varchar(50) NOT NULL,
  `f_address_2` varchar(50) NOT NULL,
  `f_address_3` varchar(50) NOT NULL,
  `f_city` varchar(50) NOT NULL,
  `f_state` varchar(50) NOT NULL,
  `f_ZipCode` int(10) NOT NULL,
  `reading_level` varchar(150) NOT NULL,
  `ela_level` varchar(150) NOT NULL,
  `math_level` varchar(150) NOT NULL,
  `learning_style` varchar(1000) NOT NULL,
  `anecdotee` varchar(1000) NOT NULL,
  `is_support_staff` varchar(150) NOT NULL,
  `IEP` int(150) NOT NULL,
  `504_plan` int(150) NOT NULL,
  `BIP` int(150) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `DOB` datetime NOT NULL,
  `school_email` varchar(100) NOT NULL,
  `preferablemode` varchar(150) NOT NULL,
  `h_contact_no` varchar(20) NOT NULL,
  `w_contact_no` varchar(20) NOT NULL,
  `address_1` varchar(200) NOT NULL,
  `address_2` varchar(200) NOT NULL,
  `address_3` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ZipCode` int(10) NOT NULL,
  `best_time` datetime NOT NULL,
  `office_hours` varchar(50) NOT NULL,
  `extra_help` varchar(200) NOT NULL,
  `cell_no` varchar(20) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_type_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL,
  `principal_name` varchar(150) NOT NULL,
  `s_contact_no` varchar(20) NOT NULL,
  `s_address_1` varchar(150) NOT NULL,
  `s_address_2` varchar(150) NOT NULL,
  `s_address_3` varchar(150) NOT NULL,
  `s_city` varchar(50) NOT NULL,
  `s_state` varchar(50) NOT NULL,
  `s_country` varchar(50) NOT NULL,
  `s_ZipCode` int(10) NOT NULL,
  `subject_area` varchar(500) NOT NULL,
  `subject_thought` varchar(500) NOT NULL,
  `gradelevel_id` int(11) NOT NULL,
  `s_monday_time` datetime NOT NULL,
  `s_tuesday_time` datetime NOT NULL,
  `s_wednesday_time` datetime NOT NULL,
  `s_thursday_time` datetime NOT NULL,
  `s_friday_time` datetime NOT NULL,
  `plan_id` int(11) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE IF NOT EXISTS `teacher_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_payment`
--

CREATE TABLE IF NOT EXISTS `temp_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `session_id` varchar(500) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_total` varchar(100) NOT NULL,
  `transaction_id` varchar(500) NOT NULL,
  `error_code` varchar(1000) NOT NULL,
  `error_message` varchar(1000) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_media`
--

CREATE TABLE IF NOT EXISTS `uploaded_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_plan_id` int(11) NOT NULL,
  `media_type` varchar(150) NOT NULL,
  `media_name` varchar(500) NOT NULL,
  `isActive` bit(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_active` bit(4) NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_first_name`, `user_last_name`, `email`, `password`, `is_active`, `createdon`) VALUES
(1, 'nilesh', 'ahir', 'nilesh.aseum@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '2014-03-26 10:15:37'),
(2, 'nilesh', 'ahir', 'nileshkalsariya302@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '2014-03-26 10:18:10'),
(3, 'nilesh', 'ahir', 'nileshkalsariya@aseuminfotech.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '2014-03-26 10:24:34'),
(4, 'nilesh', 'ahir', 'kalsariyanilesh302@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '2014-03-26 10:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_name` varchar(500) NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
