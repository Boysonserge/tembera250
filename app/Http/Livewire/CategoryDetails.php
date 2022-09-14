<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryDetails extends Component
{
    use WithPagination;
    public $blogs;
    public $perPage = 12;
    public $cats;
    public $myBlogs;
    public function addPage()
    {
        $this->perPage +=6;
    }

    public function mount($slug){
        $this->cats=Category::where('categorySlug',$slug)->value('id');

    }
    public function render()
    {
        return view('livewire.category-details',
            [
                'categoryBlogs'=>Blog::where('category_id',$this->cats)->paginate($this->perPage)
            ]);
    }
}
