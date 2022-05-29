<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'user_id', 'name', 'account_type', 'bank_name', 'sort_code', 'account_number'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($bank) {
            $bank->statements->each->delete();
        });
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function statements()
    {
        return $this->hasMany(Statement::class);
    }

    public function uploaded_statements()
    {
        return $this->hasMany(UploadedStatement::class);
    }
}
