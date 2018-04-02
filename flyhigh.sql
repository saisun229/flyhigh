-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 04:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flyhigh`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `fromCity` varchar(30) NOT NULL,
  `toCity` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `airlines` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`fromCity`, `toCity`, `price`, `airlines`) VALUES
('Hyderabad', 'Chennai', 2000, 'Indigo Airways'),
('Hyderabad', 'Delhi', 2500, 'Indigo Airways'),
('Chennai', 'Delhi', 3000, 'Indigo Airways'),
('Hyderabad', 'Bangalore', 1500, 'Indigo Airways'),
('Hyderabad', 'Agra', 1500, 'Indigo Airways'),
('Hyderabad', 'Mumbai', 1500, 'Indigo Airways'),
('Hyderabad', 'Visakhapatnam', 1500, 'Indigo Airways'),
('Hyderabad', 'Kolkata', 1500, 'Indigo Airways'),
('Chennai', 'Agra', 1500, 'Indigo Airways'),
('Chennai', 'Mumbai', 1500, 'Indigo Airways'),
('Chennai', 'Visakhapatnam', 1500, 'Indigo Airways'),
('Chennai', 'Kolkata', 1500, 'Indigo Airways'),
('Agra', 'Chennai', 1500, 'Indigo Airways'),
('Agra', 'Mumbai', 1500, 'Indigo Airways'),
('Agra', 'Visakhapatnam', 1500, 'Indigo Airways'),
('Agra', 'Kolkata', 1500, 'Indigo Airways'),
('Mumbai', 'Agra', 1500, 'Indigo Airways'),
('Mumbai', 'Hyderabad', 1500, 'Indigo Airways'),
('Mumbai', 'Visakhapatnam', 1500, 'Indigo Airways'),
('Mumbai', 'Kolkata', 1500, 'Indigo Airways'),
('Visakhapatnam', 'Agra', 1500, 'Indigo Airways'),
('Visakhapatnam', 'Mumbai', 1500, 'Indigo Airways'),
('Visakhapatnam', 'Hyderabad', 1500, 'Indigo Airways'),
('Visakhapatnam', 'Kolkata', 1500, 'Indigo Airways'),
('Kolkata', 'Agra', 1500, 'Indigo Airways'),
('Kolkata', 'Mumbai', 1500, 'Indigo Airways'),
('Kolkata', 'Hyderabad', 1500, 'Indigo Airways'),
('Kolkata', 'Chennai', 1500, 'Indigo Airways'),
('Hyderabad', 'Chennai', 2200, 'UCM Airlines'),
('Hyderabad', 'Delhi', 2800, 'UCM Airlines'),
('Chennai', 'Delhi', 3100, 'UCM Airlines'),
('Hyderabad', 'Bangalore', 1830, 'UCM Airlines'),
('Hyderabad', 'Agra', 1830, 'UCM Airlines'),
('Hyderabad', 'Mumbai', 1830, 'UCM Airlines'),
('Hyderabad', 'Visakhapatnam', 1830, 'UCM Airlines'),
('Hyderabad', 'Kolkata', 1811, 'UCM Airlines'),
('Chennai', 'Agra', 1811, 'UCM Airlines'),
('Chennai', 'Mumbai', 1811, 'UCM Airlines'),
('Chennai', 'Visakhapatnam', 1811, 'UCM Airlines'),
('Chennai', 'Kolkata', 1811, 'UCM Airlines'),
('Agra', 'Chennai', 1811, 'UCM Airlines'),
('Agra', 'Mumbai', 1811, 'UCM Airlines'),
('Agra', 'Visakhapatnam', 1280, 'UCM Airlines'),
('Agra', 'Kolkata', 1280, 'UCM Airlines'),
('Mumbai', 'Agra', 1280, 'UCM Airlines'),
('Mumbai', 'Hyderabad', 1280, 'UCM Airlines'),
('Mumbai', 'Visakhapatnam', 1280, 'UCM Airlines'),
('Mumbai', 'Kolkata', 1280, 'UCM Airlines'),
('Visakhapatnam', 'Agra', 1220, 'UCM Airlines'),
('Visakhapatnam', 'Mumbai', 1220, 'UCM Airlines'),
('Visakhapatnam', 'Hyderabad', 1220, 'UCM Airlines'),
('Visakhapatnam', 'Kolkata', 1220, 'UCM Airlines'),
('Kolkata', 'Agra', 1222, 'UCM Airlines'),
('Kolkata', 'Mumbai', 1222, 'UCM Airlines'),
('Kolkata', 'Hyderabad', 1222, 'UCM Airlines'),
('Kolkata', 'Chennai', 1222, 'UCM Airlines'),
('Hyderabad', 'Chennai', 2000, 'Air India'),
('Hyderabad', 'Delhi', 2500, 'Air India'),
('Chennai', 'Delhi', 3000, 'Air India'),
('Hyderabad', 'Bangalore', 2200, 'Air India'),
('Hyderabad', 'Agra', 2122, 'Air India'),
('Hyderabad', 'Mumbai', 1800, 'Air India'),
('Hyderabad', 'Visakhapatnam', 1900, 'Air India'),
('Hyderabad', 'Kolkata', 2122, 'Air India'),
('Chennai', 'Agra', 2100, 'Air India'),
('Chennai', 'Mumbai', 1600, 'Air India'),
('Chennai', 'Visakhapatnam', 2350, 'Air India'),
('Chennai', 'Kolkata', 2020, 'Air India'),
('Agra', 'Chennai', 1551, 'Air India'),
('Agra', 'Mumbai', 4000, 'Air India'),
('Agra', 'Visakhapatnam', 1200, 'Air India'),
('Agra', 'Kolkata', 3000, 'Air India'),
('Mumbai', 'Agra', 2122, 'Air India'),
('Mumbai', 'Hyderabad', 3000, 'Air India'),
('Mumbai', 'Visakhapatnam', 1900, 'Air India'),
('Mumbai', 'Kolkata', 2600, 'Air India'),
('Visakhapatnam', 'Agra', 2650, 'Air India'),
('Visakhapatnam', 'Mumbai', 1300, 'Air India'),
('Visakhapatnam', 'Hyderabad', 1700, 'Air India'),
('Visakhapatnam', 'Kolkata', 3100, 'Air India'),
('Kolkata', 'Agra', 3200, 'Air India'),
('Kolkata', 'Mumbai', 1600, 'Air India'),
('Kolkata', 'Hyderabad', 1650, 'Air India'),
('Kolkata', 'Chennai', 3312, 'Air India'),
('Trivandrum', 'Coimbatore', 2121, 'Air India'),
('Trivandrum', 'Delhi', 2500, 'Air India'),
('Coimbatore', 'Delhi', 3312, 'Air India'),
('Trivandrum', 'Bangalore', 2200, 'Air India'),
('Trivandrum', 'Pune', 2121, 'Air India'),
('Trivandrum', 'Amritsar', 1800, 'Air India'),
('Trivandrum', 'Indore', 1900, 'Air India'),
('Trivandrum', 'Patna', 2121, 'Air India'),
('Coimbatore', 'Pune', 2100, 'Air India'),
('Coimbatore', 'Amritsar', 1600, 'Air India'),
('Coimbatore', 'Indore', 2350, 'Air India'),
('Coimbatore', 'Patna', 2020, 'Air India'),
('Pune', 'Coimbatore', 1400, 'Air India'),
('Pune', 'Amritsar', 4000, 'Air India'),
('Pune', 'Indore', 1200, 'Air India'),
('Pune', 'Patna', 3312, 'Air India'),
('Amritsar', 'Pune', 2000, 'Air India'),
('Amritsar', 'Trivandrum', 3000, 'Air India'),
('Amritsar', 'Indore', 1900, 'Air India'),
('Amritsar', 'Patna', 2600, 'Air India'),
('Indore', 'Pune', 2650, 'Air India'),
('Indore', 'Amritsar', 1300, 'Air India'),
('Indore', 'Trivandrum', 1700, 'Air India'),
('Indore', 'Patna', 3100, 'Air India'),
('Patna', 'Pune', 3200, 'Air India'),
('Patna', 'Amritsar', 1600, 'Air India'),
('Patna', 'Trivandrum', 1650, 'Air India'),
('Patna', 'Coimbatore', 3000, 'Air India'),
('Trivandrum', 'Coimbatore', 2134, 'Jet Airways'),
('Trivandrum', 'Delhi', 2500, 'Jet Airways'),
('Coimbatore', 'Delhi', 3092, 'Jet Airways'),
('Trivandrum', 'Bangalore', 2200, 'Jet Airways'),
('Trivandrum', 'Pune', 2134, 'Jet Airways'),
('Trivandrum', 'Amritsar', 1800, 'Jet Airways'),
('Trivandrum', 'Indore', 1900, 'Jet Airways'),
('Trivandrum', 'Patna', 2134, 'Jet Airways'),
('Coimbatore', 'Pune', 2100, 'Jet Airways'),
('Coimbatore', 'Amritsar', 1600, 'Jet Airways'),
('Coimbatore', 'Indore', 2350, 'Jet Airways'),
('Coimbatore', 'Patna', 2013, 'Jet Airways'),
('Pune', 'Coimbatore', 1400, 'Jet Airways'),
('Pune', 'Amritsar', 4444, 'Jet Airways'),
('Pune', 'Indore', 1200, 'Jet Airways'),
('Pune', 'Patna', 3092, 'Jet Airways'),
('Amritsar', 'Pune', 2134, 'Jet Airways'),
('Amritsar', 'Trivandrum', 3092, 'Jet Airways'),
('Amritsar', 'Indore', 1900, 'Jet Airways'),
('Amritsar', 'Patna', 2600, 'Jet Airways'),
('Indore', 'Pune', 2650, 'Jet Airways'),
('Indore', 'Amritsar', 1300, 'Jet Airways'),
('Indore', 'Trivandrum', 2222, 'Jet Airways'),
('Indore', 'Patna', 3100, 'Jet Airways'),
('Patna', 'Pune', 3200, 'Jet Airways'),
('Patna', 'Amritsar', 1289, 'Jet Airways'),
('Patna', 'Trivandrum', 1650, 'Jet Airways'),
('Patna', 'Coimbatore', 3928, 'Jet Airways'),
('Trivandrum', 'Coimbatore', 1832, 'Indigo Airlines'),
('Trivandrum', 'Delhi', 2433, 'Indigo Airlines'),
('Coimbatore', 'Delhi', 3928, 'Indigo Airlines'),
('Trivandrum', 'Bangalore', 2180, 'Indigo Airlines'),
('Trivandrum', 'Pune', 1832, 'Indigo Airlines'),
('Trivandrum', 'Amritsar', 1832, 'Indigo Airlines'),
('Trivandrum', 'Indore', 1900, 'Indigo Airlines'),
('Trivandrum', 'Patna', 1832, 'Indigo Airlines'),
('Coimbatore', 'Pune', 2134, 'Indigo Airlines'),
('Coimbatore', 'Amritsar', 1600, 'Indigo Airlines'),
('Coimbatore', 'Indore', 2350, 'Indigo Airlines'),
('Coimbatore', 'Patna', 1818, 'Indigo Airlines'),
('Pune', 'Coimbatore', 1400, 'Indigo Airlines'),
('Pune', 'Amritsar', 4000, 'Indigo Airlines'),
('Pune', 'Indore', 1180, 'Indigo Airlines'),
('Pune', 'Patna', 3000, 'Indigo Airlines'),
('Amritsar', 'Pune', 1800, 'Indigo Airlines'),
('Amritsar', 'Trivandrum', 3000, 'Indigo Airlines'),
('Amritsar', 'Indore', 1900, 'Indigo Airlines'),
('Amritsar', 'Patna', 2600, 'Indigo Airlines'),
('Indore', 'Pune', 2650, 'Indigo Airlines'),
('Indore', 'Amritsar', 1300, 'Indigo Airlines'),
('Indore', 'Trivandrum', 1700, 'Indigo Airlines'),
('Indore', 'Patna', 3100, 'Indigo Airlines'),
('Patna', 'Pune', 3180, 'Indigo Airlines'),
('Patna', 'Amritsar', 1600, 'Indigo Airlines'),
('Patna', 'Trivandrum', 1650, 'Indigo Airlines'),
('Patna', 'Coimbatore', 3000, 'Indigo Airlines'),
('Hyderabad', 'Chennai', 2000, 'Jet Airways'),
('Hyderabad', 'Delhi', 2500, 'Jet Airways'),
('Chennai', 'Delhi', 3000, 'Jet Airways'),
('Hyderabad', 'Bangalore', 1234, 'Jet Airways'),
('Hyderabad', 'Agra', 1287, 'Jet Airways'),
('Hyderabad', 'Mumbai', 1287, 'Jet Airways'),
('Hyderabad', 'Visakhapatnam', 1287, 'Jet Airways'),
('Hyderabad', 'Kolkata', 1287, 'Jet Airways'),
('Chennai', 'Agra', 1287, 'Jet Airways'),
('Chennai', 'Mumbai', 1234, 'Jet Airways'),
('Chennai', 'Visakhapatnam', 1234, 'Jet Airways'),
('Chennai', 'Kolkata', 1234, 'Jet Airways'),
('Agra', 'Chennai', 1328, 'Jet Airways'),
('Agra', 'Mumbai', 1328, 'Jet Airways'),
('Agra', 'Visakhapatnam', 1328, 'Jet Airways'),
('Agra', 'Kolkata', 1328, 'Jet Airways'),
('Mumbai', 'Agra', 1328, 'Jet Airways'),
('Mumbai', 'Hyderabad', 1328, 'Jet Airways'),
('Mumbai', 'Visakhapatnam', 1328, 'Jet Airways'),
('Mumbai', 'Kolkata', 1328, 'Jet Airways'),
('Visakhapatnam', 'Agra', 1500, 'Jet Airways'),
('Visakhapatnam', 'Mumbai', 1455, 'Jet Airways'),
('Visakhapatnam', 'Hyderabad', 1455, 'Jet Airways'),
('Visakhapatnam', 'Kolkata', 1455, 'Jet Airways'),
('Kolkata', 'Agra', 1455, 'Jet Airways'),
('Kolkata', 'Mumbai', 1455, 'Jet Airways'),
('Kolkata', 'Hyderabad', 1455, 'Jet Airways'),
('Kolkata', 'Chennai', 1455, 'Jet Airways'),
('Hyderabad', 'Chennai', 2999, 'Indigo Airways'),
('Hyderabad', 'Delhi', 2500, 'Indigo Airways'),
('Chennai', 'Delhi', 3121, 'Indigo Airways'),
('Hyderabad', 'Bangalore', 1455, 'Indigo Airways'),
('Hyderabad', 'Agra', 1788, 'Indigo Airways'),
('Hyderabad', 'Mumbai', 1788, 'Indigo Airways'),
('Hyderabad', 'Visakhapatnam', 1788, 'Indigo Airways'),
('Hyderabad', 'Kolkata', 1788, 'Indigo Airways'),
('Chennai', 'Agra', 1788, 'Indigo Airways'),
('Chennai', 'Mumbai', 1788, 'Indigo Airways'),
('Chennai', 'Visakhapatnam', 1788, 'Indigo Airways'),
('Chennai', 'Kolkata', 1333, 'Indigo Airways'),
('Agra', 'Chennai', 1333, 'Indigo Airways'),
('Agra', 'Mumbai', 1333, 'Indigo Airways'),
('Agra', 'Visakhapatnam', 1333, 'Indigo Airways'),
('Agra', 'Kolkata', 1333, 'Indigo Airways'),
('Mumbai', 'Agra', 1333, 'Indigo Airways'),
('Mumbai', 'Hyderabad', 1333, 'Indigo Airways'),
('Mumbai', 'Visakhapatnam', 1333, 'Indigo Airways'),
('Mumbai', 'Kolkata', 1333, 'Indigo Airways'),
('Visakhapatnam', 'Agra', 1878, 'Indigo Airways'),
('Visakhapatnam', 'Mumbai', 1878, 'Indigo Airways'),
('Visakhapatnam', 'Hyderabad', 1878, 'Indigo Airways'),
('Visakhapatnam', 'Kolkata', 1878, 'Indigo Airways'),
('Kolkata', 'Agra', 1878, 'Indigo Airways'),
('Kolkata', 'Mumbai', 1878, 'Indigo Airways'),
('Kolkata', 'Hyderabad', 1878, 'Indigo Airways'),
('Kolkata', 'Chennai', 9999, 'Indigo Airways');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `username` varchar(30) NOT NULL,
  `reservationNo` varchar(30) NOT NULL,
  `fromCity` varchar(30) NOT NULL,
  `toCity` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `airlines` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`username`, `reservationNo`, `fromCity`, `toCity`, `price`, `airlines`) VALUES
('varun92', 'FH7716978', 'Agra', 'Chennai', 2133, 'Jet Airways'),
('varun92', 'FH7399640', 'Chennai', 'Agra', 10045, 'UCM Airlines'),
('group2', 'FH7716978', 'Agra', 'Chennai', 2133, 'Jet Airways'),
('group2', 'FH7399640', 'Chennai', 'Agra', 10045, 'UCM Airlines'),
('rajeshm', 'FH7716978', 'Agra', 'Chennai', 2133, 'Jet Airways'),
('rajeshm', 'FH7399640', 'Chennai', 'Agra', 10045, 'UCM Airlines'),
('sivaji', 'FH7716978', 'Agra', 'Chennai', 2133, 'Jet Airways'),
('sivaji', 'FH7399640', 'Chennai', 'Agra', 10045, 'UCM Airlines'),
('monster', 'FH7716978', 'Agra', 'Chennai', 2133, 'Jet Airways'),
('monster', 'FH7399640', 'Chennai', 'Agra', 10045, 'UCM Airlines'),
('varun92', 'FH7477290', 'Agra', 'Chennai', 1500, 'Indigo Airways');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('varun92', 'qwerty123'),
('group2', 'group2222'),
('rajeshm', 'omg123456'),
('sivaji', 'simhadhri9'),
('monster', 'monster007');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
