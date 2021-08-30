<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ListCategories extends Component
{
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.list-categories', [
            'categories' => Category::orderBy('name', 'ASC')->get()
        ]);
    }
}
