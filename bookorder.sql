-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 10:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`category`, `name`, `author`, `image`, `price`) VALUES
('Fiction', '1984', 'LP Sundar', '1984.jpg', 986),
('Adventure', '20,000 Leagues Under the Sea', 'K Narayanan', '20,000 Leagues Under the Sea.jpg', 890),
('Mystery', 'Death of the River', 'Clare Chase', 'Death of the River.jpg', 970),
('Adventure', 'kar', 'kar', 'kar.jpg', 900),
('Biographies', 'The Count of Monte Cristo', 'Nalini', 'The Count of Monte Cristo.jpg', 789);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `image`) VALUES
('Adventure', 'Adventure.jpg'),
('Biographies', 'biography.jpg'),
('Fiction', 'Fiction.jpg'),
('Horror', 'horror.jpg'),
('Literary', 'Literary.jpg'),
('Mystery', 'Mystery.jpg'),
('obc', 'obc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`id`, `name`, `author`, `image`, `price`) VALUES
(13, '1984', 'LP Sundar', '1984.jpg', 986),
(17, 'The Count of Monte Cristo', 'Nalini', 'The Count of Monte Cristo.jpg', 789);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `author`, `image`, `price`, `date`, `status`) VALUES
(13, '20,000 Leagues Under the Sea', 'K Narayanan', '20,000 Leagues Under the Sea.jpg', 890, '2021-08-18', 'Ordered'),
(13, '1984', 'LP Sundar', '1984.jpg', 986, '2021-08-18', 'Ordered'),
(14, '20,000 Leagues Under the Sea', 'K Narayana', '20,000 Leagues Under the Sea.jpg', 890, '2021-08-18', 'Ordered'),
(15, '20,000 Leagues Under the Sea', 'K Narayanan', '20,000 Leagues Under the Sea.jpg', 890, '2021-08-19', 'Ordered'),
(12, '20,000 Leagues Under the Sea', 'K Narayanan', '20,000 Leagues Under the Sea.jpg', 890, '2021-08-22', 'Ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `e_mail` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass_word` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user_name`, `e_mail`, `phone`, `pass_word`) VALUES
(1, 'admin', 'admin@gmail.com', '1234567890', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `phone`, `password`) VALUES
(12, 'user', 'user@gmail.com', '1234567890', 'user'),
(13, 'Annamalai M', 'Anna@gmail.com', '9765786543', '1234567'),
(14, 'Abhi', 'Abhi@gmail.com', '8976543678', 'abhi'),
(15, 'Aakash', 'Aakash@gmail.com', '9976589878', 'Aakash'),
(16, 'abcd123', 'abcd123@abcd.com', '9962571658', 'QAZWSX'),
(17, 'Annamalai', 'Annamalai@gmail.com', '998877665544', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
