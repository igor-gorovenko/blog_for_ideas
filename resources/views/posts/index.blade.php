@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog</h1>
    <div class="container bg-white p-4">
        <h3>Posts</h3>
        @foreach($posts as $post)
        <div>
            <h3><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
        </div>
        @endforeach
    </div>
</div>
@endsection