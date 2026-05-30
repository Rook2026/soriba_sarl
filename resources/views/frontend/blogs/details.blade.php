{{-- ============================================
     ARTICLE DÉTAILLÉ — SORIBA SARL
     Design identique à l'accueil
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
============================================ --}}

@extends('frontend.layout.master')

@section('title', ($article->title ?? 'Article') . ' — SORIBA SARL')
@section('meta_description', $article->excerpt ?? 'Insights et analyses de SORIBA SARL sur la coopération internationale et le développement africain.')

@section('content')

{{-- Reading progress bar --}}
<div id="readingProgress" class="fixed top-0 left-0 w-0 h-0.5 bg-gradient-to-r from-amber-500 to-amber-400 z-50 transition-all duration-100"></div>

{{-- ============================================
     ARTICLE HERO
============================================ --}}
<section class="relative pt-32 pb-12 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    {{-- Éléments décoratifs --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
    </div>

    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        
        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-3 text-sm text-gray-500 mb-8 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Accueil</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('blog.index') }}" class="hover:text-amber-400 transition-colors">Blog</a>
            <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-amber-400">{{ $article->category ?? 'Coopération internationale' }}</span>
        </nav>

        {{-- Catégorie badge --}}
        <div class="inline-flex items-center gap-2 px-4 py-1.5 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
            <span class="text-amber-400 text-xs font-bold tracking-wider uppercase">{{ $article->category ?? 'Coopération internationale' }}</span>
        </div>

        {{-- Titre --}}
        <h1 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold leading-tight max-w-3xl mb-6">
            {{ $article->title ?? "L'Afrique à l'horizon 2030 : nouvelles dynamiques des partenariats stratégiques" }}
        </h1>

        {{-- Excerpt --}}
        <p class="text-gray-400 text-lg leading-relaxed max-w-2xl mb-8">
            {{ $article->excerpt ?? "Le continent africain connaît une transformation profonde de ses modèles de coopération internationale. Les partenariats public-privé émergent comme des leviers décisifs pour accélérer le développement infrastructurel." }}
        </p>

        {{-- Meta informations --}}
        <div class="flex flex-wrap items-center gap-6">
            {{-- Auteur --}}
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 font-bold text-sm">
                    {{ substr($article->author ?? 'Souleymane DIALLO', 0, 2) }}
                </div>
                <div>
                    <p class="text-gray-500 text-xs uppercase tracking-wider">Auteur</p>
                    <p class="text-white text-sm font-medium">{{ $article->author ?? 'Souleymane DIALLO' }}</p>
                </div>
            </div>

            {{-- Date --}}
            <div class="flex items-center gap-2 text-gray-400 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <span>{{ $article->published_at ?? '15 Janvier 2025' }}</span>
            </div>

            {{-- Temps de lecture --}}
            <div class="flex items-center gap-2 text-gray-400 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <span>{{ $article->read_time ?? '8' }} min de lecture</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     ARTICLE CONTENT
