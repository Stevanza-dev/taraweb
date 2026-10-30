{{-- Pricing Section --}}
<section id="harga" class="relative py-20 lg:py-28 overflow-hidden" style="background: var(--wt-light);">
    {{-- Decorative shapes --}}
    <div class="absolute top-0 right-0 w-72 h-72 rounded-full opacity-8" style="background: var(--wt-blue); filter: blur(100px);"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full opacity-5" style="background: var(--wt-lime); filter: blur(120px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Section header --}}
        <div class="text-center mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4"
                  style="background: rgba(30,123,255,0.08); color: var(--wt-blue);">
                Paket Harga
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4" style="color: var(--wt-navy);">
                Pilih Paket Sesuai Kebutuhan Anda
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--wt-gray);">
                Transparan, tanpa biaya tersembunyi. Setiap paket dilengkapi dukungan penuh dari tim profesional kami.
            </p>
        </div>

        {{-- Pricing cards --}}
        @php
            $packages = [
                [
                    'name'      => 'Paket Bronze',
                    'subtitle'  => 'Untuk memulai',
                    'price'     => 'Rp 1,5',
                    'unit'      => 'Juta',
                    'popular'   => false,
                    'gradient'  => 'linear-gradient(135deg, #CD7F32, #E8A952)',
                    'icon'      => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
                    'check'     => '#10B981',
                    'priceColor'=> 'var(--wt-navy)',
                    'features'  => [
                        'Landing page 1 halaman',
                        'Desain responsif & modern',
                        'Form kontak terintegrasi',
                        'Optimasi kecepatan',
                        'SSL certificate gratis',
                        'Revisi desain 2x',
                    ],
                ],
                [
                    'name'      => 'Paket Silver',
                    'subtitle'  => 'Paling populer',
                    'price'     => 'Rp 3,5',
                    'unit'      => 'Juta',
                    'popular'   => true,
                    'gradient'  => 'linear-gradient(135deg, #C0C0C0, #E8E8E8)',
                    'icon'      => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z',
                    'check'     => 'var(--wt-blue)',
                    'priceColor'=> 'var(--wt-blue)',
                    'features'  => [
                        'Website hingga 10 halaman',
                        'Company profile profesional',
                        'SEO friendly & Google indexed',
                        'Panel admin dinamis (CMS)',
                        'Integrasi Google Analytics',
                        'Desain responsif premium',
                        'Domain + Hosting 1 tahun',
                        'Support teknis 3 bulan',
                    ],
                ],
                [
                    'name'      => 'Paket Gold',
                    'subtitle'  => 'Premium & lengkap',
                    'price'     => 'Rp 7',
                    'unit'      => 'Juta',
                    'popular'   => false,
                    'gradient'  => 'linear-gradient(135deg, #FFD700, #FFC107)',
                    'icon'      => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
                    'check'     => '#F59E0B',
                    'priceColor'=> 'var(--wt-navy)',
                    'features'  => [
                        'Semua fitur Paket Silver',
                        'E-commerce / fitur lanjutan',
                        'Integrasi payment gateway',
                        'Sistem manajemen inventori',
                        'Multi-bahasa (ID & EN)',
                        'Laporan & dashboard analitik',
                        'Priority support 6 bulan',
                        'Backup otomatis harian',
                    ],
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            @foreach ($packages as $index => $pkg)
            <div class="pricing-card {{ $pkg['popular'] ? 'pricing-card-popular' : '' }} bg-white rounded-3xl p-8 lg:p-10 {{ $pkg['popular'] ? 'shadow-xl' : 'shadow-lg' }} reveal flex flex-col {{ $pkg['popular'] ? 'relative lg:-my-4' : '' }}" style="animation-delay: {{ $index * 0.1 }}s;">
                {{-- Best seller badge --}}
                @if ($pkg['popular'])
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-10">
                    <span class="inline-flex items-center gap-1.5 px-5 py-2 rounded-full text-xs font-bold text-white shadow-lg"
                          style="background: linear-gradient(135deg, var(--wt-blue), var(--wt-blue-dark));">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        Terlaris / Best Seller
                    </span>
                </div>
                @endif

                <div class="mb-8 {{ $pkg['popular'] ? 'mt-4' : '' }}">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center" style="background: {{ $pkg['gradient'] }};">
                            <svg class="w-6 h-6 {{ $pkg['popular'] ? '' : 'text-white' }}" style="{{ $pkg['popular'] ? 'color: #555;' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $pkg['icon'] }}"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold" style="color: var(--wt-navy);">{{ $pkg['name'] }}</h3>
                            <p class="text-xs font-medium" style="color: {{ $pkg['popular'] ? 'var(--wt-blue)' : 'var(--wt-gray)' }};">{{ $pkg['subtitle'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-1 mb-2">
                        <span class="text-sm font-medium" style="color: var(--wt-gray);">Mulai dari</span>
                    </div>
                    <div class="flex items-baseline gap-1">
                        <span class="text-4xl font-black" style="color: {{ $pkg['priceColor'] }};">{{ $pkg['price'] }}</span>
                        <span class="text-lg font-bold" style="color: var(--wt-gray);">{{ $pkg['unit'] }}</span>
                    </div>
                </div>

                <ul class="flex flex-col gap-3 mb-8 grow">
                    @foreach ($pkg['features'] as $feature)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 mt-0.5" style="color: {{ $pkg['check'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm" style="color: var(--wt-gray);">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>

                <a href="#kontak" class="{{ $pkg['popular'] ? 'btn-primary animate-pulse-glow' : 'btn-secondary' }} w-full py-3.5 rounded-2xl text-center font-bold text-sm">
                    Pilih {{ $pkg['name'] }}
                </a>
            </div>
            @endforeach
        </div>

        {{-- Guarantee strip --}}
        <div class="mt-12 text-center reveal">
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl" style="background: rgba(30,123,255,0.05);">
                <svg class="w-5 h-5" style="color: var(--wt-blue);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span class="text-sm font-semibold" style="color: var(--wt-navy);">Garansi 100% uang kembali dalam 7 hari jika tidak puas</span>
            </div>
        </div>
    </div>
</section>
