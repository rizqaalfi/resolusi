-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 04:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `slug_admin` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `slug_admin`, `password`, `email`) VALUES
(1, 'itrsch', '', '85c90ed3bcdb8534c5bbda75b3708f26ddde4740', 'itrsch@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `artikel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_artikel` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`artikel_id`, `user_id`, `category_id`, `title`, `slug_artikel`, `content`, `image`, `date_post`, `status`, `keywords`) VALUES
(5, 1, 5, 'Bahaya Virus Corona', '5-bahaya-virus-corona', '<p>Jumlah kasus positif virus corona baru COVID-19 di Indonesia semakin meningkat dari hari ke hari. Pemerintah pun mengimbau seluruh masyarakat agar sebisa mungkin bekerja, belajar, dan beribadah dari rumah guna mencegah penularan virus corona. Idealnya, Anda memang tidak boleh bepergian ke luar rumah, kecuali untuk urusan tertentu yang bersifat mendesak. Tapi, jika memang harus ke luar rumah, sebaiknya lakukan beberapa hal berikut ketika sampai di rumah setelah bepergian, terutama di tengah wabah virus corona.Jumlah kasus positif virus corona baru COVID-19 di Indonesia semakin meningkat dari hari ke hari. Pemerintah pun mengimbau seluruh masyarakat agar sebisa mungkin bekerja, belajar, dan beribadah dari rumah guna mencegah penularan virus corona. Idealnya, Anda memang tidak boleh bepergian ke luar rumah, kecuali untuk urusan tertentu yang bersifat mendesak. Tapi, jika memang harus ke luar rumah, sebaiknya lakukan beberapa hal berikut ketika sampai di rumah setelah bepergian, terutama di tengah wabah virus corona.</p>\r\n<p>Jumlah kasus positif virus corona baru COVID-19 di Indonesia semakin meningkat dari hari ke hari. Pemerintah pun mengimbau seluruh masyarakat agar sebisa mungkin bekerja, belajar, dan beribadah dari rumah guna mencegah penularan virus corona. Idealnya, Anda memang tidak boleh bepergian ke luar rumah, kecuali untuk urusan tertentu yang bersifat mendesak. Tapi, jika memang harus ke luar rumah, sebaiknya lakukan beberapa hal berikut ketika sampai di rumah setelah bepergian, terutama di tengah wabah virus corona.Jumlah kasus positif virus corona baru COVID-19 di Indonesia semakin meningkat dari hari ke hari. Pemerintah pun mengimbau seluruh masyarakat agar sebisa mungkin bekerja, belajar, dan beribadah dari rumah guna mencegah penularan virus corona. Idealnya, Anda memang tidak boleh bepergian ke luar rumah, kecuali untuk urusan tertentu yang bersifat mendesak. Tapi, jika memang harus ke luar rumah, sebaiknya lakukan beberapa hal berikut ketika sampai di rumah setelah bepergian, terutama di tengah wabah virus corona.</p>', 'corona.JPG', '2021-12-10 06:44:07', 'publish', 'viruscorona');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `slug_category` varchar(225) NOT NULL,
  `order_category` int(11) NOT NULL,
  `category_description` text NOT NULL,
  `date_category` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `user_id`, `category_name`, `slug_category`, `order_category`, `category_description`, `date_category`) VALUES
(4, 1, 'Medis', '5-medis', 1, '', '2019-09-10 04:35:28'),
(5, 1, 'Penunjang Medis', 'penunjang-medis', 2, '', '2019-09-10 04:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `nameweb` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `google_maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `metatext` text NOT NULL,
  `fax` text NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `youtube` varchar(225) NOT NULL,
  `penanganan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `nameweb`, `email`, `keywords`, `google_maps`, `logo`, `icon`, `about`, `address`, `city`, `zip_code`, `phone_number`, `metatext`, `fax`, `facebook`, `instagram`, `youtube`, `penanganan`) VALUES
(1, 'Rumah Sakit Citra Husada Jember', 'rs_citrahusada@yahoo.co.id', 'Pickup your items', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.424135247013!2d113.6806659!3d-8.166839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42956e9612f6b07a!2sRumah+Sakit+Citra+Husada!5e0!3m2!1sid!2sid!4v1556759906047!5m2!1sid!2sid\"', 'LOGO_RSCH.png', 'logo_asli.png', '<p style=\"text-align: justify;\"><strong>SAMBUTAN DIREKTUR</strong></p>\r\n<p style=\"text-align: justify;\"><strong><em>Assalamu&rsquo;alaikum Wr. Wb.</em></strong></p>\r\n<p style=\"text-align: justify;\">Selamat datang di situs web resmi Rumah Sakit Citra Husada. Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa sehingga situs web ini bisa kami persembahkan kepada masyarakat luas untuk menjadi akses informasi tentang segenap layanan kami.</p>\r\n<p style=\"text-align: justify;\">Ucapan terima kasih senantiasa kami haturkan setinggi-tingginya kepada masyarakat yang memberikan kepercayaan kepada kami sehingga Rumah Sakit Citra Husada terus tumbuh dan berkembang menjadi rumah sakit yang memberikan pelayanan terbaik dan menjangkau seluruh lapisan masyarakat melalui layanan yang cepat, tepat, mudah, serta senantiasa menjadikan pelayanan yang berkualitas dan terjangkau sebagai visi utama layanan kami. Seiring dengan perkembangan industri kesehatan dan untuk memenuhi kebutuhan pelayanan kesehatan yang optimal bagi masyarakat, Rumah Sakit Citra Husada yang bergerak di bidang industri jasa layanan kesehatan akan terus mengembangkan usaha di seluruh aspek industi layanan kesehatan.</p>\r\n<p style=\"text-align: justify;\">Rumah Sakit Citra Husada dilengkapi layanan gawat darurat, layanan operasi, layanan dokter umum, layanan dokter spesialis, serta beragam layanan lain yang kami dasarkan kepada kebutuhan masyarakat akan pelayanan kesehatan yang berkualitas. Didukung dengan Sumber Daya Manusia yang berkomitmen untuk memberikan pelayanan terbaik di semua lini berupa tenaga medis, perawatan, penunjang medis dan non medis yang berpengalaman, handal dan terpercaya.</p>\r\n<p style=\"text-align: justify;\">Besar harapan kami agar situs web ini dapat memberikan manfaat kepada masyarakat luas utamanya yang membutuhkan akses informasi tentang layanan kami. Kepada mereka semua, kami persembahkan situs web ini. Kami mengucapkan terima kasih kepada seluruh</p>\r\n<p style=\"text-align: justify;\">pemangku kepentingan, mitra, pelanggan, masyarakat, dan semua pihak yang menggunakan fasilitas situs web ini.</p>\r\n<p style=\"text-align: justify;\"><strong><em>Wassalamu&rsquo;alaikum Wr. Wb.</em></strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>SEJARAH</strong></p>\r\n<p style=\"text-align: justify;\">Rumah Sakit Citra Husada Jember diresmikan pada tanggal 16 April 2009 di bawah naungan Yayasan Citra Husada Jember, kemudian dengan berbagai upaya, pada tanggal 15 November 2011 izin operasional tetap diperoleh dari Bupati Jember dengan SK Bupati Jember Nomor 188.45/253/012/2011 Tentang Izin Operasional Tetap Rumah Sakit Citra Husada Jember dan penetapan kelas diperoleh berdasarkan SK Menteri Kesehatan&nbsp; Nomor HK.03.05/I/2375/11 Tentang Penetapan Kelas RS Citra Husada Jember sebagai RS kelas D. Kemudian pada tahun 2016 Rumah Sakit Citra Husada Kembali mendapatkan perpanjangan izin operasional berdasarkan Keputusan Bupati Jember Nomor 188.45/420/1.12/2016 dengan status klasifikasi rumah sakit kelas C dan berlaku sejak 23 Desember 2016. Keputusan tersebut merupakan hal yang mendasar sejalan dengan pembenahan organisasi, pemenuhan SDM, sarana dan prasarana fisik, peralatan medik dan penunjang medik. Rumah Sakit juga telah terakreditasi dengan status tingkat paripurna sejak tanggal 19 Oktober 2017.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>IDENTITAS</strong></p>\r\n<table border=\"1\" cellspacing=\"1\" cellpadding=\"1\">\r\n<tbody>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Nama Rumah Sakit</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>Rumah Sakit Citra Husada</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Alamat Rumah Sakit</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>Jl. Teratai No. 22 Jember</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Kelas Rumah Sakit</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>C</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Status Kepemilikan</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>Yayasan Citra Husada</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Surat Ijin RS</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>188.45/420/1.12/2016</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Tanggal</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>23 Desember 2016</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Oleh</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>Bupati Jember</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Sifat</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>Tetap</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"187\">\r\n<p>Akreditasi</p>\r\n</td>\r\n<td width=\"432\">\r\n<p>Paripurna</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>VISI</strong></p>\r\n<p style=\"text-align: justify;\">Rumah Sakit Swasta Pilihan Dengan Pelayanan Yang Berkualitas Dan Terjangkau</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>MISI</strong></p>\r\n<ol style=\"text-align: justify;\">\r\n<li>Menyelenggarakan pelayanan kesehatan yang bermutu &amp; profesional</li>\r\n<li>Mewujudkan kepuasan pelanggan melalui optimalisasi kinerja</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>MOTTO</strong></p>\r\n<p style=\"text-align: justify;\">Kesehatan Anda Adalah Harapan Kami</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>NILAI</strong></p>\r\n<ol style=\"text-align: justify;\">\r\n<li>Professional</li>\r\n<li>Bekerja sesuai dengan kompetensinya</li>\r\n<li>Bekerja dengan efektif dan efesien</li>\r\n<li>Cakap dan menguasai pekerjaannya</li>\r\n<li>Mengutamakan pasien dan melayani keluarga pasien dengan baik</li>\r\n<li>Respect</li>\r\n<li>Menghormati setiap individu</li>\r\n<li>Mau mendengarkan dan menghargai pendapat orang lain</li>\r\n<li>Menyampaikan penghargaan atau pujian secara memadai</li>\r\n<li>Kedisiplinan</li>\r\n<li>Bekerja dan bertindak sesuai tugas dan aturan</li>\r\n<li>Memulai dan mengakhiri pekerjaan tepat waktu</li>\r\n<li>Tepat janji</li>\r\n<li>Tegas dalam memutuskan suatu masalah tanpa mengurangi keramahan dan kesopanan</li>\r\n<li>Kerjasama</li>\r\n<li>Bekerja secara sinergis baik dalam satu unit maupun dengan unit lain dalam mencapai visi</li>\r\n<li>Saling pengertian dan toleransi diantara sesama anggota Tim</li>\r\n<li>Tidak melakukan hal-hal yang mengakibatkan timbulnya konflik</li>\r\n<li>Tidak egois dan lebih mementingkan keharmonisan Tim</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 'Jl. Teratai 22, Patrang', 'Jember', '68117', '(0331) 486200', '', '(0331) 427088', 'https://www.facebook.com/rscitrahusadajember/', 'https://www.instagram.com/rscitrahusadajember/', 'https://www.youtube.com/channel/UCWrutgBiaPK0vCk_pYxwGhw', 'https://drive.google.com/file/d/1HUd1mLPpo1jvXgPeBY_q1FQKaq0oUi0e/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `message_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `download_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `slug_download` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_description` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`fasilitas_id`, `judul`, `image`, `image_name`, `deskripsi`, `date`) VALUES
(1, 'Gerai ATM', 'atmbni_(1).jpg', 'ATM BNI', '<p>Rumah Sakit Citra Husada menyediakan gerai ATM yang memudahkan pengunjung atau keluarga pasien untuk menarik uang tunai 24 jam ataupun transaksi keuangan lainnya. Gerai ATM terletak di depan Rumah Sakit Citra Husada.</p>', '2021-11-17 01:14:22'),
(2, 'Musholla', 'photo_2021-11-10_16-01-41.jpg', 'Musholla', '<p>Rumah Sakit Citra Husada menyediakan musholla untuk para kaum muslim yang ingin melakukan ibadah. Perlengkapan sholat yang tersedia berupa sajadah, sarung, dan mukenah, serta Al-Qur&rsquo;an. Kondisi yang sejuk dan nyaman membuat pengunjung dan keluarga pasien akan lebih fokus dan khusyu&rsquo; dalam menjalankan ibadah. Musholla Rumah Sakit Citra Husada terletak di sebelah Pav. Rosalina.</p>', '2021-11-17 01:15:35'),
(3, 'Ruang Tunggu Pasien', 'tunggu.jpg', 'Ruang Tunggu', '<p>Rumah Sakit Citra Husada menyediakan ruang tunggu pasien yang berbentuk gazebo. Dengan adanya kolam ikan di bawah gazebo dapat membuat pengunjung atau keluarga pasien merasa nyaman dan sejuk berada di Rumah Sakit Citra Husada. Gazebo terletak di depan Pav. Teratai dan Pav. Tulip.</p>', '2021-11-17 01:18:35'),
(4, 'kantin', 'kantin.jpg', 'kantin', '<p>Kantin Rumah Sakit Citra Husada merupakan tempat yang tepat di saat pengunjung atau keluarga pasien sedang merasa kelaparan. Menyediakan berbagai makanan untuk sarapan, makan siang, maupun snack dan minuman. Kantin Rumah Sakit Citra Husada terletak di sebelah Pav. Teratai.</p>', '2021-11-17 01:19:25'),
(5, 'Cafe', 'cafe.jpg', 'Cafe', '<p>Cafe merupakan tempat yang tepat di saat ppengunjung atau keluarga pasien sedang merasa kelaparan. menyediakan snack, maupun minuman. untuk di Rawat Jalan.</p>', '2021-11-17 01:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `gallery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_name` varchar(225) NOT NULL,
  `slug_gallery` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `gallery_description` text NOT NULL,
  `position` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`gallery_id`, `user_id`, `gallery_name`, `slug_gallery`, `image`, `gallery_description`, `position`, `date`, `status`) VALUES
