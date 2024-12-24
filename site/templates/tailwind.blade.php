<x-layout.default>
    <div class="ml-20 mr-20">
        <h1 class="text-3xl font-bold mb-8 text-center pt-5">{{ $page->title()->html() }}</h1>
        <div class="mx-auto mt-8 flex max-w-4x1 gap-4 top-50">
            <div class="float-left block w1/2 rounded bg-pink-100 p-4 text-center font-semibold">
                Block 50%
            </div>
            <div class="float-left block w1/2 rounded bg-pink-100 p-4 text-center font-semibold">
                Block 50%
            </div>
        </div>
        <div class="mx-auto mt-8 flex max-w-4x1 gap-4 top-6">
            <div class="w-full rounded bg-yellow-100 p-4 text-center font-semibold">
                Flex 100%
            </div>
            <div class="w-full rounded bg-yellow-100 p-4 text-center font-semibold">
                Flex 100%
            </div>
        </div>
        <div class="mx-auto mt-8 flex max-w-4x1 justify-center gap-4">
            <div class="rounded bg-pink-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="flex-1 rounded bg-blue-200 p-4 text-center font-semibold">
                Flex 1
            </div>
            <div class="rounded bg-pink-100 p-4 text-center font-semibold">
                Auto
            </div>
        </div>
        <div class="mx-auto mt-8 flex max-w-4x1 justify-between gap-4">
            <div class="rounded bg-pink-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-green-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-pink-100 p-4 text-center font-semibold">
                Auto
            </div>
        </div>
        <div class="mx-auto mt-8 flex max-w-4x1 gap-4 justify-self-start">
            <div class="rounded bg-pink-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-green-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-pink-100 p-4 text-center font-semibold">
                Auto
            </div>
        </div>
        <div class="mx-auto mt-8 grid  max-w-4x1 grid-cols-3 gap-4">
            <div class="rounded bg-pink-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-violet-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-pink-100 p-4 text-center font-semibold">
                Auto
            </div>
        </div>
        <div class="mx-auto mt-8 grid  max-w-4x1 grid-cols-3 gap-4 justify-items-end">
            <div class="rounded bg-pink-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-violet-200 p-4 text-center font-semibold">
                Auto
            </div>
            <div class="rounded bg-pink-100 p-4 text-center font-semibold">
                Auto
            </div>
        </div>
        <div class="relative mx-auto mt-16 h-80 max-w-4x1 rounded bg-pink-200">
            <div class="absolute left-1/2 top-1/2 -translate-y-1/2 text-lg font-lg font-semibold text-gray-700">
                Andrea Blass
            </div>
        </div>
        <div class="mx-auto mt-16 h-80 max-w-4x1 rounded bg-pink-200">
            <div class="pt-40 text-center text-lg font-semibold text-gray-700">
                Andrea Blass
            </div>
        </div>
        <div class="max-w-4x1 mx-auto mt-16 flex h-80 items-center justify-center rounded bg-pink-200">
            <div class="text-lg font-semibold text-gray-700">
                Andrea Blass
            </div>
        </div>
    </div>
</x-layout.default>
