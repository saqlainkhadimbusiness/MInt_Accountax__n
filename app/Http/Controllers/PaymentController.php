<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Stripe\{Stripe, Charge};
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = auth()->user()->payments;

        return view('main.payments.index', compact('payments'));
    }

    public function show(Payment $payment)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

    	$order = Charge::retrieve($payment->order_id);

        return view('main.payments.show', compact('order'));
    }
}
