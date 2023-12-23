@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container bg-white p-4">

        <div>
            <h3>Users</h3>
        </div>

        <table class="table table-bordered mt-2">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Actions</th>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('admin.users.show', ['slug' => $user->slug]) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection