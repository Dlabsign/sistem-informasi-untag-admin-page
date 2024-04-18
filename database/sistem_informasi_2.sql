-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2024 pada 04.58
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
-- Database: `sistem_informasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(5) NOT NULL,
  `tanggal_publish` date DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `judul_berita` varchar(200) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `status_artikel` varchar(20) DEFAULT NULL,
  `gambar` text NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `tanggal_publish`, `penulis`, `judul_berita`, `isi_berita`, `status_artikel`, `gambar`, `jam`) VALUES
(37, '2024-04-07', 'Heru Yustanto', 'Pintu Air Katulampa Jebol, Bima Arya Pantau Pembangunan Tanggul Darurat', 'Jebolnya satu pintu air di Bendung Katulampa menyebabkan pasokan air baku menuju Istana Bogor dan Kebun Raya Bogor susut hingga lebih dari 60%.\r\n\r\nKondisi ini mengancam pengairan untuk taman dan kolam di Istana Bogor. Mengantisipasi kondisi ini petugas Bendung Katulampa bersama BPBD Kota Bogor membangun tanggul darurat untuk memulihkan pasokan air menuju obyek vital tersebut mulai Minggu (6/4/2024) siang. \r\n\r\nPerbaikan pintu air Bendung Katulampa yang jebol ini dilakukan dengan memasang papan bambu selebar empat meter dengan tinggi sekitar dua meter di lokasi pintu pengurasan nomor dua yang jebol.\r\n\r\nPerbaikan dipantau langsung Wali Kota Bogor Bima Arya Sugiarto untuk memastikan kondisi pasokan air menuju Istana Bogor kembali pulih.', '', 'pintu_air_jebol.jpg', '00:00:00'),
(42, '1515-05-23', 'Hendro Dahlan Situmorang', 'Sidang Sengketa Pilpres Selesai, MK: Para Pihak Diminta Serahkan Hasil Kesimpulan', 'Juru Bicara Mahkamah Konstitusi (MK) Fajar Laksono menegaskan sidang pembuktian perselisihan hasil pemilihan umum (PHPU) atau sengketa Pilpres 2024 telah selesai.\r\n\r\n\"Sidang PHPU pilpres terakhir kemarin, sudah ditetapkan dan selesai. Dalam sidang itu disampaikan kepada seluruh pihak, meski tidak diatur dalam hukum acara agar para pihak diminta untuk menyerahkan kesimpulan,\" katanya kepada Beritasatu.com di Gedung Mahkamah Konstitusi Jakarta, Minggu (7/4/2024).\r\n\r\nMenurutnya, penyerahan kesimpulan seluruh proses persidangan sengketa Pilpres 2024 di MK oleh para pihak harus diserahkan hingga batas waktu penyerahannya 16 April 2024 mendatang dan paling lambat pukul 16.00 WIB.\r\n\r\n', '', 'mudik_artikel_kompas.jpg', '09:04:56'),
(43, '2024-04-08', 'Kharisma Rizkika Rahmawati ', 'Apa Itu Gerhana Matahari Total yang Terjadi pada Senin 8 April 2024?', 'Gerhana matahari total akan melewati beberapa negara pada Senin (8/4/2024), yang dapat disaksikan di berbagai belahan dunia.\r\n\r\nDilansir laman resmi NASA, gerhana matahari merupakan fenomena yang terjadi ketika bulan melintas di depan matahari, menghalangi permukaan yang terang dan menampakkan jejak-jejak atmosfer matahari.\r\n\r\nKesejajarannya harus tepat, dan hal ini menimbulkan jalur totalitas yang sempit, sehingga gerhana total dapat dilihat. Gerhana pada 2024 ini bisa jadi akan lebih menarik karena adanya perbedaan jalur, waktu, dan penelitian ilmiah.\r\n\r\nPara pengamat melihat jalur gerhana matahari 2024 lebih totalitas ditandai dengan posisi bulan yang benar-benar menghalangi matahari, memperlihatkan atmosfer luar bintang. Saat bulan mengorbit Bumi, jaraknya dari planet ini cukup berbeda-beda.\r\n\r\n', '', 'Kharisma Rizkika  Kharisma Rizkika Rahmawati .jpg', '14:10:48'),
(44, '2024-04-08', 'Whisnu Bagus Prasetyo', 'Sandiaga: Pemudik dan Wisatawan Diminta Lakukan Penyesuaian karena Perbaikan Tol Bocimi', 'Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Uno mengatakan pemudik dan wisatawan yang menuju Sukabumi agar melakukan penyesuaian perjalanan karena Tol Bogor-Ciawi-Sukabumi atau Tol Bocimi masih dalam perbaikan.\r\n\r\n\"Tadi kami pantau per hari ini masih dalam perbaikan, jadi mohon para pemudik dan wisatawan yang menuju Sukabumi untuk melakukan penyesuaian baik dari segi jalur maupun dari segi waktu,\" ujar Sandiaga di Megamendung, Kabupaten Bogor, \r\n', '', 'Whisnu Bagus Prasetyo.jpg', '09:14:05'),
(45, '2024-04-17', 'Zaki Musthofa', 'UNTAG SURABAYA', 'Ornag pakai sepeda motor', '', '3515_02032024_DOAFAJAR_KAH_0003.JPG', '13:54:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cln_mahasiswa`
--

