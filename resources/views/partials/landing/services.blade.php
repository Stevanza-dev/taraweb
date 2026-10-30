{{-- Services Section --}}
<section id="layanan" class="relative py-20 lg:py-28" style="background: var(--wt-blue);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4"
                  style="background: rgba(255,255,255,0.15); color: white;">
                Layanan Kami
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4">
                Solusi Digital untuk Setiap Kebutuhan
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: rgba(255,255,255,0.75);">
                Dari website sekolah hingga platform e-commerce, kami siap mewujudkan visi digital Anda dengan teknologi terkini.
            </p>
        </div>

        {{-- Service cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $services = [
                    [
                        'icon'  => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25',
                        'color' => 'var(--wt-blue)',
                        'title' => 'Website Sekolah',
                        'desc'  => 'Informatif & terintegrasi. Portal PPDB, e-learning, dan profil sekolah yang modern serta mudah dikelola.',
                    ],
                    [
                        'icon'  => 'M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z',
                        'color' => '#8B5CF6',
                        'title' => 'Company Profile',
                        'desc'  => 'Profesional & elegan. Tampilkan identitas perusahaan dengan desain premium yang meninggalkan kesan mendalam.',
                    ],
                    [
                        'icon'  => 'M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z',
                        'color' => '#10B981',
                        'title' => 'E-Commerce',
                        'desc'  => 'Sales-oriented & aman. Toko online lengkap dengan payment gateway, manajemen produk, dan analitik penjualan.',
                    ],
                    [
                        'icon'  => 'M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42',
                        'color' => '#F59E0B',
                        'title' => 'Custom Web App',
                        'desc'  => 'Tailored to your needs. Sistem manajemen, dashboard, atau web app khusus yang dirancang sesuai kebutuhan bisnis Anda.',
                    ],
                ];
            @endphp

            @foreach ($services as $index => $service)
            <div class="service-card bg-white rounded-3xl p-8 reveal" style="animation-delay: {{ $index * 0.1 }}s;">
                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, {{ $service['color'] }}1a, {{ $service['color'] }}0d);">
                    <svg class="w-8 h-8" style="color: {{ $service['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $service['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: var(--wt-navy);">{{ $service['title'] }}</h3>
                <p class="text-sm leading-relaxed" style="color: var(--wt-gray);">{{ $service['desc'] }}</p>
                <div class="mt-6 pt-6 border-t border-gray-100">
                    <a href="#kontak" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors" style="color: {{ $service['color'] }};">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
