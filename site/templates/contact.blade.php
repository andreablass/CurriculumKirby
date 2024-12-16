<x-layout.default >

    <div class="grid place-items-center mx-auto w-72 max-w-md h-72">

    <div class="grid justify-center grid-cols-1 md:grid-cols-2 ">
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
            <ul>
                @foreach ($page->social()->toStructure() as $social)
                    <li>
                         <a href="{{ $social->url() }}">@kt($social->platform())</a>
                    </li>
                @endforeach
            </ul>
            </section>
        </div>
    </div>
</x-layout.default>