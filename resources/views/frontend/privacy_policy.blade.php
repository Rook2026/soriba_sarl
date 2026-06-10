{{-- ============================================
     POLITIQUE DE CONFIDENTIALITÉ — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
     Sans stickers ni icônes
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'Politique de Confidentialité — SORIBA SARL')
@section('meta_description', 'Politique de confidentialité de SORIBA SARL : collecte, utilisation et protection de vos données personnelles.')

@section('content')

{{-- ============================================
     HERO SECTION
============================================ --}}
<section class="relative pt-36 pb-12 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>

    <div class="relative max-w-[1200px] mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block mb-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Légal</span>
                </div>
            </div>
            
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                Politique de <span class="text-amber-400">confidentialité</span>
            </h1>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            
            <p class="text-gray-400 text-sm">Dernière mise à jour : Janvier 2025</p>
        </div>
    </div>
</section>

{{-- ============================================
     CONTENU
============================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-[1000px] mx-auto px-6 lg:px-12">
        
        <div class="prose prose-lg max-w-none prose-headings:text-dark-blue prose-headings:font-bold prose-headings:font-display prose-p:text-gray-600 prose-p:leading-relaxed">
            
            {{-- Introduction --}}
            <div class="mb-10">
                <p class="text-gray-600 leading-relaxed">
                    SORIBA SARL attache une importance particulière à la protection de vos données personnelles. Cette politique de confidentialité vous informe sur la manière dont nous collectons, utilisons et protégeons vos informations.
                </p>
            </div>

            {{-- Section 1 --}}
            <div class="mb-8 p-6 bg-light-blue rounded-2xl">
                <h2 class="text-xl font-bold text-dark-blue mb-3">1. Collecte des données</h2>
                <p class="text-gray-600 leading-relaxed">
                    SORIBA SARL collecte uniquement les données personnelles nécessaires à la fourniture de ses services et à la gestion de ses relations partenaires. Ces données sont collectées avec votre consentement explicite.
                </p>
            </div>

            {{-- Section 2 --}}
            <div class="mb-8 p-6 bg-light-blue rounded-2xl">
                <h2 class="text-xl font-bold text-dark-blue mb-3">2. Utilisation des données</h2>
                <p class="text-gray-600 leading-relaxed">
                    Vos données sont utilisées exclusivement pour le suivi de nos relations commerciales, l'envoi de communications pertinentes et l'amélioration de nos services. Elles ne sont jamais vendues à des tiers.
                </p>
            </div>

            {{-- Section 3 --}}
            <div class="mb-8 p-6 bg-light-blue rounded-2xl">
                <h2 class="text-xl font-bold text-dark-blue mb-3">3. Protection des données</h2>
                <p class="text-gray-600 leading-relaxed">
                    SORIBA SARL met en œuvre des mesures de sécurité techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, modification ou divulgation.
                </p>
            </div>

            {{-- Section 4 --}}
            <div class="mb-8 p-6 bg-light-blue rounded-2xl">
                <h2 class="text-xl font-bold text-dark-blue mb-3">4. Vos droits</h2>
                <p class="text-gray-600 leading-relaxed">
                    Conformément aux réglementations applicables, vous disposez d'un droit d'accès, de rectification, de suppression et de portabilité de vos données. Pour exercer ces droits, contactez-nous à <a href="mailto:contact@soriba-sarl.com" class="text-amber-500 hover:text-amber-600">contact@soriba-sarl.com</a>.
                </p>
            </div>

            {{-- Section 5 --}}
            <div class="mb-8 p-6 bg-light-blue rounded-2xl">
                <h2 class="text-xl font-bold text-dark-blue mb-3">5. Cookies</h2>
                <p class="text-gray-600 leading-relaxed">
                    Notre site utilise des cookies pour améliorer votre expérience de navigation. Vous pouvez paramétrer votre navigateur pour refuser les cookies. Certaines fonctionnalités du site peuvent toutefois être affectées.
                </p>
            </div>

            {{-- Section 6 --}}
            <div class="mb-8 p-6 bg-light-blue rounded-2xl">
                <h2 class="text-xl font-bold text-dark-blue mb-3">6. Contact</h2>
                <p class="text-gray-600 leading-relaxed">
                    Pour toute question relative à cette politique de confidentialité ou à vos données personnelles, vous pouvez nous contacter :
                </p>
                <ul class="list-none space-y-2 mt-4">
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500 font-bold">-</span>
                        <span class="text-gray-600">Par email : <a href="mailto:contact@soriba-sarl.com" class="text-amber-500 hover:text-amber-600">contact@soriba-sarl.com</a></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500 font-bold">-</span>
                        <span class="text-gray-600">Par courrier : Dakar, Sénégal — Afrique de l'Ouest</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-500 font-bold">-</span>
                        <span class="text-gray-600">Par téléphone : <a href="tel:+221781792510" class="text-amber-500 hover:text-amber-600">+221 78 179 25 10</a></span>
                    </li>
                </ul>
            </div>

            {{-- Footer note --}}
            <div class="mt-10 pt-6 border-t border-gray-200 text-center">
                <p class="text-gray-400 text-sm">
                    SORIBA SARL se réserve le droit de modifier cette politique à tout moment. Les modifications entrent en vigueur dès leur publication.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     CTA SECTION
============================================ --}}
<section class="py-16 bg-dark-blue">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4">
            Une question sur vos données ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est à votre disposition pour toute question relative à la confidentialité.
        </p>
        <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
            Nous contacter
        </a>
    </div>
</section>

@endsection