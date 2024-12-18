<x-layout.default >
    <div class="grid w-full p-6 pt-20 lg:grid-cols-2">
        <div class="mx-auto w-full max-w-md p-6">
            <x-prose class="mx-auto">
                <div class="w16 md:w32 lg:w48 rounded p-10 shadow ">
                    <section class="column text" >
                        <h3 class="font-bold ">Address: </h3>
                        <p>@kt($page->address())</p>
                    </section>
                    <section class="column text">
                        <h3 class="font-bold ">Email</h3>
                        <p>@kt($page->email())</p>
                        <h3 class="font-bold ">Phone</h3>
                        <p>@kt($page->phone())</p>
                    </section>
                    <section class="column text">
                    <h3 class="font-bold ">On the web</h3>
                        @foreach ($page->social()->toStructure() as $social)    
                                <a href="{{ $social->url() }}">
                                    @kt($social->platform())
                                </a>
                        @endforeach
                    </section>
                </div>
            </x-prose>
        </div>

        <div class="flex flex-col justify-center p-10">
            <h2 class="text-xl mb-4 font-semibold">Contact me</h2>

            <form class="grid w-full gap-4"
                    x-data="{ name : '', email : null, comments : null }"
                    @submit.prevent="console.log('submited')">
                <label>
                    <span class="sr-only">Name</span>
                    <input type="text" class="w-full rounded border border-gray-200" placeholder="Name" x-model="name">
                </label>
                
                <label>
                    <span class="sr-only">Email</span>
                    <input type="text" class="w-full rounded border border-gray-200" placeholder="Email"  x-model="email">
                </label>

                <label>
                    <span class="sr-only">Comments</span>
                    <input type="text" class="w-full rounded border border-gray-200" placeholder="Comments"  x-model="comments">
                </label>

                <div>
                    <button type="submit" class="rounded bg-gray-800 px-4 py-2 font-semibold text-white">
                        Send
                    </button>
                </div>
             </form>   
        </div>
    </div>
</x-layout.default>