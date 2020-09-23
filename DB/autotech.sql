-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 02:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$m/ihjfXukZ4F4UyUeF4wiOSkfYG9r3kxKq9b4HsODh4glv5Hak43S', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit_per_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limit_per_coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_passwords`
--

CREATE TABLE `customer_passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_07_02_063221_create_admins_table', 1),
(5, '2020_07_02_063324_create_services_table', 1),
(6, '2020_07_02_120044_create_push_notifications_table', 1),
(7, '2020_07_02_120141_create_reviews_table', 1),
(8, '2020_07_02_120318_create_customers_table', 1),
(9, '2020_07_02_131158_create_areas_table', 1),
(10, '2020_07_03_065420_create_settlement_periods_table', 1),
(11, '2020_07_07_095137_create_service_times_table', 1),
(12, '2020_07_07_102105_create_shop_services_table', 1),
(13, '2020_07_07_133325_create_coupons_table', 1),
(14, '2020_07_08_101627_create_orders_table', 1),
(15, '2020_07_08_144001_create_sliders_table', 1),
(16, '2020_07_08_144823_create_banners_table', 1),
(17, '2020_07_09_075148_create_new_services_table', 1),
(18, '2020_07_11_053418_create_shop_passwords_table', 1),
(19, '2020_07_12_082526_create_settings_table', 1),
(20, '2020_07_12_082740_create_terms_and_conditions_table', 1),
(21, '2020_07_12_145920_create_shop_packages_table', 1),
(22, '2020_07_12_150019_create_shop_package_items_table', 1),
(23, '2020_07_15_122057_create_shop_workers_table', 1),
(24, '2020_07_16_085256_create_customer_passwords_table', 1),
(25, '2020_07_16_112653_create_shop_roles_table', 1),
(26, '2020_07_17_100127_create_roles_table', 1),
(27, '2020_08_24_112758_create_used_packages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new_services`
--

CREATE TABLE `new_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `push_notifications`
--

CREATE TABLE `push_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_package_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_package_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_package_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_package_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_ratings_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_request_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_request_update` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_request_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_request_update` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_request_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_request_update` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_to_shop_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_to_customer_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revenue_reports_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_reports_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_create` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_edit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_delete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_settings_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_and_condition_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_period_read` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `dashboard`, `customer_read`, `customer_create`, `customer_edit`, `customer_delete`, `shop_read`, `shop_create`, `shop_edit`, `shop_delete`, `category_read`, `category_create`, `category_edit`, `category_delete`, `shop_package_read`, `shop_package_create`, `shop_package_edit`, `shop_package_delete`, `review_ratings_read`, `service_read`, `service_create`, `service_edit`, `service_delete`, `service_request_read`, `service_request_update`, `push_notification_read`, `push_notification_create`, `push_notification_edit`, `push_notification_delete`, `notification_request_read`, `notification_request_update`, `coupon_read`, `coupon_create`, `coupon_edit`, `coupon_delete`, `coupon_request_read`, `coupon_request_update`, `booking_read`, `area_read`, `area_create`, `area_edit`, `area_delete`, `chat_to_shop_read`, `chat_to_customer_read`, `revenue_reports_read`, `settlement_reports_read`, `user_read`, `user_create`, `user_edit`, `user_delete`, `roles_read`, `roles_create`, `roles_edit`, `roles_delete`, `slider_read`, `slider_create`, `slider_edit`, `slider_delete`, `banner_read`, `banner_create`, `banner_edit`, `banner_delete`, `application_settings_read`, `terms_and_condition_read`, `settlement_period_read`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name_arabic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_times`
--

CREATE TABLE `service_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_times`
--

