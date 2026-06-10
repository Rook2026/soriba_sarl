<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $svcEnergie = Service::where('slug', 'energie-ressources-naturelles')->first();
        $svcInfra   = Service::where('slug', 'infrastructures-construction')->first();
        $svcAgro    = Service::where('slug', 'agriculture-agro-industrie')->first();
        $svcSante   = Service::where('slug', 'sante-medical')->first();
        $svcDigital = Service::where('slug', 'commerce-digital')->first();
        $svcEduc    = Service::where('slug', 'education-formation')->first();

        $projects = [
            [
                'service_id'            => $svcEnergie->id,
                'title'                 => "Parc éolien côtier — 200 MW d'énergie renouvelable",
                'slug'                  => 'parc-eolien-cotier-200mw',
                'description'           => "Structuration financière d'un parc éolien côtier en Afrique de l'Ouest.",
                'pays'                  => 'Sénégal',
                'ville'                 => 'Dakar',
                'statut'                => 'en_cours',
                'progression'           => 65,
                'date_debut'            => '2024-06-01',
                'date_fin_prevue'       => '2026-12-31',
                'volume_investissement' => '€180M',
                'modele_financement'    => 'PPP / BOT',
                'icone'                 => 'heroicon-o-bolt',
                'kpis'                  => [
                    ['label' => 'Capacité', 'value' => '200 MW'],
                    ['label' => 'Investissement', 'value' => '€180M'],
                    ['label' => 'Emplois', 'value' => '1 200'],
                ],
                'featured' => true,
                'ordre'    => 1,
                'actif'    => true,
            ],
            [
                'service_id'            => $svcInfra->id,
                'title'                 => "Modernisation du réseau routier inter-régional",
                'slug'                  => 'modernisation-reseau-routier',
                'description'           => "Réhabilitation de 340 km d'axes stratégiques.",
                'pays'                  => 'Sénégal',
                'ville'                 => 'Tambacounda',
                'statut'                => 'realise',
                'progression'           => 100,
                'volume_investissement' => '€95M',
                'modele_financement'    => 'PPP / Concession',
                'icone'                 => 'heroicon-o-building-office',
                'kpis'                  => [
                    ['label' => 'Linéaire', 'value' => '340 km'],
                    ['label' => 'Investissement', 'value' => '€95M'],
                ],
                'featured' => false,
                'ordre'    => 2,
                'actif'    => true,
            ],
            [
                'service_id'            => $svcAgro->id,
                'title'                 => "Zone agro-industrielle intégrée — Ouassadou",
                'slug'                  => 'zone-agro-industrielle-ouassadou',
                'description'           => "Plateforme agro-industrielle avec transformation locale et export.",
                'pays'                  => 'Sénégal',
                'ville'                 => 'Ouassadou',
                'statut'                => 'en_cours',
                'progression'           => 40,
                'volume_investissement' => '€42M',
                'modele_financement'    => 'PPP mixte',
                'icone'                 => 'heroicon-o-sun',
                'kpis'                  => [
                    ['label' => 'Superficie', 'value' => '5 000 ha'],
                    ['label' => 'Agriculteurs', 'value' => '2 000'],
                ],
                'featured' => false,
                'ordre'    => 3,
                'actif'    => true,
            ],
            [
                'service_id'            => $svcSante->id,
                'title'                 => "Hôpital de référence internationale — Dakar",
                'slug'                  => 'hopital-reference-dakar',
                'description'           => "Construction d'un hôpital de référence avec équipements de pointe.",
                'pays'                  => 'Sénégal',
                'ville'                 => 'Dakar',
                'statut'                => 'planification',
                'progression'           => 15,
                'volume_investissement' => '€120M',
                'modele_financement'    => 'PPP / DBFOT',
                'icone'                 => 'heroicon-o-heart',
                'kpis'                  => [
                    ['label' => 'Lits', 'value' => '500'],
                    ['label' => 'Investissement', 'value' => '€120M'],
                ],
                'featured' => false,
                'ordre'    => 4,
                'actif'    => true,
            ],
            [
                'service_id'            => $svcDigital->id,
                'title'                 => "Plateforme e-commerce transfrontalière",
                'slug'                  => 'plateforme-ecommerce-transfrontaliere',
                'description'           => "Solution e-commerce multi-pays avec paiements mobiles.",
                'pays'                  => 'Sénégal',
                'ville'                 => 'Dakar',
                'statut'                => 'realise',
                'progression'           => 100,
                'volume_investissement' => '€3.5M',
                'modele_financement'    => 'Capital privé',
                'icone'                 => 'heroicon-o-computer-desktop',
                'kpis'                  => [
                    ['label' => 'Pays', 'value' => '3'],
                    ['label' => 'Marchands', 'value' => '2 400'],
                ],
                'featured' => false,
                'ordre'    => 5,
                'actif'    => true,
            ],
            [
                'service_id'            => $svcEduc->id,
                'title'                 => "Centre d'excellence technologique — Dakar",
                'slug'                  => 'centre-excellence-technologique-dakar',
                'description'           => "Centre de formation en mécatronique et robotique.",
                'pays'                  => 'Sénégal',
                'ville'                 => 'Dakar',
                'statut'                => 'planification',
                'progression'           => 10,
                'volume_investissement' => '€18M',
                'modele_financement'    => 'PPP / Accord bilatéral',
                'icone'                 => 'heroicon-o-academic-cap',
                'kpis'                  => [
                    ['label' => 'Ingénieurs/an', 'value' => '500'],
                    ['label' => 'Filières', 'value' => '4'],
                ],
                'featured' => false,
                'ordre'    => 6,
                'actif'    => true,
            ],
        ];

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}