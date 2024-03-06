-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2024 pada 03.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) DEFAULT NULL,
  `tahun_terbit` date DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `sampul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `tahun_terbit`, `pengarang`, `penerbit`, `sampul`) VALUES
(1, 'Marmut merah jambu', '2022-01-27', 'sayang', 'kamu', '16.jpg'),
(2, 'bnfdg', '2024-02-01', 'fdb', 'fbd', '15.jpg'),
(6, 'Indosiar', '2024-03-02', 'gw', 'elu', '11.jpg'),
(7, 'indosiar', '2024-03-02', 'sasa', 'sese', '17.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Horror'),
(2, 'Fantasi'),
(4, 'Misteri'),
(5, 'Romansa'),
(6, 'Sci-Fi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_harus_kembali` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` bigint(255) DEFAULT NULL,
  `Ulasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_user`, `id_buku`, `id_kategori`, `tgl_pinjam`, `tgl_harus_kembali`, `tgl_kembali`, `denda`, `Ulasan`) VALUES
(13, 9, 1, 1, '2024-02-25', '2024-02-27', '2024-02-29', 4000, NULL),
(16, 9, 1, 3, '2024-02-20', '2024-02-29', NULL, NULL, NULL),
(18, 9, 1, 4, '2024-03-01', '2024-03-02', '2024-03-02', 0, NULL),
(19, 11, 1, 5, '2024-03-01', '2024-03-02', '2024-03-01', 2000, NULL),
(20, 12, 1, 2, '2024-03-26', '2024-03-28', '2024-03-02', 52000, NULL),
(21, 12, 1, 5, '2024-03-02', '2024-03-01', '2024-03-02', 2000, NULL),
(22, 9, 6, 6, '2024-03-01', '2024-03-02', '2024-03-02', 0, NULL),
(23, 9, 1, 5, '2024-03-02', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','petugas','anggota') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `kelas`, `jurusan`, `jk`, `alamat`, `foto`, `username`, `password`, `level`, `status`) VALUES
(1, 'Dimas', NULL, NULL, 'Laki-Laki', 'rumah', NULL, 'dimas', '1234', 'admin', 'Aktif'),
(2, 'agus', 'Kelas', 'Jurusan', 'Laki-Laki', 'Curdeng', '19.jpg', 'agus', '1234', 'petugas', 'Tidak Aktif'),
(3, 'Dimas2', NULL, NULL, 'Laki-Laki', '', NULL, 'dimas2', '1234', 'anggota', 'Aktif'),
(4, 'budi', 'X', 'RPL', 'Laki-Laki', 'Rumah', NULL, 'budi', 'budi', 'anggota', 'Aktif'),
(5, 'Mutiara', 'XII', 'RPL', 'Perempuan', 'Cigombong', NULL, 'muti', '1234', 'anggota', 'Aktif'),
(9, 's', 'X', 'TKJ', 'Laki-Laki', 's', '3.jpg', 's', 's', 'anggota', 'Aktif'),
(10, 'ggs', 'X', 'TKJ', 'Laki-Laki', 'ggs', '5.jpg', 'ggs', 'ggs', 'anggota', 'Aktif'),
(11, 'yanti', 'XI', 'FKK', 'Perempuan', 'Sini', '8.jpg', 'yanti', '1234', 'anggota', 'Aktif'),
(12, 'Bagas', 'XII', 'RPL', 'Laki-Laki', 'Sini', '10.jpg', 'bagas', '123', 'anggota', 'Aktif'),
(13, 'minji', 'XI', 'FKK', 'Laki-Laki', 'Sini', '18.jpg', 'minji', '1234', 'anggota', 'Tidak Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_buku` (`id_buku`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
