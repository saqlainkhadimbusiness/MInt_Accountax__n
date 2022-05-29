<?php

namespace App\Http\Controllers\Admin;

use App\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::latest()->get();

        return view('admin.resources.index', compact('resources'));
    }

    public function create()
    {
        return view('admin.resources.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        Resource::create($request->all());

        return redirect(route('admin.resources.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Resource $resource)
    {
        return view('admin.resources.edit', compact('resource'));
    }

    public function update(Request $request, Resource $resource)
    {
        request()->validate([
            'slug' => 'required|unique:resources,slug,' . $resource->id,
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        $resource->update($request->all());

        return redirect(route('admin.resources.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Resource $resource)
    {
        $resource->delete();
    }
}
