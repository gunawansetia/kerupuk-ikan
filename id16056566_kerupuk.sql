-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Feb 2021 pada 01.55
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16056566_kerupuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `variasi` varchar(120) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id_barang`, `nama_barang`, `keterangan`, `variasi`, `harga`, `stok`, `gambar`) VALUES
(8, 'Kerupuk Ikan Tenggiri', 'Kerupuk Ikan Tenggiri Enak', 'Manis Pedas', 12000, 8, 'kerupuk_ikan_tenggiri1.jpg'),
(9, 'Kerupuk Ikan Kedua', 'Rasanya seperti kerupuk', 'Manis', 15000, -9, 'kerupuk_ikan21.jpg'),
(10, 'Kerupuk Ikan 2', 'Rasanya masih seperti kerupuk', 'Pedas Sedikit', 20000, 7, 'kerupuk_ikan41.jpg'),
(11, 'Kerupuk Ikan 3', 'Seperti kerupuk woi', 'Original', 10000, 18, 'kerupuk_ikan11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nomor_hp` varchar(40) NOT NULL,
  `jasa_kirim` varchar(40) NOT NULL,
  `bank` varchar(40) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama`, `alamat`, `nomor_hp`, `jasa_kirim`, `bank`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Gunawan', 'Jalan', '', '', '', '2021-01-19 10:34:28', '2021-01-20 10:34:28'),
(4, 'Gunawan', 'Jalan di sana', '4324324', 'JNE', 'BCA - XXXXXXXXX', '2021-02-01 12:37:27', '2021-02-02 12:37:27'),
(5, 'twer', 'twtw', 'twtwetw', 'TIKI', 'BCA - XXXXXXXXX', '2021-02-01 20:54:46', '2021-02-02 20:54:46'),
(6, 'Gunawan', 'Rumbai', '4344', 'JNE', 'BCA - XXXXXXXXX', '2021-02-01 20:59:39', '2021-02-02 20:59:39'),
(7, 'Darmila', 'Pekanbaru', '081234567890', 'Pos Indonesia', 'BNI - XXXXXXXXX', '2021-02-01 21:03:24', '2021-02-02 21:03:24'),
(8, 'd', 'd', 'd', 'JNE', 'BCA - XXXXXXXXX', '2021-02-01 21:27:02', '2021-02-02 21:27:02'),
(9, 'd', 'd', 'd', 'JNE', 'BCA - XXXXXXXXX', '2021-02-01 21:28:05', '2021-02-02 21:28:05'),
(10, 'd', 'd', 'd', 'JNE', 'BCA - XXXXXXXXX', '2021-02-01 21:28:25', '2021-02-02 21:28:25'),
(11, 'twer', 'twtw', 'twtwetw', 'TIKI', 'BCA - XXXXXXXXX', '2021-02-01 21:29:41', '2021-02-02 21:29:41'),
(12, 'gunwa', 'rumbai', '082311984214', 'Pos Indonesia', 'MANDIRI - XXXXXXX', '2021-02-02 09:13:37', '2021-02-03 09:13:37'),
(13, 'nn', 'nn', '66', 'TIKI', 'MANDIRI - XXXXXXX', '2021-02-02 11:40:28', '2021-02-03 11:40:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin', '123', 1),
(2, 'charles', 'charles', '123', 2),
(3, 'Gunawan', 'Gunawan', '123', 2),
(4, 'Bambang', 'bambang', '123', 2),
(5, 'auf', 'aurf', '123', 2),
(6, 'BADRI YUSUF', 'badriyusuf18', '1807', 2),
(7, 'mila', 'darmila', 'darmila', 2),
(8, 'Z', 'z', '123', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`) VALUES
(1, 1, 9, 'Kerupuk Ikan Kedua', 2, 15000),
(2, 1, 8, 'Kerupuk Ikan Tenggiri', 1, 12000),
(3, 1, 10, 'Kerupuk Ikan 2', 1, 20000),
(4, 1, 11, 'Kerupuk Ikan 3', 2, 10000),
(5, 2, 10, 'Kerupuk Ikan 2', 2, 20000),
(6, 3, 9, 'Kerupuk Ikan Kedua', 1, 15000),
(7, 4, 9, 'Kerupuk Ikan Kedua', 1, 15000),
(8, 10, 10, 'Kerupuk Ikan 2', 1, 20000),
(9, 11, 9, 'Kerupuk Ikan Kedua', 1, 15000),
(10, 11, 11, 'Kerupuk Ikan 3', 2, 10000),
(11, 12, 8, 'Kerupuk Ikan Tenggiri', 1, 12000),
(12, 12, 9, 'Kerupuk Ikan Kedua', 10, 15000),
(13, 13, 8, 'Kerupuk Ikan Tenggiri', 1, 12000),
(14, 13, 9, 'Kerupuk Ikan Kedua', 1, 15000);

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE barangs SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
    END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
