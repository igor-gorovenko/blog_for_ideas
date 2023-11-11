<h1>Add post</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Content:</label>
    <textarea name="content" id="content" rows="4" required></textarea>

    <button type="submit">Add post</button>
</form>