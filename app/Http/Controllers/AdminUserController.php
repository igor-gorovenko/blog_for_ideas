<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

    public function update(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();

        $request->validate([
            'role' => 'required|in:user,admin',
            'name' => 'required|string|max:255',
        ]);

        $user->update([
            $name = $request->input('name'),

            'name' => $name,
            'role' => $request->role,
            'slug' => Str::slug($name, '-'),
        ]);

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Created new post!');
    }
}
