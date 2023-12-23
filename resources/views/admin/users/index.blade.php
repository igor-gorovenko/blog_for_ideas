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
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <a href="{{ route('admin.users.show', ['slug' => $user->slug]) }}">
                            {{ $user->name }}
                        </a>
                    </td>

                    <td>{{ $user->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection