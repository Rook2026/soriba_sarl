{{-- services/details.blade.php --}}
@extends('frontend.layout.master')
@section('title', 'Détail Service — SORIBA SARL')
@section('content')
<section style="padding:180px 0 120px;">
    <div class="container-custom">
        <div class="gsap-reveal-up" style="opacity:0;">
            <a href="/services" style="font-family:Manrope,sans-serif;font-size:0.8rem;color:#666;text-decoration:none;display:inline-flex;align-items:center;gap:6px;margin-bottom:40px;" onmouseover="this.style.color='#D4AF37'" onmouseout="this.style.color='#666'">
                <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Retour aux services
            </a>
            <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,4vw,3.5rem);font-weight:800;color:#F5F5F5;line-height:1.2;margin-bottom:24px;">
                @yield('service_title', 'Détail du Service')
            </h1>
            <div style="width:60px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);margin-bottom:32px;"></div>
            <p style="font-family:Manrope,sans-serif;font-size:1rem;color:#666;max-width:700px;line-height:1.9;">
                @yield('service_description', 'Description complète du service proposé par SORIBA SARL.')
            </p>
        </div>
    </div>
</section>
@endsection