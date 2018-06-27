-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2018 at 11:15 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localry_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `attaches`
--

DROP TABLE IF EXISTS `attaches`;
CREATE TABLE `attaches` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_id` int(11) NOT NULL,
  `attach_file` mediumtext NOT NULL,
  `attach_sort` int(11) DEFAULT '0',
  `attach_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attaches`
--

INSERT INTO `attaches` (`id`, `ref_id`, `attach_file`, `attach_sort`, `attach_type`, `created_at`, `updated_at`) VALUES
(1, 15, '{\"TH\":\"youtube-thumbnail-1522995085.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:11:26', '2018-04-07 16:47:04'),
(2, 16, '{\"TH\":\"youtube-thumbnail-1522995147.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:12:28', '2018-04-14 06:15:43'),
(3, 17, '{\"TH\":\"youtube-thumbnail-1522995230.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:13:50', '2018-04-14 06:25:16'),
(4, 19, '{\"TH\":\"youtube-thumbnail-1522995749.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:22:30', '2018-04-14 06:25:39'),
(5, 20, '{\"TH\":\"youtube-thumbnail-1522995781.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:23:01', '2018-04-14 06:26:05'),
(6, 21, '{\"TH\":\"youtube-thumbnail-1522995823.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:23:43', '2018-04-14 06:26:23'),
(7, 22, '{\"TH\":\"youtube-thumbnail-1522995888.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:24:52', '2018-04-14 06:26:41'),
(8, 23, '{\"TH\":\"youtube-thumbnail-1522996525.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:35:25', '2018-04-14 06:27:06'),
(9, 24, '{\"TH\":\"youtube-thumbnail-1522996609.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:36:49', '2018-04-14 06:27:29'),
(10, 25, '{\"TH\":\"youtube-thumbnail-1522997766.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:56:07', '2018-04-14 06:27:44'),
(11, 26, '{\"TH\":\"youtube-thumbnail-1522997800.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:56:40', '2018-04-14 06:28:03'),
(12, 27, '{\"TH\":\"youtube-thumbnail-1522997826.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:57:07', '2018-04-14 06:24:43'),
(13, 28, '{\"TH\":\"youtube-thumbnail-1522997855.jpg\",\"CH\":null}', 0, 'content-thumbnail', '2018-04-06 20:57:36', '2018-04-14 06:23:44'),
(14, 29, '{\"TH\":\"youtube-thumbnail-1525745355.jpg\",\"CH\":\"\"}', 0, 'content-thumbnail', '2018-05-08 14:11:44', '2018-05-08 16:09:15'),
(15, 36, '{\"TH\":\"youtube-thumbnail-1528258326.jpg\",\"CH\":\"\"}', 0, 'content-thumbnail', '2018-06-06 18:12:06', '2018-06-06 18:15:24'),
(16, 37, '{\"TH\":\"youtube-thumbnail-1528258865.jpg\",\"CH\":\"\"}', 0, 'content-thumbnail', '2018-06-06 18:21:05', '2018-06-06 18:33:08'),
(17, 38, '{\"TH\":\"youtube-thumbnail-1528267479.jpg\",\"CH\":\"\"}', 0, 'content-thumbnail', '2018-06-06 20:44:39', '2018-06-06 20:45:32'),
(18, 39, '{\"TH\":\"youtube-thumbnail-1528270212.jpg\"}', 0, 'content-thumbnail', '2018-06-06 21:30:12', '2018-06-06 21:30:12'),
(19, 40, '{\"TH\":\"youtube-thumbnail-1528270924.jpg\"}', 0, 'content-thumbnail', '2018-06-06 21:42:05', '2018-06-06 21:42:05'),
(20, 41, '{\"TH\":\"youtube-thumbnail-1528271325.jpg\",\"CH\":\"\"}', 0, 'content-thumbnail', '2018-06-06 21:48:46', '2018-06-06 21:50:00'),
(21, 42, '{\"TH\":\"youtube-thumbnail-1528271645.jpg\"}', 0, 'content-thumbnail', '2018-06-06 21:54:06', '2018-06-06 21:54:06'),
(22, 43, '{\"TH\":\"youtube-thumbnail-1528271918.jpg\"}', 0, 'content-thumbnail', '2018-06-06 21:58:38', '2018-06-06 21:58:38'),
(23, 44, '{\"TH\":\"youtube-thumbnail-1528272054.jpg\"}', 0, 'content-thumbnail', '2018-06-06 22:00:54', '2018-06-06 22:00:54'),
(24, 47, '{\"TH\":\"TH-1528273083-47.jpg\",\"CH\":\"\"}', 0, 'content-thumbnail', '2018-06-06 22:10:53', '2018-06-06 22:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `category_type` varchar(20) NOT NULL,
  `category_sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ref_id`, `subject`, `category_type`, `category_sort`, `created_at`, `updated_at`) VALUES
(2, 0, '{\"TH\":\"FASHION & BEAUTY\",\"CH\":\"\\u6642\\u5c1a\\u8207\\u7f8e\\u5bb9\"}', 'menu', 2, '2018-04-06 17:10:55', '2018-04-06 17:13:09'),
(3, 0, '{\"TH\":\"FOOD\",\"CH\":\"\\u9910\\u98f2\"}', 'menu', 3, '2018-04-06 17:11:07', '2018-04-06 17:12:36'),
(4, 0, '{\"TH\":\"TRAVEL\",\"CH\":\"\\u65c5\\u884c\"}', 'menu', 4, '2018-04-06 17:12:08', '2018-04-06 17:12:08'),
(5, 0, '{\"TH\":\"MUSIC\",\"CH\":\"\\u97f3\\u6a02\"}', 'menu', 5, '2018-04-06 17:13:58', '2018-04-06 17:13:58'),
(6, 0, '{\"TH\":\"PEOPLE\",\"CH\":\"\\u4eba\"}', 'menu', 6, '2018-04-06 17:14:32', '2018-04-06 17:14:32'),
(7, 0, '{\"TH\":\"Playlist 1 TEST SAFARI\",\"CH\":\"\"}', 'playlist', 1, '2018-04-23 00:20:22', '2018-05-10 18:45:10'),
(8, 0, '{\"TH\":\"Test\",\"CH\":\"\"}', 'playlist', 2, '2018-04-23 17:24:37', '2018-04-23 17:24:37'),
(9, 0, '{\"TH\":\"จ่ายตลาด (Shopping)\",\"CH\":\"\"}', 'playlist', 3, '2018-06-06 17:46:06', '2018-06-06 17:46:06'),
(10, 0, '{\"TH\":\"สติ (SATI)\",\"CH\":\"\"}', 'playlist', 4, '2018-06-06 17:46:21', '2018-06-06 17:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `tags` mediumtext NOT NULL,
  `video_link` mediumtext NOT NULL,
  `video_time` varchar(255) NOT NULL DEFAULT '00:00',
  `subject` mediumtext NOT NULL,
  `detail` text NOT NULL,
  `published` enum('Y','N') NOT NULL DEFAULT 'Y',
  `feature_video` enum('N','Y') NOT NULL,
  `content_type` varchar(20) NOT NULL,
  `content_sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `category_id`, `tags`, `video_link`, `video_time`, `subject`, `detail`, `published`, `feature_video`, `content_type`, `content_sort`, `created_at`, `updated_at`) VALUES
