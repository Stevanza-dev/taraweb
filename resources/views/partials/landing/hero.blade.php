{{-- Hero Section --}}
<section id="beranda" class="relative overflow-hidden pt-28 pb-16 lg:pt-36 lg:pb-24" style="background: linear-gradient(135deg, #EBF4FF 0%, #F0F7FF 50%, #F8FAFF 100%);">
    {{-- Decorative blobs --}}
    <div class="absolute top-20 left-10 w-72 h-72 rounded-full opacity-20 animate-blob" style="background: var(--wt-lime); filter: blur(60px);"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 rounded-full opacity-15 animate-blob anim-delay-300" style="background: var(--wt-blue); filter: blur(80px);"></div>
    <div class="absolute top-1/2 left-1/3 w-40 h-40 rounded-full opacity-10 animate-blob anim-delay-500" style="background: var(--wt-lime); filter: blur(40px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            {{-- Left: Text content --}}
            <div class="flex-1 text-center lg:text-left">
                <div class="animate-fade-up">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6"
                          style="background: rgba(30,123,255,0.1); color: var(--wt-blue);">
                        <span class="w-2 h-2 rounded-full animate-pulse" style="background: var(--wt-lime);"></span>
                        #1 Web Agency Terpercaya
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-6 animate-fade-up anim-delay-100" style="color: var(--wt-navy);">
                    Tingkatkan Bisnis Anda dengan
                    <span class="gradient-text">Website Profesional</span>
                    dari WEB TARA!
                </h1>

                <p class="text-lg lg:text-xl leading-relaxed mb-8 animate-fade-up anim-delay-200" style="color: var(--wt-gray);">
                    Kami membantu sekolah, perusahaan, dan UMKM memiliki identitas digital yang modern, cepat, dan responsif. Solusi website terpercaya untuk segala kebutuhan Anda.
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4 mb-8 animate-fade-up anim-delay-300">
                    <a href="#harga" class="btn-primary px-8 py-4 rounded-2xl text-base font-bold w-full sm:w-auto text-center">
                        Lihat Paket Website
                    </a>
                    <a href="#kontak" class="btn-secondary px-8 py-4 rounded-2xl text-base font-bold w-full sm:w-auto text-center">
                        Hubungi Kami
                    </a>
                </div>

                {{-- Trust badges --}}
                @include('partials.landing.trust-badges')
            </div>

            {{-- Right: Hero image with decorative elements --}}
            <div class="flex-1 relative animate-fade-right anim-delay-200">
                {{-- Lime blob behind image --}}
                <div class="absolute -top-8 -right-8 w-full h-full rounded-3xl animate-blob" style="background: var(--wt-lime); opacity: 0.6;"></div>
                <div class="absolute -bottom-4 -left-4 w-3/4 h-3/4 rounded-3xl animate-blob anim-delay-300" style="background: var(--wt-blue); opacity: 0.12;"></div>

                {{-- Hero Image --}}
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="/images/hero-illustration.jpg"
                         alt="Tim profesional WEB TARA bekerja sama membangun website modern"
                         class="w-full h-auto object-cover animate-float"
                         loading="eager">
                </div>

                {{-- Floating stat cards --}}
                <div class="absolute -bottom-6 -left-6 z-20 bg-white rounded-2xl p-4 shadow-xl animate-float anim-delay-200" style="animation-duration: 4s;">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background: rgba(16,185,129,0.1);">
                            <svg class="w-5 h-5" style="color: #10B981;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium" style="color: var(--wt-gray);">Proyek Selesai</p>
                            <p class="text-lg font-extrabold" style="color: var(--wt-navy);">150+</p>
                        </div>
                    </div>
                </div>

                <div class="absolute -top-4 -right-2 z-20 bg-white rounded-2xl p-4 shadow-xl animate-float anim-delay-400" style="animation-duration: 6s;">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background: rgba(30,123,255,0.1);">
                            <svg class="w-5 h-5" style="color: var(--wt-blue);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium" style="color: var(--wt-gray);">Klien Puas</p>
                            <p class="text-lg font-extrabold" style="color: var(--wt-navy);">98%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Wave separator --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-16 lg:h-24">
            <path d="M0,60 C360,120 720,0 1080,60 C1260,90 1380,80 1440,60 L1440,120 L0,120Z" fill="var(--wt-blue)"/>
        </svg>
    </div>
</section>
