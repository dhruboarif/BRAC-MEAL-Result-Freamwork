-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 01:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brac`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', NULL, NULL, 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `url`) VALUES
(1, 'Chattagram', 'চট্টগ্রাম', 'www.chittagongdiv.gov.bd'),
(2, 'Rajshahi', 'রাজশাহী', 'www.rajshahidiv.gov.bd'),
(3, 'Khulna', 'খুলনা', 'www.khulnadiv.gov.bd'),
(4, 'Barisal', 'বরিশাল', 'www.barisaldiv.gov.bd'),
(5, 'Sylhet', 'সিলেট', 'www.sylhetdiv.gov.bd'),
(6, 'Dhaka', 'ঢাকা', 'www.dhakadiv.gov.bd'),
(7, 'Rangpur', 'রংপুর', 'www.rangpurdiv.gov.bd'),
(8, 'Mymensingh', 'ময়মনসিংহ', 'www.mymensinghdiv.gov.bd');

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
(1, 'Document-15:56:27', 'schneider.stephany', 5, 'A', NULL, NULL),
(2, 'Document-21:05:03', 'arunolfsdottir', 5, 'A', NULL, NULL),
(3, 'Document-23:06:12', 'louvenia.streich', 9, 'A', NULL, NULL),
(4, 'Document-06:41:59', 'mathilde.upton', 3, 'A', NULL, NULL),
(5, 'Document-01:00:42', 'demetris.gulgowski', 5, 'A', NULL, NULL),
(6, 'Document-15:26:35', 'juliet34', 10, 'A', NULL, NULL),
(7, 'Document-05:12:18', 'lexi.gutkowski', 9, 'A', NULL, NULL),
(8, 'Document-08:59:56', 'madams', 8, 'A', NULL, NULL),
(9, 'Document-12:12:33', 'florence44', 5, 'A', NULL, NULL),
(10, 'Document-14:27:24', 'dejah.thompson', 3, 'A', NULL, NULL);

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
(1, 'Donor-11:46:27', 'kevin.kutch', 9, 'A', NULL, NULL),
(2, 'Donor-09:28:20', 'macejkovic.koby', 8, 'A', NULL, NULL),
(3, 'Donor-04:28:24', 'maryjane.friesen', 2, 'A', NULL, NULL),
(4, 'Donor-10:11:29', 'amaya14', 4, 'A', NULL, NULL),
(5, 'Donor-09:25:44', 'dale71', 2, 'A', NULL, NULL),
(6, 'Donor-09:21:25', 'nskiles', 3, 'A', NULL, NULL),
(7, 'Donor-09:11:50', 'jefferey.kirlin', 9, 'A', NULL, NULL),
(8, 'Donor-10:21:21', 'ledner.chanel', 4, 'A', NULL, NULL),
(9, 'Donor-08:07:02', 'johnson.jacobi', 3, 'A', NULL, NULL),
(10, 'Donor-05:06:29', 'sydni.bednar', 10, 'A', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `indicator_registration`
--

CREATE TABLE `indicator_registration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pillar_id` varchar(191) NOT NULL,
  `indicator_type` varchar(191) NOT NULL,
  `indicator_number` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indicators` varchar(255) DEFAULT NULL,
  `indicator_statement` varchar(200) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `assumption` varchar(255) DEFAULT NULL,
  `relevant_goal` int(11) DEFAULT NULL,
  `relevant_indicator` int(11) DEFAULT NULL,
  `chain_output` int(11) DEFAULT NULL,
  `chain_outcome` int(11) DEFAULT NULL,
  `chain_impact` int(11) DEFAULT NULL,
  `baseline_year` varchar(200) DEFAULT NULL,
  `baseline_result` varchar(200) DEFAULT NULL,
  `baseline_source` varchar(200) DEFAULT NULL,
  `baseline_methodology` varchar(200) DEFAULT NULL,
  `contribution_program` int(11) DEFAULT NULL,
  `coverage_area` varchar(255) DEFAULT NULL,
  `milestone_approved_year` varchar(100) DEFAULT NULL,
  `milestone_formula` varchar(100) DEFAULT NULL,
  `milestone_total_target` varchar(100) DEFAULT NULL,
  `framework_file_type` varchar(200) DEFAULT NULL,
  `me_file_type` varchar(200) DEFAULT NULL,
  `methodology_note_file_type` varchar(200) DEFAULT NULL,
  `smart_guide_file_type` varchar(200) DEFAULT NULL,
  `sdg_relevance_file_type` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicator_registration`
--

INSERT INTO `indicator_registration` (`id`, `pillar_id`, `indicator_type`, `indicator_number`, `user_id`, `status`, `created_at`, `updated_at`, `indicators`, `indicator_statement`, `owner`, `assumption`, `relevant_goal`, `relevant_indicator`, `chain_output`, `chain_outcome`, `chain_impact`, `baseline_year`, `baseline_result`, `baseline_source`, `baseline_methodology`, `contribution_program`, `coverage_area`, `milestone_approved_year`, `milestone_formula`, `milestone_total_target`, `framework_file_type`, `me_file_type`, `methodology_note_file_type`, `smart_guide_file_type`, `sdg_relevance_file_type`) VALUES
(2, '7', 'OUTCOME', 'Indicator Number', 2, 'A', '2020-02-18 09:58:50', '2020-02-18 09:58:50', '[\"26\",\"28\"]', 'Indicator Statement', 2, 'Assumption', 22, 31, 31, 27, 24, '2017', '2018', 'Source', 'Methodology', 5, '[[\"3\",\"4\",\"12\",\"18\"],[\"28\",\"39\",\"110\",\"159\"]]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '7', 'OUTCOME', 'Indicator Number', 2, 'A', '2020-02-18 10:05:28', '2020-02-18 10:05:28', '[\"26\",\"28\"]', 'Indicator Statement', 2, 'Assumption', 22, 31, 31, 27, 24, '2017', '2018', 'Source', 'Methodology', 5, '{\"district\":[\"3\",\"4\",\"12\",\"18\"],\"police_station\":[\"28\",\"39\",\"110\",\"159\"]}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '7', 'OUTCOME', 'Indicator Number', 2, 'A', '2020-02-18 10:08:51', '2020-02-18 10:08:51', '[\"26\",\"28\"]', 'Indicator Statement', 2, 'Assumption', 22, 31, 31, 27, 24, '2017', '2018', 'Source', 'Methodology', 5, '{\"district\":[\"3\",\"4\",\"12\",\"18\"],\"police_station\":[\"28\",\"39\",\"110\",\"159\"]}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '7', 'IMPACT', 'w', 2, 'A', '2020-02-18 12:02:25', '2020-02-18 12:02:25', '[\"23\",\"25\"]', 'w', 2, 'w', 22, 31, 29, 28, 25, '2016', 'w', 'w', 'w', 13, '{\"district\":null,\"police_station\":null}', '2020', 'SUMMATION', '500', NULL, NULL, NULL, NULL, NULL),
(13, '7', 'OUTPUT', 'aqs', 2, 'A', '2020-02-19 10:59:43', '2020-02-19 10:59:43', '[\"29\",\"30\",\"31\"]', 'aswe', 2, 'weqwewqe', 22, 31, 31, 28, 25, '2018', 'wesd', 'sdads', 'ewqeqwe', 8, '{\"district\":[\"6\",\"11\"],\"police_station\":[\"54\",\"103\"]}', '2020', 'CUMULATIVE', '5', NULL, NULL, NULL, NULL, NULL),
(14, '5', 'OUTPUT', 'w', 2, 'A', '2020-02-19 11:31:15', '2020-02-19 11:31:15', '[\"37\",\"39\"]', 'q', 1, 'qwssad', 20, 28, 39, 36, 33, '2018', 'wsdadasd', 'sdas', 'sadsd', 5, '{\"district\":null,\"police_station\":null}', '2020', 'SUMMATION', '14', '[\"PDF\",\"DOC\"]', '[\"DOC\"]', '[\"PDF\",\"DOC\"]', 'null', '[\"PDF\",\"DOC\"]'),
(15, '5', 'OUTPUT', 'q', 2, 'A', '2020-02-19 13:35:04', '2020-02-19 13:35:04', '[\"37\",\"38\",\"39\",\"40\"]', 'q', 1, 'qq', 20, 29, 39, 36, 33, '2018', 'qqq', 'qq', 'qq', 1, '{\"district\":[\"14\"],\"police_station\":[\"127\"]}', '2019', 'SUMMATION', '15', '[\"PDF\"]', '[\"PDF\"]', '[\"PDF\",\"DOC\"]', '[\"PDF\"]', '[\"PDF\",\"DOC\"]');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicator_registration_files`
--

