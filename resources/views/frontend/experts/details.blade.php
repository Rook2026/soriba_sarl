@extends('frontend.layout.master')

@section('title', $expert->name . ' — SORIBA SARL')
@section('meta_description', $expert->bio ?? 'Découvrez le profil de notre expert en coopération internationale.')

@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-16 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
    </div>
    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        <a href="{{ route('experts.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-amber-400 transition-colors mb-8 group">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Retour aux experts
        </a>
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-6 flex-wrap">
            <a href="{{ route('welcome') }}" class="hover:text-amber-400 transition-colors">Accueil</a>
            <span class="text-gray-600">/</span>
            <a href="{{ route('experts.index') }}" class="hover:text-amber-400 transition-colors">Experts</a>
            <span class="text-gray-600">/</span>
            <span class="text-amber-400">{{ $expert->name }}</span>
        </nav>
        <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight">
            {{ $expert->name }}
        </h1>
        <p class="text-amber-400 text-lg mt-2">{{ $expert->role }}</p>
    </div>
</section>

{{-- CONTENU --}}
<section class="py-16 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Colonne gauche --}}
            <div class="lg:col-span-1">

                {{-- Avatar --}}
                <div class="bg-blue-50 rounded-2xl p-8 text-center mb-6">
                    <div class="w-36 h-36 rounded-full mx-auto mb-6 shadow-xl overflow-hidden bg-blue-900 flex items-center justify-center">
                        @if($expert->photo)
                            <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-amber-400 text-4xl font-bold">{{ $expert->initials }}</span>
                        @endif
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-1">{{ $expert->name }}</h2>
                    <p class="text-amber-500 font-medium mb-3">{{ $expert->role }}</p>
                    @if($expert->location)
                    <div class="flex items-center justify-center gap-2 text-gray-500 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ $expert->location }}</span>
                    </div>
                    @endif
                </div>

                {{-- Contact --}}
                <div class="bg-blue-900 rounded-2xl p-6 text-white mb-6">
                    <h3 class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-4">Contact direct</h3>
                    <div class="space-y-3">
                        @if($expert->email)
                        <a href="mailto:{{ $expert->email }}" class="flex items-center gap-3 text-gray-300 hover:text-amber-400 transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm truncate">{{ $expert->email }}</span>
                        </a>
                        @else
                        <a href="mailto:contact@soriba-sarl.com" class="flex items-center gap-3 text-gray-300 hover:text-amber-400 transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm">contact@soriba-sarl.com</span>
                        </a>
                        @endif
                        <a href="tel:+221781792510" class="flex items-center gap-3 text-gray-300 hover:text-amber-400 transition-colors">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-sm">+221 78 179 25 10</span>
                        </a>
                    </div>
                </div>

                {{-- Compétences --}}
                @if($expert->expertise)
                <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                    <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-4">Compétences clés</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($expert->expertise as $skill)
                        <span class="px-3 py-1.5 bg-white rounded-full text-blue-900 text-xs font-medium border border-gray-200">
                            {{ $skill }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Réseaux sociaux --}}
                <div class="bg-blue-50 rounded-2xl p-6">
                    <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-4">Suivre</h3>
                    <div class="flex gap-3 flex-wrap">
                        @if($expert->linkedin)
                        <a href="{{ $expert->linkedin }}" target="_blank" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                        </a>
                        @endif
                        @if($expert->reseaux_sociaux)
                            @foreach($expert->reseaux_sociaux as $reseau)
                            <a href="{{ $reseau['url'] }}" target="_blank"
                               class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all"
                               title="{{ ucfirst($reseau['reseau']) }}">
                                @if($reseau['reseau'] === 'facebook')
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                @elseif($reseau['reseau'] === 'instagram')
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                @elseif($reseau['reseau'] === 'tiktok')
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 15.64a6.34 6.34 0 0 0 10.86 4.27 6.33 6.33 0 0 0 1.93-4.53V7.33a7.62 7.62 0 0 0 4.05 1.2V5.44a4.83 4.83 0 0 1-2.25 1.25z"/></svg>
                                @elseif($reseau['reseau'] === 'whatsapp')
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                @else
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                                @endif
                            </a>
                            @endforeach
                        @endif
                        <a href="{{ route('contact') }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Colonne droite --}}
            <div class="lg:col-span-2">

                {{-- Bio --}}
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-900 mb-4">Biographie</h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-lg">{{ $expert->bio }}</p>
                    @if($expert->bio_full)
                    <p class="text-gray-600 leading-relaxed">{{ $expert->bio_full }}</p>
                    @endif
                </div>

                <div class="w-16 h-px bg-gradient-to-r from-amber-500 to-transparent my-8"></div>

                {{-- Domaines d'expertise --}}
                @if($expert->expertise)
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Domaines d'expertise</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach($expert->expertise as $skill)
                        <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl">
                            <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-blue-900 font-medium text-sm">{{ $skill }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Bouton contact --}}
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
                        Contacter {{ explode(' ', $expert->name)[0] }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="{{ route('experts.index') }}" class="inline-flex items-center gap-2 px-8 py-3 border-2 border-blue-900 text-blue-900 font-semibold rounded-full hover:bg-blue-900 hover:text-white transition-all">
                        Voir tous les experts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-blue-900">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl font-bold text-white mb-4">
            Vous souhaitez échanger avec nos experts ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est à votre disposition pour étudier vos projets et opportunités.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Planifier un échange
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