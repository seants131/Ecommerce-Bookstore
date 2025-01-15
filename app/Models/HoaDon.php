<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoadon';
    protected $primaryKey = 'MaHoaDon';
    public $incrementing = false; // Khóa chính không tự tăng
    protected $keyType = 'string'; 
    protected $fillable = [
        'MaHoaDon',
        'MaKhachHang',
        'NgayLap',
        'PhanTramThue',
        'TongTien',
        'TrangThai',
        'PT_ThanhToan',
        'diachi',
    ];
    public $timestamps = false;
    public function chiTietHoaDon()
{
    return $this->hasMany(ChiTietHoaDon::class, 'MaHoaDon');
}
}
