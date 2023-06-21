-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 09:46 PM
-- Server version: 10.4.28-MariaDB
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
-- Database: `insurance`
--
CREATE DATABASE IF NOT EXISTS `insurance` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `insurance`;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachee_id` int(10) UNSIGNED NOT NULL,
  `attachee_type` varchar(32) NOT NULL,
  `filename` varchar(16) NOT NULL,
  `name` varchar(32) NOT NULL,
  `uploader_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `recipient_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `status` enum('received','seen','sent') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_notes`
--

DROP TABLE IF EXISTS `client_notes`;
CREATE TABLE `client_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `writer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `aft_api_key` varchar(64) DEFAULT NULL,
  `aft_username` varchar(64) DEFAULT NULL,
  `currency_code` enum('EUR','LBP','RON','USD') NOT NULL DEFAULT 'RON',
  `custom_fields_metadata` text DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `email_signature` text DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `product_categories` text DEFAULT NULL,
  `product_sub_categories` text DEFAULT NULL,
  `reminder_status` tinyint(1) NOT NULL DEFAULT 0,
  `text_provider` enum('aft','twilio') DEFAULT NULL,
  `text_signature` varchar(32) DEFAULT NULL,
  `twilio_auth_token` varchar(64) DEFAULT NULL,
  `twilio_number` varchar(32) DEFAULT NULL,
  `twilio_sid` varchar(64) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `address`, `aft_api_key`, `aft_username`, `currency_code`, `custom_fields_metadata`, `email`, `email_signature`, `name`, `phone`, `product_categories`, `product_sub_categories`, `reminder_status`, `text_provider`, `text_signature`, `twilio_auth_token`, `twilio_number`, `twilio_sid`, `created_at`, `updated_at`) VALUES
