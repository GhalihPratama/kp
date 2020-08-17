-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 08:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `diklat`
--

CREATE TABLE `diklat` (
  `id` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `unit` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pelatihan` varchar(500) CHARACTER SET latin1 NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diklat`
--

INSERT INTO `diklat` (`id`, `nip`, `nama`, `unit`, `pelatihan`, `tahun`, `jumlah`) VALUES
(19, 123123123, 'owo', 'owo', 'polooooo', 2003, '8');

-- --------------------------------------------------------

--
-- Table structure for table `seminartbl`
--

CREATE TABLE `seminartbl` (
  `id` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `seminar` varchar(500) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminartbl`
--

INSERT INTO `seminartbl` (`id`, `nip`, `nama`, `unit`, `seminar`, `tahun`, `jumlah`) VALUES
(6, 3131321, 'Ghalih', 'pel', 'owo', 0000, 'rtrtr');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `username`, `password`) VALUES
(5, 'Ghalih', '121212', 'mojang123', 'mojang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminartbl`
--
ALTER TABLE `seminartbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diklat`
--
ALTER TABLE `diklat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `seminartbl`
--
ALTER TABLE `seminartbl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
