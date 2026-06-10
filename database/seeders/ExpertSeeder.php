<?php

namespace Database\Seeders;

use App\Models\Expert;
use Illuminate\Database\Seeder;

class ExpertSeeder extends Seeder
{
    public function run(): void
    {
        $experts = [
            [
                'name'      => 'Souleymane DIALLO',
                'slug'      => 'souleymane-diallo',
                'role'      => 'Gérant & Fondateur',
                'initials'  => 'SD',
                'location'  => 'Sénégal — Tambacounda / Ouassadou',
                'bio'       => 'Agronome de formation et maire d\'Ouassadou, fondateur de SORIBA SARL.',
                'expertise' => ['Agronomie', 'Coopération internationale', 'PPP', 'Gouvernance locale'],
                'ordre'     => 1,
                'actif'     => true,
            ],
            [
                'name'      => 'Ricardo O. OKE',
                'slug'      => 'ricardo-oke',
                'role'      => 'Expert Technique — Mécatronique & Robotique',
                'initials'  => 'RO',
                'location'  => 'Russie — Moscou',
                'bio'       => 'Diplômé en mécatronique et robotique de Moscou.',
                'expertise' => ['Mécatronique', 'Robotique industrielle', 'R&D', 'Ingénierie des systèmes'],
                'ordre'     => 2,
                'actif'     => true,
            ],
            [
                'name'      => 'Franck K. BAMIGBOLA',
                'slug'      => 'franck-bamigbola',
                'role'      => 'Expert Commerce & Développement des Affaires',
                'initials'  => 'FB',
                'location'  => 'Russie — Krasnodar',
                'bio'       => 'Entrepreneur basé à Krasnodar, développe les partenariats stratégiques.',
                'expertise' => ['Commerce international', 'Stratégie d\'entreprise', 'Marchés africains', 'Négociation'],
                'ordre'     => 3,
                'actif'     => true,
            ],
        ];

        foreach ($experts as $data) {
            Expert::create($data);
        }
    }
}