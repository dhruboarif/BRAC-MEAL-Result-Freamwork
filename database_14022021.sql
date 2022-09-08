-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 06:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

 

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) DEFAULT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', NULL, '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', NULL, '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', NULL, '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', NULL, NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', NULL, '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', NULL, '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', NULL, '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', NULL, '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', NULL, NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', NULL, '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', NULL, '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', NULL, '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', NULL, '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', NULL, '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', NULL, NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', NULL, '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', NULL, NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', NULL, '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', NULL, NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', NULL, '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', NULL, NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', NULL, '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', NULL, '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', NULL, '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', NULL, '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', NULL, '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', NULL, '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', NULL, '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', NULL, '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', NULL, NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', NULL, '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', NULL, NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', NULL, NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', NULL, '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', NULL, NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', NULL, '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', NULL, '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', NULL, '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', NULL, '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', NULL, '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', NULL, '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', NULL, NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', NULL, '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', NULL, NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', NULL, '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', NULL, NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', NULL, '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', NULL, NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', NULL, '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', NULL, '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', NULL, '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', NULL, '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', NULL, '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', NULL, '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', NULL, NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', NULL, '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', NULL, '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', NULL, '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', NULL, '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', NULL, '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', NULL, '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', NULL, NULL, NULL, 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', NULL, '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', NULL, '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `url`) VALUES
(1, 'Chattagram', NULL, 'www.chittagongdiv.gov.bd'),
(2, 'Rajshahi', NULL, 'www.rajshahidiv.gov.bd'),
(3, 'Khulna', NULL, 'www.khulnadiv.gov.bd'),
(4, 'Barisal', NULL, 'www.barisaldiv.gov.bd'),
(5, 'Sylhet', NULL, 'www.sylhetdiv.gov.bd'),
(6, 'Dhaka', NULL, 'www.dhakadiv.gov.bd'),
(7, 'Rangpur', NULL, 'www.rangpurdiv.gov.bd'),
(8, 'Mymensingh', NULL, 'www.mymensinghdiv.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `document_archive`
--

CREATE TABLE `document_archive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `version_ref_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_archive`
--

INSERT INTO `document_archive` (`id`, `program_id`, `document_type_id`, `name`, `year`, `remarks`, `version`, `version_ref_id`, `status`, `user_id`, `approved_user_id`, `approved_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Meeting with programe person', '2019', NULL, 1, NULL, 'A', 2, NULL, NULL, '2019-12-17 12:49:41', '2019-12-17 12:49:41'),
(2, 3, 5, 'HNPP M&E Framework', '2018', NULL, 1, NULL, 'A', 2, NULL, NULL, '2019-12-18 12:31:47', '2019-12-18 12:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `document_archive_files`
--

CREATE TABLE `document_archive_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_archive_id` bigint(20) UNSIGNED NOT NULL,
  `store_by` bigint(20) UNSIGNED NOT NULL,
  `update_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_archive_files`
--

INSERT INTO `document_archive_files` (`id`, `document_archive_id`, `store_by`, `update_by`, `status`, `remarks`, `name`, `path`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 'A', NULL, 'Study archive.png', 'uploads/archive/document/17-12-19/124939PM_22617198511576586979.png', 1, '2019-12-17 12:49:41', '2019-12-17 12:49:41'),
(2, 2, 2, NULL, 'A', NULL, 'HNPP M&E Framework.doc', 'uploads/archive/document/18-12-19/123145PM_53155100911576672305.doc', 1, '2019-12-18 12:31:47', '2019-12-18 12:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `name`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Presentation', 'PPT', 2, 'A', '2019-12-17 12:42:03', '2020-06-28 06:56:44'),
(4, 'Report', 'Report', 2, 'A', '2019-12-17 12:42:30', '2019-12-17 12:42:30'),
(5, 'M&E Framework', 'M&E Framework', 2, 'A', '2019-12-18 12:31:00', '2019-12-18 12:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DFID', 'Department for International Development, United Kingdom', 2, 'A', '2020-06-28 06:52:35', '2020-06-28 06:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `indicator_outcomes`
--

CREATE TABLE `indicator_outcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicator_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicator_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outcome_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outcome_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indicator_outcomes`
--

INSERT INTO `indicator_outcomes` (`id`, `indicator_no`, `indicator_description`, `outcome_no`, `outcome_description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '3434324', 'Indicator Details 1', '5654545', 'Outcome Details 1', 2, 'A', '2020-02-01 18:45:41', '2020-02-01 18:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_owner`
--

CREATE TABLE `indicator_owner` (
  `id` int(255) NOT NULL,
  `indicator_id` int(255) NOT NULL,
  `owner_id` longtext NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `indicator_owner`
--

INSERT INTO `indicator_owner` (`id`, `indicator_id`, `owner_id`, `value`) VALUES
(1, 7, 'a:1:{i:0;s:1:\"3\";}', 'a:5:{i:0;N;i:1;N;i:2;s:4:\"100%\";i:3;N;i:4;N;}'),
(2, 8, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:4:\"100%\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(3, 9, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"1\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(4, 10, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"1\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(5, 11, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"1\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(6, 12, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"1\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(7, 13, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"1\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(8, 14, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:5:\"12345\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(9, 15, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"1\";i:2;N;i:3;N;i:4;N;}'),
(10, 16, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"1\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(11, 17, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:4:\"dfgh\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(12, 18, 's:1:\"2\";', 'N;'),
(13, 19, 's:1:\"2\";', 'N;'),
(14, 20, 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}', 'a:5:{i:0;s:1:\"2\";i:1;s:1:\"2\";i:2;N;i:3;N;i:4;N;}'),
(15, 21, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"3\";i:2;N;i:3;N;i:4;N;}'),
(16, 22, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"2\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(17, 23, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(18, 24, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(19, 25, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(20, 26, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(21, 27, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(22, 28, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(23, 29, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"4\";i:2;N;i:3;N;i:4;N;}'),
(24, 30, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"4\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(25, 31, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"4\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(26, 32, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"3\";i:2;N;i:3;N;i:4;N;}'),
(27, 33, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"3\";i:2;N;i:3;N;i:4;N;}'),
(28, 34, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:3:\"234\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(29, 35, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:3:\"234\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(30, 36, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:3:\"234\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(31, 37, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"1\";i:2;N;i:3;N;i:4;N;}'),
(32, 38, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"2\";i:2;N;i:3;N;i:4;N;}'),
(33, 39, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"2\";i:2;N;i:3;N;i:4;N;}'),
(34, 40, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:4:\"100%\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(35, 41, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:4:\"100%\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(36, 42, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"1\";i:2;N;i:3;N;i:4;N;}'),
(37, 43, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:2:\"34\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(38, 44, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:2:\"34\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(39, 45, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:2:\"34\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(40, 46, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:2:\"34\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(41, 47, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(42, 48, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"4\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(43, 49, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"4\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(44, 50, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(45, 51, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(46, 52, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(47, 53, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(48, 54, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(49, 55, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(50, 56, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"2\";i:2;N;i:3;N;i:4;N;}'),
(51, 57, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"2\";i:2;N;i:3;N;i:4;N;}'),
(52, 58, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"3\";i:2;N;i:3;N;i:4;N;}'),
(53, 59, 'a:1:{i:0;s:1:\"2\";}', 'a:5:{i:0;N;i:1;s:1:\"3\";i:2;N;i:3;N;i:4;N;}'),
(54, 60, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(55, 61, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(56, 62, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}'),
(57, 63, 'a:1:{i:0;s:1:\"1\";}', 'a:5:{i:0;s:1:\"3\";i:1;N;i:2;N;i:3;N;i:4;N;}');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration`
--

CREATE TABLE `indicator_registration` (
  `definition` varchar(255) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `pillar_id` varchar(191) NOT NULL,
  `indicator_type` varchar(191) NOT NULL,
  `indicator_number` varchar(191) DEFAULT NULL,
  `indicator_statement` longtext DEFAULT NULL,
  `indicator_unit` varchar(200) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `assumption` longtext DEFAULT NULL,
  `relevant_goal` int(11) DEFAULT NULL,
  `relevant_indicator` int(11) DEFAULT NULL,
  `relevant_indicator_target` int(11) DEFAULT NULL,
  `chain_output` int(11) DEFAULT NULL,
  `chain_outcome` int(11) DEFAULT NULL,
  `chain_impact` int(11) DEFAULT NULL,
  `plan_number_type` varchar(200) DEFAULT 'NUMBER',
  `baseline_year` varchar(200) DEFAULT NULL,
  `baseline_result` varchar(200) DEFAULT NULL,
  `baseline_source` text DEFAULT NULL,
  `baseline_methodology` text DEFAULT NULL,
  `contribution_program` varchar(200) DEFAULT NULL,
  `framework` varchar(100) DEFAULT 'N',
  `framework_file_type` varchar(200) DEFAULT NULL,
  `me` varchar(100) DEFAULT 'N',
  `me_file_type` varchar(200) DEFAULT NULL,
  `methodology_note` varchar(100) DEFAULT 'N',
  `methodology_note_file_type` varchar(200) DEFAULT NULL,
  `smart_guide` varchar(100) DEFAULT 'N',
  `smart_guide_file_type` varchar(200) DEFAULT NULL,
  `sdg_relevance` varchar(100) DEFAULT 'N',
  `sdg_relevance_file_type` varchar(200) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indicator_registration`
--

INSERT INTO `indicator_registration` (`definition`, `id`, `pillar_id`, `indicator_type`, `indicator_number`, `indicator_statement`, `indicator_unit`, `owner`, `assumption`, `relevant_goal`, `relevant_indicator`, `relevant_indicator_target`, `chain_output`, `chain_outcome`, `chain_impact`, `plan_number_type`, `baseline_year`, `baseline_result`, `baseline_source`, `baseline_methodology`, `contribution_program`, `framework`, `framework_file_type`, `me`, `me_file_type`, `methodology_note`, `methodology_note_file_type`, `smart_guide`, `smart_guide_file_type`, `sdg_relevance`, `sdg_relevance_file_type`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(NULL, 1, '2', 'IMPACT', '12', 'First Indicator Statement', NULL, 1, 'Assumption', 3, 6, 6, 12, 10, 8, 'PERCENTAGE', '2016', 'Result', 'Source', 'Methodology', '[\"2\"]', 'Y', '[\"PDF\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
('Not set', 2, '3', 'IMPACT', 'Impact Indicator 1.1', 'Reduce extreme poverty headcount ratio to 8.9%, in line with SDG1 goal for 2030 and Government of Bangladesh’s Seventh five-year plan', '% of population living below extreme poverty line', 1, 'By addressing poverty, illiteracy, poor health status, and income insecurity, we will be able to unleash human potential, expand human freedom, and ...', 2, 6, 3, 36, 28, 25, 'PERCENTAGE', '2016', '12.9%', '7th 5 Year Plan, Page. 7, Table 1.4,Extreme Poor (Head Count with Lower Poverty Line (%)', 'Secondary Analysis only.  - Milestones and achievements will be updated based on availability of data from official sources', 'null', 'Y', '[\"DOC\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-06-28 10:36:58', '2020-06-28 10:36:58'),
('Not set', 3, '3', 'OUTCOME', 'Outcome Indicator 1.1', 'Number (and %) of enrolled households graduating from extreme poverty on the basis of specific graduation criteria between 2016 and 2020.', 'Number if household', 1, 'Text too long...', 2, 6, 3, 36, 28, 25, 'NUMBER', '2016', '0', 'sds', 'sdff', '[\"10\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
('Not set', 4, '3', 'OUTPUT', 'Output Indicator 1.1', '# of people provided with sustainable access to limited drinking water from improved source.', 'Number of people', 1, NULL, 2, 6, 3, 36, NULL, 25, 'NUMBER', '2016', '0', 'Program MIS', 'Monthly Reporting', '[\"17\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
('saff', 5, '3', 'OUTPUT', '1.2', 'adfdfds', 'fdff', 1, 'afafa', 3, 7, 4, 37, 30, 25, 'PERCENTAGE', '2020', '0', 'afaa', 'afasf', '[\"16\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
('fhfhfhfhfhfh', 6, '5', 'IMPACT', '1', 'fhfhff', 'number', 2, 'ffdfdfdfd', 1, 1, 1, 47, 46, 44, 'PERCENTAGE', '2015', '444', 'hfhffh', 'jgjgjgj', '[\"2\",\"25\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
('asdfa', 36, '16', 'IMPACT', '213', '345', '23', NULL, 'asdf', 8, 16, 11, NULL, NULL, NULL, 'NUMBER', '2015', '234', 'adfa', 'asdf', '[\"2\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-10-25 02:07:07', '2020-10-25 02:07:07'),
('2', 39, '16', 'IMPACT', '222', '22', '2', NULL, NULL, 9, 18, 13, NULL, NULL, NULL, 'NUMBER', '2020', '2', '22', '22', '[\"15\",\"25\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
('Reduce extreme poverty headcount ratio to 8.9%, in line with SDG1 goal for 2030 and Government of Bangladesh’s Seventh five-year plan', 41, '16', 'IMPACT', '1.1', 'Reduce extreme poverty headcount ratio to 8.9%, in line with SDG1 goal for 2030 and Government of Bangladesh’s Seventh five-year plan', '%', NULL, 'Reduce extreme poverty headcount ratio to 8.9%, in line with SDG1 goal for 2030 and Government of Bangladesh’s Seventh five-year plan', 8, 16, 11, NULL, NULL, NULL, 'PERCENTAGE', '2015', '8.9%', 'Yearly Baseline', 'Survey', '[\"2\",\"15\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-18 09:07:01', '2020-11-18 09:07:01'),
('1', 42, '16', 'OUTPUT', '1', '1', '1', NULL, '1', 12, 24, 19, NULL, NULL, NULL, 'NUMBER', '2020', '1', '1', '11', '[\"24\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
('34', 46, '16', 'IMPACT', '34', '34', '34', NULL, NULL, 9, 18, 13, NULL, NULL, NULL, 'NUMBER', '2020', '34', '34', '34', '[\"2\",\"15\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
('asdf', 47, '16', 'IMPACT', '234', '134', '124', NULL, NULL, 22, 45, 41, NULL, NULL, NULL, 'NUMBER', '2019', '3333', 'adsf', 'adsf', '[\"2\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
('rgr', 54, '16', 'IMPACT', '45345', '345345', '34534', NULL, 'adf', 11, 22, 17, NULL, NULL, NULL, 'NUMBER', '2019', '44', 'adf', 'adsf', '[\"2\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
('asdf', 55, '16', 'IMPACT', '345345', '3453453', '34534534', NULL, 'adf', 11, 22, 17, NULL, NULL, NULL, 'NUMBER', '2016', '56456', 'asdf', 'asdf', '[\"2\",\"15\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
('asdf', 59, '16', 'IMPACT', 'ASDF', 'ADSF', 'adsgf', NULL, NULL, 9, 19, 14, NULL, NULL, NULL, 'NUMBER', '2015', '33', 'adf', 'adsf', '[\"15\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-12-03 05:02:17', '2020-12-03 05:02:17'),
('adsf', 63, '16', 'IMPACT', 'asdf', 'adsf', 'adsf', NULL, NULL, 20, 43, 39, NULL, NULL, NULL, 'NUMBER', '2020', '344', 'dded', 'adfs', '[\"2\",\"15\",\"25\"]', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 'N', 'null', 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration_files`
--

CREATE TABLE `indicator_registration_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicator_registration_id` bigint(20) UNSIGNED NOT NULL,
  `store_by` bigint(20) UNSIGNED NOT NULL,
  `file_section` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `path` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indicator_registration_files`
--

INSERT INTO `indicator_registration_files` (`id`, `indicator_registration_id`, `store_by`, `file_section`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'DETAILS_FRAMEWORK_FILE', 'feedback on archive site.pdf', 'uploads/indicator_registration/04-03-20/054433PM_95543740761583343873.pdf', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(2, 2, 2, 'DETAILS_FRAMEWORK_FILE', '1st cycle\'19 (MIS data validation schedule 27.01.2019).doc', 'uploads/indicator_registration/28-06-20/103540AM_79759767211593340540.doc', '2020-06-28 10:36:58', '2020-06-28 10:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration_indicators`
--

CREATE TABLE `indicator_registration_indicators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicator_registration_id` int(191) DEFAULT NULL,
  `indicator_id` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indicator_registration_indicators`
--

INSERT INTO `indicator_registration_indicators` (`id`, `indicator_registration_id`, `indicator_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(2, 1, 8, '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(3, 2, 25, '2020-06-28 10:36:58', '2020-06-28 10:36:58'),
(4, 3, 28, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(5, 4, 36, '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(6, 5, 37, '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(7, 6, 44, '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(8, 7, 76, '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(9, 7, 77, '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(10, 8, 76, '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(11, 9, 76, '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(12, 10, 76, '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(13, 11, 76, '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(14, 12, 76, '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(15, 13, 76, '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(16, 14, 76, '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(17, 15, 77, '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(18, 16, 86, '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(19, 17, 76, '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(20, 18, 76, '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(21, 19, 76, '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(22, 20, 76, '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(23, 21, 86, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(24, 22, 76, '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(25, 23, 77, '2020-10-10 22:55:04', '2020-10-10 22:55:04'),
(26, 24, 77, '2020-10-10 22:59:11', '2020-10-10 22:59:11'),
(27, 25, 77, '2020-10-10 23:00:08', '2020-10-10 23:00:08'),
(28, 26, 77, '2020-10-10 23:02:25', '2020-10-10 23:02:25'),
(29, 27, 77, '2020-10-10 23:05:02', '2020-10-10 23:05:02'),
(30, 28, 77, '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(31, 29, 77, '2020-10-10 23:06:59', '2020-10-10 23:06:59'),
(32, 30, 77, '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(33, 31, 77, '2020-10-10 23:54:46', '2020-10-10 23:54:46'),
(34, 32, 86, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(35, 33, 86, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(36, 34, 76, '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(37, 35, 76, '2020-10-25 02:06:53', '2020-10-25 02:06:53'),
(38, 36, 76, '2020-10-25 02:07:07', '2020-10-25 02:07:07'),
(39, 37, 86, '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(40, 38, 76, '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(41, 39, 76, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(42, 40, 76, '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(43, 41, 76, '2020-11-18 09:07:01', '2020-11-18 09:07:01'),
(44, 42, 86, '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(45, 43, 76, '2020-11-18 09:15:00', '2020-11-18 09:15:00'),
(46, 44, 76, '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(47, 45, 76, '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(48, 46, 76, '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(49, 47, 77, '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(50, 48, 77, '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(51, 49, 77, '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(52, 50, 77, '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(53, 51, 77, '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(54, 52, 77, '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(55, 53, 77, '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(56, 54, 77, '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(57, 55, 77, '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(58, 56, 77, '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(59, 57, 77, '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(60, 58, 77, '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(61, 59, 77, '2020-12-03 05:02:17', '2020-12-03 05:02:17'),
(62, 60, 77, '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(63, 61, 77, '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(64, 62, 77, '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(65, 63, 77, '2020-12-03 05:11:12', '2020-12-03 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration_milestone`
--

CREATE TABLE `indicator_registration_milestone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicator_reg_programs_id` int(11) DEFAULT NULL,
  `milestone_year` int(191) DEFAULT NULL,
  `input_type` varchar(100) DEFAULT 'FIXED',
  `milestone_planned` varchar(191) DEFAULT NULL,
  `milestone_female_disaggregation` varchar(191) DEFAULT '0',
  `milestone_disability_disaggregation` varchar(191) DEFAULT '0',
  `milestone_hard_disability` varchar(191) DEFAULT '0',
  `milestone_source` varchar(191) DEFAULT NULL,
  `milestone_rationale` varchar(191) DEFAULT NULL,
  `milestone_last_update` varchar(191) DEFAULT NULL,
  `milestone_revision_last_approved` varchar(191) DEFAULT NULL,
  `milestone_remarks` varchar(191) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indicator_registration_milestone`
--

INSERT INTO `indicator_registration_milestone` (`id`, `indicator_reg_programs_id`, `milestone_year`, `input_type`, `milestone_planned`, `milestone_female_disaggregation`, `milestone_disability_disaggregation`, `milestone_hard_disability`, `milestone_source`, `milestone_rationale`, `milestone_last_update`, `milestone_revision_last_approved`, `milestone_remarks`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2012, 'FIXED', '1', '2', '3', '4', '5', '6', NULL, '1', '3', 2, 'A', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(2, 1, 2013, 'FIXED', '1', '2', '3', '4', '5', '6', NULL, '1', '3', 2, 'A', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(3, 1, 2014, 'FIXED', '1', '2', '3', '4', '5', '6', NULL, '1', '3', 2, 'A', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(4, 1, 2015, 'FIXED', '1', '2', '3', '4', '5', '6', NULL, '1', '3', 2, 'A', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(5, 1, 2016, 'FIXED', '1', '2', '3', '4', '5', '6', NULL, '1', '3', 2, 'A', '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(6, 3, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(7, 3, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(8, 3, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(9, 3, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(10, 3, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(11, 4, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(12, 4, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(13, 4, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(14, 4, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(15, 4, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(16, 5, 2016, 'FIXED', '78', '67', '9', '8', '1', '0', '09/07/2020', '8', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(17, 5, 2017, 'FIXED', '78', '67', '9', '8', '1', '0', '09/07/2020', '8', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(18, 5, 2018, 'FIXED', '78', '67', '9', '8', '1', '0', '09/07/2020', '8', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(19, 5, 2019, 'FIXED', '78', '67', '9', '8', '1', '0', '09/07/2020', '8', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(20, 5, 2020, 'FIXED', '78', '67', '9', '8', '1', '0', '09/07/2020', '8', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(21, 6, 2016, 'FIXED', '89', '9', '7', '5', '78', '9', '09/08/2020', '78', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(22, 6, 2017, 'FIXED', '89', '9', '7', '5', '78', '9', '09/08/2020', '78', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(23, 6, 2018, 'FIXED', '89', '9', '7', '5', '78', '9', '09/08/2020', '78', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(24, 6, 2019, 'FIXED', '89', '9', '7', '5', '78', '9', '09/08/2020', '78', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(25, 6, 2020, 'FIXED', '89', '9', '7', '5', '78', '9', '09/08/2020', '78', NULL, 2, 'A', '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(26, 7, 2016, 'FIXED', '50000', '2000', '500', '200', 'Baseline', NULL, '09/01/2020', NULL, NULL, 2, 'A', '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(27, 7, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(28, 7, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(29, 7, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(30, 7, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(31, 8, 2016, 'FIXED', '500000', '300000', '100000', '50000', 'Survey', 'Yes', '09/01/2020', 'August', NULL, 2, 'A', '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(32, 8, 2017, 'FIXED', '800000', '500000', '200000', '50000', 'Survey', 'Yes', '09/01/2020', 'August', NULL, 2, 'A', '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(33, 8, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(34, 8, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(35, 8, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(36, 9, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(37, 9, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(38, 9, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(39, 9, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(40, 9, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(41, 10, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(42, 10, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(43, 10, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(44, 10, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(45, 10, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(46, 11, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(47, 11, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(48, 11, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(49, 11, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(50, 11, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(51, 12, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(52, 12, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(53, 12, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(54, 12, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(55, 12, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(56, 13, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(57, 13, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(58, 13, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(59, 13, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(60, 13, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(61, 14, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(62, 14, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(63, 14, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(64, 14, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(65, 14, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(66, 15, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(67, 15, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(68, 15, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(69, 15, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(70, 15, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(71, 16, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(72, 16, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(73, 16, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(74, 16, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(75, 16, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(76, 17, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(77, 17, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(78, 17, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(79, 17, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(80, 17, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(81, 18, 2020, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(82, 18, 2021, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(83, 18, 2022, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(84, 18, 2023, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(85, 18, 2024, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(86, 19, 2020, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(87, 19, 2021, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(88, 19, 2022, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(89, 19, 2023, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(90, 19, 2024, 'FIXED', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(91, 20, 2017, 'FIXED', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(92, 20, 2018, 'FIXED', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(93, 20, 2019, 'FIXED', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(94, 20, 2020, 'FIXED', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(95, 20, 2021, 'FIXED', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(96, 21, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(97, 21, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(98, 21, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(99, 21, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(100, 21, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(101, 22, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(102, 22, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(103, 22, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(104, 22, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(105, 22, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(106, 23, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(107, 23, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(108, 23, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(109, 23, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(110, 23, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(111, 24, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(112, 24, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(113, 24, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(114, 24, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(115, 24, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(116, 25, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(117, 25, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(118, 25, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(119, 25, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(120, 25, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(121, 26, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(122, 26, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(123, 26, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(124, 26, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(125, 26, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(126, 27, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(127, 27, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(128, 27, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(129, 27, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(130, 27, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(131, 28, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(132, 28, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(133, 28, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(134, 28, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(135, 28, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(136, 29, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(137, 29, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(138, 29, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(139, 29, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(140, 29, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(141, 30, 2016, 'FIXED', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(142, 30, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(143, 30, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(144, 30, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(145, 30, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(146, 35, 2016, 'FIXED', '3', '3', '3', '3', '3', NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(147, 35, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(148, 35, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(149, 35, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(150, 35, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(151, 37, 2016, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(152, 37, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(153, 37, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(154, 37, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(155, 37, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(156, 39, 2016, 'FIXED', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(157, 39, 2017, 'FIXED', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(158, 39, 2018, 'FIXED', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(159, 39, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(160, 39, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(161, 40, 2016, 'FIXED', '4', '4', '4', '4', '4', NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(162, 40, 2017, 'FIXED', '4', '4', '4', '4', NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(163, 40, 2018, 'FIXED', '4', '4', '4', '4', NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(164, 40, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(165, 40, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(166, 43, 2016, 'FIXED', '44', '4', '4', '4', NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(167, 43, 2017, 'FIXED', '4', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(168, 43, 2018, 'FIXED', '4', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(169, 43, 2019, 'FIXED', '4', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(170, 43, 2020, 'FIXED', '4', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(171, 46, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(172, 46, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(173, 46, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(174, 46, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(175, 46, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(176, 47, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(177, 47, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(178, 47, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(179, 47, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(180, 47, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(181, 49, 2016, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(182, 49, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(183, 49, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(184, 49, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(185, 49, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(186, 51, 2011, 'FIXED', '4', '4', '4', '4', '4', '4', '11/18/2020', '4', NULL, 2, 'A', '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(187, 51, 2012, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(188, 51, 2013, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(189, 51, 2014, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(190, 51, 2015, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(191, 54, -1, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(192, 54, -2, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(193, 54, -3, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(194, 54, -4, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(195, 54, -5, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(196, 56, 2021, 'FIXED', '34', '34', '34', '34', '34', '34', '11/18/2020', '34', NULL, 2, 'A', '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(197, 56, 2022, 'FIXED', '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(198, 56, 2023, 'FIXED', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(199, 56, 2024, 'FIXED', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(200, 56, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(201, 57, -1, 'FIXED', '34', '34', '34', '34', '34', '34', '11/18/2020', '34', NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(202, 57, -2, 'FIXED', '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(203, 57, -3, 'FIXED', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(204, 57, -4, 'FIXED', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(205, 57, -5, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(206, 58, 2016, 'FIXED', '3', '3', '3', '3', '3', '3', '11/18/2020', '3', '3', 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(207, 58, 2017, 'FIXED', '3', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(208, 58, 2018, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(209, 58, 2019, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(210, 58, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(211, 59, 2021, 'FIXED', '34', '34', '34', '34', '34', '34', '11/18/2020', '34', NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(212, 59, 2022, 'FIXED', '34', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(213, 59, 2023, 'FIXED', '34', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(214, 59, 2024, 'FIXED', '34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(215, 59, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(216, 60, 4, 'FIXED', '3', '3', '3', '3', '3', '3', '11/18/2020', '3', '3', 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(217, 60, 3, 'FIXED', '3', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(218, 60, 2, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(219, 60, 1, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(220, 60, 0, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(221, 61, 2020, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(222, 61, 2021, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(223, 61, 2022, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(224, 61, 2023, 'FIXED', '3', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(225, 61, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(226, 62, 2018, 'FIXED', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(227, 62, 2019, 'FIXED', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(228, 62, 2020, 'FIXED', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(229, 62, 2021, 'FIXED', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(230, 62, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(231, 63, 2, 'FIXED', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(232, 63, 1, 'FIXED', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(233, 63, 0, 'FIXED', '3', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(234, 63, -1, 'FIXED', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(235, 63, -2, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(236, 64, 2020, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(237, 64, 2021, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(238, 64, 2022, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(239, 64, 2023, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(240, 64, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(241, 65, 0, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(242, 65, -1, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(243, 65, -2, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(244, 65, -3, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(245, 65, -4, 'FIXED', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(246, 66, 2020, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(247, 66, 2021, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(248, 66, 2022, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(249, 66, 2023, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(250, 66, 2024, 'FIXED', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(251, 67, 0, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(252, 67, -1, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(253, 67, -2, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(254, 67, -3, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(255, 67, -4, 'FIXED', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(256, 68, 2020, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(257, 68, 2021, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(258, 68, 2022, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(259, 68, 2023, 'FIXED', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(260, 68, 2024, 'FIXED', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(261, 69, 2017, 'FIXED', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(262, 69, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(263, 69, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(264, 69, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(265, 69, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(266, 70, 2017, 'FIXED', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(267, 70, 2018, 'FIXED', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(268, 70, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(269, 70, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(270, 70, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(271, 71, 2018, 'FIXED', '333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(272, 71, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(273, 71, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(274, 71, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(275, 71, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(276, 72, 2, 'FIXED', '333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(277, 72, 1, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(278, 72, 0, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(279, 72, -1, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(280, 72, -2, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(281, 73, 2018, 'FIXED', '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(282, 73, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(283, 73, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(284, 73, 2021, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(285, 73, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(286, 74, 2016, 'FIXED', '666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(287, 74, 2017, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(288, 74, 2018, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(289, 74, 2019, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(290, 74, 2020, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(291, 76, 2021, 'FIXED', '333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(292, 76, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(293, 76, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(294, 76, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(295, 76, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(296, 77, 2021, 'FIXED', '333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(297, 77, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(298, 77, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(299, 77, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(300, 77, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(301, 78, 2021, 'FIXED', '888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(302, 78, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(303, 78, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(304, 78, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(305, 78, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(306, 79, 2021, 'FIXED', '3336', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(307, 79, 2022, 'FIXED', '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(308, 79, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(309, 79, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(310, 79, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(311, 80, 2021, 'FIXED', '888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(312, 80, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(313, 80, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(314, 80, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(315, 80, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(316, 81, 2021, 'FIXED', '3336', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(317, 81, 2022, 'FIXED', '66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(318, 81, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(319, 81, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(320, 81, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(321, 82, 2021, 'FIXED', '888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(322, 82, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(323, 82, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(324, 82, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(325, 82, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(326, 83, 2021, 'FIXED', '77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(327, 83, 2022, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(328, 83, 2023, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(329, 83, 2024, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(330, 83, 2025, 'FIXED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'A', '2020-12-03 05:11:12', '2020-12-03 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration_program`
--

CREATE TABLE `indicator_registration_program` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` int(191) DEFAULT NULL,
  `indicator_registration_id` int(191) DEFAULT NULL,
  `plan_total` varchar(191) DEFAULT NULL,
  `plan_formula` varchar(191) DEFAULT NULL,
  `female_disaggregation_total` varchar(191) DEFAULT NULL,
  `female_disaggregation_formula` varchar(191) DEFAULT NULL,
  `disability_disaggregation_total` varchar(191) DEFAULT NULL,
  `disability_disaggregation_formula` varchar(191) DEFAULT NULL,
  `milestone_disagg_reach_heard_total` varchar(191) DEFAULT NULL,
  `milestone_disagg_reach_heard_formula` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indicator_registration_program`
--

INSERT INTO `indicator_registration_program` (`id`, `program_id`, `indicator_registration_id`, `plan_total`, `plan_formula`, `female_disaggregation_total`, `female_disaggregation_formula`, `disability_disaggregation_total`, `disability_disaggregation_formula`, `milestone_disagg_reach_heard_total`, `milestone_disagg_reach_heard_formula`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1', 'CUMULATIVE', '2', NULL, '3', NULL, '4', NULL, '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(2, 10, 3, '1000', 'CUMULATIVE', '50', NULL, '2', NULL, '20', NULL, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(3, 17, 4, '100', 'CUMULATIVE', '51', NULL, '3', NULL, '40', NULL, '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(4, 16, 5, '100', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(5, 2, 6, '78', 'SUMMATION', '67', NULL, '9', NULL, '8', NULL, '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(6, 25, 6, '145', 'SUMMATION', '17', NULL, '12', NULL, '13', NULL, '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(7, 2, 7, '50000', 'SUMMATION', '2000', NULL, '500', NULL, '200', NULL, '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(8, 2, 8, '1300000', 'SUMMATION', '800000', NULL, '300000', NULL, '100000', NULL, '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(9, 16, 9, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(10, 16, 10, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(11, 16, 11, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(12, 16, 12, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(13, 16, 13, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(14, 15, 14, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(15, 15, 15, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(16, 15, 16, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(17, 2, 17, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(18, 2, 18, '5', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-10-04 22:55:59', '2020-10-04 22:55:59'),
(19, 2, 19, '5', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-10-04 22:58:05', '2020-10-04 22:58:05'),
(20, 15, 20, '10', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(21, 2, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(22, 15, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(23, 25, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(24, 16, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(25, 13, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(26, 8, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(27, 22, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(28, 3, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(29, 27, 21, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(30, 2, 22, '2', 'SUMMATION', '2', NULL, '2', NULL, '2', NULL, '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(31, 2, 23, '3', 'SUMMATION', '3', NULL, '3', NULL, '3', NULL, '2020-10-10 22:55:04', '2020-10-10 22:55:04'),
(32, 2, 24, '3', 'SUMMATION', '3', NULL, '3', NULL, '3', NULL, '2020-10-10 22:59:11', '2020-10-10 22:59:11'),
(33, 2, 26, '3', 'SUMMATION', '3', NULL, '3', NULL, '3', NULL, '2020-10-10 23:02:25', '2020-10-10 23:02:25'),
(34, 2, 27, '3', 'SUMMATION', '3', NULL, '3', NULL, '3', NULL, '2020-10-10 23:05:02', '2020-10-10 23:05:02'),
(35, 2, 28, '3', 'SUMMATION', '3', NULL, '3', NULL, '3', NULL, '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(36, 2, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-10 23:06:59', '2020-10-10 23:06:59'),
(37, 2, 30, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(38, 2, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-10 23:54:46', '2020-10-10 23:54:46'),
(39, 2, 32, '6', 'SUMMATION', '6', NULL, '6', NULL, '6', NULL, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(40, 15, 32, '12', 'SUMMATION', '12', NULL, '12', NULL, '12', NULL, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(41, 2, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(42, 15, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(43, 2, 34, '60', 'SUMMATION', '20', NULL, '4', NULL, '4', NULL, '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(44, 2, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-25 02:06:53', '2020-10-25 02:06:53'),
(45, 2, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-25 02:07:07', '2020-10-25 02:07:07'),
(46, 24, 37, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(47, 15, 38, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(48, 15, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(49, 25, 39, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(50, 2, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(51, 15, 40, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(52, 2, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:07:01', '2020-11-18 09:07:01'),
(53, 15, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:07:01', '2020-11-18 09:07:01'),
(54, 24, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(55, 2, 43, '136', 'SUMMATION', '102', NULL, '68', NULL, '34', NULL, '2020-11-18 09:15:00', '2020-11-18 09:15:00'),
(56, 2, 44, '136', 'SUMMATION', '102', NULL, '68', NULL, '34', NULL, '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(57, 2, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(58, 15, 45, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(59, 2, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(60, 15, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(61, 2, 47, '12', 'SUMMATION', '5', NULL, '0', NULL, '0', NULL, '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(62, 15, 48, '2.8', 'AVERAGE', '3', NULL, '0', NULL, '0', NULL, '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(63, 15, 49, NULL, 'SUMMATION', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(64, 2, 50, '12', 'SUMMATION', '9', NULL, '0', NULL, '0', NULL, '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(65, 2, 51, '16', 'SUMMATION', '9', NULL, '0', NULL, '0', NULL, '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(66, 2, 52, '4', 'CUMULATIVE', '3', NULL, '0', NULL, '0', NULL, '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(67, 2, 53, '3.2', 'AVERAGE', '1.8', NULL, '0', NULL, '0', NULL, '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(68, 2, 54, '16', 'SUMMATION', '9', NULL, '0', NULL, '0', NULL, '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(69, 2, 55, '3', 'SUMMATION', '3', NULL, '0', NULL, '0', NULL, '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(70, 15, 55, '8', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(71, 2, 56, '333', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(72, 2, 57, '333', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(73, 15, 57, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(74, 15, 58, '666', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(75, 15, 59, '666', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 05:02:17', '2020-12-03 05:02:17'),
(76, 2, 60, '333', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(77, 2, 61, '333', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(78, 15, 61, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(79, 2, 62, '3402', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(80, 15, 62, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(81, 2, 63, '3402', 'SUMMATION', '0', NULL, '0', NULL, '0', NULL, '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(82, 15, 63, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(83, 25, 63, '00', 'SUMMATION', '00', NULL, '00', NULL, '00', NULL, '2020-12-03 05:11:12', '2020-12-03 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration_program_area`
--

CREATE TABLE `indicator_registration_program_area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicator_reg_programs_id` int(191) DEFAULT NULL,
  `district_id` int(191) DEFAULT NULL,
  `upazila_id` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indicator_registration_program_area`
--

INSERT INTO `indicator_registration_program_area` (`id`, `indicator_reg_programs_id`, `district_id`, `upazila_id`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 105, '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(2, 1, 10, 91, '2020-03-04 17:44:37', '2020-03-04 17:44:37'),
(3, 2, 3, 24, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(4, 2, 3, 25, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(5, 2, 3, 27, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(6, 2, 2, 18, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(7, 2, 2, 20, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(8, 2, 2, 23, '2020-06-28 10:59:21', '2020-06-28 10:59:21'),
(9, 3, 13, 116, '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(10, 3, 13, 118, '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(11, 3, 13, 120, '2020-06-28 13:31:25', '2020-06-28 13:31:25'),
(12, 4, 10, 91, '2020-06-28 15:53:42', '2020-06-28 15:53:42'),
(13, 5, 4, 34, '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(14, 6, 13, 117, '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(15, 6, 13, 118, '2020-09-06 23:01:40', '2020-09-06 23:01:40'),
(16, 7, 14, 129, '2020-09-09 14:32:14', '2020-09-09 14:32:14'),
(17, 8, 14, 122, '2020-09-09 17:29:46', '2020-09-09 17:29:46'),
(18, 9, 2, 20, '2020-09-20 16:43:01', '2020-09-20 16:43:01'),
(19, 10, 2, 20, '2020-09-20 16:43:30', '2020-09-20 16:43:30'),
(20, 11, 2, 20, '2020-09-20 16:43:41', '2020-09-20 16:43:41'),
(21, 12, 2, 20, '2020-09-20 16:44:30', '2020-09-20 16:44:30'),
(22, 13, 2, 20, '2020-09-20 16:45:37', '2020-09-20 16:45:37'),
(23, 14, 2, 21, '2020-09-20 16:58:44', '2020-09-20 16:58:44'),
(24, 15, NULL, NULL, '2020-09-20 17:04:49', '2020-09-20 17:04:49'),
(25, 16, NULL, NULL, '2020-09-20 17:38:15', '2020-09-20 17:38:15'),
(26, 17, NULL, NULL, '2020-09-20 17:49:46', '2020-09-20 17:49:46'),
(27, 20, 10, 93, '2020-10-04 23:14:08', '2020-10-04 23:14:08'),
(28, 21, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(29, 22, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(30, 23, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(31, 24, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(32, 25, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(33, 26, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(34, 27, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(35, 28, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(36, 29, NULL, NULL, '2020-10-04 23:22:19', '2020-10-04 23:22:19'),
(37, 30, 16, 144, '2020-10-10 22:50:03', '2020-10-10 22:50:03'),
(38, 35, 2, 20, '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(39, 35, 6, 55, '2020-10-10 23:05:20', '2020-10-10 23:05:20'),
(40, 37, 18, 157, '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(41, 37, 15, 137, '2020-10-10 23:08:12', '2020-10-10 23:08:12'),
(42, 39, 4, 35, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(43, 39, 11, 102, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(44, 39, 14, 126, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(45, 40, 17, 151, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(46, 40, 14, 123, '2020-10-10 23:57:32', '2020-10-10 23:57:32'),
(47, 41, 4, 35, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(48, 41, 11, 102, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(49, 41, 14, 126, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(50, 42, 17, 151, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(51, 42, 14, 123, '2020-10-10 23:57:48', '2020-10-10 23:57:48'),
(52, 43, 1, 1, '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(53, 43, 3, 26, '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(54, 43, 17, 152, '2020-10-25 00:54:13', '2020-10-25 00:54:13'),
(55, 44, 1, 1, '2020-10-25 02:06:53', '2020-10-25 02:06:53'),
(56, 44, 3, 26, '2020-10-25 02:06:53', '2020-10-25 02:06:53'),
(57, 44, 17, 152, '2020-10-25 02:06:53', '2020-10-25 02:06:53'),
(58, 44, 1, 2, '2020-10-25 02:06:53', '2020-10-25 02:06:53'),
(59, 45, 1, 1, '2020-10-25 02:07:07', '2020-10-25 02:07:07'),
(60, 45, 3, 26, '2020-10-25 02:07:07', '2020-10-25 02:07:07'),
(61, 45, 17, 152, '2020-10-25 02:07:07', '2020-10-25 02:07:07'),
(62, 46, 8, 77, '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(63, 46, 15, 138, '2020-10-25 02:08:31', '2020-10-25 02:08:31'),
(64, 47, 6, 53, '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(65, 47, 2, 20, '2020-11-01 04:41:04', '2020-11-01 04:41:04'),
(66, 48, 6, 53, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(67, 48, 2, 20, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(68, 49, 2, 19, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(69, 49, 9, 83, '2020-11-16 03:49:54', '2020-11-16 03:49:54'),
(70, 50, 14, 122, '2020-11-18 09:04:48', '2020-11-18 09:04:48'),
(71, 52, 14, 122, '2020-11-18 09:07:01', '2020-11-18 09:07:01'),
(72, 54, 8, 77, '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(73, 54, 15, 138, '2020-11-18 09:12:25', '2020-11-18 09:12:25'),
(74, 55, 2, 18, '2020-11-18 09:15:00', '2020-11-18 09:15:00'),
(75, 55, 4, 35, '2020-11-18 09:15:00', '2020-11-18 09:15:00'),
(76, 56, 2, 18, '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(77, 56, 4, 35, '2020-11-18 09:15:11', '2020-11-18 09:15:11'),
(78, 57, 2, 18, '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(79, 57, 4, 35, '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(80, 58, 3, 25, '2020-11-18 09:16:12', '2020-11-18 09:16:12'),
(81, 59, 2, 18, '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(82, 59, 4, 35, '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(83, 60, 3, 25, '2020-11-18 09:16:58', '2020-11-18 09:16:58'),
(84, 61, 2, 20, '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(85, 61, 6, 56, '2020-11-25 04:16:40', '2020-11-25 04:16:40'),
(86, 62, 4, 35, '2020-11-25 04:18:57', '2020-11-25 04:18:57'),
(87, 63, 4, 35, '2020-11-25 04:44:23', '2020-11-25 04:44:23'),
(88, 64, 18, 156, '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(89, 64, 15, 135, '2020-11-25 04:51:11', '2020-11-25 04:51:11'),
(90, 65, 18, 156, '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(91, 65, 15, 135, '2020-11-25 04:51:25', '2020-11-25 04:51:25'),
(92, 66, 18, 156, '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(93, 66, 15, 135, '2020-11-25 04:51:34', '2020-11-25 04:51:34'),
(94, 67, 18, 156, '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(95, 67, 15, 135, '2020-11-25 04:51:43', '2020-11-25 04:51:43'),
(96, 68, 18, 156, '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(97, 68, 15, 135, '2020-11-25 04:51:53', '2020-11-25 04:51:53'),
(98, 69, 2, 19, '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(99, 69, 4, 38, '2020-11-25 04:58:43', '2020-11-25 04:58:43'),
(100, 71, 2, 19, '2020-12-03 04:55:21', '2020-12-03 04:55:21'),
(101, 72, 2, 19, '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(102, 73, 3, 26, '2020-12-03 04:55:45', '2020-12-03 04:55:45'),
(103, 74, 2, 19, '2020-12-03 04:59:55', '2020-12-03 04:59:55'),
(104, 75, 2, 19, '2020-12-03 05:02:17', '2020-12-03 05:02:17'),
(105, 76, 17, 151, '2020-12-03 05:04:18', '2020-12-03 05:04:18'),
(106, 77, 17, 151, '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(107, 78, 2, 19, '2020-12-03 05:10:29', '2020-12-03 05:10:29'),
(108, 79, 17, 151, '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(109, 80, 2, 19, '2020-12-03 05:10:49', '2020-12-03 05:10:49'),
(110, 81, 17, 151, '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(111, 82, 2, 19, '2020-12-03 05:11:12', '2020-12-03 05:11:12'),
(112, 83, 17, 151, '2020-12-03 05:11:12', '2020-12-03 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `learning_action_archive`
--

CREATE TABLE `learning_action_archive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'INDIVIDUAL',
  `program_id` bigint(20) UNSIGNED DEFAULT NULL,
  `support_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `version_ref_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_action_archive`
--

INSERT INTO `learning_action_archive` (`id`, `type`, `program_id`, `support_id`, `name`, `year`, `remarks`, `version`, `version_ref_id`, `status`, `user_id`, `approved_user_id`, `approved_at`, `created_at`, `updated_at`) VALUES
(1, 'INDIVIDUAL', 1, NULL, '14_Learning Documentation_SDP', '2018', NULL, 1, NULL, 'A', 2, NULL, NULL, '2019-12-18 12:34:06', '2019-12-18 12:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `learning_action_archive_files`
--

CREATE TABLE `learning_action_archive_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `learning_action_archive_id` bigint(20) UNSIGNED NOT NULL,
  `store_by` bigint(20) UNSIGNED NOT NULL,
  `update_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_action_archive_files`
--

INSERT INTO `learning_action_archive_files` (`id`, `learning_action_archive_id`, `store_by`, `update_by`, `status`, `remarks`, `name`, `path`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 'A', NULL, 'Technology Can Help Close the Gender Gap in Bangladesh.pdf', 'uploads/archive/learning-action/18-12-19/123400PM_75952775631576672440.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06'),
(2, 1, 2, NULL, 'A', NULL, 'Data Collection Methods - Top-Down vs. Bottom-Up.pdf', 'uploads/archive/learning-action/18-12-19/123401PM_94828251641576672441.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06'),
(3, 1, 2, NULL, 'A', NULL, 'Managing Data - How BRAC Uses Salesforce for Continuous Improvement.pdf', 'uploads/archive/learning-action/18-12-19/123401PM_29591034731576672441.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06'),
(4, 1, 2, NULL, 'A', NULL, 'AI for Good - Neural Networks for Nonprofit Program Management.pdf', 'uploads/archive/learning-action/18-12-19/123402PM_33051754181576672442.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06'),
(5, 1, 2, NULL, 'A', NULL, 'Data-Driven Decision-Making - How BRAC Mines Answers from Metrics.pdf', 'uploads/archive/learning-action/18-12-19/123402PM_75222645021576672442.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06'),
(6, 1, 2, NULL, 'A', NULL, 'What Does It Mean to Build a Data-driven Culture.pdf', 'uploads/archive/learning-action/18-12-19/123402PM_93004499251576672442.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06'),
(7, 1, 2, NULL, 'A', NULL, 'Abolombon Learners feedback report_Savar centre.pdf', 'uploads/archive/learning-action/18-12-19/123403PM_34484055611576672443.pdf', 1, '2019-12-18 12:34:06', '2019-12-18 12:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `learning_action_thematics`
--

CREATE TABLE `learning_action_thematics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `learning_action_archive_id` bigint(20) UNSIGNED NOT NULL,
  `thematic_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_action_thematics`
--

INSERT INTO `learning_action_thematics` (`id`, `learning_action_archive_id`, `thematic_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2019_08_19_000000_create_failed_jobs_table', 1),
(55, '2019_09_03_222005_create_tasks_table', 1),
(56, '2019_11_17_170617_create_programs_table', 1),
(57, '2019_11_17_173314_create_thematics_table', 1),
(58, '2019_11_17_173623_create_donors_table', 1),
(59, '2019_11_19_161552_create_support_function_table', 1),
(60, '2019_11_19_161818_create_document_type_table', 1),
(61, '2019_11_19_192048_create_study_archive_table', 1),
(62, '2019_11_20_005405_create_study_archives_thematic_area_table', 1),
(63, '2019_11_20_010048_create_study_archive_files_table', 1),
(64, '2019_11_22_173125_create_document_archive_table', 1),
(65, '2019_11_22_173740_create_document_archive_files_table', 1),
(66, '2019_11_23_080323_create_learning_action_archive_table', 1),
(67, '2019_11_23_080455_create_learning_action_archive_files_table', 1),
(68, '2019_11_23_080634_create_learning_action_archive_thematic_table', 1),
(69, '2020_02_01_145917_create_indicator_outcome_table', 2),
(70, '2020_02_01_154253_create_sdg_goal_table', 2),
(71, '2020_02_01_154319_create_sdg_indicator_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pillars`
--

CREATE TABLE `pillars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pillars`
--

INSERT INTO `pillars` (`id`, `name`, `number`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Development Programme', '1', 2, 'A', '2020-09-08 09:55:32', '2020-09-08 09:55:32'),
(17, 'Development Programme One', '1', 2, 'A', '2020-09-08 09:55:32', '2020-09-08 09:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `pillar_details`
--

CREATE TABLE `pillar_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IMPACT',
  `statement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pillar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pillar_details`
--

INSERT INTO `pillar_details` (`id`, `type`, `statement`, `number`, `user_id`, `pillar_id`, `status`, `created_at`, `updated_at`) VALUES
(77, 'IMPACT', '20 million of the most underserved and disenfranchised women (including girls and the disabled) empowered in Bangladesh (to gain greater access to and control over resources, decisions and actions that affect their lives.', '2', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(79, 'OUTCOME', 'A diversified, and client-centric, risk-reduced package of financial services adopted by 6 million families living in poverty, enhancing financial inclusion and livelihood security.', '2', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(80, 'OUTCOME', 'Children and adolescents graduating with better learning outcome from high-quality BRAC schools between 2016 - 2020.', '3', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(81, 'OUTCOME', 'Climate-change resilient enterprises and livelihoods adopted or strengthened by more than 10% of vulnerable households, leading to improved livelihood and food security, with special support provided to those coping with natural disasters.', '4', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(82, 'OUTCOME', 'People in the targeted communities have access to BRAC\'s comprehensive health services.', '5', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(83, 'OUTCOME', 'Enhanced access to urban critical services for improving standard of living of one million urban poor and participation of women in urban governance and planning is increased.', '6', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(84, 'OUTCOME', 'People, including youth, would demonstrate employable skills of market-value, and 80% of youth  would be employed in decent work, including self-employed work.', '7', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(85, 'OUTCOME', 'Gender Transformative Change interventions of BRAC expanded, leading to reductions in violence against women and children.', '8', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(86, 'OUTPUT', 'Increased provision of quality health, education/skills  CLUSTER: Services', '1', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(87, 'OUTPUT', 'Increased community awareness and promotion of women’s rights and promoting empowerment of women and girls  CLUSTER: Empowerment', '2', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(88, 'OUTPUT', 'Systems in place to support transformation from', '3', 2, 16, 'A', '2020-09-08 09:55:32', '2020-11-19 04:42:14'),
(89, 'IMPACT', '110 million people’s health, literacy, livelihood security, and social justice status enhanced, and contribute to Bangladesh’s progress towards SDG attainment.', '1', 2, 16, 'A', '2020-11-19 04:42:14', '2020-11-19 04:42:14'),
(90, 'OUTCOME', '400,000 households graduated from ultra poverty, based on specific graduation indicators, between 2016 and 2020.', '1', 2, 16, 'A', '2020-11-19 04:42:14', '2020-11-19 04:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PROGRAM',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `type`, `category`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SDP-Skills Development Programme', 'DEVELOPMENT', 'PROGRAM', 'SDP-Skills Development Programme', 2, 'A', '2019-12-17 11:42:44', '2020-02-20 11:56:55'),
(2, 'BEP-Brac Education Program', 'DEVELOPMENT', 'PROGRAM', 'BEP-Brac Education Program', 2, 'A', '2019-12-17 12:31:39', '2020-02-20 11:57:28'),
(3, 'MF-Microfinance', 'DEVELOPMENT', 'PROGRAM', 'MF-Microfinance', 2, 'A', '2019-12-17 12:32:18', '2020-02-20 11:57:15'),
(8, 'HNPP-Health, Nutrition and Population Programme', 'DEVEOPMENT', 'PROGRAM', 'Health, Nutrition and Population Programme', 2, 'A', '2020-02-20 11:58:23', '2020-02-20 11:58:23'),
(9, 'UDP-Urban Development Programme', 'DEVEOPMENT', 'PROGRAM', 'Urban Development Programme', 2, 'A', '2020-02-20 11:59:18', '2020-02-20 11:59:18'),
(10, 'UPG Ultra-poor Graduation Programme', 'DEVELOPMENT', 'PROGRAM', 'Ultra-poor Graduation Programme', 2, 'A', '2020-02-20 11:59:56', '2020-02-20 12:04:17'),
(11, 'CEP-Community Empowerment Programme', 'DEVEOPMENT', 'PROGRAM', 'Community Empowerment Programme', 2, 'A', '2020-02-20 12:01:21', '2020-02-20 12:01:21'),
(12, 'HRLS-Human rights and legal aid services', 'DEVEOPMENT', 'PROGRAM', 'Human rights and legal aid services', 2, 'A', '2020-02-20 12:02:52', '2020-02-20 12:02:52'),
(13, 'GJD-Gender Justice and Diversity', 'DEVEOPMENT', 'PROGRAM', 'Gender Justice and Diversity', 2, 'A', '2020-02-20 12:03:44', '2020-02-20 12:03:44'),
(14, 'Migration-BRAC Migration Program', 'DEVEOPMENT', 'PROGRAM', 'BRAC Migration Program', 2, 'A', '2020-02-20 12:06:51', '2020-02-20 12:06:51'),
(15, 'BHP-BRAC Humanitarian Programme', 'DEVEOPMENT', 'PROGRAM', 'BRAC Humanitarian Programme', 2, 'A', '2020-02-20 12:10:38', '2020-02-20 12:10:38'),
(16, 'CCP-Climate Change Programme', 'DEVEOPMENT', 'PROGRAM', 'CCP-Climate Change Programme', 2, 'A', '2020-02-20 12:12:05', '2020-02-20 12:12:05'),
(17, 'WASH - Water Sanitation and Hygiene Programme', 'DEVEOPMENT', 'PROGRAM', 'BRAC Water Sanitation and Hygiene Programme', 2, 'A', '2020-02-20 12:12:53', '2020-02-20 12:12:53'),
(18, 'TB-Tuberculosis', 'DEVEOPMENT', 'PROGRAM', 'Tuberculosis', 2, 'A', '2020-02-20 12:14:25', '2020-02-20 12:14:25'),
(19, 'Malaria - Malaria Control', 'DEVEOPMENT', 'PROGRAM', 'Malaria Control', 2, 'A', '2020-02-20 12:15:10', '2020-02-20 12:15:10'),
(20, 'Technology', 'OTHERS', 'SUPPORT_FUNCTION', 'Technology', 2, 'A', '2020-02-20 13:28:11', '2020-02-20 13:28:11'),
(21, 'PRL - Programme Development, Resource Mobilisation and Learning', 'OTHERS', 'SUPPORT_FUNCTION', 'Programme Development, Resource Mobilisation and Learning', 2, 'A', '2020-02-20 13:30:42', '2020-02-20 13:30:42'),
(22, 'HR & LD- Human Resource and Learning Division', 'OTHERS', 'SUPPORT_FUNCTION', 'Human Resource and Learning Division', 2, 'A', '2020-02-20 13:31:47', '2020-02-20 13:31:47'),
(23, 'F&A - Finance & Accounts', 'OTHERS', 'SUPPORT_FUNCTION', 'Finance & Accounts', 2, 'A', '2020-02-20 13:33:23', '2020-02-20 13:33:23'),
(24, 'Advocacy for Social Change', 'OTHERS', 'SUPPORT_FUNCTION', 'Advocacy for Social Change', 2, 'A', '2020-02-20 13:35:04', '2020-02-20 13:35:04'),
(25, 'BMD - BRAC Monitoring Department', 'OTHERS', 'SUPPORT_FUNCTION', 'BRAC Monitoring Department', 2, 'A', '2020-02-20 13:37:52', '2020-02-20 13:37:52'),
(26, 'UDP', 'DEVELOPMENT', 'PROGRAM', 'Urban Development Programme', 2, 'A', '2020-06-28 06:15:59', '2020-09-07 13:52:52'),
(27, 'Road Safety Program', 'BRAC', 'SUPPORT_FUNCTION', 'Road Safety Program', 2, 'A', '2020-09-07 16:15:56', '2020-09-07 16:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `result_entry`
--

CREATE TABLE `result_entry` (
  `baseline_year` varchar(100) DEFAULT NULL,
  `indicator_number_id` int(11) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `pillar_id` int(11) NOT NULL,
  `program_id` bigint(20) UNSIGNED DEFAULT NULL,
  `indicator_type` varchar(100) DEFAULT NULL,
  `indicator_statement_id` int(11) DEFAULT NULL,
  `formula` varchar(191) NOT NULL DEFAULT 'PROGRAM',
  `achievement_total` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disagg_female_total` varchar(100) DEFAULT NULL,
  `disagg_disability_total` varchar(100) DEFAULT NULL,
  `disagg_heard_to_reach_total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_entry`
--

INSERT INTO `result_entry` (`baseline_year`, `indicator_number_id`, `id`, `pillar_id`, `program_id`, `indicator_type`, `indicator_statement_id`, `formula`, `achievement_total`, `user_id`, `created_at`, `updated_at`, `disagg_female_total`, `disagg_disability_total`, `disagg_heard_to_reach_total`) VALUES
('2016', 2, 2, 3, NULL, 'IMPACT', 2, 'SUMMATION', '100', 2, '2020-06-28 15:07:02', '2020-06-28 15:07:02', '0', '0', '0'),
('2016', 2, 3, 3, NULL, 'IMPACT', 2, 'SUMMATION', '100', 2, '2020-06-28 15:08:28', '2020-06-28 15:08:28', '0', '0', '0'),
('2016', 3, 4, 3, 10, 'OUTCOME', 3, 'SUMMATION', '100', 2, '2020-06-28 15:16:52', '2020-06-28 15:16:52', '0', '0', '0'),
('2020', 5, 5, 3, 16, 'OUTPUT', 5, 'SUMMATION', '00', 2, '2020-06-28 15:54:53', '2020-06-28 15:54:53', '00', '00', '00'),
('2016', 4, 6, 3, 17, 'OUTPUT', 4, 'SUMMATION', '10', 2, '2020-06-29 07:19:11', '2020-06-29 07:19:11', '6', '1', '3'),
('2015', 8, 7, 16, 2, 'IMPACT', 8, 'SUMMATION', '00', 2, '2020-10-28 22:48:02', '2020-10-28 22:48:02', '00', '00', '00'),
('2020', NULL, 8, 16, 24, 'OUTPUT', NULL, 'SUMMATION', '3', 2, '2020-11-01 04:44:12', '2020-11-25 05:08:16', '3', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `result_entry_details`
--

CREATE TABLE `result_entry_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `milestone_year` varchar(191) DEFAULT NULL,
  `recorded_to_date` varchar(100) DEFAULT NULL,
  `period_type` varchar(191) DEFAULT NULL,
  `achieved` varchar(191) DEFAULT NULL,
  `source` varchar(191) DEFAULT NULL,
  `methodology` varchar(191) DEFAULT NULL,
  `date_of_last_update` varchar(191) DEFAULT NULL,
  `remarks` varchar(191) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `result_entry_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disagg_female` varchar(100) DEFAULT NULL,
  `disagg_disability` varchar(100) DEFAULT NULL,
  `disagg_heard_to_reach` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_entry_details`
--

INSERT INTO `result_entry_details` (`id`, `milestone_year`, `recorded_to_date`, `period_type`, `achieved`, `source`, `methodology`, `date_of_last_update`, `remarks`, `user_id`, `result_entry_id`, `created_at`, `updated_at`, `disagg_female`, `disagg_disability`, `disagg_heard_to_reach`) VALUES
(6, '2017', NULL, 'ANNUAL', '100', NULL, NULL, NULL, NULL, 2, 2, '2020-06-28 15:07:02', '2020-06-28 15:07:02', NULL, NULL, NULL),
(7, '2018', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 2, '2020-06-28 15:07:02', '2020-06-28 15:07:02', NULL, NULL, NULL),
(8, '2019', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 2, '2020-06-28 15:07:02', '2020-06-28 15:07:02', NULL, NULL, NULL),
(9, '2020', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 2, '2020-06-28 15:07:02', '2020-06-28 15:07:02', NULL, NULL, NULL),
(10, '2021', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 2, '2020-06-28 15:07:02', '2020-06-28 15:07:02', NULL, NULL, NULL),
(11, '2017', NULL, 'ANNUAL', '100', NULL, NULL, NULL, NULL, 2, 3, '2020-06-28 15:08:28', '2020-06-28 15:08:28', NULL, NULL, NULL),
(12, '2018', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 3, '2020-06-28 15:08:28', '2020-06-28 15:08:28', NULL, NULL, NULL),
(13, '2019', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 3, '2020-06-28 15:08:28', '2020-06-28 15:08:28', NULL, NULL, NULL),
(14, '2020', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 3, '2020-06-28 15:08:28', '2020-06-28 15:08:28', NULL, NULL, NULL),
(15, '2021', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 3, '2020-06-28 15:08:28', '2020-06-28 15:08:28', NULL, NULL, NULL),
(16, '2017', NULL, 'ANNUAL', '100', NULL, NULL, NULL, NULL, 2, 4, '2020-06-28 15:16:52', '2020-06-28 15:16:52', NULL, NULL, NULL),
(17, '2018', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 4, '2020-06-28 15:16:52', '2020-06-28 15:16:52', NULL, NULL, NULL),
(18, '2019', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 4, '2020-06-28 15:16:52', '2020-06-28 15:16:52', NULL, NULL, NULL),
(19, '2020', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 4, '2020-06-28 15:16:52', '2020-06-28 15:16:52', NULL, NULL, NULL),
(20, '2021', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 4, '2020-06-28 15:16:52', '2020-06-28 15:16:52', NULL, NULL, NULL),
(21, '2021', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 5, '2020-06-28 15:54:53', '2020-06-28 15:54:53', NULL, NULL, NULL),
(22, '2022', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 5, '2020-06-28 15:54:53', '2020-06-28 15:54:53', NULL, NULL, NULL),
(23, '2023', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 5, '2020-06-28 15:54:53', '2020-06-28 15:54:53', NULL, NULL, NULL),
(24, '2024', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 5, '2020-06-28 15:54:53', '2020-06-28 15:54:53', NULL, NULL, NULL),
(25, '2025', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 5, '2020-06-28 15:54:53', '2020-06-28 15:54:53', NULL, NULL, NULL),
(26, '2017', NULL, 'MONTHLY', '10', 'MIS', 'Monthly Reporting', NULL, NULL, 2, 6, '2020-06-29 07:19:11', '2020-06-29 07:19:11', '6', '1', '3'),
(27, '2018', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 6, '2020-06-29 07:19:11', '2020-06-29 07:19:11', NULL, NULL, NULL),
(28, '2019', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 6, '2020-06-29 07:19:11', '2020-06-29 07:19:11', NULL, NULL, NULL),
(29, '2020', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 6, '2020-06-29 07:19:11', '2020-06-29 07:19:11', NULL, NULL, NULL),
(30, '2021', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 6, '2020-06-29 07:19:11', '2020-06-29 07:19:11', NULL, NULL, NULL),
(31, '2016', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 7, '2020-10-28 22:48:02', '2020-10-28 22:48:02', NULL, NULL, NULL),
(32, '2017', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 7, '2020-10-28 22:48:02', '2020-10-28 22:48:02', NULL, NULL, NULL),
(33, '2018', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 7, '2020-10-28 22:48:02', '2020-10-28 22:48:02', NULL, NULL, NULL),
(34, '2019', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 7, '2020-10-28 22:48:02', '2020-10-28 22:48:02', NULL, NULL, NULL),
(35, '2020', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 7, '2020-10-28 22:48:02', '2020-10-28 22:48:02', NULL, NULL, NULL),
(36, '2021', NULL, 'ANNUAL', '3', NULL, NULL, '11/02/2020', NULL, 2, 8, '2020-11-01 04:44:12', '2020-11-25 05:13:02', '3', '1', NULL),
(37, '2022', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 8, '2020-11-01 04:44:12', '2020-11-01 04:44:12', NULL, NULL, NULL),
(38, '2023', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 8, '2020-11-01 04:44:12', '2020-11-01 04:44:12', NULL, NULL, NULL),
(39, '2024', NULL, 'ANNUAL', NULL, NULL, NULL, NULL, NULL, 2, 8, '2020-11-01 04:44:12', '2020-11-01 04:44:12', NULL, NULL, NULL),
(40, '2025', NULL, 'MONTHLY', NULL, NULL, NULL, NULL, NULL, 2, 8, '2020-11-01 04:44:12', '2020-11-01 04:44:12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sdg_goals`
--

CREATE TABLE `sdg_goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdg_goals`
--

INSERT INTO `sdg_goals` (`id`, `name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(8, 'SDG 1 : End poverty in all its forms everywhere', 2, 'A', '2020-09-07 14:00:56', '2020-09-07 14:00:56'),
(9, 'SDG 2 : End hunger, achieve food security and improved nutrition and promote sustainable agriculture', 2, 'A', '2020-09-07 14:05:47', '2020-09-07 14:05:47'),
(11, 'SDG 3 - Ensure healthy lives and promote well-being for all at all ages', 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:44'),
(12, '4 - Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all', 2, 'A', '2020-09-07 15:56:36', '2020-09-07 15:56:36'),
(13, 'SDG 5 : Achieve gender equality and empower all women and girls', 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14'),
(14, '6 - Ensure availability and sustainable management of water and sanitation for all', 2, 'A', '2020-09-07 16:04:56', '2020-09-07 16:04:56'),
(15, '7 - Ensure access to affordable, reliable, sustainable and modern energy for all', 2, 'A', '2020-09-07 16:18:19', '2020-09-07 16:18:19'),
(16, '8 - Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all', 2, 'A', '2020-09-07 16:21:00', '2020-09-07 16:21:00'),
(17, '9 - Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation', 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29'),
(18, '10 - Reduce inequality within and among countries', 2, 'A', '2020-09-07 16:25:31', '2020-09-07 16:25:31'),
(19, '11 - Make cities and human settlements inclusive, safe, resilient and sustainable', 2, 'A', '2020-09-07 16:26:22', '2020-09-07 16:26:22'),
(20, '12 - Ensure sustainable consumption and production patterns', 2, 'A', '2020-09-07 16:27:03', '2020-09-07 16:27:03'),
(21, '13 - Take urgent action to combat climate change and its impacts', 2, 'A', '2020-09-07 16:27:52', '2020-09-07 16:27:52'),
(22, '14 - Conserve and sustainably use the oceans, seas and marine resources for sustainable development', 2, 'A', '2020-09-07 16:29:17', '2020-09-07 16:29:17'),
(23, '16 - Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels', 2, 'A', '2020-09-07 16:34:54', '2020-09-07 16:34:54'),
(24, '17 - Strengthen the means of implementation and revitalize the Global Partnership for Sustainable Development', 2, 'A', '2020-09-07 16:47:16', '2020-09-07 16:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `sdg_indicators`
--

CREATE TABLE `sdg_indicators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(191) DEFAULT NULL,
  `statement` longtext NOT NULL,
  `target_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `goal_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdg_indicators`
--

INSERT INTO `sdg_indicators` (`id`, `number`, `statement`, `target_id`, `user_id`, `status`, `created_at`, `updated_at`, `goal_id`) VALUES
(16, '1.2.1', 'Reduce the proportion of population living below national poverty line below 10% (SDG Indicator 1.2.1)', 11, 2, 'A', '2020-09-07 14:00:56', '2020-09-07 14:00:56', 8),
(17, '1.2.1', 'NPI 1 - Reduce the proportion of population living below extreme poverty line below 3% (SDG Indicator 1.2.1)', 12, 2, 'A', '2020-09-07 14:00:56', '2020-09-07 14:00:56', 8),
(18, '2.2.1', 'Reduce the prevalence of stunting among children under 5 years of age to 12% (SDG Indicator 2.2.1)', 13, 2, 'A', '2020-09-07 14:05:47', '2020-09-07 14:05:47', 9),
(19, '2.2.1', 'NPI 4 - Ensure the proportion of cultivable land at a minimum of 55% of the total land area', 14, 2, 'A', '2020-09-07 14:05:47', '2020-09-07 14:05:47', 9),
(21, '3.2.2', 'NPI 5 - Reduce neonatal mortality rate to 12 per 1,000 live births (SDG Indicator 3.2.2)', 16, 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:13', 11),
(22, '3.1.1', 'Reduce the maternal mortality ratio to 70 per 100,000 live births (SDG Indicator 3.1.1)', 17, 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:13', 11),
(23, '3.2.1', 'NPI 6 Reduce under-5 mortality rate to 25 per 1,000 live births (SDG Indicator 3.2.1)', 18, 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:13', 11),
(24, 'NPI 9 : Ensure 100% completion rate of primary education', 'NPI 9 : Ensure 100% completion rate of primary education', 19, 2, 'A', '2020-09-07 15:56:36', '2020-09-07 15:56:36', 12),
(25, 'NPI 13 : Ensure the proportion of schools by 100% with access to adapted infrastructure and materials for the child/ students with disability (SDG Indicator 4.a.1)', 'NPI 13 : Ensure the proportion of schools by 100% with access to adapted infrastructure and materials for the child/ students with disability (SDG Indicator 4.a.1)', 20, 2, 'A', '2020-09-07 15:56:37', '2020-09-07 15:56:37', 12),
(26, '5.3.1', 'NPI 14 : Reduce the proportion of women aged 20-24 years who were married before age 15 to zero (SDG Indicator 5.3.1)', 22, 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14', 13),
(27, 'NPI 16 : Increase the female labor force participation rate to 50%', 'NPI 16 : Increase the female labor force participation rate to 50%', 23, 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14', 13),
(28, '5.3.1', 'NPI 15 : Reduce the proportion of women aged 20-24 years who were married before age 18 to 10% (SDG Indicator 5.3.1)', 24, 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14', 13),
(29, '6.1.1', 'NPI 17 - Ensure 100% population using safely managed drinking water services (SDG Indicator 6.1.1)', 25, 2, 'A', '2020-09-07 16:04:57', '2020-09-07 16:04:57', 14),
(30, '6.2.1', 'NPI 18 - Ensure 100% population using safely managed sanitation services (SDG Indicator 6.2.1)', 26, 2, 'A', '2020-09-07 16:04:57', '2020-09-07 16:04:57', 14),
(31, '7.1.1', 'NPI 19 - Ensure access to electricity for 100% population (SDG Indicator 7.1.1)', 27, 2, 'A', '2020-09-07 16:18:19', '2020-09-07 16:18:19', 15),
(32, '7.2.1', 'NPI 20 - Increase renewable energy share in total final energy consumption to 10% (SDG Indicator 7.2.1)', 28, 2, 'A', '2020-09-07 16:18:19', '2020-09-07 16:18:19', 15),
(33, '8.1.1', 'NPI 21 - Increase annual growth rate of GDP to 10% (SDG Indicator 8.1.1)', 29, 2, 'A', '2020-09-07 16:21:01', '2020-09-07 16:21:01', 16),
(34, '8.6.1', 'NPI 23 - Reduce the proportion of youth population (15-29 years) not in education, employment or training to 10% (SDG Indicator 8.6.1)', 30, 2, 'A', '2020-09-07 16:21:01', '2020-09-07 16:21:01', 16),
(35, '8.5.2', 'NPI 22 : Reduce unemployment rate below 3% (SDG Indicator 8.5.2)', 31, 2, 'A', '2020-09-07 16:21:01', '2020-09-07 16:21:01', 16),
(36, '9.1.1', 'NPI 24 : Ensure 100 percent pucca roads (suitable for all seasons) (SDG Indicator 9.1.1)', 32, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29', 17),
(37, 'NPI 27 : Increase the number of entrepreneurs ten times in the Information and Communication Technology sector', 'NPI 27 : Increase the number of entrepreneurs ten times in the Information and Communication Technology sector', 33, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29', 17),
(38, '9.2.2', 'NPI 26 - Increase manufacturing employment as a proportion of total employment to 25% (SDG Indicator 9.2.2)', 34, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29', 17),
(39, '9.2.1', 'NPI 25 - Increase Industry (manufacturing) value added as a proportion of GDP to 35% (SDG Indicator 9.2.1)', 35, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29', 17),
(40, 'NPI 28 : Reduce the ratio of income of top 10% population and bottom 10% population to 20', 'NPI 28 : Reduce the ratio of income of top 10% population and bottom 10% population to 20', 36, 2, 'A', '2020-09-07 16:25:31', '2020-09-07 16:25:31', 18),
(41, '10.7.1', 'NPI 29 : Reduce the recruitment cost borne by employee as a proportion of yearly income earned in a country of destination to 10% (SDG Indicator 10.7.1)', 37, 2, 'A', '2020-09-07 16:25:31', '2020-09-07 16:25:31', 18),
(42, '11.2.1', 'NPI 30 : Ensure women, children, elderly and persons with disabilities have convenient access to public transport (minimum 20% seats) (SDG Indicator 11.2.1)', 38, 2, 'A', '2020-09-07 16:26:22', '2020-09-07 16:26:22', 19),
(43, 'NPI 31 : Ensure 100% industries install and operate waste management system', 'NPI 31 : Ensure 100% industries install and operate waste management system', 39, 2, 'A', '2020-09-07 16:27:03', '2020-09-07 16:27:03', 20),
(44, '13.1.1', 'NPI 32 - Reduce the number of deaths, missing persons and directly affected persons attributed to disasters to 1500 per 100,000 population (SDG Indicator 13.1.1)', 40, 2, 'A', '2020-09-07 16:27:52', '2020-09-07 16:27:52', 21),
(45, '14.5.1', 'NPI 33 - Expand the coverage of protected areas in relation to marine areas by 5% (SDG Indicator 14.5.1)', 41, 2, 'A', '2020-09-07 16:29:17', '2020-09-07 16:29:17', 22),
(46, '16.9.1', 'NPI 36 : Increase the proportion of children under 5 years of age whose births have been registered with a civil authority to 100% (SDG Indicator 16.9.1)', 42, 2, 'A', '2020-09-07 16:34:54', '2020-09-07 16:34:54', 23),
(47, 'NPI 37 : Increase the proportion of complaint Settlement against cognizance of cases by National Human Rights Commission to 60%', 'NPI 37 : Increase the proportion of complaint Settlement against cognizance of cases by National Human Rights Commission to 60%', 43, 2, 'A', '2020-09-07 16:34:54', '2020-09-07 16:34:54', 23),
(48, '17.1.1', 'NPI 38 - Increase total government revenue as a proportion of GDP to 20% (SDG Indicator 17.1.1)', 44, 2, 'A', '2020-09-07 16:47:16', '2020-09-07 16:47:16', 24);

-- --------------------------------------------------------

--
-- Table structure for table `sdg_targets`
--

CREATE TABLE `sdg_targets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `goal_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdg_targets`
--

INSERT INTO `sdg_targets` (`id`, `name`, `goal_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(11, '1.2 - Reduce the proportion of population living below national poverty line below 10%', 8, 2, 'A', '2020-09-07 14:00:56', '2020-09-07 14:00:56'),
(12, '1.1 - Reduce the proportion of population living below extreme poverty line below 3%', 8, 2, 'A', '2020-09-07 14:00:56', '2020-09-07 14:00:56'),
(13, '2.1 - Reduce the prevalence of stunting in children under 5 years of age to 12%', 9, 2, 'A', '2020-09-07 14:05:47', '2020-09-07 14:05:47'),
(14, '2.2 - Ensure the proportion of cultivable land at a minimum of 55% of the total land', 9, 2, 'A', '2020-09-07 14:05:47', '2020-09-07 14:05:47'),
(16, '3.1 - Reduce neonatal mortality rate to 12 per 1,000 live births', 11, 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:13'),
(17, 'Reduce the maternal mortality ratio to 70 per 100,000 live births (SDG Indicator 3.1.1)', 11, 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:13'),
(18, 'NPI 6 Reduce under-5 mortality rate to 25 per 1,000 live births (SDG Indicator 3.2.1)', 11, 2, 'A', '2020-09-07 14:55:13', '2020-09-07 14:55:13'),
(19, '4.1 - Ensure 100% completion rate of primary education', 12, 2, 'A', '2020-09-07 15:56:36', '2020-09-07 15:56:36'),
(20, '4.5 - Ensure the proportion of schools by 100% with access to adapted infrastructure and materials for the child/ students with disability', 12, 2, 'A', '2020-09-07 15:56:37', '2020-09-07 15:56:37'),
(21, '4.4 - Ensure the proportion of schools by 100%with access to the following A. Electricity B. Internet C. Basic drinking water D. Single-sex basic sanitation facilities', 12, 2, 'A', '2020-09-07 15:56:37', '2020-09-07 15:56:37'),
(22, '5.1 - Reduce the proportion of women aged 20-24 years who were married or in a union before age 15 to zero', 13, 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14'),
(23, '5.3 - Increase the participation rate of women in the labour force to 50%', 13, 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14'),
(24, '5.2 - Reduce the proportion of women aged 20-24 years who were married or in a union before age 18 to 10%', 13, 2, 'A', '2020-09-07 16:01:14', '2020-09-07 16:01:14'),
(25, '6.1 - Ensure 100% population using safely managed drinking water services', 14, 2, 'A', '2020-09-07 16:04:57', '2020-09-07 16:04:57'),
(26, '6.2 - Ensure 100% population using safely managed sanitation services', 14, 2, 'A', '2020-09-07 16:04:57', '2020-09-07 16:04:57'),
(27, '7.1 - Ensure access to electricity for 100% population', 15, 2, 'A', '2020-09-07 16:18:19', '2020-09-07 16:18:19'),
(28, '7.2 - Increase renewable energy share in total final energy consumption to 10%', 15, 2, 'A', '2020-09-07 16:18:19', '2020-09-07 16:18:19'),
(29, '8.1 - Increase annual growth rate of GDP to 10%', 16, 2, 'A', '2020-09-07 16:21:00', '2020-09-07 16:21:00'),
(30, '8.3 - Reduce the proportion of youth population (15-29 years) not in education, employment or training to 10%', 16, 2, 'A', '2020-09-07 16:21:01', '2020-09-07 16:21:01'),
(31, '8.2 - Reduce unemployment rate below 3%', 16, 2, 'A', '2020-09-07 16:21:01', '2020-09-07 16:21:01'),
(32, '9.1 - Ensure 100 percent pucca roads (suitable for all seasons)', 17, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29'),
(33, '9.4 - Increase the number of entrepreneurs ten times in the Information and Communication Technology sector', 17, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29'),
(34, '9.3 - Increase manufacturing employment as a proportion of total employment to 25%', 17, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29'),
(35, '9.2 - Increase Industry (manufacturing) value added as a proportion of GDP to 35%', 17, 2, 'A', '2020-09-07 16:23:29', '2020-09-07 16:23:29'),
(36, '10.1 - Reduce the ratio of income of top 10% population and bottom 10% population to 20', 18, 2, 'A', '2020-09-07 16:25:31', '2020-09-07 16:25:31'),
(37, '10.2 - Reduce the recruitment cost borne by employee as a proportion of yearly income earned in a country of destination to 10%', 18, 2, 'A', '2020-09-07 16:25:31', '2020-09-07 16:25:31'),
(38, '11.1 - Ensure women, children, elderly and persons with disabilities have convenient access to public transport(minimum 20% seats)', 19, 2, 'A', '2020-09-07 16:26:22', '2020-09-07 16:26:22'),
(39, '12.1 - Ensure 100% industries install and operate waste management system', 20, 2, 'A', '2020-09-07 16:27:03', '2020-09-07 16:27:03'),
(40, '13.1 - Reduce the number of deaths, missing persons and directly affected persons attributed to disasters to 1500 per 100,000 population', 21, 2, 'A', '2020-09-07 16:27:52', '2020-09-07 16:27:52'),
(41, '14.1 - Expand the coverage of protected areas in relation to marine areas by 5%', 22, 2, 'A', '2020-09-07 16:29:17', '2020-09-07 16:29:17'),
(42, '16.1 - Increase the proportion of children under 5 years of age whose births have been registered with a civil authority to 100%', 23, 2, 'A', '2020-09-07 16:34:54', '2020-09-07 16:34:54'),
(43, '16.2 - Increase the proportion of complaint Settlement against cognizance of cases by National Human Rights Commission to 60%', 23, 2, 'A', '2020-09-07 16:34:54', '2020-09-07 16:34:54'),
(44, '17.1 - Increase total government revenue as a proportion of GDPto 20%', 24, 2, 'A', '2020-09-07 16:47:16', '2020-09-07 16:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `spa_owner`
--

CREATE TABLE `spa_owner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spa_owner`
--

INSERT INTO `spa_owner` (`id`, `name`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BRAC Only', '', 1, 'A', NULL, NULL),
(2, 'DFID & DFAT', '', 1, 'A', NULL, NULL),
(3, 'DFAT', '', 1, 'A', NULL, NULL),
(4, 'DFID', '', NULL, 'A', NULL, NULL),
(5, 'GAC', '', NULL, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `study_archive`
--

CREATE TABLE `study_archive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED DEFAULT NULL,
  `support_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_period` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NEW',
  `version` int(11) NOT NULL DEFAULT 1,
  `version_ref_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'P',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seen_at` datetime DEFAULT NULL,
  `approved_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_archive`
--

INSERT INTO `study_archive` (`id`, `program_id`, `support_id`, `document_type_id`, `name`, `study_period`, `summary`, `remarks`, `version_status`, `version`, `version_ref_id`, `status`, `user_id`, `seen_at`, `approved_user_id`, `approved_at`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 4, 'BEP_School_Operation', '02/2019', 'Assessing Operations and Services of New Schools: Shishu Niketan', NULL, 'NEW', 1, NULL, 'P', 2, NULL, NULL, NULL, '2019-12-17 12:48:00', '2019-12-17 12:48:00'),
(2, 1, 4, 4, 'new school opening -', '08/2019', '03. ESP-English report new school opening -', NULL, 'FINAL', 1, NULL, 'P', 2, NULL, NULL, NULL, '2019-12-18 12:49:55', '2019-12-18 12:49:55'),
(3, 10, NULL, 4, 'Programme implementation quality 2019', 'Aug 1, 2020 To Nov 30, 2020', 'xyz', NULL, 'NEW', 1, NULL, 'P', 2, NULL, NULL, NULL, '2020-06-28 07:02:15', '2020-06-28 07:02:15'),
(4, 2, NULL, 4, 'BEP_School_Operation1', 'Sep 7, 2020 To Sep 7, 2020', 'sdfadfaf', NULL, 'NEW', 1, NULL, 'P', 2, NULL, NULL, NULL, '2020-09-07 16:25:18', '2020-09-07 16:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `study_archive_files`
--

CREATE TABLE `study_archive_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `study_archive_id` bigint(20) UNSIGNED NOT NULL,
  `store_by` bigint(20) UNSIGNED NOT NULL,
  `update_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_archive_files`
--

INSERT INTO `study_archive_files` (`id`, `study_archive_id`, `store_by`, `update_by`, `status`, `remarks`, `name`, `path`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, 'A', NULL, 'Survey 03. School operation_BEP_SN_Final.pptx', 'uploads/archive/study/17-12-19/124757PM_42544164671576586877.pptx', 1, '2019-12-17 12:48:00', '2019-12-17 12:48:00'),
(2, 2, 2, NULL, 'A', NULL, '03. ESP-English report new school opening -.docx', 'uploads/archive/study/18-12-19/124934PM_82811095191576673374.docx', 1, '2019-12-18 12:49:55', '2019-12-18 12:49:55'),
(3, 3, 2, NULL, 'A', NULL, 'Report_UPG Programme Implementation Quality Study 2019.docx', 'uploads/archive/study/28-06-20/070212AM_92641841091593327732.docx', 1, '2020-06-28 07:02:15', '2020-06-28 07:02:15'),
(4, 4, 2, NULL, 'A', NULL, 'ANC & PNC_Timeline.xlsx', 'uploads/archive/study/07-09-20/042514PM_97086113401599474314.xlsx', 1, '2020-09-07 16:25:18', '2020-09-07 16:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `study_thematics`
--

CREATE TABLE `study_thematics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `study_archive_id` bigint(20) UNSIGNED NOT NULL,
  `thematic_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_thematics`
--

INSERT INTO `study_thematics` (`id`, `study_archive_id`, `thematic_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'A', NULL, NULL),
(2, 2, 2, 'A', NULL, NULL),
(3, 3, 1, 'A', NULL, NULL),
(4, 4, 2, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `name`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'HRLD', 'HRLD', 2, 'A', '2019-12-17 12:35:59', '2019-12-17 12:43:24'),
(3, 'Communication', 'Communication', 2, 'A', '2019-12-18 12:47:27', '2019-12-18 12:47:27'),
(4, 'N/A', 'N/A', 2, 'A', '2019-12-18 12:49:01', '2019-12-18 12:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thematics`
--

CREATE TABLE `thematics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thematics`
--

INSERT INTO `thematics` (`id`, `name`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Programe Quality', 'Programme Quality', 2, 'A', '2019-12-17 12:44:03', '2020-06-28 06:42:18'),
(2, 'operation and maintenance', 'operation and maintenance', 2, 'A', '2019-12-17 12:44:19', '2019-12-17 12:44:19'),
(3, 'Research works', 'Research works', 2, 'A', '2019-12-17 12:44:39', '2020-06-28 06:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `url`) VALUES
(1, 1, 'Debidwar', NULL, 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', NULL, 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', NULL, 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', NULL, 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', NULL, 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', NULL, 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', NULL, 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', NULL, 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', NULL, 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', NULL, 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', NULL, 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', NULL, 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', NULL, 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', NULL, 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', NULL, 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', NULL, 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', NULL, 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', NULL, 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', NULL, 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', NULL, 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', NULL, 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', NULL, 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', NULL, 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', NULL, 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', NULL, 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', NULL, 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', NULL, 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', NULL, 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', NULL, 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', NULL, 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', NULL, 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', NULL, 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', NULL, 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', NULL, 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', NULL, 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', NULL, 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', NULL, 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', NULL, 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', NULL, 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', NULL, 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', NULL, 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', NULL, 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', NULL, 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', NULL, 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', NULL, 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', NULL, 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', NULL, 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', NULL, 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', NULL, 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', NULL, 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', NULL, 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', NULL, 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', NULL, 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', NULL, 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', NULL, 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', NULL, 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', NULL, 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', NULL, 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', NULL, 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', NULL, 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', NULL, 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', NULL, 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', NULL, 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', NULL, 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', NULL, 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', NULL, 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', NULL, 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', NULL, 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', NULL, 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', NULL, 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', NULL, 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', NULL, 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', NULL, 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', NULL, 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', NULL, 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', NULL, 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', NULL, 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', NULL, 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', NULL, 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', NULL, 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', NULL, 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', NULL, 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', NULL, 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', NULL, 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', NULL, 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', NULL, 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', NULL, 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', NULL, 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', NULL, 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', NULL, 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', NULL, 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', NULL, 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', NULL, 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', NULL, 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', NULL, 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', NULL, 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', NULL, 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', NULL, 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', NULL, 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', NULL, 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', NULL, 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', NULL, 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', NULL, 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', NULL, 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', NULL, 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', NULL, 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', NULL, 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', NULL, 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', NULL, 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', NULL, 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', NULL, 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', NULL, 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', NULL, 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', NULL, 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', NULL, 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', NULL, 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', NULL, 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', NULL, 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', NULL, 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', NULL, 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', NULL, 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', NULL, 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', NULL, 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', NULL, 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', NULL, 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', NULL, 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', NULL, 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', NULL, 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', NULL, 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', NULL, 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', NULL, 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', NULL, 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', NULL, 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', NULL, 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', NULL, 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', NULL, 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', NULL, 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', NULL, 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', NULL, 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', NULL, 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', NULL, 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', NULL, 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', NULL, 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', NULL, 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', NULL, 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', NULL, 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', NULL, 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', NULL, 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', NULL, 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', NULL, 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', NULL, 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', NULL, 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', NULL, 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', NULL, 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', NULL, 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', NULL, 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', NULL, 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', NULL, 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', NULL, 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', NULL, 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', NULL, 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', NULL, 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', NULL, 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', NULL, 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', NULL, 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', NULL, 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', NULL, 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', NULL, 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', NULL, 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', NULL, 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', NULL, 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', NULL, 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', NULL, 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', NULL, 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', NULL, 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', NULL, 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', NULL, 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', NULL, 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', NULL, 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', NULL, 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', NULL, 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', NULL, 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', NULL, 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', NULL, 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', NULL, 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', NULL, 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', NULL, 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', NULL, 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', NULL, 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', NULL, 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', NULL, 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', NULL, 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', NULL, 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', NULL, 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', NULL, 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', NULL, 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', NULL, 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', NULL, 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', NULL, 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', NULL, 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', NULL, 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', NULL, 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', NULL, 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', NULL, 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', NULL, 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', NULL, 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', NULL, 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', NULL, 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', NULL, 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', NULL, 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', NULL, 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', NULL, 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', NULL, 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', NULL, 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', NULL, 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', NULL, 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', NULL, 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', NULL, 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', NULL, 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', NULL, 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', NULL, 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', NULL, 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', NULL, 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', NULL, 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', NULL, 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', NULL, 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', NULL, 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', NULL, 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', NULL, 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', NULL, 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', NULL, 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', NULL, 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', NULL, 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', NULL, 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', NULL, 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', NULL, 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', NULL, 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', NULL, 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', NULL, 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', NULL, 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', NULL, 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', NULL, 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', NULL, 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', NULL, 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', NULL, 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', NULL, 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', NULL, 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', NULL, 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', NULL, 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', NULL, 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', NULL, 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', NULL, 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', NULL, 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', NULL, 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', NULL, 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', NULL, 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', NULL, 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', NULL, 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', NULL, 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', NULL, 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', NULL, 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', NULL, 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', NULL, 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', NULL, 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', NULL, 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', NULL, 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', NULL, 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', NULL, 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', NULL, 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', NULL, 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', NULL, 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', NULL, 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', NULL, 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', NULL, 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', NULL, 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', NULL, 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', NULL, 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', NULL, 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', NULL, 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', NULL, 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', NULL, 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', NULL, 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', NULL, 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', NULL, 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', NULL, 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', NULL, 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', NULL, 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', NULL, 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', NULL, 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', NULL, 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', NULL, 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', NULL, 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', NULL, 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', NULL, 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', NULL, 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', NULL, 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', NULL, 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', NULL, 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', NULL, 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', NULL, 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', NULL, 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', NULL, 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', NULL, 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', NULL, 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', NULL, 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', NULL, 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', NULL, 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', NULL, 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', NULL, 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', NULL, 'derai.sunamganj.gov.bd'),
(311, 40, 'Belabo', NULL, 'belabo.narsingdi.gov.bd'),
(312, 40, 'Monohardi', NULL, 'monohardi.narsingdi.gov.bd'),
(313, 40, 'Narsingdi Sadar', NULL, 'narsingdisadar.narsingdi.gov.bd'),
(314, 40, 'Palash', NULL, 'palash.narsingdi.gov.bd'),
(315, 40, 'Raipura', NULL, 'raipura.narsingdi.gov.bd'),
(316, 40, 'Shibpur', NULL, 'shibpur.narsingdi.gov.bd'),
(317, 41, 'Kaliganj', NULL, 'kaliganj.gazipur.gov.bd'),
(318, 41, 'Kaliakair', NULL, 'kaliakair.gazipur.gov.bd'),
(319, 41, 'Kapasia', NULL, 'kapasia.gazipur.gov.bd'),
(320, 41, 'Gazipur Sadar', NULL, 'sadar.gazipur.gov.bd'),
(321, 41, 'Sreepur', NULL, 'sreepur.gazipur.gov.bd'),
(322, 42, 'Shariatpur Sadar', NULL, 'sadar.shariatpur.gov.bd'),
(323, 42, 'Naria', NULL, 'naria.shariatpur.gov.bd'),
(324, 42, 'Zajira', NULL, 'zajira.shariatpur.gov.bd'),
(325, 42, 'Gosairhat', NULL, 'gosairhat.shariatpur.gov.bd'),
(326, 42, 'Bhedarganj', NULL, 'bhedarganj.shariatpur.gov.bd'),
(327, 42, 'Damudya', NULL, 'damudya.shariatpur.gov.bd'),
(328, 43, 'Araihazar', NULL, 'araihazar.narayanganj.gov.bd'),
(329, 43, 'Bandar', NULL, 'bandar.narayanganj.gov.bd'),
(330, 43, 'Narayanganj Sadar', NULL, 'narayanganjsadar.narayanganj.gov.bd'),
(331, 43, 'Rupganj', NULL, 'rupganj.narayanganj.gov.bd'),
(332, 43, 'Sonargaon', NULL, 'sonargaon.narayanganj.gov.bd'),
(333, 44, 'Basail', NULL, 'basail.tangail.gov.bd'),
(334, 44, 'Bhuapur', NULL, 'bhuapur.tangail.gov.bd'),
(335, 44, 'Delduar', NULL, 'delduar.tangail.gov.bd'),
(336, 44, 'Ghatail', NULL, 'ghatail.tangail.gov.bd'),
(337, 44, 'Gopalpur', NULL, 'gopalpur.tangail.gov.bd'),
(338, 44, 'Madhupur', NULL, 'madhupur.tangail.gov.bd'),
(339, 44, 'Mirzapur', NULL, 'mirzapur.tangail.gov.bd'),
(340, 44, 'Nagarpur', NULL, 'nagarpur.tangail.gov.bd'),
(341, 44, 'Sakhipur', NULL, 'sakhipur.tangail.gov.bd'),
(342, 44, 'Tangail Sadar', NULL, 'tangailsadar.tangail.gov.bd'),
(343, 44, 'Kalihati', NULL, 'kalihati.tangail.gov.bd'),
(344, 44, 'Dhanbari', NULL, 'dhanbari.tangail.gov.bd'),
(345, 45, 'Itna', NULL, 'itna.kishoreganj.gov.bd'),
(346, 45, 'Katiadi', NULL, 'katiadi.kishoreganj.gov.bd'),
(347, 45, 'Bhairab', NULL, 'bhairab.kishoreganj.gov.bd'),
(348, 45, 'Tarail', NULL, 'tarail.kishoreganj.gov.bd'),
(349, 45, 'Hossainpur', NULL, 'hossainpur.kishoreganj.gov.bd'),
(350, 45, 'Pakundia', NULL, 'pakundia.kishoreganj.gov.bd'),
(351, 45, 'Kuliarchar', NULL, 'kuliarchar.kishoreganj.gov.bd'),
(352, 45, 'Kishoreganj Sadar', NULL, 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 45, 'Karimgonj', NULL, 'karimgonj.kishoreganj.gov.bd'),
(354, 45, 'Bajitpur', NULL, 'bajitpur.kishoreganj.gov.bd'),
(355, 45, 'Austagram', NULL, 'austagram.kishoreganj.gov.bd'),
(356, 45, 'Mithamoin', NULL, 'mithamoin.kishoreganj.gov.bd'),
(357, 45, 'Nikli', NULL, 'nikli.kishoreganj.gov.bd'),
(358, 46, 'Harirampur', NULL, 'harirampur.manikganj.gov.bd'),
(359, 46, 'Saturia', NULL, 'saturia.manikganj.gov.bd'),
(360, 46, 'Manikganj Sadar', NULL, 'sadar.manikganj.gov.bd'),
(361, 46, 'Gior', NULL, 'gior.manikganj.gov.bd'),
(362, 46, 'Shibaloy', NULL, 'shibaloy.manikganj.gov.bd'),
(363, 46, 'Doulatpur', NULL, 'doulatpur.manikganj.gov.bd'),
(364, 46, 'Singiar', NULL, 'singiar.manikganj.gov.bd'),
(365, 47, 'Savar', NULL, 'savar.dhaka.gov.bd'),
(366, 47, 'Dhamrai', NULL, 'dhamrai.dhaka.gov.bd'),
(367, 47, 'Keraniganj', NULL, 'keraniganj.dhaka.gov.bd'),
(368, 47, 'Nawabganj', NULL, 'nawabganj.dhaka.gov.bd'),
(369, 47, 'Dohar', NULL, 'dohar.dhaka.gov.bd'),
(370, 48, 'Munshiganj Sadar', NULL, 'sadar.munshiganj.gov.bd'),
(371, 48, 'Sreenagar', NULL, 'sreenagar.munshiganj.gov.bd'),
(372, 48, 'Sirajdikhan', NULL, 'sirajdikhan.munshiganj.gov.bd'),
(373, 48, 'Louhajanj', NULL, 'louhajanj.munshiganj.gov.bd'),
(374, 48, 'Gajaria', NULL, 'gajaria.munshiganj.gov.bd'),
(375, 48, 'Tongibari', NULL, 'tongibari.munshiganj.gov.bd'),
(376, 49, 'Rajbari Sadar', NULL, 'sadar.rajbari.gov.bd'),
(377, 49, 'Goalanda', NULL, 'goalanda.rajbari.gov.bd'),
(378, 49, 'Pangsa', NULL, 'pangsa.rajbari.gov.bd'),
(379, 49, 'Baliakandi', NULL, 'baliakandi.rajbari.gov.bd'),
(380, 49, 'Kalukhali', NULL, 'kalukhali.rajbari.gov.bd'),
(381, 50, 'Madaripur Sadar', NULL, 'sadar.madaripur.gov.bd'),
(382, 50, 'Shibchar', NULL, 'shibchar.madaripur.gov.bd'),
(383, 50, 'Kalkini', NULL, 'kalkini.madaripur.gov.bd'),
(384, 50, 'Rajoir', NULL, 'rajoir.madaripur.gov.bd'),
(385, 51, 'Gopalganj Sadar', NULL, 'sadar.gopalganj.gov.bd'),
(386, 51, 'Kashiani', NULL, 'kashiani.gopalganj.gov.bd'),
(387, 51, 'Tungipara', NULL, 'tungipara.gopalganj.gov.bd'),
(388, 51, 'Kotalipara', NULL, 'kotalipara.gopalganj.gov.bd'),
(389, 51, 'Muksudpur', NULL, 'muksudpur.gopalganj.gov.bd'),
(390, 52, 'Faridpur Sadar', NULL, 'sadar.faridpur.gov.bd'),
(391, 52, 'Alfadanga', NULL, 'alfadanga.faridpur.gov.bd'),
(392, 52, 'Boalmari', NULL, 'boalmari.faridpur.gov.bd'),
(393, 52, 'Sadarpur', NULL, 'sadarpur.faridpur.gov.bd'),
(394, 52, 'Nagarkanda', NULL, 'nagarkanda.faridpur.gov.bd'),
(395, 52, 'Bhanga', NULL, 'bhanga.faridpur.gov.bd'),
(396, 52, 'Charbhadrasan', NULL, 'charbhadrasan.faridpur.gov.bd'),
(397, 52, 'Madhukhali', NULL, 'madhukhali.faridpur.gov.bd'),
(398, 52, 'Saltha', NULL, 'saltha.faridpur.gov.bd'),
(399, 53, 'Panchagarh Sadar', NULL, 'panchagarhsadar.panchagarh.gov.bd'),
(400, 53, 'Debiganj', NULL, 'debiganj.panchagarh.gov.bd'),
(401, 53, 'Boda', NULL, 'boda.panchagarh.gov.bd'),
(402, 53, 'Atwari', NULL, 'atwari.panchagarh.gov.bd'),
(403, 53, 'Tetulia', NULL, 'tetulia.panchagarh.gov.bd'),
(404, 54, 'Nawabganj', NULL, 'nawabganj.dinajpur.gov.bd'),
(405, 54, 'Birganj', NULL, 'birganj.dinajpur.gov.bd'),
(406, 54, 'Ghoraghat', NULL, 'ghoraghat.dinajpur.gov.bd'),
(407, 54, 'Birampur', NULL, 'birampur.dinajpur.gov.bd'),
(408, 54, 'Parbatipur', NULL, 'parbatipur.dinajpur.gov.bd'),
(409, 54, 'Bochaganj', NULL, 'bochaganj.dinajpur.gov.bd'),
(410, 54, 'Kaharol', NULL, 'kaharol.dinajpur.gov.bd'),
(411, 54, 'Fulbari', NULL, 'fulbari.dinajpur.gov.bd'),
(412, 54, 'Dinajpur Sadar', NULL, 'dinajpursadar.dinajpur.gov.bd'),
(413, 54, 'Hakimpur', NULL, 'hakimpur.dinajpur.gov.bd'),
(414, 54, 'Khansama', NULL, 'khansama.dinajpur.gov.bd'),
(415, 54, 'Birol', NULL, 'birol.dinajpur.gov.bd'),
(416, 54, 'Chirirbandar', NULL, 'chirirbandar.dinajpur.gov.bd'),
(417, 55, 'Lalmonirhat Sadar', NULL, 'sadar.lalmonirhat.gov.bd'),
(418, 55, 'Kaliganj', NULL, 'kaliganj.lalmonirhat.gov.bd'),
(419, 55, 'Hatibandha', NULL, 'hatibandha.lalmonirhat.gov.bd'),
(420, 55, 'Patgram', NULL, 'patgram.lalmonirhat.gov.bd'),
(421, 55, 'Aditmari', NULL, 'aditmari.lalmonirhat.gov.bd'),
(422, 56, 'Syedpur', NULL, 'syedpur.nilphamari.gov.bd'),
(423, 56, 'Domar', NULL, 'domar.nilphamari.gov.bd'),
(424, 56, 'Dimla', NULL, 'dimla.nilphamari.gov.bd'),
(425, 56, 'Jaldhaka', NULL, 'jaldhaka.nilphamari.gov.bd'),
(426, 56, 'Kishorganj', NULL, 'kishorganj.nilphamari.gov.bd'),
(427, 56, 'Nilphamari Sadar', NULL, 'nilphamarisadar.nilphamari.gov.bd'),
(428, 57, 'Sadullapur', NULL, 'sadullapur.gaibandha.gov.bd'),
(429, 57, 'Gaibandha Sadar', NULL, 'gaibandhasadar.gaibandha.gov.bd'),
(430, 57, 'Palashbari', NULL, 'palashbari.gaibandha.gov.bd'),
(431, 57, 'Saghata', NULL, 'saghata.gaibandha.gov.bd'),
(432, 57, 'Gobindaganj', NULL, 'gobindaganj.gaibandha.gov.bd'),
(433, 57, 'Sundarganj', NULL, 'sundarganj.gaibandha.gov.bd'),
(434, 57, 'Phulchari', NULL, 'phulchari.gaibandha.gov.bd'),
(435, 58, 'Thakurgaon Sadar', NULL, 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 58, 'Pirganj', NULL, 'pirganj.thakurgaon.gov.bd'),
(437, 58, 'Ranisankail', NULL, 'ranisankail.thakurgaon.gov.bd'),
(438, 58, 'Haripur', NULL, 'haripur.thakurgaon.gov.bd'),
(439, 58, 'Baliadangi', NULL, 'baliadangi.thakurgaon.gov.bd'),
(440, 59, 'Rangpur Sadar', NULL, 'rangpursadar.rangpur.gov.bd'),
(441, 59, 'Gangachara', NULL, 'gangachara.rangpur.gov.bd'),
(442, 59, 'Taragonj', NULL, 'taragonj.rangpur.gov.bd'),
(443, 59, 'Badargonj', NULL, 'badargonj.rangpur.gov.bd'),
(444, 59, 'Mithapukur', NULL, 'mithapukur.rangpur.gov.bd'),
(445, 59, 'Pirgonj', NULL, 'pirgonj.rangpur.gov.bd'),
(446, 59, 'Kaunia', NULL, 'kaunia.rangpur.gov.bd'),
(447, 59, 'Pirgacha', NULL, 'pirgacha.rangpur.gov.bd'),
(448, 60, 'Kurigram Sadar', NULL, 'kurigramsadar.kurigram.gov.bd'),
(449, 60, 'Nageshwari', NULL, 'nageshwari.kurigram.gov.bd'),
(450, 60, 'Bhurungamari', NULL, 'bhurungamari.kurigram.gov.bd'),
(451, 60, 'Phulbari', NULL, 'phulbari.kurigram.gov.bd'),
(452, 60, 'Rajarhat', NULL, 'rajarhat.kurigram.gov.bd'),
(453, 60, 'Ulipur', NULL, 'ulipur.kurigram.gov.bd'),
(454, 60, 'Chilmari', NULL, 'chilmari.kurigram.gov.bd'),
(455, 60, 'Rowmari', NULL, 'rowmari.kurigram.gov.bd'),
(456, 60, 'Charrajibpur', NULL, 'charrajibpur.kurigram.gov.bd'),
(457, 61, 'Sherpur Sadar', NULL, 'sherpursadar.sherpur.gov.bd'),
(458, 61, 'Nalitabari', NULL, 'nalitabari.sherpur.gov.bd'),
(459, 61, 'Sreebordi', NULL, 'sreebordi.sherpur.gov.bd'),
(460, 61, 'Nokla', NULL, 'nokla.sherpur.gov.bd'),
(461, 61, 'Jhenaigati', NULL, 'jhenaigati.sherpur.gov.bd'),
(462, 62, 'Fulbaria', NULL, 'fulbaria.mymensingh.gov.bd'),
(463, 62, 'Trishal', NULL, 'trishal.mymensingh.gov.bd'),
(464, 62, 'Bhaluka', NULL, 'bhaluka.mymensingh.gov.bd'),
(465, 62, 'Muktagacha', NULL, 'muktagacha.mymensingh.gov.bd'),
(466, 62, 'Mymensingh Sadar', NULL, 'mymensinghsadar.mymensingh.gov.bd'),
(467, 62, 'Dhobaura', NULL, 'dhobaura.mymensingh.gov.bd'),
(468, 62, 'Phulpur', NULL, 'phulpur.mymensingh.gov.bd'),
(469, 62, 'Haluaghat', NULL, 'haluaghat.mymensingh.gov.bd'),
(470, 62, 'Gouripur', NULL, 'gouripur.mymensingh.gov.bd'),
(471, 62, 'Gafargaon', NULL, 'gafargaon.mymensingh.gov.bd'),
(472, 62, 'Iswarganj', NULL, 'iswarganj.mymensingh.gov.bd'),
(473, 62, 'Nandail', NULL, 'nandail.mymensingh.gov.bd'),
(474, 62, 'Tarakanda', NULL, 'tarakanda.mymensingh.gov.bd'),
(475, 63, 'Jamalpur Sadar', NULL, 'jamalpursadar.jamalpur.gov.bd'),
(476, 63, 'Melandah', NULL, 'melandah.jamalpur.gov.bd'),
(477, 63, 'Islampur', NULL, 'islampur.jamalpur.gov.bd'),
(478, 63, 'Dewangonj', NULL, 'dewangonj.jamalpur.gov.bd'),
(479, 63, 'Sarishabari', NULL, 'sarishabari.jamalpur.gov.bd'),
(480, 63, 'Madarganj', NULL, 'madarganj.jamalpur.gov.bd'),
(481, 63, 'Bokshiganj', NULL, 'bokshiganj.jamalpur.gov.bd'),
(482, 64, 'Barhatta', NULL, 'barhatta.netrokona.gov.bd'),
(483, 64, 'Durgapur', NULL, 'durgapur.netrokona.gov.bd'),
(484, 64, 'Kendua', NULL, 'kendua.netrokona.gov.bd'),
(485, 64, 'Atpara', NULL, 'atpara.netrokona.gov.bd'),
(486, 64, 'Madan', NULL, 'madan.netrokona.gov.bd'),
(487, 64, 'Khaliajuri', NULL, 'khaliajuri.netrokona.gov.bd'),
(488, 64, 'Kalmakanda', NULL, 'kalmakanda.netrokona.gov.bd'),
(489, 64, 'Mohongonj', NULL, 'mohongonj.netrokona.gov.bd'),
(490, 64, 'Purbadhala', NULL, 'purbadhala.netrokona.gov.bd'),
(491, 64, 'Netrokona Sadar', NULL, 'netrokonasadar.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'registered',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `parent_id`, `image`, `remember_token`, `created_at`, `updated_at`, `program_id`) VALUES
(1, 'N/A', 'sadmin@user.com', NULL, '$2y$10$INeJUItBusI8gH.PkGtX9OYbMsAlQPKvR5cRvCrQSOZ2twgjDzfJG', 'super-admin', 'A', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'Admin User', 'admin@user.com', NULL, '$2y$10$6JU.RL0CRv87VIcJGyzLYOceJ/YFX3cMHEb4aZufb3aRYW6eHC7Au', 'admin', 'A', 1, NULL, NULL, NULL, '2020-02-26 21:16:05', 1),
(3, 'Supervisor', 'supervisor@user.com', NULL, '$2y$10$6r7PGC8.OJGKxcq5ZOGNvuDMp8/ne04RsiiodgkKh2GDC/Gyd.57e', 'supervisor', 'A', 1, NULL, NULL, NULL, '2020-02-26 21:16:21', 1),
(4, 'General', 'user@user.com', NULL, '$2y$10$X3wmmHhG2LRz3rX6SYE53OV6zWJ07kpIAfSIgepPUaqg.S4PCjCde', 'registered', 'A', 3, NULL, NULL, NULL, '2020-02-26 21:16:28', 1),
(5, 'I. J. Shoef', 'ishtiaque.shoef@brac.net', NULL, '$2y$10$psM4eTq6/uhI8Mi1.7N2D.2ZQgn/A7wtePtNW.5FVurl1LFn1kC76', 'supervisor', 'A', 1, NULL, NULL, '2020-09-07 16:12:26', '2020-09-07 16:12:26', 25),
(6, 'Mehadi', 'mehadi.hasan@brac.net', NULL, '$2y$10$ScEsBY46ciLJ.5cLEzzKyuWhycaySApK4dEVhHBU/1ORyYuKD8xy6', 'registered', 'A', 5, NULL, NULL, '2020-09-07 16:13:55', '2020-09-07 16:13:55', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document_archive`
--
ALTER TABLE `document_archive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_archive_approved_user_id_foreign` (`approved_user_id`),
  ADD KEY `document_archive_version_ref_id_foreign` (`version_ref_id`),
  ADD KEY `document_archive_program_id_index` (`program_id`),
  ADD KEY `document_archive_document_type_id_index` (`document_type_id`),
  ADD KEY `document_archive_user_id_index` (`user_id`);

--
-- Indexes for table `document_archive_files`
--
ALTER TABLE `document_archive_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_archive_files_document_archive_id_foreign` (`document_archive_id`),
  ADD KEY `document_archive_files_store_by_index` (`store_by`),
  ADD KEY `document_archive_files_update_by_index` (`update_by`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_types_user_id_index` (`user_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donors_user_id_index` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicator_outcomes`
--
ALTER TABLE `indicator_outcomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicator_outcomes_user_id_index` (`user_id`);

--
-- Indexes for table `indicator_owner`
--
ALTER TABLE `indicator_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicator_registration`
--
ALTER TABLE `indicator_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicator_registration_user_id_foreign` (`user_id`);

--
-- Indexes for table `indicator_registration_files`
--
ALTER TABLE `indicator_registration_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicator_registration_files_indicator_registration_foreign` (`indicator_registration_id`),
  ADD KEY `indicator_registration_files_store_by_foreign` (`store_by`);

--
-- Indexes for table `indicator_registration_indicators`
--
ALTER TABLE `indicator_registration_indicators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicator_registration_milestone`
--
ALTER TABLE `indicator_registration_milestone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicator_reg_milestone_user_id_foreign` (`user_id`);

--
-- Indexes for table `indicator_registration_program`
--
ALTER TABLE `indicator_registration_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indicator_registration_program_area`
--
ALTER TABLE `indicator_registration_program_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_action_archive`
--
ALTER TABLE `learning_action_archive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learning_action_archive_approved_user_id_foreign` (`approved_user_id`),
  ADD KEY `learning_action_archive_version_ref_id_foreign` (`version_ref_id`),
  ADD KEY `learning_action_archive_program_id_index` (`program_id`),
  ADD KEY `learning_action_archive_support_id_index` (`support_id`),
  ADD KEY `learning_action_archive_user_id_index` (`user_id`);

--
-- Indexes for table `learning_action_archive_files`
--
ALTER TABLE `learning_action_archive_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learning_action_archive_files_learning_action_archive_id_foreign` (`learning_action_archive_id`),
  ADD KEY `learning_action_archive_files_store_by_index` (`store_by`),
  ADD KEY `learning_action_archive_files_update_by_index` (`update_by`);

--
-- Indexes for table `learning_action_thematics`
--
ALTER TABLE `learning_action_thematics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learning_action_thematics_learning_action_archive_id_foreign` (`learning_action_archive_id`),
  ADD KEY `learning_action_thematics_thematic_id_foreign` (`thematic_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pillars`
--
ALTER TABLE `pillars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pillars_user_id_index` (`user_id`);

--
-- Indexes for table `pillar_details`
--
ALTER TABLE `pillar_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pillar_details_pillar_id_index` (`pillar_id`),
  ADD KEY `pillar_details_user_id_index` (`user_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_user_id_index` (`user_id`);

--
-- Indexes for table `result_entry`
--
ALTER TABLE `result_entry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_entry_user_id_foreign` (`user_id`);

--
-- Indexes for table `result_entry_details`
--
ALTER TABLE `result_entry_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_entry_details_result_entry_id_foreign` (`result_entry_id`),
  ADD KEY `result_entry_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `sdg_goals`
--
ALTER TABLE `sdg_goals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdg_goals_user_id_foreign` (`user_id`);

--
-- Indexes for table `sdg_indicators`
--
ALTER TABLE `sdg_indicators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdg_indicators_target_id_foreign` (`target_id`),
  ADD KEY `sdg_indicators_user_id_foreign` (`user_id`);

--
-- Indexes for table `sdg_targets`
--
ALTER TABLE `sdg_targets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdg_goal_targets_goal_id_foreign` (`goal_id`),
  ADD KEY `sdg_goal_targets_user_id_foreign` (`user_id`);

--
-- Indexes for table `spa_owner`
--
ALTER TABLE `spa_owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spa_owner_user_id_index` (`user_id`);

--
-- Indexes for table `study_archive`
--
ALTER TABLE `study_archive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_archive_approved_user_id_foreign` (`approved_user_id`),
  ADD KEY `study_archive_version_ref_id_foreign` (`version_ref_id`),
  ADD KEY `study_archive_program_id_index` (`program_id`),
  ADD KEY `study_archive_support_id_index` (`support_id`),
  ADD KEY `study_archive_document_type_id_index` (`document_type_id`),
  ADD KEY `study_archive_user_id_index` (`user_id`);

--
-- Indexes for table `study_archive_files`
--
ALTER TABLE `study_archive_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_archive_files_study_archive_id_foreign` (`study_archive_id`),
  ADD KEY `study_archive_files_store_by_index` (`store_by`),
  ADD KEY `study_archive_files_update_by_index` (`update_by`);

--
-- Indexes for table `study_thematics`
--
ALTER TABLE `study_thematics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_thematics_study_archive_id_foreign` (`study_archive_id`),
  ADD KEY `study_thematics_thematic_id_foreign` (`thematic_id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supports_user_id_index` (`user_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_index` (`user_id`);

--
-- Indexes for table `thematics`
--
ALTER TABLE `thematics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thematics_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_parent_id_index` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document_archive`
--
ALTER TABLE `document_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_archive_files`
--
ALTER TABLE `document_archive_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indicator_outcomes`
--
ALTER TABLE `indicator_outcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `indicator_owner`
--
ALTER TABLE `indicator_owner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `indicator_registration`
--
ALTER TABLE `indicator_registration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `indicator_registration_files`
--
ALTER TABLE `indicator_registration_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `indicator_registration_indicators`
--
ALTER TABLE `indicator_registration_indicators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `indicator_registration_milestone`
--
ALTER TABLE `indicator_registration_milestone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `indicator_registration_program`
--
ALTER TABLE `indicator_registration_program`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `indicator_registration_program_area`
--
ALTER TABLE `indicator_registration_program_area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `learning_action_archive`
--
ALTER TABLE `learning_action_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `learning_action_archive_files`
--
ALTER TABLE `learning_action_archive_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `learning_action_thematics`
--
ALTER TABLE `learning_action_thematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `pillars`
--
ALTER TABLE `pillars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pillar_details`
--
ALTER TABLE `pillar_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `result_entry`
--
ALTER TABLE `result_entry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `result_entry_details`
--
ALTER TABLE `result_entry_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sdg_goals`
--
ALTER TABLE `sdg_goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sdg_indicators`
--
ALTER TABLE `sdg_indicators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sdg_targets`
--
ALTER TABLE `sdg_targets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `spa_owner`
--
ALTER TABLE `spa_owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `study_archive`
--
ALTER TABLE `study_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_archive_files`
--
ALTER TABLE `study_archive_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_thematics`
--
ALTER TABLE `study_thematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thematics`
--
ALTER TABLE `thematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_archive`
--
ALTER TABLE `document_archive`
  ADD CONSTRAINT `document_archive_approved_user_id_foreign` FOREIGN KEY (`approved_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `document_archive_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`),
  ADD CONSTRAINT `document_archive_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `document_archive_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `document_archive_version_ref_id_foreign` FOREIGN KEY (`version_ref_id`) REFERENCES `study_archive` (`id`);

--
-- Constraints for table `document_archive_files`
--
ALTER TABLE `document_archive_files`
  ADD CONSTRAINT `document_archive_files_document_archive_id_foreign` FOREIGN KEY (`document_archive_id`) REFERENCES `document_archive` (`id`),
  ADD CONSTRAINT `document_archive_files_store_by_foreign` FOREIGN KEY (`store_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `document_archive_files_update_by_foreign` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `document_types`
--
ALTER TABLE `document_types`
  ADD CONSTRAINT `document_types_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `indicator_outcomes`
--
ALTER TABLE `indicator_outcomes`
  ADD CONSTRAINT `indicator_outcomes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `indicator_registration`
--
ALTER TABLE `indicator_registration`
  ADD CONSTRAINT `indicator_registration_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `indicator_registration_files`
--
ALTER TABLE `indicator_registration_files`
  ADD CONSTRAINT `indicator_registration_files_indicator_registration_foreign` FOREIGN KEY (`indicator_registration_id`) REFERENCES `indicator_registration` (`id`),
  ADD CONSTRAINT `indicator_registration_files_store_by_foreign` FOREIGN KEY (`store_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `indicator_registration_milestone`
--
ALTER TABLE `indicator_registration_milestone`
  ADD CONSTRAINT `indicator_reg_milestone_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `learning_action_archive`
--
ALTER TABLE `learning_action_archive`
  ADD CONSTRAINT `learning_action_archive_approved_user_id_foreign` FOREIGN KEY (`approved_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `learning_action_archive_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `learning_action_archive_support_id_foreign` FOREIGN KEY (`support_id`) REFERENCES `supports` (`id`),
  ADD CONSTRAINT `learning_action_archive_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `learning_action_archive_version_ref_id_foreign` FOREIGN KEY (`version_ref_id`) REFERENCES `study_archive` (`id`);

--
-- Constraints for table `learning_action_archive_files`
--
ALTER TABLE `learning_action_archive_files`
  ADD CONSTRAINT `learning_action_archive_files_learning_action_archive_id_foreign` FOREIGN KEY (`learning_action_archive_id`) REFERENCES `learning_action_archive` (`id`),
  ADD CONSTRAINT `learning_action_archive_files_store_by_foreign` FOREIGN KEY (`store_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `learning_action_archive_files_update_by_foreign` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `learning_action_thematics`
--
ALTER TABLE `learning_action_thematics`
  ADD CONSTRAINT `learning_action_thematics_learning_action_archive_id_foreign` FOREIGN KEY (`learning_action_archive_id`) REFERENCES `learning_action_archive` (`id`),
  ADD CONSTRAINT `learning_action_thematics_thematic_id_foreign` FOREIGN KEY (`thematic_id`) REFERENCES `thematics` (`id`);

--
-- Constraints for table `pillars`
--
ALTER TABLE `pillars`
  ADD CONSTRAINT `pillars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pillar_details`
--
ALTER TABLE `pillar_details`
  ADD CONSTRAINT `pillar_details_pillar_id_foreign` FOREIGN KEY (`pillar_id`) REFERENCES `pillars` (`id`),
  ADD CONSTRAINT `pillar_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `result_entry`
--
ALTER TABLE `result_entry`
  ADD CONSTRAINT `result_entry_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `result_entry_details`
--
ALTER TABLE `result_entry_details`
  ADD CONSTRAINT `result_entry_details_result_entry_id_foreign` FOREIGN KEY (`result_entry_id`) REFERENCES `result_entry` (`id`),
  ADD CONSTRAINT `result_entry_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sdg_goals`
--
ALTER TABLE `sdg_goals`
  ADD CONSTRAINT `sdg_goals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sdg_indicators`
--
ALTER TABLE `sdg_indicators`
  ADD CONSTRAINT `sdg_indicators_target_id_foreign` FOREIGN KEY (`target_id`) REFERENCES `sdg_targets` (`id`),
  ADD CONSTRAINT `sdg_indicators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sdg_targets`
--
ALTER TABLE `sdg_targets`
  ADD CONSTRAINT `sdg_goal_targets_goal_id_foreign` FOREIGN KEY (`goal_id`) REFERENCES `sdg_goals` (`id`),
  ADD CONSTRAINT `sdg_goal_targets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `spa_owner`
--
ALTER TABLE `spa_owner`
  ADD CONSTRAINT `spa_owner_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `study_archive`
--
ALTER TABLE `study_archive`
  ADD CONSTRAINT `study_archive_approved_user_id_foreign` FOREIGN KEY (`approved_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `study_archive_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`),
  ADD CONSTRAINT `study_archive_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  ADD CONSTRAINT `study_archive_support_id_foreign` FOREIGN KEY (`support_id`) REFERENCES `supports` (`id`),
  ADD CONSTRAINT `study_archive_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `study_archive_version_ref_id_foreign` FOREIGN KEY (`version_ref_id`) REFERENCES `study_archive` (`id`);

--
-- Constraints for table `study_archive_files`
--
ALTER TABLE `study_archive_files`
  ADD CONSTRAINT `study_archive_files_store_by_foreign` FOREIGN KEY (`store_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `study_archive_files_study_archive_id_foreign` FOREIGN KEY (`study_archive_id`) REFERENCES `study_archive` (`id`),
  ADD CONSTRAINT `study_archive_files_update_by_foreign` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `study_thematics`
--
ALTER TABLE `study_thematics`
  ADD CONSTRAINT `study_thematics_study_archive_id_foreign` FOREIGN KEY (`study_archive_id`) REFERENCES `study_archive` (`id`),
  ADD CONSTRAINT `study_thematics_thematic_id_foreign` FOREIGN KEY (`thematic_id`) REFERENCES `thematics` (`id`);

--
-- Constraints for table `supports`
--
ALTER TABLE `supports`
  ADD CONSTRAINT `supports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `thematics`
--
ALTER TABLE `thematics`
  ADD CONSTRAINT `thematics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
