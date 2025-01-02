<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoadon';
    protected $primaryKey = 'MaHoaDon';
    protected $fillable = [
        'MaKhachHang',
        'NgayLap',
        'PhanTramThue',
        'TongTien',
        'TrangThai',
        'PT_ThanhToan',
        'diachi',
    ];
    public $timestamps = false;
}
