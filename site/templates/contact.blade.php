<x-layout.default>
    <div class="ml-20 mr-20">
        <div class="mx-auto mt-8 grid  max-w-4x1 grid-cols-2 gap-4">
            <div class="rounded p-4 flex items-center justify-center font-semibold">
                <div class="w16 md:w32 lg:w48 p-10">
                    <section class="image contact">
                        <div class="flex justify-center items-center">
                            <img src="resources/images/undraw_hey-by-basecamp_61xm.png" alt="Contact Image" class="w-65 h-65 object-cover">
                        </div>
                    </section>
                    <x-prose class="leading-[0.1]">
                        <section class="column text">
                            <div class="space-y-2">
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-pink-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <p>@kt($page->address())</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-5 h-6 w-6 text-pink-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 4.5h15v15H4.5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 8.25l7.5 4.5 7.5-4.5" />
                                    </svg>
                                    <p>@kt($page->email())</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-pink-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                    <p>@kt($page->phone())</p>
                                </div>
                            </div>
                        </section>
                    </x-prose>
                    <x-prose>
                        <section class="social networks text">
                            <div class="flex space-x-4">
                                @foreach ($page->social()->toStructure() as $social)
                                <a href="{{ $social->url() }}" class="social-icon">
                                    @if (in_array(strtolower($social->platform()), ['linkedin']))
                                    <img src="resources/images/linkedin.png" alt="LinkedIn Icon" class="w-8 h-8 object-cover rounded shadow-lg">
                                    @elseif (in_array(strtolower($social->platform()), ['twitter', 'x']))
                                    <img src="resources/images/x.png" alt="Twitter Icon" class="w-8 h-8 object-cover rounded shadow-lg">
                                    @endif
                                </a>
                                @endforeach
                            </div>
                        </section>
                    </x-prose>
                </div>
            </div>
            <div class="p-4 text-center font-semibold flex items-center justify-center">
                <div class="w-full max-w-lg">
                    <h2 class="mb-4 text-xl font-semibold">Contact me</h2>

                    <form class="grid w-full gap-4" method="POST" action="{{$page->url() }} ">
                        <label>
                            <span class="sr-only">Name</span>
                            <input type="text" name="name" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Name *" required x-model="name" value="{{ $data['name'] ?? '' }}">
                            @if (isset($errors['name']))
                            <span class="mt-2 bloc text-sm text-red-500">{{ $errors[ 'name' ] }}</span>
                            @endif
                        </label>

                        <label>
                            <span class="sr-only">Email</span>
                            <input type="email" name="email" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Email *" required x-model="email" value="{{ $data['email'] ?? '' }}"> <!-- ?? ' ' pone un valor por defecto por si no existe para no generar error -->
                            @if (isset($errors['email']))
                            <span class="mt-2 bloc text-sm text-red-500">{{ $errors[ 'email' ] }}</span>
                            @endif
                        </label>

                        <label>
                            <span class="sr-only">Comments</span>
                            <textarea name="comments" class="w-full rounded border border-gray-200 focus:border-pink-500" placeholder="Comments" x-model="comments">{{ $data['comments'] ?? '' }}</textarea>
                            @if (isset($errors['comments']))
                            <span class="mt-2 bloc text-sm text-red-500">{{ $errors[ 'comments' ] }}</span>
                            @endif
                        </label>

                        <div>
                            <x-buttons.button href="{{ $page->url() }}">
                                <button type="submit">
                                    Send
                                </button>
                            </x-buttons.button>

                            @if (isset($success) && $success === true)
                            <div class="mt-4 rounded-lg border-2 border-green-700 bg-green-100 px-6 py-3 font-semibold text-green-900 shadow-lg transition-all duration-300 ease-in-out hover:bg-green-200">
                                {{ $message }}
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.default>
