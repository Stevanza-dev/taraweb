<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Paket Bronze',
                'badge' => 'STARTER',
                'subtitle' => 'Cocok untuk landing page promosi instan.',
                'price' => '1,5',
                'price_unit' => 'Juta',
                'icon' => 'rocket-launch',
                'is_popular' => false,
                'popular_badge_text' => null,
                'features' => [
                    'Landing page 1 halaman responsif',
                    'Formulir & Direct Chat WhatsApp',
                    'Optimasi kecepatan pemuatan kilat',
                    'Sertifikat SSL gratis selamanya',
                    'Revisi desain 2 kali gratis',
                ],
                'button_text' => 'PILIH PAKET BRONZE',
                'button_url' => '#kontak',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Paket Silver',
                'badge' => 'BEST VALUE',
                'subtitle' => 'Pilihan nomor 1 sekolah & perusahaan.',
                'price' => '3,5',
                'price_unit' => 'Juta',
                'icon' => 'sparkles',
                'is_popular' => true,
                'popular_badge_text' => 'PALING DIMINATI',
                'features' => [
                    'Website lengkap hingga 10 halaman',
                    'Panel admin dinamis (mudah diedit sendiri)',
                    'SEO friendly & Google Index otomatis',
                    'Domain .com / .id + Hosting 1 tahun',
                    'Email bisnis resmi (nama@domain.com)',
                    'Dukungan teknis prioritas 3 bulan',
                ],
                'button_text' => 'PILIH PAKET SILVER',
                'button_url' => '#kontak',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Paket Gold',
                'badge' => 'ENTERPRISE',
                'subtitle' => 'Untuk toko online & sistem berskala penuh.',
                'price' => '7',
                'price_unit' => 'Juta',
                'icon' => 'trophy',
                'is_popular' => false,
                'popular_badge_text' => null,
                'features' => [
                    'Semua fitur lengkap Paket Silver',
                    'Integrasi E-Commerce & Payment Gateway',
                    'Sistem inventori produk & kalkulator ongkir',
                    'Backup otomatis & proteksi firewall cloud',
                    'Dukungan teknis VIP prioritas 6 bulan',
                ],
                'button_text' => 'PILIH PAKET GOLD',
                'button_url' => '#kontak',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($plans as $plan) {
            PricingPlan::updateOrCreate(
                ['name' => $plan['name']],
                $plan
            );
        }
    }
}
