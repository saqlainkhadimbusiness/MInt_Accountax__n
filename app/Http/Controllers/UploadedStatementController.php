<?php

namespace App\Http\Controllers;

use App\UploadedStatement;
use Illuminate\Http\Request;

class UploadedStatementController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'bank_id' => 'required|numeric',
            'file' => 'required|mimes:pdf,csv,xls,xlsx'
        ]);

        $req = $request->all();
        $req['path'] = request('file')->store('uploaded_statements');

        UploadedStatement::create($req);

        return back()->with('success', 'Record added successfully');
    }

    public function destroy($id)
    {
        UploadedStatement::findOrFail($id)->delete();
    }
}