(11, 1, '1', '12-1', 'Website_11.jpg', 'Tata Cara Pendaftaran', 'slider', '2020-05-11 06:01:19', 'publish'),
(12, 1, '2', '12-2', 'Website_21.jpg', '', 'slider', '2020-04-27 06:16:36', 'publish'),
(15, 1, 'dr. Gofur', '15-dr-gofur', 'Gofur.jpg', '', 'dokter', '2020-05-18 01:38:28', 'publish'),
(16, 1, 'dr. Bagas', 'dr-bagas', 'Bagas.jpg', '', 'dokter', '2020-05-18 01:53:17', 'publish'),
(17, 1, 'dr. Budi', 'dr-budi', 'Budi.jpg', '', 'dokter', '2020-05-18 01:55:15', 'publish'),
(18, 1, 'dr. Arif', 'dr-arif', 'Arif.jpg', '', 'dokter', '2020-05-18 01:55:39', 'publish'),
(19, 1, 'dr. Handi', 'dr-handi', 'Handi.jpg', '', 'dokter', '2020-05-18 01:56:37', 'publish'),
(20, 1, 'dr. Ludfi', 'dr-ludfi', 'Ludfi.jpg', '', 'dokter', '2020-05-18 02:00:37', 'publish'),
(21, 1, 'dr. Yuli', 'dr-yuli', 'Yuli.jpg', '', 'dokter', '2020-05-18 02:00:50', 'publish'),
(22, 1, 'dr. Lukman', '30-dr-lukman', 'Lukman.jpg', '', 'dokter', '2021-11-02 03:34:48', 'publish'),
(23, 1, 'dr. Leni', 'dr-leni', 'Leni.jpg', '', 'dokter', '2020-05-18 02:04:43', 'publish'),
(24, 1, 'dr. Lely', 'dr-lely', 'Lely.jpg', '', 'dokter', '2020-05-18 02:05:29', 'publish'),
(25, 1, 'dr. Kadek', 'dr-kadek', 'kadek.jpg', '', 'dokter', '2020-05-18 02:06:20', 'publish'),
(26, 1, 'dr. Zaki', 'dr-zaki', 'Zaki.jpg', '', 'dokter', '2020-05-18 02:06:35', 'publish'),
(27, 1, 'dr. Natalia', 'dr-natalia', 'Natalia.jpg', '', 'dokter', '2020-05-18 02:06:46', 'publish'),
(29, 1, 'Survey Kepuasan Pelanggan', '30-survey-kepuasan-pelanggan', 'sliderweb1.png', '', 'poster', '2021-11-02 04:01:13', 'publish'),
(31, 1, '10 Penyakit terbesar', '31-10-penyakit-terbesar', '10_Penyakit_Terbesar_(2).png', '', 'poster', '2021-11-02 04:03:44', 'publish'),
(32, 1, 'Standar Pelayanan Pengaduan', 'standar-pelayanan-pengaduan', 'leafflet1.png', '', 'alur_pengaduan', '2021-12-09 06:26:13', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_ri`
--

CREATE TABLE `gambar_ri` (
  `id` int(11) NOT NULL,
  `info_id` int(10) NOT NULL,
  `nama_gambar` varchar(60) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_ri`
--

INSERT INTO `gambar_ri` (`id`, `info_id`, `nama_gambar`, `tanggal`) VALUES
(8, 3, 'vvipa1.JPG', '2021-11-16 00:00:00'),
(9, 3, 'vvipa2.JPG', '2021-11-16 00:00:00'),
(10, 3, 'vvipa3.JPG', '2021-11-16 00:00:00'),
(11, 4, 'vvipb1.JPG', '2021-11-16 00:00:00'),
(12, 4, 'vvipb2.JPG', '2021-11-16 00:00:00'),
(13, 4, 'vvipb3.JPG', '2021-11-16 00:00:00'),
(14, 5, '11.JPG', '2021-11-16 00:00:00'),
(15, 5, '12.JPG', '2021-11-16 00:00:00'),
(16, 5, '13.JPG', '2021-11-16 00:00:00'),
(17, 6, '21.jpg', '2021-11-17 00:00:00'),
(18, 6, '22.jpg', '2021-11-17 00:00:00'),
(19, 6, '23.JPG', '2021-11-17 00:00:00'),
(20, 7, 'kelas3.jpg', '2021-11-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `infors`
--

CREATE TABLE `infors` (
  `info_id` int(11) NOT NULL,
  `infoRs` text NOT NULL,
  `jamRs` text NOT NULL,
  `call` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infors`
--

INSERT INTO `infors` (`info_id`, `infoRs`, `jamRs`, `call`) VALUES
(1, '<p>Rumah Sakit Citra Husada<br />Jalan Teratai No. 22, Patrang. Kab. Jember<br />Jawa Timur, Indonesia 68117</p>', '<p><strong>IGD : 24 Jam</strong></p>\r\n<p><strong>Urikkes : 08.00 - 16.00</strong></p>\r\n<p><strong>Poliklinik : 07.00 - 22.00</strong></p>\r\n<p><strong>Estetika :</strong></p>\r\n<p>Senin - Jumat : 10.00 - 17.00</p>\r\n<p>Sabtu : 07.00 -14.00</p>', '(+62 331) 486200');

-- --------------------------------------------------------

--
-- Table structure for table `info_layanan`
--

CREATE TABLE `info_layanan` (
  `info_id` int(11) NOT NULL,
  `information` text NOT NULL,
  `position` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_layanan`
--

INSERT INTO `info_layanan` (`info_id`, `information`, `position`) VALUES
(1, '<p>&nbsp;</p>\r\n<p>Rumah Sakit Citra Husada menyediakan pelayanan IGD 24 jam dengan dokter jaga on site dan konsul dokter jaga spesialis on call.<br /><br /></p>\r\n<ol>\r\n<ol>Fasilitas &amp; Pelayanan yang diberikan di Instalasi Gawat Darurat sebagai berikut:</ol>\r\n</ol>\r\n<p><br /><br /></p>\r\n<ol>\r\n<ol>\r\n<li>Memiliki kapasitas bed yang sesuai dengan kebutuhan pasien</li>\r\n<li>Ambulance stand by 24 jam dalam penjemputan atau tempat kejadian dengan perawat pendamping</li>\r\n<li>Pemeriksaan penunjang 24 jam (laboratorium, radiologi, EKG)</li>\r\n<li>Layanan Farmasi 24 jam</li>\r\n<li>Pelayanan medis 24 jam</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol>Penanganan instalasi gawat darurat akan dilakukan secara cepat, akurat, dan komprehensif serta didukung dengan fasilitas 24 jam lainnya seperti ICU dan Kamar Operasi siap menjamin pelayanan pasien gawat darurat secara keseluruhan.</ol>\r\n<p>&nbsp;</p>', 'igd'),
(2, '<h3>INFORMASI UMUM</h3>\r\n<p class=\"text-justify\">Rawat jalan adalah pelayanan medis kepada seorang pasien untuk tujuan pengamatan, diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya tanpa mengharuskan pasien tersebut dirawat inap.<br /><br />Rawat jalan di Rumah Sakit Citra Husada dilengkapi dengan sarana dan fasilitas lengkap guna memberikan pelayanan terbaik demi kepuasan pasien.<br />Rawat jalan terdiri dari :<br /><br /></p>\r\n<ol>\r\n<li>Poli Spesialis Penyakit Dalam</li>\r\n<li>Poli Spesialis Anak</li>\r\n<li>Poli Spesialis Bedah</li>\r\n<li>Poli Spesialis Kandungan</li>\r\n<li>Poli Spesialis Mata</li>\r\n<li>Poli Spesialis Gigi &amp; Mulut</li>\r\n<li>Poli Spesialis Syaraf</li>\r\n<li>Poli Spesialis Jantung</li>\r\n<li>Poli Spesialis Orthopedi</li>\r\n<li>Poli Spesialis Kulit dan Kelamin</li>\r\n<li>Poli Umum</li>\r\n<li>Poli KIA</li>\r\n</ol>', 'infoRj'),
(3, '<p>Rumah Sakit Citra Husada menyediakan ruang operasi dengan dukungan para dokter spesialis yang berpengalaman.<br />Ruang operasi yang disediakan terdiri atas ruang operasi bedah umum dan operasi mata yang saat ini juga dilengkapi dengan peralatan operasi mata canggih yaitu PHACOEMULSIFIKASI yang merupakan teknologi operasi katarak terkini.<br />PHACOEMULSIFIKASI adalah teknik operasi katarak yang paling mutakhir dengan menggunakan getaran ultrasonik untuk menghancurkan lensa mata yang buram. Diperlukan irisan yang sangat kecil (2-3 mm) untuk mengeluarkan lenca mata yang sudah hancur tersebut. Irisan kecil tersebut dapat pulih dengan sendirinya tanpa memerlukan jahitan, sehingga memungkinkan pasien dapat melakukan aktifitas normal dengan segera tanpa harus menjalani rawat inap. Operasi ini hanya memakan waktu sekitar 20-30 menit.<br /><br />Fasilitas medis yang tersedia di kamar operasi sebagai berikut:<br /><br /></p>\r\n<ol>\r\n<li>Meja Operasi</li>\r\n<li>Lampu Operasi</li>\r\n<li>Microscpe Mata</li>\r\n<li>Phaco (Operasi Mata)</li>\r\n<li>Sterilisator Kering</li>\r\n<li>Autoclave</li>\r\n<li>Patient Monitor</li>\r\n<li>Anestesi Unit</li>\r\n<li>Suction Pump</li>\r\n<li>Mesin Chouter</li>\r\n<li>Lampu UV 4 lengan</li>\r\n</ol>', 'ok'),
(4, '<p>Unit perawatan intensif adalah suatu tempat khusus dalam suatu rumah sakit yang memberikan pelayanan secara intensif pada pasien yang membutuhkan pemantauan fungsi vital dan terapi yang lebih khusus secara terus menerus dalam 24 jam terutama yang membutuhkan alat bantu pernafasan.<br /><br />Rumah Sakit Citra Husada memiliki ruang ICU dengan kapasitas 4 tempat tidur dengan peralatan khusus yang dilengkapi tenaga perawat yang terampil dan dokter jaga 24 jam. Fasilitas medis yang tersedia di ICU sebagai berikut :<br /><br /></p>\r\n<ol>\r\n<li>Syring Pump</li>\r\n<li>ECG</li>\r\n<li>Patient Monitor</li>\r\n<li>Suction Pump</li>\r\n<li>Nebulizer</li>\r\n<li>Ventilator</li>\r\n<li>DC-Shock</li>\r\n</ol>', 'icu'),
(5, '<p>Medical check up adalah pemeriksaan kesehatan yang bertujuan untuk mengetahui status kesehatan seseorang, bukan untuk mendiagnosis gejala atau mengobati penyakit. Medical checkup mencakup serangkaian wawancara dan pemeriksaan kesehatan. Jenis-jenis dan lingkup pemeriksaan kesehatan dalam medical checkup bervariasi, tergantung keperluan dan permintaannya. Pada umumnya medical checkup bertujuan untuk mendeteksi secara dini bila ada masalah kesehatan tersembunyi yang belum menunjukkan gejala, terutama penyakit-penyakit kardiovaskular, penyakit ginjal, penyakit liver dan diabetes mellitus. Selain mendeteksi dini penyakit, medical checkup juga menentukan tingkat kebugaran dan kesehatan umum.<br />Rumah Sakit Citra Husada menyediakan paket MCU diantaranya:</p>\r\n<ol>\r\n<li>Paket Bronze I (Rp 193.200,-)<br />Darah Lengkap Urine Lengkap Feaces Lengkap Gula Darah Sewaktu Pemeriksaan Fisik oleh Dokter</li>\r\n<li>Paket Bronze II (Rp233.700,-)<br />Darah Lengkap Urine Lengkap HbsAg Kreatinin Gula Darah Sewaktu Pemeriksaan Fisik oleh Dokter</li>\r\n<li>Paket Silver I (Rp 444.600,-)<br />Darah Lengkap Lemak Lengkap Asam Urat SGPT Kreatinin Gula Darah Sewaktu Urine Lengkap Thorax Foto Pemeriksaan Fisik oleh Dokter</li>\r\n<li>Paket Silver II (Rp 509.200,-)<br />Darah Lengkap Lemak Lengkap Asam Urat SGOT SGPT Kreatinin BUN Gula Darah Sewaktu Urine Lengkap Thorax Foto Pemeriksaan Fisik oleh Dokter</li>\r\n<li>Paket Gold (Rp 646.950,-)<br />Darah Lengkap Lemak Lengkap Urine Lengkap Feaces Lengkap Asam Urat SGOT SGPT Kreatinin BUN HbsAg Gula Darah Sewaktu EKG Thorax Foto Pemeriksaan Fisik oleh Dokter</li>\r\n<li>Paket Lainnya<br />Pemeriksaan yang ditawarkan adalah pemeriksaan sesuai dengan permintaan Anda</li>\r\n</ol>', 'medical'),
(6, '<p>Psikologi Rumah Sakit Citra Husada menawarkan beberapa pelayanan psikologis, salah satunya adalah pelayanan asesmen psikologis sebagai penunjang proses seleksi karyawan baru dan proses evaluasi karyawan yang salah satunya untuk tujuan promosi. Selain itu, Rumah Sakit Citra Husada juga dapat melayani psikologi test untuk para siswa sekolah baik secara kolektif maupun individu. Jadwal pelayanan Psikologi Rumah Sakit Citra Husada yaitu setiap hari senin &ndash; sabtu pukul 08.00 &ndash; 16.00 WIB.<br /><br />Biaya pelayanan asesmen psikologis instansi:</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr align=\"center\">\r\n<td rowspan=\"2\">&nbsp;No&nbsp;</td>\r\n<td rowspan=\"2\">Peserta</td>\r\n<td colspan=\"2\">Rekrutmen</td>\r\n<td colspan=\"2\">Evaluasi / Promosi</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>Psikotes</td>\r\n<td>&nbsp;Psikotes &amp; Wawancara&nbsp;</td>\r\n<td>Psikotes</td>\r\n<td>&nbsp;Psikotes &amp; Wawancara&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>1</td>\r\n<td>Level Staff</td>\r\n<td>&nbsp;&nbsp;125.000&nbsp;&nbsp;</td>\r\n<td>150.000</td>\r\n<td>&nbsp;&nbsp;150.000&nbsp;&nbsp;</td>\r\n<td>175.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>2</td>\r\n<td>&nbsp;Level Supervisor&nbsp;</td>\r\n<td>180.000</td>\r\n<td>200.000</td>\r\n<td>200.000</td>\r\n<td>220.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>3</td>\r\n<td>Level Manager</td>\r\n<td>250.000</td>\r\n<td>275.000</td>\r\n<td>275.000</td>\r\n<td>300.000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br />Biaya pelayanan asesmen psikologis sekolah :</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr align=\"center\">\r\n<td rowspan=\"2\">&nbsp;No&nbsp;</td>\r\n<td rowspan=\"2\">&nbsp;&nbsp;Jenis Psikotes Klasikal&nbsp;&nbsp;</td>\r\n<td colspan=\"2\">Tarif</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>&nbsp;Tanpa Tes Kepribadian&nbsp;</td>\r\n<td>&nbsp;Disertai Tes Kepribadian&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>1</td>\r\n<td>&nbsp;Kesiapan Masuk Sekolah Dasar (SD)&nbsp;</td>\r\n<td>&nbsp;&nbsp;50.000&nbsp;&nbsp;</td>\r\n<td>&nbsp;&nbsp;55.000&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>2</td>\r\n<td>&nbsp;Pemilihan Jurusan Kuliah<br />&nbsp;(untuk siswa SMA kelas 2-3 dan Calon Mahasiswa)&nbsp;</td>\r\n<td>70.000</td>\r\n<td>75.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>3</td>\r\n<td>Seleksi Mahasiswa Baru</td>\r\n<td>70.000</td>\r\n<td>80.000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br />Biaya pelayanan asesmen psikologis individual:</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr align=\"center\">\r\n<td>&nbsp;No&nbsp;</td>\r\n<td>&nbsp;&nbsp;Jenis Pelayanan&nbsp;&nbsp;</td>\r\n<td colspan=\"2\">Tarif</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>1</td>\r\n<td>Konseling</td>\r\n<td colspan=\"2\">100.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>2</td>\r\n<td>Psikoterapi</td>\r\n<td colspan=\"2\">100.000</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">&nbsp;</td>\r\n<td>&nbsp;Tanpa Konsultasi&nbsp;<br />&nbsp;Hasil Psikotes&nbsp;</td>\r\n<td>&nbsp;Dengan Konsultasi&nbsp;<br />&nbsp;Hasil Psikotes&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>3</td>\r\n<td>Tes Kecerdasan (IQ)</td>\r\n<td>180.000</td>\r\n<td>200.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>4</td>\r\n<td>Tes Kepribadian</td>\r\n<td>180.000</td>\r\n<td>200.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>5</td>\r\n<td>Kesiapan Masuk SD</td>\r\n<td>130.000</td>\r\n<td>150.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>6</td>\r\n<td>Pemilihan Jurusan SMA (untuk siswa SMP kelas 1-3 dan SMA kelas 1)</td>\r\n<td>175.000</td>\r\n<td>200.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>7</td>\r\n<td>&nbsp;Pemilihan Jurusan Kuliah (untuk siswa SMA kelas 2-3 dan calon mahasiswa)&nbsp;</td>\r\n<td>200.000</td>\r\n<td>225.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>8</td>\r\n<td>Tes Kesiapan Masuk Kerja</td>\r\n<td>225.000</td>\r\n<td>250.000</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'psikologi'),
(7, '<p>.</p>', 'mutu'),
(8, '<p>Klinik Kulit Rumah Sakit Citra Husada didukung oleh tenaga medis dan nonmedis yang profesional dan terlatih dalam memberikan pelayanan di semua ranah penyakit kulit dengan standar yang tinggi serta aman bagi pasien pada setiap usia mulai dari bayi hingga lanjut usia. Tim kami memiliki pendekatan holistik dan terintegrasi untuk memenuhi kebutuhan pasien dan sangat menghargai kerahasiaan pasien.</p>\r\n<p><strong>LOKASI</strong></p>\r\n<p>Poliklinik Kulit Rumah Sakit Citra Husada Jember</p>\r\n<p><strong>Jam oprasioanal</strong></p>\r\n<p>Senin &ndash; Jumat : 10.00 &ndash; 17.00 WIB</p>\r\n<p>Sabtu : 07.00 &ndash; 14.00 WIB</p>\r\n<p><strong>Sekilas Mengenai Kulit</strong></p>\r\n<p>Penyakit kulit dapat mengganggu aktivitas sehari-hari serta menurunkan rasa percaya diri. Dengan diagnosis yang tepat dan pengobatan dengan standar yang tinggi dapat membantu penyembuhan yang baik serta meminimalkan kemungkinan komplikasi penyakit yang dapat terjadi.</p>\r\n<p>Di Poliklinik Kulit, dokter mendiagnosis serta mengobati berbakai kelainan meliputi kulit, rambut, dan kuku. Dokter spesialis kulit bekerjasama dengan perawat yang terlatih, petugas laboratorium, serta spesialis lain untuk memberikan pelayanan pasien secara holistik dan menentukan pemilihan terapi yang tepat dan terbaik pada setiap penyakit kulit. Berbagai pelayanan masalah kulit tersering antara lain: infeksi kulit, tumor kulit, ruam/eksema, jerawat dan bekas jerawat, psoriasis, kelainan rambut dan kulit kepala, kelainan kuku, penyakit kulit pada anak, rosasea, kutil, tahi lalat, melasma, infeksi jamur, serta kelainan kulit lain yang jarang ditemui.</p>\r\n<p>Penyakit kulit di bidang kosmetik sering dijumpai dan dapat terjadi mulai usia dini hingga lanjut usia. Penyakit kulit kosmetik tersering meliputi jerawat, bekas jerawat, kelainan pigmentasi (misalnya melasma, frekles), serta kelainan kulit terkait usia lanjut (kulit kendur, kasar, kusam). Berbagai kelainan tersebut dapat ditangani baik dengan menggunakan krim serta dikombinasikan dengan terapi&nbsp;<em>peeling</em>&nbsp;maupun laser dan peremajaan secara kontinyu untuk mendapatkan kulit yang lebih sehat, cerah dan tampak lebih muda. Disamping itu, penyakit tumor kulit juga dapat ditangani dengan pemilihan yang sesuai dengan jenis kelainannya mulai dari bedah listrik (kauter) maupun bedah minor. Setiap kelainan akan dinilai secara menyeluruh serta dijelaskan mengenai perawatan yang tepat sesuai kebutuhan.</p>', 'laser'),
(9, '<h3>Instalasi Laboratorium</h3>\r\n<p align=\"justify\">Laboratorium merupakan sebuah teknologi diagnostik yang membalut arti klinis. Rumah Sakit Citra Husada menyediakan Laboratorium yang canggih dengan dukungan Dokter Spesialis Patologi Klinik dan analis kesehatan yang berpengalaman, mampu memberikan hasil pemeriksaan yang bermutu. Laboratorium Rumah Sakit Citra Husada beroperasi setiap hari selama 24 jam.<br /><br />Pelayanan yang tersedia antara lain:<br /><br /></p>\r\n<ol>\r\n<li>Hematologi</li>\r\n<li>Kehamilan</li>\r\n<li>Faal Hati &amp; Ginjal</li>\r\n<li>Lemak</li>\r\n<li>Gula Darah</li>\r\n<li>Elektrolit</li>\r\n<li>Jantung</li>\r\n<li>Hormon</li>\r\n<li>Analisis Urine &amp; Faeces</li>\r\n<li>Microbiologis</li>\r\n<li>Preparat</li>\r\n<li>Psikotropika</li>\r\n<li>Penanda Tumor</li>\r\n<li>Penanda Sepsis</li>\r\n</ol>', 'penunjang'),
(10, '<p><strong>&bull; Patologi Klinik</strong></p>', 'penunjang'),
(11, '<p><strong>&bull; Biomolekuler</strong></p>', 'penunjang'),
(12, '<h3>Instalasi Radiologi</h3>\r\n<p>Rumah Sakit Citra Husada memberikan pelayanan pemeriksaan radio diagnostik dan ultrasonografi bagi pasien, kegiatan penunjang diagnosa penyakit melalui pemeriksaan radiologi dan pengobatan radioterapi.<br /><br />Radiologi Rumah Sakit Citra Husada menyediakan layanan :<br /><br /></p>\r\n<ol>\r\n<li>Pesawat X-Ray</li>\r\n<li>USG 4 Dimensi</li>\r\n<li>USG 2 Dimensi</li>\r\n<li>CT Scan (coming soon)</li>\r\n</ol>', 'penunjang'),
(13, '<h3>Instalasi Farmasi</h3>\r\n<p>Farmasi Rumah Sakit Citra Husada memberikan pelayanan dengan sepenuh hati, cepat, tepat, dan akurat, mempermudah pasien dan keluarga mendapatkan obat untuk resep yang akan dibuat. Farmasi Rumah Sakit Citra Husada memberikan pelayanan resep 24 jam, melakukan pengelolaan obat, penyimpanan, peracikan, dan penyedian obat yang memenuhi standar farmasi.</p>', 'penunjang'),
(14, '<h3>Home Care</h3>\r\n<ol>\r\n<li>Home Care Laboratorium<br />Rumah Sakit Citra Husada memberikan fasilitas home care untuk membantu pasien yang ingin melakukan pemeriksaan laboratorium. Analis kesehatan Rumah Sakit Citra Husada akan datang ke rumah anda untuk melakukan pengambilan sampel yang selanjutnya sampel akan diproses di Rumah Sakit Citra Husada. Hasil pemeriksaan nantinya akan dikirimkan kembali ke rumah anda sehingga membuat anda tidak perlu datang ke Rumah Sakit Citra Husada untuk melakukan pemeriksaan laboratorium.</li>\r\n<li>Home Care Pasca Melahirkan<br />Rumah Sakit Citra Husada memberikan fasilitas home care untuk membantu ibu yang baru melahirkan. Untuk setiap keluarga yang baru melahirkan di Rumah Sakit Citra Husada, Bidan akan datang ke rumah anda untuk melakukan pemeriksaan dasar pada ibu dan bayi serta beberapa hal yang perlu diperhatikan bagi ibu untuk buah hati tercinta.</li>\r\n</ol>', 'penunjang');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `poli_id`, `nama_dokter`, `hari`, `jam`, `updated`) VALUES
(1, 1, 'Dokter Umum', 'Senin - Sabtu', '07.00 - 21.00', '2021-10-30'),
(2, 2, 'Bidan', 'Senin - Sabtu', '10.00 - 13.00', '2021-10-29'),
(3, 3, 'drg. Leni Rokhmah, Sp. P.M', 'Senin - Selasa', '12.00 - 15.00', '2021-10-29'),
(4, 3, 'drg. Nanik Sukhaimah, Sp. P.M', 'Senin - Selasa', '16.00 - 20.00', '2021-10-29'),
(5, 3, 'drg. Ongky Hidayat, Sp. P.M', 'Senin - Jum\'at', '08.00 - 15.00', '2021-10-29'),
(6, 4, 'dr. Yuli Hermansyah, Sp. PD', 'Senin - Jum\'at', '15.00 - 17.00', '2021-10-29'),
(7, 4, 'dr. Ach. Syaiful Ludfi, Sp. PD', 'Senin - Jum\'at', '18.00 - 21.00', '2021-10-29'),
(8, 4, 'dr. Ach. Syaiful Ludfi, Sp. PD', 'Sabtu', '09.00 - 12.00', '2021-10-29'),
(9, 5, 'dr. Lely Martha U, Sp.S', 'Senin - Jum\'at', '15.00 - 17.00', '2021-10-29'),
(10, 6, 'dr. H. Moch. Arief H, SP.B, FINACS, FICS', 'Senin - Rabu', '20.00 - 22.00', '2021-10-29'),
(11, 6, 'dr. H. Moch. Arief H, SP.B, FINACS, FICS', 'Jum\'at - Sabtu', '15.00 - 17.00', '2021-10-29'),
(12, 6, 'dr. Cynthia Tanaka, Sp. B', 'Selasa - Kamis', '14.00 - 17.00', '2021-10-29'),
(13, 6, 'dr. Cynthia Tanaka, Sp. B', 'Jum\'at', '13.00 - 16.00', '2021-10-29'),
(14, 6, 'dr. Primanto B, Sp.B(K)Onk', 'Selasa - Kamis', '19.00 - 21.00', '2021-10-29'),
(15, 7, 'dr. Bagas Kumoro, SP. M', 'Selasa - Kamis', '15.00 - 17.00', '2021-10-29'),
(16, 7, 'dr. Bagas Kumoro, SP. M', 'Sabtu', '07.00 - 09.00', '2021-10-29'),
(17, 7, 'dr. Cosmas Hascaryanto, Sp. M	', 'Senin, Rabu, Jum\'at', '08.00 - 14.00', '2021-10-29'),
(18, 8, 'dr. S. Boedi Raharjo, Sp.P', 'Rabu & Sabtu', '09.00 - 12.00', '2021-10-29'),
(19, 8, 'dr. Anik Sukmawati, Sp.P', 'Selasa', '14.00 - 17.00', '2021-10-29'),
(20, 8, 'dr. Anik Sukmawati, Sp.P', 'Kamis', '15.00 - 18.00', '2021-10-29'),
(21, 8, 'dr. Anik Sukmawati, Sp.P', ' Jum\'at', '18.00 - 21.00', '2021-10-29'),
(22, 9, 'dr. Kadek, Sp.GK, Sp. OG', 'Kamis, Jum\'at, Sabtu', '12.00 - 16.00', '2021-10-29'),
(23, 9, 'dr. Kadek, Sp.GK, Sp. OG', 'Minggu', '07.00 - 09.00', '2021-10-29'),
(24, 9, 'dr. Zaki Afif, Sp. OG', 'Senin - Rabu', '18.00 - 21.00', '2021-10-29'),
(25, 9, 'dr. Noviliana Eka, Sp. OG', 'Senin - Jum\'at', '08.00 - 14.00', '2021-10-29'),
(26, 10, 'dr. Lukman O, Sp. A', 'Jum\'at', '19.00 - 21.00', '2021-10-29'),
(27, 10, 'dr. Lukman O, Sp. A', 'Sabtu', '13.00 - 16.00', '2021-10-29'),
(28, 10, 'dr. Natalia Kristanti, Sp. A', 'Selasa - Kamis', '17.00 - 19.00', '2021-10-29'),
(29, 11, 'dr. Abdul Gofur, Sp. JP', 'Selasa - Kamis', '18.00 - 21.00', '2021-10-29'),
(30, 11, 'dr. Abdul Gofur, Sp. JP', 'Sabtu', '13.00 - 15.00', '2021-10-29'),
(31, 12, 'dr. Ainul Miftah A, Sp. OT', 'Selasa & Kamis', '15.30 - 18.00', '2021-10-29'),
(32, 13, 'dr. Anselma Dyah K, Sp.KK', 'Senin - Jum\'at', '15.00 - 17.00 ', '2021-10-29'),
(33, 13, 'dr. Anselma Dyah K, Sp.KK', 'Sabtu', '08.00 - 12.00', '2021-10-29'),
(34, 14, 'dr. Anselma Dyah K, Sp.KK', 'Senin - Jum\'at', '10.00 - 17.00', '2021-10-29'),
(35, 14, 'dr. Anselma Dyah K, Sp.KK', 'Sabtu', '07.00 - 14.00', '2021-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `karirs`
--

CREATE TABLE `karirs` (
  `karir_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_karir` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `apply` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karirs`
--

INSERT INTO `karirs` (`karir_id`, `user_id`, `category_id`, `title`, `slug_karir`, `content`, `deadline`, `apply`, `image`, `date_post`, `status`, `keywords`) VALUES
(5, 1, 5, 'Lowongan Programmer', '7-lowongan-programmer', '<p><strong>Kualifikasi :</strong></p>\r\n<ul>\r\n<li>Pendidikann D3/S1 Sistem Informasi / Teknik Informatika</li>\r\n<li>Diutamakan Laki - laki</li>\r\n<li>Diutamakan Memilik Pengalaman Kerja Minimal 2 Tahun sebagai Web Programmer di Rumah Sakit</li>\r\n<li>Menguasai PHP, MySQL, PostgreSQL, Jquery, HTML, CSS, CI,Javascript, Android, dan REST API</li>\r\n<li>Diutamakan Pernah Membuat Aplikasi Berbasis Android dan Website yang Berbasis Rumah Sakit</li>\r\n<li>Mampu Bekerja Mandiri maupun dalam Tim</li>\r\n<li>Memiliki Komitmen dan Integritas yang tingi Komunikatif dan Kreatif</li>\r\n</ul>', '9 September 2019', 'https://docs.google.com/forms/d/e/1FAIpQLSeFGQ0YAcTfL743e41dG6aY1IfnSBtFfEYBSiuwCBuCj8fTMA/viewform', 'IT1.JPG', '2021-12-06 04:57:21', 'publish', 'lowonganprogrammer'),
(7, 1, 0, 'Pemasaran', '8-pemasaran', '<p>Lalalala</p>', '7 Juli 2021', 'cobaa', 'Pemasaran.PNG', '2021-12-06 06:36:32', 'publish', 'pemasaran');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `kegiatan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_kegiatan` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`kegiatan_id`, `user_id`, `category_id`, `title`, `slug_kegiatan`, `content`, `image`, `date_post`, `status`, `keywords`) VALUES
(1, 1, 5, 'Bimbingan SNARS edisi 1.1 ', 'bimbingan', 'Srrangkaian kegiatan rumah sakit demi meningkatkan kualitas sumber daya baik manusia maka diperlukannya bimbingan ..... bla bla bala', 'bimb1.JPG', '2020-07-01 06:18:36', 'publish', 'bimbingan');

-- --------------------------------------------------------

--
-- Table structure for table `keluhans`
--

CREATE TABLE `keluhans` (
  `message_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `reply` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhans`
--

INSERT INTO `keluhans` (`message_id`, `name`, `email`, `messages`, `reply`, `status`, `date`) VALUES
(1, 'ucup', 'ucup@mail.com', 'askfjsakldgjasdklfjlasdkjdgsd   alfjlsad;kjfldsakjflds  ajfldsjfldsjflsd ajflkdsajfsdajfl. rawat inapnya kurang bagaimana tapi bagaimana tapi kenapa yang mencintaiku tulus apa adanya aku memang bukanmanusia sempurna tapi aku layak dicinta karena ketulusan kini biarlah waktu yang jawab semua tanya hati .', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'publish', '2021-10-10 15:13:41'),
(2, 'abigail', 'loisyemima73@gmail.com', 'abcdefghijklmnopqrstuvwxyz', '1234567890', 'publish', '2021-12-10 15:13:41'),
(3, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'lalalallalalallallalla', 'skidjiefnusjiedjiinfiecikncc', 'publish', '2021-12-11 14:13:32'),
(4, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'seperti biasa itu anda hars ', 'balalalakdnfndf', 'publish', '2021-12-12 21:23:33'),
(5, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'huhuuuu', '', '', '2021-12-12 21:34:33'),
(6, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'lallalalal', '', '', '2021-12-12 21:39:25'),
(7, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', ',amslkdnsdjbf', '', '', '2021-12-12 21:51:42'),
(8, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'huuuhunfgnkjfg', 'oooo begitu', 'publish', '2021-12-12 21:53:06'),
(9, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'yaya yaya yaya', 'iya bu.. maaf ya.. akan kami perbaiki', 'publish', '2021-12-12 21:56:16'),
(10, 'Maya', 'maya@gmail.com', 'saya ini sakit punggung', 'iya iya.. sabar', 'publish', '2021-12-13 08:45:24'),
(11, 'Rizqa Alfiani', 'rizqaalfiani7@gmail.com', 'hsbdjbsjdba', '', '', '2021-12-13 08:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `layanan_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama_alur` varchar(255) NOT NULL,
  `hak` text NOT NULL,
  `tatib` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`layanan_id`, `image`, `nama_alur`, `hak`, `tatib`) VALUES
(1, 'alur_pendaftaran1.jpg', 'alur pendaftaran', '<p><u>Hak Pasien di RS Citra Husada :</u></p>\r\n<ul>\r\n<li>Memperoleh Informasi mengenai tata tertib dan peraturan yang berlaku.</li>\r\n<li>Informasi tentang hak dan kewajiban pasien.</li>\r\n<li>Memperoleh layanan yang manusiawi, adlil, jujur dan tanpa diskriminasi</li>\r\n<li>Memperoleh layanan kesehatan yang bermutu</li>\r\n<li>Memperoleh layanan yang efektif dan efisien</li>\r\n<li>Mengajukan pengaduan atas kualitas pelayanan yang didapatkan.</li>\r\n<li>Memilih dokter dan kelas perawatan sesuai dengan keinginannya.</li>\r\n<li>Meminta konsultasi tentang penyakit yang dideritanya kepada dokter.</li>\r\n<li>mendapat privasi dan kerahasiaan penyakit.</li>\r\n<li>Mendapat informasi yang meliputi diagnosis dan tata cara tindakan medis, tujuan tindakan medis, alternatif tindakan, resiko dan komplikasi yang mungkin terjadi dan prognosis terhadap tindakan yang dilakukan serta perkiraan biaya pengobatan.</li>\r\n<li>Memberikan persetujuan atau menolak atas tindakan yang akan dilakukan oleh tenaga kesehatan.</li>\r\n<li>Berhak didampingi keluarganya dalam keadaan kritis.</li>\r\n<li>Berhak menjalankan ibadah.</li>\r\n<li>Berhak Memperoleh keamanan dan keselamatan dirinya.</li>\r\n<li>Berhak mengajukan usul, saran, perbaikan, atas perilaku Rumah Sakit.</li>\r\n<li>Berhak Memperoleh pelayanan bimbingan rohani.</li>\r\n<li>Berhak Menggugat dan atau menuntut Rumah Sakit apabila Rumah Sakit diduga memberikan pelayanan yang tidak sesuai.</li>\r\n<li>Berhak mengeluh pelayanan Rumah Sakit yang tidak sesuai dengan standart pelayanan</li>\r\n</ul>\r\n<p><u>Kewajiban Pasien di RS Citra Husada :</u></p>\r\n<ul>\r\n<li>Mentaati segala peraturan dan tata tertib yang berlaku di RS Citra Husada.</li>\r\n<li>Mematuhi segala instruksi dokter dan perawat alam pengobatannya</li>\r\n<li>Memberikan informasi dengan jujur dan selengkapnya tentang penyakit yang diderita kepada dokter yang merawat</li>\r\n<li>Melunasi / memberikan imbalan jasa atas pelayanan Rumah Sakit / Dokter</li>\r\n<li>Memenuhi hal - hal yang telah disepakati / perjanjian yang telah dibuatnya</li>\r\n</ul>', '<ul>\r\n<li>Waktu Berkunjung<br />Siang : 11.00 - 14.00 WIB<br />Malam : 18.00 - 21.00 WIB</li>\r\n<li>Penunggu Pasien Max 2 (dua) orang, kecuali pasien dalam keadaan kritis atau gawat</li>\r\n<li>kartu Penunggu Pasien harus digunakan selama berada di lingkungan RS Citra Husada</li>\r\n<li>Setelah Pasien diperbolehkan pulang, kartu penunggu pasien harap dikembalikan di ruang keperawatan RS Citra Husada</li>\r\n<li>Kehilangan atau kerusakan pada kartu penunggu pasien akan dikenakan biaya sebesar Rp. 50.000</li>\r\n<li>Pasien dan pengunjung DILARANG :\r\n<ol>\r\n<li>Membawa anak dibawah usia 5 tahun.</li>\r\n<li>Membawa makanan berbau menyengat (Misal : Durian)</li>\r\n<li>Membawa binatang peliharaan.</li>\r\n<li>Membawa / menggunakan alat - alat elektronik seperti setrika, hair dryer, alat masak (kompor, gas listrik, rice cooker, water heater), dll. guna menghindari terjadi kebakaran.</li>\r\n<li>Membawa senjata tajam dan barang berbahaya lainnya.</li>\r\n<li>Membawa minuman keras.</li>\r\n<li>Membawa obat - obatan terlarang (Narkoba).</li>\r\n<li>Merokok di lingkungan RS Citra Husada</li>\r\n<li>Memindahkan barang - barang Rumah Sakit</li>\r\n<li>Merusak kebersihan, kerapihan dan ketertiban di lingkungan RS Citra Husada.</li>\r\n<li>Membawa &amp; memakai barang berharga selama menjalani perawatan di RS Citra Husada, dan jika tetap memakai / membawa, kehilangan / kerusakan bukan menjadi tanggung jawab RS Citra Husada</li>\r\n</ol>\r\n</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `pejabat_id` int(11) NOT NULL,
  `nama_pejabat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`pejabat_id`, `nama_pejabat`, `jabatan`) VALUES
(1, 'dr. Fatkhur Ruli Malik Qilsi', 'Kepala Bidang Pelayanan & Penunjang Medik'),
(2, 'Hendrawati Tarihoran, Amd.Kep', 'Kepala Bidang Keperawatan'),
(3, 'Andre Kartawidjaja, B.Sc', 'Kepala Bagian Umum dan Kepegawaian	'),
(4, 'Risaksono Isworo, SE', 'Kepala Bagian Keuangan dan Perencanaan Program	'),
(5, 'dr. Dhea Anyssa Rachmawati', 'Kepala Seksi Pelayanan Medik	'),
(6, 'dr. Yudhi Junaidi', 'Kepala Seksi Penunjang Medik	'),
(7, 'Elmita Anggriani, Amd.Kep', 'Kepala Seksi Asuhan Keperawatan	'),
(8, 'Andri Pamuji, S.Kep.Ners.', 'Plt. Kepala Seksi Logistik Keperawatan	'),
(9, 'Brigitta Bika Indiati, S.KM', 'Kepala Sub Bagian Kepegawaian dan Diklat	'),
(10, 'Ratih Ika Maharani, S.KM', 'Kepala Sub Bagian Pemasaran dan Pengelolaan Pelanggan	'),
(11, 'Ageng Supriyadi, S.Pd', 'Kepala Sub Bagian Umum dan Rumah Tangga	'),
(12, 'Valentina Dini P, Amd.', 'Kepala Sub Bagian Keuangan	'),
(13, 'Dr. Achmad Syaiful Ludfi, Sp.PD', 'Komite Medik	'),
(14, 'Andri Pamuji, S.Kep., Ners', 'Komite Keperawatan	'),
(15, 'Albert Roberty, Akp., S.Sos., MH', 'Komite Etik dan Hukum	'),
(16, 'Dr. Pulong Wijang Pralampita, Ph.D', 'Komite Etik Penelitian	'),
(17, 'dr. Fatkhur Ruli Malik Qilsi', 'Tim Akreditasi	'),
(18, 'dr. Fatkhur Ruli Malik Qilsi', 'Tim PMKP	'),
(19, 'dr. Yudhi Junaidi', 'Tim Rekam Medik	'),
(20, 'Drg. Ongky Hidayat Pratama Putra', 'Tim Kesehatan & Keselamatan Kerja (K3RS)	'),
(21, 'Apt. Khrisna Agung, S.Farm.M.Kes', 'Plt. Tim Farmasi & Terapan	'),
(22, 'Dr. Lilik Lailiyah, M.Kes', 'Tim Prognas	'),
(23, 'Dr. Lilik Lailiyah, M.Kes', 'Tim Pencegahan & Pengendalian Infeksi	'),
(24, 'dr. Dhea Anyssa Rachmawati', 'Tim Pengendali BPJS	'),
(25, 'Dr. Reyhan Aditya', 'Tim Manajemen Nyeri	'),
(26, 'Dr. Fungky Anthoni', 'Tim Code Blue	'),
(27, 'Drg. Leni Rokhma Dewi, Sp.PM', 'Satuan Pemeriksa Internal	');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `poli_id` int(11) NOT NULL,
  `nama_poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`poli_id`, `nama_poli`) VALUES
(1, 'Umum'),
(2, 'KIA'),
(3, 'Gigi dan Mulut'),
(4, 'Penyakit Dalam'),
(5, 'Saraf'),
(6, 'Bedah Umum'),
(7, 'Mata'),
(8, 'Paru'),
(9, 'Kandungan'),
(10, 'Anak'),
(11, 'Jantung'),
(12, 'Orthopedi'),
(13, 'Kulit dan Kelamin'),
(14, 'CH Laser dan Estetika');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `slug_product` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `product_description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promosi`
--

CREATE TABLE `promosi` (
  `promosi_id` int(11) NOT NULL,
  `information` text NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promosi`
--

INSERT INTO `promosi` (`promosi_id`, `information`, `image`) VALUES
(1, '<h2>Swab PCR</h2>\r\n<p style=\"text-align: justify;\">Swab dan PCR tak terpisahkan dalam metode tes untuk menegakkan diagnosis Covid-19. Swab adalah cara untuk memperoleh bahan pemeriksaan ( sampel ) . Swab dilakukan pada nasofaring dan atau orofarings. Pengambilan ini dilakukan dengan cara mengusap rongga nasofarings dan atau orofarings dengan menggunakan alat seperti kapas lidi khusus.</p>\r\n<p style=\"text-align: justify;\">Adapun PCR adalah singkatan dari polymerase chain reaction. PCR merupakan metode pemeriksaan virus SARS Co-2 dengan mendeteksi DNA virus. Uji ini akan didapatkan hasil apakah seseorang positif atau tidak SARS Co-2.</p>\r\n<p style=\"text-align: justify;\">Dibanding rapid test, pemeriksaan RT-PCR lebih akurat. Metode ini jugalah yang direkomendasikan WHO untuk mendeteksi Covid-19. Namun akurasi ini dibarengi dengan kerumitan proses dan harga alat yang lebih tinggi. Selain itu, proses untuk mengetahui hasilnya lebih lama ketimbang rapid test.</p>\r\n<p style=\"text-align: justify;\">Kini Rumah Sakit Husada sudah menyediakan Swab PCR dengan harga yang relatif murah dan terjangkau. Hanya dengan Rp. xxx.xxx di Rumah Sakit Citra Husada sudah dapat melakukan Swab PCR</p>\r\n<p>&nbsp;</p>\r\n<h2>Vaksin</h2>\r\n<p style=\"text-align: justify;\">Vaksinasi atau imunisasi merupakan prosedur pemberian suatu antigen penyakit, biasanya berupa virus atau bakteri yang dilemahkan atau sudah mati, bisa juga hanya bagian dari virus atau bakteri. Dengan mendapatkan vaksin COVID-19, Anda bisa memiliki kekebalan terhadap virus COVID-19 tanpa harus terinfeksi terlebih dahulu.</p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><strong>Sinovac (CoronaVac)</strong><br />CoronaVac adalah nama untuk vaksin COVID-19 yang dikembangkan oleh perusahaan farmasi asal China, Sinovac. Ini adalah vaksin pertama yang berhasil didapatkan oleh pemerintah Indonesia dan dipakai untuk memulai program vaksinasi. Vaksin dibuat dengan teknologi inactivated virus alias memanfaatkan virus yang sudah dilemahkan.</li>\r\n<li style=\"text-align: justify;\"><strong>Novavax</strong><br />Vaksin COVID-19 buatan perusahaan Amerika Serikat, Novavax, juga disebut-sebut akan digunakan di Indonesia. Presiden Jokowi mengatakan ada 50 juta dosis vaksin COVID-19 Novavax. Vaksin ini dibuat dengan memanfaatkan sebagian kecil protein dari virus Corona yang dipakai untuk menginfeksi sel.</li>\r\n<li style=\"text-align: justify;\"><strong>AstraZeneca-Oxford</strong><br />Presiden Jokowi juga mengumumkan akan menggunakan 50 juta dosis vaksin COVID-19 yang dikembangkan oleh AstraZeneca-Oxford. Vaksin ini dibuat dengan teknologi memanfaatkan virus penyebab pilek (adenovirus) dari simpanse yang sudah dimodifikasi. Virus tersebut jadinya mirip seperti SARS-COV-2 yang menyebabkan COVID-19, tetapi tidak bisa menyebabkan penyakit.</li>\r\n<li style=\"text-align: justify;\"><strong>Pfizer-BioNTech</strong><br />Vaksin COVID-19 yang dikembangkan oleh Pfizer-BioNTech sampai saat ini jadi satu-satunya vaksin yang mendapat izin penggunaan darurat dari Organisasi Kesehatan Dunia (WHO). Presiden Jokowi menyebut Indonesia akan menggunakan 50 juta dosis vaksin ini.</li>\r\n<li style=\"text-align: justify;\"><strong>COVAX</strong><br />COVAX adalah organisasi nirlaba internasional yang dibentuk oleh WHO, GAVI Alliance, dan Coalition for Epidemic Preparedness Innovations (CEPI). Tujuannya untuk memastikan bahwa vaksin COVID-19 dapat diakses oleh seluruh negara dengan adil.</li>\r\n</ol>', 'promo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `psikologi`
--

CREATE TABLE `psikologi` (
  `psikologi_id` int(11) NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psikologi`
--

INSERT INTO `psikologi` (`psikologi_id`, `informasi`) VALUES
(1, '<p>Psikologi Rumah Sakit Citra Husada menawarkan beberapa pelayanan psikologis, salah satunya adalah pelayanan asesmen psikologis sebagai penunjang proses seleksi karyawan baru dan proses evaluasi karyawan yang salah satunya untuk tujuan promosi. Selain itu, Rumah Sakit Citra Husada juga dapat melayani psikologi test untuk para siswa sekolah baik secara kolektif maupun individu. Jadwal pelayanan Psikologi Rumah Sakit Citra Husada yaitu setiap hari senin &ndash; sabtu pukul 08.00 &ndash; 16.00 WIB.<br /><br />Biaya pelayanan asesmen psikologis instansi:</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr align=\"center\">\r\n<td rowspan=\"2\">&nbsp;No&nbsp;</td>\r\n<td rowspan=\"2\">Peserta</td>\r\n<td colspan=\"2\">Rekrutmen</td>\r\n<td colspan=\"2\">Evaluasi / Promosi</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>Psikotes</td>\r\n<td>&nbsp;Psikotes &amp; Wawancara&nbsp;</td>\r\n<td>Psikotes</td>\r\n<td>&nbsp;Psikotes &amp; Wawancara&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>1</td>\r\n<td>Level Staff</td>\r\n<td>&nbsp;&nbsp;125.000&nbsp;&nbsp;</td>\r\n<td>150.000</td>\r\n<td>&nbsp;&nbsp;150.000&nbsp;&nbsp;</td>\r\n<td>175.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>2</td>\r\n<td>&nbsp;Level Supervisor&nbsp;</td>\r\n<td>180.000</td>\r\n<td>200.000</td>\r\n<td>200.000</td>\r\n<td>220.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>3</td>\r\n<td>Level Manager</td>\r\n<td>250.000</td>\r\n<td>275.000</td>\r\n<td>275.000</td>\r\n<td>300.000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br />Biaya pelayanan asesmen psikologis sekolah :</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr align=\"center\">\r\n<td rowspan=\"2\">&nbsp;No&nbsp;</td>\r\n<td rowspan=\"2\">&nbsp;&nbsp;Jenis Psikotes Klasikal&nbsp;&nbsp;</td>\r\n<td colspan=\"2\">Tarif</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>&nbsp;Tanpa Tes Kepribadian&nbsp;</td>\r\n<td>&nbsp;Disertai Tes Kepribadian&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>1</td>\r\n<td>&nbsp;Kesiapan Masuk Sekolah Dasar (SD)&nbsp;</td>\r\n<td>&nbsp;&nbsp;50.000&nbsp;&nbsp;</td>\r\n<td>&nbsp;&nbsp;55.000&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>2</td>\r\n<td>&nbsp;Pemilihan Jurusan Kuliah<br />&nbsp;(untuk siswa SMA kelas 2-3 dan Calon Mahasiswa)&nbsp;</td>\r\n<td>70.000</td>\r\n<td>75.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>3</td>\r\n<td>Seleksi Mahasiswa Baru</td>\r\n<td>70.000</td>\r\n<td>80.000</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br />Biaya pelayanan asesmen psikologis individual:</p>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr align=\"center\">\r\n<td>&nbsp;No&nbsp;</td>\r\n<td>&nbsp;&nbsp;Jenis Pelayanan&nbsp;&nbsp;</td>\r\n<td colspan=\"2\">Tarif</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>1</td>\r\n<td>Konseling</td>\r\n<td colspan=\"2\">100.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>2</td>\r\n<td>Psikoterapi</td>\r\n<td colspan=\"2\">100.000</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">&nbsp;</td>\r\n<td>&nbsp;Tanpa Konsultasi&nbsp;<br />&nbsp;Hasil Psikotes&nbsp;</td>\r\n<td>&nbsp;Dengan Konsultasi&nbsp;<br />&nbsp;Hasil Psikotes&nbsp;</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>3</td>\r\n<td>Tes Kecerdasan (IQ)</td>\r\n<td>180.000</td>\r\n<td>200.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>4</td>\r\n<td>Tes Kepribadian</td>\r\n<td>180.000</td>\r\n<td>200.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>5</td>\r\n<td>Kesiapan Masuk SD</td>\r\n<td>130.000</td>\r\n<td>150.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>6</td>\r\n<td>Pemilihan Jurusan SMA (untuk siswa SMP kelas 1-3 dan SMA kelas 1)</td>\r\n<td>175.000</td>\r\n<td>200.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>7</td>\r\n<td>&nbsp;Pemilihan Jurusan Kuliah (untuk siswa SMA kelas 2-3 dan calon mahasiswa)&nbsp;</td>\r\n<td>200.000</td>\r\n<td>225.000</td>\r\n</tr>\r\n<tr align=\"center\">\r\n<td>8</td>\r\n<td>Tes Kesiapan Masuk Kerja</td>\r\n<td>225.000</td>\r\n<td>250.000</td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `info_id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`info_id`, `nama`, `informasi`) VALUES
(1, 'informasi umum', '<p>Rawat inap di Rumah Sakit Citra Husada dilengkapi dengan sarana dan fasilitas lengkap guna memberikan pelayanan terbaik demi kepuasan pasien.<br /><br />Tersedia sekitar 87 tempat rawat inap di RS Citra Husada untuk mendukung kenyamanan pasien yang membutuhkan fasilitas perawatan di Rumah Sakit. Fasilitas tersebut mencakup ruang rawat inap biasa, ruang rawat inap bersalin, ruang rawat intensif (ICU), serta ruang rawat khusus bayi baru lahir di ruang perinatologi.<br /><br />Di ruang rawat inap tersedia berbagai kelas perawatan dengan perbedaan pada fasilitasnya, kelas perawatan tersebut yaitu:</p>'),
(3, 'VVIP A', '<p>Bed Electric<br />TV LCD<br />Lemari Es<br />Ruang Tamu<br />AC<br />Bed Penunggu<br />Sofa Keluarga<br />Tea &amp; Coffe set<br />Kamar Mandi dengan Air Hangat</p>'),
(4, 'VVIP B', '<p>Bed Electric<br />TV LCD<br />Lemari Es<br />Ruang Tamu<br />AC<br />Bed Penunggu<br />Sofa Keluarga<br />Tea &amp; Coffe set<br />Kamar Mandi dengan Air Hangat</p>'),
(5, 'Kelas 1', '<p>1 Bed Pasien<br />Sofa Keluarga<br />Lemari Es<br />TV<br />AC<br />Kamar Mandi dengan Air Hangat</p>'),
(6, 'Kelas 2', '<p>1 Bed Pasien<br />Sofa Keluarga<br />Lemari Es<br />TV<br />AC<br />Kamar Mandi dengan Air Hangat</p>'),
(7, 'Kelas 3', '<p>8 Bed Pasien<br />Kamar Mandi<br />Kipas Angin</p>');

-- --------------------------------------------------------

--
-- Table structure for table `rekanan`
--

CREATE TABLE `rekanan` (
  `rekanan_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekanan`
--

INSERT INTO `rekanan` (`rekanan_id`, `image`, `image_name`, `position`, `date`) VALUES
(1, 'bpjkes.png', 'BPJS', 'asuransi', '2021-11-09 04:32:09'),
(2, 'bpjstk.png', 'bpjstkj', 'asuransi', '2021-11-09 04:10:01'),
(3, 'abda.png', 'abda', 'asuransi', '2021-11-09 04:33:48'),
(4, 'avrist.jpg', 'avrist', 'asuransi', '2021-11-09 04:34:40'),
(5, 'axa.png', 'axa', 'asuransi', '2021-11-09 04:34:57'),
(6, 'jasaraharja.png', 'jasa raharja', 'asuransi', '2021-11-09 04:35:21'),
(7, 'admedika.png', 'admedika', 'asuransi', '2021-11-09 04:36:00'),
(8, 'WAL.png', 'WAL', 'asuransi', '2021-11-09 04:36:32'),
(9, 'mandiriinhealth.png', 'mandiri in health', 'asuransi', '2021-11-09 04:37:08'),
(10, 'bni-life.png', 'BNI life', 'asuransi', '2021-11-09 04:37:37'),
(11, 'Jiwasraya.png', 'JIwasraya', 'asuransi', '2021-11-09 04:38:14'),
(12, 'poltek.jpg', 'POLIJE', 'nonasuransi', '2021-11-13 03:42:38'),
(13, 'rolas.png', 'ROLAS', 'rs', '2021-11-13 03:43:28'),
(14, 'fwd.png', 'FWD', 'asuransi', '2021-11-13 07:23:59'),
(15, 'tugumandiri.png', 'Tugu Mandiri', 'asuransi', '2021-11-13 07:24:28'),
(16, 'hanwa.png', 'Hanwah', 'asuransi', '2021-11-13 07:25:05'),
(17, 'equity.jpg', 'Equity', 'asuransi', '2021-11-13 07:25:30'),
(18, 'aa.png', 'AA', 'asuransi', '2021-11-13 07:25:43'),
(19, 'ace-jaya.png', 'ACE', 'asuransi', '2021-11-13 07:25:59'),
(20, 'aia2.png', 'AIA', 'asuransi', '2021-11-13 07:26:11'),
(21, 'allianz.png', 'Allianz', 'asuransi', '2021-11-13 07:26:28'),
(22, 'astra.png', 'Astra', 'asuransi', '2021-11-13 07:26:45'),
(23, 'bringinlife.png', 'Bringin', 'asuransi', '2021-11-13 07:27:11'),
(24, 'jasindo.png', 'Jasindo', 'asuransi', '2021-11-13 07:27:32'),
(25, 'mag.png', 'MAG', 'asuransi', '2021-11-13 07:28:02'),
(26, 'medion.jpg', 'Medion', 'asuransi', '2021-11-13 07:28:18'),
(27, 'mnc.png', 'MNC', 'asuransi', '2021-11-13 07:28:42'),
(28, 'platinum.png', 'Platinum', 'asuransi', '2021-11-13 07:28:59'),
(29, 'owlexa.jpg', 'Owlexa', 'asuransi', '2021-11-13 07:29:20'),
(30, 'sequislife.png', 'Sequis', 'asuransi', '2021-11-13 07:29:37'),
(31, 'sinarmas.png', 'Sinarmas', 'asuransi', '2021-11-13 07:29:56'),
(32, 'sinarmas_msig.jpg', 'sinarmas MSIG', 'asuransi', '2021-11-13 07:30:21'),
(33, 'sos.png', 'SOS', 'asuransi', '2021-11-13 07:30:48'),
(34, 'reliance.png', 'Reliance', 'asuransi', '2021-11-13 07:31:30'),
(35, 'akbid.jpg', 'AKJ', 'nonasuransi', '2021-11-13 07:32:05'),
(36, 'parahita.png', 'parahita', 'rs', '2021-11-15 02:38:13'),
(37, 'sakti1.jpg', 'sakti', 'nonasuransi', '2021-11-15 03:06:02'),
(38, 'FIF.png', 'FIF', 'nonasuransi', '2021-11-15 03:06:46'),
(39, 'bankbni.png', 'Bank BNI', 'nonasuransi', '2021-11-15 03:07:45'),
(40, 'bankbri.png', 'Bank BRI', 'nonasuransi', '2021-11-15 03:08:21'),
(41, 'dinkes.png', 'Dinkes', 'nonasuransi', '2021-11-15 03:08:48'),
(42, 'magistra.jpg', 'Magistra', 'nonasuransi', '2021-11-15 03:09:11'),
(43, 'ojk.jpg', 'OJK', 'nonasuransi', '2021-11-15 03:09:31'),
(44, 'pandu.jpg', 'Pandu', 'nonasuransi', '2021-11-15 03:10:01'),
(45, 'pdam.jpg', 'PDAM', 'nonasuransi', '2021-11-15 03:10:26'),
(46, 'pmi.png', 'PMI', 'nonasuransi', '2021-11-15 03:10:50'),
(47, 'unej.png', 'UNEJ', 'nonasuransi', '2021-11-15 03:11:12'),
(48, 'jayajagat.png', 'Jaya Jagat', 'nonasuransi', '2021-11-15 03:22:39'),
(49, 'sam.jpg', 'SAM', 'nonasuransi', '2021-11-15 03:23:10'),
(50, 'subandi.png', 'Stikes Soebandi', 'nonasuransi', '2021-11-15 03:24:11'),
(51, 'taspen.jpg', 'Taspen', 'nonasuransi', '2021-11-15 03:24:43'),
(52, 'suherman.jpg', 'Suherman', 'rs', '2021-11-15 03:27:12'),
(53, 'wirasakti.png', 'HWS', 'rs', '2021-11-15 03:27:40'),
(54, 'sima.jpg', 'Simalab', 'rs', '2021-11-15 03:28:06'),
(55, 'binasehat.png', 'Bina Sehat', 'rs', '2021-11-15 03:28:55'),
(56, 'paru.png', 'RS Paru', 'rs', '2021-11-15 03:29:26'),
(57, 'soebandi.png', 'Soebandi', 'rs', '2021-11-15 03:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `responden_ri`
--

CREATE TABLE `responden_ri` (
  `respon_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `responden_name` varchar(255) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patient_name` varchar(255) NOT NULL,
  `gender_px` varchar(20) NOT NULL,
  `age_px` varchar(5) NOT NULL,
  `treatment_room` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  `question5` varchar(50) DEFAULT NULL,
  `question6` varchar(50) DEFAULT NULL,
  `question7` varchar(50) DEFAULT NULL,
  `question8` varchar(50) NOT NULL,
  `question9` varchar(50) NOT NULL,
  `question10` varchar(50) NOT NULL,
  `question11` varchar(50) NOT NULL,
  `question12` varchar(50) NOT NULL,
  `question13` varchar(50) NOT NULL,
  `question14` varchar(50) NOT NULL,
  `question15` varchar(50) NOT NULL,
  `question16` varchar(50) NOT NULL,
  `question17` varchar(50) NOT NULL,
  `question18` varchar(50) NOT NULL,
  `question19` varchar(50) NOT NULL,
  `question20` varchar(50) NOT NULL,
  `question21` varchar(50) NOT NULL,
  `question22` varchar(50) NOT NULL,
  `question23` varchar(50) NOT NULL,
  `question24` varchar(50) NOT NULL,
  `question25` varchar(50) NOT NULL,
  `question26` varchar(50) NOT NULL,
  `question27` varchar(50) NOT NULL,
  `question28` varchar(50) DEFAULT NULL,
  `question29` varchar(50) DEFAULT NULL,
  `question30` varchar(50) DEFAULT NULL,
  `question31` varchar(50) DEFAULT NULL,
  `question32` varchar(50) DEFAULT NULL,
  `question33` varchar(50) DEFAULT NULL,
  `question34` varchar(50) DEFAULT NULL,
  `question35` varchar(50) DEFAULT NULL,
  `question36` varchar(50) DEFAULT NULL,
  `question37` varchar(50) DEFAULT NULL,
  `suggestion1` text,
  `suggestion2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden_ri`
--

INSERT INTO `responden_ri` (`respon_id`, `email`, `responden_name`, `age`, `gender`, `relation`, `education`, `address`, `phone`, `date`, `patient_name`, `gender_px`, `age_px`, `treatment_room`, `doctor_name`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`, `question21`, `question22`, `question23`, `question24`, `question25`, `question26`, `question27`, `question28`, `question29`, `question30`, `question31`, `question32`, `question33`, `question34`, `question35`, `question36`, `question37`, `suggestion1`, `suggestion2`) VALUES
(1, 'intankusumaningt@gmail.com', 'Intan', '20', 'Perempuan', 'Saudara', 'D3', 'cghggjgdg', '081245765876', '2021-12-10 05:13:53', 'Gea', 'Perempuan', '23', 'Alamanda', 'Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)', 'Sangat Sesuai', 'Mudah', 'Sangat Jelas', 'Sangat Sopan dan Sangat Ramah', 'Sangat Tepat', 'Sangat Sopan dan Sangat Ramah', 'Puas', 'Tepat', 'Sangat Sopan dan Sangat Ramah', 'Puas', 'Tepat', 'Puas', 'Sopan dan Ramah', 'Sangat Tepat', 'Sangat Puas', 'Sangat Sopan dan Sangat Ramah', 'Sangat Baik', 'Sangat Bersih', 'Sangat Mudah', 'Sangat Wajar', 'Sopan dan Ramah', 'Peduli', 'Sopan dan Ramah', 'Puas', 'Sangat Aman', 'Sangat Sopan dan Sangat Ramah', 'Sopan dan Ramah', 'Sangat Jelas', 'Sangat Puas', 'Sopan dan Ramah', 'Sangat Jelas', 'Sangat Puas', 'Sopan dan Ramah', 'Sangat Mudah', 'Sangat Jelas', 'Sangat Puas', 'Puas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'rizqaalfiani7@gmail.com', 'roni', '12', 'Perempuan', 'Orang Tua', 'sdf', 'Jl. Mastrip PO. BOX 164', '+6281249488710', '2021-12-14 03:32:39', 'rima', 'Perempuan', '11', 'xfer', 'Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)', 'Tidak Sesuai', 'Sangat Mudah', 'Tidak Jelas', 'Tidak Sopan dan Tidak Ramah', 'Tidak Tepat', 'Sangat Sopan dan Sangat Ramah', 'Puas', 'Sangat Tepat', 'Sangat Sopan dan Sangat Ramah', 'Sangat Puas', 'Sangat Tepat', 'Sangat Puas', 'Sangat Sopan dan Sangat Ramah', 'Sangat Tepat', 'Sangat Puas', 'Sopan dan Ramah', 'Kurang Baik', 'Bersih', 'Kurang Mudah', 'Kurang Wajar', 'Kurang Sopan dan Kurang Ramah', 'Kurang Peduli', 'Sopan dan Ramah', 'Sangat Puas', 'Aman', 'Sopan dan Ramah', 'Sopan dan Ramah', 'Jelas', 'Tidak Puas', 'Sangat Sopan dan Sangat Ramah', 'Jelas', 'Kurang Puas', 'Kurang Sopan dan Kurang Ramah', 'Sangat Mudah', 'Kurang Jelas', 'Tidak Puas', 'Kurang Puas', 'dsf', 'dfvdfs');

-- --------------------------------------------------------

--
-- Table structure for table `responden_rj`
--

CREATE TABLE `responden_rj` (
  `respon_id` int(11) NOT NULL,
  `responden_name` varchar(255) NOT NULL,
  `age` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patient_name` varchar(255) NOT NULL,
  `gender_px` varchar(20) DEFAULT NULL,
  `age_px` varchar(5) DEFAULT NULL,
  `poli` varchar(255) NOT NULL,
  `date_px` varchar(50) NOT NULL,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  `question5` varchar(50) NOT NULL,
  `question6` varchar(50) NOT NULL,
  `question7` varchar(50) NOT NULL,
  `question8` varchar(50) NOT NULL,
  `question9` varchar(50) NOT NULL,
  `question10` varchar(50) DEFAULT NULL,
  `question11` varchar(50) DEFAULT NULL,
  `suggestion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden_rj`
--

INSERT INTO `responden_rj` (`respon_id`, `responden_name`, `age`, `phone`, `gender`, `relation`, `education`, `address`, `date`, `patient_name`, `gender_px`, `age_px`, `poli`, `date_px`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `suggestion`) VALUES
(2, 'Intan', '20', '081245765876', 'Perempuan', 'Saya Sebagai Pasien', 'S1 / Sederajat', 'Jl. Yayaya', '2021-12-09 03:20:52', 'Intan', 'Perempuan', '20', 'Poli Umum', '2021-12-01', 'Sangat Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sesuai', 'Tidak Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Nura', '20', '081245765876', 'Perempuan', 'on', 'on', 'Jl.Tak tau ya', '2021-12-09 03:41:25', 'Zaki', 'Laki-laki', '23', 'Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)', '2021-11-29', 'Kurang Sesuai', 'Kurang Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sesuai', 'Sesuai', 'Sesuai', 'Sangat Sesuai', 'Tidak Sesuai', 'Sangat Sesuai', 'Tidak Sesuai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Nura', '23', '081245765876', 'Perempuan', 'Saudara', 'S3', 'Jl. Entah', '2021-12-09 03:45:07', 'Gea', 'Perempuan', '23', 'Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)', '2021-11-28', 'Kurang Sesuai', 'Sesuai', 'Tidak Sesuai', 'Sesuai', 'Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sesuai', 'Sesuai', 'Tidak Sesuai', 'Sesuai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Lufi', '25', '081245765876', 'Perempuan', 'Saudara', 'S3', 'Jl. Duku', '2021-12-09 04:06:36', 'Yuka', 'Laki-laki', '23', 'Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)', '2021-11-29', 'Sangat Sesuai', 'Sangat Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'Nura', '20', '081245765876', 'Perempuan', 'Kakak', 'S3', 'xsffhf', '2021-12-09 07:50:35', 'Intan', 'Perempuan', '12', 'Poli Mata (dr.Bagas Kumoro, Sp.M)', '2021-11-30', 'Sangat Sesuai', 'Sangat Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'Gea', '23', '081245765876', 'Perempuan', 'Anak', 'D3', 'bncvgxv', '2021-12-10 02:44:24', 'Imik', 'Perempuan', '20', 'Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)', '2021-12-07', 'Sesuai', 'Sesuai', 'Kurang Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Kurang Sesuai', '', '', ''),
(9, 'Nura', '23', '081245765876', 'Laki-laki', 'Anak', 'S3', 'wsdsfdf', '2021-12-10 02:46:34', 'Zaki', 'Laki-laki', '40', 'Poli Jantung dan Pembuluh Darah (dr.Abdul Gofur, Sp.JP)', '2021-12-06', 'Sangat Sesuai', 'Sangat Sesuai', 'Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Kurang Sesuai', 'Sangat Sesuai', '', '', ''),
(10, 'Intan', '23', '081245765876', 'Perempuan', 'Anak', 'S3', 'hvhvcxg', '2021-12-10 02:49:11', 'Zaki', 'Laki-laki', '40', 'Poli Umum', '2021-11-29', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Sangat Sesuai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, 'Intan', '20', '081245765876', 'Perempuan', 'Saudara', 'D3', 'vhvjnkkm', '2021-12-10 06:29:49', 'Gea', 'Perempuan', '23', 'Poli Anak (dr.Natalia K, Sp.A)', '2021-12-01', 'Sesuai', 'Sangat Mudah', 'Sangat Tepat', 'Sangat Wajar', 'Sangat Puas', 'Sangat Mampu', 'Sangat Sopan dan Sangat Ramah', 'Sangat Tepat', 'Sangat Puas', 'Sangat Puas', 'Sangat Bersih', ''),
(12, 'Nura', '20', '081245765876', 'Perempuan', 'Saudara', 'S3', 'hhghcgj', '2021-12-10 06:31:05', 'Yuri', 'Perempuan', '20', 'Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)', '2021-11-30', 'Sangat Sesuai', 'Sangat Mudah', 'Sangat Tepat', 'Sangat Wajar', 'Sangat Puas', 'Sangat Mampu', 'Sangat Sopan dan Sangat Ramah', 'Sangat Tepat', 'Sangat Puas', 'Sangat Puas', 'Sangat Bersih', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(13, 'riza', '19', '(+62) 857112239', 'Perempuan', 'Anak', 'jhdbf', 'dsfsffd', '2021-12-13 06:55:13', 'rima', 'Perempuan', '11', 'Poli Umum', '2021-12-28', 'Sangat Sesuai', 'Kurang Mudah', 'Tepat', 'Wajar', 'Kurang Puas', 'Mampu', 'Kurang Sopan dan Kurang Ramah', 'Tepat', 'Kurang Puas', 'Puas', 'Kurang Bersih', 'waede'),
(14, 'riza', '19', '(+62) 857112239', 'Laki-laki', 'Saya Sebagai Pasien', 'sdsd', 'dfsdv', '2021-12-14 03:14:50', 'rima', 'Perempuan', '11', 'Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)', '2021-12-22', 'Kurang Sesuai', 'Kurang Mudah', 'Tidak Tepat', 'Tidak Wajar', 'Kurang Puas', 'Kurang Mampu', 'Tidak Sopan dan Tidak Ramah', 'Kurang Tepat', 'Sangat Puas', 'Kurang Puas', 'Tidak Bersih', 'sdfaef');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `sambutan_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`sambutan_id`, `image`, `image_name`, `sambutan`) VALUES
(1, 'direktur1.JPG', 'Direktur', '<p style=\"text-align: center;\"><strong>Assalamualaikum Wr. Wb.</strong></p>\r\n<p>Semakin Berkembangannya kebutuhan pelayanan rumah sakit yang semakin berkualitas. Mendorong pelayanan rumah sakit untuk berbenah diri terutama meningkatkan kualitas pelayanan, meningkatkan keberadaan alat-alat medis yang sesuai dengan kebutuhan masyarakat dan memberikan fasilitas pelayanan yang baik, sehingga kenyamanan terhadap pasien semakin meningkat.</p>\r\n<p>Rumah Sakit Citra Husada Jember hadir menemani masyarakat Kabupaten Jember dalam memberikan pelayanan di bidang kesehatan. Komitmen RS Citra Husada Jember untuk selalu meningkatkan pelayanan, sehingga memuaskan masyarakat yang menggunakan jasa pelayanan rumah sakit.</p>\r\n<p>Dalam memberikan pelayanan kami berpegang pada visi, misi, tujuan, program, dan motto yang telah kami tetapkan bersama. Ini merupakan komitmen pokok yang kami pegang untuk terus meningkatkan kualitas pelayanan sehingga kepuasan pasien semakin meningkat searah dengan meningkatnya kepercayaan masyarakat Jember dan sekitarnya terhadap Rumah Sakit Citra Husada Jember.</p>\r\n<p>Kami berterima kasih atas kepercayaan Anda menggunakan jasa pelayanan Rumah Sakit Citra Husada Jember. Kritik dan saran anda untuk perbaikan pelayanan rumah sakit kedepan sangat dibutuhkan. Semoga website ini dapat memberikan informasi yang berguna bagi masyarakat, khususnya yang menggunakan jasa pelayanan Rumah Sakit Citra Husada Jember, karena &ldquo;Kepuasan Pelanggan adalah Harapan Kami&rdquo;. Terima kasih</p>\r\n<p style=\"text-align: center;\"><strong>Wassalamualaikum Wr. Wb.</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `sejarah_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`sejarah_id`, `deskripsi`) VALUES
(1, '<p>Rumah Sakit Citra Husada Jember diresmikan pada tanggal 16 April 2009 di bawah naungan Yayasan Citra Husada Jember, Kemudian dengan berbagai upaya, izin operasional tetap diperoleh dari Bupati Jember dengan SK Bupati Jember Nomor 188.45/253/012/2011 Tentang Izin Operasional Tetap Rumah Sakit Citra Husada Jember dan penetapan kelas diperoleh berdasarkan SK Menteri Kesehatan Nomor HK.03.05/I/2375/11 Tentang Penetapan Kelas RS Citra Husada Jember sebagai RS kelas D.<br />Kemudian pada tahun 2016, Rumah Sakit Citra Husada Kembali mendapatkan perpanjangan izin operasional berdasarkan Keputusan Bupati Jember Nomor 188.45/420/1.12/2016 dengan status klasifikasi rumah sakit kelas C. Keputusan tersebut merupakan hal yang mendasar sejalan dengan pembenahan organisasi, pemenuhan SDM, sarana dan prasarana fisik, peralatan medik dan penunjang medik.<br />Rumah Sakit Citra Husada Jember juga telah terakreditasi dengan status tingkat paripurna sejak tanggal 19 Oktober 2017.</p>\r\n<h3>IDENTITAS</h3>\r\n<table border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;&nbsp;Nama Rumah Sakit</td>\r\n<td>&nbsp;&nbsp;Rumah Sakit Citra Husada Jember</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Alamat Rumah Sakit</td>\r\n<td>&nbsp;&nbsp;Jalan Teratai No. 22, Patrang, Kab. Jember&nbsp;&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Kelas Rumah Sakit</td>\r\n<td>&nbsp;&nbsp;C</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Status Kepemilikan</td>\r\n<td>&nbsp;&nbsp;Yayasan Citra Husada</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Surat Ijin Rumah Sakit&nbsp;&nbsp;</td>\r\n<td>&nbsp;&nbsp;188.45/420/1.12/2016</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Tanggal</td>\r\n<td>&nbsp;&nbsp;23 Desember 2016</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Oleh</td>\r\n<td>&nbsp;&nbsp;Bupati Jember</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Sifat</td>\r\n<td>&nbsp;&nbsp;Tetap</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;&nbsp;Akreditasi</td>\r\n<td>&nbsp;&nbsp;Paripurna</td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `struktur_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`struktur_id`, `image`, `image_name`) VALUES
(1, 'struktur1.jpg', 'struktur');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `tentang_id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`tentang_id`, `visi`, `nilai`) VALUES
(1, '<h3>Visi</h3>\r\n<ul>\r\n<li>Rumah Sakit Swasta Pilihan dengan Pelayanan yang Berkualitas dan Terjangkau</li>\r\n</ul>\r\n<h3>Misi</h3>\r\n<ul>\r\n<li>Menyelenggarakan pelayanan kesehatan yang bermutu dan professional</li>\r\n<li>Mewujudkan kepuasan pelanggan melalui optimalisasi kinerja</li>\r\n</ul>\r\n<h3>Motto</h3>\r\n<ul>\r\n<li>Kesehatan Anda adalah Harapan Kami</li>\r\n</ul>', '<h3>Nilai Nilai rumah Sakit</h3>\r\n<ol>\r\n<li>Professional\r\n<ol type=\"a\">\r\n<li>Bekerja sesuai kompetensi</li>\r\n<li>Bekerja dengan efektif</li>\r\n<li>Cakap dan menguasai pekerjannya</li>\r\n<li>Mengutamakan pasien dan melayani keluarga pasien dengan baik</li>\r\n</ol>\r\n</li>\r\n<li>Respect\r\n<ol type=\"a\">\r\n<li>Menghormati setiap individu</li>\r\n<li>Mau mendengarkan dan menghargai pendapat orang lain</li>\r\n<li>Menyampaikan penghargaan atau pujian secara memadai</li>\r\n</ol>\r\n</li>\r\n<li>Kedisplinan\r\n<ol type=\"a\">\r\n<li>Bekerja dan bertindak sesuai tugas dan aturan</li>\r\n<li>Memulai dan mengakhiri pekerjaan dengan tepat waktu</li>\r\n<li>Tepat janji</li>\r\n<li>Tegas dalam memutuskan suatu masalah tanpa mengurangi keramahan dan kesopanan</li>\r\n</ol>\r\n</li>\r\n<li>kerjasama\r\n<ol type=\"a\">\r\n<li>Bekerja secara sinergis baik dalam satu unit manapun dengan unit lain dalam mencapai visi</li>\r\n<li>Saling pengertian dan toleransi diantara sesama anggota Tim</li>\r\n<li>Tidak melakukan hal - hal yang mengakibatkan timbulnya konflik</li>\r\n<li>Tidak Egois dan lebih mementingkan keharmonisan Tim</li>\r\n</ol>\r\n</li>\r\n</ol>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gambar_ri`
--
ALTER TABLE `gambar_ri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infors`
--
ALTER TABLE `infors`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `info_layanan`
--
ALTER TABLE `info_layanan`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `karirs`
--
ALTER TABLE `karirs`
  ADD PRIMARY KEY (`karir_id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`kegiatan_id`);

--
-- Indexes for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`pejabat_id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`poli_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`promosi_id`);

--
-- Indexes for table `psikologi`
--
ALTER TABLE `psikologi`
  ADD PRIMARY KEY (`psikologi_id`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `rekanan`
--
ALTER TABLE `rekanan`
  ADD PRIMARY KEY (`rekanan_id`);

--
-- Indexes for table `responden_ri`
--
ALTER TABLE `responden_ri`
  ADD PRIMARY KEY (`respon_id`);

--
-- Indexes for table `responden_rj`
--
ALTER TABLE `responden_rj`
  ADD PRIMARY KEY (`respon_id`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`sambutan_id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`struktur_id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`tentang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gambar_ri`
--
ALTER TABLE `gambar_ri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `infors`
--
ALTER TABLE `infors`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_layanan`
--
ALTER TABLE `info_layanan`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `karirs`
--
ALTER TABLE `karirs`
  MODIFY `karir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `pejabat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `poli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `promosi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psikologi`
--
ALTER TABLE `psikologi`
  MODIFY `psikologi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekanan`
--
ALTER TABLE `rekanan`
  MODIFY `rekanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `responden_ri`
--
ALTER TABLE `responden_ri`
  MODIFY `respon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `responden_rj`
--
ALTER TABLE `responden_rj`
  MODIFY `respon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `sambutan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `sejarah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `struktur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `tentang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
