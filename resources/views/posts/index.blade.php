<div class="container">
    <h1>All posts</h1>
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
                <td><a href="{{ route('posts.show', ['id' => $post->id ]) }}">{{ $post->title }}</a></td>
            </tr>
            @endforeach
        </body>
    </table>
</div>