
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="container bg-white p-4">
        <a href="{{ route('admin.index') }}">Back</a>
        <h3>Posts</h3>
        <a href="{{ route('admin.posts.create') }}">Create new post</a>

        @foreach($posts as $post)
        <div>
            <a href="{{ route('admin.posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection

