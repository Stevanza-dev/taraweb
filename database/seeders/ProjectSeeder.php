<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Portal Resmi SMA Prestasi Mandiri',
                'category' => 'Website Sekolah',
                'description' => 'Sistem informasi sekolah terpadu dengan modul PPDB online, pengumuman kelulusan instan, kalender agenda akademik, dan galeri prestasi.',
                'image' => null,
                'url' => 'https://smaprestasimandiri.sch.id',
                'client' => 'Yayasan Bina Prestasi Mandiri',
                'tags' => ['PPDB Online', 'Profil Sekolah', 'Laravel 11', 'Mobile Friendly'],
                'order' => 1,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'PT Samudera Logistik Internasional',
                'category' => 'Company Profile',
                'description' => 'Website korporat modern ekspor-impor dengan fitur cek tarif rute kapal, katalog armada kargo, integrasi WhatsApp tim sales, dan SEO tinggi.',
                'image' => null,
                'url' => 'https://samuderalogistik.co.id',
                'client' => 'PT Samudera Logistik Grup',
                'tags' => ['Company Profile', 'SEO Google Index', 'Cek Tarif', 'Bilingual'],
                'order' => 2,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Kopi Nusantara Roastery Store',
                'category' => 'Toko E-Commerce',
                'description' => 'Toko online produk biji kopi artisan dengan integrasi checkout instan QRIS/Virtual Account, hitung ongkir otomatis JNE/SiCepat, dan panel pesanan.',
                'image' => null,
                'url' => 'https://kopinusantararoastery.id',
                'client' => 'CV Roastery Indonesia',
                'tags' => ['Toko Online', 'Payment Gateway QRIS', 'Kalkulator Ongkir', 'Manajemen Stok'],
                'order' => 3,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'title' => 'Klinik Sahabat Sehat & Reservasi Online',
                'category' => 'Custom Web App',
                'description' => 'Aplikasi web reservasi jadwal dokter, nomor antrean digital langsung via WhatsApp, dan dashboard rekam riwayat kunjungan pasien.',
                'image' => null,
                'url' => 'https://kliniksahabatsehat.com',
                'client' => 'Klinik Pratama Sahabat Sehat',
                'tags' => ['Custom Web App', 'Booking Online', 'Notifikasi WhatsApp', 'Admin Analytics'],
                'order' => 4,
                'is_featured' => false,
                'is_active' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                $project
            );
        }
    }
}

