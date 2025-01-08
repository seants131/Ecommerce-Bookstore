-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2025 lúc 10:00 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `anhbaiviet` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `slug`, `noidung`, `anhbaiviet`, `trangthai`, `created_at`, `updated_at`, `chude`) VALUES
(1, 'Sách Hè 2025: Những Cuốn Sách Đáng Đọc', 'sach-he-2025-nhung-cuon-sach-dang-doc', 'Sách hè 2025 là thời điểm lý tưởng để bạn đọc những cuốn sách đầy bổ ích.', 'bookimage1.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Văn học'),
(2, 'Khám Phá Những Tác Phẩm Kinh Điển', 'kham-pha-nhung-tac-pham-kinh-dien', 'Các tác phẩm kinh điển không chỉ có giá trị về mặt lịch sử mà còn chứa đựng những thông điệp sâu sắc...', 'bookimage2.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Văn học cổ điển'),
(3, 'Văn Học Hiện Đại: Những Cuốn Sách Phải Đọc', 'van-hoc-hien-dai-nhung-cuon-sach-phai-doc', 'Văn học hiện đại mang đến những trải nghiệm mới mẻ và là nguồn cảm hứng cho nhiều người.', 'bookimage3.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Văn học hiện đại'),
(4, 'Sách Thiếu Nhi: Những Cuốn Sách Hấp Dẫn', 'sach-thieu-nhi-nhung-cuon-sach-hap-dan', 'Những cuốn sách thiếu nhi không chỉ giúp các em phát triển tư duy mà còn tạo ra những bài học cuộc sống.', 'bookimage4.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Sách thiếu nhi'),
(5, 'Sách Hè 2025: Những Cuốn Sách Đáng Đọc', 'sach-he-2025-nhung-cuon-sach-dang-doc', 'Sách hè 2025 là thời điểm lý tưởng để bạn đọc những cuốn sách đầy bổ ích.', 'bookimage1.jpg', 1, '2025-01-03 02:51:51', '2025-01-03 02:51:51', 'Văn học'),
(6, 'Khám Phá Những Tác Phẩm Kinh Điển', 'kham-pha-nhung-tac-pham-kinh-dien', 'Các tác phẩm kinh điển không chỉ có giá trị về mặt lịch sử mà còn chứa đựng những thông điệp sâu sắc...', 'bookimage2.jpg', 1, '2025-01-03 02:51:51', '2025-01-03 02:51:51', 'Văn học cổ điển'),
(7, 'Văn Học Hiện Đại: Những Cuốn Sách Phải Đọc', 'van-hoc-hien-dai-nhung-cuon-sach-phai-doc', 'Văn học hiện đại mang đến những trải nghiệm mới mẻ và là nguồn cảm hứng cho nhiều người.', 'bookimage3.jpg', 1, '2025-01-03 02:51:51', '2025-01-03 02:51:51', 'Văn học hiện đại'),
(8, 'Sách Thiếu Nhi: Những Cuốn Sách Hấp Dẫn', 'sach-thieu-nhi-nhung-cuon-sach-hap-dan', 'Những cuốn sách thiếu nhi không chỉ giúp các em phát triển tư duy mà còn tạo ra những bài học cuộc sống.', 'bookimage4.jpg', 1, '2025-01-03 02:51:51', '2025-01-03 02:51:51', 'Sách thiếu nhi'),
(9, 'Sách Hè 2025: Những Cuốn Sách Đáng Đọc', 'sach-he-2025-nhung-cuon-sach-dang-doc', 'Sách hè 2025 là thời điểm lý tưởng để bạn đọc những cuốn sách đầy bổ ích.', 'bookimage1.jpg', 1, '2025-01-03 02:51:56', '2025-01-03 02:51:56', 'Văn học'),
(10, 'Khám Phá Những Tác Phẩm Kinh Điển', 'kham-pha-nhung-tac-pham-kinh-dien', 'Các tác phẩm kinh điển không chỉ có giá trị về mặt lịch sử mà còn chứa đựng những thông điệp sâu sắc...', 'bookimage2.jpg', 1, '2025-01-03 02:51:56', '2025-01-03 02:51:56', 'Văn học cổ điển'),
(11, 'Văn Học Hiện Đại: Những Cuốn Sách Phải Đọc', 'van-hoc-hien-dai-nhung-cuon-sach-phai-doc', 'Văn học hiện đại mang đến những trải nghiệm mới mẻ và là nguồn cảm hứng cho nhiều người.', 'bookimage3.jpg', 1, '2025-01-03 02:51:56', '2025-01-03 02:51:56', 'Văn học hiện đại'),
(12, 'Sách Thiếu Nhi: Những Cuốn Sách Hấp Dẫn', 'sach-thieu-nhi-nhung-cuon-sach-hap-dan', 'Những cuốn sách thiếu nhi không chỉ giúp các em phát triển tư duy mà còn tạo ra những bài học cuộc sống.', 'bookimage4.jpg', 1, '2025-01-03 02:51:56', '2025-01-03 02:51:56', 'Sách thiếu nhi'),
(15, 'Sách Hè 2025: Những Cuốn Sách Đáng Đọc', 'sach-he-2025-nhung-cuon-sach-dang-doc', 'Trong mùa hè năm 2025, việc đọc sách là một hoạt động tuyệt vời để nâng cao kiến thức và thư giãn. Dưới đây là những cuốn sách hay nhất bạn không thể bỏ qua.', 'public/img/bookimage1.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Văn học'),
(16, 'Khám Phá Những Tác Phẩm Kinh Điển', 'kham-pha-nhung-tac-pham-kinh-dien', 'Khám phá những tác phẩm văn học kinh điển đã để lại dấu ấn sâu đậm trong nền văn học thế giới. Những cuốn sách này không chỉ có giá trị tri thức mà còn phản ánh những đặc điểm văn hóa quan trọng.', 'public/img/bookimage2.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Văn học cổ điển'),
(17, 'Văn Học Hiện Đại: Những Cuốn Sách Phải Đọc', 'van-hoc-hien-dai-nhung-cuon-sach-phai-doc', 'Văn học hiện đại mang đến những trải nghiệm mới mẻ và góc nhìn khác biệt về xã hội. Những tác phẩm này không chỉ thu hút người đọc bằng nội dung mà còn bởi cách thức kể chuyện đầy sáng tạo.', 'public/img/bookimage3.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Văn học hiện đại'),
(18, 'Sách Thiếu Nhi: Những Cuốn Sách Hấp Dẫn', 'sach-thieu-nhi-nhung-cuon-sach-hap-dan', 'Những cuốn sách thiếu nhi không chỉ giúp các em phát triển trí tuệ mà còn khơi gợi sự sáng tạo và tình yêu đối với thế giới xung quanh. Các câu chuyện thiếu nhi luôn chứa đựng những bài học quý giá về cuộc sống.', 'public/img/bookimage4.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Sách thiếu nhi'),
(19, 'Thông Tin Nhóm PHPCRAFT', 'thong-tin-nhom-phpcraft', 'Nhóm PHPCRAFT là một tập thể gồm 5 thành viên, chuyên phát triển ứng dụng web bán sách trực tuyến sử dụng Laravel. Nhóm hoạt động trong lĩnh vực bán sách trực tuyến, với mục tiêu mang đến cho khách hàng những sản phẩm chất lượng và dịch vụ tuyệt vời. Nhóm cam kết cung cấp một kho sách đa dạng từ nhiều thể loại khác nhau, dễ dàng tiếp cận và hỗ trợ khách hàng trong việc tìm kiếm và lựa chọn sách phù hợp.\r\nLĩnh vực kinh doanh:\r\nBán sách trực tuyến.\r\nCung cấp dịch vụ tư vấn sách cho khách hàng.\r\nNhóm luôn nỗ lực mang đến cho khách hàng những trải nghiệm mua sắm trực tuyến tốt nhất và hy vọng sẽ trở thành người bạn đồng hành đáng tin cậy trong hành trình khám phá tri thức.', 'phpcraft.jpg', 1, '2025-01-03 02:51:38', '2025-01-03 02:51:38', 'Thông tin nhóm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaGioHang` bigint(20) NOT NULL,
  `MaKhachHang` varchar(255) NOT NULL,
  `MaSach` bigint(20) DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaChiTietHoaDon` bigint(20) NOT NULL,
  `MaHoaDon` bigint(20) DEFAULT NULL,
  `MaSach` bigint(20) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` decimal(15,2) DEFAULT NULL,
  `TongTien` decimal(15,2) GENERATED ALWAYS AS (`SoLuong` * `DonGia`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasanpham`
--

CREATE TABLE `danhgiasanpham` (
  `MaDanhGia` bigint(20) UNSIGNED NOT NULL,
  `MaHoaDon` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) NOT NULL,
  `MaSach` bigint(20) NOT NULL,
  `NoiDung` text DEFAULT NULL,
  `NgayDanhGia` datetime DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'sadasda', NULL, '2024-12-29 20:53:09', '2024-12-29 20:53:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachyeuthich`
--

CREATE TABLE `danhsachyeuthich` (
  `MaKH` bigint(20) DEFAULT NULL,
  `MaSP` bigint(20) DEFAULT NULL,
  `TrangThai` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) DEFAULT NULL,
  `TongTien` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) DEFAULT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongTien` decimal(15,2) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `PT_ThanhToan` bigint(20) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` bigint(20) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `GioiTinh` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(12) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT 1,
  `TenDangNhap` varchar(255) DEFAULT NULL,
  `MatKhau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKhuyenMai` bigint(20) NOT NULL,
  `TenKhuyenMai` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `NgayBatDau` datetime NOT NULL,
  `NgayKetThuc` datetime NOT NULL,
  `PhanTramGiamGia` int(11) NOT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `chu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_07_120151_rename_categories_to_danhmuc', 2),
(5, '2025_01_01_080230_create_lien_he_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `MaPhuongThuc` bigint(20) NOT NULL,
  `TenPhuongThuc` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `TrangThai` binary(1) DEFAULT NULL,
  `PhiGiaoDich` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `MaSach` bigint(20) NOT NULL,
  `TenSach` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `GiaNhap` decimal(15,2) DEFAULT NULL,
  `GiaBan` decimal(15,2) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `NamXuatBan` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL,
  `MaNXB` varchar(255) DEFAULT NULL,
  `HinhAnh` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WoV4DY0kLMLFjr13hvjgwmV29UnMaBlm7SSWUAVU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEkzNjZvdjB6VHppTTVNWWpzbHN5eUFNMlE1cFJXYWIxcjdKWk0xVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dC90aG9uZy10aW4tbmhvbS1waHBjcmFmdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736326816);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaChiTietHoaDon`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD PRIMARY KEY (`MaDanhGia`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `PT_ThanhToan` (`PT_ThanhToan`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKhuyenMai`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`MaPhuongThuc`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaChiTietHoaDon` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKhuyenMai` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `MaPhuongThuc` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `MaSach` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`MaGioHang`) REFERENCES `giohang` (`MaGioHang`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD CONSTRAINT `danhgiasanpham_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `danhgiasanpham_ibfk_2` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `danhgiasanpham_ibfk_3` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD CONSTRAINT `danhsachyeuthich_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `danhsachyeuthich_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`PT_ThanhToan`) REFERENCES `phuongthucthanhtoan` (`MaPhuongThuc`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
