<div class="bg-white">
    <div class="container  p-4">

        <a class="navbar-brand" href="{{ route('admin.posts.index') }}">
            Blog for ideas
        </a>

        @if(Request::is('admin*'))
        <a href="{{ route('admin.posts.index') }}">Posts</a>
        <a href="{{ route('admin.users.index') }}">Users</a>
        @endif
    </div>
</div>