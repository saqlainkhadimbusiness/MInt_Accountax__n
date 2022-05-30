<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['person_name','company_name','position_in_company','review_message'];
    protected $primaryKey = 'review_id';
    //
}
