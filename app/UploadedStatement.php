<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class UploadedStatement extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($uploaded_statement) {
        	Storage::delete($uploaded_statement->path);
        });
    }

    protected $fillable = [
        'bank_id', 'path'
    ];

    public function account()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
