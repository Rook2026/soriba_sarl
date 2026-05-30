{{-- ============================================
     SERVICES — SORIBA SARL
============================================ --}}
@extends('frontend.layout.master')
@section('title', 'Nos Services — SORIBA SARL')
@section('content')
<section style="padding:180px 0 120px; background:#0B0B0B; min-height:100vh;">
    <div class="container-custom">
        <div class="gsap-reveal-up" style="opacity:0; text-align:center; margin-bottom:80px;">
            <p style="font-family:Manrope,sans-serif;font-size:0.7rem;letter-spacing:0.35em;text-transform:uppercase;color:rgba(212,175,55,0.7);margin-bottom:16px;">Expertise sectorielle</p>
            <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#F5F5F5;line-height:1.15;margin-bottom:16px;">
                Nos <span style="color:#D4AF37;font-style:italic;">services</span>
            </h1>
            <div style="width:60px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);margin:0 auto 24px;"></div>
            <p style="font-family:Manrope,sans-serif;font-size:0.95rem;color:#666;max-width:540px;margin:0 auto;line-height:1.8;">Une offre multisectorielle complète pour accompagner les acteurs publics et privés dans leurs ambitions africaines.</p>
        </div>

        <div class="gsap-stagger-parent" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(340px,1fr));gap:24px;">
            @php
            $allServices = [
                ['icon'=>'⚡','title'=>'Énergie & Ressources Naturelles','desc'=>'Structuration de projets pétroliers, gaziers et d\'énergies renouvelables. Trading de matières premières et accompagnement des États dans la valorisation de leurs ressources.','tags'=>['Pétrole','Gaz naturel','Solaire','Éolien','Trading']],
                ['icon'=>'🏗','title'=>'Infrastructures & Construction','desc'=>'Développement d\'infrastructures routières, construction de bâtiments industriels et modernisation des ouvrages publics en partenariat avec les collectivités.','tags'=>['Routes','BTP','Ponts','Ports','Aéroports']],
                ['icon'=>'🌾','title'=>'Agriculture & Agro-industrie','desc'=>'Accompagnement de la production agricole à la transformation industrielle, structuration des chaînes de valeur et accès aux marchés internationaux.','tags'=>['Production','Transformation','Export','Filières']],
                ['icon'=>'🏥','title'=>'Santé & Équipements Médicaux','desc'=>'Fourniture d\'équipements médicaux de pointe, établissement de partenariats avec des hôpitaux internationaux et organisation d\'évacuations sanitaires.','tags'=>['Équipements','Hôpitaux','Évacuation','Formation']],
                ['icon'=>'🎓','title'=>'Éducation & Sport','desc'=>'Création et développement d\'universités, de centres de formation professionnelle et d\'infrastructures sportives pour la jeunesse africaine.','tags'=>['Universités','Formation pro','Sport','Jeunesse']],
                ['icon'=>'🚀','title'=>'Commerce, Digital & Logistique','desc'=>'Solutions de transit et dédouanement, développement IT, e-commerce et organisation du tourisme d\'affaires à l\'international.','tags'=>['Transit','IT','E-commerce','Tourisme','Logistique']],
                ['icon'=>'🤝','title'=>'Coopération Internationale','desc'=>'Facilitation des échanges diplomatiques et économiques entre gouvernements africains et partenaires internationaux.','tags'=>['Diplomatie','PPP','Bilatéral','Multilatéral']],
                ['icon'=>'💼','title'=>'PPP & Investissements','desc'=>'Montage et structuration de partenariats public-privé, mise en relation d\'investisseurs institutionnels avec les projets africains à fort potentiel.','tags'=>['PPP','Investissement','Finance','Risque']],
                ['icon'=>'📊','title'=>'Conseil Stratégique','desc'=>'Intelligence de marché, analyse sectorielle et conseil stratégique pour les décideurs publics et les investisseurs privés opérant en Afrique.','tags'=>['Stratégie','Analyse','Conseil','Marché']],
            ];
            @endphp
            @foreach($allServices as $s)
            <a href="/services/{{ Str::slug($s['title']) }}" class="gsap-stagger-child" style="opacity:0; background:#141414; border:1px solid rgba(255,255,255,0.05); padding:36px 28px; display:block; text-decoration:none; transition:all .4s ease; position:relative; overflow:hidden; group" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(212,175,55,0.25)'; this.style.boxShadow='0 32px 80px rgba(0,0,0,0.5)';" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.05)'; this.style.boxShadow='none';">
                <div style="font-size:2rem;margin-bottom:20px;">{{ $s['icon'] }}</div>
                <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:700;color:#F5F5F5;margin-bottom:14px;line-height:1.3;">{{ $s['title'] }}</h3>
                <p style="font-family:Manrope,sans-serif;font-size:0.85rem;color:#666;line-height:1.8;margin-bottom:20px;">{{ $s['desc'] }}</p>
                <div style="display:flex;flex-wrap:wrap;gap:6px;margin-bottom:24px;">
                    @foreach($s['tags'] as $tag)
                    <span style="font-family:Manrope,sans-serif;font-size:0.65rem;letter-spacing:0.12em;text-transform:uppercase;color:rgba(212,175,55,0.65);background:rgba(212,175,55,0.06);border:1px solid rgba(212,175,55,0.12);padding:4px 10px;">{{ $tag }}</span>
                    @endforeach
                </div>
                <span style="font-family:Manrope,sans-serif;font-size:0.72rem;letter-spacing:0.15em;text-transform:uppercase;color:#D4AF37;display:flex;align-items:center;gap:6px;">
                    En savoir plus
                    <svg style="width:12px;height:12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection