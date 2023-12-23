@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container bg-white p-4">
        <div class="mb-2">
            <a href="{{ route('admin.users.index') }}">Back</a>
        </div>
        <div>
            <h3>User detail</h3>
        </div>

        <table class="table table-bordered mt-2">
            <tr>
                <td>Name</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Role</td>
                <td>{{ $user->role }}</td>
            </tr>
            <tr>
                <td>Edit data</td>
                <td>
                    <form action="{{ route('admin.users.update', $user->slug) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                        <div>
                            <label for="name">Role:</label>
                            <select name="role">
                                <option value="user" {{ $user->role === 'user' ? 'selected' : ''}}>User</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : ''}}>Admin</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>

    </div>
</div>
@endsection