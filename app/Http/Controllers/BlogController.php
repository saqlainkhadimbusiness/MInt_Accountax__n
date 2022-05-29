<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6);
        
    	return view('main.blog.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();

        $articles = Article::where('category_id', $article->category_id)->take(3)->get();

        return view('main.blog.show', compact('article', 'articles'));
    }

    public function search(Request $request)
    {
        $articles = Article::where(DB::raw("CONCAT(title)"), 'Like', "%{$request->name}%")->paginate(6);

        return view('main.blog.index', compact('articles'));
    }
}
