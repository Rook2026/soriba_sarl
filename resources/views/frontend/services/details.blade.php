@extends('frontend.layout.master')

@section('title', ($service->title ?? 'Service') . ' — SORIBA SARL')
@section('meta_description', $service->description ?? '')

@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
    </div>
    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-8">
            <a href="/" class="hover:text-amber-400 transition-colors">Accueil</a>
            <span>/</span>
            <a href="{{ route('services') }}" class="hover:text-amber-400 transition-colors">Services</a>
            <span>/</span>
            <span class="text-amber-400">{{ $service->title }}</span>
        </nav>

        <div class="inline-flex items-center gap-2 px-4 py-1.5 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            <span class="text-amber-400 text-xs font-bold tracking-wider uppercase">Service</span>
        </div>

        <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-3xl mb-6">
            {{ $service->title }}
        </h1>
        <p class="text-gray-400 text-lg leading-relaxed max-w-2xl">
            {{ $service->description }}
        </p>
    </div>
</section>

{{-- CONTENU --}}
<section class="py-20 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Contenu principal --}}
            <div class="lg:col-span-2">
                @if($service->description_complete)
                <p class="text-gray-600 leading-relaxed mb-8 text-lg">{{ $service->description_complete }}</p>
                @endif

                @if($service->points_cles)
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Points clés</h2>
                <ul class="space-y-4 mb-8">
                    @foreach($service->points_cles as $point)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-600">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>
                @endif

                {{-- Projets liés --}}
                @if($projects->count() > 0)
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Projets dans ce secteur</h2>
                    <div class="space-y-4">
                        @foreach($projects as $project)
                        <a href="{{ route('projects.show', $project->id) }}" class="flex items-center justify-between p-4 bg-blue-50 rounded-xl hover:bg-amber-50 hover:border-amber-500/30 border border-transparent transition-all group">
                            <div>
                                <div class="font-semibold text-blue-900 group-hover:text-amber-500 transition-colors">{{ $project->title }}</div>
                                <div class="text-sm text-gray-500 mt-1">{{ $project->pays }} — {{ ucfirst(str_replace('_', ' ', $project->statut)) }}</div>
                            </div>
                            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div class="bg-blue-50 rounded-2xl p-6">
                        <div class="w-14 h-14 rounded-xl bg-blue-900 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-blue-900 font-bold text-lg mb-2">{{ $service->title }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">{{ $service->description }}</p>
                    </div>

                    <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl p-6 text-center">
                        <h3 class="text-blue-900 font-bold mb-2">Intéressé ?</h3>
                        <p class="text-blue-900/80 text-sm mb-4">Discutons de votre projet dans ce secteur.</p>
                        <a href="{{ route('contact') }}" class="inline-block w-full py-2.5 bg-blue-900 text-white font-semibold rounded-lg hover:bg-blue-800 transition-colors">
                            Nous contacter
                        </a>
                    </div>

                    <a href="{{ route('services') }}" class="flex items-center gap-2 text-blue-900 font-medium hover:text-amber-500 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Tous les services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-blue-900">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Vous avez un projet dans ce secteur ?</h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">Notre équipe est disponible pour étudier vos opportunités.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
            Discuter de mon projet
        </a>
    </div>
</section>

@endsection