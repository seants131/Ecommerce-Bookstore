<?
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:8',
    ]);

    // Thử đăng nhập
    if (Auth::attempt($request->only('email', 'password'))) {
        // Đăng nhập thành công, trả về thông tin người dùng
        return response()->json([
            'success' => true,
            'message' => 'Đăng nhập thành công.',
            'user' => Auth::user(),
        ]);
    }

    // Đăng nhập thất bại
    return response()->json(['success' => false, 'message' => 'Thông tin đăng nhập không chính xác.'], 401);
}


    // Xử lý đăng ký
    public function register(Request $request)
{
    try {
        // Xác thực đầu vào
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Tạo người dùng
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Đăng nhập tự động sau khi đăng ký
        Auth::login($user);

        // Trả về phản hồi JSON
        return response()->json([
            'success' => true,
            'message' => 'Đăng ký và đăng nhập thành công.',
            'redirect' => route('login'),
        ]);
    } catch (\Exception $e) {
        // Xử lý lỗi và trả về JSON
        return response()->json([
            'success' => false,
            'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
        ], 500);
    }
}

    
}
