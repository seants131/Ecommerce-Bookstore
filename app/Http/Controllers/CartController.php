<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Lấy thông tin sản phẩm từ form
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $price = $request->input('price'); // Nếu cần

        // Lưu sản phẩm vào session (giả sử 'cart' là key giỏ hàng)
        $cart = session()->get('cart', []);

        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$productId] = [
                'quantity' => $quantity,
                'price' => $price, // Nếu cần
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('layouts.user.cart', compact('cart'));
    }
}
