<x-layout.default :site="$site" :page="$page">

    <div class="grid justify-center grid-cols-1 md:grid-cols-2  pt-20 ">
        <div class="w-full lg:w-2/3 p-10">
                <section class="top-12 sticky">
                <h3 class="text-2xl font-bold text-gray-700 my-4">About me</h3>
                <x-prose>
                    @kt($page->about())
                </x-prose>
            </section>
        </div>
        <div class="w16 md:w32 lg:w48  p-10">
                <section class="">
                <h3 class="text-2xl font-bold text-gray-700 my-4">Work Experience</h3>
                    <x-prose>
                        @kt($page->text()) 
                    </x-prose>
            </section>
        </div>
    </div>
</x-layout.default>