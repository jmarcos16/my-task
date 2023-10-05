@props(['title', 'name'])

<div 
    x-data="{
        show: false, 
        @if ($attributes->wire('model')->value())
            show: @entangle($attributes->wire('model')),
        @endif
        name: '{{ $name }}'
    }"
    x-show="show" 
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = !($event.detail.name === name)" 
    x-on:keydown.escape.window="show = false"
    style="display: none;" class="fix z-20 inset-0" 
    x-transition:enter="ease-out duration-300"
    x-transition:duration.300ms
    x-transition:leave-end="opacity-0">
    <div x-on:click="show = false" class="fixed inset-0 z-30 bg-gray-600 opacity-40 blur"></div>
    <div class="bg-white z-40 shadow rounded m-auto fixed inset-0 max-w-2xl overflow-y-auto max-h-[500px]">

        <div class="py-3 px-5 flex justify-between items-center border-b">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <button x-on:click="show = false" class="text-2xl text-gray-700 hover:text-gray-900">&times;
            </button>
        </div>
        <div class="p-5">
            {{ $slot }}
        </div>
    </div>
</div>
