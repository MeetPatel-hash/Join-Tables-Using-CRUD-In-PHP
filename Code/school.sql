-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 03:25 PM
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
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `principal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `name`, `email`, `password`, `address`, `phone_number`, `principal_name`) VALUES
(1, 'ACME High School', 'punawiny@mailinator.com', '$2y$10$d8NM/scGNRCLMR5aIpiOZulpaQKpaKjeVx4RNDS.gBdq4Jye4..Ba', 'Reprehenderit asper', '551123131', 'Hedy Morris'),
(2, 'XYZ Middle School', 'pitez@mailinator.com', '$2y$10$fxv/WHV584ZxHuz6phoeteGBtjQ0bdYjkr5I139oAScf7HEBXqPXG', 'Ullam tempora vel la', '5678901234', 'Sebastian Carver'),
(3, 'ABC Elementary School', 'zupupix@mailinator.com', '$2y$10$DKF9mOy4n6loas6CVlLBwOxTz7khujbEedBgw3lwJYod6L9WLAdoy', 'Nesciunt qui eiusmo', '4891233344', 'Chiquita Moss'),
(4, 'DEF High School', 'wotaga@mailinator.com', '$2y$10$N1tbCKswMZInYF03OBncJ.klIRU4Q2prRzIyfaKMHyvDt9YC3XzjO', 'Minim nisi cillum im', '43210987651', 'Kimberley Burgess'),
(5, 'Cathleen Scott', 'zokyribyz@mailinator.com', '$2y$10$qI00qAwH7bOckclPua7CZ.Hc.1ffz0RTTewQIQHNFcEw/JitiWuD2', 'Occaecat ipsum molli', '76543200098', 'Leroy Jarvis'),
(6, 'Octavia Maldonado', 'zijag@mailinator.com', '$2y$10$7xSV6RKxaryEIy/pSjq5nO66mAMJKbG6/UkBsl0re6JkK1XnxfQam', 'Natus est eos eiusmo', '65311111134', 'Amaya Elliott'),
(7, 'Maia Mcfarland', 'fycexarenu@mailinator.com', '$2y$10$Zs9o0ucixt3py8C7i0qVXu/eut5UMs7bNPop36pnVRB98HY6rWv4m', 'Aliquam adipisci est', '33011111134', 'Mollie Weeks'),
(8, 'Nelle Ortiz', 'johndoe@mailinator.com', '$2y$10$V9hZZsIOYzrUo67bLbK08eaCi2VrNbhHhnChbTV3fU3/OTwKeboKO', 'Veniam doloribus si', '580', 'Kristen Page'),
(9, 'Omar Odonnell', 'mata@mailinator.com', '$2y$10$bg3C820f.V3Wun6ysh59YeTYMe/f5.qQ/HC793U.A6.JbWtDdPC8.', 'Dolor et illo et vel', '9522389654', 'Ralph Blankenship'),
(10, 'Dalton Riley', 'cisubadura@mailinator.com', '$2y$10$4fpGj3i0BiOdX2whPulfYuX2uhuucnYqYU1txulVVOSm2PnxE4/3W', 'Sed quis mollitia co', '4555551212', 'Drew Carrillo'),
(11, 'Lana Daniel', 'luneredyh@mailinator.com', '$2y$10$OjjArigcJNIb02a3cm0W5egnMA9slF5Bak0zWzuC0Wcu9Wjzowg/O', 'Consequatur officia', '5951112322', 'Geoffrey '),
(12, 'Allistair Bauer', 'qifutoju@mailinator.com', '$2y$10$bzNJ0KitbFdyxlTTN5HoOOJxiECFSKaieU/lM6dbQBRf2yhuUFIqm', 'Ea unde excepteur ni', '1902312334', 'Avye Mcknight'),
(13, 'Connor Ochoa', 'cesijec@mailinator.com', '$2y$10$BWMH8RZW72gC7H93tts.Q.rOz/D.Oo1Od0/6581jrmv0uBPM7mUsa', 'Nihil quia tempor ob', '4601212123', 'Dillon Stevens');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
