<?php

namespace App\Http\Controllers;

use App\Statement;
use Illuminate\Http\Request;

class StatementController extends Controller
{
    public function create(Request $request)
    {
        $bankId = $request->b;

        return view('main.statements.create', compact('bankId'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'bank_id' => 'required|numeric',
            'date' => 'required|date',
            'type' => 'required|string',
            'details' => 'required|string',
            'payee' => 'nullable|string',
            'description' => 'required|string',
            'net' => 'required|numeric',
            'vat' => 'numeric'
        ]);

        $req = $request->all();
        $req['total'] = $req['net'] + $req['vat'];

        Statement::create($req);

        return back()->with('success', 'Record added successfully');
    }

    public function edit($id)
    {
        $statement = Statement::findOrFail($id);

        return view('main.statements.edit', compact('statement'));
    }

    public function update(Request $request, $id)
    {
        $statement = Statement::findOrFail($id);

        request()->validate([
            'date' => 'required|date',
            'type' => 'required|string',
            'details' => 'required|string',
            'payee' => 'nullable|string',
            'description' => 'required|string',
            'net' => 'required|numeric',
            'vat' => 'numeric'
        ]);

        $req = $request->all();
        $req['total'] = $req['net'] + $req['vat'];

        $statement->update($req);

        return redirect(url('user/accounting/' . $statement->account->id))->with('success', 'Record updated successfully');
    }

    public function destroy($id)
    {
        $statement = Statement::findOrFail($id);

        $statement->delete();
    }
}
