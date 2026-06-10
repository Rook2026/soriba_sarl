@extends('frontend.layout.master')

@section('title', 'Nos Services — SORIBA SARL')
@section('meta_description', 'Découvrez nos domaines d\'expertise : Énergie, Infrastructures, Agriculture, Santé, Éducation, Digital, Coopération internationale, PPP et Conseil stratégique.')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(135deg, #0A192F 0%, #0D2137 50%, #0A192F 100%); padding: 160px 0 80px; position: relative; overflow: hidden;">
    <div style="position:absolute;inset:0;opacity:0.2;">
        <div style="position:absolute;top:80px;right:40px;width:384px;height:384px;border:1px solid rgba(251,191,36,0.2);border-radius:50%;"></div>
        <div style="position:absolute;bottom:80px;left:40px;width:320px;height:320px;border:1px solid rgba(251,191,36,0.2);border-radius:50%;"></div>
    </div>
    <div style="max-width:1440px;margin:0 auto;padding:0 24px;position:relative;">
        <div style="text-align:center;max-width:700px;margin:0 auto;">
            <div style="display:inline-flex;align-items:center;gap:8px;padding:8px 16px;border:1px solid rgba(251,191,36,0.3);border-radius:100px;background:rgba(251,191,36,0.05);margin-bottom:24px;">
                <span style="width:8px;height:8px;border-radius:50%;background:#FBB724;"></span>
                <span style="color:#FBB724;font-size:0.75rem;letter-spacing:0.15em;font-weight:600;text-transform:uppercase;">Expertise sectorielle</span>
            </div>
            <h1 style="color:white;font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:1.1;margin-bottom:16px;">
                Nos <span style="color:#FBB724;">services</span>
            </h1>
            <div style="width:60px;height:1px;background:linear-gradient(90deg,transparent,#FBB724,transparent);margin:24px auto;"></div>
            <p style="color:#9CA3AF;font-size:1.1rem;line-height:1.75;max-width:600px;margin:0 auto;">
                Une offre multisectorielle complète pour accompagner les acteurs publics et privés dans leurs ambitions africaines.
            </p>
        </div>
    </div>
</section>

{{-- SERVICES GRID --}}
<section style="padding:80px 0;background:white;">
    <div style="max-width:1440px;margin:0 auto;padding:0 24px;">

        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:32px;">
            @foreach($services as $service)
            <div style="background:white;border-radius:16px;border:1px solid #F1F5F9;padding:32px;transition:all 0.4s ease;box-shadow:0 4px 16px rgba(0,0,0,0.06);"
                 onmouseover="this.style.boxShadow='0 20px 40px rgba(0,0,0,0.12)';this.style.borderColor='rgba(251,191,36,0.3)';this.style.transform='translateY(-4px)'"
                 onmouseout="this.style.boxShadow='0 4px 16px rgba(0,0,0,0.06)';this.style.borderColor='#F1F5F9';this.style.transform='translateY(0)'">

                {{-- Icône --}}
                <div style="width:52px;height:52px;border-radius:10px;background:#0A192F;display:flex;align-items:center;justify-content:center;margin-bottom:20px;flex-shrink:0;">
                    <svg style="width:26px;height:26px;" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>

                {{-- Titre --}}
                <h3 style="font-size:1.2rem;font-weight:700;color:#0A192F;margin-bottom:12px;line-height:1.4;">
                    {{ $service->title }}
                </h3>

                {{-- Description --}}
                <p style="color:#64748B;font-size:0.9rem;line-height:1.7;margin-bottom:20px;">
                    {{ $service->description }}
                </p>

                {{-- Séparateur --}}
                <div style="width:48px;height:1px;background:linear-gradient(90deg,#FBB724,transparent);margin-bottom:16px;"></div>

                {{-- Points clés --}}
                @if($service->points_cles)
                <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:20px;">
                    @foreach($service->points_cles as $point)
                    <span style="padding:4px 12px;background:#EFF6FF;color:#0A192F;font-size:0.75rem;font-weight:500;border-radius:100px;">
                        {{ $point }}
                    </span>
                    @endforeach
                </div>
                @endif

                {{-- Lien --}}
                <a href="{{ route('services.show', $service->slug) }}"
                   style="display:inline-flex;align-items:center;gap:8px;color:#F59E0B;font-weight:600;font-size:0.85rem;text-decoration:none;text-transform:uppercase;letter-spacing:0.05em;"
                   onmouseover="this.style.gap='14px'" onmouseout="this.style.gap='8px'">
                    En savoir plus
                    <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>

        {{-- Section approche --}}
        <div style="margin-top:80px;padding-top:48px;border-top:1px solid #E2E8F0;">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:32px;text-align:center;">
                <div>
                    <div style="width:52px;height:52px;border-radius:50%;background:#EFF6FF;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                        <svg style="width:22px;height:22px;" fill="none" stroke="#0A192F" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 style="color:#0A192F;font-weight:700;font-size:1.1rem;margin-bottom:8px;">Approche sur mesure</h3>
                    <p style="color:#64748B;font-size:0.9rem;line-height:1.6;">Chaque projet reçoit une solution adaptée à ses spécificités et à son contexte.</p>
                </div>
                <div>
                    <div style="width:52px;height:52px;border-radius:50%;background:#EFF6FF;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                        <svg style="width:22px;height:22px;" fill="none" stroke="#0A192F" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 style="color:#0A192F;font-weight:700;font-size:1.1rem;margin-bottom:8px;">Accompagnement global</h3>
                    <p style="color:#64748B;font-size:0.9rem;line-height:1.6;">De l'étude à la réalisation, nous vous accompagnons à chaque étape.</p>
                </div>
                <div>
                    <div style="width:52px;height:52px;border-radius:50%;background:#EFF6FF;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                        <svg style="width:22px;height:22px;" fill="none" stroke="#0A192F" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                        </svg>
                    </div>
                    <h3 style="color:#0A192F;font-weight:700;font-size:1.1rem;margin-bottom:8px;">Réseau international</h3>
                    <p style="color:#64748B;font-size:0.9rem;line-height:1.6;">Un réseau de partenaires qualifiés à travers l'Europe, l'Asie et l'Afrique.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section style="padding:80px 0;background:#0A192F;">
    <div style="max-width:1440px;margin:0 auto;padding:0 24px;text-align:center;">
        <div style="width:48px;height:2px;background:#FBB724;margin:0 auto 16px;"></div>
        <h2 style="color:white;font-size:clamp(1.8rem,3vw,2.8rem);font-weight:700;margin-bottom:16px;">
            Vous avez un projet ?
        </h2>
        <p style="color:#9CA3AF;margin-bottom:32px;max-width:480px;margin-left:auto;margin-right:auto;">
            Discutons de la manière dont nos expertises peuvent contribuer à votre réussite.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:16px;justify-content:center;">
            <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;padding:14px 32px;background:#F59E0B;color:#0A192F;font-weight:700;border-radius:100px;text-decoration:none;transition:all 0.3s;"
               onmouseover="this.style.background='#FBBF24'" onmouseout="this.style.background='#F59E0B'">
                Demander un devis
            </a>
            <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;padding:14px 32px;border:2px solid #F59E0B;color:#F59E0B;font-weight:600;border-radius:100px;text-decoration:none;transition:all 0.3s;"
               onmouseover="this.style.background='rgba(245,158,11,0.1)'" onmouseout="this.style.background='transparent'">
                Nous contacter
            </a>
        </div>
    </div>
</section>

@endsection