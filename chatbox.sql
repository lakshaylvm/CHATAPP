-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 07:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `from` varchar(100) DEFAULT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`from`, `message`, `date`, `time`, `id`) VALUES
('pp7', 'hello', '2021-11-25', '23:43:52', 655),
('pp7', 'despicable ', '2021-11-25', '23:44:15', 656),
('pp7', 'dasvidanya', '2021-11-25', '23:44:37', 657),
('jenny', 'night queen', '2021-11-25', '23:46:36', 658),
('pp7', 'dasvidanya', '2021-11-25', '23:46:42', 659),
('pp7', 'bonjour', '2021-11-25', '23:47:16', 660),
('jenny', 'nice', '2021-11-25', '23:47:22', 661);

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `picName` varchar(200) DEFAULT NULL,
  `username` int(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `rollno` varchar(20) DEFAULT NULL,
  `countrycode` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `phone`, `email`, `username`, `password`, `rollno`, `countrycode`) VALUES
('Naman', '89789798', 'namangautam12@gamil.com', 'Aresnal', '12324', '787984', '+91'),
('Naman', '8978912798', 'namangautam1122@gamil.com', 'Aresnal12', '12324', '787984', '+91'),
('jain sahab', '874154787', 'jain@gmail.com', 'jenny', '0987', '136', '+91'),
('pankaj12', '9467545', 'abdc@gmail.com', 'pp7', '123345', '1376', '+91');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`(50)),
  ADD UNIQUE KEY `hai` (`email`),
  ADD UNIQUE KEY `hellow` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=662;

--
-- AUTO_INCREMENT for table `profilepic`
--
ALTER TABLE `profilepic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
