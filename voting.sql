-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `position`) VALUES
(1, 'ahmed aden', 'president'),
(2, 'kassim isack', 'president'),
(3, 'abdullahi jimale', 'president'),
(4, 'mohamed hussein', 'library'),
(5, 'sultan ikrima', 'library'),
(6, 'ally fuad', 'library'),
(7, 'paul teyaa', 'catering'),
(8, 'willys otunga', 'catering'),
(9, 'sangula brian', 'catering'),
(10, 'ali anco', 'sport'),
(11, 'yussuf ibrahim', 'sport'),
(12, 'arim abdullah', 'sport'),
(13, 'adesh fav', 'male_hostels'),
(14, 'adan abdi', 'male_hostels'),
(15, 'abdifatah abdi', 'male_hostels'),
(16, 'sumeya ahmed', 'female_hostels'),
(17, 'farhiya hassan', 'female_hostels'),
(18, 'asmah shiro', 'female_hostels');

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `id` int(5) NOT NULL,
  `admission` int(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `date_voted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`id`, `admission`, `post`, `date_voted`) VALUES
(25, 6425, 'president', '2019-11-26'),
(26, 6425, 'library', '2019-11-26'),
(27, 1212, 'president', '2019-11-26'),
(28, 1212, 'library', '2019-11-26'),
(29, 6425, 'male_hostels', '2019-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `admission` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`admission`, `email`, `password`, `status`) VALUES
(123, 'ikassim@kabarak.ac.ke', 'nvcQ/qI2Bgc9s', 'normal'),
(1111, 'abdullaahiyow@gmail.com', 'nvcQ/qI2Bgc9s', 'admin'),
(1212, 'fahim@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1313, 'sly@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1414, 'jonny@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1515, 'hamisi@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1616, 'favy@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1717, 'abdi@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1818, 'rashy@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(1919, 'moha@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(2020, 'ahmedbare@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(2222, 'ikassim@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(3333, 'jimale@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(4444, 'allie@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(5555, 'jane@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(6425, 'ahmedbare@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(6565, 'ahmedbare@gmail.com', 'nvcQ/qI2Bgc9s', ''),
(6666, 'sultan@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(7777, 'ahmed@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(8888, 'shillow@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(9999, 'noorkeyshill@gmail.com', 'nvcQ/qI2Bgc9s', 'admin'),
(12345, '12345@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(123456, '123456@gmail.com', 'nvcQ/qI2Bgc9s', 'normal'),
(456789, '456789@gmail.com', 'nvcQ/qI2Bgc9s', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `candidate_id` int(5) NOT NULL,
  `vote_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`candidate_id`, `vote_count`) VALUES
(1, 2),
(2, 5),
(3, 0),
(4, 1),
(5, 1),
(6, 3),
(7, 2),
(8, 1),
(9, 0),
(10, 0),
(11, 1),
(12, 2),
(13, 1),
(14, 1),
(15, 1),
(16, 0),
(17, 0),
(18, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `admission` (`admission`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `checks`
--
ALTER TABLE `checks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `candidate_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
