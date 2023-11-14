<h1>Админка</h1>
<p>this is CREATE admin</p>

<h1>Create Post</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('admin.posts.store') }}" method="post">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea>

    <button type="submit">Create Post</button>
</form>