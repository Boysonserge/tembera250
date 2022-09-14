<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogComment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function my_blogs(){
        return $this->belongsTo(Blog::class,'blog_id');
    }

    public function activate(){
        return $this->update(['status'=>1]);
    }

}
