<?php

// app/Http/Controllers/DanhMucController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\Sach;
class DanhMucController extends Controller
{
    public function index()
    {
        $danhmucs = DanhMuc::with('children')->whereNull('parent_id')->get();
        return view('admin.danhmucs.index', compact('danhmucs'));
    }

    public function create()
    {
        $danhmucs = DanhMuc::whereNull('parent_id')->get();
        return view('admin.danhmucs.create', compact('danhmucs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:danhmuc,id',
        ]);

        // Kiểm tra danh mục đã tồn tại
        $existingDanhMuc = DanhMuc::where('name', $request->name)->first();
        if ($existingDanhMuc) {
            return back()->with('error', 'Danh mục "' . $request->name . '" đã tồn tại.')->withInput();
        }

        DanhMuc::create($request->all());
        return redirect()->route('admin.danhmucs.index')->with('success', 'Danh mục được thêm thành công.');
    }

    public function edit($id)
    {
        $danhmuc = DanhMuc::findOrFail($id);
        $danhmucs = DanhMuc::whereNull('parent_id')->get();
        return view('admin.danhmucs.edit', compact('danhmuc', 'danhmucs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:danhmuc,id',
        ]);

        $danhmuc = DanhMuc::findOrFail($id);
        $danhmuc->update($request->all());

        return redirect()->route('admin.danhmucs.index')->with('success', 'Danh mục đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $danhmuc = DanhMuc::findOrFail($id);

         // Kiểm tra nếu danh mục có sách liên quan
        if ($danhmuc->books()->count() > 0) {
            return redirect()->route('admin.danhmucs.index')->with('error', 'Phải xóa các sách liên quan trước khi xóa danh mục.');
        }
        // Kiểm tra nếu danh mục có danh mục con
        if ($danhmuc->children()->count() > 0) {
            return redirect()->route('admin.danhmucs.index')->with('error', 'Không thể xóa danh mục này vì có danh mục con.');
        }
        // Xóa danh mục con (nếu cần)
        $danhmuc->children()->delete();
        // Xóa danh mục
        $danhmuc->delete();

        return redirect()->route('admin.danhmucs.index')->with('success', 'Danh mục và danh mục con đã được xóa thành công.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $danhmucs = DanhMuc::where('name', 'LIKE', "%{$query}%")->get();
        return view('admin.danhmucs.index', compact('danhmucs'));
    }
    public function getbook()
    {
        $danhmucs = DanhMuc::withCount('books')->get();
        $books = Sach::inRandomOrder()->limit(2)->get();
        return view('layouts.user.index', compact('danhmucs', 'books'));
    }

    public function getproduct()
    {
        $danhmucs = DanhMuc::withCount('books')->get();
        $books = Sach::inRandomOrder()->limit(2)->get();
        return view('layouts.user.product', compact('danhmucs', 'books'));
    }
    public function getcart()
    {
        $danhmucs = DanhMuc::withCount('books')->get();
        $books = Sach::inRandomOrder()->limit(2)->get();
        return view('layouts.user.cart', compact('danhmucs', 'books'));
    }
    public function getchitiet()
    {
        $danhmucs = DanhMuc::withCount('books')->get();
        $books = Sach::inRandomOrder()->limit(2)->get();
        return view('layouts.user.chitiet', compact('danhmucs', 'books'));
    }

}
