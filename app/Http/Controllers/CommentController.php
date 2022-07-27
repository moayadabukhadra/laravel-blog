<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'body' => 'required|string|min:5',
        ]);
        $comment = auth()->user()->comments()->create($attributes);

        return redirect('/')->with('success', 'Comment created successfully');
    }
}
