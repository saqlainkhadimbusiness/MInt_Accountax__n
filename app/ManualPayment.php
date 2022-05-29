<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManualPayment extends Model
{
    protected $fillable = [
        'image', 'title', 'body'
    ];
}
