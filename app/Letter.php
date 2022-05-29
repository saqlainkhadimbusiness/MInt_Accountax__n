<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($letter) {
        	Storage::delete($letter->file);
        });
    }

    protected $fillable = [
        'user_id', 'file'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
