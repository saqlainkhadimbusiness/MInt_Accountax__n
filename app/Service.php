<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id', 'heading_id', 'slug', 'title', 'body', 'meta_description', 'meta_keywords', 'price', 'price1', 'price2', 'rank'
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

    public function heading()
    {
        return $this->belongsTo(Heading::class);
    }
}
