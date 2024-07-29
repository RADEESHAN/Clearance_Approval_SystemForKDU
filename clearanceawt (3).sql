-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 06:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearanceawt`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyclearance`
--

CREATE TABLE `applyclearance` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `acdemicyr` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `HODstatus` varchar(10) NOT NULL,
  `LibrarianStatus` varchar(10) NOT NULL,
  `AB_Status` varchar(10) NOT NULL,
  `AR_Status` varchar(10) NOT NULL,
  `Adjutant_Status` varchar(10) NOT NULL,
  `Final_Stats` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyclearance`
--

INSERT INTO `applyclearance` (`id`, `email`, `regno`, `firstname`, `intake`, `phonenumber`, `dept`, `acdemicyr`, `created_at`, `HODstatus`, `LibrarianStatus`, `AB_Status`, `AR_Status`, `Adjutant_Status`, `Final_Stats`) VALUES
(15, '39-bit-0019@kdu.ac.lk', 'D/BIT/22/0019', 'CR Hapuarachchi', 'intake39', '0771234568', 'IT', '4', '2024-07-29 07:59:57', 'pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approve'),
(16, '39-bit-0016@kdu.ac.lk', 'D/BIT/22/0016', 'Upani Ehara', 'intake39', '770286591', 'IT', '4', '2024-07-29 08:16:23', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approve'),
(17, '39-bit-0018@kdu.ac.lk', 'D/BIT/22/0018', 'miyuru priyakantha', 'intake39', '771895461', 'IT', '4', '2024-07-29 08:17:45', 'Approved', 'pending', 'pending', 'pending', 'pending', 'pending'),
(18, '39-bis-0020@kdu.ac.lk', 'D/BIS/22/0020', 'Kanchana Saranga', 'intake39', '771235698', 'IT', '4', '2024-07-29 11:52:28', 'Approved', 'pending', 'pending', 'pending', 'pending', 'pending'),
(19, '39-bit-0021@kdu.ac.lk', 'D/BIT/22/0021', 'Kavindu Dilshan', 'intake39', '771234564', 'IT', '1', '2024-07-29 11:55:41', 'Approved', 'pending', 'pending', 'pending', 'pending', 'pending'),
(22, '39-bit-0054@kdu.ac.lk', 'D/BIT/22/0054', 'P.K.Pramuditha Radeeshan', 'intake39', '0770245461', 'IT', '4', '2024-07-29 12:39:36', 'Approved', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `finalatd`
--

CREATE TABLE `finalatd` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `acdemicyr` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `HODstatus` varchar(10) NOT NULL,
  `LibrarianStatus` varchar(10) NOT NULL,
  `AB_Status` varchar(10) NOT NULL,
  `AR_Status` varchar(10) NOT NULL,
  `Adjutant_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalatd`
--

INSERT INTO `finalatd` (`id`, `email`, `regno`, `firstname`, `intake`, `phonenumber`, `dept`, `acdemicyr`, `created_at`, `HODstatus`, `LibrarianStatus`, `AB_Status`, `AR_Status`, `Adjutant_Status`) VALUES
(4, '39-bit-0019@kdu.ac.lk', 'D/BIT/22/0019', 'CR Hapuarachchi', 'intake39', '0771234568', 'IT', '4', '2024-07-29 07:59:57', 'pending', 'Approved', 'Approved', 'Approved', 'Approved'),
(5, '39-bit-0016@kdu.ac.lk', 'D/BIT/22/0016', 'Upani Ehara', 'intake39', '770286591', 'IT', '4', '2024-07-29 08:16:23', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `qdmlogin`
--

CREATE TABLE `qdmlogin` (
  `firstname` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(38) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qdmlogin`
--

INSERT INTO `qdmlogin` (`firstname`, `username`, `email`, `regno`, `password`, `usertype`, `phonenumber`) VALUES
('Manula Akalanka', 'ab-001', 'ab-001@kdu.ac.lk', 'ab-24-001', '1234', 'ab', 772458610),
('supun', 'adjutant-001', 'adjutant-001@kdu.ac.lk', 'adjutant-001', '1234', 'adjutant', 770245461),
('supun', 'admin123', 'clearance-kdu@ac.lk', 'admin-001', '1234', 'admin', 770256595),
('Pasan Maduranga', 'ar-001', 'arofficer-kdu@ac.lk', 'ar-kdu-001', '1234', 'arOfficer', 770245461),
('Ashen', 'hod-001', 'hod-it@kdu.ac.lk', 'ashen-001', '1234', 'hod', 770245461),
('Saman Piyantha', 'librarian-001', 'librarian-001@kdu.ac.lk', 'librarian-001', '1234', 'librarian', 771245598),
('Maduka', 'ma-001', 'ma-it@kdu.ac.lk', 'ma-it-001', '1234', 'ma', 770245461);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(38) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `intake` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `phonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `username`, `email`, `regno`, `intake`, `password`, `usertype`, `phonenumber`) VALUES
('Kanchana Saranga', '39-bis-0020', '39-bis-0020@kdu.ac.lk', '39/BIS/22/0020', 'intake 39', '1234', 'student', 770111111),
('Upani Ehara', '39-bit-0016', '39-bit-0016@kdu.ac.lk', '39/BIT/22/0016', 'intake 39', '1234', 'student', 770286591),
('Miyuru', '39-bit-0018', '39-bit-0018@kdu.ac.lk', '39/BIT/22/0018', 'intake 39', '1234', 'student', 771895461),
('Chirantha Ravishka', '39-bit-0019', '39-bit-0019@kdu.ac.lk', '39/BIT/22/0019', 'intake 39', '1234', 'student', 779559461),
('Kavindu Dilshan', '39-bit-0021', '39-bit-0021@kdu.ac.lk', '39/BIT/22/0021', 'intake 39', '1234', 'student', 770256595),
('Pramuditha', '39-bit-0054', '39-bit-0054@kdu.ac.lk', '39/BIT/220054', 'intake 39', '1234', 'student', 770245461),
('IA Paranawithana', '39-bit-0046', '39-bit-0046@kdu.ac.lk', 'D/BIT/22/0046', 'intake 39', '1234', 'student', 771234687);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyclearance`
--
ALTER TABLE `applyclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalatd`
--
ALTER TABLE `finalatd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qdmlogin`
--
ALTER TABLE `qdmlogin`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyclearance`
--
ALTER TABLE `applyclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `finalatd`
--
ALTER TABLE `finalatd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
