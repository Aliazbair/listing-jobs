<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class Tasks extends Component
{

    public $name = '', $type = '', $description = '';

    protected $rules = [
        'name' => 'required',
        'description'
        => 'required',
        'type' => 'required'
    ];

    public function save()
    {
        $this->validate();
        Note::create([
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
        ]);
    }
    public function render()
    {
        return view('livewire.tasks');
    }
}
