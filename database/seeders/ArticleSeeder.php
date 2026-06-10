<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Expert;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $diallo = Expert::where('slug', 'souleymane-diallo')->first();
        $oke    = Expert::where('slug', 'ricardo-oke')->first();
        $bamig  = Expert::where('slug', 'franck-bamigbola')->first();

        $catCoop  = Category::where('slug', 'cooperation-internationale')->first();
        $catEner  = Category::where('slug', 'energie')->first();
        $catInfra = Category::where('slug', 'infrastructures')->first();
        $catAgro  = Category::where('slug', 'agriculture')->first();
        $catSante = Category::where('slug', 'sante')->first();
        $catInno  = Category::where('slug', 'innovation')->first();

        $articles = [
            [
                'category_id'  => $catCoop->id,
                'author_id'    => $diallo->id,
                'title'        => "L'Afrique à l'horizon 2030 : nouvelles dynamiques des partenariats stratégiques",
                'slug'         => 'afrique-horizon-2030-partenariats-strategiques',
                'excerpt'      => "Le continent africain connaît une transformation profonde de ses modèles de coopération internationale.",
                'content'      => "<p>Le continent africain traverse une période charnière de son histoire économique.</p>",
                'read_time'    => 8,
                'statut'       => 'publie',
                'published_at' => '2025-01-15 09:00:00',
                'vues'         => 342,
            ],
            [
                'category_id'  => $catEner->id,
                'author_id'    => $oke->id,
                'title'        => "Transition énergétique : les opportunités pour les investisseurs en Afrique subsaharienne",
                'slug'         => 'transition-energetique-opportunites-afrique',
                'excerpt'      => "Les énergies renouvelables représentent un marché colossal encore sous-exploité sur le continent.",
                'content'      => "<p>L'Afrique subsaharienne dispose d'un potentiel solaire et éolien parmi les plus importants au monde.</p>",
                'read_time'    => 5,
                'statut'       => 'publie',
                'published_at' => '2025-01-08 09:00:00',
                'vues'         => 218,
            ],
            [
                'category_id'  => $catInfra->id,
                'author_id'    => $diallo->id,
                'title'        => "PPP & infrastructures : modèles gagnants pour le financement de projets structurants",
                'slug'         => 'ppp-infrastructures-modeles-financement',
                'excerpt'      => "Comment les PPP révolutionnent le financement des grandes infrastructures africaines.",
                'content'      => "<p>Le déficit infrastructurel africain est estimé à 100 milliards de dollars par an.</p>",
                'read_time'    => 6,
                'statut'       => 'publie',
                'published_at' => '2025-01-02 09:00:00',
                'vues'         => 187,
            ],
            [
                'category_id'  => $catAgro->id,
                'author_id'    => $diallo->id,
                'title'        => "Agro-industrie sénégalaise : vers une souveraineté alimentaire durable",
                'slug'         => 'agro-industrie-senegalaise-souverainete-alimentaire',
                'excerpt'      => "Le Sénégal accélère sa transformation agro-industrielle.",
                'content'      => "<p>Le Sénégal ambitionne d'atteindre la souveraineté alimentaire à l'horizon 2030.</p>",
                'read_time'    => 4,
                'statut'       => 'publie',
                'published_at' => '2024-12-20 09:00:00',
                'vues'         => 156,
            ],
            [
                'category_id'  => $catSante->id,
                'author_id'    => $oke->id,
                'title'        => "Santé en Afrique : mobiliser les investissements pour des soins accessibles",
                'slug'         => 'sante-afrique-investissements-soins-accessibles',
                'excerpt'      => "Des équipements médicaux de pointe aux hôpitaux internationaux.",
                'content'      => "<p>Le secteur de la santé en Afrique subsaharienne est à la croisée des chemins.</p>",
                'read_time'    => 5,
                'statut'       => 'publie',
                'published_at' => '2024-12-12 09:00:00',
                'vues'         => 134,
            ],
            [
                'category_id'  => $catInno->id,
                'author_id'    => $bamig->id,
                'title'        => "Solutions digitales et fintech : la révolution silencieuse de l'Afrique",
                'slug'         => 'solutions-digitales-fintech-revolution-afrique',
                'excerpt'      => "L'Afrique s'impose comme un laboratoire mondial d'innovation digitale.",
                'content'      => "<p>Une révolution digitale silencieuse mais profonde se déroule sur le continent africain.</p>",
                'read_time'    => 7,
                'statut'       => 'publie',
                'published_at' => '2024-12-05 09:00:00',
                'vues'         => 298,
            ],
        ];

        foreach ($articles as $data) {
            Article::create($data);
        }
    }
}