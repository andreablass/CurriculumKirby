<x-layout.default>
    <div class="grid w-full p-6 pt-20 lg:grid-cols-2">
        <div class="mx-auto w-full max-w-md p-6">
            <x-prose class="mx-auto">
                <div class="w16 md:w32 lg:w48 rounded p-10 shadow ">
                    <section class="column text">
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
            <h2 class="mb-4 text-xl font-semibold">Contact me</h2>

            <form class="grid w-full gap-4" 
                x-data="{ 
                    name : '', 
                    email : null, 
                    comments : null,
                    message: '',
                    submit() {
                        if (this.name && this.email && this.comments){
                            this.message = 'Processing request'
                        }
                    }
                }" 
                @submit.prevent="submit()">
                <label>
                    <span class="sr-only">Name</span>
                    <input type="text" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Name" x-model="name">
                </label>

                <label>
                    <span class="sr-only">Email</span>
                    <input type="text" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Email" x-model="email">
                </label>

                <label>
                    <span class="sr-only">Comments</span>
                    <input type="text" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Comments" x-model="comments">
                </label>

                <div>
                    <x-buttons.button href="{{ $page->url() }}">
                        <button type="submit">
                            Send
                        </button>
                    </x-buttons.button>

                    <div class="mt-4" x-show="message" x-text="message"></div>
                </div>
            </form>
        </div>
    </div>
</x-layout.default>
