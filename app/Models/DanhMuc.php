<?php

// app/Models/DanhMuc.php
namespace App\Models;
use App\Models\Sach;
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
    public function books()
    {
        return $this->hasMany(Sach::class, 'category_id', 'id');
    }
    public function someFunction()
    {
        // Lấy danh sách danh mục từ cơ sở dữ liệu
        $danhmucs = DanhMuc::all();

        // Truyền biến $danhmucs sang view
        return view('some-view', compact('danhmucs'));
    }

}

