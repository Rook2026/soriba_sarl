{{-- ============================================
     PROFIL EXPERT — SORIBA SARL
     Design identique à l'accueil
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
============================================ --}}

@extends('frontend.layout.master')

@section('title', ($expert->name ?? 'Profil Expert') . ' — SORIBA SARL')
@section('meta_description', ($expert->bio ?? 'Découvrez le profil de notre expert en coopération internationale et développement en Afrique.'))

@section('content')

{{-- ============================================
     HERO SECTION
============================================ --}}
<section class="relative pt-36 pb-16 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    {{-- Éléments décoratifs --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
    </div>

    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        
        {{-- Back button --}}
        <a href="{{ route('experts.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-amber-400 transition-colors mb-8 group">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Retour aux experts
        </a>

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-6 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Accueil</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('experts.index') }}" class="hover:text-amber-400 transition-colors">Experts</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-amber-400">{{ $expert->name ?? 'Profil Expert' }}</span>
        </nav>

        {{-- Titre --}}
        <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
            Profil de <span class="text-amber-400">l'expert</span>
        </h1>
    </div>
</section>

{{-- ============================================
     EXPERT PROFILE CONTENT
============================================ --}}
<section class="py-16 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            {{-- Colonne gauche: Photo et infos --}}
            <div class="lg:col-span-1">
                {{-- Avatar --}}
                <div class="bg-light-blue rounded-2xl p-8 text-center mb-6">
                    <div class="w-40 h-40 rounded-full bg-gradient-to-br from-dark-blue to-medium-blue flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <span class="text-amber-400 text-5xl font-bold">
                            {{ substr($expert->name ?? 'Souleymane DIALLO', 0, 2) }}
                        </span>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-dark-blue mb-2">{{ $expert->name ?? 'Souleymane DIALLO' }}</h2>
                    <p class="text-amber-500 font-medium mb-4">{{ $expert->role ?? 'Gérant & Directeur Général' }}</p>
                    
                    {{-- Separator --}}
                    <div class="w-12 h-px bg-gradient-to-r from-amber-500 to-transparent mx-auto my-4"></div>
                    
                    {{-- Localisation --}}
                    <div class="flex items-center justify-center gap-2 text-gray-500 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>{{ $expert->location ?? 'Dakar, Sénégal' }}</span>
                    </div>
                </div>

                {{-- Contact card --}}
                <div class="bg-dark-blue rounded-2xl p-6 text-white mb-6">
                    <h3 class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-4">Contact direct</h3>
                    <div class="space-y-3">
                        <a href="mailto:{{ $expert->email ?? 'contact@soriba-sarl.com' }}" class="flex items-center gap-3 text-gray-300 hover:text-amber-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert->email ?? 'contact@soriba-sarl.com' }}</span>
                        </a>
                        <a href="tel:{{ $expert->phone ?? '+221781792510' }}" class="flex items-center gap-3 text-gray-300 hover:text-amber-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert->phone ?? '+221 78 179 25 10' }}</span>
                        </a>
                    </div>
                </div>

                {{-- Compétences --}}
                <div class="bg-light-blue rounded-2xl p-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Compétences clés</h3>
                    <div class="flex flex-wrap gap-2">
                        @php
                        $skills = $expert->skills ?? ['Coopération internationale', 'Montage PPP', 'Financement de projets', 'Négociation', 'Développement stratégique', 'Gestion de risques'];
                        @endphp
                        @foreach($skills as $skill)
                        <span class="px-3 py-1.5 bg-white rounded-full text-dark-blue text-xs font-medium border border-gray-200">
                            {{ $skill }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Réseaux sociaux --}}
                <div class="bg-light-blue rounded-2xl p-6 mt-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Suivre</h3>
                    <div class="flex gap-3">
                        <a href="{{ $expert->linkedin ?? '#' }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                        </a>
                        <a href="{{ $expert->twitter ?? '#' }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                            </svg>
                        </a>
                        <a href="{{ $expert->email ?? '#' }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Colonne droite: Bio détaillée --}}
            <div class="lg:col-span-2">
                {{-- Bio --}}
                <div class="prose prose-lg max-w-none prose-headings:text-dark-blue prose-p:text-gray-600 prose-strong:text-dark-blue mb-8">
                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Biographie</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ $expert->bio ?? "Souleymane DIALLO est un expert reconnu en coopération internationale et en développement des partenariats public-privé en Afrique. Fort de plus de 15 ans d'expérience dans les secteurs stratégiques, il a accompagné de nombreux gouvernements et institutions dans la structuration de projets d'envergure continentale." }}
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ $expert->bio_2 ?? "Ingénieur agronome de formation, il a commencé sa carrière dans le secteur agricole avant de s'orienter vers le conseil stratégique et le montage de PPP. Son expertise couvre l'ensemble des chaînes de valeur, de la production à la commercialisation, en passant par la transformation industrielle." }}
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ $expert->bio_3 ?? "Parallèlement à ses fonctions chez SORIBA SARL, Souleymane DIALLO est Maire de la commune de Ouassadou, où il met en œuvre une vision innovante du développement territorial, axée sur les infrastructures, l'éducation et l'agriculture durable." }}
                    </p>
                </div>

                {{-- Parcours / Formation --}}
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Parcours & Formation</h2>
                    <div class="space-y-6">
                        @php
                        $educations = $expert->educations ?? [
                            ['year' => '2008', 'title' => 'Ingénieur Agronome', 'institution' => 'École Nationale d\'Agriculture, Sénégal'],
                            ['year' => '2012', 'title' => 'Master en Gestion des Projets', 'institution' => 'Université Cheikh Anta Diop, Dakar'],
                            ['year' => '2015', 'title' => 'Certification en Montage de PPP', 'institution' => 'Institut de la Finance Internationale, Paris'],
                        ];
                        @endphp
                        @foreach($educations as $edu)
                        <div class="flex gap-4">
                            <div class="w-20 flex-shrink-0">
                                <span class="text-amber-500 font-bold">{{ $edu['year'] }}</span>
                            </div>
                            <div>
                                <h3 class="text-dark-blue font-bold text-lg">{{ $edu['title'] }}</h3>
                                <p class="text-gray-500">{{ $edu['institution'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Expériences clés --}}
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Expériences clés</h2>
                    <div class="space-y-6">
                        @php
                        $experiences = $expert->experiences ?? [
                            ['year' => '2020 - Aujourd\'hui', 'title' => 'Gérant & Directeur Général', 'company' => 'SORIBA SARL', 'desc' => 'Direction stratégique et développement des partenariats internationaux.'],
                            ['year' => '2015 - 2020', 'title' => 'Consultant Senior', 'company' => 'Cabinet Stratégies Afrique', 'desc' => 'Accompagnement des gouvernements dans le montage de PPP infrastructurels.'],
                            ['year' => '2010 - 2015', 'title' => 'Responsable Développement', 'company' => 'AgriDev Sénégal', 'desc' => 'Développement de projets agro-industriels et structuration de filières.'],
                        ];
                        @endphp
                        @foreach($experiences as $exp)
                        <div class="border-l-2 border-amber-500 pl-5">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-dark-blue font-bold text-lg">{{ $exp['title'] }}</h3>
                                <span class="text-amber-500 text-sm font-medium">{{ $exp['year'] }}</span>
                            </div>
                            <p class="text-gray-500 text-sm mb-2">{{ $exp['company'] }}</p>
                            <p class="text-gray-600 text-sm">{{ $exp['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Réalisations --}}
                <div class="bg-light-blue rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-dark-blue mb-4">Réalisations majeures</h2>
                    <ul class="space-y-3">
                        @php
                        $achievements = $expert->achievements ?? [
                            'Montage de plus de 500 M€ de projets PPP en Afrique de l\'Ouest',
                            'Accompagnement de 15+ gouvernements dans leur stratégie de coopération internationale',
                            'Lauréat du Prix Africain du Leadership Économique 2022',
                            'Création de 3 incubateurs agricoles pour jeunes entrepreneurs',
                        ];
                        @endphp
                        @foreach($achievements as $achievement)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">{{ $achievement }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Bouton contact --}}
                <div class="mt-8 text-center">
                    <a href="{{ route('contact.show') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
                        Contacter cet expert
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
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
            Vous souhaitez échanger avec nos experts ?
            <br>
            <span class="text-amber-500">Contactez-nous.</span>
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est à votre disposition pour étudier vos projets et opportunités.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact.show') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Planifier un échange
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            <a href="tel:+221781792510" class="inline-flex items-center gap-2 px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-full hover:bg-amber-500/10 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                +221 78 179 25 10
            </a>
        </div>
    </div>
</section>

@endsection