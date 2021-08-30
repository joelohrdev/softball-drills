<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Drill;
use Livewire\Component;

class SingleCategoryDrills extends Component
{
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.single-category-drills');
    }
}
