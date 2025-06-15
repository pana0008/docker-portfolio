<article class="posts">
    <div class="blog-post">
        <h2>
            <a href="{{ route('posts.show', $post) }}" class="post-title">
            {!! $post->title !!}
        </a>
        </h2>
        <div class="date">
            <em>
            {!! $post->created_at !!}
            </em>
        </div>
        <br>
        <div class="post-text">
            {!! $post->description !!}
        </div>
        <br>
        <a href="{{ route('posts.show', $post) }}" class="button">
            Read more
        </a>
    </div>
</article>
