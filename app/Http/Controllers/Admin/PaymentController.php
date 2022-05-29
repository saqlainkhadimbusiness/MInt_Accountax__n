<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Service;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();

        return view('admin.payments.index', compact('payments'));
    }

    public function create()
    {
    	$users = User::all();
    	$services = Service::all();

        return view('admin.payments.create', compact('users', 'services'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'user_id' => 'required|numeric',
            'service_id' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);

        $user = User::findOrFail($request->user_id);

        $user->payments()->create([
        	'order_id' => 'Manual',
        	'service_id' => $request->service_id,
        	'amount' => $request->amount
        ]);

        return redirect(route('admin.payments.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(Payment $payment)
    {
    	$services = Service::all();

        return view('admin.payments.edit', compact('payment', 'services'));
    }

    public function update(Request $request, Payment $payment)
    {
        request()->validate([
            'service_id' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);

        $payment->update($request->all());

        return redirect(route('admin.payments.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
    }
}