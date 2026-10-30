{{-- Landing Page Navbar --}}
<nav id="navbar" class="navbar-glass fixed top-0 left-0 right-0 z-50 border-b border-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-18">
            {{-- Logo --}}
            <a href="#" class="flex items-center gap-2 shrink-0">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background: var(--wt-blue);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <span class="text-xl font-extrabold tracking-tight" style="color: var(--wt-navy);">
                    WEB <span style="color: var(--wt-blue);">TARA</span>
                </span>
            </a>

            {{-- Desktop Links --}}
            <div class="hidden lg:flex items-center gap-8">
                <a href="#beranda" class="text-sm font-semibold hover:text-[var(--wt-blue)] transition-colors">Beranda</a>
                <a href="#layanan" class="text-sm font-semibold hover:text-[var(--wt-blue)] transition-colors">Layanan</a>
                <a href="#harga" class="text-sm font-semibold hover:text-[var(--wt-blue)] transition-colors">Paket Harga</a>
                <a href="#portofolio" class="text-sm font-semibold hover:text-[var(--wt-blue)] transition-colors">Portofolio</a>
                <a href="#kontak" class="text-sm font-semibold hover:text-[var(--wt-blue)] transition-colors">Kontak</a>
            </div>

            {{-- CTA + Auth --}}
            <div class="hidden lg:flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn-primary inline-flex items-center px-5 py-2.5 rounded-xl text-sm font-semibold">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-[var(--wt-blue)] transition-colors">Masuk</a>
                    <a href="#kontak" class="btn-primary inline-flex items-center px-5 py-2.5 rounded-xl text-sm font-semibold">
                        Konsultasi Gratis
                    </a>
                @endauth
            </div>

            {{-- Mobile Hamburger --}}
            <button id="mobile-toggle" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="mobile-menu lg:hidden">
            <div class="py-4 flex flex-col gap-3 border-t border-gray-100">
                <a href="#beranda" class="text-sm font-semibold py-2 hover:text-[var(--wt-blue)] transition-colors">Beranda</a>
                <a href="#layanan" class="text-sm font-semibold py-2 hover:text-[var(--wt-blue)] transition-colors">Layanan</a>
                <a href="#harga" class="text-sm font-semibold py-2 hover:text-[var(--wt-blue)] transition-colors">Paket Harga</a>
                <a href="#portofolio" class="text-sm font-semibold py-2 hover:text-[var(--wt-blue)] transition-colors">Portofolio</a>
                <a href="#kontak" class="text-sm font-semibold py-2 hover:text-[var(--wt-blue)] transition-colors">Kontak</a>
                <a href="#kontak" class="btn-primary inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-sm font-semibold mt-2">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</nav>
