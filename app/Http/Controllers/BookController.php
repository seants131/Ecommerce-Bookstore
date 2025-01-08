<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;  // Model Sach để thao tác với bảng sách
use App\Models\DanhMuc; // Model DanhMuc để thao tác với bảng danh mục

class BookController extends Controller
{
    public function index()
    {
        $books = Sach::with('DanhMuc')->get(); // Lấy sách và danh mục liên quan
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = DanhMuc::all(); // Lấy tất cả danh mục
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaSach' => 'required|unique:Sach,MaSach',
            'TenSach' => 'required|string|max:255',
            'category_id' => 'required|exists:danhmuc,id',
            'GiaNhap' => 'required|numeric',
            'GiaBan' => 'required|numeric',
            'SoLuong' => 'required|integer',
            'NamXuatBan' => 'required|integer',
            'MoTa' => 'nullable|string',
            'TrangThai' => 'required|boolean',
            'MaNXB' => 'nullable|string',
        ]);

        Sach::create($request->all());

        return redirect()->route('admin.books.index')->with('success', 'Sách đã được thêm thành công.');
    }

    public function edit($id)
    {
        $book = Sach::findOrFail($id);
        $categories = DanhMuc::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TenSach' => 'required|string|max:255',
            'category_id' => 'required|exists:danhmuc,id',
            'GiaNhap' => 'required|numeric',
            'GiaBan' => 'required|numeric',
            'SoLuong' => 'required|integer',
            'NamXuatBan' => 'required|integer',
            'MoTa' => 'nullable|string',
            'TrangThai' => 'required|boolean',
            'MaNXB' => 'nullable|string',
        ]);

        $book = Sach::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('admin.books.index')->with('success', 'Sách đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $book = Sach::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Sách đã được xóa thành công.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Sach::where('TenSach', 'LIKE', "%{$query}%")->get();
        return view('admin.books.index', compact('books'));
    }

}
