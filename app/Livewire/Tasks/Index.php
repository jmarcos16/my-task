<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.tasks.index', [
            'tasks' => Task::query()
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }

    #[On('task::created')]
    public function refreshTask()
    {
        $this->render();
    }
}
