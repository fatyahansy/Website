-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 03:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldelusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(30) NOT NULL,
  `stok_kamar` int(11) NOT NULL,
  `status_kamar` varchar(30) NOT NULL,
  `harga_kamar` varchar(20) NOT NULL,
  `tgl_pergii` date NOT NULL,
  `tgl_pulangg` date NOT NULL,
  `jml_jamaah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`, `stok_kamar`, `status_kamar`, `harga_kamar`, `tgl_pergii`, `tgl_pulangg`, `jml_jamaah`) VALUES
(1, 'Reguler', 4, 'Selesai', 'Umrah Al Mubarok', '2022-09-19', '2022-09-26', 34),
(123, 'Umrah Plus', 6, 'Aktif', 'Umrah   Turkey 1444H', '2022-10-24', '2022-11-07', 102),
(124, 'Umrah Reguler', 4, 'Selesai', 'Umrah Reguler Start ', '2022-10-24', '2022-10-31', 71),
(127, 'Umrah Reguler', 5, 'Selesai', 'Umrah   Turkey 1444H', '0000-00-00', '0000-00-00', 44);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `jabatan`) VALUES
(3, 'Rina Muthmainnah', 'Ticketing', 'Manager'),
(4, 'Fatya Hanifa', 'Marketing', 'Anggota'),
(5, 'Ayya', 'Ticketing', 'Manager'),
(6, 'Siti', 'Umrah & Hajj', 'Manager'),
(7, 'Salwa', 'Personalia', 'Manager'),
(8, 'Anto', 'Umrah & Hajj', 'Anggota'),
(9, 'Dani', 'Purchasing', 'Manager'),
(10, 'Teddy', 'Umrah & Hajj', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
