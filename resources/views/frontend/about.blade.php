@extends('frontend.layout.master')

@section('title', 'À propos — SORIBA SARL')
@section('meta_description', 'Découvrez SORIBA SARL, plateforme stratégique africaine spécialisée dans les partenariats public-privé et les investissements à impact.')

@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Notre histoire</span>
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

{{-- MISSION --}}
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="mb-4">
                    <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Notre mission</span>
                    <div class="w-12 h-px bg-amber-500 mt-2"></div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-6">
                    Une plateforme au service de <span class="text-amber-500">l'Afrique émergente</span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    SORIBA SARL est une plateforme africaine d'excellence, orchestrant des partenariats public-privé et des investissements à fort impact pour le développement stratégique du continent.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Notre vocation est de faciliter les échanges économiques et diplomatiques entre l'Afrique et le monde, en structurant des partenariats robustes et durables.
                </p>

                {{-- Stats dynamiques --}}
                <div class="grid grid-cols-2 gap-6">
                    @foreach($stats as $stat)
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold text-amber-500">{{ $stat->valeur }}</div>
                        <div class="text-gray-500 text-sm uppercase tracking-wider">{{ $stat->label }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="relative">
                <div class="bg-blue-50 rounded-2xl p-8 lg:p-10 shadow-lg">
                    <div class="w-12 h-px bg-amber-500 mb-6"></div>
                    <p class="text-blue-900 text-lg italic leading-relaxed mb-6">
                        "L'Afrique dispose de tout ce dont elle a besoin pour se développer. Il lui faut des partenaires stratégiques de confiance."
                    </p>
                    <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                        @php $fondateur = $experts->where('slug', 'souleymane-diallo')->first() ?? $experts->first(); @endphp
                        @if($fondateur)
                        <div class="w-12 h-12 rounded-full bg-blue-900 flex items-center justify-center overflow-hidden">
                            @if($fondateur->photo)
                                <img src="{{ asset('storage/' . $fondateur->photo) }}" alt="{{ $fondateur->name }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-amber-500 font-bold text-lg">{{ $fondateur->initials }}</span>
                            @endif
                        </div>
                        <div>
                            <div class="text-blue-900 font-bold">{{ $fondateur->name }}</div>
                            <div class="text-gray-500 text-sm">{{ $fondateur->role }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VALEURS --}}
<section class="py-20 bg-blue-50">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center mb-12">
            <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Nos valeurs</span>
            <div class="w-12 h-px bg-amber-500 mx-auto mt-2 mb-4"></div>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
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
                <div class="w-16 h-16 rounded-full bg-blue-900 flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform duration-500">
                    <svg style="width:24px;height:24px;" fill="none" stroke="#F59E0B" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3 group-hover:text-amber-500 transition-colors">
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

{{-- CHIFFRES CLÉS --}}
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center mb-12">
            <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Impact</span>
            <div class="w-12 h-px bg-amber-500 mx-auto mt-2 mb-4"></div>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                SORIBA en <span class="text-amber-500">chiffres</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Quelques données qui illustrent notre engagement et notre rayonnement.
            </p>
        </div>

        {{-- Stats dynamiques --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($stats as $stat)
            <div class="text-center p-6 border border-gray-200 rounded-2xl hover:border-amber-500/30 hover:shadow-lg transition-all duration-300">
                <div class="text-3xl lg:text-4xl font-bold text-amber-500 mb-2">{{ $stat->valeur }}</div>
                <div class="text-blue-900 font-semibold">{{ $stat->label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ÉQUIPE --}}
<section class="py-20 bg-blue-50">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center mb-12">
            <span class="text-amber-500 text-xs font-bold tracking-wider uppercase">Notre équipe</span>
            <div class="w-12 h-px bg-amber-500 mx-auto mt-2 mb-4"></div>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                Les <span class="text-amber-500">experts</span> SORIBA
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($experts as $expert)
            <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-lg transition-shadow">
                <div class="w-20 h-20 rounded-full bg-blue-900 flex items-center justify-center mx-auto mb-4 overflow-hidden">
                    @if($expert->photo)
                        <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-white text-2xl font-bold">{{ $expert->initials }}</span>
                    @endif
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-1">{{ $expert->name }}</h3>
                <p class="text-amber-500 text-sm font-medium mb-3">{{ $expert->role }}</p>
                <p class="text-gray-500 text-sm mb-4">{{ $expert->bio }}</p>
                <a href="{{ route('experts.show', $expert->slug) }}"
                   class="inline-flex items-center gap-2 text-blue-900 text-sm font-medium border-b border-blue-900 hover:text-amber-500 hover:border-amber-500 transition-colors">
                    Voir le profil →
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-blue-900">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
            Vous souhaitez en savoir plus ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Découvrez comment SORIBA SARL peut contribuer à la réussite de vos projets.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Nous contacter
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-full hover:bg-amber-500/10 transition-colors">
                Découvrir nos services
            </a>
        </div>
    </div>
</section>

@endsection