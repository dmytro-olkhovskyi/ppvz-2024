<div>
    
    <h1>Posts Index Page</h1>

    <a href="{{ route('posts.create') }}">Create new post</a>

    <hr>

    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Excerpt</th>
            <th>Created</th>
            <th>Modified</th>
            <th>Actions</th>
        </tr>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->exceprt }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="{{ route('posts.show', $post) }}" target="_blank">View</a></td>
            </tr>
        @endforeach
    </table>

</div>
