@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container bg-white p-4">
        <div class="mb-2">
            <a href="{{ route('admin.posts.index') }}">Back</a>
        </div>

        <div>
            <h3>Create Post</h3>
            <div>
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content:</label>
                        <textarea class="form-control" name="content" id="content" required></textarea>
                    </div>

                    <div class="mb-3">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection