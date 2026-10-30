{{-- Footer - Flat Comic / Neo-Brutalism --}}
<footer id="kontak" class="relative pt-16 pb-10 bg-black text-white border-t-4 border-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            
            {{-- Brand Column --}}
            <div class="lg:col-span-1">
                <a href="#" class="flex items-center gap-2.5 mb-5 group">
                    <div class="w-11 h-11 bg-white border-2 border-white shadow-[2px_2px_0px_0px_#fff] flex items-center justify-center p-1">
                        <img src="{{ asset('images/webtara-logo.png') }}" alt="WEB TARA Logo" class="w-full h-full object-contain" />
                    </div>
                    <span class="text-2xl font-black tracking-tight text-white uppercase">
                        WEB <span class="bg-blue-600 text-white px-2 py-0.5 border border-white inline-block">TARA</span>
                    </span>
                </a>
                <p class="text-xs sm:text-sm font-bold text-slate-300 leading-relaxed mb-6">
                    Studio pembuatan website profesional dan berkarakter kuat untuk institusi sekolah, korporasi, dan UMKM se-Indonesia.
                </p>
                <div class="inline-block px-2.5 py-1 bg-yellow-300 text-black border-2 border-white text-[10px] font-black uppercase tracking-wider">
                    ★ EST. 2026 • WEB TARA
                </div>
            </div>

            {{-- Navigation Links --}}
            <div>
                <h4 class="text-xs font-black uppercase tracking-widest text-yellow-300 mb-5 border-b-2 border-white pb-2 inline-block">
                    NAVIGASI
                </h4>
                <ul class="flex flex-col gap-2.5 text-xs font-black uppercase tracking-wider">
                    <li><a href="#beranda" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Beranda</a></li>
                    <li><a href="#layanan" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Layanan</a></li>
                    <li><a href="#harga" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Paket Harga</a></li>
                    <li><a href="#portofolio" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Keunggulan</a></li>
                </ul>
            </div>

            {{-- Services Links --}}
            <div>
                <h4 class="text-xs font-black uppercase tracking-widest text-yellow-300 mb-5 border-b-2 border-white pb-2 inline-block">
                    LAYANAN
                </h4>
                <ul class="flex flex-col gap-2.5 text-xs font-black uppercase tracking-wider">
                    <li><a href="#layanan" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Website Sekolah</a></li>
                    <li><a href="#layanan" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Company Profile</a></li>
                    <li><a href="#layanan" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Toko E-Commerce</a></li>
                    <li><a href="#layanan" class="text-slate-300 hover:text-yellow-300 hover:underline transition-colors">Custom Web App</a></li>
                </ul>
            </div>

            {{-- Contact Information --}}
            <div>
                <h4 class="text-xs font-black uppercase tracking-widest text-yellow-300 mb-5 border-b-2 border-white pb-2 inline-block">
                    HUBUNGI KAMI
                </h4>
                <ul class="flex flex-col gap-3.5 text-xs font-bold">
                    <li class="flex items-start gap-2.5">
                        <div class="w-6 h-6 bg-blue-600 border border-white flex items-center justify-center shrink-0 mt-0.5">
                            <x-heroicon-o-map-pin class="w-4 h-4 stroke-black stroke-2 text-white" />
                        </div>
                        <span class="text-slate-300">Jakarta & Surabaya, Indonesia</span>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <div class="w-6 h-6 bg-blue-600 border border-white flex items-center justify-center shrink-0">
                            <x-heroicon-o-envelope class="w-4 h-4 stroke-black stroke-2 text-white" />
                        </div>
                        <a href="mailto:info@webtara.id" class="text-slate-300 hover:text-yellow-300 transition-colors">info@webtara.id</a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <div class="w-6 h-6 bg-blue-600 border border-white flex items-center justify-center shrink-0">
                            <x-heroicon-o-phone class="w-4 h-4 stroke-black stroke-2 text-white" />
                        </div>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="text-slate-300 hover:text-yellow-300 transition-colors">+62 812-3456-7890</a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="pt-6 border-t-2 border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-black uppercase text-slate-400">
            <p>&copy; {{ date('Y') }} WEB TARA. ALL RIGHTS RESERVED. NEO-BRUTALISM EDITION.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-yellow-300 transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Syarat Ketentuan</a>
            </div>
        </div>

    </div>
</footer>
