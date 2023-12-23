<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('admin.posts.show', compact('post'));
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
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Пост успешно создан!');
    }
}
