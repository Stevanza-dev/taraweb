<x-layouts::app :title="__('Dashboard')">
    <div class="flex flex-col gap-6">
        {{-- Welcome Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">
                    Selamat Datang, {{ auth()->user()->name }}! 👋
                </h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">
                    Kelola konten landing page Taraweb (Layanan, Paket Harga, dan Keunggulan) secara fleksibel.
                </p>
            </div>
            <a href="/" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-semibold text-blue-600 bg-blue-50 dark:bg-blue-950/50 dark:text-blue-300 border border-blue-200 dark:border-blue-800 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900/50 transition">
                <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4" />
                <span>Lihat Landing Page</span>
            </a>
        </div>

        {{-- Stat Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            {{-- Services Card --}}
            <div class="p-6 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm flex flex-col justify-between hover:border-blue-500 transition group">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">Total Layanan</p>
                        <h3 class="text-3xl font-black text-zinc-900 dark:text-white mt-2">{{ $servicesCount }}</h3>
                        <p class="text-xs text-emerald-600 dark:text-emerald-400 mt-1 font-medium">{{ $activeServicesCount }} aktif tayang</p>
                    </div>
                    <div class="p-3 bg-blue-50 dark:bg-blue-950/60 rounded-xl text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-900 group-hover:bg-blue-600 group-hover:text-white transition">
                        <x-heroicon-o-squares-2x2 class="w-6 h-6" />
                    </div>
                </div>
                <div class="pt-5 mt-5 border-t border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                    <a href="{{ route('admin.services.index') }}" class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                        Kelola &rarr;
                    </a>
                    <a href="{{ route('admin.services.create') }}" class="text-xs font-semibold text-zinc-500 hover:text-zinc-900 dark:hover:text-white">
                        + Tambah
                    </a>
                </div>
            </div>

            {{-- Projects / Portfolio Card --}}
            <div class="p-6 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm flex flex-col justify-between hover:border-blue-500 transition group">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">Portofolio Website</p>
                        <h3 class="text-3xl font-black text-zinc-900 dark:text-white mt-2">{{ $projectsCount }}</h3>
                        <p class="text-xs text-emerald-600 dark:text-emerald-400 mt-1 font-medium">{{ $activeProjectsCount }} aktif tayang</p>
                    </div>
                    <div class="p-3 bg-blue-50 dark:bg-blue-950/60 rounded-xl text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-900 group-hover:bg-blue-600 group-hover:text-white transition">
                        <x-heroicon-o-folder class="w-6 h-6" />
                    </div>
                </div>
                <div class="pt-5 mt-5 border-t border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                    <a href="{{ route('admin.projects.index') }}" class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                        Kelola &rarr;
                    </a>
                    <a href="{{ route('admin.projects.create') }}" class="text-xs font-semibold text-zinc-500 hover:text-zinc-900 dark:hover:text-white">
                        + Tambah
                    </a>
                </div>
            </div>

            {{-- Pricing Card --}}
            <div class="p-6 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm flex flex-col justify-between hover:border-blue-500 transition group">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">Paket Harga</p>
                        <h3 class="text-3xl font-black text-zinc-900 dark:text-white mt-2">{{ $pricingCount }}</h3>
                        <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Paket penawaran</p>
                    </div>
                    <div class="p-3 bg-blue-50 dark:bg-blue-950/60 rounded-xl text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-900 group-hover:bg-blue-600 group-hover:text-white transition">
                        <x-heroicon-o-credit-card class="w-6 h-6" />
                    </div>
                </div>
                <div class="pt-5 mt-5 border-t border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                    <a href="{{ route('admin.pricing.index') }}" class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                        Kelola &rarr;
                    </a>
                    <a href="{{ route('admin.pricing.create') }}" class="text-xs font-semibold text-zinc-500 hover:text-zinc-900 dark:hover:text-white">
                        + Tambah
                    </a>
                </div>
            </div>

            {{-- Advantages Card --}}
            <div class="p-6 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm flex flex-col justify-between hover:border-blue-500 transition group">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">Keunggulan</p>
                        <h3 class="text-3xl font-black text-zinc-900 dark:text-white mt-2">{{ $advantagesCount }}</h3>
                        <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Nilai tambah Tara</p>
                    </div>
                    <div class="p-3 bg-blue-50 dark:bg-blue-950/60 rounded-xl text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-900 group-hover:bg-blue-600 group-hover:text-white transition">
                        <x-heroicon-o-sparkles class="w-6 h-6" />
                    </div>
                </div>
                <div class="pt-5 mt-5 border-t border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
                    <a href="{{ route('admin.advantages.index') }}" class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                        Kelola &rarr;
                    </a>
                    <a href="{{ route('admin.advantages.create') }}" class="text-xs font-semibold text-zinc-500 hover:text-zinc-900 dark:hover:text-white">
                        + Tambah
                    </a>
                </div>
            </div>
        </div>

        {{-- Quick Guide Card --}}
        <div class="p-6 bg-blue-50/50 dark:bg-zinc-900/60 border border-blue-200 dark:border-zinc-700 rounded-xl">
            <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-2">💡 Tips Pengelolaan Landing Page:</h3>
            <ul class="space-y-1.5 text-xs text-zinc-600 dark:text-zinc-400 list-disc list-inside">
                <li>Semua perubahan yang Anda simpan pada Layanan, Paket Harga, dan Keunggulan akan langsung otomatis muncul di landing page publik.</li>
                <li>Gunakan nomor <span class="font-semibold text-zinc-800 dark:text-zinc-200">Urutan (Order)</span> untuk mengatur posisi kiri-ke-kanan kartu di landing page.</li>
                <li>Anda dapat menonaktifkan kartu sementara tanpa menghapusnya dengan mematikan centang <span class="font-semibold text-zinc-800 dark:text-zinc-200">Aktif</span>.</li>
            </ul>
        </div>
    </div>
</x-layouts::app>