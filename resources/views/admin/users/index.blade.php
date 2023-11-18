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
                    <h4>All user</h4>
                    <a href="{{ route('admin.index') }}">Back</a>
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
        </div>
    </div>
</x-app-layout>