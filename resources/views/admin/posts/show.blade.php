@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container bg-white p-4">
        <div class="mb-2">
            <a href="{{ route('admin.posts.index') }}">Back</a>
        </div>
        <div>
            <h3>Post detail</h3>
            <div>
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
</div>

@endsection