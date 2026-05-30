{{-- ============================================
     À PROPOS — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
     Sans stickers ni icônes
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'À propos — SORIBA SARL')
@section('meta_description', 'Découvrez SORIBA SARL, plateforme stratégique africaine spécialisée dans les partenariats public-privé et les investissements à impact.')

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
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block mb-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Notre histoire</span>
                </div>
            </div>
            
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                À propos de <span class="text-amber-400">SORIBA SARL</span>
            </h1>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            
            <p class="text-gray-400 text-lg leading-relaxed">
                SORIBA SARL est une plateforme stratégique africaine fondée à Dakar, Sénégal, spécialisée dans la facilitation de partenariats public-privé et d'investissements à impact pour le développement durable de l'Afrique.
            </p>
        </div>
    </div>
</section>

{{-- ============================================
     MISSION SECTION
============================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="inline-block mb-4">
                    <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Notre mission</span>
                    <div class="w-12 h-px bg-amber-500 mt-2"></div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-dark-blue mb-6">
                    Une plateforme au service de <span class="text-amber-500">l'Afrique émergente</span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    SORIBA SARL est une plateforme africaine d'excellence, orchestrant des partenariats public-privé et des investissements à fort impact pour le développement stratégique du continent.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Notre vocation est de faciliter les échanges économiques et diplomatiques entre l'Afrique et le monde, en structurant des partenariats robustes et durables.
                </p>
                
                <div class="grid grid-cols-2 gap-6">
                    @php
                    $stats = [
                        ['value' => '9+', 'label' => "Secteurs d'expertise"],
                        ['value' => '3+', 'label' => "Pays d'intervention"],
                        ['value' => 'PPP', 'label' => "Modèle de référence"],
                        ['value' => '∞', 'label' => "Ambitions pour l'Afrique"],
                    ];
                    @endphp
                    @foreach($stats as $stat)
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold text-amber-500">{{ $stat['value'] }}</div>
                        <div class="text-gray-500 text-sm uppercase tracking-wider">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="relative">
                <div class="bg-light-blue rounded-2xl p-8 lg:p-10 shadow-lg">
                    <div class="w-12 h-px bg-amber-500 mb-6"></div>
                    <p class="text-dark-blue text-lg italic leading-relaxed mb-6">
                        "L'Afrique dispose de tout ce dont elle a besoin pour se développer. Il lui faut des partenaires stratégiques de confiance."
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                        <div class="w-12 h-12 rounded-full bg-dark-blue flex items-center justify-center">
                            <span class="text-amber-500 font-bold text-lg">SD</span>
                        </div>
                        <div>
                            <div class="text-dark-blue font-bold">Souleymane DIALLO</div>
                            <div class="text-gray-500 text-sm">Gérant & Directeur Général</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     VALEURS SECTION
============================================ --}}
<section class="py-20 bg-light-blue">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Nos valeurs</span>
                <div class="w-12 h-px bg-amber-500 mx-auto mt-2"></div>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-dark-blue mb-4">
                Ce qui nous <span class="text-amber-500">anime</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Des principes fondamentaux qui guident notre action au quotidien.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
            $values = [
                ['title' => 'Excellence', 'desc' => 'Standard institutionnel haut de gamme dans chaque mission que nous accomplissons.'],
                ['title' => 'Confiance', 'desc' => 'Partenaire de confiance pour les gouvernements, institutions et investisseurs privés.'],
                ['title' => 'Impact africain', 'desc' => 'Chaque projet contribue au développement économique et social du continent africain.'],
                ['title' => 'Intégrité', 'desc' => 'Éthique irréprochable, transparence totale et respect des engagements pris.'],
            ];
            @endphp
            @foreach($values as $value)
            <div class="group bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-dark-blue to-medium-blue flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform duration-500">
                    <div class="w-6 h-px bg-amber-500"></div>
                </div>
                <h3 class="text-xl font-bold text-dark-blue mb-3 group-hover:text-amber-500 transition-colors">
                    {{ $value['title'] }}
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ $value['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     CHIFFRES CLÉS
============================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Impact</span>
                <div class="w-12 h-px bg-amber-500 mx-auto mt-2"></div>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-dark-blue mb-4">
                SORIBA en <span class="text-amber-500">chiffres</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Quelques données qui illustrent notre engagement et notre rayonnement.
            </p>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @php
            $keyStats = [
                ['value' => '50+', 'label' => 'Projets accompagnés', 'desc' => 'Dans des secteurs variés'],
                ['value' => '15+', 'label' => 'Pays partenaires', 'desc' => 'À travers l\'Afrique et le monde'],
                ['value' => '500M€', 'label' => 'Investissements structurés', 'desc' => 'En projets PPP'],
                ['value' => '100%', 'label' => 'Engagement', 'desc' => 'Pour un développement durable'],
            ];
            @endphp
            @foreach($keyStats as $stat)
            <div class="text-center p-6 border border-gray-200 rounded-2xl hover:border-amber-500/30 hover:shadow-lg transition-all duration-300">
                <div class="text-3xl lg:text-4xl font-bold text-amber-500 mb-2">{{ $stat['value'] }}</div>
                <div class="text-dark-blue font-semibold mb-1">{{ $stat['label'] }}</div>
                <div class="text-gray-500 text-sm">{{ $stat['desc'] }}</div>
            </div>
            @endforeach
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
            Vous souhaitez en savoir plus ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Découvrez comment SORIBA SARL peut contribuer à la réussite de vos projets.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Nous contacter
            </a>
            <a href="/services" class="inline-flex items-center gap-2 px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-full hover:bg-amber-500/10 transition-colors">
                Découvrir nos services
            </a>
        </div>
    </div>
</section>

@endsection