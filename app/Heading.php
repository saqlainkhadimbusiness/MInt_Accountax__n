<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{
    protected $fillable = [
        'name'
    ];

    public function services()
    {
        return $this->hasMany(Service::class)->orderBy('rank');
    }
}
