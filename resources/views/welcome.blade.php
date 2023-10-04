<x-app-layout>
    <x-modal name="modal-1" title="Modal">
        <p>Lorem ipsum dolor sit</p>
    </x-modal>

    <x-modal name="modal2" title="Modal">

        <p>Modal 2</p>

    </x-modal>

    <button x-data x-on:click="$dispatch('open-modal', {name: 'modal-1'})"
        class="px-3 py-1 bg-teal-500 text-white rounded">
        Open Modal</button>

    <button x-data x-on:click="$dispatch('open-modal', {name: 'modal2'})"
        class="px-3 py-1 bg-teal-500 text-white rounded">
        Open Modal</button>

</x-app-layout>
