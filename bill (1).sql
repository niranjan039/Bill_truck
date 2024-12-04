-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 10:29 AM
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
-- Database: `my1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `vehicle_number` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `cdate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`vehicle_number`, `owner_name`, `state`, `product_name`, `cdate`, `status`, `price`) VALUES
('a', 'a', 'a', 'a', '2024-05-27', 'loaded', 500),
('ka20', 'vaib', 'kerala', 'fishhhh', '2024-05-24', 'loaded', 900000),
('ka20', 'vb', 'Karnataka', 'fishhj', '2024-05-27', 'loaded', 95500),
('a', 'a', 'a', 'a', '2024-05-27', 'loaded', 500),
('ka20s1037', 'niranjan', 'kerala', 'fish', '2024-05-14', 'loaded', 500),
('ka20a14', 'prjwal', 'kerla', 'bygi', '2024-05-23', 'loaded', 95500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
