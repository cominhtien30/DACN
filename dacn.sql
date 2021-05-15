-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2021 lúc 05:53 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dacn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cmtphim`
--

CREATE TABLE `cmtphim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_phim` bigint(11) UNSIGNED NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `gio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cmtphim`
--

INSERT INTO `cmtphim` (`id`, `id_phim`, `id_user`, `noidung`, `ngay`, `gio`) VALUES
(44, 34, 38, 'sd', '2021-05-07', '23:34:24'),
(45, 34, 38, 'asd', '2021-05-07', '23:34:24'),
(46, 8, 38, 'sd', '2021-05-07', '23:35:04'),
(47, 8, 38, 's', '2021-05-07', '23:35:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_combo`
--

CREATE TABLE `dat_combo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_lichchieu` int(11) UNSIGNED NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `id_combo` bigint(11) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dat_combo`
--

INSERT INTO `dat_combo` (`id`, `id_lichchieu`, `id_user`, `id_combo`, `soluong`, `created_at`, `updated_at`) VALUES
(22, 9, 5, 8, 3, NULL, NULL),
(23, 9, 5, 9, 2, NULL, NULL),
(24, 9, 5, 10, 2, NULL, NULL),
(25, 3, 5, 8, 2, NULL, NULL),
(26, 3, 5, 9, 1, NULL, NULL),
(27, 8, 5, 10, 1, NULL, NULL),
(28, 9, 5, 8, 1, NULL, NULL),
(29, 9, 5, 9, 1, NULL, NULL),
(53, 11, 34, 11, 1, NULL, NULL),
(54, 9, 38, 8, 1, NULL, NULL),
(57, 5, 38, 8, 1, NULL, NULL),
(58, 5, 38, 8, 1, NULL, NULL),
(59, 9, 38, 8, 1, NULL, NULL),
(60, 12, 38, 8, 1, NULL, NULL),
(61, 5, 38, 9, 1, NULL, NULL),
(62, 12, 38, 8, 1, NULL, NULL),
(63, 9, 38, 8, 1, NULL, NULL),
(64, 12, 34, 11, 1, NULL, NULL),
(65, 11, 39, 8, 1, NULL, NULL),
(66, 11, 39, 9, 1, NULL, NULL),
(67, 11, 38, 8, 2, NULL, NULL),
(68, 11, 38, 9, 2, NULL, NULL),
(69, 11, 38, 8, 2, NULL, NULL),
(70, 11, 38, 9, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id` int(20) UNSIGNED NOT NULL,
  `id_phong` int(10) UNSIGNED NOT NULL,
  `hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id`, `id_phong`, `hang`, `so`, `created_at`, `updated_at`, `status`) VALUES
