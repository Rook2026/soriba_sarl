{{-- ============================================
     FOOTER — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
============================================ --}}

<footer class="bg-dark-blue border-t border-amber-500/20">

    {{-- Bande gold supérieure --}}
    <div class="h-px bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>

    {{-- Contenu principal --}}
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

            {{-- Colonne 1 : Identité --}}
            <div class="lg:col-span-1">
                @include('frontend.layout.logo')
                <p class="mt-6 text-gray-400 text-sm leading-relaxed max-w-xs">
                    Catalyseur de partenariats stratégiques pour le développement durable de l'Afrique.
                </p>
                <div class="w-10 h-px bg-amber-500 my-6"></div>
                {{-- Réseaux sociaux --}}
                <div class="flex items-center gap-3">
                    @php
                    $socials = [
                        ['icon' => 'linkedin', 'href' => '#', 'title' => 'LinkedIn'],
                        ['icon' => 'twitter', 'href' => '#', 'title' => 'Twitter / X'],
                        ['icon' => 'facebook', 'href' => '#', 'title' => 'Facebook'],
                    ];
                    @endphp
                    @foreach($socials as $s)
                    <a href="{{ $s['href'] }}" title="{{ $s['title'] }}"
                       class="w-9 h-9 rounded-full border border-gray-600 flex items-center justify-center text-gray-400 hover:border-amber-500 hover:text-amber-500 transition-all duration-300">
                        @if($s['icon'] === 'linkedin')
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        @elseif($s['icon'] === 'twitter')
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                        @else
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        @endif
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Colonne 2 : Services --}}
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Domaines d'activité</h4>
                <div class="w-8 h-px bg-amber-500 mb-5"></div>
                <ul class="space-y-3">
                    @php
                    $footerServices = ['Énergie & Ressources','Infrastructures','Agriculture','Santé & Médical','Éducation & Sport','Digital & Logistique'];
                    @endphp
                    @foreach($footerServices as $serv)
                    <li>
                        <a href="/services" class="text-gray-400 text-sm hover:text-amber-500 transition-colors flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-amber-500 opacity-50 group-hover:opacity-100"></span>
                            {{ $serv }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Colonne 3 : Navigation --}}
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Navigation</h4>
                <div class="w-8 h-px bg-amber-500 mb-5"></div>
                <ul class="space-y-3">
                    @php
                    $footerNav = [
                        ['href' => '/',              'label' => 'Accueil'],
                        ['href' => '/about',         'label' => 'À propos'],
                        ['href' => '/projects',      'label' => 'Projets'],
                        ['href' => '/services',      'label' => 'Services'],
                        ['href' => '/experts',       'label' => 'Experts'],
                        ['href' => '/blog',          'label' => 'Blog & Actualités'],
                        ['href' => '/contact',       'label' => 'Contact'],
                        ['href' => '/privacy-policy', 'label' => 'Confidentialité'],
                    ];
                    @endphp
                    @foreach($footerNav as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="text-gray-400 text-sm hover:text-amber-500 transition-colors flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-amber-500 opacity-50 group-hover:opacity-100"></span>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Colonne 4 : Contact + Carte --}}
            <div>
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Contact</h4>
                <div class="w-8 h-px bg-amber-500 mb-5"></div>
                <div class="space-y-4">
                    {{-- Adresse --}}
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 flex-shrink-0 rounded-md bg-amber-500/10 border border-amber-500/20 flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white text-sm font-medium">Dakar, Sénégal</p>
                            <p class="text-gray-500 text-xs mt-0.5">Afrique de l'Ouest</p>
                        </div>
                    </div>
                    {{-- Téléphone --}}
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 flex-shrink-0 rounded-md bg-amber-500/10 border border-amber-500/20 flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <a href="tel:+221781792510" class="text-white text-sm hover:text-amber-500 transition-colors">+221 78 179 25 10</a>
                    </div>
                    {{-- Email --}}
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 flex-shrink-0 rounded-md bg-amber-500/10 border border-amber-500/20 flex items-center justify-center">
                            <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <a href="mailto:contact@soriba-sarl.com" class="text-white text-sm hover:text-amber-500 transition-colors">contact@soriba-sarl.com</a>
                    </div>
                </div>

                {{-- Badge Certification --}}
                <div class="mt-6 p-4 bg-amber-500/5 border border-amber-500/20 rounded-lg">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-md bg-amber-500 flex items-center justify-center">
                            <svg class="w-5 h-5 text-dark-blue" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white text-xs font-bold uppercase tracking-wider">Plateforme certifiée</p>
                            <p class="text-gray-500 text-xs">Partenaire institutionnel</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Tagline band --}}
    <div class="border-t border-white/5 border-b border-white/5">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-12 py-4">
            <p class="text-center text-gray-500 text-xs uppercase tracking-wider">
                Coopération internationale • Partenariats public-privé • Solutions sur mesure
            </p>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 py-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-gray-500 text-xs">
                &copy; {{ date('Y') }} SORIBA SARL. Tous droits réservés.
            </p>
            <div class="flex items-center gap-1">
                <span class="text-gray-500 text-xs">Conçu avec</span>
                <span class="text-amber-500 text-xs">◆</span>
                <span class="text-gray-500 text-xs">pour l'excellence africaine</span>
            </div>
        </div>
    </div>

    {{-- Bande gold inférieure --}}
    <div class="h-px bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>

</footer>