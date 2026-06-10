<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    public function run(): void
    {
        $stats = [
            ['valeur' => '24+',  'label' => 'Projets accompagnés',    'section' => 'home',     'ordre' => 1],
            ['valeur' => '9',    'label' => "Secteurs d'expertise",   'section' => 'home',     'ordre' => 2],
            ['valeur' => '12',   'label' => 'Pays partenaires',       'section' => 'home',     'ordre' => 3],
            ['valeur' => '€2B+', 'label' => 'Volume structuré',       'section' => 'home',     'ordre' => 4],
            ['valeur' => '10+',  'label' => "Années d'expérience",    'section' => 'about',    'ordre' => 1],
            ['valeur' => '3',    'label' => 'Experts dédiés',         'section' => 'about',    'ordre' => 2],
            ['valeur' => '100%', 'label' => 'Engagement résultats',   'section' => 'about',    'ordre' => 3],
            ['valeur' => '24+',  'label' => 'Projets accompagnés',    'section' => 'projects', 'ordre' => 1],
            ['valeur' => '9',    'label' => "Secteurs d'intervention",'section' => 'projects', 'ordre' => 2],
            ['valeur' => '12',   'label' => 'Pays partenaires',       'section' => 'projects', 'ordre' => 3],
            ['valeur' => '€2B+', 'label' => 'Volume structuré',       'section' => 'projects', 'ordre' => 4],
        ];

        foreach ($stats as $data) {
            Stat::create(array_merge($data, ['actif' => true]));
        }
    }
}