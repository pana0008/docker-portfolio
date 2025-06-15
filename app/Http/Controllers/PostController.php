<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * @return 'index' view
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'slug' => 'nullable|string',
            'description' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->slug = $validated['slug'] ?? Str::slug($validated['title']);
        $post->description = $validated['description'];
        $post->body = $validated['body'];

        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $post)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'slug' => 'nullable|string',
            'description' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = Post::findOrFail($post);

        // If slug is not provided, auto-generate it from the title
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        $post->update($validated);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function delete(Post $post)
    {
        return view('posts.delete', [
            'post' => $post
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post has been successfully deleted!');
    }
}
