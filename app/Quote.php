<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
    	'name', 'turnover', 'email', 'vat_returns', 'number', 'payroll', 'business_type', 'bookkeeping', 'employees', 'transactions', 'partners', 'dormant', 'not_trading'
    ];
}
