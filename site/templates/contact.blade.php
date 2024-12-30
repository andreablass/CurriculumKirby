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

            <form class="grid w-full gap-4" method="POST" action="{{$page->url() }} ">
                <label>
                    <span class="sr-only">Name</span>
                    <input type="text" name="name" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Name *" required x-model="name">
                    @if (isset($erros['name']))
                        <span class="mt-2 bloc text-sm text-red-700">{{ $erros[ 'name' ] }}</span>
                    @endif
                </label>

                <label>
                    <span class="sr-only">Email</span>
                    <input type="email" name="email" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Email *" required x-model="email">
                    @if (isset($erros['email']))
                        <span class="mt-2 bloc text-sm text-red-700">{{ $erros[ 'email' ] }}</span>
                    @endif
                </label>

                <label>
                    <span class="sr-only">Comments</span>
                    <textarea name="comments" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Comments" x-model="comments"></textarea>
                    @if (isset($erros['comments']))
                        <span class="mt-2 bloc text-sm text-red-700">{{ $erros[ 'comments' ] }}</span>
                    @endif
                </label>

                <div>
                    <x-buttons.button href="{{ $page->url() }}">
                        <button type="submit">
                            Send
                        </button>
                    </x-buttons.button>

                    @if (isset($success) && $success === true)
                        <div class="mt-4 rouned border border-green-900 bg-green-200 px-4 py-2 font-semibold text-green-900">
                            {{ $message }}
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-layout.default>
