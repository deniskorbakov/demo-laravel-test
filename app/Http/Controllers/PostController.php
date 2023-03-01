<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('post.index',compact('posts'));

    }

    public function create() {
        return view('post.create');
    }

    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string|min:3|max:50',
            'content' => 'string|min:3|max:255',
            'image' => 'string'
        ]);

        $post->update($data);

        return redirect()->route('post.show',$post->id);
    }

    public function delete() {
        $post = Post::withTrashed()->find(1);
        $post->restore();

        dd('delete');
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('post.index');
    }


    public function store() {
        $data = request()->validate([
            'title' => 'string|min:3|max:50',
            'content' => 'string|min:3|max:255',
            'image' => 'string'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }
}
