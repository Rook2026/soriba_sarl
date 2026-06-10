@extends('frontend.layout.master')

@section('title', 'Projets & Réalisations — SORIBA SARL')
@section('meta_description', 'Découvrez les projets structurants accompagnés par SORIBA SARL à travers l\'Afrique.')

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
                <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Projets & Réalisations</span>
            </div>
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                Des projets qui <span class="text-amber-400">transforment</span>
            </h1>
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                De l'ingénierie financière à la livraison opérationnelle, SORIBA SARL accompagne des projets structurants dans les secteurs stratégiques de l'économie africaine.
            </p>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 pt-12 border-t border-white/10">
            @foreach($stats as $stat)
            <div class="text-center">
                <div class="text-3xl lg:text-4xl font-bold text-amber-400 mb-1">{{ $stat->valeur }}</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">{{ $stat->label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FILTRES --}}
<section class="sticky top-0 z-20 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="flex flex-wrap gap-3 py-4 overflow-x-auto">
            <a href="{{ route('projects.index') }}"
               class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
               {{ !request('secteur') ? 'bg-amber-500 text-blue-900 font-bold' : 'text-gray-500 hover:text-amber-500 border border-gray-200 hover:border-amber-500/50' }}">
                Tous
            </a>
            @foreach($services as $service)
            <a href="{{ route('projects.index', ['secteur' => $service->id]) }}"
               class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
               {{ request('secteur') == $service->id ? 'bg-amber-500 text-blue-900 font-bold' : 'text-gray-500 hover:text-amber-500 border border-gray-200 hover:border-amber-500/50' }}">
                {{ $service->title }}
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- PROJETS GRID --}}
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">

        @if($projects->isEmpty())
        <div class="text-center py-20">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
            <p class="text-gray-500 text-lg">Aucun projet trouvé pour ce filtre.</p>
            <a href="{{ route('projects.index') }}" class="inline-block mt-4 text-amber-500 font-medium hover:underline">Voir tous les projets</a>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)

            @if($project->featured)
            {{-- Projet vedette --}}
            <div class="lg:col-span-2">
                <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30 h-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                        <div class="relative overflow-hidden h-64 lg:h-full bg-gradient-to-br from-blue-900 to-blue-800 flex items-center justify-center">
                            <svg class="w-24 h-24 text-white opacity-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 00-1-1h-2a1 1 0 00-1 1v5m4 0H9"/>
                            </svg>
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 text-xs font-bold rounded-full uppercase tracking-wide
                                    {{ $project->statut === 'realise' ? 'bg-green-500 text-white' :
                                       ($project->statut === 'en_cours' ? 'bg-amber-500 text-blue-900' : 'bg-blue-500 text-white') }}">
                                    {{ ucfirst(str_replace('_', ' ', $project->statut)) }}
                                </span>
                            </div>
                            @if($project->volume_investissement)
                            <div class="absolute bottom-4 right-4">
                                <span class="px-3 py-1 bg-white/10 backdrop-blur-sm text-white text-xs font-bold rounded-full">
                                    {{ $project->volume_investissement }}
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="p-8 flex flex-col justify-between">
                            <div>
                                <div class="text-amber-500 text-xs font-bold uppercase tracking-wider mb-3">
                                    {{ $project->service->title ?? 'Secteur' }}
                                </div>
                                <h2 class="text-2xl font-bold text-blue-900 mb-3 group-hover:text-amber-500 transition-colors">
                                    {{ $project->title }}
                                </h2>
                                <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $project->description }}</p>
                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Avancement</span>
                                        <span class="text-amber-500 font-bold">{{ $project->progression }}%</span>
                                    </div>
                                    <div class="h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full bg-amber-500 rounded-full" style="width: {{ $project->progression }}%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1 text-gray-500 text-xs">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $project->pays }}
                                </div>
                                <a href="{{ route('projects.show', $project->id) }}" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                                    Voir le projet
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            @else
            {{-- Projet normal --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-48 bg-gradient-to-br from-blue-900 to-blue-800 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white opacity-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 00-1-1h-2a1 1 0 00-1 1v5m4 0H9"/>
                    </svg>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 text-xs font-bold rounded-full uppercase tracking-wide
                            {{ $project->statut === 'realise' ? 'bg-green-500 text-white' :
                               ($project->statut === 'en_cours' ? 'bg-amber-500 text-blue-900' : 'bg-blue-500 text-white') }}">
                            {{ ucfirst(str_replace('_', ' ', $project->statut)) }}
                        </span>
                    </div>
                    @if($project->volume_investissement)
                    <div class="absolute bottom-4 right-4">
                        <span class="px-3 py-1 bg-white/10 backdrop-blur-sm text-white text-xs font-bold rounded-full">
                            {{ $project->volume_investissement }}
                        </span>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <div class="text-amber-500 text-xs font-bold uppercase tracking-wider mb-2">
                        {{ $project->service->title ?? 'Secteur' }}
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        {{ $project->title }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">{{ $project->description }}</p>
                    <div class="mb-4">
                        <div class="flex justify-between text-xs text-gray-500 mb-1">
                            <span>Avancement</span>
                            <span class="text-amber-500 font-bold">{{ $project->progression }}%</span>
                        </div>
                        <div class="h-1.5 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-amber-500 rounded-full" style="width: {{ $project->progression }}%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-1 text-gray-500 text-xs">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $project->pays }}
                        </div>
                        <a href="{{ route('projects.show', $project->id) }}" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                            Voir le projet
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            @endif

            @endforeach
        </div>
        @endif

        {{-- CTA --}}
        <div class="mt-20 p-8 lg:p-12 bg-blue-50 rounded-2xl text-center">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 mb-4">
                Vous avez un projet à structurer ?
            </h2>
            <p class="text-gray-600 max-w-lg mx-auto mb-8">
                SORIBA SARL vous accompagne de la phase de conception à la réalisation.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
                Nous contacter
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection