<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function purchase(Request $request)
    {
        $service = Service::findOrFail($request->service);

        Session::push('cart.items', [$service->title, $request->price]);

        return redirect('user/checkout')->with('success', 'Item added in the cart');
    }
}
