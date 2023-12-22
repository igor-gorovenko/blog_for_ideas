
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="container bg-white p-4">
        <a href="{{ route('admin.users.index') }}">Back</a>
        <h3>User detail</h3>
        <p>Name: {{ $user->name }}</p>
        <p>Role: {{ $user->role }}</p>

        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div>
                <select name="role">
                    <option value="user" {{ $user->role === 'user' ? 'selected' : ''}}>User</option>
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : ''}}>Admin</option>
                </select>
                <button type="submit" class="btn btn-primary">Update Role</button>
            </div>
        </form>

    </div>
</div>
@endsection

