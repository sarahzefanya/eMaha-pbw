<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;

class TableTask extends Component
{

    protected $listeners = [
        'indexTask'
    ];

    public function render()
    {
        $task = Task::orderBy('id', 'desc')->get();
        return view('livewire.table-task', ['task' => $task]);
    }

    public function indexTask($task){

    }
}
