@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog</h1>
    <div class="container bg-white p-4">
        <a href="{{ route('posts.index') }}">Back</a>
        <h3>Post detail</h3>
        <div>
            <h4>Title: {{ $post->title }}</h4>
            <p>Content: {{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection