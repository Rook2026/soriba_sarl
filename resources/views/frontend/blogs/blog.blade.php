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
            @php
            $filters = ['Tous', 'Coopération', 'Investissements', 'Infrastructures', 'Énergie', 'Agriculture', 'Innovation', 'Santé'];
            @endphp
            @foreach($filters as $filter)
            <button class="filter-btn px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
                {{ $loop->first ? 'bg-amber-500 text-dark-blue font-bold' : 'text-gray-500 hover:text-amber-500 border border-gray-200 hover:border-amber-500/50' }}">
                {{ $filter }}
            </button>
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
            
            {{-- Article vedette (premier article - spans 2 colonnes) --}}
            <div class="lg:col-span-2">
                <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                    <div class="relative overflow-hidden h-80">
                        <img src="https://picsum.photos/id/104/800/500" alt="Article vedette" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-blue/80 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">Coopération</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                15 Janvier 2025
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                8 min de lecture
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Équipe SORIBA
                            </span>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-dark-blue mb-4 group-hover:text-amber-500 transition-colors">
                            L'Afrique à l'horizon 2030 : nouvelles dynamiques des partenariats stratégiques
                        </h2>
                        <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">
                            Le continent africain connaît une transformation profonde de ses modèles de coopération internationale. Les partenariats public-privé émergent comme des leviers décisifs pour accélérer le développement infrastructurel et économique, ouvrant la voie à une nouvelle ère de prospérité partagée.
                        </p>
                        <a href="/blog/1" class="inline-flex items-center gap-2 text-amber-500 font-semibold hover:gap-3 transition-all">
                            Lire l'article
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>

            {{-- Article 2 --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-56">
                    <img src="https://picsum.photos/id/29/400/300" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">Énergie</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>8 Janvier 2025</span>
                        <span>•</span>
                        <span>5 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-blue mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        Transition énergétique : les opportunités pour les investisseurs en Afrique
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                        Les énergies renouvelables représentent un marché colossal encore sous-exploité sur le continent. Découvrez les secteurs les plus prometteurs.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                        Lire la suite
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            {{-- Article 3 --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-56">
                    <img src="https://picsum.photos/id/80/400/300" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">Infrastructures</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>2 Janvier 2025</span>
                        <span>•</span>
                        <span>6 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-blue mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        PPP & infrastructures : modèles gagnants pour le financement de projets
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                        Comment les partenariats public-privé révolutionnent le financement des grandes infrastructures africaines.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                        Lire la suite
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            {{-- Article 4 --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-56">
                    <img src="https://picsum.photos/id/42/400/300" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">Agriculture</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>20 Décembre 2024</span>
                        <span>•</span>
                        <span>4 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-blue mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        Agro-industrie sénégalaise : vers une souveraineté alimentaire durable
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                        Le Sénégal accélère sa transformation agro-industrielle. Décryptage des chaînes de valeur émergentes.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                        Lire la suite
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            {{-- Article 5 --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-56">
                    <img src="https://picsum.photos/id/96/400/300" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">Santé</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>12 Décembre 2024</span>
                        <span>•</span>
                        <span>5 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-blue mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        Santé en Afrique : mobiliser les investissements pour des soins accessibles
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                        Des équipements médicaux de pointe aux hôpitaux internationaux, comment SORIBA facilite l'accès aux soins.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                        Lire la suite
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>

            {{-- Article 6 --}}
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-amber-500/30">
                <div class="relative overflow-hidden h-56">
                    <img src="https://picsum.photos/id/26/400/300" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-amber-500 text-dark-blue text-xs font-bold rounded-full uppercase tracking-wide">Innovation</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                        <span>5 Décembre 2024</span>
                        <span>•</span>
                        <span>7 min</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark-blue mb-3 group-hover:text-amber-500 transition-colors line-clamp-2">
                        Solutions digitales et fintech : la révolution silencieuse de l'Afrique
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                        L'Afrique s'impose comme un laboratoire mondial d'innovation digitale. Analyse des tendances qui façonnent l'économie numérique.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-3 transition-all">
                        Lire la suite
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center gap-3 mt-12 pt-8 border-t border-gray-200">
            <button class="w-10 h-10 rounded-lg border border-gray-300 text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors flex items-center justify-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="w-10 h-10 rounded-lg bg-amber-500 text-dark-blue font-bold hover:bg-amber-400 transition-colors">1</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors">2</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors">3</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors flex items-center justify-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        {{-- CTA Newsletter --}}
        <div class="mt-16 p-8 lg:p-12 bg-light-blue rounded-2xl text-center">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-2xl lg:text-3xl font-bold text-dark-blue mb-4">
                Ne manquez aucune publication
            </h2>
            <p class="text-gray-600 max-w-lg mx-auto mb-8">
                Abonnez-vous à notre newsletter pour recevoir nos analyses et insights directement dans votre boîte mail.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Votre email professionnel" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                <button class="px-6 py-3 bg-amber-500 text-dark-blue font-semibold rounded-lg hover:bg-amber-400 transition-colors">
                    S'abonner
                </button>
            </div>
            <p class="text-gray-500 text-xs mt-4">🔒 Vos données sont protégées. Désabonnement à tout moment.</p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Filtres interactifs
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('bg-amber-500', 'text-dark-blue', 'font-bold');
                b.classList.add('text-gray-500', 'border', 'border-gray-200');
            });
            btn.classList.add('bg-amber-500', 'text-dark-blue', 'font-bold');
            btn.classList.remove('text-gray-500', 'border', 'border-gray-200');
            
            console.log('Filtre sélectionné:', btn.textContent);
        });
    });
</script>
@endpush