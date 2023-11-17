<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.users.index') }}">back</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="container">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>