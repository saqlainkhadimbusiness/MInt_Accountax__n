<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            $category->articles->each->delete();
        });
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
