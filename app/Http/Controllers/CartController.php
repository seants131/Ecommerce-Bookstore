<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Thêm sản phẩm vào giỏ hàng
    public function addToCart(Request $request)
    {
        // Lấy thông tin sản phẩm từ form
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Mặc định là 1 nếu không truyền
        $price = $request->input('price'); // Giá sản phẩm
        $discount = $request->input('discount', 0); // Chiết khấu (nếu có)
        $tax = $request->input('tax', 0); // Thuế (nếu có)

        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$productId] = [
                'quantity' => $quantity,
                'price' => $price,
                'discount' => $discount,
                'tax' => $tax,
            ];
        }

        // Lưu giỏ hàng vào session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Hiển thị giỏ hàng
    public function index()
    {
        // Lấy giỏ hàng từ session
        $cartItems = session('cart', []);
        $totalPrice = 0;
        $totalQuantity = 0;
        $totalDiscount = 0;
        $totalTax = 0;

        // Tính toán tổng giá trị, số lượng, chiết khấu và thuế
        foreach ($cartItems as $item) {
            $itemTotal = $item['price'] * $item['quantity'];
            $discountAmount = $itemTotal * ($item['discount'] / 100);
            $taxAmount = $itemTotal * ($item['tax'] / 100);

            $totalPrice += $itemTotal - $discountAmount + $taxAmount;
            $totalQuantity += $item['quantity'];
            $totalDiscount += $discountAmount;
            $totalTax += $taxAmount;
        }

        // Tính tổng giá trị cuối cùng
        $grandTotal = $totalPrice;

        return view('layouts.user.cart', compact('cartItems', 'totalPrice', 'totalQuantity', 'totalDiscount', 'totalTax', 'grandTotal'));
    }

    // Cập nhật số lượng sản phẩm
    public function update(Request $request, $id)
    {
        $cart = session('cart', []);
        if (isset($cart[$id])) {
            $quantity = $request->input('quantity', $cart[$id]['quantity']);
            $cart[$id]['quantity'] = max(1, $quantity); // Đảm bảo số lượng >= 1
            session(['cart' => $cart]);
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function remove($id)
    {
        $cart = session('cart', []);
        unset($cart[$id]);
        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }
}
