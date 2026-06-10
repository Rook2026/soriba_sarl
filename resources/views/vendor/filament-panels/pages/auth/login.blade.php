<x-filament-panels::page.simple>
    <div class="flex flex-col items-center gap-2 mb-6">
        <div class="text-center">
            <div style="font-size:2.8rem;font-weight:900;letter-spacing:0.35em;color:#D4AF37;font-family:'Playfair Display',serif;line-height:1;">
                SORIBA
            </div>
            <div style="font-size:0.65rem;letter-spacing:0.6em;color:#9CA3AF;text-transform:uppercase;margin-top:4px;">
                SARL
            </div>
            <div style="width:48px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);margin:12px auto;"></div>
            <div style="font-size:0.65rem;letter-spacing:0.25em;color:#6B7280;text-transform:uppercase;">
                Plateforme d'Administration
            </div>
        </div>
    </div>

    @if (filament()->hasRegistration())
        <x-slot name="subheading">
            {{ __('filament-panels::pages/auth/login.actions.register.before') }}
            {{ $this->registerAction }}
        </x-slot>
    @endif

    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>
</x-filament-panels::page.simple>