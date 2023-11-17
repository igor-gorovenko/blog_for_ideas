@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="container">
        <h3>Posts</h3>
        <a href="{{ route('admin.posts.create') }}">Create new post</a>
        @foreach($posts as $post)
        <div>
            <h3><a href="{{ route('admin.posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
        </div>
        @endforeach
    </div>
</div>
@endsection