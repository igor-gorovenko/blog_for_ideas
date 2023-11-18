<div class="container">
    <h1>Post detail</h1>
    <a href="{{ route('posts.index') }}">Back</a>
    <div>
        <h4>Title: {{ $post->title }}</h4>
        <p>Content: {{ $post->content }}</p>
    </div>
</div>