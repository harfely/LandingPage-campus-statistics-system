-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2021 at 05:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyPort`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `username` varchar(125) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `no_hp` varchar(700) DEFAULT NULL,
  `deskripsi_pribadi` text DEFAULT NULL,
  `gambar_aboutme` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `username`, `email`, `info`, `no_hp`, `deskripsi_pribadi`, `gambar_aboutme`) VALUES
(38, 'Harfely ', 'leiparyharfely@gmail.com', 'Jln.Pendidikan, Masohi, Indonesia', '082198345926', 'Hai,,Saya Harfely', '570-UKIM.jpg'),
(39, 'PITER', 'piter@gmail.com', 'Jln.Banda, Masohi, Indonesia', '082544438965', 'Hai,,Ini saya, Piter.', '497-ukim.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
