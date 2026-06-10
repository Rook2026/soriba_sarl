@extends('frontend.layout.master')

@section('title', ($project->title ?? 'Projet') . ' — SORIBA SARL')
@section('meta_description', $project->description ?? 'Détails d\'un projet structurant accompagné par SORIBA SARL.')

@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-12 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>

    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-8 flex-wrap">
            <a href="/" class="hover:text-amber-400 transition-colors">Accueil</a>
            <span class="text-gray-600">/</span>
            <a href="{{ route('projects.index') }}" class="hover:text-amber-400 transition-colors">Projets</a>
            <span class="text-gray-600">/</span>
            <span class="text-amber-400">{{ $project->service->title ?? 'Projet' }}</span>
        </nav>

        <div class="inline-flex items-center gap-2 px-4 py-1.5 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            <span class="text-amber-400 text-xs font-bold tracking-wider uppercase">{{ $project->service->title ?? 'Secteur' }}</span>
        </div>

        <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold leading-tight max-w-3xl mb-6">
            {{ $project->title }}
        </h1>

        <p class="text-gray-400 text-lg leading-relaxed max-w-2xl">
            {{ $project->description }}
        </p>
    </div>
</section>

{{-- CONTENU PRINCIPAL --}}
<section class="py-12 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">

        {{-- KPIs --}}
        @if($project->kpis)
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 py-8 mb-8 border-t border-b border-gray-200">
            @foreach($project->kpis as $kpi)
            <div class="text-center">
                <div class="text-2xl lg:text-3xl font-bold text-amber-500 mb-1">{{ $kpi['value'] }}</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider">{{ $kpi['label'] }}</div>
            </div>
            @endforeach
        </div>
        @endif

        {{-- Cover --}}
        <div class="relative rounded-2xl overflow-hidden mb-12 shadow-lg bg-gradient-to-br from-blue-900 to-blue-800">
            <div class="relative h-80 lg:h-96 flex items-center justify-center">
                <div class="absolute inset-0 bg-amber-500/5"></div>
                <div class="text-center">
                    <div class="w-24 h-px bg-amber-500/50 mx-auto mb-4"></div>
                    <p class="text-gray-400 text-sm uppercase tracking-wider">Projet structurant</p>
                    <p class="text-white text-xl font-light mt-2">{{ $project->title }}</p>
                </div>
            </div>
            <div class="absolute top-4 right-4">
                <span class="px-3 py-1 bg-amber-500 text-blue-900 text-xs font-bold rounded-full uppercase tracking-wide">
                    {{ ucfirst(str_replace('_', ' ', $project->statut)) }} — {{ $project->progression }}%
                </span>
            </div>
        </div>

        {{-- Layout 2 colonnes --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Colonne gauche --}}
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none">

                    <h2 class="text-2xl font-bold text-blue-900 mt-0 mb-4">Présentation du projet</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">{{ $project->description }}</p>

                    @if($project->description_complete)
                    <p class="text-gray-600 leading-relaxed mb-8">{{ $project->description_complete }}</p>
                    @endif

                    <div class="w-16 h-px bg-gradient-to-r from-amber-500 to-transparent my-8"></div>

                    {{-- Phasage --}}
                    @if($project->phases)
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Phasage du projet</h2>
                    <div class="space-y-6 mb-8">
                        @foreach($project->phases as $phase)
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-500/10 border border-amber-500/30 flex items-center justify-center flex-shrink-0">
                                <span class="text-amber-500 text-sm font-bold">{{ str_pad($phase['numero'], 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <div>
                                <p class="text-amber-500 text-xs font-bold uppercase tracking-wider">
                                    Phase {{ $phase['numero'] }} — {{ ucfirst($phase['statut']) }}
                                </p>
                                <h3 class="text-blue-900 font-bold text-lg mt-1">{{ $phase['titre'] }}</h3>
                                <p class="text-gray-600 text-sm mt-1">{{ $phase['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif

                </div>
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">

                    {{-- Informations --}}
                    <div class="bg-blue-50 rounded-2xl p-6">
                        <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-4">Informations du projet</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Statut</span>
                                <span class="text-amber-500 text-sm font-semibold">{{ ucfirst(str_replace('_', ' ', $project->statut)) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Secteur</span>
                                <span class="text-blue-900 text-sm font-medium">{{ $project->service->title ?? '-' }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Localisation</span>
                                <span class="text-blue-900 text-sm font-medium">{{ $project->pays }} — {{ $project->ville }}</span>
                            </div>
                            @if($project->date_debut)
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Démarrage</span>
                                <span class="text-blue-900 text-sm font-medium">{{ $project->date_debut->format('M Y') }}</span>
                            </div>
                            @endif
                            @if($project->date_fin_prevue)
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Livraison prévue</span>
                                <span class="text-blue-900 text-sm font-medium">{{ $project->date_fin_prevue->format('M Y') }}</span>
                            </div>
                            @endif
                            @if($project->modele_financement)
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Modèle</span>
                                <span class="text-blue-900 text-sm font-medium">{{ $project->modele_financement }}</span>
                            </div>
                            @endif
                            @if($project->volume_investissement)
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500 text-sm">Investissement</span>
                                <span class="text-blue-900 text-sm font-medium">{{ $project->volume_investissement }}</span>
                            </div>
                            @endif
                        </div>

                        {{-- Progression --}}
                        <div class="mt-6 pt-4 border-t border-gray-200">
                            <div class="flex justify-between text-sm text-gray-600 mb-2">
                                <span>Avancement global</span>
                                <span class="text-amber-500 font-bold">{{ $project->progression }}%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-amber-500 rounded-full" style="width: {{ $project->progression }}%"></div>
                            </div>
                        </div>
                    </div>

                    {{-- CTA contact --}}
                    <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl p-6 text-center">
                        <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-2">Intéressé par ce projet ?</h3>
                        <p class="text-blue-900/80 text-sm mb-4">Discutons de vos opportunités de participation ou de partenariat.</p>
                        <a href="{{ route('contact') }}" class="inline-block w-full py-2.5 bg-blue-900 text-white font-semibold rounded-lg hover:bg-blue-800 transition-colors">
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Back --}}
        <div class="text-center pt-12 pb-8 border-t border-gray-200 mt-8">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-blue-900 text-blue-900 font-semibold rounded-full hover:bg-blue-900 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Retour aux projets
            </a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-blue-900">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl font-bold text-white mb-4">Vous avez un projet similaire ?</h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">Contactez-nous pour discuter de la manière dont nous pouvons vous accompagner.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
            Discuter de mon projet
        </a>
    </div>
</section>

@endsection