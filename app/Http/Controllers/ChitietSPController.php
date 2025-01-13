<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DanhMuc;
use App\Models\Sach;

class ChitietSPController extends Controller
{
    public function index($id)
    {
        $chitietsp = DB::table('sach')->where('MaSach', $id)->first();
        $danhmucs = DanhMuc::with('children')->whereNull('parent_id')->get();
        $books = Sach::with('DanhMuc')->get(); 
        return view('layouts.user.chitiet', compact('chitietsp', 'danhmucs', 'books'));
    }
}