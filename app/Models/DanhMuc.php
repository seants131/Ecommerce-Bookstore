<?php

// app/Models/DanhMuc.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;

    protected $table = 'danhmuc';  // Đặt tên bảng thành 'danhmuc'

    protected $fillable = [
        'name',       // Tên danh mục
        'parent_id',  // ID danh mục cha
    ];

    public function parent()
    {
        return $this->belongsTo(DanhMuc::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(DanhMuc::class, 'parent_id');
    }
}

