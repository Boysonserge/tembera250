<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }


    public function comments(){
        return $this->hasMany(BlogComment::class,'blog_id');
    }

    public function editors(){
        return $this->belongsTo(User::class,'user_id');
    }

}
