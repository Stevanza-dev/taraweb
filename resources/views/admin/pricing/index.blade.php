<x-layouts::app :title="__('Kelola Paket Harga (Pricing)')">
    <div class="flex flex-col gap-6">
        {{-- Header Bar --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-zinc-200 dark:border-zinc-700">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-white">Kelola Paket Harga (Pricing)</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Atur kartu paket harga dan fitur yang tampil pada seksi Pricing.</p>
            </div>
            <a href="{{ route('admin.pricing.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                <x-heroicon-o-plus class="w-4 h-4 stroke-2" />
                <span>Tambah Paket</span>
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
                            <th class="px-6 py-3.5">Paket</th>
                            <th class="px-6 py-3.5">Harga</th>
                            <th class="px-6 py-3.5">Status Populer</th>
                            <th class="px-6 py-3.5">Fitur Terdaftar</th>
                            <th class="px-6 py-3.5">Status</th>
                            <th class="px-6 py-3.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                        @forelse($plans as $plan)
                            <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/40 transition">
                                <td class="px-6 py-4 font-bold text-zinc-900 dark:text-white whitespace-nowrap">
                                    #{{ $plan->order }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-lg border border-zinc-200 dark:border-zinc-700 flex items-center justify-center bg-zinc-100 dark:bg-zinc-800 text-blue-600 dark:text-blue-400 shrink-0">
                                            @if($plan->icon === 'rocket-launch')
                                                <x-heroicon-o-rocket-launch class="w-5 h-5" />
                                            @elseif($plan->icon === 'sparkles')
                                                <x-heroicon-o-sparkles class="w-5 h-5" />
                                            @elseif($plan->icon === 'trophy')
                                                <x-heroicon-o-trophy class="w-5 h-5" />
                                            @else
                                                <x-heroicon-o-tag class="w-5 h-5" />
                                            @endif
                                        </div>
                                        <div>
                                            <p class="font-bold text-zinc-900 dark:text-white">{{ $plan->name }}</p>
                                            <div class="flex items-center gap-2 mt-0.5">
                                                @if($plan->badge)
                                                    <span class="text-[10px] font-bold uppercase px-1.5 py-0.5 bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 rounded">
                                                        {{ $plan->badge }}
                                                    </span>
                                                @endif
                                                <span class="text-xs text-zinc-400">{{ $plan->subtitle }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="font-bold text-zinc-900 dark:text-white text-base">Rp {{ $plan->price }}</span>
                                    <span class="text-xs text-zinc-500 dark:text-zinc-400">{{ $plan->price_unit }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($plan->is_popular)
                                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-800 dark:bg-amber-950/40 dark:text-amber-300 border border-amber-200 dark:border-amber-800">
                                            <x-heroicon-s-sparkles class="w-3.5 h-3.5 text-amber-500" />
                                            <span>{{ $plan->popular_badge_text ?? 'Terpopuler' }}</span>
                                        </span>
                                    @else
                                        <span class="text-xs text-zinc-400">Standar</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs font-medium text-zinc-600 dark:text-zinc-300">
                                        {{ count($plan->features ?? []) }} fitur terdaftar
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($plan->is_active)
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
                                        <a href="{{ route('admin.pricing.edit', $plan) }}" class="p-2 text-zinc-600 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-blue-400 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition" title="Edit">
                                            <x-heroicon-o-pencil-square class="w-5 h-5" />
                                        </a>
                                        <form action="{{ route('admin.pricing.destroy', $plan) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus paket harga ini?');" class="inline">
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
                                    Belum ada data paket harga. Klik "Tambah Paket" untuk mulai membuat.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts::app>

