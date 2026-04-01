-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2026 pada 17.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trrental1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `armada`
--

CREATE TABLE `armada` (
  `id_armada` int(11) NOT NULL,
  `nama_armada` varchar(100) NOT NULL,
  `merk_armada` varchar(100) DEFAULT NULL,
  `tipe_armada` varchar(50) DEFAULT NULL,
  `plat_armada` varchar(20) DEFAULT NULL,
  `tahun_armada` int(11) DEFAULT NULL,
  `transmisi` varchar(20) DEFAULT NULL,
  `harga_sewa_perhari` int(11) DEFAULT NULL,
  `status_armada` varchar(20) DEFAULT NULL,
  `gambar_armada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_armada` int(11) NOT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jumlah_hari` int(11) DEFAULT NULL,
  `metode_pengambilan` varchar(50) DEFAULT NULL,
  `titik_jemput` text DEFAULT NULL,
  `alamat_pengantaran` text DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `status_booking` varchar(50) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto_sim` varchar(255) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_tiket` varchar(255) DEFAULT NULL,
  `foto_hotel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cust`
--

CREATE TABLE `cust` (
  `id_cust` int(11) NOT NULL,
  `nama_cust` varchar(100) NOT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `country_origin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `armada`
--
ALTER TABLE `armada`
  ADD PRIMARY KEY (`id_armada`),
  ADD UNIQUE KEY `plat_armada` (`plat_armada`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_cust` (`id_cust`),
  ADD KEY `id_armada` (`id_armada`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indeks untuk tabel `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `armada`
--
ALTER TABLE `armada`
  MODIFY `id_armada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cust`
--
ALTER TABLE `cust`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_cust`) REFERENCES `cust` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_armada`) REFERENCES `armada` (`id_armada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
