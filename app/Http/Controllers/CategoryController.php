<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UpdateCategory;
use Illuminate\Http\Request;
//public $category;
class CategoryController extends Controller
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
        return view('admin.category.newcreatedrequest', ['categories' => Category::all()]);
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
        return view('admin.category.showdata', ['updatecategories' => UpdateCategory::all()]);
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
}
