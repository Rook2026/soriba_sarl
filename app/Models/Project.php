<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'service_id', 'title', 'slug', 'description',
        'description_complete', 'pays', 'ville', 'region',
        'statut', 'progression', 'date_debut', 'date_fin_prevue',
        'date_livraison', 'volume_investissement', 'modele_financement',
        'image_couverture', 'icone', 'couleur_bg',
        'kpis', 'phases', 'featured', 'ordre', 'actif',
    ];

    protected $casts = [
        'kpis'            => 'array',
        'phases'          => 'array',
        'featured'        => 'boolean',
        'actif'           => 'boolean',
        'date_debut'      => 'date',
        'date_fin_prevue' => 'date',
        'date_livraison'  => 'date',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}