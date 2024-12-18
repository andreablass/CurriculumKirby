<header class="bg-gray-800 text-white p-4 fixed top-0 left-0 right-0 z-10 ">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-2xl font-bold">
        
            <x-link.menu href="{{ page('home')->url() }}">Andrea Blass Zamudio</x-link.menu>
        </div>
        <div class="flex flex-1 items-center justify-end gap-4">
            <nav>
                <ul class="flex space-x-6">
                    <li>
                        <x-link.menu href="{{ page('contact')->url() }}" >Contact</x-link.menu>               
                    </li>     
                </ul>
            </nav>

            <div>
                <button 
                    class="rounded p-1 text-white hover:bg-gray-700"
                    @click="$dispatch('menu-open')"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

            </div>
        </div>
    </div>
</header>

