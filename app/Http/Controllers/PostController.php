<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('site.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('site.show', compact('post'));
    }
}