(14, 2, 'A', 2, NULL, NULL, 1),
(15, 2, 'A', 3, NULL, NULL, 1),
(16, 2, 'A', 4, NULL, NULL, 1),
(17, 2, 'A', 5, NULL, NULL, 1),
(18, 2, 'A', 6, NULL, NULL, 0),
(19, 2, 'A', 7, NULL, NULL, 0),
(20, 2, 'A', 8, NULL, NULL, 0),
(21, 2, 'A', 9, NULL, NULL, 0),
(33, 2, 'B', 1, NULL, NULL, 0),
(34, 2, 'B', 2, NULL, NULL, 0),
(35, 2, 'B', 3, NULL, NULL, 0),
(36, 2, 'B', 4, NULL, NULL, 0),
(37, 2, 'B', 5, NULL, NULL, 0),
(38, 2, 'B', 6, NULL, NULL, 1),
(39, 2, 'B', 7, NULL, NULL, 0),
(40, 2, 'B', 8, NULL, NULL, 0),
(41, 2, 'B', 9, NULL, NULL, 0),
(42, 2, 'B', 10, NULL, NULL, 0),
(43, 2, 'C', 1, NULL, NULL, 0),
(44, 2, 'C', 2, NULL, NULL, 0),
(45, 2, 'C', 3, NULL, NULL, 0),
(46, 2, 'C', 4, NULL, NULL, 0),
(47, 2, 'C', 5, NULL, NULL, 0),
(48, 2, 'C', 6, NULL, NULL, 0),
(49, 2, 'C', 7, NULL, NULL, 1),
(50, 2, 'C', 8, NULL, NULL, 0),
(51, 2, 'C', 9, NULL, NULL, 0),
(52, 2, 'C', 10, NULL, NULL, 0),
(53, 2, 'D', 1, NULL, NULL, 0),
(54, 2, 'D', 2, NULL, NULL, 0),
(55, 2, 'D', 3, NULL, NULL, 0),
(56, 2, 'D', 4, NULL, NULL, 0),
(57, 2, 'D', 5, NULL, NULL, 1),
(58, 2, 'D', 6, NULL, NULL, 1),
(59, 2, 'D', 7, NULL, NULL, 1),
(60, 2, 'D', 8, NULL, NULL, 1),
(61, 2, 'D', 9, NULL, NULL, 0),
(62, 2, 'D', 10, NULL, NULL, 0),
(63, 2, 'E', 1, NULL, NULL, 0),
(64, 2, 'E', 2, NULL, NULL, 0),
(65, 2, 'E', 3, NULL, NULL, 0),
(66, 2, 'E', 4, NULL, NULL, 0),
(67, 2, 'E', 5, NULL, NULL, 0),
(68, 2, 'E', 6, NULL, NULL, 1),
(69, 2, 'E', 7, NULL, NULL, 0),
(70, 2, 'E', 8, NULL, NULL, 0),
(71, 2, 'E', 9, NULL, NULL, 1),
(72, 2, 'E', 10, NULL, NULL, 1),
(73, 2, 'F', 1, NULL, NULL, 1),
(74, 2, 'F', 2, NULL, NULL, 1),
(75, 2, 'F', 3, NULL, NULL, 1),
(76, 2, 'F', 4, NULL, NULL, 1),
(77, 2, 'F', 5, NULL, NULL, 0),
(78, 2, 'F', 6, NULL, NULL, 0),
(79, 2, 'F', 7, NULL, NULL, 0),
(80, 2, 'F', 8, NULL, NULL, 1),
(81, 2, 'F', 9, NULL, NULL, 1),
(83, 3, 'A', 1, NULL, NULL, 0),
(84, 3, 'A', 2, NULL, NULL, 0),
(85, 3, 'A', 3, NULL, NULL, 0),
(86, 3, 'A', 4, NULL, NULL, 0),
(87, 3, 'A', 5, NULL, NULL, 0),
(88, 3, 'A', 6, NULL, NULL, 0),
(89, 3, 'A', 7, NULL, NULL, 0),
(90, 3, 'A', 8, NULL, NULL, 0),
(91, 3, 'A', 9, NULL, NULL, 0),
(92, 3, 'A', 10, NULL, NULL, 0),
(93, 3, 'B', 1, NULL, NULL, 0),
(94, 3, 'B', 2, NULL, NULL, 0),
(95, 3, 'B', 3, NULL, NULL, 0),
(96, 3, 'B', 4, NULL, NULL, 0),
(97, 3, 'B', 5, NULL, NULL, 0),
(98, 3, 'B', 6, NULL, NULL, 0),
(99, 3, 'B', 7, NULL, NULL, 0),
(100, 3, 'B', 8, NULL, NULL, 0),
(101, 3, 'B', 9, NULL, NULL, 0),
(102, 3, 'B', 10, NULL, NULL, 0),
(103, 3, 'C', 1, NULL, NULL, 0),
(104, 3, 'C', 2, NULL, NULL, 0),
(105, 3, 'C', 3, NULL, NULL, 0),
(106, 3, 'C', 4, NULL, NULL, 0),
(107, 3, 'C', 5, NULL, NULL, 0),
(108, 3, 'C', 6, NULL, NULL, 0),
(109, 3, 'C', 7, NULL, NULL, 0),
(110, 3, 'C', 8, NULL, NULL, 0),
(111, 3, 'C', 9, NULL, NULL, 0),
(112, 3, 'C', 10, NULL, NULL, 0),
(113, 3, 'D', 1, NULL, NULL, 0),
(114, 3, 'D', 2, NULL, NULL, 0),
(115, 3, 'D', 3, NULL, NULL, 0),
(116, 3, 'D', 4, NULL, NULL, 0),
(117, 3, 'D', 5, NULL, NULL, 0),
(118, 3, 'D', 6, NULL, NULL, 0),
(119, 3, 'D', 7, NULL, NULL, 0),
(120, 3, 'D', 8, NULL, NULL, 0),
(121, 3, 'D', 9, NULL, NULL, 0),
(122, 3, 'D', 10, NULL, NULL, 0),
(123, 3, 'E', 1, NULL, NULL, 0),
(124, 3, 'E', 2, NULL, NULL, 0),
(125, 3, 'E', 3, NULL, NULL, 0),
(126, 3, 'E', 4, NULL, NULL, 0),
(127, 3, 'E', 5, NULL, NULL, 0),
(128, 3, 'E', 6, NULL, NULL, 0),
(129, 3, 'E', 7, NULL, NULL, 0),
(130, 3, 'E', 8, NULL, NULL, 0),
(131, 3, 'E', 9, NULL, NULL, 0),
(132, 3, 'E', 10, NULL, NULL, 0),
(133, 3, 'F', 1, NULL, NULL, 0),
(134, 3, 'F', 2, NULL, NULL, 0),
(135, 3, 'F', 3, NULL, NULL, 0),
(136, 3, 'F', 4, NULL, NULL, 0),
(137, 3, 'F', 5, NULL, NULL, 0),
(138, 3, 'F', 6, NULL, NULL, 0),
(139, 3, 'F', 7, NULL, NULL, 0),
(140, 3, 'F', 8, NULL, NULL, 0),
(141, 3, 'F', 9, NULL, NULL, 0),
(142, 3, 'F', 10, NULL, NULL, 0),
(143, 10, 'A', 1, NULL, NULL, 0),
(144, 10, 'A', 2, NULL, NULL, 0),
(145, 10, 'A', 3, NULL, NULL, 0),
(146, 10, 'A', 4, NULL, NULL, 0),
(147, 10, 'A', 5, NULL, NULL, 1),
(148, 10, 'A', 6, NULL, NULL, 1),
(149, 10, 'A', 7, NULL, NULL, 0),
(150, 10, 'A', 8, NULL, NULL, 0),
(151, 10, 'A', 9, NULL, NULL, 0),
(152, 10, 'A', 10, NULL, NULL, 0),
(153, 10, 'B', 1, NULL, NULL, 0),
(154, 10, 'B', 2, NULL, NULL, 0),
(155, 10, 'B', 3, NULL, NULL, 0),
(156, 10, 'B', 4, NULL, NULL, 0),
(157, 10, 'B', 5, NULL, NULL, 0),
(158, 10, 'B', 6, NULL, NULL, 1),
(159, 10, 'B', 7, NULL, NULL, 0),
(160, 10, 'B', 8, NULL, NULL, 0),
(161, 10, 'B', 9, NULL, NULL, 0),
(162, 10, 'B', 10, NULL, NULL, 0),
(163, 10, 'C', 1, NULL, NULL, 0),
(164, 10, 'C', 2, NULL, NULL, 0),
(165, 10, 'C', 3, NULL, NULL, 1),
(166, 10, 'C', 4, NULL, NULL, 1),
(167, 10, 'C', 5, NULL, NULL, 1),
(168, 10, 'C', 6, NULL, NULL, 0),
(169, 10, 'C', 7, NULL, NULL, 0),
(170, 10, 'C', 8, NULL, NULL, 0),
(171, 10, 'C', 9, NULL, NULL, 0),
(172, 10, 'C', 10, NULL, NULL, 0),
(173, 10, 'D', 1, NULL, NULL, 0),
(174, 10, 'D', 2, NULL, NULL, 0),
(175, 10, 'D', 3, NULL, NULL, 0),
(176, 10, 'D', 4, NULL, NULL, 0),
(177, 10, 'D', 5, NULL, NULL, 1),
(178, 10, 'D', 6, NULL, NULL, 0),
(179, 10, 'D', 7, NULL, NULL, 0),
(180, 10, 'D', 8, NULL, NULL, 0),
(181, 10, 'D', 9, NULL, NULL, 0),
(182, 10, 'D', 10, NULL, NULL, 0),
(183, 10, 'E', 1, NULL, NULL, 0),
(184, 10, 'E', 2, NULL, NULL, 0),
(185, 10, 'E', 3, NULL, NULL, 0),
(186, 10, 'E', 4, NULL, NULL, 0),
(187, 10, 'E', 5, NULL, NULL, 0),
(188, 10, 'E', 6, NULL, NULL, 0),
(189, 10, 'E', 7, NULL, NULL, 0),
(190, 10, 'E', 8, NULL, NULL, 0),
(191, 10, 'E', 9, NULL, NULL, 1),
(192, 10, 'E', 10, NULL, NULL, 0),
(193, 10, 'F', 1, NULL, NULL, 0),
(194, 10, 'F', 2, NULL, NULL, 0),
(195, 10, 'F', 3, NULL, NULL, 0),
(196, 10, 'F', 4, NULL, NULL, 0),
(197, 10, 'F', 5, NULL, NULL, 0),
(198, 10, 'F', 6, NULL, NULL, 1),
(199, 10, 'F', 7, NULL, NULL, 1),
(200, 10, 'F', 8, NULL, NULL, 0),
(201, 10, 'F', 9, NULL, NULL, 1),
(202, 10, 'F', 10, NULL, NULL, 1),
(203, 13, 'F', 1, NULL, NULL, 0),
(204, 13, 'F', 2, NULL, NULL, 0),
(206, 13, 'F', 4, NULL, NULL, 0),
(207, 13, 'F', 5, NULL, NULL, 1),
(208, 13, 'F', 6, NULL, NULL, 1),
(209, 13, 'F', 7, NULL, NULL, 1),
(210, 13, 'F', 8, NULL, NULL, 1),
(211, 13, 'F', 9, NULL, NULL, 1),
(213, 13, 'B', 1, NULL, NULL, 0),
(214, 13, 'B', 2, NULL, NULL, 0),
(215, 13, 'B', 3, NULL, NULL, 0),
(216, 13, 'B', 4, NULL, NULL, 0),
(217, 13, 'B', 5, NULL, NULL, 1),
(218, 13, 'B', 6, NULL, NULL, 0),
(219, 13, 'B', 7, NULL, NULL, 0),
(220, 13, 'B', 8, NULL, NULL, 1),
(221, 13, 'B', 9, NULL, NULL, 1),
(222, 13, 'B', 10, NULL, NULL, 1),
(223, 13, 'C', 1, NULL, NULL, 0),
(224, 13, 'C', 2, NULL, NULL, 0),
(225, 13, 'C', 3, NULL, NULL, 0),
(226, 13, 'C', 4, NULL, NULL, 0),
(227, 13, 'C', 5, NULL, NULL, 1),
(228, 13, 'C', 6, NULL, NULL, 1),
(229, 13, 'C', 7, NULL, NULL, 0),
(230, 13, 'C', 8, NULL, NULL, 0),
(231, 13, 'C', 9, NULL, NULL, 0),
(232, 13, 'C', 10, NULL, NULL, 0),
(233, 13, 'D', 1, NULL, NULL, 0),
(234, 13, 'D', 2, NULL, NULL, 0),
(235, 13, 'D', 3, NULL, NULL, 0),
(236, 13, 'D', 4, NULL, NULL, 0),
(237, 13, 'D', 5, NULL, NULL, 1),
(238, 13, 'D', 6, NULL, NULL, 0),
(239, 13, 'D', 7, NULL, NULL, 0),
(240, 13, 'D', 8, NULL, NULL, 0),
(241, 13, 'D', 9, NULL, NULL, 0),
(242, 13, 'D', 10, NULL, NULL, 0),
(243, 13, 'E', 1, NULL, NULL, 0),
(244, 13, 'E', 2, NULL, NULL, 0),
(245, 13, 'E', 3, NULL, NULL, 1),
(246, 13, 'E', 4, NULL, NULL, 0),
(247, 13, 'E', 5, NULL, NULL, 1),
(248, 13, 'E', 6, NULL, NULL, 1),
(249, 13, 'E', 7, NULL, NULL, 0),
(250, 13, 'E', 8, NULL, NULL, 0),
(251, 13, 'E', 9, NULL, NULL, 0),
(252, 13, 'E', 10, NULL, NULL, 0),
(255, 13, 'F', 3, NULL, NULL, 1),
(265, 2, 'A', 10, NULL, NULL, 0),
(266, 2, 'A', 1, NULL, NULL, 0),
(267, 2, 'F', 10, NULL, NULL, 1),
(268, 13, 'F', 10, NULL, NULL, 1),
(269, 13, 'A', 1, NULL, NULL, 1),
(270, 13, 'A', 2, NULL, NULL, 1),
(273, 13, 'A', 3, NULL, NULL, 1),
(274, 13, 'A', 4, NULL, NULL, 1),
(275, 13, 'A', 5, NULL, NULL, 0),
(276, 13, 'A', 6, NULL, NULL, 0),
(277, 13, 'A', 7, NULL, NULL, 0),
(278, 13, 'A', 8, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gia`
--

CREATE TABLE `gia` (
  `loaigia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gia`
--

INSERT INTO `gia` (`loaigia`, `gia`, `created_at`, `updated_at`) VALUES
('A', 70000.00, NULL, NULL),
('B', 70000.00, NULL, NULL),
('C', 150000.00, NULL, NULL),
('D', 150000.00, NULL, NULL),
('E', 100000.00, NULL, NULL),
('F', 100000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichchieu`
--

CREATE TABLE `lichchieu` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngay` date NOT NULL,
  `gio` time NOT NULL DEFAULT current_timestamp(),
  `id_phim` bigint(11) UNSIGNED NOT NULL,
  `id_rap` int(11) UNSIGNED NOT NULL,
  `id_phong` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'On'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichchieu`
--

INSERT INTO `lichchieu` (`id`, `ngay`, `gio`, `id_phim`, `id_rap`, `id_phong`, `created_at`, `updated_at`, `status`) VALUES
(3, '2020-11-26', '18:00:00', 13, 2, 13, NULL, '2021-05-07 07:03:27', 'Off'),
(5, '2020-11-26', '14:00:00', 8, 1, 10, NULL, '2021-05-07 07:03:27', 'Off'),
(8, '2020-11-29', '08:00:00', 8, 1, 10, NULL, '2021-05-07 07:03:27', 'Off'),
(9, '2020-12-04', '18:00:00', 13, 1, 2, NULL, '2021-05-07 07:03:27', 'Off'),
(11, '2021-01-09', '18:00:00', 15, 1, 2, NULL, '2021-05-07 07:03:27', 'Off'),
(12, '2021-01-17', '14:30:00', 13, 1, 10, NULL, '2021-05-07 07:03:27', 'Off'),
(14, '2021-05-08', '18:00:00', 15, 1, 10, NULL, '2021-05-09 07:16:09', 'Off'),
(15, '2021-05-11', '08:00:00', 8, 1, 10, NULL, NULL, 'On');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_15_105252_create_tbl_rap', 2),
(5, '2020_11_16_075716_create_tbl_phong', 3),
(6, '2020_11_17_030118_create_tbl_phim', 4),
(9, '2020_11_22_031416_create_tbl_ghe', 5),
(10, '2020_11_22_032201_create_tbl_gia', 6),
(11, '2020_11_22_163652_create_tbl_lichchieu', 7),
(12, '2020_11_22_164857_create_tbl_ve', 8),
(13, '2020_11_27_082408_tbl_test', 9),
(14, '2020_12_05_042856_create_tbl_thucan', 10),
(15, '2020_12_09_041755_create_dat_combo', 11),
(16, '2020_12_27_144759_add_status_to_ghe', 12),
(17, '2020_12_31_060145_create_test', 12),
(19, '2021_01_06_114621_create_cmtphim_table', 13),
(22, '2021_05_02_044234_update_col_tbl_phim', 14),
(23, '2021_05_07_135658_update_col_tbl_lichchieu', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenphim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentienganh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quocgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daodien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiluong` int(11) NOT NULL,
  `ngaykhoichieu` date NOT NULL,
  `trangthai` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `tenphim`, `tentienganh`, `image`, `nsx`, `theloai`, `quocgia`, `daodien`, `dienvien`, `thoiluong`, `ngaykhoichieu`, `trangthai`, `trailer`, `noidung`, `created_at`, `updated_at`, `type`) VALUES
(8, 'Tiệc trăng máu', 'blood Moon', 'phim-U8U11.jpg', 'Lotte', 'Hài', 'Việt Nam', 'Nguyễn Quang Dũng', 'Thái Hoà, Đức Thịnh, Hồng Ánh..', 118, '2020-11-26', '1', 'https://www.youtube.com/embed/VY4wLeReeGo', 'Bộ phim kể về bữa tiệc hội ngộ của một nhóm bạn thân thiết tại nhà của cặp vợ chồng Ánh và Quang. Trong nhóm có đôi vợ chồng son Linh và Kathy , đôi vợ chồng truyền thống Bình và Quỳnh. Đến cuối cùng là Mạnh.Ngay đầu bữa tiệc, Ánh đề nghị tất cả cùng chơi trò chơi công khai mọi tin nhắn và cuộc gọi điện thoại trong đêm đó. Trò chơi tưởng chừng đơn giản nhưng đã đẩy nhóm bạn vào những tình huống dở khóc dở cười, thậm chí căng thẳng tột độ', NULL, NULL, 'Off'),
(13, 'Liên Quân Siêu Thú', 'SUPERMARKET INTEREST', 'phim-DIl490.jpg', 'CGV', 'Hài', 'Mỹ', 'Ben Smith', 'Nick Frost, Luke Evans, Gemma Arterton, Bill Nighy', 92, '2020-11-30', '1', 'https://www.youtube.com/embed/DmQTZ__oyaA', 'Năm 1969,có 1 chú chó được đưa vào không gian, nhưng một sự cố xảy ra và biến chú thành Siêu Cún. Lạc lối ở tương lai nơi tất cả mọi người đều căm ghét động vật, Siêu Cún cần tìm cho mình những trợ thủ đắc lực để giúp cậu gặp lại chủ nhân của mình. Sau cuộc gặp gỡ tình cờ với Mèo Tia Chớp, Thỏ Thông Thái và tổ chức Vệ Thú – nơi bảo vệ các loài động vật ở Glenfield, Siêu Cún và bộ sậu mới của cậu bất đắc dĩ phải đối đầu với chính quyền thị trấn và trở thành những anh hùng quả cảm..', NULL, NULL, 'Off'),
(14, 'Kẻ Rình Mồi', 'Stalker', 'phim-Y9P818.jpg', 'Cinestar', 'Tình Cảm', 'Việt Nam', 'John Hyams', 'Jules Willcox, Marc Menchaca, Anthony Heald, Jonathan Rosenthal, Katie O’Grady', 120, '2020-11-28', '0', 'https://www.youtube.com/embed/yxzhsWuVf10', 'Kẻ Rình Mồi bắt đầu khi nữ chính Jessica đang dừng xe một mình trên đường thì có một người đàn ông lạ mặt gõ kính xe và nói chuyện với cô. Sau khi lịch sự từ chối lời mời kết bạn, Jessica tiếp tục lái xe đi. Thế nhưng, tại tất cả các điểm dừng chân dọc đường, Jessica đều chạm mặt hắn ta.', NULL, NULL, 'Off'),
(15, 'CHỊ MƯỜI BA  3 NGÀY SINH TỬ', 'Sister 13', 'phim-BmU792.jpg', 'Cinestar', 'Hành Động', 'Việt Nam', 'Võ Thanh Hòa', 'Thu Trang, Tiến Luật, Kiều Minh Tuấn, Anh Tú, Châu Bùi, Phát La,…', 120, '2021-01-06', '1', 'https://www.youtube.com/embed/Ncwkodt5dA4', 'CHỊ MƯỜI BA TUNG TRAILER CHÍNH THỨC 😎\r\nChào tháng 12 không cần quá hoành tráng, người chơi hệ anh em nghĩa tình Chị Mười Ba chiêu đãi anh em những thước phim chân thật, kịch tính và nhiều bí ẩn xung quanh món nợ từ trên trời rơi xuống giữa Kẽm Gai và Thắng Khùng.\r\n\r\nTình nghĩa anh em ai mới là người bên cạnh chị cuối cùng? Đón xem CHỊ MƯỜI BA - 3 Ngày Sinh Tử có suất chiếu đặc biệt từ 19h00 ngày 23.12.2020', NULL, NULL, 'Off'),
(34, 'Nobody', 'Nobody', '/oBgWY00bEFeZ9N25wWVyuQddbAo.jpg', 'https://www.nobody.movie', 'NULL', 'en', 'NULL', 'NULL', 92, '2021-03-26', '1', 'https://www.youtube.com/embed/wZti8QKBWPo', 'Hutch Mansell, a suburban dad, overlooked husband, nothing neighbor — a \"nobody.\" When two thieves break into his home one night, Hutch\'s unknown long-simmering rage is ignited and propels him on a brutal path that will uncover dark secrets he fought to leave behind.', NULL, NULL, 'On'),
(35, 'Demon Slayer -Kimetsu no Yaiba- The Movie: Mugen Train', 'Demon Slayer -Kimetsu no Yaiba- The Movie: Mugen Train', '/h8Rb9gBr48ODIwYUttZNYeMWeUU.jpg', 'https://kimetsu.com/anime/movie/mugenressyahen/', 'NULL', 'ja', 'NULL', 'NULL', 117, '2020-10-16', '1', 'https://www.youtube.com/embed/ATJYac_dORw', 'Tanjirō Kamado, joined with Inosuke Hashibira, a boy raised by boars who wears a boar\'s head, and Zenitsu Agatsuma, a scared boy who reveals his true power when he sleeps, boards the Infinity Train on a new mission with the Fire Hashira, Kyōjurō Rengoku, to defeat a demon who has been tormenting the people and killing the demon slayers who oppose it!', NULL, NULL, 'On'),
(36, 'Raya and the Last Dragon', 'Raya and the Last Dragon', '/lPsD10PP4rgUGiGR4CCXA6iY0QQ.jpg', 'https://movies.disney.com/raya-and-the-last-dragon', 'NULL', 'en', 'NULL', 'NULL', 107, '2021-03-03', '1', 'https://www.youtube.com/embed/9BPMTr-NS9s', 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. But when an evil force threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, that same evil has returned and it’s up to a lone warrior, Raya, to track down the legendary last dragon to restore the fractured land and its divided people.', NULL, NULL, 'On'),
(37, 'Tom Clancy\'s Without Remorse', 'Tom Clancy\'s Without Remorse', '/rEm96ib0sPiZBADNKBHKBv5bve9.jpg', 'https://www.amazon.com/dp/B08VFD1Y3B', 'NULL', 'en', 'NULL', 'NULL', 109, '2021-04-29', '1', 'https://www.youtube.com/embed/e-rw2cxFVLg', 'An elite Navy SEAL uncovers an international conspiracy while seeking justice for the murder of his pregnant wife.', NULL, NULL, 'On');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenphong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rap` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `tenphong`, `id_rap`, `created_at`, `updated_at`) VALUES
(2, 'Bug SG1', 1, NULL, NULL),
(3, 'Bug HN1', 2, NULL, NULL),
(10, 'Bug SG 2', 1, NULL, NULL),
(13, 'Bug HN2', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenrap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thongtin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rap`
--

INSERT INTO `rap` (`id`, `tenrap`, `thongtin`, `created_at`, `updated_at`) VALUES
(1, 'Bug Sài Gòn', 'Quận Bình Thạnh', NULL, NULL),
(2, 'Bug Hà Nội', 'Ba Đình', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucan`
--

CREATE TABLE `thucan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double(8,2) NOT NULL,
  `chitiet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thucan`
--

INSERT INTO `thucan` (`id`, `ten`, `image`, `gia`, `chitiet`, `created_at`, `updated_at`) VALUES
(8, 'Bug Combo 1', 'combo-qzw799.png', 120000.00, '1 bắp nhỏ + 2 Pepsi. Nhận trong ngày xem phim. \r\n** Miễn phí đổi vị bắp Dâu, Phô mai và Caramel **', NULL, NULL),
(9, 'Bug Combo 2', 'combo-3Vw887.png', 200000.00, '2 Pepsi lớn + 2 bắp . Nhận trong ngày xem phim.\r\n** Miễn phí đổi vị bắp Dâu/ Phô mai/ Caramel **', NULL, NULL),
(10, 'Bắp Nhỏ', 'combo-N9G229.png', 45000.00, '1 bắp nhỏ. Nhận vào ngày xem phim \r\n** Miễn phí đổi vị bắp Dâu/ Phô mai/ Caramel **', NULL, NULL),
(11, 'Bắp Lớn', 'combo-QTz711.png', 60000.00, '1 bắp lớn. Nhận vào ngày xem phim \r\n** Miễn phí đổi vị bắp Dâu/ Phô mai/ Caramel **', NULL, NULL),
(12, 'Pepsi Nhỏ', 'combo-IiX404.png', 45000.00, '1 Pepsi nhỏ. Nhận vào ngày xem phim \r\n** Miễn phí đổi vị bắp Dâu/ Phô mai/ Caramel **', NULL, NULL),
(13, 'Pepsi Lớn', 'combo-hv9188.png', 60000.00, '1 Pepsi lớn. Nhận vào ngày xem phim \r\n** Miễn phí đổi vị bắp Dâu/ Phô mai/ Caramel **', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `verify`) VALUES
(3, 'Minh Béo', 'admin@gmail.com', NULL, '$2y$10$mCIXMOlY9WvvFGMNKlTGXuTM2mRCuDqPB1TllqkT8yKqtp6/W7wtS', 0, NULL, '2020-11-14 23:41:12', '2020-11-22 20:34:43', '0'),
(4, 'Minh Tiến', 'staff@gmail.com', NULL, '$2y$10$l9faS9eQsBrhCPk0QGKyOOPHb/vw0Qg4ti1odAQdnZpv5xnTYvoQC', 1, NULL, '2020-11-17 18:45:27', '2020-11-22 20:56:30', '0'),
(5, 'Kiên', 'cus@gmail.com', NULL, '$2y$10$VQX5bNP6njVCwZVCVQhcT.0WYRwEjZ0KAhRg/V9AOidLQKxqajwX2', 2, NULL, '2020-11-18 05:19:43', '2020-11-19 07:31:36', '1'),
(16, 'Đẹp Trai', 'a@gmail.com', NULL, '$2y$10$zDfxq7j8C6RVbHvlM1AwsuUJnOhkT32PD6fmsxdVd1RVcp4iTDli2', 2, NULL, '2020-11-19 02:19:23', '2020-11-21 08:20:31', '0'),
(22, '1', 'ltht1999@gmail.com', NULL, '$2y$10$yBwrFJOu441.tqjmXzaFL.jlPbs.4W9xRFLSscpb8X0QES5amErZm', 2, NULL, NULL, NULL, '0'),
(34, 'minh tien', 'cominhtien30@gmail.com', NULL, '$2y$10$jpJyWdzd.cezHDA50YPeOOgvw3hseibSuCPbWVB9VC3vKjTtzcKVO', 2, NULL, NULL, NULL, '1'),
(38, 'Minh Tiến', 'lop11a6.nhom6@gmail.com', NULL, NULL, 2, NULL, '2021-02-24 06:09:42', '2021-02-24 06:09:42', '1'),
(39, 'Tuấn Nguyễn tài', 'nguyentaituan09@gmail.com', NULL, NULL, 2, NULL, '2021-03-01 06:08:29', '2021-03-01 06:08:29', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_lichchieu` int(10) UNSIGNED NOT NULL,
  `id_user` bigint(11) UNSIGNED NOT NULL,
  `id_ghe` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id`, `id_lichchieu`, `id_user`, `id_ghe`, `created_at`, `updated_at`) VALUES
(102, 5, 38, 147, NULL, NULL),
(103, 11, 38, 60, NULL, NULL),
(104, 11, 38, 60, NULL, NULL),
(105, 11, 38, 60, NULL, NULL),
(106, 5, 38, 202, NULL, NULL),
(107, 9, 38, 14, NULL, NULL),
(108, 12, 38, 191, NULL, NULL),
(109, 5, 38, 201, NULL, NULL),
(110, 12, 38, 147, NULL, NULL),
(111, 9, 38, 81, NULL, NULL),
(112, 11, 38, 80, NULL, NULL),
(113, 9, 34, 73, NULL, NULL),
(114, 12, 34, 199, NULL, NULL),
(115, 9, 34, 267, NULL, NULL),
(116, 11, 39, 81, NULL, NULL),
(117, 11, 39, 267, NULL, NULL),
(118, 11, 38, 71, NULL, NULL),
(119, 11, 38, 72, NULL, NULL),
(120, 11, 38, 75, NULL, NULL),
(121, 11, 38, 76, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cmtphim`
--
ALTER TABLE `cmtphim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phim_cmt` (`id_phim`),
  ADD KEY `fk_user_cmt` (`id_user`);

--
-- Chỉ mục cho bảng `dat_combo`
--
ALTER TABLE `dat_combo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_combo` (`id_combo`),
  ADD KEY `id_lichchieu` (`id_lichchieu`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ghe_phong` (`id_phong`),
  ADD KEY `gia_phong` (`hang`);

--
-- Chỉ mục cho bảng `gia`
--
ALTER TABLE `gia`
  ADD PRIMARY KEY (`loaigia`);

--
-- Chỉ mục cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim` (`id_phim`),
  ADD KEY `id_rap` (`id_rap`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phong` (`id_rap`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lichchieu` (`id_lichchieu`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cmtphim`
--
ALTER TABLE `cmtphim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `dat_combo`
--
ALTER TABLE `dat_combo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `rap`
--
ALTER TABLE `rap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thucan`
--
ALTER TABLE `thucan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cmtphim`
--
ALTER TABLE `cmtphim`
  ADD CONSTRAINT `fk_phim_cmt` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `fk_user_cmt` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dat_combo`
--
ALTER TABLE `dat_combo`
  ADD CONSTRAINT `dat_combo_ibfk_1` FOREIGN KEY (`id_combo`) REFERENCES `thucan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dat_combo_ibfk_2` FOREIGN KEY (`id_lichchieu`) REFERENCES `lichchieu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dat_combo_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD CONSTRAINT `gia_phong` FOREIGN KEY (`hang`) REFERENCES `gia` (`loaigia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_phong` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD CONSTRAINT `lichchieu_ibfk_1` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichchieu_ibfk_2` FOREIGN KEY (`id_rap`) REFERENCES `rap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichchieu_ibfk_3` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `fk_phong` FOREIGN KEY (`id_rap`) REFERENCES `rap` (`id`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`id_lichchieu`) REFERENCES `lichchieu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ve_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
