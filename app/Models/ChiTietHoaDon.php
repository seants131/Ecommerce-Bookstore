<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;

    protected $table = 'chitiethoadon';   
    protected $primaryKey = 'MaChiTietHoaDon';
    protected $fillable = [
        'MaChiTietHoaDon',
        'MaHoaDon',
        'MaSach',
        'SoLuong',
        'DonGia',
        'TongTien',
    ];
    public $timestamps = false;
    public function sach()
    {
        return $this->belongsTo(Sach::class, 'MaSach');
    }
}
