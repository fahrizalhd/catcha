-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2019 pada 13.31
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fashion`
--

CREATE TABLE `fashion` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pencipta` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fashion`
--

INSERT INTO `fashion` (`id`, `nama`, `pencipta`, `keterangan`, `gambar`) VALUES
(2, 'Ushilla Style', 'Azilla Zee', 'cocok buat kamu', 0x557368696c65205374796c652e6a7067),
(5, 'Uxbestion Style', 'Yuniar', 'Cocok buat kamu', 0x557862657374696f6e205374796c652e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
