{{-- Pricing Section - Flat Comic / Neo-Brutalism --}}
<section id="harga" class="relative py-20 lg:py-28 bg-blue-50/70 comic-grid border-b-4 border-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white text-black border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider mb-4 rotate-1">
                <x-heroicon-s-tag class="w-4 h-4 text-blue-600" />
                <span>INVESTASI TRANSPARAN</span>
            </div>

            {{-- Extruded Headline --}}
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-black leading-tight mb-4">
                PILIH PAKET SESUAI
                <span class="bg-blue-600 text-white px-3 py-0.5 border-3 border-black shadow-[4px_4px_0px_0px_#000] inline-block -rotate-1 comic-text-shadow">
                    TARGET ANDA
                </span>
            </h2>

            <p class="text-base sm:text-lg font-bold text-slate-700 max-w-2xl mx-auto leading-relaxed">
                Tanpa biaya tersembunyi. Semua paket sudah termasuk konfigurasi domain, hosting cepat, dan pendampingan teknis langsung.
            </p>
        </div>

        {{-- Neo-Brutalist Pricing Cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            @forelse($pricingPlans as $pkg)
                <div class="bg-white border-4 border-black {{ $pkg->is_popular ? 'shadow-[10px_10px_0px_0px_#000] relative lg:-my-3' : 'shadow-[6px_6px_0px_0px_#000]' }} p-8 flex flex-col justify-between">
                    {{-- Floating Best Seller Sticker --}}
                    @if($pkg->is_popular)
                        <div class="absolute -top-5 left-1/2 -translate-x-1/2 z-10">
                            <span class="inline-flex items-center gap-1.5 px-5 py-1.5 bg-yellow-300 text-black border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider rotate-1">
                                <x-heroicon-s-sparkles class="w-4 h-4 text-black" />
                                <span>PALING DIMINATI</span>
                            </span>
                        </div>
                    @endif

                    <div>
                        {{-- Header Row --}}
                        <div class="flex items-center justify-between mb-6 {{ $pkg->is_popular ? 'mt-2' : '' }}">
                            <div class="w-12 h-12 {{ $pkg->is_popular ? 'bg-blue-600 text-white' : ($pkg->badge === 'ENTERPRISE' ? 'bg-yellow-300 text-black' : 'bg-white text-black') }} border-3 border-black shadow-[3px_3px_0px_0px_#000] flex items-center justify-center">
                                @if($pkg->icon === 'rocket-launch')
                                    <x-heroicon-o-rocket-launch class="w-7 h-7 stroke-black stroke-2 {{ $pkg->is_popular ? 'text-white' : 'text-blue-600' }}" />
                                @elseif($pkg->icon === 'sparkles')
                                    <x-heroicon-o-sparkles class="w-7 h-7 stroke-black stroke-2" />
                                @elseif($pkg->icon === 'trophy')
                                    <x-heroicon-o-trophy class="w-7 h-7 stroke-black stroke-2" />
                                @elseif($pkg->icon === 'star')
                                    <x-heroicon-o-star class="w-7 h-7 stroke-black stroke-2" />
                                @elseif($pkg->icon === 'building-office-2')
                                    <x-heroicon-o-building-office-2 class="w-7 h-7 stroke-black stroke-2" />
                                @else
                                    <x-heroicon-o-bolt class="w-7 h-7 stroke-black stroke-2" />
                                @endif
                            </div>

                            @if($pkg->badge)
                                <span class="px-2.5 py-1 {{ $pkg->is_popular ? 'bg-blue-600 text-white' : ($pkg->badge === 'ENTERPRISE' ? 'bg-yellow-300 text-black' : 'bg-slate-100 text-black') }} border-2 border-black text-xs font-black uppercase tracking-wider">
                                    {{ $pkg->badge }}
                                </span>
                            @endif
                        </div>

                        <h3 class="text-2xl font-black uppercase tracking-tight text-black mb-1">{{ $pkg->name }}</h3>
                        <p class="text-xs font-bold {{ $pkg->is_popular ? 'text-blue-700' : 'text-slate-500' }} uppercase tracking-wider mb-6">{{ $pkg->tagline }}</p>

                        {{-- Price Display --}}
                        @if($pkg->is_popular)
                            <div class="p-4 bg-blue-600 text-white border-3 border-black shadow-[3px_3px_0px_0px_#000] mb-6">
                                <span class="text-[11px] font-black uppercase text-blue-200 block mb-1">Mulai dari</span>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-sm font-black text-white">Rp</span>
                                    <span class="text-4xl font-black text-white comic-text-shadow">{{ $pkg->price }}</span>
                                    <span class="text-base font-black text-yellow-300 uppercase">{{ $pkg->price_unit }}</span>
                                </div>
                            </div>
                        @else
                            <div class="p-4 bg-blue-50 border-3 border-black mb-6">
                                <span class="text-[11px] font-black uppercase text-slate-500 block mb-1">Mulai dari</span>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-sm font-black text-black">Rp</span>
                                    <span class="text-4xl font-black text-black">{{ $pkg->price }}</span>
                                    <span class="text-base font-black text-blue-600 uppercase">{{ $pkg->price_unit }}</span>
                                </div>
                            </div>
                        @endif

                        {{-- Features List --}}
                        @if(!empty($pkg->features))
                            <ul class="space-y-3 mb-8">
                                @foreach($pkg->features as $feature)
                                    <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                                        <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                            <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                                        </span>
                                        <span>{!! $feature !!}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    {{-- Action Button --}}
                    @if($pkg->is_popular)
                        <a href="{{ $pkg->button_url ?? '#kontak' }}" class="w-full py-4 bg-blue-600 text-white font-black text-xs uppercase tracking-wider text-center border-3 border-black shadow-[4px_4px_0px_0px_#000] hover:bg-blue-700 hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                            {{ $pkg->button_text ?: 'PILIH PAKET' }}
                        </a>
                    @else
                        <a href="{{ $pkg->button_url ?? '#kontak' }}" class="w-full py-3.5 bg-white text-black font-black text-xs uppercase tracking-wider text-center border-3 border-black shadow-[3px_3px_0px_0px_#000] hover:bg-blue-50 hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                            {{ $pkg->button_text ?: 'PILIH PAKET' }}
                        </a>
                    @endif
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-sm font-bold text-slate-600">Belum ada paket harga yang ditayangkan.</p>
                </div>
            @endforelse
        </div>

        {{-- Money-Back Guarantee Strip --}}
        <div class="mt-14 text-center">
            <div class="inline-flex flex-col sm:flex-row items-center gap-3 px-6 py-4 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000]">
                <div class="w-9 h-9 bg-yellow-300 border-2 border-black flex items-center justify-center text-black shrink-0">
                    <x-heroicon-o-shield-check class="w-6 h-6 stroke-black stroke-2" />
                </div>
                <p class="text-xs sm:text-sm font-black uppercase text-black tracking-wide">
                    JAMINAN KEPUASAN: <span class="bg-blue-600 text-white px-1.5 py-0.5 border border-black">100% UANG KEMBALI</span> DALAM 7 HARI JIKA TIDAK SESUAI BRIEF
                </p>
            </div>
        </div>
    </div>
</section>