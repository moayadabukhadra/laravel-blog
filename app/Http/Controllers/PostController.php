<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


public function index(){


    return view('posts.index',[
        'posts' => Post::latest()->filter
        (request(['search','category','author']))
        ->paginate(6)->withQueryString(),


    ]);
}

    public function show(Post $post)
    {
        return view('posts.show',[
            'post' => $post,
        ]);


    }

    public function storeComment(Post $post, Request $request)
    {
        $this->validate($request, [
            'body' => 'required|min:3',
        ]);
        $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);
        return back()->with('flash', 'Your comment has been submitted');
    }


}




