{{-- ============================================
     BLOG & ACTUALITÉS — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'Blog & Actualités — SORIBA SARL')
@section('meta_description', 'Actualités, analyses et insights sur la coopération internationale, les PPP et le développement africain par SORIBA SARL.')

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
        <div class="text-center">
            <div class="inline-block mb-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5">
                    <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Insights & Actualités</span>
                </div>
            </div>
            
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                Le Blog <span class="text-amber-400">SORIBA</span>
            </h1>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Analyses, perspectives et actualités sur la coopération internationale, les investissements stratégiques et le développement du continent africain.
            </p>
        </div>
    </div>
</section>

{{-- ============================================
     FILTRES
============================================ --}}
<section class="sticky top-0 z-20 bg-white/95 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="flex flex-wrap gap-3 py-4 overflow-x-auto">
            <a href="{{ route('blog.index') }}"
               class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
               {{ !request('categorie') ? 'bg-amber-500 text-blue-900 font-bold' : 'text-gray-500 hover:text-amber-500 border border-gray-200 hover:border-amber-500/50' }}">
                Tous
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('blog.index', ['categorie' => $cat->slug]) }}"
               class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
               {{ request('categorie') === $cat->slug ? 'bg-amber-500 text-blue-900 font-bold' : 'text-gray-500 hover:text-amber-500 border border-gray-200 hover:border-amber-500/50' }}">
                {{ $cat->name }}
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     BLOG GRID
============================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($articles as $index => $article)

            @if($index === 0)
            {{-- Article vedette --}}
            <div class="lg:col-span-2">
                <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                    <div class="relative overflow-hidden h-80">
                        <img src="https://picsum.photos/id/104/800/500" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-amber-500 text-blue-900 text-xs font-bold rounded-full uppercase tracking-wide">
                                {{ $article->category->name }}
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span>{{ $article->published_at->format('d M Y') }}</span>
                            <span>•</span>
                            <span>{{ $article->read_time }} min de lecture</span>
                            <span>•</span>
                            <span>{{ $article->author->name }}</span>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 mb-4 group-hover:text-amber-500 transition-colors">
                            {{ $article->title }}
                        </h2>
                        <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">
                            {{ $article->excerpt }}
                        </p>
                        <a href="{{ route('blog.show', $article->id) }}" class="inline-flex items-center gap-2 text-amber-500 font-semibold hover:gap-3 transition-all">
                            Lire l'article
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </article>
            </div>

            @else
            {{-- Articles normaux --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-56">
                    <img src="https://picsum.photos/id/{{ 20 + $index }}/400/300" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-amber-500 text-blue-900 text-xs font-bold rounded-full uppercase tracking-wide">
                            {{ $article->category->name }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>{{ $article->published_at->format('d M Y') }}</span>
                        <span>•</span>
                        <span>{{ $article->read_time }} min</span>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        {{ $article->title }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                        {{ $article->excerpt }}
                    </p>
                    <a href="{{ route('blog.show', $article->id) }}" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                        Lire la suite
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </article>
            @endif

            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center gap-3 mt-12 pt-8 border-t border-gray-200">
            {{ $articles->links() }}
        </div>

        {{-- CTA Newsletter --}}
        <div class="mt-16 p-8 lg:p-12 bg-blue-50 rounded-2xl text-center">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 mb-4">
                Ne manquez aucune publication
            </h2>
            <p class="text-gray-600 max-w-lg mx-auto mb-8">
                Abonnez-vous à notre newsletter pour recevoir nos analyses et insights directement dans votre boîte mail.
            </p>
            <form method="POST" action="{{ route('newsletter.subscribe') }}" class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                @csrf
                <input type="email" name="email" placeholder="Votre email professionnel" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-500">
                <button type="submit" class="px-6 py-3 bg-amber-500 text-blue-900 font-semibold rounded-lg hover:bg-amber-400 transition-colors">
                    S'abonner
                </button>
            </form>
        </div>
    </div>
</section>