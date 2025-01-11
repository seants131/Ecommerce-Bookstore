<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach; // Model Sach to interact with the books table
use App\Models\DanhMuc; // Model DanhMuc to interact with the categories table

class BookController extends Controller
{
    public function index()
    {
        // Fetch all books along with their associated categories
        $books = Sach::with('DanhMuc')->get();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        // Fetch all categories for the book creation form
        $categories = DanhMuc::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaSach' => 'required|unique:sach,MaSach',
            'TenSach' => 'required|string|max:255',
            'category_id' => 'required|exists:danhmuc,id',
            'GiaNhap' => 'required|numeric',
            'GiaBan' => 'required|numeric',
            'SoLuong' => 'required|integer',
            'NamXuatBan' => 'required|integer',
            'MoTa' => 'nullable|string',
            'TrangThai' => 'required|boolean',
            'MaNXB' => 'nullable|string',
            'HinhAnh' => 'nullable|image|max:2048', // Optional image upload
        ]);

        $data = $request->all();

        if ($request->hasFile('HinhAnh')) {
            $file = $request->file('HinhAnh');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/books'), $fileName);
            $data['HinhAnh'] = $fileName;
        }

        Sach::create($data);

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
            'HinhAnh' => 'nullable|image|max:2048',
        ]);

        $book = Sach::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('HinhAnh')) {
            // Delete old image if exists
            if ($book->HinhAnh && file_exists(public_path('uploads/books/' . $book->HinhAnh))) {
                unlink(public_path('uploads/books/' . $book->HinhAnh));
            }

            $file = $request->file('HinhAnh');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/books'), $fileName);
            $data['HinhAnh'] = $fileName;
        }

        $book->update($data);

        return redirect()->route('admin.books.index')->with('success', 'Sách đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $book = Sach::findOrFail($id);

        // Delete associated image
        if ($book->HinhAnh && file_exists(public_path('uploads/books/' . $book->HinhAnh))) {
            unlink(public_path('uploads/books/' . $book->HinhAnh));
        }

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
