<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Website Sekolah',
                'description' => 'Portal PPDB daring, agenda kegiatan, galeri prestasi, dan profil sekolah modern yang mudah dioperasikan.',
                'icon' => 'academic-cap',
                'icon_bg_color' => 'blue',
                'features' => [
                    'PPDB Online Terintegrasi',
                    'Manajemen Berita & Pengumuman',
                    'Aman & Ramah Mobile',
                ],
                'button_text' => 'PILIH LAYANAN',
                'button_url' => '#kontak',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Company Profile',
                'description' => 'Representasi digital berbobot untuk meyakinkan klien, mitra bisnis, dan investor dengan identitas yang kuat.',
                'icon' => 'building-office-2',
                'icon_bg_color' => 'white',
                'features' => [
                    'Desain Eksklusif Brand',
                    'SEO Google & Index Cepat',
                    'Dukungan Multi-Bahasa',
                ],
                'button_text' => 'PILIH LAYANAN',
                'button_url' => '#kontak',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Toko E-Commerce',
                'description' => 'Toko online yang fokus pada kemudahan checkout pelanggan, integrasi QRIS/VA otomatis, dan hitung ongkir instan.',
                'icon' => 'shopping-bag',
                'icon_bg_color' => 'blue',
                'features' => [
                    'Payment Gateway QRIS/Bank',
                    'Kalkulator Ongkir Otomatis',
                    'Manajemen Produk & Pesanan',
                ],
                'button_text' => 'PILIH LAYANAN',
                'button_url' => '#kontak',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Custom Web App',
                'description' => 'Aplikasi berbasis web yang dirancang khusus: sistem internal, CRM, dashboard analitik, dan sistem reservasi.',
                'icon' => 'cpu-chip',
                'icon_bg_color' => 'white',
                'features' => [
                    'Dashboard Analitik & Admin',
                    'Alur Kerja & Hak Akses Kustom',
                    'Integrasi API & Database Cepat',
                ],
                'button_text' => 'PILIH LAYANAN',
                'button_url' => '#kontak',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                $service
            );
        }
    }
}

