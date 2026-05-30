{{-- ============================================
     DÉTAIL PROJET — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
     Sans stickers ni icônes
============================================ --}}

@extends('frontend.layout.master')

@section('title', ($project->title ?? 'Projet') . ' — SORIBA SARL')
@section('meta_description', $project->description ?? 'Détails d\'un projet structurant accompagné par SORIBA SARL.')

@section('content')

{{-- ============================================
     HERO SECTION
============================================ --}}
<section class="relative pt-36 pb-12 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>

    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-8 flex-wrap">
            <a href="/" class="hover:text-amber-400 transition-colors">Accueil</a>
            <span class="text-gray-600">/</span>
            <a href="/projects" class="hover:text-amber-400 transition-colors">Projets</a>
            <span class="text-gray-600">/</span>
            <span class="text-amber-400">{{ $project->sector ?? 'Énergie' }}</span>
        </nav>

        {{-- Badge secteur --}}
        <div class="inline-flex items-center gap-2 px-4 py-1.5 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            <span class="text-amber-400 text-xs font-bold tracking-wider uppercase">{{ $project->sector ?? 'Énergie & Ressources naturelles' }}</span>
        </div>

        {{-- Titre --}}
        <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold leading-tight max-w-3xl mb-6">
            {{ $project->title ?? 'Parc éolien côtier — 200 MW d\'énergie renouvelable' }}
        </h1>

        {{-- Description --}}
        <p class="text-gray-400 text-lg leading-relaxed max-w-2xl">
            {{ $project->description ?? 'Structuration financière et accompagnement technique d\'un parc éolien côtier de grande envergure en Afrique de l\'Ouest, en partenariat avec des experts internationaux.' }}
        </p>
    </div>
</section>

