-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 19 Mei 2019 pada 12.35
-- Versi Server: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-5+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allvideo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting_genres`
--

CREATE TABLE `tbl_setting_genres` (
  `no` int(10) NOT NULL,
  `id_setting_genre` varchar(30) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting_genres`
--

INSERT INTO `tbl_setting_genres` (`no`, `id_setting_genre`, `genre`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '15397918481228', 'Action', '1', '2018-10-17 15:57:28', '2018-10-17 15:57:42', '1534867854137', '1534867854137'),
(2, '15348681591651', 'Adventure', '1', '2018-08-08 15:19:05', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(3, '15348681591126', 'Cars', '1', '2018-08-08 15:19:24', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(4, '15348681591885', 'Comedy', '1', '2018-08-08 15:19:37', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(5, '15348681591842', 'Dementia', '1', '2018-08-08 15:20:33', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(6, '15348681591962', 'Demons', '1', '2018-08-08 15:20:47', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(7, '15348681591807', 'Drama', '1', '2018-08-08 15:20:58', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(8, '15348681591440', 'Ecchi', '1', '2018-08-08 15:21:08', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(9, '15348681591521', 'Fantasy', '1', '2018-08-08 15:21:26', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(10, '15348681591620', 'Game', '1', '2018-08-08 15:21:36', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(11, '15348681591753', 'Harem', '1', '2018-08-08 15:21:48', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(12, '15348681591789', 'Hentai', '1', '2018-08-08 15:22:02', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(13, '15348681601478', 'Historical', '1', '2018-08-08 15:22:12', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(14, '15348681601214', 'Horror', '1', '2018-08-08 15:22:36', '2018-08-25 13:05:14', '1534867854137', '1534867854137'),
(15, '15348681601940', 'Josei', '1', '2018-08-08 15:22:47', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(16, '15348681601513', 'Kids', '1', '2018-08-08 15:22:57', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(17, '15348681601638', 'Magic', '1', '2018-08-08 15:23:14', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(18, '15348681601037', 'Martial Arts', '1', '2018-08-08 15:23:40', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(19, '15348681601630', 'Mecha', '1', '2018-08-08 15:24:02', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(20, '15348681601506', 'Military', '1', '2018-08-08 15:24:21', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(21, '15348681601323', 'Music', '1', '2018-08-08 15:24:33', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(22, '15348681601219', 'Mystery', '1', '2018-08-08 15:24:51', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(23, '15348681601366', 'Parody', '1', '2018-08-08 15:25:02', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(24, '15348681601158', 'Police', '1', '2018-08-08 15:25:20', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(25, '15348681601295', 'Psychological', '1', '2018-08-08 15:25:51', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(26, '15348681601312', 'Romance', '1', '2018-08-08 15:26:09', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(27, '15348681601741', 'Samurai', '1', '2018-08-08 15:26:24', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(28, '15348681601751', 'School', '1', '2018-08-08 15:26:46', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(29, '15348681601505', 'Sci-Fi', '1', '2018-08-08 15:26:58', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(30, '15348681601043', 'Seinen', '1', '2018-08-08 15:27:13', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(31, '15348681601564', 'Shoujo', '1', '2018-08-08 15:27:33', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(32, '15348681601507', 'Shoujo Ai', '1', '2018-08-08 15:27:44', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(33, '15348681601694', 'Shounen', '1', '2018-08-08 15:28:00', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(34, '15348681601691', 'Shounen Ai', '1', '2018-08-08 15:28:11', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(35, '15348681601392', 'Slice of Life', '1', '2018-08-08 15:28:31', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(36, '15348681601535', 'Space', '1', '2018-08-08 15:28:46', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(37, '15348681601652', 'Sports', '1', '2018-08-08 15:28:56', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(38, '15348681601198', 'Super Power', '1', '2018-08-08 15:29:08', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(39, '15348681601976', 'Supernarutal', '1', '2018-08-08 15:29:29', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(40, '15348681601172', 'Thriller', '1', '2018-08-08 15:29:46', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(41, '15348681601819', 'Vampire', '1', '2018-08-08 15:29:55', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(42, '15348681601728', 'Yaoi', '1', '2018-08-08 15:30:05', '2018-08-25 12:17:45', '1534867854137', '1534867854137'),
(43, '15348681601962', 'Yuri', '1', '2018-08-08 15:30:14', '2018-08-25 12:17:45', '1534867854137', '1534867854137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting_seasons`
--

CREATE TABLE `tbl_setting_seasons` (
  `no` int(10) NOT NULL,
  `id_setting_season` varchar(30) NOT NULL,
  `season` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting_seasons`
--

INSERT INTO `tbl_setting_seasons` (`no`, `id_setting_season`, `season`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '15348684442248', 'None', '1', '2018-08-08 15:10:22', '2018-08-25 13:28:34', '1534867854137', '1534867854137'),
(2, '15348684442124', 'Winter', '1', '2018-08-08 15:10:36', '2018-08-25 13:28:39', '1534867854137', '1534867854137'),
(3, '15348684442381', 'Spring', '1', '2018-08-08 15:10:53', '2018-08-25 13:28:44', '1534867854137', '1534867854137'),
(4, '15348684442425', 'Summer', '1', '2018-08-08 15:11:03', '2018-08-25 13:28:55', '1534867854137', '1534867854137'),
(5, '15348684442670', 'Fall', '1', '2018-08-08 15:11:14', '2018-08-25 13:29:00', '1534867854137', '1534867854137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting_types`
--

CREATE TABLE `tbl_setting_types` (
  `no` int(10) NOT NULL,
  `id_setting_type` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting_types`
--

INSERT INTO `tbl_setting_types` (`no`, `id_setting_type`, `type`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '15348684513013', 'TV', '1', '2018-08-08 15:01:21', '2018-08-25 14:14:29', '1534867854137', '1534867854137'),
(2, '15348684513182', 'Movie', '1', '2018-08-08 15:01:35', '2018-08-25 14:14:35', '1534867854137', '1534867854137'),
(3, '15348684513186', 'Original Animation DVD (OAD)', '1', '2018-08-08 15:07:19', '2018-08-25 14:14:40', '1534867854137', '1534867854137'),
(4, '15348684513385', 'Original Net Animation (ONA)', '1', '2018-08-08 15:07:51', '2018-08-25 14:14:44', '1534867854137', '1534867854137'),
(5, '15348684513775', 'Original Video Animation (OVA)', '1', '2018-08-08 15:08:14', '2018-08-25 14:14:50', '1534867854137', '1534867854137'),
(6, '15348684513536', 'Special', '1', '2018-08-08 16:10:58', '2018-08-25 14:14:55', '1534867854137', '1534867854137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting_years`
--

CREATE TABLE `tbl_setting_years` (
  `no` int(10) NOT NULL,
  `id_setting_year` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting_years`
--

INSERT INTO `tbl_setting_years` (`no`, `id_setting_year`, `year`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '15348684994894', 2010, '1', '2018-08-08 07:43:35', '2018-08-25 14:22:59', '1534867854137', '1534867854137'),
(2, '15348684994051', 2011, '1', '2018-08-08 07:52:52', '2018-08-25 14:23:04', '1534867854137', '1534867854137'),
(3, '15348684994767', 2012, '1', '2018-08-08 07:53:10', '2018-08-25 14:23:08', '1534867854137', '1534867854137'),
(4, '15348684994427', 2013, '1', '2018-08-08 07:53:19', '2018-08-25 14:23:13', '1534867854137', '1534867854137'),
(5, '15348684994712', 2014, '1', '2018-08-08 07:53:31', '2018-08-25 14:23:19', '1534867854137', '1534867854137'),
(6, '15348684994716', 2015, '1', '2018-08-08 07:53:38', '2018-08-25 14:23:26', '1534867854137', '1534867854137'),
(7, '15348684994841', 2016, '1', '2018-08-08 07:53:44', '2018-08-25 14:23:31', '1534867854137', '1534867854137'),
(8, '15348684994243', 2017, '1', '2018-08-08 07:53:51', '2018-08-25 14:23:36', '1534867854137', '1534867854137'),
(9, '15348684994188', 2018, '1', '2018-08-08 07:53:57', '2018-08-25 14:23:41', '1534867854137', '1534867854137'),
(10, '15348684994926', 2019, '1', '2018-08-08 07:54:03', '2018-08-25 14:23:47', '1534867854137', '1534867854137'),
(11, '15348684994335', 2020, '1', '2018-08-08 07:54:09', '2018-08-25 14:23:54', '1534867854137', '1534867854137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `no` int(10) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('0','1','2','3') NOT NULL,
  `login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_login` varchar(20) NOT NULL DEFAULT '127.0.0.1',
  `ip_logout` varchar(20) NOT NULL DEFAULT '127.0.0.1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL DEFAULT '127.0.0.1' COMMENT 'IP Address',
  `updated_by` varchar(20) NOT NULL DEFAULT '127.0.0.1' COMMENT 'IP Address'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`no`, `id_user`, `username`, `password`, `nama`, `level`, `login`, `logout`, `ip_login`, `ip_logout`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '1534867854137', 'azis@superadmin', '4e0a17b7a6f91167bb84d5a3121db3bb', 'Azis Mansyur', '0', '2019-05-18 17:22:24', '2019-05-13 12:53:32', '10.166.162.105', '::1', '2018-08-08 14:18:20', '2019-05-18 10:22:24', '127.0.0.1', '127.0.0.1'),
(2, '1557674711165', 'allvideo@admin', '4e0a17b7a6f91167bb84d5a3121db3bb', 'Admin All-Video', '0', '2019-05-16 10:17:38', '2019-05-16 10:25:20', '182.0.143.149', '182.0.143.149', '2019-05-12 15:25:11', '2019-05-16 03:25:20', '103.101.104.11', '103.101.104.11'),
(3, '1557977067162', 'admin1@admin', '0c909a141f1f2c0a1cb602b0b2d7d050', 'ADMIN HIGH', '1', '2019-05-16 10:24:27', '2019-05-16 10:24:27', '127.0.0.1', '127.0.0.1', '2019-05-16 03:24:27', '2019-05-16 03:24:27', '182.0.143.149', '182.0.143.149'),
(4, '1557977096137', 'admin2@admin', '0c909a141f1f2c0a1cb602b0b2d7d050', 'ADMIN MEDIUM', '2', '2019-05-16 10:24:56', '2019-05-16 10:24:56', '127.0.0.1', '127.0.0.1', '2019-05-16 03:24:56', '2019-05-16 03:24:56', '182.0.143.149', '182.0.143.149'),
(5, '1557977116110', 'admin3@admin', '0c909a141f1f2c0a1cb602b0b2d7d050', 'ADMIN LOW', '3', '2019-05-16 10:25:23', '2019-05-16 10:25:16', '182.0.143.149', '127.0.0.1', '2019-05-16 03:25:16', '2019-05-16 03:25:23', '182.0.143.149', '182.0.143.149');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video_details`
--

CREATE TABLE `tbl_video_details` (
  `no` int(10) NOT NULL,
  `id_video_detail` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `synopsis` text NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0 = Ongoing, 1 = Finish',
  `broadcast` date NOT NULL,
  `producer` varchar(100) NOT NULL,
  `score` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id_setting_season` varchar(30) NOT NULL,
  `id_setting_type` varchar(30) NOT NULL,
  `id_setting_year` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video_details`
--

INSERT INTO `tbl_video_details` (`no`, `id_video_detail`, `title`, `synopsis`, `status`, `broadcast`, `producer`, `score`, `photo`, `id_setting_season`, `id_setting_type`, `id_setting_year`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '153530089310585', 'Boku no Hero Academia', 'The appearance of "quirks," newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual.\r\n\r\nSince he was a child, the ambitious middle schooler has wanted nothing more than to be a hero. Izuku\'s unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Might\'s quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor!\r\n\r\nEnduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this year\'s freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero.', '1', '2016-04-03', 'Dentsu, Mainichi Broadcasting System, Movic, TOHO animation, Shueisha', '8.43', '153530089210556.jpg', '15348684442381', '15348684513013', '15348684994841', '2018-08-26 16:28:13', '2018-08-26 16:28:13', '1534867854137', '1534867854137'),
(2, '153530262010546', 'Boku no Hero Academia 2nd Season', 'At UA Academy, not even a violent attack can disrupt their most prestigious event: the school sports festival. Renowned across Japan, this festival is an opportunity for aspiring heroes to showcase their abilities, both to the public and potential recruiters.\r\n\r\nHowever, the path to glory is never easy, especially for Izuku Midoriya—whose quirk possesses great raw power but is also cripplingly inefficient. Pitted against his talented classmates, such as the fire and ice wielding Shouto Todoroki, Izuku must utilize his sharp wits and master his surroundings to achieve victory and prove to the world his worth.', '1', '2017-04-01', 'Dentsu, Yomiuri Telecasting, Movic, Sony Music Entertainment, TOHO animation, Shueisha', '8.75', '153530262010683.jpg', '15348684442381', '15348684513013', '15348684994243', '2018-08-26 16:57:00', '2018-08-26 16:57:00', '1534867854137', '1534867854137'),
(3, '153530272110685', 'Boku no Hero Academia 3rd Season', 'Third season of Boku no Hero Academia.', '0', '2018-04-07', 'Shueisha', '8.85', '153530272110140.jpg', '15348684442381', '15348684513013', '15348684994188', '2018-08-26 16:58:41', '2018-08-26 16:58:41', '1534867854137', '1534867854137'),
(4, '153530283510423', 'Boku no Hero Academia: Training of the Dead', 'OVA bundled with the 14th manga volume.\r\n\r\nStory about a joint practice session between Izuku\'s class and Isami High students at Yuuei Academy, takes place after the field training arc in the second season.', '1', '2017-06-02', 'None found', '7.58', '153530283510982.jpg', '15348684442248', '15348684513775', '15348684994243', '2018-08-26 17:00:35', '2018-08-26 17:00:35', '1534867854137', '1534867854137'),
(5, '153530291910559', 'Boku no Hero Academia The Movie: Futari no Hero', 'According to Kohei Horikoshi, the movie will delve into the backstory of an unknown character, in addition to featuring the characters of Class 1-A.', '1', '2018-08-03', 'Shueisha', '8.21', '153530291910886.jpg', '15348684442248', '15348684513182', '15348684994188', '2018-08-26 17:01:59', '2018-08-26 17:01:59', '1534867854137', '1534867854137'),
(6, '153530301310848', 'Boku no Hero Academia: Sukue! Kyuujo Kunren!', 'UA High School must regain the public\'s confidence after the surprise villain attack during class 1-A\'s training session. Although some of the teachers were gravely injured in the attack, Izuku "Deku" Midoriya and his classmates must continue to learn and train, and utilize their quirks in varying environments and circumstances.\r\n\r\nBoku no Hero Academia: Sukue! Kyuujo Kunren! follows class 1-A as they attempt to finally complete their training. However, there\'s a masked figure roaming around the training center. Have the villains responsible for the previous incident returned to finish the job? If so, are the students ready to fight back?', '1', '2017-04-04', 'None found', '7.57', '153530301310147.jpg', '15348684442248', '15348684513775', '15348684994243', '2018-08-26 17:03:33', '2018-08-26 17:03:33', '1534867854137', '1534867854137'),
(7, '153530310510020', 'Boku no Hero Academia 2nd Season: Hero Note', 'Recap of Boku no Hero Academia that aired a week before the second season.', '1', '2017-03-25', 'None found', '7.39', '153530310510748.jpg', '15348684442248', '15348684513536', '15348684994243', '2018-08-26 17:05:05', '2018-08-26 17:05:05', '1534867854137', '1534867854137'),
(8, '153537867510363', 'Asobi Asobase', 'Hanako, an athletically proficient, yet thick-headed student with a weird fashion sense, plays a game with the American transfer student Olivia. However, their vigor irritated their classmate Kasuki who dislikes playing games since she has always been teased by her sister for being bad at them. With a turn of events, it was found out that Hanako is terrible at English. Thus, she asked her foreign classmate Olivia to help her, but Olivia, who is only born and raised in Japan with foreign parents, can\'t actually speak English at all! Watch over these three girls\' surreal school-life comedy.', '0', '2018-07-08', 'None found', '7.84', '153537867510730.jpg', '15348684442425', '15348684513013', '15348684994188', '2018-08-27 14:04:35', '2018-08-27 14:04:35', '1534867854137', '1534867854137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video_genres`
--

CREATE TABLE `tbl_video_genres` (
  `no` int(10) NOT NULL,
  `id_video_genre` varchar(30) NOT NULL,
  `id_video_detail` varchar(30) NOT NULL,
  `id_setting_genre` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video_genres`
--

INSERT INTO `tbl_video_genres` (`no`, `id_video_genre`, `id_video_detail`, `id_setting_genre`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '153538536211257', '153537867510363', '15348681591885', '2018-08-27 15:56:02', '2018-08-27 15:56:02', '1534867854137', '1534867854137'),
(2, '153538541411684', '153537867510363', '15348681591807', '2018-08-27 15:56:54', '2018-08-27 15:56:54', '1534867854137', '1534867854137'),
(3, '153538542311905', '153537867510363', '15348681601751', '2018-08-27 15:57:03', '2018-08-27 15:57:03', '1534867854137', '1534867854137');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video_locations`
--

CREATE TABLE `tbl_video_locations` (
  `no` int(10) NOT NULL,
  `id_video_location` varchar(30) NOT NULL,
  `id_video_detail` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `report_error` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video_locations`
--

INSERT INTO `tbl_video_locations` (`no`, `id_video_location`, `id_video_detail`, `title`, `url`, `report_error`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, '153547130412109', '153537867510363', 'Asobi Asobase Episode - 1', 'https://www.youtube.com/embed/DYDZAvNJQkM', '', '2018-08-28 15:48:24', '2019-05-15 17:13:40', '1534867854137', '1534867854137'),
(4, '153547157312016', '153537867510363', 'Asobi Asobase Episode - 2', '#', '0', '2018-08-28 15:52:53', '2018-08-28 15:52:53', '1534867854137', '1534867854137'),
(5, '153547162312175', '153537867510363', 'Asobi Asobase Episode - 3', '#', '0', '2018-08-28 15:53:43', '2018-08-28 15:53:43', '1534867854137', '1534867854137'),
(6, '153547162912911', '153537867510363', 'Asobi Asobase Episode - 4', '#', '0', '2018-08-28 15:53:49', '2018-08-28 15:59:36', '1534867854137', '1534867854137'),
(7, '153547198812000', '153537867510363', 'Asobi Asobase Episode - 5', '#', '0', '2018-08-28 15:59:48', '2018-08-28 15:59:48', '1534867854137', '1534867854137'),
(8, '153547199612662', '153537867510363', 'Asobi Asobase Episode - 6', '#', '0', '2018-08-28 15:59:56', '2018-08-28 15:59:56', '1534867854137', '1534867854137'),
(9, '153547200312370', '153537867510363', 'Asobi Asobase Episode - 7', '#', '0', '2018-08-28 16:00:03', '2018-08-28 16:00:03', '1534867854137', '1534867854137'),
(10, '155797715012185', '153530089310585', 'Boku no Hero Academia Episode - 1', '#', '0', '2019-05-16 03:25:50', '2019-05-16 03:25:50', '1557977116110', '1557977116110');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video_reports`
--

CREATE TABLE `tbl_video_reports` (
  `no` int(10) NOT NULL,
  `id_video_report` varchar(30) NOT NULL,
  `id_video_location` varchar(30) NOT NULL,
  `report` enum('0','1','2','3') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video_reports`
--

INSERT INTO `tbl_video_reports` (`no`, `id_video_report`, `id_video_location`, `report`, `created_at`, `updated_at`) VALUES
(11, '4e089037b3d03b0014b189865aba90', '153547130412109', '1', '2019-05-16 03:13:25', '2019-05-16 03:13:25'),
(12, '6995d14e7c3cc8040c9ac1b015abe5', '155797715012185', '2', '2019-05-16 03:30:34', '2019-05-16 03:30:34'),
(13, '2f49a780dce2ca151b1c2d31372fef', '153547130412109', '2', '2019-05-16 03:42:15', '2019-05-16 03:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video_viewers`
--

CREATE TABLE `tbl_video_viewers` (
  `no` int(10) NOT NULL,
  `id_video_viewer` varchar(30) NOT NULL,
  `id_video_location` varchar(30) NOT NULL,
  `mac_address` varchar(30) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video_viewers`
--

INSERT INTO `tbl_video_viewers` (`no`, `id_video_viewer`, `id_video_location`, `mac_address`, `ip_address`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, '0fba39f9cb74a2372912f864b58bb3', '153547130412109', '', '::1', '', '', '2019-05-15 17:49:14', '2019-05-15 17:49:14'),
(2, '84d1a09cd2cdf93d052ee274dfa246', '153547200312370', '', '::1', '', '', '2019-05-16 03:12:59', '2019-05-16 03:12:59'),
(3, 'a5061f813bd348776f1cf58c35d74d', '153547200312370', '', '::1', '', '', '2019-05-16 03:13:00', '2019-05-16 03:13:00'),
(4, '0f6cab5be59b7fa62fde72ec39059c', '153547130412109', '', '::1', '', '', '2019-05-16 03:13:12', '2019-05-16 03:13:12'),
(5, 'b1db8a41d7af415d543a8e83715fc5', '153547130412109', '', '::1', '', '', '2019-05-16 03:13:26', '2019-05-16 03:13:26'),
(6, '2d5f8d258f823a963a111445ae7643', '155797715012185', '', '182.0.143.149', '', '', '2019-05-16 03:30:19', '2019-05-16 03:30:19'),
(7, '2d5f8d258f823a963a111445ae7643', '155797715012185', '', '182.0.143.149', '', '', '2019-05-16 03:30:19', '2019-05-16 03:30:19'),
(8, '6995d14e7c3cc8040c9ac1b015abe5', '155797715012185', '', '182.0.143.149', '', '', '2019-05-16 03:30:34', '2019-05-16 03:30:34'),
(9, '601e72d81f1cfdbf516bf7d0bae6c0', '155797715012185', '', '182.0.143.149', '', '', '2019-05-16 03:30:36', '2019-05-16 03:30:36'),
(10, 'b4fae69d798d97d9da2ab98b6addc4', '153547130412109', '', '182.0.143.149', '', '', '2019-05-16 03:42:04', '2019-05-16 03:42:04'),
(11, '2f49a780dce2ca151b1c2d31372fef', '153547130412109', '', '182.0.143.149', '', '', '2019-05-16 03:42:15', '2019-05-16 03:42:15');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_video_details`
--
CREATE TABLE `view_video_details` (
`no` int(10)
,`id_video_detail` varchar(30)
,`title` varchar(100)
,`synopsis` text
,`status` enum('0','1')
,`broadcast` date
,`producer` varchar(100)
,`score` varchar(10)
,`photo` varchar(255)
,`id_setting_season` varchar(30)
,`season` varchar(50)
,`id_setting_type` varchar(30)
,`type` varchar(50)
,`id_setting_year` varchar(30)
,`year` year(4)
,`created_at` timestamp
,`updated_at` timestamp
,`created_by` varchar(30)
,`updated_by` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_video_genres`
--
CREATE TABLE `view_video_genres` (
`no` int(10)
,`id_video_genre` varchar(30)
,`id_video_detail` varchar(30)
,`id_setting_genre` varchar(30)
,`genre` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
,`created_by` varchar(30)
,`updated_by` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_video_reports`
--
CREATE TABLE `view_video_reports` (
`no` int(10)
,`id_video_report` varchar(30)
,`id_video_location` varchar(30)
,`id_video_detail` varchar(30)
,`report` enum('0','1','2','3')
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_video_details`
--
DROP TABLE IF EXISTS `view_video_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_video_details`  AS  select `a`.`no` AS `no`,`a`.`id_video_detail` AS `id_video_detail`,`a`.`title` AS `title`,`a`.`synopsis` AS `synopsis`,`a`.`status` AS `status`,`a`.`broadcast` AS `broadcast`,`a`.`producer` AS `producer`,`a`.`score` AS `score`,`a`.`photo` AS `photo`,`b`.`id_setting_season` AS `id_setting_season`,`b`.`season` AS `season`,`c`.`id_setting_type` AS `id_setting_type`,`c`.`type` AS `type`,`d`.`id_setting_year` AS `id_setting_year`,`d`.`year` AS `year`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`created_by` AS `created_by`,`a`.`updated_by` AS `updated_by` from (((`tbl_video_details` `a` join `tbl_setting_seasons` `b`) join `tbl_setting_types` `c`) join `tbl_setting_years` `d`) where ((`a`.`id_setting_season` = `b`.`id_setting_season`) and (`a`.`id_setting_type` = `c`.`id_setting_type`) and (`a`.`id_setting_year` = `d`.`id_setting_year`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_video_genres`
--
DROP TABLE IF EXISTS `view_video_genres`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_video_genres`  AS  select `a`.`no` AS `no`,`a`.`id_video_genre` AS `id_video_genre`,`a`.`id_video_detail` AS `id_video_detail`,`b`.`id_setting_genre` AS `id_setting_genre`,`b`.`genre` AS `genre`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`created_by` AS `created_by`,`a`.`updated_by` AS `updated_by` from (`tbl_video_genres` `a` join `tbl_setting_genres` `b`) where (`a`.`id_setting_genre` = `b`.`id_setting_genre`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_video_reports`
--
DROP TABLE IF EXISTS `view_video_reports`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_video_reports`  AS  (select `a`.`no` AS `no`,`a`.`id_video_report` AS `id_video_report`,`a`.`id_video_location` AS `id_video_location`,`b`.`id_video_detail` AS `id_video_detail`,`a`.`report` AS `report`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at` from (`tbl_video_reports` `a` join `tbl_video_locations` `b`) where (`a`.`id_video_location` = `b`.`id_video_location`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_setting_genres`
--
ALTER TABLE `tbl_setting_genres`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_setting_genre` (`id_setting_genre`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_updated` (`updated_by`);

--
-- Indexes for table `tbl_setting_seasons`
--
ALTER TABLE `tbl_setting_seasons`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_setting_season` (`id_setting_season`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_update` (`updated_by`);

--
-- Indexes for table `tbl_setting_types`
--
ALTER TABLE `tbl_setting_types`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_setting_types` (`id_setting_type`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_updated` (`updated_by`);

--
-- Indexes for table `tbl_setting_years`
--
ALTER TABLE `tbl_setting_years`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_setting_year` (`id_setting_year`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_updated` (`updated_by`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_video_details`
--
ALTER TABLE `tbl_video_details`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_video_detail` (`id_video_detail`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_updated` (`updated_by`),
  ADD KEY `id_setting_season` (`id_setting_season`),
  ADD KEY `id_setting_type` (`id_setting_type`),
  ADD KEY `id_setting_year` (`id_setting_year`);

--
-- Indexes for table `tbl_video_genres`
--
ALTER TABLE `tbl_video_genres`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_video_genre` (`id_video_genre`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_updated` (`updated_by`),
  ADD KEY `id_setting_genre` (`id_setting_genre`),
  ADD KEY `id_video_detail` (`id_video_detail`);

--
-- Indexes for table `tbl_video_locations`
--
ALTER TABLE `tbl_video_locations`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_video_location` (`id_video_location`),
  ADD KEY `user_created` (`created_by`),
  ADD KEY `user_updated` (`updated_by`),
  ADD KEY `id_video_detail` (`id_video_detail`);

--
-- Indexes for table `tbl_video_reports`
--
ALTER TABLE `tbl_video_reports`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_video_report` (`id_video_report`),
  ADD KEY `id_video_location` (`id_video_location`);

--
-- Indexes for table `tbl_video_viewers`
--
ALTER TABLE `tbl_video_viewers`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_video_location` (`id_video_location`),
  ADD KEY `id_video_viewer` (`id_video_viewer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_setting_genres`
--
ALTER TABLE `tbl_setting_genres`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_setting_seasons`
--
ALTER TABLE `tbl_setting_seasons`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_setting_types`
--
ALTER TABLE `tbl_setting_types`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_setting_years`
--
ALTER TABLE `tbl_setting_years`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_video_details`
--
ALTER TABLE `tbl_video_details`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_video_genres`
--
ALTER TABLE `tbl_video_genres`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_video_locations`
--
ALTER TABLE `tbl_video_locations`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_video_reports`
--
ALTER TABLE `tbl_video_reports`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_video_viewers`
--
ALTER TABLE `tbl_video_viewers`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_setting_genres`
--
ALTER TABLE `tbl_setting_genres`
  ADD CONSTRAINT `tbl_setting_genres_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_setting_genres_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_setting_seasons`
--
ALTER TABLE `tbl_setting_seasons`
  ADD CONSTRAINT `tbl_setting_seasons_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_setting_seasons_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_setting_types`
--
ALTER TABLE `tbl_setting_types`
  ADD CONSTRAINT `tbl_setting_types_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_setting_types_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_setting_years`
--
ALTER TABLE `tbl_setting_years`
  ADD CONSTRAINT `tbl_setting_years_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_setting_years_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_video_details`
--
ALTER TABLE `tbl_video_details`
  ADD CONSTRAINT `tbl_video_details_ibfk_1` FOREIGN KEY (`id_setting_season`) REFERENCES `tbl_setting_seasons` (`id_setting_season`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_details_ibfk_2` FOREIGN KEY (`id_setting_type`) REFERENCES `tbl_setting_types` (`id_setting_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_details_ibfk_3` FOREIGN KEY (`id_setting_year`) REFERENCES `tbl_setting_years` (`id_setting_year`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_details_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_details_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_video_genres`
--
ALTER TABLE `tbl_video_genres`
  ADD CONSTRAINT `tbl_video_genres_ibfk_1` FOREIGN KEY (`id_video_detail`) REFERENCES `tbl_video_details` (`id_video_detail`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_genres_ibfk_2` FOREIGN KEY (`id_setting_genre`) REFERENCES `tbl_setting_genres` (`id_setting_genre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_genres_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_genres_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_video_locations`
--
ALTER TABLE `tbl_video_locations`
  ADD CONSTRAINT `tbl_video_locations_ibfk_1` FOREIGN KEY (`id_video_detail`) REFERENCES `tbl_video_details` (`id_video_detail`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_locations_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_video_locations_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_video_reports`
--
ALTER TABLE `tbl_video_reports`
  ADD CONSTRAINT `tbl_video_reports_ibfk_1` FOREIGN KEY (`id_video_location`) REFERENCES `tbl_video_locations` (`id_video_location`);

--
-- Ketidakleluasaan untuk tabel `tbl_video_viewers`
--
ALTER TABLE `tbl_video_viewers`
  ADD CONSTRAINT `tbl_video_viewers_ibfk_1` FOREIGN KEY (`id_video_location`) REFERENCES `tbl_video_locations` (`id_video_location`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
