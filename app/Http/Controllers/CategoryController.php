<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UpdateCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', ['categories' => Category::all()]);
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'Category info created successfully.');
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }


    public function verifybeforeedit(Request $request, $id)
    {
        UpdateCategory::newCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info update request go  successfully.');
    }

    public function updateshow()
    {
        UpdateCategory::updateCategoryflag();
        return view('admin.category.show', ['updatecategories' => UpdateCategory::where('flag', 1)->get()]);
    }


    public function updatestart($id)
    {
        UpdateCategory::updateCategorystart($id);
        return redirect('/category/updateshow')->with('message', 'Category info update successfully.');
    }

    public function cancel($id)
    {
        UpdateCategory::cancelCategorystart($id);
        return redirect('/category/updateshow')->with('message', 'Category info cancel successfully.');
    }

    public function requesteddata()
    {
        return view('admin.category.showdata', ['updatecategories' => UpdateCategory::where('user_id', auth()->id())->get()]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info update successfully.');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category info delete successfully.');
    }

    public function deletebyuser($id)
    {
        UpdateCategory::deleteCategorydata($id);
        return redirect('/category/request')->with('message', 'updateCategory info delete successfully.');
    }
}
