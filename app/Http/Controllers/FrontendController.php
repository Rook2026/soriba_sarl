<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // ─────────────────────────────────────────────────────────────
    // PAGES PRINCIPALES
    // ─────────────────────────────────────────────────────────────

    // public function welcome()
    // {
    //     return view('home');
    // }

    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

     public function partners()
    {
        return view('frontend.partners');
    }

    public function contactSend(Request $request)
    {
        $request->validate([
            'first_name'   => 'required|string|max:100',
            'last_name'    => 'required|string|max:100',
            'email'        => 'required|email|max:255',
            'organisation' => 'nullable|string|max:255',
            'secteur'      => 'nullable|string|max:100',
            'message'      => 'required|string|min:10|max:5000',
        ]);

        // TODO : envoyer un mail avec Mail::to(...)->send(...)
        // ou stocker en base : Contact::create($request->validated());

        return redirect()->route('contact')
            ->with('success', 'Votre message a bien été envoyé. Nous vous répondrons sous 48h.');
    }

    // ─────────────────────────────────────────────────────────────
    // SERVICES
    // ─────────────────────────────────────────────────────────────

    public function services()
    {
        return view('frontend.services.services');
    }

    public function serviceShow($slug)
    {
        // Données statiques des services — à remplacer par un modèle DB si besoin
        $services = [
            'energie-ressources-naturelles' => [
                'title'       => 'Énergie & Ressources naturelles',
                'description' => 'Structuration de projets énergétiques et valorisation des ressources naturelles africaines.',
                'icon'        => '⚡',
            ],
            'infrastructures-construction' => [
                'title'       => 'Infrastructures & Construction',
                'description' => 'Ingénierie financière et accompagnement de projets de construction d\'infrastructures stratégiques.',
                'icon'        => '🏗️',
            ],
            'agriculture-agro-industrie' => [
                'title'       => 'Agriculture & Agro-industrie',
                'description' => 'Développement de chaînes de valeur agricoles et de zones agro-industrielles intégrées.',
                'icon'        => '🌾',
            ],
            'sante-medical' => [
                'title'       => 'Santé & Médical',
                'description' => 'Importation d\'équipements médicaux de pointe et structuration d\'établissements de santé.',
                'icon'        => '💊',
            ],
            'education-formation' => [
                'title'       => 'Éducation & Formation',
                'description' => 'Création de centres d\'excellence et programmes de transfert de compétences internationaux.',
                'icon'        => '🎓',
            ],
            'commerce-digital' => [
                'title'       => 'Commerce & Solutions digitales',
                'description' => 'Plateformes e-commerce, solutions fintech et transformation digitale des entreprises africaines.',
                'icon'        => '💡',
            ],
            'cooperation-internationale' => [
                'title'       => 'Coopération internationale',
                'description' => 'Facilitation de partenariats stratégiques bilatéraux et multilatéraux pour le développement.',
                'icon'        => '🤝',
            ],
            'partenariats-public-prive' => [
                'title'       => 'Partenariats Public-Privé',
                'description' => 'Montage, structuration et suivi de PPP dans les secteurs stratégiques de l\'économie africaine.',
                'icon'        => '🏛️',
            ],
            'conseil-strategique' => [
                'title'       => 'Conseil stratégique',
                'description' => 'Accompagnement stratégique des décideurs, investisseurs et institutions dans leurs projets africains.',
                'icon'        => '📊',
            ],
        ];

        if (!array_key_exists($slug, $services)) {
            abort(404);
        }

        $service = (object) array_merge($services[$slug], ['slug' => $slug]);

        return view('frontend.services.details', compact('service'));
    }

    // ─────────────────────────────────────────────────────────────
    // EXPERTS
    // ─────────────────────────────────────────────────────────────

    public function experts()
    {
        return view('frontend.experts.experts');
    }

    public function expertShow($slug)
    {
        $experts = [
            'souleymane-diallo' => [
                'name'        => 'Souleymane DIALLO',
                'role'        => 'Gérant & Fondateur',
                'initials'    => 'SD',
                'location'    => 'Sénégal — Tambacounda / Ouassadou',
                'expertise'   => ['Agronomie', 'Coopération internationale', 'PPP', 'Gouvernance locale'],
                'bio'         => 'Agronome de formation, maire d\'Ouassadou et fondateur de SORIBA SARL, Souleymane DIALLO incarne la vision d\'une Afrique souveraine, connectée et développée par ses propres fils.',
            ],
            'ricardo-oke' => [
                'name'        => 'Ricardo O. OKE',
                'role'        => 'Expert Technique — Mécatronique & Robotique',
                'initials'    => 'RO',
                'location'    => 'Russie — Moscou',
                'expertise'   => ['Mécatronique', 'Robotique industrielle', 'Ingénierie des systèmes', 'R&D'],
                'bio'         => 'Diplômé en mécatronique et robotique de Moscou, Ricardo O. OKE apporte l\'expertise technique de haut niveau nécessaire aux projets d\'infrastructure industrielle et énergétique de SORIBA SARL.',
            ],
            'franck-bamigbola' => [
                'name'        => 'Franck K. BAMIGBOLA',
                'role'        => 'Expert Commerce & Développement des Affaires',
                'initials'    => 'FB',
                'location'    => 'Russie — Krasnodar',
                'expertise'   => ['Commerce international', 'Développement des affaires', 'Stratégie d\'entreprise', 'Marchés africains'],
                'bio'         => 'Entrepreneur basé à Krasnodar, Franck K. BAMIGBOLA est le moteur commercial de SORIBA SARL, développant les partenariats stratégiques entre la Russie, l\'Europe et l\'Afrique.',
            ],
        ];

        if (!array_key_exists($slug, $experts)) {
            abort(404);
        }

        $expert = (object) array_merge($experts[$slug], ['slug' => $slug]);

        return view('frontend.experts.details', compact('expert'));
    }

    // ─────────────────────────────────────────────────────────────
    // BLOG
    // ─────────────────────────────────────────────────────────────

    public function blog()
    {
        // TODO : récupérer les articles depuis la base de données
        // $articles = Article::published()->latest()->paginate(9);
        return view('frontend.blogs.blog');
    }

    public function blogShow($id)
    {
        // TODO : $article = Article::findOrFail($id);
        // Données fictives pour la démonstration
        $article = (object) [
            'id'           => $id,
            'title'        => "L'Afrique à l'horizon 2030 : nouvelles dynamiques des partenariats stratégiques",
            'category'     => 'Coopération internationale',
            'excerpt'      => "Le continent africain connaît une transformation profonde de ses modèles de coopération internationale.",
            'author'       => 'Souleymane DIALLO',
            'published_at' => '15 Janvier 2025',
            'read_time'    => '8',
        ];

        return view('frontend.blogs.details', compact('article'));
    }

    // ─────────────────────────────────────────────────────────────
    // PROJETS
    // ─────────────────────────────────────────────────────────────

    public function projects()
    {
        // TODO : $projects = Project::latest()->get();
        return view('frontend.projects.projects');
    }

    public function projectShow($id)
    {
        // TODO : $project = Project::findOrFail($id);
        $project = (object) [
            'id'          => $id,
            'title'       => "Parc éolien côtier — 200 MW d'énergie renouvelable",
            'sector'      => 'Énergie & Ressources naturelles',
            'description' => "Structuration financière et accompagnement technique d'un parc éolien côtier en Afrique de l'Ouest.",
            'status'      => 'ongoing',
            'progress'    => 65,
            'location'    => 'Sénégal — Dakar',
        ];

        return view('frontend.projects.details', compact('project'));
    }

    // ─────────────────────────────────────────────────────────────
    // PAGES LÉGALES
    // ─────────────────────────────────────────────────────────────

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function termsConditions()
    {
        return view('frontend.terms_conditions');
    }
}