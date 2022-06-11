-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 05:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `product_count`, `created_at`, `updated_at`) VALUES
(218, 'Test Category', 'beverly-greene', 'Suscipit quos dolor', 'categories/ZoT11FIPfsuzBtpizALk6IuPZHwKt6HIoaTUOyIB.png', 0, '2022-05-20 01:06:27', '2022-05-20 04:58:19'),
(219, 'Test Category One', 'test-category', 'Test Category Description', 'categories/A4Fv0qPjL6iT71aWI7VnmVlIkX0k0ctH3G8Zzg5Y.png', 0, '2022-05-20 04:53:41', '2022-05-20 04:53:57'),
(221, 'Roanna Weaver', 'roanna-weaver', 'In ad eligendi ab pe', NULL, 0, '2022-05-20 05:01:46', '2022-05-20 05:01:46'),
(222, 'Lavinia Pacheco', 'lavinia-pacheco', 'Ea delectus nihil h', NULL, 0, '2022-05-21 00:37:24', '2022-05-21 00:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `image`, `company`, `website`, `facebook`, `created_at`, `updated_at`) VALUES
(22, 'Daryl', 'Page', 'gejud@mailinator.com', '+1 (791) 779-7212', 'Autem architecto ips', 'Enim iusto dolor cup', 'customers/YhDrBaCTVxFmqmlXSmtnaCJTt4lFu1w8lYJgrbJs.jpg', 'Richards and Flynn Associates', 'https://www.jiroluhu.ws', 'https://www.noxubebamukipo.ws', '2022-05-20 00:44:58', '2022-05-20 00:47:42'),
(25, 'Moniruzzaman', 'Saikat', 'moniruzzamansaikat@yahoo.com', '+8801309956223', 'Rangpur', 'Rangpur', 'customers/7LVadfejiBCtxYrFsqiFkGRyKbtuUk8gutFX2AuY.jpg', 'Zip2', 'https://saikim.net', NULL, '2022-05-20 04:54:30', '2022-05-20 04:54:30'),
(26, 'Vance', 'Tanner', 'puco@mailinator.com', '+1 (966) 677-7621', 'Perferendis voluptat', 'Nostrud vero lorem n', 'customers/ICsDdHxXLmPncrh1TmEfG74e3PtRopGh5wxUF4gY.jpg', 'Hawkins Bryan Plc', 'https://www.ligoxim.org', 'https://www.hirorykitiga.ws', '2022-05-20 05:01:29', '2022-05-20 05:01:29'),
(27, 'Fletcher', 'Blanchard', 'byvonezir@mailinator.com', '+1 (331) 148-4528', 'Est voluptate perfe', 'Qui ea voluptates et', 'customers/n3BeK8F4uzonskCMHybYbh0ASzSz1K027nvhsFlB.jpg', 'Sanford Arnold Trading', 'https://www.bizininodaqi.us', 'https://www.makaqaqy.org.uk', '2022-05-21 00:37:54', '2022-05-21 00:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_16_112034_create_categories_table', 2),
(6, '2022_05_16_112202_create_products_table', 3),
(7, '2022_05_16_112438_create_customers_table', 4),
(8, '2022_05_16_112649_create_orders_table', 5),
(9, '2022_05_16_113244_add_price_to_products_table', 6),
(10, '2022_05_16_113540_add_quantity_to_products_table', 7),
(11, '2022_05_20_015647_create_shop_table', 8),
(12, '2022_05_20_112539_add_sold_to_products_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `total_amount` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `status`, `payment_method`, `quantity`, `total_amount`, `created_at`, `updated_at`) VALUES
(13, 25, 17, 'completed', 'credit_card', 68, 76160, '2022-05-20 05:02:36', '2022-05-20 05:02:55'),
(18, 25, 17, 'completed', 'credit_card', 45, 50400, '2022-05-23 09:29:20', '2022-05-23 09:29:20'),
(21, 26, 21, 'pending', 'credit_card', NULL, 0, '2022-06-10 20:45:00', '2022-06-10 20:45:00'),
(22, 25, 22, 'completed', 'credit_card', 1, 514, '2022-06-10 20:46:41', '2022-06-10 20:46:45'),
(23, 25, 17, 'pending', 'credit_card', 918, 1028160, '2022-06-10 20:47:00', '2022-06-10 20:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `sold` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `user_id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`, `price`, `quantity`, `sold`) VALUES
(17, 218, 4, 'Test Product', 'test-product', '<p>!</p>\r\n<p>test product body</p>', 'products/sE3cGSVTr69Rarlv6Mw05uUbjlvaIfKgbZitQjsR.jpg', '2022-05-20 04:55:17', '2022-06-10 20:47:00', '2022-06-02 08:57:23', '1120.00', 8, 2),
(19, 218, 4, 'Ginger Haney', 'ginger-haney', '<p>Ginger Haney</p>', 'products/UN5DJxl0jmvPsdpyyiLoU8Za5eMv8rvctQKipU4W.png', '2022-05-21 00:38:34', '2022-05-23 09:29:47', '2022-06-02 08:57:23', '431.00', 369, 2),
(20, 222, 4, 'Kristen Durham', 'kristen-durham', '<p>test</p>', 'products/adUKb793cIJ28W5SorRmrFNhVlhmdVALZVrq7qTi.png', '2022-06-02 03:02:16', '2022-06-02 03:02:16', '2022-06-02 09:02:16', '476.00', 658, 0),
(21, 218, 4, 'Uriel Bolton', 'uriel-bolton', '<p>test</p>', 'products/sDgAfjXEs8cbBSaFSkBgYriRkEcMBya58kHAn67o.png', '2022-06-10 06:31:39', '2022-06-10 20:45:00', '2022-06-10 12:31:39', '712.00', 501, 1),
(22, 222, 4, 'Brittany Douglas', 'brittany-douglas', '<p>test</p>', 'products/YGRoEl3IVra43lwbbFY0aKAXKOZEAb17DkiV2uX8.png', '2022-06-10 06:31:57', '2022-06-10 20:46:41', '2022-06-10 12:31:57', '514.00', 329, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_keeper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `shop_name`, `shop_keeper`, `shop_email`, `shop_phone`, `shop_address`, `shop_website`, `shop_logo`, `created_at`, `updated_at`) VALUES
(1, 'My Store', 'Shop Keeper name', 'shop@gmail.com', '+8801309956223', 'Rangpur', NULL, 'public/shop/shop_logo.png', '2022-05-19 20:13:36', '2022-05-23 09:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'admin@gmail.com', 'admin', '2022-05-16 05:33:59', '$2a$12$jrrGFDgxTgRgXAtsNEPLnOJ7MLOo0TdYmh7gTKDsyDCJkzyXJVuX2', '0cs9Z35QN7Ervedx1hwc2LuSysT6AG04VNv4TlQp3rO7wHnNAyMXBHuCf1lh', '2022-05-16 05:33:59', '2022-05-20 00:40:48'),
(11, 'Hollee Armstrong', 'jekogo@mailinator.com', 'user', NULL, '$2y$10$.6JUbLAVgpEso/jyIzbA7.ebEkV6iBvytlDwp6XE3VCfMn/9/szxu', NULL, '2022-05-21 00:41:23', '2022-05-21 00:41:23'),
(13, 'Brenda Douglas', 'zibo@mailinator.com', 'admin', NULL, '$2y$10$cCcpBwHfb1u7.hognxFHt.zDxSpHUdjWk84un5u40ITg5/uiHLeGq', NULL, '2022-05-21 00:41:43', '2022-05-21 00:41:43'),
(14, 'Jackson Mcleod', 'tyqixihen@mailinator.com', 'admin', NULL, '$2y$10$yHid6a15r99Hp2uaSZ6wfuiqV6AGNCNY3GMkwcumT5bZC4s3m8vdS', NULL, '2022-05-21 00:41:51', '2022-05-21 00:41:51'),
(15, 'Thaddeus Ware', 'vyhevaqe@mailinator.com', 'user', NULL, '$2y$10$KGuhC47KBtRAFoQ3KzvT/Ow8ltsOi55cjsOcDSzPWVnGWenf37dIC', NULL, '2022-05-21 00:41:58', '2022-05-21 00:41:58'),
(16, 'Illana Bates', 'jupubymyk@mailinator.com', 'user', NULL, '$2y$10$yxScL5eWwK2NHrlAAH9wtuYadAmuKEW5cEoY.f1kc/VLDUUC7gGga', NULL, '2022-06-10 21:26:16', '2022-06-10 21:26:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
