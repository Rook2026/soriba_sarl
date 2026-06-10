<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'slug', 'icon', 'couleur_bg',
        'description', 'description_complete',
        'points_cles', 'ordre', 'actif',
    ];

    protected $casts = [
        'points_cles' => 'array',
        'actif'       => 'boolean',
    ];
}