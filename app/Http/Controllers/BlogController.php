<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\BlogComment;
use DateTimeInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jorenvh\Share\Share;

class BlogController extends Controller
{


    public function index($slug){

        $num=Blog::where('blogSlug',$slug)->value('id');
        Blog::where('blogSlug',$slug)->increment('views');

        $comm=BlogComment::where('blog_id',$num)
            ->where('status',1)
            ->get();
        $recents=Blog::where('id','!=',$num)->limit(5)->get();
        $other=Blog::with('categories','editors')->where('blogs.id',$num)->first();

        return view(
            'blog',[
                'slug'=>$slug,
                'blogSelected'=>$other,
                'comments'=>$comm,
                'recents'=>$recents,
                'facebook'=> (new \Jorenvh\Share\Share)->currentPage()->facebook()->getRawLinks(),
                'twitter'=> (new \Jorenvh\Share\Share)->page(url()->current(),
                    "$other->blogTitle")->twitter()->getRawLinks(),


                Share::class



        ]);
    }
}
