<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteCreated;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
    	 request()->validate([
            'name' => 'required|string',
            'turnover' => 'required|string',
            'email' => 'required|email',
            'vat_returns' => 'required|numeric',
            'cc' => 'required|string',
            'number' => 'required|numeric',
            'payroll' => 'required|string',
            'business_type' => 'required|string',
            'bookkeeping' => 'required|numeric',
            'employees' => 'numeric',
            'transactions' => 'numeric',
            'partners' => 'numeric',
            'dormant' => 'numeric',
            'not_trading' => 'numeric'
        ]);

        $req = $request->all();
        $req['number'] = '+' . $req['cc'] . $req['number'];

        $total = 0;

        if (strcmp($request->turnover, '£501,000+') == 0)
            $total = 0;
        else
        {
            $turnover = 0;
            $returns = 0;
            $employees = 0;
            $transactions = 0;

            if (strcmp($request->turnover, '£0 to £20,000') == 0)
            {
                if (strcmp($request->business_type, 'Sole Trader') == 0)
                    $turnover += 20;
                else if (strcmp($request->business_type, 'Limited Company') == 0)
                    $turnover += 40;
                else if (strcmp($request->business_type, 'Partnership') == 0)
                    $turnover += 20;
                else if (strcmp($request->business_type, 'LLP') == 0)
                    $turnover += 40;
            }
            else if (strcmp($request->turnover, '£20,000 to £100,000') == 0)
            {
                if (strcmp($request->business_type, 'Sole Trader') == 0)
                    $turnover += 25;
                else if (strcmp($request->business_type, 'Limited Company') == 0)
                    $turnover += 45;
                else if (strcmp($request->business_type, 'Partnership') == 0)
                    $turnover += 25;
                else if (strcmp($request->business_type, 'LLP') == 0)
                    $turnover += 45;
            }
            else if (strcmp($request->turnover, '£101,000 to £200,000') == 0)
            {
                if (strcmp($request->business_type, 'Sole Trader') == 0)
                    $turnover += 30;
                else if (strcmp($request->business_type, 'Limited Company') == 0)
                    $turnover += 50;
                else if (strcmp($request->business_type, 'Partnership') == 0)
                    $turnover += 30;
                else if (strcmp($request->business_type, 'LLP') == 0)
                    $turnover += 50;
            }
            else if (strcmp($request->turnover, '£201,000 to £300,000') == 0)
            {
                if (strcmp($request->business_type, 'Sole Trader') == 0)
                    $turnover += 35;
                else if (strcmp($request->business_type, 'Limited Company') == 0)
                    $turnover += 55;
                else if (strcmp($request->business_type, 'Partnership') == 0)
                    $turnover += 35;
                else if (strcmp($request->business_type, 'LLP') == 0)
                    $turnover += 55;
            }
            else if (strcmp($request->turnover, '£301,000 to £400,000') == 0)
            {
                if (strcmp($request->business_type, 'Sole Trader') == 0)
                    $turnover += 40;
                else if (strcmp($request->business_type, 'Limited Company') == 0)
                    $turnover += 60;
                else if (strcmp($request->business_type, 'Partnership') == 0)
                    $turnover += 40;
                else if (strcmp($request->business_type, 'LLP') == 0)
                    $turnover += 60;
            }
            else if (strcmp($request->turnover, '£401,000 to £500,000') == 0)
            {
                 if (strcmp($request->business_type, 'Sole Trader') == 0)
                    $turnover += 45;
                else if (strcmp($request->business_type, 'Limited Company') == 0)
                    $turnover += 65;
                else if (strcmp($request->business_type, 'Partnership') == 0)
                    $turnover += 45;
                else if (strcmp($request->business_type, 'LLP') == 0)
                    $turnover += 65;
            }

            if ($request->vat_returns == 1)
                $returns += 15;

            if (strcmp($request->payroll, 'Weekly') == 0 || strcmp($request->payroll, 'Fortnightly') == 0 || strcmp($request->payroll, 'Monthly') == 0)
                $employees += ($request->employees * 3);

            if ($request->bookkeeping == 1)
                $transactions += ($request->transactions * 0.2);

            $total = $turnover + $returns + $employees + $transactions;
        }

        Quote::create($req);

        Mail::to($request->email)
            ->cc(['quote@mintaccountax.co.uk'])
            // ->bcc(['idreeskhan655@gmail.com'])
            ->send(new QuoteCreated($total, $turnover, $returns, $employees, $transactions));

        return back()->with('success', 'Thank you for submitting the form. Our team will contact you.');
    }

    public function destroy($id)
    {
        Quote::findOrFail($id)->delete();
    }
}
