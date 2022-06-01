<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keywords_group extends Model
{
    protected $table='keywords_groups';
    protected $fillable=['name'];
    protected $primaryKey = 'id';

}
