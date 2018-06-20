-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 10:45 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `student_no` int(7) NOT NULL,
  `question` text NOT NULL,
  `choice` int(1) NOT NULL DEFAULT '0',
  `correct_ans` int(1) NOT NULL,
  `mark` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`student_no`, `question`, `choice`, `correct_ans`, `mark`) VALUES
(1613004, 'What does PHP stand for? ', 0, 2, 0),
(1613004, 'How do you write "Hello World" in PHP?', 0, 2, 0),
(1613004, 'All variables in PHP start with which symbol?', 0, 3, 0),
(1613004, 'The PHP syntax is most similar to:', 0, 3, 0),
(1613004, ' How do you get information from a form that is submitted using the "get" method?', 0, 2, 0),
(1613004, 'What does HTML stand for?', 0, 3, 0),
(1613004, 'What does CSS stand for?', 0, 1, 0),
(1613004, 'Where in an HTML document is the correct place to refer to an external style sheet?', 0, 1, 0),
(1613004, 'Which HTML attribute is used to define inline styles? ', 0, 3, 0),
(1613004, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 0, 4, 0),
(1613004, 'What is the size of boolean variable?', 0, 2, 0),
(1613004, 'Which of the following is a thread safe?', 0, 2, 0),
(1613004, 'Which package needs to be imported so that you can accept user input?', 0, 2, 0),
(1613004, 'Which of the following can be used to access the first element of an array named arrOne?', 0, 4, 0),
(1613004, 'What will be the output of this code?  String aString = "Crayons are great!"; System.out.print(aString.charAt(8))', 0, 1, 0),
(1613004, 'Which of the following is not a correct variable type?', 0, 2, 0),
(1613004, 'Which of the following is the correct operator to compare two variables?', 0, 4, 0),
(1613004, 'In how many ways the letter â€˜SOLVINGâ€™ can be rearranged to make 7 letter words such that none of the letters repeat?', 0, 3, 0),
(1613004, 'What is the missing letter in this series?     b  e  h  k  n  ?  t', 0, 1, 0),
(1613004, 'The average age of a group of 5 students was 10. The average age increased by 4 years when 2 new students joined the group. What is the average age of the two new students who joined the group?', 0, 4, 0),
(1613004, 'When a die is rolled, the probability of landing with 2 is?', 0, 2, 0),
(1613004, 'Tutu pays 60% of his salary as house rent, 15% of salary as loan instalment and he still saves Rs. 900 after spending Rs. 1,800 on other household goods. What is his salary in Rs?', 0, 3, 0),
(1613004, 'What is the only function all C programs must contain?', 0, 3, 0),
(1613004, ' Which of the following is not a correct variable type?', 0, 2, 0),
(1510011, ' How do you get information from a form that is submitted using the "get" method?', 0, 2, 0),
(1510011, 'What does CSS stand for?', 0, 1, 0),
(1510011, 'Where in an HTML document is the correct place to refer to an external style sheet?', 0, 1, 0),
(1510011, 'Which HTML attribute is used to define inline styles? ', 0, 3, 0),
(1510011, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 0, 4, 0),
(1510011, 'What is the size of boolean variable?', 0, 2, 0),
(1510011, 'Which of the following is a thread safe?', 0, 2, 0),
(1510011, 'Which package needs to be imported so that you can accept user input?', 0, 2, 0),
(1510011, 'What will be the output of this code?  String aString = "Crayons are great!"; System.out.print(aString.charAt(8))', 0, 1, 0),
(1510011, 'Which of the following is not a correct variable type?', 0, 2, 0),
(1510011, 'Which of the following is the correct operator to compare two variables?', 0, 4, 0),
(1510011, 'In how many ways the letter â€˜SOLVINGâ€™ can be rearranged to make 7 letter words such that none of the letters repeat?', 0, 3, 0),
(1510011, 'What is the missing letter in this series?     b  e  h  k  n  ?  t', 0, 1, 0),
(1510011, 'The average age of a group of 5 students was 10. The average age increased by 4 years when 2 new students joined the group. What is the average age of the two new students who joined the group?', 0, 4, 0),
(1510011, 'When a die is rolled, the probability of landing with 2 is?', 0, 2, 0),
(1510011, 'Tutu pays 60% of his salary as house rent, 15% of salary as loan instalment and he still saves Rs. 900 after spending Rs. 1,800 on other household goods. What is his salary in Rs?', 0, 3, 0),
(1510011, 'What is the only function all C programs must contain?', 0, 3, 0),
(1510011, ' Which of the following is not a correct variable type?', 0, 2, 0),
(1510011, 'What does PHP stand for? ', 1, 2, 0),
(1510011, 'How do you write "Hello World" in PHP?', 2, 2, 1),
(1510011, 'All variables in PHP start with which symbol?', 3, 3, 0),
(1510011, 'Which of the following can be used to access the first element of an array named arrOne?', 2, 4, 0),
(1510011, 'What does HTML stand for?', 4, 3, 0),
(1510011, 'The PHP syntax is most similar to:', 1, 3, 0),
(1610001, 'What does PHP stand for? ', 0, 2, 0),
(1610001, 'How do you write "Hello World" in PHP?', 0, 2, 0),
(1610001, 'All variables in PHP start with which symbol?', 0, 3, 0),
(1610001, 'The PHP syntax is most similar to:', 0, 3, 0),
(1610001, ' How do you get information from a form that is submitted using the "get" method?', 0, 2, 0),
(1610001, 'What does HTML stand for?', 0, 3, 0),
(1610001, 'What does CSS stand for?', 0, 1, 0),
(1610001, 'Where in an HTML document is the correct place to refer to an external style sheet?', 0, 1, 0),
(1610001, 'Which HTML attribute is used to define inline styles? ', 0, 3, 0),
(1610001, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 0, 4, 0),
(1610001, 'What is the size of boolean variable?', 0, 2, 0),
(1610001, 'Which of the following is a thread safe?', 0, 2, 0),
(1610001, 'Which package needs to be imported so that you can accept user input?', 0, 2, 0),
(1610001, 'Which of the following can be used to access the first element of an array named arrOne?', 0, 4, 0),
(1610001, 'What will be the output of this code?  String aString = "Crayons are great!"; System.out.print(aString.charAt(8))', 0, 1, 0),
(1610001, 'Which of the following is not a correct variable type?', 0, 2, 0),
(1610001, 'Which of the following is the correct operator to compare two variables?', 0, 4, 0),
(1610001, 'In how many ways the letter â€˜SOLVINGâ€™ can be rearranged to make 7 letter words such that none of the letters repeat?', 0, 3, 0),
(1610001, 'What is the missing letter in this series?     b  e  h  k  n  ?  t', 0, 1, 0),
(1610001, 'The average age of a group of 5 students was 10. The average age increased by 4 years when 2 new students joined the group. What is the average age of the two new students who joined the group?', 0, 4, 0),
(1610001, 'When a die is rolled, the probability of landing with 2 is?', 0, 2, 0),
(1610001, 'Tutu pays 60% of his salary as house rent, 15% of salary as loan instalment and he still saves Rs. 900 after spending Rs. 1,800 on other household goods. What is his salary in Rs?', 0, 3, 0),
(1610001, 'What is the only function all C programs must contain?', 0, 3, 0),
(1610001, ' Which of the following is not a correct variable type?', 0, 2, 0),
(1610002, 'The PHP syntax is most similar to:', 0, 3, 0),
(1610002, ' How do you get information from a form that is submitted using the "get" method?', 0, 2, 0),
(1610002, 'What does HTML stand for?', 0, 3, 0),
(1610002, 'What does CSS stand for?', 0, 1, 0),
(1610002, 'Where in an HTML document is the correct place to refer to an external style sheet?', 0, 1, 0),
(1610002, 'Which HTML attribute is used to define inline styles? ', 0, 3, 0),
(1610002, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 0, 4, 0),
(1610002, 'What is the size of boolean variable?', 0, 2, 0),
(1610002, 'Which of the following is a thread safe?', 0, 2, 0),
(1610002, 'Which package needs to be imported so that you can accept user input?', 0, 2, 0),
(1610002, 'Which of the following can be used to access the first element of an array named arrOne?', 0, 4, 0),
(1610002, 'What will be the output of this code?  String aString = "Crayons are great!"; System.out.print(aString.charAt(8))', 0, 1, 0),
(1610002, 'Which of the following is not a correct variable type?', 0, 2, 0),
(1610002, 'Which of the following is the correct operator to compare two variables?', 0, 4, 0),
(1610002, 'In how many ways the letter â€˜SOLVINGâ€™ can be rearranged to make 7 letter words such that none of the letters repeat?', 0, 3, 0),
(1610002, 'What is the missing letter in this series?     b  e  h  k  n  ?  t', 0, 1, 0),
(1610002, 'The average age of a group of 5 students was 10. The average age increased by 4 years when 2 new students joined the group. What is the average age of the two new students who joined the group?', 0, 4, 0),
(1610002, 'When a die is rolled, the probability of landing with 2 is?', 0, 2, 0),
(1610002, 'Tutu pays 60% of his salary as house rent, 15% of salary as loan instalment and he still saves Rs. 900 after spending Rs. 1,800 on other household goods. What is his salary in Rs?', 0, 3, 0),
(1610002, 'What is the only function all C programs must contain?', 0, 3, 0),
(1610002, ' Which of the following is not a correct variable type?', 0, 2, 0),
(1610002, 'What does PHP stand for? ', 1, 2, 0),
(1610002, 'How do you write "Hello World" in PHP?', 4, 2, 1),
(1610002, 'All variables in PHP start with which symbol?', 0, 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
