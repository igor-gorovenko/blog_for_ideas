<div class="container">
    <h1>Admin Dashboard</h1>
    <div>
        <h4>Post detail</h4>
        <a href="{{ route('admin.posts.index') }}">Back</a>

        <h4>Title: {{ $post->title }}</h4>
        <p>Content: {{ $post->content }}</p>
    </div>
</div>