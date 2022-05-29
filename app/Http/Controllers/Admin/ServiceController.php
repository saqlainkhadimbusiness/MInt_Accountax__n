<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\Heading;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $headings = Heading::all();

        return view('admin.services.create', compact('headings'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'price' => 'nullable|integer'
        ]);

        Service::create($request->all());

        return redirect(route('admin.services.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Service $service)
    {
        $headings = Heading::all();

        return view('admin.services.edit', compact('service', 'headings'));
    }

    public function update(Request $request, Service $service)
    {
        request()->validate([
            'slug' => 'required|unique:services,slug,' . $service->id,
            'title' => 'required',
            'body' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'price' => 'nullable|integer'
        ]);

        $service->update($request->all());

        return redirect(route('admin.services.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
    }
}
