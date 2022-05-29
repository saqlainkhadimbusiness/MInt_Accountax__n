<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
	protected $fillable = [
        'bank_id', 'date', 'type', 'details', 'payee', 'description', 'net', 'vat', 'total'
    ];

    public function account()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
