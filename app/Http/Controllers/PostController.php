<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

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

    public function create()
    {


        return view('posts.create',[
            'categories' => Category::all(),
        ]);
        
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:3',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'category_id' => request('category_id'),
            'user_id' => auth()->id(),
        ]);
        return redirect('/')->with('flash', 'Your post has been created');
    }


}




