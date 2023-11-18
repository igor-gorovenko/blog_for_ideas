<div class="container">
    <h1>User detail</h1>
    <a href="{{ route('admin.users.index') }}">Back</a>

    <div>Name: {{ $user->name }}</div>
    <div>Role: {{ $user->role }}</div>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="role">Role:</label>
            <select name="role">
                <option value="user" {{ $user->role === 'user' ? 'selected' : ''}}>User</option>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : ''}}>Admin</option>
            </select>
        </div>

        <button type="submit">Save</button>
    </form>
</div>