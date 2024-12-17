-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2024 pada 14.52
-- Versi server: 10.5.23-MariaDB
-- Versi PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hierkumy_manunngal-mobilindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Promosi 1', '1729829906_3ae25882-1b22-418f-94d6-9d4df4550719.jfif', NULL, '2024-10-25 04:18:26'),
(2, 'Promosi 2', '1729829918_e1e92460-a1b5-4278-bd78-918368206e0b.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_mobils`
--

CREATE TABLE `gambar_mobils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobil_id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar_mobils`
--

INSERT INTO `gambar_mobils` (`id`, `mobil_id`, `nama_file`, `created_at`, `updated_at`) VALUES
(11, 2, '671b0d572e4d1_image (5).webp', '2024-10-25 03:15:35', '2024-10-25 03:15:35'),
(12, 2, '671b0d5730283_image (4).webp', '2024-10-25 03:15:35', '2024-10-25 03:15:35'),
(14, 2, '671b0d6ea0b48_image (6).webp', '2024-10-25 03:15:58', '2024-10-25 03:15:58'),
(18, 4, '671b1177c8714_image (12).webp', '2024-10-25 03:33:11', '2024-10-25 03:33:11'),
(19, 4, '671b1177cad0c_image (11).webp', '2024-10-25 03:33:11', '2024-10-25 03:33:11'),
(20, 4, '671b1177cdc01_image (10).webp', '2024-10-25 03:33:11', '2024-10-25 03:33:11'),
(27, 7, '671b1245962a0_image (21).webp', '2024-10-25 03:36:37', '2024-10-25 03:36:37'),
(28, 7, '671b12459916e_image (20).webp', '2024-10-25 03:36:37', '2024-10-25 03:36:37'),
(29, 7, '671b12459b7b2_image (19).webp', '2024-10-25 03:36:37', '2024-10-25 03:36:37'),
(51, 15, '671f643d82a9e_WhatsApp_Image_2024-10-07_at_10.46.51.jpeg', '2024-10-28 10:15:25', '2024-10-28 10:15:25'),
(52, 16, '671f66a161938_WhatsApp_Image_2024-10-07_at_10.48.00.jpeg', '2024-10-28 10:25:37', '2024-10-28 10:25:37'),
(53, 17, '67356b49ba0bd_WhatsApp_Image_2024-10-28_at_23.13.39.jpeg', '2024-11-14 03:15:21', '2024-11-14 03:15:21'),
(54, 18, '67356cd0a45ea_WhatsApp_Image_2024-10-07_at_10.53.59.jpeg', '2024-11-14 03:21:52', '2024-11-14 03:21:52'),
(55, 5, '673b4fd9591e5_WhatsApp_Image_2024-10-07_at_10.55.00.jpeg', '2024-11-18 14:31:53', '2024-11-18 14:31:53'),
(56, 19, '6743e1ee9e2a3_WhatsApp_Image_2024-11-25_at_09.31.07.jpeg', '2024-11-25 02:33:18', '2024-11-25 02:33:18'),
(57, 20, '6743e2ea1d8fd_WhatsApp_Image_2024-11-25_at_09.31.07__1_.jpeg', '2024-11-25 02:37:30', '2024-11-25 02:37:30'),
(58, 21, '6743e4c42ac48_WhatsApp_Image_2024-11-25_at_09.31.07__1_.jpeg', '2024-11-25 02:45:24', '2024-11-25 02:45:24'),
(59, 22, '6743e5373ad11_WhatsApp_Image_2024-11-25_at_09.31.08.jpeg', '2024-11-25 02:47:19', '2024-11-25 02:47:19'),
(60, 23, '6743e5694e940_WhatsApp_Image_2024-11-25_at_09.31.08__1_.jpeg', '2024-11-25 02:48:09', '2024-11-25 02:48:09'),
(61, 24, '6744213136d30_WhatsApp_Image_2024-11-25_at_09.29.47.jpeg', '2024-11-25 07:03:13', '2024-11-25 07:03:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_21_043839_create_banners_table', 1),
(5, '2024_10_24_223609_create_mobils_table', 1),
(6, '2024_10_24_223617_create_gambar_mobils_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobils`
--

CREATE TABLE `mobils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Available',
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mobils`
--

INSERT INTO `mobils` (`id`, `nama`, `detail`, `user_id`, `status`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'Toyota Kijang Innova (2019)', 'TOYOTA KIJANG INNOVA 2.0 G BENSIN M/T 2019 ABU\r\n.\r\nHarga Cash : Rp 250.000.000\r\nHarga Kredit : Rp 245.000.000\r\nTDP : Rp 35.000.000\r\nAngsuran 4 tahun : Rp 6.420.000\r\nAngsuran 5 tahun : Rp 5.640.000\r\n.\r\nBeli Mobil Terus Untung!\r\nBeli mobil dan dapatkan bonus saldo digital hingga Rp1.500.000!\r\n*S&K berlaku\r\n.\r\nKeunggulan Unit :\r\n- Pajak : 7 MEI 2025\r\n- Odometer : 113,333\r\n- Tangan Kedua\r\n- Atas nama : Perorangan\r\n- Plat Genap\r\n- Warna : ABU\r\n- Kelengkapan Dokumen (BM/BS)\r\n.\r\nKeunggulan Model :\r\n- Fitur layaknya MPV mewah\r\n- Tampilan lebih sporty\r\n- Jok kulit asli\r\n- Fog lamp\r\n- sertai fitur – fitur lengkap\r\n.\r\nMengapa Anda harus membeli mobil di OLXmobbi?\r\n- Garansi Mesin hingga 1 tahun\r\n- Gratis Biaya Jasa Perawatan\r\n- Jaminan 7 hari jaminan uang kembali\r\n- Test Drive dari Rumah,\r\n- Ada 2.000+ pilihan mobil bekas Mobil Bekas Berkualitas, Mobil lulus inspeksi dan tersertifikasi\r\n*S&K berlaku\r\n.\r\nPembayaran Booking Fee / Pelunasan hanya melalui no rekening BCA 638,028,0688 an SERASI MITRA MOBIL PT\r\nTDP promo hanya Berlaku jika:\r\n- BI checking Bersih (tidak pernah ada keterlambatan pembayaran)\r\n- Rumah Milik Pribadi\r\n- Pemasukan/Gaji= 3x Angsuran.\r\n* Bisa di bantu Rumah Kontrak dan BI checking bermasalah dengan TDP 30%* (S&K Berlaku)\r\n.\r\nKunjungi Kami di :.\r\nOLXmobbi Sudirman\r\nJl. Jend Sudirman no 573 dekat pertigaan jamika Babakan ciparay Kota Bandung 100m sebelum Pombensin dan 300m setelah apartemen sudirman\r\nAtau bisa kunjungi cabang kami yang lain di Jl. Soekarno-Hatta No.590, Bandung ( Metro Indah Mall ), Parkiran mobil lantai 3B & 4A.\r\n.\r\nSifa - Sales Advisor\r\nOLXmobbi\r\nAhlinya Mobil Bekas Berkualitas', 1, 'Available', 245000000, '2024-10-25 03:15:35', '2024-10-25 03:16:43'),
(4, 'Mitsubishi XPander (2019)', 'Mitsubishi Xpander 1.5 Ultimate Bensin-AT 2019\r\n.\r\nHarga Cash : Rp 219,000,000\r\nHarga Kredit : Rp 213,000,000\r\nTDP : Rp xxxx\r\nAngsuran 4 tahun : Rp xxx\r\nAngsuran 5 tahun : Rp xxx\r\nBeli Mobil Terus Untung!\r\nBeli mobil dan dapatkan bonus saldo digital hingga Rp1.500.000!\r\n*S&K berlaku\r\n.\r\nKeunggulan Unit\r\n1. Pajak : Mei-2025\r\n2. Odometer : 68,604 KM\r\n3. Tangan Kedua\r\n4. Atas nama : Perorangan\r\n5. Plat Genap\r\n6. Cat original\r\n.\r\n.\r\nMengapa Anda harus membeli mobil di OLXmobbi?\r\n- Garansi Mesin hingga 1 tahun\r\n- Gratis Biaya Jasa Perawatan\r\n- Jaminan 7 hari jaminan uang kembali\r\n- Test Drive dari Rumah,\r\n- Ada 2.000+ pilihan mobil bekas Mobil Bekas Berkualitas, Mobil lulus inspeksi dan tersertifikasi\r\n*S&K berlaku\r\n.\r\nPembayaran Booking Fee / Pelunasan hanya melalui no rekening BCA 638 - 028 - 0688 an SERASI MITRA MOBIL PT\r\nTDP promo hanya Berlaku jika:\r\n- BI checking Bersih (tidak pernah ada keterlambatan pembayaran)\r\n- Rumah Milik Pribadi\r\n- Pemasukan/Gaji= 3x Angsuran.\r\n* Bisa di bantu Rumah Kontrak dan BI checking bermasalah dengan TDP 30%* (S&K Berlaku)\r\n.\r\nKunjungi Kami di :.\r\nOLXmobbi PASTEUR\r\nJl. Djundjunan no 28-30 Pasteur - Bandung\r\n(dibawah flyover sebelum Hotel Ibis )\r\n.\r\nSISKA - Sales Advisor\r\nOLXmobbi\r\nAhlinya Mobil Bekas Berkualitas', 1, 'Available', 213000000, '2024-10-25 03:33:11', '2024-11-19 04:22:33'),
(5, 'toyota yaris (2018)', 'TOYOTA YARIS 1.5 TRD SPORTIVO BENSIN A/T 2018 ORANGE\r\n.\r\nHarga Cash : Rp 205.000.000\r\nHarga Kredit : Rp 200.000.000\r\nTDP : Rp 30.000.000\r\nAngsuran 4 tahun : Rp 5.350.000\r\nAngsuran 5 tahun : Rp 4.700.000\r\n.\r\nBeli Mobil Terus Untung!\r\nBeli mobil dan dapatkan bonus saldo digital hingga Rp1.500.000!\r\n*S&K berlaku\r\n.\r\nKeunggulan Unit :\r\n- Pajak : 7 JANUARI 2025\r\n- Odometer : 54,078\r\n- Tangan Kedua\r\n- Atas nama : Perorangan\r\n- Plat Genap\r\n- Warna : ORANGE\r\n- Kelengkapan Dokumen (BM/BS/KS)\r\n.\r\nKeunggulan Model :\r\n- Tampilan lebih sporty\r\n- Jok kulit asli\r\n- Fog lamp\r\n- sertai fitur – fitur lengkap\r\n.\r\nMengapa Anda harus membeli mobil di OLXmobbi?\r\n- Garansi Mesin hingga 1 tahun\r\n- Gratis Biaya Jasa Perawatan\r\n- Jaminan 7 hari jaminan uang kembali\r\n- Test Drive dari Rumah,\r\n- Ada 2.000+ pilihan mobil bekas Mobil Bekas Berkualitas, Mobil lulus inspeksi dan tersertifikasi\r\n*S&K berlaku\r\n.\r\nPembayaran Booking Fee / Pelunasan hanya melalui no rekening BCA 638,028,0688 an SERASI MITRA MOBIL PT\r\nTDP promo hanya Berlaku jika:\r\n- BI checking Bersih (tidak pernah ada keterlambatan pembayaran)\r\n- Rumah Milik Pribadi\r\n- Pemasukan/Gaji= 3x Angsuran.\r\n* Bisa di bantu Rumah Kontrak dan BI checking bermasalah dengan TDP 30%* (S&K Berlaku)\r\n.\r\nKunjungi Kami di :.\r\nOLXmobbi Sudirman\r\nJl. Jend Sudirman no 573 dekat pertigaan jamika Babakan ciparay Kota Bandung 100m sebelum Pombensin dan 300m setelah apartemen sudirman\r\nAtau bisa kunjungi cabang kami yang lain di Jl. Soekarno-Hatta No.590, Bandung ( Metro Indah Mall ), Parkiran mobil lantai 3B & 4A.\r\n.\r\nSifa - Sales Advisor\r\nOLXmobbi\r\nAhlinya Mobil Bekas Berkualitas', 1, 'Available', 200000000, '2024-10-25 03:34:25', '2024-11-18 14:30:14'),
(7, 'nissan x-trail (2018)', 'Nissan X-Trail 2.5 Bensin-AT 2018 Hitam\r\n.\r\nHarga Credit : Rp 219,000,000\r\nHarga Cash : Rp 232,000,000\r\n.\r\nBeli Mobil Terus Untung!!\r\nBeli mobil dan dapatkan bonus saldo digital hingga Rp1.500.000!\r\n*S&K berlaku\r\n.\r\nSpesifikasi Kendaraan:\r\n- STNK dan BPKB asli & sesuai atas nama\r\n- Pajak Agustus 2023\r\n- Odometer 138,879 Km\r\n- Transmisi OTOMATIS\r\n- Plat Genap\r\n- Warna Hitam\r\n.\r\nMengapa Anda harus membeli mobil di OLXmobbi?\r\n1. Mobil Bergaransi*, Garansi mesin dan transmisi hingga 1 tahun\r\n2. Gratis Biaya Jasa Perawatan, Gratis biaya jasa perawatan hingga 30.000 KM/18 bulan\r\n3. Jaminan Uang Kembali*, Nikmati 7 hari jaminan uang kembali\r\n4. Mobil Bekas Berkualitas, Mobil lulus inspeksi dan tersertifikasi\r\n5. Test Drive dari Rumah, Nikmati nyamannya test drive dari rumah\r\n6. Banyaknya Pilihan Mobil Bekas Berkualitas, Ada 2.000+ pilihan mobil bekas di OLXmobbi\r\n*S&K berlaku\r\n.\r\nPembayaran Booking Fee / Pelunasan hanya melalui no rekening 638/028/0688 an SERASI MITRA MOBIL PT\r\n.\r\nTDP promo hanya Berlaku jika:\r\n- BI checking Bersih (tidak pernah ada keterlambatan pembayaran)\r\n- Rumah Milik Pribadi\r\n- Pemasukan/Gaji= 3x Angsuran.\r\n* Bisa di bantu Rumah Kontrak dan BI checking bermasalah dengan TDP 30%* (S&K Berlaku)\r\n.\r\nKunjungi Kami di :\r\nOLXmobbi Tangerang\r\nBasement 2 Tangerang City Mall,\r\nJl. Jend. Sudirman, Kec. Tangerang, Kota Tangerang, Banten, 15118\r\n.\r\nAtau bisa kunjungi:\r\nOLXmobbi BSD\r\nLantai P2 ITC BSD\r\nJl. Pahlawan Seribu No.12, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310\r\n.\r\nSales Advisor\r\nOLXmobbi\r\nAhlinya Mobil Bekas Berkualitas\"', 1, 'Available', 22000000, '2024-10-25 03:36:37', '2024-11-19 05:31:47'),
(15, 'HONDA BRIO S MANUAL (2021)', '💥Pajak ON\r\n💥KM 57rb Record\r\n💥Full ori NO laka NO Banjir\r\n💥Kondisi paling super', 1, 'Available', 149000000, '2024-10-28 10:15:25', '2024-10-28 10:15:25'),
(16, 'CALYA G 1,2 MANUAL( 2019)', '💥Pajak ON\r\n💥KM 71rb Record\r\n💥Full ori NO laka NO Banjir\r\n💥Kondisi paling super', 1, 'Available', 120000000, '2024-10-28 10:25:37', '2024-11-25 02:26:44'),
(17, 'PAJERO DAKAR 4X2 SUNROOF A/T 2018', '💥Sudah BM kota pajak 02/29\r\n💥KM 81rb record \r\n💥Full ori\r\n💥Kondisi paling super\r\n\r\nStor Cash 437.000.000\r\nStor kredit 430.000.000\r\nStor DP 20 ansuran 10,7xx/59 bulan', 1, 'Available', 437000000, '2024-11-14 03:15:21', '2024-11-14 03:15:21'),
(18, 'REBORN G 2.0 M/T 2019', '💥KM 81 RB record \r\n💥Full ori NO laka NO banjir\r\n💥Kondisi paling super \r\n\r\nStor cash 260.000.000\r\nStor kredit 250.000.000\r\nStor DP 15jt ansuran 7,430x59 bulan', 1, 'Available', 260000000, '2024-11-14 03:21:52', '2024-11-14 03:21:52'),
(19, 'Toyota Agya 1,0 G', 'kredit', 1, 'Sold Out', 102000000, '2024-11-25 02:33:18', '2024-11-25 02:36:05'),
(20, 'Mitsubishi Pajero Sport exeed', 'kredit', 1, 'Sold Out', 230000000, '2024-11-25 02:37:30', '2024-11-25 02:38:40'),
(21, 'Daihatsu Terios 1,5 X', 'kredit', 1, 'Sold Out', 205000000, '2024-11-25 02:45:24', '2024-11-25 02:46:06'),
(22, 'Agya 1,2 Gr Sport', 'cash', 1, 'Available', 138000000, '2024-11-25 02:47:19', '2024-12-02 11:01:57'),
(23, 'Toyota Avanza 1,3 G', 'cash', 1, 'Sold Out', 160000000, '2024-11-25 02:48:09', '2024-11-25 02:49:47'),
(24, 'Daihatsu Xenia X 1,3', 'Kredit', 1, 'Sold Out', 145000000, '2024-11-25 07:03:13', '2024-11-25 07:04:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) NOT NULL,
  `mobil_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `harga` bigint(255) NOT NULL,
  `nama_pembeli` text NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualans`
--

INSERT INTO `penjualans` (`id`, `mobil_id`, `pegawai_id`, `harga`, `nama_pembeli`, `metode_pembayaran`, `created_at`, `updated_at`) VALUES
(9, 19, 1, 102000000, 'Zulhendri', 'Cash', '2024-11-25 02:36:05', '2024-11-25 02:37:39'),
(10, 20, 1, 230000000, 'rusli', 'Credit', '2024-11-25 02:38:40', '2024-11-25 02:38:40'),
(11, 21, 1, 205000000, 'Nova Fitri Siregar', 'Credit', '2024-11-25 02:46:06', '2024-11-25 02:46:06'),
(12, 22, 1, 138000000, 'Derita Yurmi', 'Cash', '2024-11-25 02:48:52', '2024-11-25 02:48:52'),
(13, 23, 1, 160000000, 'Erizal Syam', 'Cash', '2024-11-25 02:49:47', '2024-11-25 02:49:47'),
(14, 24, 1, 145000000, 'Surya Massandra', 'Credit', '2024-11-25 07:04:16', '2024-12-02 11:08:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0QnJEUSfqfWx9cT9eRdJCyhCtfrNUCbPpfACXSX9', NULL, '34.69.247.209', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkY3c0xYdmZ1VjZoTnpnZXN4NUYzaXU2cEIxa3lOTUt5TnA4dW5VWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3Lm1hbnVuZy5oaWVya3UubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1734215288),
('5S29rzDhH33Cpa1783mQqYjHl0heRrf0gNqxXVlE', NULL, '3.252.227.43', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUR3V1pvaFZtdVFkdHNYT0tnREREN2VrdTF4RzFUeE5QUUdSMGUxNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3Lm1hbnVuZy5oaWVya3UubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1733476892),
('5Z8iKswHV6tBdCJT3NzJTgve4tDVKnM3yFrUZsto', 1, '202.67.45.30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaFVmTWJ4V0lPcFMzOEFtRWFBRGY1aVdLMGFqT01KOUJrRDBVcThzcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZC9hZG1pbi9kYXRhLXBlbmp1YWxhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1734421482),
('6Z5djHQRZWhYan4AASvmKCblkesqmt0SEctgp3us', 1, '114.125.42.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXRqeUdRT3VkQTlsUmY4ekhRVHdzTXBYbUlsMVE1YlBXSzJTdURVeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1734052093),
('D8MFhJbPPTiA55g6JU8aMLVJshYejXeNThLIbYFW', NULL, '34.69.247.209', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkFmcEhweGRSTVRYOEE1Y2N6UDVVMlRwajBMam9mekx1dFpHVG5mQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vd3d3Lm1hbnVuZy5oaWVya3UubXkuaWQvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1734215289),
('eWkAf8SbcTtWmPiR2zOjlKaodgsYZ8GdGOGamqOw', NULL, '198.235.24.22', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWk04NGVBakRHVkNCdW9zTWtqYkMxbFlvTDhIazJBQ3BBZDRVNDd5MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3Lm1hbnVuZy5oaWVya3UubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1734329423),
('hKamChPWIBaMpD5VdXt7QhzgPSFj7T3ceMpQfYOE', 9, '116.206.36.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVU5Q1hFZ0ZhVTJrb2Z0eTZkN0phbUs5RWNoNkpuUllkZUlPazc0USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MjoiaHR0cHM6Ly9tYW51bmcuaGllcmt1Lm15LmlkL3BlZ2F3YWkvcHJvZmlsIjt9fQ==', 1733458251),
('hTM2oGTZNvsfxHc5nmvhg9OOzklaV5JQDegfEBZF', 9, '202.67.45.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaEVvdkl2MnhHekFnakY3RXNEc3MxbU4yQUFpcG83cmJ3TTRHNjRQZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZC9wZWdhd2FpL3Byb2ZpbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7fQ==', 1733567135),
('iagwxGuee6rcVb3VMPxmNxFJRP4bCt2dJd5NGW6K', NULL, '116.206.36.55', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_1) AppleWebKit/601.2.4 (KHTML, like Gecko) Version/9.0.1 Safari/601.2.4 facebookexternalhit/1.1 Facebot Twitterbot/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTNYUUpFY3BWeHBzMjZRcDhFaHFPYk5RY3psVExQd002U1ZEdmdSZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733452007),
('JQM3V4K8N8m8huavcOVC6uCcJjmA0qPyLEn7CrlL', NULL, '35.85.245.83', 'Mozilla/5.0 (compatible; wpbot/1.2; +https://forms.gle/ajBaxygz9jSR8p8G9)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXVJUGJvaHU4RXRoTkdoRmZ5OWZodzNtbG1PQkN5YnlYOXR6OE5ZdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733919112),
('nLLjZHHrwyEFWd8xW1V59tXT5qau9KaevhZGWfs1', NULL, '209.38.149.191', 'Mozilla/5.0 (compatible)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUxXdUtsQmFPbWlEbFZQY3A5eVNkS2ZDT0FpcU5Uc3VENmhqM1M2TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734226094),
('RmnoabgIZ3wsCqeG1CmLy3REsLBvzyZjHqiwIu2a', NULL, '182.1.16.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGI5VWRzRlEycjdqekNPVUFnbnlZWE9Tb3ZVNmh5SHc5bThLem5jdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733818155),
('tgxisIkDcm73mKr4e8JN1fbYqI2VcAr7AMkBF6Nh', NULL, '205.210.31.165', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczRyRGU2Y3I0Y1YyaGFFUFptVDBNMEdCa3hFejdaTFhpWHQwZFc3diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3Lm1hbnVuZy5oaWVya3UubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1734356443),
('ubBFBDhTuvuQV6iWZjo9xmNmHzNRWslSuuI3vtkl', NULL, '205.210.31.149', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOG9sSmF1SWNoMU9KWlYxVG5wUzkxWUNDdWdCb0NKcnlmckF0dmxiNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734309101),
('xeABvzkHZA8stt8H4sRcjVJtnIQFYQ5pjlkNGMWS', NULL, '205.210.31.57', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGxPUWhDMGtKcm5MRFF3SU0waU1ORHlkaloydlFCVWtzYmFFeWJTMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vbWFudW5nLmhpZXJrdS5teS5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734229433),
('xsUyViGZDMG538hHgA5asb7Dv9xKzEFjGdFgamOZ', NULL, '137.184.113.169', 'Mozilla/5.0 (compatible)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEdIQWkwV1VEcXJ4QmtWd281RnQxTTBqc0szSnRqRzZBNGxCTWR3bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3Lm1hbnVuZy5oaWVya3UubXkuaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1734161235);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `ttl`, `role`, `gambar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Robi Sugara', '2002-08-19', 'Admin', '1731314063_3X4.jpg', 'robisugara@gmail.com', NULL, '$2y$12$yAI.zQOF5xamh5mIHu/xies6Nwi8w7sWkuVLevOpAFKU5lRhGcmUO', NULL, '2024-10-25 02:41:53', '2024-11-11 08:34:23'),
(7, 'yanto', '2002-09-10', 'Pegawai', '1730111412_WhatsApp_Image_2024-09-07_at_14.01.18.jpeg', 'yanto@gmail.com', NULL, '$2y$12$23HKLcZgMDHpdvJagepk3uPkJ2mPQBJQx/lJ.DcFuPiXDZd8qT3yi', NULL, '2024-10-28 10:30:13', '2024-10-28 10:30:13'),
(8, 'dayat', '2024-10-31', 'Admin', '1730772500_logo_ipmaseta.png', 'dayat123@gmail.com', NULL, '$2y$12$C9hZ9XFLV7XL7kAUD9BRs.bO7Kxos5YSxMXqPo02Bcfwxs3gJLLAC', NULL, '2024-11-05 02:08:20', '2024-11-05 02:08:38'),
(9, 'Sasmito', '1997-08-14', 'Pegawai', '1731553851_aaa.jpg', 'sasmito@gmail.com', NULL, '$2y$12$s2kQBsJtXiOO.0DIzYUH4uBVPGAd.OxU42RFcMgffYFu.njg0k.D2', NULL, '2024-11-14 03:10:51', '2024-11-14 03:10:51'),
(10, 'Riki', '1998-12-02', 'Pegawai', '1733135322_4d396194-e0c0-4777-ae7a-9e06f68153c1.jpeg', 'Riki@gmail.com', NULL, '$2y$12$YvmSedPgLDYxvxIUqM1SJOlg/9mIYx0al1q84TKSa307WsCFCT8gC', NULL, '2024-12-02 10:28:42', '2024-12-02 10:28:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gambar_mobils`
--
ALTER TABLE `gambar_mobils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambar_mobils_mobil_id_foreign` (`mobil_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobils`
--
ALTER TABLE `mobils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobils_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_id` (`pegawai_id`),
  ADD KEY `mobil_id` (`mobil_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambar_mobils`
--
ALTER TABLE `gambar_mobils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar_mobils`
--
ALTER TABLE `gambar_mobils`
  ADD CONSTRAINT `gambar_mobils_mobil_id_foreign` FOREIGN KEY (`mobil_id`) REFERENCES `mobils` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mobils`
--
ALTER TABLE `mobils`
  ADD CONSTRAINT `mobils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD CONSTRAINT `penjualans_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualans_ibfk_2` FOREIGN KEY (`mobil_id`) REFERENCES `mobils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
