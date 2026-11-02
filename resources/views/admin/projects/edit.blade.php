<x-layouts::app :title="__('Edit Proyek')">
    <div class="max-w-3xl mx-auto flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex items-center justify-between pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Edit Proyek: {{ $project->title }}</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Perbarui detail karya website dan portofolio.</p>
            </div>
            <a href="{{ route('admin.projects.index') }}" class="px-4 py-2 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                Kembali
            </a>
        </div>

        {{-- Form Container --}}
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl p-6 sm:p-8 space-y-6 shadow-sm">
            @csrf
            @method('PUT')

            {{-- Judul Proyek & Kategori --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nama / Judul Proyek <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $project->title) }}" required placeholder="Contoh: Portal Resmi SMA Prestasi" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Kategori Proyek <span class="text-red-500">*</span></label>
                    <select name="category" required class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                        <option value="Website Sekolah" {{ old('category', $project->category) === 'Website Sekolah' ? 'selected' : '' }}>Website Sekolah</option>
                        <option value="Company Profile" {{ old('category', $project->category) === 'Company Profile' ? 'selected' : '' }}>Company Profile</option>
                        <option value="Toko E-Commerce" {{ old('category', $project->category) === 'Toko E-Commerce' ? 'selected' : '' }}>Toko E-Commerce</option>
                        <option value="Custom Web App" {{ old('category', $project->category) === 'Custom Web App' ? 'selected' : '' }}>Custom Web App</option>
                        <option value="Landing Page" {{ old('category', $project->category) === 'Landing Page' ? 'selected' : '' }}>Landing Page</option>
                        <option value="Portal Berita" {{ old('category', $project->category) === 'Portal Berita' ? 'selected' : '' }}>Portal Berita</option>
                    </select>
                    @error('category') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Deskripsi Proyek --}}
            <div>
                <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Deskripsi Singkat <span class="text-red-500">*</span></label>
                <textarea name="description" rows="3" required placeholder="Tuliskan gambaran fitur utama atau solusi yang diberikan pada proyek ini..." class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">{{ old('description', $project->description) }}</textarea>
                @error('description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- URL Website & Klien --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">URL / Tautan Website <span class="text-red-500">*</span></label>
                    <input type="url" name="url" value="{{ old('url', $project->url) }}" required placeholder="https://example.com" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm font-mono">
                    <span class="text-xs text-zinc-500 dark:text-zinc-400 mt-1 block">Tautan untuk tombol "Kunjungi Website" bagi pengunjung.</span>
                    @error('url') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nama Klien / Instansi (Opsional)</label>
                    <input type="text" name="client" value="{{ old('client', $project->client) }}" placeholder="Contoh: Yayasan Bina Prestasi" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('client') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Screenshot / Gambar Thumbnail & Tags --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Tangkapan Layar / Mockup</label>
                    @if($project->image)
                        <div class="mb-3 flex items-center gap-3">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-24 h-16 object-cover rounded-lg border border-zinc-200 dark:border-zinc-700 shadow-sm" />
                            <span class="text-xs text-zinc-500 dark:text-zinc-400">Gambar saat ini. Unggah file baru untuk mengganti.</span>
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*" class="w-full text-xs text-zinc-600 dark:text-zinc-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-zinc-800 dark:file:text-zinc-300">
                    <span class="text-xs text-zinc-500 dark:text-zinc-400 mt-1 block">Format: JPG, PNG, WEBP (Maksimal 2MB).</span>
                    @error('image') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Tag Fitur / Teknologi (Pisahkan koma)</label>
                    <input type="text" name="tags" value="{{ old('tags', is_array($project->tags) ? implode(', ', $project->tags) : '') }}" placeholder="Contoh: Laravel, PPDB Online, Mobile Friendly" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    <span class="text-xs text-zinc-500 dark:text-zinc-400 mt-1 block">Gunakan koma untuk memisahkan setiap tag.</span>
                    @error('tags') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Urutan, Featured & Status Aktif --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 items-center pt-2">
                <div>
                    <label class="block text-sm font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Nomor Urut Tampil <span class="text-red-500">*</span></label>
                    <input type="number" name="order" value="{{ old('order', $project->order) }}" required min="0" class="w-full px-4 py-2.5 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
                    @error('order') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center gap-3 pt-6">
                    <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }} class="w-5 h-5 text-amber-500 rounded border-zinc-300 dark:border-zinc-600 focus:ring-amber-500">
                    <label for="is_featured" class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 cursor-pointer">
                        Sorot sebagai Unggulan (Featured)
                    </label>
                </div>

                <div class="flex items-center gap-3 pt-6">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $project->is_active) ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded border-zinc-300 dark:border-zinc-600 focus:ring-blue-500">
                    <label for="is_active" class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 cursor-pointer">
                        Aktifkan di Landing Page
                    </label>
                </div>
            </div>

            {{-- Action Submit --}}
            <div class="pt-6 border-t border-zinc-200 dark:border-zinc-700 flex justify-end gap-3">
                <a href="{{ route('admin.projects.index') }}" class="px-5 py-2.5 text-sm font-semibold text-zinc-700 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-800 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                    Perbarui Proyek
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>

