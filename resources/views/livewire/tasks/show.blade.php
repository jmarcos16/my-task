<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public $user;

    #On('task.show.{task}')
    public function showTask(User $user)
    {
        $this->dispatch('show-modal', 'task-show');
    }
}; ?>

<div>

    {{-- @dd('dwiobidow') --}}
    @if ($user)
        @dd($user)
    @endif
</div>
