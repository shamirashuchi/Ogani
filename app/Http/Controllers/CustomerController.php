<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index', ['customers' => Customer::all()]);
    }

//    public function create()
//    {
//        return view('admin.user.add');
//    }
//
//    public function store(Request $request)
//    {
//        Customer::newUser($request);
//        return back()->with('message', 'User info create successfully.');
//    }
//    public function edit($id)
//    {
//        return view('admin.user.edit', ['user' => Customer::find($id)]);
//    }
//    public function update(Request $request, $id)
//    {
//        Customer::updateUser($request, $id);
//        return redirect('/unit/manage')->with('message', 'Unit info update successfully.');
//    }
//
//    public function delete($id)
//    {
//        Customer::deleteUser($id);
//        return redirect('/unit/manage')->with('message', 'Unit info delete successfully.');
//    }
}
