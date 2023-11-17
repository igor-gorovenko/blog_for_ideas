<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.index') }}">back</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="container">
                        <h1>POSTS</h1>
                        <a href="{{ route('admin.posts.create') }}">Create new post</a>
                        @foreach($posts as $post)
                        <div>
                            <h3><a href="{{ route('admin.posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>