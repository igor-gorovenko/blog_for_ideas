<h1>{{ $user->name }}</h1>
<p>{{ $user->role }}</p>
<form action="{{ route('admin.users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <select name="role">
        <option value="user" {{ $user->role === 'user' ? 'selected' : ''}}>User</option>
        <option value="admin" {{ $user->role === 'admin' ? 'selected' : ''}}>Admin</option>
    </select>
    <button type="submit">Update Role</button>
</form>