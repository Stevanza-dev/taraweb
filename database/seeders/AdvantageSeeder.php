<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advantages = [
            [
                'title' => 'Pengerjaan Kilat & Tepat',
                'description' => 'Timeline terencana rapi dengan proses transparan. Rata-rata website selesai dalam rentang 7–14 hari kerja.',
                'badge_text' => 'TIMELINE JELAS TANPA MOLOR',
                'icon' => 'bolt',
                'icon_bg_color' => 'yellow',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Standar Mutu Modern',
                'description' => 'Fondasi Laravel & Tailwind CSS mutakhir yang solid, tahan uji, bebas celah keamanan, dan siap dikembangkan lanjut.',
                'badge_text' => 'KODE BERSIH & SKALABEL',
                'icon' => 'code-bracket-square',
                'icon_bg_color' => 'blue',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Komunikasi Langsung',
                'description' => 'Diskusi dan konsultasi kendala melalui WhatsApp langsung dengan tim pengembang tanpa perantara berbelit.',
                'badge_text' => 'RESPONS KILAT VIA WHATSAPP',
                'icon' => 'chat-bubble-left-right',
                'icon_bg_color' => 'white',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Harga Pasti & Jujur',
                'description' => 'Tidak ada biaya tambahan terselubung. Segala rincian fitur tercantum resmi dalam surat penawaran awal.',
                'badge_text' => 'OPSI TERMIN PEMBAYARAN',
                'icon' => 'banknotes',
                'icon_bg_color' => 'blue',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Revisi Tanpa Cemas',
                'description' => 'Setiap paket sudah dilengkapi jatah revisi gratis untuk memastikan hasil akhir sesuai selera dan arahan brand Anda.',
                'badge_text' => 'JAMINAN KESESUAIAN BRIEF',
                'icon' => 'arrow-path',
                'icon_bg_color' => 'white',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'SEO & Skor Kecepatan',
                'description' => 'Optimasi meta tag otomatis, peta situs Google, dan aset terkompresi sempurna agar bisnis Anda mudah dijumpai di Google.',
                'badge_text' => 'LOLOS GOOGLE WEB VITALS',
                'icon' => 'chart-bar',
                'icon_bg_color' => 'yellow',
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($advantages as $advantage) {
            Advantage::updateOrCreate(
                ['title' => $advantage['title']],
                $advantage
            );
        }
    }
}

