<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NguoiDung extends Model
{
    protected $table = 'khachhang';
    protected $primaryKey = 'MaKhachHang'; // Chỉ định khóa chính
    public $incrementing = false; // Nếu khóa chính không phải là auto-increment
    protected $keyType = 'string'; // Nếu khóa chính là kiểu chuỗi, nếu không thì bỏ dòng này
    public $timestamps = false; // Tắt tính năng tự động quản lý thời gian
    
    protected $fillable=[
        'MaKhachHang', 'HoTen','GioiTinh','Email','SoDienThoai','DiaChi', 'TenDangNhap', 'MatKhau'
    ];
}
