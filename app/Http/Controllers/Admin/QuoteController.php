<?php

namespace App\Http\Controllers\Admin;

use App\Quote;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::latest()->get();

        return view('admin.quotes.index', compact('quotes'));
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();
    }
}
