{{-- Landing Page Navbar - Flat Comic / Neo-Brutalism --}}
<nav id="navbar" class="sticky top-0 z-50 bg-white border-b-4 border-black shadow-[0px_4px_0px_0px_rgba(0,0,0,1)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="#" class="flex items-center gap-3 shrink-0 group">
                <div class="w-11 h-11 bg-white border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] flex items-center justify-center p-1 group-hover:translate-x-0.5 group-hover:translate-y-0.5 group-hover:shadow-[1px_1px_0px_0px_rgba(0,0,0,1)] transition-all">
                    <img src="{{ asset('images/webtara-logo.png') }}" alt="WEB TARA Logo" class="w-full h-full object-contain" />
                </div>
                <span class="text-2xl font-black tracking-tight text-black uppercase">
                    WEB <span class="bg-blue-600 text-white px-2 py-0.5 border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] inline-block -rotate-1">TARA</span>
                </span>
            </a>

            {{-- Desktop Links --}}
            <div class="hidden lg:flex items-center gap-7">
                <a href="#beranda" class="text-sm font-extrabold tracking-wide uppercase text-black hover:text-blue-600 hover:underline decoration-black decoration-2 underline-offset-4 transition-all">Beranda</a>
                <a href="#layanan" class="text-sm font-extrabold tracking-wide uppercase text-black hover:text-blue-600 hover:underline decoration-black decoration-2 underline-offset-4 transition-all">Layanan</a>
                <a href="#harga" class="text-sm font-extrabold tracking-wide uppercase text-black hover:text-blue-600 hover:underline decoration-black decoration-2 underline-offset-4 transition-all">Paket Harga</a>
                <a href="#portofolio" class="text-sm font-extrabold tracking-wide uppercase text-black hover:text-blue-600 hover:underline decoration-black decoration-2 underline-offset-4 transition-all">Keunggulan</a>
                <a href="#kontak" class="text-sm font-extrabold tracking-wide uppercase text-black hover:text-blue-600 hover:underline decoration-black decoration-2 underline-offset-4 transition-all">Kontak</a>
            </div>

            {{-- CTA + Auth --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="#kontak" class="btn-neo-primary px-6 py-2.5 text-xs font-black uppercase tracking-wider">
                    Konsultasi Gratis
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button id="mobile-toggle" class="lg:hidden p-2 bg-white border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] text-black hover:bg-blue-50 transition-colors" aria-label="Toggle menu">
                <x-heroicon-o-bars-3 class="w-6 h-6 stroke-black stroke-2" />
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="mobile-menu lg:hidden">
            <div class="py-4 px-4 mb-4 bg-blue-50 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] flex flex-col gap-3">
                <a href="#beranda" class="text-sm font-extrabold uppercase py-1 text-black hover:text-blue-600">Beranda</a>
                <a href="#layanan" class="text-sm font-extrabold uppercase py-1 text-black hover:text-blue-600">Layanan</a>
                <a href="#harga" class="text-sm font-extrabold uppercase py-1 text-black hover:text-blue-600">Paket Harga</a>
                <a href="#portofolio" class="text-sm font-extrabold uppercase py-1 text-black hover:text-blue-600">Keunggulan</a>
                <a href="#kontak" class="text-sm font-extrabold uppercase py-1 text-black hover:text-blue-600">Kontak</a>
                <a href="#kontak" class="btn-neo-primary w-full py-3 text-xs font-black uppercase tracking-wider text-center mt-2">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</nav>
