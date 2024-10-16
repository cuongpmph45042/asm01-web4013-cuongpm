<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('client.user.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'fullname' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:users'],
            'avatar' => ['nullable', 'max:102400']
        ]);

        $data = $request->except('avatar');
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars');

            if (!empty($user->avatar)) {
                Storage::delete($user->avatar);
            }
        } else {
            $path = null;
        }
        $data['avatar'] = $path;
        $user->update($data);

        return redirect()->route('profile');
    }
}
