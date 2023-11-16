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

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        try {
            $user->update(['role' => $request->role]);
        } catch (\Exception $e) {
            return redirect()->route('admin.users.index')->with('error', 'Ошибка при обновлении роли пользователя: ' . $e->getMessage());
        }

        return redirect()->route('admin.users.index')->with('success', 'Роль пользователя успешно обновлена');
    }
}
