<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image',
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        $request_data = $request->all();
        $request_data['image'] = request('image')->store('articles');

        Article::create($request_data);

        return redirect(route('admin.articles.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
         request()->validate([
            'slug' => 'required|unique:articles,slug,' . $article->id,
            'category_id' => 'required|exists:categories,id',
            'image' => 'image',
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        $request_data = $request->all();

        if ($request->hasFile('image')) {
            Storage::delete($article->image);

            $request_data['image'] = request('image')->store('articles');
        }

        $article->update($request_data);

        return redirect(route('admin.articles.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Article $article)
    {
        $article->delete();
    }
}
