<?php

namespace App\Http\Controllers;

use App\Message;
use App\Mail\MessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
    	return view('main.contact.index');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'number' => 'required|numeric|digits_between:5,16',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        Message::create($request->all());

        Mail::to('info@mintaccountax.co.uk')
            ->bcc(['idreeskhan655@gmail.com'])
            ->send(new MessageCreated());


        // if(isset($request->index))
            return back()->with('success', 'Thankyou for contacting us !');
            
        // return response('MF000');
    }
}
