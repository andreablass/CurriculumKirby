<div x-data="{ open: false }"
    @menu-open.window="open = true"
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-top-full"
    x-transition:enter-end="opacity-1"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-full"
    class="fixed top-0 right-0 z-30 bg-gray-800 text-white h-[700px] w-1/2 rounded-l-lg p-10"
>
    <div class="flex justify-end p-6">
        <button 
            class="rounded p-1 text-withe hover:text-pink-400"
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
                <x-prose class="rounded-full p-1 text-white hover:bg-gray-700 cursor-pointer  p-2">
                    <x-link.menu href="{{ $page->url() }}" class="block">
                        {{ $page->title() }}
                    </x-link.menu>
                </x-prose>
            </li>
            @endforeach
        </ul>
    </nav>
</div>
