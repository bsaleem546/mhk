-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 01:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `package` varchar(50) NOT NULL,
  `fees` decimal(10,0) NOT NULL,
  `costumer_type` varchar(50) NOT NULL,
  `costumer_status` varchar(50) NOT NULL,
  `date_of_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `fname`, `dob`, `cnic`, `email`, `phone`, `mobile`, `area`, `building`, `address`, `package`, `fees`, `costumer_type`, `costumer_status`, `date_of_reg`) VALUES
(1, 'dfghdf', 'sdfdfghdf', 'sdfgfg', 'sdfgg', 'sdfgsdfgg@zxcfvbx', 'sdfgsdgg', 'sdfgsdfgsgg', 'b', 'a', 'sdfgsdzvxcsdfgsgggf', 'c', '43444', 'Charge', 'Deactive', '2017-05-18'),
(2, 'admin', 'zxcbasf', 'sdfgsdfg', 'sdfs', 'dfgsd@adfxvsdf', 'sdfgs', 'sdfg', 'b', 'b', 'dfghdf', 'a', '1224', 'Wave', 'Active', '0000-00-00'),
(3, 'sdfsgd', 'fgsdfg', 'sdffffffffffffffffff', 'ffffffffffffffffffffffffff', 'ffffffffffffffffff@bbbbbbbbbbbb', 'ddddddddddddddddddddddd', 'dddddd44444444444444', 'b', 'c', 'sdffffffffffffffffffffffffsddddddddddddf\r\nffffffffffffgasdddddddddddddddddddddddddf\r\nfffffffffffffffffffffffffff', 'b', '234', 'Wave', 'Active', '0000-00-00'),
(4, 'abc@gmail.com', 'sdfg', 'sdfgsdfg', 'sdfg666666666666', 'dfgsd@adfxvsdfs', 'sdfgs', 'fgsdf', 'b', 'c', 'cvbjdtyjnxcvbzxcvzxc', 'a', '4545', 'Charge', 'Active', '2017-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnic` (`cnic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
