<div class="container">
    <h1>Admin Dashboard</h1>
    <div>
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