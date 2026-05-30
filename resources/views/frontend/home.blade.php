{{-- ============================================
     HOME — SORIBA SARL
     Page d'accueil principale du site
     Design minimaliste moderne avec Tailwind
     Palette: Bleu foncé, Bleu clair, Blanc, Jaune
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'SORIBA SARL — Accueil | Plateforme Stratégique Africaine')
@section('og_title', 'SORIBA SARL — Plateforme Stratégique Africaine')

@push('styles')
<style>
    /* Styles personnalisés pour le slider futuriste */
    .slider-container {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
    }
    
    .slider-track {
        display: flex;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .slider-slide {
        flex-shrink: 0;
        width: 100%;
        position: relative;
    }
    
    .slider-slide img,
    .slider-slide video {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
    
    .slider-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        padding: 20px;
        color: white;
    }
    
    .slider-dots {
        position: absolute;
        bottom: 16px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
        z-index: 10;
    }
    
    .slider-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .slider-dot.active {
        width: 24px;
        border-radius: 4px;
        background: #F5C518;
    }
    
    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background: rgba(0,0,0,0.5);
        backdrop-filter: blur(8px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 10;
    }
    
    .slider-nav:hover {
        background: #F5C518;
        color: #0A192F;
    }
    
    .slider-nav.prev {
        left: 16px;
    }
    
    .slider-nav.next {
        right: 16px;
    }
    
    @keyframes pulse-glow {
        0%, 100% { opacity: 0.5; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.05); }
    }
    
    .glow-effect {
        position: absolute;
        inset: -2px;
        background: linear-gradient(135deg, #F5C518, #D4AF37, #F5C518);
        border-radius: 14px;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }
    
    .slider-container:hover .glow-effect {
        opacity: 0.3;
        animation: pulse-glow 2s ease-in-out infinite;
    }
</style>
@endpush

@section('content')

{{-- ============================================
     HERO SECTION AVEC SLIDER FUTURISTE
============================================ --}}
<section class="relative min-h-screen flex items-center overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    {{-- Éléments décoratifs géométriques --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-amber-400/10 rounded-full"></div>
    </div>

    <div class="relative w-full max-w-[1440px] mx-auto px-6 lg:px-12 py-24 lg:py-32">
        {{-- Grille: Texte à gauche | Slider à droite --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            {{-- Colonne gauche: Texte --}}
            <div>
                <div class="inline-block mb-6">
                    <span class="text-amber-400 text-sm tracking-wider font-medium">DAKAR · SÉNÉGAL · AFRIQUE</span>
                    <div class="h-px w-12 bg-amber-400 mt-2"></div>
                </div>
                
                <h1 class="text-white text-4xl lg:text-6xl xl:text-7xl font-bold leading-tight mb-6">
                    Catalyseur de
                    <span class="text-amber-400">partenariats</span>
                    <br>pour l'Afrique
                </h1>
                
                <p class="text-gray-400 text-base lg:text-lg leading-relaxed max-w-lg mb-10">
                    SORIBA SARL orchestre des partenariats public-privé et des investissements à fort impact pour le développement stratégique du continent africain.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="/services" class="px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-md hover:bg-amber-400 transition-colors">
                        Nos services
                    </a>
                    <a href="/contact" class="px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-md hover:bg-amber-500/10 transition-colors">
                        Initier un partenariat
                    </a>
                </div>
            </div>
            
            {{-- Colonne droite: Slider futuriste --}}
            <div class="relative slider-container group">
                <div class="glow-effect"></div>
                
                {{-- Track du slider --}}
                <div class="slider-track" id="sliderTrack">
                    @php
                    // Médias du slider (à remplacer par vos vraies données)
                    $sliderMedia = [
                        ['type' => 'image', 'src' => 'https://picsum.photos/id/104/800/500', 'title' => 'Conférence internationale à Dakar', 'date' => 'Mars 2025'],
                        ['type' => 'image', 'src' => 'https://picsum.photos/id/29/800/500', 'title' => 'Signature de partenariat stratégique', 'date' => 'Février 2025'],
                        ['type' => 'image', 'src' => 'https://picsum.photos/id/80/800/500', 'title' => 'Forum des investisseurs', 'date' => 'Janvier 2025'],
                        ['type' => 'image', 'src' => 'https://picsum.photos/id/42/800/500', 'title' => 'Gala de l\'entrepreneuriat africain', 'date' => 'Décembre 2024'],
                        ['type' => 'image', 'src' => 'https://picsum.photos/id/96/800/500', 'title' => 'Atelier de formation', 'date' => 'Novembre 2024'],
                    ];
                    @endphp
                    
                    @foreach($sliderMedia as $media)
                    <div class="slider-slide">
                        @if($media['type'] === 'video')
                            <video autoplay muted loop playsinline>
                                <source src="{{ $media['src'] }}" type="video/mp4">
                            </video>
                        @else
                            <img src="{{ $media['src'] }}" alt="{{ $media['title'] }}">
                        @endif
                        <div class="slider-caption">
                            <p class="text-sm text-amber-400 font-medium">{{ $media['date'] }}</p>
                            <p class="text-lg font-semibold">{{ $media['title'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                {{-- Navigation --}}
                <div class="slider-nav prev" onclick="prevSlide()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <div class="slider-nav next" onclick="nextSlide()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
                
                {{-- Dots indicateurs --}}
                <div class="slider-dots" id="sliderDots">
                    @foreach($sliderMedia as $index => $media)
                    <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Stats (déplacées sous le hero) --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20 pt-12 border-t border-white/10">
            @php
            $stats = [
                ['value' => '9+', 'label' => "Secteurs d'expertise"],
                ['value' => 'PPP', 'label' => 'Partenariats structurés'],
                ['value' => '3', 'label' => "Pays d'intervention"],
                ['value' => '∞', 'label' => 'Ambitions pour l\'Afrique'],
            ];
            @endphp
            @foreach($stats as $stat)
            <div>
                <div class="text-3xl lg:text-4xl font-bold text-amber-400 mb-1">{{ $stat['value'] }}</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     SERVICES SECTION
============================================ --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16">
            <div>
                <div class="w-12 h-px bg-amber-500 mb-4"></div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                    Domaines d'<span class="text-amber-500">expertise</span>
                </h2>
                <p class="text-gray-500 max-w-lg">
                    Une expertise multisectorielle au service de partenariats durables et d'investissements à impact.
                </p>
            </div>
            <a href="/services" class="text-blue-900 font-medium border-b border-blue-900 pb-1 hover:text-amber-500 hover:border-amber-500 transition-colors">
                Tous nos services →
            </a>
        </div>

        {{-- Grille services --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $services = [
                ['title' => 'Énergie & Ressources', 'desc' => 'Pétrole, gaz, énergies renouvelables et trading de matières premières à l\'échelle internationale.'],
                ['title' => 'Infrastructures', 'desc' => 'Routes, bâtiments et grands projets industriels au cœur du développement africain.'],
                ['title' => 'Agriculture', 'desc' => 'De la production à la transformation, structuration complète des filières agro-industrielles.'],
                ['title' => 'Santé & Médical', 'desc' => 'Équipements médicaux, hôpitaux partenaires et solutions d\'évacuation sanitaire premium.'],
                ['title' => 'Éducation & Sport', 'desc' => 'Universités, centres professionnels et clubs sportifs pour la jeunesse africaine.'],
                ['title' => 'Digital & Logistique', 'desc' => 'Transit, IT, e-commerce et tourisme d\'affaires pour une Afrique connectée au monde.'],
            ];
            @endphp
            @foreach($services as $service)
            <div class="group p-8 border border-gray-100 hover:border-amber-500/30 hover:shadow-lg transition-all duration-300 bg-white">
                <div class="w-12 h-12 bg-blue-900 rounded-sm mb-6 group-hover:bg-amber-500 transition-colors"></div>
                <h3 class="text-xl font-bold text-blue-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-500 leading-relaxed mb-6">{{ $service['desc'] }}</p>
                <a href="/services" class="text-gray-400 text-sm font-medium uppercase tracking-wider group-hover:text-amber-500 transition-colors">
                    En savoir plus
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     ABOUT / EXPERTISE SECTION
============================================ --}}
<section class="py-24 lg:py-32 bg-blue-50">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
            
            {{-- Colonne gauche --}}
            <div>
                <div class="w-12 h-px bg-amber-500 mb-4"></div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-6">
                    Une plateforme au service de <span class="text-amber-500">l'Afrique émergente</span>
                </h2>
                <p class="text-gray-500 leading-relaxed mb-10">
                    Notre vocation est de faciliter les échanges économiques et diplomatiques entre l'Afrique et le monde, en structurant des partenariats robustes et durables.
                </p>

                {{-- Expertises --}}
                @php
                $expertises = [
                    ['num' => '01', 'title' => 'Coopération internationale', 'desc' => 'Facilitation des échanges diplomatiques et économiques entre l\'Afrique et le monde.'],
                    ['num' => '02', 'title' => 'Montage PPP', 'desc' => 'Structuration de partenariats public-privé robustes et durables pour les États africains.'],
                    ['num' => '03', 'title' => 'Intelligence sectorielle', 'desc' => 'Analyse et conseil stratégique sur les marchés africains à fort potentiel de croissance.'],
                ];
                @endphp
                @foreach($expertises as $exp)
                <div class="flex gap-6 py-6 border-b border-gray-200 group hover:border-amber-500 transition-colors">
                    <div class="text-3xl font-bold text-gray-300 group-hover:text-amber-500 transition-colors">{{ $exp['num'] }}</div>
                    <div>
                        <h4 class="text-lg font-semibold text-blue-900 mb-2">{{ $exp['title'] }}</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">{{ $exp['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Colonne droite --}}
            <div class="bg-white p-8 lg:p-10 shadow-lg">
                <div class="mb-8">
                    <p class="text-gray-600 text-lg italic leading-relaxed">
                        "L'Afrique dispose de tout ce dont elle a besoin pour se développer. Il lui faut des partenaires stratégiques de confiance."
                    </p>
                </div>
                
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-blue-900 flex items-center justify-center text-white font-bold text-lg">
                        SD
                    </div>
                    <div>
                        <div class="font-bold text-blue-900">Souleymane DIALLO</div>
                        <div class="text-gray-500 text-sm">Gérant & Directeur Général</div>
                    </div>
                </div>

                {{-- Stats about --}}
                <div class="grid grid-cols-2 gap-4 mt-8">
                    @php $aboutStats = [['val'=>'9','label'=>'Secteurs'],['val'=>'3+','label'=>'Pays'],['val'=>'PPP','label'=>'Modèle'],['val'=>'∞','label'=>'Vision']]; @endphp
                    @foreach($aboutStats as $st)
                    <div class="text-center py-6 bg-gray-50">
                        <div class="text-2xl font-bold text-amber-500">{{ $st['val'] }}</div>
                        <div class="text-gray-500 text-xs uppercase tracking-wider mt-1">{{ $st['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     PROCESS SECTION
============================================ --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                Notre <span class="text-amber-500">processus</span>
            </h2>
            <p class="text-gray-500">
                Une méthodologie éprouvée pour garantir la réussite de vos projets stratégiques.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
            $steps = [
                ['num' => '01', 'title' => 'Analyse', 'desc' => 'Étude approfondie du contexte, des enjeux et des opportunités du marché cible.'],
                ['num' => '02', 'title' => 'Mise en relation', 'desc' => 'Identification et connexion des partenaires institutionnels et privés adaptés.'],
                ['num' => '03', 'title' => 'Structuration', 'desc' => 'Montage juridique, financier et opérationnel du partenariat.'],
                ['num' => '04', 'title' => 'Déploiement', 'desc' => 'Suivi de la mise en œuvre et accompagnement continu jusqu\'à la concrétisation.'],
            ];
            @endphp
            @foreach($steps as $step)
            <div class="text-center group">
                <div class="w-16 h-16 rounded-full border-2 border-gray-200 group-hover:border-amber-500 flex items-center justify-center mx-auto mb-6 transition-colors">
                    <span class="text-xl font-bold text-gray-400 group-hover:text-amber-500 transition-colors">{{ $step['num'] }}</span>
                </div>
                <h3 class="text-lg font-bold text-blue-900 mb-3">{{ $step['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     TEAM SECTION
============================================ --}}
<section class="py-24 lg:py-32 bg-blue-50">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16">
            <div>
                <div class="w-12 h-px bg-amber-500 mb-4"></div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                    Équipe <span class="text-amber-500">dirigeante</span>
                </h2>
                <p class="text-gray-500 max-w-lg">
                    Des experts passionnés au service du développement africain.
                </p>
            </div>
            <a href="/experts" class="text-blue-900 font-medium border-b border-blue-900 pb-1 hover:text-amber-500 hover:border-amber-500 transition-colors">
                Tous les experts →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $team = [
                ['name' => 'Souleymane DIALLO', 'role' => 'Gérant & Directeur Général', 'bio' => 'Ingénieur agronome · Maire de Ouassadou'],
                ['name' => 'Ricardo O. OKE', 'role' => 'Directeur Technique', 'bio' => 'Mécatronique & Robotique (Moscou)'],
                ['name' => 'Franck K. BAMIGBOLA', 'role' => 'Directeur Partenariats', 'bio' => 'Entrepreneur international (Russie)'],
            ];
            @endphp
            @foreach($team as $member)
            <div class="bg-white p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 rounded-full bg-blue-900 flex items-center justify-center mb-6">
                    <span class="text-white text-xl font-bold">{{ substr($member['name'], 0, 1) }}</span>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-1">{{ $member['name'] }}</h3>
                <p class="text-amber-500 text-sm font-medium mb-3">{{ $member['role'] }}</p>
                <p class="text-gray-500 text-sm">{{ $member['bio'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     CTA SECTION
============================================ --}}
<section class="py-24 lg:py-32 bg-blue-900">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="max-w-3xl mx-auto text-center">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">
                Vous avez un projet ?
                <br>
                <span class="text-amber-500">Parlons-en.</span>
            </h2>
            <p class="text-gray-400 text-lg mb-10">
                Notre équipe est disponible pour étudier vos opportunités d'investissement et de partenariat en Afrique.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="/contact" class="px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-md hover:bg-amber-400 transition-colors">
                    Initier un partenariat
                </a>
                <a href="tel:+221781792510" class="px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-md hover:bg-amber-500/10 transition-colors">
                    +221 78 179 25 10
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // ============================================
    // SLIDER FUTURISTE
    // ============================================
    let currentIndex = 0;
    const track = document.getElementById('sliderTrack');
    const slides = document.querySelectorAll('.slider-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const totalSlides = slides.length;
    let autoPlayInterval;
    let isHovering = false;
    
    function updateSlider() {
        const slideWidth = slides[0].clientWidth;
        track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        
        // Mettre à jour les dots
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
        resetAutoPlay();
    }
    
    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
        resetAutoPlay();
    }
    
    function goToSlide(index) {
        currentIndex = index;
        updateSlider();
        resetAutoPlay();
    }
    
    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            if (!isHovering) {
                nextSlide();
            }
        }, 5000);
    }
    
    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }
    
    // Gestion du hover sur le slider
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        isHovering = true;
    });
    sliderContainer.addEventListener('mouseleave', () => {
        isHovering = false;
    });
    
    // Redimensionnement
    window.addEventListener('resize', () => {
        updateSlider();
    });
    
    // Démarrer l'autoplay
    startAutoPlay();
    
    // Exposer les fonctions globalement
    window.nextSlide = nextSlide;
    window.prevSlide = prevSlide;
    window.goToSlide = goToSlide;
</script>
@endpush