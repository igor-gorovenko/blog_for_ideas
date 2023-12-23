@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container bg-white p-4">

        <div>
            <h1>Blog</h1>
        </div>


        <table class="table table-bordered mt-2">
            <thead>
                <th>ID</th>
                <th>Title</th>
            </thead>

            <tbody>
                @foreach($posts as $post)
                <div>
                    <h3></h3>
                </div>
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                        <a href="{{ route('site.show', ['slug' => $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection