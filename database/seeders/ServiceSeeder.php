<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title'       => 'Énergie & Ressources naturelles',
                'slug'        => 'energie-ressources-naturelles',
                'icon'        => 'heroicon-o-bolt',
                'description' => 'Structuration de projets énergétiques et valorisation des ressources naturelles africaines.',
                'points_cles' => ['Structuration financière', 'Partenariats équipements', 'Transition énergétique'],
                'ordre'       => 1,
                'actif'       => true,
            ],
            [
                'title'       => 'Infrastructures & Construction',
                'slug'        => 'infrastructures-construction',
                'icon'        => 'heroicon-o-building-office',
                'description' => 'Ingénierie financière et accompagnement de projets de construction.',
                'points_cles' => ['Montage PPP', 'Coordination', 'Gestion contractuelle'],
                'ordre'       => 2,
                'actif'       => true,
            ],
            [
                'title'       => 'Agriculture & Agro-industrie',
                'slug'        => 'agriculture-agro-industrie',
                'icon'        => 'heroicon-o-sun',
                'description' => 'Développement de chaînes de valeur agricoles et zones agro-industrielles.',
                'points_cles' => ['Zones agro-industrielles', 'Chaînes de valeur', 'Export'],
                'ordre'       => 3,
                'actif'       => true,
            ],
            [
                'title'       => 'Santé & Médical',
                'slug'        => 'sante-medical',
                'icon'        => 'heroicon-o-heart',
                'description' => 'Importation d\'équipements médicaux de pointe et structuration d\'hôpitaux.',
                'points_cles' => ['Équipements médicaux', 'PPP hôpitaux', 'Formation'],
                'ordre'       => 4,
                'actif'       => true,
            ],
            [
                'title'       => 'Éducation & Formation',
                'slug'        => 'education-formation',
                'icon'        => 'heroicon-o-academic-cap',
                'description' => 'Création de centres d\'excellence et programmes de transfert de compétences.',
                'points_cles' => ['Partenariats universités', 'Centres de formation', 'Bourses'],
                'ordre'       => 5,
                'actif'       => true,
            ],
            [
                'title'       => 'Commerce & Solutions digitales',
                'slug'        => 'commerce-digital',
                'icon'        => 'heroicon-o-computer-desktop',
                'description' => 'Plateformes e-commerce, solutions fintech et transformation digitale.',
                'points_cles' => ['E-commerce', 'Fintech', 'Digitalisation'],
                'ordre'       => 6,
                'actif'       => true,
            ],
            [
                'title'       => 'Coopération internationale',
                'slug'        => 'cooperation-internationale',
                'icon'        => 'heroicon-o-globe-alt',
                'description' => 'Facilitation de partenariats stratégiques bilatéraux et multilatéraux.',
                'points_cles' => ['Accords bilatéraux', 'Missions économiques', 'Mise en relation'],
                'ordre'       => 7,
                'actif'       => true,
            ],
            [
                'title'       => 'Partenariats Public-Privé',
                'slug'        => 'partenariats-public-prive',
                'icon'        => 'heroicon-o-building-library',
                'description' => 'Montage, structuration et suivi de PPP dans les secteurs stratégiques.',
                'points_cles' => ['BOT/BOOT/Concession', 'Cahiers des charges', 'Supervision'],
                'ordre'       => 8,
                'actif'       => true,
            ],
            [
                'title'       => 'Conseil stratégique',
                'slug'        => 'conseil-strategique',
                'icon'        => 'heroicon-o-chart-bar',
                'description' => 'Accompagnement stratégique des décideurs et investisseurs.',
                'points_cles' => ['Analyse de marchés', 'Évaluation des risques', 'Stratégie'],
                'ordre'       => 9,
                'actif'       => true,
            ],
        ];

        foreach ($services as $data) {
            Service::create($data);
        }
    }
}