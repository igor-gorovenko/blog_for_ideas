@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="container bg-white p-4">
        <a href="{{ route('admin.index') }}">Back</a>
        <h3>Users</h3>
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
            </thead>

            <body>
                @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ route('admin.users.show', ['id' => $user->id]) }}">{{ $user->name }}</a>
                    </td>
                    <td>{{ $user->role }}</td>
                </tr>
                @endforeach
            </body>
        </table>
    </div>
</div>
@endsection