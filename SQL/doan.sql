-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 18, 2022 lúc 02:29 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user`, `amount`, `status`, `total`, `date`, `rate`) VALUES
(1, 29, 'votheanh533@gmail.com', 1, 3, 600000000, '18/12/2022', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cookie`
--

CREATE TABLE `cookie` (
  `name_cookie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cookie`
--

INSERT INTO `cookie` (`name_cookie`, `id`) VALUES
('cUFzbwygsJkmLEGGYAczKPV2Ls5D2yVIippEes2x', 6),
('BHiixdGAJOo5wbHnVJeDZH2LNAxTBp5OB1OHp0li', 8),
('U3qcdB13SuJ9n8JwP5ebQnU4RLKidf3xGe4MGUDG', 9),
('4VNtTli2QuEKypmzQeBSrW1CvXkZfUy71LSRAVqW', 10),
('MvNDyt4aItyeKZXGUVOiCIhfRTcrdbSdXQRCuwGS', 11),
('Sohe0ZSOAqG0KrGy2V2Xqhswt9B0GIjaL02lD6fk', 12),
('eAN1Mrj68D8a9QGzhX8z6uDtQa1Kdr3JB9h3bs9J', 13),
('dFnSwZRz7Hp2y08cjVO8TUvzwd71nnaL7BCTCUbt', 14),
('AKPlQinJ4NWCTTPSy72aLE39Nf2CRWXAz4ybcV8F', 15),
('Hfa6JQlonlMDvDc42ENQzZbi8bhbR1hgIgZxs7Zb', 16),
('ZD0pJC9nUJmQHDbfOHiSeoMkvLX7vW26aesX6bZk', 17),
('fk0PVBRVyvkdfjmQoAS7YtKRWf9hNZLUkBcwaxrZ', 18),
('BwbWujlVPL7je7SaF8Cyq27R2MusVni8RPCyBGEC', 19),
('IqirsV0rzj1gh7d5VeRLlocxcop6NiMha0V1qoCo', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_02_11_040657_create_tb_user_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type_car` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_of_manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mileage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fuel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `engine_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `power` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `seat_count` int(11) NOT NULL,
  `count` int(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `the_firm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `good` int(11) DEFAULT NULL,
  `bad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `email`, `title`, `content`, `type_car`, `year_of_manufacture`, `mileage`, `fuel`, `engine_size`, `power`, `color`, `seat_count`, `count`, `price`, `the_firm`, `status`, `date`, `good`, `bad`) VALUES
(25, 'anhvt.21it@vku.udn.vn', 'Mazda CX-5 2.0 Luxury 2019 - 835 triệu', 'Xe chính chủ', 'Xe đã qua sử dụng', '2019-01-03', '18000', 'Xăng', '160', '150', 'Nâu', 5, 7, 835000000, 'Mazda', 1, '15/12/2022', NULL, NULL),
(27, 'anhvt.21it@vku.udn.vn', 'Toyota Corolla Cross 1.8 V 2022', 'Xe vừa đăng ký chưa kịp đi chuyến nào....', 'Xe mới', '2022-02-17', '500', 'Xăng', '200', '250', 'Đen', 5, 15, 915000000, 'Toyota', 1, '15/12/2022', NULL, NULL),
(28, 'anhvt.21it@vku.udn.vn', 'Porsche Cayenne S 2011', 'Máy 4.8 hơn 500 mã lực.\r\nXe 1 chủ từ đầu, odo 8v miles.', 'Xe đã qua sử dụng', '2011-03-16', '10000', 'Xăng', '500', '400', 'Nâu đỏ', 5, 6, 1318000000, 'Porsche', 1, '18/12/2022', NULL, NULL),
(29, 'anhvt.21it@vku.udn.vn', 'Kia Seltos 1.4 Luxury 2022', '- Đăng kí đăng kiểm thuận tiện, lựa chọn màu xe theo mệnh.\r\n- Hỗ trợ chứng minh thu nhập, xử lí hồ sơ xấu nhanh gọn.\r\n- Tư vấn tận tâm - chuyên nghiệp.\r\n- Hỗ trợ giao xe tận nhà.\r\n- Dịch vụ hậu mãi chu đáo.\r\n- Khuyến mãi tốt nhất khu vực.', 'Xe mới', '2022-01-07', '1000', 'Xăng', '555', '421', 'Trắng', 5, 3, 600000000, 'Kia', 1, '18/12/2022', NULL, NULL),
(32, 'anhvt.21it@vku.udn.vn', 'Ford Transit 2022', 'Ford Việt Nam chính thức giới thiệu Ford Transit mới với những cải tiến đáng kể về nội và ngoại thất, giúp tăng độ chuyên nghiệp và sang trọng của dòng xe dẫn đầu phân khúc 16 chỗ thương mại này.\r\nFord Transit 2022.\r\nGiá: 845 triệu.\r\nTiêu chuẩn khí thải: Euro 5.\r\nCân bằng điện tử ESP lần đầu trên Transit.\r\nĐèn pha halogen projector điều chỉnh hướng.\r\nĐèn led ban ngày & đèn sương mù.\r\nMàn hình LCD cảm ứng 10”.\r\nCửa trượt mở rộng.\r\nĐộng cơ tăng áp đơn 2.2L dầu tiết kiệm.\r\nCông suất 136 HP / momen 355 Nm.\r\nNhiên liệu 80 lít.\r\nHộp số 6 cấp.\r\nGa tự động Cruise Control.\r\nLiên hệ ngay để nhận được nhiều ưu đãi khi mua xe.', 'Xe mới', '2022-06-22', '1000', 'Diesel', '600', '300', 'Trắng sữa', 16, 1, 845000000, 'Ford', 1, '18/12/2022', NULL, NULL),
(33, 'anhvt.21it@vku.udn.vn', 'VinFast VF8 Eco 202', '- Tặng gói chăm xe 1 năm (rửa xe chuyên sâu, làm sạch sâu, spa xe, v. V.. ).\r\n- Tư vấn màu xe theo phong thủy, chọn ngày giờ giao xe.\r\n- Hỗ trợ vay ngân hàng đến 80% giá trị xe.\r\n- Đặt cọc 10 triệu, được rút cọc và chuyển nhượng cọc.\r\n- Được tặng voucher 150 triệu trừ vào giá xe.\r\n- Gói Adas và Smart Service tương đương 132 triệu.\r\n- Tặng 1 voucher nghỉ dưỡng Vinpearl 7 ngày cho 4 người.\r\n- Ưu đãi 01 sạc pin di động.\r\n- Tặng gói option nâng cao thông minh.\r\n- Bảo hành pin 10 năm.\r\n- Chịu hoàn toàn chi phí bảo dưỡng.\r\n- Thay thế pin khi khả năng sạc dưới 70%', 'Xe mới', '2022-12-01', '1000', 'Điện', '400', '200', 'Trắng', 5, 5, 900000000, 'VinFast', 1, '18/12/2022', NULL, NULL),
(34, 'anhvt.21it@vku.udn.vn', 'VinFast VF8 Eco 2022', 'VF8 bản Eco: 1.109.000.000.\r\nVF8 bản Plus: 1.289.000.000.\r\nĐặt cọc 10 triệu, được rút cọc và chuyển nhượng cọc.\r\nĐược tặng voucher 150 triệu - 250 triệu tiền mặt.\r\nGói Adas và Smart Service tương đương 132 triệu.\r\nTặng 1 voucher nghỉ dưỡng Vinpearl.\r\nƯu đãi 01 sạc pin di động.\r\nTặng gói option nâng cao thông minh.\r\nBảo hành pin 10 năm.\r\nChịu hoàn toàn chi phí bảo dưỡng.\r\nThay thế pin khi khả năng sạc dưới 70%.', 'Xe mới', '2022-06-08', '1000', 'Điện', '400', '300', 'Đỏ', 5, 4, 1000000000, 'VinFast', 1, '18/12/2022', NULL, NULL),
(35, 'anhvt.21it@vku.udn.vn', 'VinFast VF9 Eco 2022', 'Chỉ còn ít ngày để đặt cọc chính sách ưu đãi xe điện VF9 cụ thể như sau:\r\nVF9 bản Eco: 1 tỷ 443.200.000.\r\nVF9 bản Plus: 1 tỷ 571.900.000.\r\nĐặt cọc 10 triệu, được rút cọc và chuyển nhượng cọc.\r\nĐược tặng voucher 150 triệu - 250 triệu tiền mặt.\r\nGói Adas và Smart Service tương đương 132 triệu.\r\nTặng 1 voucher nghỉ dưỡng Vinpearl.\r\nƯu đãi 01 sạc pin di động.\r\nTặng gói option nâng cao thông minh.\r\nBảo hành pin 10 năm.\r\nChịu hoàn toàn chi phí bảo dưỡng.\r\nThay thế pin khi khả năng sạc dưới 70%.', 'Xe mới', '2022-06-01', '10000', 'Điện', '300', '250', 'Xanh Lam', 5, 9, 1300000000, 'VinFast', 1, '18/12/2022', NULL, NULL),
(37, 'anhvt.21it@vku.udn.vn', 'Mercedes-Benz E200 2017', 'Xe bán ra hồ sơ pháp lý rõ ràng, không tranh chấp, không cầm cố, sang tên chính chủ nhanh gọn.', 'Xe đã qua sử dụng', '2017-07-12', '34000', 'Xăng', '200', '150', 'Đen', 5, 8, 1399000000, 'Mercedes', 1, '15/12/2022', NULL, NULL),
(38, 'votheanh533@gmail.com', 'test', 'abc', 'Xe mới', '2022-12-06', '1000', 'Xăng', '400', '200', 'Đỏ', 5, 5, 1318000000, 'Volvo', 1, '18/12/2022', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_post` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_post`, `image`) VALUES
(25, '1671122104_407837d6-ca0c_wm.jpg'),
(27, '1671122828_3fe158a6-2ac8_wm.jpg'),
(27, '1671122828_07de18f6-ea24_wm.jpg'),
(28, '1671298708_1f50ae24-fc7c_wm.jpg'),
(28, '1671298708_7df63f17-0c2d_wm.jpg'),
(28, '1671298708_436aa5ff-192c_wm.jpg'),
(29, '1671298824_20221102133939-4a66_wm.jpg'),
(29, '1671298824_20221102133939-f7ae_wm.jpg'),
(29, '1671298824_20221121212542-ff56_wm.jpg'),
(32, '1671298975_20221207083924-4520_wm.jpg'),
(32, '1671298975_20221207083924-ad83_wm.jpg'),
(32, '1671298975_20221207083924-ca36_wm.jpg'),
(33, '1671299982_20220914222408-392d_wm.jpg'),
(33, '1671299982_20220914222408-5478_wm.jpg'),
(33, '1671299982_20220914222408-e309_wm.jpg'),
(34, '1671300209_20220719082327-0153_wm.jpg'),
(34, '1671300209_20220719082327-c1b9_wm.jpg'),
(34, '1671300209_20220719082327-cbbb_wm.jpg'),
(35, '1671300325_20220616082503-4963_wm.jpg'),
(35, '1671300326_20220616082503-7100_wm.jpg'),
(35, '1671300326_20220616082503-c16c_wm.jpg'),
(37, '1671122497_118ebd2e-524d_wm.jpg'),
(37, '1671122497_faee172d-8d1e_wm.jpg'),
(38, '1671371999_20220719082327-0153_wm.jpg'),
(38, '1671371999_20220719082327-c1b9_wm.jpg'),
(38, '1671371999_20220719082327-cbbb_wm.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `otp` bigint(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `otp`, `status`, `name`, `username`, `address`, `birthday`, `gender`, `phone`, `image`, `password`, `created_at`, `updated_at`) VALUES
(88, 454392, 1, 'admin', 'votheanh533@gmail.com', '470 Trần Đại Nghĩa, Quận Ngũ Hành Sơn, Đà Nẵng', '2003-03-05', 'Nam', '0961733352', '1669570477_Thế Anh.png', '$2y$10$qLvJuXkm3koV/s9Fl4zKCe9rkvOmORMr/fDamAOtET0w9ELrp8q.G', '2022-11-26 10:05:22', '2022-12-18 06:57:42'),
(93, 620926, 1, 'Võ Thế Anh', 'Kakashidz6@gmail.com', 'đường Lưu Quang Vũ, Quận Ngũ Hành Sơn, Đà Nẵng', '2003-03-05', 'nam', '0961733352', NULL, '$2y$10$kHblTkhKfbZio2qMJ5JZNuAC8KFb1buDfvtgM9HN9glH/x/K52u92', '2022-11-29 11:08:40', '2022-12-04 04:25:07'),
(94, 198538, 1, 'admin007', 'anhvt.21it@vku.udn.vn', 'Nam Kim, Nam Đàn, Nghệ An', '2003-05-05', 'Nam', '0961735552', '1671119970_theanh.jpg', '$2y$10$JoebaLwWUjHOD1oJJ7YlIO77tWT6ScjZNMjE3/VoZCdhxubsXd.sS', '2022-12-14 11:00:09', '2022-12-15 08:59:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `cookie`
--
ALTER TABLE `cookie`
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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_ibfk_1` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD KEY `id_post` (`id_post`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`,`username`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cookie`
--
ALTER TABLE `cookie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
