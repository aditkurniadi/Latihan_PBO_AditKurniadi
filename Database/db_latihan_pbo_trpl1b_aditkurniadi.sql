-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 04:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_trpl1b_aditkurniadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` int NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(20) DEFAULT NULL,
  `kacamata_3d_id` varchar(20) DEFAULT NULL,
  `efek_gerak_fitur` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bantal_selimut_pack` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `layanan_butler` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Toy Story 5 2D', '2026-06-18 10:00:00', 2, 45000, 'Regular', 'Dolby Surround', 'A12', NULL, NULL, NULL, NULL),
(2, 'Godzilla Minus One', '2026-06-18 13:00:00', 3, 45000, 'Regular', 'THX', 'C5', NULL, NULL, NULL, NULL),
(3, 'Dune: Part Two', '2026-06-19 15:30:00', 1, 50000, 'Regular', 'Dolby Atmos', 'E8', NULL, NULL, NULL, NULL),
(4, 'Inside Out 2', '2026-06-19 16:00:00', 4, 50000, 'Regular', 'Dolby Surround', 'F1', NULL, NULL, NULL, NULL),
(5, 'Despicable Me 4', '2026-06-20 11:00:00', 2, 50000, 'Regular', 'Stereo', 'H10', NULL, NULL, NULL, NULL),
(6, 'Kingdom of the Planet of the Apes', '2026-06-20 14:15:00', 2, 45000, 'Regular', 'THX', 'B4', NULL, NULL, NULL, NULL),
(7, 'Deadpool & Wolverine', '2026-06-21 19:00:00', 5, 50000, 'Regular', 'Dolby Atmos', 'J14', NULL, NULL, NULL, NULL),
(8, 'Avatar 3', '2026-06-18 19:30:00', 2, 75000, 'IMAX', NULL, NULL, 'IMX-GLS-001', 'D-BOX Motion', NULL, NULL),
(9, 'Oppenheimer', '2026-06-19 20:00:00', 1, 75000, 'IMAX', NULL, NULL, 'IMX-GLS-045', 'Tanpa Efek', NULL, NULL),
(10, 'Avengers: Secret Wars', '2026-06-20 18:00:00', 4, 85000, 'IMAX', NULL, NULL, 'IMX-GLS-088', '4DX Motion', NULL, NULL),
(11, 'Dune: Part Two', '2026-06-20 21:00:00', 2, 80000, 'IMAX', NULL, NULL, 'IMX-GLS-023', 'D-BOX Motion', NULL, NULL),
(12, 'Godzilla x Kong: The New Empire', '2026-06-21 15:00:00', 3, 75000, 'IMAX', NULL, NULL, 'IMX-GLS-112', '4DX Motion', NULL, NULL),
(13, 'Spider-Man: Beyond the Spider-Verse', '2026-06-21 17:30:00', 2, 80000, 'IMAX', NULL, NULL, 'IMX-GLS-099', 'D-BOX Motion', NULL, NULL),
(14, 'Transformers One', '2026-06-22 13:00:00', 4, 75000, 'IMAX', NULL, NULL, 'IMX-GLS-150', 'Tanpa Efek', NULL, NULL),
(15, 'Interstellar', '2026-06-18 21:00:00', 2, 150000, 'Velvet', NULL, NULL, NULL, NULL, 'Premium Bed Set', 'VIP Butler John'),
(16, 'The Batman Part II', '2026-06-19 19:00:00', 2, 150000, 'Velvet', NULL, NULL, NULL, NULL, 'Standard Bed Set', 'Butler Sarah'),
(17, 'Joker: Folie a Deux', '2026-06-20 20:30:00', 2, 175000, 'Velvet', NULL, NULL, NULL, NULL, 'Premium Bed Set', 'Butler Mike'),
(18, 'Dune: Part Two', '2026-06-21 18:00:00', 4, 150000, 'Velvet', NULL, NULL, NULL, NULL, 'Premium Bed Set', 'VIP Butler Anna'),
(19, 'Furiosa: A Mad Max Saga', '2026-06-22 19:15:00', 2, 160000, 'Velvet', NULL, NULL, NULL, NULL, 'Standard Bed Set', 'Butler David'),
(20, 'Deadpool & Wolverine', '2026-06-23 20:00:00', 2, 175000, 'Velvet', NULL, NULL, NULL, NULL, 'Premium Bed Set', 'VIP Butler Lisa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
