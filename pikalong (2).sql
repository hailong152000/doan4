-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for doan4
CREATE DATABASE IF NOT EXISTS `doan4` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `doan4`;

-- Dumping structure for table doan4.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `customer_id` bigint(20) unsigned NOT NULL,
  `TenSP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) unsigned NOT NULL DEFAULT '1',
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float unsigned NOT NULL DEFAULT '0',
  `check` double unsigned NOT NULL DEFAULT '0',
  `details_id` bigint(20) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cart_products` (`product_id`),
  KEY `FK_carts_details` (`details_id`),
  KEY `FK_carts_customers` (`customer_id`),
  CONSTRAINT `FK_cart_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_carts_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_carts_details` FOREIGN KEY (`details_id`) REFERENCES `details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

-- Dumping data for table doan4.carts: ~8 rows (approximately)
DELETE FROM `carts`;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` (`id`, `product_id`, `customer_id`, `TenSP`, `quantity`, `image`, `price`, `check`, `details_id`, `created_at`, `updated_at`) VALUES
	(68, 22, 1, 'Tai nghe Razer  Dareu EH722S (Đen)', 1, 'Tai nghe Razer  Dareu EH722S (Đen).webp', 1600000, 1, 34, '2021-06-07 14:23:21', '2021-06-07 14:23:21'),
	(69, 20, 1, 'Tai nghe On-ear Logitech H150 (Trắng)', 1, 'Tai nghe On-ear Logitech H150 (Trắng).webp', 600000, 1, 34, '2021-06-09 14:03:55', '2021-06-09 14:03:55'),
	(70, 15, 1, 'Chuột máy tính gaming không dây Logitech G604', 1, 'Chuột máy tính gaming không dây Logitech G604.webp', 2500000, 1, 34, '2021-06-09 14:04:00', '2021-06-09 14:04:00');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;

-- Dumping structure for table doan4.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.categories: ~0 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table doan4.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dia_chi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SĐT` double NOT NULL,
  `UID` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table doan4.customers: ~3 rows (approximately)
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`customer_id`, `Ten`, `Dia_chi`, `SĐT`, `UID`, `Password`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Chu Hải Long', 'Hưng Yên', 378758853, 'hailong', 'long152000', '89020471_848873502248330_7329575352362074112_n (1).jpg', NULL, '2021-06-09 13:10:33'),
	(2, 'Đỗ Huy Hoàng', 'Hưng Yên', 393588520, 'hailong1', 'long152000', NULL, NULL, NULL),
	(3, 'Chu Bá Giang', 'Ân Thi Hưng Yên', 989124129, 'hailong152000', 'long1', NULL, '2021-06-05 09:09:03', '2021-06-05 09:09:03');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table doan4.details
CREATE TABLE IF NOT EXISTS `details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `total_price` float unsigned NOT NULL DEFAULT '0',
  `checks` double unsigned DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_details_customers` (`customer_id`),
  CONSTRAINT `FK_details_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table doan4.details: ~9 rows (approximately)
DELETE FROM `details`;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` (`id`, `customer_id`, `total_price`, `checks`, `created_at`, `updated_at`) VALUES
	(1, 1, 500000, 9, NULL, NULL),
	(34, 1, 4700000, 0, '2021-06-09 14:04:09', '2021-06-09 14:04:09');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;

-- Dumping structure for table doan4.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table doan4.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.migrations: ~16 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2021_04_26_013950_create_products_table', 2),
	(6, '2021_04_26_073456_create_linh_o_chos_table', 2),
	(8, '2021_05_12_014039_create_n_c_c_s_table', 3),
	(10, '2021_05_12_015129_create_products_table', 5),
	(11, '2021_05_12_015323_create_products_table', 6),
	(12, '2021_05_12_022818_create_products_table', 7),
	(13, '2021_05_12_024643_create_products_table', 8),
	(15, '2014_10_12_000000_create_users_table', 9),
	(16, '2014_10_12_100000_create_password_resets_table', 9),
	(17, '2019_08_19_000000_create_failed_jobs_table', 9),
	(18, '2021_04_22_112100_create_categories_table', 9),
	(19, '2021_05_12_013156_create_product_types_table', 9),
	(20, '2021_05_12_014507_create_nccs_table', 9),
	(21, '2021_05_12_025233_create_products_table', 10),
	(22, '2021_05_12_091355_create_products_table', 11),
	(23, '2021_05_12_084918_product_type', 12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table doan4.nccs
CREATE TABLE IF NOT EXISTS `nccs` (
  `NCC_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NCC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`NCC_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.nccs: ~2 rows (approximately)
DELETE FROM `nccs`;
/*!40000 ALTER TABLE `nccs` DISABLE KEYS */;
INSERT INTO `nccs` (`NCC_id`, `NCC`, `created_at`, `updated_at`) VALUES
	(1, 'Razer', NULL, NULL),
	(2, 'Logitech', NULL, NULL);
/*!40000 ALTER TABLE `nccs` ENABLE KEYS */;

-- Dumping structure for table doan4.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table doan4.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `producttype_id` bigint(20) unsigned NOT NULL,
  `ncc_id` bigint(20) unsigned NOT NULL,
  `price` double DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_products_nccs` (`ncc_id`),
  KEY `FK_products_product_types` (`producttype_id`),
  CONSTRAINT `FK_products_nccs` FOREIGN KEY (`ncc_id`) REFERENCES `nccs` (`NCC_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_products_product_types` FOREIGN KEY (`producttype_id`) REFERENCES `product_types` (`producttype_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table doan4.products: ~22 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `image`, `producttype_id`, `ncc_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
	(1, 'Chuột gaming Logitech G102 Gen2 Lightsync (Đen)', '- LED màu xanh dương - Giao tiếp USB - 2400dpi - 5 phím - 5 triệu lần nhấn - Dây bọc dù, chống nhiễu', 'Chuột gaming Logitech G102 Gen2 Lightsync (Đen).webp', 1, 2, 500000, 200, '2021-05-19 08:41:53', '2021-05-19 09:11:43'),
	(2, 'Bàn phím cơ quang học RAZER EK520 \r\n', '- Kiểu: Bàn phím cơ ', 'Bàn phím cơ quang học RAZER EK520.webp\r\n\r\n', 2, 1, 1200000, 15, '2021-05-29 17:21:27', '2021-05-29 17:21:27'),
	(3, 'Bàn phím cơ Razer Huntsman Tournament Edition (Linear Optical Red Switch) (RZ03-03080100-R3M1)', '- Kiểu: Bàn phím cơ ', 'Bàn phím cơ Razer Huntsman Tournament Edition (Linear Optical Red Switch) (RZ03-03080100-R3M1).webp', 2, 1, 120000, 20, '2021-05-19 08:42:45', '2021-05-19 08:42:45'),
	(5, 'Bàn phím cơ LOGITECH BJX KM9 (Red Switch)', '- Kiểu: Bàn phím cơ ', 'Bàn phím cơ LOGITECH BJX KM9 (Red Switch).webp', 2, 2, 1500000, 50, '2021-06-04 11:07:47', '2021-06-04 11:07:47'),
	(7, 'Chuột máy tính LOGITECH  Fox-7 (Đen)', '- LED màu xanh dương - Giao tiếp USB - 2400dpi - 5 phím - 5 triệu lần nhấn - Dây bọc dù, chống nhiễu', 'Chuột máy tính LOGITECH  Fox-7 (Đen).webp', 1, 2, 500000, 51, '2021-05-19 06:19:54', '2021-05-19 06:19:54'),
	(8, 'Bàn phím Newmen KB810', '- Bàn phím thường - Kết nối PS/2', 'Bàn phím Newmen KB810.webp', 2, 2, 500000, 50, '2021-05-19 08:41:53', '2021-05-19 09:11:43'),
	(9, 'Chuột gaming FL ESports G50Led (Đen)', '- DPI: 3200 - nhiều mức độ điều chỉnh- Số nút bấm: 6 phím- Switch tối thiểu hơn 20 triệu lượt click- Chip cao cấp Avago A3050', 'Chuột gaming FL ESports G50Led (Đen).webp', 1, 2, 600000, 25, '2021-05-19 08:41:53', '2021-05-30 05:53:05'),
	(10, 'Chuột máy tính Akko LW325 (Hồng)', '- Thiết kế công thái học cho người thuận tay phải ', 'Chuột máy tính Akko LW325 (Hồng).webp', 1, 2, 360000, 50, '2021-05-30 05:53:05', '2021-05-30 05:53:05'),
	(11, 'Chuột không dây Logitech Arc Mouse Bluetooth ELG-00005 (Đen)', '- Thiết kế mỏng, nhẹ, dễ dàng gấp lại vừa vặn với ngăn túi', 'Chuột không dây Logitech Arc Mouse Bluetooth ELG-00005 (Đen).webp', 1, 2, 2500000, 10, '2021-05-30 05:53:05', '2021-05-30 05:53:05'),
	(12, 'Chuột gaming Logitech Ironclaw', 'Chuột máy tính Corsair Ironclaw', 'Chuột gaming Logitech Ironclaw.webp', 1, 2, 1750000, 15, '2021-06-02 08:36:58', '2021-06-02 08:36:58'),
	(13, 'Chuột máy tính Razer Fox-2 (Đen)', '- Mouse usb,- Có đèn Led phát quang tự thay đổi màu.- DPI tối đa 1000', 'Chuột máy tính Razer Fox-2 (Đen).webp', 1, 1, 160000, 50, '2021-06-02 08:36:58', '2021-06-02 08:36:58'),
	(14, 'Chuột máy tính Razer BM-26 (Xanh,Đen)', '- LED màu xanh dương - Giao tiếp USB - 2400dpi - 5 phím - 5 triệu lần nhấn - Dây bọc dù, chống nhiễu', 'Chuột máy tính Razer BM-26 (Xanh,Đen).webp', 1, 1, 250000, 10, '2021-06-02 07:46:06', '2021-06-02 07:46:06'),
	(15, 'Chuột máy tính gaming không dây Logitech G604', '- Chuột chơi game không dây LightSpeed G604 ', 'Chuột máy tính gaming không dây Logitech G604.webp', 1, 2, 2500000, 5, '2021-06-02 07:46:06', '2021-06-02 07:46:06'),
	(17, 'Bàn phím cơ Logitech EK87 Brown D Switch (Trắng - Hồng)', '- Bàn phím cơ', 'Bàn phím cơ Logitech EK87 Brown D Switch (Trắng - Hồng).webp', 2, 2, 600000, 50, '2021-05-19 08:41:53', '2021-05-19 09:11:43'),
	(18, 'Tai nghe Logitech AH713', '- Tai nghe Soundmax AH-713 ', 'Tai nghe Logitech AH713.webp', 3, 2, 500000, 50, '2021-05-19 06:20:59', '2021-05-19 06:20:59'),
	(19, 'Tai nghe Logitech AORUS H5 RGB', '- Thiết kế vừa vặn nhỏ gọn - Tích hợp Led RGB 16.7 triệu màu\\ - Chất liệu gia công cao cấp cho thời gian sử dụng lâu dài - Cách âm hiệu quả', 'Tai nghe Logitech AORUS H5 RGB.webp', 3, 2, 250000, 50, '2021-05-19 06:20:59', '2021-05-19 06:20:59'),
	(20, 'Tai nghe On-ear Logitech H150 (Trắng)', '- Thiết Kế: On Ear (trùm kín trên tai)', 'Tai nghe On-ear Logitech H150 (Trắng).webp', 3, 2, 600000, 20, '2021-06-04 11:07:47', '2021-06-04 11:07:47'),
	(21, 'Tai nghe Razer OVANN X7 (Đen)', '- Tai nghe choàng đầu chuyên game', 'Tai nghe Razer OVANN X7 (Đen).webp', 3, 1, 1500000, 15, '2021-05-23 03:30:05', '2021-05-23 03:30:05'),
	(22, 'Tai nghe Razer  Dareu EH722S (Đen)', '- Kiểu tai nghe: Over-ear', 'Tai nghe Razer  Dareu EH722S (Đen).webp', 3, 1, 1600000, 15, '2021-06-04 11:07:47', '2021-06-04 11:07:47'),
	(23, 'Tai nghe Razerr Zidli ZH2S (Đen)', '- Kiểu tai nghe: Over-ear', 'Tai nghe Razerr Zidli ZH2S (Đen).webp', 3, 1, 160000, 60, '2021-05-29 17:21:27', '2021-05-29 17:21:27'),
	(24, 'Chuột gaming Razer Abyssus 2000 and Goliathus Speed Terra Mouse Mat Bundle (Đen)', '- Cảm biến quang học 3G 1800dpi- Thiết kế cân đối phục vụ kiểu cầm claw grip- Hỗ trợ Razer Synapse 3 nút nhấn phản hồi siêu nhanh có thể lập trình- Tốc độ phản hồi 1000Hz/1ms, Tốc độ quét 60-120 inch/giây', 'xyz.webp', 1, 1, 590000, 50, '2021-06-06 10:40:39', '2021-06-06 10:45:15');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table doan4.product_types
CREATE TABLE IF NOT EXISTS `product_types` (
  `producttype_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`producttype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.product_types: ~3 rows (approximately)
DELETE FROM `product_types`;
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT INTO `product_types` (`producttype_id`, `product_type`, `created_at`, `updated_at`) VALUES
	(1, 'Chuột', NULL, NULL),
	(2, 'Bàn Phím', NULL, NULL),
	(3, 'Tai nghe', NULL, NULL);
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;

-- Dumping structure for table doan4.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table doan4.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `DiaChi`, `SDT`, `created_at`, `updated_at`) VALUES
	(1, 'Chu Hải Long', 'longpro3467@gmail.com', NULL, '$2y$10$lAaiixTkcm8N/gGndOHeAuUpcJ6rS4VVVizvHUIBaznjbiezb2L9C', NULL, 'Hưng Yên', 378758853, '2021-05-19 06:20:59', '2021-05-19 06:20:59'),
	(4, 'Chu Hải Long', 'hailong2khy@gmail.com', NULL, '$2y$10$dGGqa5s0j6Yd1nS/aRFfsO/4LgKRc6QpvpNO3HS5p1733adgO.8M6', NULL, 'Hưng Yên', 393588520, '2021-05-23 03:30:05', '2021-05-23 03:30:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
