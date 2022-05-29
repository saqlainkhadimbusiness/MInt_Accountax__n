<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());

        return redirect(route('admin.categories.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        request()->validate([
            'name' => 'required',
        ]);
        
        $category->update($request->all());

        return redirect(route('admin.categories.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}
