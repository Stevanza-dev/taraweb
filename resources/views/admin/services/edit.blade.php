<x-layouts::app :title="__('Edit Layanan: ') . $service->title">
    <div class="max-w-3xl mx-auto flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex items-center justify-between pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Edit Layanan</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Perbarui data layanan "{{ $service->title }}".</p>
            </div>
            <a href="{{ route('admin.services.index') }}" class="px-4 py-2 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                Kembali
            </a>
        </div>

        {{-- Form Container --}}
        <form action="{{ route('admin.services.update', $service) }}" method="POST" class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl p-6 sm:p-8 space-y-6 shadow-sm">
            @csrf
            @method('PUT')

            {{-- Judul Layanan --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Judul Layanan <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Deskripsi Layanan <span class="text-red-500">*</span></label>
                <textarea name="description" rows="3" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">{{ old('description', $service->description) }}</textarea>
                @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Ikon & Warna Ikon --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nama Ikon Heroicons <span class="text-red-500">*</span></label>
                    <select name="icon" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                        <option value="academic-cap" {{ old('icon', $service->icon) === 'academic-cap' ? 'selected' : '' }}>academic-cap (Pendidikan/Sekolah)</option>
                        <option value="building-office-2" {{ old('icon', $service->icon) === 'building-office-2' ? 'selected' : '' }}>building-office-2 (Company Profile)</option>
                        <option value="shopping-bag" {{ old('icon', $service->icon) === 'shopping-bag' ? 'selected' : '' }}>shopping-bag (E-Commerce)</option>
                        <option value="cpu-chip" {{ old('icon', $service->icon) === 'cpu-chip' ? 'selected' : '' }}>cpu-chip (Custom Web App)</option>
                        <option value="sparkles" {{ old('icon', $service->icon) === 'sparkles' ? 'selected' : '' }}>sparkles (Kreatif/Premium)</option>
                        <option value="rocket-launch" {{ old('icon', $service->icon) === 'rocket-launch' ? 'selected' : '' }}>rocket-launch (Peluncuran Cepat)</option>
                        <option value="globe-alt" {{ old('icon', $service->icon) === 'globe-alt' ? 'selected' : '' }}>globe-alt (Global Web)</option>
                        <option value="device-phone-mobile" {{ old('icon', $service->icon) === 'device-phone-mobile' ? 'selected' : '' }}>device-phone-mobile (Mobile Friendly)</option>
                    </select>
                    @error('icon') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Warna Latar Ikon <span class="text-red-500">*</span></label>
                    <select name="icon_bg_color" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                        <option value="blue" {{ old('icon_bg_color', $service->icon_bg_color) === 'blue' ? 'selected' : '' }}>Biru (Solid Blue)</option>
                        <option value="white" {{ old('icon_bg_color', $service->icon_bg_color) === 'white' ? 'selected' : '' }}>Putih (Solid White)</option>
                    </select>
                    @error('icon_bg_color') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Fitur Layanan (Per Baris) --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-1">Daftar Fitur (Satu baris untuk setiap fitur)</label>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 mb-2">Pisahkan setiap poin fitur dengan menekan tombol Enter/baris baru.</p>
                <textarea name="features" rows="4" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm font-mono">{{ old('features', is_array($service->features) ? implode("\n", $service->features) : '') }}</textarea>
                @error('features') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Tombol Teks & URL --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Teks Tombol</label>
                    <input type="text" name="button_text" value="{{ old('button_text', $service->button_text) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('button_text') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">URL / Link Tombol</label>
                    <input type="text" name="button_url" value="{{ old('button_url', $service->button_url) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('button_url') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Urutan & Status Aktif --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center pt-2">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nomor Urutan Tampil <span class="text-red-500">*</span></label>
                    <input type="number" name="order" value="{{ old('order', $service->order) }}" required min="0" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('order') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 pt-6">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded border-zinc-300 dark:border-zinc-600 focus:ring-blue-500">
                    <label for="is_active" class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 cursor-pointer">
                        Aktifkan Layanan ini di Landing Page
                    </label>
                </div>
            </div>

            {{-- Action Submit --}}
            <div class="pt-6 border-t border-zinc-200 dark:border-zinc-700 flex justify-end gap-3">
                <a href="{{ route('admin.services.index') }}" class="px-5 py-2.5 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                    Perbarui Layanan
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>

