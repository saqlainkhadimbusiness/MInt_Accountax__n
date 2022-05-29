<?php

namespace App\Http\Controllers\Admin;

use App\Heading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeadingController extends Controller
{
    public function index()
    {
        $headings = Heading::latest()->get();

        return view('admin.headings.index', compact('headings'));
    }

    public function create()
    {
        return view('admin.headings.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);

        Heading::create($request->all());

        return redirect(route('admin.headings.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Heading $heading)
    {
        return view('admin.headings.edit', compact('heading'));
    }

    public function update(Request $request, Heading $heading)
    {
        request()->validate([
            'name' => 'required',
        ]);
        
        $heading->update($request->all());

        return redirect(route('admin.headings.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Heading $heading)
    {
        $heading->delete();
    }
}
