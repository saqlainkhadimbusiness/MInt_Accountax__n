<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'slug', 'title', 'body', 'meta_description', 'meta_keywords'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($sector) {
            if (static::whereSlug($slug = str_slug($sector->title))->exists())
                $slug = "{$slug}-{$sector->id}";

            $sector->update(['slug' => $slug]);
        });
    }
}
