<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class OganiController extends Controller
{
//    public function index(){
//        return view('front-end.home.home',[
//            'categories' => Category::all()
//        ]);
//    }
////
////    public function category(){
////        return view('front-end.category.index');
////    }
//
//    public function category($id)
//    {
//        // Logic to fetch the category based on the provided ID
//        $category = Category::findOrFail($id);
//
//        // You may perform any additional logic here, such as loading related data, before returning the view
//
//        // Return the view with the category data
//        return view('front-end.category.index', ['category' => $category]);
//    }
//
//
//    public function product(){
//        return view('front-end.product.index');
//    }
    private $products;
    public function index()
    {
        $this->products = Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get();
        return view('front-end.home.home', [
            'categories' => Category::where('flag', 2)->get(),
            'products' => $this->products
        ]);
    }

    public function category($id)
    {
        return view('front-end.category.index', [
            'products'=> Product::where('category_id', $id)->get(),
            'categories' => Category::all()
        ]);
    }

    public function subCategory($id)
    {
        return view('front-end.category.index', [
            'products'      => Product::where('sub_category_id', $id)->get(),
            'categories'    => Category::all()
        ]);
    }

    public function product($id)
    {
        $messages = \App\Models\Message::all();
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        return view('front-end.product.index', [
            'product' => $product,
            'messages' => $messages
        ]);
    }

}
