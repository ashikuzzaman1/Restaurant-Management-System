-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 08:12 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `id` int(20) NOT NULL,
  `foodname` varchar(400) NOT NULL,
  `price` int(100) NOT NULL,
  `customerid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id`, `foodname`, `price`, `customerid`) VALUES
(1, 'paratha', 15, 0),
(2, 'daal', 10, 0),
(3, 'vaji', 10, 0),
(4, 'patla khichuri', 50, 0),
(5, 'bhuna khichuri', 120, 0),
(6, 'kachchi Biryani', 220, 0),
(7, 'Grilled Chicken With Naan Roti', 120, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerquery`
--

CREATE TABLE `customerquery` (
  `customerid` int(11) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerquery`
--

INSERT INTO `customerquery` (`customerid`, `query`) VALUES
(0, ''),
(0, ''),
(4, 'How are you?');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contactno` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `picsource` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `contactno`, `address`, `picsource`) VALUES
(1, 'shopnil', 'shopnil@gmail.com', '654321', 1800000000, 'Dhanmondi,Dhaka', ''),
(2, 'salekin', 'shohag@gmail.com', '123456', 1755555555, 'dhaka', ''),
(3, 'salekin', 'salekin@gmail.com', '123456', 1788444444, 'Dhaka,Bangladesh', ''),
(4, 'masud', 'masud@gmail.com', '7410852', 1111111111, 'Dhanmondi,Dhaka', ''),
(5, 'shuvo', 'shuvo@gmail.com', '741852', 0, 'Mohakhali,Dhaka', ''),
(6, 'himel', 'himel@gmail.com', '465132', 1111111551, 'Mohammadpur,Dhaka', ''),
(7, 'pritom', 'priton@gmail.com', '852147963', 1766666666, 'Rangpur', '');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contactno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `username`, `email`, `password`, `contactno`) VALUES
(1, 'rasel', 'rasel@gmail.com', '123456', 1755555555),
(2, 'khan', 'khan@gmail.com', '124578963', 1478523698),
(3, 'shosi', 'shosi@gmail.com', '147852369', 1478523698),
(4, 'robi', 'robi@@gmail.com', '789654123', 1521479635),
(5, 'rabi', 'rabi@gmail.com', '852147963', 1563217896),
(6, 'Rifal', 'rifat@gmail.com', '12365478', 1774254254);

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `id` int(20) NOT NULL,
  `foodname` varchar(400) NOT NULL,
  `price` int(100) NOT NULL,
  `customerid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id`, `foodname`, `price`, `customerid`) VALUES
(1, 'Rice', 20, 0),
(2, 'daal', 15, 0),
(3, 'Vaji', 20, 0),
(4, 'Birani', 200, 0),
(5, 'Morog Polao', 180, 0),
(6, 'Kacchi Birani', 250, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contactno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `email`, `password`, `contactno`) VALUES
(1, 'jubayer', 'jubayer@gmail.com', '123456', 176666666),
(2, 'jubay', 'jubay@gmail.com', '123456789', 1788444444),
(3, 'alif', 'alif@gmail.com', '446464645', 1455145115),
(4, 'hridoy', 'hri@gmail.com', '111212121', 1221122123),
(5, 'tamal', 'tamal@gmail.com', '778787878', 1245452114),
(6, 'pritom', 'priton@gmail.com', '12345678', 1477884512),
(7, 'salekin', 's@gmail.com', '12345678', 1788888888),
(8, 'shohag', 's@gmail.com', '12345678', 171124121);

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(20) NOT NULL,
  `foodname` varchar(400) NOT NULL,
  `price` int(100) NOT NULL,
  `customerid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `foodname`, `price`, `customerid`) VALUES
(1, 'kachchi Biryani', 250, 0),
(2, 'Bhuna Khichuri', 180, 0),
(3, 'Morog Polao', 150, 0),
(4, 'Bortha – mashed vegetables and fish', 120, 0),
(5, 'Biryani', 120, 0),
(6, 'Fried fish', 120, 0),
(7, 'Rice', 20, 0),
(8, 'daal', 20, 0),
(9, 'Chotpoti', 50, 0),
(10, 'water', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderbreakfast`
--

CREATE TABLE `orderbreakfast` (
  `id` int(100) NOT NULL,
  `foodname` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `customerid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderbreakfast`
--

INSERT INTO `orderbreakfast` (`id`, `foodname`, `price`, `customerid`) VALUES
(1, 'paratha', 10, 1),
(5, 'bhuna khichuri', 120, 4),
(7, 'Grilled Chicken With Naan Roti', 120, 5),
(8, 'Naan Roti', 25, 1),
(9, 'water', 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orderdinner`
--

CREATE TABLE `orderdinner` (
  `id` int(50) NOT NULL,
  `foodname` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `customerid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdinner`
--

INSERT INTO `orderdinner` (`id`, `foodname`, `price`, `customerid`) VALUES
(4, 'Birani', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdrink`
--

CREATE TABLE `orderdrink` (
  `id` int(50) NOT NULL,
  `drinkname` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  `customerid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdrink`
--

INSERT INTO `orderdrink` (`id`, `drinkname`, `price`, `customerid`) VALUES
(1, 'tea', 15, 1),
(6, 'Tiger', 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `orderlunch`
--

CREATE TABLE `orderlunch` (
  `id` int(100) NOT NULL,
  `foodname` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `customerid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlunch`
--

INSERT INTO `orderlunch` (`id`, `foodname`, `price`, `customerid`) VALUES
(1, 'kachchi Biryani', 250, 9),
(5, 'Biryani', 120, 1);

-- --------------------------------------------------------

--
-- Table structure for table `otherfoods`
--

CREATE TABLE `otherfoods` (
  `id` int(20) NOT NULL,
  `foodname` varchar(400) NOT NULL,
  `price` int(100) NOT NULL,
  `customerid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `softdrink`
--

CREATE TABLE `softdrink` (
  `id` int(50) NOT NULL,
  `drinkname` varchar(200) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `softdrink`
--

INSERT INTO `softdrink` (`id`, `drinkname`, `price`) VALUES
(1, 'water', 20),
(2, 'tea', 15),
(3, 'coffee', 25),
(4, '7up', 30),
(5, 'speed', 30),
(6, 'tiger', 30),
(7, 'mirinda', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderbreakfast`
--
ALTER TABLE `orderbreakfast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdinner`
--
ALTER TABLE `orderdinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdrink`
--
ALTER TABLE `orderdrink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlunch`
--
ALTER TABLE `orderlunch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otherfoods`
--
ALTER TABLE `otherfoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softdrink`
--
ALTER TABLE `softdrink`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderbreakfast`
--
ALTER TABLE `orderbreakfast`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderdinner`
--
ALTER TABLE `orderdinner`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderdrink`
--
ALTER TABLE `orderdrink`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderlunch`
--
ALTER TABLE `orderlunch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `otherfoods`
--
ALTER TABLE `otherfoods`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `softdrink`
--
ALTER TABLE `softdrink`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
