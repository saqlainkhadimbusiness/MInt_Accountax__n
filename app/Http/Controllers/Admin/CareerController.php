<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->get();

        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        Career::create($request->all());

        return redirect(route('admin.careers.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        request()->validate([
            'slug' => 'required|unique:careers,slug,' . $career->id,
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        $career->update($request->all());

        return redirect(route('admin.careers.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Career $career)
    {
        $career->delete();
    }
}
