{{-- ============================================
     PROFIL EXPERT — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'Profil Expert — SORIBA SARL')
@section('meta_description', 'Découvrez le profil de nos experts en coopération internationale et développement en Afrique.')

@section('content')

{{-- ============================================
     HERO SECTION
============================================ --}}
<section class="relative pt-36 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>

    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-12">
        
        {{-- Lien retour --}}
        <a href="/experts" class="inline-flex items-center gap-2 text-gray-400 hover:text-amber-400 transition-colors mb-8 group">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Retour aux experts
        </a>
        
        <div class="text-center">
            <div class="inline-block mb-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-amber-400 text-xs tracking-wider font-medium">PROFIL</span>
                </div>
            </div>
            
            <h1 class="text-white text-4xl lg:text-5xl font-bold leading-tight mb-4">
                Profil de <span class="text-amber-400">l'expert</span>
            </h1>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
        </div>
    </div>
</section>

{{-- ============================================
     EXPERT 1: Souleymane DIALLO
============================================ --}}
<section class="py-16 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        @php
        $expert = [
            'name'    => 'Souleymane DIALLO',
            'title'   => 'Gérant & Directeur Général',
            'bio'     => 'Ingénieur agronome de formation, Souleymane DIALLO est également Maire de la commune de Ouassadou.',
            'bio_long' => 'Fort de plus de 20 ans d\'expérience dans les secteurs agricole et institutionnel, Souleymane DIALLO a développé une double compétence unique : celle d\'un technicien agronome et celle d\'un élu local. Cette complémentarité lui permet d\'appréhender les projets de développement sous un angle à la fois pragmatique et stratégique.',
            'bio_long_2' => 'En tant que Maire de Ouassadou, il a mis en œuvre des politiques innovantes en matière d\'infrastructures rurales, d\'accès à l\'eau et de soutien à l\'entrepreneuriat agricole. Ces réalisations lui ont valu une reconnaissance nationale et internationale.',
            'bio_long_3' => 'Chez SORIBA SARL, il met cette expérience au service des partenaires souhaitant investir dans des projets à fort impact social et économique, en garantissant une approche respectueuse des réalités locales et des enjeux de développement durable.',
            'email'   => 's.diallo@soriba-sarl.com',
            'phone'   => '+221 78 179 25 10',
            'linkedin'=> '#',
            'twitter' => '#',
            'skills'  => ['Agronomie', 'Gouvernance', 'PPP', 'Développement rural', 'Leadership', 'Négociation'],
            'experiences' => [
                ['year' => '2020 - Aujourd\'hui', 'title' => 'Gérant & Directeur Général', 'company' => 'SORIBA SARL', 'desc' => 'Direction stratégique et développement des partenariats internationaux. Pilotage de projets structurants en Afrique de l\'Ouest.'],
                ['year' => '2014 - Aujourd\'hui', 'title' => 'Maire', 'company' => 'Commune de Ouassadou', 'desc' => 'Administration locale, développement des infrastructures rurales et mise en œuvre de politiques agricoles innovantes.'],
                ['year' => '2008 - 2014', 'title' => 'Ingénieur Agronome Senior', 'company' => 'Ministère de l\'Agriculture', 'desc' => 'Conception et suivi de projets agricoles à l\'échelle nationale. Expertise en développement rural et en sécurité alimentaire.'],
            ],
            'educations' => [
                ['year' => '2008', 'title' => 'Diplôme d\'Ingénieur Agronome', 'institution' => 'École Nationale d\'Agriculture, Sénégal'],
                ['year' => '2012', 'title' => 'Master en Gestion des Projets', 'institution' => 'Université Cheikh Anta Diop, Dakar'],
                ['year' => '2015', 'title' => 'Certification en Montage de PPP', 'institution' => 'Institut de la Finance Internationale, Paris'],
            ],
            'achievements' => [
                'Montage de plus de 500 M€ de projets PPP en Afrique de l\'Ouest',
                'Accompagnement de 15+ gouvernements dans leur stratégie de coopération internationale',
                'Lauréat du Prix Africain du Leadership Économique 2022',
                'Création de 3 incubateurs agricoles pour jeunes entrepreneurs',
            ],
        ];
        @endphp
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            {{-- Colonne gauche --}}
            <div class="lg:col-span-1">
                <div class="bg-light-blue rounded-2xl p-8 text-center mb-6">
                    <div class="w-40 h-40 rounded-full bg-gradient-to-br from-dark-blue to-medium-blue flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <span class="text-amber-400 text-5xl font-bold">SD</span>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-dark-blue mb-2">{{ $expert['name'] }}</h2>
                    <p class="text-amber-500 font-medium mb-4">{{ $expert['title'] }}</p>
                    
                    <div class="w-12 h-px bg-gradient-to-r from-amber-500 to-transparent mx-auto my-4"></div>
                    
                    <div class="space-y-3 text-left">
                        <a href="mailto:{{ $expert['email'] }}" class="flex items-center gap-3 text-dark-blue hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert['email'] }}</span>
                        </a>
                        <a href="tel:{{ $expert['phone'] }}" class="flex items-center gap-3 text-dark-blue hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert['phone'] }}</span>
                        </a>
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6 mb-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Compétences clés</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($expert['skills'] as $skill)
                        <span class="px-3 py-1.5 bg-dark-blue rounded-full text-white text-xs font-medium">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Suivre</h3>
                    <div class="flex gap-3">
                        <a href="{{ $expert['linkedin'] }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="{{ $expert['twitter'] }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a href="mailto:{{ $expert['email'] }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            {{-- Colonne droite --}}
            <div class="lg:col-span-2">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Biographie</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert['bio_long'] }}</p>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert['bio_long_2'] }}</p>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert['bio_long_3'] }}</p>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Expériences professionnelles</h2>
                    <div class="space-y-6">
                        @foreach($expert['experiences'] as $exp)
                        <div class="border-l-2 border-amber-500 pl-5">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-lg font-bold text-dark-blue">{{ $exp['title'] }}</h3>
                                <span class="text-amber-500 text-sm font-medium">{{ $exp['year'] }}</span>
                            </div>
                            <p class="text-gray-500 text-sm mb-2">{{ $exp['company'] }}</p>
                            <p class="text-gray-600 text-sm">{{ $exp['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Formation</h2>
                    <div class="space-y-4">
                        @foreach($expert['educations'] as $edu)
                        <div class="flex gap-4">
                            <div class="w-20 flex-shrink-0">
                                <span class="text-amber-500 font-bold">{{ $edu['year'] }}</span>
                            </div>
                            <div>
                                <h3 class="text-dark-blue font-bold">{{ $edu['title'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $edu['institution'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-dark-blue mb-4">Réalisations majeures</h2>
                    <ul class="space-y-3">
                        @foreach($expert['achievements'] as $achievement)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">{{ $achievement }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="mt-8 text-center">
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
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
     SEPARATEUR
============================================ --}}
<div class="bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        <div class="h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
    </div>
</div>

{{-- ============================================
     EXPERT 2: Franck K. BAMIGBOLA
============================================ --}}
<section class="py-16 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        @php
        $expert3 = [
            'name'    => 'Franck K. BAMIGBOLA',
            'title'   => 'Directeur des Partenariats',
            'bio'     => 'Entrepreneur international basé à Krasnodar en Russie, Franck K. BAMIGBOLA dirige le développement des partenariats stratégiques.',
            'bio_long' => 'Entrepreneur international basé à Krasnodar en Russie, Franck K. BAMIGBOLA dirige le développement des partenariats stratégiques de SORIBA SARL. Son réseau en Europe de l\'Est et en Afrique est un atout majeur pour l\'établissement de coopérations bilatérales durables.',
            'bio_long_2' => 'Fort d\'une double culture africaine et européenne, il facilite les échanges économiques entre les opérateurs russes, européens et africains. Sa maîtrise des codes d\'affaires internationaux lui permet de nouer des relations de confiance avec des partenaires variés.',
            'bio_long_3' => 'Chez SORIBA SARL, il est responsable de l\'identification et de la mise en relation avec les partenaires stratégiques, ainsi que du développement des consortiums pour les projets d\'envergure.',
            'email'   => 'f.bamigbola@soriba-sarl.com',
            'phone'   => '+221 78 179 25 12',
            'linkedin'=> '#',
            'twitter' => '#',
            'skills'  => ['Business development', 'Négociation', 'Relations internationales', 'Commerce', 'Marketing stratégique'],
            'experiences' => [
                ['year' => '2020 - Aujourd\'hui', 'title' => 'Directeur des Partenariats', 'company' => 'SORIBA SARL', 'desc' => 'Développement du réseau de partenaires stratégiques en Europe, Asie et Afrique.'],
                ['year' => '2015 - 2020', 'title' => 'Consultant International', 'company' => 'Bridge Africa Consulting', 'desc' => 'Accompagnement des entreprises européennes souhaitant s\'implanter en Afrique.'],
                ['year' => '2010 - 2015', 'title' => 'Responsable Commercial', 'company' => 'EuroAfrique Trading', 'desc' => 'Développement des échanges commerciaux entre l\'Europe et l\'Afrique de l\'Ouest.'],
            ],
            'educations' => [
                ['year' => '2012', 'title' => 'MBA Commerce International', 'institution' => 'Université de Krasnodar, Russie'],
                ['year' => '2008', 'title' => 'Master en Négociation', 'institution' => 'Université Paris-Dauphine, France'],
                ['year' => '2005', 'title' => 'Licence en Économie', 'institution' => 'Université d\'Abomey-Calavi, Bénin'],
            ],
            'achievements' => [
                'Création d\'un réseau de 50+ partenaires stratégiques en Europe et Afrique',
                'Organisation de 15+ missions économiques entre l\'Afrique et la Russie',
                'Signature de 8 accords de coopération bilatérale majeurs',
                'Développement d\'un consortium de 12 entreprises pour un projet énergétique',
            ],
        ];
        @endphp
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-1">
                <div class="bg-light-blue rounded-2xl p-8 text-center mb-6">
                    <div class="w-40 h-40 rounded-full bg-gradient-to-br from-dark-blue to-medium-blue flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <span class="text-amber-400 text-5xl font-bold">FB</span>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-dark-blue mb-2">{{ $expert3['name'] }}</h2>
                    <p class="text-amber-500 font-medium mb-4">{{ $expert3['title'] }}</p>
                    
                    <div class="w-12 h-px bg-gradient-to-r from-amber-500 to-transparent mx-auto my-4"></div>
                    
                    <div class="space-y-3 text-left">
                        <a href="mailto:{{ $expert3['email'] }}" class="flex items-center gap-3 text-dark-blue hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert3['email'] }}</span>
                        </a>
                        <a href="tel:{{ $expert3['phone'] }}" class="flex items-center gap-3 text-dark-blue hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert3['phone'] }}</span>
                        </a>
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6 mb-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Compétences clés</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($expert3['skills'] as $skill)
                        <span class="px-3 py-1.5 bg-dark-blue rounded-full text-white text-xs font-medium">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Suivre</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a href="mailto:{{ $expert3['email'] }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-2">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Biographie</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert3['bio_long'] }}</p>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert3['bio_long_2'] }}</p>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert3['bio_long_3'] }}</p>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Expériences professionnelles</h2>
                    <div class="space-y-6">
                        @foreach($expert3['experiences'] as $exp)
                        <div class="border-l-2 border-amber-500 pl-5">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-lg font-bold text-dark-blue">{{ $exp['title'] }}</h3>
                                <span class="text-amber-500 text-sm font-medium">{{ $exp['year'] }}</span>
                            </div>
                            <p class="text-gray-500 text-sm mb-2">{{ $exp['company'] }}</p>
                            <p class="text-gray-600 text-sm">{{ $exp['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Formation</h2>
                    <div class="space-y-4">
                        @foreach($expert3['educations'] as $edu)
                        <div class="flex gap-4">
                            <div class="w-20 flex-shrink-0">
                                <span class="text-amber-500 font-bold">{{ $edu['year'] }}</span>
                            </div>
                            <div>
                                <h3 class="text-dark-blue font-bold">{{ $edu['title'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $edu['institution'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-dark-blue mb-4">Réalisations majeures</h2>
                    <ul class="space-y-3">
                        @foreach($expert3['achievements'] as $achievement)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">{{ $achievement }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="mt-8 text-center">
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
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
     SEPARATEUR
============================================ --}}
<div class="bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        <div class="h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
    </div>
</div>

{{-- ============================================
     EXPERT 3: Ricardo O. OKE (descendu en bas)
============================================ --}}
<section class="py-16 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        @php
        $expert2 = [
            'name'    => 'Ricardo O. OKE',
            'title'   => 'Directeur Technique',
            'bio'     => 'Ingénieur mécatronique et robotique formé à Moscou, Ricardo O. OKE apporte une expertise technologique de pointe.',
            'bio_long' => 'Ingénieur mécatronique et robotique formé à Moscou, Ricardo O. OKE apporte une expertise technologique de pointe à SORIBA SARL. Spécialiste des systèmes industriels automatisés, il supervise les volets techniques des projets d\'infrastructure et d\'énergie.',
            'bio_long_2' => 'Son parcours international lui a permis de travailler sur des projets industriels complexes en Russie, en Europe et en Afrique. Cette expérience transversale lui confère une vision unique des enjeux technologiques du continent.',
            'bio_long_3' => 'Chez SORIBA SARL, il est responsable de l\'ingénierie technique des projets, garantissant l\'intégration des meilleures solutions technologiques adaptées aux réalités locales.',
            'email'   => 'r.oke@soriba-sarl.com',
            'phone'   => '+221 78 179 25 11',
            'linkedin'=> '#',
            'twitter' => '#',
            'skills'  => ['Mécatronique', 'Robotique', 'Industrie 4.0', 'Énergie', 'Automatisation', 'IA'],
            'experiences' => [
                ['year' => '2020 - Aujourd\'hui', 'title' => 'Directeur Technique', 'company' => 'SORIBA SARL', 'desc' => 'Supervision technique des projets d\'infrastructure et d\'énergie. Intégration des solutions innovantes.'],
                ['year' => '2015 - 2020', 'title' => 'Ingénieur Senior', 'company' => 'IndustrieTech Russie', 'desc' => 'Conception et déploiement de systèmes automatisés pour l\'industrie lourde.'],
                ['year' => '2010 - 2015', 'title' => 'Chercheur en Robotique', 'company' => 'Université Technique de Moscou', 'desc' => 'Recherche et développement en robotique industrielle et systèmes intelligents.'],
            ],
            'educations' => [
                ['year' => '2010', 'title' => 'Master en Mécatronique', 'institution' => 'Université Technique de Moscou, Russie'],
                ['year' => '2008', 'title' => 'Diplôme d\'Ingénieur', 'institution' => 'École Polytechnique, Abidjan'],
                ['year' => '2015', 'title' => 'Certification IA & Automatisation', 'institution' => 'Institut Technologique Européen'],
            ],
            'achievements' => [
                'Déploiement de solutions d\'automatisation dans 5 usines en Afrique de l\'Ouest',
                'Pilotage technique de projets énergétiques pour plus de 200 MW installés',
                'Membre du comité d\'experts sur l\'Industrie 4.0 en Afrique',
                'Formation de 50+ ingénieurs aux technologies de pointe',
            ],
        ];
        @endphp
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-1">
                <div class="bg-light-blue rounded-2xl p-8 text-center mb-6">
                    <div class="w-40 h-40 rounded-full bg-gradient-to-br from-dark-blue to-medium-blue flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <span class="text-amber-400 text-5xl font-bold">RO</span>
                    </div>
                    
                    <h2 class="text-2xl font-bold text-dark-blue mb-2">{{ $expert2['name'] }}</h2>
                    <p class="text-amber-500 font-medium mb-4">{{ $expert2['title'] }}</p>
                    
                    <div class="w-12 h-px bg-gradient-to-r from-amber-500 to-transparent mx-auto my-4"></div>
                    
                    <div class="space-y-3 text-left">
                        <a href="mailto:{{ $expert2['email'] }}" class="flex items-center gap-3 text-dark-blue hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert2['email'] }}</span>
                        </a>
                        <a href="tel:{{ $expert2['phone'] }}" class="flex items-center gap-3 text-dark-blue hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-sm">{{ $expert2['phone'] }}</span>
                        </a>
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6 mb-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Compétences clés</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($expert2['skills'] as $skill)
                        <span class="px-3 py-1.5 bg-dark-blue rounded-full text-white text-xs font-medium">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Suivre</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a href="mailto:{{ $expert2['email'] }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-2">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-4">Biographie</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert2['bio_long'] }}</p>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert2['bio_long_2'] }}</p>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $expert2['bio_long_3'] }}</p>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Expériences professionnelles</h2>
                    <div class="space-y-6">
                        @foreach($expert2['experiences'] as $exp)
                        <div class="border-l-2 border-amber-500 pl-5">
                            <div class="flex flex-wrap justify-between items-start mb-2">
                                <h3 class="text-lg font-bold text-dark-blue">{{ $exp['title'] }}</h3>
                                <span class="text-amber-500 text-sm font-medium">{{ $exp['year'] }}</span>
                            </div>
                            <p class="text-gray-500 text-sm mb-2">{{ $exp['company'] }}</p>
                            <p class="text-gray-600 text-sm">{{ $exp['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Formation</h2>
                    <div class="space-y-4">
                        @foreach($expert2['educations'] as $edu)
                        <div class="flex gap-4">
                            <div class="w-20 flex-shrink-0">
                                <span class="text-amber-500 font-bold">{{ $edu['year'] }}</span>
                            </div>
                            <div>
                                <h3 class="text-dark-blue font-bold">{{ $edu['title'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $edu['institution'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="bg-light-blue rounded-2xl p-6">
                    <h2 class="text-xl font-bold text-dark-blue mb-4">Réalisations majeures</h2>
                    <ul class="space-y-3">
                        @foreach($expert2['achievements'] as $achievement)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">{{ $achievement }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="mt-8 text-center">
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
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
<section class="py-20 bg-dark-blue">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
            Vous souhaitez échanger avec nos experts ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est à votre disposition pour étudier vos projets et opportunités.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Contacter un expert
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