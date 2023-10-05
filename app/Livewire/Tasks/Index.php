<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.tasks.index', [
            'tasks' => Task::paginate(10),
        ]);
    }

    // public function showUser(User $user)
    // {
    //     $this->emit('showUser', $user);
    // }
}
