-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 03:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', '61b64609e59f32bcfe849014c0332720', '2022-03-26 08:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'muna@gmail.com', 4, '2022-03-26 00:07:04', 1),
(2, '::1', 'rizqaalfiani7@gmail.com', 5, '2022-03-26 02:27:18', 1),
(3, '::1', 'rizqaalfiani7@gmail.com', 7, '2022-03-26 08:57:52', 1),
(4, '::1', 'rizqaalfiani7@gmail.com', 7, '2022-03-26 09:04:36', 1),
(5, '::1', 'rizqaalfiani7@gmail.com', 7, '2022-03-26 09:05:41', 1),
(6, '::1', 'rizqaalfiani7@gmail.com', 7, '2022-03-26 09:06:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'yang berubah hanya judul', 'yang-berubah-hanya-judul', 'Rizqa Alfiani', 'yaya', '1648138136_6141e361565d05c96341.png', NULL, '2022-03-24 11:13:05'),
(2, 'One Piece', 'one-piece', 'Rizqa Zain', 'yuga', '1648138309_7d904c23a87d7e0851f4.jpg', NULL, '2022-03-24 11:11:49'),
(17, 'ini percobaan', 'ini-percobaan', 'yayay', 'ohowwwayay', '1648138289_474f8faef5bc490e505a.png', '2022-03-24 11:10:52', '2022-03-24 11:11:29'),
(18, 'ini percobaan yang lain', 'ini-percobaan-yang-lain', 'ddududu', 'yeyyye', '1648138275_e64412405bfb91f0adad.jpg', '2022-03-24 11:11:15', '2022-03-24 11:11:15');

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
(1, '2022-03-24-164011', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1648140466, 1),
(3, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1648270441, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Lasmono Marpaung M.Ak', 'Kpg. Baja Raya No. 154, Cirebon 75565, Kaltim', '2005-08-05 07:28:44', '2022-03-24 12:55:52'),
(2, 'Iriana Nuraini', 'Psr. Baan No. 695, Palangka Raya 87449, Gorontalo', '1992-02-08 11:02:26', '2022-03-24 12:55:53'),
(3, 'Hamzah Mustofa M.Kom.', 'Psr. Basuki No. 954, Palu 67272, Sumbar', '2012-07-21 17:55:18', '2022-03-24 12:55:53'),
(4, 'Amalia Kezia Rahimah S.Kom', 'Ki. Suprapto No. 306, Sungai Penuh 16394, Banten', '2010-10-23 23:36:08', '2022-03-24 12:55:53'),
(5, 'Maryadi Cawisadi Pranowo S.Sos', 'Ds. Adisucipto No. 459, Dumai 63657, Maluku', '1978-12-06 17:52:44', '2022-03-24 12:55:53'),
(6, 'Calista Rahayu', 'Ki. Wora Wari No. 766, Malang 17937, Kalteng', '2008-03-31 07:50:50', '2022-03-24 12:55:53'),
(7, 'Estiono Iswahyudi', 'Gg. Pasirkoja No. 417, Ambon 53137, Kaltara', '2001-03-20 14:26:41', '2022-03-24 12:55:53'),
(8, 'Intan Wahyuni', 'Kpg. Cikutra Timur No. 74, Pariaman 20088, Babel', '1997-05-29 10:51:29', '2022-03-24 12:55:53'),
(9, 'Widya Salwa Nurdiyanti S.Sos', 'Ds. Sam Ratulangi No. 905, Depok 19637, DKI', '1972-03-01 14:02:27', '2022-03-24 12:55:53'),
(10, 'Puput Permata S.Gz', 'Psr. Ters. Pasir Koja No. 84, Medan 34523, Aceh', '1985-11-03 02:55:21', '2022-03-24 12:55:53'),
(11, 'Nova Rika Purnawati M.TI.', 'Dk. Bakau Griya Utama No. 792, Batam 85842, Jambi', '1987-09-20 05:16:55', '2022-03-24 12:55:53'),
(12, 'Mustofa Pardi Setiawan S.Farm', 'Ki. Padang No. 315, Surabaya 39476, Sultra', '1977-10-18 12:37:28', '2022-03-24 12:55:53'),
(13, 'Ika Mardhiyah M.Ak', 'Ki. Industri No. 213, Padangsidempuan 79536, Sumut', '2021-11-21 03:21:42', '2022-03-24 12:55:53'),
(14, 'Rusman Karma Ramadan M.Ak', 'Jln. Wora Wari No. 674, Depok 20807, Sultra', '1990-03-09 09:59:24', '2022-03-24 12:55:53'),
(15, 'Karimah Jamalia Utami', 'Psr. Jambu No. 279, Bontang 49628, NTB', '2009-10-10 17:56:41', '2022-03-24 12:55:53'),
(16, 'Vero Widodo S.Psi', 'Kpg. Dewi Sartika No. 100, Sabang 13053, DIY', '1981-01-23 05:07:10', '2022-03-24 12:55:53'),
(17, 'Jasmin Fujiati', 'Ki. Aceh No. 604, Palu 51728, Sulut', '1984-11-17 07:16:51', '2022-03-24 12:55:53'),
(18, 'Surya Mahendra', 'Ki. Baranang Siang Indah No. 306, Parepare 79719, Bengkulu', '2009-03-05 03:52:50', '2022-03-24 12:55:53'),
(19, 'Lasmono Januar', 'Dk. Abdul. Muis No. 962, Kotamobagu 90090, Bengkulu', '1977-03-25 02:54:02', '2022-03-24 12:55:53'),
(20, 'Ella Susanti', 'Ki. Bazuka Raya No. 48, Sungai Penuh 30992, Sulsel', '1989-11-06 12:20:34', '2022-03-24 12:55:54'),
(21, 'Amelia Dian Mayasari S.Psi', 'Ki. Jamika No. 543, Administrasi Jakarta Utara 39244, Sulsel', '2013-07-24 03:47:18', '2022-03-24 12:55:54'),
(22, 'Setya Prakasa', 'Gg. Baranang Siang No. 92, Bogor 40648, Bengkulu', '1989-06-02 20:12:55', '2022-03-24 12:55:54'),
(23, 'Taswir Salahudin', 'Gg. Bass No. 879, Bandar Lampung 75895, Sumut', '2021-07-23 07:45:35', '2022-03-24 12:55:54'),
(24, 'Catur Wasita', 'Ds. Padma No. 841, Padangpanjang 90216, Banten', '1999-08-23 21:49:48', '2022-03-24 12:55:54'),
(25, 'Naradi Nashiruddin S.Kom', 'Jr. Jaksa No. 439, Padangsidempuan 58252, Jambi', '1971-11-18 20:52:05', '2022-03-24 12:55:54'),
(26, 'Putri Palastri', 'Kpg. Orang No. 429, Tarakan 40302, Maluku', '2004-05-06 16:02:29', '2022-03-24 12:55:54'),
(27, 'Darsirah Santoso S.Psi', 'Dk. Padang No. 776, Singkawang 80838, Maluku', '2008-05-13 19:35:23', '2022-03-24 12:55:54'),
(28, 'Padma Sarah Wahyuni M.TI.', 'Jr. Perintis Kemerdekaan No. 348, Kupang 87881, DIY', '2013-10-29 12:03:32', '2022-03-24 12:55:54'),
(29, 'Lintang Farhunnisa Yolanda', 'Jr. Abdullah No. 115, Kendari 58740, Jatim', '1979-12-03 03:33:23', '2022-03-24 12:55:54'),
(30, 'Kamidin Cawisono Prabowo', 'Jr. K.H. Maskur No. 650, Pematangsiantar 85256, DIY', '2005-02-10 03:17:53', '2022-03-24 12:55:54'),
(31, 'Ghaliyati Nasyidah', 'Jln. Kebangkitan Nasional No. 551, Kendari 45848, Bali', '2014-05-13 15:46:20', '2022-03-24 12:55:54'),
(32, 'Gangsar Waluyo', 'Gg. Bank Dagang Negara No. 712, Tanjung Pinang 71502, Jatim', '2010-04-20 09:23:29', '2022-03-24 12:55:54'),
(33, 'Aisyah Yulianti', 'Kpg. Honggowongso No. 254, Sorong 82348, DIY', '1981-08-15 16:01:16', '2022-03-24 12:55:54'),
(34, 'Umay Artanto Maheswara', 'Jr. Adisumarmo No. 343, Blitar 25269, Kalteng', '1980-06-08 01:11:55', '2022-03-24 12:55:54'),
(35, 'Wardaya Hutapea M.Pd', 'Psr. Moch. Toha No. 991, Batu 15953, Gorontalo', '1976-06-27 17:50:27', '2022-03-24 12:55:54'),
(36, 'Balidin Pangestu', 'Ds. Juanda No. 271, Magelang 54020, Gorontalo', '1992-04-16 04:24:28', '2022-03-24 12:55:54'),
(37, 'Yuni Pratiwi', 'Gg. Nakula No. 742, Denpasar 24797, DIY', '1977-01-18 07:50:58', '2022-03-24 12:55:54'),
(38, 'Gasti Mardhiyah S.Sos', 'Jln. Bakhita No. 454, Administrasi Jakarta Pusat 21981, Sumbar', '1976-10-02 14:46:13', '2022-03-24 12:55:54'),
(39, 'Mursinin Ajiman Maulana', 'Psr. Ters. Pasir Koja No. 521, Tebing Tinggi 34061, Lampung', '2004-10-24 23:50:11', '2022-03-24 12:55:54'),
(40, 'Indah Zulaika S.Gz', 'Gg. Tambak No. 109, Langsa 57323, DKI', '1998-09-03 00:33:57', '2022-03-24 12:55:54'),
(41, 'Eva Zulaika', 'Jr. Bakhita No. 221, Palu 41788, Sulsel', '2007-10-17 04:12:57', '2022-03-24 12:55:54'),
(42, 'Hana Yolanda', 'Gg. Nakula No. 756, Sorong 98751, Kalsel', '2015-06-05 00:34:00', '2022-03-24 12:55:54'),
(43, 'Icha Nasyiah', 'Ki. Baja Raya No. 860, Surakarta 50333, Sumbar', '2015-06-07 02:21:35', '2022-03-24 12:55:54'),
(44, 'Marwata Wahyudin', 'Ki. Honggowongso No. 593, Kupang 51966, Sulbar', '2011-01-01 23:40:44', '2022-03-24 12:55:55'),
(45, 'Diana Wastuti', 'Dk. Katamso No. 340, Batu 48518, Maluku', '1978-10-22 19:10:00', '2022-03-24 12:55:55'),
(46, 'Okto Dabukke', 'Ki. Pasteur No. 584, Tangerang Selatan 68276, Banten', '1986-10-17 14:30:32', '2022-03-24 12:55:55'),
(47, 'Hasan Pangestu', 'Psr. Untung Suropati No. 963, Bogor 58502, NTT', '1981-03-31 10:23:46', '2022-03-24 12:55:55'),
(48, 'Mumpuni Simanjuntak', 'Jr. Panjaitan No. 331, Bandar Lampung 34992, DKI', '1991-06-06 06:10:27', '2022-03-24 12:55:55'),
(49, 'Luhung Siregar S.Kom', 'Kpg. Dewi Sartika No. 289, Serang 95273, Lampung', '2013-11-27 18:41:37', '2022-03-24 12:55:55'),
(50, 'Reza Daliman Wahyudin', 'Dk. Peta No. 984, Sawahlunto 59615, Kepri', '2011-10-07 14:47:40', '2022-03-24 12:55:55'),
(51, 'Radit Pradipta', 'Dk. Baranang Siang No. 418, Pangkal Pinang 63311, Jabar', '1997-05-11 00:45:09', '2022-03-24 12:55:55'),
(52, 'Febi Hastuti', 'Jr. Dahlia No. 847, Tegal 52408, Kalbar', '1984-07-16 19:06:47', '2022-03-24 12:55:55'),
(53, 'Anita Hassanah', 'Psr. Kartini No. 346, Padang 25065, Gorontalo', '2019-09-29 12:01:45', '2022-03-24 12:55:55'),
(54, 'Raina Handayani', 'Kpg. Samanhudi No. 969, Sukabumi 13230, Bali', '2012-04-02 19:14:25', '2022-03-24 12:55:55'),
(55, 'Lembah Waluyo', 'Dk. Ketandan No. 572, Manado 16464, Riau', '2003-05-11 20:35:04', '2022-03-24 12:55:55'),
(56, 'Titin Maya Nuraini', 'Ds. Padma No. 821, Serang 99118, Maluku', '2017-06-30 12:48:04', '2022-03-24 12:55:55'),
(57, 'Faizah Yuliarti S.Gz', 'Kpg. Baja Raya No. 314, Probolinggo 15909, Jateng', '2010-07-21 02:48:41', '2022-03-24 12:55:55'),
(58, 'Banara Tarihoran', 'Dk. Ters. Buah Batu No. 67, Lubuklinggau 30340, Jambi', '2014-06-17 16:37:58', '2022-03-24 12:55:55'),
(59, 'Vanya Wahyuni', 'Ds. Labu No. 531, Serang 67090, Sumut', '1994-09-25 19:38:21', '2022-03-24 12:55:55'),
(60, 'Shania Vanesa Nasyiah M.Kom.', 'Jr. Flora No. 936, Parepare 70420, Jateng', '1980-04-06 15:40:08', '2022-03-24 12:55:55'),
(61, 'Dipa Thamrin', 'Ds. Setia Budi No. 719, Bandung 24448, Pabar', '2006-02-01 05:13:03', '2022-03-24 12:55:55'),
(62, 'Cici Suryatmi M.Farm', 'Psr. Sukajadi No. 717, Administrasi Jakarta Selatan 84724, Sulut', '1992-01-06 23:15:09', '2022-03-24 12:55:55'),
(63, 'Cici Elisa Palastri', 'Kpg. Sutoyo No. 794, Cimahi 42472, Sumsel', '1971-02-06 12:16:03', '2022-03-24 12:55:55'),
(64, 'Violet Michelle Agustina S.IP', 'Ki. Ciwastra No. 733, Palopo 80842, Sumut', '1979-03-16 01:38:53', '2022-03-24 12:55:55'),
(65, 'Elma Sudiati M.Kom.', 'Jr. Urip Sumoharjo No. 638, Tanjungbalai 57256, Malut', '1978-07-31 12:20:07', '2022-03-24 12:55:55'),
(66, 'Artanto Budiman', 'Kpg. Ciwastra No. 190, Ternate 22765, NTB', '1991-08-22 07:45:48', '2022-03-24 12:55:55'),
(67, 'Dewi Yuniar', 'Ki. Babadan No. 561, Tasikmalaya 37765, Sumut', '2016-08-29 05:19:36', '2022-03-24 12:55:55'),
(68, 'Ihsan Ihsan Budiman M.M.', 'Psr. Baha No. 117, Batam 22072, Riau', '1998-09-26 07:05:15', '2022-03-24 12:55:55'),
(69, 'Jasmin Pratiwi S.I.Kom', 'Psr. Bagonwoto  No. 937, Tanjungbalai 68443, Lampung', '1972-12-06 00:09:22', '2022-03-24 12:55:56'),
(70, 'Tasnim Banara Zulkarnain', 'Jr. Sam Ratulangi No. 983, Pariaman 66054, Sulbar', '2010-04-11 19:06:36', '2022-03-24 12:55:56'),
(71, 'Cahya Kuswoyo S.H.', 'Dk. Abang No. 645, Serang 38245, Papua', '1995-03-12 04:11:50', '2022-03-24 12:55:56'),
(72, 'Bahuwirya Salahudin', 'Jln. Wahidin Sudirohusodo No. 536, Medan 93666, Sultra', '2001-09-20 22:31:15', '2022-03-24 12:55:56'),
(73, 'Hartana Wardaya Hidayat', 'Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 238, Pekalongan 91692, Sulbar', '2021-02-22 04:51:41', '2022-03-24 12:55:56'),
(74, 'Kunthara Santoso S.Pt', 'Jln. Suryo Pranoto No. 49, Balikpapan 18514, Aceh', '2007-05-30 08:17:57', '2022-03-24 12:55:56'),
(75, 'Padma Lalita Yuniar S.Psi', 'Ki. Abdul No. 775, Medan 62228, Sulteng', '1996-09-25 06:50:12', '2022-03-24 12:55:56'),
(76, 'Hasim Cengkir Habibi', 'Gg. Ciumbuleuit No. 789, Semarang 70313, Aceh', '1982-07-01 14:45:25', '2022-03-24 12:55:56'),
(77, 'Keisha Yuliarti', 'Jln. Honggowongso No. 55, Administrasi Jakarta Utara 46005, Sulteng', '1991-11-20 04:41:23', '2022-03-24 12:55:56'),
(78, 'Malika Usada', 'Gg. Fajar No. 975, Magelang 30433, Jateng', '1993-12-27 22:20:58', '2022-03-24 12:55:56'),
(79, 'Jessica Mandasari S.H.', 'Ds. Baja No. 224, Parepare 57360, Kalteng', '1999-12-24 17:33:40', '2022-03-24 12:55:56'),
(80, 'Cornelia Hana Widiastuti', 'Psr. Pelajar Pejuang 45 No. 409, Banda Aceh 60381, DKI', '2007-09-11 03:58:45', '2022-03-24 12:55:56'),
(81, 'Kamidin Waskita S.Pt', 'Dk. Supomo No. 505, Tarakan 19131, Sulsel', '2004-01-27 05:13:34', '2022-03-24 12:55:56'),
(82, 'Dinda Widiastuti', 'Psr. Abdul Rahmat No. 307, Langsa 58551, DIY', '2014-02-11 13:34:19', '2022-03-24 12:55:56'),
(83, 'Farah Amalia Rahimah', 'Ki. Karel S. Tubun No. 80, Metro 10547, NTT', '2000-12-11 00:50:22', '2022-03-24 12:55:56'),
(84, 'Anita Permata S.E.', 'Jr. Baik No. 486, Dumai 34211, Malut', '1991-03-18 19:47:38', '2022-03-24 12:55:57'),
(85, 'Nilam Susanti S.E.I', 'Jr. R.M. Said No. 686, Administrasi Jakarta Timur 93886, Sulsel', '1990-09-12 16:20:23', '2022-03-24 12:55:57'),
(86, 'Febi Hassanah S.H.', 'Ds. Otista No. 746, Magelang 47904, Jabar', '2017-04-26 08:15:12', '2022-03-24 12:55:57'),
(87, 'Mila Laksmiwati', 'Psr. Cemara No. 717, Sukabumi 81543, Riau', '1984-09-26 11:21:22', '2022-03-24 12:55:57'),
(88, 'Najwa Nurdiyanti', 'Ki. Siliwangi No. 482, Palopo 18476, Kepri', '1978-04-04 19:54:32', '2022-03-24 12:55:57'),
(89, 'Ratih Suartini', 'Jr. Moch. Toha No. 464, Administrasi Jakarta Barat 20527, Sumbar', '2010-07-12 01:14:27', '2022-03-24 12:55:57'),
(90, 'Yani Tantri Rahimah S.E.I', 'Kpg. Basuki No. 365, Kupang 96966, Sumbar', '1993-02-08 16:52:23', '2022-03-24 12:55:57'),
(91, 'Banara Mandala', 'Jln. Bass No. 162, Bengkulu 20260, Kaltara', '1989-04-02 18:08:10', '2022-03-24 12:55:57'),
(92, 'Aurora Widiastuti', 'Ds. Sutoyo No. 125, Langsa 90185, Sumut', '1978-06-23 08:05:30', '2022-03-24 12:55:57'),
(93, 'Karimah Astuti S.Psi', 'Psr. Barasak No. 944, Batu 81792, Sulut', '1983-04-04 18:06:31', '2022-03-24 12:55:57'),
(94, 'Tania Tantri Wulandari', 'Dk. Baan No. 983, Tebing Tinggi 74674, Sulsel', '2007-07-11 06:17:32', '2022-03-24 12:55:57'),
(95, 'Tania Namaga S.Farm', 'Dk. Abdul. Muis No. 91, Bitung 58872, Banten', '1973-06-23 07:18:39', '2022-03-24 12:55:57'),
(96, 'Lili Utami', 'Gg. Cikutra Timur No. 540, Bogor 64735, Jabar', '2009-09-01 07:33:25', '2022-03-24 12:55:57'),
(97, 'Embuh Prasetya', 'Jr. Kebonjati No. 874, Palembang 52985, Bengkulu', '2014-05-22 17:23:48', '2022-03-24 12:55:57'),
(98, 'Umi Wulandari', 'Gg. Haji No. 701, Bau-Bau 80823, Bengkulu', '2017-07-22 17:59:48', '2022-03-24 12:55:57'),
(99, 'Setya Vero Uwais', 'Ds. Bakau Griya Utama No. 564, Palembang 62387, NTB', '1989-08-21 06:14:16', '2022-03-24 12:55:57'),
(100, 'Marwata Maulana S.Gz', 'Ds. B.Agam 1 No. 540, Ternate 70535, Jabar', '1986-08-05 12:16:03', '2022-03-24 12:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'almadinahtul@gmail.com', 'Munna', '$2y$10$pRKTBDKFYLkDayfeD6UlguHubEhwYHnriIXKM6PBrFTxR4Tihd1Ki', NULL, NULL, NULL, '8158b1608864f401f360069a380e5db9', NULL, NULL, 0, 0, '2022-03-26 08:54:32', '2022-03-26 08:54:32', NULL),
(7, 'rizqaalfiani7@gmail.com', 'Rizqa23', '$2y$10$fHtV5JEMJHmNRM.RFawageqrLuDSlB4TFFPztLVWvBNDDXT.WvGb.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-26 08:57:10', '2022-03-26 08:57:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
