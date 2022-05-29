<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        $banks = Bank::latest()->get();

        return view('admin.accounts.index', compact('banks'));
    }

    public function create()
    {
        $users = User::all();

        return view('admin.accounts.create', compact('users'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'user_id' => 'required|numeric',
            'name' => 'required|string',
            'account_type' => 'required|string',
            'bank_name' => 'required|string',
            'sort_code' => 'numeric',
            'account_number' => 'required|numeric'
        ]);

        Bank::create($request->all());

        return redirect(route('admin.accounts.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit($id)
    {
        $users = User::all();
        $bank = Bank::findOrFail($id);

        return view('admin.accounts.edit', compact('bank', 'users'));
    }

    public function update(Request $request, $id)
    {
        $bank = Bank::findOrFail($id);

        request()->validate([
            'user_id' => 'required|numeric',
            'name' => 'required|string',
            'account_type' => 'required|string',
            'bank_name' => 'required|string',
            'sort_code' => 'numeric',
            'account_number' => 'required|numeric'
        ]);
        
        $bank->update($request->all());

        return redirect(route('admin.accounts.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy($id)
    {
        $bank = Bank::findOrFail($id);

        $bank->delete();
    }
}
