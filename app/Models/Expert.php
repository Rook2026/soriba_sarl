<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = [
        'name', 'slug', 'role', 'initials', 'location',
        'photo', 'bio', 'bio_full', 'expertise',
        'email', 'linkedin', 'twitter',
        'ordre', 'actif','reseaux_sociaux',
    ];

    protected $casts = [
        'expertise' => 'array',
        'actif'     => 'boolean',
        'reseaux_sociaux' => 'array',
    ];
}