<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', ['users' => User::all()]);
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        User::newUser($request);
        return back()->with('message', 'User info create successfully.');
    }
    public function edit($id)
    {
        return view('admin.user.edit', ['user' => User::find($id)]);
    }
    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/unit/manage')->with('message', 'Unit info update successfully.');
    }

    public function delete($id)
    {
        User::deleteUser($id);
        return redirect('/unit/manage')->with('message', 'Unit info delete successfully.');
    }
}