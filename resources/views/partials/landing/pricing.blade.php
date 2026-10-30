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

        {{-- 3 Neo-Brutalist Pricing Cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            
            {{-- Package 1: Bronze --}}
            <div class="bg-white border-4 border-black shadow-[6px_6px_0px_0px_#000] p-8 flex flex-col justify-between">
                <div>
                    {{-- Header Row --}}
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-white border-3 border-black shadow-[3px_3px_0px_0px_#000] flex items-center justify-center text-black">
                            <x-heroicon-o-rocket-launch class="w-7 h-7 stroke-black stroke-2 text-blue-600" />
                        </div>
                        <span class="px-2.5 py-1 bg-slate-100 text-black border-2 border-black text-xs font-black uppercase tracking-wider">
                            STARTER
                        </span>
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-tight text-black mb-1">Paket Bronze</h3>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-6">Cocok untuk landing page promosi instan.</p>

                    {{-- Price Display --}}
                    <div class="p-4 bg-blue-50 border-3 border-black mb-6">
                        <span class="text-[11px] font-black uppercase text-slate-500 block mb-1">Mulai dari</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-sm font-black text-black">Rp</span>
                            <span class="text-4xl font-black text-black">1,5</span>
                            <span class="text-base font-black text-blue-600 uppercase">Juta</span>
                        </div>
                    </div>

                    {{-- Features List --}}
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Landing page 1 halaman responsif</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Formulir & Direct Chat WhatsApp</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Optimasi kecepatan pemuatan kilat</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Sertifikat SSL gratis selamanya</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Revisi desain 2 kali gratis</span>
                        </li>
                    </ul>
                </div>

                {{-- Action Button --}}
                <a href="#kontak" class="w-full py-3.5 bg-white text-black font-black text-xs uppercase tracking-wider text-center border-3 border-black shadow-[3px_3px_0px_0px_#000] hover:bg-blue-50 hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                    PILIH PAKET BRONZE
                </a>
            </div>

            {{-- Package 2: Silver (Popular / Recommended) --}}
            <div class="bg-white border-4 border-black shadow-[10px_10px_0px_0px_#000] p-8 flex flex-col justify-between relative lg:-my-3">
                {{-- Floating Best Seller Sticker --}}
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 z-10">
                    <span class="inline-flex items-center gap-1.5 px-5 py-1.5 bg-yellow-300 text-black border-3 border-black shadow-[3px_3px_0px_0px_#000] text-xs font-black uppercase tracking-wider rotate-1">
                        <x-heroicon-s-sparkles class="w-4 h-4 text-black" />
                        <span>PALING DIMINATI</span>
                    </span>
                </div>

                <div>
                    {{-- Header Row --}}
                    <div class="flex items-center justify-between mb-6 mt-2">
                        <div class="w-12 h-12 bg-blue-600 border-3 border-black shadow-[3px_3px_0px_0px_#000] flex items-center justify-center text-white">
                            <x-heroicon-o-sparkles class="w-7 h-7 stroke-black stroke-2" />
                        </div>
                        <span class="px-2.5 py-1 bg-blue-600 text-white border-2 border-black text-xs font-black uppercase tracking-wider">
                            BEST VALUE
                        </span>
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-tight text-black mb-1">Paket Silver</h3>
                    <p class="text-xs font-bold text-blue-700 uppercase tracking-wider mb-6">Pilihan nomor 1 sekolah & perusahaan.</p>

                    {{-- Price Display --}}
                    <div class="p-4 bg-blue-600 text-white border-3 border-black shadow-[3px_3px_0px_0px_#000] mb-6">
                        <span class="text-[11px] font-black uppercase text-blue-200 block mb-1">Mulai dari</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-sm font-black text-white">Rp</span>
                            <span class="text-4xl font-black text-white comic-text-shadow">3,5</span>
                            <span class="text-base font-black text-yellow-300 uppercase">Juta</span>
                        </div>
                    </div>

                    {{-- Features List --}}
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Website lengkap hingga <strong>10 halaman</strong></span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Panel admin dinamis (mudah diedit sendiri)</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>SEO friendly & Google Index otomatis</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Domain .com / .id + Hosting 1 tahun</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Email bisnis resmi (nama@domain.com)</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Dukungan teknis prioritas 3 bulan</span>
                        </li>
                    </ul>
                </div>

                {{-- Action Button --}}
                <a href="#kontak" class="w-full py-4 bg-blue-600 text-white font-black text-xs uppercase tracking-wider text-center border-3 border-black shadow-[4px_4px_0px_0px_#000] hover:bg-blue-700 hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                    PILIH PAKET SILVER
                </a>
            </div>

            {{-- Package 3: Gold --}}
            <div class="bg-white border-4 border-black shadow-[6px_6px_0px_0px_#000] p-8 flex flex-col justify-between">
                <div>
                    {{-- Header Row --}}
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-yellow-300 border-3 border-black shadow-[3px_3px_0px_0px_#000] flex items-center justify-center text-black">
                            <x-heroicon-o-trophy class="w-7 h-7 stroke-black stroke-2" />
                        </div>
                        <span class="px-2.5 py-1 bg-yellow-300 text-black border-2 border-black text-xs font-black uppercase tracking-wider">
                            ENTERPRISE
                        </span>
                    </div>

                    <h3 class="text-2xl font-black uppercase tracking-tight text-black mb-1">Paket Gold</h3>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-6">Untuk toko online & sistem berskala penuh.</p>

                    {{-- Price Display --}}
                    <div class="p-4 bg-blue-50 border-3 border-black mb-6">
                        <span class="text-[11px] font-black uppercase text-slate-500 block mb-1">Mulai dari</span>
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-sm font-black text-black">Rp</span>
                            <span class="text-4xl font-black text-black">7</span>
                            <span class="text-base font-black text-blue-600 uppercase">Juta</span>
                        </div>
                    </div>

                    {{-- Features List --}}
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Semua fitur lengkap Paket Silver</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Integrasi E-Commerce & Payment Gateway</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Sistem inventori produk & kalkulator ongkir</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Backup otomatis & proteksi firewall cloud</span>
                        </li>
                        <li class="flex items-start gap-2.5 text-xs font-bold text-black">
                            <span class="w-5 h-5 bg-blue-600 text-white border border-black flex items-center justify-center shrink-0 mt-0.5">
                                <x-heroicon-o-check class="w-3.5 h-3.5 stroke-black stroke-2" />
                            </span>
                            <span>Dukungan teknis VIP prioritas 6 bulan</span>
                        </li>
                    </ul>
                </div>

                {{-- Action Button --}}
                <a href="#kontak" class="w-full py-3.5 bg-white text-black font-black text-xs uppercase tracking-wider text-center border-3 border-black shadow-[3px_3px_0px_0px_#000] hover:bg-blue-50 hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                    PILIH PAKET GOLD
                </a>
            </div>

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
