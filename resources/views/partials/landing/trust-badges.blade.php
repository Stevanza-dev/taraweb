{{-- Trust Badges (Used inside hero section) - Flat Comic Neo-Brutalism --}}
<div class="inline-flex flex-col sm:flex-row items-center gap-3 px-5 py-3 bg-white border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
    <div class="flex items-center -space-x-2">
        <div class="w-8 h-8 rounded-full border-2 border-black bg-blue-600 flex items-center justify-center text-[10px] font-black text-white shadow-[1px_1px_0px_0px_#000]">
            WT
        </div>
        <div class="w-8 h-8 rounded-full border-2 border-black bg-white flex items-center justify-center text-[10px] font-black text-black shadow-[1px_1px_0px_0px_#000]">
            ID
        </div>
        <div class="w-8 h-8 rounded-full border-2 border-black bg-blue-400 flex items-center justify-center text-[10px] font-black text-black shadow-[1px_1px_0px_0px_#000]">
            99
        </div>
        <div class="w-8 h-8 rounded-full border-2 border-black bg-yellow-300 flex items-center justify-center text-black shadow-[1px_1px_0px_0px_#000]">
            <x-heroicon-s-check class="w-4 h-4 stroke-black stroke-2" />
        </div>
    </div>

    <div class="flex flex-col items-center sm:items-start">
        <div class="flex items-center gap-1">
            @for ($i = 0; $i < 5; $i++)
                <x-heroicon-s-star class="w-4 h-4 text-yellow-400 stroke-black stroke-1" />
            @endfor
            <span class="text-xs font-black text-black ml-1.5 bg-yellow-300 px-1.5 py-0.2 border border-black">4.9 / 5</span>
        </div>
        <p class="text-xs font-bold text-black tracking-tight mt-0.5">
            Dipercaya oleh <span class="text-blue-600 underline font-black">150+ instansi & bisnis</span>
        </p>
    </div>
</div>
