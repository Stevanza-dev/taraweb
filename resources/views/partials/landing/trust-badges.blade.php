{{-- Trust Badges (used inside hero section) --}}
<div class="flex flex-col sm:flex-row items-center gap-4 animate-fade-up anim-delay-400">
    <div class="flex -space-x-2">
        <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center text-xs font-bold text-white" style="background: var(--wt-blue);">A</div>
        <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center text-xs font-bold text-white" style="background: #10B981;">B</div>
        <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center text-xs font-bold text-white" style="background: #F59E0B;">C</div>
        <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center text-xs font-bold text-white" style="background: #8B5CF6;">D</div>
    </div>
    <div class="flex items-center gap-1">
        @for ($i = 0; $i < 5; $i++)
        <svg class="w-4 h-4" fill="#F59E0B" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        @endfor
    </div>
    <span class="text-sm font-medium" style="color: var(--wt-gray);">Dipercaya oleh berbagai instansi dan perusahaan</span>
</div>
