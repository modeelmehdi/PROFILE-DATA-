-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2025 at 04:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageuploder`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `document` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `name`, `mobile_no`, `image`, `document`) VALUES
(1, 'modeelmehdi', '033005529725', 'upload/1755772822_profile_image.jpg', 'upload/documents/1755776682_img..docx'),
(2, 'peach.__.0', '03055570557', 'upload/1755772850_image.jpeg', 'upload/documents/1755777118_img..docx'),
(3, 'MoheelMehdi', '03394010554', 'upload/1755772868_profile_image.jpg', 'upload/documents/1755777130_img..docx'),
(4, 'MOEEZ MEHDI', '0323232322', 'upload/1755772883_image.jpeg', 'upload/documents/1755777179_img..docx'),
(6, 'Shaheer ali', '03394010554', 'upload/images/1755777426_profile_image.jpg', 'upload/documents/1755777390_img..docx'),
(8, 'maria ', '024151210415', 'upload/1755778181_img_123.jpg', 'upload/1755778181_doc_img..docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
