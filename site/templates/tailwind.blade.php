<x-layout.default >
    <h1>{{ $page->title()->html() }} </h1>
    <div class="mx-auto mt-8 flex max -w-4x1 gap-4 top-50">
        <div class="float-left block w/2 rounded bg-slate-300 p-4 text-center font-semibold">
            Block 50%
        </div>
        <div class="float-left block w/2 rounded bg-slate-300 p-4 text-center font-semibold">
            Block 50%
        </div>
    </div>    
        <div class="mx-auto mt-8 flex max -w-4x1 gap-4 top-6">
        <div class="w-full rounded bg-gray-200 p-4 text-center font-semibold">
            Flex 100%
        </div>
                <div class="w-full rounded bg-gray-200 p-4 text-center font-semibold">
            Flex 100%
        </div>
    </div>   
</x-layout.default>