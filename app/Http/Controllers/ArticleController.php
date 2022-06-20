<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all();
        return view('article_list', compact('articles'));
    }

    public function show($id)
    {
        return Article::find($id);
    }
    
    public function showMyArticles()
    {
        $articles = Article::where('user_id', auth()->user()->id)->get();
        return view('my_article', compact('articles'));
    }

    public function create(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }
    
    public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function delete($id)
    {
        Article::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
