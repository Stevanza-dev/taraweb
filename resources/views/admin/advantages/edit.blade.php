<x-layouts::app :title="__('Edit Keunggulan')">
    <div class="max-w-3xl mx-auto flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex items-center justify-between pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Edit Keunggulan: {{ $advantage->title }}</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Perbarui detail keunggulan layanan Taraweb.</p>
            </div>
            <a href="{{ route('admin.advantages.index') }}" class="px-4 py-2 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                Kembali
            </a>
        </div>

        {{-- Form Container --}}
        <form action="{{ route('admin.advantages.update', $advantage) }}" method="POST" class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl p-6 sm:p-8 space-y-6 shadow-sm">
            @csrf
            @method('PUT')

            {{-- Judul Keunggulan --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Judul Keunggulan <span class="text-red-500">*</span></label>
                <input type="text" name="title" value="{{ old('title', $advantage->title) }}" required placeholder="Contoh: Pengerjaan Kilat & Tepat" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Badge Text (Sub-header / Highlight pill) --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Teks Badge / Highlight (Opsional)</label>
                <input type="text" name="badge_text" value="{{ old('badge_text', $advantage->badge_text) }}" placeholder="Contoh: TIMELINE JELAS TANPA MOLOR" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                <span class="text-xs text-zinc-500 dark:text-zinc-400 mt-1 block">Badge teks kecil dengan huruf kapital di bagian atas kartu.</span>
                @error('badge_text') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Deskripsi Lengkap <span class="text-red-500">*</span></label>
                <textarea name="description" rows="3" required placeholder="Tuliskan penjelasan detail mengenai keunggulan ini..." class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">{{ old('description', $advantage->description) }}</textarea>
                @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Ikon & Warna Latar Ikon --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Ikon Heroicons <span class="text-red-500">*</span></label>
                    <select name="icon" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                        <option value="bolt" {{ old('icon', $advantage->icon) === 'bolt' ? 'selected' : '' }}>bolt (Kilat / Cepat)</option>
                        <option value="code-bracket-square" {{ old('icon', $advantage->icon) === 'code-bracket-square' ? 'selected' : '' }}>code-bracket-square (Teknologi & Kode Modern)</option>
                        <option value="chat-bubble-left-right" {{ old('icon', $advantage->icon) === 'chat-bubble-left-right' ? 'selected' : '' }}>chat-bubble-left-right (Komunikasi / Konsultasi)</option>
                        <option value="banknotes" {{ old('icon', $advantage->icon) === 'banknotes' ? 'selected' : '' }}>banknotes (Harga Pasti & Transparan)</option>
                        <option value="arrow-path" {{ old('icon', $advantage->icon) === 'arrow-path' ? 'selected' : '' }}>arrow-path (Revisi / Pembaruan)</option>
                        <option value="chart-bar" {{ old('icon', $advantage->icon) === 'chart-bar' ? 'selected' : '' }}>chart-bar (SEO & Performa)</option>
                        <option value="shield-check" {{ old('icon', $advantage->icon) === 'shield-check' ? 'selected' : '' }}>shield-check (Keamanan & Proteksi)</option>
                        <option value="sparkles" {{ old('icon', $advantage->icon) === 'sparkles' ? 'selected' : '' }}>sparkles (Desain Premium)</option>
                        <option value="check-badge" {{ old('icon', $advantage->icon) === 'check-badge' ? 'selected' : '' }}>check-badge (Kualitas Terjamin)</option>
                    </select>
                    @error('icon') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Warna Kotak Ikon <span class="text-red-500">*</span></label>
                    <select name="icon_bg_color" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                        <option value="yellow" {{ old('icon_bg_color', $advantage->icon_bg_color) === 'yellow' ? 'selected' : '' }}>Kuning Kontras (Amber/Yellow)</option>
                        <option value="blue" {{ old('icon_bg_color', $advantage->icon_bg_color) === 'blue' ? 'selected' : '' }}>Biru Taraweb (Solid Blue)</option>
                        <option value="white" {{ old('icon_bg_color', $advantage->icon_bg_color) === 'white' ? 'selected' : '' }}>Putih Bersih (White)</option>
                    </select>
                    @error('icon_bg_color') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Urutan & Status Aktif --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-center pt-2">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nomor Urutan Tampil <span class="text-red-500">*</span></label>
                    <input type="number" name="order" value="{{ old('order', $advantage->order) }}" required min="0" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('order') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 pt-6">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $advantage->is_active) ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded border-zinc-300 dark:border-zinc-600 focus:ring-blue-500">
                    <label for="is_active" class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 cursor-pointer">
                        Aktifkan Keunggulan ini di Landing Page
                    </label>
                </div>
            </div>

            {{-- Action Submit --}}
            <div class="pt-6 border-t border-zinc-200 dark:border-zinc-700 flex justify-end gap-3">
                <a href="{{ route('admin.advantages.index') }}" class="px-5 py-2.5 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                    Perbarui Keunggulan
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>
