-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 13.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `kd_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `alamat_admin` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`kd_admin`, `nama_admin`, `alamat_admin`, `no_hp`, `username`, `password`, `foto_admin`) VALUES
(1, 'Jelal ABD', 'Paleran kidul jember', '081223234543', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_detail_peminjaman`
--

CREATE TABLE `tabel_detail_peminjaman` (
  `kd_detail_peminjaman` varchar(15) NOT NULL,
  `kd_peminjaman` varchar(15) NOT NULL,
  `peminjaman_ke` int(5) DEFAULT NULL,
  `nominal_pembayaran` varchar(15) NOT NULL,
  `tgl_pembayaran` varchar(10) NOT NULL,
  `durasi_pembayaran` varchar(10) DEFAULT NULL,
  `keterangan_status` varchar(25) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bukti_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis`
--

CREATE TABLE `tabel_jenis` (
  `kd_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jenis`
--

INSERT INTO `tabel_jenis` (`kd_jenis`, `nama_jenis`) VALUES
(1, 'Rumah'),
(2, 'Tanah'),
(3, 'Ruko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_lapak`
--

CREATE TABLE `tabel_lapak` (
  `kd_lapak` varchar(20) NOT NULL,
  `kd_jenis` int(11) NOT NULL,
  `kd_pengguna` int(11) NOT NULL,
  `Judul_postingan` varchar(50) NOT NULL,
  `harga_sewa_pertahun` varchar(30) NOT NULL,
  `harga_sewa_perbulan` varchar(10) NOT NULL,
  `alamat_lokasi` varchar(200) NOT NULL,
  `luas_tanah` varchar(20) NOT NULL,
  `luas_bangunan` varchar(20) DEFAULT NULL,
  `jumlah_kamar_mandi` int(11) DEFAULT NULL,
  `jumlah_kamar_tidur` int(11) DEFAULT NULL,
  `sumber_air` varchar(20) DEFAULT NULL,
  `daya_listrik` int(11) DEFAULT NULL,
  `foto1` varchar(30) NOT NULL,
  `foto2` varchar(30) NOT NULL,
  `foto3` varchar(30) NOT NULL,
  `foto4` varchar(30) NOT NULL,
  `foto5` varchar(30) NOT NULL,
  `Deskripsi` varchar(300) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah_lantai` varchar(2) DEFAULT NULL,
  `surat_PBB` varchar(30) NOT NULL,
  `surat_kepemilikan` varchar(30) NOT NULL,
  `status_postingan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_lapak`
--

INSERT INTO `tabel_lapak` (`kd_lapak`, `kd_jenis`, `kd_pengguna`, `Judul_postingan`, `harga_sewa_pertahun`, `harga_sewa_perbulan`, `alamat_lokasi`, `luas_tanah`, `luas_bangunan`, `jumlah_kamar_mandi`, `jumlah_kamar_tidur`, `sumber_air`, `daya_listrik`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `Deskripsi`, `tanggal`, `jumlah_lantai`, `surat_PBB`, `surat_kepemilikan`, `status_postingan`) VALUES
('0307200001', 2, 6, 'Disewakan Rumah dekat dengan kampus UNEJ', 'Rp. 7.000.000', '0', 'Jl kalimantan no 12', '1200 M2', '900 M2', 1, 3, 'PDAM', 900, 'item-200703-e55f063b22.jpg', 'item-200703-e55f063b22.jpg', 'item-200703-e55f063b22.jpg', 'item-200703-e55f063b22.jpg', 'item-200703-e55f063b22.jpg', 'Disewakan rumah lokasi strategis harga murah, lungkungan aman', '2020-07-03 10:06:10', '1', 'item-200703-e55f063b22.jpg', 'item-200703-e55f063b22.jpg', ''),
('0307200002', 1, 6, 'Disewakan Tanah Bekas tanaman Tebu', 'Rp. 12.000.000', '0', 'Desa balung tutul dekat balai desa', '2000 M2', NULL, NULL, NULL, NULL, NULL, 'item-200703-1bbfce46e1.jpg', 'item-200703-1bbfce46e1.jpg', 'item-200703-1bbfce46e1.jpg', 'item-200703-1bbfce46e1.jpg', 'item-200703-1bbfce46e1.jpg', 'Cocok untuk menanam tanaman yang tidak memerlukan air banyak', '2020-07-03 10:11:01', '0', 'item-200703-1bbfce46e1.jpg', 'item-200703-1bbfce46e1.jpg', ''),
('0307200003', 2, 7, 'Disewakan Rumah di desa Curah Malang', 'Rp. 8.000.000', '0', 'Desa Curah Malang no 11 Jember', '2000 M2', '900 M2', 1, 3, 'PDAM', 900, 'item-200703-b837ba7aee.jpg', 'item-200703-b837ba7aee.jpg', 'item-200703-b837ba7aee.jpg', 'item-200703-b837ba7aee.jpg', 'item-200703-b837ba7aee.jpg', 'Rumah Luas Harga Murah', '2020-07-03 10:22:39', '1', 'item-200703-b837ba7aee.jpg', 'item-200703-b837ba7aee.jpg', ''),
('0307200004', 1, 7, 'Disewakan Ruko Lokasi Strategis', 'Rp. 25.000.000', '0', 'Jl National no 12 Rambipuji Jember', '12000 M2', '1000 M2', 1, 1, 'Sumur Bor', 1300, 'item-200703-a3b94a2060.jpg', 'item-200703-a3b94a2060.jpg', 'item-200703-a3b94a2060.jpg', 'item-200703-a3b94a2060.jpg', 'item-200703-a3b94a2060.jpg', 'Disewakan Ruko Lokasi Sangat Strategis dengan dengan alun alun rambipuji', '2020-07-03 10:28:52', '0', 'item-200703-a3b94a2060.jpg', 'item-200703-a3b94a2060.jpg', ''),
('0307200005', 1, 7, 'Disewakan Ruko Murah', 'Rp. 20.000.000', '0', 'Jl Harsoyo Mangli Jember', '12000 M2', '1000 M2', 1, 1, 'PDAM', 900, 'item-200703-a37272df94.jpg', 'item-200703-a37272df94.jpg', 'item-200703-a37272df94.jpg', 'item-200703-a37272df94.jpg', 'item-200703-a37272df94.jpg', 'Disewakan Ruko Murah bangunan baru selesai di renovasi ', '2020-07-03 10:36:06', '0', 'item-200703-a37272df94.jpg', 'item-200703-a37272df94.jpg', ''),
('0307200006', 1, 8, 'Disewakan Ruko Lokasi Dekat Sekolah', 'Rp. 21.000.000', '0', 'Jl Batu Raden 1 Jembe', '1000 M2', '800 m2', 1, 1, 'PDAM', 900, 'item-200703-aad36a3372.jpg', 'item-200703-aad36a3372.jpg', 'item-200703-aad36a3372.jpg', 'item-200703-aad36a3372.jpg', 'item-200703-aad36a3372.jpg', 'Disewakan Ruko Dekat dengan Kampus Polije', '2020-07-03 10:45:05', '0', 'item-200703-aad36a3372.jpg', 'item-200703-aad36a3372.jpg', ''),
('0307200007', 1, 8, 'Disewakan Tanah Bekas Tanam Padi', 'Rp. 10.000.000', '0', 'Jl Ajung Krasak Jember', '900 M2', NULL, NULL, NULL, NULL, NULL, 'item-200703-da2c1a547a.jpg', 'item-200703-da2c1a547a.jpg', 'item-200703-da2c1a547a.jpg', 'item-200703-da2c1a547a.jpg', 'item-200703-da2c1a547a.jpg', 'Sawah subur Sudah 3 kali panen padi', '2020-07-03 10:47:39', '0', 'item-200703-da2c1a547a.jpg', 'item-200703-da2c1a547a.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_peminjaman`
--

CREATE TABLE `tabel_peminjaman` (
  `kd_peminjaman` varchar(15) NOT NULL,
  `kd_lapak` varchar(20) NOT NULL,
  `kd_pengguna` int(11) NOT NULL,
  `lama_waktu_penyewaan` varchar(20) NOT NULL,
  `tgl_awal_penyewaan` varchar(10) NOT NULL,
  `tgl_penyewaan_berakhir` varchar(10) NOT NULL,
  `tgl_pembayaran_terakhir` varchar(10) DEFAULT NULL,
  `tanggal_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_penyewaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengguna`
--

CREATE TABLE `tabel_pengguna` (
  `kd_pengguna` int(11) NOT NULL,
  `NIK_pengguna` varchar(16) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `alamat_pengguna` varchar(200) NOT NULL,
  `no_pengguna` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto_ktp` varchar(15) NOT NULL,
  `foto_diri_dan_ktp` varchar(15) NOT NULL,
  `foto_profil` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('pemilik','penyewa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pengguna`
--

INSERT INTO `tabel_pengguna` (`kd_pengguna`, `NIK_pengguna`, `nama_pengguna`, `alamat_pengguna`, `no_pengguna`, `email`, `foto_ktp`, `foto_diri_dan_ktp`, `foto_profil`, `username`, `password`, `role`) VALUES
(1, '3332221113332232', 'Harisman Sihombing', 'Medan', '081888777888666', 'haris@gmail.com', '', '', '', 'haris', 'c4ca4238a0b923820dcc509a6f75849b', 'pemilik'),
(4, '3334234325346432', 'Muhammad Rifqi Firmansyah', 'Perumahan Griya Mangli', '08983050435', 'frifqi11@gmail.com', 'default.jpg', 'default.jpg', 'default.jpg', 'rifki', 'c4ca4238a0b923820dcc509a6f75849b 	', 'penyewa'),
(5, '3334354876899756', 'agus nurhadi', 'Jl merak no 3 Surabaya', '081666777876', 'agus@hotmail.com', 'default.jpg', 'default.jpg', 'default.jpg', 'agus', 'e10adc3949ba59abbe56e057f20f883e', 'penyewa'),
(6, '3338767486374876', 'salman nurcahyo', 'Perumahan Bukit Permai No 34', '082675738647', 'salaman3@gmail.com', 'default.jpg', 'default.jpg', 'default.jpg', 'salman', 'e10adc3949ba59abbe56e057f20f883e', 'pemilik'),
(7, '3334593675647654', 'indah astutik', 'Jl bedadung permai no 345', '089789789123', 'indah33@yahoo.com', 'default.jpg', 'default.jpg', 'default.jpg', 'indah', 'e10adc3949ba59abbe56e057f20f883e', 'pemilik'),
(8, '3343235545234353', 'putri nadifa', 'jl merpati 43 Malang', '081234234876', 'putri@hotmail.com', 'default.jpg', 'default.jpg', 'default.jpg', 'putri', 'e10adc3949ba59abbe56e057f20f883e', 'pemilik'),
(9, '3336463456465645', 'slamet nurhadi', 'jl rengasdengklok utara 34 Bandung', '083123874644', 'slamet@gmail.com', 'default.jpg', 'default.jpg', 'default.jpg', 'slamet', 'e10adc3949ba59abbe56e057f20f883e', 'pemilik'),
(10, '3336455654756568', 'carolin puspita', 'perumahan dermaga indah no 54 Banyuwangi', '081243456890', 'puspita2@gmail.com', 'default.jpg', 'default.jpg', 'default.jpg', 'carolin', 'e10adc3949ba59abbe56e057f20f883e', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indeks untuk tabel `tabel_detail_peminjaman`
--
ALTER TABLE `tabel_detail_peminjaman`
  ADD PRIMARY KEY (`kd_detail_peminjaman`),
  ADD KEY `kd_peminjaman` (`kd_peminjaman`);

--
-- Indeks untuk tabel `tabel_jenis`
--
ALTER TABLE `tabel_jenis`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indeks untuk tabel `tabel_lapak`
--
ALTER TABLE `tabel_lapak`
  ADD PRIMARY KEY (`kd_lapak`),
  ADD KEY `kd_jenis` (`kd_jenis`),
  ADD KEY `kd_pengguna` (`kd_pengguna`);

--
-- Indeks untuk tabel `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD PRIMARY KEY (`kd_peminjaman`),
  ADD KEY `kd_pengguna` (`kd_pengguna`),
  ADD KEY `nik_penyewa` (`kd_lapak`) USING BTREE;

--
-- Indeks untuk tabel `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  ADD PRIMARY KEY (`kd_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_jenis`
--
ALTER TABLE `tabel_jenis`
  MODIFY `kd_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  MODIFY `kd_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_detail_peminjaman`
--
ALTER TABLE `tabel_detail_peminjaman`
  ADD CONSTRAINT `tabel_detail_peminjaman_ibfk_1` FOREIGN KEY (`kd_peminjaman`) REFERENCES `tabel_peminjaman` (`kd_peminjaman`);

--
-- Ketidakleluasaan untuk tabel `tabel_lapak`
--
ALTER TABLE `tabel_lapak`
  ADD CONSTRAINT `tabel_lapak_ibfk_2` FOREIGN KEY (`kd_jenis`) REFERENCES `tabel_jenis` (`kd_jenis`),
  ADD CONSTRAINT `tabel_lapak_ibfk_3` FOREIGN KEY (`kd_pengguna`) REFERENCES `tabel_pengguna` (`kd_pengguna`);

--
-- Ketidakleluasaan untuk tabel `tabel_peminjaman`
--
ALTER TABLE `tabel_peminjaman`
  ADD CONSTRAINT `tabel_peminjaman_ibfk_1` FOREIGN KEY (`kd_lapak`) REFERENCES `tabel_lapak` (`kd_lapak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
