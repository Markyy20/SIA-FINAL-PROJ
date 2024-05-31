-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 28, 2024 at 09:07 AM
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
-- Database: `system_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

CREATE TABLE `info_table` (
  `ID` int(255) NOT NULL,
  `Ename` varchar(255) NOT NULL,
  `Ejob` varchar(255) NOT NULL,
  `Edept` varchar(255) NOT NULL,
  `Edate` date NOT NULL,
  `Estatus` varchar(255) NOT NULL,
  `Eshift` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_table`
--

INSERT INTO `info_table` (`ID`, `Ename`, `Ejob`, `Edept`, `Edate`, `Estatus`, `Eshift`) VALUES
(1, 'MARK Domantay', ' Registered Nurse ', ' Pediatrics ', '2024-05-16', ' Temporary ', ' Day Shift '),
(2, 'roman catholic', ' Registered Nurse ', ' Emergency Department ', '2024-05-02', ' Full-time ', ' Weekend Shift ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_table`
--
ALTER TABLE `info_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_table`
--
ALTER TABLE `info_table`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
