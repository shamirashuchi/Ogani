<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('admin.product.add', [
            'categories' => Category::all(),
            'units' => Unit::all(),
            'brands' => Brand::all(),
            'subCategories' => SubCategory::all(),
            'product_managers' => User::where('role', 'Product Manager')->get()
        ]);
    }
    public function newcreatedrequest()
    {
        return view('admin.product.newcreatedrequest', ['products' => Product::where('user_id', auth()->id())
            ->where('flag', '!=', 2)
            ->get()]);
    }
    private $subCategory;
    public function getSubCategoryByCategory()
    {
        $this->subCategory = SubCategory::where('category_id', $_GET['category_id'])->get();
        return response()->json($this->subCategory);
    }

    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        ProductImage::newProductImage($request->file('other_image'), $this->product->id);
        return back()->with('message', 'Product info save successfully.');
    }
    public function newrequest()
    {
        Product::updateNewProduct();
        return view('admin.product.showNewCategory', ['products' => Product::where('flag', 1)->get()]);
    }

    public function detail($id)
    {
        return view('admin.product.detail', [
            'product' => Product::find($id)

        ]);
    }

    public function edit($id)
    {
        return view('admin.product.edit', [
            'product' => Product::find($id),
            'categories' => Category::all(),
            'units' => Unit::all(),
            'brands' => Brand::all(),
            'subCategories' => SubCategory::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($images = $request->file('other_image'))
        {
            ProductImage::updateProductImage($images, $id);
        }
        return redirect('/product/manage')->with('message', 'Product info Update successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductImage();
        return redirect('/product/manage') ->with('message', 'Product info delete successfully');
    }
}
