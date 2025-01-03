<x-layout.default :site="$site" :page="$page">

    <div class="grid justify-center grid-cols-1 md:grid-cols-2 p-10 ">
        <div class="w-full lg:w-2/3">
            <section class="top-[100px] sticky mb-14">
                <h3 class="text-2xl font-bold text-gray-700 my-4">About me</h3>
                <x-prose>
                    @kt($page->about())
                </x-prose>
            </section>
            <section class="image about ">
                <div class="flex justify-center items-center">
                    <img src="resources/images/girlProgramming.png" alt="Contact Image" class="w-65 h-65 object-cover">
                </div>
            </section>
        </div>
        <div class="w16 md:w32 lg:w48">
            <section class="">
                <h3 class="text-2xl font-bold text-gray-700 my-4">Work Experience</h3>
                <x-prose>
                    @kt($page->text())
                </x-prose>
            </section>
        </div>
    </div>
</x-layout.default>