{{-- ============================================
     CONTENU PRINCIPAL
============================================ --}}
<section class="py-12 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        {{-- KPIs --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 py-8 mb-8 border-t border-b border-gray-200">
            @php
            $kpis = [
                ['value' => '200 MW', 'label' => 'Capacité installée'],
                ['value' => '€180M', 'label' => "Volume d'investissement"],
                ['value' => '3 ans', 'label' => 'Durée du projet'],
                ['value' => '1 200', 'label' => 'Emplois créés'],
            ];
            @endphp
            @foreach($kpis as $kpi)
            <div class="text-center">
                <div class="text-2xl lg:text-3xl font-bold text-amber-500 mb-1">{{ $kpi['value'] }}</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider">{{ $kpi['label'] }}</div>
            </div>
            @endforeach
        </div>

        {{-- Cover image (placeholder sans icône) --}}
        <div class="relative rounded-2xl overflow-hidden mb-12 shadow-lg bg-gradient-to-br from-dark-blue to-medium-blue">
            <div class="relative h-80 lg:h-96 flex items-center justify-center">
                <div class="absolute inset-0 bg-amber-500/5"></div>
                <div class="text-center">
                    <div class="w-24 h-px bg-amber-500/50 mx-auto mb-4"></div>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">Projet structurant</p>
                    <p class="text-white text-xl font-light mt-2">{{ $project->title ?? 'Parc éolien côtier' }}</p>
                </div>
            </div>
            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">En cours — 65%</span>
            </div>
        </div>

        {{-- Layout 2 colonnes --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            {{-- Colonne gauche: Contenu principal --}}
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none prose-headings:text-dark-blue prose-p:text-gray-600 prose-strong:text-dark-blue">
                    
                    <h2 class="text-2xl font-bold text-dark-blue mt-0 mb-4">Présentation du projet</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Le projet de parc éolien côtier s'inscrit dans la stratégie nationale de transition énergétique et vise à diversifier le mix électrique du Sénégal en y intégrant une part significative d'énergie éolienne propre et renouvelable.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        SORIBA SARL intervient en tant qu'architecte financier et coordinateur stratégique, en mobilisant un consortium de partenaires techniques internationaux et en structurant les mécanismes de financement appropriés à l'environnement réglementaire local.
                    </p>

                    <div class="w-16 h-px bg-gradient-to-r from-amber-500 to-transparent my-8"></div>

                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Objectifs stratégiques</h2>
                    <ul class="list-none space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">-</span>
                            <span class="text-gray-600">Produire 200 MW d'électricité propre pour alimenter plus de 400 000 foyers</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">-</span>
                            <span class="text-gray-600">Réduire la dépendance aux hydrocarbures importés et alléger la facture énergétique nationale</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">-</span>
                            <span class="text-gray-600">Créer 1 200 emplois directs et indirects pendant la phase de construction</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">-</span>
                            <span class="text-gray-600">Développer les compétences locales en ingénierie éolienne et maintenance industrielle</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">-</span>
                            <span class="text-gray-600">Générer des recettes fiscales stables pour les collectivités locales concernées</span>
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Modèle de financement</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Le projet s'appuie sur un montage PPP hybride combinant capitaux publics (fonds propres de l'État), dette senior auprès d'institutions financières de développement (IFD), et capital privé international. La structuration garantit un équilibre optimal entre rendement pour les investisseurs et viabilité tarifaire pour les consommateurs finals.
                    </p>

                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Phasage du projet</h2>
                    <div class="space-y-6 mb-8">
                        @php
                        $timeline = [
                            ['num' => '01', 'phase' => 'Phase 1 — Terminée', 'title' => 'Études de faisabilité & ingénierie', 'desc' => 'Études de vent, d\'impact environnemental, de raccordement réseau et validation technique complète.'],
                            ['num' => '02', 'phase' => 'Phase 2 — En cours', 'title' => 'Structuration financière & permis', 'desc' => 'Montage du tour de table, obtention des autorisations administratives et signature des PPA.'],
                            ['num' => '03', 'phase' => 'Phase 3 — Planifiée', 'title' => 'Construction & installation', 'desc' => 'Génie civil, installation des éoliennes, raccordement réseau et mise en service progressive.'],
                            ['num' => '04', 'phase' => 'Phase 4 — Planifiée', 'title' => 'Exploitation & transfert', 'desc' => 'Exploitation commerciale, suivi des performances et transfert progressif vers les équipes locales.'],
                        ];
                        @endphp
                        @foreach($timeline as $item)
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-500/10 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                                <span class="text-amber-500 text-sm font-bold">{{ $item['num'] }}</span>
                            </div>
                            <div>
                                <p class="text-amber-500 text-xs font-bold uppercase tracking-wider">{{ $item['phase'] }}</p>
                                <h3 class="text-dark-blue font-bold text-lg mt-1">{{ $item['title'] }}</h3>
                                <p class="text-gray-600 text-sm mt-1">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            {{-- Colonne droite: Sidebar --}}
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    
                    {{-- Informations projet --}}
                    <div class="bg-light-blue rounded-2xl p-6">
                        <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Informations du projet</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Statut</span>
                                <span class="text-amber-500 text-sm font-semibold">En cours</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Secteur</span>
                                <span class="text-dark-blue text-sm font-medium">Énergie renouvelable</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Localisation</span>
                                <span class="text-dark-blue text-sm font-medium">Sénégal — Dakar & côte nord</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Démarrage</span>
                                <span class="text-dark-blue text-sm font-medium">Juin 2024</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Livraison prévue</span>
                                <span class="text-dark-blue text-sm font-medium">Décembre 2026</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Modèle</span>
                                <span class="text-dark-blue text-sm font-medium">PPP / BOT</span>
                            </div>
                        </div>
                        
                        {{-- Progression --}}
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex justify-between text-sm text-gray-600 mb-2">
                                <span>Avancement global</span>
                                <span class="text-amber-500 font-bold">65%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full w-[65%] bg-amber-500 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Partenaires --}}
                    <div class="bg-light-blue rounded-2xl p-6">
                        <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Partenaires</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-dark-blue font-medium text-sm">Gouvernement du Sénégal</p>
                                <p class="text-gray-500 text-xs">Partenaire institutionnel</p>
                                <div class="w-full h-px bg-gray-200 mt-2"></div>
                            </div>
                            <div>
                                <p class="text-dark-blue font-medium text-sm">Partenaire technique russe</p>
                                <p class="text-gray-500 text-xs">Ingénierie & équipements</p>
                                <div class="w-full h-px bg-gray-200 mt-2"></div>
                            </div>
                            <div>
                                <p class="text-dark-blue font-medium text-sm">SORIBA SARL</p>
                                <p class="text-gray-500 text-xs">Architecte financier & coordinateur</p>
                            </div>
                        </div>
                    </div>

                    {{-- CTA contact --}}
                    <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl p-6 text-center">
                        <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-2">Intéressé par ce projet ?</h3>
                        <p class="text-dark-blue/80 text-sm mb-4">Discutons de vos opportunités de participation ou de partenariat.</p>
                        <a href="/contact" class="inline-block w-full py-2.5 bg-dark-blue text-white font-semibold rounded-lg hover:bg-dark-blue/90 transition-colors">
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Back button --}}
        <div class="text-center pt-12 pb-8 border-t border-gray-200 mt-8">
            <a href="/projects" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-dark-blue text-dark-blue font-semibold rounded-full hover:bg-dark-blue hover:text-white transition-colors">
                Retour aux projets
            </a>
        </div>
    </div>
</section>

{{-- ============================================
     CTA SECTION
============================================ --}}
<section class="py-16 bg-dark-blue">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl font-bold text-white mb-4">
            Vous avez un projet similaire ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Contactez-nous pour discuter de la manière dont nous pouvons vous accompagner.
        </p>
        <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
            Discuter de mon projet
        </a>
    </div>
</section>

@endsection