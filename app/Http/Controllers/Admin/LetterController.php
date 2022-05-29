<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LetterController extends Controller
{
    public function index()
    {
        $letters = Letter::latest()->get();

        return view('admin.letters.index', compact('letters'));
    }

    public function create()
    {
        $users = User::all();

        return view('admin.letters.create', compact('users'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'user_id' => 'required|numeric',
            'file' => 'required|mimes:pdf,csv,xls,xlsx'
        ]);

        $req = $request->all();
        $req['file'] = request('file')->store('letters');

        Letter::create($req);

        return redirect(route('admin.letters.index'))
                ->with('message', 'Record added successfully');
    }

    public function destroy(Letter $letter)
    {
        $letter->delete();
    }
}
