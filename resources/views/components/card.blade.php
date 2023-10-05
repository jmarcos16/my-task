@props(['title', 'footer' => null])

<div class="flex flex-col w-full bg-white rounded-lg shadow-md dark:bg-secondary-800 ">
    <div class="flex items-center justify-between px-5 py-3 border-b">
        <h2 class="text-lg font-semibold">{{ $title }}</h2>
        <button type="button" x-on:click="show = false" class="text-2xl text-gray-700 hover:text-gray-900">&times;
        </button>
    </div>
    <div {{ $attributes->merge(['class' => 'p-5']) }}>
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="flex justify-end px-5 py-3 border-t gap-x-4">
            {{ $footer }}
        </div>
    @endif

</div>
