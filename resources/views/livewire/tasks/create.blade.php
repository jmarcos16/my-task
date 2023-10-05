<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $modal = true;
}; ?>

<div>
    <x-secondary-button wire:click="$toggle('modal')">Create</x-secondary-button>
    <x-modal name="new-task" wire:model="modal">
        <x-card title="Create new Task">
            <div>
                <x-input-label for="title" value="Title Task" />
                <x-text-input wire:model="title" id="title" class="w-full py-2 my-1" placeholder="Provide a title" />
            </div>
    
            <div>
                <x-input-label for="description" value="Description Task" />
                <textarea id="message" rows="4"
                    class="block my-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here...">
                </textarea>
            </div>
    
            <x-slot:footer>
                <x-primary-button wire:click="create" class="bg-indigo-500 hover:bg-indigo-600">Create</x-primary-button>
            </x-slot:footer>
        </x-card>
    </x-modal>
</div>
