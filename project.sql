-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2025 at 04:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint NOT NULL,
  `customer_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_class_id` bigint DEFAULT NULL,
  `product_images_id` bigint DEFAULT NULL,
  `quantity` decimal(10,3) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer_id`, `product_id`, `product_class_id`, `product_images_id`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 3, 9, 11, '1.000', '2025-04-22 19:53:14', NULL, NULL),
(2, 3, 1, 1, 5, '1.000', '2025-04-22 19:53:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint NOT NULL,
  `category_name` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint NOT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`, `updated_at`, `deleted_at`, `create_staff`, `update_staff`, `delete_staff`) VALUES
(1, 'TV', '2025-04-18 21:56:34', NULL, NULL, 2, NULL, NULL),
(2, 'Điện Thoại', '2025-04-18 21:56:47', NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `address`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Hòa này', '$2y$12$NxEHmsNlFem85Dm1CIX3IOBXmou0VUnEPLZ5hsp5aqPktPJWgm366', 'hungtuky2003@gmail.com', 'Thanh Hóa', '0343112309', '2025-04-14 04:38:01', '2025-04-18 05:48:01', NULL),
(3, 'Thaodep', '$2y$12$rVVQ13IIKilttYOULRkb8urUiCVL1whSHTOsAy1FQcWgg4n3uwFb6', 'Hungtuky20034@gmail.com.vn', 'Lào Cai', '0343112309', '2025-04-14 05:22:48', '2025-04-18 05:49:47', NULL),
(4, 'Thaoxinh', '$2y$12$4m2S8T7QRDbe3VNdIRLRcuYRZa9TZ57Yta1k2PA/kzpKnCDrtdJlq', 'Hungtuky2003@gmail.com.vn', 'Lào Cai', '0343112309', '2025-04-18 05:47:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maker`
--

CREATE TABLE `maker` (
  `id` bigint NOT NULL,
  `maker_name` varchar(64) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `note` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint NOT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `maker`
--

INSERT INTO `maker` (`id`, `maker_name`, `tel`, `email`, `note`, `created_at`, `updated_at`, `deleted_at`, `create_staff`, `update_staff`, `delete_staff`) VALUES
(1, 'Samsung', '1800588890', 'Samsung@gmail.com.vn', NULL, '2025-04-18 21:56:21', NULL, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint NOT NULL,
  `customer_id` bigint NOT NULL,
  `order_date` datetime NOT NULL,
  `amount` bigint DEFAULT NULL COMMENT 'tong tien',
  `status_id` smallint DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint NOT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` bigint NOT NULL,
  `order_id` bigint NOT NULL,
  `product_name` varchar(64) DEFAULT NULL,
  `quantity` bigint DEFAULT NULL,
  `cost` bigint DEFAULT NULL,
  `price` bigint DEFAULT NULL,
  `note` text,
  `status_id` int DEFAULT NULL,
  `ship_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint NOT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint NOT NULL,
  `maker_id` bigint NOT NULL,
  `category_id` bigint NOT NULL,
  `product_code` varchar(64) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_image` varchar(64) DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint NOT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `maker_id`, `category_id`, `product_code`, `product_name`, `product_image`, `note`, `created_at`, `updated_at`, `deleted_at`, `create_staff`, `update_staff`, `delete_staff`) VALUES
(1, 1, 2, 'sp-01', 'Galaxy S25 Ultra', 'product_images/M1XIApneJDLd3onHeCwKfKezsNHOshv6yQInEUQy.jpg', NULL, '2025-04-18 22:06:10', '2025-04-18 22:50:32', NULL, 2, 3, NULL),
(2, 1, 2, 'sp-02', 'Galaxy S24 512GB x2 dung lượng', 'product_images/6vRFDK1s5eN9ZKCnvb1Nnjto19tgmnGat8cCN5Hw.jpg', NULL, '2025-04-18 22:16:10', '2025-04-25 00:05:15', NULL, 2, 2, NULL),
(3, 1, 2, 'sp-03', 'Galaxy A26 5G Tặng sạc 25W', 'product_images/D1jMomOIR5VgyOshE2gonUGD4cAPdc8ELk8xdZnt.jpg', NULL, '2025-04-18 22:25:48', '2025-04-18 22:56:55', NULL, 2, 3, NULL),
(4, 1, 2, 'sp-04', 'Galaxy S24 FE ưu đãi 2,5 triệu', 'product_images/qeigu5VQg1ZJu4wXnn20pCOUWO3y3laXcuwEoa7F.jpg', NULL, '2025-04-18 22:35:01', '2025-04-18 22:36:21', NULL, 2, 2, NULL),
(5, 1, 2, 'sp-05', 'Galaxy S25', 'main_product_images/sLQOSe2an96QoeOzDHKGEvlfCzm0LMABLJklBFg8.jpg', NULL, '2025-04-18 23:05:24', '2025-04-25 00:02:35', NULL, 3, 2, NULL),
(6, 1, 2, 'sp-06', 'Galaxy S25+', 'product_images/T0eup4xJZr5kpObYefGUJiBKhstHfHtdJ2jjiWmV.png', NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_class`
--

CREATE TABLE `product_class` (
  `id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_code` varchar(64) NOT NULL,
  `color_code` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `color` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL,
  `cost` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `stock_quantity` decimal(10,3) DEFAULT NULL,
  `note` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint DEFAULT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_class`
--

INSERT INTO `product_class` (`id`, `product_id`, `product_code`, `color_code`, `color`, `size`, `cost`, `price`, `stock_quantity`, `note`, `created_at`, `updated_at`, `deleted_at`, `create_staff`, `update_staff`, `delete_staff`) VALUES
(1, 1, 'sp-01-001', '#5B798E', 'Xanh Titan', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 22:06:10', NULL, NULL, 2, NULL, NULL),
(2, 1, 'sp-01-002', '#5B798E', 'Xanh Titan', '512GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:07:40', NULL, NULL, 3, NULL),
(3, 1, 'sp-01-003', '#5B798E', 'Xanh Titan', '1TB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:07:40', NULL, NULL, 3, NULL),
(5, 2, 'sp-02-001', '#0047AB', 'Xanh Sapphire', '256GB｜8GB', NULL, NULL, NULL, NULL, '2025-04-18 22:16:10', NULL, NULL, 2, NULL, NULL),
(6, 2, 'sp-02-002', '#0047AB', 'Xanh Sapphire', '512GB｜8GB', NULL, NULL, NULL, NULL, '2025-04-18 22:16:10', NULL, NULL, 2, NULL, NULL),
(7, 2, 'sp-02-003', '#95A69F', 'Xanh lục Jadeite', '512GB｜8GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:19:03', NULL, NULL, 2, NULL),
(8, 2, 'sp-02-004', '#95A69F', 'Xanh lục Jadeite', '256GB｜8GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:19:03', NULL, NULL, 2, NULL),
(9, 3, 'sp-03-001', '#FFA500', 'Cam Opal', '128 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:25:48', NULL, NULL, 2, NULL, NULL),
(10, 3, 'sp-03-002', '#FFA500', 'Cam Opal', '256 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:25:48', NULL, NULL, 2, NULL, NULL),
(11, 3, 'sp-03-003', '#004C73', 'Xanh Opal', '128 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:25:48', NULL, NULL, 2, NULL, NULL),
(12, 3, 'sp-03-004', '#004C73', 'Xanh Opal', '256 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:25:48', NULL, NULL, 2, NULL, NULL),
(13, 4, 'sp-04-001', '#FFC87C', 'Xanh Topaz', '128 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(14, 4, 'sp-04-002', '#FFC87C', 'Xanh Topaz', '256 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(15, 4, 'sp-04-003', '#41424C', 'Đen Graphite', '128 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(16, 4, 'sp-04-004', '#41424C', 'Đen Graphite', '256 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(17, 4, 'sp-04-005', '#A49E9E', 'Xám Opal', '128 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(18, 4, 'sp-04-006', '#A49E9E', 'Xám Opal', '256 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(19, 4, 'sp-04-007', '#00A86B', 'Xanh Jade', '128 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(20, 4, 'sp-04-008', '#00A86B', 'Xanh Jade', '256 GB', NULL, NULL, NULL, NULL, '2025-04-18 22:35:01', NULL, NULL, 2, NULL, NULL),
(21, 1, 'sp-01-004', '#828788', 'Xám Titan', '256GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(22, 1, 'sp-01-005', '#828788', 'Xám Titan', '512GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(23, 1, 'sp-01-006', '#828788', 'Xám Titan', '1TB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(24, 1, 'sp-01-007', '#878681', 'Đen Titan', '256GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(25, 1, 'sp-01-008', '#878681', 'Đen Titan', '512GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(26, 1, 'sp-01-009', '#878681', 'Đen Titan', '1TB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(27, 1, 'sp-01-010', '#C0C0C0', 'Bạc Titan', '256GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(28, 1, 'sp-01-011', '#C0C0C0', 'Bạc Titan', '512GB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(29, 1, 'sp-01-012', '#C0C0C0', 'Bạc Titan', '1TB｜12GB', NULL, NULL, NULL, NULL, NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(30, 5, 'sp-05-001', '#017B92', 'Đen Ocean', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(31, 5, 'sp-05-002', '#017B92', 'Đen Ocean', '512GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(32, 5, 'sp-05-003', '#FF4040', 'Đỏ Coral', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(33, 5, 'sp-05-004', '#FF4040', 'Đỏ Coral', '512GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(34, 5, 'sp-05-005', '#B76E79', 'Vàng Rose', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(35, 5, 'sp-05-006', '#B76E79', 'Vàng Rose', '512GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(36, 6, 'sp-06-001', '#97C1E6', 'Xanh Icy', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL),
(37, 6, 'sp-06-002', '#97C1E6', 'Xanh Icy', '512GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL),
(38, 6, 'sp-06-003', '#CFD2D3', 'Bạc Shadow', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL),
(39, 6, 'sp-06-004', '#CFD2D3', 'Bạc Shadow', '512GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL),
(40, 6, 'sp-06-005', '#98FF98', 'Xanh Mint', '256GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL),
(41, 6, 'sp-06-006', '#98FF98', 'Xanh Mint', '512GB｜12GB', NULL, NULL, NULL, NULL, '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_staff` bigint DEFAULT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_image`, `created_at`, `updated_at`, `deleted_at`, `create_staff`, `update_staff`, `delete_staff`) VALUES
(1, 4, 'product_images/6sFPWK3wEWxJq4VUBRsckyc9dGhFGfmQpg0KaAUy.jpg', NULL, '2025-04-18 22:36:21', NULL, NULL, 2, NULL),
(2, 4, 'product_images/tOIpWnJb2TcNWxcMXxKJFYDXv4p69R3njSoKahmC.jpg', NULL, '2025-04-18 22:36:21', NULL, NULL, 2, NULL),
(3, 4, 'product_images/i5JKGipB4MDqZBExEU65aw1vWmgWvLJnuyrZL0Ll.jpg', NULL, '2025-04-18 22:36:21', NULL, NULL, 2, NULL),
(4, 4, 'product_images/v3jqoG6IFetsKl0PLGSInrj34Xx7cMHysScCUzHj.jpg', NULL, '2025-04-18 22:36:21', NULL, NULL, 2, NULL),
(5, 1, 'product_images/C0zhYKXTUT8ZiXWbSxL4d4ykliWIgUOe6zTstEpl.png', NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(6, 1, 'product_images/27s4iuxgV2hxdK7GAmmxSneU6kVnuDwlDWcJcVp2.png', NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(7, 1, 'product_images/2CCt4D56s8mP6KWskRtrn8rtLxg3o83CQ74urPfV.png', NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(8, 1, 'product_images/D4TCKTSal4KhyMhOFY1RDvK23PBJssV3zG3be5bw.png', NULL, '2025-04-18 22:46:11', NULL, NULL, 3, NULL),
(9, 2, 'product_images/mm3TMZiQkpbwLxolSLAQM9xFfh5MZ0AbIT4cnctM.jpg', NULL, '2025-04-18 22:50:00', NULL, NULL, 3, NULL),
(10, 2, 'product_images/prU11SjRvSvDnnaiHOBHT0U0iJ7OI4uWsbzLUkQZ.jpg', NULL, '2025-04-18 22:50:00', NULL, NULL, 3, NULL),
(11, 3, 'product_images/AmDcFgFqYDw9X1dsXLpkDZEtWkBLWhXROWKTrjLC.jpg', NULL, '2025-04-18 22:56:55', NULL, NULL, 3, NULL),
(12, 3, 'product_images/Ht5ScuWjy7r2vRHLZPPVvcU0meOo8JYm1wtP3dJw.jpg', NULL, '2025-04-18 22:56:55', NULL, NULL, 3, NULL),
(13, 5, 'product_images/76ZE6NMrKWxc08CWDAzia9L6njEF1vAlUFfabGW2.png', '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(14, 5, 'product_images/hjdCyDOQpoAjUfKqMJRzTZBqK8j4o2AKSxvRsd3P.png', '2025-04-18 23:05:24', NULL, NULL, 3, NULL, NULL),
(15, 6, 'product_images/3hl1ei67JdKgtfPc47MSDgDQoVgPgUAqXcIw6wth.png', '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL),
(16, 6, 'product_images/JvfPqT3ATfLOtWKrYGpmGnxNny0KBeEiB2xLmjFB.png', '2025-04-18 23:11:03', NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint NOT NULL,
  `role_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'Nhân viên'),
(2, 'Quản lý'),
(3, 'Quản trị');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` tinyint NOT NULL,
  `create_staff` bigint NOT NULL,
  `update_staff` bigint DEFAULT NULL,
  `delete_staff` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`, `role_id`, `create_staff`, `update_staff`, `delete_staff`) VALUES
(2, 'Thaoxinh', '$2y$12$/mCc7361OAuTybbqi7HzCuY7IEq2wVhVX6z9WSeulj0jVzLiK8g7q', '2025-04-15 07:00:25', NULL, NULL, 3, 2, NULL, NULL),
(3, 'Tiến Chung', '$2y$12$7oL/G6RJyi6e4Gew.KgS0.Z.jwmO9j6hRCnMIZVLg4XPJl8CUkiPi', '2025-04-15 00:00:50', NULL, NULL, 2, 2, NULL, NULL),
(4, 'Mai Chi', '$2y$12$2dW.OukgjiyxRCBgTcay.ep3/Ksin4dVYjK/2qvuJu.cgLeeeWfD.', '2025-04-15 00:01:05', NULL, NULL, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint NOT NULL,
  `status_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'Chưa hoàn thành'),
(2, 'Giao hàng'),
(3, 'Hoàn thành');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maker`
--
ALTER TABLE `maker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_class`
--
ALTER TABLE `product_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maker`
--
ALTER TABLE `maker`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_class`
--
ALTER TABLE `product_class`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
