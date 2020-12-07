-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 02:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kompos`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kelembaban` float(8,2) NOT NULL,
  `suhu` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `waktu`, `kelembaban`, `suhu`) VALUES
(1, '2018-12-19 06:00:00', 75.93, 50.68),
(2, '2018-12-20 06:00:00', 73.08, 47.99),
(3, '2018-12-21 06:00:00', 68.85, 44.61),
(4, '2018-12-22 06:00:00', 67.92, 45.46),
(5, '2018-12-23 06:00:00', 65.78, 38.81),
(6, '2018-12-24 06:00:00', 63.91, 31.74),
(7, '2018-12-25 06:00:00', 60.11, 28.86),
(403, '2018-12-25 21:35:52', 56.00, 26.12),
(404, '2019-02-25 00:27:24', 3.00, 0.00),
(405, '2019-02-25 00:27:49', 3.00, 0.00),
(406, '2019-02-25 00:28:00', 3.00, 0.00),
(407, '2019-02-25 00:28:05', 3.00, 10.00);

--
-- Triggers `monitoring`
--
DELIMITER $$
CREATE TRIGGER `validasi` BEFORE INSERT ON `monitoring` FOR EACH ROW IF NEW.suhu < 0
  THEN
      SET NEW.suhu = 0;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_user`, `nama_depan`, `nama_belakang`, `username`, `password`) VALUES
(1, 'Administrator', 'Administrator', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
