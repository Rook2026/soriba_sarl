<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SORIBA SARL — Plateforme stratégique africaine spécialisée en coopération internationale, PPP & investissements, infrastructures, énergie, agriculture et solutions digitales.">
    <meta name="keywords" content="SORIBA SARL, coopération internationale, PPP, investissements africains, infrastructures Afrique, énergie Sénégal, Dakar">
    <meta property="og:title" content="@yield('og_title', 'SORIBA SARL — Plateforme Stratégique Africaine')">
    <meta property="og:description" content="@yield('og_description', 'Catalyseur de partenariats pour le développement de l\'Afrique')">
    <meta property="og:type" content="website">
    <title>@yield('title', 'SORIBA SARL — Plateforme Stratégique Africaine')</title>

    {{-- Google Fonts : Playfair Display + Manrope --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- TailwindCSS CDN (remplacer par build en production) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/png" href="{{ asset('images/soriba.png') }}">

    {{-- GSAP CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    {{-- Tailwind Config --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-blue': '#0A192F',
                        'medium-blue': '#1E3A5F',
                        'light-blue': '#EBF4FF',
                        'accent': '#F5C518',
                        'accent-dark': '#D4AF37',
                        'white': '#FFFFFF',
                        'gray-light': '#F8FAFC',
                        'gray': '#64748B',
                        'gray-dark': '#334155',
                    },
                    fontFamily: {
                        'display': ['"Playfair Display"', 'serif'],
                        'body': ['Manrope', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    {{-- CSS Premium Global --}}
    <style>
        /* ============================================
           RESET & BASE
        ============================================ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --dark-blue: #0A192F;
            --medium-blue: #1E3A5F;
            --light-blue: #EBF4FF;
            --accent: #F5C518;
            --accent-dark: #D4AF37;
            --white: #FFFFFF;
            --gray-light: #F8FAFC;
            --gray: #099c99;
            --gray-dark: #3296a3;
        }

        html { scroll-behavior: smooth; }

        body {
            background-color: var(--white);
            color: var(--gray-dark);
            font-family: 'Manrope', sans-serif;
            overflow-x: hidden;
        }

        /* Curseur personnalisé (optionnel - désactivable) */
        body.custom-cursor {
            cursor: none;
        }
        #cursor-dot {
            width: 8px; height: 8px;
            background: var(--accent);
            border-radius: 50%;
            position: fixed;
            top: 0; left: 0;
            pointer-events: none;
            z-index: 99999;
            transform: translate(-50%, -50%);
            transition: width 0.2s, height 0.2s;
            display: none;
        }
        #cursor-ring {
            width: 36px; height: 36px;
            border: 1.5px solid rgba(245,197,24,0.5);
            border-radius: 50%;
            position: fixed;
            top: 0; left: 0;
            pointer-events: none;
            z-index: 99998;
            transform: translate(-50%, -50%);
            transition: width 0.3s ease, height 0.3s ease;
            display: none;
        }
        body.custom-cursor #cursor-dot,
        body.custom-cursor #cursor-ring {
            display: block;
        }
        .cursor-hover {
            transform: scale(1.5);
        }

        /* ============================================
           SCROLLBAR PREMIUM
        ============================================ */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: var(--gray-light); }
        ::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 2px; }

        /* ============================================
           TYPOGRAPHIE
        ============================================ */
        .font-display { font-family: 'Playfair Display', serif; }
        .font-body    { font-family: 'Manrope', sans-serif; }

        /* ============================================
           GLASSMORPHISM
        ============================================ */
        .glass {
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(0,0,0,0.05);
        }
        .glass-dark {
            background: rgba(10,25,47,0.9);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(245,197,24,0.15);
        }

        /* ============================================
           BUTTONS PREMIUM
        ============================================ */
        .btn-gold {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            background: linear-gradient(135deg, var(--accent), var(--accent-dark));
            color: var(--dark-blue);
            font-family: 'Manrope', sans-serif;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            border-radius: 40px;
        }
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245,197,24,0.3);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 30px;
            background: transparent;
            color: var(--accent);
            font-family: 'Manrope', sans-serif;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            border: 2px solid var(--accent);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border-radius: 40px;
        }
        .btn-outline:hover {
            background: rgba(245,197,24,0.1);
            transform: translateY(-2px);
        }

        .btn-outline-light {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 30px;
            background: transparent;
            color: var(--white);
            font-family: 'Manrope', sans-serif;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            border: 2px solid rgba(255,255,255,0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border-radius: 40px;
        }
        .btn-outline-light:hover {
            border-color: var(--accent);
            color: var(--accent);
            transform: translateY(-2px);
        }

        /* ============================================
           GRADIENT TEXT
        ============================================ */
        .gradient-text {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 50%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% auto;
            animation: shimmer 3s linear infinite;
        }
        @keyframes shimmer {
            0%   { background-position: 0% center; }
            100% { background-position: 200% center; }
        }

        /* ============================================
           DIVIDERS
        ============================================ */
        .divider-gold {
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            margin: 0 auto;
        }

        /* ============================================
           ANIMATIONS GÉNÉRALES
        ============================================ */
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .reveal-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ============================================
           LOADING SCREEN
        ============================================ */
        #loading-screen {
            position: fixed;
            inset: 0;
            background: var(--dark-blue);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 24px;
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }
        #loading-screen.hidden { opacity: 0; visibility: hidden; pointer-events: none; }
        .loading-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            color: var(--accent);
        }
        .loading-bar-track {
            width: 200px; height: 2px;
            background: rgba(245,197,24,0.2);
            position: relative;
            overflow: hidden;
            border-radius: 2px;
        }
        .loading-bar-fill {
            position: absolute;
            top: 0; left: -100%;
            width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, var(--accent), transparent);
            animation: loading-slide 1.5s ease forwards;
        }
        @keyframes loading-slide {
            to { left: 100%; }
        }

        /* ============================================
           CARDS
        ============================================ */
        .card-premium {
            background: var(--white);
            border: 1px solid rgba(0,0,0,0.05);
            border-radius: 16px;
            transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
            overflow: hidden;
        }
        .card-premium:hover {
            transform: translateY(-8px);
            border-color: rgba(245,197,24,0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* ============================================
           INPUTS
        ============================================ */
        .input-premium {
            width: 100%;
            padding: 14px 20px;
            background: var(--white);
            border: 1px solid rgba(0,0,0,0.1);
            color: var(--gray-dark);
            font-family: 'Manrope', sans-serif;
            font-size: 0.9rem;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
        }
        .input-premium::placeholder { color: var(--gray); }
        .input-premium:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(245,197,24,0.1);
        }

        /* ============================================
           SECTION SPACING
        ============================================ */
        .section-padding { padding: 100px 0; }
        .section-padding-sm { padding: 60px 0; }

        /* ============================================
           CONTAINER
        ============================================ */
        .container-custom {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 24px;
        }
        @media (min-width: 768px) { .container-custom { padding: 0 48px; } }
        @media (min-width: 1024px) { .container-custom { padding: 0 60px; } }
    </style>

    @stack('styles')
</head>
<body>

    {{-- LOADING SCREEN --}}
    <div id="loading-screen">
        <div class="loading-logo">SORIBA</div>
        <div class="loading-bar-track">
            <div class="loading-bar-fill"></div>
        </div>
        <p style="color: var(--gray); font-size: 0.75rem; letter-spacing: 0.3em; text-transform: uppercase;">Chargement en cours...</p>
    </div>

    {{-- CURSEUR PERSONNALISÉ (optionnel) --}}
    <div id="cursor-dot"></div>
    <div id="cursor-ring"></div>

    {{-- HEADER --}}
    @include('frontend.layout.header')

    {{-- CONTENU PRINCIPAL --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('frontend.layout.footer')

    {{-- SCRIPTS GLOBAUX --}}
    <script>
        // ============================================
        // LOADING SCREEN
        // ============================================
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loading-screen').classList.add('hidden');
            }, 1500);
        });

        // ============================================
        // REVEAL ON SCROLL
        // ============================================
        const revealElements = document.querySelectorAll('.reveal-up');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });
        
        revealElements.forEach(el => observer.observe(el));

        // ============================================
        // CURSEUR PERSONNALISÉ (optionnel - activable)
        // ============================================
        // Décommentez les lignes ci-dessous pour activer le curseur personnalisé
        /*
        document.body.classList.add('custom-cursor');
        
        const dot = document.getElementById('cursor-dot');
        const ring = document.getElementById('cursor-ring');
        let mouseX = 0, mouseY = 0;
        let ringX = 0, ringY = 0;
        
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            dot.style.left = mouseX + 'px';
            dot.style.top = mouseY + 'px';
        });
        
        function animateRing() {
            ringX += (mouseX - ringX) * 0.1;
            ringY += (mouseY - ringY) * 0.1;
            ring.style.left = ringX + 'px';
            ring.style.top = ringY + 'px';
            requestAnimationFrame(animateRing);
        }
        animateRing();
        
        document.querySelectorAll('a, button, .btn-gold, .btn-outline, input, textarea, select').forEach(el => {
            el.addEventListener('mouseenter', () => {
                dot.style.width = '14px';
                dot.style.height = '14px';
                ring.style.width = '52px';
                ring.style.height = '52px';
                ring.style.borderColor = 'rgba(245,197,24,0.8)';
            });
            el.addEventListener('mouseleave', () => {
                dot.style.width = '8px';
                dot.style.height = '8px';
                ring.style.width = '36px';
                ring.style.height = '36px';
                ring.style.borderColor = 'rgba(245,197,24,0.5)';
            });
        });
        */
    </script>

    @stack('scripts')
</body>
</html>