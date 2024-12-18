<div 
    x-data="{ open: false }" 
    x-show="open"
    @menu-open.window="open = true"
    class="absolute inset-0 z-30 bg-white"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-top-full opacity-0"
    x-transition:enter-end="top-0 opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="top-0 opacity-100"
    x-transition:leave-end="-top-full opacity-0"
>
    <div class="flex justify-end p-6">
        <button 
            class="rounded p-1 text-black"
            @click="open = false"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

