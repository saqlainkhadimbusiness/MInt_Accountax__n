<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('main.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'phone' => 'string|nullable|max:255',
            'company' => 'string|nullable|max:255',
            'address' => 'string|nullable|max:255',
            'country' => 'string|nullable|max:255',
            'city' => 'string|nullable|max:255',
        ]);

        $user = auth()->user();

        $user->update($request->all());

        return back()->with('success', 'Profile has been updated !');
    }

    public function password()
    {
    	return view('main.profile.password');
    }

    public function passwordUpdate(Request $request)
    {
        if (! (Hash::check($request->get('current_password'), auth()->user()->password)))
            return back()->with('error', 'Your current password does not matches with the password you provided.');

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed'
        ]);

        auth()->user()->update(
            ['password' => bcrypt($request->get('password'))]
        );

        return back()->with('success', 'Password changed successfully !');
    }
}
