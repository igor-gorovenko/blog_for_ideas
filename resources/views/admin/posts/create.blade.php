<!-- @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif -->

<div class="container">
    <h1>Admin Dashboard</h1>
    <div>
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


            <button type="submit">Create Post</button>
        </form>
    </div>
</div>