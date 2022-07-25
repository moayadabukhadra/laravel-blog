<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $attributes =request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(!auth()->attempt($attributes)){
            return back()->withErrors([
                'email' => 'Invalid credentials.'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome back!');

}
}
