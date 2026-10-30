{{-- Hero Section - Flat Comic / Neo-Brutalism --}}
<section id="beranda" class="relative pt-12 pb-20 lg:pt-20 lg:pb-32 overflow-hidden bg-blue-50/60 comic-grid border-b-4 border-black">
    
    {{-- ═══════════════ Floating Geometric Deco Elements ═══════════════ --}}
    {{-- Floating Solid Circle (Top Right) --}}
    <div class="absolute top-12 right-12 w-20 h-20 rounded-full bg-blue-500 border-4 border-black shadow-[4px_4px_0px_0px_#000] animate-float-neo pointer-events-none hidden sm:block"></div>
    
    {{-- Floating Solid White Circle (Top Left) --}}
    <div class="absolute top-28 left-8 w-14 h-14 rounded-full bg-white border-3 border-black shadow-[3px_3px_0px_0px_#000] animate-float-neo pointer-events-none hidden lg:block" style="animation-delay: 1s;"></div>
    
    {{-- Floating Plus / Cross (Right Side) --}}
    <div class="absolute top-1/2 right-6 lg:right-16 text-black pointer-events-none font-black text-4xl select-none animate-float-neo" style="animation-delay: 1.5s;">
        <span class="inline-block px-3 py-1 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000] rotate-12">✕</span>
    </div>

    {{-- Floating Star (Bottom Left) --}}
    <div class="absolute bottom-16 left-6 lg:left-14 text-black pointer-events-none select-none animate-float-neo" style="animation-delay: 0.5s;">
        <div class="w-12 h-12 bg-yellow-300 border-3 border-black shadow-[4px_4px_0px_0px_#000] flex items-center justify-center -rotate-6">
            <x-heroicon-s-star class="w-7 h-7 text-black" />
        </div>
    </div>

    {{-- Floating Square Tag (Bottom Right) --}}
    <div class="absolute bottom-12 right-1/3 pointer-events-none hidden md:block">
        <span class="inline-block px-3 py-1 bg-blue-600 text-white font-black text-xs uppercase tracking-wider border-2 border-black shadow-[3px_3px_0px_0px_#000] rotate-3">
            ★ VERSI 2026
        </span>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-center">
            
            {{-- Left Column: Bold Extruded Headlines & CTAs --}}
            <div class="lg:col-span-7 text-center lg:text-left">
                {{-- Micro-Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000] mb-6">
                    <span class="w-3 h-3 bg-blue-600 border border-black inline-block"></span>
                    <span class="text-xs font-black uppercase tracking-wider text-black">
                        #1 WEB STUDIO TERPERCAYA
                    </span>
                    <span class="bg-blue-600 text-white text-[10px] font-black px-1.5 py-0.5 border border-black">PRO</span>
                </div>

                {{-- Hero Headline: Extruded 3D Hard Solid Shadow --}}
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black uppercase tracking-tight text-black leading-[1.05] mb-6">
                    TINGKATKAN BISNIS DENGAN
                    <span class="block mt-2">
                        <span class="bg-blue-600 text-white px-3 py-1 border-4 border-black shadow-[6px_6px_0px_0px_#000] inline-block -rotate-1 comic-text-shadow">
                            WEBSITE KEREN
                        </span>
                    </span>
                    DARI WEB TARA!
                </h1>

                {{-- Subtitle --}}
                <p class="text-base sm:text-lg font-bold text-slate-800 leading-relaxed max-w-xl mx-auto lg:mx-0 mb-8 border-l-4 border-black pl-4 bg-white/70 py-2">
                    Kami mendesain dan membangun website berkinerja tinggi untuk sekolah, perusahaan, dan UMKM dengan struktur modern, kecepatan kilat, dan identitas visual yang tegas.
                </p>

                {{-- CTA Buttons (Thick Borders & Solid Offset Shadows) --}}
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 mb-10">
                    <a href="#harga" class="btn-neo-primary px-8 py-4 text-sm font-black uppercase tracking-wider w-full sm:w-auto text-center border-4 border-black shadow-[6px_6px_0px_0px_#000] flex items-center justify-center gap-2">
                        <span>PILIH PAKET WEBSITE</span>
                        <x-heroicon-o-arrow-right class="w-5 h-5 stroke-black stroke-2" />
                    </a>

                    <a href="#kontak" class="btn-neo-secondary px-8 py-4 text-sm font-black uppercase tracking-wider w-full sm:w-auto text-center border-4 border-black shadow-[6px_6px_0px_0px_#000] flex items-center justify-center gap-2">
                        <x-heroicon-o-chat-bubble-oval-left-ellipsis class="w-5 h-5 stroke-black stroke-2" />
                        <span>KONSULTASI GRATIS</span>
                    </a>
                </div>

                {{-- Trust Badges --}}
                <div class="flex justify-center lg:justify-start">
                    @include('partials.landing.trust-badges')
                </div>
            </div>

            {{-- Right Column: Neo-Brutalist Comic Showcase Card (No 3D illustration) --}}
            <div class="lg:col-span-5 relative">
                
                {{-- Decorative Backing Box --}}
                <div class="absolute -inset-2 bg-blue-600 border-4 border-black -rotate-2 hidden sm:block"></div>

                {{-- Main Window Card --}}
                <div class="relative bg-white border-4 border-black shadow-[10px_10px_0px_0px_#000] p-6 sm:p-7 rotate-1">
                    
                    {{-- Window Header Bar --}}
                    <div class="flex items-center justify-between pb-4 mb-5 border-b-4 border-black bg-blue-50 -mx-6 sm:-mx-7 -mt-6 sm:-mt-7 p-4">
                        <div class="flex items-center gap-2">
                            <span class="w-4 h-4 rounded-full bg-red-500 border-2 border-black inline-block"></span>
                            <span class="w-4 h-4 rounded-full bg-yellow-400 border-2 border-black inline-block"></span>
                            <span class="w-4 h-4 rounded-full bg-emerald-400 border-2 border-black inline-block"></span>
                        </div>
                        <div class="px-3 py-1 bg-white border-2 border-black shadow-[2px_2px_0px_0px_#000] text-xs font-black text-black">
                            webtara.id
                        </div>
                        <div class="flex items-center gap-1.5 text-xs font-black uppercase px-2 py-0.5 bg-blue-600 text-white border-2 border-black">
                            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                            ONLINE
                        </div>
                    </div>

                    {{-- Comic Showcase Items --}}
                    <div class="space-y-4">
                        
                        {{-- Feature 1: Kecepatan --}}
                        <div class="p-4 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000] flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-blue-600 border-2 border-black shadow-[2px_2px_0px_0px_#000] flex items-center justify-center text-white shrink-0">
                                    <x-heroicon-o-bolt class="w-6 h-6 stroke-black stroke-2" />
                                </div>
                                <div>
                                    <span class="text-[10px] font-black uppercase bg-blue-100 text-blue-800 px-1.5 py-0.5 border border-black inline-block">SPEED TEST</span>
                                    <h2 class="text-sm font-black text-black mt-0.5">SCORE 99/100 (0.4s)</h2>
                                </div>
                            </div>
                            <span class="text-xs font-black px-2.5 py-1 bg-yellow-300 border-2 border-black shadow-[2px_2px_0px_0px_#000]">
                                KILAT
                            </span>
                        </div>

                        {{-- Feature 2: Responsif Mobile --}}
                        <div class="p-4 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000] flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-white border-2 border-black shadow-[2px_2px_0px_0px_#000] flex items-center justify-center text-black shrink-0">
                                    <x-heroicon-o-device-phone-mobile class="w-6 h-6 stroke-black stroke-2 text-blue-600" />
                                </div>
                                <div>
                                    <span class="text-[10px] font-black uppercase bg-slate-100 text-slate-800 px-1.5 py-0.5 border border-black inline-block">TAMPILAN</span>
                                    <h2 class="text-sm font-black text-black mt-0.5">RESPONSIF SEMUA GADGET</h2>
                                </div>
                            </div>
                            <span class="text-xs font-black px-2.5 py-1 bg-blue-600 text-white border-2 border-black shadow-[2px_2px_0px_0px_#000]">
                                RAPI
                            </span>
                        </div>

                        {{-- Feature 3: Keamanan --}}
                        <div class="p-4 bg-white border-3 border-black shadow-[4px_4px_0px_0px_#000] flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-blue-500 border-2 border-black shadow-[2px_2px_0px_0px_#000] flex items-center justify-center text-white shrink-0">
                                    <x-heroicon-o-shield-check class="w-6 h-6 stroke-black stroke-2" />
                                </div>
                                <div>
                                    <span class="text-[10px] font-black uppercase bg-blue-100 text-blue-800 px-1.5 py-0.5 border border-black inline-block">KEAMANAN</span>
                                    <h2 class="text-sm font-black text-black mt-0.5">SSL GRADE A+ RESMI</h2>
                                </div>
                            </div>
                            <span class="text-xs font-black px-2.5 py-1 bg-white text-black border-2 border-black shadow-[2px_2px_0px_0px_#000]">
                                AMAN
                            </span>
                        </div>
                    </div>

                    {{-- Bottom Comic Footer inside Card --}}
                    <div class="mt-5 pt-4 border-t-3 border-black flex items-center justify-between text-xs font-black">
                        <span class="flex items-center gap-1.5">
                            <x-heroicon-s-sparkles class="w-4 h-4 text-blue-600" />
                            <span>100% KODE BERSIH & CEPAT</span>
                        </span>
                        <span class="bg-black text-white px-2 py-0.5">EDISI TERBARU</span>
                    </div>
                </div>

                {{-- Floating Comic Stickers Outside --}}
                <div class="absolute -bottom-6 -left-6 bg-yellow-300 border-3 border-black shadow-[5px_5px_0px_0px_#000] p-3 -rotate-6 hidden sm:flex items-center gap-2 z-20">
                    <x-heroicon-s-check-badge class="w-6 h-6 text-black" />
                    <div>
                        <p class="text-[9px] font-black uppercase text-black leading-tight">DIJAMIN PUAS</p>
                        <p class="text-xs font-black uppercase text-black">GARANSI REVISI</p>
                    </div>
                </div>

                <div class="absolute -top-5 -right-5 bg-blue-600 text-white border-3 border-black shadow-[5px_5px_0px_0px_#000] px-3.5 py-2 rotate-6 z-20 hidden sm:block">
                    <span class="text-xs font-black uppercase tracking-wider">★ 150+ PROYEK</span>
                </div>
            </div>

        </div>
    </div>
</section>
