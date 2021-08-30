<?php

namespace App\Http\Livewire;

use App\Models\Drill;
use Livewire\Component;

class AllDrills extends Component
{
    public function render()
    {
        return view('livewire.all-drills', [
            'drills' => Drill::orderBy('name', 'ASC')->get()
        ]);
    }
}
