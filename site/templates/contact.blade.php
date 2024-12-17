<x-layout.default >
    <div class=" flex justify-center items-center w-full p-6 pt-20 ">
        <div class="max-w-md w-full p-6">
            <x-prose>
                <div class="w16 md:w32 lg:w48  p-10 rounded shadow ">
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
                </x-prose>
            </div>
        </div>
</x-layout.default>