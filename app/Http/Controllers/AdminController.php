<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dangNhap(Request $request)
    {
        $check  =   Auth::guard('admin')->attempt([
            'email'     => $request->email,
            'password'  => $request->password,
        ]);

        if ($check) {
            // Lấy thông tin tài khoản đã đăng nhập thành công
            $nhanVien  =   Auth::guard('admin')->user(); // Lấy được thông tin nhân viên đã đăng nhập

            return response()->json([
                'status'    => true,
                'message'   => "Đã đăng nhập thành công!",
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Tài khoản hoặc mật khẩu không đúng!",
            ]);
        }
    }
}