CREATE TABLE `tbl_cln_mahasiswa` (
  `id_daftar` int(5) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `nama_pendaftar` varchar(75) DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `status` varchar(35) DEFAULT NULL,
  `lulusan_sekolah` varchar(75) DEFAULT NULL,
  `tahun_ajaran` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(120) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `website` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita_kampus` int(5) DEFAULT NULL,
  `tanggal_komentar` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `isi_komentar` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_berita_kampus`, `tanggal_komentar`, `status`, `nama`, `isi_komentar`, `email`, `website`) VALUES
(90, 42, '2024-04-08', NULL, '1462200021', '14', NULL, NULL),
(91, 42, '2024-04-08', NULL, '1462200021', 'aniel\r\n', NULL, NULL),
(103, 37, '2024-04-08', NULL, '1462200021', 'Keren bang', NULL, NULL),
(106, 44, '2024-04-08', NULL, '1462200021', 'qweqwe', NULL, NULL),
(107, 44, '2024-04-08', NULL, '1462200021', 'Ini komentar', NULL, NULL),
(108, 44, '2024-04-08', NULL, '1462200031', 'Keren', NULL, NULL),
(110, 44, '2024-04-17', NULL, '1722200002', 'Coba berkomentar', NULL, NULL),
(111, 45, '2024-04-17', NULL, '1462200032', 'ini Zaki', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhsiswa`
--

CREATE TABLE `tbl_mhsiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(75) DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_mhs` varchar(35) DEFAULT NULL,
  `jurusan` varchar(75) DEFAULT NULL,
  `nim` varchar(15) DEFAULT NULL,
  `lulusan_sekolah` varchar(75) DEFAULT NULL,
  `tahun_ajaran` varchar(30) DEFAULT NULL,
  `pekerjaan` varchar(75) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `website` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mhsiswa`
--

INSERT INTO `tbl_mhsiswa` (`id_mahasiswa`, `nama_mahasiswa`, `jns_kelamin`, `tgl_lahir`, `status_mhs`, `jurusan`, `nim`, `lulusan_sekolah`, `tahun_ajaran`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `telp`, `email`, `website`) VALUES
(71, 'Ahmad', 'L', '2000-05-15', 'Single', 'Informatika', '1462200006', NULL, '2023/2024', 'Mahasiswa', 'Jl. Merdeka No. 10', NULL, NULL, 'Bandung', 'Jawa Barat', '08123456789', 'ahmad@example.com', NULL),
(72, 'Siti', 'P', '1999-09-20', 'Menikah', 'Mesin', '1462200007', NULL, '2023/2024', 'Bekerja', 'Jl. Pahlawan No. 25', NULL, NULL, 'Surabaya', 'Jawa Timur', '08543210987', 'siti@example.com', NULL),
(73, 'Budi', 'L', '2001-03-10', 'Pelajar', 'Elektro', '1462200008', NULL, '2023/2024', 'Pelajar', 'Jl. Dahlia No. 5', NULL, NULL, 'Yogyakarta', 'DI Yogyakarta', '08134789652', 'budi@example.com', NULL),
(74, 'Dewi', 'P', '2000-11-28', 'Bekerja', 'Industri', '1462200009', NULL, '2023/2024', 'Mahasiswa', 'Jl. Cendana No. 8', NULL, NULL, 'Semarang', 'Jawa Tengah', '08765432109', 'dewi@example.com', NULL),
(75, 'Firman', 'L', '2002-07-18', 'Single', 'Arsitek', '1462200010', NULL, '2023/2024', 'Pelajar', 'Jl. Kebon Sirih No. 3', NULL, NULL, 'Jakarta', 'DKI Jakarta', '08987654321', 'firman@example.com', NULL),
(76, 'Lina_1234', '', '2001-06-12', '', 'Informatika', '1462200011', '', '', 'Bekerja', 'Jl. Diponegoro No. 15', NULL, NULL, 'Bandung', 'Jawa Barat', '08123456789', 'lina@example.com', NULL),
(78, 'Ani', 'P', '2000-08-25', 'Bekerja', 'Elektro', '1462200013', NULL, '2023/2024', 'Mahasiswa', 'Jl. Gajah Mada No. 10', NULL, NULL, 'Surabaya', 'Jawa Timur', '08134789652', 'ani@example.com', NULL),
(79, 'Eko', 'L', '1999-12-05', 'Pelajar', 'Industri', '1462200014', NULL, '2023/2024', 'Pelajar', 'Jl. Ahmad Yani No. 8', NULL, NULL, 'Semarang', 'Jawa Tengah', '08765432109', 'eko@example.com', NULL),
(80, 'Sari', 'P', '2001-10-20', 'Single', 'Arsitek', '1462200015', NULL, '2023/2024', 'Bekerja', 'Jl. Slamet Riyadi No. 3', NULL, NULL, 'Solo', 'Jawa Tengah', '08987654321', 'sari@example.com', NULL),
(81, 'Rina', 'P', '2002-03-18', 'Menikah', 'Informatika', '1462200016', NULL, '2023/2024', 'Bekerja', 'Jl. Siliwangi No. 25', NULL, NULL, 'Bandung', 'Jawa Barat', '08123456789', 'rina@example.com', NULL),
(82, 'Adi', 'L', '2001-07-10', 'Single', 'Mesin', '1462200017', NULL, '2023/2024', 'Pelajar', 'Jl. Kebonjati No. 20', NULL, NULL, 'Bandung', 'Jawa Barat', '08543210987', 'adi@example.com', NULL),
(83, 'Linda', 'P', '2000-09-05', 'Bekerja', 'Elektro', '1462200018', NULL, '2023/2024', 'Mahasiswa', 'Jl. Raya Bogor No. 10', NULL, NULL, 'Jakarta', 'DKI Jakarta', '08134789652', 'linda@example.com', NULL),
(84, 'Hadi', 'L', '2002-05-28', 'Pelajar', 'Industri', '1462200019', NULL, '2023/2024', 'Pelajar', 'Jl. Merak No. 8', NULL, NULL, 'Surabaya', 'Jawa Timur', '08765432109', 'hadi@example.com', NULL),
(85, 'Nina', 'P', '2001-11-20', 'Single', 'Arsitek', '1462200020', NULL, '2023/2024', 'Bekerja', 'Jl. Ahmad Dahlan No. 3', NULL, NULL, 'Yogyakarta', 'DI Yogyakarta', '08987654321', 'nina@example.com', NULL),
(86, 'Bambang', 'L', '2001-04-15', 'Single', 'Informatika', '1462200021', NULL, '2023/2024', 'Mahasiswa', 'Jl. Pemuda No. 5', NULL, NULL, 'Solo', 'Jawa Tengah', '08123456789', 'bambang@example.com', NULL),
(87, 'Diana', 'P', '2000-08-20', 'Menikah', 'Mesin', '1462200022', NULL, '2023/2024', 'Bekerja', 'Jl. Diponegoro No. 10', NULL, NULL, 'Semarang', 'Jawa Tengah', '08543210987', 'diana@example.com', NULL),
(88, 'Yusuf', 'L', '2002-01-10', 'Single', 'Elektro', '1462200023', NULL, '2023/2024', 'Pelajar', 'Jl. Siliwangi No. 15', NULL, NULL, 'Bandung', 'Jawa Barat', '08134789652', 'yusuf@example.com', NULL),
(89, 'Putri', 'P', '2001-06-05', 'Pelajar', 'Industri', '1462200024', NULL, '2023/2024', 'Pelajar', 'Jl. Gatot Subroto No. 8', NULL, NULL, 'Jakarta', 'DKI Jakarta', '08765432109', 'putri@example.com', NULL),
(90, 'Rizki', 'L', '2000-10-20', 'Single', 'Arsitek', '1462200025', NULL, '2023/2024', 'Bekerja', 'Jl. Gajah Mada No. 3', NULL, NULL, 'Surabaya', 'Jawa Timur', '08987654321', 'rizki@example.com', NULL),
(91, 'Zaki', 'P', '2024-04-17', 'single', 'informatika', '1462200026', 'SMA', '2023/2024', 'asdjaskj', 'sby', NULL, NULL, 'sby', 'sby', '123', 'zaki', NULL),
(92, 'kelvin', 'L', '2024-04-18', 'bekerja', 'mesin', '1462200027', 'SMK', NULL, 's', 's', NULL, NULL, 's', 's', 's', 's', NULL),
(94, 'Budi_1234', 'L', '2001-08-18', 'single', 'Hukum', '1312200002', '', '2023/2024', 'Bekerja', 'Jl. Mangga Besar No. 5', NULL, NULL, 'Surabaya', 'Jawa Timur', '08543210987', 'budi@example.com', NULL),
(95, 'Citra', 'P', '1999-11-25', 'Pelajar', 'Hukum', '1312200003', NULL, '2023/2024', 'Pelajar', 'Jl. Diponegoro No. 8', NULL, NULL, 'Bandung', 'Jawa Barat', '08134789652', 'citra@example.com', NULL),
(96, 'Dika', 'L', '2002-02-10', 'Bekerja', 'Hukum', '1312200004', NULL, '2023/2024', 'Mahasiswa', 'Jl. Pemuda No. 15', NULL, NULL, 'Yogyakarta', 'DI Yogyakarta', '08765432109', 'dika@example.com', NULL),
(97, 'Erika', 'P', '2001-07-30', 'Single', 'Hukum', '1312200005', NULL, '2023/2024', 'Bekerja', 'Jl. Ahmad Yani No. 3', NULL, NULL, 'Semarang', 'Jawa Tengah', '08987654321', 'erika@example.com', NULL),
(98, 'Fahmi', 'L', '2000-04-15', 'Single', 'Hukum', '1312200006', NULL, '2023/2024', 'Pelajar', 'Jl. Merdeka No. 20', NULL, NULL, 'Bandung', 'Jawa Barat', '08123456789', 'fahmi@example.com', NULL),
(99, 'Gita', 'P', '2001-09-22', 'Menikah', 'Hukum', '1312200007', NULL, '2023/2024', 'Bekerja', 'Jl. Gatot Subroto No. 10', NULL, NULL, 'Surabaya', 'Jawa Timur', '08543210987', 'gita@example.com', NULL),
(100, 'Hadi', 'L', '2002-12-05', 'Pelajar', 'Hukum', '1312200008', NULL, '2023/2024', 'Pelajar', 'Jl. Sudirman No. 8', NULL, NULL, 'Jakarta', 'DKI Jakarta', '08134789652', 'hadi@example.com', NULL),
(101, 'Indah', 'P', '2000-03-28', 'Bekerja', 'Hukum', '1312200009', NULL, '2023/2024', 'Mahasiswa', 'Jl. Diponegoro No. 15', NULL, NULL, 'Semarang', 'Jawa Tengah', '08765432109', 'indah@example.com', NULL),
(103, 'Kartika', 'P', '2000-08-14', 'Pelajar', 'Hukum', '1312200011', NULL, '2023/2024', 'Pelajar', 'Jl. Cendrawasih No. 25', NULL, NULL, 'Bandung', 'Jawa Barat', '08123456789', 'kartika@example.com', NULL),
(104, 'Lukman', 'L', '2001-11-12', 'Bekerja', 'Hukum', '1312200012', NULL, '2023/2024', 'Mahasiswa', 'Jl. Veteran No. 20', NULL, NULL, 'Surabaya', 'Jawa Timur', '08543210987', 'lukman@example.com', NULL),
(105, 'Mega', 'P', '1999-06-30', 'Single', 'Hukum', '1312200013', NULL, '2023/2024', 'Bekerja', 'Jl. Pahlawan No. 10', NULL, NULL, 'Jakarta', 'DKI Jakarta', '08134789652', 'mega@example.com', NULL),
(106, 'Nadia', 'P', '2002-02-18', 'Bekerja', 'Hukum', '1312200014', NULL, '2023/2024', 'Pelajar', 'Jl. Sudirman No. 8', NULL, NULL, 'Semarang', 'Jawa Tengah', '08765432109', 'nadia@example.com', NULL),
(107, 'Oscar', 'L', '2000-09-25', 'Menikah', 'Hukum', '1312200015', NULL, '2023/2024', 'Bekerja', 'Jl. Diponegoro No. 15', NULL, NULL, 'Yogyakarta', 'DI Yogyakarta', '08987654321', 'oscar@example.com', NULL),
(108, 'Putri', 'P', '2001-05-21', 'Single', 'Hukum', '1312200016', NULL, '2023/2024', 'Bekerja', 'Jl. Gatot Subroto No. 3', NULL, NULL, 'Surabaya', 'Jawa Timur', '08123456789', 'putri@example.com', NULL),
(109, 'Qori', 'L', '2002-08-10', 'Pelajar', 'Hukum', '1312200017', NULL, '2023/2024', 'Pelajar', 'Jl. Cendrawasih No. 8', NULL, NULL, 'Bandung', 'Jawa Barat', '08543210987', 'qori@example.com', NULL),
(110, 'Rina', 'P', '1999-12-28', 'Bekerja', 'Hukum', '1312200018', NULL, '2023/2024', 'Mahasiswa', 'Jl. Raya Bogor No. 15', NULL, NULL, 'Jakarta', 'DKI Jakarta', '08134789652', 'rina@example.com', NULL),
(111, 'Surya', 'L', '2000-03-16', 'Single', 'Hukum', '1312200019', NULL, '2023/2024', 'Bekerja', 'Jl. Veteran No. 20', NULL, NULL, 'Semarang', 'Jawa Tengah', '08765432109', 'surya@example.com', NULL),
(112, 'Tika', 'P', '2001-11-08', 'Pelajar', 'Hukum', '1312200020', NULL, '2023/2024', 'Pelajar', 'Jl. Sudirman No. 10', NULL, NULL, 'Yogyakarta', 'DI Yogyakarta', '08987654321', 'tika@example.com', NULL),
(114, 'arda', 'L', '2004-06-08', 'single', 'industri', '1462200029', 'SMK', '2023/2024', 'Pelajar', 'testing', NULL, NULL, 'testing', 'testing', 'testing', 'testing', NULL),
(124, 'ervanda', 'L', '2024-04-05', 'single', 'Informatika', '1462200027', 'SMA', '2023/2024', 'asd', 'asd', NULL, NULL, 'asd', 'asd', 'asd', 'asd', NULL),
(127, 'Joice', 'L', '2023-10-12', 'single', 'informatika', '1462200028', 'SMA', NULL, 'Kahuripan', 'Kahuripan', NULL, NULL, 'Kahuripan', 'Kahuripan', '12345', 'joice@gmail.com', NULL),
(128, 'Keisha', 'P', '2024-04-04', 'single', 'informatika', '1462200029', 'SMA', NULL, 'BCF', 'BCFBCF', NULL, NULL, 'BCF', 'BCF', '8888', 'keisha@gmail.com', NULL),
(130, 'Bertha Sianturi', '', '2024-04-11', '', '', '1712200002', '', '', 'Sales', 'Bungurasih', NULL, NULL, 'Bungurasih', 'Bungurasih', '000000', 'bertha@gmail.com', NULL),
(132, 'Keisha Jessica', 'P', '2004-11-08', 'single', 'hukum', '1312200021', 'SMA', '2024/2025', 'Pekerja', 'BCF', NULL, NULL, 'BCF', 'BCF', '88888888', 'keisha2@gmail.com', NULL),
(134, 'Coba1', 'L', '2005-02-21', 'single', 'elektro', '1412200024', 'SMK', '2023/2024', 'coba1', 'coba1', NULL, NULL, 'coba1', 'coba1', 'coba1', 'coba1', NULL),
(135, 'coba_inggris', 'L', '2007-02-25', 'single', 'inggris', '1712200001', 'SMK', '2024/2025', 'a', 'a', NULL, NULL, 'a', 'a', 'aa', 'a', NULL),
(138, 'Gabriella Sharon Jessica', 'P', '2003-07-23', 'single', 'jepang', '1722200001', 'SMA', '2024/2025', 'Kantor', 'Balikpapan', NULL, NULL, 'Balikpapan', 'Kalimantan Barat', '08888', 'jessica@gmail.com', NULL),
(139, 'Daniel Kurnia Putra', 'L', '2004-09-28', 'single', 'informatika', '1462200031', 'SMK', '2023/2024', 'PELAAJR', 'sidoarjo', NULL, NULL, 'sidoarjo', 'sidoarjo', '081259321453', 'daniel@gmail.com', NULL),
(140, 'Ervanda', 'L', '2024-04-10', 'single', 'jepang', '1722200002', 'SMK', '2023/2024', 'KANTOR', 'SIDOARJO', NULL, NULL, 'SIDOARJO', 'SIDOARJO', '08123', 'ervan@gmail.com', NULL),
(141, 'Zaki Musthofa', 'L', '2024-04-01', 'single', 'informatika', '1462200032', 'SMA', '2023/2024', 'MAHASISWA', 'SURABYAA', NULL, NULL, 'SURABYAA', 'SURABYAA', '0812345678', 'zaki@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_mahasiswa`
--

CREATE TABLE `tbl_nilai_mahasiswa` (
  `id_nilai` int(5) NOT NULL,
  `nim` int(20) DEFAULT NULL,
  `mata_kuliah` varchar(50) DEFAULT NULL,
  `nilai_mahasiswa` varchar(3) DEFAULT NULL,
  `dosen_mata_kuliah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_nilai_mahasiswa`
--

INSERT INTO `tbl_nilai_mahasiswa` (`id_nilai`, `nim`, `mata_kuliah`, `nilai_mahasiswa`, `dosen_mata_kuliah`) VALUES
(6, 1312200001, '', '23', 'Fridy Mandita, S.Kom., M.Sc'),
(7, 1312200001, 'Dasar-Dasar Pemrograman', '122', 'Fridy Mandita, S.Kom., M.Sc'),
(8, 1462200028, 'SISTEM JARINGAN KOMPUTER', '100', 'Elsen RonandoS.Si.,M.Si'),
(9, 1462200029, 'SISTEM APLIKASI MULTIMEDIA', '100', 'Bagus Hardiansyah, S.Kom., M.Si'),
(10, 1462200028, 'Dasar-Dasar Pemrograman', '100', 'Fridy Mandita, S.Kom., M.Sc'),
(11, 1312200002, 'ETIKA TEKNOLOGI INFORMASI', '78', 'Fridy Mandita, S.Kom., M.Sc'),
(12, 1312200003, 'ARSITEKTUR DAN ORGANISASI KOMPUTER', '100', 'Anang PramonoS.Kom.,MM'),
(13, 1712200001, 'STRUKTUR DATA DAN ALGORITMA', '100', 'Ahmad HabibS.Kom.,MM'),
(14, 1312200021, 'SISTEM JARINGAN KOMPUTER', '100', 'Fridy Mandita, S.Kom., M.Sc'),
(15, 1312200021, 'SISTEM APLIKASI MULTIMEDIA', '50', 'Fridy Mandita, S.Kom., M.Sc'),
(16, 1462200006, 'Dasar-Dasar Pemrograman', '15', 'Fridy Mandita, S.Kom., M.Sc'),
(17, 1722200001, 'MANAJEMEN BASIS DATA', '100', 'Elsen RonandoS.Si.,M.Si'),
(18, 1722200001, 'Dasar-Dasar Pemrograman', '52', 'Geri KusnantoS.Kom.,MM'),
(19, 1722200001, 'PEMROGRAMAN BERORIENTASI OBJEK FUNGSIONAL', '21', 'Luvia Friska NS.ST.,MT'),
(20, 1462200030, 'Dasar-Dasar Pemrograman', '100', 'Fridy Mandita, S.Kom., M.Sc'),
(21, 1462200031, 'MANAJEMEN BASIS DATA', '100', 'Fridy Mandita, S.Kom., M.Sc'),
(22, 1462200031, 'ETIKA TEKNOLOGI INFORMASI', '50', 'Fridy Mandita, S.Kom., M.Sc'),
(23, 1462200022, 'Dasar-Dasar Pemrograman', '23', 'Fridy Mandita, S.Kom., M.Sc'),
(24, 1462200032, 'MANAJEMEN BASIS DATA', '100', 'Geri KusnantoS.Kom.,MM'),
(25, 1462200032, 'SISTEM JARINGAN KOMPUTER', '100', 'Fridy Mandita, S.Kom., M.Sc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_profile`
--

CREATE TABLE `tbl_user_profile` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(75) DEFAULT NULL,
  `kecamatan` varchar(75) DEFAULT NULL,
  `kota` varchar(75) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `website` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_cln_mahasiswa`
--
ALTER TABLE `tbl_cln_mahasiswa`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `tbl_nilai_mahasiswa`
--
ALTER TABLE `tbl_nilai_mahasiswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tbl_cln_mahasiswa`
--
ALTER TABLE `tbl_cln_mahasiswa`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_mahasiswa`
--
ALTER TABLE `tbl_nilai_mahasiswa`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_profile`
--
ALTER TABLE `tbl_user_profile`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
