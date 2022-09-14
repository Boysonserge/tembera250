<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cats=Category::with(['blogs'=>function($query) {
            return $query->limit(3);
        }])->get();


        return view('welcome',[
            'cats'=>$cats
        ]);
    }
}
