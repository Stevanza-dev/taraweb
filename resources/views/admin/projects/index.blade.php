<x-layouts::app :title="__('Kelola Portofolio Proyek')">
    <div class="flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Kelola Portofolio & Proyek</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Daftar website dan aplikasi karya Web Tara yang ditampilkan di landing page.</p>
            </div>
            <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                <x-heroicon-o-plus class="w-4 h-4 stroke-2" />
                <span>Tambah Proyek</span>
            </a>
        </div>

        {{-- Flash Notification --}}
        @if(session('success'))
            <div class="p-4 text-sm font-medium text-emerald-800 bg-emerald-50 dark:bg-emerald-950/40 dark:text-emerald-300 rounded-lg border border-emerald-200 dark:border-emerald-800 flex items-center gap-2">
                <x-heroicon-o-check-circle class="w-5 h-5 text-emerald-600 dark:text-emerald-400 shrink-0" />
                <span>{{ session('success') }}</span>
            </div>
        @endif

        {{-- Table Container --}}
        <div class="overflow-hidden bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-zinc-600 dark:text-zinc-300">
                    <thead class="bg-zinc-50 dark:bg-zinc-800/60 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400 border-b border-zinc-200 dark:border-zinc-700">
                        <tr>
                            <th class="px-6 py-3.5">Urutan</th>
                            <th class="px-6 py-3.5">Preview</th>
                            <th class="px-6 py-3.5">Proyek & Kategori</th>
                            <th class="px-6 py-3.5">Klien & Tag</th>
                            <th class="px-6 py-3.5">Tautan Website</th>
                            <th class="px-6 py-3.5">Status</th>
                            <th class="px-6 py-3.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                        @forelse($projects as $project)
                            <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/40 transition">
                                <td class="px-6 py-4 font-bold text-zinc-900 dark:text-white whitespace-nowrap">
                                    #{{ $project->order }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-16 h-11 object-cover rounded-md border border-zinc-200 dark:border-zinc-700 shadow-sm" />
                                    @else
                                        <div class="w-16 h-11 rounded-md bg-blue-50 dark:bg-blue-950/60 border border-blue-200 dark:border-blue-800 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                            <x-heroicon-o-globe-alt class="w-6 h-6" />
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <span class="font-bold text-zinc-900 dark:text-white text-base">{{ $project->title }}</span>
                                        @if($project->is_featured)
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-black uppercase tracking-wider bg-amber-100 text-amber-800 dark:bg-amber-950/60 dark:text-amber-300 border border-amber-300 dark:border-amber-700">
                                                Featured
                                            </span>
                                        @endif
                                    </div>
                                    <span class="inline-block mt-0.5 text-xs font-semibold text-blue-600 dark:text-blue-400">
                                        {{ $project->category }}
                                    </span>
                                    <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1 line-clamp-1 max-w-sm">{{ $project->description }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-xs font-semibold text-zinc-700 dark:text-zinc-300">{{ $project->client ?: '-' }}</p>
                                    @if(!empty($project->tags))
                                        <div class="flex flex-wrap gap-1 mt-1.5 max-w-xs">
                                            @foreach(array_slice($project->tags, 0, 3) as $tag)
                                                <span class="inline-flex items-center px-1.5 py-0.5 text-[10px] rounded bg-zinc-100 text-zinc-600 dark:bg-zinc-800 dark:text-zinc-300 border border-zinc-200 dark:border-zinc-700">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                            @if(count($project->tags) > 3)
                                                <span class="text-[10px] text-zinc-400">+{{ count($project->tags) - 3 }}</span>
                                            @endif
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ $project->url }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                                        <span>Buka Website</span>
                                        <x-heroicon-o-arrow-top-right-on-square class="w-3.5 h-3.5" />
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($project->is_active)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-zinc-100 text-zinc-600 dark:bg-zinc-800 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right whitespace-nowrap">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('admin.projects.edit', $project) }}" class="p-2 text-zinc-600 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-blue-400 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition" title="Edit">
                                            <x-heroicon-o-pencil-square class="w-5 h-5" />
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus proyek ini?');" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-zinc-600 hover:text-red-600 dark:text-zinc-400 dark:hover:text-red-400 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition" title="Hapus">
                                                <x-heroicon-o-trash class="w-5 h-5" />
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-zinc-500 dark:text-zinc-400">
                                    Belum ada data portofolio proyek. Klik "Tambah Proyek" untuk mulai menambahkan karya website.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts::app>

