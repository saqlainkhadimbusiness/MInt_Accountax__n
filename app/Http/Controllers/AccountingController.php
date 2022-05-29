<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index()
    {
        $banks = Bank::latest()->get();

        return view('main.accounting.index', compact('banks'));
    }

    public function show($id)
    {
        $bank = Bank::findOrFail($id);

        return view('main.statements.index', compact('bank'));
    }

    public function create()
    {
        return view('main.accounting.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'account_type' => 'required|string',
            'bank_name' => 'required|string',
            'sort_code' => 'numeric',
            'account_number' => 'required|numeric'
        ]);

        auth()->user()->accounts()->create($request->all());

        return redirect(route('accounting.index'))
                ->with('success', 'Record added successfully');
    }

    public function edit($id)
    {
        $bank = Bank::findOrFail($id);

        return view('main.accounting.edit', compact('bank'));
    }

    public function update(Request $request, $id)
    {
        $bank = Bank::findOrFail($id);

        request()->validate([
            'name' => 'required|string',
            'account_type' => 'required|string',
            'bank_name' => 'required|string',
            'sort_code' => 'numeric',
            'account_number' => 'required|numeric'
        ]);
        
        $bank->update($request->all());

        return redirect(route('accounting.index'))
                ->with('success', 'Record updated successfully');
    }

    public function destroy($id)
    {
        $bank = Bank::findOrFail($id);

        $bank->delete();
    }
}
