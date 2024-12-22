<x-layout.default>
    <div class="ml-10 mr-10">
        <div class="mx-auto mt-8 grid max-w-4x1 grid-cols-3 gap-4">
            <!-- Bloque 1: Counter -->
            <div class="rounded bg-pink-200 p-4 text-center font-semibold">
                <div x-data="{ count: 0 }">
                    <button x-on:click="count++" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Increment</button>
                    <span x-text="count" class="ml-4 text-lg font-bold"></span>
                </div>
            </div>

            <!-- Bloque 2: Dropdown -->
            <div class="rounded bg-violet-200 p-4 text-center font-semibold">
                <div x-data="{ open: false }">
                    <button @click="open = ! open" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Toggle</button>
                    <div x-show="open" @click.outside="open = false" class="mt-2">Contents...</div>
                </div>
            </div>

            <!-- Bloque 3: Search Input -->
            <div class="rounded bg-green-100 p-4 text-center font-semibold">
                <div x-data="{
            search: '',
            items: ['foo', 'bar', 'baz'],
            get filteredItems() {
                return this.items.filter(
                    i => i.startsWith(this.search)
                )
            }
        }">
                    <input x-model="search" placeholder="Search..." class="w-full px-4 py-2 border rounded">
                    <ul class="mt-2">
                        <template x-for="item in filteredItems" :key="item">
                            <li x-text="item" class="py-1"></li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mx-auto mt-8 grid max-w-4x1 grid-cols-3 gap-4">
            <!-- Bloque 4: Looping Elements -->
            <div class="rounded bg-blue-100 p-4 text-center font-semibold">
                <ul x-data="{ colors: ['Red', 'Orange', 'Yellow'] }">
                    <template x-for="color in colors">
                        <li x-text="color" class="py-1"></li>
                    </template>
                </ul>
            </div>

            <!-- Bloque 5: Applying CSS Classes -->
            <div class="rounded bg-yellow-100 p-4 text-center font-semibold">
                <div x-data="{ open: false }">
                    <button @click="open = ! open" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Toggle</button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="mt-2">Hello 👋</div>
                </div>
            </div>

            <!-- Bloque 6: x-trap -->
            <div class="rounded bg-red-200 p-4 text-center font-semibold">
                <div x-data="{ open: false }">
                    <button @click="open = true" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Open Dialog</button>
                    <span x-show="open" x-trap="open" class="block mt-2">
                        <p>...</p>
                        <input type="text" placeholder="Some input..." class="w-full mt-2 px-4 py-2 border rounded">
                        <input type="text" placeholder="Some other input..." class="w-full mt-2 px-4 py-2 border rounded">
                        <button @click="open = false" class="mt-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Close Dialog</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout.default>
