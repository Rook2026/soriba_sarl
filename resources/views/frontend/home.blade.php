@extends('frontend.layout.master')

@section('title', 'SORIBA SARL — Accueil | Plateforme Stratégique Africaine')
@section('og_title', 'SORIBA SARL — Plateforme Stratégique Africaine')

@push('styles')
<style>
    .slider-container { position: relative; overflow: hidden; border-radius: 12px; }
    .slider-track { display: flex; transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
    .slider-slide { flex-shrink: 0; width: 100%; position: relative; }
    .slider-slide img, .slider-slide video { width: 100%; height: 400px; object-fit: cover; }
    .slider-caption { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 20px; color: white; }
    .slider-dots { position: absolute; bottom: 16px; left: 0; right: 0; display: flex; justify-content: center; gap: 10px; z-index: 10; }
    .slider-dot { width: 8px; height: 8px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; transition: all 0.3s ease; }
    .slider-dot.active { width: 24px; border-radius: 4px; background: #F5C518; }
    .slider-nav { position: absolute; top: 50%; transform: translateY(-50%); width: 40px; height: 40px; background: rgba(0,0,0,0.5); backdrop-filter: blur(8px); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; z-index: 10; }
    .slider-nav:hover { background: #F5C518; color: #0A192F; }
    .slider-nav.prev { left: 16px; }
    .slider-nav.next { right: 16px; }
    @keyframes pulse-glow { 0%, 100% { opacity: 0.5; transform: scale(1); } 50% { opacity: 1; transform: scale(1.05); } }
    .glow-effect { position: absolute; inset: -2px; background: linear-gradient(135deg, #F5C518, #D4AF37, #F5C518); border-radius: 14px; opacity: 0; transition: opacity 0.3s ease; z-index: -1; }
    .slider-container:hover .glow-effect { opacity: 0.3; animation: pulse-glow 2s ease-in-out infinite; }
</style>
@endpush

@section('content')

{{-- HERO --}}
<section class="relative min-h-screen flex items-center overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-amber-400/10 rounded-full"></div>
    </div>
    <div class="relative w-full max-w-[1440px] mx-auto px-6 lg:px-12 py-24 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <div class="inline-block mb-6">
                    <span class="text-amber-400 text-sm tracking-wider font-medium">DAKAR · SÉNÉGAL · AFRIQUE</span>
                    <div class="h-px w-12 bg-amber-400 mt-2"></div>
                </div>
                <h1 class="text-white text-4xl lg:text-6xl xl:text-7xl font-bold leading-tight mb-6">
                    Catalyseur de <span class="text-amber-400">partenariats</span><br>pour l'Afrique
                </h1>
                <p class="text-gray-400 text-base lg:text-lg leading-relaxed max-w-lg mb-10">
                    SORIBA SARL orchestre des partenariats public-privé et des investissements à fort impact pour le développement stratégique du continent africain.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('services') }}" class="px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-md hover:bg-amber-400 transition-colors">Nos services</a>
                    <a href="{{ route('partners') }}" class="px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-md hover:bg-amber-500/10 transition-colors">Initier un partenariat</a>
                </div>
            </div>
            <div class="relative slider-container group">
                <div class="glow-effect"></div>
                @php
                $sliderMedia = [
                    ['type' => 'video', 'src' => asset('images/slider/video1.mp4'), 'title' => 'MINCOM - Unité de coordination Nationale / Agropole', 'date' => 'Mars 2026'],
                    ['type' => 'image', 'src' => asset('images/slider/image3.jpg'), 'title' => 'Academie de Football', 'date' => 'Mai 2026'],
                    ['type' => 'image', 'src' => asset('images/slider/image5.jpg'), 'title' => 'Rencontre du Maire de la Commune de WASSADOU', 'date' => 'Mars 2026'],
                    ['type' => 'image', 'src' => asset('images/slider/image1.jpg'), 'title' => 'APROSI Projet d\'État Senegalais', 'date' => 'Mars 2026'],
                    ['type' => 'image', 'src' => asset('images/slider/image6.jpg'), 'title' => 'Signature de partenariat stratégique / Ministère de l\'énergie de la Russie', 'date' => 'Avril 2026'],
                ];
                @endphp
                <div class="slider-track" id="sliderTrack">
                    @foreach($sliderMedia as $media)
                    <div class="slider-slide">
                        @if($media['type'] === 'video')
                            <video autoplay muted loop playsinline><source src="{{ $media['src'] }}" type="video/mp4"></video>
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
                <div class="slider-nav prev" onclick="prevSlide()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </div>
                <div class="slider-nav next" onclick="nextSlide()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
                <div class="slider-dots" id="sliderDots">
                    @foreach($sliderMedia as $index => $media)
                    <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20 pt-12 border-t border-white/10">
            @foreach($stats as $stat)
            <div>
                <div class="text-3xl lg:text-4xl font-bold text-amber-400 mb-1">{{ $stat->valeur }}</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">{{ $stat->label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16">
            <div>
                <div class="w-12 h-px bg-amber-500 mb-4"></div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">Domaines d'<span class="text-amber-500">expertise</span></h2>
                <p class="text-gray-500 max-w-lg">Une expertise multisectorielle au service de partenariats durables et d'investissements à impact.</p>
            </div>
            <a href="{{ route('services') }}" class="text-blue-900 font-medium border-b border-blue-900 pb-1 hover:text-amber-500 hover:border-amber-500 transition-colors">Tous nos services →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="group p-8 border border-gray-100 hover:border-amber-500/30 hover:shadow-lg transition-all duration-300 bg-white">
                <div style="width:48px;height:48px;background:#0A192F;border-radius:4px;margin-bottom:24px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg style="width:24px;height:24px;" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-3 group-hover:text-amber-500 transition-colors">{{ $service->title }}</h3>
                <p class="text-gray-500 leading-relaxed mb-6">{{ $service->description }}</p>
                <a href="{{ route('services.show', $service->slug) }}" class="text-gray-400 text-sm font-medium uppercase tracking-wider group-hover:text-amber-500 transition-colors">En savoir plus →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- À PROPOS --}}
<section class="py-24 lg:py-32 bg-blue-50">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
            <div>
                <div class="w-12 h-px bg-amber-500 mb-4"></div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-6">Une plateforme au service de <span class="text-amber-500">l'Afrique émergente</span></h2>
                <p class="text-gray-500 leading-relaxed mb-10">Notre vocation est de faciliter les échanges économiques et diplomatiques entre l'Afrique et le monde, en structurant des partenariats robustes et durables.</p>
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
            <div class="bg-white p-8 lg:p-10 shadow-lg">
                <p class="text-gray-600 text-lg italic leading-relaxed mb-8">"L'Afrique dispose de tout ce dont elle a besoin pour se développer. Il lui faut des partenaires stratégiques de confiance."</p>
                @php $fondateur = $experts->where('slug', 'souleymane-diallo')->first() ?? $experts->first(); @endphp
                @if($fondateur)
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 rounded-full bg-blue-900 flex items-center justify-center overflow-hidden">
                        @if($fondateur->photo)
                            <img src="{{ asset('storage/' . $fondateur->photo) }}" alt="{{ $fondateur->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-white font-bold text-lg">{{ $fondateur->initials }}</span>
                        @endif
                    </div>
                    <div>
                        <div class="font-bold text-blue-900">{{ $fondateur->name }}</div>
                        <div class="text-gray-500 text-sm">{{ $fondateur->role }}</div>
                    </div>
                </div>
                @endif
                <div class="grid grid-cols-2 gap-4 mt-8">
                    @foreach($stats as $stat)
                    <div class="text-center py-6 bg-gray-50">
                        <div class="text-2xl font-bold text-amber-500">{{ $stat->valeur }}</div>
                        <div class="text-gray-500 text-xs uppercase tracking-wider mt-1">{{ $stat->label }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROCESSUS --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">Notre <span class="text-amber-500">processus</span></h2>
            <p class="text-gray-500">Une méthodologie éprouvée pour garantir la réussite de vos projets stratégiques.</p>
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

{{-- ÉQUIPE --}}
<section class="py-24 lg:py-32 bg-blue-50">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16">
            <div>
                <div class="w-12 h-px bg-amber-500 mb-4"></div>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">Équipe <span class="text-amber-500">dirigeante</span></h2>
                <p class="text-gray-500 max-w-lg">Des experts passionnés au service du développement africain.</p>
            </div>
            <a href="{{ route('experts.index') }}" class="text-blue-900 font-medium border-b border-blue-900 pb-1 hover:text-amber-500 hover:border-amber-500 transition-colors">Tous les experts →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($experts as $expert)
            <div class="bg-white p-8 shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 rounded-full bg-blue-900 flex items-center justify-center mb-6 overflow-hidden">
                    @if($expert->photo)
                        <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-white text-xl font-bold">{{ $expert->initials }}</span>
                    @endif
                </div>
                <h3 class="text-xl font-bold text-blue-900 mb-1">{{ $expert->name }}</h3>
                <p class="text-amber-500 text-sm font-medium mb-3">{{ $expert->role }}</p>
                <p class="text-gray-500 text-sm">{{ $expert->bio }}</p>
                <a href="{{ route('experts.show', $expert->slug) }}" class="inline-block mt-4 text-blue-900 text-sm font-medium border-b border-blue-900 hover:text-amber-500 hover:border-amber-500 transition-colors">Voir le profil →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-24 lg:py-32 bg-blue-900">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="max-w-3xl mx-auto text-center">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">Vous avez un projet ?<br><span class="text-amber-500">Parlons-en.</span></h2>
            <p class="text-gray-400 text-lg mb-10">Notre équipe est disponible pour étudier vos opportunités d'investissement et de partenariat en Afrique.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('partners') }}" class="px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-md hover:bg-amber-400 transition-colors">Initier un partenariat</a>
                <a href="tel:+221781792510" class="px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-md hover:bg-amber-500/10 transition-colors">+221 78 179 25 10</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
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
        dots.forEach((dot, index) => dot.classList.toggle('active', index === currentIndex));
    }
    function nextSlide() { currentIndex = (currentIndex + 1) % totalSlides; updateSlider(); resetAutoPlay(); }
    function prevSlide() { currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; updateSlider(); resetAutoPlay(); }
    function goToSlide(index) { currentIndex = index; updateSlider(); resetAutoPlay(); }
    function startAutoPlay() { autoPlayInterval = setInterval(() => { if (!isHovering) nextSlide(); }, 5000); }
    function resetAutoPlay() { clearInterval(autoPlayInterval); startAutoPlay(); }

    const sliderContainer = document.querySelector('.slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', () => isHovering = true);
        sliderContainer.addEventListener('mouseleave', () => isHovering = false);
    }
    window.addEventListener('resize', updateSlider);
    if (totalSlides > 0) startAutoPlay();
    window.nextSlide = nextSlide;
    window.prevSlide = prevSlide;
    window.goToSlide = goToSlide;
</script>
@endpush