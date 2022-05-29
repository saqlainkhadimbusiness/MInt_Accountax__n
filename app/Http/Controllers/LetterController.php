<?php

namespace App\Http\Controllers;

use App\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function index()
    {
        $letters = auth()->user()->letters;

        return view('main.letters.index', compact('letters'));
    }

    public function destroy($id)
    {
        Letter::findOrFail($id)->delete();
    }
}
