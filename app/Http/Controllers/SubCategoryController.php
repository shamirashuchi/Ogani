<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\UpdateCategory;
use App\Models\UpdateSubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index', ['subCateogories' => SubCategory::where('flag', 2)->get()]);
    }

    public function create()
    {
        return view('admin.sub-category.add', [
            'categories' => Category::where('flag', 2)->get()
        ]);

    }

    public function store(Request $request)
    {
        SubCategory::newCategory($request);
        return redirect('/sub-category/newcreatedrequest')->with('message', 'Category info created request go  successfully.');
    }

    public function newcreatedrequest()
    {
        return view('admin.sub-category.newcreatedrequest', ['categories' => SubCategory::where('user_id', auth()->id())
            ->where('flag', '!=', 2)
            ->get()]);
    }

    public function newrequest()
    {
        SubCategory::updateNewCategory();
        return view('admin.sub-category.showNewCategory', ['categories' => SubCategory::where('flag', 1)->get()]);
    }

    public function accept($id)
    {
        SubCategory::acceptCategory($id);
        return redirect('/sub-category/manage')->with('message', 'Category info create successfully.');
    }

    public function cancel($id)
    {
        SubCategory::cancelCategory($id);
        return redirect('/sub-category/newrequest')->with('message', 'Category info cancel successfully.');
    }

    public function deleterequest($id)
    {
        SubCategory::deleteCategory($id);
        return redirect('/sub-category/newcreatedrequest')->with('message', 'Category requested  info delete successfully.');
    }

    public function delete($id)
    {
        SubCategory::deleteCategory($id);
        return redirect('/sub-category/manage')->with('message', 'Category  info delete successfully.');
    }

    public function edit($id)
    {
        return view('admin.sub-category.edit', [
            'categories'    => Category::where('flag', 2)->get(),
            'subCateogory' => SubCategory::find($id)]);
    }

    public function update(Request $request, $id)
    {

        UpdateSubCategory::newCategory($request, $id);
//        SubCategory::updateSubCategory($request, $id);
//        return redirect('/sub-category/manage')->with('message', 'Sub Category info update successfully.');
    }

    public function newupdaterequest()
    {
        return view('admin.sub-category.showdata', ['updatecategories' => UpdateSubCategory::where('user_id', auth()->id())->get()]);
    }

    public function updaterequest()
    {
        UpdateSubCategory::updateCategoryflag();
        return view('admin.sub-category.show', ['updatecategories' => UpdateSubCategory::where('flag', 1)->get()]);
    }

    public function acceptbyadmin($id)
    {
        UpdateSubCategory::acceptCategory($id);
        return redirect('/sub-category/manage')->with('message', 'Category info updated successfully.');
    }

    public function cancelbyadmin($id)
    {
        UpdateSubCategory::cancelCategory($id);
        return redirect('/sub-category/updatedRequest')->with('message', 'Category updated info canceled successfully.');
    }

    public function deletebyuser($id)
    {
        UpdateSubCategory::deleteCategorydata($id);
        return redirect('/sub-category/newUpdatedRequest')->with('message', 'updateCategory info delete successfully.');
    }
//    public function index()
//    {
//        return view('admin.sub-category.index', [
//            'subCateogories' => SubCategory::all()
//        ]);
//    }
//
//    public function create()
//    {
//        return view('admin.sub-category.add', [
//            'categories' => Category::where('flag', 2)->get()
//        ]);
//    }
//
//    public function store(Request $request)
//    {
//        SubCategory::newSubCategory($request);
//        return back()->with('message', 'Sub Category info created successfully.');
//    }
//
//    public function edit($id)
//    {
//        return view('admin.sub-category.edit', [
//            'categories'    => Category::all(),
//            'subCateogory'  => SubCategory::find($id),
//        ]);
//    }
//
//    public function update(Request $request, $id)
//    {
//
//        UpsateSubCategory::updateSubCategory($request, $id);
////        SubCategory::updateSubCategory($request, $id);
////        return redirect('/sub-category/manage')->with('message', 'Sub Category info update successfully.');
//    }
//
//    public function delete($id)
//    {
//        SubCategory::deleteSubCategory($id);
//        return redirect('/sub-category/manage')->with('message', 'Sub Category info delete successfully.');
//    }
}
