@extends('frontend.layout.master')
@section('title', 'Conditions d\'Utilisation — SORIBA SARL')
@section('content')
<section style="padding:180px 0 120px; min-height:100vh;">
    <div class="container-custom" style="max-width:860px; margin:0 auto;">
        <div class="gsap-reveal-up" style="opacity:0;margin-bottom:60px;">
            <p style="font-family:Manrope,sans-serif;font-size:0.7rem;letter-spacing:0.35em;text-transform:uppercase;color:rgba(212,175,55,0.7);margin-bottom:16px;">Légal</p>
            <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,4vw,3rem);font-weight:800;color:#F5F5F5;margin-bottom:16px;">Conditions <span style="color:#D4AF37;">d'utilisation</span></h1>
            <div style="width:60px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);margin-bottom:24px;"></div>
        </div>
        @php $terms=[['title'=>'1. Acceptation des conditions','content'=>'En accédant au site web de SORIBA SARL, vous acceptez sans réserve 
        les présentes conditions d\'utilisation. Si vous n\'acceptez pas ces conditions, veuillez ne pas utiliser ce site.']
        ,['title'=>'2. Propriété intellectuelle','content'=>'L\'ensemble du contenu présent sur ce site (textes, images, logos, marques)
         est la propriété exclusive de SORIBA SARL et est protégé par les lois relatives à la propriété intellectuelle.'],
         ['title'=>'3. Limitation de responsabilité','content'=>'SORIBA SARL ne saurait être tenu responsable des dommages directs ou 
         indirects résultant de l\'utilisation de ce site ou de l\'impossibilité d\'y accéder.'],
         ['title'=>'4. Droit applicable','content'=>'Les présentes conditions sont soumises au droit sénégalais. Tout litige sera
          soumis à la juridiction compétente de Dakar, Sénégal.']]; @endphp
        @foreach($terms as $t)
        <div class="gsap-reveal-up" style="opacity:0; margin-bottom:40px; padding:32px; background:rgba(255,255,255,0.02); border-left:2px solid rgba(212,175,55,0.3);">
            <h2 style="font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:#F5F5F5;margin-bottom:16px;">{{ $t['title'] }}</h2>
            <p style="font-family:Manrope,sans-serif;font-size:0.9rem;color:#666;line-height:1.85;">{{ $t['content'] }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection