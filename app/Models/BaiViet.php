<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    protected $table='baiviet';

    protected $fillable=[
        'tieude',
        'slug',
        'noidung',
        'anhbaiviet',
        'trangthai',
    ];
    public function getRouteKeyName()
{
    return 'slug';
}

}
