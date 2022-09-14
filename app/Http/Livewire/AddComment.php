<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\BlogComment;
use Livewire\Component;

class AddComment extends Component
{
    public $names,$email,$phone,$comment;
    public $blogId;


    public function resetInputs()
    {
        $this->names='';
        $this->email='';
        $this->phone='';
        $this->comment='';

    }


    public function add(){
        BlogComment::create([
            'name'=>$this->names,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'comment'=>$this->comment,
            'status'=>0,
            'blog_id'=>$this->blogId
        ]);
        session()->flash('message','Comment added');
        $this->resetInputs();
    }
    public function render()
    {
        return view('livewire.add-comment');
    }
}
