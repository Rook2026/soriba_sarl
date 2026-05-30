{{--
    partials/empty.blade.php
    ─────────────────────────────────────────────────────
    Partial générique pour les sections "vides" ou "en construction".
    Usage : @include('frontend.partials.empty', ['message' => 'Aucun résultat trouvé.'])
--}}

<div style="
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 80px 24px;
    text-align: center;
">
    {{-- Icône SVG circulaire --}}
    <div style="
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(212,175,55,0.06);
        border: 1px solid rgba(212,175,55,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
    ">
        @if(isset($icon) && $icon)
            {!! $icon !!}
        @else
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="rgba(212,175,55,0.5)" stroke-width="1.5">
                <circle cx="12" cy="12" r="10"/>
                <line x1="12" y1="8" x2="12" y2="12"/>
                <line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
        @endif
    </div>

    {{-- Titre --}}
    <h3 style="
        font-family: 'Playfair Display', serif;
        font-size: 1.25rem;
        font-weight: 700;
        color: #F5F5F5;
        margin-bottom: 10px;
    ">
        {{ $title ?? 'Aucun résultat' }}
    </h3>

    {{-- Message --}}
    <p style="
        font-size: 0.95rem;
        color: #888888;
        max-width: 380px;
        line-height: 1.7;
        margin-bottom: 28px;
    ">
        {{ $message ?? 'Il n\'y a rien à afficher pour le moment. Revenez prochainement.' }}
    </p>

    {{-- CTA optionnel --}}
    @if(isset($cta_label) && $cta_label)
        <a href="{{ $cta_url ?? '#' }}" class="btn-gold">
            <span>{{ $cta_label }}</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    @endif
</div>