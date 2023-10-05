@props(['name'])

<div x-data="{
        name: '{{ $name }}',
        show: false,
        @if ($attributes->wire('model')->value())
            show: @entangle($attributes->wire('model')) 
        @endif
    }"
    x-show="show" 
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = !($event.detail.name === name)" 
    x-on:keydown.escape.window="show = false"
    style="display: none;" 
    class="fixed inset-0 z-50 p-4 overflow-y-auto" 
    x-transition:enter="ease-out duration-300"
    x-transition:duration.300ms 
    x-transition:leave-end="opacity-0">
    
    <div x-on:click="show = false" class="fixed inset-0 transition-opacity transform bg-slate-400 dark:bg-stale-700 bg-opacity-60 dark:bg-opacity-60"></div>

    <div class="flex items-end justify-center w-full min-h-full mx-auto transform sm:items-start sm:max-w-2xl"
        x-show="show"
        x-on:click.self="close"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $slot }}
    </div>
</div>