(15, 2, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?time_continue=6&v=hh3pkA_ovyA\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"ตื่นอยู่ในใจ\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', 'Y', 'N', 'content', 0, '2018-04-06 20:11:25', '2018-04-23 17:28:25'),
(16, 2, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=5f5AiG9BIP4&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"Heart Sale : \\u0e02\\u0e19\\u0e21\\u0e44\\u0e17\\u0e22\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e01\\u0e48\\u0e32 10 \\u0e1a\\u0e32\\u0e17\\u0e2d\\u0e23\\u0e48\\u0e2d\\u0e22\\u0e02\\u0e32\\u0e14\\u0e43\\u0e08\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>Heart Sale : \\u0e02\\u0e19\\u0e21\\u0e44\\u0e17\\u0e22\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e01\\u0e48\\u0e32 10 \\u0e1a\\u0e32\\u0e17\\u0e2d\\u0e23\\u0e48\\u0e2d\\u0e22\\u0e02\\u0e32\\u0e14\\u0e43\\u0e08<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:12:27', '2018-04-14 06:23:17'),
(17, 3, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=1HFB0ShdnJc&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=9\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"\\u0e28\\u0e34\\u0e25\\u0e1b\\u0e34\\u0e19 \\u0e28\\u0e34\\u0e25\\u0e1b\\u0e30 \\u0e2a\\u0e31\\u0e08\\u0e08\\u0e30\\u0e41\\u0e25\\u0e30\\u0e0a\\u0e35\\u0e27\\u0e34\\u0e15\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>\\u0e28\\u0e34\\u0e25\\u0e1b\\u0e34\\u0e19 \\u0e28\\u0e34\\u0e25\\u0e1b\\u0e30 \\u0e2a\\u0e31\\u0e08\\u0e08\\u0e30\\u0e41\\u0e25\\u0e30\\u0e0a\\u0e35\\u0e27\\u0e34\\u0e15<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:13:49', '2018-04-14 06:25:16'),
(19, 3, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=brl0NAEucCc&index=24&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"_Rasmee Isan Soul \\u0e2a\\u0e37\\u0e1a\\u0e17\\u0e2d\\u0e14\\u0e08\\u0e34\\u0e15\\u0e27\\u0e34\\u0e0d\\u0e0d\\u0e32\\u0e13\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e2d\\u0e35\\u0e2a\\u0e32\\u0e19\\u0e23\\u0e48\\u0e27\\u0e21\\u0e2a\\u0e21\\u0e31\\u0e22\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>EveryThink: Rasmee Isan Soul \\u0e2a\\u0e37\\u0e1a\\u0e17\\u0e2d\\u0e14\\u0e08\\u0e34\\u0e15\\u0e27\\u0e34\\u0e0d\\u0e0d\\u0e32\\u0e13\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e2d\\u0e35\\u0e2a\\u0e32\\u0e19\\u0e23\\u0e48\\u0e27\\u0e21\\u0e2a\\u0e21\\u0e31\\u0e22<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:22:29', '2018-04-14 06:25:39'),
(20, 4, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=KM4yygzaDoQ&index=104&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"EveryThink: \\u0e1d\\u0e31\\u0e19\\u0e23\\u0e49\\u0e32\\u0e22\\u0e02\\u0e2d\\u0e07 Kabu\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>EveryThink: \\u0e1d\\u0e31\\u0e19\\u0e23\\u0e49\\u0e32\\u0e22\\u0e02\\u0e2d\\u0e07 Kabu<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:23:01', '2018-04-14 06:26:05'),
(21, 4, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=xsPdMNyA0o4&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=106\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"EveryThink: Elephant Nature Park \\u0e28\\u0e39\\u0e19\\u0e22\\u0e4c\\u0e2d\\u0e20\\u0e34\\u0e1a\\u0e32\\u0e25\\u0e0a\\u0e49\\u0e32\\u0e07 \\u0e17\\u0e35\\u0e48\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e21\\u0e32\\u0e01\\u0e01\\u0e27\\u0e48\\u0e32\\u0e1a\\u0e49\\u0e32\\u0e19\\u0e02\\u0e2d\\u0e07\\u0e2a\\u0e31\\u0e15\\u0e27\\u0e4c\\u0e17\\u0e38\\u0e01\\u0e15\\u0e31\\u0e27\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>EveryThink: Elephant Nature Park \\u0e28\\u0e39\\u0e19\\u0e22\\u0e4c\\u0e2d\\u0e20\\u0e34\\u0e1a\\u0e32\\u0e25\\u0e0a\\u0e49\\u0e32\\u0e07 \\u0e17\\u0e35\\u0e48\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e21\\u0e32\\u0e01\\u0e01\\u0e27\\u0e48\\u0e32\\u0e1a\\u0e49\\u0e32\\u0e19\\u0e02\\u0e2d\\u0e07\\u0e2a\\u0e31\\u0e15\\u0e27\\u0e4c\\u0e17\\u0e38\\u0e01\\u0e15\\u0e31\\u0e27<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:23:43', '2018-04-14 06:26:23'),
(22, 4, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=hX3OqvnSGAw&index=172&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"People : \\u0e17\\u0e33\\u0e43\\u0e19\\u0e2a\\u0e34\\u0e48\\u0e07\\u0e17\\u0e35\\u0e48\\u0e23\\u0e31\\u0e01 \\u0e41\\u0e25\\u0e30\\u0e1e\\u0e34\\u0e2a\\u0e39\\u0e08\\u0e19\\u0e4c\\u0e43\\u0e2b\\u0e49\\u0e17\\u0e38\\u0e01\\u0e04\\u0e19\\u0e40\\u0e2b\\u0e47\\u0e19\\u0e14\\u0e49\\u0e27\\u0e22\\u0e04\\u0e27\\u0e32\\u0e21\\u0e2a\\u0e33\\u0e40\\u0e23\\u0e47\\u0e08\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>People : \\u0e17\\u0e33\\u0e43\\u0e19\\u0e2a\\u0e34\\u0e48\\u0e07\\u0e17\\u0e35\\u0e48\\u0e23\\u0e31\\u0e01 \\u0e41\\u0e25\\u0e30\\u0e1e\\u0e34\\u0e2a\\u0e39\\u0e08\\u0e19\\u0e4c\\u0e43\\u0e2b\\u0e49\\u0e17\\u0e38\\u0e01\\u0e04\\u0e19\\u0e40\\u0e2b\\u0e47\\u0e19\\u0e14\\u0e49\\u0e27\\u0e22\\u0e04\\u0e27\\u0e32\\u0e21\\u0e2a\\u0e33\\u0e40\\u0e23\\u0e47\\u0e08<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:24:48', '2018-04-14 06:26:41'),
(23, 5, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=39sCtQV06ng&index=163&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"EveryThink: \\u0e16\\u0e36\\u0e07\\u0e40\\u0e27\\u0e25\\u0e32\\u0e17\\u0e35\\u0e48\\u0e42\\u0e25\\u0e01\\u0e15\\u0e49\\u0e2d\\u0e07\\u0e40\\u0e0b\\u0e34\\u0e49\\u0e07\\u0e44\\u0e1b\\u0e01\\u0e31\\u0e1a\\u0e27\\u0e07\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e41\\u0e2b\\u0e48\\u0e07\\u0e28\\u0e15\\u0e27\\u0e23\\u0e23\\u0e29\\u0e17\\u0e35\\u0e48 21\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>EveryThink: \\u0e16\\u0e36\\u0e07\\u0e40\\u0e27\\u0e25\\u0e32\\u0e17\\u0e35\\u0e48\\u0e42\\u0e25\\u0e01\\u0e15\\u0e49\\u0e2d\\u0e07\\u0e40\\u0e0b\\u0e34\\u0e49\\u0e07\\u0e44\\u0e1b\\u0e01\\u0e31\\u0e1a\\u0e27\\u0e07\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e41\\u0e2b\\u0e48\\u0e07\\u0e28\\u0e15\\u0e27\\u0e23\\u0e23\\u0e29\\u0e17\\u0e35\\u0e48 21<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:35:25', '2018-04-14 06:27:06'),
(24, 5, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=kEtDS7YQkWo&index=142&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"\'\\u0e19\\u0e27\\u0e22\\u0e19\\u0e32\\u0e14\' \\u0e1c\\u0e25\\u0e34\\u0e15\\u0e20\\u0e31\\u0e13\\u0e11\\u0e4c\\u0e17\\u0e35\\u0e48\\u0e40\\u0e23\\u0e34\\u0e48\\u0e21\\u0e08\\u0e32\\u0e01 0\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>\\\\\'\\u0e19\\u0e27\\u0e22\\u0e19\\u0e32\\u0e14\\\\\' \\u0e1c\\u0e25\\u0e34\\u0e15\\u0e20\\u0e31\\u0e13\\u0e11\\u0e4c\\u0e17\\u0e35\\u0e48\\u0e40\\u0e23\\u0e34\\u0e48\\u0e21\\u0e08\\u0e32\\u0e01 0<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:36:49', '2018-04-14 06:27:29'),
(25, 6, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=hQftLO6oJeo&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=138\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"DoGood : Toolmorrow\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>DoGood : Toolmorrow<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:56:06', '2018-04-14 06:27:44'),
(26, 6, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=LuhNvUs_-tE&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=122\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"EveryThink : \\u0e43\\u0e04\\u0e23\\u0e27\\u0e48\\u0e32\\u0e1c\\u0e39\\u0e49\\u0e2b\\u0e0d\\u0e34\\u0e07...\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e40\\u0e1e\\u0e28\\u0e17\\u0e35\\u0e48\\u0e2d\\u0e48\\u0e2d\\u0e19\\u0e41\\u0e2d\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>EveryThink : \\u0e43\\u0e04\\u0e23\\u0e27\\u0e48\\u0e32\\u0e1c\\u0e39\\u0e49\\u0e2b\\u0e0d\\u0e34\\u0e07...\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e40\\u0e1e\\u0e28\\u0e17\\u0e35\\u0e48\\u0e2d\\u0e48\\u0e2d\\u0e19\\u0e41\\u0e2d<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:56:40', '2018-04-14 06:28:03'),
(27, 3, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=0EgWdBuZNhM&index=102&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"EveryThink: Breeder \\u0e1c\\u0e39\\u0e49\\u0e01\\u0e2d\\u0e1a\\u0e01\\u0e39\\u0e49\\u0e41\\u0e21\\u0e27\\u0e44\\u0e17\\u0e22\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>EveryThink: Breeder \\u0e1c\\u0e39\\u0e49\\u0e01\\u0e2d\\u0e1a\\u0e01\\u0e39\\u0e49\\u0e41\\u0e21\\u0e27\\u0e44\\u0e17\\u0e22<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:57:06', '2018-04-14 06:24:43'),
(28, 2, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=tY8gLt9GNcI&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=83\",\"CH\":\"\"}', '{\"TH\":\"5:00\",\"CH\":\"\"}', '{\"TH\":\"Everythink: TUFF นวมไทยโกอินเตอร์\",\"CH\":\"\"}', '{\"TH\":\"<div>\\r\\n<div>Everythink: TUFF นวมไทยโกอินเตอร์<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}', 'Y', 'Y', 'content', 0, '2018-04-06 20:57:35', '2018-04-23 17:28:35'),
(36, 10, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=XNoRLWIFYrU\",\"CH\":\"\"}', '{\"TH\":\"11.24\",\"CH\":\"\"}', '{\"TH\":\"สติ (SATI): \\\"การเดินทางเพื่อตามหาคุณค่าของชีวิต\\\"\",\"CH\":\"\"}', '{\"TH\":\"<p>คุณค่าความเป็นมนุษย์ - SELF ESTEEM<\\/p>\\r\\n<p>\'ส้ม\' เด็กสาวผู้มากไปด้วยพรสวรรค์แห่งการถ่ายภาพ หายตัวไปอย่างหลังจากมาร่วมกิจกรรมกับทางมูลนิธิฯ เธอทิ้งไว้เพียงผลงานภาพถ่ายไม่กี่ใบที่ช่วยให้เราพอเข้าใจถึงร่องรอยของชีวิตเธอได้อย่างดีเยี่ยม<\\/p>\\r\\n<p>และนั่นคือจุดเริ่มต้นของการเดินทาง การเดินทางเพื่อไปตามหาส้มให้พบ<\\/p>\\r\\n<p>จากการบ้านที่เธอได้นำมาส่งในวันนั้น &lsquo;ภาพถ่าย&rsquo; กลายมาเป็นร่อยรองสำคัญที่ นำทางให้เราเข้าไปรู้จักตัวตนของเธอ และจากคำบอกเล่าของคนรอบข้างของคนขายบริการในย่านกลางกรุง ไม่เพียงแต่ตัวตนของส้มที่ชัดขึ้นเท่านั้น คุณค่าอันงดงามก็เกิดขึ้นจากเรื่องราวของหลายคนที่เราพบเจอเช่นกัน<\\/p>\\r\\n<p>หากส้มมองเห็นคุณค่าของชีวิต ส้มก็จะสามารถใช้พรสวรรค์สร้างสรรค์สิ่งสวยงามให้กับโลกใบนี้ได้อีกมากมาย<br \\/>แล้วเราเจอ ส้ม ไหม บทสุดท้ายของ เด็กหญิงมากพรสวรรค์นี้จะเป็นอย่างไร ปลายทางของ &ldquo;คุณค่าของชีวิตคืออะไร?&rdquo; จะจบด้วยคำตอบแบบไหน ติดตามไปพร้อมๆกันกับ LOCALRY<\\/p>\\r\\n<p>พบกับประสบการณ์ที่เกิดจากการเดินทางของ LOCALRY x SATI<br \\/>กับ &lsquo;รากเหง้า เล่าอนาคต&rsquo;<\\/p>\\r\\n<p><br \\/>Som, a truly gifted girl in photography had disappeared after joining activities at SATI foundation. Only a few photos she took and left become a valuable clue to get a better understanding of her life.<\\/p>\\r\\n<p>And this situation is the beginning of the journey searching for Som.<\\/p>\\r\\n<p>The homework she handed on that day, &ldquo;the photos&rdquo;, turns to be a crucial evidence leading us to know more about her essence. Thanks to what has been told from many peers of prostitutes around Klang Krung area, we not only see the clearer picture of Som, but also recognize the beautiful value from various stories of people we have met along the way.<\\/p>\\r\\n<p>If Som realizes the significance of life, she will be able to use her talent to create tremendous beauty to this world.<br \\/>Are we going to find her? How is the last chapter of this gifted girl going to be like? What is the final answer of the questions &ldquo;what is the value of life&rdquo;? Let&rsquo;s find out together with LOCALRY.<\\/p>\\r\\n<p>Get ready for a new experience from an inspiring journey of LOCALRY x SATI,<\\/p>\\r\\n<p>SATI Volunteer page https:\\/\\/www.facebook.com\\/groups\\/251443745593376<\\/p>\\r\\n<p>Seek the origin, Live the localry<br \\/>#SatiNONPROFIT #Localry #Local #Thailand<\\/p>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 18:12:06', '2018-06-06 18:15:24'),
(39, 10, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=H2gT9pxiX1g\",\"CH\":\"\"}', '{\"TH\":\"0.48\",\"CH\":\"\"}', '{\"TH\":\"สติ (SATI): “จะไปมองอะไรอีก...ไม่ต้องคิดแล้ว เราอยู่ถึงแค่ไหนก็แค่นั้น”\",\"CH\":\"\"}', '{\"TH\":\"<p>คุณเคยคิดไหมว่าชีวิตคนๆ หนึ่ง...มีค่าสักแค่ไหน? <br \\/>ในบางครั้งชีวิตของใครบางคน อาจจะก็ทำได้แค่ &lsquo;ใช้ชีวิตวันต่อวัน&rsquo; <br \\/><br \\/>ใครจะไปคิดว่าแม่บ้านที่มีแววตาใสซื่ออย่าง &lsquo;ป้านก&rsquo; (นามสมมติ) จะเป็นหนึ่งในคนที่ขายบริการด้วยเช่นกัน เพียงเพราะคิดว่า &lsquo;เงิน&rsquo; จะช่วยให้วันนั้นๆ สบายขึ้นสักเล็กน้อย และเธอก็ไม่คิดว่าความสกปรก ความใคร่ที่ต้องพบเจอ เป็นเรื่องที่ผิดแผกแปลกจากสังคมหรือนำความทุกข์มาให้เธอ ...แต่สุดท้ายเธอจะเลือกใช้ชีวิตเช่นนี้ ไปจนถึงเมื่อไหร่นั้น ก็คงมีแค่เธอที่ตอบคำถามนี้ได้<\\/p>\\r\\n<p>พบกับประสบการณ์ที่เกิดจากการเดินทางของ LOCALRY x SATI กับ \'รากเหง้า เล่าอนาคต\'<\\/p>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 21:30:12', '2018-06-06 21:30:12'),
(40, 10, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=fk9XXRjz78M&pbjreload=10\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"สติ (SATI) : \\\"ถึงไม่มีเงิน...พี่ขอแค่อย่าเจ็บไข้ได้ป่วยก็พอ\\\"\",\"CH\":\"\"}', '{\"TH\":\"<p>ช่วงที่งดงาม - PROSPEROUS<\\/p>\\r\\n<p>คุณเคยคิดบ้างไหมว่า...ความสวยจะอยู่กับเราได้นานแค่ไหน และความจริงใจล่ะ มีจริงหรือเปล่า ในสังคมที่เต็มไปด้วยแสงสีและกามารมณ์ &lsquo;พี่น้อย&rsquo; (นามสมมติ) อดีตดาวเด่นแห่งคาบาเร่ต์โชว์ ที่เคยเป็นที่จับตามองของชายหนุ่มที่พร้อมจะเปย์ให้เธออย่างไม่อั้น เพื่อแลกกับความสุขและการตอบสนองความใคร่เพียงชั่วข้ามคืน จากคนที่เคยถูกห้อมล้อมด้วยชายหนุ่มมากหน้าหลายตา วันนี้แทบไม่เหลือใคร จะมีก็เพียงชายคนหนึ่งที่ยังอยู่ข้างกาย และเธอได้แต่ภาวนาว่า ...ขออย่าให้เขาคนนี้หายไปจากชีวิตของเธอเลย<\\/p>\\r\\n<p>พบกับประสบการณ์ที่เกิดจากการเดินทางของ LOCALRY x SATI กับ \'รากเหง้า เล่าอนาคต\'&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>Noy (anonymous), 55 years old, used to work in a cabaret. Have you ever thought that&hellip;how long your beauty would last? Does sincerity really exist in a today society full seduction and lust? Noy (anonymous), a former renown cabaret star, was once under the spotlight, all guys wanted to take her and willing to pay her limitless just for a temporary sex. From the one surrounded by lots of men, today he hardly has got anyone. Only one guy whom he prays for&hellip;please do not disappear from his life.<\\/p>\\r\\n<p>Get ready for a new experience from an inspiring journey of LOCALRY x SATI,<\\/p>\\r\\n<p>SATI Volunteer page: <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/redirect?event=video_description&amp;v=fk9XXRjz78M&amp;redir_token=B6fn17bdQ_Edb3uF-9HacViTvwR8MTUyODM1NzE5M0AxNTI4MjcwNzkz&amp;q=https%3A%2F%2Fbit.ly%2F2kD41v9\\\">https:\\/\\/bit.ly\\/2kD41v9<\\/a><\\/p>\\r\\n<p>Seek the origin, Live the localry<\\/p>\\r\\n<p><a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23SatiNONPROFIT\\\">#SatiNONPROFIT<\\/a> <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23Localry\\\">#Localry<\\/a> <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23Local\\\">#Local<\\/a> <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23Thailand\\\">#Thailand<\\/a><\\/p>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 21:42:04', '2018-06-06 21:42:04'),
(41, 10, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=xwnzc441NLQ&list=PLV--ULll6cT3k0LqJaI9BAxsygd4YHHlt\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"สติ (SATI): \\\"ความรักสำหรับพี่มันด้านชา ให้รักก็รักได้ ให้เลิกวันนี้ พรุ่งนี้ก็เลิกได้\\\"\",\"CH\":\"\"}', '{\"TH\":\"<p>&lsquo;ความรัก&rsquo; สำหรับใครหลายคนคงเป็นสิ่งที่สวยงาม แต่ความรักสำหรับเธอคนนี้...เป็นเพียง &lsquo;ความด้านชา&rsquo; <br \\/>เมื่อแฟนของเธอ คือ &lsquo;ลูกค้าประจำ&rsquo; ระหว่าง &lsquo;ความรัก&rsquo; กับ &lsquo;ความอยู่รอด&rsquo; เธอจะเลือกอะไร?<\\/p>\\r\\n<p>พบกับประสบการณ์ที่เกิดจากการเดินทางของ LOCALRY x SATI กับ \'รากเหง้า เล่าอนาคต\'<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>For most people, &ldquo;Love&rdquo; is an alluringly beautiful matter. <br \\/>For her, &ldquo;Love&rdquo; is an unfeeling practical. When her boyfriend is &ldquo;her regular customer&rdquo;<\\/p>\\r\\n<p>&hellip;. Between &ldquo;Love&rdquo; and &ldquo;Survival&rdquo;, which one she&rsquo;d call for. Get ready for a new experience from an inspiring journey of LOCALRY x SATI SATI Volunteer page: <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/redirect?v=xwnzc441NLQ&amp;event=video_description&amp;q=https%3A%2F%2Fbit.ly%2F2kD41v9&amp;redir_token=GlZtZ0J8Eznc2n0HJ5p8-kl87bZ8MTUyODM1NzM5NEAxNTI4MjcwOTk0\\\">https:\\/\\/bit.ly\\/2kD41v9<\\/a> Seek the origin, Live the localry <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23SatiNONPROFIT\\\">#SatiNONPROFIT<\\/a> <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23Localry\\\">#Localry<\\/a> <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23Local\\\">#Local<\\/a> <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/results?search_query=%23Thailand\\\">#Thailand<\\/a><\\/p>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 21:48:45', '2018-06-06 21:50:34'),
(42, 10, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=dAT-W3aLU70&index=4&list=PLV--ULll6cT3k0LqJaI9BAxsygd4YHHlt\",\"CH\":\"\"}', '{\"TH\":\"1.06\",\"CH\":\"\"}', '{\"TH\":\"สติ (SATI) : “เราต้องช่วยเหลือตัวเอง ไม่มีใครช่วยเหลือเราได้หรอก”\",\"CH\":\"\"}', '{\"TH\":\"<p>หญิงสาวที่มีความเชื่อที่ว่าอาชีพ &lsquo;ขายบริการ&rsquo; จะทำให้เธอได้มีกินมีใช้มากกว่าเดิม<\\/p>\\r\\n<p>จากเดิมที่เคยขายทั้งข้าวแกง น้ำปั่น สารพัด ในที่สุดเธอก็เลือกขาย &lsquo;ตัวเธอเอง&rsquo; <br \\/>อะไรที่ทำให้คนๆ หนึ่งที่มีชีวิตผ่านร้อนหนาวมาสารพัด ต้องมาจบที่การขายบริการ<br \\/>ที่มีมูลค่าเพียงแค่หลักร้อย กับชีวิตที่ไม่มีความหวัง จะยังมีความสุขอยู่ไหม?<\\/p>\\r\\n<p>พบกับประสบการณ์ที่เกิดจากการเดินทางของ LOCALRY x SATI กับ \'รากเหง้า เล่าอนาคต\'<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>A woman, who believes that being a prostitute does give her a better life and used to do several kinds of jobs such as selling street food, smoothies&hellip;etc.,<\\/p>\\r\\n<p>eventually chooses to sell her own body. What makes a person who has been through a lot of hardship ends up being a prostitute which values only few hundreds baht? Is she still happy living with such a hopeless life?<\\/p>\\r\\n<p>Get ready for a new experience from an inspiring journey of LOCALRY x SATI, SATI Volunteer page: <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" spellcheck=\\\"false\\\" href=\\\"https:\\/\\/www.youtube.com\\/redirect?q=https%3A%2F%2Fbit.ly%2F2kD41v9&amp;redir_token=8E0SMpiq7D3XoRkmF7tbz_TjHV98MTUyODM1Nzg5OEAxNTI4MjcxNDk4&amp;event=video_description&amp;v=dAT-W3aLU70\\\">https:\\/\\/bit.ly\\/2kD41v9<\\/a> Seek the origin, Live the localry<\\/p>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 21:54:05', '2018-06-06 22:00:18'),
(43, 9, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=9mOxpEgZJhI&list=PLV--ULll6cT1RQMfxYBtPyhGEn1mFB7Dj\",\"CH\":\"\"}', '{\"TH\":\"\",\"CH\":\"\"}', '{\"TH\":\"จ่ายตลาด (Shopping): \\\"ภายใต้ความหยาบและความรุนแรง มีอะไรบางอย่างซ่อนอยู่..\\\"\",\"CH\":\"\"}', '{\"TH\":\"<p>เรามักจะเห็นเรื่องการใช้ความรุนแรงกับเพศหญิงอยู่เป็นประจำ<\\/p>\\r\\n<p>บ้างก็ตามข่าวหนังสือพิมพ์ บ้างก็ตามโลกโซเซียลที่ออกมาแชร์กันให้ว่อน<\\/p>\\r\\n<p>แต่ภายใต้ความหยาบ และความรุนแรงที่แสดงออกมา อาจจะมีปมในใจบางอย่าง ซ่อนอยู่ลึกๆ <br \\/>และเมื่อความรู้สึกผิดเข้าครอบครองพื้นที่ในจิตใจได้เมื่อไหร่&hellip;ก็มีมุมอ่อนแอ และรู้สึกผิดให้เห็นได้เช่นกัน<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>We usually see the violence with females.<\\/p>\\r\\n<p>Some are in the news. Some are shared throughout the social world.<\\/p>\\r\\n<p>Under the expressed vulgarity and the brutality, there might be something hidden deeply. When the guilt takes up the heart, the weakness and contrition are revealed.<\\/p>\\r\\n<p>- Seek the origin, Live the localry<\\/p>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 21:58:38', '2018-06-06 21:58:58'),
(45, 7, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=ZzdrnpClL5M&index=2&list=PLV--ULll6cT1RQMfxYBtPyhGEn1mFB7Dj\",\"CH\":\"\"}', '{\"TH\":\"0.19\",\"CH\":\"\"}', '{\"TH\":\"จ่ายตลาด (Shopping): รากแท้ที่ซ่อนอยู่ใต้จิตใจ \'ราตรี\'\",\"CH\":\"\"}', '{\"TH\":\"<p>เราอาจจะเห็นรอยฟกซ้ำบนใบหน้า&nbsp;<br \\/>เราอาจจะเห็นแววตาที่ดูเศร้าหมอง<\\/p>\\r\\n<p>แต่อย่าเพิ่งตัดสินเรื่องราวเพียงเพราะคุณคิดตามสิ่งที่เห็น<br \\/>เพราะบางที...จิตใจมนุษย์ก็ยากแท้หยั่งถึง แต่ความยากนั้น<span class=\\\"text_exposed_show\\\"><br \\/>จะกลายเป็นรากแท้ของจิตใจที่เราหยั่งถึง<\\/span><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<div class=\\\"text_exposed_show\\\">\\r\\n<p>You might see the bruise on my face.<br \\/>You might see the sadness in my eyes.<br \\/>Don&rsquo;t judge what you literally see right away,<br \\/>because human&rsquo;s mind is fathomless.<br \\/>The immeasurable depth is the origin of mind we realize.<\\/p>\\r\\n<p>- Seek the origin, Live the localry<\\/p>\\r\\n<\\/div>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 22:04:11', '2018-06-06 22:04:11'),
(46, 7, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=ZzdrnpClL5M&index=2&list=PLV--ULll6cT1RQMfxYBtPyhGEn1mFB7Dj\",\"CH\":\"\"}', '{\"TH\":\"0.19\",\"CH\":\"\"}', '{\"TH\":\"จ่ายตลาด (Shopping): รากแท้ที่ซ่อนอยู่ใต้จิตใจ \'ราตรี\'\",\"CH\":\"\"}', '{\"TH\":\"<p>เราอาจจะเห็นรอยฟกซ้ำบนใบหน้า&nbsp;<br \\/>เราอาจจะเห็นแววตาที่ดูเศร้าหมอง<\\/p>\\r\\n<p>แต่อย่าเพิ่งตัดสินเรื่องราวเพียงเพราะคุณคิดตามสิ่งที่เห็น<br \\/>เพราะบางที...จิตใจมนุษย์ก็ยากแท้หยั่งถึง แต่ความยากนั้น<span class=\\\"text_exposed_show\\\"><br \\/>จะกลายเป็นรากแท้ของจิตใจที่เราหยั่งถึง<\\/span><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<div class=\\\"text_exposed_show\\\">\\r\\n<p>You might see the bruise on my face.<br \\/>You might see the sadness in my eyes.<br \\/>Don&rsquo;t judge what you literally see right away,<br \\/>because human&rsquo;s mind is fathomless.<br \\/>The immeasurable depth is the origin of mind we realize.<\\/p>\\r\\n<p>- Seek the origin, Live the localry<\\/p>\\r\\n<\\/div>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 22:05:31', '2018-06-06 22:05:31'),
(47, 8, '', '{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=gXNfTVAm4Qc\",\"CH\":\"\"}', '{\"TH\":\"4.5\",\"CH\":\"\"}', '{\"TH\":\"Test Content\",\"CH\":\"\"}', '{\"TH\":\"<p>เราอาจจะเห็นรอยฟกซ้ำบนใบหน้า&nbsp;<br \\/>เราอาจจะเห็นแววตาที่ดูเศร้าหมอง<\\/p>\\r\\n<p>แต่อย่าเพิ่งตัดสินเรื่องราวเพียงเพราะคุณคิดตามสิ่งที่เห็น<br \\/>เพราะบางที...จิตใจมนุษย์ก็ยากแท้หยั่งถึง แต่ความยากนั้น<span class=\\\"text_exposed_show\\\"><br \\/>จะกลายเป็นรากแท้ของจิตใจที่เราหยั่งถึง<\\/span><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<div class=\\\"text_exposed_show\\\">\\r\\n<p>You might see the bruise on my face.<br \\/>You might see the sadness in my eyes.<br \\/>Don&rsquo;t judge what you literally see right away,<br \\/>because human&rsquo;s mind is fathomless.<br \\/>The immeasurable depth is the origin of mind we realize.<\\/p>\\r\\n<p>- Seek the origin, Live the localry<\\/p>\\r\\n<\\/div>\",\"CH\":\"\"}', 'N', 'N', 'content', 0, '2018-06-06 22:10:52', '2018-06-06 22:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

DROP TABLE IF EXISTS `langs`;
CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `lang_sort` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `code`, `name`, `lang_sort`, `created_at`, `updated_at`) VALUES
(1, 'TH', 'THAILAND', 1, '2018-03-28 14:57:53', '2018-03-28 21:10:52'),
(3, 'CH', 'CHINESE', 2, '2018-03-28 17:23:42', '2018-03-28 21:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_03_27_213745_create_langs_table', 2),
('2018_03_27_215114_create_categories_table', 2),
('2018_03_27_215138_create_contents_table', 2),
('2018_03_27_222918_create_playlists_table', 2),
('2018_03_27_223713_create_attaches_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE `playlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `playlist_sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `user_id`, `content_id`, `category_id`, `playlist_sort`, `created_at`, `updated_at`) VALUES
(1, 0, 16, 7, 0, '2018-04-23 00:20:38', '2018-04-23 00:20:38'),
(2, 0, 22, 7, 0, '2018-04-23 17:25:39', '2018-04-23 17:25:39'),
(3, 0, 15, 8, 0, '2018-04-23 17:28:50', '2018-04-23 17:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `active` enum('N','Y','D') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `tel`, `level`, `user_type`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'info@admin.com', '$2y$10$Yo6D4nIQe2dY//.quL/8fuMDBdicfyKS8tgtiR03fpL1SboJFiZ6O', 'Administrator', '095-3439818', 'admin', 'admin', 'Y', 'UFvBCeK9njHdEINtPLR0ciKWoZngM1rx2R77opuh4mRsT7pBtr3XBqCKENYz', '2018-03-28 06:26:17', '2018-04-23 17:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attaches`
--
ALTER TABLE `attaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attaches`
--
ALTER TABLE `attaches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
