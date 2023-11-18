<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h4>User detail</h4>
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

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>