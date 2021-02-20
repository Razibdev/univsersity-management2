-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2021 at 10:22 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websolves_school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `academic_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `dateregistered` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`student_id`, `first_name`, `last_name`, `father_name`, `Mother_name`, `father_phone`, `gender`, `email`, `dob`, `phone`, `address`, `current_address`, `nationality`, `passport`, `status`, `dateregistered`, `user_id`, `department_id`, `faculty_id`, `batch_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Razib', 'Hossen', 'Lal Mia', 'Komola Begum', '01838607272', '0', 'razibhossen8566@gmail.com', '2020-07-26', '01848178478', 'Savar, Dhaka', 'Savar, Dhaka', 'Bangladeshi', 'PP-343', 0, '2020-07-26', 1, 3, 2, 2, '1595721440.jpg', NULL, '2020-07-25 04:31:37', '2020-07-25 18:16:14'),
(2, 'Ratul', 'Ahmed', 'Md Lal Mia', 'Komola Begum', '01848178478', '0', 'razibhossenmna@gmail.com', '2020-07-28', '01838607272', 'Uttar Barha', 'Uttar Barha', 'Bangladeslhi', 'PP-1487', 0, '2020-07-28', 1, 2, 3, 2, '1595943476.jpg', NULL, '2020-07-28 07:37:56', '2020-07-28 07:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `attendance_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `attendace_status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2016', NULL, '2020-07-18 19:32:56', '2020-07-18 19:32:56'),
(2, '2017', NULL, '2020-07-25 18:16:02', '2020-07-25 18:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Class1', '001', NULL, '2020-07-18 19:45:44', '2020-07-18 19:45:44'),
(2, 'Class2', '002', NULL, '2020-07-18 19:45:58', '2020-07-18 19:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `classroom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classroom_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classroom_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `classroom_status` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`classroom_id`, `classroom_name`, `classroom_code`, `classroom_description`, `classroom_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Science Class', 'CSRF-001', 'we go to learn here', 1, NULL, '2020-07-18 20:06:08', '2020-07-18 20:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `class_assignings`
--

CREATE TABLE `class_assignings` (
  `class_assign_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_assignings`
--

INSERT INTO `class_assignings` (`class_assign_id`, `teacher_id`, `schedule_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_schedulings`
--

CREATE TABLE `class_schedulings` (
  `schedule_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_schedulings`
--

INSERT INTO `class_schedulings` (`schedule_id`, `course_id`, `class_id`, `level_id`, `shift_id`, `classroom_id`, `batch_id`, `day_id`, `time_id`, `semester_id`, `start_time`, `end_time`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 2, 1, 1, 2, 2, 1, '2020-07-01', '2020-07-01', 1, NULL, '2020-07-18 22:09:29', '2020-07-20 21:13:51'),
(2, 1, 1, 1, 1, 1, 1, 3, 2, 1, '2020-07-20', '2020-07-20', 1, NULL, '2020-07-20 21:26:15', '2020-07-29 10:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Basic Information Technology', 'CS-001', 'knowledge of the technology elements', 1, NULL, '2020-07-18 19:50:51', '2020-07-18 19:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`day_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', NULL, '2020-07-18 20:07:09', '2020-07-18 20:07:09'),
(2, 'Monday', NULL, '2020-07-18 20:07:18', '2020-07-18 20:07:18'),
(3, 'Tuesday', NULL, '2020-07-18 20:07:40', '2020-07-18 20:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `faculty_id`, `department_name`, `department_code`, `department_description`, `department_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'CSE', '3427', 'nice department', 1, '2020-07-23 20:02:00', '2020-07-23 20:01:36', '2020-07-23 20:02:00'),
(2, 2, 'Information System', 'I-S', 'faculty of information system department', 1, NULL, '2020-07-24 02:33:24', '2020-07-24 02:33:24'),
(3, 2, 'Information Technology', 'I-T', 'Faculty of science and Technology', 1, NULL, '2020-07-24 03:26:56', '2020-07-24 03:26:56'),
(4, 6, 'International Relationship', 'I-R', 'Faculty of Education', 1, NULL, '2020-07-24 03:27:59', '2020-07-24 03:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `faculty_name`, `faculty_code`, `faculty_description`, `faculty_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'CSE', '4875', 'CSE Faculty', 1, NULL, '2020-07-23 20:17:57', '2020-07-23 20:17:57'),
(2, 'Science && Technology', 'F-T-S', 'lorem  lorem   lorem  lorem  lorem lorem  lorem lorem  lorem', 1, NULL, '2020-07-23 20:32:56', '2020-07-23 20:32:56'),
(3, 'Faculty of Arts', 'F-AR', 'Facutly fo arts', 1, NULL, '2020-07-23 22:36:54', '2020-07-23 22:36:54'),
(4, 'Faculty of Commerce', 'F-CO', 'Faculty of commerce', 1, NULL, '2020-07-23 22:39:42', '2020-07-23 22:39:42'),
(5, 'Faculty of Engineering', 'F-E', 'Faculty of engineering', 1, NULL, '2020-07-23 22:41:28', '2020-07-23 22:41:28'),
(6, 'Faculty of Education', 'F-EDU', 'Faculty of Education', 1, NULL, '2020-07-23 22:48:10', '2020-07-23 22:48:10');

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
-- Table structure for table `fee_structures`
--

CREATE TABLE `fee_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `admissionFee` double(8,2) NOT NULL,
  `semesterFee` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_structures`
--

INSERT INTO `fee_structures` (`id`, `semester_id`, `course_id`, `level_id`, `admissionFee`, `semesterFee`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 3000.00, 5000.00, NULL, '2020-08-04 19:22:31', '2020-08-04 19:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `level_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `level`, `course_id`, `level_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Diploma', 1, 'vvvvvvvvvvvvvv', NULL, '2020-07-29 08:24:46', '2020-07-29 08:24:46');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_15_022913_create_classes_table', 1),
(5, '2020_07_15_023429_create_roles_table', 1),
(6, '2020_07_15_034350_create_teachers_table', 1),
(7, '2020_07_15_034902_create_admissions_table', 1),
(8, '2020_07_15_035222_create_classrooms_table', 1),
(9, '2020_07_15_035311_create_levels_table', 1),
(10, '2020_07_15_035351_create_batches_table', 1),
(11, '2020_07_15_035502_create_shifts_table', 1),
(12, '2020_07_15_035548_create_courses_table', 1),
(13, '2020_07_15_035651_create_faculties_table', 1),
(14, '2020_07_15_035741_create_times_table', 1),
(15, '2020_07_15_035829_create_attendances_table', 1),
(16, '2020_07_15_035927_create_academics_table', 1),
(17, '2020_07_15_040021_create_days_table', 1),
(18, '2020_07_15_040120_create_class_assignings_table', 1),
(19, '2020_07_15_040237_create_class_schedulings_table', 1),
(20, '2020_07_15_040338_create_class_transactions_table', 1),
(21, '2020_07_18_052905_create_semesters_table', 1),
(22, '2020_07_20_045218_create_levels_table', 2),
(23, '2020_07_24_012727_create_departments_table', 2),
(24, '2020_07_24_132304_create_rolls_table', 3),
(25, '2020_07_30_003229_create_statuses_table', 4),
(26, '2020_08_04_130737_create_fee_structures_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('razibhossen8566@gmail.com', '$2y$10$eoaCvo454vTY.QNrdobaneN7JtdmCphRngQvPLubTMRTTMaXYrEtO', '2020-07-28 06:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Supper Admin', NULL, '2020-07-18 04:17:03', '2020-07-18 04:17:03'),
(2, 'Principal', NULL, '2020-07-18 04:17:22', '2020-07-18 04:17:22'),
(3, 'Teacher', NULL, '2020-07-18 04:17:43', '2020-07-18 04:17:43'),
(4, 'Data Entry', NULL, '2020-07-18 04:17:59', '2020-07-18 04:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `rolls`
--

CREATE TABLE `rolls` (
  `roll_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `isonline` tinyint(4) NOT NULL DEFAULT 0,
  `ip_address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rolls`
--

INSERT INTO `rolls` (`roll_id`, `student_id`, `username`, `password`, `login_time`, `logout_time`, `isonline`, `ip_address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '12155555555', '1210000', NULL, NULL, 1, '::1', NULL, NULL, '2020-07-28 03:59:13'),
(2, 2, '121555555551', '121555555551', NULL, NULL, 1, '::1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `semester_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semester_id`, `semester_name`, `semester_code`, `semester_duration`, `semester_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '3rd', '5555', '6 monthe', 'dddddddddddddddddddddd', NULL, '2020-07-17 23:41:31', '2020-07-17 23:41:55'),
(2, '4th', 'dddd', '5 months', 'adddd', '2020-07-18 01:00:14', '2020-07-18 00:06:10', '2020-07-18 01:00:14'),
(3, 'dd', 'ff', 'ee', 'ddd', '2020-07-18 01:02:47', '2020-07-18 01:02:44', '2020-07-18 01:02:47'),
(4, 'dd', 'ff', 'ddd', 'dddd', NULL, '2020-07-18 01:11:32', '2020-07-18 01:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`shift_id`, `shift`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Morning', NULL, '2020-07-18 20:05:06', '2020-07-18 20:05:06'),
(2, 'Afternoon', NULL, '2020-07-18 20:05:17', '2020-07-18 20:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`status_id`, `teacher_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2020-07-30 00:37:19', '2020-07-30 00:37:28'),
(2, 1, NULL, '2020-07-30 00:37:36', '2020-07-30 00:37:45'),
(3, 1, NULL, '2020-07-29 19:37:19', '2020-07-29 19:37:19'),
(4, 1, NULL, '2020-07-29 19:55:21', '2020-07-29 19:55:21'),
(5, 1, NULL, '2020-07-29 19:56:28', '2020-07-29 19:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `dateregistered` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `first_name`, `last_name`, `gender`, `email`, `dob`, `phone`, `address`, `nationality`, `passport`, `status`, `dateregistered`, `user_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Razib', 'Hossen', '0', 'razibhossen8566@gmail.com', '2020-07-23', '01848178478', 'Savar, Dhaka', 'Bangladeshi', 'Pc401789', 1, '2020-07-23', 1, '598.png', NULL, '2020-07-23 08:39:08', '2020-08-03 23:08:11'),
(2, 'Habibur', 'Rahman', '0', 'habib@gmail.com', '2020-07-23', '01838607272', 'Uttar, Barha', 'Bangladeshi', 'PS01478', 1, '2020-07-23', 1, '164.png', NULL, '2020-07-23 08:40:26', '2020-08-03 23:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `time_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`time_id`, `time`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '7:30 AM', '2020-07-18 20:09:32', '2020-07-18 20:08:50', '2020-07-18 20:09:32'),
(2, '7:30 AM - 9:10 AM', NULL, '2020-07-18 20:09:54', '2020-07-18 20:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 4,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Razib Hossen', 2, 'razibhossen8566@gmail.com', NULL, '$2y$10$JIdTs1B5uYOAiadvnkkdXOn3qhhe0elyt8uP2wfRdN9KJgo3AiUqy', 'p8EgHDj2y2lNvFkzgLKvOXU0xjFWztpSyJrXcF8zerVGS75JyiJ5Zx5ICNjv', NULL, '2020-07-17 23:41:03', '2020-07-17 23:41:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`academic_id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `admissions_email_unique` (`email`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `classes_class_code_unique` (`class_code`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`classroom_id`),
  ADD UNIQUE KEY `classrooms_classroom_code_unique` (`classroom_code`);

--
-- Indexes for table `class_assignings`
--
ALTER TABLE `class_assignings`
  ADD PRIMARY KEY (`class_assign_id`);

--
-- Indexes for table `class_schedulings`
--
ALTER TABLE `class_schedulings`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `departments_department_code_unique` (`department_code`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`),
  ADD UNIQUE KEY `faculties_faculty_code_unique` (`faculty_code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structures`
--
ALTER TABLE `fee_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `rolls`
--
ALTER TABLE `rolls`
  ADD PRIMARY KEY (`roll_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `academic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `attendance_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `classroom_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class_assignings`
--
ALTER TABLE `class_assignings`
  MODIFY `class_assign_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class_schedulings`
--
ALTER TABLE `class_schedulings`
  MODIFY `schedule_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `day_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculty_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_structures`
--
ALTER TABLE `fee_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rolls`
--
ALTER TABLE `rolls`
  MODIFY `roll_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `shift_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `status_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `time_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
