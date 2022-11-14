<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $category_id;

    public function deleteCategory($category_id){

        $this->category_id = $category_id;

    }

    public function destroyCategory(){
        $category = Category::find($this->category_id);
        $category->delete();
        session()->flash('message', 'Category Deleted');
        $this->dispatchBrowserEvent('close-modal');

    }

    public function render()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
