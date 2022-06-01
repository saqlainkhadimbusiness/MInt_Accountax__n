<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header_Code extends Model
{
    protected $table='header_codes';
    protected $fillable=['slug','header_code','group_id'];
}
