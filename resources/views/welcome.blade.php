<x-app-layout>
    <x-modal title="Modal"></x-modal>

    <button x-data x-on:click="$dispatch('open-modal')" class="px-3 py-1 bg-teal-500 text-white rounded">Open
        Modal</button>
</x-app-layout>
