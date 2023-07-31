-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 11:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeelkalsariya`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `age` int(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `email`, `gender`, `age`, `date_of_birth`, `address`, `phone_number`, `school_id`) VALUES
(1, 'Yoko', 'Mays', 'nofufipak@mailinator.com', 'male', 92, '1982-07-16', 'Nam amet aliqua Es', '260', 1),
(4, 'Cedric', 'Hendrix', 'xahyle@mailinator.com', 'female', 38, '2014-07-17', 'Omnis in sit rerum ', '643', 2),
(6, 'Michelle', 'Schwartz', 'cofamy@mailinator.com', 'male', 98, '1981-05-04', 'Distinctio Fugiat ', '1112596328', 7),
(7, 'Athena', 'Gilliam', 'cidikurur@mailinator.com', 'female', 19, '1973-06-22', 'Ut autem ipsum dolor', '381178931', 7),
(8, 'Jorden', 'Acosta', 'rojodamyni@mailinator.com', 'other', 2, '2022-09-25', 'Esse deserunt esse ', '291', 4),
(9, 'Jessicasd', 'Bentt', 'johndoe@mailinator.com', 'male', 13, '2011-08-21', 'Voluptate in digniss', '945012030', 7),
(10, 'Plato', 'Osborne', 'sygyw@mailinator.com', 'female', 39, '2017-10-21', 'Dolor quas eum aut n', '9512698156', 7),
(11, 'Lance', 'Harrell', 'nocekihuci@mailinator.com', 'female', 65, '1970-09-01', 'Mollit eu ea ut maio', '936', 2),
(13, 'Martina', 'Rowe', 'tarelyco@mailinator.com', 'female', 21, '2016-07-12', 'Do fugit voluptas d', '1865212891', 7),
(15, 'Deborah', 'Sears', 'pemyzarelo@mailinator.com', 'other', 98, '2022-11-19', 'Distinctio Ad dolor', '5591212331', 5),
(16, 'Jasmine', 'Schroeder', 'nyji@mailinator.com', 'male', 39, '1982-04-26', 'Et facere irure sunt', '915', 3),
(18, 'Ifeoma', 'Santana', 'jujap@mailinator.com', 'male', 26, '2021-09-22', 'Quasi ea harum volup', '872362589', 5),
(19, 'Brielle', 'Tyson', 'zucebyvoko@mailinator.com', 'male', 43, '1996-03-12', 'Quod non iste magna ', '3414527853', 2),
(20, 'Aurora', 'Walsh', 'xihonylo@mailinator.com', 'male', 99, '2013-02-17', 'Rerum quod est quo q', '3912356789', 3),
(21, '222', '1111', 'bharat@pixlogix.com', 'male', 6, '2023-07-17', '11', '2222222222', 11),
(22, 'Melvin', 'Nicholson', 'jujykomo@mailinator.com', 'other', 46, '1982-11-12', 'Nam omnis assumenda ', '2811212234', 11),
(23, 'sssssssssss', 'Hendrix0', 'vykyfaxowi@mailinator.com', 'other', 15, '1992-04-18', 'Omnis soluta quis au', '7251234512', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
