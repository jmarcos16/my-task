<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Rules;
use App\Models\Task;

new class extends Component {
    public bool $modal = false;

    public string $title = '';
    public string $description = '';

    public function save()
    {
        dd('daiodnawon');
        $task = Task::query()->create([
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => request()->user()->id,
        ]);

        @dd($task);
        $this->modal = false;
    }

}; ?>

<div>
    <x-secondary-button wire:click="$toggle('modal')">Create</x-secondary-button>
    <x-modal name="new-task" wire:model="modal">
        <x-card title="Create new Task">
            <form wire:submit="save">

                <div>
                    <x-input-label for="title" value="Title Task" />
                    <x-text-input wire:model="title" class="w-full py-2 my-1" placeholder="Provide a title" />
                </div>
        
                <div>
                    <x-input-label for="description" value="Description Task" />
                    <textarea id="message" rows="4" wire:model="description"
                        class="block my-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here...">
                    </textarea>
                </div>
                
                
                <x-slot:footer><button type="submit">Submit</button>
                    <x-primary-button class="bg-indigo-500 hover:bg-indigo-600">Create</x-primary-button>
                </x-slot:footer>

            </form>
        </x-card>
    </x-modal>
</div>
