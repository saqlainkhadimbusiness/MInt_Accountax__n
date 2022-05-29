<?php

namespace App\Http\Controllers\Admin;

use App\ManualPayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ManualPaymentController extends Controller
{
    public function index()
    {
        $payments = ManualPayment::all();

        return view('admin.manual-payments.index', compact('payments'));
    }

    public function create()
    {
        return view('admin.manual-payments.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'required|image'
        ]);

        $request_data = $request->all();
        $request_data['image'] = request('image')->store('payments');

        ManualPayment::create($request_data);

        return redirect(route('admin.manual-payments.index'))
                ->with('message', 'Record added successfully');
    }

    public function edit(ManualPayment $manual_payment)
    {
        return view('admin.manual-payments.edit', compact('manual_payment'));
    }

    public function update(Request $request, ManualPayment $manual_payment)
    {
        request()->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'image'
        ]);

        $request_data = $request->all();

        if ($request->hasFile('image')) {
            Storage::delete($manual_payment->image);

            $request_data['image'] = request('image')->store('payments');
        }

        $manual_payment->update($request_data);

        return redirect(route('admin.manual-payments.index'))
                ->with('message', 'Record updated successfully');
    }

    public function destroy(ManualPayment $manual_payment)
    {
        $manual_payment->delete();
    }
}