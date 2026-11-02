{{-- Services Section - Flat Comic / Neo-Brutalism --}}
<section id="layanan" class="relative py-20 lg:py-28 bg-white comic-grid border-b-4 border-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 text-white border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider mb-4 -rotate-1">
                <x-heroicon-s-sparkles class="w-4 h-4 text-yellow-300" />
                <span>LAYANAN SPESIALIS</span>
            </div>

            {{-- 3D Extruded Headline --}}
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-black leading-tight mb-4">
                SOLUSI DIGITAL UNTUK
                <span class="bg-blue-600 text-white px-3 py-0.5 border-3 border-black shadow-[4px_4px_0px_0px_#000] inline-block rotate-1 comic-text-shadow">
                    SEMUA KEBUTUHAN
                </span>
            </h2>

            <p class="text-base sm:text-lg font-bold text-slate-700 max-w-2xl mx-auto leading-relaxed">
                Kami siap merancang dan membangun platform digital berkualitas tinggi yang tangguh, aman, dan meningkatkan reputasi brand Anda.
            </p>
        </div>

        {{-- Neo-Brutalist Service Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 items-stretch">
            @forelse($services as $service)
                <div class="bg-white border-4 border-black shadow-[6px_6px_0px_0px_#000] hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[10px_10px_0px_0px_#000] transition-all p-7 flex flex-col justify-between group">
                    <div>
                        {{-- Icon in solid border box --}}
                        <div class="w-14 h-14 {{ $service->icon_bg_color === 'blue' ? 'bg-blue-600 text-white group-hover:bg-blue-500' : 'bg-white text-blue-600 group-hover:bg-blue-50' }} border-3 border-black shadow-[4px_4px_0px_0px_#000] flex items-center justify-center mb-6 transition-colors">
                            @if($service->icon === 'academic-cap')
                                <x-heroicon-o-academic-cap class="w-8 h-8 stroke-black stroke-2" />
                            @elseif($service->icon === 'building-office-2')
                                <x-heroicon-o-building-office-2 class="w-8 h-8 stroke-black stroke-2" />
                            @elseif($service->icon === 'shopping-bag')
                                <x-heroicon-o-shopping-bag class="w-8 h-8 stroke-black stroke-2" />
                            @elseif($service->icon === 'cpu-chip')
                                <x-heroicon-o-cpu-chip class="w-8 h-8 stroke-black stroke-2 text-blue-600" />
                            @elseif($service->icon === 'rocket-launch')
                                <x-heroicon-o-rocket-launch class="w-8 h-8 stroke-black stroke-2" />
                            @elseif($service->icon === 'globe-alt')
                                <x-heroicon-o-globe-alt class="w-8 h-8 stroke-black stroke-2" />
                            @elseif($service->icon === 'device-phone-mobile')
                                <x-heroicon-o-device-phone-mobile class="w-8 h-8 stroke-black stroke-2" />
                            @else
                                <x-heroicon-o-sparkles class="w-8 h-8 stroke-black stroke-2" />
                            @endif
                        </div>

                        <h3 class="text-xl font-black uppercase tracking-tight text-black mb-3">
                            {{ $service->title }}
                        </h3>

                        <p class="text-sm font-semibold text-slate-700 leading-relaxed mb-6">
                            {{ $service->description }}
                        </p>

                        {{-- Feature checklist --}}
                        @if(!empty($service->features))
                            <ul class="space-y-2.5 mb-8 border-t-2 border-black pt-4">
                                @foreach($service->features as $feature)
                                    <li class="flex items-center gap-2 text-xs font-bold text-black">
                                        <span class="w-5 h-5 bg-blue-100 border border-black flex items-center justify-center shrink-0">
                                            <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2 text-blue-700" />
                                        </span>
                                        <span>{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    {{-- Action Button --}}
                    <a href="{{ $service->button_url ?? '#kontak' }}" class="w-full py-3 bg-white text-black font-black text-xs uppercase tracking-wider text-center border-2 border-black shadow-[3px_3px_0px_0px_#000] group-hover:bg-blue-600 group-hover:text-white transition-all flex items-center justify-center gap-1.5">
                        <span>{{ $service->button_text ?: 'PILIH LAYANAN' }}</span>
                        <x-heroicon-o-arrow-right class="w-4 h-4 stroke-black stroke-2" />
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-sm font-bold text-slate-600">Belum ada layanan yang ditayangkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>