<?php

namespace App\Http\Livewire\Frontend\Store;

use Livewire\Component;

class View extends Component
{
public $category, $product;

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;


    }
    public function render()
    {
        return view('livewire.frontend.store.view', [
            'category' => $this->category,
            'product' => $this ->product
        ]);
    }
}
