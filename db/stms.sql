-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 05:19 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vbl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(32) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(32) NOT NULL,
  `User_Group` varchar(128) NOT NULL DEFAULT 'RSM',
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `Name`, `LastName`, `Email`, `Password`, `User_Group`, `Status`) VALUES
(1, 'Gihan', '', 'gihan.kumara@varunlanka.com', '123', 'RSM', 1),
(2, 'Kumara', '', 'g@g.lk', '1', 'RSM', 1),
(3, 'Prasath', '', 'prasath.sinniah@varunlanka.com', '1237894560', 'MIS_Level01', 1),
(4, 'Samantha', '', 'samantha.bandara@varunlanka.com', '123', 'RSM', 1),
(5, 'Gihan', 'Block', 'gih@varunlanka.com', '40bd001563085fc35165329ea1ff5c5e', 'RSM', 0),
(6, 'Gihan', 'Kumara', 'giha@varunlanka.com', '40bd001563085fc35165329ea1ff5c5e', 'RSM', 0),
(7, 'Gihan', 'Kumara', 'g@varunlanka.com', '40bd001563085fc35165329ea1ff5c5e', 'RSM', 0),
(8, 'Gihan', 'Kumara', 'gk@a.com', '40bd001563085fc35165329ea1ff5c5e', 'RSM', 1),
(9, 'Gihan', 'Kumara', 'g@gg.com', '40bd001563085fc35165329ea1ff5c5e', 'RSM', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
