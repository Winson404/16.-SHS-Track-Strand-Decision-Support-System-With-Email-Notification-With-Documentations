-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 02:52 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shs_track_support`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_strand`
--

CREATE TABLE IF NOT EXISTS `academic_strand` (
`academic_strand_Id` int(11) NOT NULL,
  `user_Id` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q1_choice1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q2_choice2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q3_choice3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q4_choice4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q5_choice5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q6_choice6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q7_choice7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q8_choice8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q9_choice9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q10_choice10` varchar(255) NOT NULL,
  `q11` varchar(255) NOT NULL,
  `q11_choice11` varchar(255) NOT NULL,
  `q12` varchar(255) NOT NULL,
  `q12_choice12` varchar(255) NOT NULL,
  `q13` varchar(255) NOT NULL,
  `q13_choice13` varchar(255) NOT NULL,
  `q14` varchar(255) NOT NULL,
  `q14_choice14` varchar(255) NOT NULL,
  `q15` varchar(255) NOT NULL,
  `q15_choice15` varchar(255) NOT NULL,
  `track_assessment_date` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPRESSED AUTO_INCREMENT=24 ;

--
-- Dumping data for table `academic_strand`
--

INSERT INTO `academic_strand` (`academic_strand_Id`, `user_Id`, `q1`, `q1_choice1`, `q2`, `q2_choice2`, `q3`, `q3_choice3`, `q4`, `q4_choice4`, `q5`, `q5_choice5`, `q6`, `q6_choice6`, `q7`, `q7_choice7`, `q8`, `q8_choice8`, `q9`, `q9_choice9`, `q10`, `q10_choice10`, `q11`, `q11_choice11`, `q12`, `q12_choice12`, `q13`, `q13_choice13`, `q14`, `q14_choice14`, `q15`, `q15_choice15`, `track_assessment_date`) VALUES
(20, '39', 'Accountant, Marketing Manager, Entrepreneur', 'ABM', 'I love to think of creative new ideas and take risks in my work.', 'ABM', 'Math, Science & Technology', 'STEM', 'Psychology, Creative Writing, Philosophy', 'HUMSS', 'Reading Newspapers, Debate', 'HUMSS', 'Critical Thinker', 'HUMSS', 'All of the above', 'GAS', 'Different societies and cultures from around the world and the difference of the environment before and now', 'HUMSS', 'To work on groundbreaking experiment', 'STEM', 'The source of different knowledge and Ideas', 'GAS', 'Independence and Equal rights', 'HUMSS', 'To own a successful business', 'ABM', 'Analyze informationâ€™s before making a move.', 'ABM', 'The only consistent thing in this world is change.', 'ABM', 'Yes', 'Yes', '2022-10-29'),
(21, '49', 'Psychologist, Lawyer, Writer, Reporter, Priest, Teacher', 'HUMSS', 'I love giving advice for the other person', 'HUMSS', 'English, Science, History', 'HUMSS', 'Business, Marketing, Finance', 'ABM', 'I enjoy all of the above', 'GAS', 'Critical Thinker', 'HUMSS', 'Hone your creative writing skills', 'HUMSS', 'Different societies and cultures from around the world and the difference of the environment before and now', 'HUMSS', 'Start a new business and work with multinational companies', 'ABM', 'Maintaining balance, harmony, and cleanliness', 'HUMSS', 'Independence and Equal rights', 'HUMSS', 'Apply all my knowledge that I gained to the future', 'GAS', 'Consider various opinions from other people and handle the situation calmly.', 'HUMSS', 'Allâ€™s fair in love and war', 'HUMSS', 'Yes', 'Yes', '2022-11-12'),
(22, '41', 'Accountant, Marketing Manager, Entrepreneur', 'ABM', 'I love to think of creative new ideas and take risks in my work.', 'ABM', 'English, Math, Science, History', 'GAS', 'Psychology, Creative Writing, Philosophy', 'HUMSS', 'Computations, Experiments', 'STEM', 'Critical Thinker and good in math', 'STEM', 'Hone your creative writing skills', 'HUMSS', 'Different societies and cultures from around the world and the difference of the environment before and now', 'HUMSS', 'To work on groundbreaking experiment', 'STEM', 'Maintaining balance, harmony, and cleanliness', 'HUMSS', 'Independence and Equal rights', 'HUMSS', 'To own a successful business', 'ABM', 'Face it actively and think a different way to solve it', 'GAS', 'The only consistent thing in this world is change.', 'ABM', 'No', 'No', '2022-11-16'),
(23, '::1', 'Accountant, Marketing Manager, Entrepreneur', 'ABM', 'I love to think of creative new ideas and take risks in my work.', 'ABM', 'Math, Science & Technology', 'STEM', 'Psychology, Creative Writing, Philosophy', 'HUMSS', 'Reading Newspapers, Debate', 'HUMSS', 'Good in Decision making and math', 'ABM', 'All of the above', 'GAS', 'Story about some of the most successful people in the world.', 'ABM', 'Start a new business and work with multinational companies', 'ABM', 'Delegating tasks and making sure everyone is focused on the same goal', 'ABM', 'Leadership, Business', 'ABM', 'To own a successful business', 'ABM', 'Analyze informationâ€™s before making a move.', 'ABM', 'The only consistent thing in this world is change.', 'ABM', 'Yes', 'Yes', '2023-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `academic_strand_sort`
--

CREATE TABLE IF NOT EXISTS `academic_strand_sort` (
`sort_Id` int(11) NOT NULL,
  `user_Id` varchar(255) NOT NULL,
  `strand_answer` varchar(255) NOT NULL,
  `assessment_date` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=263 ;

--
-- Dumping data for table `academic_strand_sort`
--

INSERT INTO `academic_strand_sort` (`sort_Id`, `user_Id`, `strand_answer`, `assessment_date`) VALUES
(165, '49', 'HUMSS', '2022-11-12'),
(166, '49', 'HUMSS', '2022-11-12'),
(167, '49', 'HUMSS', '2022-11-12'),
(168, '49', 'ABM', '2022-11-12'),
(169, '49', 'GAS', '2022-11-12'),
(170, '49', 'HUMSS', '2022-11-12'),
(171, '49', 'HUMSS', '2022-11-12'),
(172, '49', 'HUMSS', '2022-11-12'),
(173, '49', 'ABM', '2022-11-12'),
(174, '49', 'HUMSS', '2022-11-12'),
(175, '49', 'HUMSS', '2022-11-12'),
(176, '49', 'GAS', '2022-11-12'),
(177, '49', 'HUMSS', '2022-11-12'),
(178, '49', 'HUMSS', '2022-11-12'),
(179, '41', 'ABM', '2022-11-16'),
(180, '41', 'ABM', '2022-11-16'),
(181, '41', 'GAS', '2022-11-16'),
(182, '41', 'HUMSS', '2022-11-16'),
(183, '41', 'STEM', '2022-11-16'),
(184, '41', 'STEM', '2022-11-16'),
(185, '41', 'HUMSS', '2022-11-16'),
(186, '41', 'HUMSS', '2022-11-16'),
(187, '41', 'STEM', '2022-11-16'),
(188, '41', 'HUMSS', '2022-11-16'),
(189, '41', 'HUMSS', '2022-11-16'),
(190, '41', 'ABM', '2022-11-16'),
(191, '41', 'GAS', '2022-11-16'),
(192, '41', 'ABM', '2022-11-16'),
(221, '::1', 'ABM', '2023-01-19'),
(222, '::1', 'ABM', '2023-01-19'),
(223, '::1', 'HUMSS', '2023-01-19'),
(224, '::1', 'ABM', '2023-01-19'),
(225, '::1', 'STEM', '2023-01-19'),
(226, '::1', 'ABM', '2023-01-19'),
(227, '::1', 'STEM', '2023-01-19'),
(228, '::1', 'HUMSS', '2023-01-19'),
(229, '::1', 'HUMSS', '2023-01-19'),
(230, '::1', 'HUMSS', '2023-01-19'),
(231, '::1', 'HUMSS', '2023-01-19'),
(232, '::1', 'HUMSS', '2023-01-19'),
(233, '::1', 'HUMSS', '2023-01-19'),
(234, '::1', 'ABM', '2023-01-19'),
(249, '39', 'GAS', '2023-03-26'),
(250, '39', 'HUMSS', '2023-03-26'),
(251, '39', 'HUMSS', '2023-03-26'),
(252, '39', 'HUMSS', '2023-03-26'),
(253, '39', 'HUMSS', '2023-03-26'),
(254, '39', 'ABM', '2023-03-26'),
(255, '39', 'ABM', '2023-03-26'),
(256, '39', 'ABM', '2023-03-26'),
(257, '39', 'STEM', '2023-03-26'),
(258, '39', 'HUMSS', '2023-03-26'),
(259, '39', 'STEM', '2023-03-26'),
(260, '39', 'HUMSS', '2023-03-26'),
(261, '39', 'GAS', '2023-03-26'),
(262, '39', 'STEM', '2023-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
`track_Id` int(11) NOT NULL,
  `user_Id` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q1_choice1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q2_choice2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q3_choice3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q4_choice4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q5_choice5` varchar(255) NOT NULL,
  `track_assessment_date` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_Id`, `user_Id`, `q1`, `q1_choice1`, `q2`, `q2_choice2`, `q3`, `q3_choice3`, `q4`, `q4_choice4`, `q5`, `q5_choice5`, `track_assessment_date`) VALUES
(20, '39', 'Solving, Writing or Communicating', 'ACADEMIC', 'Housework, Computers, Fixing things, Livelihood', 'TVL', 'The social work environment', 'SPORTS', 'Creative and Resourceful', 'ARTS AND DESIGN', 'Accountancy, Teacher, Civil Engineering, Psychology', 'ACADEMIC', '2022-10-29'),
(22, '635d164984dfe', 'Solving, Writing or Communicating', 'ACADEMIC', 'Writing stories, Computations, Analyzing random case', 'ACADEMIC', 'The conventional work environment', 'ACADEMIC', 'Competitive and Organized', 'TVL', 'Game Developer, Baker, Electrical/Electrician Technician', 'TVL', '2022-10-29'),
(23, '635d22451b180', 'Do Physical Activities or Exercises', 'SPORTS', 'Sports and Games', 'SPORTS', 'The social work environment', 'SPORTS', 'Athlete and Sportsman', 'SPORTS', 'Accountancy, Teacher, Civil Engineering, Psychology', 'ACADEMIC', '2022-10-29'),
(24, '635d41b1a9d15', 'Solving, Writing or Communicating', 'ACADEMIC', 'Housework, Computers, Fixing things, Livelihood', 'TVL', 'The conventional work environment', 'ACADEMIC', 'Athlete and Sportsman', 'SPORTS', 'Sports Science, Biomechanics', 'SPORTS', '2022-10-29'),
(25, '63612e1880182', 'Solving, Writing or Communicating', 'ACADEMIC', 'Housework, Computers, Fixing things, Livelihood', 'TVL', 'The social work environment', 'SPORTS', 'Competitive and Organized', 'TVL', 'Sports Science, Biomechanics', 'SPORTS', '2022-11-01'),
(26, '49', 'Solving, Writing or Communicating', 'ACADEMIC', 'Housework, Computers, Fixing things, Livelihood', 'TVL', 'The artistic work environment', 'ARTS AND DESIGN', 'Athlete and Sportsman', 'SPORTS', 'Game Developer, Baker, Electrical/Electrician Technician', 'TVL', '2022-11-12'),
(27, '41', 'Solving, Writing or Communicating', 'ACADEMIC', 'Sports and Games', 'SPORTS', 'The social work environment', 'SPORTS', 'Athlete and Sportsman', 'SPORTS', 'Accountancy, Teacher, Civil Engineering, Psychology', 'ACADEMIC', '2022-11-16'),
(28, '43', 'Solving, Writing or Communicating', 'ACADEMIC', 'Acting, Drawing', 'ARTS AND DESIGN', 'The artistic work environment', 'ARTS AND DESIGN', 'Creative and Resourceful', 'ARTS AND DESIGN', 'Graphic Designer, Fine Arts', 'ARTS AND DESIGN', '2022-11-16'),
(34, '::1', 'Solving, Writing or Communicating', 'ACADEMIC', 'Writing stories, Computations, Analyzing random case', 'ACADEMIC', 'The realistic environment', 'TVL', 'Athlete and Sportsman', 'SPORTS', 'Sports Science, Biomechanics', 'SPORTS', '2022-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `track_sort`
--

CREATE TABLE IF NOT EXISTS `track_sort` (
`sort_Id` int(11) NOT NULL,
  `user_Id` varchar(255) NOT NULL,
  `track_answer` varchar(255) NOT NULL,
  `assessment_date` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=341 ;

--
-- Dumping data for table `track_sort`
--

INSERT INTO `track_sort` (`sort_Id`, `user_Id`, `track_answer`, `assessment_date`) VALUES
(336, '39', 'ACADEMIC', '2023-03-26'),
(337, '39', 'TVL', '2023-03-26'),
(338, '39', 'SPORTS', '2023-03-26'),
(339, '39', 'ARTS AND DESIGN', '2023-03-26'),
(340, '39', 'ACADEMIC', '2023-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `tvl_strand`
--

CREATE TABLE IF NOT EXISTS `tvl_strand` (
`academic_strand_Id` int(11) NOT NULL,
  `user_Id` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q1_choice1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q2_choice2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q3_choice3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q4_choice4` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q5_choice5` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q6_choice6` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q7_choice7` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q8_choice8` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q9_choice9` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q10_choice10` varchar(255) NOT NULL,
  `q11` varchar(255) NOT NULL,
  `q11_choice11` varchar(255) NOT NULL,
  `q12` varchar(255) NOT NULL,
  `q12_choice12` varchar(255) NOT NULL,
  `q13` varchar(255) NOT NULL,
  `q13_choice13` varchar(255) NOT NULL,
  `q14` varchar(255) NOT NULL,
  `q14_choice14` varchar(255) NOT NULL,
  `q15` varchar(255) NOT NULL,
  `q15_choice15` varchar(255) NOT NULL,
  `track_assessment_date` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPRESSED AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tvl_strand`
--

INSERT INTO `tvl_strand` (`academic_strand_Id`, `user_Id`, `q1`, `q1_choice1`, `q2`, `q2_choice2`, `q3`, `q3_choice3`, `q4`, `q4_choice4`, `q5`, `q5_choice5`, `q6`, `q6_choice6`, `q7`, `q7_choice7`, `q8`, `q8_choice8`, `q9`, `q9_choice9`, `q10`, `q10_choice10`, `q11`, `q11_choice11`, `q12`, `q12_choice12`, `q13`, `q13_choice13`, `q14`, `q14_choice14`, `q15`, `q15_choice15`, `track_assessment_date`) VALUES
(21, '39', 'I like to analyze unique situations logically and apply what I have been taught in understanding new things.', 'ICT', 'Leadership and Collaboration', 'ICT', 'Good product for good food', 'Agri-fishery', 'Studying about machines', 'Industrial Arts', 'Livelihood Education', 'HE', 'Game/Web Developer, Programmer.', 'ICT', 'Plant Genetics', 'Agri-fishery', 'Housekeeping', 'HE', 'Something more about on Computers', 'ICT', 'Preparing foods and beverages', 'HE', 'Maintaining cleanliness', 'HE', 'Consider various opinions from other people and handle the situation calmly.', 'HE', 'Cooking, Cleaning Skills', 'HE', 'To develop a new application', 'ICT', 'Yes', 'Yes', '2022-10-29'),
(22, '::1', 'I like to analyze unique situations logically and apply what I have been taught in understanding new things.', 'ICT', 'Leadership and Collaboration', 'ICT', 'Everything is beautiful and can be fixed when youâ€™re part of a team.', 'Industrial Arts', 'Studying about machines', 'Industrial Arts', 'Electronics', 'Industrial Arts', 'Chef, Baker', 'HE', 'Plant Genetics', 'Agri-fishery', 'Agriculture', 'Agri-fishery', 'The difference of the environment before and now', 'Agri-fishery', 'Taking care of the agriculture', 'Agri-fishery', 'Assign in fixing and assembling the machines.', 'Industrial Arts', 'Analyze information before making a move', 'Industrial Arts', 'Good at Technologies and Building Skills', 'Industrial Arts', 'Discover new machines', 'Industrial Arts', 'No', 'No', '2023-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `tvl_strand_sort`
--

CREATE TABLE IF NOT EXISTS `tvl_strand_sort` (
`sort_Id` int(11) NOT NULL,
  `user_Id` varchar(255) NOT NULL,
  `strand_answer` varchar(255) NOT NULL,
  `assessment_date` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `tvl_strand_sort`
--

INSERT INTO `tvl_strand_sort` (`sort_Id`, `user_Id`, `strand_answer`, `assessment_date`) VALUES
(179, '::1', 'ICT', '2023-01-19'),
(180, '::1', 'ICT', '2023-01-19'),
(181, '::1', 'Industrial Arts', '2023-01-19'),
(182, '::1', 'Industrial Arts', '2023-01-19'),
(183, '::1', 'Industrial Arts', '2023-01-19'),
(184, '::1', 'HE', '2023-01-19'),
(185, '::1', 'Agri-fishery', '2023-01-19'),
(186, '::1', 'Agri-fishery', '2023-01-19'),
(187, '::1', 'Agri-fishery', '2023-01-19'),
(188, '::1', 'Agri-fishery', '2023-01-19'),
(189, '::1', 'Industrial Arts', '2023-01-19'),
(190, '::1', 'Industrial Arts', '2023-01-19'),
(191, '::1', 'Industrial Arts', '2023-01-19'),
(192, '::1', 'Industrial Arts', '2023-01-19'),
(207, '39', 'ICT', '2023-03-26'),
(208, '39', 'ICT', '2023-03-26'),
(209, '39', 'Industrial Arts', '2023-03-26'),
(210, '39', 'ICT', '2023-03-26'),
(211, '39', 'HE', '2023-03-26'),
(212, '39', 'Industrial Arts', '2023-03-26'),
(213, '39', 'Agri-fishery', '2023-03-26'),
(214, '39', 'ICT', '2023-03-26'),
(215, '39', 'Industrial Arts', '2023-03-26'),
(216, '39', 'ICT', '2023-03-26'),
(217, '39', 'ICT', '2023-03-26'),
(218, '39', 'Agri-fishery', '2023-03-26'),
(219, '39', 'Industrial Arts', '2023-03-26'),
(220, '39', 'HE', '2023-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `date_registered` date NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `barangay`, `municipality`, `province`, `email`, `contact`, `password`, `image`, `date_registered`, `verification_code`, `user_type`) VALUES
(39, 'hey  hey fdsfs', 'hey', 'Son', '', 'Male', '2021-02-09', 0, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'gdfggdgdgdf', 'hgfgfdgdfg', 'sonerwin12@gmail.com', '09359428963', '0192023a7bbd73250516f069df18b500', '6207ad7e34af5.jpg', '2022-05-23', '383324', 'User'),
(41, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-09-06', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'sonedsarwin12@gmail.com', '09359428963', '0192023a7bbd73250516f069df18b500', 'wp4813161-simple-minimalist-wallpapers.jpg', '2022-09-09', '', 'User'),
(43, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-09-21', 43, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'sonerwindsadada12@gmail.com', '09359428963', '0192023a7bbd73250516f069df18b500', 'Screenshot (213).png', '2022-09-09', '', 'User'),
(45, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-08-30', 3, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'sonerwin1dsa2@gmail.com', '09359428963', '3691308f2a4c2f6983f2880d32e29c84', 'Screenshot (158).png', '2022-09-09', '', 'User'),
(46, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-10-13', 1, 'fdsfds', 'fsfsd', 'Cebu', 'sonerwin12fdsfsds@gfsdfsdmail.com', '09359428963', 'ef800207a3648c7c1ef3e9fe544f17f0', '', '2022-10-26', '', 'User'),
(47, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-10-12', 2, 'fdsfsdfs', 'fsdfsdffdsfs', 'Cebu', 'sonerwinfddsfsdfssfs12@gmail.com', '09359428963', '4d6d955ca289f82e3a6e1f52f40108f3', '6207ad7e34af5.jpg', '2022-10-26', '', 'User'),
(48, 'd', 'd', 'd', '', 'Male', '2022-09-29', 22, 'dd', 'dd', 'Cebudd', 'sonerwin1dddddd2@gmail.com', '9359428963', 'ef800207a3648c7c1ef3e9fe544f17f0', 'wallpaperflare.com_wallpaper.jpg', '2022-10-26', '', 'User'),
(49, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-10-07', 2, 'd', 'd', 'Cebu', 'ss@gmail.com', '9359428963', '0192023a7bbd73250516f069df18b500', 'user.png', '2022-10-26', '', 'User'),
(50, 'Erwinfdsfds', 'Cabag', 'Son', '', 'Male', '2022-10-13', 2, 'ddada232cvisssss', 'dsadasdasd3232', 'Cebu3232', 'admin@gmail.com', '9359428963', '0192023a7bbd73250516f069df18b500', 'minimalism-1644666519306-6515.jpg', '2022-10-30', '', 'Admin'),
(51, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-10-13', 3, 'gfdg', 'dfgdfgdfgg', 'Cebu', 'sonerwifsgfdgdgfdn12@gmail.com', '9359428963', '66952c6203ae23242590c0061675234d', '6207ad7e34af5.jpg', '2022-10-30', '', 'Admin'),
(52, 'Erwin', 'Cabag', 'Son', '', 'Female', '2022-10-07', 3, 'fdsfds', 'fsdfsdfsdf', 'Cebu', 'sonerwin1fdsfsdfd2@gmail.com', '9359428963', '4d6d955ca289f82e3a6e1f52f40108f3', 'minimalism-1644666519306-6515.jpg', '2022-10-30', '', 'User'),
(53, 'Erwin', 'Cabag', 'Son', '2', 'Male', '1999-06-22', 23, 'dsad', 'dsadada', 'Cebu', 'sonerwin1dsadad2@gmail.com', '09359428963', '033c91317f9b6795106a825cf8ef773d', 'ali-pazani-9uaNYCqjDLw-unsplash.jpg', '2022-11-02', '', 'User'),
(54, 'gfdg', 'gfdgd', 'gfdgdg', '', 'Male', '2021-01-28', 1, 'gfdgdg', 'fdgdgdg', 'fgdfgdg', 'adgfdgdfdgfdmin@gmail.com', '9359428963', '66952c6203ae23242590c0061675234d', 'minimalism-1644666519306-6515.jpg', '2022-11-12', '', 'Admin'),
(55, 'fsdf', 'sfsf', 'sfsfsd', 'fsfs', 'Male', '2023-03-15', 1, 'dfsd', 'fsfs', 'fsdfs', 'admfdsfsin@gmail.com', '9359428963', '3dbe00a167653a1aaee01d93e77e730e', '12.jpg', '2023-03-23', '', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

CREATE TABLE IF NOT EXISTS `visitor_count` (
`visitorID` int(11) NOT NULL,
  `visitor_ipAddress` varchar(255) NOT NULL,
  `visitDate` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `visitor_count`
--

INSERT INTO `visitor_count` (`visitorID`, `visitor_ipAddress`, `visitDate`) VALUES
(1, 'gdgf', ''),
(3, '::1', '2022-11-28'),
(4, '::1', '2022-11-29'),
(5, '::1', '2022-12-01'),
(6, '::1', '2022-12-20'),
(7, '::1', '2023-01-15'),
(8, '::1', '2023-01-17'),
(9, '127.0.0.1', '2023-01-17'),
(10, '::1', '2023-01-19'),
(11, '::1', '2023-02-18'),
(12, '::1', '2023-02-19'),
(13, '::1', '2023-02-22'),
(14, '::1', '2023-03-23'),
(15, '::1', '2023-03-25'),
(16, '::1', '2023-03-26'),
(17, '::1', '2023-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_strand`
--
ALTER TABLE `academic_strand`
 ADD PRIMARY KEY (`academic_strand_Id`);

--
-- Indexes for table `academic_strand_sort`
--
ALTER TABLE `academic_strand_sort`
 ADD PRIMARY KEY (`sort_Id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
 ADD PRIMARY KEY (`track_Id`);

--
-- Indexes for table `track_sort`
--
ALTER TABLE `track_sort`
 ADD PRIMARY KEY (`sort_Id`);

--
-- Indexes for table `tvl_strand`
--
ALTER TABLE `tvl_strand`
 ADD PRIMARY KEY (`academic_strand_Id`);

--
-- Indexes for table `tvl_strand_sort`
--
ALTER TABLE `tvl_strand_sort`
 ADD PRIMARY KEY (`sort_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `visitor_count`
--
ALTER TABLE `visitor_count`
 ADD PRIMARY KEY (`visitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_strand`
--
ALTER TABLE `academic_strand`
MODIFY `academic_strand_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `academic_strand_sort`
--
ALTER TABLE `academic_strand_sort`
MODIFY `sort_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
MODIFY `track_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `track_sort`
--
ALTER TABLE `track_sort`
MODIFY `sort_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=341;
--
-- AUTO_INCREMENT for table `tvl_strand`
--
ALTER TABLE `tvl_strand`
MODIFY `academic_strand_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tvl_strand_sort`
--
ALTER TABLE `tvl_strand_sort`
MODIFY `sort_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `visitor_count`
--
ALTER TABLE `visitor_count`
MODIFY `visitorID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
