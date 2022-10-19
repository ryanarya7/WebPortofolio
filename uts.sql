-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 09:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboututs`
--

CREATE TABLE `aboututs` (
  `id` smallint(5) NOT NULL,
  `about` varchar(255) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `residence` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboututs`
--

INSERT INTO `aboututs` (`id`, `about`, `birthday`, `age`, `residence`, `address`, `gambar`) VALUES
(1, 'My name is Ryan Arya Prakoso, I was born in Jakarta. I am the 4th child of 4 siblings, and born from a simple family. Now I\'m a student at Pembangunan Jaya University and I\'m majoring in Informatics. I am currently exploring a lot of knowledge about IT.', '6th November 2001', '20 Yr', 'South Tangerang', 'Banten, Indonesia', 'pasfoto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `certificateuts`
--

CREATE TABLE `certificateuts` (
  `id` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificateuts`
--

INSERT INTO `certificateuts` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, 'sertif1.png', 'IT Support Google', 'Those who earned Google Professional IT Support Certificate have completed five materials developed by Google.'),
(2, 'sertif2.png', 'Cyber Security Essential', 'Describe the tactics, techniques and procedures used by cyber criminals.');

-- --------------------------------------------------------

--
-- Table structure for table `contactuts`
--

CREATE TABLE `contactuts` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactuts`
--

INSERT INTO `contactuts` (`id`, `email`, `nama`, `comment`) VALUES
(2, 'as@gmail.com', 'asd', 'asd'),
(3, 'as@gmail.com', 'asd', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `indexhome`
--

CREATE TABLE `indexhome` (
  `id` smallint(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indexhome`
--

INSERT INTO `indexhome` (`id`, `nama`, `isi`) VALUES
(1, 'Ryan Arya', 'I\'m someone who studies programming languages, UI/UX design, and many other things about IT');

-- --------------------------------------------------------

--
-- Table structure for table `projectuts`
--

CREATE TABLE `projectuts` (
  `id` smallint(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectuts`
--

INSERT INTO `projectuts` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, 'web.png', 'Remake Web UPJ', 'Recreate the university website by applying the html algorithm'),
(2, 'figma.png', 'Figma Project', 'Make a mobile application display, exchange coding applications among the community'),
(3, 'codee.jpg', 'Coding Project', 'Create various types of programs with various types of computer algorithm languages ​​such as java, python, c, c++, html, php, javascript, and several others.');

-- --------------------------------------------------------

--
-- Table structure for table `webporto`
--

CREATE TABLE `webporto` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webporto`
--

INSERT INTO `webporto` (`id`, `nama`, `isi`, `gambar`) VALUES
(1, 'Ryan Arya', 'I\'m someone who studies programming languages, UI/UX design, and many other things about IT', 'about.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboututs`
--
ALTER TABLE `aboututs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificateuts`
--
ALTER TABLE `certificateuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuts`
--
ALTER TABLE `contactuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexhome`
--
ALTER TABLE `indexhome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectuts`
--
ALTER TABLE `projectuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webporto`
--
ALTER TABLE `webporto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboututs`
--
ALTER TABLE `aboututs`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificateuts`
--
ALTER TABLE `certificateuts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactuts`
--
ALTER TABLE `contactuts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `indexhome`
--
ALTER TABLE `indexhome`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projectuts`
--
ALTER TABLE `projectuts`
  MODIFY `id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `webporto`
--
ALTER TABLE `webporto`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
