<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug){
        $cats=Category::where('categorySlug',$slug)->value('id');
        $catName=Category::where('categorySlug',$slug)->value('categoryName');

        $blogs=Blog::where('category_id',$cats)->get();

        return view('category',[
            'blogs'=>$blogs,
            'slug'=>$slug,
            'catName'=>$catName
        ]);
    }
}
