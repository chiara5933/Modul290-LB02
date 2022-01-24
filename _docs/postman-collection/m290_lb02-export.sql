-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2022 at 03:43 PM
-- Server version: 10.5.12-MariaDB-0+deb11u1
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m290_lb02`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_api`
--

CREATE TABLE `t_api` (
  `id` int(11) NOT NULL,
  `secret` varchar(128) NOT NULL,
  `description` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_api`
--

INSERT INTO `t_api` (`id`, `secret`, `description`) VALUES
(1, '100b49a8', 'TEST\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `emailaddress` varchar(120) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT 0,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id`, `username`, `password`, `emailaddress`, `firstname`, `lastname`, `disabled`, `createdat`) VALUES
(4, 'maxmustermann_new', 'd41d8cd98f00b204e9800998ecf8427e', 'maxmuster@mann.ch', 'john', 'doe', 0, '2022-01-24 08:31:04'),
(14, 'maxmustermann', '62767e547fd5280353c4c1336fb1b62c', 'max.mustermann@mail.com', 'Max', 'Mustermann', 0, '2022-01-24 13:45:48'),
(15, 'testuser', '98f0f70381654ebd23cd69cd74b52596', 'testuser@user.com', 'testuser', 'testuser', 0, '2022-01-24 15:03:53'),
(17, 'maxmustermann2', '62767e547fd5280353c4c1336fb1b62c', 'max.mustermann@mail.com', 'Max', 'Mustermann', 0, '2022-01-24 15:07:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_api`
--
ALTER TABLE `t_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_api`
--
ALTER TABLE `t_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
