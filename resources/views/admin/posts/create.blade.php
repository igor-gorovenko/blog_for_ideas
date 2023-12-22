
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="container bg-white p-4">
        <a href="{{ route('admin.posts.index') }}">Back</a>
        <h3>Create Post</h3>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <textarea name="content" id="content" required></textarea>
            </div>

            <div>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
        </form>
    </div>
</div>
@endsection

