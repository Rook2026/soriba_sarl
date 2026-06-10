@extends('frontend.layout.master')

@section('title', $article->title . ' — SORIBA SARL')
@section('meta_description', $article->excerpt ?? 'Insights et analyses de SORIBA SARL.')

@section('content')

{{-- Barre de progression lecture --}}
<div id="readingProgress" class="fixed top-0 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-500 to-amber-400 z-50 transition-all duration-100"></div>

{{-- HERO --}}
<section class="relative pt-32 pb-12 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
    </div>
    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-8 flex-wrap">
            <a href="{{ route('welcome') }}" class="hover:text-amber-400 transition-colors">Accueil</a>
            <span class="text-gray-600">/</span>
            <a href="{{ route('blog.index') }}" class="hover:text-amber-400 transition-colors">Blog</a>
            <span class="text-gray-600">/</span>
            <span class="text-amber-400">{{ $article->category->name }}</span>
        </nav>

        {{-- Badge catégorie --}}
        <div class="inline-flex items-center gap-2 px-4 py-1.5 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
            <span class="text-amber-400 text-xs font-bold tracking-wider uppercase">{{ $article->category->name }}</span>
        </div>

        {{-- Titre --}}
        <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold leading-tight max-w-3xl mb-6">
            {{ $article->title }}
        </h1>

        {{-- Excerpt --}}
        <p class="text-gray-400 text-lg leading-relaxed max-w-2xl mb-8">
            {{ $article->excerpt }}
        </p>

        {{-- Meta --}}
        <div class="flex flex-wrap items-center gap-6">
            {{-- Auteur --}}
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-amber-500/10 border border-amber-500/30 flex items-center justify-center overflow-hidden">
                    @if($article->author->photo)
                        <img src="{{ asset('storage/' . $article->author->photo) }}" alt="{{ $article->author->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-amber-400 font-bold text-sm">{{ $article->author->initials }}</span>
                    @endif
                </div>
                <div>
                    <p class="text-gray-500 text-xs uppercase tracking-wider">Auteur</p>
                    <p class="text-white text-sm font-medium">{{ $article->author->name }}</p>
                </div>
            </div>

            {{-- Date --}}
            <div class="flex items-center gap-2 text-gray-400 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span>{{ $article->published_at->format('d M Y') }}</span>
            </div>

            {{-- Temps de lecture --}}
            @if($article->read_time)
            <div class="flex items-center gap-2 text-gray-400 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>{{ $article->read_time }} min de lecture</span>
            </div>
            @endif

            {{-- Vues --}}
            <div class="flex items-center gap-2 text-gray-400 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <span>{{ $article->vues }} vues</span>
            </div>
        </div>
    </div>
</section>

{{-- CONTENU --}}
<section class="py-12 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Colonne principale --}}
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none prose-headings:text-blue-900 prose-p:text-gray-600 prose-strong:text-blue-900 prose-a:text-amber-500">
                    {!! nl2br(e($article->content)) !!}
                </div>

                {{-- Retour blog --}}
                <div class="pt-12 mt-8 border-t border-gray-200">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-blue-900 text-blue-900 font-semibold rounded-full hover:bg-blue-900 hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Retour au blog
                    </a>
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="space-y-6">

                {{-- Partager --}}
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-4">Partager</h3>
                    <div class="flex gap-3">
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}" target="_blank"
                           class="flex-1 py-2.5 border border-gray-300 rounded-lg text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors flex items-center justify-center gap-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                            </svg>
                            X
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank"
                           class="flex-1 py-2.5 border border-gray-300 rounded-lg text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors flex items-center justify-center gap-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                            in
                        </a>
                    </div>
                </div>

                {{-- Articles connexes --}}
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-blue-900 text-sm font-bold uppercase tracking-wider mb-4">Articles connexes</h3>
                    <div class="space-y-4">
                        @foreach($related as $rel)
                        <a href="{{ route('blog.show', $rel->id) }}" class="flex gap-3 group">
                            <div class="w-14 h-14 rounded-lg bg-amber-500/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-blue-900 font-semibold group-hover:text-amber-500 transition-colors line-clamp-2 text-sm">{{ $rel->title }}</h4>
                                <p class="text-gray-500 text-xs mt-1">{{ $rel->published_at->format('d M Y') }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Newsletter --}}
                <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl p-6">
                    <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-2">Newsletter</h3>
                    <p class="text-white/80 text-sm mb-4">Recevez nos analyses directement dans votre boîte mail.</p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="votre@email.com"
                               class="w-full px-4 py-2.5 rounded-lg bg-white/20 border border-white/30 text-white placeholder:text-white/60 focus:outline-none focus:ring-2 focus:ring-white mb-3">
                        <button type="submit" class="w-full py-2.5 bg-white text-amber-600 font-semibold rounded-lg hover:bg-white/90 transition-colors">
                            S'abonner
                        </button>
                    </form>
                    @if(session('newsletter_success'))
                    <p class="text-white text-sm mt-2">{{ session('newsletter_success') }}</p>
                    @endif
                </div>

                {{-- Auteur --}}
                <div class="bg-blue-50 rounded-xl p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-blue-900 flex items-center justify-center mx-auto mb-3 overflow-hidden">
                        @if($article->author->photo)
                            <img src="{{ asset('storage/' . $article->author->photo) }}" alt="{{ $article->author->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-amber-500 text-xl font-bold">{{ $article->author->initials }}</span>
                        @endif
                    </div>
                    <h3 class="text-blue-900 font-bold text-lg">{{ $article->author->name }}</h3>
                    <p class="text-gray-500 text-sm">{{ $article->author->role }}</p>
                    @if($article->author->bio)
                    <p class="text-gray-500 text-sm mt-2">{{ Str::limit($article->author->bio, 100) }}</p>
                    @endif
                    <a href="{{ route('experts.show', $article->author->slug) }}"
                       class="inline-block mt-3 text-amber-500 text-sm font-medium hover:underline">
                        Voir le profil →
                    </a>
                </div>

            </aside>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-blue-900">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl font-bold text-white mb-4">
            Vous avez un projet ?
            <br>
            <span class="text-amber-500">Parlons-en.</span>
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est disponible pour étudier vos opportunités d'investissement et de partenariat en Afrique.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
            Initier un partenariat
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

@endsection

@push('scripts')
<script>
    window.addEventListener('scroll', function() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById('readingProgress').style.width = scrolled + '%';
    });
</script>
@endpush