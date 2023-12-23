<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('admin.users.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
            'name' => 'required|string|max:255',
        ]);

        try {
            $user->update([
                'role' => $request->role,
                'name' => $request->name,
            ]);
        } catch (\Exception $e) {
            return redirect()->route('admin.users.show', ['id' => $user->id])->with('error', 'Ошибка при обновлении роли пользователя: ' . $e->getMessage());
        }

        return redirect()->route('admin.users.show', ['id' => $user->id])->with('success', 'Роль пользователя успешно обновлена');
    }
}
