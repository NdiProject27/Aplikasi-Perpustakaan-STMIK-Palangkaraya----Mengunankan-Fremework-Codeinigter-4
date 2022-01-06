-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 06:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(100) NOT NULL,
  `sampul` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `sampul`, `judul`, `penerbit`, `kategori`, `pengarang`, `tahun`, `deskripsi`, `created_at`, `updated_at`) VALUES
(15, '1641394292_2de0673242aa722a587e.jpg', 'Teknik Riset Operasional (Edivi 2)', 'Mitra Wacana Media', 'ED', 'Sri Mulyono,S.E.,M.Sc.', 2009, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-01-05 08:51:32', '2022-01-05 08:51:32'),
(16, '1641394460_e19d489b545fe106017f.jpg', 'Struktur Data', 'TB Rahma Solo', 'Edukasi', 'Rosa A.S', 2010, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 08:54:20', '2022-01-05 08:54:20'),
(17, '1641394572_d4b34e3f2393c7e98f3f.jpg', 'Sistem DataBase', 'Informatika', 'Edukasi', 'Fathansyah', 2015, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 08:56:12', '2022-01-05 08:56:12'),
(18, '1641394623_8cf03dff5d4dca011d99.jpg', 'Rekayasa Perangkat Lunak', 'Informatika', 'Edukasi', 'Rosa A.S', 2014, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 08:57:03', '2022-01-05 08:57:03'),
(19, '1641394728_2a9240f8948b0a214998.jpg', 'Perancangan Sistem Informasi', 'Gava Media', 'Edukasi', 'Andri Kristanto', 2017, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2022-01-05 08:58:48', '2022-01-05 08:58:48'),
(20, 'sampul-1.png', 'Jurnal Perancangan Sistem Informasi Perpustakaan', 'STMIK Palangkaraya', 'Jurnal', '-', 2020, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-01-05 09:02:00', '2022-01-05 09:02:00'),
(21, '1641395031_8b256bf58015153ed891.jpg', 'Mahir Bahasa Pemrograman PHP', 'Elex Media Komputindo', 'Edukasi', 'Miftahul Jannah', 2021, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-01-05 09:03:51', '2022-01-05 09:03:51'),
(22, '1641395122_fe48e1f54d2ce9c602e2.jpg', 'Microsoft Visual Basic 6.0', 'Turkmen Kitabevi', 'Edukasi', 'Zidan Pala', 2007, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-01-05 09:05:22', '2022-01-05 09:05:22'),
(23, '1641395231_a28d03caee5db0099680.jpg', 'Ms Office Word & Excel', 'Elex Media Komputindo', 'Edukasi', 'Jubilee Enterprice', 2020, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-01-05 09:07:11', '2022-01-05 09:07:11'),
(24, '1641395333_02c37ba83378e99c8e44.jpg', 'Internet Web Desain', 'Elex Media Komputindo', 'Edukasi', 'Su Rahman', 2015, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 09:08:53', '2022-01-05 09:08:53'),
(25, 'sampul-1.png', 'Ilmu Website PHP', 'Gramedia', 'Edukasi', 'Rosa A.S', 2010, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 09:09:49', '2022-01-05 09:09:49'),
(26, '1641395432_6f442de0ba1c1d03e5db.jpg', 'Desain Grafis', 'Elex Media Komputindo', 'Edukasi', 'Jubilee Enterprice', 2010, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 09:10:32', '2022-01-05 09:10:32'),
(27, '1641395532_f6a8b94d81cd5bfe6e63.jpg', 'Borland Delphi 7.0', ' Andi Jaya', 'Edukasi', '-', 2018, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 09:12:12', '2022-01-05 09:12:12'),
(28, '1641395599_6cb78b813cab3a12bd3c.jpg', 'Bahasa Pemrograman Turbo', 'Gramedia', 'Edukasi', 'Jubilee Enterprice', 2010, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 09:13:19', '2022-01-05 09:13:19'),
(29, '1641395680_addf07d70fd8ed352c92.jpg', 'Bahasa Automata', 'Tenkosain', 'Edukasi', 'Harya Bima Dirgantara', 2019, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2022-01-05 09:14:40', '2022-01-05 09:14:40'),
(30, 'sampul-1.png', 'Bahasa Assembly', 'Elex Media Komputindo', 'Edukasi', 'Jubilee Enterprice', 2014, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-01-05 09:15:36', '2022-01-05 09:15:36'),
(31, '1641395799_9a3b4de135a892071940.jpg', 'Analisa Sistem Informasi', 'Andi', 'Edukasi', 'Tata Sutari', 2013, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-01-05 09:16:39', '2022-01-05 09:16:39'),
(32, 'sampul-1.png', 'Algoritma & Pemrograman ', 'Simple Project', 'Edukasi', 'Sri Mulyono,S.E.,M.Sc.', 2021, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-01-05 09:17:14', '2022-01-05 09:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` enum('Pilih','Teknik Informatika','Sistem Informasi','Manajemen Informatika') NOT NULL,
  `jenis_kelamin` enum('Pilih','Pria','Wanita') NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `no_telp`, `email`, `alamat`, `photo`, `created_at`, `updated_at`) VALUES
('C2055201013', 'Crisnawati', '', 'Pilih', '082354049705', 'crisnawati@gmail.com', 'Jalan Kalibata Palangkaraya', 'otomatis.jpg', '2021-11-28 10:26:26', '2022-01-05 08:48:18'),
('C2055201019', 'Dhalin Imanuel', 'Teknik Informatika', 'Pria', '082250475761', 'dhalinbahalap@gmail.com', 'Jalan Galaksi Raya(Pintu Gerbang No.73 Kompleks Perumahan Haji Yasin) Palangkaraya', '1638117265_bb476dbc6399cd7e2652.jpg', '2021-11-28 10:34:25', '2021-11-28 10:36:28'),
('C2055201031', 'Andi Lafito', 'Teknik Informatika', 'Pria', '082153237634', 'andistmikplk27@gmail.com', 'Jalan Lamtorogung II Blok D No.143 Palangkaraya', 'otomatis.jpg', '2021-11-28 21:57:28', '2021-12-29 04:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-11-23-034122', 'App\\Database\\Migrations\\Users', 'default', 'App', 1637638921, 1),
(2, '2021-11-23-125758', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1637672318, 2),
(3, '2021-11-23-130015', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1637672488, 3),
(4, '2021-12-28-125733', 'App\\Database\\Migrations\\Buku', 'default', 'App', 1640697903, 4),
(14, '2022-01-05-032819', 'App\\Database\\Migrations\\Peminjaman', 'default', 'App', 1641353716, 6),
(15, '2022-01-05-040210', 'App\\Database\\Migrations\\Pengembalian', 'default', 'App', 1641355467, 7);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) UNSIGNED NOT NULL,
  `nim` varchar(11) NOT NULL,
  `id_buku` int(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nim`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(8, 'C2055201013', 20, '2022-01-05', '2022-01-12', '2022-01-05 09:39:58', '2022-01-05 09:39:58'),
(9, 'C2055201031', 17, '2022-01-05', '2022-01-12', '2022-01-05 09:40:14', '2022-01-05 09:40:14'),
(10, 'C2055201019', 28, '2022-01-05', '2022-01-12', '2022-01-05 09:40:29', '2022-01-05 09:40:29'),
(11, 'C2055201031', 25, '2022-01-05', '2022-01-12', '2022-01-05 09:40:54', '2022-01-05 09:40:54'),
(12, 'C2055201013', 16, '2022-01-06', '2022-01-13', '2022-01-05 09:41:02', '2022-01-05 09:41:15'),
(13, 'C2055201031', 22, '2022-01-19', '2022-01-26', '2022-01-05 09:41:42', '2022-01-05 09:41:42'),
(14, 'C2055201019', 32, '2022-01-17', '0000-00-00', '2022-01-05 09:41:52', '2022-01-05 09:41:52'),
(15, 'C2055201019', 26, '2022-01-22', '2022-01-25', '2022-01-05 09:42:08', '2022-01-05 09:42:08'),
(16, 'C2055201019', 28, '2022-01-23', '2022-01-29', '2022-01-05 09:42:45', '2022-01-05 09:42:45'),
(17, 'C2055201019', 29, '2022-01-16', '2022-01-22', '2022-01-05 09:43:00', '2022-01-05 09:43:00'),
(18, 'C2055201019', 25, '2022-01-10', '2022-01-17', '2022-01-05 09:43:18', '2022-01-05 09:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) UNSIGNED NOT NULL,
  `nim` varchar(11) NOT NULL,
  `id_buku` int(100) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `nim`, `id_buku`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(1, 'C2055201013', 20, '2022-01-12', '2022-01-05 09:51:40', '2022-01-05 09:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `foto`, `created_at`, `updated_at`) VALUES
('andilafito', '$2y$10$qB0uXJiuu6tYtvlmh3eS1uBW/lGXmjir9s53V6Eqe7yZERS0OlByi', 'Andi lafito', 'andi.jpg', NULL, NULL),
('ekywijianti', '$2y$10$79XgHgmgl0l5otVFZ5lb.u0Lt9FAPkpQTTfhJg4t/X3rUE/GFeatG', 'Eky Wijianti', 'eky.jpg', NULL, NULL),
('feri', '$2y$10$84paO1yslIcK7Q2bYKHBEueb93VHi6MSIJyq16QE9pi/cKPINopN.', 'Feri', 'feri.png', NULL, NULL),
('rahmaniah', '$2y$10$y47fCI3aIMuQt2neGCgKHueYhDH.TWP6.XqbnlWeuMJKXfP0sx8RO', 'Rahmaniah', 'RAHMA.jpg', NULL, NULL),
('rhamajason', '$2y$10$LBIu1axcf9F81G1zNFhg8.jq77BpWk.074ceJP7TP8zCjEjIQr4QC', 'Rhama Jason', 'RHAMA.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `peminjaman_id_buku_foreign` (`id_buku`),
  ADD KEY `peminjaman_nim_foreign` (`nim`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `pengembalian_id_buku_foreign` (`id_buku`),
  ADD KEY `pengembalian_nim_foreign` (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
