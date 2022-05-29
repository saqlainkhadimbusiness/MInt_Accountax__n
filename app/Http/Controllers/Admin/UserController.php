<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.users.index', compact('users')); 
    }

    public function create()
    {
        return view('admin.users.create'); 
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'string|nullable|max:255',
            'company' => 'string|nullable|max:255',
            'address' => 'string|nullable|max:255',
            'country' => 'string|nullable|max:255',
            'city' => 'string|nullable|max:255',
            'password' => 'required|string|confirmed'
        ]);

        $request_data = $request->all();
        $request_data['password'] = Hash::make($request->password);

        User::create($request_data);

        return redirect(route('admin.users.index'))
                ->with('message', 'Record added successfully');
    }
 
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user')); 
    }

    public function update(Request $request, User $user)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'string|nullable|max:255',
            'company' => 'string|nullable|max:255',
            'address' => 'string|nullable|max:255',
            'country' => 'string|nullable|max:255',
            'city' => 'string|nullable|max:255',
            'password' => 'string|nullable|confirmed'
        ]);

        $request_data = $request->all();

        if ($request_data['password'] == '')
            $request_data['password'] = $user->password;
        else
            $request_data['password'] = Hash::make($request_data['password']);

        $user->update($request_data);

        return redirect(route('admin.users.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
    }
}

