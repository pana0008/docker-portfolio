<x-layout.main>
    <x-slot:title>Blog Posts</x-slot:title>
    <!--Blog Posts-->
    <center>
        <a href="{{ route('posts.create') }}" class="button" id="create-blog">Create a New Blog Post</a>
        @foreach($posts as $post)
            <x-post.list-item :post="$post"></x-post.list-item>
        @endforeach
    </center>

    <br>
    <br>
    <br>
</x-layout.main>
