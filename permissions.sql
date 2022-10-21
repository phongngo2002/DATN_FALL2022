-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2022 at 03:42 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datn_winter2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `desc`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'users', 'Quản lý tài khoản', 0, NULL, NULL, NULL),
(2, 'add_users', 'Thêm tài khoản', 1, NULL, NULL, NULL),
(3, 'update_users', 'Cập nhật tài khoản', 1, NULL, NULL, NULL),
(4, 'areas', 'Quản lí khu trọ', 0, NULL, '2022-10-12 14:44:39', NULL),
(5, 'add_areas', 'Thêm khu trọ', 4, NULL, '2022-10-12 14:45:36', NULL),
(6, 'update_areas', 'Cập nhật khu trọ', 4, NULL, '2022-10-12 14:46:33', NULL),
(7, 'delete_areas', 'Xóa khu trọ', 4, NULL, '2022-10-12 14:47:35', NULL),
(8, 'index_users', 'Danh sách tài khoản', 1, NULL, '2022-10-12 14:51:33', NULL),
(9, 'index_areas', 'Danh sách khu trọ', 4, NULL, '2022-10-12 14:52:41', NULL),
(10, 'saveAdd_users ', 'Lưu thêm mới tài khoản', 1, NULL, '2022-10-12 14:56:35', NULL),
(11, 'saveUpdate_users', 'Lưu cập nhật tài khoản', 1, NULL, '2022-10-12 14:59:43', NULL),
(12, 'saveAdd_areas', 'Lưu thêm mới khu trọ', 4, NULL, '2022-10-12 15:02:25', NULL),
(13, 'saveUpdate_areas', 'Lưu cập nhật khu trọ', 4, NULL, '2022-10-12 15:01:24', NULL),
(14, 'motels', 'Quản lí phòng trọ', 0, NULL, '2022-10-12 15:03:04', NULL),
(15, 'index_motels', 'Danh sách phòng trọ', 14, NULL, '2022-10-12 15:03:59', NULL),
(16, 'add_motels', 'Thêm mới phòng trọ', 14, NULL, '2022-10-12 15:04:59', NULL),
(17, 'saveAdd_motels', 'Lưu thêm mới phòng trọ', 14, NULL, '2022-10-12 15:05:32', NULL),
(18, 'update_motels', 'Cập nhật phòng trọ', 14, NULL, NULL, NULL),
(19, 'saveUpdate_motels', 'Lưu cập nhật phòng trọ', 14, NULL, NULL, NULL),
(20, 'delete_motels', 'Xóa phòng trọ', 14, NULL, NULL, NULL),
(21, 'roles', 'Quản lí quyền', 0, NULL, NULL, NULL),
(22, 'index_roles', 'Danh sách quyền', 21, NULL, NULL, NULL),
(23, 'add_roles', 'Thêm mới quyền', 21, NULL, NULL, NULL),
(24, 'saveAdd_roles', 'Lưu thêm mới quyền', 21, NULL, NULL, NULL),
(25, 'update_roles', 'Cập nhật quyền ', 21, NULL, NULL, NULL),
(26, 'saveUpdate_roles', 'Lưu cập nhật quyền', 21, NULL, NULL, NULL),
(27, 'delete_roles', 'Xóa quyền', 21, NULL, NULL, NULL),
(28, 'delete_users', 'Xóa tài khoản', 1, NULL, NULL, NULL),
(29, 'plans', 'Quản lí gói đẩy tin', 0, NULL, NULL, NULL),
(30, 'index_plans', 'Danh sách gói đẩy tin', 29, NULL, NULL, NULL),
(31, 'add_plans', 'Thêm mới gói đẩy tin', 29, NULL, NULL, NULL),
(32, 'saveAdd_plans', 'Lưu thêm mới gói đẩy tin', 29, NULL, NULL, NULL),
(33, 'update_plans', 'Cập nhật gói đẩy tin', 29, NULL, NULL, NULL),
(34, 'saveUpdate_plans', 'Lưu cập nhật gói đẩy tin', 29, NULL, NULL, NULL),
(35, 'delete_plans', 'Xóa gói đẩy tin', 29, NULL, NULL, NULL),
(36, 'recharges', 'Quản lí lịch sử nạp tiền', 0, NULL, NULL, NULL),
(37, 'index_recharges', 'Danh sách lịch sử nạp tiền', 36, NULL, NULL, NULL),
(38, 'deposits', 'Quản lí lịch sử đặt cọc', 0, NULL, NULL, NULL),
(39, 'index_deposits', 'Danh sách lịch sử đặt cọc', 38, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
