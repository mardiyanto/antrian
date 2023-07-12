-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Jul 2023 pada 14.33
-- Versi server: 10.3.34-MariaDB-0ubuntu0.20.04.1-log
-- Versi PHP: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `nama_instansi` varchar(60) NOT NULL DEFAULT '',
  `alamat_instansi` varchar(150) DEFAULT NULL,
  `kabupaten` varchar(30) DEFAULT NULL,
  `propinsi` varchar(30) DEFAULT NULL,
  `kontak` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aktifkan` enum('Yes','No') NOT NULL,
  `kode_ppk` varchar(15) DEFAULT NULL,
  `kode_ppkinhealth` varchar(15) DEFAULT NULL,
  `kode_ppkkemenkes` varchar(15) DEFAULT NULL,
  `wallpaper` longblob DEFAULT NULL,
  `logo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`nama_instansi`, `alamat_instansi`, `kabupaten`, `propinsi`, `kontak`, `email`, `aktifkan`, `kode_ppk`, `kode_ppkinhealth`, `kode_ppkkemenkes`, `wallpaper`, `logo`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`nama_instansi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;