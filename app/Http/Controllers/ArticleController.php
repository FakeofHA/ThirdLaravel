<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.list')->with('articles', Article::all()->where('userId', Auth::user()->id));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'userId' => Auth::user()->id,
        ]);

        return redirect()->route('article.index');
    }

    public function show(Article $article)
    {
        return view('client.read')->with('article', $article);
    }

    public function edit(Article $article)
    {
        if ($article->userId != Auth::user()->id)
            return redirect()->route('article.index');

        return view('article.update')->with('article', $article);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('article.index');
    }

    public function destroy(Article $article)
    {
        if ($article->userId != Auth::user()->id)
            return redirect()->route('article.index');
        
        $article->delete();
        return redirect()->route('article.index');
    }
}
