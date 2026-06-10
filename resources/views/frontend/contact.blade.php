@extends('frontend.layout.master')

@section('title', 'Contact — SORIBA SARL')
@section('meta_description', 'Contactez SORIBA SARL pour toute demande d\'information ou de partenariat.')

@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%);">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-10 w-96 h-96 border border-amber-400/20 rounded-full"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 border border-amber-400/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-amber-400/10 rounded-full"></div>
    </div>
    <div class="relative max-w-[1440px] mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-2 border border-amber-400/30 rounded-full bg-amber-400/5 mb-6">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                <span class="text-amber-400 text-xs tracking-wider font-medium uppercase">Contact</span>
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

{{-- FORMULAIRE --}}
<section class="py-20 bg-white">
    <div class="max-w-[1000px] mx-auto px-6 lg:px-12">

        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 lg:p-10">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center">Envoyez-nous un message</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                {{-- Formulaire --}}
                <div>

                    {{-- Message succès --}}
                    @if(session('success'))
                    <div style="padding:12px 16px;background:#D1FAE5;border-radius:8px;color:#065F46;margin-bottom:20px;font-size:0.9rem;border:1px solid #A7F3D0;">
                        {{ session('success') }}
                    </div>
                    @endif

                    {{-- Erreurs validation --}}
                    @if($errors->any())
                    <div style="padding:12px 16px;background:#FEE2E2;border-radius:8px;color:#991B1B;margin-bottom:20px;font-size:0.9rem;border:1px solid #FECACA;">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Prénom <span class="text-red-500">*</span></label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}"
                                    class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors"
                                    placeholder="Jean">
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Nom <span class="text-red-500">*</span></label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}"
                                    class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors"
                                    placeholder="Dupont">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors"
                                placeholder="jean.dupont@email.com">
                        </div>

                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Société / Organisation</label>
                            <input type="text" name="organisation" value="{{ old('organisation') }}"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors"
                                placeholder="Nom de votre organisation">
                        </div>

                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Secteur d'activité</label>
                            <select name="secteur"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors bg-white">
                                <option value="">Sélectionnez un secteur</option>
                                <option value="Énergie" {{ old('secteur') == 'Énergie' ? 'selected' : '' }}>Énergie & Ressources naturelles</option>
                                <option value="Infrastructures" {{ old('secteur') == 'Infrastructures' ? 'selected' : '' }}>Infrastructures & Construction</option>
                                <option value="Agriculture" {{ old('secteur') == 'Agriculture' ? 'selected' : '' }}>Agriculture & Agro-industrie</option>
                                <option value="Santé" {{ old('secteur') == 'Santé' ? 'selected' : '' }}>Santé & Médical</option>
                                <option value="Éducation" {{ old('secteur') == 'Éducation' ? 'selected' : '' }}>Éducation & Formation</option>
                                <option value="Digital" {{ old('secteur') == 'Digital' ? 'selected' : '' }}>Commerce & Digital</option>
                                <option value="Coopération" {{ old('secteur') == 'Coopération' ? 'selected' : '' }}>Coopération internationale</option>
                                <option value="PPP" {{ old('secteur') == 'PPP' ? 'selected' : '' }}>Partenariats Public-Privé</option>
                                <option value="Conseil" {{ old('secteur') == 'Conseil' ? 'selected' : '' }}>Conseil stratégique</option>
                                <option value="Autre" {{ old('secteur') == 'Autre' ? 'selected' : '' }}>Autre</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Message <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5"
                                class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors resize-vertical"
                                placeholder="Décrivez votre projet ou votre demande...">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-amber-500 text-blue-900 font-semibold py-3 rounded-lg hover:bg-amber-400 transition-colors">
                            Envoyer le message
                        </button>

                        <p class="text-gray-400 text-xs text-center pt-2">
                            Nous vous répondrons dans les 48h ouvrées.
                        </p>
                    </form>
                </div>

                {{-- Coordonnées --}}
                <div>
                    <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                        <div class="w-8 h-px bg-amber-500 mb-4"></div>
                        <h3 class="text-lg font-bold text-blue-900 mb-4">Nos coordonnées</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Adresse</p>
                                <p class="text-blue-900">Dakar, Sénégal — Afrique de l'Ouest</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Téléphone</p>
                                <a href="tel:+221781792510" class="text-blue-900 hover:text-amber-500 transition-colors font-medium">+221 78 179 25 10</a>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-wider mb-1">Email</p>
                                <a href="mailto:contact@soriba-sarl.com" class="text-blue-900 hover:text-amber-500 transition-colors font-medium">contact@soriba-sarl.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                        <div class="w-8 h-px bg-amber-500 mb-4"></div>
                        <h3 class="text-lg font-bold text-blue-900 mb-4">Horaires d'ouverture</h3>
                        <div class="space-y-2 text-gray-600 text-sm">
                            <div class="flex justify-between">
                                <span>Lundi — Jeudi</span>
                                <span class="font-medium text-blue-900">9h00 — 18h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Vendredi</span>
                                <span class="font-medium text-blue-900">9h00 — 17h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Samedi — Dimanche</span>
                                <span class="font-medium text-red-400">Fermé</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl p-6 text-center">
                        <h3 class="text-blue-900 font-bold text-lg mb-2">Réponse rapide</h3>
                        <p class="text-blue-900/80 text-sm mb-4">Nous répondons à toutes les demandes sous 48h ouvrées.</p>
                        <a href="tel:+221781792510"
                            class="inline-flex items-center gap-2 px-6 py-2.5 bg-blue-900 text-white font-semibold rounded-full hover:bg-blue-800 transition-colors text-sm">
                            <svg style="width:16px;height:16px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Appeler maintenant
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-blue-900">
    <div class="max-w-[1200px] mx-auto px-6 lg:px-12 text-center">
        <div class="w-12 h-px bg-amber-500 mx-auto mb-4"></div>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
            Vous préférez nous appeler ?
        </h2>
        <p class="text-gray-400 mb-8 max-w-md mx-auto">
            Notre équipe est disponible du lundi au vendredi de 9h à 18h.
        </p>
        <a href="tel:+221781792510" class="inline-block px-8 py-3 bg-amber-500 text-blue-900 font-semibold rounded-full hover:bg-amber-400 transition-colors">
            +221 78 179 25 10
        </a>
    </div>
</section>

@endsection