(2, 'Romania Bucuresti', NULL, NULL, 'RON', '[]', 'droptics@gmail.com', 'Cu respect, Echipa Droptics.', 'DROPTICS', '+40740000000', 'RCA, Casco', 'Auto', 0, NULL, NULL, NULL, NULL, NULL, '2023-05-26 08:03:10', '2023-06-04 13:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

DROP TABLE IF EXISTS `custom_fields`;
CREATE TABLE `custom_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(64) NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(32) NOT NULL,
  `type` enum('checkbox','date','email','hidden','number','select','tel','text','textarea') NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `recipient_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2018_02_22_074656_companies', 1),
('2018_02_22_080034_users', 1),
('2018_02_22_080554_client_notes', 1),
('2018_02_22_080721_password_resets', 1),
('2018_02_22_081351_products', 1),
('2018_02_22_084717_payments', 2),
('2018_02_22_091827_chats', 3),
('2018_02_22_085338_attachments', 4),
('2018_02_22_093729_custom_fields', 5),
('2018_02_22_090224_emails', 6),
('2018_02_22_093310_jobs', 7),
('2018_02_22_093346_failed_jobs', 8),
('2018_02_22_092509_reminders', 9),
('2018_02_22_091432_texts', 10),
('2023_06_14_192152_create_ocr_data_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `ocr_data`
--

DROP TABLE IF EXISTS `ocr_data`;
CREATE TABLE `ocr_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nr_inmat` varchar(255) NOT NULL,
  `vehType` varchar(255) NOT NULL,
  `vehMake` varchar(255) NOT NULL,
  `vehModel` varchar(255) NOT NULL,
  `ss` varchar(255) NOT NULL,
  `lastN` varchar(255) NOT NULL,
  `firstN` varchar(255) NOT NULL,
  `ownerAdd` varchar(255) NOT NULL,
  `lastN2` varchar(255) NOT NULL,
  `firstN2` varchar(255) NOT NULL,
  `ownerAdd2` varchar(255) NOT NULL,
  `first_reg` varchar(255) NOT NULL,
  `max_mass` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `kw` varchar(255) NOT NULL,
  `combust_type` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `reg_series` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ocr_data`
--

INSERT INTO `ocr_data` (`id`, `created_at`, `updated_at`, `nr_inmat`, `vehType`, `vehMake`, `vehModel`, `ss`, `lastN`, `firstN`, `ownerAdd`, `lastN2`, `firstN2`, `ownerAdd2`, `first_reg`, `max_mass`, `cc`, `kw`, `combust_type`, `seats`, `reg_series`) VALUES
(2, '2023-06-18 13:16:49', '2023-06-18 13:16:49', 'MM-27-SYL ', 'AUTOUTILITARA N3', ' DAF', ' XF480ET', 'XLRTEH4300G267447', 'Sylvio', 'Manea Trans SRL', 'Cuza Voda Nr. 96 Ap.5 Seini, Jud. Maramures', '', '', '', '15.05.2019', '19000', '12902', '355', 'Motorina', '2', 'R225357'),
(3, '2023-06-18 13:38:53', '2023-06-18 13:38:53', 'MM-44-ADD', 'Autoturism', 'GOLF', '4', 'XKHAKJ12456AFSADGFW', 'DOBROIU', 'ANDREI', 'ALEEA SERELOR 2B/1', '', '', '', '14.06.2002', '1500', '1398', '55', 'BENZINA', '5', 'R999999');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `method` enum('card','cash','paypal') NOT NULL,
  `policy_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
CREATE TABLE `policies` (
  `id` int(10) UNSIGNED NOT NULL,
  `beneficiaries` text DEFAULT NULL,
  `expiry` date NOT NULL,
  `payer` varchar(32) NOT NULL,
  `premium` decimal(10,2) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `ref_no` char(8) NOT NULL,
  `renewal` date NOT NULL,
  `special_remarks` text DEFAULT NULL,
  `type` enum('annually','monthly','weekly') NOT NULL,
  `nr_inmat` varchar(64) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '1970-01-01 10:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '1970-01-01 10:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(32) NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `insurer` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `sub_category` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `company_id`, `insurer`, `name`, `sub_category`, `created_at`, `updated_at`) VALUES
(2, 'RCA', 2, 'Euroins', 'Asigurare RCA Euroins', 'Auto', '2023-05-28 10:19:42', '2023-06-14 18:23:29'),
(3, 'RCA', 2, 'Generali', 'Asigura RCA Generali', 'Auto', '2023-05-28 10:19:50', '2023-06-14 18:23:46'),
(11, 'RCA', 2, 'Groupama', 'RCA', 'Auto', '2023-06-18 13:42:25', '2023-06-18 13:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;
CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `days` int(11) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(64) DEFAULT NULL,
  `timeline` enum('after','before') NOT NULL,
  `type` enum('email','text') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE `texts` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `recipient_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `commission_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `company_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(64) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `inviter_id` int(10) UNSIGNED DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `locale` char(5) NOT NULL DEFAULT 'en_US',
  `password` varchar(60) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `profile_image_filename` char(19) NOT NULL DEFAULT 'default-profile.jpg',
  `role` enum('admin','broker','client','staff','super') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `address`, `birthday`, `commission_rate`, `company_id`, `email`, `first_name`, `inviter_id`, `last_name`, `locale`, `password`, `phone`, `profile_image_filename`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Romania', '2002-06-14', '0.00', 2, 'dobroiu.andrei140@gmail.com', 'GHITA', NULL, 'PORTITA', 'ro-RO', '$2y$10$IKMDnVy6mQf3But1sIKyOu716usfSrJF.o001MLmFDGz9ushc9rEi', '+40758301548', 'yQ1UeeM-profile.jpg', 'admin', 'BXQbnd3LCcCgNDR0oVe9UG0D2zGHD34pPGliE2maHZOLwFrRfEmsbTC4PQLa', '2023-05-26 08:03:10', '2023-06-19 16:45:13'),
(34, 'romani', '2002-06-14', '15.00', 2, 'tiimus.gamer@gmail.com', 'tiimus', NULL, 'gamer', 'ro-RO', '$2y$10$XQ6XKoHKdCEItxcw5bVoUOpz6.qENwOxbsH9kG77I1MF5fIYC7tje', '+40740000000', 'default-profile.jpg', 'staff', 'Dl1ruyKpsdmdbvRMittSDHOXuTVQIhL02xqIGe0UHzw1WK9qfUziygOj1oXl', '2023-06-19 14:32:26', '2023-06-19 15:24:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachments_uploader_id_foreign` (`uploader_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_recipient_id_foreign` (`recipient_id`),
  ADD KEY `chats_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `client_notes`
--
ALTER TABLE `client_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_notes_subject_id_foreign` (`subject_id`),
  ADD KEY `client_notes_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emails_recipient_id_foreign` (`recipient_id`),
  ADD KEY `emails_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_reserved_at_index` (`queue`,`reserved`,`reserved_at`);

--
-- Indexes for table `ocr_data`
--
ALTER TABLE `ocr_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ocr_data_ss_unique` (`ss`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_policy_id_foreign` (`policy_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `policies_ref_no_unique` (`ref_no`),
  ADD KEY `policies_product_id_foreign` (`product_id`),
  ADD KEY `policies_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reminders_company_id_foreign` (`company_id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `texts_recipient_id_foreign` (`recipient_id`),
  ADD KEY `texts_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_company_id_foreign` (`company_id`),
  ADD KEY `users_inviter_id_foreign` (`inviter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_notes`
--
ALTER TABLE `client_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ocr_data`
--
ALTER TABLE `ocr_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_uploader_id_foreign` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chats_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_notes`
--
ALTER TABLE `client_notes`
  ADD CONSTRAINT `client_notes_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `client_notes_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `emails_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `emails_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_policy_id_foreign` FOREIGN KEY (`policy_id`) REFERENCES `policies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `policies`
--
ALTER TABLE `policies`
  ADD CONSTRAINT `policies_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `policies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `texts`
--
ALTER TABLE `texts`
  ADD CONSTRAINT `texts_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `texts_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_inviter_id_foreign` FOREIGN KEY (`inviter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
