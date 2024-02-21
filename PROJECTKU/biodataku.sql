-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2024 pada 15.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodataku`
--

CREATE TABLE `biodataku` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `biodataku`
--

INSERT INTO `biodataku` (`id`, `nama`, `jurusan`, `kelas`, `ttl`, `gender`, `no_hp`, `agama`, `alamat`) VALUES
(9, 'Sella selpiyani', 'SIJA', '', '8900-09-08', 'perempuan', '090089756', 'Islam', ' .klljhyy'),
(10, 'Sella selpiyani', 'SIJA', '', '0000-00-00', 'perempuan', '09989785', 'Islam', ' lkjyt'),
(11, 'Sella selpiyani', 'SIJA', '', '3535-03-31', 'perempuan', '09989785', 'Islam', ' WGX'),
(12, 'sella', 'SIJA', '', '2007-12-01', 'laki-laki', '09989785', 'Islam', 'Alamat ya'),
(13, 'Sella selpiyani', 'SIJA', '12', '0007-12-12', 'perempuan', '09989785', 'Islam', 'y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodataku`
--
ALTER TABLE `biodataku`
  ADD PRIMARY KEY (`id`) USING HASH;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodataku`
--
ALTER TABLE `biodataku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
