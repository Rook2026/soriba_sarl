{{-- ============================================
     WELCOME — SORIBA SARL
     Landing "Coming Soon" premium avec Tailwind
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
     Slider futuriste à droite
============================================ --}}

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORIBA SARL — Plateforme Stratégique Africaine</title>
    <meta name="description" content="Catalyseur de partenariats pour le développement de l'Afrique. Coopération internationale, PPP & investissements.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        tailwind.config = {
            theme: { extend: {
                colors: { 
                    'dark-blue': '#0A192F',
                    'medium-blue': '#1E3A5F', 
                    'light-blue': '#EBF4FF',
                    'accent': '#F5C518',
                    'accent-dark': '#D4AF37'
                },
                fontFamily: { 'display': ['"Playfair Display"','serif'], 'body': ['Manrope','sans-serif'] }
            }}
        }
    </script>

    <style>
        /* Styles personnalisés */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #0A192F; color: #F5F5F5; font-family: 'Manrope', sans-serif; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 3px; }
        ::-webkit-scrollbar-track { background: #0A192F; }
        ::-webkit-scrollbar-thumb { background: #F5C518; }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(3deg); }
        }

        @keyframes pulse-glow {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }

        @keyframes shimmer {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }

        @keyframes slide-up {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Slider styles */
        .slider-container {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
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

        .slider-slide img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .slider-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(10,25,47,0.9), transparent);
            padding: 30px 24px;
        }

        .slider-dots {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 12px;
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
            width: 28px;
            border-radius: 4px;
            background: #F5C518;
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 44px;
            height: 44px;
            background: rgba(10,25,47,0.8);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(245,197,24,0.3);
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
            border-color: #F5C518;
        }

        .slider-nav:hover svg {
            stroke: #0A192F;
        }

        .slider-nav.prev { left: 20px; }
        .slider-nav.next { right: 20px; }

        /* Glass effect */
        .glass-card {
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(245,197,24,0.15);
        }

        /* Countdown */
        .countdown-item {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(245,197,24,0.2);
            border-radius: 12px;
            padding: 20px 24px;
            text-align: center;
            min-width: 100px;
        }

        .countdown-number {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 800;
            color: #F5C518;
            line-height: 1;
        }

        /* Input styles */
        .input-glass {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(245,197,24,0.2);
            color: white;
            padding: 14px 20px;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-glass:focus {
            border-color: #F5C518;
            background: rgba(245,197,24,0.05);
            box-shadow: 0 0 0 3px rgba(245,197,24,0.1);
        }

        .input-glass::placeholder {
            color: rgba(255,255,255,0.4);
        }

        /* Boutons */
        .btn-primary {
            background: linear-gradient(135deg, #F5C518, #D4AF37);
            color: #0A192F;
            padding: 14px 32px;
            border-radius: 40px;
            font-weight: 700;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245,197,24,0.3);
        }

        .btn-outline {
            border: 2px solid #F5C518;
            color: #F5C518;
            padding: 12px 30px;
            border-radius: 40px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: transparent;
        }

        .btn-outline:hover {
            background: rgba(245,197,24,0.1);
            transform: translateY(-2px);
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #F5C518, #D4AF37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Scroll indicator */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); opacity: 1; }
            50% { transform: translateY(10px); opacity: 0.5; }
        }

        .scroll-indicator {
            animation: bounce 2s ease-in-out infinite;
        }
    </style>
</head>
<body>

{{-- ============================================
     HERO SECTION AVEC SLIDER À DROITE
============================================ --}}
<section class="relative min-h-screen flex items-center overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    {{-- Éléments décoratifs --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-amber-400/10 rounded-full"></div>
    </div>

    {{-- Particules dorées --}}
    <canvas id="particlesCanvas" class="absolute inset-0 pointer-events-none"></canvas>

    <div class="relative w-full max-w-[1440px] mx-auto px-6 lg:px-12 py-24 lg:py-32">
        
        {{-- Grille: Texte à gauche | Slider à droite --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            {{-- Colonne gauche: Texte --}}
            <div>
                <div class="inline-block mb-6">
                    <span class="text-amber-400 text-sm tracking-wider font-medium">PLATEFORME STRATÉGIQUE</span>
                    <div class="h-px w-12 bg-amber-400 mt-2"></div>
                </div>
                
                <h1 class="text-white text-5xl lg:text-7xl xl:text-8xl font-bold leading-tight mb-4">
                    SORIBA
                    <span class="text-3xl lg:text-4xl block text-amber-400 font-light mt-2">SARL</span>
                </h1>
                
                <p class="text-amber-400 text-xl lg:text-2xl font-display italic mt-4 mb-6">
                    Plateforme stratégique
                </p>
                
                <p class="text-gray-400 text-base lg:text-lg leading-relaxed max-w-lg mb-10">
                    Catalyseur de partenariats pour le développement de l'Afrique.<br>
                    Coopération internationale · PPP & Investissements · Solutions sur mesure
                </p>
                
                {{-- CTA Buttons --}}
                <div class="flex flex-wrap gap-4 mb-12">
                    <a href="#newsletter" class="btn-primary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        Être alerté du lancement
                    </a>
                    <a href="mailto:contact@soriba-sarl.com" class="btn-outline">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact direct
                    </a>
                </div>

                {{-- Scroll indicator --}}
                <div class="scroll-indicator flex flex-col items-start gap-2">
                    <span class="text-gray-500 text-xs uppercase tracking-wider">Découvrir</span>
                    <svg class="w-5 h-5 text-amber-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
            
            {{-- Colonne droite: Slider futuriste --}}
            <div class="relative slider-container group">
                {{-- Glow effect --}}
                <div class="absolute -inset-1 bg-gradient-to-r from-amber-500/20 to-amber-400/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                {{-- Track du slider --}}
                <div class="slider-track rounded-2xl overflow-hidden" id="sliderTrack">
                    @php
                    $sliderMedia = [
                        ['src' => 'https://picsum.photos/id/104/800/500', 'title' => 'Conférence internationale à Dakar', 'date' => 'Mars 2025'],
                        ['src' => 'https://picsum.photos/id/29/800/500', 'title' => 'Signature de partenariat stratégique', 'date' => 'Février 2025'],
                        ['src' => 'https://picsum.photos/id/80/800/500', 'title' => 'Forum des investisseurs', 'date' => 'Janvier 2025'],
                        ['src' => 'https://picsum.photos/id/42/800/500', 'title' => 'Gala de l\'entrepreneuriat africain', 'date' => 'Décembre 2024'],
                        ['src' => 'https://picsum.photos/id/96/800/500', 'title' => 'Atelier de formation', 'date' => 'Novembre 2024'],
                    ];
                    @endphp
                    
                    @foreach($sliderMedia as $media)
                    <div class="slider-slide">
                        <img src="{{ $media['src'] }}" alt="{{ $media['title'] }}">
                        <div class="slider-caption">
                            <p class="text-amber-400 text-sm font-medium mb-1">{{ $media['date'] }}</p>
                            <p class="text-white text-xl font-bold">{{ $media['title'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                {{-- Navigation --}}
                <div class="slider-nav prev" onclick="prevSlide()">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <div class="slider-nav next" onclick="nextSlide()">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
                
                {{-- Dots --}}
                <div class="slider-dots" id="sliderDots">
                    @foreach($sliderMedia as $index => $media)
                    <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" onclick="goToSlide({{ $index }})"></div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Stats sous le hero --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20 pt-12 border-t border-white/10">
            @php
            $stats = [
                ['value' => '3+', 'label' => "Pays couverts"],
                ['value' => '9', 'label' => "Secteurs d'activité"],
                ['value' => '100%', 'label' => 'Engagement partenaires'],
                ['value' => 'PPP', 'label' => 'Modèle de référence'],
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
     COUNTDOWN SECTION
============================================ --}}
<section class="py-24 bg-dark-blue">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <p class="text-amber-400 text-sm tracking-wider font-medium mb-4">— Lancement officiel —</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Le site est en cours de<br>
                <span class="text-amber-400">préparation</span>
            </h2>
        </div>

        {{-- Countdown --}}
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <div class="countdown-item">
                <div class="countdown-number" id="cd-days">00</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider mt-2">Jours</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="cd-hours">00</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider mt-2">Heures</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="cd-minutes">00</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider mt-2">Minutes</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="cd-seconds">00</div>
                <div class="text-gray-500 text-xs uppercase tracking-wider mt-2">Secondes</div>
            </div>
        </div>

        <div class="w-24 h-px bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto"></div>
    </div>
</section>

{{-- ============================================
     NEWSLETTER SECTION
============================================ --}}
<section id="newsletter" class="py-24 bg-medium-blue">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="max-w-2xl mx-auto text-center">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <p class="text-amber-400 text-sm tracking-wider font-medium mb-4">Newsletter</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Restez informé des<br>
                <span class="text-amber-400">opportunités stratégiques</span>
            </h2>
            <p class="text-gray-400 mb-10 leading-relaxed">
                Recevez nos actualités sur les partenariats, projets d'investissement et opportunités en Afrique.
            </p>

            {{-- Formulaire --}}
            <form onsubmit="return submitNewsletter(this)" class="flex flex-col sm:flex-row gap-3">
                <input type="email" class="input-glass flex-1" placeholder="Votre email professionnel" required>
                <button type="submit" class="btn-primary justify-center">
                    <span>S'inscrire</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </form>
            <p class="text-gray-500 text-xs mt-4 text-center">
                🔒 Vos données sont protégées. Désabonnement à tout moment.
            </p>
            <div id="newsletter-msg" class="hidden mt-4 p-3 bg-green-500/10 border border-green-500/20 rounded-lg text-green-400 text-sm"></div>
        </div>
    </div>
</section>

{{-- ============================================
     DOMAINES D'INTERVENTION
============================================ --}}
<section class="py-24 bg-dark-blue">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <p class="text-amber-400 text-sm tracking-wider font-medium mb-4">Expertise sectorielle</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Domaines d'<span class="text-amber-400">intervention</span>
            </h2>
            <p class="text-gray-400">
                Une expertise multisectorielle au service du développement durable et des partenariats stratégiques.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $domains = [
                ['title' => 'Énergie & Ressources', 'desc' => 'Raffineries pétrolières, gaz naturel, énergies renouvelables et trading de matières premières.'],
                ['title' => 'Infrastructures', 'desc' => 'Construction de routes, modernisation d\'ouvrages et développement de projets industriels d\'envergure.'],
                ['title' => 'Agriculture & Agro-industrie', 'desc' => 'Production agricole, transformation agroalimentaire et structuration des chaînes de valeur.'],
                ['title' => 'Santé & Médical', 'desc' => 'Équipements médicaux de pointe, hôpitaux partenaires internationaux et évacuations sanitaires.'],
                ['title' => 'Éducation & Sport', 'desc' => 'Universités, centres de formation professionnelle et développement de clubs sportifs africains.'],
                ['title' => 'Commerce, Digital & Logistique', 'desc' => 'Transit, dédouanement, IT, e-commerce et tourisme d\'affaires à l\'échelle internationale.'],
            ];
            @endphp
            @foreach($domains as $domain)
            <div class="p-8 bg-white/5 border border-white/10 rounded-xl hover:border-amber-500/30 hover:translate-y-[-4px] transition-all duration-300">
                <div class="w-12 h-12 bg-amber-500/10 rounded-lg mb-6"></div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $domain['title'] }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed">{{ $domain['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     ÉQUIPE DIRIGEANTE
============================================ --}}
<section class="py-24 bg-medium-blue">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
        
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
            <p class="text-amber-400 text-sm tracking-wider font-medium mb-4">Leadership</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Équipe <span class="text-amber-400">dirigeante</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $team = [
                ['name' => 'Souleymane DIALLO', 'role' => 'Gérant & Directeur Général', 'bio' => 'Ingénieur agronome · Maire de Ouassadou'],
                ['name' => 'Ricardo O. OKE', 'role' => 'Directeur Technique', 'bio' => 'Ingénieur mécatronique & robotique (Moscou)'],
                ['name' => 'Franck K. BAMIGBOLA', 'role' => 'Directeur des Partenariats', 'bio' => 'Entrepreneur international (Krasnodar, Russie)'],
            ];
            @endphp
            @foreach($team as $member)
            <div class="text-center p-8 bg-white/5 border border-white/10 rounded-xl hover:border-amber-500/30 hover:translate-y-[-4px] transition-all duration-300">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center mx-auto mb-6">
                    <span class="text-dark-blue text-3xl font-bold">{{ substr($member['name'], 0, 1) }}</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ $member['name'] }}</h3>
                <p class="text-amber-400 text-sm font-medium mb-3">{{ $member['role'] }}</p>
                <p class="text-gray-400 text-sm">{{ $member['bio'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================
     FOOTER
============================================ --}}
<footer class="py-12 bg-dark-blue border-t border-white/10">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 text-center">
        
        <div class="w-24 h-px bg-gradient-to-r from-transparent via-amber-500 to-transparent mx-auto mb-8"></div>
        
        <div class="font-display text-2xl font-bold text-amber-400 mb-4">SORIBA SARL</div>
        
        <p class="text-gray-500 text-sm mb-6">
            Coopération internationale · Partenariats public-privé · Solutions sur mesure
        </p>
        
        <div class="flex flex-wrap justify-center gap-6 text-sm mb-8">
            <a href="tel:+221781792510" class="text-gray-500 hover:text-amber-400 transition-colors">+221 78 179 25 10</a>
            <span class="text-gray-600">|</span>
            <a href="mailto:contact@soriba-sarl.com" class="text-gray-500 hover:text-amber-400 transition-colors">contact@soriba-sarl.com</a>
            <span class="text-gray-600">|</span>
            <span class="text-gray-500">Dakar, Sénégal</span>
        </div>
        
        <p class="text-gray-600 text-xs">
            &copy; {{ date('Y') }} SORIBA SARL. Tous droits réservés.
        </p>
    </div>
</footer>

<script>
    // ============================================
    // PARTICULES CANVAS
    // ============================================
    const canvas = document.getElementById('particlesCanvas');
    let ctx = canvas.getContext('2d');
    let particles = [];
    let w, h;

    function resizeCanvas() {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }

    class Particle {
        constructor() {
            this.reset();
        }
        reset() {
            this.x = Math.random() * w;
            this.y = Math.random() * h;
            this.size = Math.random() * 2 + 0.5;
            this.speedX = (Math.random() - 0.5) * 0.3;
            this.speedY = Math.random() * 0.5 + 0.1;
            this.opacity = Math.random() * 0.3 + 0.1;
        }
        update() {
            this.x += this.speedX;
            this.y -= this.speedY;
            if (this.y < -10 || this.x < -10 || this.x > w + 10) this.reset();
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(245, 197, 24, ${this.opacity})`;
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        for (let i = 0; i < 80; i++) particles.push(new Particle());
    }

    function animateParticles() {
        ctx.clearRect(0, 0, w, h);
        particles.forEach(p => { p.update(); p.draw(); });
        requestAnimationFrame(animateParticles);
    }

    window.addEventListener('resize', () => {
        resizeCanvas();
        initParticles();
    });
    resizeCanvas();
    initParticles();
    animateParticles();

    // ============================================
    // COUNTDOWN
    // ============================================
    function updateCountdown() {
        const target = new Date('2025-09-01T00:00:00').getTime();
        const diff = target - Date.now();
        if (diff <= 0) return;
        document.getElementById('cd-days').textContent = String(Math.floor(diff / 86400000)).padStart(2, '0');
        document.getElementById('cd-hours').textContent = String(Math.floor((diff % 86400000) / 3600000)).padStart(2, '0');
        document.getElementById('cd-minutes').textContent = String(Math.floor((diff % 3600000) / 60000)).padStart(2, '0');
        document.getElementById('cd-seconds').textContent = String(Math.floor((diff % 60000) / 1000)).padStart(2, '0');
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);

    // ============================================
    // SLIDER
    // ============================================
    let currentSlide = 0;
    const track = document.getElementById('sliderTrack');
    const slides = document.querySelectorAll('.slider-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const totalSlides = slides.length;
    let autoInterval;

    function updateSlider() {
        const width = slides[0].clientWidth;
        track.style.transform = `translateX(-${currentSlide * width}px)`;
        dots.forEach((dot, i) => dot.classList.toggle('active', i === currentSlide));
    }

    function nextSlide() { currentSlide = (currentSlide + 1) % totalSlides; updateSlider(); resetAutoPlay(); }
    function prevSlide() { currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; updateSlider(); resetAutoPlay(); }
    function goToSlide(index) { currentSlide = index; updateSlider(); resetAutoPlay(); }

    function startAutoPlay() { autoInterval = setInterval(nextSlide, 5000); }
    function resetAutoPlay() { clearInterval(autoInterval); startAutoPlay(); }

    window.addEventListener('resize', updateSlider);
    startAutoPlay();

    window.nextSlide = nextSlide;
    window.prevSlide = prevSlide;
    window.goToSlide = goToSlide;

    // Pause au hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => clearInterval(autoInterval));
    sliderContainer.addEventListener('mouseleave', startAutoPlay);

    // ============================================
    // NEWSLETTER
    // ============================================
    function submitNewsletter(form) {
        const email = form.querySelector('input[type="email"]');
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
            email.style.borderColor = '#ef4444';
            setTimeout(() => email.style.borderColor = '', 3000);
            return false;
        }
        const msg = document.getElementById('newsletter-msg');
        msg.textContent = '✓ Inscription confirmée. Vous recevrez nos prochaines actualités.';
        msg.classList.remove('hidden');
        email.value = '';
        setTimeout(() => msg.classList.add('hidden'), 5000);
        return false;
    }
    window.submitNewsletter = submitNewsletter;
</script>
</body>
</html>