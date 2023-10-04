@props(['title' => null])

<div x-data="{ show: false }" x-show="show" x-on:open-modal.window="show = true" x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false" class="fix z-50 inset-0">

    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="bg-white shadow rounded m-auto fixed inset-0 max-w-2xl overflow-y-auto" style="max-height:500px">

        <div class="py-3 px-5 flex justify-between items-center border-b">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <button x-on:click="show = false" class="text-2xl text-gray-700 hover:text-gray-900">&times;
            </button>
        </div>
        <div>Body</div>

    </div>
</div>
