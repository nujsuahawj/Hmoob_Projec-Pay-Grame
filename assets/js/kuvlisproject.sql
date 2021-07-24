-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 07:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuvlisproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(100) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `vdp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idgrame` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photopayment` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `name`, `phone`, `vdp`, `idgrame`, `photopayment`) VALUES
(1, 'fsasdf', 4345345, 'sdfgdsf', 'sadfsd', 'NUJSUABCELONE.png'),
(19, 'nujsua', 91826096, 'pob ntoo saw', '252565', '1773626.png');

-- --------------------------------------------------------

--
-- Table structure for table `pawg`
--

CREATE TABLE `pawg` (
  `id` int(100) NOT NULL,
  `treamname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `vdp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idgrame1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idgrame2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idgrame3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idgrame4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpayment` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pawg`
--

INSERT INTO `pawg` (`id`, `treamname`, `phone`, `vdp`, `name1`, `idgrame1`, `name2`, `idgrame2`, `name3`, `idgrame3`, `name4`, `idgrame4`, `imgpayment`) VALUES
(1, 'safsd', 546456, 'dfsgdfgsdf', 'sfdgsdfg', 'sdfgsdfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'asdfsdf', 4564565, 'sdgsdfg', 'sdfgsdfgsdfgdf', 'sdgdf', 'erter', '34534534', 'xbcvbxc', 'xcvbcxv', 'xcvbxcv', 'xcbxcvb', 'logouayoutubeUADUAS.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pawg`
--
ALTER TABLE `pawg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pawg`
--
ALTER TABLE `pawg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
