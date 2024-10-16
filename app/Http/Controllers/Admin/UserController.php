<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all() {
        $users = User::where('roll', 'user')->latest('id')->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function ban($id) {
        $user = User::findOrFail($id);
        $user->active = 0;
        $user->save();
        return redirect()->route('admin.user.all');
    }

    public function unban($id) {
        $user = User::findOrFail($id);
        $user->active = 1;
        $user->save();
        return redirect()->route('admin.user.all');
    }
}
