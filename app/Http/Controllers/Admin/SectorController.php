<?php

namespace App\Http\Controllers\Admin;

use App\Sector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::latest()->get();

        return view('admin.sectors.index', compact('sectors'));
    }

    public function create()
    {
        return view('admin.sectors.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        Sector::create($request->all());

        return redirect(route('admin.sectors.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Sector $sector)
    {
        return view('admin.sectors.edit', compact('sector'));
    }

    public function update(Request $request, Sector $sector)
    {
        request()->validate([
            'slug' => 'required|unique:sectors,slug,' . $sector->id,
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required'
        ]);

        $sector->update($request->all());

        return redirect(route('admin.sectors.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Sector $sector)
    {
        $sector->delete();
    }
}
