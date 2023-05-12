-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2023 at 03:49 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `don`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

DROP TABLE IF EXISTS `donate`;
CREATE TABLE IF NOT EXISTS `donate` (
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `amm` int DEFAULT NULL,
  `pur` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `address`, `amm`, `pur`, `email`) VALUES
('Bhavana H R', 'Chickamagaluru', 1000, 'Vaccination', 'bhavanahr6@gmail.com'),
('Varsha B H', 'Belur', 600, 'one day meal', 'varshashetty@gmail.com'),
('Likitha C M', 'Hiremagaluru', 1000, 'sterilization', 'likithamadhu@gmail.com'),
('Chithra D Rao', 'Chickamagaluru', 2000, 'Minor Surgery', 'chithradrao@gmail.com'),
('Deepak P D', 'Kadur', 1500, 'Passive parrent', 'deepakdeepu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

DROP TABLE IF EXISTS `sub`;
CREATE TABLE IF NOT EXISTS `sub` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`name`, `email`) VALUES
('Bhavana', 'bhavanahr@gmail.com'),
('Liki', 'likitha@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
