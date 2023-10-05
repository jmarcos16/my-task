<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Rules;
use App\Models\Task;
use App\Livewire\Tasks\Index;

new class extends Component {
    public bool $modal = false;

    public string $title = '';
    public string $description = '';

    public function save()
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $validated['user_id'] = auth()->id();

        Task::query()->create($validated);

        $this->modal = false;
        $this->dispatch('task::created')->to(Index::class);
        $this->reset();
    }
}; ?>

<div>
    <x-secondary-button wire:click="$toggle('modal')">Create</x-secondary-button>
    <form wire:submit="save">
        <x-modal name="new-task" wire:model="modal">
            <x-card title="Create new Task">
                <div>
                    <div>
                        <x-input-label value="Title Task" />
                        <x-text-input wire:model="title" class="w-full py-2 my-1" placeholder="Provide a title" />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>

                    <div>
                        <x-input-label value="Description Task" />
                        <textarea id="message" rows="4" wire:model="description"
                            class="block my-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">
                        </textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </div>
                    <x-slot:footer>
                        <x-secondary-button type="button" x-on:click="show = false">Cancel</x-secondary-button>
                        <x-primary-button
                            class="bg-indigo-500 hover:bg-indigo-600 focus:ring-indigo-500 ">Create</x-primary-button>
                    </x-slot:footer>
                </div>
            </x-card>
        </x-modal>
    </form>
</div>
