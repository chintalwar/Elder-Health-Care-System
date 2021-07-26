-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 08:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elder_health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cuEmail` varchar(40) NOT NULL,
  `cuMobile` varchar(40) NOT NULL,
  `cuAddress` varchar(40) NOT NULL,
  `cuName` varchar(40) NOT NULL,
  `cuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `price` int(11) NOT NULL,
  `medId` int(11) NOT NULL,
  `medName` varchar(40) NOT NULL,
  `scienteficName` varchar(40) NOT NULL,
  `diseaseCategory` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`price`, `medId`, `medName`, `scienteficName`, `diseaseCategory`) VALUES
(20, 1, 'Napa', 'Paracetamol', 'Fever'),
(30, 2, 'Ace', 'Paracetamol', 'Fever'),
(300, 3, 'Sumatriptan', 'Imitrex', 'Migraine'),
(200, 4, 'Fenadin', 'Allegra', 'Cough'),
(30, 5, 'Oxitocin', 'Pitocin', 'Pain'),
(40, 6, 'Glucagon', 'GlucaGen', 'Fever'),
(20, 8, 'Histacin', 'Chlorphenamine', 'Cold');

-- --------------------------------------------------------

--
-- Table structure for table `medicineorder`
--

CREATE TABLE `medicineorder` (
  `orderId` int(11) NOT NULL,
  `medicinename` varchar(50) NOT NULL,
  `medquantity` int(11) NOT NULL,
  `medprice` varchar(50) NOT NULL,
  `totalprice` varchar(50) NOT NULL,
  `ordercusname` varchar(50) NOT NULL,
  `orderphone` varchar(15) NOT NULL,
  `orderaddress` varchar(50) NOT NULL,
  `orderregion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `name`, `age`, `email`, `contact`, `password`) VALUES
(1, 'suhasini chintalwar', 25, 'suhasinichintalwar@gmail.com', 2147483647, 'Suhasini'),
(2, 'suhasini chintalwar', 25, 'suhasinichintalwar@gmail.com', 2147483647, 'Suhasini'),
(3, 'Maya Chintalwar', 65, 'maya@gmail.com', 2147483647, 'maya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
