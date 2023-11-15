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
            <th>Action</th>
        </tr>
    </thead>

    <body>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <select name="role">
                        <option value="user" {{ $user->role === 'user' ? 'selected' : ''}}>User</option>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : ''}}>Admin</option>
                    </select>
                    <button type="submit">Update Role</button>
                </form>
            </td>
        </tr>
        @endforeach
    </body>

</table>