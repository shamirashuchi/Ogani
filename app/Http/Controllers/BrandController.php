<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\UpdateCategory;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.category.index', ['categories' => Category::where('flag', 2)->get()]);
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        Category::newCategory($request);
        return redirect('/category/newcreatedrequest')->with('message', 'Category info created request go  successfully.');
    }

    public function newcreatedrequest()
    {
        return view('admin.category.newcreatedrequest', ['categories' => Category::where('user_id', auth()->id())->get()]);
    }

    public function newrequest()
    {
        Category::updateNewCategory();
        return view('admin.category.showNewCategory', ['categories' => Category::where('flag', 1)->get()]);
    }

    public function accept($id)
    {
        Category::acceptCategory($id);
        return redirect('/category/manage')->with('message', 'Category info create successfully.');
    }

    public function cancel($id)
    {
        Category::cancelCategory($id);
        return redirect('/category/newrequest')->with('message', 'Category info cancel successfully.');
    }

    public function deleterequest($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/newcreatedrequest')->with('message', 'Category requested  info delete successfully.');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category  info delete successfully.');
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {

        UpdateCategory::newCategory($request, $id);
//        SubCategory::updateSubCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Sub Category info update successfully.');
    }

    public function newupdaterequest()
    {
        return view('admin.category.showdata', ['updatecategories' => UpdateCategory::where('user_id', auth()->id())->get()]);
    }

    public function updaterequest()
    {
        UpdateCategory::updateCategoryflag();
        return view('admin.category.show', ['updatecategories' => UpdateCategory::where('flag', 1)->get()]);
    }

    public function acceptbyadmin($id)
    {
        UpdateCategory::acceptCategory($id);
        return redirect('/category/manage')->with('message', 'Category info updated successfully.');
    }

    public function cancelbyadmin($id)
    {
        UpdateCategory::cancelCategory($id);
        return redirect('/category/updatedRequest')->with('message', 'Category updated info canceled successfully.');
    }

    public function deletebyuser($id)
    {
        UpdateCategory::deleteCategorydata($id);
        return redirect('/category/newUpdatedRequest')->with('message', 'updateCategory info delete successfully.');
    }
//    public function index()
//    {
//        return view('admin.brand.index', [
//            'brands' => Brand::all()
//        ]);
//    }
//
//    public function create()
//    {
//        return view('admin.brand.add');
//    }
//
//
//    public function store(Request $request)
//    {
//        Brand::newBrand($request);
//        return back()->with('message', 'Brand info created successfully.');
//    }
//
//    public function edit($id)
//    {
//        return view('admin.brand.edit', [
//            'brand' => Brand::find($id)
//        ]);
//    }
//
//    public function update(Request $request, $id)
//    {
//        Brand::updateBrand($request, $id);
//        return redirect('/brand/manage')->with('message', 'Brand info update successfully.');
//    }
//
//    public function delete($id)
//    {
//        Brand::deleteBrand($id);
//        return redirect('/brand/manage')->with('message', 'Brand info delete successfully.');
//    }
}
