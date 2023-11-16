<h1>All users</h1>

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