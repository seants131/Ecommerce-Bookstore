
-- -- Tạo cơ sở dữ liệu
-- CREATE DATABASE BOOKSHOP CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- USE BOOKSHOP;

-- Bảng DanhMuc: Chứa thông tin về loại sách
CREATE TABLE `danhmuc` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, -- Thêm AUTO_INCREMENT
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) -- Đảm bảo cột id là khóa chính
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Bảng KhachHang: Chứa thông tin khách hàng (bao gồm cả khách vãng lai)
CREATE TABLE KhachHang (
    MaKhachHang  VARCHAR(255) PRIMARY KEY,
    HoTen  VARCHAR(255),
    GioiTinh VARCHAR(10),
    Email  VARCHAR(255),
    SoDienThoai VARCHAR(12),
    DiaChi  VARCHAR(255),
    TrangThai TINYINT default 1,
    TenDangNhap  VARCHAR(255) UNIQUE, -- Có thể NULL với khách hàng vãng lai
    MatKhau  VARCHAR(255)          -- Có thể NULL với khách hàng vãng lai
);

-- Bảng PhuongThucThanhToan: Chứa thông tin phương thức thanh toán
CREATE TABLE PhuongThucThanhToan (
    MaPhuongThuc VARCHAR(255) PRIMARY KEY,
    TenPhuongThuc VARCHAR(255),
    MoTa TEXT,
    TrangThai TINYINT,
    PhiGiaoDich decimal(15,2)
);


-- Bảng Sach: Chứa thông tin về sách
CREATE TABLE Sach (
    MaSach VARCHAR(255) PRIMARY KEY,
    TenSach VARCHAR(255),
    category_id BIGINT(20) UNSIGNED,
    GiaNhap DECIMAL(15,2),
    GiaBan DECIMAL(15,2),
    SoLuong INT,
    NamXuatBan INT,
    MoTa TEXT,
    TrangThai TINYINT,
    MaNXB VARCHAR(255),
    FOREIGN KEY (category_id) REFERENCES danhmuc(id)
);



CREATE TABLE GioHang(
	MaGioHang VARCHAR(255) primary key,
    MaKhachHang VARCHAR(255),
    TongTien DECIMAL(15,2),
	FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang)

);
CREATE TABLE ChiTietGioHang(
	MaGioHang VARCHAR(255) not null primary key,
	FOREIGN KEY (MaGioHang) REFERENCES GioHang(MaGioHang),
    MaKhachHang VARCHAR(255) not null,
    MaSach VARCHAR(255),
	FOREIGN KEY (MaSach) REFERENCES Sach(MaSach),
    TrangThai tinyint
);

CREATE TABLE HoaDon (
    MaHoaDon  VARCHAR(255) PRIMARY KEY,
    MaKhachHang  VARCHAR(255),
    NgayLap DATETIME,
    PhanTramThue decimal(5,2) default 10,
    TongTien decimal(15,2),
	TongTienSauthue decimal(15,2) as (TongTien*(PhanTramThue/100) + TongTien),
    TrangThai VARCHAR(50), -- Duyệt/Chuẩn bị hàng/giao hàng/đã giao hàng
    PT_ThanhToan  VARCHAR(255),
    diachi text,
    FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
    FOREIGN KEY (PT_ThanhToan) REFERENCES PhuongThucThanhToan(MaPhuongThuc)
);

-- Bảng ChiTietHoaDon: Chứa thông tin chi tiết hóa đơn
CREATE TABLE ChiTietHoaDon (
    MaChiTietHoaDon  VARCHAR(255) PRIMARY KEY,
    MaHoaDon  VARCHAR(255),
    MaSach  VARCHAR(255),
    SoLuong INT,
    DonGia decimal(15,2),
    TongTien decimal(15,2) as (SoLuong* DonGia), 
    FOREIGN KEY (MaHoaDon) REFERENCES HoaDon(MaHoaDon),
    FOREIGN KEY (MaSach) REFERENCES Sach(MaSach)
);

-- Bảng DanhGiaSanPham: Chứa thông tin đánh giá sản phẩm
CREATE TABLE DanhGiaSanPham (
    MaDanhGia VARCHAR(255) Primary key,
    MaHoaDon  VARCHAR(255) not null,
    MaKhachHang  VARCHAR(255) not null,
    MaSach  VARCHAR(255) not null,
    NoiDung TEXT,
    NgayDanhGia DATETIME,
    TrangThai TINYINT,
    FOREIGN KEY (MaHoaDon) REFERENCES HoaDon(MaHoaDon),
    FOREIGN KEY (MaKhachHang) REFERENCES KhachHang(MaKhachHang),
    FOREIGN KEY (MaSach) REFERENCES Sach(MaSach)
);

CREATE TABLE DanhSachYeuThich(
	MaKH VARCHAR(255),
    MaSP VARCHAR(255),
	FOREIGN KEY (MaKH) REFERENCES KhachHang(MaKhachHang),
    FOREIGN KEY (MaSP) REFERENCES Sach(MaSach),
    TrangThai binary
);