INSERT INTO `service_times` (`id`, `shop_id`, `days`, `open_time`, `close_time`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sunday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(2, '1', 'Monday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(3, '1', 'Tuesday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(4, '1', 'Wednesday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(5, '1', 'Thursday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(6, '1', 'Friday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(7, '1', 'Saturday', NULL, NULL, '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(8, '2', 'Sunday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(9, '2', 'Monday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(10, '2', 'Tuesday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(11, '2', 'Wednesday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(12, '2', 'Thursday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(13, '2', 'Friday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(14, '2', 'Saturday', NULL, NULL, '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(15, '3', 'Sunday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(16, '3', 'Monday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(17, '3', 'Tuesday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(18, '3', 'Wednesday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(19, '3', 'Thursday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(20, '3', 'Friday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(21, '3', 'Saturday', NULL, NULL, '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(22, '4', 'Sunday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33'),
(23, '4', 'Monday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33'),
(24, '4', 'Tuesday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33'),
(25, '4', 'Wednesday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33'),
(26, '4', 'Thursday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33'),
(27, '4', 'Friday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33'),
(28, '4', 'Saturday', NULL, NULL, '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_iframe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `phone`, `address`, `city`, `area`, `map_iframe`, `latitude`, `longitude`, `license`, `logo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settlement_periods`
--

CREATE TABLE `settlement_periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settlement_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settlement_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settlement_periods`
--

INSERT INTO `settlement_periods` (`id`, `settlement_period`, `settlement_amount`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_packages`
--

CREATE TABLE `shop_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validity_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_renewal_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_renewal_remember_days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_packages`
--

INSERT INTO `shop_packages` (`id`, `package_name`, `price`, `validity`, `validity_count`, `next_renewal_discount`, `package_renewal_remember_days`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TRIAL', '0', '1', '30', '0', '0', '0', '2020-08-28 10:07:49', '2020-08-28 10:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `shop_package_items`
--

CREATE TABLE `shop_package_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_package_items`
--

INSERT INTO `shop_package_items` (`id`, `package_id`, `package_item`, `created_at`, `updated_at`) VALUES
(1, '1', '', '2020-08-28 10:07:49', '2020-08-28 10:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `shop_passwords`
--

CREATE TABLE `shop_passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_passwords`
--

INSERT INTO `shop_passwords` (`id`, `date`, `end_date`, `shop_id`, `owner_name`, `shop_name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-08-28', '2020-09-11', '1', 'Aravind', 'Aravind', 'aravind.0216@gmail.com', '0', '2020-08-28 08:03:21', '2020-08-28 08:03:21'),
(2, '2020-08-28', '2020-09-11', '2', 'aravind', 'Aravind', 'aravind.0216@gmail.com', '0', '2020-08-28 09:34:36', '2020-08-28 09:34:36'),
(3, '2020-08-28', '2020-09-11', '3', 'aravind', 'Aravind', 'aravind.0216@gmail.com', '0', '2020-08-28 09:35:24', '2020-08-28 09:35:24'),
(4, '2020-08-28', '2020-09-11', '4', 'Aravind', 'Aravind', 'aravind.0216@gmail.com', '1', '2020-08-28 10:08:33', '2020-08-28 10:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `shop_roles`
--

CREATE TABLE `shop_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_roles`
--

INSERT INTO `shop_roles` (`id`, `shop_id`, `role_name`, `dashboard`, `appointment`, `calendor`, `push_notification`, `service`, `review`, `coupon`, `workers`, `reports`, `roles`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_services`
--

CREATE TABLE `shop_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_workers`
--

CREATE TABLE `shop_workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_y` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_and_condition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `terms_and_condition`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `used_packages`
--

CREATE TABLE `used_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remind_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `used_packages`
--

INSERT INTO `used_packages` (`id`, `package_id`, `active_date`, `expiry_date`, `remind_date`, `staus`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-08-28', '2020-09-27', '2020-09-27', '0', '2020-08-28 10:08:33', '2020-08-28 10:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_package` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `used_package_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remind_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_license` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_copy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirated_id_copy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `remember_token`, `name`, `phone`, `password`, `shop_name`, `city`, `area`, `address`, `nationality`, `emirates_id`, `passport_number`, `shop_package`, `used_package_id`, `active_date`, `expiry_date`, `remind_date`, `shop_commission`, `trade_license`, `passport_copy`, `emirated_id_copy`, `latitude`, `longitude`, `signature_data`, `login_status`, `status`, `user_id`, `role_id`, `service_ids`, `created_at`, `updated_at`) VALUES
(4, 'aravind.0216@gmail.com', NULL, NULL, 'Aravind', NULL, '$2y$10$IY33QdkiUqnykixOKni/vuWt5uYUm25F7TOeA5vj3rm4Hy4UEblC2', 'Aravind', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2020-08-28', '2020-09-27', '2020-09-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '4', 'admin', NULL, '2020-08-28 10:08:33', '2020-08-28 10:15:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_passwords`
--
ALTER TABLE `customer_passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_services`
--
ALTER TABLE `new_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `push_notifications`
--
ALTER TABLE `push_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_times`
--
ALTER TABLE `service_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settlement_periods`
--
ALTER TABLE `settlement_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_packages`
--
ALTER TABLE `shop_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_package_items`
--
ALTER TABLE `shop_package_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_passwords`
--
ALTER TABLE `shop_passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_roles`
--
ALTER TABLE `shop_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_services`
--
ALTER TABLE `shop_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_workers`
--
ALTER TABLE `shop_workers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `used_packages`
--
ALTER TABLE `used_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_passwords`
--
ALTER TABLE `customer_passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `new_services`
--
ALTER TABLE `new_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `push_notifications`
--
ALTER TABLE `push_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_times`
--
ALTER TABLE `service_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settlement_periods`
--
ALTER TABLE `settlement_periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_packages`
--
ALTER TABLE `shop_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_package_items`
--
ALTER TABLE `shop_package_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_passwords`
--
ALTER TABLE `shop_passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop_roles`
--
ALTER TABLE `shop_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_services`
--
ALTER TABLE `shop_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_workers`
--
ALTER TABLE `shop_workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `used_packages`
--
ALTER TABLE `used_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
