<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;
use App\Models\Task;

new class extends Component {
    public Task $task;
    public bool $modal = false;
}; ?>

<div>
    <button wire:click="$toggle('modal')" class="text-2xl text-gray-700 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </button>

    <x-modal title="Task Details" name="{{ $task->id }}" wire:model.defer="modal">
        {{$task->title}} <br> {{$task->description}}
    </x-modal>

</div>
