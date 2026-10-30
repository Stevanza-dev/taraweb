{{-- Call-to-Action Section - Flat Comic / Neo-Brutalism --}}
<section class="relative py-20 lg:py-28 bg-[#F8FAFC] comic-grid border-b-4 border-black overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        {{-- Big Neo-Brutalist Box --}}
        <div class="bg-blue-600 border-4 border-black shadow-[12px_12px_0px_0px_#000] p-8 sm:p-12 lg:p-16 text-center relative overflow-hidden">
            
            {{-- Floating Decorative Elements Inside the Box --}}
            <div class="absolute top-6 left-6 w-12 h-12 bg-white border-3 border-black shadow-[3px_3px_0px_0px_#000] rounded-full hidden sm:block animate-float-neo pointer-events-none"></div>
            <div class="absolute bottom-6 right-8 w-14 h-14 bg-yellow-300 border-3 border-black shadow-[3px_3px_0px_0px_#000] flex items-center justify-center -rotate-12 hidden sm:flex animate-float-neo pointer-events-none" style="animation-delay: 1.5s;">
                <x-heroicon-s-star class="w-8 h-8 text-black" />
            </div>
            <div class="absolute top-8 right-12 text-white font-black text-2xl hidden md:block select-none pointer-events-none rotate-12">
                <span class="inline-block px-2.5 py-0.5 bg-black text-white border-2 border-white">✕</span>
            </div>

            <div class="relative z-10 max-w-3xl mx-auto">
                {{-- Micro-Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white text-black border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider mb-6 -rotate-1">
                    <x-heroicon-s-sparkles class="w-4 h-4 text-blue-600" />
                    <span>KONSULTASI 100% GRATIS</span>
                </div>

                {{-- Extruded Headline --}}
                <h2 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-white leading-tight mb-6 comic-text-shadow-xl">
                    SIAP MEMBANGUN WEBSITE IMPIAN UNTUK BISNIS ANDA?
                </h2>

                {{-- Subtitle --}}
                <p class="text-base sm:text-lg font-bold text-white leading-relaxed mb-10 max-w-2xl mx-auto bg-black/20 p-3 border-2 border-black">
                    Diskusikan ide dan kebutuhan website Anda bersama tim WEB TARA secara santai. Tanpa ikatan dan dapatkan estimasi biaya yang transparan.
                </p>

                {{-- Buttons Group --}}
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    {{-- Primary WhatsApp Button --}}
                    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="px-8 py-4 bg-yellow-300 text-black border-4 border-black shadow-[6px_6px_0px_0px_#000] hover:bg-yellow-200 hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[3px_3px_0px_0px_#000] transition-all font-black text-sm uppercase tracking-wider flex items-center justify-center gap-2.5 w-full sm:w-auto">
                        <x-heroicon-o-chat-bubble-oval-left-ellipsis class="w-5 h-5 stroke-black stroke-2" />
                        <span>CHAT VIA WHATSAPP SEKARANG</span>
                        <x-heroicon-o-arrow-right class="w-5 h-5 stroke-black stroke-2" />
                    </a>

                    {{-- Secondary Button --}}
                    <a href="#harga" class="px-8 py-4 bg-white text-black border-4 border-black shadow-[6px_6px_0px_0px_#000] hover:bg-slate-100 hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-[3px_3px_0px_0px_#000] transition-all font-black text-sm uppercase tracking-wider flex items-center justify-center gap-2 w-full sm:w-auto">
                        <span>LIHAT ESTIMASI HARGA</span>
                    </a>
                </div>

                {{-- Reassurance Points --}}
                <div class="mt-12 pt-6 border-t-3 border-black flex flex-wrap items-center justify-center gap-5 sm:gap-8 text-xs font-black uppercase text-white">
                    <div class="flex items-center gap-1.5 bg-black text-white px-2.5 py-1 border border-white">
                        <x-heroicon-o-check class="w-4 h-4 stroke-white stroke-2" />
                        <span>RESPONS CEPAT</span>
                    </div>
                    <div class="flex items-center gap-1.5 bg-black text-white px-2.5 py-1 border border-white">
                        <x-heroicon-o-check class="w-4 h-4 stroke-white stroke-2" />
                        <span>BIAYA TRANSPARAN</span>
                    </div>
                    <div class="flex items-center gap-1.5 bg-black text-white px-2.5 py-1 border border-white">
                        <x-heroicon-o-check class="w-4 h-4 stroke-white stroke-2" />
                        <span>GARANSI 100% REVISI</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
