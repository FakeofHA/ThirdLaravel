<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.list')->with('users', User::all());
    }

    public function show(User $user)
    {
        return view('user.list')->with('user', $user);
    }

    public function edit(User $user)
    {
        return view('user.update')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $articles = Article::all()->where('userId', $user->id);

        foreach ($articles as $article)
            $article->delete();
        $user->delete();
        
        return redirect()->route('user.index');
    }
}
