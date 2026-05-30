{{-- ============================================
     CONTACT — SORIBA SARL
     Page contact simple
     Design identique à la page Experts
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
     Sans icônes
============================================ --}}

@extends('frontend.layout.master')

@section('title', 'Contact — SORIBA SARL')
@section('meta_description', 'Contactez SORIBA SARL pour toute demande d\'information ou de partenariat.')

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
                    <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Contact</span>
                </div>
            </div>
            
            <h1 class="text-white text-4xl lg:text-6xl font-bold leading-tight mb-4">
                Contactez<span class="text-amber-400">-nous</span>
            </h1>
            
            <div class="w-16 h-px bg-gradient-to-r from-transparent via-amber-400 to-transparent mx-auto my-6"></div>
            
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Une question ? Un projet ? Notre équipe est à votre disposition pour vous répondre.
            </p>
        </div>
    </div>
</section>

{{-- ============================================
     CONTACT FORM
============================================ --}}
<section class="py-20 bg-white">
    <div class="max-w-[1000px] mx-auto px-6 lg:px-12">
        
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 lg:p-10">
            <h2 class="text-2xl font-bold text-dark-blue mb-6 text-center">Envoyez-nous un message</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                
                {{-- Formulaire --}}
                <div>
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
                            <label class="block text-gray-600 text-sm font-medium mb-1">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="jean.dupont@email.com">
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Téléphone</label>
                            <input type="tel" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="+221 77 123 45 67">
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Société / Organisation</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors" placeholder="Nom de votre organisation">
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Objet</label>
                            <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors bg-white">
                                <option value="">Sélectionnez un objet</option>
                                <option value="Information">Demande d'information</option>
                                <option value="Partenariat">Proposition de partenariat</option>
                                <option value="Projet">Présentation de projet</option>
                                <option value="Autre">Autre demande</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Message</label>
                            <textarea rows="5" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors resize-vertical" placeholder="Votre message..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-amber-500 text-dark-blue font-semibold py-3 rounded-lg hover:bg-amber-400 transition-colors">
                            Envoyer
                        </button>
                        
                        <p class="text-gray-400 text-xs text-center pt-2">
                            Nous vous répondrons dans les meilleurs délais.
                        </p>
                    </form>
                </div>
                
                {{-- Informations de contact --}}
                <div>
                    <div class="bg-light-blue rounded-2xl p-6 mb-6">
                        <div class="w-8 h-px bg-amber-500 mb-4"></div>
                        <h3 class="text-lg font-bold text-dark-blue mb-4">Nos coordonnées</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Adresse</p>
                                <p class="text-dark-blue">Dakar, Sénégal — Afrique de l'Ouest</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Téléphone</p>
                                <a href="tel:+221781792510" class="text-dark-blue hover:text-amber-500 transition-colors">+221 78 179 25 10</a>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Email</p>
                                <a href="mailto:contact@soriba-sarl.com" class="text-dark-blue hover:text-amber-500 transition-colors">contact@soriba-sarl.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-light-blue rounded-2xl p-6">
                        <div class="w-8 h-px bg-amber-500 mb-4"></div>
                        <h3 class="text-lg font-bold text-dark-blue mb-4">Horaires d'ouverture</h3>
                        <div class="space-y-2 text-gray-600">
                            <p>Lundi - Jeudi : 8h30 - 17h30</p>
                            <p>Vendredi : 8h30 - 16h00</p>
                            <p>Samedi - Dimanche : Fermé</p>
                        </div>
                    </div>
                </div>
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
            Vous préférez nous appeler ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est disponible du lundi au vendredi de 9h à 18h.
        </p>
        <a href="tel:+221781792510" class="inline-block px-8 py-3 bg-amber-500 text-dark-blue font-semibold rounded-full hover:bg-amber-400 transition-colors">
            +221 78 179 25 10
        </a>
    </div>
</section>

@endsection