<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        // Проверка данных
        $request->validate([
            'title'  => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create new post
        $post = new Post([
            $title = $request->input('title'),

            'title' => $title,
            'content' => $request->input('content'),
            'slug' => Str::slug($title, '-'),
        ]);

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Created new post!');
    }
}
