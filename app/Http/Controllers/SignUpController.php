<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function signUp() {
        return view('auth.register');
    }

    public function postSignUp(Request $request) {
        $data = $request->validate([
            'username' => ['required', 'min:4'],
            'fullname' => ['nullable', 'min:4'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:5'],
            'confirm_password' => ['required', 'same:password'],
            'avatar' => ['nullable', 'max:102400'],
        ]);
        $data = $request->except('avatar');
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars');
        } else {
            $path = null;
        }
        $data['avatar'] = $path;
        User::query()->create($data);
        return redirect()->route('signIn')->with('message', 'Đăng ký thành công. Vui lòng đăng nhập.');
    }
}
