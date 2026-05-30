{{-- ============================================
     CONTACT — SORIBA SARL
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
     Sans icônes
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'Contact — SORIBA SARL | Initiez votre partenariat')
@section('meta_description', 'Contactez SORIBA SARL pour discuter de vos projets de partenariat et d\'investissement en Afrique.')

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
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block mb-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Prenez contact</span>
                </div>
            </div>
            
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                Initiez votre <span class="text-amber-400">partenariat</span>
            </h1>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Notre équipe est à votre écoute pour étudier vos projets et opportunités d'investissement en Afrique.
            </p>
        </div>
    </div>
</section>

{{-- ============================================
     CONTACT FORM + INFOS
============================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            {{-- Colonne gauche: Coordonnées --}}
            <div>
                <div class="bg-light-blue rounded-2xl p-8 mb-8">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Nos coordonnées</h2>
                    
                    <div class="space-y-6">
                        {{-- Adresse --}}
                        <div>
                            <div class="w-8 h-px bg-amber-500 mb-2"></div>
                            <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Adresse</p>
                            <p class="text-dark-blue font-medium">Dakar, Sénégal — Afrique de l'Ouest</p>
                        </div>
                        
                        {{-- Téléphone --}}
                        <div>
                            <div class="w-8 h-px bg-amber-500 mb-2"></div>
                            <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Téléphone</p>
                            <a href="tel:+221781792510" class="text-dark-blue font-medium hover:text-amber-500 transition-colors">+221 78 179 25 10</a>
                        </div>
                        
                        {{-- Email --}}
                        <div>
                            <div class="w-8 h-px bg-amber-500 mb-2"></div>
                            <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Email</p>
                            <a href="mailto:contact@soriba-sarl.com" class="text-dark-blue font-medium hover:text-amber-500 transition-colors">contact@soriba-sarl.com</a>
                        </div>
                    </div>
                </div>
                
                {{-- Citation --}}
                <div class="bg-light-blue rounded-2xl p-8">
                    <div class="w-12 h-px bg-amber-500 mb-4"></div>
                    <p class="text-gray-600 text-sm italic leading-relaxed">
                        "Nous répondons à chaque demande dans un délai de 24 à 48 heures ouvrables."
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <p class="text-dark-blue text-sm font-semibold">Équipe SORIBA SARL</p>
                    </div>
                </div>
            </div>
            
            {{-- Colonne droite: Formulaire --}}
            <div>
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                    <h2 class="text-2xl font-bold text-dark-blue mb-6">Envoyer un message</h2>
                    
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Prénom</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="Jean">
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Nom</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="Dupont">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Email professionnel</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="jean.dupont@entreprise.com">
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Organisation</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="Nom de votre organisation">
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Secteur d'intérêt</label>
                            <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors bg-white">
                                <option value="">Sélectionnez un secteur</option>
                                @foreach(['Énergie & Ressources','Infrastructures','Agriculture','Santé','Éducation','Digital & Logistique','PPP & Investissements','Autre'] as $opt)
                                <option value="{{ $opt }}">{{ $opt }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Votre message</label>
                            <textarea rows="5" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors resize-vertical" placeholder="Décrivez votre projet ou votre demande..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-amber-500 text-dark-blue font-semibold py-3 rounded-lg hover:bg-amber-400 transition-colors">
                            Envoyer ma demande
                        </button>
                        
                        <p class="text-gray-400 text-xs text-center pt-2">
                            Tous les champs sont obligatoires. Nous vous répondrons sous 48h.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     INFO SUPPLEMENTAIRE
============================================ --}}
<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            {{-- Carte 1: Horaires --}}
            <div class="p-8 border border-gray-100 rounded-2xl hover:border-amber-500/30 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 rounded-full bg-light-blue flex items-center justify-center mb-6">
                    <div class="w-5 h-px bg-amber-500"></div>
                </div>
                <h3 class="text-xl font-bold text-dark-blue mb-3">Horaires d'ouverture</h3>
                <div class="space-y-2 text-gray-500">
                    <p>Lundi - Vendredi : 9h00 - 18h00</p>
                    <p>Samedi : 10h00 - 14h00</p>
                    <p>Dimanche : Fermé</p>
                </div>
            </div>
            
            {{-- Carte 2: Délais de réponse --}}
            <div class="p-8 border border-gray-100 rounded-2xl hover:border-amber-500/30 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 rounded-full bg-light-blue flex items-center justify-center mb-6">
                    <div class="w-5 h-px bg-amber-500"></div>
                    <div class="w-5 h-px bg-amber-500 rotate-90 absolute"></div>
                </div>
                <h3 class="text-xl font-bold text-dark-blue mb-3">Délai de réponse</h3>
                <div class="space-y-2 text-gray-500">
                    <p>Email : 24-48h ouvrables</p>
                    <p>Téléphone : Disponible immédiatement</p>
                    <p>Visio : Sur rendez-vous</p>
                </div>
            </div>
            
            {{-- Carte 3: Réseaux --}}
            <div class="p-8 border border-gray-100 rounded-2xl hover:border-amber-500/30 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 rounded-full bg-light-blue flex items-center justify-center mb-6">
                    <div class="flex gap-0.5">
                        <div class="w-1 h-3 bg-amber-500"></div>
                        <div class="w-1 h-5 bg-amber-500"></div>
                        <div class="w-1 h-3 bg-amber-500"></div>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-dark-blue mb-3">Suivez-nous</h3>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-500 text-sm hover:text-amber-500 transition-colors">LinkedIn</a>
                    <a href="#" class="text-gray-500 text-sm hover:text-amber-500 transition-colors">Twitter</a>
                    <a href="#" class="text-gray-500 text-sm hover:text-amber-500 transition-colors">Facebook</a>
                </div>
                <p class="text-gray-400 text-sm mt-4">Suivez notre actualité et nos réalisations</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     CTA SECTION
============================================ --}}
<section class="py-20 bg-dark-blue">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
            Vous préférez un échange direct ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe commerciale est disponible du lundi au vendredi de 9h à 18h.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="tel:+221781792510" class="px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
                +221 78 179 25 10
            </a>
            <a href="mailto:contact@soriba-sarl.com" class="px-8 py-3 border border-amber-500 text-amber-500 font-semibold rounded-full hover:bg-amber-500/10 transition-colors">
                contact@soriba-sarl.com
            </a>
        </div>
    </div>
</section>

@endsection