============================================ --}}
<section class="py-12 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        {{-- Cover image --}}
        <div class="rounded-2xl overflow-hidden mb-12 shadow-lg">
            <img src="https://picsum.photos/id/104/1200/600" alt="Article cover" class="w-full h-auto object-cover">
        </div>

        {{-- Layout: 2 colonnes --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            {{-- Colonne gauche: Contenu principal --}}
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none prose-headings:text-dark-blue prose-p:text-gray-600 prose-strong:text-dark-blue prose-a:text-amber-500 prose-blockquote:border-l-amber-500 prose-blockquote:bg-amber-50 prose-blockquote:p-4 prose-blockquote:rounded-r-lg">
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Le continent africain traverse une période charnière de son histoire économique. Portée par une démographie dynamique, des ressources naturelles abondantes et une classe moyenne en plein essor, l'Afrique s'impose progressivement comme le prochain grand pôle mondial de développement.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dans ce contexte, les partenariats stratégiques — qu'ils soient bilatéraux, multilatéraux ou issus du secteur privé — jouent un rôle de catalyseur sans précédent. SORIBA SARL se positionne au cœur de cette transformation, en agissant comme un pont entre les acteurs institutionnels, les investisseurs et les porteurs de projets.
                    </p>

                    <h2 class="text-2xl font-bold text-dark-blue mt-8 mb-4">La montée en puissance des PPP en Afrique</h2>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Les partenariats public-privé (PPP) connaissent une expansion remarquable à travers le continent. Longtemps perçus avec méfiance par certains gouvernements, ils sont aujourd'hui reconnus comme l'un des outils les plus efficaces pour financer des infrastructures critiques sans alourdir les dettes souveraines.
                    </p>

                    <blockquote class="border-l-4 border-amber-500 bg-amber-50 p-5 italic text-gray-700 my-8 rounded-r-lg">
                        <p class="text-gray-700">"L'Afrique n'a pas besoin de charité — elle a besoin de partenariats intelligents, structurés et orientés vers la création de valeur partagée."</p>
                        <footer class="text-sm text-gray-500 mt-2">— Souleymane DIALLO, Gérant de SORIBA SARL</footer>
                    </blockquote>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Les secteurs les plus attractifs pour ces modèles hybrides demeurent les transports, l'énergie, la santé et l'éducation. Des projets emblématiques dans plusieurs pays francophones illustrent cette tendance croissante.
                    </p>

                    <h2 class="text-2xl font-bold text-dark-blue mt-8 mb-4">Nouvelles dynamiques géopolitiques</h2>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        L'émergence de nouvelles puissances sur l'échiquier africain — notamment la Russie, la Chine, la Turquie et les monarchies du Golfe — redessine les équilibres traditionnels. Ces acteurs apportent des modèles de coopération alternatifs, fondés sur des échanges plus directs et moins conditionnels.
                    </p>

                    <ul class="list-none space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">—</span>
                            <span class="text-gray-600">Investissements massifs dans les infrastructures ferroviaires et portuaires</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">—</span>
                            <span class="text-gray-600">Accords de coopération technologique et de transfert de compétences</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">—</span>
                            <span class="text-gray-600">Programmes de formation et d'expertise dans les universités étrangères</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-500 font-bold">—</span>
                            <span class="text-gray-600">Développement de zones économiques spéciales à gestion partagée</span>
                        </li>
                    </ul>

                    <h3 class="text-xl font-bold text-dark-blue mt-6 mb-4">Le rôle des diasporas qualifiées</h3>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Les diasporas africaines formées à l'étranger — notamment en Russie, en France, en Chine et dans le monde arabe — constituent un actif stratégique sous-valorisé. Porteurs d'expertises techniques pointues et de réseaux relationnels internationaux, ils représentent des vecteurs naturels de transfert de savoir-faire.
                    </p>

                    <div class="w-16 h-px bg-gradient-to-r from-amber-500 to-transparent my-10"></div>

                    <h2 class="text-2xl font-bold text-dark-blue mt-8 mb-4">Perspectives pour 2025–2030</h2>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Les cinq prochaines années seront décisives. Les pays africains qui sauront attirer des capitaux privés tout en préservant leur souveraineté économique et en développant leurs ressources humaines locales deviendront les leaders d'un nouveau cycle de croissance.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        SORIBA SARL s'engage à accompagner cette transition en proposant une ingénierie de projet rigoureuse, un réseau de partenaires qualifiés et une connaissance approfondie des réalités institutionnelles et culturelles du continent.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-8">
                        La plateforme stratégique que nous construisons est conçue pour être un accélérateur de développement — pas seulement un intermédiaire, mais un partenaire engagé dans la réussite durable de chaque projet.
                    </p>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-3 pt-8 mt-8 border-t border-gray-200">
                        <span class="px-3 py-1.5 text-xs font-medium text-gray-500 border border-gray-200 rounded-full hover:border-amber-500 hover:text-amber-500 transition-colors cursor-pointer">#CoopérationInternationale</span>
                        <span class="px-3 py-1.5 text-xs font-medium text-gray-500 border border-gray-200 rounded-full hover:border-amber-500 hover:text-amber-500 transition-colors cursor-pointer">#PPP</span>
                        <span class="px-3 py-1.5 text-xs font-medium text-gray-500 border border-gray-200 rounded-full hover:border-amber-500 hover:text-amber-500 transition-colors cursor-pointer">#Afrique2030</span>
                        <span class="px-3 py-1.5 text-xs font-medium text-gray-500 border border-gray-200 rounded-full hover:border-amber-500 hover:text-amber-500 transition-colors cursor-pointer">#Investissements</span>
                        <span class="px-3 py-1.5 text-xs font-medium text-gray-500 border border-gray-200 rounded-full hover:border-amber-500 hover:text-amber-500 transition-colors cursor-pointer">#Développement</span>
                    </div>
                </div>
            </div>

            {{-- Colonne droite: Sidebar --}}
            <aside class="space-y-6">
                
                {{-- Share buttons --}}
                <div class="bg-light-blue rounded-xl p-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Partager</h3>
                    <div class="flex gap-3">
                        <a href="#" class="flex-1 py-2.5 border border-gray-300 rounded-lg text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors flex items-center justify-center gap-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                            </svg>
                            X
                        </a>
                        <a href="#" class="flex-1 py-2.5 border border-gray-300 rounded-lg text-gray-500 hover:border-amber-500 hover:text-amber-500 transition-colors flex items-center justify-center gap-2 text-sm">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                            in
                        </a>
                    </div>
                </div>

                {{-- Articles connexes --}}
                <div class="bg-light-blue rounded-xl p-6">
                    <h3 class="text-dark-blue text-sm font-bold uppercase tracking-wider mb-4">Articles connexes</h3>
                    <div class="space-y-4">
                        <a href="#" class="flex gap-3 group">
                            <div class="w-14 h-14 rounded-lg bg-amber-500/10 flex items-center justify-center text-xl">⚡</div>
                            <div>
                                <h4 class="text-dark-blue font-semibold group-hover:text-amber-500 transition-colors line-clamp-2">Transition énergétique en Afrique subsaharienne</h4>
                                <p class="text-gray-500 text-xs mt-1">8 Janvier 2025</p>
                            </div>
                        </a>
                        <a href="#" class="flex gap-3 group">
                            <div class="w-14 h-14 rounded-lg bg-amber-500/10 flex items-center justify-center text-xl">🏗️</div>
                            <div>
                                <h4 class="text-dark-blue font-semibold group-hover:text-amber-500 transition-colors line-clamp-2">PPP & financement des grandes infrastructures</h4>
                                <p class="text-gray-500 text-xs mt-1">2 Janvier 2025</p>
                            </div>
                        </a>
                        <a href="#" class="flex gap-3 group">
                            <div class="w-14 h-14 rounded-lg bg-amber-500/10 flex items-center justify-center text-xl">🌾</div>
                            <div>
                                <h4 class="text-dark-blue font-semibold group-hover:text-amber-500 transition-colors line-clamp-2">Agro-industrie sénégalaise : souveraineté alimentaire</h4>
                                <p class="text-gray-500 text-xs mt-1">20 Décembre 2024</p>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Newsletter --}}
                <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl p-6 text-white">
                    <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-2">Newsletter</h3>
                    <p class="text-white/80 text-sm mb-4">Recevez nos analyses directement dans votre boîte mail.</p>
                    <input type="email" placeholder="votre@email.com" class="w-full px-4 py-2.5 rounded-lg bg-white/20 border border-white/30 text-white placeholder:text-white/60 focus:outline-none focus:ring-2 focus:ring-white mb-3">
                    <button class="w-full py-2.5 bg-white text-amber-600 font-semibold rounded-lg hover:bg-white/90 transition-colors">S'abonner</button>
                </div>

                {{-- Auteur --}}
                <div class="bg-light-blue rounded-xl p-6 text-center">
                    <div class="w-16 h-16 rounded-full bg-dark-blue flex items-center justify-center mx-auto mb-3">
                        <span class="text-amber-500 text-xl font-bold">SD</span>
                    </div>
                    <h3 class="text-dark-blue font-bold text-lg">Souleymane DIALLO</h3>
                    <p class="text-gray-500 text-sm">Gérant & Directeur Général</p>
                    <p class="text-gray-500 text-sm mt-2">Expert en coopération internationale et développement des PPP en Afrique.</p>
                </div>
            </aside>
        </div>

        {{-- Back to blog button --}}
        <div class="text-center pt-12 pb-8">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-dark-blue text-dark-blue font-semibold rounded-full hover:bg-dark-blue hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5M12 19l-7-7 7-7"></path>
                </svg>
                Retour au blog
            </a>
        </div>
    </div>
</section>

{{-- ============================================
     CTA SECTION
============================================ --}}
<section class="py-16 bg-dark-blue">
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
        <a href="{{ route('contact.show') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
            Initier un partenariat
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Reading progress bar
    window.addEventListener('scroll', function() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.getElementById('readingProgress').style.width = scrolled + '%';
    });
</script>
@endpush