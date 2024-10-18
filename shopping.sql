-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2024 lúc 01:41 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_models`
--

CREATE TABLE `account_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account_models`
--

INSERT INTO `account_models` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'phạm văn thịnh', 'pvthinh@gmail.com', '12345', '2024-10-16 19:52:27', '2024-10-16 19:52:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner_models`
--

CREATE TABLE `banner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner_models`
--

INSERT INTO `banner_models` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Các Loại giày chính hãng', '1729112320.jpg', 'Luôn ưu tiên trải nghiệm của khách hàng, chất lượng là trên hết', '2024-10-15 23:59:40', '2024-10-16 13:58:40'),
(3, 'Trải nghiệm tốt nhất', '1729112311.jpg', 'Cảm giác bóng luôn là sự ưu tiên hàng đầu', '2024-10-16 00:31:01', '2024-10-16 13:58:31'),
(4, 'Chất lượng tuyệt vời', '1729111866.jpg', 'Chất lượng là điều tiên quyết', '2024-10-16 00:31:47', '2024-10-16 13:51:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_models`
--

CREATE TABLE `category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_models`
--

INSERT INTO `category_models` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'GIÀY NIKE', 'GIÀY NIKE', 1, '2024-10-12 09:39:17', '2024-10-15 22:49:12'),
(3, 'Adidas', 'Adidas', 1, '2024-10-12 21:17:10', '2024-10-15 22:49:37'),
(5, 'Mizuno', 'Mizuno', 1, '2024-10-12 21:20:13', '2024-10-15 22:49:55'),
(9, 'Zocker', 'Zocker', 1, '2024-10-15 22:52:18', '2024-10-15 22:52:18'),
(10, 'Biti\'s', 'Biti\'s', 1, '2024-10-15 23:04:57', '2024-10-15 23:04:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_11_183226_create_category_models_table', 2),
(6, '2024_10_14_044222_create_product_models_table', 3),
(7, '2024_10_14_154719_create_oder_models_table', 4),
(8, '2024_10_16_064431_create_banner_models_table', 5),
(9, '2024_10_17_005622_create_account_models_table', 6),
(10, '2024_10_17_145027_add_lv_to_users', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_models`
--

CREATE TABLE `oder_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oder_models`
--

INSERT INTO `oder_models` (`id`, `address`, `name`, `total_price`, `payment`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 'hn', 'thinh', 10950000, 'Thanh toán khi nhận hàng', 'Đặt hàng', '2024-10-16 14:25:15', '2024-10-16 16:16:20'),
(5, 'thanh hoa', 'phạm văn thịnh', 4800000, 'Thanh toán khi nhận hàng', 'Đặt hàng', '2024-10-16 14:43:40', '2024-10-16 16:13:01'),
(7, 'thanh hoa', 'admin', 1600000, 'Thanh toán khi nhận hàng', 'Đơn hàng đã được duyệt', '2024-10-16 16:10:01', '2024-10-16 16:10:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_models`
--

CREATE TABLE `product_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_models`
--

INSERT INTO `product_models` (`id`, `name`, `description`, `image`, `price`, `active`, `id_category`, `created_at`, `updated_at`) VALUES
(7, 'Giày Nike vapor16', 'giày chính hãng', '1729059063.jpg', 3200000, 1, 1, '2024-10-15 23:11:03', '2024-10-15 23:11:03'),
(8, 'Nike Vapor 16 Pro TF', 'giày chính hãng', '1729059121.jpg', 1600000, 1, 1, '2024-10-15 23:12:01', '2024-10-15 23:12:01'),
(9, 'Nike Vapor 16 FG', 'giày chính hãng', '1729059153.jpg', 2050000, 1, 1, '2024-10-15 23:12:33', '2024-10-15 23:12:33'),
(10, 'Mizuno Morelia', 'giày chính hãng', '1729059208.jpg', 2900000, 1, 5, '2024-10-15 23:13:28', '2024-10-15 23:13:28'),
(11, 'Mizuno Neo4', 'giày chính hãng', '1729059243.jpg', 1590000, 1, 5, '2024-10-15 23:14:03', '2024-10-15 23:14:03'),
(12, 'Adidas x Crazyfat', 'giày chính hãng', '1729059318.jpg', 1900000, 1, 3, '2024-10-15 23:15:18', '2024-10-15 23:15:18'),
(13, 'Adidas Predator', 'giày chính hãng', '1729059376.jpg', 3200000, 1, 3, '2024-10-15 23:16:16', '2024-10-15 23:16:16'),
(14, 'Adidas IE2616', 'giày chính hãng', '1729059421.jpg', 1200000, 1, 3, '2024-10-15 23:17:01', '2024-10-15 23:17:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lv`) VALUES
(1, 'Admin', 'pvthinh12345@gmail.com', NULL, '$2y$10$Adcka0gyE5zIJBCqaRJSVeGxfbfP1xMrxaqM.tDKgdy.CG3QKQOea', NULL, NULL, NULL, 1),
(7, 'phạm văn thịnh', 'pvthinh@gmail.com', NULL, '$2y$10$dH9THsNRX2vx6er3Y2SpYOKkd3szZoyYEnbVldxZuQhAArMXN2otW', NULL, '2024-10-17 08:26:30', '2024-10-17 08:26:30', 2),
(8, 'test', 'butngao12345@gmail.com', NULL, '$2y$10$1RBs1tz/HvwGR3jNAFmqRuhpB3zPvY21yGqnxh83LFiEM3J2Imy7a', NULL, '2024-10-17 08:39:09', '2024-10-17 08:39:09', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_models`
--
ALTER TABLE `account_models`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner_models`
--
ALTER TABLE `banner_models`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_models`
--
ALTER TABLE `category_models`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder_models`
--
ALTER TABLE `oder_models`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_models`
--
ALTER TABLE `account_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner_models`
--
ALTER TABLE `banner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category_models`
--
ALTER TABLE `category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `oder_models`
--
ALTER TABLE `oder_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
