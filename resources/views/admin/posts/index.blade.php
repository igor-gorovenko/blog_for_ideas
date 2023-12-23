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
                <th>Actions</th>
            </thead>

            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('site.show', ['slug' => $post->slug]) }}" target="_blank">
                            View
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection