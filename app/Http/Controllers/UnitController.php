<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Unit;
use App\Models\UpdateCategory;
use App\Models\UpdateUnit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index', ['units' => Unit::where('flag', 2)->get()]);
    }

    public function create()
    {
        return view('admin.unit.add');
    }

    public function store(Request $request)
    {
        Unit::newCategory($request);
        return redirect('/unit/newcreatedrequest')->with('message', 'Unit info created request go  successfully.');
    }

    public function newcreatedrequest()
    {
        return view('admin.unit.newcreatedrequest', ['units' => Unit::where('user_id', auth()->id())->where('flag', '!=', 2)->get()]);
    }

    public function newrequest()
    {
        Unit::updateNewCategory();
        return view('admin.unit.showNewCategory', ['units' => Unit::where('flag', 1)->get()]);
    }

    public function accept($id)
    {
        Unit::acceptCategory($id);
        return redirect('/unit/manage')->with('message', 'unit info create successfully.');
    }

    public function cancel($id)
    {
        Unit::cancelCategory($id);
        return redirect('/unit/newrequest')->with('message', 'Unit info cancel successfully.');
    }

    public function deleterequest($id)
    {
        Unit::deleteCategory($id);
        return redirect('/unit/newcreatedrequest')->with('message', 'Unit requested  info delete successfully.');
    }

    public function delete($id)
    {
        Unit::deleteCategory($id);
        return redirect('/unit/manage')->with('message', 'Unit  info delete successfully.');
    }

    public function edit($id)
    {
        return view('admin.unit.edit', ['unit' => Unit::find($id)]);
    }

    public function update(Request $request, $id)
    {

        UpdateUnit::newCategory($request, $id);
        return redirect('/unit/manage')->with('message', 'Unit info update request go  successfully.');
    }

    public function newupdaterequest()
    {
        return view('admin.unit.showdata', ['updateunits' => UpdateUnit::where('user_id', auth()->id())->get()]);
    }

    public function updaterequest()
    {
        UpdateUnit::updateCategoryflag();
        return view('admin.unit.show', ['updateunits' => UpdateUnit::where('flag', 1)->get()]);
    }

    public function acceptbyadmin($id)
    {
        UpdateUnit::acceptCategory($id);
        return redirect('/unit/manage')->with('message', 'Unit info updated successfully.');
    }

    public function cancelbyadmin($id)
    {
        UpdateUnit::cancelCategory($id);
        return redirect('/unit/updatedRequest')->with('message', 'Unit updated info canceled successfully.');
    }

    public function deletebyuser($id)
    {
        UpdateUnit::deleteCategorydata($id);
        return redirect('/unit/newUpdatedRequest')->with('message', 'updateUnit info delete successfully.');
    }
//    public function index()
//    {
//        return view('admin.unit.index', [
//            'units' =>Unit::all()
//        ]);
//    }
//
//    public function create()
//    {
//        return view('admin.unit.add');
//    }
//
//    public function store(Request $request)
//    {
//        Unit::newUnit($request);
//        return back()->with('message', 'Unit info created successfully.');
//    }
//
//    public function edit($id)
//    {
//        return view('admin.unit.edit', ['unit' => Unit::find($id)]);
//    }
//
//    public function update(Request $request, $id)
//    {
//        Unit::updateUnit($request, $id);
//        return redirect('/unit/manage')->with('message', 'Unit info update successfully.');
//    }
//
//    public function delete($id)
//    {
//        Unit::deleteUnit($id);
//        return redirect('/unit/manage')->with('message', 'Unit info delete successfully.');
////    }
}
