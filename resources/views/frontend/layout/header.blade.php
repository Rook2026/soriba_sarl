<header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">

    {{-- Barre supérieure --}}
    <div id="topbar" class="border-b border-white/10 transition-all duration-500 bg-dark-blue">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
            <div class="flex items-center justify-between py-2.5">
                <div class="flex items-center gap-6">
                    <a href="tel:+221781792510" class="flex items-center gap-2 text-xs text-gray-400 hover:text-amber-500 transition-colors duration-300">
                        <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="font-body tracking-wide">+221 78 179 25 10</span>
                    </a>
                    <a href="mailto:contact@soriba-sarl.com" class="hidden sm:flex items-center gap-2 text-xs text-gray-400 hover:text-amber-500 transition-colors duration-300">
                        <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-body tracking-wide">contact@soriba-sarl.com</span>
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span class="inline-block w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                    <span class="text-xs text-gray-500 tracking-wider">Dakar, Sénégal</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Navigation principale --}}
    <nav class="relative bg-dark-blue/95 backdrop-blur-sm transition-all duration-500">
        <div id="nav-bg" class="absolute inset-0 transition-all duration-500"></div>
        <div class="max-w-[1440px] mx-auto px-6 lg:px-12 relative z-10">
            <div class="flex items-center justify-between py-4 lg:py-5">

                {{-- LOGO --}}
                @include('frontend.layout.logo')

                {{-- Navigation Desktop --}}
                <div class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('welcome') }}" class="nav-link text-gray-300 text-sm hover:text-amber-500 transition-colors duration-300 relative group tracking-wide">
                        Accueil
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('about') }}" class="nav-link text-gray-300 text-sm hover:text-amber-500 transition-colors duration-300 relative group tracking-wide">
                        À propos
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    {{-- Dropdown Services --}}
                    @php
                    $navServices = App\Models\Service::where('actif', true)->orderBy('ordre')->get();
                    @endphp
                    <div class="relative group">
                        <button class="nav-link text-gray-300 text-sm hover:text-amber-500 transition-colors duration-300 relative flex items-center gap-1.5 tracking-wide">
                            Services
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute top-full left-1/2 -translate-x-1/2 mt-3 w-72 bg-dark-blue border border-amber-500/20 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 py-2 z-20">
                            <a href="{{ route('services') }}" class="flex items-center gap-3 px-5 py-2.5 text-sm text-amber-500 hover:bg-white/5 transition-all duration-200 border-b border-white/10 mb-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                <span class="font-semibold">Tous les services</span>
                            </a>
                            @foreach($navServices as $s)
                            <a href="{{ route('services.show', $s->slug) }}" class="flex items-center gap-3 px-5 py-2.5 text-sm text-gray-400 hover:text-amber-500 hover:bg-white/5 transition-all duration-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500/50"></span>
                                <span>{{ $s->title }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <a href="{{ route('projects.index') }}" class="nav-link text-gray-300 text-sm hover:text-amber-500 transition-colors duration-300 relative group tracking-wide">
                        Projets
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('experts.index') }}" class="nav-link text-gray-300 text-sm hover:text-amber-500 transition-colors duration-300 relative group tracking-wide">
                        Experts
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{ route('blog.index') }}" class="nav-link text-gray-300 text-sm hover:text-amber-500 transition-colors duration-300 relative group tracking-wide">
                        Blog
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-amber-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                {{-- CTA Desktop --}}
                <div class="hidden lg:flex items-center gap-4">
                    <a href="{{ route('contact') }}" class="px-5 py-2.5 border border-amber-500 text-amber-500 text-xs font-semibold rounded-full hover:bg-amber-500/10 transition-all duration-300 tracking-wide">
                        Contact
                    </a>
                    <a href="{{ route('partners') }}" class="px-5 py-2.5 bg-amber-500 text-dark-blue text-xs font-semibold rounded-full hover:bg-amber-400 transition-all duration-300 flex items-center gap-2 tracking-wide">
                        Partenariat
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                {{-- Bouton Menu Mobile --}}
                <button id="mobile-menu-btn" class="lg:hidden flex flex-col gap-1.5 p-2 group" aria-label="Menu">
                    <span class="menu-line block w-6 h-px bg-white transition-all duration-300 group-hover:bg-amber-500"></span>
                    <span class="menu-line block w-4 h-px bg-white transition-all duration-300 group-hover:bg-amber-500 group-hover:w-6"></span>
                    <span class="menu-line block w-6 h-px bg-white transition-all duration-300 group-hover:bg-amber-500"></span>
                </button>

            </div>
        </div>
    </nav>

