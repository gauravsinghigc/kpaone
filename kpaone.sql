-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 04:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpaone`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `ConfigsId` int(100) NOT NULL,
  `ConfigGroupName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `configurationsid` int(100) NOT NULL,
  `configurationname` varchar(50) NOT NULL,
  `configurationvalue` varchar(9999) NOT NULL,
  `configurationtype` varchar(30) NOT NULL DEFAULT 'text',
  `configurationsupportivetext` varchar(1000) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`configurationsid`, `configurationname`, `configurationvalue`, `configurationtype`, `configurationsupportivetext`) VALUES
(1, 'APP_NAME', 'KP ADITYA CO PRIVATE LIMITED', 'TEXT', 'null'),
(2, 'TAGLINE', 'SYMPLIFYING CUNSTRUCTIONS BY DELIVERING VALUES', 'text', 'null'),
(3, 'OWNER_NAME', 'GAURAV SINGH', 'text', 'null'),
(4, 'PRIMARY_PHONE', '9393660033', 'phone', 'null'),
(5, 'PRIMARY_EMAIL', 'info@kpaditya.co.in', 'email', 'null'),
(6, 'SHORT_DESCRIPTION', 'MEYzNm9DY282T3AyRHhJVmlWMUJiSjFuUnBuUURQQnpzb2wzQjJFcVB5Tisxem9Bc3RiSzNOY1FYeXltb2lQVzlydllmbXFyVjZ5UW5ySXRVMzF4YWowaEQyNmcraGd2NDNnMjFGODgzd2RkZTFka0dsVE5nVmtYQlBsWmRyWk4zcG80OGFvN3pURjVZemt2RklxUEk2SU1saEQxYU1vbU4wU0lDYjBqNFR5SmlmaUh3Yk1lQ1ZlOTdHZ2h2cVZURHJVcGZ6eUo0Ti9lY0dnUUZFTHhpYkxkcmowZmxmVGQwdDg4TWtJVHhwRmNkb05kQlZoM0txY28xYnBnejJUbGtHYlpWSkkzZW92d2JHUXd3RFAxT1A5N2hmTmxxV0RRb2N0SUhRMTlxOVo4M05NZnRoblJPdXM2OHMxeEdOajhUVFdSOGlWOWZwZENLOGlkWnZDUU5RTmw5eitXdU5ZMjJIcXRaWkd5SUt6RlJ2MTFuZ1YxVncwS3BGWG84ZFh3K1Z1aEZ4UHgrSEI0c3dEYUJDeFdWZ0dxMjBrSTQ3bnJkWmg4eFlyWDZZTzM2eUFOYXpsSjJybjBSYXBHWDJ3N1pyMUVmRWtsQVdCMHJaM2NoT3NPS3Y2UHdiSlJtVkhxeEtOanJBbHcxRDRIY0w2eUVJU0tpTlN4Vks5YjBKZjQrL1pROTc4YXB2Q2RLMjlDWHFVcUFybFowdFN4ZnF1TGtYRW1zMkZCTk5kZkRpV0xwMDgwaWpLSWZXUHpkYUpGdTdONmljTzN4bmUzNkZBVWw2R3oyZz09', 'text', 'null'),
(7, 'PRIMARY_ADDRESS', 'RFJSZTBmVHhhY2J2cTVTOFFZMlBHcGhZaGZYTG9HRkpLcXFpaTlveXM3b0wxT25yVytvYVRMSXdqdEw2ekxMeTNIYnlhVkdSNEdBSnFoT1JjdHptU1NNQ2g1REoweWRHZFdvNzBvUGIrb0VDWm9GeWhqSlcwVittZW9ZN1Q3YkQ=', 'address', 'null'),
(8, 'PRIMARY_MAP_LOCATION_LINK', 'aWpTWWNsdmhvbDBXM3M0NnVyRklGZz09', 'map', 'null'),
(9, 'SENDER_MAIL_ID', 'sender@gmail.com', 'email', 'null'),
(10, 'RECEIVER_MAIL', 'sender@domain.com', 'email', 'null'),
(11, 'REPLY_TO', 'not available', 'email', 'null'),
(12, 'SUPPORT_MAIL', 'support@domain.com', 'email', 'null'),
(13, 'ENQUIRY_MAIL', 'enquiry@domain.com', 'email', 'null'),
(14, 'ADMIN_MAIL', 'admin@domain.com', 'text', 'null'),
(15, 'SMS_API_KEY', 'null', 'text', 'null'),
(16, 'DOWNLOAD_ANDROID_APP_LINK', 'https://play.google.com/store/apps/details?id=XXXXXXXXX', 'link', 'null'),
(17, 'DOWNLOAD_IOS_APP_LINK', 'ios app link', 'link', 'null'),
(18, 'DOWNLOAD_BROCHER_LINK', 'brochur', 'link', 'null'),
(20, 'CONTROL_WORK_ENV', 'DEV', 'boolean', 'dev, prod'),
(21, 'CONTROL_SMS', 'false', 'boolean', 'true, false'),
(23, 'CONTROL_MAILS', 'false', 'boolean', 'true, false'),
(24, 'CONTROL_NOTIFICATION', 'true', 'boolean', 'true, false'),
(25, 'CONTROL_MSG_DISPLAY_TIME', '4500', 'number', '1000, 10000'),
(26, 'CONTROL_APP_LOGS', 'false', 'boolean', 'true, false'),
(27, 'APP_LOGO', 'ABC_COMPANY__27_Nov_2024_08_11_03_82242389677_.png', 'img', 'null'),
(28, 'SMS_OTP_TEMP_ID', 'null', 'text', 'null'),
(29, 'PASS_RESET_OTP_TEMP', 'null', 'text', 'null'),
(30, 'SMS_SENDER_ID', 'null', 'text', 'null'),
(31, 'PG_PROVIDER', 'PAYTM', 'text', 'null'),
(32, 'PG_MODE', 'TEST', 'text', 'null'),
(33, 'MERCHENT_ID', 'XXXXXXXXXXXXXXXXXXXXXXXX', 'text', 'null'),
(34, 'MERCHANT_KEY', 'XXXxxXxxXxXxxXxXxXXxXxXXxxxXxXXx', 'text', 'null'),
(35, 'ONLINE_PAYMENT_OPTION', 'false', 'boolean', 'true, false'),
(36, 'CONTROL_NOTIFICATION_SOUND', 'true', 'boolean', 'true, false'),
(37, 'FINANCIAL_YEAR', 'September - August', 'text', 'null'),
(38, 'GST_NO', '36AAICK1127D1ZX', 'text', 'null'),
(39, 'COMPANY_TYPE', 'PUBLISHING', 'text', 'null'),
(40, 'LOGIN_BG_IMAGE', 'ABC_COMPANY__27_Nov_2024_08_11_33_67168632264_.png', 'text', 'null'),
(41, 'PRIMARY_AREA', 'M3RKYjIyemJJcnFXZ2xLdzZINzdMNVNqRVJFbkY2ZnpTQ1BmNFdQcUgrMD0=', 'text', 'null'),
(42, 'PRIMARY_CITY', 'Q1o2a0w2NEpQOEFLTHA3ZHdNYjh4UT09', 'text', 'null'),
(43, 'PRIMARY_STATE', 'Rm9nUDlDRTVkV20zWm8wMmEvMEpPZz09', 'text', 'null'),
(44, 'PRIMARY_COUNTRY', 'MmtSc3hhcXA1OU1mNjFaYUJ6VVhIZz09', 'text', 'null'),
(45, 'PRIMARY_PINCODE', 'RjV6emhnOUxVeC9ic29tQ25BV211QT09', 'text', 'null'),
(46, 'TAX_NO', 'DELA61323D1', 'text', 'null'),
(47, 'APP_THEME', 'facebook', 'text', 'null'),
(48, 'DEFAULT_RECORD_LISTING', '10', 'text', 'null'),
(49, 'WEBSITE', 'false', 'text', 'null'),
(50, 'APP', 'false', 'text', 'null'),
(51, 'MAX_ORDER_QTY', '', 'text', 'null'),
(52, 'MIN_ORDER_QTY', '', 'text', 'null'),
(53, 'GOOGLE_MAP_API', '', 'text', 'null'),
(54, 'MINIMUM_ATTANDANCE_RANGE', '5', 'text', 'null'),
(55, 'OFFICE_START_TIME', '10:00', 'text', 'null'),
(56, 'OFFICE_MAX_START_TIME', '10:15', 'text', 'null'),
(57, 'OFFICE_HALF_DAY_ALLOWED', '16:30', 'text', 'null'),
(58, 'MAXIMUM_ALLOWED_LATE_CHECK_IN', '3', 'text', 'null'),
(59, 'OFFICE_LUNCH_START_TIME', '13:00', 'text', 'null'),
(60, 'OFFICE_END_TIME', '18:30', 'text', 'null'),
(61, 'SHORT_LEAVE_MAX_TIME', '16:30', 'text', 'null'),
(62, 'OFFICE_LUNCH_TIME_IN_MINUTES', '40', 'text', 'null'),
(63, 'WORKING_DAYS_IN_MONTH', '0', 'text', 'null'),
(64, 'AUTO_MONTHLY_PAYROLL_COSING_DATE', '', 'text', 'null'),
(65, 'MAXIMUM_SHORT_LEAVE_IN_MONTH', '3', 'text', 'null'),
(66, 'DEDUCTION_AMOUNT_ON_PER_LATE', '0', 'text', 'null'),
(67, 'EMP_CODE', 'RNA', 'text', 'null'),
(68, 'WEBSITE_LOGO_SQ', 'ABC_COMPANY__27_Nov_2024_08_11_10_96406725286_.png', 'text', 'null'),
(69, 'WEBSITE_LOGO_REC', 'ABC_COMPANY__27_Nov_2024_08_11_18_70179380849_.png', 'text', 'null'),
(70, 'FAVICON_ICON', 'ABC_COMPANY__27_Nov_2024_08_11_27_94145302569_.png', 'text', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `config_locations`
--

CREATE TABLE `config_locations` (
  `config_location_id` int(10) NOT NULL,
  `config_location_name` varchar(25) NOT NULL,
  `config_location_address` varchar(255) NOT NULL,
  `config_location_Latitude` varchar(25) NOT NULL,
  `config_location_Longitude` varchar(25) NOT NULL,
  `config_location_status` int(1) NOT NULL,
  `config_location_created_at` varchar(25) NOT NULL,
  `config_location_updated_at` varchar(25) NOT NULL,
  `config_location_created_by` int(10) NOT NULL,
  `config_location_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_locations`
--

INSERT INTO `config_locations` (`config_location_id`, `config_location_name`, `config_location_address`, `config_location_Latitude`, `config_location_Longitude`, `config_location_status`, `config_location_created_at`, `config_location_updated_at`, `config_location_created_by`, `config_location_updated_by`) VALUES
(1, 'NOIDA', 'UFdBZzAxbHNKN1ZIUThDdnNYWDk3bFJKMXJWRWJXVGpIYnZkbzF3aUFqZVdWaVpyWG9PdEV0VEFrajQxV3ZxNw==', '28.627348', '77.380244', 1, '2023-05-10 05:09:48 pm', '2024-11-27 08:32:25 AM', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_mail_sender`
--

CREATE TABLE `config_mail_sender` (
  `config_mail_sender_id` int(10) NOT NULL,
  `config_mail_sender_host` varchar(255) NOT NULL,
  `config_mail_sender_username` varchar(100) NOT NULL,
  `config_mail_sender_password` varchar(50) NOT NULL,
  `config_mail_sender_port` varchar(10) NOT NULL,
  `config_mail_sent_from` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_mail_sender`
--

INSERT INTO `config_mail_sender` (`config_mail_sender_id`, `config_mail_sender_host`, `config_mail_sender_username`, `config_mail_sender_password`, `config_mail_sender_port`, `config_mail_sent_from`) VALUES
(1, 'smtp.hostinger.com', 'development@navix.in', 'Gsi@9810895713', '465', 'development@navix.in');

-- --------------------------------------------------------

--
-- Table structure for table `config_pgs`
--

CREATE TABLE `config_pgs` (
  `ConfigPgId` int(100) NOT NULL,
  `ConfigPgProvider` varchar(100) NOT NULL,
  `ConfigPgMode` varchar(100) NOT NULL,
  `ConfigPgMerchantId` varchar(500) NOT NULL,
  `ConfigPgMerchantKey` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_pgs`
--

INSERT INTO `config_pgs` (`ConfigPgId`, `ConfigPgProvider`, `ConfigPgMode`, `ConfigPgMerchantId`, `ConfigPgMerchantKey`) VALUES
(1, 'RAZORAPAY', 'TEST', 'XXXXXXXXXXXXXXXXXX', 'XxXxxXxXXxXxXxXxXXxXxxXxXXx'),
(2, 'PAYTM', 'TEST', 'XXXXXXXXXXXXXXXXXXXXXXXX', 'XXXxxXxxXxXxxXxXxXXxXxXXxxxXxXXx');

-- --------------------------------------------------------

--
-- Table structure for table `config_url_types`
--

CREATE TABLE `config_url_types` (
  `cut_id` int(10) NOT NULL,
  `cut_name` varchar(30) NOT NULL,
  `cut_icon` varchar(50) NOT NULL,
  `cut_created_at` varchar(45) NOT NULL,
  `cut_updated_at` varchar(45) NOT NULL,
  `cut_created_by` int(10) NOT NULL,
  `cut_updated_by` int(10) NOT NULL,
  `cut_status` int(2) NOT NULL,
  `if_cut_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_url_types`
--

INSERT INTO `config_url_types` (`cut_id`, `cut_name`, `cut_icon`, `cut_created_at`, `cut_updated_at`, `cut_created_by`, `cut_updated_by`, `cut_status`, `if_cut_deleted`) VALUES
(1, 'Facebook', 'fa-facebook', '2024-09-27 08:17:55 PM', '2024-09-27 08:17:55 PM', 1, 1, 1, NULL),
(2, 'Instagram', 'fa-instagram', '2024-09-27 08:30:33 PM', '2024-09-27 08:30:33 PM', 1, 1, 1, NULL),
(3, 'Youtube', 'fa-youtube', '2024-09-27 08:32:13 PM', '2024-09-27 08:32:13 PM', 1, 1, 1, NULL),
(4, 'Website', 'fa-globe', '2024-09-27 08:32:29 PM', '2024-09-27 08:32:29 PM', 1, 1, 1, NULL),
(5, 'MAP &amp; LOCATION', 'fa-map-marker', '2024-09-27 08:33:37 PM', '2024-09-27 08:33:37 PM', 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config_values`
--

CREATE TABLE `config_values` (
  `ConfigValueId` int(100) NOT NULL,
  `ConfigValueGroupId` varchar(100) NOT NULL,
  `ConfigValueDetails` varchar(100) NOT NULL,
  `ConfigReferenceId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config_vendor_categories`
--

CREATE TABLE `config_vendor_categories` (
  `cvc_id` int(10) NOT NULL,
  `cvc_name` varchar(100) NOT NULL,
  `cvc_desc` varchar(725) NOT NULL,
  `cvc_created_at` varchar(45) NOT NULL,
  `cvc_updated_at` varchar(45) NOT NULL,
  `cvc_created_by` int(10) NOT NULL,
  `cvc_updated_by` int(10) NOT NULL,
  `cvc_status` int(2) NOT NULL,
  `is_cvc_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_vendor_categories`
--

INSERT INTO `config_vendor_categories` (`cvc_id`, `cvc_name`, `cvc_desc`, `cvc_created_at`, `cvc_updated_at`, `cvc_created_by`, `cvc_updated_by`, `cvc_status`, `is_cvc_deleted`) VALUES
(1, 'Raw Materials', 'bGFMcytUT2ZzR1ZxUlY2TjAxYVU1ZTdkVEQ2UkNHNzdxelJ2TVpXVzkyb1pwSC9rTEN0NnNNOG1pMkRzRFlwZGk4YnFmckZMT0pRSVBNZjBmM01iekE9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(2, 'Components and Parts', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDZDN1d0hVMjMzbDJ4SFpld05VdnhFem9PUi9jdWcvUE5lVUdQdjBwRzQ4QSs2STlMQmtSbGpXTlNSWStYMWYxeTl3cnF4dWhXTVBmUFZhSncyaytCQ009', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(3, 'Industrial Supplies', 'OWFTUDBpenhKVDYxTmdSbFBiRFcyMy9hemgyeHUxTjRuSGErcXB4aEl4K1Q1OGI2WWJqUHhSYk8ycWVoOTg1dTVTSmlOM1hMa2trbktYNXEwbDBlMmlaYkNUSTdCRjlJc2U0ckZVL09YN1E9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(4, 'Machinery and Equipment', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPaEoxN0prdEhBM1E1VjlXSm94bDMrTHAyZmttdnZwT3ZVK2NMSVhxZko4NmQ0WDBUUlpOdFN3bFVKYkJWTnhGVktFZGZxb1Z4ZGNwdHd6M01KekJ1TE09', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(5, 'Construction Machinery', 'eGNxNWdxR0REcFppRzRTdHRySjkrVFRHZ2RaN1phYW1rcGNETkdjU3U0b0RwMVRVMEJIS1dQY3VFSk9waDNQUWlhQVZ0ekxZRWFxakZhbW5uNnZHNXc9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(6, 'Office Equipment', 'M0ViSXpncjFEeTZlMEFBQkFqbzhNeTNHS0t4RE9qekNuVmtsbzVSeGZuczJFdFZoNnBWMlhQcEhiTW9ZWmM2VWxoQzhibXQ0VU1hc3pPc1BrbWZlNUs5ZlJvV1NSWWliNVVvOE1Gb3NqekV3NUdUMThvNmpTa00zdngxK25ybmM=', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(7, 'IT Hardware', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPZ2JMbXlRbkw1N1p1Q3dYSUVFM29XeWlhdElTUWIvaTg4TEJ2cXBYcVRZZm1raHNyZytBWndqbi9XTjRNRHFGQVY0UXByeElpVjFXMjhERG9hMnhVVGc9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(8, 'IT Software', 'V2EwUi9GOE1GV2JmakhvR2dqRFE3TFNQRzU1c2tDd3dNVHk3NHA1VkU0dWd1UHNCQ2pQRVZLMFpCZkZnOExBdFBFNTFPMU9xQi85SnZYZ1dLWmZ3aWRLNFB4ekJ5UFp6cVllTWMycmU2OUk9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(9, 'Telecommunications', 'Rjk4aGptTjBCeWxBR2VLZ0R3Wm80TzFNNHRIemJaUU9zMUthL2tYcUcvWmFVT3VYMnRWYjRzUWVtSVZocWIvdTRhQ1hMZWRJeVFrY0lkK0R0b2o0TFhta252dnp0VG0zRHFTVURIeFdDSTg9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(10, 'Cybersecurity Services', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXeXhmQ1ZUUVZJUzdzQU9tL0QybGRlbG5JVStoR0o0Rk5iUkdza08zVFNhZVRpamQ0K0N2aGQ1Q3B6RExOTGxqbnc9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(11, 'Consulting Services', 'YmllY01aSEZKV0J0dXN5VnIvdnFleW1hUEdXYmw2ODV4VVNBcTV3MTdmcjhPbVo5d29KalFkcFBMYmF2UFk2N09xc2NmcUFqY241V3VBTi9yVlFScGpWNnZ2dmMzTlRzWmN2T0hZSG1uUXM9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(12, 'Legal Services', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXeTc4N1BvTDFZUmR1dGF3VWFremErVTd5Z0pDZDhQNFJCS00reDVoOGpWdjQ5T2VoNDVUVkp4TFJ4VmJzNjgyam13N25haU1yaWxLZDJXRDVCbW5Uc0k9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(13, 'Accounting Services', 'Y0FJcllVSm1Jd1V4MkRobXBnWEFFRGxGQU5FeGJuOC9TcGhnK1ZMdW1uUWJXcHZ4dlZMSG5JdWRXeEhrOWoxVTFDVHd6QlRHdHdJSlBKU0RaNHNvSzRIWVZFaVFBSGVBT2hvNWU1RVEwN289', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(14, 'Human Resources Services', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXL29TUzNCTUR6U2pGaUVKSE41QytnOXUrcXB6RXpFeGRMU3l5ZHQzbnZrWFZsUkh4dDJ1VDRjUmc3VElXVTg2ZWtkWlhlUG54bmNnZTdtWHhoMEx1S0k9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(15, 'Marketing Services', 'TTBwdUJYMnZaNWNSVVRJS2FpZGRhK0VKQ3dPWVU3THRvdGkxQURpOFovYkFtMlczalJBUUtXVGNuSXZPbk0yWDhZK3o5N1Y0MEFIMTdHd0xEakxBejBpbjFKcnpuTE1aL28vTjc3ZlU5WUU9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(16, 'Recruitment and Staffing', 'MUN3YmQ1V25ESEF4cWZGNThBaXdNOXp3dExHaE44am5YdUhTT2NlNlJvODF4ek9OTjR1cEJzbXhuaGVVL0JBTDhSYmxmTTNpR3NuUUw0cWFyV1p5L0xEU2lmR1NZRlNTamZyYnF1ellidmc9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(17, 'Construction Services', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXKytkS0RZem5wWHpybEpTUnhWYVJYRFlzV3Y3Wnk4dEVCY3ZJZzRiTlVDV2ZFU1lzd1dBNlQwM0VLTEdjaElTL2c9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(18, 'Facility Management', 'QTA5cGhkRERySDV5R1dJeUpqS2RQY21td0dnbnVUYVdueEZKcW14T3pTVkIxQkNydThmS2QyTHQwdGNrS1kxQm1HRHp0N2lIK0JqRGFhSExEZ05QMGV0S3NDTThzNVVhMGhjaTRxeTUweWM9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(19, 'Security Services', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXMzFUUWFnckFzQU1BRlpTZCtDT1IrM2oxSFhwd1NVZklNNWlpWXIrR0hBc040WlpsWnBseXBPSVdiZG0yb0hvL2hKYlMveGhhNUNKOHBIRFdEcTAvMXM9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(20, 'Maintenance Services', 'MkhqSkFpUGVibGc0OVREeFpmZk1PMGtJV2NmVzZSWWVqUm9hdk1XQUdSUVFJWStiaitMTDdwR1FFS2lqV0lqaHZMODM3T0xLMjhKb2VJZW1razMzNFV6ajhJUnRmdzIzclAvcnBvRkVkMzg9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(21, 'Logistics and Transportation', 'UTBLSmkyWlF6U0VHMk0wTERkb0FTZTRXV3d3MHoweXBHOXZJbytpRWMvbHdSNlJ6Z2hSOEN3alEzM3JkeEpnb1p2Z01DdExVazFkTHViOHlVcWJFOXlzaUoxUHU3ZXcyNVhyaWUrYkZDVFE9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(22, 'Freight Services', 'Y1BKM3JzNW0vdDMzKzBkVWU3MXdXZVN6Q000RnorM2RpdnJFOU5pZS9uWVBuUjkrL3VtaSs4ZGlyQU1XZFAxWisyMVZrT1laY2NFUmkrdGVWZEZLMHc9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(23, 'Warehousing Services', 'UTBLSmkyWlF6U0VHMk0wTERkb0FTYnhEbERKeTF5T3FOZUo1UVdBSmFKTDNsdGZOK1ZYN04relN1NUdib1JBZ1BlZldTUEcxRUZrRzZwRnB4QWhabHc9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(24, 'Energy Providers', 'R0UzNDJoZThjMkNzdmkxaXR5S1NhbmMrM2F3cjN2emZ3Z2xNMTFpUVNHdk1DSXBFaXUvM2owUTVCT0xlTjYvTStER3JXUjdYRzVhZ1pzenZVTFhMR0E9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(25, 'Water and Waste Management', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXeHdDcWxIRkwvWlI4SDluQWM0ZFc4QVVwZ214MmtuYk5IOGhXaUE5RXVieUJGalRLSnJYR21LSW03eVJwTXFkRnlJUzV0bHo2cFNReXB2TFF2UzlUNkk9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(26, 'Utility Providers', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPcFR5SHI3RFFHakRyTGJORmpDY09FdmM0Nk5hY1luOTF4Z2dRK2ZuSG52VnNkUTFqVXhkYThTS3o1bVJvTTRxeW9yOUduemV6c3dQbGpFQjRCTUZvTkk9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(27, 'Healthcare Services', 'UTBLSmkyWlF6U0VHMk0wTERkb0FTZHozMFdXTUp2WVJDcDRrVlBsUnl5NXgwVStYQXFUbnhHNXEyTmZZQlE3TTh6NHVQMWxoZnBHRnVsN2RHTFl5YnYvQ2M5dlRVakdSS0ZTaUxHcHhveTQ9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(28, 'Pharmaceuticals', 'ZHJad2FFNlkvK2t5SzlWRCtWcktDVEd2NWh1NktSRDhmR3d4ZkhlVXpxeGZkMzZ5VVZNcVhXVjc2czZhK1o1QmVjL3NWcWJENW8vUGR3Z3NDeUpaZjhRSWM1NEtKMzZKOFR3TFBoSWlJWXc9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(29, 'Catering Services', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPdHdFT3ptYnBab3BhMTdvZnlEQ1BSRFM5blB1RlZBREFTUXJ0dEEwbVNwR2xkWWtxMUxsZlpRVnBmWHNiTjUzUERlRm9KL1RUVHJ5TWg4eDRUQWltVnM9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(30, 'Retail Products', 'L3RvSjdjVVU5MWlheXZIcjJoN2RBWUwvN3krbUJINWtFSEpPc0pxaWIrSURYbXZsYU53b3hGSVJaSlBXYzNOU1orUEdmT0lrT3phZVB2SWNkelFtbDEvZWRpQVU5Qk5aZW50NEdxR0d3cGs9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(31, 'Cleaning Services', 'UTBLSmkyWlF6U0VHMk0wTERkb0FTV0U0L3lzNzB6UjlVbUdEUlkwS21URGtLcUJsRjZMY2UvK3BzL3Y0dDNzdTZWdFFhRVA3VWh5bmV3VG85MjhYZGgvaGp1aHFpZ3pxVVNLdStLOUs4MEU9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(32, 'Training and Development', 'NSsza2pnQjlPSGpBVWd0VWUyeXBPaTFrRXRYOHlGdm9lazJrQXNNSzJrUFhVUkpDT2NzQWlKeDkyaHVlTjZFbFpYVmI5T0hWS091ZVFteitMQ0lCclQvT3BMeWlRNDBsMkR3R0RqMjRNQ0E9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(33, 'Professional Development', 'UTBLSmkyWlF6U0VHMk0wTERkb0FTVnk5Q0pUaTg5UW1BTEgzeUtzaysvcVRsNDVackhLU1hwQm5pWmJBeWZROTJkVTZQT2dCcGxnamdCaUp5dmVnR00xcUFSQWx5ZlFZbUQyY0RUcWU5SU09', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(34, 'Event Management', 'TDRyNUNzcGczK0t2YmtpQ28zaEczeUFTNzBOWDd5bENFQnF1blc1eGFtQjE0eXZXa3JBMkI0cEt4U0NHdm80Q2JwRm83MzViZCtjeXQ5QkUyNlc0cmxFSDI3ZFRQcW9kV0I1MnR3anR5ckE9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(35, 'Audio Visual Services', 'bk9JWER2WllSRmpySWJ2aHczWmRqNERIZzdveXh1QlhOUjBjTHhoNWVnSi83bnZ0Tzk3d1pPalNHWUo3djhLUVh6NjlSQWRBODY2TkN6VEd6THREQzZiS1NURllSSDJKOXdrN0d5UFlKeTg9', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(36, 'Printing and Stationery', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXL002TzJIaWJLMlpJbWQ0US9zRXdNWW9XMXQrejFvczQzYzZBUjVRejlFRVh3bUxOb3lrRG9WRmJvTFc0cm9oZ0E9PQ==', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(37, 'Insurance Providers', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNFRsdGJwMGtQcHpXcnhFZGd6OStRbGFoZnYyNVUzbFZSV0M3bU4yM0VxVmh0dGNwbTVTVVluNmRCTHhucmNFOEdjdWQ3NTQvQjAvSW1QQVZyVWIrM2xVVkZ0RXNlM21HeXFRVFZxdzN2Wkw=', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(38, 'Travel and Hospitality', 'TXhCRHBLZmQyTm5JdjhZS0dpUFJjQzBRSG9EMXVNQTgxVzBtL3RmTDRWSFc0eUZ2eUVJWVdnQmRZRlF1NER5SGF1SkNITlpnRHFTS0tHQTNNTnFmcDEyVXN5QTB0UXVQblBEQldFUmtPVUREYlJJSnpEcERBM1pKYkZMSjFlZmo=', '2024-09-27 07:19:33 PM', '2024-09-27 07:19:33 PM', 1, 1, 1, NULL),
(39, 'Environmental Services', 'dHQ1L0F3UkxSRURJYnVkNHBDMTdXNldhMHQ4UzRtQnl6WHM3OTBtZzIvWGpaRHQra3I1cnk0Qk5RS1dwM29pdk0rWmwrSm9SUU0rT2ZVOWliWnE4cDR5d3FndFJHYW91MGFOOTFFNzZSMTk1RGprRGhXWEFOYkFoUXhPcDdaQkpmanZGczljTUJDb09Dd0orSnY4QmJnPT0=', '2024-09-27 07:19:33 PM', '2024-09-27 07:32:38 PM', 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config_vendor_types`
--

CREATE TABLE `config_vendor_types` (
  `vendor_type_id` int(10) NOT NULL,
  `vendor_type_name` varchar(80) NOT NULL,
  `vendor_type_desc` varchar(255) NOT NULL,
  `vendor_type_created_at` varchar(45) NOT NULL,
  `vendor_type_updated_at` varchar(45) NOT NULL,
  `vendor_type_created_by` varchar(45) NOT NULL,
  `vendor_type_updated_by` int(10) NOT NULL,
  `vendor_type_status` int(2) NOT NULL,
  `Is_vendor_type_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_vendor_types`
--

INSERT INTO `config_vendor_types` (`vendor_type_id`, `vendor_type_name`, `vendor_type_desc`, `vendor_type_created_at`, `vendor_type_updated_at`, `vendor_type_created_by`, `vendor_type_updated_by`, `vendor_type_status`, `Is_vendor_type_deleted`) VALUES
(1, 'manufacturer', 'ZTdwbjkxemdsQ1Z4MzIzS05keTUxaEJHRyt1MkJYc3I0QUNOcjVQY0d4RDcvbkJZQXVPcG1NUWxTbDNxK1lZUFRZME0rZi9rQTl6akpOWjFlditBcVdYcjFXaXp4WTUxVXNSRE1MVnQvVDFkY2FSZWRmQ3M2UFpFVFhmUEc5R3k=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(2, 'wholesaler', 'QVVtNk11cFE2cXFsaFdrM3BZazU2SWJNcDB0SS9oREFUdzBJU3VBcWYycUY2cEF3NXF0SXVmQVJHcHhFY0gycFgvNnhjdWtGa0c0V1o3S0ZBTXB0NTE2U0hVS2VMREFhdndHV0M2Q0VmeWk4N1ZaYjU1SW1ncCtPKzNKeDFOTzRVSHVqcnZlM0JadHJEU3RpbTEvVkpnPT0=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(3, 'retailer', 'Snd2d09iakZXS0NOVm9JRW9oaDRqRktQQUlaTlcrYXNHaXNjaFJQM09hVy9aOGZOeXpxUWwxWUozbG1seDJ3NA==', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(4, 'service_provider', 'MUN3YmQ1V25ESEF4cWZGNThBaXdNM013SWgxN1dpbGtYTzB4WlArOHV5d0grNXpEM0VaYmlGbUFJclo5dUVwWno5ZXVKblVnRUg5dEtZQTRzc1BpTEdzYWRFL2JoV01MUHA1dVZuZHZ3eHc9', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(5, 'distributor', 'ZkFZMjFrcDNLbTdUQ2J3dkIzREZKdUZXbHJhemh5R2tjeVRzdysyL3BpVGtzNzNDeXhGY1ZFVTRGMnlkTktaKzJaRVlHTDE1cm8yMVdGMmQ2Y0crWHh2Zkl3TXhWQzQrdmVhQ1gxMitLckJLSzUrYWpGek1QQWM2dUFPd1lPem5WWDFsQVdNbXNWaHMwWXJ0am5QM2RnPT0=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(6, 'supplier', 'ZTdwbjkxemdsQ1Z4MzIzS05keTUxa1piei9YNVVXNFJmVU0xVXRuam5KeStyZlJXUDYxcnVMc1hYMnZ4bU91QkVtSGpKdkpQT3ZCdUJ5dGFEaEljbnJkQytUNGFTNGlkTGRDUm5tSHg4VDk1SUNhOHlueGt1OXBGNEUzSDdrTVI=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(7, 'contractor', 'ZTdwbjkxemdsQ1Z4MzIzS05keTUxaUEzbDZBaXF1YmdLS2NOcVp2K1hTQkxod2NnTWVXUXhzeDlJNWQyeHVxeFdHREtWYW5UdUpiOExmUkphR1pDRmhjbXc3Ni9XRWRNUzMzSDN1dnp5STNmb29ycE5yRzAzQ28yemZpMDNlQmZ3Q084N3p6cDl3eW01bDJiNzdjQnJ3PT0=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(8, 'consultant', 'alJYUnNiWHA1RE8rQVJvYm5HTDVPbFVOWFNkNDFSN3c3cUloVXpOWm5tRkZjM3R1K3FHeGtIZzNZSGVZMzZHUVVMK3h0ZEdLd0VLaE9vMkExMWZVZ3J3QUpLb0t1ZFhIczdMUU5kWG1aRWdNQjVGQWN1L0dtc2hzT3l5akUwcXQ=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(9, 'freelancer', 'SVdkeis1VTVyaExNQ2NkaVlkOXBqSTNNVHRwR3VsUVJxYzJ3TE51UG5taDJpQWdNL002MG1VQzM3L3dVUWZzUG4za0lMOUpVdjlLUUVrejRZTlN2TmtkNXNuK2d2QjhrdEx2SUJhbjNEbHhZRkV4SlllZHpXODFOeW93cEhpU1hTM01vOWlRTUZHaFhpTUF5R3E5a0lnPT0=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(10, 'logistics_provider', 'U2FKQ3AxLyt2eDZJcFBUL1Z0RVlLNE03WEx6Wkg3a3FrMFFMQmhVcWxNb2M3T3hzNit6MmxYRlhORGd6TExyNmdKV0MweW9mZU9HeDBtc3VMdFBpMlRzM0EyVkZtV1dyS1VkNXYwRHFKaEE9', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(11, 'utility_provider', 'S0FHRE5PTUR2YlNJK1loRVZaeFQwdDBZTW05eEtMQ3dwdXorbHZObVVFN0RYVWI4SGJjcEdkSURTSmFhaWN6ekZkSm5wanYxN3JjWWdHNHpjQW5aYzVWSUZ6Q0kyOGZLdng2YkNkU2o4VjdwaWtGVExvTHFMTHhBbG81OTNvaE4=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(12, 'outsourcing_provider', 'QmZ0MDBEeXFZdyszTWJnMWZQUGNOSzFXM2JFSmtIV3diMG9wVkZoeDU3L01mb05qZGswSXA3RWMzRDE3d0M2RnBBV0dodEFlS1dNTTliMi9NWGxKQWcxSDlQN3JMc2pNYmtkK0tRVUVqdHBxUEtjbllrcmtGRU5keHQvcXhHZHg=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(13, 'software_vendor', 'ZTdwbjkxemdsQ1Z4MzIzS05keTUxdmFTTEJiQWNtWGtjdkIwdXgwZ045ZUpoNzF1T0Q0T0ZMZmNydGNTYk9JaUwzQklpT3lFZlJBM2J4enR5c2dmek9kR2lOcVBsais4ZFFrUTVWNmUvbG93TDR6bmdxa2ZmWVZkSUphb281T1I=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(14, 'equipment_vendor', 'S0FHRE5PTUR2YlNJK1loRVZaeFQwbFVJUDBIV0UzUmhVbXRaU0hTWTRueTBENmNWTHptb214VEw5ZHhnaVI4cFFhUCtMUmVBSUU4eUNRRk9pWlZGRDNGVlVQWXRMbDFYdWJiU0xHdkVIVTRjeThQNklTSTFmR21EY3oxcTYvcGo=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(15, 'facility_management_vendor', 'alJQWGVldXNzZHNFRzN1QUlobHZYUUU5UEdQdjI3ZFk5ck5FM1pMSjV5UlRSZEQ4cVJRL0pleHpwODFEekQxcEZ3WFNza0lRZkZPVWRIRDdOVnhTeklnOFlaSDY3eUlQdjNKRjBnblVoU1k9', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(16, 'financial_vendor', 'ZTdwbjkxemdsQ1Z4MzIzS05keTUxcG0rNitTWXBSVTlaZ2hiblhpRUtXY0RjZC82YjdERFlFN20vek51NHpiS1pxVlplLzVRcHZnZURDTmtjS3Y5RW5hZXRDcVg4L1BiZEMyalJMM1JXbVdjVUVXUXdmbm5EZVpUWVJpNUxPZi8=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(17, 'telecommunications_provider', 'S0FHRE5PTUR2YlNJK1loRVZaeFQwa2FoUmdGa3MvbFpJcDZJaUNMendhdGFScWdpSkVTNS9iSWhSMDMrRVduSzdLL3NjcFY1R0Q5c3BzbVZhNUtSbkh2Sjhvc3FERHNmOUFzRWdMME45eGp2KzhFLytBcU9pVG45VHhUb0dmK0U=', '2024-09-27 02:02:10 PM', '2024-09-27 02:02:10 PM', '1', 1, 1, NULL),
(18, 'Others', 'Ym4ySHlObFZGNTMxcXV2Y2IwS0VOWkJzR2g2ak9oZkl2dGltbXd2a1M2VUxXZlJDMUU1dkpVRDBSbWdISTV4VURoRFhwZDExUk4wNWREUEdpZkN4OEFGRWZyaEhiM2hSbzhlNmRwTytNdWt0L1F2Z1I0L2ZjSGU0Vmh5YlY2a2Q=', '2024-09-27 05:04:01 PM', '2024-09-27 05:04:01 PM', '1', 1, 1, NULL),
(21, 'Furniture Manufacturer', 'Zkt2YmJiM0JZUlVONmhJaWlwN3dSZU1UU3dyLzlVY2wxYXVvaitKbTVmTHpTQy9jOVJLWUgrZmdyMXFZTldRckliMGVLZ2Y3YXJ3aktiTnBvWThTVUFlbTJTT3ZsZ0xYUHoxK05HeWkzSHdvNENlbDJZZE9DZEJCdHpDNURCMUx6S0pmNFlmdFpvcXc3YXBqR2U4ZUxRPT0=', '2024-09-30 07:17:09 PM', '2024-09-30 07:17:09 PM', '1', 1, 1, NULL),
(22, 'INVERTOR &amp; BATTERY SUPPLIER', 'dXJSa2E2azcvcGIvYkNxSm1PNjJsSUozR2laK2lhTU0yTTZ6R0JTWXJWbVBVd09RN3VhanRQVVlBSGlxWFZEVS91dGduUDJadnBhZktuWGhPcjIrT1BuSCtFcmxyOVdPcTJSL2JoUFRzV1M5dDBUcFBSbkxGYlZLQWR2cVZ2WGhhWXk0MnFGVTNrY2VnSWREQVUwc05RPT0=', '2024-09-30 07:39:30 PM', '2024-09-30 07:39:30 PM', '1', 1, 1, NULL),
(23, 'LAPTOP &amp; COMPUTER REPAIR', 'eHFIQ2krR294ZERmL2RjUHJjdHpwbS9rVFFtY2JXd0xDb2lVN0JEQU5tYi9jSi9lM1lDNlVmQi9XVklxRkVrSU85MjNxTUxrbzB6c21PV09YSlZSYkE9PQ==', '2024-09-30 07:44:54 PM', '2024-09-30 07:44:54 PM', '1', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `systemlogs`
--

CREATE TABLE `systemlogs` (
  `LogsId` int(100) NOT NULL,
  `logTitle` varchar(200) NOT NULL,
  `logdesc` varchar(1000) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `systeminfo` varchar(1000) NOT NULL,
  `logtype` varchar(100) NOT NULL,
  `logenv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(100) NOT NULL,
  `UserSalutation` varchar(1000) NOT NULL,
  `UserFullName` varchar(500) NOT NULL,
  `UserPhoneNumber` varchar(100) NOT NULL,
  `UserEmailId` varchar(1000) NOT NULL,
  `UserPassword` varchar(500) NOT NULL,
  `UserCreatedAt` varchar(25) NOT NULL DEFAULT 'current_timestamp(6)',
  `UserUpdatedAt` varchar(25) NOT NULL DEFAULT 'current_timestamp(6)',
  `UserStatus` tinyint(1) NOT NULL DEFAULT 1,
  `UserNotes` longtext NOT NULL,
  `UserCompanyName` varchar(1000) NOT NULL,
  `UserDepartment` varchar(1000) NOT NULL,
  `UserDesignation` varchar(1000) NOT NULL,
  `UserWorkFeilds` varchar(1000) NOT NULL,
  `UserProfileImage` varchar(1000) NOT NULL DEFAULT 'default.png',
  `UserType` varchar(1000) NOT NULL,
  `UserDateOfBirth` varchar(100) NOT NULL,
  `UserUpdatedBy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserSalutation`, `UserFullName`, `UserPhoneNumber`, `UserEmailId`, `UserPassword`, `UserCreatedAt`, `UserUpdatedAt`, `UserStatus`, `UserNotes`, `UserCompanyName`, `UserDepartment`, `UserDesignation`, `UserWorkFeilds`, `UserProfileImage`, `UserType`, `UserDateOfBirth`, `UserUpdatedBy`) VALUES
(1, 'Mr.', 'Gaurav Singh', '926882565', 'gauravsinghigc@gmail.com', 'VndsbUlpKzhKdWpEbEZNSUNva2t1UT09', '2024-11-18', '2024-11-27', 1, 'YkVYdnY2YmtTdHBSRVkxbW95bFEyWTl6L2YxNUhpQ1NRK0FFR1BMRnpDN0JnUEdFTzNwb0NJaUptK2V6WDJUTQ==', 'Navix Consultancy Services', 'Sales &amp; Marketing', 'ADMIN', 'Information Technology', 'default.png', 'Admin', '1999-01-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_password_change_requests`
--

CREATE TABLE `user_password_change_requests` (
  `PasswordChangeReqId` int(100) NOT NULL,
  `UserIdForPasswordChange` varchar(1000) NOT NULL,
  `PasswordChangeToken` varchar(1000) NOT NULL,
  `PasswordChangeTokenExpireTime` varchar(1000) NOT NULL,
  `PasswordChangeDeviceDetails` varchar(10000) NOT NULL,
  `PasswordChangeRequestStatus` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(10) NOT NULL,
  `vendor_name` varchar(70) NOT NULL,
  `vendor_logo` varchar(255) NOT NULL,
  `vendor_type_id` int(3) NOT NULL,
  `vendor_biz_name` varchar(100) NOT NULL,
  `vendor_phone_code` varchar(10) NOT NULL,
  `vendor_phone` varchar(12) NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_created_at` varchar(45) NOT NULL,
  `vendor_created_by` int(10) NOT NULL,
  `vendor_updated_at` varchar(45) NOT NULL,
  `vendor_updated_by` int(10) NOT NULL,
  `vendor_status` int(2) NOT NULL,
  `if_vendor_deleted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_logo`, `vendor_type_id`, `vendor_biz_name`, `vendor_phone_code`, `vendor_phone`, `vendor_email`, `vendor_created_at`, `vendor_created_by`, `vendor_updated_at`, `vendor_updated_by`, `vendor_status`, `if_vendor_deleted`) VALUES
(1, 'Gaurav Singh', 'GAURAVSINGHIGC__29_Sep_2024_07_09_01_58233716566_.jpg', 13, 'GAURAVSINGHIGC', '+91', '9318310565', 'gauravsinghigc@gmail.com', '2024-09-29 07:12:01 PM', 1, '2024-09-29 07:12:01 PM', 1, 1, 0),
(2, 'RITU MEHRA', 'ifdcbank-logo.jpg', 16, 'IDFC FIRST BANK', '+91', '8506973791', 'ritu.mehra@idfcfirstbank.com', '2024-09-30 07:02:59 PM', 1, '2024-09-30 07:02:59 PM', 1, 1, 0),
(3, 'MANOJ KUMAR', 'DAIKIN_AIR_CONDITIONING__30_Sep_2024_07_09_21_26682116256_.jpeg', 14, 'DAIKIN AIR CONDITIONING', '+91', '8059829980', 'manojkumar@optechaircon.com', '2024-09-30 07:10:21 PM', 1, '2024-09-30 07:10:21 PM', 1, 1, 0),
(4, 'GURMEET SINGH', 'MEET_FURNITURE_MART__30_Sep_2024_07_09_46_14327268604_.png', 21, 'MEET FURNITURE MART', '+91', '9811889266', 'meetfurnituremart@gmail.com', '2024-09-30 07:18:45 PM', 1, '2024-09-30 07:18:45 PM', 1, 1, 0),
(5, 'HARMINDER PAL SINGH GULATI', 'H.S._BATTERY_HUB__30_Sep_2024_07_09_29_65469507098_.png', 22, 'H.S. BATTERY HUB', '+91', '9899065743', 'harminderpal.sgulati@yahoo.co.in', '2024-09-30 07:42:29 PM', 1, '2024-09-30 07:42:29 PM', 1, 1, 0),
(6, 'PIYUSH', 'PIYUSH_LAPTOP_REPAIR__30_Sep_2024_07_09_55_60998765578_.jpeg', 23, 'PIYUSH LAPTOP REPAIR', '+91', '9911243392', 'piyushlaptops@gmail.com', '2024-09-30 07:46:55 PM', 1, '2024-09-30 07:46:55 PM', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_address`
--

CREATE TABLE `vendor_address` (
  `vendor_address_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_address_gst_no` varchar(55) NOT NULL,
  `vendor_address_type` varchar(100) NOT NULL,
  `vendor_address` varchar(300) NOT NULL,
  `vendor_area_locality` varchar(255) NOT NULL,
  `vendor_city` varchar(50) NOT NULL,
  `vendor_state` varchar(50) NOT NULL,
  `vendor_country` varchar(50) NOT NULL,
  `vendor_pincode` int(10) NOT NULL,
  `vendor_address_longitude` varchar(50) NOT NULL,
  `vendor_address_latitude` varchar(50) NOT NULL,
  `vendor_address_created_by` int(10) NOT NULL,
  `vendor_address_updated_by` int(10) NOT NULL,
  `vendor_address_created_at` varchar(45) NOT NULL,
  `vendor_address_updated_at` varchar(45) NOT NULL,
  `vendor_address_status` int(2) NOT NULL,
  `is_vendor_address_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_address`
--

INSERT INTO `vendor_address` (`vendor_address_id`, `vendor_main_id`, `vendor_address_gst_no`, `vendor_address_type`, `vendor_address`, `vendor_area_locality`, `vendor_city`, `vendor_state`, `vendor_country`, `vendor_pincode`, `vendor_address_longitude`, `vendor_address_latitude`, `vendor_address_created_by`, `vendor_address_updated_by`, `vendor_address_created_at`, `vendor_address_updated_at`, `vendor_address_status`, `is_vendor_address_deleted`) VALUES
(1, 1, 'NULL', 'Home', 'Y6-11/SF 2nd floor, Gali No 6, BPTP', 'Sector 76', 'FARIDABAD', 'Haryana', 'India', 121004, '', '', 1, 1, '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, NULL),
(2, 2, '', 'Office', 'First Floor, Plot No. 34 Block H-1-A, Gautam Buddha Nagar,', 'Sector 63', 'NOIDA', 'UTTAR PRADESH', 'INDIA', 201301, '', '', 1, 1, '2024-09-30 07:02:59 PM', '2024-09-30 07:02:59 PM', 1, NULL),
(3, 3, '', 'Office', 'U-06 (UG FLOOR), BPTP - The Next Door U Block', 'Sector 76', 'Faridabad -  121001', 'Haryana', 'India', 121004, '', '', 1, 1, '2024-09-30 07:10:21 PM', '2024-09-30 07:10:21 PM', 1, NULL),
(4, 4, '', 'Shop', '5E /  26, Meet Market', 'NIT', 'FARIDABAD', 'HARYANA', 'INDIA', 121001, '', '', 1, 1, '2024-09-30 07:18:45 PM', '2024-09-30 07:18:45 PM', 1, NULL),
(5, 5, '', 'Shop', '769-A, OLD LAJPAT RAI MARKET, CHANDNI CHOWK, Opp. Moti Cinema Gate.', 'CHANDNI CHOWK', 'DELHI', 'DELHI', 'INDIA', 110000, '', '', 1, 1, '2024-09-30 07:42:29 PM', '2024-09-30 07:42:29 PM', 1, NULL),
(6, 6, '', 'Shop', 'G-7/B, Siddharth Building 96', 'Nehru Place', 'NEW DELHI', 'DELHI', 'INDIA', 110022, '', '', 1, 1, '2024-09-30 07:46:55 PM', '2024-09-30 07:46:55 PM', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `vendor_category_id` int(10) NOT NULL,
  `vendor_category_main_id` int(10) NOT NULL,
  `vendor_category_config_id` int(10) NOT NULL,
  `vendor_category_created_at` varchar(45) NOT NULL,
  `vendor_category_updated_at` varchar(45) NOT NULL,
  `vendor_category_created_by` int(10) NOT NULL,
  `vendor_category_updated_by` int(10) NOT NULL,
  `vendor_category_status` int(2) NOT NULL,
  `if_vendor_category_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contact_persons`
--

CREATE TABLE `vendor_contact_persons` (
  `vcp_id` int(10) NOT NULL,
  `vcp_main_vendor_id` int(10) NOT NULL,
  `vcp_full_name` varchar(60) NOT NULL,
  `vcp_contact_info_type` int(1) NOT NULL,
  `vcp_contact_info` varchar(255) NOT NULL,
  `vcp_created_by` int(10) NOT NULL,
  `vcp_created_at` varchar(45) NOT NULL,
  `vcp_updated_by` int(10) NOT NULL,
  `vcp_updated_at` varchar(45) NOT NULL,
  `vcp_status` int(2) NOT NULL,
  `is_vcp_deleted` int(2) DEFAULT NULL,
  `vcp_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_contact_persons`
--

INSERT INTO `vendor_contact_persons` (`vcp_id`, `vcp_main_vendor_id`, `vcp_full_name`, `vcp_contact_info_type`, `vcp_contact_info`, `vcp_created_by`, `vcp_created_at`, `vcp_updated_by`, `vcp_updated_at`, `vcp_status`, `is_vcp_deleted`, `vcp_remarks`) VALUES
(1, 1, 'Gaurav Singh', 1, '8447572565', 1, '2024-09-30', 1, '2024-09-30', 1, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contracts`
--

CREATE TABLE `vendor_contracts` (
  `vendor_contract_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_contract_name` varchar(255) NOT NULL,
  `vendor_contract_type` varchar(100) NOT NULL,
  `vendor_contract_number` varchar(30) NOT NULL,
  `vendor_contract_start_date` varchar(45) NOT NULL,
  `vendor_contract_end_date` varchar(45) NOT NULL,
  `vendor_contract_due_date` varchar(45) NOT NULL,
  `vendor_contract_amount` varchar(10) NOT NULL,
  `vendor_contract_net_order_amount` varchar(10) NOT NULL,
  `vendor_contract_details` mediumtext NOT NULL,
  `vendor_contract_working_tags` varchar(1000) NOT NULL,
  `vendor_contract_created_at` varchar(45) NOT NULL,
  `vendor_contract_updated_at` varchar(45) NOT NULL,
  `vendor_contract_created_by` int(10) NOT NULL,
  `vendor_contract_updated_by` int(10) NOT NULL,
  `vendor_contract_status` int(10) NOT NULL,
  `is_vendor_contract_closed` int(10) DEFAULT NULL,
  `vendor_contract_color_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contracts_documents`
--

CREATE TABLE `vendor_contracts_documents` (
  `vcd_id` int(10) NOT NULL,
  `vcd_main_contract_id` int(10) NOT NULL,
  `vcd_name` varchar(255) NOT NULL,
  `vcd_url` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_documents`
--

CREATE TABLE `vendor_documents` (
  `vendor_document_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_document_name` varchar(55) NOT NULL,
  `vendor_document_type` varchar(55) NOT NULL,
  `vendor_document_number` varchar(50) NOT NULL,
  `vendor_document_start_date` varchar(45) NOT NULL,
  `vendor_document_end_date` varchar(45) NOT NULL,
  `vendor_document_url` varchar(255) NOT NULL,
  `vendor_document_uploaded_at` varchar(45) NOT NULL,
  `vendor_document_uploaded_by` int(10) NOT NULL,
  `vendor_document_updated_at` varchar(45) NOT NULL,
  `vendor_document_updated_by` int(10) NOT NULL,
  `vendor_document_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoices`
--

CREATE TABLE `vendor_invoices` (
  `vendor_invoice_id` int(10) NOT NULL,
  `vendor_contract_main_id` int(10) NOT NULL,
  `vendor_invoice_number` varchar(50) NOT NULL,
  `vendor_invoice_ref_number` varchar(70) NOT NULL,
  `vendor_invoice_billing_address` varchar(555) NOT NULL,
  `vendor_invoice_shipping_address` varchar(555) NOT NULL,
  `vendor_invoice_due_date` varchar(45) NOT NULL,
  `vendor_invoice_amount` varchar(10) NOT NULL,
  `vendor_invoice_date` varchar(45) NOT NULL,
  `vendor_invoice_status` int(10) NOT NULL,
  `vendor_invoice_created_at` varchar(45) NOT NULL,
  `vendor_invoice_updated_at` varchar(45) NOT NULL,
  `vendor_invoice_created_by` int(10) NOT NULL,
  `vendor_invoice_updated_by` int(10) NOT NULL,
  `vendor_invoice_notes` varchar(1000) NOT NULL,
  `vendor_invoice_expire_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoices_discount_charges`
--

CREATE TABLE `vendor_invoices_discount_charges` (
  `vidc_id` int(10) NOT NULL,
  `vidc_main_invoice_id` int(10) NOT NULL,
  `vidc_name` varchar(100) NOT NULL,
  `vidc_type` varchar(25) NOT NULL,
  `vidc_apply_in` varchar(25) NOT NULL,
  `vidc_value` varchar(10) NOT NULL,
  `vidc_created_at` varchar(45) NOT NULL,
  `vidc_updated_at` varchar(45) NOT NULL,
  `vidc_created_by` int(10) NOT NULL,
  `vidc_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoices_items`
--

CREATE TABLE `vendor_invoices_items` (
  `vii_id` int(10) NOT NULL,
  `vii_main_invoice_id` int(10) NOT NULL,
  `vii_name` varchar(255) NOT NULL,
  `vii_type` varchar(10) NOT NULL,
  `vii_code` varchar(10) NOT NULL,
  `vii_desc` varchar(500) NOT NULL,
  `vii_mrp_price` varchar(10) NOT NULL,
  `vii_sale_price` varchar(10) NOT NULL,
  `vii_qty` int(10) NOT NULL,
  `vii_tax` varchar(10) NOT NULL,
  `vii_total` varchar(10) NOT NULL,
  `vii_created_at` varchar(45) NOT NULL,
  `vii_updated_at` varchar(45) NOT NULL,
  `vii_created_by` int(10) NOT NULL,
  `vii_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_invoice_payments`
--

CREATE TABLE `vendor_invoice_payments` (
  `vip_id` int(10) NOT NULL,
  `vip_main_invoice_id` int(10) NOT NULL,
  `vip_transaction_ref_number` varchar(50) NOT NULL,
  `vip_transaction_id` varchar(75) NOT NULL,
  `vip_pay_method` varchar(25) NOT NULL,
  `vip_pay_date` varchar(45) NOT NULL,
  `vip_paid_amount` varchar(10) NOT NULL,
  `vip_transaction_details` varchar(555) NOT NULL,
  `vip_transaction_note` varchar(255) NOT NULL,
  `vip_created_at` varchar(45) NOT NULL,
  `vip_created_by` int(10) NOT NULL,
  `vip_transaction_status` int(10) NOT NULL,
  `vip_updated_at` varchar(10) NOT NULL,
  `vip_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_logs`
--

CREATE TABLE `vendor_logs` (
  `vendor_logs_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_logs_name` varchar(255) NOT NULL,
  `vendor_logs_sql` varchar(1000) NOT NULL,
  `vendor_logs_created_at` varchar(45) NOT NULL,
  `vendor_logs_created_by` int(10) NOT NULL,
  `vendor_logs_device_details` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders`
--

CREATE TABLE `vendor_orders` (
  `vendor_order_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_order_reference_number` varchar(25) NOT NULL,
  `vendor_order_date` varchar(45) NOT NULL,
  `vendor_order_amount` int(11) NOT NULL,
  `vendor_order_shipping_address` varchar(555) NOT NULL,
  `vendor_order_billing_address` varchar(555) NOT NULL,
  `vendor_order_status` int(10) NOT NULL,
  `vendor_order_receipt` varchar(255) NOT NULL,
  `vendor_order_created_at` varchar(45) NOT NULL,
  `vendor_order_updated_at` varchar(45) NOT NULL,
  `vendor_order_created_by` int(10) NOT NULL,
  `vendor_order_updated_by` int(10) NOT NULL,
  `vendor_order_remarks` varchar(1000) NOT NULL,
  `vendor_order_items_details` varchar(10000) NOT NULL,
  `vendor_order_estimate_delivery_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders_documents`
--

CREATE TABLE `vendor_orders_documents` (
  `vod_id` int(10) NOT NULL,
  `vod_main_order_id` int(10) NOT NULL,
  `vod_name` varchar(55) NOT NULL,
  `vod_url` varchar(255) NOT NULL,
  `vod_type` varchar(55) NOT NULL,
  `vod_created_at` varchar(45) NOT NULL,
  `vod_updated_at` varchar(45) NOT NULL,
  `vod_created_by` int(10) NOT NULL,
  `vod_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_orders_payments`
--

CREATE TABLE `vendor_orders_payments` (
  `vop_id` int(10) NOT NULL,
  `vop_main_order_id` int(10) NOT NULL,
  `vop_pay_ref_number` varchar(30) NOT NULL,
  `vop_pay_txn_id` varchar(55) NOT NULL,
  `vop_pay_more_details` varchar(725) NOT NULL,
  `vop_pay_mode` varchar(50) NOT NULL,
  `vop_paid_amount` varchar(10) NOT NULL,
  `vop_pay_date` varchar(45) NOT NULL,
  `vop_pay_receipt_url` varchar(255) NOT NULL,
  `vop_created_at` varchar(45) NOT NULL,
  `vop_created_by` int(10) NOT NULL,
  `vop_updated_by` int(10) NOT NULL,
  `vop_updated_at` varchar(45) NOT NULL,
  `vop_pay_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment_modes`
--

CREATE TABLE `vendor_payment_modes` (
  `vpm_id` int(10) NOT NULL,
  `vpm_main_id` int(10) NOT NULL,
  `vpm_name` varchar(155) NOT NULL,
  `vpm_type` varchar(100) NOT NULL,
  `vpm_bank_name` varchar(100) NOT NULL,
  `vpm_ifsc_code` varchar(30) NOT NULL,
  `vpm_number` varchar(30) NOT NULL,
  `vpm_person_name` varchar(50) NOT NULL,
  `vpm_created_at` varchar(45) NOT NULL,
  `vpm_created_by` int(10) NOT NULL,
  `vpm_updated_at` varchar(45) NOT NULL,
  `vpm_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_products_services`
--

CREATE TABLE `vendor_products_services` (
  `vps_id` int(10) NOT NULL,
  `vps_main_vendor_id` int(10) NOT NULL,
  `vps_main_category_id` int(10) NOT NULL,
  `vps_item_name` varchar(255) NOT NULL,
  `vps_item_type` varchar(75) NOT NULL,
  `vps_item_code` varchar(55) NOT NULL,
  `vps_item_desc` varchar(1000) NOT NULL,
  `vps_item_image` varchar(255) NOT NULL,
  `vps_sale_price` int(10) NOT NULL,
  `vps_mrp_price` int(10) NOT NULL,
  `vps_stock_qty` int(10) NOT NULL,
  `vps_category` varchar(100) NOT NULL,
  `vps_created_at` varchar(45) NOT NULL,
  `vps_updated_at` varchar(45) NOT NULL,
  `vps_last_ordered_date` varchar(45) NOT NULL,
  `vps_created_by` int(10) NOT NULL,
  `vps_updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_queries`
--

CREATE TABLE `vendor_queries` (
  `vendor_query_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_query_subject` varchar(255) NOT NULL,
  `vendor_query_type` varchar(75) NOT NULL,
  `vendor_query_priority_level` int(2) NOT NULL,
  `vendor_query_person_name` varchar(75) NOT NULL,
  `vendor_query_person_phone_number` varchar(15) NOT NULL,
  `vendor_query_email_id` varchar(255) NOT NULL,
  `vendor_query_description` varchar(10000) NOT NULL,
  `vendor_query_created_at` varchar(45) NOT NULL,
  `vendor_query_updated_at` varchar(45) NOT NULL,
  `vendor_query_created_by` int(10) NOT NULL,
  `vendor_query_updated_by` int(10) NOT NULL,
  `vendor_query_status` int(10) NOT NULL,
  `vendor_query_assigned_to` int(10) NOT NULL,
  `vendor_query_assigned_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reviews`
--

CREATE TABLE `vendor_reviews` (
  `vendor_review_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_review_rating` int(10) NOT NULL,
  `vendor_review_comments` varchar(1000) NOT NULL,
  `vendor_review_date` varchar(45) NOT NULL,
  `vendor_review_person_name` varchar(50) NOT NULL,
  `vendor_review_approved_by` int(10) NOT NULL,
  `vendor_review_approved_at` varchar(45) NOT NULL,
  `vendor_review_updated_at` varchar(45) NOT NULL,
  `vendor_review_updated_by` int(10) NOT NULL,
  `vendor_review_tags` varchar(255) NOT NULL,
  `vendor_review_status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks`
--

CREATE TABLE `vendor_tasks` (
  `vendor_tasks_id` int(10) NOT NULL,
  `vendor_main_id` int(10) NOT NULL,
  `vendor_task_name` varchar(255) NOT NULL,
  `vendor_task_details` varchar(10000) NOT NULL,
  `vendor_task_prority` int(1) NOT NULL,
  `vendor_task_tags` varchar(725) NOT NULL,
  `vendor_task_start_date` varchar(45) NOT NULL,
  `vendor_task_due_date` varchar(45) NOT NULL,
  `vendor_task_complete_date` varchar(45) NOT NULL,
  `vendor_task_create_date` varchar(45) NOT NULL,
  `vendor_task_update_date` varchar(45) NOT NULL,
  `vendor_task_status` int(10) NOT NULL,
  `vendor_task_created_by` int(10) NOT NULL,
  `vendor_task_updated_by` int(10) NOT NULL,
  `vendor_task_admin_remarks` varchar(255) NOT NULL,
  `vendor_task_type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks_activities`
--

CREATE TABLE `vendor_tasks_activities` (
  `vca_id` int(10) NOT NULL,
  `vca_main_task_id` int(10) NOT NULL,
  `vca_name` varchar(255) NOT NULL,
  `vca_details` varchar(10000) NOT NULL,
  `vca_created_at` varchar(45) NOT NULL,
  `vca_updated_at` varchar(45) NOT NULL,
  `vca_created_by` int(10) NOT NULL,
  `vca_updated_by` int(10) NOT NULL,
  `vca_status` int(10) NOT NULL,
  `is_vca_completed` int(10) NOT NULL,
  `vca_performed_by` int(10) NOT NULL,
  `vca_performed_at` varchar(45) NOT NULL,
  `vca_assigned_at` varchar(45) NOT NULL,
  `vca_assigned_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks_activities_document`
--

CREATE TABLE `vendor_tasks_activities_document` (
  `vcad_id` int(10) NOT NULL,
  `vcad_main_activity_id` int(10) NOT NULL,
  `vcad_document_type` varchar(10) NOT NULL,
  `vcad_document_url` varchar(255) NOT NULL,
  `vcad_added_at` varchar(45) NOT NULL,
  `vcad_added_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tasks_members`
--

CREATE TABLE `vendor_tasks_members` (
  `vendor_task_member_id` int(10) NOT NULL,
  `vendor_task_main_id` int(10) NOT NULL,
  `vendor_task_user_id` int(10) NOT NULL,
  `vendor_task_assigned_date` varchar(45) NOT NULL,
  `vendor_task_assigned_by` int(10) NOT NULL,
  `vendor_task_assign_msg` varchar(255) NOT NULL,
  `vendor_task_assign_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_urls`
--

CREATE TABLE `vendor_urls` (
  `vendor_url_id` int(10) NOT NULL,
  `vendor_url_main_id` int(10) NOT NULL,
  `vendor_url_name` varchar(75) NOT NULL,
  `vendor_url` varchar(1000) NOT NULL,
  `vendor_url_created_at` varchar(45) NOT NULL,
  `vendor_url_updated_at` varchar(45) NOT NULL,
  `vendor_url_created_by` int(10) NOT NULL,
  `vendor_url_updated_by` int(10) NOT NULL,
  `vendor_url_status` int(2) NOT NULL,
  `is_vendor_url_deleted` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_urls`
--

INSERT INTO `vendor_urls` (`vendor_url_id`, `vendor_url_main_id`, `vendor_url_name`, `vendor_url`, `vendor_url_created_at`, `vendor_url_updated_at`, `vendor_url_created_by`, `vendor_url_updated_by`, `vendor_url_status`, `is_vendor_url_deleted`) VALUES
(1, 1, 'WEBSITE', 'https://gauravsinghigc.in', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 1, NULL),
(2, 1, 'FACEBOOK', 'https://facebook.com/gauravsinghigc', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 1, NULL),
(3, 1, 'INSTAGRAM', 'https://instagram.com/gauravsinghigc', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 1, NULL),
(4, 1, 'YOUTUBE', 'https://www.youtube.com/@gauravsinghigc', '2024-09-29 07:12:01 PM', '2024-09-29 07:12:01 PM', 1, 1, 0, NULL),
(5, 2, 'WEBSITE', 'https://idfcfirstbank.com', '2024-09-30 07:02:59 PM', '2024-09-30 07:02:59 PM', 1, 1, 1, NULL),
(6, 3, 'WEBSITE', 'http://optechaircon.com', '2024-09-30 07:10:21 PM', '2024-09-30 07:10:21 PM', 1, 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`ConfigsId`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`configurationsid`);

--
-- Indexes for table `config_locations`
--
ALTER TABLE `config_locations`
  ADD PRIMARY KEY (`config_location_id`);

--
-- Indexes for table `config_mail_sender`
--
ALTER TABLE `config_mail_sender`
  ADD PRIMARY KEY (`config_mail_sender_id`);

--
-- Indexes for table `config_pgs`
--
ALTER TABLE `config_pgs`
  ADD PRIMARY KEY (`ConfigPgId`);

--
-- Indexes for table `config_url_types`
--
ALTER TABLE `config_url_types`
  ADD PRIMARY KEY (`cut_id`);

--
-- Indexes for table `config_values`
--
ALTER TABLE `config_values`
  ADD PRIMARY KEY (`ConfigValueId`);

--
-- Indexes for table `config_vendor_categories`
--
ALTER TABLE `config_vendor_categories`
  ADD PRIMARY KEY (`cvc_id`);

--
-- Indexes for table `config_vendor_types`
--
ALTER TABLE `config_vendor_types`
  ADD PRIMARY KEY (`vendor_type_id`);

--
-- Indexes for table `systemlogs`
--
ALTER TABLE `systemlogs`
  ADD PRIMARY KEY (`LogsId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user_password_change_requests`
--
ALTER TABLE `user_password_change_requests`
  ADD PRIMARY KEY (`PasswordChangeReqId`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_address`
--
ALTER TABLE `vendor_address`
  ADD PRIMARY KEY (`vendor_address_id`);

--
-- Indexes for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`vendor_category_id`);

--
-- Indexes for table `vendor_contact_persons`
--
ALTER TABLE `vendor_contact_persons`
  ADD PRIMARY KEY (`vcp_id`);

--
-- Indexes for table `vendor_contracts`
--
ALTER TABLE `vendor_contracts`
  ADD PRIMARY KEY (`vendor_contract_id`);

--
-- Indexes for table `vendor_contracts_documents`
--
ALTER TABLE `vendor_contracts_documents`
  ADD PRIMARY KEY (`vcd_id`);

--
-- Indexes for table `vendor_documents`
--
ALTER TABLE `vendor_documents`
  ADD PRIMARY KEY (`vendor_document_id`);

--
-- Indexes for table `vendor_invoices`
--
ALTER TABLE `vendor_invoices`
  ADD PRIMARY KEY (`vendor_invoice_id`);

--
-- Indexes for table `vendor_invoices_discount_charges`
--
ALTER TABLE `vendor_invoices_discount_charges`
  ADD PRIMARY KEY (`vidc_id`);

--
-- Indexes for table `vendor_invoices_items`
--
ALTER TABLE `vendor_invoices_items`
  ADD PRIMARY KEY (`vii_id`);

--
-- Indexes for table `vendor_invoice_payments`
--
ALTER TABLE `vendor_invoice_payments`
  ADD PRIMARY KEY (`vip_id`);

--
-- Indexes for table `vendor_logs`
--
ALTER TABLE `vendor_logs`
  ADD PRIMARY KEY (`vendor_logs_id`);

--
-- Indexes for table `vendor_orders`
--
ALTER TABLE `vendor_orders`
  ADD PRIMARY KEY (`vendor_order_id`);

--
-- Indexes for table `vendor_orders_documents`
--
ALTER TABLE `vendor_orders_documents`
  ADD PRIMARY KEY (`vod_id`);

--
-- Indexes for table `vendor_orders_payments`
--
ALTER TABLE `vendor_orders_payments`
  ADD PRIMARY KEY (`vop_id`);

--
-- Indexes for table `vendor_payment_modes`
--
ALTER TABLE `vendor_payment_modes`
  ADD PRIMARY KEY (`vpm_id`);

--
-- Indexes for table `vendor_products_services`
--
ALTER TABLE `vendor_products_services`
  ADD PRIMARY KEY (`vps_id`);

--
-- Indexes for table `vendor_queries`
--
ALTER TABLE `vendor_queries`
  ADD PRIMARY KEY (`vendor_query_id`);

--
-- Indexes for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  ADD PRIMARY KEY (`vendor_review_id`);

--
-- Indexes for table `vendor_tasks`
--
ALTER TABLE `vendor_tasks`
  ADD PRIMARY KEY (`vendor_tasks_id`);

--
-- Indexes for table `vendor_tasks_activities`
--
ALTER TABLE `vendor_tasks_activities`
  ADD PRIMARY KEY (`vca_id`);

--
-- Indexes for table `vendor_tasks_activities_document`
--
ALTER TABLE `vendor_tasks_activities_document`
  ADD PRIMARY KEY (`vcad_id`);

--
-- Indexes for table `vendor_tasks_members`
--
ALTER TABLE `vendor_tasks_members`
  ADD PRIMARY KEY (`vendor_task_member_id`);

--
-- Indexes for table `vendor_urls`
--
ALTER TABLE `vendor_urls`
  ADD PRIMARY KEY (`vendor_url_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `ConfigsId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `configurationsid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `config_locations`
--
ALTER TABLE `config_locations`
  MODIFY `config_location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config_mail_sender`
--
ALTER TABLE `config_mail_sender`
  MODIFY `config_mail_sender_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `config_pgs`
--
ALTER TABLE `config_pgs`
  MODIFY `ConfigPgId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config_url_types`
--
ALTER TABLE `config_url_types`
  MODIFY `cut_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `config_values`
--
ALTER TABLE `config_values`
  MODIFY `ConfigValueId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `config_vendor_categories`
--
ALTER TABLE `config_vendor_categories`
  MODIFY `cvc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `config_vendor_types`
--
ALTER TABLE `config_vendor_types`
  MODIFY `vendor_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `systemlogs`
--
ALTER TABLE `systemlogs`
  MODIFY `LogsId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_password_change_requests`
--
ALTER TABLE `user_password_change_requests`
  MODIFY `PasswordChangeReqId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_address`
--
ALTER TABLE `vendor_address`
  MODIFY `vendor_address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `vendor_category_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_contact_persons`
--
ALTER TABLE `vendor_contact_persons`
  MODIFY `vcp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor_contracts`
--
ALTER TABLE `vendor_contracts`
  MODIFY `vendor_contract_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_contracts_documents`
--
ALTER TABLE `vendor_contracts_documents`
  MODIFY `vcd_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_documents`
--
ALTER TABLE `vendor_documents`
  MODIFY `vendor_document_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoices`
--
ALTER TABLE `vendor_invoices`
  MODIFY `vendor_invoice_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoices_discount_charges`
--
ALTER TABLE `vendor_invoices_discount_charges`
  MODIFY `vidc_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoices_items`
--
ALTER TABLE `vendor_invoices_items`
  MODIFY `vii_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_invoice_payments`
--
ALTER TABLE `vendor_invoice_payments`
  MODIFY `vip_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_logs`
--
ALTER TABLE `vendor_logs`
  MODIFY `vendor_logs_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders`
--
ALTER TABLE `vendor_orders`
  MODIFY `vendor_order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders_documents`
--
ALTER TABLE `vendor_orders_documents`
  MODIFY `vod_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_orders_payments`
--
ALTER TABLE `vendor_orders_payments`
  MODIFY `vop_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_payment_modes`
--
ALTER TABLE `vendor_payment_modes`
  MODIFY `vpm_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_products_services`
--
ALTER TABLE `vendor_products_services`
  MODIFY `vps_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_queries`
--
ALTER TABLE `vendor_queries`
  MODIFY `vendor_query_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  MODIFY `vendor_review_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks`
--
ALTER TABLE `vendor_tasks`
  MODIFY `vendor_tasks_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks_activities`
--
ALTER TABLE `vendor_tasks_activities`
  MODIFY `vca_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks_activities_document`
--
ALTER TABLE `vendor_tasks_activities_document`
  MODIFY `vcad_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tasks_members`
--
ALTER TABLE `vendor_tasks_members`
  MODIFY `vendor_task_member_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_urls`
--
ALTER TABLE `vendor_urls`
  MODIFY `vendor_url_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
