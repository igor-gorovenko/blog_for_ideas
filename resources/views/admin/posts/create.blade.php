<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('admin.posts.index') }}">back</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="container">
                        <h1>Create Post</h1>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

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

                            <div>
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>