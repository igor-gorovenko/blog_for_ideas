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
                    <h4>Posts</h4>
                    <a href="{{ route('admin.index') }}">Back</a>
                    <div>
                        <a href="{{ route('admin.posts.create')}}">Create post</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                            </tr>
                        </thead>

                        <body>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('admin.posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></td>
                            </tr>
                            @endforeach
                        </body>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>