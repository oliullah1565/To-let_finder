-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 04:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolet_finder_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('oli', 'oli@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `counter` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `preferred_client` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `offering` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `sublet` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `aria` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `nagotiable` varchar(50) NOT NULL,
  `image1` varchar(350) NOT NULL,
  `image2` varchar(350) DEFAULT NULL,
  `image3` varchar(350) DEFAULT NULL,
  `approved` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`counter`, `id`, `title`, `description`, `phone`, `date`, `user_name`, `user_email`, `preferred_client`, `month`, `offering`, `quantity`, `sublet`, `district`, `aria`, `address`, `price`, `nagotiable`, `image1`, `image2`, `image3`, `approved`) VALUES
(4, 'p1908_1', 'amar akta basay chai', 'nothing ', '01705645150', '19-08-2019', 'oli', 'oli@gmail.com', 'Bachelor', 'Jannuary', 'Room', 1, 'No', 'Dhaka', 'sukrabad', '32,sukrabad', 1500, 'Yes', 'img0820368721.jpg', '', '', 'Yes'),
(5, 'p1908_5', 'akta basay chai', 'nothing', '0162345678', '20-08-2019', 'oli', 'oli@gmail.com', 'Bachelor', 'Jannuary', 'Room', 1, 'No', 'Dhaka', 'sukrabad', '32,sukrabad', 11000, 'No', 'img0811184029.jpg', '', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('oli', 'oli@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `counter` (`counter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
