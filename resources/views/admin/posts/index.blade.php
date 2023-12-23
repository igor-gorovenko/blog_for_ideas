@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container bg-white p-4">

        <div class="d-flex justify-content-between align-items-center">
            <h3>Posts</h3>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-primary">Create new post</a>
        </div>

        <table class="table table-bordered mt-2">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </thead>

            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['slug' => $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </td>
                    <td>{{ $post->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection