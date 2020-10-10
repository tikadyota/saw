-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 07:14 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw_indekos`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`, `alamat`) VALUES
(1, 'Kost Depok', 'Mlati, Sleman'),
(2, 'Kost Putri TB SR Tipe B', 'Mlati, Sleman'),
(3, 'Kost Ibu Mudah', 'Mlati, Sleman'),
(4, 'Kost Asrama Mahasiswa', 'Mlati, Sleman'),
(5, 'Kost Nurul Tipe A', 'Mlati, Sleman'),
(6, 'Kost Pandu', 'Mlati, Sleman'),
(7, 'Kost Mbak Dela', 'Mlati, Sleman'),
(8, 'Kost Holikos', 'Mlati, Sleman'),
(9, 'Kost Elda', 'Mlati, Sleman'),
(10, 'Kost Mbah Medi tipe A', 'Mlati, Sleman'),
(11, 'Kost NaFia', 'Mlati, Sleman'),
(12, 'Kost Putri Triadi', 'Mlati, Sleman'),
(13, 'Kost 3 Brother', 'Mlati, Sleman'),
(14, 'Kost Kurang Asem', 'Mlati, Sleman'),
(15, 'Kost Fany and Maria ', 'Mlati, Sleman'),
(16, 'Kost Bu Marsidi', 'Mlati, Sleman'),
(17, 'Kost Ibu Sujila', 'Mlati, Sleman'),
(18, 'Kost Abiyasa', 'Mlati, Sleman'),
(19, 'Kost untuk Putri', 'Mlati, Sleman'),
(20, 'Kost putri', 'Mlati, Sleman'),
(21, 'Kost Muslimah annisa', 'Mlati, Sleman'),
(22, 'Kost putri shalihah', 'Mlati, Sleman'),
(23, 'Kost Putri Sopan dan Santun', 'Mlati, Sleman'),
(24, 'Kost Putri Rizki Dhira', 'Mlati, Sleman'),
(25, 'Kost Putri muslim', 'Mlati, Sleman'),
(26, 'Kost Putri', 'Mlati, Sleman'),
(27, 'Kost B36', 'Mlati, Sleman'),
(28, 'Kost Bu Lis Muslimah', 'Mlati, Sleman'),
(29, 'Kost Bu Tutuk', 'Mlati, Sleman'),
(30, 'Kost Rabhani Madani', 'Mlati, Sleman'),
(31, 'Kost putri kupu-kupu', 'Mlati, Sleman'),
(32, 'Kost bu Suminah', 'Mlati, Sleman'),
(33, 'Kost putri Annisa Lestari', 'Mlati, Sleman'),
(34, 'Kost Goeboek Ragiel tipe A', 'Mlati, Sleman'),
(35, 'Kost Vianetta tipe A', 'Mlati, Sleman'),
(36, 'Kost semampo ', 'Mlati, Sleman'),
(37, 'Kost UGM yang Dji Tipe A', 'Mlati, Sleman'),
(38, 'Kost UGM yang Dji Tipe B', 'Mlati, Sleman'),
(39, 'Kost UGM Twin\'s', 'Mlati, Sleman'),
(40, 'Kost Putra Joge', 'Mlati, Sleman'),
(41, 'Kost Putri Griya Ardhana', 'Mlati, Sleman'),
(42, 'Kost Lestari', 'Mlati, Sleman'),
(43, 'Kost Wisma Patriot Tipe A', 'Mlati, Sleman'),
(44, 'Kost pak pandu Tipe A', 'Mlati, Sleman'),
(45, 'Kost Key Eksklusif 99', 'Mlati, Sleman'),
(46, 'Kost ibu Indri tipe C', 'Mlati, Sleman'),
(47, 'Kost Putri Muslimah', 'Mlati, Sleman'),
(48, 'Kost Putri Ritsany', 'Mlati, Sleman'),
(49, 'Kost Putri(Mama Devi)', 'Mlati, Sleman'),
(50, 'Kost Putri Murah', 'Mlati, Sleman');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(2) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis_kriteria` varchar(20) NOT NULL,
  `bobot_kriteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot_kriteria`) VALUES
(1, 'Jarak ke kampus', 'Cost', 20),
(2, 'Jarak ke warung makan', 'Cost', 10),
(3, 'Harga sewa', 'Cost', 20),
(4, 'Luas kamar', 'Benefit', 15),
(5, 'Fasilitas', 'Benefit', 20),
(6, 'Keamanan', 'Benefit', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `hasil_saw` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `hasil_saw`) VALUES
(1, 0.48),
(2, 0.54),
(3, 0.48),
(4, 0.626667),
(5, 0.36),
(6, 0.616667),
(7, 0.66),
(8, 0.526667),
(9, 0.583333),
(10, 0.75),
(11, 0.63),
(12, 0.656667),
(13, 0.41),
(14, 0.47),
(15, 0.635),
(16, 0.4),
(17, 0.63),
(18, 0.47),
(19, 0.493333),
(20, 0.6),
(21, 0.39),
(22, 0.51),
(23, 0.48),
(24, 0.626667),
(25, 0.6),
(26, 0.485),
(27, 0.486667),
(28, 0.595),
(29, 0.48),
(30, 0.52),
(31, 0.486667),
(32, 0.61),
(33, 0.476667),
(34, 0.565),
(35, 0.84),
(36, 0.49),
(37, 0.676667),
(38, 0.613333),
(39, 0.495),
(40, 0.446667),
(41, 0.69),
(42, 0.63),
(43, 0.43),
(44, 0.4),
(45, 0.63),
(46, 0.45),
(47, 0.66),
(48, 0.43),
(49, 0.48),
(50, 0.453333);

-- --------------------------------------------------------

--
-- Table structure for table `rating_kecocokan`
--

CREATE TABLE `rating_kecocokan` (
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(2) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_kecocokan`
--

