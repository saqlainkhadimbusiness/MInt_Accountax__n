<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $fillable = [
        'category_id', 'slug', 'title', 'body', 'image', 'meta_description', 'meta_keywords','image_alt',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($article) {
            if (static::whereSlug($slug = str_slug($article->title))->exists())
                $slug = "{$slug}-{$article->id}";

            $article->update(['slug' => $slug]);
        });

        static::deleting(function ($article) {
        	Storage::delete($article->image);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
