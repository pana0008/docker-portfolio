<x-layout.main>
    <x-slot:title>Creating a New Blog Post</x-slot:title>

    <div class="create-box">

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h2>
                Please fill out all the form fields and click 'Submit'.
            </h2>

            {{-- General Laravel error messages (if any) --}}
            @if ($errors->any() && ! $errors->hasAny(['title', 'description', 'body']))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            {{-- Title Field --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title"
                           class="input @error('title') is-invalid @enderror" {{-- <--- ADDED CLASS HERE --}}
                           value="{{ old('title') }}" placeholder="Write a title for the post..." autofocus>
                </div>
                @error('title')
                <p class="error-message">Please fill in the blog post title. This field cannot be empty.</p>
                @enderror
            </div>

            {{-- Description Field --}}
            <div class="field">
                <label for="description" class="label">Description</label>
                <div class="control">
                    <textarea name="description"
                              class="input @error('description') is-invalid @enderror" {{-- <--- ADDED CLASS HERE --}}
                              placeholder="Write a short description...">{{ old('description') }}</textarea>
                </div>
                @error('description')
                <p class="error-message">Please fill in the blog post description. This field cannot be empty.</p>
                @enderror
            </div>

            {{-- Body Field (using textarea for multi-line input) --}}
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea name="body"
                              class="input @error('body') is-invalid @enderror" {{-- <--- ADDED CLASS HERE --}}
                              placeholder="Write the blog post's content...">{{ old('body') }}</textarea>
                </div>
                @error('body')
                <p class="error-message">Please fill in the blog post body. This field cannot be empty.</p>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="field is-grouped">
                <div class="control">
                    {{-- Changed from 'button cancel' to 'button-secondary' --}}
                    <button type="button" class="button-secondary">Cancel</button>
                </div>
                <div class="control">
                    {{-- Changed from 'button' to 'button-primary' --}}
                    <button type="submit" class="button-primary">Submit</button>
                </div>
            </div>
        </form>


    </div>
</x-layout.main>
