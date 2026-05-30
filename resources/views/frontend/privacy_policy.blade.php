@extends('frontend.layout.master')
@section('title', 'Politique de Confidentialité — SORIBA SARL')
@section('content')
<section style="padding:180px 0 120px; min-height:100vh;">
    <div class="container-custom" style="max-width:860px; margin:0 auto;">
        <div class="gsap-reveal-up" style="opacity:0;margin-bottom:60px;">
            <p style="font-family:Manrope,sans-serif;font-size:0.7rem;letter-spacing:0.35em;text-transform:uppercase;color:rgba(212,175,55,0.7);margin-bottom:16px;">Légal</p>
            <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#F5F5F5;margin-bottom:16px;">Politique de <span style="color:#D4AF37;">confidentialité</span></h1>
            <div style="width:60px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);margin-bottom:24px;"></div>
            <p style="font-family:Manrope,sans-serif;font-size:0.85rem;color:#555;">Dernière mise à jour : Janvier 2025</p>
        </div>
        @php $sections=[['title'=>'1. Collecte des données','content'=>'SORIBA SARL collecte uniquement les données personnelles nécessaires à la fourniture de ses services et à la gestion 
        de ses relations partenaires. Ces données sont collectées avec votre consentement explicite.'],['title'=>'2. Utilisation des données',
        'content'=>'Vos données sont utilisées exclusivement pour le suivi de nos relations commerciales, l\'envoi de communications 
        pertinentes et l\'amélioration de nos services. Elles ne sont jamais vendues à des tiers.'],
        ['title'=>'3. Protection des données','content'=>'SORIBA SARL met en œuvre des mesures de sécurité techniques et organisationnelles 
        appropriées pour protéger vos données contre tout accès non autorisé, modification ou divulgation.'],['title'=>'4. Vos droits',
        'content'=>'Conformément aux réglementations applicables, vous disposez d\'un droit d\'accès, de rectification, de suppression et 
        de portabilité de vos données. Pour exercer ces droits, contactez-nous à contact@soriba-sarl.com.']]; @endphp
        @foreach($sections as $s)
        <div class="gsap-reveal-up" style="opacity:0; margin-bottom:40px; padding:32px; background:rgba(255,255,255,0.02); border-left:2px solid rgba(212,175,55,0.3);">
            <h2 style="font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:#F5F5F5;margin-bottom:16px;">{{ $s['title'] }}</h2>
            <p style="font-family:Manrope,sans-serif;font-size:0.9rem;color:#666;line-height:1.85;">{{ $s['content'] }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection