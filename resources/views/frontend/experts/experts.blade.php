@extends('frontend.layout.master')

@section('title', 'Nos Experts — SORIBA SARL')
@section('meta_description', 'Découvrez l\'équipe d\'experts de SORIBA SARL en coopération internationale et développement en Afrique.')

@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Notre équipe</span>
            </div>
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                Nos <span class="text-amber-400">experts</span>
            </h1>
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Des professionnels passionnés, ancrés dans les réalités africaines et connectés aux réseaux internationaux.
            </p>
        </div>
    </div>
</section>

{{-- EXPERTS --}}
<section class="py-20 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">

        @foreach($experts as $index => $expert)

        {{-- Séparateur entre experts --}}
        @if($index > 0)
        <div class="my-16">
            <div class="h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Colonne gauche : profil --}}
            <div class="lg:col-span-1">

                {{-- Card profil --}}
                <div class="bg-blue-50 rounded-2xl p-8 text-center mb-6">
                    {{-- Avatar --}}
                    <div class="w-32 h-32 rounded-full mx-auto mb-6 shadow-xl overflow-hidden bg-blue-900 flex items-center justify-center">
                        @if($expert->photo)
                            <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-white text-3xl font-bold">{{ $expert->initials }}</span>
                        @endif
                    </div>

                    <h2 class="text-2xl font-bold text-blue-900 mb-1">{{ $expert->name }}</h2>
                    <p class="text-amber-500 font-medium mb-2">{{ $expert->role }}</p>
                    @if($expert->location)
                    <p class="text-gray-500 text-sm mb-4">{{ $expert->location }}</p>
                    @endif

                    <div class="w-12 h-px bg-gradient-to-r from-amber-500 to-transparent mx-auto my-4"></div>

                    {{-- Contact --}}
                    <div class="space-y-3 text-left">
                        @if($expert->email)
                        <a href="mailto:{{ $expert->email }}" class="flex items-center gap-3 text-blue-900 hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm truncate">{{ $expert->email }}</span>
                        </a>
                        @endif
                        @if($expert->linkedin)
                        <a href="{{ $expert->linkedin }}" target="_blank" class="flex items-center gap-3 text-blue-900 hover:text-amber-500 transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                            <span class="text-sm">LinkedIn</span>
                        </a>
                        @endif
                    </div>
                </div>

                {{-- Compétences --}}
                @if($expert->expertise)
                <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                    <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-4">Compétences clés</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($expert->expertise as $skill)
                        <span class="px-3 py-1.5 bg-blue-900 rounded-full text-white text-xs font-medium">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- CTA voir profil --}}
                <a href="{{ route('experts.show', $expert->slug) }}"
                   class="flex items-center justify-center gap-2 w-full py-3 border-2 border-blue-900 text-blue-900 font-semibold rounded-full hover:bg-blue-900 hover:text-white transition-all duration-300">
                    Voir le profil complet
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Colonne droite : bio --}}
            <div class="lg:col-span-2">
                <h2 class="text-2xl font-bold text-blue-900 mb-4">Biographie</h2>
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">{{ $expert->bio }}</p>

                @if($expert->bio_full)
                <p class="text-gray-600 leading-relaxed mb-6">{{ $expert->bio_full }}</p>
                @endif

                <div class="w-16 h-px bg-gradient-to-r from-amber-500 to-transparent my-8"></div>

                {{-- Expertise détaillée --}}
                @if($expert->expertise)
                <h3 class="text-xl font-bold text-blue-900 mb-4">Domaines d'expertise</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    @foreach($expert->expertise as $skill)
                    <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl">
                        <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-blue-900 font-medium text-sm">{{ $skill }}</span>
                    </div>
                    @endforeach
                </div>
                @endif

                {{-- Bouton contact --}}
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
                    Contacter {{ explode(' ', $expert->name)[0] }}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>

        @endforeach

    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-blue-900">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
            Vous souhaitez échanger avec nos experts ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est à votre disposition pour étudier vos projets et opportunités.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Contacter un expert
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="tel:+221781792510" class="inline-flex items-center gap-2 px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-full hover:bg-amber-500/10 transition-colors">
                +221 78 179 25 10
            </a>
        </div>
    </div>
</section>

@endsection