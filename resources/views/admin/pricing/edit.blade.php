<x-layouts::app :title="__('Edit Paket Harga: ') . $pricing->name">
    <div class="max-w-3xl mx-auto flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex items-center justify-between pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Edit Paket Harga</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Perbarui rincian dan fitur paket "{{ $pricing->name }}".</p>
            </div>
            <a href="{{ route('admin.pricing.index') }}" class="px-4 py-2 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                Kembali
            </a>
        </div>

        {{-- Form Container --}}
        <form action="{{ route('admin.pricing.update', $pricing) }}" method="POST" class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl p-6 sm:p-8 space-y-6 shadow-sm">
            @csrf
            @method('PUT')

            {{-- Nama Paket & Badge Label --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nama Paket <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $pricing->name) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Label Badge Kategori</label>
                    <input type="text" name="badge" value="{{ old('badge', $pricing->badge) }}" placeholder="Contoh: BEST VALUE / STARTER" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm uppercase">
                    @error('badge') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Subjudul Paket --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Subjudul / Target Pengguna</label>
                <input type="text" name="subtitle" value="{{ old('subtitle', $pricing->subtitle) }}" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                @error('subtitle') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Nominal Harga & Satuan --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nominal Harga <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-sm font-bold text-zinc-500">Rp</span>
                        <input type="text" name="price" value="{{ old('price', $pricing->price) }}" required class="w-full pl-11 pr-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm font-semibold">
                    </div>
                    @error('price') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Satuan Harga <span class="text-red-500">*</span></label>
                    <input type="text" name="price_unit" value="{{ old('price_unit', $pricing->price_unit) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('price_unit') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Ikon --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Ikon Heroicons <span class="text-red-500">*</span></label>
                <select name="icon" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    <option value="rocket-launch" {{ old('icon', $pricing->icon) === 'rocket-launch' ? 'selected' : '' }}>rocket-launch (Starter / Peluncuran)</option>
                    <option value="sparkles" {{ old('icon', $pricing->icon) === 'sparkles' ? 'selected' : '' }}>sparkles (Paling Populer / Best Value)</option>
                    <option value="trophy" {{ old('icon', $pricing->icon) === 'trophy' ? 'selected' : '' }}>trophy (Enterprise / Premium)</option>
                    <option value="shield-check" {{ old('icon', $pricing->icon) === 'shield-check' ? 'selected' : '' }}>shield-check (Garansi/Keamanan)</option>
                    <option value="bolt" {{ old('icon', $pricing->icon) === 'bolt' ? 'selected' : '' }}>bolt (Kilat/Cepat)</option>
                </select>
                @error('icon') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Status Populer & Pita --}}
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800/40 space-y-4">
                <div class="flex items-center gap-3">
                    <input type="checkbox" id="is_popular" name="is_popular" value="1" {{ old('is_popular', $pricing->is_popular) ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded border-zinc-300 dark:border-zinc-600 focus:ring-blue-500">
                    <label for="is_popular" class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 cursor-pointer">
                        Jadikan Paket Ini "Paling Populer" (Highlighted Card)
                    </label>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-zinc-600 dark:text-zinc-400 mb-1">Teks Pita Populer</label>
                    <input type="text" name="popular_badge_text" value="{{ old('popular_badge_text', $pricing->popular_badge_text) }}" placeholder="Contoh: PALING DIMINATI" class="w-full px-4 py-2 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white text-xs uppercase font-bold">
                    @error('popular_badge_text') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Fitur Paket (Per Baris) --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-1">Daftar Fitur Paket (Satu baris untuk setiap fitur)</label>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 mb-2">Pisahkan setiap poin fitur dengan menekan tombol Enter/baris baru.</p>
                <textarea name="features" rows="5" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm font-mono">{{ old('features', is_array($pricing->features) ? implode("\n", $pricing->features) : '') }}</textarea>
                @error('features') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Tombol Teks & URL --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Teks Tombol</label>
                    <input type="text" name="button_text" value="{{ old('button_text', $pricing->button_text) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('button_text') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">URL / Link Tombol</label>
                    <input type="text" name="button_url" value="{{ old('button_url', $pricing->button_url) }}" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('button_url') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Urutan & Status Aktif --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center pt-2">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nomor Urutan Tampil <span class="text-red-500">*</span></label>
                    <input type="number" name="order" value="{{ old('order', $pricing->order) }}" required min="0" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('order') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 pt-6">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $pricing->is_active) ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded border-zinc-300 dark:border-zinc-600 focus:ring-blue-500">
                    <label for="is_active" class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 cursor-pointer">
                        Aktifkan Paket ini di Landing Page
                    </label>
                </div>
            </div>

            {{-- Action Submit --}}
            <div class="pt-6 border-t border-zinc-200 dark:border-zinc-700 flex justify-end gap-3">
                <a href="{{ route('admin.pricing.index') }}" class="px-5 py-2.5 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                    Perbarui Paket
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>

