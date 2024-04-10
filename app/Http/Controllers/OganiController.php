<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OganiController extends Controller
{
    public function index(){
        return view('front-end.home.home', [
            'categories' => Category::all()
        ]);
    }

    public function category(){
        return view('front-end.category.index');
    }

    public function product(){
        return view('front-end.product.index');
    }
}
