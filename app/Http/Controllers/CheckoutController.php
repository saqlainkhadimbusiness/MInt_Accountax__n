<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Stripe\{Stripe, Charge};
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $items = Session::get('cart.items');

        $services_price = 0;

        if (!empty($items))
            foreach($items as $item) $services_price += $item[1];

        $vat = ($services_price / 100) * 20;

        $total = $services_price + $vat;

        return view('main.cart', compact('items', 'services_price', 'vat', 'total'));
    }

    public function proceed(Request $request)
    {
        $user = auth()->user();

        Stripe::setApiKey(config('services.stripe.secret'));

        $items = Session::get('cart.items');

        $pay_for = "";
        $price = 0;

        foreach($items as $item)
        {
            $pay_for .= "{$item[0]} = {$item[1]}, ";
            $price += $item[1];
        }

        $vat = ($price / 100) * 20;

        $price += $vat;

        $token = $request->stripeToken;
        $intent = Charge::create([
            'amount' => floatval($price) * 100,
            'currency' => 'gbp',
            'description' => "Payment By {$user->name} For {$pay_for}",
            'source' => $token
        ]);

        foreach($items as $item)
        {
            $service = Service::where('title', '=', $item[0])->first();

            $user->payments()->create([
                'order_id' => $intent->id,
                'service_id' => $service->id,
                'amount' => $item[1]
            ]);
        }

        Session::forget('cart.items');

        return back()->with('success', 'Payment Done');
    }

    public function destroy($id)
    {
        Session::forget('cart.items.' . $id);
    }
}
