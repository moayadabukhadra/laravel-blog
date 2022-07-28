<?php

namespace App\Http\Controllers;

use Illuminate\validation\Rule;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {

        return view('admin.index', [
            'posts'=>Post::paginate(50)
        ]);
    }
    public function create()
    {


        return view('admin.create');

    }
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:3',
            'thumbnail' => 'required|image',
            'category_id' => 'required|exists:categories,id',

        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
            'category_id' => request('category_id'),
            'user_id' => auth()->id(),
        ]);
        return redirect('/')->with('flash', 'Your post has been created');
    }

    public function edit(Post $post)
    {
        return view('admin.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:3',
            'thumbnail' => 'required|image',
            'category_id' => 'required|exists:categories,id',

        ]);

        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
            'category_id' => request('category_id'),
            'user_id' => auth()->id(),
        ]);
        return back()->with('success', 'Your post has been updated');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Your post has been deleted');
    }
}
