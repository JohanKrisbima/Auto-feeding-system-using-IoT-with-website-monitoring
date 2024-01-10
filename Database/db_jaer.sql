-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2023 pada 11.23
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jaer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_histori`
--

CREATE TABLE `table_histori` (
  `id_histori` int(11) NOT NULL,
  `jml_pakan` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table_histori`
--

INSERT INTO `table_histori` (`id_histori`, `jml_pakan`, `waktu`) VALUES
(1, 'BANYAK', '2023-12-10 14:10:55'),
(2, 'SEDANG', '2023-12-13 05:06:12'),
(3, 'SEDANG', '2023-12-13 05:26:14'),
(4, 'SEDANG', '2023-12-13 06:05:13'),
(5, 'SEDANG', '2023-12-13 06:23:10'),
(6, 'SEDANG', '2023-12-13 06:27:14'),
(7, 'SEDANG', '2023-12-13 09:02:20'),
(8, 'SEDANG', '2023-12-13 09:17:18'),
(9, 'SEDANG', '2023-12-13 10:26:19'),
(10, 'SEDANG', '2023-12-13 10:37:22'),
(11, 'SEDANG', '2023-12-13 10:47:21'),
(12, '', '2023-12-13 13:58:16'),
(13, 'BANYAK', '2023-12-13 14:14:28'),
(14, 'BANYAK', '2023-12-14 07:42:34'),
(15, 'BANYAK', '2023-12-14 07:52:23'),
(16, 'BANYAK', '2023-12-14 08:02:33'),
(17, 'SEDIKIT', '2023-12-14 08:17:20'),
(18, 'SEDIKIT', '2023-12-14 08:22:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_sensor`
--

CREATE TABLE `table_sensor` (
  `id_sensor` int(11) NOT NULL,
  `ph` float NOT NULL,
  `turbidity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table_sensor`
--

INSERT INTO `table_sensor` (`id_sensor`, `ph`, `turbidity`) VALUES
(4168, 3.66, 0),
(4169, 3.06, 0),
(4170, 2.73, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_histori`
--
ALTER TABLE `table_histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indeks untuk tabel `table_sensor`
--
ALTER TABLE `table_sensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_histori`
--
ALTER TABLE `table_histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `table_sensor`
--
ALTER TABLE `table_sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
