@extends('admin.master')
@section('title', 'Add User')

@section('body')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card site-btn text-white">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Add User Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-white-50 fs-4">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="" class="col-md-3 form-label">User Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="" required placeholder="User Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">User role</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <select class="form-select" id="role" required name="role">
                                    <option value="">Select User Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Category Manager">Category Manager</option>
                                    <option value="Brand Manager">Brand Manager</option>
                                    <option value="Unit Manager">Unit Manager</option>
                                    <option value="Product Manager">Product Manager</option>
                                    <option value="Employee">Employee</option>
                                    <!-- Add more options if needed -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">User Email</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="email" class="form-control" required placeholder="User Email" name="email"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">User Password</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="password" class="form-control" required placeholder="User Password" name="password"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">User Image</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="file" class="form-control bg-white" required name="image"/>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn  bg-white text-success col-md-4 mx-auto" type="submit">Create New User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
