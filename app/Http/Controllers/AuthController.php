<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Import User model
use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý logic đăng nhập
    public function login(Request $request)
    {
        // Xác thực đầu vào
        $request->validate([
            'email' => 'required|string|email|max:255', // Chỉ kiểm tra email
            'password' => 'required|string|min:8',     // Mật khẩu phải đủ dài
        ]);

        // Thử đăng nhập
        if (Auth::attempt($request->only('email', 'password'))) {
            // Đăng nhập thành công
            return response()->json(['success' => true, 'message' => 'Login successful']);
        }

        // Đăng nhập thất bại
        return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Tạo mã OTP
        $otp = $this->generateOtp();

        // Tạo người dùng nhưng chưa kích hoạt
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp_code' => $otp,
            'otp_expires_at' => now()->addMinutes(5), // OTP hết hạn sau 5 phút
        ]);

        // Gửi OTP qua email
        Mail::to($user->email)->send(new SendOtpMail($otp));

        return response()->json(['success' => true, 'message' => 'OTP đã được gửi đến email của bạn.']);
    }

    // Tạo mã OTP ngẫu nhiên
    private function generateOtp()
    {
        return rand(100000, 999999); // Mã OTP gồm 6 chữ số
    }

    // Xác minh OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'otp' => 'required|digits:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Người dùng không tồn tại.'], 404);
        }

        if ($user->otp_code !== $request->otp) {
            return response()->json(['success' => false, 'message' => 'Mã OTP không chính xác.'], 401);
        }

        if ($user->otp_expires_at < now()) {
            return response()->json(['success' => false, 'message' => 'Mã OTP đã hết hạn.'], 401);
        }

        // Xác minh thành công
        $user->otp_code = null;
        $user->otp_expires_at = null;
        $user->save();

        return response()->json(['success' => true, 'message' => 'Xác minh OTP thành công.']);
    }
}
