<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\UpdateBrand;
use App\Models\UpdateCategory;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index', ['brands' => Brand::where('flag', 2)->get()]);
    }

    public function create()
    {
        return view('admin.brand.add');
    }

    public function store(Request $request)
    {
        Brand::newCategory($request);
        return redirect('/brand/newcreatedrequest')->with('message', 'Brand info created request go  successfully.');
    }

    public function newcreatedrequest()
    {
        return view('admin.brand.newcreatedrequest', ['categories' => Brand::where('user_id', auth()->id())->where('flag', '!=', 2)->get()]);
    }

    public function newrequest()
    {
        Brand::updateNewCategory();
        return view('admin.brand.showNewCategory', ['categories' => Brand::where('flag', 1)->get()]);
    }

    public function accept($id)
    {
        Brand::acceptCategory($id);
        return redirect('/brand/manage')->with('message', 'Brand info create successfully.');
    }

    public function cancel($id)
    {
        Brand::cancelCategory($id);
        return redirect('/brand/newrequest')->with('message', 'Category info cancel successfully.');
    }

    public function deleterequest($id)
    {
        Brand::deleteCategory($id);
        return redirect('/brand/newcreatedrequest')->with('message', 'Category requested  info delete successfully.');
    }

    public function delete($id)
    {
        Brand::deleteCategory($id);
        return redirect('/brand/manage')->with('message', 'Category  info delete successfully.');
    }

    public function edit($id)
    {
        return view('admin.brand.edit', ['brand' => Brand::find($id)]);
    }

    public function update(Request $request, $id)
    {
        UpdateBrand::newCategory($request, $id);
        return redirect('/brand/manage')->with('message', 'Sub Category info update successfully.');
    }

    public function newupdaterequest()
    {
        return view('admin.brand.showdata', ['updatecategories' => UpdateBrand::where('user_id', auth()->id())->get()]);
    }

    public function updaterequest()
    {
        UpdateBrand::updateCategoryflag();
        return view('admin.brand.show', ['updatecategories' => UpdateBrand::where('flag', 1)->get()]);
    }

    public function acceptbyadmin($id)
    {
        UpdateBrand::acceptCategory($id);
        return redirect('/brand/manage')->with('message', 'Category info updated successfully.');
    }

    public function cancelbyadmin($id)
    {
        UpdateBrand::cancelCategory($id);
        return redirect('/brand/updatedRequest')->with('message', 'Category updated info canceled successfully.');
    }

    public function deletebyuser($id)
    {
        UpdateBrand::deleteCategorydata($id);
        return redirect('/brand/newUpdatedRequest')->with('message', 'updateCategory info delete successfully.');
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
