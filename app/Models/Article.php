<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category_id', 'author_id',
        'title', 'slug', 'excerpt', 'content',
        'image_couverture', 'meta_title', 'meta_description',
        'read_time', 'statut', 'published_at', 'vues',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'vues'         => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Expert::class, 'author_id');
    }
}