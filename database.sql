-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2026 at 03:44 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'said khalis', '$2y$10$npR01BRlAD70ao/u1x9MHuf.ZgfObE33X4syDmkb3brVI0VqaWgk2'),
(2, 'khalis', '$2y$10$Ae81V8I8DQgWpbyzvc/OBukOm8T32Dp4l3TEJD4wDFtpZoFdaY7Je'),
(3, 'said said', '$2y$10$3s5RfbYh.qx7heHc0G.ZxOKSEsTmbza6CWFIJzsmNpmoIOrxETCDi'),
(4, 'said khalis sk', '$2y$10$qbcv5PujeNWpv894C9Voke.l2Q9q4Nsr9yREyEnaEHsISYTMnUkrG'),
(5, 'khalis said', '$2y$10$/2djfSOpTV0wDhF57PYKiucMkbuPxpUZPJbxZ/F4nUDIe0iERKY2S'),
(6, 'said', '$2y$10$SQoEQ1RVciT3l6X4zzhbAOoiW/SEHi6hLbGZhmGVr3lW5Fs/VzxPy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
