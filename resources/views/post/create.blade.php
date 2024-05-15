<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->

    <h1>Create new post</h1>

    {{ Form::open(['method' => 'post', 'route' => ['posts.store']]) }}

        {{ Form::label('title', 'Post Title') }}
        {{ Form::text('title', '') }}

        {{ Form::submit('Create Post') }}

        <hr>

        <a href="{{ url()->previous() }}">Back (without create)</a>
    {{ Form::close() }}
</div>
