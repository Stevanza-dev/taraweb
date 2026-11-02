{{-- Advantages / Why Us Section - Flat Comic / Neo-Brutalism --}}
<section id="keunggulan" class="relative py-20 lg:py-28 bg-white comic-grid border-b-4 border-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 text-white border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider mb-4 rotate-1">
                <x-heroicon-s-sparkles class="w-4 h-4 text-yellow-300" />
                <span>KEUNGGULAN UTAMA</span>
            </div>

            {{-- 3D Extruded Headline --}}
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-black leading-tight mb-4">
                MENGAPA MEMILIH
                <span class="bg-blue-600 text-white px-3 py-0.5 border-3 border-black shadow-[4px_4px_0px_0px_#000] inline-block -rotate-1 comic-text-shadow">
                    WEB TARA?
                </span>
            </h2>

            <p class="text-base sm:text-lg font-bold text-slate-700 max-w-2xl mx-auto leading-relaxed">
                Kombinasi kecepatan rekayasa sistem, desain berkarakter kuat, dan jaminan keamanan kode tanpa ribet.
            </p>
        </div>

        {{-- Neo-Brutalist Advantages Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 items-stretch">
            @forelse($advantages as $adv)
                @php
                    $iconBg = match($adv->icon_bg_color) {
                        'yellow' => 'bg-yellow-300 text-black',
                        'blue' => 'bg-blue-600 text-white',
                        default => 'bg-white text-blue-600',
                    };
                @endphp
                <div class="bg-white border-4 border-black shadow-[6px_6px_0px_0px_#000] hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[10px_10px_0px_0px_#000] transition-all p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 {{ $iconBg }} border-3 border-black shadow-[3px_3px_0px_0px_#000] flex items-center justify-center mb-5">
                            @if($adv->icon === 'bolt')
                                <x-heroicon-o-bolt class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'code-bracket-square')
                                <x-heroicon-o-code-bracket-square class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'chat-bubble-left-right')
                                <x-heroicon-o-chat-bubble-left-right class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'banknotes')
                                <x-heroicon-o-banknotes class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'arrow-path')
                                <x-heroicon-o-arrow-path class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'chart-bar')
                                <x-heroicon-o-chart-bar class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'shield-check')
                                <x-heroicon-o-shield-check class="w-7 h-7 stroke-black stroke-2" />
                            @elseif($adv->icon === 'sparkles')
                                <x-heroicon-o-sparkles class="w-7 h-7 stroke-black stroke-2" />
                            @else
                                <x-heroicon-o-check-badge class="w-7 h-7 stroke-black stroke-2" />
                            @endif
                        </div>

                        <h3 class="text-xl font-black uppercase tracking-tight text-black mb-2">
                            {{ $adv->title }}
                        </h3>

                        <p class="text-sm font-semibold text-slate-700 leading-relaxed mb-4">
                            {{ $adv->description }}
                        </p>
                    </div>

                    @if($adv->badge_text)
                        <div class="pt-4 border-t-2 border-black flex items-center gap-1.5 text-xs font-black uppercase text-blue-600">
                            <x-heroicon-o-check class="w-4 h-4 stroke-black stroke-2" />
                            <span>{{ $adv->badge_text }}</span>
                        </div>
                    @endif
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-sm font-bold text-slate-600">Belum ada keunggulan yang ditayangkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>