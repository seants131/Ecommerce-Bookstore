<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    protected $table = 'danhgiasanpham'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'MaDanhGia';
    protected $fillable = [
        'MaDanhGia',
        'MaHoaDon',
        'MaKhachHang',
        'MaSach',
        'NoiDung',
        'SoSao',
        'NgayDanhGia',
        'TrangThai'
    ];
}