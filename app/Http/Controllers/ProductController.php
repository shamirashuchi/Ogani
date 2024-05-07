<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\UpdateProduct;
use App\Models\UpdateProductImage;
use App\Models\UpdateUnit;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product.index',['products' => Product::where('flag', 2)->get()]);
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
        return view('admin.product.showNewCategory', ['products' => Product::where('product_manager_id', auth()->id())->where('flag', 1)->get()]);
    }


    public function accept($id)
    {
        Product::acceptProduct($id);
        return redirect('/product/manage')->with('message', 'product info create successfully.');
    }

    public function cancel($id)
    {
        Product::cancelProduct($id);
        return redirect('/product/newrequest')->with('message', 'product info cancel successfully.');
    }

    public function deleterequest($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductImage($id);
        return redirect('/product/newcreatedrequest')->with('message', 'product requested  info delete successfully.');
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
            'subCategories' => SubCategory::all(),
            'product_managers' => User::where('role', 'Product Manager')->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($images = $request->file('other_image'))
        {
            UpdateProductImage::newProductImage($images, $id,$request);
            return redirect('/product/manage')->with('message', 'product info update request go  successfully.');
        }
        UpdateProduct::newProduct($request, $id);

        return redirect('/product/manage')->with('message', 'product info update request go  successfully.');
    }

//    public function update(Request $request, $id)
//    {
//        Product::updateProduct($request, $id);
//        if ($images = $request->file('other_image'))
//        {
//            ProductImage::updateProductImage($images, $id);
//        }
//        return redirect('/product/manage')->with('message', 'Product info Update successfully');
//    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductImage($id);
        return redirect('/product/manage') ->with('message', 'Product info delete successfully');
    }
    public function newupdaterequest()
    {
        return view('admin.product.showdata', ['updateproducts' => UpdateProduct::where('user_id', auth()->id())->get(),
            'updateimages' => UpdateProductImage::where('user_id', auth()->id())->get()->groupBy('product_id')]);
    }
    public function updaterequest()
    {
        UpdateProduct::updateProductflag();
        UpdateProductImage::updateImageflag();
        return view('admin.product.show', [
            'updateproducts' => UpdateProduct::where('product_manager_id', auth()->id())->where('flag', 1)->get(),
            'updateimages' => UpdateProductImage::where('product_manager_id', auth()->id())->where('flag', 1)->get()->groupBy(['product_id', 'user_id'])
        ]);
    }

    public function acceptbyadmin($id)
    {
        UpdateProduct::acceptProduct($id);
        return redirect('/product/manage')->with('message', 'Product info updated successfully.');
    }

    public function cancelbyadmin($id)
    {
        UpdateProduct::cancelProduct($id);
        return redirect('/product/updatedRequest')->with('message', 'Product updated info canceled successfully.');
    }

    public function deletebyuser($id)
    {
        UpdateProduct::deleteProductdata($id);
        return redirect('/product/newUpdatedRequest')->with('message', 'updateProduct info delete successfully.');
    }
    public function deleteimage($id)
    {
        UpdateProductImage::deleteProductImage($id);
        return redirect('/product/newUpdatedRequest')->with('message', 'updateImage info delete successfully.');
    }
}
