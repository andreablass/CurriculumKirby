<div x-data="{ open: false }"
    @menu-open.window="open = true"
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-top-full"
    x-transition:enter-end="opacity-1"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-full"
    class="absolute inset-0 z-30 bg-white text-center"
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

    <nav class="p-4" >
        <ul class="space-y-4">
            @foreach (site()->children()->listed() as $page)
                <li>
                    <x-link.menu href="{{ $page->url() }}" style="color: black;">{{ $page->title() }}</x-link.menu>
                </li>
            @endforeach
        </ul>
    </nav>
</div>
