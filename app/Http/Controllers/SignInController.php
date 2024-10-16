<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function signIn()
    {
        return view('auth.login');
    }

    public function postSignIn(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'min:4'],
            'password' => ['required', 'min:5']
        ]);

        $data = $request->only(['username', 'password']);

        if (Auth::attempt($data)) {
            if (Auth::user()->active == 1) {
                return redirect()->route('page.index');
            } else {
                Auth::logout();
                return redirect()->back()->with('message', 'Tài khoản đã bị khóa.');
            }
        } else {
            return redirect()->back()->with('message', 'Username hoặc password không đúng.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('signIn')->with('message', 'Đăng xuất thành công.');
    }
}
