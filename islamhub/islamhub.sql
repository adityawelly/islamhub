-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mei 2019 pada 17.41
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `islamhub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`ID_BUKU` int(11) NOT NULL,
  `ID_PAKAR` int(11) NOT NULL,
  `JUDUL_BUKU` varchar(255) NOT NULL,
  `LINK_BUKU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('4cbb7bea7abceaf54094330d081cffc98b25d2f0', '127.0.0.1', 1533479985, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533333437393638353b757365725f69647c693a313b757365726e616d657c733a31303a22616c66696775736d616e223b6c6f676765645f696e7c623a313b69735f636f6e6669726d65647c623a313b69735f61646d696e7c623a313b),
('52d9ca101697191d10633c9f4febceb1f36a31c7', '127.0.0.1', 1533480461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533333438303435363b),
('ad76307818e785e25deae5d0ba325badfb79d02f', '::1', 1557815523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373831353436393b),
('c0ef70fabb85e2f9cc574b2c317b4495ceab5048', '127.0.0.1', 1533480154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533333438303135303b),
('ffff9341533a5493a1775b6fe598b66993828319', '::1', 1557815406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535373831353136373b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`id_client` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(15) DEFAULT NULL,
  `biodata` text,
  `foto` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id_client`, `nama`, `jk`, `alamat`, `no_telp`, `biodata`, `foto`, `email`, `username`, `password`, `date_created`, `date_updated`) VALUES
(1, 'piscal', 'L', NULL, '089', NULL, NULL, 'piscalpratama@gmail.com', 'piscal02', '098f6bcd4621d373cade4e832627b4f6', '2019-05-14 06:06:46', '2019-05-14 06:06:46'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, 'alwan@gmail.com', NULL, '745afc946c17ac707d56348e85b5bb24', '2019-05-14 06:07:44', '2019-05-14 06:07:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `judul` text NOT NULL,
  `penulis` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `filename`, `judul`, `penulis`) VALUES
(6, 'sns1.jpg', 'First Upload', ''),
(7, 'sns2.jpg', 'Second Upload', ''),
(8, 'sns3.png', 'Last Upload', ''),
(9, '1167050141.pdf', 'anjing', 'sia'),
(10, '1167050032.pdf', 'anjing', 'sia'),
(11, '1167050141.pdf', 'anjing', 'sia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `forums`
--

INSERT INTO `forums` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Forum pertama dibuka', 'forum-pertama-dibuka', 'Test ini adalah forum pertama', '2018-08-05 21:36:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `options`
--

CREATE TABLE IF NOT EXISTS `options` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakar`
--

CREATE TABLE IF NOT EXISTS `pakar` (
`id_pakar` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nik` varchar(200) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `alamat` text,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `universitas` varchar(100) DEFAULT NULL,
  `sertifikat` varchar(50) DEFAULT NULL,
  `biodata` text,
  `foto` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakar`
--

INSERT INTO `pakar` (`id_pakar`, `nama`, `nik`, `jk`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `universitas`, `sertifikat`, `biodata`, `foto`, `email`, `username`, `password`, `date_created`, `date_updated`) VALUES
(1, 'pakar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pakar@gmail.com', 'pakar1', '0d4c85cf1e29d49736cdeb362214f454', '2019-05-14 06:35:31', '2019-05-14 06:35:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id_pesan` int(11) NOT NULL,
  `pengirim` int(11) DEFAULT NULL,
  `penerima` int(11) DEFAULT NULL,
  `subjek` varchar(200) DEFAULT NULL,
  `isi` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pengirim`, `penerima`, `subjek`, `isi`, `date_created`, `date_updated`) VALUES
(1, 2, 0, 'Test Pesan Private', '<p>Halo Pakar1</p>\r\n', '2019-05-13 17:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 'Test Pesan Private 2', '<p>Halo Pakar</p>\r\n', '2019-05-13 17:00:00', '0000-00-00 00:00:00'),
(3, NULL, 1, 'asdfas', '<p>asdfwasdf</p>\r\n', '2019-05-19 17:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) unsigned NOT NULL,
  `content` longtext NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `topic_id` int(11) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `content`, `user_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 'mantap nih mang , lajutkan', 1, 1, '2018-08-05 21:37:07', NULL),
(2, 'edan dong reply', 1, 1, '2018-08-05 21:37:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `private_chat`
--

CREATE TABLE IF NOT EXISTS `private_chat` (
`id_chat` int(11) NOT NULL,
  `pengirim_chat` int(11) DEFAULT NULL,
  `penerima_chat` int(11) DEFAULT NULL,
  `subjek` varchar(200) DEFAULT NULL,
  `isi_chat` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(191) NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `private_chat`
--

INSERT INTO `private_chat` (`id_chat`, `pengirim_chat`, `penerima_chat`, `subjek`, `isi_chat`, `date_created`, `date_updated`, `status`, `send_at`) VALUES
(1, 2, 0, 'Test Pesan Private', '<p>Halo Pakar1</p>\r\n', '2019-05-13 10:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(2, 2, 1, 'Test Pesan Private 2', '<p>Halo Pakar</p>\r\n', '2019-05-13 10:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, NULL, 1, 'asdfas', '<p>asdfwasdf</p>\r\n', '2019-05-19 10:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `forum_id` int(11) unsigned NOT NULL,
  `is_sticky` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `topics`
--

INSERT INTO `topics` (`id`, `title`, `slug`, `created_at`, `updated_at`, `user_id`, `forum_id`, `is_sticky`) VALUES
(1, 'kayanya rame nih', 'kayanya-rame-nih', '2018-08-05 21:37:07', '2018-08-05 21:37:22', 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) unsigned NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_moderator` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `updated_by`, `is_admin`, `is_moderator`, `is_confirmed`, `is_deleted`) VALUES
(1, 'alfigusman', 'alfi.gusman.9f@gmail.com', 'alfigusman', 'default.jpg', '2018-08-05 21:34:05', NULL, 0, 1, 0, 1, 0),
(2, 'test', 'test@gmail.com', '$2y$10$b1vnAN6PpaFFkAiWShX1AuF3o09fglORhY3iO0Ma0xIJK6vVFSSMK', 'default.jpg', '2019-05-14 08:27:36', NULL, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`ID_VIDEO` int(11) NOT NULL,
  `ID_PAKAR` int(11) NOT NULL,
  `JUDUL_VIDEO` varchar(255) NOT NULL,
  `LINK_VIDEO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakar`
--
ALTER TABLE `pakar`
 ADD PRIMARY KEY (`id_pakar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_chat`
--
ALTER TABLE `private_chat`
 ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`ID_VIDEO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `ID_BUKU` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pakar`
--
ALTER TABLE `pakar`
MODIFY `id_pakar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `private_chat`
--
ALTER TABLE `private_chat`
MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `ID_VIDEO` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
