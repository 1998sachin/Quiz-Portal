-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 09:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `question` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option1` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option-2` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option3` varchar(200) CHARACTER SET latin1 NOT NULL,
  `option4` varchar(200) CHARACTER SET latin1 NOT NULL,
  `answer` varchar(200) CHARACTER SET latin1 NOT NULL,
  `category` varchar(10) CHARACTER SET latin1 NOT NULL,
  `sets` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `question`, `option1`, `option-2`, `option3`, `option4`, `answer`, `category`, `sets`) VALUES
(1, 'What does PHP stand for? ', ' Private Home Page', 'PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'none of them', '2', '1', '1'),
(2, 'How do you write \"Hello World\" in PHP?', '\"Hello World\";', 'echo \"Hello World\";', 'Document.Write(\"Hello World\");', 'printf(\"%s\",hello world);', '2', '1', '1'),
(3, 'All variables in PHP start with which symbol?', '!', '&', '$', 'none of them', '3', '1', '1'),
(7, 'The PHP syntax is most similar to:', 'VBScript', 'JavaScript', 'Perl and C', 'c++', '3', '1', '1'),
(8, ' How do you get information from a form that is submitted using the \"get\" method?', 'Request.Form;', '$_GET[];', 'Request.QueryString;', 'none of them', '2', '1', '1'),
(9, 'What does HTML stand for?', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Hyper Text Markup Language', 'Hyperlinks Tool Markup Language', '3', '2', '1'),
(10, 'What does CSS stand for?', 'Cascading Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'Creative Style Sheets', '1', '2', '1'),
(11, 'Where in an HTML document is the correct place to refer to an external style sheet?', 'In the <head> section ', 'At the top of the document ', 'At the end of the document ', 'In the <body> section ', '1', '2', '1'),
(12, 'Which HTML attribute is used to define inline styles? ', 'class  ', 'styles', 'style', 'font', '3', '2', '1'),
(13, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 'title', 'src', 'longdesc', 'alt', '4', '2', '1'),
(14, 'What is the size of boolean variable?', '8 bit', '16 bit', '32 bit', 'not precisely defined', '2', '3', '1'),
(15, 'Which of the following is a thread safe?', 'StringBuilder', 'StringBuffer', 'Both of the above', 'none of the above', '2', '3', '1'),
(16, 'Which package needs to be imported so that you can accept user input?', 'java.awt', 'java.io', 'java.awt.event', 'java.util', '2', '3', '1'),
(17, 'Which of the following can be used to access the first element of an array named arrOne?', 'arrOne[2]', 'arrOne[1]', 'arrOne[3]', 'arrOne[0]', '4', '3', '1'),
(18, 'What will be the output of this code?  String aString = \"Crayons are great!\"; System.out.print(aString.charAt(8))', 'a', 'n', 's', 'r', '1', '3', '1'),
(19, 'Which of the following is not a correct variable type?', 'float', 'real', 'int', 'double', '2', '4', '1'),
(20, 'Which of the following is the correct operator to compare two variables?', ':=', '=', 'equal', '==', '4', '4', '1'),
(21, 'In how many ways the letter â€˜SOLVINGâ€™ can be rearranged to make 7 letter words such that none of the letters repeat?', '49', '7C7', '5040', 'None of the above', '3', '5', '1'),
(22, 'What is the missing letter in this series?     b  e  h  k  n  ?  t', 'q', 'r', 's', 'u', '1', '5', '1'),
(23, 'The average age of a group of 5 students was 10. The average age increased by 4 years when 2 new students joined the group. What is the average age of the two new students who joined the group?', '15', '20', '22', '24', '4', '5', '1'),
(24, 'When a die is rolled, the probability of landing with 2 is?', '3/6', '1/6', '2/6', '5/6', '2', '5', '1'),
(25, 'Tutu pays 60% of his salary as house rent, 15% of salary as loan instalment and he still saves Rs. 900 after spending Rs. 1,800 on other household goods. What is his salary in Rs?', '2,700', '8,100', '10,800', '13,500', '3', '5', '1'),
(26, 'What is the only function all C programs must contain?', 'start() ', 'system()', 'main()', 'program()', '3', '4', '1'),
(27, ' Which of the following is not a correct variable type?', 'float', 'real', 'int', 'double', '2', '4', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
