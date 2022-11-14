<?php

namespace App\Http\Livewire\Admin\Customer;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        $customers = User::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $customers]);
    }
}
