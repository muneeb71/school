-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 11:45 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'http://localhost/global_assets/images/user.png',
  `qouta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_combination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks_obtained` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elective_subjects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_cnic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `form_no`, `name`, `age`, `religion`, `nationality`, `domicile`, `phone`, `dob`, `gender`, `address`, `cnic`, `photo`, `qouta_name`, `group_name`, `subject_code`, `subject_combination`, `bus`, `roll_no`, `status`, `yop`, `marks_obtained`, `total_marks`, `percentage`, `grade`, `institution`, `board`, `elective_subjects`, `fathers_name`, `fathers_cnic`, `fathers_mobile`, `fathers_address`, `fathers_designation`, `guardian_name`, `guardian_cnic`, `guardian_mobile`, `guardian_address`, `guardian_designation`, `session`, `created_at`, `updated_at`) VALUES
(1, '4545465', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'acsasjciascakmq', '6111111', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', NULL, 'asdads', 'admitted', '2014', '11111', '111', '90', 'a', 'aksdhjsadj', 'adsads', 'asdads', 'asdasda', 'asdadsasd', '2366896', 'acsasjciascakmq', 'asddsa', 'asddsa', 'asdasd', 'asdads', 'ascihosicnaic', 'sicjcaicn', '2022-2023', '2022-07-12 11:37:07', '2022-07-12 11:37:07'),
(2, '44545', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'acsasjciascakmq', '6111111', 'http://localhost/global_assets/images/user.png', 'disable', 'Pre-engineering', '100', 'ppp-sss-sww', NULL, 'asdads', 'admitted', '2014', '11111', '111', '30', 'a', 'aksdhjsadj', 'adsads', 'asdads', 'asdasda', 'asdadsasd', '2366896', 'acsasjciascakmq', 'asddsa', 'asddsa', 'asdasd', 'asdads', 'ascihosicnaic', 'sicjcaicn', '2022-2023', '2022-07-12 11:42:05', '2022-07-12 11:42:05'),
(3, '4545465', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'acsasjciascakmq', '6111111', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', NULL, 'asdads', 'admitted', '2014', '11111', '111', '85', 'a', 'aksdhjsadj', 'adsads', 'asdads', 'asdasda', 'asdadsasd', '2366896', 'acsasjciascakmq', 'asddsa', 'asddsa', 'asdasd', 'asdads', 'ascihosicnaic', 'sicjcaicn', '2022-2023', '2022-07-12 11:42:10', '2022-07-12 11:42:10'),
(4, '4545465', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'acsasjciascakmq', '6111111', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', NULL, 'asdads', 'admitted', '2014', '11111', '111', '70', 'a', 'aksdhjsadj', 'adsads', 'asdads', 'asdasda', 'asdadsasd', '2366896', 'acsasjciascakmq', 'asddsa', 'asddsa', 'asdasd', 'asdads', 'ascihosicnaic', 'sicjcaicn', '2022-2023', '2022-07-12 11:42:55', '2022-07-12 11:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'O-', '2022-07-07 18:13:16', '2022-07-07 18:13:16'),
(2, 'O+', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(3, 'A+', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(4, 'A-', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(5, 'B+', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(6, 'B-', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(7, 'AB+', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(8, 'AB-', '2022-07-07 18:13:17', '2022-07-07 18:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_class_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_copies` int(11) DEFAULT NULL,
  `issued_copies` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_requests`
--

CREATE TABLE `book_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `returned` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_types`
--

CREATE TABLE `class_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_types`
--

INSERT INTO `class_types` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Pre-Engg', 'PE', NULL, NULL),
(2, 'Pre-Med', 'PM', NULL, NULL),
(3, 'G.Sc', 'GS', NULL, NULL),
(4, 'Arts', 'HA', NULL, NULL),
(5, 'I.Com', 'IC', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disciplines`
--

CREATE TABLE `disciplines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dorms`
--

CREATE TABLE `dorms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dorms`
--

INSERT INTO `dorms` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Faith Hostel', NULL, NULL, NULL),
(2, 'Peace Hostel', NULL, NULL, NULL),
(3, 'Grace Hostel', NULL, NULL, NULL),
(4, 'Success Hostel', NULL, NULL, NULL),
(5, 'Trust Hostel', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elective_combinations`
--

CREATE TABLE `elective_combinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `elective_combinations`
--

INSERT INTO `elective_combinations` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'PHY-CHEM-MATHS', '100', NULL, NULL),
(2, 'PHY-CHEM-BIO', '101', NULL, NULL),
(3, 'ACC-ECO-COMM-BSMTH', '102', NULL, NULL),
(4, 'STATS-MATHS-CS', '103', NULL, NULL),
(5, 'ECO/STATS-MATHS-CS', '104', NULL, NULL),
(6, 'PHY-MATHS-CS', '106', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` tinyint(4) NOT NULL,
  `year` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_records`
--

CREATE TABLE `exam_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `my_class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `total` int(11) DEFAULT NULL,
  `ave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_ave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `af` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_type_id` int(10) UNSIGNED DEFAULT NULL,
  `mark_from` tinyint(4) NOT NULL,
  `mark_to` tinyint(4) NOT NULL,
  `remark` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `class_type_id`, `mark_from`, `mark_to`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, 70, 100, 'Excellent', NULL, NULL),
(2, 'B', NULL, 60, 69, 'Very Good', NULL, NULL),
(3, 'C', NULL, 50, 59, 'Good', NULL, NULL),
(4, 'D', NULL, 45, 49, 'Pass', NULL, NULL),
(5, 'E', NULL, 40, 44, 'Poor', NULL, NULL),
(6, 'F', NULL, 0, 39, 'Fail', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pre-medical', NULL, NULL),
(2, 'Pre-engineering', NULL, NULL),
(3, 'General Science', NULL, NULL),
(4, 'Humanities', NULL, NULL),
(5, 'Commerce', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lgas`
--

CREATE TABLE `lgas` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lgas`
--

INSERT INTO `lgas` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aba North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(2, 1, 'Aba South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(3, 1, 'Arochukwu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(4, 1, 'Bende', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(5, 1, 'Ikwuano', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(6, 1, 'Isiala Ngwa North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(7, 1, 'Isiala Ngwa South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(8, 1, 'Isuikwuato', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(9, 1, 'Obi Ngwa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(10, 1, 'Ohafia', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(11, 1, 'Osisioma', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(12, 1, 'Ugwunagbo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(13, 1, 'Ukwa East', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(14, 1, 'Ukwa West', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(15, 1, 'Umuahia North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(16, 1, 'Umuahia South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(17, 1, 'Umu Nneochi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(18, 2, 'Demsa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(19, 2, 'Fufure', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(20, 2, 'Ganye', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(21, 2, 'Gayuk', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(22, 2, 'Gombi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(23, 2, 'Grie', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(24, 2, 'Hong', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(25, 2, 'Jada', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(26, 2, 'Larmurde', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(27, 2, 'Madagali', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(28, 2, 'Maiha', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(29, 2, 'Mayo Belwa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(30, 2, 'Michika', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(31, 2, 'Mubi North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(32, 2, 'Mubi South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(33, 2, 'Numan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(34, 2, 'Shelleng', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(35, 2, 'Song', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(36, 2, 'Toungo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(37, 2, 'Yola North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(38, 2, 'Yola South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(39, 3, 'Abak', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(40, 3, 'Eastern Obolo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(41, 3, 'Eket', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(42, 3, 'Esit Eket', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(43, 3, 'Essien Udim', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(44, 3, 'Etim Ekpo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(45, 3, 'Etinan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(46, 3, 'Ibeno', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(47, 3, 'Ibesikpo Asutan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(48, 3, 'Ibiono-Ibom', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(49, 3, 'Ika', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(50, 3, 'Ikono', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(51, 3, 'Ikot Abasi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(52, 3, 'Ikot Ekpene', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(53, 3, 'Ini', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(54, 3, 'Itu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(55, 3, 'Mbo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(56, 3, 'Mkpat-Enin', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(57, 3, 'Nsit-Atai', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(58, 3, 'Nsit-Ibom', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(59, 3, 'Nsit-Ubium', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(60, 3, 'Obot Akara', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(61, 3, 'Okobo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(62, 3, 'Onna', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(63, 3, 'Oron', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(64, 3, 'Oruk Anam', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(65, 3, 'Udung-Uko', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(66, 3, 'Ukanafun', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(67, 3, 'Uruan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(68, 3, 'Urue-Offong/Oruko', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(69, 3, 'Uyo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(70, 4, 'Aguata', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(71, 4, 'Anambra East', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(72, 4, 'Anambra West', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(73, 4, 'Anaocha', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(74, 4, 'Awka North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(75, 4, 'Awka South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(76, 4, 'Ayamelum', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(77, 4, 'Dunukofia', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(78, 4, 'Ekwusigo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(79, 4, 'Idemili North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(80, 4, 'Idemili South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(81, 4, 'Ihiala', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(82, 4, 'Njikoka', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(83, 4, 'Nnewi North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(84, 4, 'Nnewi South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(85, 4, 'Ogbaru', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(86, 4, 'Onitsha North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(87, 4, 'Onitsha South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(88, 4, 'Orumba North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(89, 4, 'Orumba South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(90, 4, 'Oyi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(91, 5, 'Alkaleri', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(92, 5, 'Bauchi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(93, 5, 'Bogoro', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(94, 5, 'Damban', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(95, 5, 'Darazo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(96, 5, 'Dass', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(97, 5, 'Gamawa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(98, 5, 'Ganjuwa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(99, 5, 'Giade', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(100, 5, 'Itas/Gadau', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(101, 5, 'Jama\'are', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(102, 5, 'Katagum', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(103, 5, 'Kirfi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(104, 5, 'Misau', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(105, 5, 'Ningi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(106, 5, 'Shira', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(107, 5, 'Tafawa Balewa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(108, 5, 'Toro', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(109, 5, 'Warji', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(110, 5, 'Zaki', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(111, 6, 'Brass', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(112, 6, 'Ekeremor', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(113, 6, 'Kolokuma/Opokuma', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(114, 6, 'Nembe', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(115, 6, 'Ogbia', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(116, 6, 'Sagbama', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(117, 6, 'Southern Ijaw', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(118, 6, 'Yenagoa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(119, 7, 'Agatu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(120, 7, 'Apa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(121, 7, 'Ado', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(122, 7, 'Buruku', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(123, 7, 'Gboko', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(124, 7, 'Guma', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(125, 7, 'Gwer East', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(126, 7, 'Gwer West', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(127, 7, 'Katsina-Ala', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(128, 7, 'Konshisha', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(129, 7, 'Kwande', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(130, 7, 'Logo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(131, 7, 'Makurdi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(132, 7, 'Obi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(133, 7, 'Ogbadibo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(134, 7, 'Ohimini', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(135, 7, 'Oju', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(136, 7, 'Okpokwu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(137, 7, 'Oturkpo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(138, 7, 'Tarka', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(139, 7, 'Ukum', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(140, 7, 'Ushongo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(141, 7, 'Vandeikya', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(142, 8, 'Abadam', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(143, 8, 'Askira/Uba', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(144, 8, 'Bama', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(145, 8, 'Bayo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(146, 8, 'Biu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(147, 8, 'Chibok', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(148, 8, 'Damboa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(149, 8, 'Dikwa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(150, 8, 'Gubio', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(151, 8, 'Guzamala', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(152, 8, 'Gwoza', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(153, 8, 'Hawul', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(154, 8, 'Jere', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(155, 8, 'Kaga', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(156, 8, 'Kala/Balge', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(157, 8, 'Konduga', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(158, 8, 'Kukawa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(159, 8, 'Kwaya Kusar', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(160, 8, 'Mafa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(161, 8, 'Magumeri', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(162, 8, 'Maiduguri', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(163, 8, 'Marte', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(164, 8, 'Mobbar', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(165, 8, 'Monguno', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(166, 8, 'Ngala', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(167, 8, 'Nganzai', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(168, 8, 'Shani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(169, 9, 'Abi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(170, 9, 'Akamkpa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(171, 9, 'Akpabuyo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(172, 9, 'Bakassi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(173, 9, 'Bekwarra', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(174, 9, 'Biase', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(175, 9, 'Boki', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(176, 9, 'Calabar Municipal', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(177, 9, 'Calabar South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(178, 9, 'Etung', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(179, 9, 'Ikom', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(180, 9, 'Obanliku', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(181, 9, 'Obubra', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(182, 9, 'Obudu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(183, 9, 'Odukpani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(184, 9, 'Ogoja', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(185, 9, 'Yakuur', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(186, 9, 'Yala', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(187, 10, 'Aniocha North', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(188, 10, 'Aniocha South', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(189, 10, 'Bomadi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(190, 10, 'Burutu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(191, 10, 'Ethiope East', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(192, 10, 'Ethiope West', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(193, 10, 'Ika North East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(194, 10, 'Ika South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(195, 10, 'Isoko North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(196, 10, 'Isoko South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(197, 10, 'Ndokwa East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(198, 10, 'Ndokwa West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(199, 10, 'Okpe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(200, 10, 'Oshimili North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(201, 10, 'Oshimili South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(202, 10, 'Patani', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(203, 10, 'Sapele, Delta', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(204, 10, 'Udu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(205, 10, 'Ughelli North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(206, 10, 'Ughelli South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(207, 10, 'Ukwuani', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(208, 10, 'Uvwie', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(209, 10, 'Warri North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(210, 10, 'Warri South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(211, 10, 'Warri South West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(212, 11, 'Abakaliki', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(213, 11, 'Afikpo North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(214, 11, 'Afikpo South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(215, 11, 'Ebonyi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(216, 11, 'Ezza North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(217, 11, 'Ezza South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(218, 11, 'Ikwo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(219, 11, 'Ishielu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(220, 11, 'Ivo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(221, 11, 'Izzi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(222, 11, 'Ohaozara', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(223, 11, 'Ohaukwu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(224, 11, 'Onicha', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(225, 12, 'Akoko-Edo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(226, 12, 'Egor', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(227, 12, 'Esan Central', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(228, 12, 'Esan North-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(229, 12, 'Esan South-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(230, 12, 'Esan West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(231, 12, 'Etsako Central', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(232, 12, 'Etsako East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(233, 12, 'Etsako West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(234, 12, 'Igueben', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(235, 12, 'Ikpoba Okha', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(236, 12, 'Orhionmwon', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(237, 12, 'Oredo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(238, 12, 'Ovia North-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(239, 12, 'Ovia South-West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(240, 12, 'Owan East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(241, 12, 'Owan West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(242, 12, 'Uhunmwonde', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(243, 13, 'Ado Ekiti', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(244, 13, 'Efon', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(245, 13, 'Ekiti East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(246, 13, 'Ekiti South-West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(247, 13, 'Ekiti West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(248, 13, 'Emure', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(249, 13, 'Gbonyin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(250, 13, 'Ido Osi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(251, 13, 'Ijero', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(252, 13, 'Ikere', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(253, 13, 'Ikole', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(254, 13, 'Ilejemeje', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(255, 13, 'Irepodun/Ifelodun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(256, 13, 'Ise/Orun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(257, 13, 'Moba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(258, 13, 'Oye', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(259, 14, 'Aninri', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(260, 14, 'Awgu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(261, 14, 'Enugu East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(262, 14, 'Enugu North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(263, 14, 'Enugu South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(264, 14, 'Ezeagu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(265, 14, 'Igbo Etiti', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(266, 14, 'Igbo Eze North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(267, 14, 'Igbo Eze South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(268, 14, 'Isi Uzo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(269, 14, 'Nkanu East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(270, 14, 'Nkanu West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(271, 14, 'Nsukka', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(272, 14, 'Oji River', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(273, 14, 'Udenu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(274, 14, 'Udi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(275, 14, 'Uzo Uwani', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(276, 15, 'Abaji', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(277, 15, 'Bwari', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(278, 15, 'Gwagwalada', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(279, 15, 'Kuje', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(280, 15, 'Kwali', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(281, 15, 'Municipal Area Council', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(282, 16, 'Akko', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(283, 16, 'Balanga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(284, 16, 'Billiri', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(285, 16, 'Dukku', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(286, 16, 'Funakaye', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(287, 16, 'Gombe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(288, 16, 'Kaltungo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(289, 16, 'Kwami', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(290, 16, 'Nafada', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(291, 16, 'Shongom', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(292, 16, 'Yamaltu/Deba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(293, 17, 'Aboh Mbaise', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(294, 17, 'Ahiazu Mbaise', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(295, 17, 'Ehime Mbano', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(296, 17, 'Ezinihitte', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(297, 17, 'Ideato North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(298, 17, 'Ideato South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(299, 17, 'Ihitte/Uboma', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(300, 17, 'Ikeduru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(301, 17, 'Isiala Mbano', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(302, 17, 'Isu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(303, 17, 'Mbaitoli', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(304, 17, 'Ngor Okpala', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(305, 17, 'Njaba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(306, 17, 'Nkwerre', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(307, 17, 'Nwangele', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(308, 17, 'Obowo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(309, 17, 'Oguta', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(310, 17, 'Ohaji/Egbema', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(311, 17, 'Okigwe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(312, 17, 'Orlu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(313, 17, 'Orsu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(314, 17, 'Oru East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(315, 17, 'Oru West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(316, 17, 'Owerri Municipal', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(317, 17, 'Owerri North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(318, 17, 'Owerri West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(319, 17, 'Unuimo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(320, 18, 'Auyo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(321, 18, 'Babura', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(322, 18, 'Biriniwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(323, 18, 'Birnin Kudu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(324, 18, 'Buji', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(325, 18, 'Dutse', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(326, 18, 'Gagarawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(327, 18, 'Garki', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(328, 18, 'Gumel', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(329, 18, 'Guri', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(330, 18, 'Gwaram', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(331, 18, 'Gwiwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(332, 18, 'Hadejia', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(333, 18, 'Jahun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(334, 18, 'Kafin Hausa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(335, 18, 'Kazaure', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(336, 18, 'Kiri Kasama', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(337, 18, 'Kiyawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(338, 18, 'Kaugama', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(339, 18, 'Maigatari', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(340, 18, 'Malam Madori', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(341, 18, 'Miga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(342, 18, 'Ringim', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(343, 18, 'Roni', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(344, 18, 'Sule Tankarkar', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(345, 18, 'Taura', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(346, 18, 'Yankwashi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(347, 19, 'Birnin Gwari', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(348, 19, 'Chikun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(349, 19, 'Giwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(350, 19, 'Igabi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(351, 19, 'Ikara', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(352, 19, 'Jaba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(353, 19, 'Jema\'a', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(354, 19, 'Kachia', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(355, 19, 'Kaduna North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(356, 19, 'Kaduna South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(357, 19, 'Kagarko', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(358, 19, 'Kajuru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(359, 19, 'Kaura', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(360, 19, 'Kauru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(361, 19, 'Kubau', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(362, 19, 'Kudan', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(363, 19, 'Lere', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(364, 19, 'Makarfi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(365, 19, 'Sabon Gari', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(366, 19, 'Sanga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(367, 19, 'Soba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(368, 19, 'Zangon Kataf', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(369, 19, 'Zaria', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(370, 20, 'Ajingi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(371, 20, 'Albasu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(372, 20, 'Bagwai', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(373, 20, 'Bebeji', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(374, 20, 'Bichi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(375, 20, 'Bunkure', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(376, 20, 'Dala', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(377, 20, 'Dambatta', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(378, 20, 'Dawakin Kudu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(379, 20, 'Dawakin Tofa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(380, 20, 'Doguwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(381, 20, 'Fagge', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(382, 20, 'Gabasawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(383, 20, 'Garko', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(384, 20, 'Garun Mallam', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(385, 20, 'Gaya', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(386, 20, 'Gezawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(387, 20, 'Gwale', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(388, 20, 'Gwarzo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(389, 20, 'Kabo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(390, 20, 'Kano Municipal', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(391, 20, 'Karaye', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(392, 20, 'Kibiya', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(393, 20, 'Kiru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(394, 20, 'Kumbotso', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(395, 20, 'Kunchi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(396, 20, 'Kura', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(397, 20, 'Madobi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(398, 20, 'Makoda', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(399, 20, 'Minjibir', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(400, 20, 'Nasarawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(401, 20, 'Rano', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(402, 20, 'Rimin Gado', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(403, 20, 'Rogo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(404, 20, 'Shanono', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(405, 20, 'Sumaila', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(406, 20, 'Takai', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(407, 20, 'Tarauni', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(408, 20, 'Tofa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(409, 20, 'Tsanyawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(410, 20, 'Tudun Wada', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(411, 20, 'Ungogo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(412, 20, 'Warawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(413, 20, 'Wudil', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(414, 21, 'Bakori', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(415, 21, 'Batagarawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(416, 21, 'Batsari', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(417, 21, 'Baure', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(418, 21, 'Bindawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(419, 21, 'Charanchi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(420, 21, 'Dandume', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(421, 21, 'Danja', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(422, 21, 'Dan Musa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(423, 21, 'Daura', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(424, 21, 'Dutsi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(425, 21, 'Dutsin Ma', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(426, 21, 'Faskari', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(427, 21, 'Funtua', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(428, 21, 'Ingawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(429, 21, 'Jibia', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(430, 21, 'Kafur', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(431, 21, 'Kaita', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(432, 21, 'Kankara', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(433, 21, 'Kankia', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(434, 21, 'Katsina', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(435, 21, 'Kurfi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(436, 21, 'Kusada', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(437, 21, 'Mai\'Adua', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(438, 21, 'Malumfashi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(439, 21, 'Mani', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(440, 21, 'Mashi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(441, 21, 'Matazu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(442, 21, 'Musawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(443, 21, 'Rimi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(444, 21, 'Sabuwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(445, 21, 'Safana', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(446, 21, 'Sandamu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(447, 21, 'Zango', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(448, 22, 'Aleiro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(449, 22, 'Arewa Dandi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(450, 22, 'Argungu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(451, 22, 'Augie', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(452, 22, 'Bagudo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(453, 22, 'Birnin Kebbi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(454, 22, 'Bunza', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(455, 22, 'Dandi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(456, 22, 'Fakai', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(457, 22, 'Gwandu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(458, 22, 'Jega', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(459, 22, 'Kalgo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(460, 22, 'Koko/Besse', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(461, 22, 'Maiyama', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(462, 22, 'Ngaski', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(463, 22, 'Sakaba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(464, 22, 'Shanga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(465, 22, 'Suru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(466, 22, 'Wasagu/Danko', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(467, 22, 'Yauri', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(468, 22, 'Zuru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(469, 23, 'Adavi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(470, 23, 'Ajaokuta', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(471, 23, 'Ankpa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(472, 23, 'Bassa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(473, 23, 'Dekina', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(474, 23, 'Ibaji', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(475, 23, 'Idah', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(476, 23, 'Igalamela Odolu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(477, 23, 'Ijumu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(478, 23, 'Kabba/Bunu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(479, 23, 'Kogi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(480, 23, 'Lokoja', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(481, 23, 'Mopa Muro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(482, 23, 'Ofu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(483, 23, 'Ogori/Magongo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(484, 23, 'Okehi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(485, 23, 'Okene', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(486, 23, 'Olamaboro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(487, 23, 'Omala', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(488, 23, 'Yagba East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(489, 23, 'Yagba West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(490, 24, 'Asa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(491, 24, 'Baruten', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(492, 24, 'Edu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(493, 24, 'Ekiti, Kwara State', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(494, 24, 'Ifelodun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(495, 24, 'Ilorin East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(496, 24, 'Ilorin South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(497, 24, 'Ilorin West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(498, 24, 'Irepodun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(499, 24, 'Isin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(500, 24, 'Kaiama', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(501, 24, 'Moro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(502, 24, 'Offa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(503, 24, 'Oke Ero', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(504, 24, 'Oyun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(505, 24, 'Pategi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(506, 25, 'Agege', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(507, 25, 'Ajeromi-Ifelodun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(508, 25, 'Alimosho', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(509, 25, 'Amuwo-Odofin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(510, 25, 'Apapa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(511, 25, 'Badagry', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(512, 25, 'Epe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(513, 25, 'Eti Osa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(514, 25, 'Ibeju-Lekki', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(515, 25, 'Ifako-Ijaiye', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(516, 25, 'Ikeja', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(517, 25, 'Ikorodu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(518, 25, 'Kosofe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(519, 25, 'Lagos Island', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(520, 25, 'Lagos Mainland', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(521, 25, 'Mushin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(522, 25, 'Ojo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(523, 25, 'Oshodi-Isolo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(524, 25, 'Shomolu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(525, 25, 'Surulere, Lagos State', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(526, 26, 'Akwanga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(527, 26, 'Awe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(528, 26, 'Doma', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(529, 26, 'Karu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(530, 26, 'Keana', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(531, 26, 'Keffi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(532, 26, 'Kokona', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(533, 26, 'Lafia', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(534, 26, 'Nasarawa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(535, 26, 'Nasarawa Egon', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(536, 26, 'Obi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(537, 26, 'Toto', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(538, 26, 'Wamba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(539, 27, 'Agaie', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(540, 27, 'Agwara', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(541, 27, 'Bida', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(542, 27, 'Borgu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(543, 27, 'Bosso', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(544, 27, 'Chanchaga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(545, 27, 'Edati', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(546, 27, 'Gbako', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(547, 27, 'Gurara', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(548, 27, 'Katcha', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(549, 27, 'Kontagora', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(550, 27, 'Lapai', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(551, 27, 'Lavun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(552, 27, 'Magama', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(553, 27, 'Mariga', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(554, 27, 'Mashegu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(555, 27, 'Mokwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(556, 27, 'Moya', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(557, 27, 'Paikoro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(558, 27, 'Rafi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(559, 27, 'Rijau', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(560, 27, 'Shiroro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(561, 27, 'Suleja', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(562, 27, 'Tafa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(563, 27, 'Wushishi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(564, 28, 'Abeokuta North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(565, 28, 'Abeokuta South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(566, 28, 'Ado-Odo/Ota', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(567, 28, 'Egbado North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(568, 28, 'Egbado South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(569, 28, 'Ewekoro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(570, 28, 'Ifo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(571, 28, 'Ijebu East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(572, 28, 'Ijebu North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(573, 28, 'Ijebu North East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(574, 28, 'Ijebu Ode', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(575, 28, 'Ikenne', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(576, 28, 'Imeko Afon', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(577, 28, 'Ipokia', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(578, 28, 'Obafemi Owode', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(579, 28, 'Odeda', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(580, 28, 'Odogbolu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(581, 28, 'Ogun Waterside', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(582, 28, 'Remo North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(583, 28, 'Shagamu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(584, 29, 'Akoko North-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(585, 29, 'Akoko North-West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(586, 29, 'Akoko South-West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(587, 29, 'Akoko South-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(588, 29, 'Akure North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(589, 29, 'Akure South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(590, 29, 'Ese Odo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(591, 29, 'Idanre', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(592, 29, 'Ifedore', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(593, 29, 'Ilaje', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(594, 29, 'Ile Oluji/Okeigbo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(595, 29, 'Irele', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(596, 29, 'Odigbo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(597, 29, 'Okitipupa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(598, 29, 'Ondo East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(599, 29, 'Ondo West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(600, 29, 'Ose', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(601, 29, 'Owo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(602, 30, 'Atakunmosa East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(603, 30, 'Atakunmosa West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(604, 30, 'Aiyedaade', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(605, 30, 'Aiyedire', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(606, 30, 'Boluwaduro', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(607, 30, 'Boripe', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(608, 30, 'Ede North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(609, 30, 'Ede South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(610, 30, 'Ife Central', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(611, 30, 'Ife East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(612, 30, 'Ife North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(613, 30, 'Ife South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(614, 30, 'Egbedore', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(615, 30, 'Ejigbo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(616, 30, 'Ifedayo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(617, 30, 'Ifelodun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(618, 30, 'Ila', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(619, 30, 'Ilesa East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(620, 30, 'Ilesa West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(621, 30, 'Irepodun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(622, 30, 'Irewole', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(623, 30, 'Isokan', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(624, 30, 'Iwo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(625, 30, 'Obokun', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(626, 30, 'Odo Otin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(627, 30, 'Ola Oluwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(628, 30, 'Olorunda', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(629, 30, 'Oriade', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(630, 30, 'Orolu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(631, 30, 'Osogbo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(632, 31, 'Afijio', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(633, 31, 'Akinyele', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(634, 31, 'Atiba', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(635, 31, 'Atisbo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(636, 31, 'Egbeda', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(637, 31, 'Ibadan North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(638, 31, 'Ibadan North-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(639, 31, 'Ibadan North-West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(640, 31, 'Ibadan South-East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(641, 31, 'Ibadan South-West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(642, 31, 'Ibarapa Central', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(643, 31, 'Ibarapa East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(644, 31, 'Ibarapa North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(645, 31, 'Ido', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(646, 31, 'Irepo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(647, 31, 'Iseyin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(648, 31, 'Itesiwaju', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(649, 31, 'Iwajowa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(650, 31, 'Kajola', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(651, 31, 'Lagelu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(652, 31, 'Ogbomosho North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(653, 31, 'Ogbomosho South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(654, 31, 'Ogo Oluwa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(655, 31, 'Olorunsogo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(656, 31, 'Oluyole', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(657, 31, 'Ona Ara', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(658, 31, 'Orelope', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(659, 31, 'Ori Ire', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(660, 31, 'Oyo', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(661, 31, 'Oyo East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(662, 31, 'Saki East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(663, 31, 'Saki West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(664, 31, 'Surulere, Oyo State', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(665, 32, 'Bokkos', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(666, 32, 'Barkin Ladi', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(667, 32, 'Bassa', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(668, 32, 'Jos East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(669, 32, 'Jos North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(670, 32, 'Jos South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(671, 32, 'Kanam', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(672, 32, 'Kanke', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(673, 32, 'Langtang South', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(674, 32, 'Langtang North', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(675, 32, 'Mangu', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(676, 32, 'Mikang', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(677, 32, 'Pankshin', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(678, 32, 'Qua\'an Pan', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(679, 32, 'Riyom', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(680, 32, 'Shendam', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(681, 32, 'Wase', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(682, 33, 'Abua/Odual', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(683, 33, 'Ahoada East', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(684, 33, 'Ahoada West', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(685, 33, 'Akuku-Toru', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(686, 33, 'Andoni', '2022-07-07 18:13:18', '2022-07-07 18:13:18'),
(687, 33, 'Asari-Toru', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(688, 33, 'Bonny', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(689, 33, 'Degema', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(690, 33, 'Eleme', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(691, 33, 'Emuoha', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(692, 33, 'Etche', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(693, 33, 'Gokana', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(694, 33, 'Ikwerre', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(695, 33, 'Khana', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(696, 33, 'Obio/Akpor', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(697, 33, 'Ogba/Egbema/Ndoni', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(698, 33, 'Ogu/Bolo', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(699, 33, 'Okrika', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(700, 33, 'Omuma', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(701, 33, 'Opobo/Nkoro', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(702, 33, 'Oyigbo', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(703, 33, 'Port Harcourt', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(704, 33, 'Tai', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(705, 34, 'Binji', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(706, 34, 'Bodinga', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(707, 34, 'Dange Shuni', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(708, 34, 'Gada', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(709, 34, 'Goronyo', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(710, 34, 'Gudu', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(711, 34, 'Gwadabawa', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(712, 34, 'Illela', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(713, 34, 'Isa', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(714, 34, 'Kebbe', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(715, 34, 'Kware', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(716, 34, 'Rabah', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(717, 34, 'Sabon Birni', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(718, 34, 'Shagari', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(719, 34, 'Silame', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(720, 34, 'Sokoto North', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(721, 34, 'Sokoto South', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(722, 34, 'Tambuwal', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(723, 34, 'Tangaza', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(724, 34, 'Tureta', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(725, 34, 'Wamako', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(726, 34, 'Wurno', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(727, 34, 'Yabo', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(728, 35, 'Ardo Kola', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(729, 35, 'Bali', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(730, 35, 'Donga', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(731, 35, 'Gashaka', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(732, 35, 'Gassol', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(733, 35, 'Ibi', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(734, 35, 'Jalingo', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(735, 35, 'Karim Lamido', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(736, 35, 'Kumi', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(737, 35, 'Lau', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(738, 35, 'Sardauna', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(739, 35, 'Takum', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(740, 35, 'Ussa', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(741, 35, 'Wukari', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(742, 35, 'Yorro', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(743, 35, 'Zing', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(744, 36, 'Bade', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(745, 36, 'Bursari', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(746, 36, 'Damaturu', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(747, 36, 'Fika', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(748, 36, 'Fune', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(749, 36, 'Geidam', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(750, 36, 'Gujba', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(751, 36, 'Gulani', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(752, 36, 'Jakusko', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(753, 36, 'Karasuwa', '2022-07-07 18:13:19', '2022-07-07 18:13:19');
INSERT INTO `lgas` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(754, 36, 'Machina', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(755, 36, 'Nangere', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(756, 36, 'Nguru', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(757, 36, 'Potiskum', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(758, 36, 'Tarmuwa', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(759, 36, 'Yunusari', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(760, 36, 'Yusufari', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(761, 37, 'Anka', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(762, 37, 'Bakura', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(763, 37, 'Birnin Magaji/Kiyaw', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(764, 37, 'Bukkuyum', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(765, 37, 'Bungudu', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(766, 37, 'Gummi', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(767, 37, 'Gusau', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(768, 37, 'Kaura Namoda', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(769, 37, 'Maradun', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(770, 37, 'Maru', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(771, 37, 'Shinkafi', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(772, 37, 'Talata Mafara', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(773, 37, 'Chafe', '2022-07-07 18:13:19', '2022-07-07 18:13:19'),
(774, 37, 'Zurmi', '2022-07-07 18:13:19', '2022-07-07 18:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `my_class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `t1` int(11) DEFAULT NULL,
  `t2` int(11) DEFAULT NULL,
  `t3` int(11) DEFAULT NULL,
  `t4` int(11) DEFAULT NULL,
  `tca` int(11) DEFAULT NULL,
  `exm` int(11) DEFAULT NULL,
  `tex1` int(11) DEFAULT NULL,
  `tex2` int(11) DEFAULT NULL,
  `tex3` int(11) DEFAULT NULL,
  `sub_pos` tinyint(4) DEFAULT NULL,
  `cum` int(11) DEFAULT NULL,
  `cum_ave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade_id` int(10) UNSIGNED DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_09_20_121733_create_blood_groups_table', 1),
(2, '2013_09_22_124750_create_states_table', 1),
(3, '2013_09_22_124806_create_lgas_table', 1),
(4, '2013_09_26_121148_create_nationalities_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_09_20_100249_create_user_types_table', 1),
(8, '2018_09_20_150906_create_class_types_table', 1),
(9, '2018_09_22_073005_create_my_classes_table', 1),
(10, '2018_09_22_073526_create_sections_table', 1),
(11, '2018_09_22_080555_create_settings_table', 1),
(12, '2018_09_22_081302_create_subjects_table', 1),
(13, '2018_09_22_151514_create_student_records_table', 1),
(14, '2018_09_26_124241_create_dorms_table', 1),
(15, '2018_10_04_224910_create_exams_table', 1),
(16, '2018_10_06_224846_create_marks_table', 1),
(17, '2018_10_06_224944_create_grades_table', 1),
(18, '2018_10_06_225007_create_pins_table', 1),
(19, '2018_10_18_205550_create_skills_table', 1),
(20, '2018_10_18_205842_create_exam_records_table', 1),
(21, '2018_10_31_191358_create_books_table', 1),
(22, '2018_10_31_192540_create_book_requests_table', 1),
(23, '2018_11_01_132115_create_staff_records_table', 1),
(24, '2018_11_03_210758_create_payments_table', 1),
(25, '2018_11_03_210817_create_payment_records_table', 1),
(26, '2018_11_06_083707_create_receipts_table', 1),
(27, '2018_11_27_180401_create_time_tables_table', 1),
(28, '2019_09_22_142514_create_fks', 1),
(29, '2019_09_26_132227_create_promotions_table', 1),
(30, '2022_07_07_160348_create_quotas', 1),
(31, '2022_07_07_174516_create_disciplines', 1),
(32, '2022_07_07_174550_create_elective_combinations', 1),
(33, '2022_07_07_223816_create_study_record', 1),
(34, '2022_07_12_133518_create_groups', 2),
(35, '2022_07_12_134252_create_groups', 3),
(36, '2022_07_12_134830_create_elective_combinations', 4),
(37, '2022_07_12_142256_create_applicant', 5),
(38, '2022_07_12_144029_create_applicant', 6),
(39, '2022_07_12_152049_create_applicant', 7),
(40, '2022_07_12_160218_create_applicant', 8),
(41, '2022_07_12_161839_create_applicants', 9),
(42, '2022_07_13_002624_create_parent_records', 10),
(43, '2022_07_13_023557_create_studies_records', 11),
(44, '2022_07_13_024037_create_students_records', 11),
(45, '2022_07_13_042320_create_study_records', 12);

-- --------------------------------------------------------

--
-- Table structure for table `my_classes`
--

CREATE TABLE `my_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_type_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_classes`
--

INSERT INTO `my_classes` (`id`, `name`, `class_type_id`, `created_at`, `updated_at`) VALUES
(1, 'E', 1, NULL, NULL),
(2, 'M', 2, NULL, NULL),
(3, 'G', 3, NULL, NULL),
(4, 'H', 4, NULL, NULL),
(5, 'I', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(2, 'Albanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(3, 'Algerian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(4, 'American', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(5, 'Andorran', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(6, 'Angolan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(7, 'Antiguans', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(8, 'Argentinean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(9, 'Armenian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(10, 'Australian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(11, 'Austrian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(12, 'Azerbaijani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(13, 'Bahamian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(14, 'Bahraini', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(15, 'Bangladeshi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(16, 'Barbadian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(17, 'Barbudans', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(18, 'Batswana', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(19, 'Belarusian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(20, 'Belgian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(21, 'Belizean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(22, 'Beninese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(23, 'Bhutanese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(24, 'Bolivian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(25, 'Bosnian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(26, 'Brazilian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(27, 'British', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(28, 'Bruneian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(29, 'Bulgarian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(30, 'Burkinabe', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(31, 'Burmese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(32, 'Burundian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(33, 'Cambodian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(34, 'Cameroonian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(35, 'Canadian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(36, 'Cape Verdean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(37, 'Central African', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(38, 'Chadian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(39, 'Chilean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(40, 'Chinese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(41, 'Colombian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(42, 'Comoran', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(43, 'Congolese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(44, 'Costa Rican', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(45, 'Croatian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(46, 'Cuban', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(47, 'Cypriot', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(48, 'Czech', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(49, 'Danish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(50, 'Djibouti', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(51, 'Dominican', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(52, 'Dutch', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(53, 'East Timorese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(54, 'Ecuadorean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(55, 'Egyptian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(56, 'Emirian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(57, 'Equatorial Guinean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(58, 'Eritrean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(59, 'Estonian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(60, 'Ethiopian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(61, 'Fijian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(62, 'Filipino', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(63, 'Finnish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(64, 'French', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(65, 'Gabonese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(66, 'Gambian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(67, 'Georgian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(68, 'German', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(69, 'Ghanaian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(70, 'Greek', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(71, 'Grenadian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(72, 'Guatemalan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(73, 'Guinea-Bissauan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(74, 'Guinean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(75, 'Guyanese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(76, 'Haitian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(77, 'Herzegovinian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(78, 'Honduran', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(79, 'Hungarian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(80, 'I-Kiribati', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(81, 'Icelander', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(82, 'Indian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(83, 'Indonesian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(84, 'Iranian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(85, 'Iraqi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(86, 'Irish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(87, 'Israeli', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(88, 'Italian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(89, 'Ivorian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(90, 'Jamaican', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(91, 'Japanese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(92, 'Jordanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(93, 'Kazakhstani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(94, 'Kenyan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(95, 'Kittian and Nevisian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(96, 'Kuwaiti', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(97, 'Kyrgyz', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(98, 'Laotian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(99, 'Latvian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(100, 'Lebanese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(101, 'Liberian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(102, 'Libyan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(103, 'Liechtensteiner', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(104, 'Lithuanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(105, 'Luxembourger', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(106, 'Macedonian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(107, 'Malagasy', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(108, 'Malawian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(109, 'Malaysian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(110, 'Maldivan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(111, 'Malian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(112, 'Maltese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(113, 'Marshallese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(114, 'Mauritanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(115, 'Mauritian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(116, 'Mexican', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(117, 'Micronesian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(118, 'Moldovan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(119, 'Monacan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(120, 'Mongolian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(121, 'Moroccan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(122, 'Mosotho', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(123, 'Motswana', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(124, 'Mozambican', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(125, 'Namibian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(126, 'Nauruan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(127, 'Nepalese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(128, 'New Zealander', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(129, 'Nicaraguan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(130, 'Nigerian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(131, 'Nigerien', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(132, 'North Korean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(133, 'Northern Irish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(134, 'Norwegian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(135, 'Omani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(136, 'Pakistani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(137, 'Palauan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(138, 'Panamanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(139, 'Papua New Guinean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(140, 'Paraguayan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(141, 'Peruvian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(142, 'Polish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(143, 'Portuguese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(144, 'Qatari', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(145, 'Romanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(146, 'Russian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(147, 'Rwandan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(148, 'Saint Lucian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(149, 'Salvadoran', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(150, 'Samoan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(151, 'San Marinese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(152, 'Sao Tomean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(153, 'Saudi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(154, 'Scottish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(155, 'Senegalese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(156, 'Serbian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(157, 'Seychellois', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(158, 'Sierra Leonean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(159, 'Singaporean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(160, 'Slovakian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(161, 'Slovenian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(162, 'Solomon Islander', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(163, 'Somali', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(164, 'South African', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(165, 'South Korean', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(166, 'Spanish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(167, 'Sri Lankan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(168, 'Sudanese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(169, 'Surinamer', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(170, 'Swazi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(171, 'Swedish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(172, 'Swiss', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(173, 'Syrian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(174, 'Taiwanese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(175, 'Tajik', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(176, 'Tanzanian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(177, 'Thai', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(178, 'Togolese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(179, 'Tongan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(180, 'Trinidadian/Tobagonian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(181, 'Tunisian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(182, 'Turkish', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(183, 'Tuvaluan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(184, 'Ugandan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(185, 'Ukrainian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(186, 'Uruguayan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(187, 'Uzbekistani', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(188, 'Venezuelan', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(189, 'Vietnamese', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(190, 'Welsh', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(191, 'Yemenite', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(192, 'Zambian', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(193, 'Zimbabwean', '2022-07-07 18:13:17', '2022-07-07 18:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `parent_records`
--

CREATE TABLE `parent_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_records`
--

INSERT INTO `parent_records` (`id`, `student_id`, `name`, `cnic`, `address`, `phone`, `designation`, `created_at`, `updated_at`) VALUES
(1, 3, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:20:32', '2022-07-12 23:20:32'),
(2, 4, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:22:10', '2022-07-12 23:22:10'),
(3, 5, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:24:38', '2022-07-12 23:24:38'),
(4, 6, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:26:14', '2022-07-12 23:26:14'),
(5, 7, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:28:46', '2022-07-12 23:28:46'),
(6, 8, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:30:42', '2022-07-12 23:30:42'),
(7, 9, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:31:37', '2022-07-12 23:31:37'),
(8, 10, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:33:26', '2022-07-12 23:33:26'),
(9, 11, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:34:15', '2022-07-12 23:34:15'),
(10, 12, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:34:46', '2022-07-12 23:34:46'),
(11, 13, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:37:03', '2022-07-12 23:37:03'),
(12, 14, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:38:26', '2022-07-12 23:38:26'),
(13, 15, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:38:48', '2022-07-12 23:38:48'),
(14, 16, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:39:23', '2022-07-12 23:39:23'),
(15, 17, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:40:24', '2022-07-12 23:40:24'),
(16, 18, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-12 23:40:33', '2022-07-12 23:40:33'),
(17, 19, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-13 06:19:10', '2022-07-13 06:19:10'),
(18, 20, 'asdasda', 'asdadsasd', 'acsasjciascakmq', '2366896', 'asddsa', '2022-07-13 06:35:18', '2022-07-13 06:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `ref_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash',
  `my_class_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_records`
--

CREATE TABLE `payment_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `ref_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amt_paid` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `paid` tinyint(4) NOT NULL DEFAULT 0,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `times_used` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `from_class` int(10) UNSIGNED NOT NULL,
  `from_section` int(10) UNSIGNED NOT NULL,
  `to_class` int(10) UNSIGNED NOT NULL,
  `to_section` int(10) UNSIGNED NOT NULL,
  `grad` tinyint(4) NOT NULL,
  `from_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotas`
--

CREATE TABLE `quotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotas`
--

INSERT INTO `quotas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'open merit', NULL, NULL),
(2, 'Transfer case', NULL, NULL),
(3, 'Disable', NULL, NULL),
(4, 'sports', NULL, NULL),
(5, 'FATA/FANA', NULL, NULL),
(6, 'FDE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(10) UNSIGNED NOT NULL,
  `pr_id` int(10) UNSIGNED NOT NULL,
  `amt_paid` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_class_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `my_class_id`, `teacher_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'A', 1, NULL, 1, NULL, NULL),
(2, 'B', 1, NULL, 0, NULL, NULL),
(3, 'A', 2, NULL, 1, NULL, NULL),
(4, 'B', 2, NULL, 0, NULL, NULL),
(5, 'A', 3, NULL, 1, NULL, NULL),
(6, 'A', 4, NULL, 1, NULL, NULL),
(7, 'A', 5, NULL, 1, NULL, NULL),
(13, 'C', 1, NULL, 0, '2022-07-12 20:59:48', '2022-07-12 20:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'current_session', '2022-2023', NULL, NULL),
(2, 'system_title', 'IMPGC H-8', NULL, NULL),
(3, 'system_name', 'POST-GRADUATE H-8', NULL, NULL),
(4, 'term_ends', '7/10/2018', NULL, NULL),
(5, 'term_begins', '7/10/2018', NULL, NULL),
(6, 'phone', '0123456789', NULL, NULL),
(7, 'address', '18B North Central Park, Behind Central Square Tourist Center', NULL, NULL),
(8, 'system_email', 'cjacademy@cj.com', NULL, NULL),
(9, 'alt_email', '', NULL, NULL),
(10, 'email_host', '', NULL, NULL),
(11, 'email_pass', '', NULL, NULL),
(12, 'lock_exam', '0', NULL, NULL),
(13, 'logo', '', NULL, NULL),
(14, 'next_term_fees_j', '20000', NULL, NULL),
(15, 'next_term_fees_pn', '25000', NULL, NULL),
(16, 'next_term_fees_p', '25000', NULL, NULL),
(17, 'next_term_fees_n', '25600', NULL, NULL),
(18, 'next_term_fees_s', '15600', NULL, NULL),
(19, 'next_term_fees_c', '1600', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `skill_type`, `class_type`, `created_at`, `updated_at`) VALUES
(1, 'PUNCTUALITY', 'AF', NULL, NULL, NULL),
(2, 'NEATNESS', 'AF', NULL, NULL, NULL),
(3, 'HONESTY', 'AF', NULL, NULL, NULL),
(4, 'RELIABILITY', 'AF', NULL, NULL, NULL),
(5, 'RELATIONSHIP WITH OTHERS', 'AF', NULL, NULL, NULL),
(6, 'POLITENESS', 'AF', NULL, NULL, NULL),
(7, 'ALERTNESS', 'AF', NULL, NULL, NULL),
(8, 'HANDWRITING', 'PS', NULL, NULL, NULL),
(9, 'GAMES & SPORTS', 'PS', NULL, NULL, NULL),
(10, 'DRAWING & ARTS', 'PS', NULL, NULL, NULL),
(11, 'PAINTING', 'PS', NULL, NULL, NULL),
(12, 'CONSTRUCTION', 'PS', NULL, NULL, NULL),
(13, 'MUSICAL SKILLS', 'PS', NULL, NULL, NULL),
(14, 'FLEXIBILITY', 'PS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_records`
--

CREATE TABLE `staff_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abia', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(2, 'Adamawa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(3, 'Akwa Ibom', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(4, 'Anambra', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(5, 'Bauchi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(6, 'Bayelsa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(7, 'Benue', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(8, 'Borno', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(9, 'Cross River', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(10, 'Delta', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(11, 'Ebonyi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(12, 'Edo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(13, 'Ekiti', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(14, 'Enugu', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(15, 'FCT', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(16, 'Gombe', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(17, 'Imo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(18, 'Jigawa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(19, 'Kaduna', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(20, 'Kano', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(21, 'Katsina', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(22, 'Kebbi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(23, 'Kogi', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(24, 'Kwara', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(25, 'Lagos', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(26, 'Nasarawa', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(27, 'Niger', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(28, 'Ogun', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(29, 'Ondo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(30, 'Osun', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(31, 'Oyo', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(32, 'Plateau', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(33, 'Rivers', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(34, 'Sokoto', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(35, 'Taraba', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(36, 'Yobe', '2022-07-07 18:13:17', '2022-07-07 18:13:17'),
(37, 'Zamfara', '2022-07-07 18:13:17', '2022-07-07 18:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `student_records`
--

CREATE TABLE `student_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_class_id` int(10) UNSIGNED NOT NULL,
  `section` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'http://localhost/global_assets/images/user.png',
  `qouta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_combination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_records`
--

INSERT INTO `student_records` (`id`, `form_no`, `my_class_id`, `section`, `roll_no`, `name`, `age`, `religion`, `nationality`, `domicile`, `phone`, `dob`, `gender`, `address`, `cnic`, `bus`, `photo`, `qouta_name`, `group_name`, `subject_code`, `subject_combination`, `session`, `created_at`, `updated_at`) VALUES
(1, '4545465', 2, 'A', '22PM001', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:17:39', '2022-07-12 23:17:39'),
(2, '4545465', 2, 'A', '22PM002', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:19:08', '2022-07-12 23:19:08'),
(3, '4545465', 2, 'A', '22PM003', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:20:32', '2022-07-12 23:20:32'),
(4, '4545465', 2, 'A', '22PM004', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:22:10', '2022-07-12 23:22:10'),
(5, '4545465', 2, 'A', '22PM005', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:24:38', '2022-07-12 23:24:38'),
(6, '4545465', 2, 'A', '22PM006', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:26:14', '2022-07-12 23:26:14'),
(7, '4545465', 2, 'A', '22PM007', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:28:46', '2022-07-12 23:28:46'),
(8, '4545465', 2, 'A', '22PM008', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:30:42', '2022-07-12 23:30:42'),
(9, '4545465', 2, 'A', '22PM009', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:31:37', '2022-07-12 23:31:37'),
(10, '4545465', 2, 'A', '22PM0010', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:33:26', '2022-07-12 23:33:26'),
(11, '4545465', 2, 'A', '22PM0011', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:34:15', '2022-07-12 23:34:15'),
(12, '4545465', 2, 'A', '22PM012', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:34:45', '2022-07-12 23:34:45'),
(13, '4545465', 2, 'A', '22PM013', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:37:03', '2022-07-12 23:37:03'),
(14, '4545465', 2, 'A', '22PM014', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:38:26', '2022-07-12 23:38:26'),
(15, '4545465', 2, 'A', '22PM015', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:38:48', '2022-07-12 23:38:48'),
(16, '4545465', 2, 'A', '22PM016', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:39:23', '2022-07-12 23:39:23'),
(17, '4545465', 2, 'A', '22PM017', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:40:24', '2022-07-12 23:40:24'),
(18, '4545465', 2, 'A', '22PM018', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'open merit', 'Pre-medical', '100', 'ppp-sss-sww', '2022-2023', '2022-07-12 23:40:33', '2022-07-12 23:40:33'),
(20, '44545', 1, 'A', '22PE001', 'Muneeb Ahmed', '11', 'ISLAM', '136', 'fata', '03155544556', '07/13/2022', 'Male', 'aaaaaa', '6111111', 'yes', 'http://localhost/global_assets/images/user.png', 'disable', 'Pre-engineering', '100', 'ppp-sss-sww', '2022-2023', '2022-07-13 06:35:18', '2022-07-13 06:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `study__records`
--

CREATE TABLE `study__records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `roll_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elective_subjects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_attended` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_marks` bigint(20) UNSIGNED NOT NULL,
  `obtained_marks` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study__records`
--

INSERT INTO `study__records` (`id`, `student_id`, `roll_no`, `passing_year`, `percentage`, `grade`, `elective_subjects`, `board`, `ins_attended`, `total_marks`, `obtained_marks`, `created_at`, `updated_at`) VALUES
(1, 12, 'asdads', '2014', '90', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:34:46', '2022-07-12 23:34:46'),
(2, 13, 'asdads', '2014', '85', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:37:03', '2022-07-12 23:37:03'),
(3, 14, 'asdads', '2014', '85', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:38:26', '2022-07-12 23:38:26'),
(4, 15, 'asdads', '2014', '90', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:38:48', '2022-07-12 23:38:48'),
(5, 16, 'asdads', '2014', '90', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:39:23', '2022-07-12 23:39:23'),
(6, 17, 'asdads', '2014', '85', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:40:24', '2022-07-12 23:40:24'),
(7, 18, 'asdads', '2014', '85', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-12 23:40:33', '2022-07-12 23:40:33'),
(8, 19, 'asdads', '2014', '30', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-13 06:19:10', '2022-07-13 06:19:10'),
(9, 20, 'asdads', '2014', '30', 'a', 'asdads', 'adsads', 'aksdhjsadj', 111, 11111, '2022-07-13 06:35:18', '2022-07-13 06:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_class_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `slug`, `my_class_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'English Language', 'Eng', 1, 3, NULL, NULL),
(2, 'Mathematics', 'Math', 1, 3, NULL, NULL),
(3, 'English Language', 'Eng', 2, 3, NULL, NULL),
(4, 'Mathematics', 'Math', 2, 3, NULL, NULL),
(5, 'English Language', 'Eng', 3, 3, NULL, NULL),
(6, 'Mathematics', 'Math', 3, 3, NULL, NULL),
(7, 'English Language', 'Eng', 4, 3, NULL, NULL),
(8, 'Mathematics', 'Math', 4, 3, NULL, NULL),
(9, 'English Language', 'Eng', 5, 3, NULL, NULL),
(10, 'Mathematics', 'Math', 5, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

CREATE TABLE `time_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `ttr_id` int(10) UNSIGNED NOT NULL,
  `hour_from` tinyint(4) NOT NULL,
  `min_from` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meridian_from` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour_to` tinyint(4) NOT NULL,
  `min_to` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meridian_to` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_from` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_to` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp_from` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp_to` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE `time_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `ttr_id` int(10) UNSIGNED NOT NULL,
  `ts_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED DEFAULT NULL,
  `exam_date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timestamp_from` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp_to` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_num` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_table_records`
--

CREATE TABLE `time_table_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_class_id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED DEFAULT NULL,
  `year` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://localhost/global_assets/images/user.png',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_id` int(10) UNSIGNED DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `lga_id` int(10) UNSIGNED DEFAULT NULL,
  `nal_id` int(10) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `code`, `username`, `user_type`, `dob`, `gender`, `photo`, `phone`, `phone2`, `bg_id`, `state_id`, `lga_id`, `nal_id`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'HBVPRWBO9V', 'cj', 'super_admin', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kepkH/7sCoil6MzQePak2eQEjZx93Vc2hA0xiAgAqlIQLdvcP.oim', 'CjSoYy4thNwaxDL9zlzVksA7mJG5TYaV2kbOW9adkpD1kurTUGz5nhnACDDw', NULL, NULL),
(2, 'Admin KORA', 'admin@admin.com', 'R7YHGKIWA1', 'admin', 'admin', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kepkH/7sCoil6MzQePak2eQEjZx93Vc2hA0xiAgAqlIQLdvcP.oim', 'BGHdr5YSWi', NULL, NULL),
(3, 'Teacher Chike', 'teacher@teacher.com', 'ZFNOZHMUPR', 'teacher', 'teacher', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kepkH/7sCoil6MzQePak2eQEjZx93Vc2hA0xiAgAqlIQLdvcP.oim', 'sx4Xz9Auin', NULL, NULL),
(4, 'Parent Kaba', 'parent@parent.com', 'ODW9SIX6MY', 'parent', 'parent', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kepkH/7sCoil6MzQePak2eQEjZx93Vc2hA0xiAgAqlIQLdvcP.oim', 'JeSH3mZZpz', NULL, NULL),
(5, 'Accountant Jeff', 'accountant@accountant.com', 'NV21C7OICB', 'accountant', 'accountant', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kepkH/7sCoil6MzQePak2eQEjZx93Vc2hA0xiAgAqlIQLdvcP.oim', 'h1ule9T5fK', NULL, NULL),
(6, 'Admin 1', 'admin1@admin.com', 'RKE54LSQSZ', 'admin1', 'admin', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6/VLoELUUX5dKy7005WxuOcuBXlEPRuLd6SjKZTrM5s.Cp5TUZsK2', 'MZlNLTdJOg', NULL, NULL),
(7, 'Teacher 1', 'teacher1@teacher.com', 'ZDZFVEFNHD', 'teacher1', 'teacher', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$W7Jn8YvyNr1AXZwZJZ7E6ONaXnafqoXQCV0gVECNfOKVPQXzLcYQ6', 'wOi0GmUpiK', NULL, NULL),
(8, 'Accountant 1', 'accountant1@accountant.com', 'CNOMQ96TZD', 'accountant1', 'accountant', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$9T/oqF2fXYpyjb3.qu6IFep66nfW4Ad.2Ozz.KwqDvNj5uijb3DXu', 'VDKizycGSc', NULL, NULL),
(9, 'Parent 1', 'parent1@parent.com', 'OUHBVZZHPY', 'parent1', 'parent', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ntz0Miwcqu3JKIlk2ThjVe.5OFVvdNlreHuU8uTA.gZUY81OeoIT.', 'imqahMtpzN', NULL, NULL),
(10, 'Admin 2', 'admin2@admin.com', 'ZZSUMEIALF', 'admin2', 'admin', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$30JGztjtiVP8wkiEcBSI2e9P44QBXbwuY/eAZmZxrvQ2.Zp5gLY9O', 'BCrg4Ruok5', NULL, NULL),
(11, 'Teacher 2', 'teacher2@teacher.com', 'RAWPLAMQPK', 'teacher2', 'teacher', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$8CElJDdZngpA1xrktiuh4eB1XhIWh3U3Mg3YdgYBK36vVgJGQ/HQe', '81EDesFzwM', NULL, NULL),
(12, 'Accountant 2', 'accountant2@accountant.com', 'PVSHFNGHGZ', 'accountant2', 'accountant', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kXpbXOu9Nr.radoxp5UfxOYOKXS52HjdedSDDBKcIKqfFMxksy7di', 'hTbr2xslNA', NULL, NULL),
(13, 'Parent 2', 'parent2@parent.com', 'HOATVFOQRQ', 'parent2', 'parent', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lE/2aFuyjt6iO.xzF5dMSe7qGqSDw8yvYniXE9J3oXYqtP0CSfPA.', 'nrUEvviJQR', NULL, NULL),
(14, 'Admin 3', 'admin3@admin.com', '9J7SNHPFH8', 'admin3', 'admin', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6hSYHmLepASt55ufaR7VXOJzgpltAU4KJ5Ugi0V2grFEG.qNzBNO6', 'zBMQ3XOC7Q', NULL, NULL),
(15, 'Teacher 3', 'teacher3@teacher.com', 'SPMMTKIAQE', 'teacher3', 'teacher', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$bHrvhwdbki.np.j5JGLRfuipYtajTUkotHvLrgMZFeNfrYisBNS.S', 'iap7Tn6Y4r', NULL, NULL),
(16, 'Accountant 3', 'accountant3@accountant.com', '1QEZYWFHYC', 'accountant3', 'accountant', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$1pJauNnzO7vL2MQyZayP3Od67L/ZMxKFcPLm8e3mht.CMCdCc7xKO', 'RPNGpgXnMd', NULL, NULL),
(17, 'Parent 3', 'parent3@parent.com', 'CY9KTLLVZV', 'parent3', 'parent', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.XXShNVcpgWDg0fZ4DWO2OQPHcrm5AZpQVDARKcMZ/QyPDHeXxoLm', 'f9CNlBOCV1', NULL, NULL),
(18, 'Student CJ', 'student@student.com', 'BQU7ZOFYSD', 'student', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$siHH9SMdmOiMr.9mkJlWPOkfQwv8mZ9PDxxsFtnlCnpEZkY0zyzmK', 'H7yYjfJE6z', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(19, 'Dr. Alena Conroy', 'herminia02@example.org', 'BEYGSOCPUF', 'hand.eula', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$52/DKoNjkdKzL0oeb7cnLugbwZfizfT0xu9v.gH0woMb5T.YSnaKi', 'KpVezyETCR', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(20, 'Mr. Greyson Lakin', 'jacobi.newton@example.org', 'HXE7QK9LJS', 'domenica.moen', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$52/DKoNjkdKzL0oeb7cnLugbwZfizfT0xu9v.gH0woMb5T.YSnaKi', 'eVqOu8jp44', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(21, 'Olin D\'Amore', 'mohammad.jacobs@example.org', 'ZX0D3X19HD', 'prudence14', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$52/DKoNjkdKzL0oeb7cnLugbwZfizfT0xu9v.gH0woMb5T.YSnaKi', 'EXLoaHOa4V', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(22, 'Casimer Hoppe', 'muriel.hilpert@example.com', 'GBMNZPAAXR', 'bjacobson', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OYgI9BhSJDLl7gArnGWbc.VwF8bhUy9kHfHp3Nft8JLvUi1ZJABxu', 'olsNblHQvm', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(23, 'Deondre Blick', 'hmills@example.com', 'KKK6GONPYC', 'jaron57', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OYgI9BhSJDLl7gArnGWbc.VwF8bhUy9kHfHp3Nft8JLvUi1ZJABxu', 'K06inX0LsV', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(24, 'Mr. Regan Langosh I', 'cassandre78@example.com', 'ROKOSAQPTP', 'hodkiewicz.emmalee', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OYgI9BhSJDLl7gArnGWbc.VwF8bhUy9kHfHp3Nft8JLvUi1ZJABxu', 'k9Kkf2RVvt', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(25, 'Oswaldo Spencer', 'josianne83@example.com', 'JXU7JYEJVC', 'connelly.lucy', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$izx/OkZt1rK5YEH6Tk7jJ.KyaikBxgWS1K5yuGtW8EHnByNx6fw42', 'mIdET7xpHD', '2022-07-07 18:13:20', '2022-07-07 18:13:20'),
(26, 'Jairo Bahringer', 'adams.neoma@example.net', 'TGHWFEZWYI', 'barry.gislason', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$izx/OkZt1rK5YEH6Tk7jJ.KyaikBxgWS1K5yuGtW8EHnByNx6fw42', 'igxtXKpAp5', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(27, 'Adonis Lemke', 'neil.sawayn@example.org', '2WWAMHK4IW', 'ariane16', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$izx/OkZt1rK5YEH6Tk7jJ.KyaikBxgWS1K5yuGtW8EHnByNx6fw42', '7HJxPW2kRv', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(28, 'Aisha Barton I', 'nader.elwin@example.net', 'RO2MFYNLHS', 'americo89', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$vuj6qisjeLkYwZ4Zf3VXou2NbV.fcYIBt0Mux5VvJ4DxMoh.spdeK', 'dYzpRQnuiJ', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(29, 'Lane Sauer', 'johnston.maynard@example.org', '3PT5GCJIEK', 'hermiston.francesco', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$vuj6qisjeLkYwZ4Zf3VXou2NbV.fcYIBt0Mux5VvJ4DxMoh.spdeK', 'Jo1u2PuR0q', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(30, 'Toney Murray', 'zanderson@example.com', 'K6MSMOZSIH', 'conrad83', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$vuj6qisjeLkYwZ4Zf3VXou2NbV.fcYIBt0Mux5VvJ4DxMoh.spdeK', 'DHiAVgEGM0', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(31, 'Mrs. Dayna Dooley', 'okuneva.rachael@example.com', 'MMF0AE8EHE', 'fpouros', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JvghklPiAc85DNbCZc591.eXNl4qmOsxewdkw.CxdNkY3XSfRtGMi', 'U25ffJ3H2y', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(32, 'Dr. Retta Hegmann III', 'veum.lewis@example.com', '9FSCBJ2JWV', 'barrows.milford', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JvghklPiAc85DNbCZc591.eXNl4qmOsxewdkw.CxdNkY3XSfRtGMi', 'bWJ4K9Mj7Z', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(33, 'Retta Robel', 'maegan62@example.net', 'QJR8RIWCM4', 'braeden61', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JvghklPiAc85DNbCZc591.eXNl4qmOsxewdkw.CxdNkY3XSfRtGMi', 'kNNrYNrErv', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(34, 'Arvilla Predovic', 'runolfsdottir.andy@example.net', 'DIUYYYKAL9', 'alyson.lubowitz', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Nx45L4NNsqSPximAv6RRuOAEJIC1u850qJVGmMBvPfTdcvqfaELzS', 'wK8ylMONgY', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(35, 'Sierra Koepp', 'katharina61@example.net', 'D7XDLGWHVB', 'kuhic.keshawn', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Nx45L4NNsqSPximAv6RRuOAEJIC1u850qJVGmMBvPfTdcvqfaELzS', 'ML9NFBkv5o', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(36, 'Mr. Austen Wiegand', 'kennedi.rogahn@example.net', 'IBIIRPGMNA', 'jast.tina', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Nx45L4NNsqSPximAv6RRuOAEJIC1u850qJVGmMBvPfTdcvqfaELzS', 'QZFj857aTP', '2022-07-07 18:13:21', '2022-07-07 18:13:21'),
(37, 'Mrs. Alanis Pacocha', 'desiree.pouros@example.com', 'HIVB5NAJBS', 'qharber', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.PjdQpPy9krTvsQEJzTrhe9yeFzQSbOvI07GazKgo.Y4kNzJPwQLO', '3MmzufiTED', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(38, 'Isabel Mosciski', 'konopelski.malcolm@example.com', 'NNJXC75WYT', 'judy.gleichner', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.PjdQpPy9krTvsQEJzTrhe9yeFzQSbOvI07GazKgo.Y4kNzJPwQLO', 'cH4Fs8Jf1M', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(39, 'Wallace O\'Connell', 'reichel.mellie@example.org', '9WJRKSJFMB', 'eboyle', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.PjdQpPy9krTvsQEJzTrhe9yeFzQSbOvI07GazKgo.Y4kNzJPwQLO', 'GSkTsL2I3a', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(40, 'Kenyatta Ullrich', 'harris.chasity@example.org', '8MHH5E2G2I', 'bhoppe', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7BEs4kESH/bhEzWucAAAwO3Zc8VB.nBl2R4CKNMU67DAZC2vH33G.', 'GTpX6WRcKz', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(41, 'Jameson Marvin', 'harvey.christy@example.com', 'RRKV75N30F', 'ahuels', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7BEs4kESH/bhEzWucAAAwO3Zc8VB.nBl2R4CKNMU67DAZC2vH33G.', 'yYf0TBMAcC', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(42, 'Annette Hansen', 'alan20@example.net', '38SEHFUTXJ', 'gail.kessler', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7BEs4kESH/bhEzWucAAAwO3Zc8VB.nBl2R4CKNMU67DAZC2vH33G.', '52b1d2pXJ2', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(43, 'Tabitha Heller', 'eugenia22@example.com', 'TQDLUSRA4W', 'markus.nitzsche', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$/tNuZAgy27HlCjtjApKTBu2auCh29hgX.bN2.CXkkb/qBG3z3pN.O', 'gIw5q7FRQI', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(44, 'Dr. Maymie Wuckert DDS', 'murphy.selena@example.net', 'LZ50ISWZEK', 'lilliana.runte', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$/tNuZAgy27HlCjtjApKTBu2auCh29hgX.bN2.CXkkb/qBG3z3pN.O', '6wiNRaV3qP', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(45, 'Houston Heathcote', 'streich.wilson@example.org', 'VMLWLBTM1W', 'fhahn', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$/tNuZAgy27HlCjtjApKTBu2auCh29hgX.bN2.CXkkb/qBG3z3pN.O', 'AA7oGKGkLK', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(46, 'Dr. Myah Bahringer III', 'furman.witting@example.net', 'X76N8H5FD4', 'vandervort.zena', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$c8kcSeZWHwXr6oEKHNyK1.Z58.vYKPQHInACGlrh8xESy.PrjklNC', 'vAyV03gzxj', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(47, 'Ashlynn Zulauf', 'erica71@example.org', 'KGKHQYVPTE', 'bernier.rex', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$c8kcSeZWHwXr6oEKHNyK1.Z58.vYKPQHInACGlrh8xESy.PrjklNC', '9mMVWnyTPs', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(48, 'Ellen O\'Conner', 'ohyatt@example.org', 'YFNKQLIQ4K', 'waylon.mcglynn', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$c8kcSeZWHwXr6oEKHNyK1.Z58.vYKPQHInACGlrh8xESy.PrjklNC', 'n3X3mqcSKe', '2022-07-07 18:13:22', '2022-07-07 18:13:22'),
(49, 'Prof. Elda Rath DDS', 'thea46@example.net', 'ENCEYRAYSM', 'heichmann', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$oynZJpysUElHITgWYfP/heuFX7e7Lm9s8QexRBIr7mC1zL2Rq0fCC', 'WLri8excUj', '2022-07-07 18:13:23', '2022-07-07 18:13:23'),
(50, 'Keara Berge', 'vbrakus@example.com', 'R3MQZN23KS', 'simonis.omer', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$oynZJpysUElHITgWYfP/heuFX7e7Lm9s8QexRBIr7mC1zL2Rq0fCC', '4L1Tirhtif', '2022-07-07 18:13:23', '2022-07-07 18:13:23'),
(51, 'Dr. Maia Bailey IV', 'neoma.morissette@example.org', 'YJQBBSHGKP', 'mitchell.runolfsson', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$oynZJpysUElHITgWYfP/heuFX7e7Lm9s8QexRBIr7mC1zL2Rq0fCC', 'BMkZFqHTIm', '2022-07-07 18:13:23', '2022-07-07 18:13:23'),
(52, 'Miss Elza Metz', 'towne.rusty@example.net', 'ET8DLCFTWR', 'grant90', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.X14Gejo138rEgpjxdkP/uq3QAotVZHUHPhspeDi0DTuNeEM79SFu', '6xb9L32DX7', '2022-07-07 18:13:23', '2022-07-07 18:13:23'),
(53, 'Nicolette Hickle', 'mitchell.hallie@example.org', 'KYEK63LPDJ', 'bernardo30', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.X14Gejo138rEgpjxdkP/uq3QAotVZHUHPhspeDi0DTuNeEM79SFu', '7vxcOaGEat', '2022-07-07 18:13:23', '2022-07-07 18:13:23'),
(54, 'Hans Jaskolski II', 'glennie17@example.net', 'KZNGO2G3FZ', 'eve.volkman', 'student', NULL, NULL, 'http://localhost/global_assets/images/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.X14Gejo138rEgpjxdkP/uq3QAotVZHUHPhspeDi0DTuNeEM79SFu', 'TPQLovgadu', '2022-07-07 18:13:23', '2022-07-07 18:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `title`, `name`, `level`, `created_at`, `updated_at`) VALUES
(1, 'accountant', 'Accountant', '5', NULL, NULL),
(2, 'parent', 'Parent', '4', NULL, NULL),
(3, 'teacher', 'Teacher', '3', NULL, NULL),
(4, 'admin', 'Admin', '2', NULL, NULL),
(5, 'super_admin', 'Super Admin', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_my_class_id_foreign` (`my_class_id`);

--
-- Indexes for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_requests_book_id_foreign` (`book_id`),
  ADD KEY `book_requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `class_types`
--
ALTER TABLE `class_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplines`
--
ALTER TABLE `disciplines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dorms`
--
ALTER TABLE `dorms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dorms_name_unique` (`name`);

--
-- Indexes for table `elective_combinations`
--
ALTER TABLE `elective_combinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exams_term_year_unique` (`term`,`year`);

--
-- Indexes for table `exam_records`
--
ALTER TABLE `exam_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_records_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_records_my_class_id_foreign` (`my_class_id`),
  ADD KEY `exam_records_student_id_foreign` (`student_id`),
  ADD KEY `exam_records_section_id_foreign` (`section_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grades_name_class_type_id_remark_unique` (`name`,`class_type_id`,`remark`),
  ADD KEY `grades_class_type_id_foreign` (`class_type_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lgas`
--
ALTER TABLE `lgas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lgas_state_id_foreign` (`state_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_student_id_foreign` (`student_id`),
  ADD KEY `marks_my_class_id_foreign` (`my_class_id`),
  ADD KEY `marks_section_id_foreign` (`section_id`),
  ADD KEY `marks_subject_id_foreign` (`subject_id`),
  ADD KEY `marks_exam_id_foreign` (`exam_id`),
  ADD KEY `marks_grade_id_foreign` (`grade_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_classes`
--
ALTER TABLE `my_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `my_classes_class_type_id_name_unique` (`class_type_id`,`name`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_records`
--
ALTER TABLE `parent_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_ref_no_unique` (`ref_no`),
  ADD KEY `payments_my_class_id_foreign` (`my_class_id`);

--
-- Indexes for table `payment_records`
--
ALTER TABLE `payment_records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_records_ref_no_unique` (`ref_no`),
  ADD KEY `payment_records_payment_id_foreign` (`payment_id`),
  ADD KEY `payment_records_student_id_foreign` (`student_id`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pins_code_unique` (`code`),
  ADD KEY `pins_user_id_foreign` (`user_id`),
  ADD KEY `pins_student_id_foreign` (`student_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_student_id_foreign` (`student_id`),
  ADD KEY `promotions_from_class_foreign` (`from_class`),
  ADD KEY `promotions_from_section_foreign` (`from_section`),
  ADD KEY `promotions_to_section_foreign` (`to_section`),
  ADD KEY `promotions_to_class_foreign` (`to_class`);

--
-- Indexes for table `quotas`
--
ALTER TABLE `quotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receipts_pr_id_foreign` (`pr_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_name_my_class_id_unique` (`name`,`my_class_id`),
  ADD KEY `sections_my_class_id_foreign` (`my_class_id`),
  ADD KEY `sections_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_records`
--
ALTER TABLE `staff_records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_records_code_unique` (`code`),
  ADD KEY `staff_records_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_records`
--
ALTER TABLE `student_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study__records`
--
ALTER TABLE `study__records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_my_class_id_name_unique` (`my_class_id`,`name`),
  ADD KEY `subjects_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time_slots_timestamp_from_timestamp_to_ttr_id_unique` (`timestamp_from`,`timestamp_to`,`ttr_id`),
  ADD KEY `time_slots_ttr_id_foreign` (`ttr_id`);

--
-- Indexes for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time_tables_ttr_id_ts_id_day_unique` (`ttr_id`,`ts_id`,`day`),
  ADD UNIQUE KEY `time_tables_ttr_id_ts_id_exam_date_unique` (`ttr_id`,`ts_id`,`exam_date`),
  ADD KEY `time_tables_ts_id_foreign` (`ts_id`),
  ADD KEY `time_tables_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `time_table_records`
--
ALTER TABLE `time_table_records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time_table_records_name_unique` (`name`),
  ADD UNIQUE KEY `time_table_records_my_class_id_exam_id_year_unique` (`my_class_id`,`exam_id`,`year`),
  ADD KEY `time_table_records_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_code_unique` (`code`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_state_id_foreign` (`state_id`),
  ADD KEY `users_lga_id_foreign` (`lga_id`),
  ADD KEY `users_bg_id_foreign` (`bg_id`),
  ADD KEY `users_nal_id_foreign` (`nal_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_requests`
--
ALTER TABLE `book_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_types`
--
ALTER TABLE `class_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disciplines`
--
ALTER TABLE `disciplines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dorms`
--
ALTER TABLE `dorms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `elective_combinations`
--
ALTER TABLE `elective_combinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_records`
--
ALTER TABLE `exam_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lgas`
--
ALTER TABLE `lgas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `my_classes`
--
ALTER TABLE `my_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `parent_records`
--
ALTER TABLE `parent_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_records`
--
ALTER TABLE `payment_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotas`
--
ALTER TABLE `quotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff_records`
--
ALTER TABLE `staff_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `student_records`
--
ALTER TABLE `student_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `study__records`
--
ALTER TABLE `study__records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `time_slots`
--
ALTER TABLE `time_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_tables`
--
ALTER TABLE `time_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_table_records`
--
ALTER TABLE `time_table_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD CONSTRAINT `book_requests_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_records`
--
ALTER TABLE `exam_records`
  ADD CONSTRAINT `exam_records_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_records_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_records_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_records_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_class_type_id_foreign` FOREIGN KEY (`class_type_id`) REFERENCES `class_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lgas`
--
ALTER TABLE `lgas`
  ADD CONSTRAINT `lgas_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marks_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `marks_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marks_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marks_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `my_classes`
--
ALTER TABLE `my_classes`
  ADD CONSTRAINT `my_classes_class_type_id_foreign` FOREIGN KEY (`class_type_id`) REFERENCES `class_types` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_records`
--
ALTER TABLE `payment_records`
  ADD CONSTRAINT `payment_records_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_records_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pins`
--
ALTER TABLE `pins`
  ADD CONSTRAINT `pins_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_from_class_foreign` FOREIGN KEY (`from_class`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promotions_from_section_foreign` FOREIGN KEY (`from_section`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promotions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promotions_to_class_foreign` FOREIGN KEY (`to_class`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promotions_to_section_foreign` FOREIGN KEY (`to_section`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_pr_id_foreign` FOREIGN KEY (`pr_id`) REFERENCES `payment_records` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sections_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `staff_records`
--
ALTER TABLE `staff_records`
  ADD CONSTRAINT `staff_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD CONSTRAINT `time_slots_ttr_id_foreign` FOREIGN KEY (`ttr_id`) REFERENCES `time_table_records` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD CONSTRAINT `time_tables_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_tables_ts_id_foreign` FOREIGN KEY (`ts_id`) REFERENCES `time_slots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_tables_ttr_id_foreign` FOREIGN KEY (`ttr_id`) REFERENCES `time_table_records` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `time_table_records`
--
ALTER TABLE `time_table_records`
  ADD CONSTRAINT `time_table_records_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `time_table_records_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_bg_id_foreign` FOREIGN KEY (`bg_id`) REFERENCES `blood_groups` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_lga_id_foreign` FOREIGN KEY (`lga_id`) REFERENCES `lgas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_nal_id_foreign` FOREIGN KEY (`nal_id`) REFERENCES `nationalities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
