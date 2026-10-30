{{-- Advantages / Why Us Section --}}
<section id="portofolio" class="relative py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4"
                  style="background: rgba(30,123,255,0.08); color: var(--wt-blue);">
                Mengapa WEB TARA?
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4" style="color: var(--wt-navy);">
                Keunggulan Bekerja Bersama Kami
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--wt-gray);">
                Kami berkomitmen memberikan pengalaman terbaik dari awal konsultasi hingga website Anda live.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $advantages = [
                    ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Cepat & Tepat Waktu', 'desc' => 'Proses pengerjaan website yang efisien dengan timeline jelas. Rata-rata selesai dalam 7-14 hari kerja.', 'color' => '#F59E0B'],
                    ['icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'title' => 'Kualitas Premium', 'desc' => 'Desain modern dan kode berkualitas tinggi menggunakan teknologi terbaru. Aman, cepat, dan SEO-ready.', 'color' => '#10B981'],
                    ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'title' => 'Support Responsif', 'desc' => 'Tim support siap membantu via WhatsApp. Respons cepat dan solusi yang jelas untuk setiap kendala.', 'color' => 'var(--wt-blue)'],
                    ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Harga Transparan', 'desc' => 'Tanpa biaya tersembunyi. Anda tahu persis apa yang didapat dan berapa yang dibayar. Bisa dicicil.', 'color' => '#8B5CF6'],
                    ['icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'title' => 'Free Revisi', 'desc' => 'Setiap paket termasuk revisi gratis hingga Anda benar-benar puas dengan hasilnya.', 'color' => '#EF4444'],
                    ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'SEO & Performa', 'desc' => 'Optimasi mesin pencari dan kecepatan website agar bisnis Anda mudah ditemukan secara online.', 'color' => '#06B6D4'],
                ];
            @endphp

            @foreach ($advantages as $index => $adv)
            <div class="reveal flex gap-5 p-6 rounded-2xl hover:bg-gray-50 transition-colors" style="animation-delay: {{ $index * 0.1 }}s;">
                <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0" style="background: {{ $adv['color'] }}15;">
                    <svg class="w-7 h-7" style="color: {{ $adv['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $adv['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-1" style="color: var(--wt-navy);">{{ $adv['title'] }}</h3>
                    <p class="text-sm leading-relaxed" style="color: var(--wt-gray);">{{ $adv['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
