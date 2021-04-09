-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2021 pada 19.00
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_alif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `email`, `password`, `level`) VALUES
(1, 'Dadang Subur', 'pakyu@gmail.com', 'admin123', 'admin'),
(2, 'Welly Summon', 'cabra123@gmail.com', 'petugas123', 'petugas'),
(3, 'Dewi Sagita', 'bundew@gmail.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `email`, `password`, `nama`, `kelas`, `jurusan`, `nisn`, `nis`, `alamat`, `telp`, `level`) VALUES
(12, 'alifharyantosss@gmail.com', 'alif123', 'Alif Haryanto Sutendar', 'XII', 'RPL', '45454545', '52542552', 'Jl. Mekar Sari No.11', '089637135598', 'siswa'),
(16, '1710andrearuaa@gmail.com', 'andrea123', 'Andrea Ruaa Brata', 'XI', 'RPL', '0028236714', '47545645634563', 'Komplek GBI blok C7 No.3', '081320207466', 'siswa'),
(19, 'asepkarbu@gmail.com', 'asep123', 'Asep', 'XII', 'TKJ', '565454545', '4545454545', 'ASDASDAD', '0685214878', 'siswa'),
(20, 'bebebrexha@gmail.com', 'bebe123', 'Bebe Rexha', 'X', 'RPL', '565164164', '68984246879', 'Los Angeles, California Jammerson St', '081556982585', 'siswa'),
(21, 'dojcat@gmail.com', 'doja123', 'Doja Cat', 'XII', 'AP', '54654646', '546546465', 'Miami, Fl', '+15545454545', 'siswa'),
(23, 'anamar@gmail.com', 'anne123', 'Anne Marie', 'XI', 'AP', '0028236714', '47545645634563', 'St Johnson, Detroit', '+5545454545', 'siswa'),
(24, 'camcab@gmail.com', 'camila123', 'Camila Cabello', 'X', 'AP', '565464654', '546548454', 'Mexico', '+5445451215484', 'siswa'),
(25, 'udpisco@gamil.com', 'udin123', 'Udin Piscok', 'XI', 'TKJ', '465465465441', '546546546546', 'Kebon sirih', '+62895554545445', 'siswa'),
(26, 'nengko@gmail.com', 'neneng123', 'Neneng Konaah', 'X', 'TKJ', '21412542132414', '12412312312312', 'Babakan sari', '+628745454558585', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
