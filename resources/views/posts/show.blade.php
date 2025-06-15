<x-layout.main>
    <x-slot:title>{{ $post->title }}</x-slot:title>
    <!--Blog Return Button-->
    <div class="return-button">
        <a href="{{ route('posts.index') }}"
           class="{{ Request::route()->getName() === 'posts.index' ? "active" : "" }}">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <a href="{{ route('posts.edit', ['post' => $post->id])}}" class="button-primary">Edit</a>
        </div>

        <div class="control">
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="button-secondary">
                    Delete
                </button>
            </form>
        </div>
    </div>

    <div>
        <p>Created at:{{ $post->created_at}}</p>
        <p>Updated at:{{ $post->updated_at }}</p>
    </div>
    <div>
        {!! $post->body !!}
    </div>



</x-layout.main>
