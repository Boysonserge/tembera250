<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class MainBlogs extends Component
{
    use WithPagination;

    public $perPage = 12;

    public function addPage()
    {
        $this->perPage +=12;
    }

    public function render()
    {
        return view('livewire.main-blogs',
            ['mainblogs' => Blog::query()->orderBy('id','DESC')->with('categories')->paginate($this->perPage)]);
    }
}
