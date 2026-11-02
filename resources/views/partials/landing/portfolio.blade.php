{{-- Portfolio / Showcase Section - Flat Comic / Neo-Brutalism --}}
<section id="portofolio" class="relative py-20 lg:py-28 bg-white comic-grid border-b-4 border-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-yellow-300 text-black border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider mb-4 rotate-1">
                <x-heroicon-s-sparkles class="w-4 h-4 text-black" />
                <span>KARYA & PORTOFOLIO</span>
            </div>

            {{-- 3D Extruded Headline --}}
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-black leading-tight mb-4">
                PROJECT YANG TELAH
                <span class="bg-blue-600 text-white px-3 py-0.5 border-3 border-black shadow-[4px_4px_0px_0px_#000] inline-block -rotate-1 comic-text-shadow">
                    KAMI SELESAIKAN
                </span>
            </h2>

            <p class="text-base sm:text-lg font-bold text-slate-700 max-w-2xl mx-auto leading-relaxed">
                Jelajahi berbagai website dan aplikasi nyata yang telah kami bangun dengan standar mutu tinggi, performa super cepat, dan kepuasan klien.
            </p>
        </div>

        {{-- Neo-Brutalist Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
            @forelse($projects as $project)
                <div class="bg-white border-4 border-black shadow-[6px_6px_0px_0px_#000] hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[10px_10px_0px_0px_#000] transition-all flex flex-col justify-between group overflow-hidden relative">
                    
                    {{-- Featured Sticker --}}
                    @if($project->is_featured)
                        <div class="absolute top-4 right-4 z-20">
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-yellow-300 text-black border-2 border-black shadow-[2px_2px_0px_0px_#000] text-[10px] font-black uppercase tracking-wider rotate-2">
                                <x-heroicon-s-star class="w-3.5 h-3.5 text-black" />
                                <span>PROYEK UNGGULAN</span>
                            </span>
                        </div>
                    @endif

                    <div>
                        {{-- Mockup Browser Header Window --}}
                        <div class="bg-slate-100 border-b-3 border-black px-4 py-2.5 flex items-center justify-between">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-red-400 border border-black inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-400 border border-black inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-400 border border-black inline-block"></span>
                            </div>
                            <div class="text-[11px] font-mono font-bold text-slate-500 truncate max-w-[200px]">
                                {{ parse_url($project->url, PHP_URL_HOST) ?? $project->url }}
                            </div>
                            <div class="w-8"></div>
                        </div>

                        {{-- Project Visual / Image Area --}}
                        <div class="relative bg-blue-50 border-b-3 border-black aspect-[16/9] overflow-hidden flex items-center justify-center">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            @else
                                {{-- Flat Comic Geometric Graphic Placeholder --}}
                                <div class="w-full h-full p-6 flex flex-col items-center justify-center bg-gradient-to-br from-blue-100 to-blue-200 relative overflow-hidden">
                                    {{-- Geometric floating shapes --}}
                                    <div class="absolute -right-4 -bottom-4 w-24 h-24 rounded-full bg-yellow-300 border-3 border-black opacity-80"></div>
                                    <div class="absolute -left-3 -top-3 w-16 h-16 bg-blue-600 border-3 border-black rotate-12 opacity-80"></div>
                                    <div class="relative z-10 w-16 h-16 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000] flex items-center justify-center mb-3">
                                        @if(str_contains(strtolower($project->category), 'sekolah'))
                                            <x-heroicon-o-academic-cap class="w-9 h-9 stroke-black stroke-2 text-blue-600" />
                                        @elseif(str_contains(strtolower($project->category), 'commerce') || str_contains(strtolower($project->category), 'toko'))
                                            <x-heroicon-o-shopping-bag class="w-9 h-9 stroke-black stroke-2 text-blue-600" />
                                        @elseif(str_contains(strtolower($project->category), 'app'))
                                            <x-heroicon-o-cpu-chip class="w-9 h-9 stroke-black stroke-2 text-blue-600" />
                                        @else
                                            <x-heroicon-o-building-office-2 class="w-9 h-9 stroke-black stroke-2 text-blue-600" />
                                        @endif
                                    </div>
                                    <span class="relative z-10 text-xs font-black uppercase tracking-wider text-black bg-white px-2.5 py-1 border-2 border-black shadow-[2px_2px_0px_0px_#000]">
                                        LIVE PREVIEW ACTIVE
                                    </span>
                                </div>
                            @endif
                        </div>

                        {{-- Project Body Information --}}
                        <div class="p-6">
                            {{-- Category Pill --}}
                            <div class="mb-3">
                                <span class="inline-block px-2.5 py-0.5 text-xs font-black uppercase tracking-wider bg-blue-600 text-white border-2 border-black shadow-[2px_2px_0px_0px_#000]">
                                    {{ $project->category }}
                                </span>
                                @if($project->client)
                                    <span class="ml-2 text-xs font-bold text-slate-500">
                                        • {{ $project->client }}
                                    </span>
                                @endif
                            </div>

                            <h3 class="text-xl sm:text-2xl font-black uppercase tracking-tight text-black mb-2 group-hover:text-blue-600 transition-colors">
                                {{ $project->title }}
                            </h3>

                            <p class="text-sm font-semibold text-slate-700 leading-relaxed mb-5">
                                {{ $project->description }}
                            </p>

                            {{-- Tags / Tech Stack --}}
                            @if(!empty($project->tags))
                                <div class="flex flex-wrap gap-2 mb-2">
                                    @foreach($project->tags as $tag)
                                        <span class="px-2 py-0.5 text-[11px] font-bold text-black bg-slate-100 border border-black">
                                            #{{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Action Button: Visit Live Website --}}
                    <div class="p-6 pt-0">
                        <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 bg-blue-600 text-white font-black text-xs uppercase tracking-wider text-center border-3 border-black shadow-[4px_4px_0px_0px_#000] hover:bg-blue-700 hover:translate-x-0.5 hover:translate-y-0.5 transition-all flex items-center justify-center gap-2 group/btn">
                            <span>KUNJUNGI WEBSITE</span>
                            <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 stroke-black stroke-2 text-yellow-300" />
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-sm font-bold text-slate-600">Belum ada portofolio proyek yang ditayangkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

