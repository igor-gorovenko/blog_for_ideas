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
                    <h4>Post detail</h4>
                    <a href="{{ route('admin.posts.index') }}">Back</a>

                    <h4>Title: {{ $post->title }}</h4>
                    <p>Content: {{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>