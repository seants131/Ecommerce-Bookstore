<?php
namespace App\Http\Controllers;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use App\Models\Sach;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:sach,MaSach', 
            'quantity' => 'required|integer|min:1', // Giới hạn số lượng tối thiểu 
        ]);
    
        $productId = $validated['product_id'];
        $quantity = $validated['quantity'];
    
        // Lấy sách
        $product = Sach::where('MaSach', $productId)->first();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        if ($quantity > 10) {
            return redirect()->back()->with('error', 'Mỗi lần chỉ có thể thêm tối đa 10 sản phẩm');
        }
        
        if ($quantity > $product->SoLuong) {
            return redirect()->back()->with('error', 'Số lượng sản phẩm trong kho không đủ');
        }
       
        // Lấy giỏ hàng từ session hoặc tạo mới
        $cart = session()->get('cart', []);
    
        // Nếu sản phẩm đã tồn tại, tăng số lượng
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$productId] = [
                'name' => $product->TenSach,
                'price' => $product->GiaBan,
                'quantity' => $quantity,
                'image' => $product->HinhAnh,
            ];
        }
    
        // Lưu lại giỏ hàng
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }
    public function xoaAll(Request $request)
    {
        if (!session()->has('cart')) {
            return response()->json(['error' => 'Không có sản phẩm nào trong giỏ hàng để xóa.'], 400);
        }
        session()->forget('cart');
        return response()->json(['success' => 'Giỏ hàng đã được xóa.']);
    }
        public function getcart()
        {
            $danhmucs = DanhMuc::withCount('books')->get();
            $books = Sach::inRandomOrder()->limit(value: 2)->get();
            $cart = session()->get('cart', []);  
            return view('layouts.user.cart', compact('danhmucs', 'books','cart'));
        }
}

