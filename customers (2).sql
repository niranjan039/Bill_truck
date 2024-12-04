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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `vehicle_number` varchar(15) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `cdate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'loaded'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`vehicle_number`, `owner_name`, `state`, `product_name`, `cdate`, `status`) VALUES
('ka20s1037', 'niranjan', 'kerala', 'fish', '2024-05-14', 'unloaded'),
('ka20mm1000', 'vaibhav', 'karnataka', 'fish', '2024-05-14', 'loaded'),
('ka20a12', 'ranju', 'Karnataka', 'ff', '2024-05-23', 'loaded'),
('ka20a13', 'vv', 'kerla', 'bongude', '2024-05-23', 'loaded'),
('ka20a14', 'prjwal', 'kerla', 'bygi', '2024-05-23', 'unloaded'),
('ka20v1010', 'vaibhu', 'tamilnad', 'fresh fish', '2024-05-23', 'loaded'),
('ka20zx1234', 'NVP', 'thailand', 'fish', '2024-05-23', 'loaded'),
('ka20zv', 'ranju', 'karnataka', 'fish', '2024-05-23', 'loaded'),
('TN35Z1009', 'vaibhu', 'Tamil Naad', 'Fish', '2024-05-23', 'loaded'),
('ka20l9999', 'subhash', 'Tamil Naad', 'Fish bangdi', '2024-05-23', 'loaded'),
('ka30v9000', 'kavana', 'karnataka', 'pendrive', '2024-05-23', 'loaded'),
('ka20', 'vaib', 'kerala', 'fishhhh', '2024-05-24', 'unloaded'),
('kl', 'r', 'r', 'r', '2024-05-27', 'loaded'),
('ka', 'ka', 'ka', 'ka', '2024-05-27', 'unloaded'),
('tn', 'n', 'h', 'h', '2024-05-27', 'unloaded'),
('a', 'a', 'a', 'a', '2024-05-27', 'unloaded'),
('ka2', 'dee', 'e', 'e', '2024-05-27', 'loaded'),
('ka20', 'vb', 'Karnataka', 'fishhj', '2024-05-27', 'unloaded');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
