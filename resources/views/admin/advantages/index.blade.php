<x-layouts::app :title="__('Kelola Keunggulan (Advantages)')">
    <div class="flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Kelola Keunggulan (Advantages)</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Atur kartu keunggulan & nilai tambah taraweb pada landing page.</p>
            </div>
            <a href="{{ route('admin.advantages.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                <x-heroicon-o-plus class="w-4 h-4 stroke-2" />
                <span>Tambah Keunggulan</span>
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
                            <th class="px-6 py-3.5">Ikon</th>
                            <th class="px-6 py-3.5">Badge / Highlight</th>
                            <th class="px-6 py-3.5">Judul & Deskripsi</th>
                            <th class="px-6 py-3.5">Status</th>
                            <th class="px-6 py-3.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                        @forelse($advantages as $advantage)
                            @php
                                $bgColorClass = match($advantage->icon_bg_color) {
                                    'yellow' => 'bg-amber-300 text-black border-black',
                                    'blue' => 'bg-blue-600 text-white border-black',
                                    default => 'bg-white text-black border-black',
                                };
                            @endphp
                            <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/40 transition">
                                <td class="px-6 py-4 font-bold text-zinc-900 dark:text-white whitespace-nowrap">
                                    #{{ $advantage->order }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="w-10 h-10 rounded-lg border-2 flex items-center justify-center {{ $bgColorClass }}">
                                        @if($advantage->icon === 'bolt')
                                            <x-heroicon-o-bolt class="w-5 h-5" />
                                        @elseif($advantage->icon === 'code-bracket-square')
                                            <x-heroicon-o-code-bracket-square class="w-5 h-5" />
                                        @elseif($advantage->icon === 'chat-bubble-left-right')
                                            <x-heroicon-o-chat-bubble-left-right class="w-5 h-5" />
                                        @elseif($advantage->icon === 'banknotes')
                                            <x-heroicon-o-banknotes class="w-5 h-5" />
                                        @elseif($advantage->icon === 'arrow-path')
                                            <x-heroicon-o-arrow-path class="w-5 h-5" />
                                        @elseif($advantage->icon === 'chart-bar')
                                            <x-heroicon-o-chart-bar class="w-5 h-5" />
                                        @elseif($advantage->icon === 'shield-check')
                                            <x-heroicon-o-shield-check class="w-5 h-5" />
                                        @elseif($advantage->icon === 'sparkles')
                                            <x-heroicon-o-sparkles class="w-5 h-5" />
                                        @else
                                            <x-heroicon-o-check-badge class="w-5 h-5" />
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($advantage->badge_text)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded text-[11px] font-black uppercase tracking-wider bg-blue-100 text-blue-800 dark:bg-blue-950/60 dark:text-blue-300 border border-blue-300 dark:border-blue-700">
                                            {{ $advantage->badge_text }}
                                        </span>
                                    @else
                                        <span class="text-xs text-zinc-400">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-zinc-900 dark:text-white text-base">{{ $advantage->title }}</p>
                                    <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1 line-clamp-2 max-w-md">{{ $advantage->description }}</p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($advantage->is_active)
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
                                        <a href="{{ route('admin.advantages.edit', $advantage) }}" class="p-2 text-zinc-600 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-blue-400 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition" title="Edit">
                                            <x-heroicon-o-pencil-square class="w-5 h-5" />
                                        </a>
                                        <form action="{{ route('admin.advantages.destroy', $advantage) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus keunggulan ini?');" class="inline">
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
                                <td colspan="6" class="px-6 py-12 text-center text-zinc-500 dark:text-zinc-400">
                                    Belum ada data keunggulan. Klik "Tambah Keunggulan" untuk mulai membuat.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts::app>