INSERT INTO `rating_kecocokan` (`id_alternatif`, `id_kriteria`, `nilai`) VALUES
(1, 1, 5),
(1, 2, 2),
(1, 3, 1),
(1, 4, 2),
(1, 5, 1),
(1, 6, 3),
(2, 1, 2),
(2, 2, 2),
(2, 3, 2),
(2, 4, 2),
(2, 5, 2),
(2, 6, 5),
(3, 1, 5),
(3, 2, 2),
(3, 3, 2),
(3, 4, 2),
(3, 5, 2),
(3, 6, 5),
(4, 1, 3),
(4, 2, 2),
(4, 3, 2),
(4, 4, 2),
(4, 5, 5),
(4, 6, 5),
(5, 1, 5),
(5, 2, 2),
(5, 3, 2),
(5, 4, 2),
(5, 5, 2),
(5, 6, 1),
(6, 1, 5),
(6, 2, 1),
(6, 3, 3),
(6, 4, 2),
(6, 5, 5),
(6, 6, 5),
(7, 1, 5),
(7, 2, 5),
(7, 3, 1),
(7, 4, 3),
(7, 5, 4),
(7, 6, 5),
(8, 1, 5),
(8, 2, 2),
(8, 3, 3),
(8, 4, 2),
(8, 5, 4),
(8, 6, 5),
(9, 1, 3),
(9, 2, 2),
(9, 3, 3),
(9, 4, 3),
(9, 5, 4),
(9, 6, 5),
(10, 1, 4),
(10, 2, 1),
(10, 3, 1),
(10, 4, 3),
(10, 5, 4),
(10, 6, 5),
(11, 1, 5),
(11, 2, 2),
(11, 3, 2),
(11, 4, 3),
(11, 5, 5),
(11, 6, 5),
(12, 1, 3),
(12, 2, 2),
(12, 3, 1),
(12, 4, 3),
(12, 5, 4),
(12, 6, 3),
(13, 1, 5),
(13, 2, 2),
(13, 3, 2),
(13, 4, 3),
(13, 5, 1),
(13, 6, 3),
(14, 1, 5),
(14, 2, 2),
(14, 3, 2),
(14, 4, 3),
(14, 5, 1),
(14, 6, 5),
(15, 1, 5),
(15, 2, 4),
(15, 3, 2),
(15, 4, 4),
(15, 5, 5),
(15, 6, 5),
(16, 1, 5),
(16, 2, 1),
(16, 3, 2),
(16, 4, 3),
(16, 5, 1),
(16, 6, 1),
(17, 1, 5),
(17, 2, 1),
(17, 3, 2),
(17, 4, 4),
(17, 5, 3),
(17, 6, 5),
(18, 1, 5),
(18, 2, 2),
(18, 3, 2),
(18, 4, 3),
(18, 5, 1),
(18, 6, 5),
(19, 1, 5),
(19, 2, 3),
(19, 3, 2),
(19, 4, 3),
(19, 5, 2),
(19, 6, 5),
(20, 1, 5),
(20, 2, 2),
(20, 3, 2),
(20, 4, 2),
(20, 5, 5),
(20, 6, 5),
(21, 1, 5),
(21, 2, 2),
(21, 3, 1),
(21, 4, 1),
(21, 5, 1),
(21, 6, 1),
(22, 1, 5),
(22, 2, 2),
(22, 3, 2),
(22, 4, 3),
(22, 5, 2),
(22, 6, 5),
(23, 1, 5),
(23, 2, 5),
(23, 3, 2),
(23, 4, 3),
(23, 5, 2),
(23, 6, 5),
(24, 1, 5),
(24, 2, 2),
(24, 3, 3),
(24, 4, 4),
(24, 5, 5),
(24, 6, 5),
(25, 1, 4),
(25, 2, 2),
(25, 3, 2),
(25, 4, 3),
(25, 5, 4),
(25, 6, 5),
(26, 1, 5),
(26, 2, 4),
(26, 3, 1),
(26, 4, 1),
(26, 5, 1),
(26, 6, 5),
(27, 1, 5),
(27, 2, 2),
(27, 3, 3),
(27, 4, 2),
(27, 5, 3),
(27, 6, 5),
(28, 1, 5),
(28, 2, 4),
(28, 3, 1),
(28, 4, 2),
(28, 5, 3),
(28, 6, 5),
(29, 1, 5),
(29, 2, 2),
(29, 3, 1),
(29, 4, 2),
(29, 5, 1),
(29, 6, 3),
(30, 1, 5),
(30, 2, 1),
(30, 3, 2),
(30, 4, 3),
(30, 5, 1),
(30, 6, 5),
(31, 1, 5),
(31, 2, 2),
(31, 3, 3),
(31, 4, 2),
(31, 5, 3),
(31, 6, 5),
(32, 1, 5),
(32, 2, 2),
(32, 3, 4),
(32, 4, 4),
(32, 5, 5),
(32, 6, 5),
(33, 1, 5),
(33, 2, 1),
(33, 3, 3),
(33, 4, 2),
(33, 5, 3),
(33, 6, 3),
(34, 1, 5),
(34, 2, 4),
(34, 3, 2),
(34, 4, 3),
(34, 5, 4),
(34, 6, 5),
(35, 1, 1),
(35, 2, 1),
(35, 3, 2),
(35, 4, 3),
(35, 5, 5),
(35, 6, 5),
(36, 1, 5),
(36, 2, 1),
(36, 3, 2),
(36, 4, 2),
(36, 5, 1),
(36, 6, 5),
(37, 1, 3),
(37, 2, 1),
(37, 3, 5),
(37, 4, 4),
(37, 5, 5),
(37, 6, 5),
(38, 1, 5),
(38, 2, 3),
(38, 3, 5),
(38, 4, 5),
(38, 5, 5),
(38, 6, 5),
(39, 1, 5),
(39, 2, 4),
(39, 3, 2),
(39, 4, 2),
(39, 5, 3),
(39, 6, 5),
(40, 1, 5),
(40, 2, 2),
(40, 3, 3),
(40, 4, 2),
(40, 5, 2),
(40, 6, 5),
(41, 1, 2),
(41, 2, 2),
(41, 3, 5),
(41, 4, 5),
(41, 5, 5),
(41, 6, 5),
(42, 1, 5),
(42, 2, 2),
(42, 3, 5),
(42, 4, 5),
(42, 5, 5),
(42, 6, 5),
(43, 1, 5),
(43, 2, 2),
(43, 3, 4),
(43, 4, 2),
(43, 5, 2),
(43, 6, 5),
(44, 1, 5),
(44, 2, 2),
(44, 3, 2),
(44, 4, 2),
(44, 5, 3),
(44, 6, 1),
(45, 1, 5),
(45, 2, 2),
(45, 3, 5),
(45, 4, 5),
(45, 5, 5),
(45, 6, 5),
(46, 1, 2),
(46, 2, 2),
(46, 3, 1),
(46, 4, 1),
(46, 5, 1),
(46, 6, 1),
(47, 1, 2),
(47, 2, 2),
(47, 3, 2),
(47, 4, 2),
(47, 5, 5),
(47, 6, 5),
(48, 1, 5),
(48, 2, 2),
(48, 3, 2),
(48, 4, 3),
(48, 5, 3),
(48, 6, 1),
(49, 1, 5),
(49, 2, 2),
(49, 3, 1),
(49, 4, 2),
(49, 5, 1),
(49, 6, 3),
(50, 1, 5),
(50, 2, 3),
(50, 3, 2),
(50, 4, 3),
(50, 5, 1),
(50, 6, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `rating_kecocokan`
--
ALTER TABLE `rating_kecocokan`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`);

--
-- Constraints for table `rating_kecocokan`
--
ALTER TABLE `rating_kecocokan`
  ADD CONSTRAINT `rating_kecocokan_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  ADD CONSTRAINT `rating_kecocokan_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
