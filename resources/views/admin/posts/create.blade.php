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
                    <h4>Create post</h4>
                    <a href="{{ route('admin.posts.index') }}">Back</a>
                    <form action="{{ route('admin.posts.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" required>
                        </div>

                        <div>
                            <label for="content">Content:</label>
                            <textarea name="content" id="content" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>