</header>

{{-- MENU MOBILE DRAWER --}}
<div id="mobile-menu" class="fixed inset-0 z-40 invisible" aria-hidden="true">
    <div id="mobile-overlay" class="absolute inset-0 bg-dark-blue/90 opacity-0 transition-opacity duration-400" onclick="closeMobileMenu()"></div>
    <div id="mobile-drawer" class="absolute top-0 right-0 bottom-0 w-80 max-w-full bg-dark-blue border-l border-amber-500/20 transform translate-x-full transition-transform duration-500 ease-out flex flex-col">
        <div class="flex items-center justify-between p-6 border-b border-white/10">
            <div class="font-display text-xl font-bold text-amber-500">SORIBA SARL</div>
            <button onclick="closeMobileMenu()" class="p-2 text-gray-400 hover:text-amber-500 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <nav class="flex-1 overflow-y-auto p-6">
            <div class="flex flex-col gap-1">
                <a href="{{ route('welcome') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide">
                    Accueil
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('about') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide" style="animation-delay:0.05s">
                    À propos
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('services') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide" style="animation-delay:0.1s">
                    Services
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                {{-- Services sous-menu mobile --}}
                @foreach($navServices as $s)
                <a href="{{ route('services.show', $s->slug) }}" class="mobile-nav-item flex items-center gap-3 py-3 px-6 border-b border-white/5 text-gray-500 hover:text-amber-500 transition-all duration-300 text-sm" style="animation-delay:0.12s">
                    <span class="w-1 h-1 rounded-full bg-amber-500/50"></span>
                    {{ $s->title }}
                </a>
                @endforeach
                <a href="{{ route('projects.index') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide" style="animation-delay:0.15s">
                    Projets
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('experts.index') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide" style="animation-delay:0.2s">
                    Experts
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('blog.index') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide" style="animation-delay:0.25s">
                    Blog
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="mobile-nav-item flex items-center justify-between py-4 px-3 border-b border-white/5 text-gray-300 hover:text-amber-500 transition-all duration-300 text-base tracking-wide" style="animation-delay:0.3s">
                    Contact
                    <svg class="w-4 h-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </nav>
        <div class="p-6 border-t border-white/10">
            <a href="{{ route('partners') }}" class="w-full bg-amber-500 text-dark-blue font-semibold py-3 rounded-full flex items-center justify-center gap-2 text-sm hover:bg-amber-400 transition-all duration-300">
                Initier un partenariat
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <div class="mt-4 text-center">
                <a href="tel:+221781792510" class="text-gray-400 text-sm hover:text-amber-500 transition-colors">+221 78 179 25 10</a>
            </div>
        </div>
    </div>
</div>

<style>
    #main-header.scrolled #nav-bg {
        background: rgba(10,25,47,0.95);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border-bottom: 1px solid rgba(245,197,24,0.15);
    }
    #main-header.scrolled #topbar {
        opacity: 0; visibility: hidden;
        transform: translateY(-100%);
        height: 0; padding: 0; overflow: hidden;
    }
    #mobile-menu { transition: visibility 0.3s ease; }
    #mobile-menu.open { visibility: visible; }
    #mobile-menu.open #mobile-overlay { opacity: 1; transition: opacity 0.3s ease; }
    #mobile-menu.open #mobile-drawer { transform: translateX(0); transition: transform 0.4s cubic-bezier(0.4,0,0.2,1); }
    .mobile-nav-item { opacity:0; transform:translateX(20px); animation: slideInMobile 0.4s forwards; }
    @keyframes slideInMobile { to { opacity:1; transform:translateX(0); } }
    @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(1.2)} }
    .animate-pulse { animation: pulse 2s cubic-bezier(0.4,0,0.6,1) infinite; }
    @media (max-width:1024px) {
        #main-header { background:rgba(10,25,47,0.95); backdrop-filter:blur(20px); -webkit-backdrop-filter:blur(20px); }
    }
</style>

<script>
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    function openMobileMenu() { mobileMenu.classList.add('open'); document.body.style.overflow = 'hidden'; }
    function closeMobileMenu() { mobileMenu.classList.remove('open'); document.body.style.overflow = ''; }
    if (menuBtn) menuBtn.addEventListener('click', openMobileMenu);
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    }, { passive: true });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('open')) closeMobileMenu();
    });
</script>