INSERT INTO `indicator_registration_files` (`id`, `indicator_registration_id`, `store_by`, `file_section`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 15, 2, 'DETAILS_FRAMEWORK_FILE', '1.pdf', 'uploads/indicator_registration/19-02-20/073430PM_90337163521582140870.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(2, 15, 2, 'DETAILS_FRAMEWORK_FILE', '2.pdf', 'uploads/indicator_registration/19-02-20/073430PM_78336506161582140870.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(3, 15, 2, 'DETAILS_FRAMEWORK_FILE', '3.pdf', 'uploads/indicator_registration/19-02-20/073430PM_55948904731582140870.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(4, 15, 2, 'ME_PLAN_FILE', '3.pdf', 'uploads/indicator_registration/19-02-20/073434PM_75714217551582140874.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(5, 15, 2, 'ME_PLAN_FILE', 'mozilla.pdf', 'uploads/indicator_registration/19-02-20/073434PM_96845326261582140874.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(6, 15, 2, 'METHODOLOGY_NOTE_FILE', '1.pdf', 'uploads/indicator_registration/19-02-20/073439PM_41810972591582140879.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(7, 15, 2, 'METHODOLOGY_NOTE_FILE', '3.pdf', 'uploads/indicator_registration/19-02-20/073440PM_46952543161582140880.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(8, 15, 2, 'SMART_GUIDE_FILE', 'mozilla.pdf', 'uploads/indicator_registration/19-02-20/073443PM_28055345981582140883.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(9, 15, 2, 'SDG_RELEVANCE_FILE', '1.pdf', 'uploads/indicator_registration/19-02-20/073449PM_73688692331582140889.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(10, 15, 2, 'SDG_RELEVANCE_FILE', '2.pdf', 'uploads/indicator_registration/19-02-20/073449PM_12870511871582140889.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(11, 15, 2, 'SDG_RELEVANCE_FILE', '3.pdf', 'uploads/indicator_registration/19-02-20/073449PM_65614541331582140889.pdf', '2020-02-19 13:35:05', '2020-02-19 13:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `indicator_reg_milestone`
--

CREATE TABLE `indicator_reg_milestone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `milestone_year` int(191) DEFAULT NULL,
  `milestone_planned` varchar(191) DEFAULT NULL,
  `milestone_source` varchar(191) DEFAULT NULL,
  `milestone_rationale` varchar(191) DEFAULT NULL,
  `milestone_last_update` varchar(191) DEFAULT NULL,
  `milestone_revision_last_approved` varchar(191) DEFAULT NULL,
  `milestone_remarks` varchar(191) DEFAULT NULL,
  `indicator_registration_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicator_reg_milestone`
--

INSERT INTO `indicator_reg_milestone` (`id`, `milestone_year`, `milestone_planned`, `milestone_source`, `milestone_rationale`, `milestone_last_update`, `milestone_revision_last_approved`, `milestone_remarks`, `indicator_registration_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(16, 2014, '1', '1', '1', '02/19/2020', 'wewqe', 'DSASD', 13, 2, 'A', '2020-02-19 10:59:43', '2020-02-19 10:59:43'),
(17, 2015, '2', '2', '3', '02/17/2020', 'w', 'SAD', 13, 2, 'A', '2020-02-19 10:59:43', '2020-02-19 10:59:43'),
(18, 2016, '3', '3', '4', '02/15/2020', 'dssd', 'ASD', 13, 2, 'A', '2020-02-19 10:59:43', '2020-02-19 10:59:43'),
(19, 2017, '4', '4', '2', '02/24/2020', 'A', 'ASD', 13, 2, 'A', '2020-02-19 10:59:43', '2020-02-19 10:59:43'),
(20, 2018, '5', '5', '3', '02/01/2020', 'SDASD', 'SAD', 13, 2, 'A', '2020-02-19 10:59:43', '2020-02-19 10:59:43'),
(21, 2014, '1', '3', '3', '02/11/2020', '3', '34', 14, 2, 'A', '2020-02-19 11:31:15', '2020-02-19 11:31:15'),
(22, 2015, '2', '2', '43', '02/19/2020', '34', '4', 14, 2, 'A', '2020-02-19 11:31:15', '2020-02-19 11:31:15'),
(23, 2016, '3', '4', '3', '02/26/2020', '3234', '231', 14, 2, 'A', '2020-02-19 11:31:15', '2020-02-19 11:31:15'),
(24, 2017, '3', '34', '3', '02/28/2020', '234', '122', 14, 2, 'A', '2020-02-19 11:31:15', '2020-02-19 11:31:15'),
(25, 2018, '5', '3', '4', '02/23/2020', '234', '23', 14, 2, 'A', '2020-02-19 11:31:15', '2020-02-19 11:31:15'),
(26, 2014, '1', '3', '53', '02/20/2020', 'er', 'er', 15, 2, 'A', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(27, 2015, '2', '3', '43', '02/27/2020', 'er', 'er', 15, 2, 'A', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(28, 2016, '3', 'r', 'ewr', '02/12/2020', 'ewr', 'er', 15, 2, 'A', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(29, 2017, '4', 'ewr3432', 'er', '02/20/2020', 'ewr', 'er', 15, 2, 'A', '2020-02-19 13:35:05', '2020-02-19 13:35:05'),
(30, 2018, '5', 'ewr', 'rwer', '02/12/2020', 'ewr', 'er', 15, 2, 'A', '2020-02-19 13:35:05', '2020-02-19 13:35:05');

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

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_03_222005_create_tasks_table', 1),
(5, '2019_11_17_170617_create_programs_table', 1),
(6, '2019_11_17_173314_create_thematics_table', 1),
(7, '2019_11_17_173623_create_donors_table', 1),
(8, '2019_11_19_161552_create_support_function_table', 1),
(9, '2019_11_19_161818_create_document_type_table', 1),
(10, '2019_11_19_192048_create_study_archive_table', 1),
(11, '2019_11_20_005405_create_study_archives_thematic_area_table', 1),
(12, '2019_11_20_010048_create_study_archive_files_table', 1),
(13, '2019_11_22_173125_create_document_archive_table', 1),
(14, '2019_11_22_173740_create_document_archive_files_table', 1),
(15, '2019_11_23_080323_create_learning_action_archive_table', 1),
(16, '2019_11_23_080455_create_learning_action_archive_files_table', 1),
(17, '2019_11_23_080634_create_learning_action_archive_thematic_table', 1),
(18, '2020_02_01_145917_create_indicator_outcome_table', 1),
(19, '2020_02_01_154253_create_sdg_goal_table', 1),
(20, '2020_02_01_154319_create_sdg_indicator_table', 1),
(21, '2020_02_08_164738_create_spa_owner_table', 1),
(22, '2020_02_08_174015_create_location_table', 2),
(23, '2020_02_09_161817_create-division_table', 3),
(24, '2020_02_09_163242_create_districts_table', 4),
(25, '2020_02_11_170005_create_pillar_table', 5),
(26, '2020_02_11_170226_create_pillar_details_table', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(5, 'pillar 2', '2', 2, 'A', '2020-02-16 14:07:00', '2020-02-17 10:27:14'),
(7, 'Pillar 1', '1', 2, 'A', '2020-02-16 15:19:14', '2020-02-17 10:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `pillar_details`
--

CREATE TABLE `pillar_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IMPACT',
  `statement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(23, 'IMPACT', 'pillar 1 impact statement1', '1.1', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(24, 'IMPACT', 'pillar 1 impact statement2', '1.2', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(25, 'IMPACT', 'pillar 1 impact statement3', '1.3', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(26, 'OUTCOME', 'pillar 1 outcome statement1', '1.1', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(27, 'OUTCOME', 'pillar 1 outcome statement2', '1.2', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(28, 'OUTCOME', 'pillar 1 outcome statement3', '1.3', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(29, 'OUTPUT', 'pillar 1 output statement1', '1.1', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(30, 'OUTPUT', 'pillar 1 output statement2', '1.2', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(31, 'OUTPUT', 'pillar 1 output statement3', '1.3', 2, 7, 'A', '2020-02-17 10:25:19', '2020-02-17 10:25:27'),
(32, 'IMPACT', 'pillar 2 Impact Statement 1', '2.1', 2, 5, 'A', '2020-02-17 10:27:14', '2020-02-17 10:27:14'),
(33, 'IMPACT', 'pillar 2 Impact Statement 2', '2.1', 2, 5, 'A', '2020-02-17 10:27:14', '2020-02-17 10:27:14'),
(34, 'IMPACT', 'pillar 2 Impact Statement 3', '2.3', 2, 5, 'A', '2020-02-17 10:27:14', '2020-02-17 10:27:14'),
(35, 'OUTCOME', 'pillar 2 Outcome Statement 1', '2.1', 2, 5, 'A', '2020-02-17 10:27:14', '2020-02-17 10:27:14'),
(36, 'OUTCOME', 'pillar 2 Outcome Statement 2', '2.2', 2, 5, 'A', '2020-02-17 10:27:15', '2020-02-17 10:27:15'),
(37, 'OUTPUT', 'pillar 2 Output Statement 1', '2.1', 2, 5, 'A', '2020-02-17 10:27:15', '2020-02-17 10:27:15'),
(38, 'OUTPUT', 'pillar 2 Output Statement 2', '2.2', 2, 5, 'A', '2020-02-17 10:27:15', '2020-02-17 10:27:15'),
(39, 'OUTPUT', 'pillar 2 Output Statement 3', '2.3', 2, 5, 'A', '2020-02-17 10:27:15', '2020-02-17 10:27:15'),
(40, 'OUTPUT', 'pillar 2 Output Statement 4', '2.4', 2, 5, 'A', '2020-02-17 10:27:15', '2020-02-17 10:27:15');

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
(1, 'Program-19:12:34', 'OTHERS', 'SUPPORT_FUNCTION', 'Quo modi omnis ipsam fugiat quis earum aspernatur.', 7, 'A', NULL, NULL),
(2, 'Program-23:14:52', 'BRAC', 'SUPPORT_FUNCTION', 'Et odit voluptatum et blanditiis.', 2, 'A', NULL, NULL),
(3, 'Program-11:24:57', 'BRAC', 'PROGRAM', 'Odio inventore culpa velit consequatur dolor mollitia.', 5, 'A', NULL, NULL),
(4, 'Program-19:21:36', 'OTHERS', 'SUPPORT_FUNCTION', 'Architecto architecto vero ut dolorem deserunt ducimus quidem.', 9, 'A', NULL, NULL),
(5, 'Program-16:17:53', 'DEVELOPMENT', 'PROGRAM', 'Sed qui omnis necessitatibus est.', 9, 'A', NULL, NULL),
(6, 'Program-09:49:33', 'OTHERS', 'SUPPORT_FUNCTION', 'Deserunt occaecati sint aperiam sapiente saepe et ea.', 3, 'A', NULL, NULL),
(7, 'Program-15:48:42', 'OTHERS', 'PROGRAM', 'Officia veniam voluptatem in molestiae ut.', 4, 'A', NULL, NULL),
(8, 'Program-00:13:37', 'DEVELOPMENT', 'PROGRAM', 'Delectus ut non nobis repudiandae odit.', 10, 'A', NULL, NULL),
(9, 'Program-02:49:59', 'OTHERS', 'PROGRAM', 'Occaecati quasi non amet voluptatem.', 8, 'A', NULL, NULL),
(10, 'Program-21:32:02', 'DEVELOPMENT', 'SUPPORT_FUNCTION', 'Dolores facilis recusandae modi eaque.', 9, 'A', NULL, NULL),
(11, 'Program-08:12:06', 'BRAC', 'PROGRAM', 'Perferendis quisquam et sunt molestias cum ut velit est.', 3, 'A', NULL, NULL),
(12, 'Program-14:33:26', 'OTHERS', 'SUPPORT_FUNCTION', 'Possimus id ipsam dolore veritatis.', 3, 'A', NULL, NULL),
(13, 'Program-00:18:50', 'CROSS', 'SUPPORT_FUNCTION', 'Laudantium rerum nostrum sed soluta et.', 6, 'A', NULL, NULL),
(14, 'Program-20:05:34', 'OTHERS', 'PROGRAM', 'Aut omnis ut est nostrum dolorum.', 9, 'A', NULL, NULL),
(15, 'Program-21:15:59', 'DEVELOPMENT', 'SUPPORT_FUNCTION', 'Perferendis qui sit debitis id perspiciatis porro voluptate.', 9, 'A', NULL, NULL),
(16, 'Program-10:33:42', 'DEVELOPMENT', 'SUPPORT_FUNCTION', 'Et laudantium accusantium ipsum ullam.', 4, 'A', NULL, NULL),
(17, 'Program-03:07:55', 'BRAC', 'PROGRAM', 'Hic quia nisi error dolorum ipsum aliquam.', 6, 'A', NULL, NULL),
(18, 'Program-10:57:49', 'OTHERS', 'SUPPORT_FUNCTION', 'Voluptate occaecati et cupiditate id autem sed.', 3, 'A', NULL, NULL),
(19, 'Program-19:18:58', 'OTHERS', 'PROGRAM', 'Eum architecto rem vitae voluptatibus cupiditate.', 8, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result_entry`
--

CREATE TABLE `result_entry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `baseline_year` varchar(191) NOT NULL,
  `program_id` bigint(20) UNSIGNED DEFAULT NULL,
  `formula` varchar(191) NOT NULL DEFAULT 'PROGRAM',
  `achievement_total` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_entry`
--

INSERT INTO `result_entry` (`id`, `baseline_year`, `program_id`, `formula`, `achievement_total`, `user_id`, `created_at`, `updated_at`) VALUES
(7, '2020', 1, 'SUMMATION', '147', 2, '2020-02-20 11:57:17', '2020-02-20 11:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `result_entry_details`
--

CREATE TABLE `result_entry_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(191) DEFAULT NULL,
  `period_type` varchar(191) DEFAULT NULL,
  `achieved` varchar(191) DEFAULT NULL,
  `source` varchar(191) DEFAULT NULL,
  `methodology` varchar(191) DEFAULT NULL,
  `date_of_last_update` varchar(191) DEFAULT NULL,
  `remarks` varchar(191) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `result_entry_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_entry_details`
--

INSERT INTO `result_entry_details` (`id`, `year`, `period_type`, `achieved`, `source`, `methodology`, `date_of_last_update`, `remarks`, `user_id`, `result_entry_id`, `created_at`, `updated_at`) VALUES
(6, '2016', 'ANNUAL', '34', NULL, NULL, '02/20/2020', '324', 2, 7, '2020-02-20 11:57:17', '2020-02-20 11:57:17'),
(7, '2017', 'ANNUAL', '4', NULL, NULL, '02/10/2020', '34', 2, 7, '2020-02-20 11:57:17', '2020-02-20 11:57:17'),
(8, '2018', 'ANNUAL', '32', '34', '34', '02/03/2020', '34', 2, 7, '2020-02-20 11:57:17', '2020-02-20 11:57:17'),
(9, '2019', 'HALF_YEARLY', '43', '3', NULL, '02/17/2020', NULL, 2, 7, '2020-02-20 11:57:17', '2020-02-20 11:57:17'),
(10, '2020', 'ANNUAL', '34', NULL, NULL, '02/11/2020', 'e', 2, 7, '2020-02-20 11:57:18', '2020-02-20 11:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sdg_goals`
--

CREATE TABLE `sdg_goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdg_goals`
--

INSERT INTO `sdg_goals` (`id`, `name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Goal 1', 2, 'A', '2020-02-16 11:29:42', '2020-02-17 10:20:50'),
(22, 'Goal 2', 2, 'A', '2020-02-17 10:21:51', '2020-02-17 10:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `sdg_indicators`
--

CREATE TABLE `sdg_indicators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdg_indicators`
--

INSERT INTO `sdg_indicators` (`id`, `number`, `statement`, `target`, `goal_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(27, '300', 'sdg statement 3', '3000', 20, 2, 'A', '2020-02-17 10:20:50', '2020-02-17 10:20:50'),
(28, '200', 'sdg statement 2', '2000', 20, 2, 'A', '2020-02-17 10:20:50', '2020-02-17 10:20:50'),
(29, '100', 'sdg statement 1', '1000', 20, 2, 'A', '2020-02-17 10:20:51', '2020-02-17 10:20:51'),
(30, '30', 'Goal 2 statement 3', '300', 22, 2, 'A', '2020-02-17 10:21:51', '2020-02-17 10:21:51'),
(31, '20', 'Goal 2 statement 2', '`200', 22, 2, 'A', '2020-02-17 10:21:52', '2020-02-17 10:21:52'),
(32, '10', 'Goal 2 statement 1', '100', 22, 2, 'A', '2020-02-17 10:21:52', '2020-02-17 10:21:52');

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
(1, 'DFID & DFAT', 'Quis et adipisci non deserunt repellendus.', 7, 'A', NULL, NULL),
(2, 'BRAC Only', 'Reiciendis aut sint tempore ipsam.', 10, 'A', NULL, NULL),
(3, 'DFAT', 'Praesentium minima consequatur beatae voluptatem cupiditate quia.', 8, 'A', NULL, NULL);

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
(1, 'Support-10:42:25', 'Eos quasi aliquam eaque.', 2, 'A', NULL, NULL),
(2, 'Support-02:32:33', 'Et quis velit non ut.', 3, 'A', NULL, NULL),
(3, 'Support-09:17:32', 'Minima amet ut at nihil reprehenderit.', 9, 'A', NULL, NULL),
(4, 'Support-21:49:43', 'Occaecati qui qui beatae ab dignissimos eos odit.', 9, 'A', NULL, NULL),
(5, 'Support-07:36:56', 'Sequi magni aut autem.', 9, 'A', NULL, NULL),
(6, 'Support-16:34:14', 'Nostrum sit nobis hic incidunt est cum qui.', 9, 'A', NULL, NULL),
(7, 'Support-15:52:09', 'Distinctio neque vero explicabo vel.', 7, 'A', NULL, NULL),
(8, 'Support-11:41:04', 'Nihil voluptas voluptas recusandae asperiores expedita delectus omnis.', 10, 'A', NULL, NULL),
(9, 'Support-21:12:55', 'Dolorem sint modi minima sed enim dolore eligendi corporis.', 5, 'A', NULL, NULL),
(10, 'Support-05:04:04', 'Quae aliquam doloribus ullam asperiores ad.', 1, 'A', NULL, NULL);

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
(1, 'Thematics-00:42:12', 'Corrupti est occaecati officia omnis est eum.', 10, 'A', NULL, NULL),
(2, 'Thematics-14:14:27', 'Itaque autem dolor maxime eius distinctio esse.', 10, 'A', NULL, NULL),
(3, 'Thematics-03:06:27', 'Et laudantium rerum sit excepturi consequatur.', 3, 'A', NULL, NULL),
(4, 'Thematics-00:14:12', 'Enim quaerat accusamus sit cupiditate nihil est porro atque.', 8, 'A', NULL, NULL),
(5, 'Thematics-13:43:39', 'Voluptatem saepe dolorem exercitationem voluptatem eum.', 2, 'A', NULL, NULL),
(6, 'Thematics-23:47:07', 'Optio et dolores corrupti assumenda sint et esse.', 9, 'A', NULL, NULL),
(7, 'Thematics-01:19:05', 'Nesciunt officia omnis reprehenderit qui.', 6, 'A', NULL, NULL),
(8, 'Thematics-02:12:37', 'Vero aut ipsum eligendi non.', 2, 'A', NULL, NULL),
(9, 'Thematics-20:44:58', 'Quaerat repellat sapiente ab iure in rerum repudiandae.', 6, 'A', NULL, NULL),
(10, 'Thematics-16:58:51', 'Expedita autem molestiae molestiae ipsum labore.', 8, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`, `url`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd'),
(311, 40, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd'),
(312, 40, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd'),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd'),
(314, 40, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd'),
(315, 40, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd'),
(316, 40, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd'),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd'),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd'),
(319, 41, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd'),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd'),
(321, 41, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd'),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd'),
(323, 42, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd'),
(324, 42, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd'),
(325, 42, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd'),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd'),
(327, 42, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd'),
(328, 43, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd'),
(329, 43, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd'),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd'),
(331, 43, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd'),
(332, 43, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd'),
(333, 44, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd'),
(334, 44, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd'),
(335, 44, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd'),
(336, 44, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd'),
(337, 44, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd'),
(338, 44, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd'),
(339, 44, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd'),
(340, 44, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd'),
(341, 44, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd'),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd'),
(343, 44, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd'),
(344, 44, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd'),
(345, 45, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd'),
(346, 45, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd'),
(347, 45, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd'),
(348, 45, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd'),
(349, 45, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd'),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd'),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd'),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd'),
(354, 45, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd'),
(355, 45, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd'),
(356, 45, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd'),
(357, 45, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd'),
(358, 46, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd'),
(359, 46, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd'),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd'),
(361, 46, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd'),
(362, 46, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd'),
(363, 46, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd'),
(364, 46, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd'),
(365, 47, 'Savar', 'সাভার', 'savar.dhaka.gov.bd'),
(366, 47, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd'),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd'),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd'),
(369, 47, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd'),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd'),
(371, 48, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd'),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd'),
(373, 48, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd'),
(374, 48, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd'),
(375, 48, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd'),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd'),
(377, 49, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd'),
(378, 49, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd'),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd'),
(380, 49, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd'),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd'),
(382, 50, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd'),
(383, 50, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd'),
(384, 50, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd'),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd'),
(386, 51, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd'),
(387, 51, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd'),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd'),
(389, 51, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd'),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd'),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd'),
(392, 52, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd'),
(393, 52, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd'),
(394, 52, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd'),
(395, 52, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd'),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd'),
(397, 52, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd'),
(398, 52, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd'),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd'),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd'),
(401, 53, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd'),
(402, 53, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd'),
(403, 53, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd'),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd'),
(405, 54, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd'),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd'),
(407, 54, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd'),
(408, 54, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd'),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd'),
(410, 54, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd'),
(411, 54, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd'),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd'),
(413, 54, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd'),
(414, 54, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd'),
(415, 54, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd'),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd'),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd'),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd'),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd'),
(420, 55, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd'),
(421, 55, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd'),
(422, 56, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd'),
(423, 56, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd'),
(424, 56, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd'),
(425, 56, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd'),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd'),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd'),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd'),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd'),
(430, 57, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd'),
(431, 57, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd'),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd'),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd'),
(434, 57, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd'),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 58, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd'),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd'),
(438, 58, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd'),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd'),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd'),
(441, 59, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd'),
(442, 59, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd'),
(443, 59, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd'),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd'),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd'),
(446, 59, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd'),
(447, 59, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd'),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd'),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd'),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd'),
(451, 60, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd'),
(452, 60, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd'),
(453, 60, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd'),
(454, 60, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd'),
(455, 60, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd'),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd'),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd'),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd'),
(459, 61, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd'),
(460, 61, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd'),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd'),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd'),
(463, 62, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd'),
(464, 62, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd'),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd'),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd'),
(467, 62, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd'),
(468, 62, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd'),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd'),
(470, 62, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd'),
(471, 62, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd'),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd'),
(473, 62, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd'),
(474, 62, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd'),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd'),
(476, 63, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd'),
(477, 63, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd'),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd'),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd'),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd'),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd'),
(482, 64, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd'),
(483, 64, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd'),
(484, 64, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd'),
(485, 64, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd'),
(486, 64, 'Madan', 'মদন', 'madan.netrokona.gov.bd'),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd'),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd'),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd'),
(490, 64, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd'),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd');

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
(1, 'N/A', 'sadmin@user.com', NULL, '$2y$10$IkTU6nBnoHjIPy17nOdCmu8Ux9CdKp0r6vFEqDoI02si2ZbbdZpLC', 'super-admin', 'A', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Admin User', 'admin@user.com', NULL, '$2y$10$5WU75mgMafimlT2YIPm0i.2DCO1xOE3FTek69dQt4FqTakOzc7saK', 'admin', 'A', 1, NULL, NULL, NULL, '2020-02-19 14:02:12', 1),
(3, 'Supervisor', 'supervisor@user.com', NULL, '$2y$10$WykTOhyelfqnLLuml7Um2.1GML4Ibcibq0XYeTkARSBvTECE50O4e', 'supervisor', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(4, 'General', 'user@user.com', NULL, '$2y$10$EcdGbktbm0GjfooycmidPeKN/Kve17SYx8up2JowgVDh7aYDuQjku', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(5, 'Prof. Lorenzo Block DVM', 'ashleigh22@padberg.biz', NULL, '$2y$10$ij73ZFaZGH3v2ZVeDfqtzuhDii7HdiFsqupYu./3cKnbG6IhOunjG', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(6, 'Maxie Miller', 'ethan.stroman@hotmail.com', NULL, '$2y$10$crGk6L4DSy6mo6u6pz8ieeq0oz6p2NdhCvOIGPh.aC/ka4rViYHk6', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(7, 'Ressie Ondricka', 'nupton@yahoo.com', NULL, '$2y$10$HvRcnkAKnZ27sBdw/H4zMOcIwRxyaiqfGmLRE7NyntSCT0lvu6Du6', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(8, 'Meggie Keeling', 'sarina.rau@mayert.net', NULL, '$2y$10$dAHlgl3jkM5SAaObjsjliOCN2QILD2f7eSAyeV5Ze8d8YuBrixDCW', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(9, 'Rudy Bernier', 'vmills@gmail.com', NULL, '$2y$10$HAvfbmNTHMlnrWEeAqGx1OkuyiggIB36K.p2MCk3yLTClvAkK2nra', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(10, 'Prof. Louisa Yundt', 'ebert.justus@hotmail.com', NULL, '$2y$10$E4TiXpygTFi3nVApRWK9BepTSRyjfK4R9mc8TzZNpgyTufeCZGSji', 'registered', 'A', 2, NULL, NULL, NULL, NULL, NULL),
(11, 'test', 'testw3@admin.com', NULL, '$2y$10$LIW24ZpOLLHH86HhVXpgh.gG2oJk/z.Sjq8gnrmrILWk05B/L/2Fq', 'registered', 'A', 1, NULL, NULL, '2020-02-19 13:58:45', '2020-02-19 13:58:45', NULL),
(12, 'sdsd', 'sdsdsd@teset.csd', NULL, '$2y$10$KH2q.XUIE7IBrLNuQTmtheY.LYJT31FaCW3GTSN5jtjOFKsntq2by', 'registered', 'A', 1, NULL, NULL, '2020-02-19 13:59:20', '2020-02-19 13:59:20', 19);

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
  ADD KEY `indicator_registration_files_store_by_foreign` (`store_by`),
  ADD KEY `indicator_registration_files_indicator_registration_foreign` (`indicator_registration_id`);

--
-- Indexes for table `indicator_reg_milestone`
--
ALTER TABLE `indicator_reg_milestone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicator_reg_milestone_user_id_foreign` (`user_id`),
  ADD KEY `indicator_reg_milestone_indicator_registration_id_foreign` (`indicator_registration_id`);

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
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_user_id_index` (`user_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `pillar_details_user_id_index` (`user_id`),
  ADD KEY `pillar_details_pillar_id_index` (`pillar_id`);

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
  ADD KEY `result_entry_details_user_id_foreign` (`user_id`),
  ADD KEY `result_entry_details_result_entry_id_foreign` (`result_entry_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdg_goals`
--
ALTER TABLE `sdg_goals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdg_goals_user_id_index` (`user_id`);

--
-- Indexes for table `sdg_indicators`
--
ALTER TABLE `sdg_indicators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdg_indicators_goal_id_index` (`goal_id`),
  ADD KEY `sdg_indicators_user_id_index` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_archive_files`
--
ALTER TABLE `document_archive_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indicator_outcomes`
--
ALTER TABLE `indicator_outcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indicator_registration`
--
ALTER TABLE `indicator_registration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `indicator_registration_files`
--
ALTER TABLE `indicator_registration_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `indicator_reg_milestone`
--
ALTER TABLE `indicator_reg_milestone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `learning_action_archive`
--
ALTER TABLE `learning_action_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learning_action_archive_files`
--
ALTER TABLE `learning_action_archive_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learning_action_thematics`
--
ALTER TABLE `learning_action_thematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pillars`
--
ALTER TABLE `pillars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pillar_details`
--
ALTER TABLE `pillar_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `result_entry`
--
ALTER TABLE `result_entry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result_entry_details`
--
ALTER TABLE `result_entry_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sdg_goals`
--
ALTER TABLE `sdg_goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sdg_indicators`
--
ALTER TABLE `sdg_indicators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `spa_owner`
--
ALTER TABLE `spa_owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `study_archive`
--
ALTER TABLE `study_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `study_archive_files`
--
ALTER TABLE `study_archive_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `study_thematics`
--
ALTER TABLE `study_thematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thematics`
--
ALTER TABLE `thematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- Constraints for table `indicator_reg_milestone`
--
ALTER TABLE `indicator_reg_milestone`
  ADD CONSTRAINT `indicator_reg_milestone_indicator_registration_id_foreign` FOREIGN KEY (`indicator_registration_id`) REFERENCES `indicator_registration` (`id`),
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
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
  ADD CONSTRAINT `sdg_indicators_goal_id_foreign` FOREIGN KEY (`goal_id`) REFERENCES `sdg_goals` (`id`),
  ADD CONSTRAINT `sdg_indicators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
