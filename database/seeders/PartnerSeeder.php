<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            ['nom' => 'Gouvernement du Sénégal',         'type' => 'Partenaire institutionnel', 'pays' => 'Sénégal', 'drapeau' => '🇸🇳'],
            ['nom' => 'Partenaire technique russe',       'type' => 'Ingénierie & équipements',  'pays' => 'Russie',  'drapeau' => '🇷🇺'],
            ['nom' => 'Fonds d\'investissement africain', 'type' => 'Financeur',                 'pays' => 'Afrique', 'drapeau' => '🌍'],
            ['nom' => 'Union Européenne',                 'type' => 'Organisme international',   'pays' => 'Europe',  'drapeau' => '🇪🇺'],
            ['nom' => 'Banque Mondiale',                  'type' => 'Institution financière',    'pays' => 'USA',     'drapeau' => '🏦'],
            ['nom' => 'Partenaire agro-industriel russe', 'type' => 'Partenaire technique',      'pays' => 'Russie',  'drapeau' => '🇷🇺'],
            ['nom' => 'Ministère de la Santé SN',         'type' => 'Partenaire institutionnel', 'pays' => 'Sénégal', 'drapeau' => '🇸🇳'],
            ['nom' => 'Université polytechnique Moscou',  'type' => 'Partenaire académique',     'pays' => 'Russie',  'drapeau' => '🇷🇺'],
        ];

        foreach ($partners as $data) {
            Partner::create($data);
        }
    }
}